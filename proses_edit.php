<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';

$id = intval($_POST['id']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

$query = "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan' WHERE id = $id";
if (mysqli_query($koneksi, $query)) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}
?>
