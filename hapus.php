<?php
include 'config.php';
// menghapus data berdasarkan id
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tbsiswa WHERE id='$id'");

header("Location: view-data.php");
exit;
?>