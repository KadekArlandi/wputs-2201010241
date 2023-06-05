<?php
session_start();
if(!$_SESSION['key']){
    header("Location:login.php");
}
session_destroy();
header("Location:login.php");


?>