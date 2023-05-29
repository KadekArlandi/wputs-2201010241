<?php
include_once("konfigurasi.php");
if (isset($_POST{'login'}))
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
</head>
<body>

    <form method="POST" action="formlogin.php">
        <h2>Form Login</h2>
        <div>
            UserName 
            <input type="text" name="txUSER" class="input" placeholder="username">
        </div>
        <div>
            Password
            <input type="password" name="txPASS" class="input" placeholder="password">
        </div>
        <div>
            <button type="submit" name='login'>Login</button>
        </div>
        
    </form>

</body>
</html>