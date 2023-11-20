<!DOCTYPE html>
<html>

<head>
  <title>WEBPAM</title>
</head>

<body>
  <center>
    <h3>LAPORAN PENGADUAN MASYARAKAT</h3>
  </center>

  <table border="1" cellspacing="0" cellpadding="10" width="100%">
    <thead>
      <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tanggal Pengaduan</th>
        <th width="300px">Isi Laporan</th>
        <th>Bukti</th>
        <th>Tanggapan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ?>
      <?php foreach ($export as $res) {
      ?>
        <tr>
          <td><?= $res->nik; ?></td>
          <td><?= $res->nama; ?></td>
          <td><?= $res->tgl_pengaduan; ?></td>
          <td><?= $res->isi_laporan; ?></td>
          <td><img class="widget-bg img-responsive" src="<?php echo base_url() ?>assets/img/<?php echo $res->foto ?>" alt="Image" width="200px"></td>
          <td><?= $res->status; ?></td>
        </tr>
        <?php $i++ ?>
      <?php } ?>
    </tbody>
  </table>

</body>

</html>