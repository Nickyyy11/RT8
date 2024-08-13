<?php
session_start();

if (isset($_SESSION['nama_lengkap'])) {
  $nama_lengkap = $_SESSION['nama_lengkap'];
//   echo "<p>Selamat datang, $nama_lengkap!</p>";
  // hilangkan button signin dan signup pada navbar
  $navbar = '<nav><ul><li><a href="#">Dashboard</a></li></ul></nav>';
} else {
  $navbar = '<nav><ul><li><a href="signin.php">Sign In</a></li><li><a href="signup.php">Sign Up</a></li></ul></nav>';
}

?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="index.php"><img src="asset/rt/public/assets/img/logo.svg"
                height="31" alt="logo" /></a>
        <!-- logo.svg adalah gambar productly di nav  ^^^^-->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon">
            </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="?pg=home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="?pg=formulir">Formulir</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="?pg=keluarga">Keluarga</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="?pg=profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="?pg=galeri">Galeri</a> </li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="?pg=kontak">Kontak</a> </li>
                <?php if (isset($_SESSION['nama_lengkap'])) { ?>
                    <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="?pg=profil"><?php echo $_SESSION['nama_lengkap']; ?></a><a
                    class="btn btn-danger ms-3" href="?pg=logout">Logout</a></div>
                <?php } else { ?>
                <li class="nav-item"><a class="fa-regular fa-user" aria-current="page" href="?pg=kontak"></a></li>
                <i class="fa-regular fa-user"></i>
                <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="?pg=signin">Sign In</a><a
                    class="btn btn-warning ms-3" href="?pg=signup">Sign Up</a></div>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
