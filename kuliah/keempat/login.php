<?php

session_start();


if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

//ketika klik login
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Form Login</h3>

  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>

  <form action="" method="post">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password" autofocus required>
        </label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <li><a href="registrasi.php">Tambah User</a></li>
    </ul>
  </form>
</body>

</html>