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
    <title>Tambah Pengunjung Hotel</title>
</head>

<body>
    <h1>Tambah Pengunjung Hotel</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Pengunjung Hotel :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="ktp">No KTP Pengunjung Hotel :</label>
                <input type="number" name="ktp" id="ktp" required>
            </li>
            <li>
                <label for="tipe">Tipe Kamar :</label>
                <input type="text" name="tipe" id="tipe" required>
            </li>
            <li>
                <label for="in">Check IN Pengunjung Hotel :</label>
                <input type="date" name="in" id="in" required>
            </li>
            <li>
                <label for="out">Check Out Pengunjung Hotel :</label>
                <input type="date" name="out" id="out" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Pengunjung Hotel</button>
            </li>
        </ul>
    </form>



</body>

</html>