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
    $ktp = htmlspecialchars($data["ktp"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $in = htmlspecialchars($data["in"]);
    $out = htmlspecialchars($data["out"]);

    // query insert data
    $query = "INSERT INTO hotel VALUES('','$nama','$ktp','$tipe','$in','$out')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// query hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM hotel WHERE id = $id"); 
    return mysqli_affected_rows($conn);
}

// query ubah(
function ubah ($data) {
    global $conn;
    
        // ambil data dari tiap elemen dalam form
        $id =  ($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $ktp = htmlspecialchars($data["ktp"]);
        $tipe = htmlspecialchars($data["tipe"]);
        $in = htmlspecialchars($data["in"]);
        $out = htmlspecialchars($data["out"]);
        // query update data
        $query = "UPDATE hotel SET
                nama = '$nama',
                ktp = '$ktp',
                tipe = '$tipe',
                in = '$in',
                out = '$out',
                WHERE id = $id
                ";
        
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
}




?>