<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'admin/config/function.php';
 
if(isset($_POST["send"])){
    // menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($konek,"SELECT * from tb_akun where email='$email'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    
    // cek apakah username dan password di temukan pada database
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        if($password == $data['password']){
            
            // cek jika user login sebagai admin
            if($data['role']=="admin"){
                // buat session login dan email
                    $_SESSION['login'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = "admin";
                    // alihkan ke halaman dashboard admin
                    header("location:admin/index.php");
            
                // cek jika user login sebagai pegawai
                }else if($data['role']=="kasir"){
                    // buat session login dan username
                    $_SESSION['login'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = "kasir";
                    // alihkan ke halaman dashboard pegawai
                    header("location:kasir/index.php");}
        }else{
            echo" <script>
            alert('GAGAL LOGIN, EMAIL PASSWORD SALAH');
            document.location.href = ''
            </script>";

        }
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

<style>
body {
    background-color: #FFB6C1;
}

.image {
    margin-top:-15px;
    margin-left: -22px;
    border-radius: 10px;
}

.kartu {
    margin-left: 300px;
    margin-top: 60px;
}
</style>

<body>

        <div class="card kartu" style="width: 50rem; height: 30rem;">
            <div class="card-body">
            
                <div class="row">

                    <div class="col">
                        <img class="image" src="admin/assets/img/laundri.jpg" width="382px" alt="">
                    </div>

                    <div class="col">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <br>
                            <button name="send" type="submit" class="btn btn-danger">Submit</button>
                        </form>
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