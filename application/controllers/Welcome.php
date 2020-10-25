<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  // Cara Manggilnya
  // localhost/[nama_folder]/index.php/[nama_controller]/[nama_function]
	public function index()
	{
    // $this = Welcome class memanggil function load kemudian memanggil lagi tampilan welcome_message.php
    // $this->load->view('welcome_message');
    $this->load->view('tes_view');
  }
  
  // Cara Manggilnya
  // localhost/[nama_folder]/index.php/Welcome/tes
  public function tes()
  {
    echo 'ini memanggil method tes()';
  }
}