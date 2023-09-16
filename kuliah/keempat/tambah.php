<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//cek tombol
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data Gagal Ditambahkan";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Data Tambah Mahasiswa</h3>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li><label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label></li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" autofocus class="gambar" onchange="previewImage()">
          <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>

</body>

</html>