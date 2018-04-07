<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function cekLogin($username, $password)//, $level)
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('username', $username);
    $this->db->or_where('email', $username);
    $query = $this->db->get();

    $no_of_rows = $query->num_rows();

    if($no_of_rows > 0){
        $result = $query->row();
        $salt = $result->salt;
        $encrypted_password = $result->password;
        $hash = $this->checkhashSSHA($salt, $password);

        if($encrypted_password == $hash){
            return $result;
        }else{
            return false;
        }
    }else{
        return false;
    }  
    
  }
  
  
  public function getDataUser($username)
  {
	$this->db->select('*');
   $this->db->where('username', $username);
   $query = $this->db->get('users');

   return $query->row();
  }

  /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }


    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }

}  

?>