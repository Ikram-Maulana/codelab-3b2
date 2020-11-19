<div class="container mt-5">
  <h2><?php echo $title; ?></h2>

  <div class="card">
    <div class="card-body">
      <a href="<? echo site_url('mahasiswa/form_add'); ?>">Tambah Data</a>

      <!-- notifikasi -->
      <?php if($this->session->flashdata('notifikasi')) : ?>
      <div class="alert alert -success"><?php echo $this->session->flashdata('notifikasi'); ?></div>
      <?php endif; ?>

      <table class="table">
        <tr class="text-center">
          <td>ID</td>
          <td>NIM</td>
          <td>Nama</td>
          <td>Action</td>
        </tr>
        <?php if (is_array($data_mahasiswa) && count($data_mahasiswa) > 0) : ?>
        <?php foreach ($data_mahasiswa as $row) : ?>
        <tr align="center">
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <!-- site_utl langsung manggil index.php -->
          <!-- kalau base url ga manggil index.php, biasanya digunakan ketika udah pake css atau js atau gambar, pdf dll  -->
          <!-- ====================================================================================== -->
          <!-- codelab-3b2/index.php/Mahasiswa/detail/1930511075(misal)/ikram maulana(misal) -->
          <td><a href="<?php echo site_url('Mahasiswa/detail/' . $row['id']);?>">Detail</a> |
            Edit |
            Delete</td>
        </tr>
        <?php endforeach; ?>

        <?php else : ?>
        <tr>
          <td colspan="4" style="text-align: center;">Tidak Ada Data!</td>
        </tr>
        <?php endif; ?>
      </table>

    </div>
  </div>
</div>