<div class="container">
  <h2><?php echo $title; ?></h2>

  <?php echo form_open('mahasiswa/form_edit/' . $mahasiswa['id']); ?>
  <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">

  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" name="nim" class="form-control" value="<?php echo $mahasiswa['nim'];?>">
    <small class="form-text text-muted">
      <?php echo form_error('nim'); ?>
    </small>
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="<?php echo $mahasiswa['nama'];?>">
    <small class="form-text text-muted">
      <?php echo form_error('nama'); ?>
    </small>
  </div>

  <button class="btn btn-primary">
    Update
  </button>

  <?php echo form_close(); ?>

</div>