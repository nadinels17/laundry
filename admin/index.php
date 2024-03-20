<?php
require 'config/function.php';
session_start();

if(!isset($_SESSION["login"])){
    echo "<script>
    alert('Login Dulu saayyy')
    document.location.href ='../index.php';
    </script>";
}


$query1 = mysqli_query($konek, "SELECT * FROM tb_pegawai");
$pegawai = mysqli_num_rows($query1);

$query2 = mysqli_query($konek, "SELECT * FROM tb_orderan WHERE status_order = 'proses' ");
$proses = mysqli_num_rows($query2);

$query3 = mysqli_query($konek, "SELECT * FROM tb_orderan");
$pesanan = mysqli_num_rows($query3);
?>

<!doctype html>
<html lang="en">
    
<head>
  <title>Briynee Loundry</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="row">

        <div class="col">
        <?php include 'sidebar.php'; ?>
        </div>

        <div class="col" style="margin-left: -850px;">

        <div class="container mt-5">

        <!-- CARD JUMLAH DATA -->
                <div class="row">
                    <div class="col mx-3">
                        <div class="card card-index" style="width: 18rem; height: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Pegawai</h5>
                            <h4 class="card-subtitle mb-2 text-body-secondary rows-data"><?= $pegawai;?></h4>
                        </div>
                        </div>
                    </div>

                    <div class="col" style="margin-left: -40px;">
                        <div class="card card-index" style="width: 18rem; height: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">Orderan Diproses</h5>
                            <h4 class="card-subtitle mb-2 text-body-secondary rows-data"><?= $proses;?></h4>
                        </div>
                        </div>
                    </div>

                    <div class="col" style="margin-left: -20px;">
                        <div class="card card-index" style="width: 18rem; height: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">Semua Orderan</h5>
                            <h4 class="card-subtitle mb-2 text-body-secondary rows-data"><?=$pesanan?></h4>
                        </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <img src="assets/img/laundry-tempat.jpeg" width="1050px;" alt="logo"  >

        </div>
        </div>
</div>







  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>