<?php 
$konek = mysqli_connect("localhost", "root","","db_loundry");

function tambahpegawai($data)
{
    global $konek;
    $nama = $data["nama_pegawai"];
    $no_ktp = $data["no_ktp"];
    $alamat = $data["alamat"];
    $no_telf = $data["no_telf"];
    $umur = $data["umur_pegawai"];
    $jk = $data["jenis_kelamin"];
    $gaji = $data["gaji"];
    $role = $data["role"];

    $qry = "INSERT INTO tb_pegawai VALUES('','$nama','$no_ktp','$alamat',
                                                            '$no_telf','$umur','$jk','$gaji', '$role')";
    mysqli_query($konek, $qry);
    return mysqli_affected_rows($konek);
}


function tambahpaket($paket) {
    global $konek;

    $nama = $paket["nama_paket"];
    $harga = $paket["harga"];

    $query = "INSERT INTO tb_paket VALUES('','$nama', '$harga')";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}

function tambahmember($cust){
    global $konek;
    $nama = $cust["nama_cust"];
    $alamat = $cust["alamat"];
    $jk = $cust["jenis_kelamin"];
    $nomor = $cust["no_telf"];
    $jenis = $cust["jenis_cust"];

    $qry = "INSERT INTO tb_customer VALUES('','$nama','$alamat','$jk','$nomor','$jenis')";
    mysqli_query($konek, $qry);
    return mysqli_affected_rows($konek);
}

function updatepaket($data){
    global $konek;

    $id=$_GET["id"];
    $nama = $data["nama_paket"];
    $harga = $data["harga"];

    mysqli_query($konek,"UPDATE tb_paket SET nama_paket='$nama',harga='$harga' 
                                    WHERE id_paket = $id");

    return mysqli_affected_rows($konek);
}

function deletepaket($paket){
    global $konek;
    $id = $_GET["id"];
    mysqli_query($konek,"DELETE FROM tb_paket WHERE id_paket = '$id'");
    return mysqli_affected_rows($konek);
}

function updatepegawai($data){
    global $konek;
    $id = $_GET["id"];

    $nama = $data["nama_pegawai"];
    $no_ktp = $data["no_ktp"];
    $alamat = $data["alamat"];
    $no_telf = $data["no_telf"];
    $umur = $data["umur_pegawai"];
    $gaji = $data["gaji"];
    $role = $data["role"];

    mysqli_query($konek, "UPDATE tb_pegawai SET nama_pegawai = '$nama', no_ktp ='$no_ktp',
                                                alamat='$alamat', no_telf = '$no_telf', umur='$umur',
                                                gaji= '$gaji', role='$role' WHERE id_pegawai = '$id' ");
    return mysqli_affected_rows($konek);
}

function updatamember($memb){
    global $konek;
    $id = $_GET["id"];
    $nama = $memb["nama_cust"];
    $alamat = $memb["alamat"];
    $jk = $memb["jenis_kelamin"];
    $nomor = $memb["no_telf"];
    $jenis = $memb["jenis_cust"];

    mysqli_query($konek,"UPDATE tb_customer SET nama_cust='$nama', alamat='$alamat', jenis_kelamin='$jk',
                                                no_telf='$nomor', member='$jenis' WHERE id_member = '$id' ");
    return mysqli_affected_rows($konek);
}

function deletepegawai($id){
    global $konek;

    $id = $_GET["id"];
    mysqli_query($konek, "DELETE FROM tb_pegawai WHERE id_pegawai = '$id'");
    return mysqli_affected_rows($konek);
}

function deletememb($id) {
    global $konek;

    $id =$_GET["id"];
    mysqli_query($konek, "DELETE FROM tb_customer WHERE id_member = '$id' ");
    return mysqli_affected_rows($konek);

}

function tambahorder($data){
    global $konek;
    $nomor = $data["no_order"];
    $idPelanggan = $data["id_pelanggan"];
    $barang = $data["barang"];
    $kilo = $data["kilo"];
    $status = $data["status"];
    $paket = $data["paket"];

    // AMBIL DATA DARI TABEL PELANGGAN & PAKET
    $dataPelanggan = mysqli_query($konek, "SELECT * FROM tb_customer WHERE id_member = '$idPelanggan'");
    $dataPaket = mysqli_query($konek, "SELECT * FROM tb_paket WHERE id_paket = '$paket'");
    $pelanggan = mysqli_fetch_array($dataPelanggan);
    $pakett = mysqli_fetch_array($dataPaket);

    $totalHarga = $pakett["harga"] * $kilo;
    
    if($pelanggan['member'] == "member") {
        $totalHarga = $totalHarga - ($totalHarga * 10/100); // Diskon 10%
    }

    $qry = "INSERT INTO tb_orderan VALUES('','$nomor', '$idPelanggan', '$barang', '$kilo', '$status', '$paket', now(), '$totalHarga')";
    mysqli_query($konek, $qry);
    return mysqli_affected_rows($konek);
}

function updateorder($data){
    global $konek;

    $id = $_GET['id'];
    $nomor = $data["no_order"];
    $idPelanggan = $data["id_pelanggan"];
    $barang = $data["barang"];
    $kilo = $data["kilo"];
    $status = $data["status"];
    $paket = $data["paket"];

    // AMBIL DATA DARI TABEL PELANGGAN & PAKET
    $dataPelanggan = mysqli_query($konek, "SELECT * FROM tb_customer WHERE id_member = '$idPelanggan'");
    $dataPaket = mysqli_query($konek, "SELECT * FROM tb_paket WHERE id_paket = '$paket'");
    $pelanggan = mysqli_fetch_array($dataPelanggan);
    $pakett = mysqli_fetch_array($dataPaket);

    $totalHarga = $pakett["harga"] * $kilo;
    
    if($pelanggan['member'] == "member") {
        $totalHarga = $totalHarga - ($totalHarga * 10/100); // Diskon 10%
    }

    mysqli_query($konek, "UPDATE tb_orderan SET no_order ='$nomor', id_member= '$idPelanggan', jenis_barang= '$barang', kilogram ='$kilo', status_order = '$status', id_paket = '$paket', total_harga = '$totalHarga' WHERE id_order = '$id' ");
    return mysqli_affected_rows($konek);

}

function deleteorder($id){
    global $konek;
    $id = $_GET["id"];
    mysqli_query($konek, "DELETE FROM tb_orderan WHERE id_order = '$id' ");
    return mysqli_affected_rows($konek);
}








?>