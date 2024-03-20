

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
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <div class="row">
        


        <div class="col">
            <?php include '../sidebar.php'; ?>
        </div>


        <div class="col" style="margin-left: -850px;">

        <div class="container">

            <h3 class="mt-5">Update Data Paket</h3>
            <hr>

            <?php 

                require '../config/function.php';
                if(isset($_POST["kirim"])){
                    if(updatepaket($_POST) >0 ){
                        echo "
                        <script>
                        alert('Data Paket Diedit')
                        document.location.href = '../data-paket.php';
                        </script>
                        ";
                    } else { "
                        <script>
                        alert('Data Gagal Diedit)
                        document.location.href = 'update-paket.php';
                        </script>";
                    }
                }

                global $konek;
                $paket= $_GET["id"];

                $qry = mysqli_query($konek, "SELECT * FROM tb_paket WHERE id_paket='$paket'");
                ?>


            <a class="link-back" href="data-paket.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg></a>

                <div class="card mt-5">
                    <div class="card-body">
                        <?php foreach($qry as $paket):?>
                        <form method="POST">
                            <input type="hidden" value="<?=$paket["id_paket"];?>">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Paket</label>
                                <input value="<?=$paket["nama_paket"];?>" name="nama_paket" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input value="<?=$paket["harga"];?>" name="harga" type="number" class="form-control">
                            </div>
        <br>
                            <button name="kirim" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
    <br>
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