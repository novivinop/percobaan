<?php

include('config.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- container navbar start -->
    <div class="container pt-2">
        <!-- navbar start -->
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
        <!-- navbar end -->
    </div>
    <!-- container navbar end -->

    <!-- container status pendaftaran -->
    <div class="container">
        <!-- card start -->
        <div class="card mt-5">
            <!-- title status pendaftaran -->
            <h4 class="text-center mt-4">Status Pendaftaran Beasiswa Mahasiswa</h4>
            <div class="card-body">
                <?php
                // pengecekan untuk mencetak sesuai dengan status verifikasi
                if (isset($_SESSION['result'])) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['result']; ?>
                        <?php unset($_SESSION['result']); ?>
                    </div>
                    <?php
                }
                ?>
                <!-- table start -->
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kota Asal</th>
                            <th>Nomor Handphone</th>
                            <th>Semester</th>
                            <th>IPK</th>
                            <th>Beasiswa</th>
                            <th>Status</th>
                            <th>Berkas</th>
                            <th>Verifikasi</th>
                            <a href="" ></a>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // mengkoneksi ke database dan mengambil data dari tabel mahasiswa
                        $query = mysqli_query($conn, 'SELECT * FROM mahasiswa');
                        $i = 1;
                        $status = '';
                        
                        // $count = mysqli_num_rows($query);
                        while ($user = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $user['nama'] . "</td>";
                            echo "<td>" . $user['email'] . "</td>";
                            echo "<td>" . $user['kota_asal'] . "</td>";
                            echo "<td>" . $user['nomor_hp'] . " </td>";
                            echo "<td>" . $user['semester'] . " </td>";
                            echo "<td>" . $user['IPK'] . " </td>";
                            echo "<td>" . $user['beasiswa'] . " </td>";
                            echo "<td>". $user['status'] . "</td>";
                            // buton untuk melihat dan download berkas
                            echo "<td>" . "<a href='assets/file/$user[berkas]' class='btn btn-sm btn-primary' target='_blank'>Berkas</a>" . "</td>";
                            // pengecekan untuk memanipulasi button
                            if($user['status'] == "Verifikasi") {
                                echo "<td>" . "<a href='verifikasi.php?id=$user[id]' class='btn btn-danger btn-sm'>Batalkan</a>"  . "</td>";
                            } else {
                                echo "<td>" . "<a href='verifikasi.php?id=$user[id]' class='btn btn-success btn-sm'>Verifikasi</a>"  . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <!-- table end-->
            </div>
        </div>
        <!-- card end -->
    </div>

    <!-- import js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>