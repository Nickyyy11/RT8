<?php
$host_koneksi = "localhost:3306";
$user_koneksi = "root";
$password_koneksi = "";
$database_koneksi = "rute8";

$koneksi = mysqli_connect(
    $host_koneksi,
    $user_koneksi,
    $password_koneksi,
    $database_koneksi,
);

if (!$koneksi) {
    die('Koneksi Error : ' . mysqli_connect_error());
}

