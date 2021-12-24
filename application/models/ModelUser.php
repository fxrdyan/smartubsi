<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{


  //Kelola Mahasiswa
  public function getMahasiswa()
  {
    $this->db->select('*');
    $this->db->where('role_id', '2');
    return $this->db->get('user');
  }
  public function mahasiswaWhere($where)
  {
      return $this->db->get_where('user', $where);
  }
  public function simpanMahasiswa($data = null)
  {
    $this->db->insert('user', $data);
  }
  public function updateMahasiswa($data = null, $where = null)
  {
      $this->db->update('user', $data, $where);
  }
  public function hapusMahasiswa($where = null)
  {
      $this->db->delete('user', $where);
  }
  public function total($field, $where)
  {
      $this->db->select_sum($field);
      if(!empty($where) && count($where) > 0){
          $this->db->where($where);
      }
      $this->db->from('user');
      return $this->db->get()->row($field);
  }


  //Kelola Prodi
  public function getProdi()
  {
   return $this->db->get('prodi');
  }
  public function prodiWhere($where)
  {
   return $this->db->get_where('prodi', $where);
  }
  public function simpanProdi($data = null)
  {
    $this->db->insert('prodi', $data);
  }
  public function hapusProdi($where = null)
  {
      $this->db->delete('prodi', $where);
  }
  

  //Kelola Kelas
  public function getKelas()
  {
   return $this->db->get('kelas');
  }
  public function simpanKelas($data = null)
  {
    $this->db->insert('kelas', $data);
  }
  public function hapusKelas($where = null)
  {
      $this->db->delete('kelas', $where);
  }

  //Kelola Kampus
  public function getKampus()
  {
   return $this->db->get('kampus');
  }
  public function simpanKampus($data = null)
  {
    $this->db->insert('kampus', $data);
  }
  public function hapusKampus($where = null)
  {
      $this->db->delete('kampus', $where);
  }
  


 public function simpanData($data = null)
 {
   $this->db->insert('user', $data);
 }
 public function cekData($where = null)
 {
   return $this->db->get_where('user', $where);
 }
 public function getUserWhere($where = null)
 {
    return $this->db->get_where('user', $where);
 }
 public function cekUserAccess($where = null)
 {
   $this->db->select('*');
   $this->db->from('access_menu');
   $this->db->where($where);
   return $this->db->get();
 }
 public function getUserLimit()
    {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->limit(10, 0);
    return $this->db->get();
    }
      //Join
  public function joinMahasiswaProdi($where)
  {
      $this->db->select('user.id_prodi,prodi.prodi');
      $this->db->from('user');
      $this->db->join('prodi','prodi.id = user.id_prodi');
      return $this->db->get();
  }
   }