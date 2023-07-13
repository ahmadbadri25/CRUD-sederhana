<?php 
// koneksi
require 'connection.php';

// cek tombol sudah submit atau belum
if(isset($_POST["submit"])) {

// cek data berhasil ditambah atau tidak
if(tambah($_POST)>0) {
    echo " 
    <script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo " 
    <script>
    alert('Data gagal ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pememsanan</title>
</head>
<h1>Tambah Pemesanan</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="tlp">Telepon :</label>
            <input type="text" name="tlp" id="tlp" required>
        </li>
        <li>
            <label for="kelas">kelas :</label>
            <input type="kelas" name="kelas" id="kelas" required>
        </li>
        <li>
            <label for="tujuan">Tujuan Perjalanan :</label>
            <input type="tujuan" name="tujuan" id="tujuan" required>
        </li>

        <li>
            <button type="submit" name="submit">Tambah Pemesanan</button>
        </li>
    </ul>
</form>

<body>

</body>

</html>