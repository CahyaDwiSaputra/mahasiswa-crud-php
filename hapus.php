<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';

$id = intval($_GET['id']);
$query = "DELETE FROM mahasiswa WHERE id = $id";
if (mysqli_query($koneksi, $query)) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
