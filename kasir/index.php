<?php

require '../admin/config/function.php';
session_start();

if(!isset($_SESSION["login"])){
    echo "<script>
    alert('Login Dulu saayyy')
    document.location.href ='../index.php';
    </script>";
}

$query1 = mysqli_query($konek, "SELECT * FROM tb_orderan");
$pesanan = mysqli_num_rows($query1);

$query2 = mysqli_query($konek, "SELECT * FROM tb_customer");
$customer = mysqli_num_rows($query2);
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php include 'navbar.php'; ?>
<br><br>
    <div class="row">


        <div class="col">
                        <div class="card card-index" style="width: 18rem; height: 10rem; margin-left:90px; background-color: #89CFF0;">
                        <div class="card-body">
                            <h5 class="card-title">Data Orderan</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$pesanan;?></h6>
                        </div>
                        </div>

                        <br><br>

                        <div class="card card-index" style="width: 18rem; height: 10rem; margin-left:90px;  background-color: #89CFF0;">
                        <div class="card-body">
                            <h5 class="card-title">Data Customer</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$customer;?></h6>
                        </div>
                        </div>


        </div>

        <div class="col" style="margin-left:-450px;">

          <img src="assets/img/laundry-tempat.jpeg" width="800vh" alt="" srcset="">

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