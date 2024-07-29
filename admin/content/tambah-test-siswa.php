<?php
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $insert = mysqli_query($koneksi, "INSERT INTO test_siswa (nama_lengkap, email, alamat) VALUES ('$nama_lengkap', '$email','$alamat')");
    header("location:?pg=test-siswa&insert=berhasil");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM test_siswa WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $update = mysqli_query($koneksi, "UPDATE test_siswa SET nama_lengkap='$nama_lengkap', email='$email', alamat='$alamat' WHERE id='$id'");
    header("location:?pg=test-siswa&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?><form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_lengkap'] : '' ?>" type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama universitas">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>" type="email" class="form-control" name="email" placeholder="Masukkan nama fakultas">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?>" type="text" class="form-control" name="alamat" placeholder="Masukkan nama jurusan">
    </div>


    <div class="mb-3">
        <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan" class="btn btn-primary">
        <a href="?pg=test-siswa">Kembali</a>
    </div>
</form>