<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Akademik Mahasiswa</title>
    <style>
        * { box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        body { background: #f0f2f5; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
        .login-card { background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.08); width: 100%; max-width: 400px; }
        h2 { margin-top: 0; color: #1e293b; text-align: center; }
        p.subtitle { color: #64748b; font-size: 0.9rem; text-align: center; margin-bottom: 2rem; }
        .form-group { margin-bottom: 1.25rem; }
        label { display: block; font-weight: 500; font-size: 0.875rem; margin-bottom: 0.5rem; color: #334155; }
        input[type="text"], input[type="password"] { width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; }
        input:focus { border-color: #2563eb; outline: none; }
        button { width: 100%; padding: 0.75rem; background: #2563eb; color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; transition: background 0.2s; }
        button:hover { background: #1d4ed8; }
        .hint { font-size: 0.8rem; color: #64748b; text-align: center; margin-top: 1rem; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Sistem Mahasiswa</h2>
        <p class="subtitle">Silakan login untuk mengakses data CRUD</p>
        <form action="proses_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
        <p class="hint">Default kredensial: username <b>admin</b> | password <b>admin123</b></p>
    </div>
</body>
</html>
