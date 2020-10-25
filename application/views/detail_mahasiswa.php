<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <table border="1" width="45%" cellspacing="0" cellpadding="5">
    <tr>
      <td>NIM</td>
      <td><?php echo $nim_mahasiswa; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?php echo $nama_mahasiswa; ?></td>
    </tr>
  </table>

  <br>
  <a href="<?php echo site_url('Mahasiswa');?>">Kembali</a>
</body>

</html>