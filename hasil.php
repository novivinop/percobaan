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
    <div class="container pt-2">
        <!-- Halaman navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-dark" href="index.php">Pilihan Beasiswa</a>
                        <a class="nav-link text-dark" href="pendaftaran.php">Daftar Beasiswa</a>
                        <a class="nav-link active" aria-current="page" href="#">Hasil Beasiswa</a>
                        <a class="nav-link text-dark" href="status_pendaftaran.php">Status Pendaftaran</a>
                        <a class="nav-link text-dark" href="grafik.php">Grafik Pendaftaran</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Hasil navbar -->
        <div class="container d-flex justify-content-center">

            <div class="col-md-12 d-flex justify-content-center">
                <div class="card mt-3" style="width: 100%;">
                    <h3 class="text-center mb-5 mt-3">Hasil Beasiswa</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <?php
                                include('config.php');
                                // koneksi ke database dan ambil data dari tabel mahasiswa dan diurutkan secara descending
                                $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
                                $user = mysqli_fetch_assoc($query);
                                ?>
                                <!-- memasukkan data dari tabel mahasiswa ke setiap kolom nama, email dst -->
                                <tr>
                                    <td style="width:20%">Nama</td>
                                    <td><?= $user['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">NIM</td>
                                    <td><?= $user['nim'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Email</td>
                                    <td><?= $user['email'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Kota Asal</td>
                                    <td><?= $user['kota_asal'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Nomor Handphone</td>
                                    <td><?= $user['nomor_hp'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Semester</td>
                                    <td><?= $user['semester'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">IPK</td>
                                    <td><?= $user['IPK'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Beasiswa</td>
                                    <td><?= $user['beasiswa'] ?></td>
                                </tr>
                                <tr class="border">
                                    <td style="width:20%">Status</td>
                                    

                                    <?php
                                    // pengecekan untuk mencetak status verfikasi
                                    if ($user['status'] == "Verifikasi") {
                                        echo '
                                        <td class="badge bg-success mt-2">
                                        Verifikasi
                                         </td>';
                                    } else {
                                        echo '
                                        <td class="badge bg-warning mt-2">
                                        Belum di Verifikasi
                                        </td>';
                                    }
                                    ?>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>