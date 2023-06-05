<?php
include("konfigurasi.php");
session_start();
if(!$_SESSION['key']){
    header("Location:login.php");
}
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Konfigurasi!");
if(isset($_POST['submit'])){
$nama = $_POST['txNAMA'];
$nim = $_POST['txNIM'];
$prodi = $_POST['txJURUSAN'];
$jns = $_POST['txJNS'];
$telp = $_POST['txTELP'];
$pass1 = $_POST['txPASS1'];
$pass2 = $_POST['txPASS2'];
if($pass1 == $pass2){
    $sql = "INSERT INTO tbmahasiswa(nama,nim,prodi,jenis_kelamin,no_telp,passkey,iduser) VALUES ('$nama','$nim','$prodi','$jns','$telp','".md5($pass1)."','".md5($nama)."');";
    $hasil = mysqli_query($cnn,$sql);
    if($hasil == true){
        echo "Mahasiswa ".$nama. " Berhasil DiTambahkan";
        header("Location:data_mahasiswa.php");
    }else{
        echo "Mahasiswa ".$nama. " Gagal DiTambahkan";
    }

    }else{
        echo "Password Tidak Sama";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="css/tambah_mahasiswa.css">
</head>
<body>

<form action="" method="Post">
    <h2>Tambah Mahasiswa</h2>
    <div>
        <input type="text" name="txNAMA" required placeholder="Nama Mahasiswa">
    </div>
    <div>
        <input type="number" name="txNIM" required placeholder="NIM">
    </div>
    <div>
        <select name="txJURUSAN" required>
            <option value="" disable hidden>Jurusan</option>
            <option value="MDI">TI-Manajemen Data dan Informasi</option>
            <option value="PAR">TI-Pariwisata</option>
            <option value="KAB">TI-Komputer Akuntansi dan Bisnis</option>
            <option value="SK">Sistem Komputer</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="BD">Bisnis Digital</option>
        </select>
    </div>

    <div>
        <select name="txJNS" required>
                <option value="" disable hidden>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div>
        <input type="number" name="txTELP" required placeholder="Nomor Telephone">
    </div>

    <div>
        <input type="password" name="txPASS1" required placeholder="Password">
    </div>

    <div>
        <input type="password" name="txPASS2" required placeholder="Konfirmasi Password">
    </div>


    <div>
        <button type="submit" name="submit">Tambah</button>
    </div>
</form>
    
</body>
</html>