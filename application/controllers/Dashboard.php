<?php
defined('BASEPATH') or exit('No dirrect access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    // Load helper url
    $this-> load -> helper('url');

  }

  public function index()
  {
    $data = [
      'title' => 'Dashboard SIAK',
      'content' => 'Selamat datang di dashboard SIAK'
    ];

    $this->load->view('layout/header', $data);
    $this->load->view('layout/navbar', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('layout/footer', $data);
  }

} // End of dashboard kelas