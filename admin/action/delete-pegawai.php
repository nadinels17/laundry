<?php

require '../config/function.php';

$id=$_GET["id"];

if(deletepegawai($_POST) >0 ){
    echo "
    <script>
    alert('Data Pegawai Berhasil Dihapus')
    document.location.href = '../data-pegawai.php';
    </script>";
}else {
    echo "
    alert('Data Gagal Dihapus')
    document.location.href = '../data-pegawai.php';
    ";
}


?>