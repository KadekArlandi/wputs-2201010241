<?php
    error_reporting(0);
    include("konfigurasi.php");
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Konfigurasi!");
    session_start();
    if(!$_SESSION['key']){
        header("Location:login.php");
    }
    $query = "SELECT * FROM tbmahasiswa";
    $hasil = mysqli_query($cnn,$query);
    if($hasil == true){
        while($row = mysqli_fetch_assoc($hasil)){
            $rows[] = $row;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/data_mahasiswa.css">
</head>
<body>
   
<!--navigation bar-->
<nav>
    <label class="title">Dashboard</label>
    <ul class="show">
        <li><a class="menu_mahasiswa" href="data_mahasiswa.php">Data Mahasiswa</a></li>
        <li><a href="#">Data Dosen</a></li>
        <li><a href="#">Data MataKuliah</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <label for="menu" id="icon">
        <i class="fa-solid fa-bars"></i>
    </label>
</nav> 
<!--end navbar-->


<!--tabel mahasiswa -->
   <table border="1px solid black">
    <tr>
        <td><a href="tambah_mahasiswa.php">Tambah Mahasiswa</a></td>
    </tr> 
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Jurusan</th>
        <th>Jenis_kelamin</th>
        <th>Nomor Telephone</th>
        <th>Edit</th>
    </tr>
<!--end tabel mahasiswa-->


    <?php $no = 1; ?>
    <?php foreach ($rows as $row) : ?>

    <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama'] ;?></td>
        <td><?= $row['nim'] ;?></td>
        <td><?= $row['prodi'];?></td>
        <td><?= $row['jenis_kelamin'];?></td>
        <td><?= $row['no_telp'];?></td>
        <td>
            <a href="update_mahasiswa.php?iduser=<?= $row['iduser'];?>">Edit</a>
            <a href="delete.php?iduser=<?= $row['iduser'];?>">Delete</a>
        </td>

    </tr>
    
    <?php $no++; ?>
    <?php endforeach; ?>

   </table>
    
</body>
</html>