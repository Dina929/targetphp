<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // insert data ke database
    $sql = "INSERT INTO tbsiswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    $result = mysqli_query($koneksi, $sql);

    // Tutup koneksi
    mysqli_close($koneksi);

    // Redirect ke halaman index.php
    header("Location: view-data.php");
    exit();
}
?>