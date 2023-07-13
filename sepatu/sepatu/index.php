<?php 
// menghubungkan ke koneksi database
require 'connection.php';

// query ke koneksi database
$bus = query("SELECT * FROM sepatu");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Sepatu</title>
</head>

<body>
    <h1>Daftar Stok Sepatu</h1>

    <a href="tambah.php">Tambah Stok Sepatu</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Update</th>
            <th>ID Sepatu</th>
            <th>Nama Sepatu</th>
            <th>Merek Sepatu</th>
            <th>Harga Sepatu</th>
            <th>ukuran Sepatu</th>
            <th>Stok Sepatu</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($bus as $row): ?>
        <tr>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah Stok Sepatu</a>|
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Sudah Yakin?');">Hapus
                    Barang Sepatu
                </a>
            </td>
            <td> <?= $i; ?> </td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["merek"];?></td>
            <td><?= $row["harga"];?></td>
            <td><?= $row["ukuran"];?></td>
            <td><?= $row["stok"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>

</html>