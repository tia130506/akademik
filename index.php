<?php
//session | cookies --> tersimpan di browser

session_start();
//cek login  sudah atau belum
if(!isset($_SESSION['login'])){
  header("Location:login.php");
}

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container">
    <a class="navbar-brand" href="#">Akademik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=datamahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=prodi">Data Prodi</a>
        </li>
        <li class="nav-item ms-3">
          <a href="logout.php" onclick="return confirm('Yakin ingin logout?')" class="btn btn-outline">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container my-4">
      <?php
      $page = isset($_GET['page'] ) ? $_GET['page'] : 'home' ;
      
      if($page == 'home') include 'home.php';
      if($page == 'datamahasiswa') include 'mahasiswa/list.php';
      if($page == 'create_mahasiswa') include 'mahasiswa/create.php';
      if($page == 'edit_mahasiswa') include 'mahasiswa/edit.php';
      if($page == 'proses') include 'proses.php';
      if($page == 'prodi') include 'prodi/list.php';
      if($page == 'create_prodi') include 'prodi/create.php';
      if($page == 'edit_prodi') include 'prodi/edit.php';

      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>