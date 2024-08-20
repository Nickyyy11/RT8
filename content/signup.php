<?php
// koneksi database
$conn = mysqli_connect("localhost:3307", "root", "", "rute8");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// fungsi untuk menghindari injeksi SQL
function anti_inject($data)
{
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
    $no_hp = anti_inject($_POST['no_hp']);

    // cek apakah email sudah digunakan
    $query = "SELECT * FROM member WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email sudah digunakan!');</script>";
    } else {
        // simpan data ke database
        $query = "INSERT INTO member (nama_lengkap, email, password, tanggal_lahir, alamat, no_hp) VALUES ('$nama_lengkap', '$email', '$password', '$tanggal_lahir','$alamat','$no_hp')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil!');</script>";
            // Redirect setelah berhasil registrasi
            // header('Location: ?pg=signin');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Member</title>
</head>

<body>

    <div class="container">
        <h2 class="py-3">Registrasi Member</h2>
        <form action="" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-2">
                        <label for="nama_lengkap">Nama:</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap"
                            required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                            required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                            required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group mb-2">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat"
                            placeholder="Gg. Griya Manunggal 2 C no 73" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group mb-5 ">
                        <label for="no_hp">No Hp:</label>
                        <input type="number" class="form-control" name="no_hp" placeholder="contoh: 087812312312"
                            required>
                    </div>
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-primary form-control" name="submit">Registrasi</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>