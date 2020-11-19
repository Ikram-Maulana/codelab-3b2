<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  // Atribut
  public $nim = '1930511075';
  public $nama = 'Ikram Maulana';

  // Constructor
  // agar tidak berulang" menuliskan this load yang sama 
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
    
    $this->load->library(['session', 'form_validation']);

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
    $mahasiswa = $this->Mahasiswa_model->get_all()
    ->result_array();

    // // Deklarasi variabel untuk menampung
    // // Data Mahasiswa
    $data2 = [
      'data_mahasiswa' => $mahasiswa,
      'title' => "Data Mahasiswa"
    ];

    // // Passing Data ke views
    // // 5 November 2020
    $this->load->view('layout/header', $data2); //static
    $this->load->view('layout/navbar', $data2); // static
    $this->load->view('index_mahasiswa', $data2); //dinamis
    $this->load->view('layout/footer', $data2); // static
    // // ==========================================
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

  public function detail($param_id)
  {
    // $nim = $param_nim;
    // // Raw url decode buat ngilangin %20 jadi spasi
    // $nama = urldecode($param_nama);
    $mahasiswa = $this->Mahasiswa_model->get_by_id($param_id); // Mengambil data berdasarkan id
    
    $data = [
      'nim_mahasiswa' => $mahasiswa['nim'],
      'nama_mahasiswa' => $mahasiswa['nama'],
      'title' => 'Data Mahasiswa'
    ];

    // yang kedua($data) itu untuk lempar variable
    $this->load->view('layout/header', $data); //static
    $this->load->view('layout/navbar', $data); // static
    $this->load->view('detail_mahasiswa', $data); //dinamis
    $this->load->view('layout/footer', $data); // static
  }

  public function form_add()
  {
    // Aturan validasi
    // $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[3]|max_legth[5]');
    $this->form_validation->set_rules('nim', 'NIM', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if($this->form_validation->run() === false){

      $data = [
          'title' => 'Form Tambah Mahasiswa'
      ];
      $this->load->view('layout/header', $data); //static
      $this->load->view('layout/navbar', $data); // static
      $this->load->view('form_add_mahasiswa', $data); //dinamis
      $this->load->view('layout/footer', $data); // static
    } else {
      // Ketika inputan sesuai
      $nim = $this->input->post('nim');
      $nama = $this->input->post('nama');

      // TAmpung di $mahasiswa
      $mahasiswa =
      [
        'nim' => $nim,
        'nama' => $nama
      ];

      // insert data
      $save = $this->Mahasiswa_model ->save($mahasiswa);

      if ($save) {
        // set notifikasi
        $this->session->set_flashdata('notifikasi', 'Data berhasil disimpan');

        // Alihkan ke halaman index
        redirect('mahasiswa');
      } else {
        $this->session->set_flashdata('notifikasi', 'Data gagal disimpan');

        // alihkan ke halaman form
        redirect('mahasiswa/form_add');
      }


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