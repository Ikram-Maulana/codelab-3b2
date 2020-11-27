<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

  // Properti / atribut
  private $nim = '1930511075';
  private $nama = 'Ikram Maulana';

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  } 

  // Ambil NIM
  public function get_nim()
  {
    return $this -> nim;
  }

  // Ambil Nama
  public function get_nama()
  {
    return $this -> nama;
  }

  // Method untuk mengambil semua data mahasiswa
  // Sebagai contoh, return method ini
  // masih berupa array
  public function get_all()
  {
    $query = $this->db->get('tbl_mahasiswa');
    return $query;
  }

  public function get_by_id($id)
  {
    // SELECT * FROM tbl_mahasiswa WHERE id='1
    $this->db->where('id', $id);
    $this->db->from('tbl_mahasiswa');

    $query = $this->db->get();
    return $query->row_array(); // return array
  }

  public function save($data)
  {
    return $this->db->insert('tbl_mahasiswa', $data);
  }

  public function update($data, $id_mahasiswa)
  {
      $this->db->where('id', $id_mahasiswa);
      return $this->db->update('tbl_mahasiswa', $data);
  }

} // End of class Mahasiswa_model