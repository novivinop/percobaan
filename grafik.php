<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- chartjs import -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a class="nav-link text-dark" href="status_pendaftaran.php">Status Pendaftaran</a>
                        <a class="nav-link active" aria-current="page" href="#">Grafik Pendaftaran</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Halaman navbar akhir-->
        <h3 class="text-center mb-5 mt-3">Grafik Pendaftaran Beasiswa Mahasiswa</h3>
        <!-- container start -->
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <!-- canvas untuk grafik verifikasi-->
                    <canvas id="myTypeBeasiswa" style="height:70vh; width:70vh; margin:0 auto;"></canvas>
                </div>
                <!-- canvas untuk grafik verifikasi -->
                <div class="col">
                    <canvas id="myVerifikasi" style="height:70vh; width:70vh; margin:0 auto;"></canvas>
                </div>
            </div>
            <script>
                // grafik pendaftaran beasiswa
                const data = {
                    labels: [
                        'Red',
                        'Green',
                        'Yellow',
                        'Grey',
                        'Blue'
                    ],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [11, 16, 7, 3, 14],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(75, 192, 192)',
                            'rgb(255, 205, 86)',
                            'rgb(201, 203, 207)',
                            'rgb(54, 162, 235)'
                        ]
                    }]
                };
                // variabel untuk konfigurasi chart
                const config = {
                    type: 'polarArea',
                    data: data,
                    options: {}
                };
            </script>
        </div>
</body>

</html>