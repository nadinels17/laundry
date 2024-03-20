<?php

require 'config/function.php';

$id = $_GET["id"];

$detail = mysqli_query($konek, "SELECT * FROM tb_orderan JOIN tb_customer ON tb_orderan.id_member = tb_customer.id_member
                                JOIN tb_paket ON tb_orderan.id_paket = tb_paket.id_paket  WHERE no_order = '$id'");


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

</head>

<body>
<div class="container">
  <button class="btn btn-info mt-3" onclick="pdf()">EXPORT TO PDF</button>
</div>

<center>
    <div class="card mt-5" style="width:80vh;">
      <div class="card-body">
        <?php foreach($detail as $data) : ?>
          <h1>DETAIL INVOICE</h1>
          <h3><?=$data["no_order"];?></h3>
          <h5><?=$data["nama_cust"];?></h5>

          <hr>

          <b><p>Jenis Barang</p></b>
          <p><?=$data["jenis_barang"];?></p>
          <br>

          <b><p>Jumlah Kilogram</p></b>
          <p><?=$data["kilogram"];?>kg</p>
          <br>

          <b><p>Paket</p></b>
          <p><?=$data["nama_paket"];?></p>
          <br>

          <b><p>Alamat</p></b>
          <p><?=$data["alamat"];?></p>
          <br>

          <b><p>Nomor Telefon</p></b>
          <p><?=$data["no_telf"];?></p>
          <br>

          <b><p>Tanggal Order</p></b>
          <p><?=$data["waktu_order"];?></p>
          <br>

          <hr><br>

          <div class="row">
            <div class="col">
              <b><p>Status Pemesanan</p></b>
              <br>
              <b><p>Harga</p></b>
            </div>

            <div class="col">
              <p><?=$data["status_order"];?></p>
              <br>
              <p><?=$data["harga"];?></p>
            </div>
          <?php endforeach ?>
          </div>
          
      </div>
    </div>
</center>

<br><br>

   
<script>
  function pdf(){
    window.print();
  }
</script>
    




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>