<h1>Add Paket</h1>
<form action="<?php echo base_url('Home/add_paket_post'); ?>" method="post">
  Isi Paket<input type="text" name="isi_paket" value=""><br>
  Sasaran <select name="penghuni">
    <?php foreach ($data_penghuni as $value): ?>
      <option value="<?php echo $value->no_ktp; ?>"><?php echo $value->nama; ?></option>
    <?php endforeach; ?>
  </select>
  <br>
  <input type="submit" name="submit" value="submit">
</form>
