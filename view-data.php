<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
include 'config.php';

/* Query untuk mengambil data dari database */
$sql    = "SELECT * FROM tbsiswa";
$result = mysqli_query($koneksi, $sql);
?>

<!-- Tombol kembali -->
<div class="container">
    <a href="index.php"><button>Kembali</button></a>
</div>

<!-- Total data siswa -->
<p style="text-align:center;">
    Total Data Siswa: <b><?= mysqli_num_rows($result); ?></b>
</p>

<?php if (mysqli_num_rows($result) > 0): ?>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['nama']); ?></td>
                        <td><?= htmlspecialchars($row['kelas']); ?></td>
                        <td><?= htmlspecialchars($row['alamat']); ?></td>

                        <td>
                            <a href="hapus.php?id=<?= urlencode($row['id']); ?>">Hapus</a>
                            |
                            <a href="update.php?id=<?= urlencode($row['id']); ?>">Edit</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>

<?php else: ?>

    <p style="text-align:center;">Data tidak ditemukan</p>

<?php endif; ?>

</body>
</html>
