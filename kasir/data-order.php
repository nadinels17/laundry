<?php 

require '../admin/config/function.php';

$query = mysqli_query($konek, "SELECT * FROM tb_orderan JOIN tb_customer ON tb_orderan.id_member =
                                    tb_customer.id_member JOIN tb_paket ON tb_orderan.id_paket = tb_paket.id_paket");

?>

<!doctype html>
<html lang="en">

<head>
  <title>B Loundry</title>
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
        
    <div class="row">

        <div class="col">

            <svg class="mx-3" style="margin-top:80px;" xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
            </svg>

        </div>


        <div class="col" style="margin-left:-300px;">

                <h3 class="mt-5">Data Pemesanan</h3>
                            <a type="button" href="tambah-order.php" class="btn btn-primary add-data" >
                                        <svg style="color:black;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                </a>
                            <hr>

                                <!-- TABEL ORDERAN  -->
                                <div class="card mt-5">
                                <div class="card-body">

                                    <table class="table mt-5 mx-2"  style="background-color: #89CFF0;">
                                        <thead class="">
                                            <tr>
                                            <th>Nomor Order</th>
                                            <th>Nama Customer</th>
                                            <th>Jenis Barang</th>
                                            <th>Kilogram</th>
                                            <th>Paket</th>
                                            <th>Tanggal Order</th>
                                            <th>Harga</th>
                                            <th>Status Pesanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query as $order): ?>
                                            <tr>
                                                <td><?=$order["no_order"];?></td>
                                                <td><?=$order["nama_cust"];?></td>
                                                <td><?=$order["jenis_barang"];?></td>
                                                <td><?=$order["kilogram"];?></td>
                                                <td><?=$order["nama_paket"];?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>

                                </div>
                                </div>


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