<?php 
require '../config/function.php';

$paket = $_GET["id"];

if(deletepaket($paket) > 0){
    echo "
    <script>
    alert('Data Berhasil Dihapus')
    documnet.location.href = '../data-paket.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus')
    documnet.location.href = '../data-paket.php';
    </script>
    ";
}



?>