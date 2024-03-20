<?php 

require '../config/function.php';

$order = $_GET["id"];

if(deleteorder($_POST)>0){
    echo "
    <script>
    alert('Berhasil Hapus Pemesanan');
    document.location.href = '../data-orderan.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('Gagal Hapus Pemesanan');
    document.location.href = '../data-orderan.php'
    </script>
    ";
}

?>