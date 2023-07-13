<?php 
// koneksi
require 'connection.php';

// ambil data url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM hotel WHERE id = $id")[0];

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
    <title>Ubah Data Pengunjung Hotel</title>
</head>

<body>
    <h1>Ubah Data Pengunjung Hotel</h1>
    <form action="" method="post">

        <!-- menghidden kan id biar nanti ke detect -->
        <input type="hidden" name="id" value="<?= $mhs["id"]?>">
        <ul>
            <li>
                <label for="nama">Nama Pengunjung Hotel :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="ktp">NIK Pengunjung Hotel :</label>
                <input type="number" name="ktp" id="ktp" required value="<?= $mhs["ktp"];?>">
            </li>
            <li>
                <label for="tipe">Tipe Kamar Pengunjung Hotel :</label>
                <input type="text" name="tipe" id="tipe" required value="<?= $mhs["tipe"];?>">
            </li>
            <li>
                <label for="in">Check In Pengunjung Hotel :</label>
                <input type="date" name="in" id="in" required value="<?= $mhs["in"];?>">
            </li>
            <li>
                <label for="out">Check Out Pengunjung Hotel :</label>
                <input type="date" name="out" id="out" required value="<?= $mhs["out"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data Pengunjung Hotel</button>
            </li>
        </ul>
    </form>



</body>

</html>