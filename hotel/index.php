<?php 
// menghubungkan ke koneksi database
require 'connection.php';

// query ke koneksi database
$bus = query("SELECT * FROM hotel");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Pengunjung Hotel</title>
</head>

<body>
    <h1>Daftar pengunjung hotel</h1>

    <a href="tambah.php">Tambah pengunjung hotel</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Update</th>
            <th>ID Hotel</th>
            <th>Nama Hotel</th>
            <th>No KTP </th>
            <th>Tipe Kamar</th>
            <th>Check in Hotel</th>
            <th>Check Out Hotel</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($bus as $row): ?>
        <tr>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah Data pengunjung hotel</a>|
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Sudah Yakin?');">Hapus
                    Nama Pengunjung Hotel
                </a>
            </td>
            <td> <?= $i; ?> </td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["ktp"];?></td>
            <td><?= $row["tipe"];?></td>
            <td><?= $row["in"];?></td>
            <td><?= $row["out"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>

</html>