<h2><?php echo $title; ?></h2>

<!-- notifikasi -->
<?php if($this->session->flashdata('notifikasi')) : ?>
<div class="alert alert -success"><?php echo $this->session->flashdata('notifikasi'); ?></div>
<?php endif; ?>

<?php echo form_open('mahasiswa/form_edit'); ?>
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