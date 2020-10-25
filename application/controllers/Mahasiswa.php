<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  // Atribut
  public $nim = '1930511075';
  public $nama = 'Ikram Malana';

  // Constructor
  public function __construct()
  {
    parent::__construct();

    // Panggil models
    $this -> load -> model('Mahasiswa_model');

    // 21 Oktober
    // Library form_validation
    // Di commen karena di autoload sudah ditambah code autoload
    // $this->load->library('form_validation');

    // ============= 16 oktober 2020 ========
    // Panggil Helper URL
    // Penggunaan helper form
    $this->load->helper(array('url', 'form'));
    // ====================
    

  }

  // Di sini untuk deklarasi method
  // Cara running di browser
  // localhost/codelab-3b2/index.php/Mahasiswa/index
  public function index()
  {
    // Ini isinya method
    // echo 'ini memanggil kelas mahasiswa method index()';

    // ========= 16 Oktober 2020 =================
    // Menggunakan method get_all()
    $mahasiswa = $this->Mahasiswa_model->get_all();

    // Deklarasi variabel untuk menampung
    // Data Mahasiswa
    $data2 = [
      'data_mahasiswa' => $mahasiswa,
      'title' => "Data Mahasiswa"
    ];

    // Passing Data ke views
    $this->load->view('index_mahasiswa', $data2);
    // ==========================================
  }

  public function tampil_data()
  {
    $nim = $this->Mahasiswa_model->get_nim();
    echo 'NIM = ' . $nim;
  }

  // public function detail()
  // {
  //   $nim = $this -> Mahasiswa_model -> get_nim();
  //   $nama = $this -> Mahasiswa_model -> get_nama();
    
  //   $data = [
  //     'nim_mahasiswa' => $nim,
  //     'nama_mahasiswa' => $nama,
  //     'title' => 'Data Mahasiswa'
  //   ];

  //   // yang kedua($data) itu untuk lempar variable
  //   $this->load->view('detail_mahasiswa', $data);
  // }

  public function detail($param_nim, $param_nama)
  {
    $nim = $param_nim;
    // Raw url decode buat ngilangin %20 jadi spasi
    $nama = urldecode($param_nama);
    
    $data = [
      'nim_mahasiswa' => $nim,
      'nama_mahasiswa' => $nama,
      'title' => 'Data Mahasiswa'
    ];

    // yang kedua($data) itu untuk lempar variable
    $this->load->view('detail_mahasiswa', $data);
  }

  public function form_add()
  {
    // Aturan validasi
    // $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[3]|max_legth[5]');
    $this->form_validation->set_rules('nim', 'NIM', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if($this->form_validation->run() === false){
      $this->load->view('form_add_mahasiswa');
    } else {
      // Ketika sesuai aturan validasi
      $nim = $this->input->post['nim'];
      $nim = $this->input->post['nim'];
      // <br>

      // echo $nim;
      // echo $nama;

      // proses insert

      // set modifikasi

      // alihkan ke halaman utama
      redirect('mahasiswa/index');
    }
  }

} // End class Mahasiswa