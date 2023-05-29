<?php
include("konfigurasi.php");

$jdpage = "List";
$pg = "userlist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Koneksi ke DBMS");

if(isset($_POST["act"])){
    $act = $_POST["act"];
    switch($act){
        case "store":
            $pass1 = $_POST["txPASS1"];
            $pass2 = $_POST["txPASS2"];
            if($pass1 == $pass2){
                $nama = $_POST["txNAMA"];
                $email = $_POST["txEMAIL"];
                $user = $_POST["txUSER"];
                $iduser = md5($email);
                $sql = "INSERT INTO tbuser(nama, username, passkey, iduser) VALUES('$nama', '$email','$user', '$pass1','$iduser');";
                $hasil = mysql_query($cnn, $sql);
                if($hasil){
                    $footer = "<script
                    swal.fire({
                        position: 'center' ,
                        icon: 'success' ,
                        title: 'data user berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    </script>";
                }else{
                    $footer = "<script
                    swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'data user gagal ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    </script>";
                }
            }
            break;
        case "update":
            $pass1 = $_POST["txPASS1"];
            $pass2 = $_POST["txPASS2"];
            if ($pass == $pass2){
                $nama = $_POST["txNAMA"];
                $email = $_POST["txEMAIL"];
                $user = $_POST["txUSER"];
                $iduser = md5["iduser"];
                $sql = "UPDATE tbuser SET nama='$nama', email='$email', username='$user', passkey='$pass1' WHERE iduser='$iduser';";
                $hasil = mysql_query($cnn, $sql);
                if($hasil){
                    $footer = "<script>
                    swal.fire({
                        position: 'center',
                        icon:'success',
                        title: 'data user berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    </script>";
                }else{
                    $footer = "<script>
                    swal.fire({
                        position: 'center',
                        icon:'error',
                        title: 'data user gagal diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    </script>";
                }
            }
            break;
        case "destroy":
            $iduser = $_POST['iduser'];
            $sql = "DELETE FROM tbuser WHERE iduser='$iduser';";
            $hasil = mysql_query($cnn, $sql);
            if($hasil){
                $footer = "<script>
                swal.fire({
                    position: 'center',
                    icon:'success',
                    title: 'data user berhasil dihapus',
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>";
            }else{
                $footer = "<script>
                swal.fire({
                    position: 'center',
                    icon:'error',
                    title: 'data user gagal dihapus',
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>";
            }
            break;
    }
}

if(isset($_GET["aksi"])){
    $aksi = $_GET["aksi"];
    switch($aksi) {
        case "new":
            $jdpage = "Tambah";
            $pg = "newuser.php";
            break;
        case "edit":
            $jdpage = "Edit";
            $pg = "edituser.php";
            break;
        case "delete":
            $jdpage = "Hapus";
            $pg = "deluser.php";
            break;
        default:
            $jdpage = "List";
            $pg = "userlist.php";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title><?=$jdpage?> - Data Mahasiswa</title>
    
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="datamahasiswa.php">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datamk.php">Data MataKuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datadosen.php">Data Dosen</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

<?php
include ($pg)
?>
</div>

<!--[if !IE]>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!--[if IE]>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?=$footer;?>
</body>
</html>