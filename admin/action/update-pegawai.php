<?php 
   require '../config/function.php';
            
    if(isset($_POST['kirim'])){
        if(updatepegawai($_POST) > 0) {
            echo"
            <script>
            alert('Data Pegawai Berhasil Diedit')
            document.location.href = '../data-pegawai.php';
            </script>
            ";
        } else {
            echo"
            <script>
            alert('Data Pegawai Gagal diedit')
            document.locaation.href = 'action/update-pegawai.php';
            </script>";
        }
            }

    $id = $_GET["id"];
            
    $qry = mysqli_query($konek, "SELECT * FROM tb_pegawai WHERE id_pegawai = $id");
            
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
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <div class="row">
        


        <div class="col">
            <?php include '../sidebar.php'; ?>
        </div>


        <div class="col" style="margin-left: -850px;">

        <div class="container">

            <h3 class="mt-5">Tambah Data Pegawai</h3>
            <hr>

            

            <a class="link-back" href="../data-pegawai.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg></a>

                <div class="card mt-5">
                    <div class="card-body">
                        <?php foreach($qry as $data): ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Pegawai</label>
                                <input name="nama_pegawai" value="<?=$data["nama_pegawai"];?>"  type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No. KTP</label>
                                <input name="no_ktp" value="<?=$data["no_ktp"];?>" type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input name="alamat" type="text" value="<?=$data["alamat"];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No. Telfon</label>
                                <input name="no_telf" type="number" value="<?=$data["no_telf"];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Umur</label>
                                <input name="umur_pegawai" value="<?=$data["umur"];?>" type="number" class="form-control">
                            </div>
                            <select name="jenis_kelamin" id="divisi" class="form-select" aria-label="Default select example">
                                    <option value="<?=$data["kelamin"];?>" selected disabled hidden>Jenis Kelamin</option>
                                    <option value="perempuan" <?= $data['kelamin']== 'perempuan' ? 'selected' : '' ;?> class="text-muted">Perempuan</option>
                                    <option value="laki-laki" <?= $data['kelamin']== 'laki-laki' ? 'selected' : '' ;?> class="text-muted">Laki-laki</option>
                                </select>
                            <div class="mb-3">
                                <label for="" class="form-label">Gaji</label>
                                <input name="gaji" value="<?=$data["gaji"];?>" type="text" class="form-control">
                            </div>

                                <select name="role" id="divisi" class="form-select" aria-label="Default select example">
                                    <option value="<?=$data["role"];?>" selected disabled hidden>Divisi</option>
                                    <option value="kasir" <?= $data['role']== 'kasir' ? 'selected' : '' ;?> class="text-muted">Kasir</option>
                                    <option value="pegawai" <?= $data['role']== 'pegawai' ? 'selected' : '' ;?> class="text-muted">Pegawai Biasa</option>
                                </select>

        <br>
                            <button name="kirim" type="submit" class="btn btn-danger">Submit</button>
                        </form>
                        <?php endforeach;?>
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