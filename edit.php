<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';

$id = intval($_GET['id']);
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location.href='dashboard.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        * { box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        body { background: #f8fafc; padding: 2rem; color: #1e293b; }
        .card { max-width: 500px; margin: 2rem auto; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        h2 { margin-top: 0; color: #0f172a; }
        .form-group { margin-bottom: 1.25rem; }
        label { display: block; font-weight: 500; font-size: 0.875rem; margin-bottom: 0.5rem; color: #334155; }
        input[type="text"] { width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; }
        .btn-group { display: flex; gap: 0.75rem; margin-top: 1.5rem; }
        button, a.btn { padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 600; text-decoration: none; text-align: center; cursor: pointer; border: none; font-size: 0.9rem; }
        .btn-primary { background: #2563eb; color: white; flex: 1; }
        .btn-secondary { background: #e2e8f0; color: #475569; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Data Mahasiswa</h2>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" value="<?= htmlspecialchars($data['jurusan']); ?>" required>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn-primary">Update Perubahan</button>
                <a href="dashboard.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
