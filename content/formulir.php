<?php
include "admin/koneksi/koneksi.php";

$querry = mysqli_query($koneksi, "SELECT formulir.*, iuran.nama_iuran FROM formulir JOIN iuran ON formulir.id_iuran = iuran.id ORDER BY formulir.id DESC");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM formulir WHERE id ='$id'");
    header('location:?pg=formulir&hapus=berhasil');
}

if (isset($_POST['simpan'])) {
    $kepala_keluarga = $_POST['kepala_keluarga'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $id_iuran = $_POST['id_iuran'];
    //MASUKKAN KE DALAM TABEL formulir (FIELD YANG AKAN DI MASUKKAN)
    //VALUE (INPUTAN MASING-MASING KOLOM)

    $insert = mysqli_query($koneksi, "INSERT INTO formulir (kepala_keluarga, nik, alamat, telp, id_iuran) VALUES ('$kepala_keluarga','$nik','$alamat','$telp','$id_iuran')");

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

    <form action="" method="post" class="container col-6">
        <div class="form-group ">
            <label for="kepala_keluarga" class="text-black">Nama Kepala Keluarga</label>
            <input type="text" name="kepala_keluarga" class="form-control mb-3" id="kepala_keluarga">
        </div>
        <div class="form-group ">
            <label for="bulan" class="text-black">Nomer NIK</label>
            <input type="text" name="nik" class="form-control mb-3">
        </div>
        <div class="form-group ">
            <label for="bulan" class="text-black">Alamat</label>
            <input type="text" name="alamat" class="form-control mb-3">
        </div>
        <div class="form-group ">
            <label for="bulan" class="text-black">Email</label>
            <input type="text" name="email" class="form-control mb-3">
        </div>
        <div class="col-6">
            <div class="mb-1 py-2">
                <?php
                $queryOpt = mysqli_query($koneksi, "SELECT * FROM formulir");
                // var_dump($row); untuk mengecek
                ?>
                <option>Pilih Jenis Iuran :</option>
                <select class="form-control" name="iuran" id="iuran">
                    <?php
                    while ($row = mysqli_fetch_assoc($queryOpt)):
                    ?>
                        <option value="<?= $row['id'] ?>">Iuran Sampah : <?= $row['nama_iuran'] ?> |
                            Harga : <?= $row['harga'] ?>
                        </option>
                        <option value="<?= $row['id'] ?>">Iuran Satpam : <?= $row['nama_iuran'] ?> |
                            Harga : <?= $row['harga'] ?>
                        </option>
                        <option value="<?= $row['id'] ?>">Iuran Bulanan : <?= $row['nama_iuran'] ?> |
                            Harga : <?= $row['harga'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div><br><br>
            <button name="simpan" value="Simpan" type="submit" class="btn btn-warning ">
                Login
            </button>
            <a href="?pg=member"></a>
    </form>
</section>
<!-- <section> close ============================-->
<!-- ============================================-->