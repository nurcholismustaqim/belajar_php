<?php

require 'functions.php';

//jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//ambil data by id
$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");

//cek tombol
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data Gagal Diubah";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Data Ubah Mahasiswa</h3>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li><label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label></li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" autofocus required value="<?= $m['nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" autofocus required value="<?= $m['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" autofocus required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
          Gambar :
          <input type="file" name="gambar" autofocus class="gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $m['gambar']; ?>" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>

</body>

</html>