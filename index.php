<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BEASISWA</title>
</head>
<body>
    <div class="Cointainer">
    <div class="container pt-2">
        <!-- Halaman navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Pilihan Beasiswa</a>
        <a class="nav-link" href="pendaftaran.php">Daftar Beasiswa</a>
        <a class="nav-link" href="hasil.php">Hasil Beasiswa</a>
        <a class="nav-link" href="status_pendaftaran.php">Status Pendaftaran</a>
        <a class="nav-link" href="grafik.php">Grafik Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<!-- Card -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-4 justify-content-center">
  <div class="col">
    <div class="card h-100">
      <img src="./assets/image/img_beasiswa.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title ">Beasiswa Akademik</h5>
        <p class="card-text">Beasiswa akademik merupakan beasiswa yang diberikan oleh institusi setiap tahun kepada mahasiswa aktif dan berprestasi dalam bidang akademik.</p>
        <p style="font-size:13px"><span class="text-danger">*)</span> IPK harus diatas 3.0</p> 
   
    <a href="pendaftaran.php" class="btn btn-info w-100 text-white fw-semibold">Daftar</a>
    </div>  
  </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./assets/image/img_volly.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beasiswa non Akademik</h5>
        <p class="card-text">Beasiswa non akademik merupakan beasiswa yang diberikan oleh institusi setiap tahun kepada mahasiswa aktif dan berprestasi dalam bidang olahraga dan seni.</p>
        <p style="font-size:13px"><span class="text-danger">*)</span> IPK harus diatas 3.0</p>  
        <a href="pendaftaran.php" class="btn btn-info w-100 text-white fw-semibold">Daftar</a>
    </div>
  </div>
</div>
    </div>
</body>
</html>