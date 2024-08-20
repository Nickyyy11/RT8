<?php
$querry = mysqli_query($koneksi, "SELECT * FROM level ORDER BY id DESC");
?>

<body>
    <div class="container my-5">
        <h1 class="mb-4">Hubungi Kami</h1>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Informasi Kontak</h3>
                <p>Jl. Contoh No. 123, Kota Contoh, 12345</p>
                <p>Telepon: (021) 123-4567</p>
                <p>Email: info@contoh.com</p>
                <h3 class="mt-4">Jam Operasional</h3>
                <p>Senin - Jumat: 09.00 - 17.00</p>
                <p>Sabtu: 09.00 - 13.00</p>
                <p>Minggu: Tutup</p>
            </div>
        </div>
    </div>