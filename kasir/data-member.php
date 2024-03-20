<?php 
require '../admin/config/function.php';

$qry = mysqli_query($konek, "SELECT * FROM tb_customer");

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

</head>

<body>

<?php include 'navbar.php'; ?>
<br><br>


<div class="container">
                    <h3 class="mt-5 mx-2">Data Customer</h3>
                       <a type="button" href="tambah-member.php" class="btn btn-primary add-data" >
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
                                        <th>Nama Customer</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nomor Telfon</th>
                                        <th>Jenis Customer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($qry as $cust): ?>
                                    <tr>
                                        <td><?=$cust["nama_cust"];?></td>
                                        <td><?=$cust["alamat"];?></td>
                                        <td><?=$cust["jenis_kelamin"];?></td>
                                        <td><?=$cust["no_telf"];?></td>
                                        <td><?=$cust["member"];?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

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