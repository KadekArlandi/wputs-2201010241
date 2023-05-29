<?php
    include_once("konfigurasi.php");
    session_start();

    if(isset($_SESSION{"username"})){
        header("Location: formlogin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

    <div class="container">
        <nav class="navbae navbar-expand-lg navbar-dark bg-success">
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
    </div>
    
</body>
</html>