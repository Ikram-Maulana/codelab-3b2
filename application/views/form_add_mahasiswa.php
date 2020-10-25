<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data</title>
</head>

<body>

  <h2>Form Tambah Data</h2>

  <?php echo form_open('mahasiswa/form_add'); ?>
  <label for="nim">NIM</label>
  <br>
  <input type="text" name="nim" value="<?php echo set_value('nim'); ?>">
  <?php echo form_error('nim'); ?>
  <br>
  <label for="nama">Nama</label>
  <br>
  <input type="text" name="nama" value="<?php echo set_value('nama');?>">
  <?php form_error('nama'); ?>
  <br>
  <button type="submit">Save</button>

  <?php echo form_close(); ?>

</body>

</html>