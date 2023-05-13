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
    <title>Pendaftaran</title>
</head>

<body>
    <div class="Cointainer">
        <!-- Halaman navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-dark" href="index.php">Pilihan Beasiswa</a>
                        <a class="nav-link active" aria-current="page" href="#">Daftar Beasiswa</a>
                        <a class="nav-link text-dark" href="hasil.php">Hasil Beasiswa</a>
                        <a class="nav-link text-dark" href="status_pendaftaran.php">Status Pendaftaran</a>
                        <a class="nav-link text-dark" href="grafik.php">Grafik Pendaftaran</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Halaman navbar akhir-->
        <h5 class="text-center mt-5">DAFTAR BEASISWA</h5>
        <!-- container start -->
        <div class="container mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card mt-3 px-3 mb-5" style="width: 50%;">
                    <div class="border-bottom mt-3">
                        <!-- title form -->
                        <p>Registrasi Beasiswa</p>
                    </div>
                    <div class="card-body">
                        <!-- awal form -->
                        <form>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-4 col-form-label">Masukkan Nama<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nim" class="col-sm-4 col-form-label">NIM<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="nim" class="form-control" id="nim">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-4 col-form-label">Masukkan Email<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nomor_hp" class="col-sm-4 col-form-label">Nomor HP<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="nomor_hp" class="form-control" id="nomor_hp">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="semester" class="col-sm-4 col-form-label">Semester Saat Ini<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                <select class="form-select" name="semester" id= "semester" onclick="generateipk()" required>
                                    <option value="1" disabled selected>-- Pilih Semester--</option>
                                    <!-- perulangan untuk pemilihan semester  -->
                                    <?php
                                    for ($i = 1; $i < 9; $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="IPK" class="col-sm-4 col-form-label">IPK Terakhir<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="IPK" class="form-control" id="IPK">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="beasiswa" class="col-sm-4 col-form-label">Pilihan Beasiswa<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                <select name="beasiswa" class="form-select" id="beasiswa" disabled=false>
                                    <option selected>-- Pilih Beasiswa --</option>
                                    <option value="akademik">Akademik</option>
                                    <option value="non">Non Akademik</option>
                                </select>
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="berkas" class="col-sm-4 col-form-label">Upload Berkas<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="berkas" type="file" id="berkas">
                                </div>
                            </div>
                            <div class="mt-4 mb-2 d-flex justify-content-end row">
                                <button class="col-5 btn btn-info text-white" id="daftar" name="daftar" disabled='false'>Daftar</button>
                                <a href="index.php" class="col-5 btn btn-outline-secondary offset-2" id="cancel" disabled='false'>Cancel</a>
                            </div>
                        </form>
                        <!-- Akhir form -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- script for generate ipk -->
    <script>
        // function untuk mengenerate ipk dengan button enable dan disable
        function generateipk() {
            const max = 3
            const min = 1
            // gnenerate dengan fungsi math dan random serta fixed
            const ipk = Math.random().toFixed(1) * max - min + 2;
            // mengambil id untuk memanipulasi button
            document.getElementById('ipk').value = ipk;
            if (ipk >= 3.0) {
                document.getElementById('beasiswa').disabled = false;
                document.getElementById('berkas').disabled = false;
                document.getElementById('daftar').disabled = false;
            } else {
                document.getElementById('beasiswa').disabled = true;
                document.getElementById('berkas').disabled = true;
                document.getElementById('daftar').disabled = true;
            }
        }
    </script>
</body>

</html>