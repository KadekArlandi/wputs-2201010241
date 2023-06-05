<?php
    include("konfigurasi.php");

    $tbadmin = "tbadmin";
    $tbmahasiswa = "tbmahasiswa";
   

    $sql1 = "CREATE TABLE $tbadmin(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(25) NOT NULL,
        username VARCHAR(50),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("koneksi gagal");

$hasil = mysqli_query($cnn, $sql1);
if($hasil) {
    echo "Tabel". $tbadmin. "berhasil dibuat <br>";
}else{
    echo "Tabel". $tbadmin. "gagal dibuat <br>";
}


$sql2 = "CREATE TABLE $tbmahasiswa(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    nim VARCHAR(50) NOT NULL,
    prodi VARCHAR(50),
    jenis_kelamin VARCHAR(50),
    no_telp VARCHAR(50),
    passkey VARCHAR(255),
    iduser VARCHAR(255)
);";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("koneksi gagal");

$hasil = mysqli_query($cnn, $sql2);
if($hasil) {
echo "Tabel". $tbmahasiswa. "berhasil dibuat <br>";
}else{
echo "Tabel". $tbmahasiswa. "gagal dibuat <br>";
}


mysqli_close($cnn);
    

