<?php 
// koneksi
require 'connection.php';

// ambil data url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM atk WHERE id = $id")[0];

// cek tombol sudah submit atau belum
if(isset($_POST["submit"])) {

// cek data berhasil diubah atau tidak
if(ubah($_POST)>0) {
    echo " 
    <script>
    alert('Data berhasil diubah');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo " 
    <script>
    alert('Data gagal diubah');
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
    <title>Ubah Data Barang</title>
</head>
<h1>Ubah Data Barang</h1>
<form action="" method="post">

    <!-- menghidden kan id biar nanti ke detect -->
    <input type="hidden" name="id" value="<?= $mhs["id"]?>">
    <ul>
        <li>
            <label for="nama">Nama Barang :</label>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
        </li>
        <li>
            <label for="stok">Stok barang :</label>
            <input type="text" name="stok" id="stok" required value="<?= $mhs["stok"];?>">
        </li>
        <li>
            <label for="harga">Harga Barang :</label>
            <input type="number" name="harga" id="harga" required value="<?= $mhs["harga"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data Barang</button>
        </li>
    </ul>
</form>

<body>

</body>

</html>