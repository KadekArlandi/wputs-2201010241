<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <nav>
        <label class="title">Dashboard</label>
        <ul class="show">
            <li><a href="data_mahasiswa.php">Data Mahasiswa</a></li>
            <li><a href="#">Data Dosen</a></li>
            <li><a href="#">Data Mata Kuliah</a></li>
            <li class="btn"><a href="logout.php">Logout</a></li>        
        </ul>
        <label for="menu" id="icon">
            <i class="fa-solid fa-bars"></i>
        </label>
    </nav> 
</body>
</html>