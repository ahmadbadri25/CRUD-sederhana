<?php 
// menghubungkan ke koneksi database
require 'connection.php';

// query ke koneksi database
$bus = query("SELECT * FROM atk");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar ATK</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Daftar Stok ATK</h1>

    <a href="tambah.php">Tambah Stok ATK</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Update</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($bus as $row): ?>
        <tr>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah Stok barang</a>|
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Sudah Yakin?');">Hapus
                    Barang
                </a>
            </td>
            <td> <?= $i; ?> </td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["stok"];?></td>
            <td><?= $row["harga"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>

</html>