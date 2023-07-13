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
    $tlp = htmlspecialchars($data["tlp"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $tujuan = htmlspecialchars($data["tujuan"]);

    // query insert data
    $query = "INSERT INTO tiket VALUES('','$nama','$tlp','$kelas', '$tujuan')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// query hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tiket WHERE id = $id"); 
    return mysqli_affected_rows($conn);
}

// query ubah(
function ubah ($data) {
    global $conn;
    
        // ambil data dari tiap elemen dalam form
        $id =  ($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $tlp = htmlspecialchars($data["tlp"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $tujuan = htmlspecialchars($data["tujuan"]);
        // query update data
        $query = "UPDATE tiket SET
                nama = '$nama',
                tlp = '$tlp',
                kelas = '$kelas',
                tujuan = '$tujuan' 
                WHERE id = $id
                ";
        
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
}




?>