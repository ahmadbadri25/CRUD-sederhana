<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "r66");

function query($query) {
    global $conn; 
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// tambah
function tambah($data){
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $harga = htmlspecialchars($data["harga"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $stok = htmlspecialchars($data["stok"]);

    // query insert data
    $query = "INSERT INTO sepatu VALUES('','$nama','$merek','$harga','$ukuran','$stok')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// query hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id"); 
    return mysqli_affected_rows($conn);
}

// query ubah(
function ubah ($data) {
    global $conn;
    
        // ambil data dari tiap elemen dalam form
        $id =  ($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $merek = htmlspecialchars($data["merek"]);
        $harga = htmlspecialchars($data["harga"]);
        $ukuran = htmlspecialchars($data["ukuran"]);
        $stok = htmlspecialchars($data["stok"]);
        // query update data
        $query = "UPDATE sepatu SET
                nama = '$nama',
                merek = '$merek',
                harga = '$harga',
                ukuran = '$ukuran',
                stok = '$stok',
                WHERE id = $id
                ";
        
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
}




?>