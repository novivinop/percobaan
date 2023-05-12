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
    <title>Hasil Pendaftaran</title>
</head>

<body>
    <div class="Cointainer">
        <!-- Halaman navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-dark" href="index.php">Pilihan Beasiswa</a>
                        <a class="nav-link text-dark" href="pendaftaran.php">Daftar Beasiswa</a>
                        <a class="nav-link text-dark" href="hasil.php">Hasil Beasiswa</a>
                        <a class="nav-link active" aria-current="page" href="#">Status Pendaftaran</a>
                        <a class="nav-link text-dark" href="grafik.php">Grafik Pendaftaran</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Hasil navbar -->
        <div class="container d-flex justify-content-center">

            <div class="col-md-12 d-flex justify-content-center">
                <div class="card mt-3" style="width: 100%;">
                    <h3 class="text-center mb-5 mt-3">Status Pendaftaran Beasiswa Mahasiswa</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No. Handphone</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">IPK</th>
                                    <th scope="col">Beasiswa</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Berkas</th>
                                    <th scope="col">Verifikasi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Novi Rahmawati</td>
                                    <td>nnodvii@gmaill</td>
                                    <td>024234235253</td>
                                    <td>7</td>
                                    <td>4</td>
                                    <td>Akademik</td>
                                    <td>belum di verifikasi</td>
                                    <td><button type="button" class="btn btn-success">Success</button></td>
                                    <td><button type="button" class="btn btn-primary">Primary</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Novi Rahmawati</td>
                                    <td>nnodvii@gmaill</td>
                                    <td>024234235253</td>
                                    <td>7</td>
                                    <td>4</td>
                                    <td>Akademik</td>
                                    <td>belum di verifikasi</td>
                                    <td><button type="button" class="btn btn-success">Success</button></td>
                                    <td><button type="button" class="btn btn-primary">Primary</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>