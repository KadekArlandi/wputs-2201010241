<?php
include("konfigurasi.php");
session_start();
if (isset($_POST['submit'])){
    $user = $_POST['txUSER'];
    $pass = $_POST['txPASS'];
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Konfigurasi!");
    $sql = "SELECT tu.username , tu.passkey , tu.iduser FROM tbadmin tu WHERE tu.username = '$user'";
    $hasil = mysqli_query($cnn,$sql);
    $cek = mysqli_num_rows($hasil);
    if ($cek > 0){
        $row = mysqli_fetch_assoc($hasil);
        if($row['passkey'] == md5($pass)){
            echo "Login Berhasil";
            $_SESSION['key'] = $row['iduser'];
            header("Location:dashboard.php");
        }else{
            echo "Password Tidak Benar";
        }
    }else{
        echo "Username dan Password tidak Benar";
    };

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<form method="POST" action="">
    <h2>Sign In</h2>
    <div>
        <input type="text" name="txUSER" class="input" required placeholder="Username"> 
    </div>
    <div>
        <input type="password" name="txPASS" class="input" required placeholder="Password">
    </div>
    <div>
        <button type="submit" name='submit'>Login</button>
    </div>
    <p class="massage">Dont Have an Account? <a href="registrasi.php">Sign Up</a></p>
</form>                    
                            
</body>
</html>