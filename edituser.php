<?php
$iduser = $_GET["p1"]
$sql = "SELECT tu.nama, tu.username FROM tbuser tu WHERE tu.iduser ='$iduser';";
$hasil = mysqli_query($cnn, $sql);
if(mysqli_num_rows($hasil) > 0){
    $h = mysqli_fetch_assoc($hasil);
?>
<h3>Ubah Data User <?=$h["username"]?></h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="iduser" value="<?=$iduser?>">

    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="txNAMA" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="txEMAIL" placeholder="Alamat Email" value="<?=$h["email"]?>">
        <label for="floatingInput">Alamat Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="txUSER" placeholder="User Name" value="<?=$h["username"]?>">
        <label for="floatingInput">UserName</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" name="txPASS1" placeholder="Password">
        <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" name="txPASS2" placeholder="Konfirmasi Password">
        <label for="floatingInput">Konfirmasi Password</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Ubah Data user </button>
    <a href="datamahasiswa.php"> BATAL </a>    
</form>
<?php
}else{
    echo "<script>window.location.href='datamahasiswa.php';</script>";
}
?>