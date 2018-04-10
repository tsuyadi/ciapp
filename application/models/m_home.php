<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_home extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getMenu($level)//, $level)
  {
    $this->db->select('*');
    $this->db->from('sys_menu a ');
    $this->db->join('sys_menu_tree b', 'b.menu_id=a.menu_id', 'inner');
    $this->db->where('b.user_level', $level);
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