<?php //print_r($data_paket) ?>

<h1>Data penghuni</h1>
<a href="<?php echo base_url('Penghuni/add') ?>">Tambah Penghuni Baru</a><br>

<table border="1">
  <thead>
    <th>No</th>
    <th>Nama Penghuni</th>
    <th>PO KTP</th>
    <th>Unit</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php foreach ($data_penghuni as $key => $value): ?>
      <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $value->nama; ?></td>
        <td><?php echo $value->no_ktp; ?></td>
        <td><?php echo $value->unit; ?></td>
        <td><a href="<?php echo base_url('Penghuni/edit/'.$value->no_ktp); ?>">Edit</a> | <a href="<?php echo base_url('Penghuni/hapus/'.$value->no_ktp); ?>">Hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
