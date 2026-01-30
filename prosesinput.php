<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // query insert data
    $sql = "INSERT INTO tbsiswa (nama, kelas, alamat)
            VALUES ('$nama', '$kelas', '$alamat')";

    $result = mysqli_query($koneksi, $sql);

    // cek apakah query berhasil
    if (!$result) {
        die("Gagal menyimpan data: " . mysqli_error($koneksi));
    }

    mysqli_close($koneksi);

    header("Location: view-data.php");
    exit();
}
?>
