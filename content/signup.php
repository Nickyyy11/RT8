<?php
// koneksi database
$conn = mysqli_connect("localhost:3306", "root", "", "rute8");

// cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// fungsi untuk menghindari injeksi SQL
function anti_inject($data) {
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// proses registrasi
if (isset($_POST['submit'])) {
  $nama_lengkap = anti_inject($_POST['nama_lengkap']);
  $email = anti_inject($_POST['email']);
  $password = anti_inject($_POST['password']);
  $tanggal_lahir = anti_inject($_POST['tanggal_lahir']);
  $alamat = anti_inject($_POST['alamat']);
  

  // cek apakah email sudah digunakan
  $query = "SELECT * FROM member WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email sudah digunakan!');</script>";
  } else {
    // simpan data ke database
    $query = "INSERT INTO member (nama_lengkap, email, password, tanggal_lahir) VALUES ('$nama_lengkap', '$email', '$password', '$tanggal_lahir')";
    mysqli_query($conn, $query);
    echo `<script>alert('Registrasi berhasil!');</script>`;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registrasi Member</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>
<body>
  <div class="container">
    <h2>Registrasi Member</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="nama_lengkap">Nama:</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
      </div>
      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Registrasi</button>
    </form>
  </div>
</body>
</html>