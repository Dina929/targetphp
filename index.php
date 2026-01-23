<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XI RPL 2</title>
</head>

<body>
    <?php
    // Koneksi ke database
    include 'config.php';
    ?>
    <!-- form inputan -->
    <form action="prosesinput.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Kelas</label>
        <input type="text" name="kelas">
        <label>No Hp</label>
        <input type="text" name="nohp">
        <label>Alamat</label>
        <input type="text" name="alamat">


        <input type="submit" value="Kirim">
    </form>

</body>

</html>