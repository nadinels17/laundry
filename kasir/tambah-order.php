<?php

require '../admin/config/function.php';

if(isset($_POST["kirim"])){
  if(tambahorder($_POST)) {
    echo "<script>
    alert('Pesanan berhasil ditambah')
    document.location.href = 'data-order.php'
    </script>";
  } else {
    echo "<script>
    alert('Pesanan gagal ditambah')
    document.location.href = 'data-order.php'
    </script>";
  }
}


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

<?php include 'navbar.php'; ?>
<br><br>


<div class="container">

<h3 class="mt-5">Tambah Data Orderan</h3>
<hr>

<a class="link-back" href="data-order.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></a>

    <div class="card mt-5">
        <div class="card-body">
        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nomor Order</label>
                                <input name="no_order" type="number" class="form-control">
                            </div>
                            <!-- form group untuk nama -->
                            <select class="form-select" name="id_pelanggan" id="id_pelanggan" aria-label="Default select example">
                                <option value="-" class="text-muted">Pilih Nama Customer</option>
                                <?php
                                    $qry = mysqli_query($konek, "SELECT * FROM tb_customer") or die(mysqli_error($konek));
                                    while ($data = mysqli_fetch_array($qry)) {
                                ?>
                                    <option value="<?= $data['id_member']; ?>"><?= $data['nama_cust']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <br>
                            <div class="mb-3">
                                <label class="form-label">Jenis Barang</label>
                                <input name="barang" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kilogram</label>
                                <input name="kilo" type="number" class="form-control">
                            </div>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option selected>Status Pemesanan</option>
                                <option value="konfirmasi">Konfirmasi</option>
                                <option value="proses">Di Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                             <br>
                            <!-- form group untuk nama -->
                            <select class="form-select" name="paket" id="paket" aria-label="Default select example">
                                <option value="-" class="text-muted">Pilih Jenis Paket</option>
                                <?php
                                    $query = mysqli_query($konek, "SELECT * FROM tb_paket") or die(mysqli_error($konek));
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $data['id_paket']; ?>"><?= $data['nama_paket']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <br>
                            <button name="kirim" type="submit" class="btn btn-primary">Submit</button>
                        </form>
        </div>
</div>


<br><br>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>