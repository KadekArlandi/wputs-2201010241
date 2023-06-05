<?php
include("konfigurasi.php");
session_start();
if(!$_SESSION['key']){
    header("Location:login.php");
}
$iduser = $_GET["iduser"];
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Konfigurasi!");
$sql = "DELETE FROM tbmahasiswa WHERE iduser = '$iduser'";
$hasil = mysqli_query($cnn,$sql);
if ($hasil == true) {
    echo"Mahasiswa Berhasil DiHapus";
    header("Location:data_mahasiswa.php");
}else{
    echo"Mahasiswa Gagal diHapus";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>