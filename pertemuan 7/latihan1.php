<?php
// koneksi ke DB & pilih DB
$conn = mysqli_connect('localhost','root','','pabw_a22100081');

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}

$mahasiswa = $rows;
// 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php  $i = 1;

    foreach ($mahasiswa as $m) : ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="150"></td>
      <td><?= $m['nim']; ?></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['email']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>
        <a href="">Ubah</a> | <a href="">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
  
</body>
</html>