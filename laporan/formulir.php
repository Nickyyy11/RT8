<?php
require_once 'dbcontroller.php';

// Membuat instance dari DBController
$db = new DBController();

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Iuran.xls");

$sql = "SELECT formulir.*, iuran.nama_iuran, iuran.harga FROM formulir JOIN iuran ON formulir.id_iuran = iuran.id ORDER BY formulir.id DESC LIMIT 1";
$row = $db->getAll($sql);
$no = 1;
?>
<style>
tr th {
    background-color: aqua;
}
</style>




<head>
<img src="../asset/rt/public/assets/img/rt8.png" alt="">
<h1>IURAN WARGA GRIYA MANUNGGAL RT 08 RW 11</h1>
</head>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No :</th>
            <th>Nama KK :</th>
            <th>NIK :</th>
            <th>Alamat :</th>
            <th>Email :</th>
            <th>Telepon :</th>
            <th>Iuran :</th>
            <th>Harga :</th>
            <th>Status :</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r): ?>
        <tr>
            <td><?php echo $no++ ?></td>

            <td><?php echo $r['kepala_keluarga'] ?></td>
            <td><?php echo $r['nik'] ?></td>
            <td><?php echo $r['alamat'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php echo $r['telp'] ?></td>
            <td><?php echo $r['nama_iuran'] ?></td>
            <td><?php echo $r['harga'] ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>