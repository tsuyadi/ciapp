<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_master extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getListSekolah()//, $level)
  {
    $this->db->select('*');
    $this->db->from('data_sekolah');
    $query = $this->db->get();

    if($query->num_rows() != 0)
    {
        return $query->result_array();
    }
    else
    {
        return false;
    }
    
  }


}  

?>