<?php 

require '../config/function.php';

$id = $_GET["id"];

if(deletememb($_POST) >0) {
    echo "<script>
    alert('Customer Berhasil Dihapus')
    document.location.href= '../data-member.php';
   </script> ";
}else{
    echo "<script>
    alert('Customer gagal Dihapus')
    document.location.href = 'delete-member.php';
    </script>";
}
?>