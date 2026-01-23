<!-- Koneksi ke database -->
<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbsiswa");

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>