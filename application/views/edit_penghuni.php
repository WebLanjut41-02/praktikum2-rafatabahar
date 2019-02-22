<h1>Tambah Penghuni</h1>
<form action="<?php echo base_url('Penghuni/edit_penghuni_post'); ?>" method="post">
  Nama <input type="text" name="nama" value="<?php echo $data_penghuni->nama ?>"><br>
  No KTP<input type="text" name="no_ktp" value="<?php echo $data_penghuni->no_ktp ?>" readonly><br>
  Unit<input type="text" name="unit" value="<?php echo $data_penghuni->unit ?>"><br>
  <input type="submit" name="submit" value="submit">
</form>
