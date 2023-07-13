<?php 
require 'connection.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo " 
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data tidak berhasil dihapus');
    document.location.href = 'index.php';
    </script>
    ";
}
?>