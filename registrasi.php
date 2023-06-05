<?php
include("konfigurasi.php");
    if(isset($_POST["txNAMA"])){
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        if($pass1==$pass2){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];


            $sql = "INSERT INTO tbadmin(nama, email, username, passkey, iduser) VALUES('$nama','$email','$user','".md5($pass1)."','".md5($nama)."');";   

            $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal Konfigurasi!");
            $hasil = mysqli_query($cnn, $sql);
            if($hasil == true){
                echo"<div>
                     <h3>Registrasi Sukses</h3>
                     <p class='link'>Klik Disini Untuk <a href='login.php'>login</a></p>
                     </div>";
                header("Location:login.php");
            }else{
                echo"<div>
                     <p class='link'>Registrasi Gagal<br>Silahkan <a href='registrasi.php'>Registrasi Ulang</a></";
            }

        }else{
            echo"Password Tidak Sama!!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css">

</head>
<body>
    
    <form action="" method="POST">
        <h2>Sign Up</h2>
        <div>
            <input type="text" name="txNAMA" required placeholder="Full Name">
        </div>
        <div>    
            <input type="email" name="txEMAIL" required placeholder="Example@gmail.com">
        </div>
        <div>
            <input type="text" name="txUSER" required placeholder="Username">
        </div>
        <div>
            <input type="password" name="txPASS1" required placeholder="Password">
        </div>
        <div>
            <input type="password" name="txPASS2" required placeholder="Confirm Password"> 
        </div>
        <div>
            <br>
            <button type="submit">Submit</button> 
        </div>
        <p class="massage">Already an Account? <a href="login.php">Sign In</a> </p>
    </form>

</body>
</html>