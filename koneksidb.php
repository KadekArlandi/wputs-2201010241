<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn == true){
        echo "Koneksi Sukses";
        $sql = "CREATE DATABASE ". DBNAME;
        $hasil = mysqli_query($cnn, $sql);
        
        if($hasil == true){
            echo "database : ". DBNAME. "berhasil dibuat <br>";
        }else{
            echo "database : ". DBNAME. "gagal dibuat <br>";
        }

    }else{
        echo "Koneksi Gagal" . mysqli_connect_error($cnn);
    }


