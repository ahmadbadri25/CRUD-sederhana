<?php 
// koneksi
require 'connection.php';

// ambil data url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM sepatu WHERE id = $id")[0];

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
    <title>Ubah Data Sepatu</title>
</head>

<body>
    <h1>Ubah Data Sepatu</h1>
    <form action="" method="post">

        <!-- menghidden kan id biar nanti ke detect -->
        <input type="hidden" name="id" value="<?= $mhs["id"]?>">
        <ul>
            <li>
                <label for="nama">Nama Sepatu :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="merek">Merek Sepatu :</label>
                <input type="text" name="merek" id="merek" required value="<?= $mhs["merek"];?>">
            </li>
            <li>
                <label for="harga">Harga Sepatu :</label>
                <input type="number" name="harga" id="harga" required value="<?= $mhs["harga"];?>">
            </li>
            <li>
                <label for="ukuran">Ukuran Sepatu :</label>
                <input type="number" name="ukuran" id="ukuran" required value="<?= $mhs["ukuran"];?>">
            </li>
            <li>
                <label for="stok">Stok barang :</label>
                <input type="number" name="stok" id="stok" required value="<?= $mhs["stok"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data Sepatu</button>
            </li>
        </ul>
    </form>



</body>

</html>