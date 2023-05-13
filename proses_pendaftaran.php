<?php
include('config.php');

session_start();

$nama = $_POST['nama'];
$nomor_hp = $_POST['nomor_hp'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$IPK = $_POST['IPK'];
$beasiswa = $_POST['beasiswa'];
$berkas = $_FILES['berkas']['name'];

$convertLowerCase = strtolower($nama);

if (isset($_POST['daftar'])) {
    // pengecekan untuk data tidak boleh kosong
    if (empty($nama) || empty($nomor_hp) || empty($email) || empty($semester) || empty($IPK) || empty($beasiswa) || empty($berkas)) {
        $_SESSION['message'] = ['Data Tidak Boleh Kosong', 'error'];
        header('location:pendaftaran.php');
    } elseif ($berkas != '') {
        // ekstensi file yang di izinkan upload
        $ext_file_required = array('pdf', 'jpg', 'zip');
        $get_ext_file = explode('.', $berkas);
        // convert ekstensi ke lowercase
        $get_ext = strtolower(end($get_ext_file));
        $get_temp = $_FILES['berkas']['tmp_name'];
        // enkripsi dengan md5 dengan menambhkan tanggal file
        $date = md5(date('Y:m:h h:i:s'));
        $berkasName = $date . '.' . $get_ext;

        if (in_array($get_ext, $ext_file_required) === true) {
            // direktori upload file berkas
            move_uploaded_file($get_temp, 'assets/file/' . $berkasName);
            // koneksi ke database dan memasukkan ke tabel mahasiswa dan di convert ke lowercase 
            $query = mysqli_query($conn, "INSERT INTO mahasiswa VALUES('$convertLowerCase','$nim','$nama','$nomor_hp','$semester','$IPK', '$beasiswa', '$berkasName','$email', 'Belum di Verifikasi')");
            if ($query) {
                // alert jika pendataran berhasil
                $_SESSION['message'] = ["Pendaftaran Berhasil", 'sukses'];
                header('location:hasil.php');
            } else {
                $_SESSION['message'] = ["Pendaftaran Gagal", 'error'];
                header('location:pendaftaran.php');
            }
        } else {
            // alert jika data yang dimasukkan tidak sesuai
            $_SESSION['message'] = ["Berkas yang anda upload bukan JPG / PDF / ZIP", 'error'];
            header('location:pendaftaran.php');
        }
    }
}
