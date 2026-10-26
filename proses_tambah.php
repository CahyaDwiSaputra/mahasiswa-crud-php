<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

$query = "INSERT INTO mahasiswa (nama, jurusan) VALUES ('$nama', '$jurusan')";
if (mysqli_query($koneksi, $query)) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}
?>
