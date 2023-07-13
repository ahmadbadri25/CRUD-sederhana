<?php 
// menghubungkan ke koneksi database
require 'connection.php';

// query ke koneksi database
$bus = query("SELECT * FROM tiket");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pemesanan Bus</title>
</head>

<body>
    <h1>Daftar Pemesanan Tiket</h1>

    <a href="tambah.php">Tambah Pemesanan</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Aksi</th>
            <th>Tiket</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Kelas</th>
            <th>Tujuan Perjalanan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($bus as $row): ?>
        <tr>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah Pemesanan</a>|
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Sudah Yakin?');">Hapus</a>

            </td>
            <td> <?= $i; ?> </td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["tlp"];?></td>
            <td><?= $row["kelas"];?></td>
            <td><?= $row["tujuan"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>

</html>