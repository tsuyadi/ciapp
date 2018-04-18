<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_master extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getListSekolah()
  {
    // $this->db->select('*');
    // $this->db->from('data_sekolah');
    $sql = "select id, kode_sekolah, nama_sekolah, alamat_sekolah, 
            kelurahan as id_kelurahan, 
            (select nm_kelurahan from kelurahan where id_kelurahan=kelurahan) as nm_kelurahan,
            kecamatan as id_kecamatan,
            (select nm_kecamatan from kecamatan where id_kecamatan=kecamatan) as nm_kecamatan,
            kabupaten as id_kabupaten,
            (select nm_kota_kab from kotakab where id_kota_kab=kabupaten) as nm_kabupaten,
            propinsi as id_propinsi,
            (select nm_propinsi from propinsi where id_propinsi=propinsi) as nm_propinsi,
            kode_pos, akreditasi,
            (select nama from jenis_sekolah where id=jenis_sekolah) as jenis_sekolah
            from data_sekolah";

    $query = $this->db->query($sql);

    if($query->num_rows() != 0)
    {
        return $query->result_array();
    }
    else
    {
        return false;
    }
    
  }

  public function addSekolah($data){

       if($this->db->insert('data_sekolah',$data)){
           return 0;
       }else{
        $error = $this->db->error();
           return 1;
       }      
  }

    public function deleteSekolah($id){

        $sql = "delete from data_sekolah where id=".$id;

        if($this->db->query($sql)){
            return 0;
        }else{
        $error = $this->db->error();
            return 1;
        }      
    }

    public function getListGuru(){
        $query = $this->db->query("select * from pengajar");
            return $query->result_array();
    }

    public function addGuru($data){

        if($this->db->insert('pengajar',$data)){
            return 0;
        }else{
            $error = $this->db->error();
            return 1;
        }      
    }

    public function deleteGuru($id){

        $sql = "delete from pengajar where id=".$id;

        if($this->db->query($sql)){
            return 0;
        }else{
        $error = $this->db->error();
            return 1;
        }      
    }

    public function getListSiswa(){
        $query = $this->db->query("select * from siswa");
            return $query->result_array();
    }

    public function addSiswa($data){

        if($this->db->insert('siswa',$data)){
            return 0;
        }else{
            $error = $this->db->error();
            return 1;
        }      
    }

    public function searchSiswa($id){

        $sql = "select * from siswa where Id=".$id;

        $query = $this->db->query($sql);

        return $query->row();
    }

    public function deleteSiswa($id){

        $sql = "delete from siswa where id=".$id;

        if($this->db->query($sql)){
            return 0;
        }else{
        $error = $this->db->error();
            return 1;
        }      
    }

    public function updateSiswa($data){

        if($this->db->replace('siswa',$data)){
            return 0;
        }else{
            $error = $this->db->error();
            return 1;
        }      
    }

    public function getPropinsi()
    {
        $this->db->select('*');
        $this->db->from('propinsi');
        $query = $this->db->get();

        if($query->num_rows() != 0){
            return $query->result_array();
        }else{
            return false;
        }
    }

  public function getKotaKab($id)
  {
    $this->db->select('*');
    $this->db->from('kotakab');
    $this->db->where('id_propinsi', $id);

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

  public function getKecamatan($id)
  {
    $this->db->select('*');
    $this->db->from('kecamatan');
    $this->db->where('id_kota_kab', $id);

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

  public function getKelurahan($id)
  {
    $this->db->select('*');
    $this->db->from('kelurahan');
    $this->db->where('id_kecamatan', $id);

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


  public function getJenisSekolah()
  {
    $this->db->select('*');
    $this->db->from('jenis_sekolah');
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