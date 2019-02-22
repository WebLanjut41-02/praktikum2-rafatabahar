<?php //print_r($data_paket) ?>

<h1>Data paket yang belum diambil</h1>
<table border="1">
  <thead>
    <th>No</th>
    <th>Nama Penghuni</th>
    <th>Penerima</th>
    <th>Isi Paket</th>
    <th>Tanggal Terima</th>
    <th>Tanggal Ambil</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php foreach ($data_paket as $key => $value): ?>
      <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $value->nama_penghuni; ?></td>
        <td><?php echo $value->nama; ?></td>
        <td><?php echo $value->isi_paket; ?></td>
        <td><?php echo $value->tanggal_datang; ?></td>
        <td><?php echo ($value->tanggal_ambil=="NULL") ? "Belum Diambil" : $value->tanggal_ambil ; ?></td>
        <td><a href="<?php echo base_url('Home/update_paket/'.$value->id_paket); ?>"><?php echo ($value->tanggal_ambil=="NULL") ? "AMBIL PAKET !!" : '' ; ?></a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
