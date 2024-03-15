<?php
 include('lib/Database.php');

 class Karyawan{
  public $db;

    public function __construct(){
      $this->db=new Database();
    }

    public function addKaryawan($data){
      $nama=$data['nama'];
      $j_kel=$data['j_kel'];
      $tgl_lahir=$data['tgl_lahir'];

      if(empty($nama) || empty($j_kel) || empty($tgl_lahir)){
        $msg="Tidak boleh ada kolom yang kosong!";
        return $msg;
      }else{
        $query="INSERT INTO karyawan (nama,j_kel,tgl_lahir) VALUES ('$nama','$j_kel','$tgl_lahir')";
        
        $result=$this->db->insert($query);

        if($result){
          $msg="Karyawan berhasil ditambahkan";
          return $msg;
        }else{
          $msg="Gagal menambahkan karyawan";
          return $msg;
        }
      }
    }

    public function viewKaryawan(){
      $query="SELECT * FROM karyawan ORDER BY id ASC";
      $result=$this->db->select($query);
      return $result;
    }

    public function getKaryawan($id){
      $query="SELECT * FROM karyawan WHERE id='$id'";
      $result=$this->db->select($query);
      return $result;
    }

    public function updateKaryawan($data,$id){
      $id=$data['id'];
      $nama=$data['nama'];
      $j_kel=$data['j_kel'];
      $tgl_lahir=$data['tgl_lahir'];

      if(empty($nama) || empty($j_kel) || empty($tgl_lahir)){
        $msg="Tidak boleh ada kolom yang kosong!";
        return $msg;
      }else{
        $query="UPDATE karyawan SET nama='$nama', j_kel='$j_kel', tgl_lahir='$tgl_lahir' WHERE id='$id'";   
        $result=$this->db->update($query);
          if($result){
            $msg="Data karyawan berhasil diubah";
            return $msg;
          }else{
            $msg="Gagal mengubah data karyawan";
            return $msg;
          }
        }
      }

  public function deleteKaryawan($id){
    $del_query = "DELETE FROM karyawan WHERE id='$id'";
    $del = $this->db->delete($del_query);
    if($del){
            $msg="Data karyawan berhasil dihapus";
            return $msg;
          }else{
            $msg="Gagal menghapus data karyawan";
            return $msg;
          }
    }
  }

?>