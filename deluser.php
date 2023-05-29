<?php
$iduser = $_GET["p1"]
$sql = "SELECT tu.nama, tu.username FROM tbuser tu WHERE tu.iduser ='$iduser';";
$hasil = mysqli_query($cnn, $sql);
if(mysqli_num_rows($hasil) > 0){
    $h = mysqli_fetch_assoc($hasil);
?>
  
<h3>Hapus Data User <?=$h["username"]?></h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="destroy">
    <input type="hidden" name="iduser" value="<?=$iduser?>">
    
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingiInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Email" value="<?=$h["email"]?>">
        <label for="floatingiInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txUSER" class="form-control" id="floatingInput" placeholder="User Name" value="<?=$h["username"]?>">
        <label for="floatingiInput">UserName</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-danger"> Hapus Data User </button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> BATAL </a>
</form>  
<?php
}else{
    echo "<script>window.location.href='datamahasiswa.php';</script>";
} 
?>