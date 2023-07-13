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
    <title>Tambah Stok Barang</title>
</head>
<h1>Tambah Stok Barang</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama Barang :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="stok">Stok Barang :</label>
            <input type="text" name="stok" id="stok" required>
        </li>
        <li>
            <label for="harga">Harga Barang :</label>
            <input type="number" name="harga" id="harga" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Stok Barang</button>
        </li>
    </ul>
</form>
<script src=""></script>

<body>

</body>

</html>