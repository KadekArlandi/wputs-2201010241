<h3>Tambah Data User</h3>
<form action="datamahasiswa.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeaholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Alamat Email">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txUser" class="form-control" id="floatingInput" placeholder="User Name">
        <label for="floatingInput">UserName</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="txPASS1" class="form-control" id="floatingInput" placeholder="Password">
        <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="txPASS2" class="form-control" id="floatingInput" placeholder="Verifikasi Password">
        <label for="floatingInput">Verifikasi Password</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" clas="btn btn=primary"> Buat Data User </button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> BATAL </a>
</form>