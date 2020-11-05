<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
  

  // Properti / atribut
  private $nim = '1930511075';
  private $nama = 'Ikram Maulana';

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
    return [
      [
        'id' => 1,
        'nim' => '1930511075',
        'nama' => 'Ikram Maulana'
      ],
      [
        'id' => 2,
        'nim' => '1930611140',
        'nama' => 'Siapa ya'
      ],
      [
        'id' => 3,
        'nim' => '1930511000',
        'nama' => 'Hamba Sahaya'
      ],
      [
        'id' => 4, 
        'nim' => '202020200',
        'nama' => 'maba'
      ]
      ];
  }

} // End of class Mahasiswa_model