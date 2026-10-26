<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';

$query = "SELECT * FROM mahasiswa ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Mahasiswa</title>
    <style>
        * { box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        body { background: #f8fafc; margin: 0; padding: 2rem; color: #1e293b; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .header { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #e2e8f0; padding-bottom: 1rem; margin-bottom: 1.5rem; }
        h2 { margin: 0; color: #0f172a; }
        .actions { display: flex; gap: 0.75rem; align-items: center; }
        a.btn { text-decoration: none; padding: 0.6rem 1rem; border-radius: 6px; font-weight: 500; font-size: 0.875rem; display: inline-block; }
        .btn-primary { background: #2563eb; color: white; }
        .btn-primary:hover { background: #1d4ed8; }
        .btn-danger { background: #ef4444; color: white; }
        .btn-danger:hover { background: #dc2626; }
        .btn-sm { padding: 0.35rem 0.65rem; font-size: 0.8rem; }
        .btn-warning { background: #f59e0b; color: white; }
        .btn-warning:hover { background: #d97706; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { text-align: left; padding: 0.85rem 1rem; border-bottom: 1px solid #e2e8f0; }
        th { background: #f1f5f9; color: #475569; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }
        tr:hover { background: #f8fafc; }
        .badge { background: #e0e7ff; color: #3730a3; padding: 0.25rem 0.5rem; border-radius: 9999px; font-size: 0.8rem; font-weight: 500; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h2>Data Mahasiswa</h2>
                <small style="color: #64748b;">Login sebagai: <b><?= htmlspecialchars($_SESSION['username']); ?></b></small>
            </div>
            <div class="actions">
                <a href="tambah.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
                <a href="logout.php" class="btn btn-danger">Keluar</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama Lengkap</th>
                    <th>Jurusan</th>
                    <th style="width: 150px; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                while($row = mysqli_fetch_assoc($result)) { 
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><b><?= htmlspecialchars($row['nama']); ?></b></td>
                    <td><span class="badge"><?= htmlspecialchars($row['jurusan']); ?></span></td>
                    <td style="text-align: center;">
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                <?php if (mysqli_num_rows($result) === 0): ?>
                <tr>
                    <td colspan="4" style="text-align: center; color: #64748b; padding: 2rem;">Belum ada data mahasiswa.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
