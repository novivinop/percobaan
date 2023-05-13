<?php
// define hostname, username, password, dbname
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_mahasiswa';

// koneksi ke database dengan definename
// $conn = mysqli_connect($hostname, $username, $password, $dbname);

// // pengecekan koneksi  ke database
// if(!$conn) {
//     echo "koneksi gagal" + mysqli_connect_error();
// }

// //test conection
try {
    $conn = new PDO("mysql:host=$servername;db_mahasiswa=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>