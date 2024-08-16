<?php
include "admin/koneksi/koneksi.php";

$querry = mysqli_query($koneksi, "SELECT formulir.*, iuran.nama_iuran, iuran.harga FROM formulir JOIN iuran ON formulir.id_iuran = iuran.id ORDER BY formulir.id DESC");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM formulir WHERE id ='$id'");
    header('location:?pg=formulir&hapus=berhasil');
}

if (isset($_POST['simpan'])) {
    $kepala_keluarga = $_POST['kepala_keluarga'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $id_iuran = $_POST['id_iuran'];
    //MASUKKAN KE DALAM TABEL formulir (FIELD YANG AKAN DI MASUKKAN)
    //VALUE (INPUTAN MASING-MASING KOLOM)

    $insert = mysqli_query($koneksi, "INSERT INTO formulir (kepala_keluarga, nik, alamat, email, telp, id_iuran) VALUES ('$kepala_keluarga','$nik','$alamat','$email','$telp','$id_iuran')");

    header('Location: ?pg=done-formulir&pesan=tambah-berhasil');
}
$queryIuran = mysqli_query($koneksi, "SELECT * FROM formulir ORDER BY id DESC")

?>
<!-- ============================================-->
<!-- <section> begin product============================-->
<section class="pt-5 pt-md-9 mb-6" id="feature">

    <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block"
        style="background-image:url(assets/img/category/shape.png);opacity:.5;">
    </div>
    <!--/.bg-holder-->


    <div class="container">
        <h1 class="fs-9 fw-bold mb-4 text-center"> Formulir Pembayaran <br /></h1>
    </div>
    <!-- end of .container-->

    <form action="" method="post" class="container">
        <div class="row mb-3">
            <div class="col-6">
                <div class="form-group ">
                    <label for="kepala_keluarga" class="text-black">Kepala Keluarga :</label>
                    <input type="text" name="kepala_keluarga" class="form-control mb-3" id="kepala_keluarga"
                        placeholder="Masukkan Nama Kepala Keluarga" required>
                </div>
                <div class="form-group ">
                    <label for="bulan" class="text-black">NIK :</label>
                    <input type="number" name="nik" class="form-control mb-3" placeholder="Masukkan NIK Keluarga"
                        required>
                </div>
                <div class="form-group ">
                    <label for="bulan" class="text-black">Alamat :</label>
                    <input type="text" name="alamat" class="form-control mb-3" placeholder="Masukkan Alamat Keluarga"
                        required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group ">
                    <label for="bulan" class="text-black">Email :</label>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group ">
                    <label for="bulan" class="text-black">Telepon :</label>
                    <input type="number" name="telp" class="form-control mb-3" placeholder="Masukkan Nomor Telp"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="">Formulir :</label>
                    <?php
                    $queryOpt = mysqli_query($koneksi, "SELECT * FROM iuran");

                    // var_dump($row); untuk mengecek
                    ?>
                    <select class="form-control" name="id_iuran" id="id_iuran">
                        <option class="form-control" value="">-- Pilih Iuran --</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($queryOpt)):
                        ?>
                        <option value="<?= $row['id'] ?>"><?= $row['nama_iuran'] ?> | Harga :
                            <?= $row['harga'] ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
        </div>

        <div>
            <button name="simpan" value="Simpan" type="submit" class="form-control btn btn-warning ">
                Simpan
            </button>
        </div>

        <a href="?pg=member"></a>
    </form>
</section>