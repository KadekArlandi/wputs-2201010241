<?php
include("konfigurasi.php");
session_start();
if(!$_SESSION['key']){
    header("Location:login.php");
}
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Konfigurasi!");
$iduser = $_GET["iduser"];
$query = "SELECT * FROM tbmahasiswa WHERE iduser = '$iduser'";
    $hasil = mysqli_query($cnn,$query);
    if($hasil == true){
        while($row = mysqli_fetch_assoc($hasil)){
            $rows[] = $row;
        }
    }
if(isset($_POST['submit'])){
$iduser = $_POST['txIDUSER'];
$nama = $_POST['txNAMA'];
$nim = $_POST['txNIM'];
$prodi = $_POST['txJURUSAN'];
$jns = $_POST['txJNS'];
$telp = $_POST['txTELP'];
$pass1 = $_POST['txPASS1'];
$pass2 = $_POST['txPASS2'];
if($pass1 == $pass2){
    $sql = "UPDATE tbmahasiswa SET nama = '$nama' , nim = '$nim' , prodi = '$prodi' , jenis_kelamin = '$jns' , no_telp = '$telp' , passkey = '".md5($pass1)."' WHERE iduser = '$iduser'";
    $hasil = mysqli_query($cnn,$sql);
    if($hasil == true){
        echo "Mahasiswa ".$nama. " Berhasil DiUpdate";
        header("Location:data_mahasiswa.php");
    }else{
        echo "Mahasiswa ".$nama. " Gagal DiUpdate";
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
    <title>Update Mahasiswa</title>
    <link rel="stylesheet" href="css/update_mahasiswa.css">
</head>
<body>



<form action="" method="Post">
    <h2>Edit Mahasiswa</h2>

    <?php $no = 1; ?>
    <?php foreach ($rows as $row) : ?>

    <div>
        <input type="hidden" name="txIDUSER" value="<?= $row['iduser']; ?>">
    </div>

    <div>
        Nama
        <input type="text" name="txNAMA" required value="<?= $row['nama']; ?>">
    </div>
    <div>
        Nim
        <input type="number" name="txNIM" required value="<?= $row['nim']; ?>">
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
        Nomor Telephone
        <input type="number" name="txTELP" required value="<?= $row['no_telp']; ?>">
    </div>

    <div>
        Password
        <input type="password" name="txPASS1" required placeholder="Password">
    </div>

    <div>
        Konfirmasi Password
        <input type="password" name="txPASS2" required placeholder="Konfirmasi Password">
    </div>

    <div>
        <button type="submit" name="submit">Update</button>
    </div>

    <?php $no++; ?>
    <?php endforeach; ?>

</form>
    
</body>
</html>