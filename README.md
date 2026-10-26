# 🎓 Sistem Informasi Akademik & CRUD Mahasiswa (PHP & MySQL)

Sistem Informasi Akademik sederhana berbasis web yang menyediakan fungsionalitas autentikasi user session dan manajemen data mahasiswa secara dinamis menggunakan **PHP Native** dan **MySQL/MariaDB**.

---

## 🌟 Fitur Utama
1. **Autentikasi & Session Handling**:
   - Form Login terproteksi (`login.php` & `proses_login.php`).
   - Session guard mencegah akses langsung ke dashboard tanpa autentikasi.
   - Logout bersih (`logout.php`) yang menghancurkan session server.
2. **Manajemen Data Mahasiswa (CRUD)**:
   - **Create**: Tambah record mahasiswa baru lengkap dengan validasi.
   - **Read**: Tampilan tabel responsif dengan badge jurusan.
   - **Update**: Edit nama dan jurusan mahasiswa.
   - **Delete**: Hapus data mahasiswa dengan prompt konfirmasi JavaScript.
3. **Database Relasional**:
   - Dilengkapi script schema SQL (`database.sql`) yang siap diimpor ke PhpMyAdmin / MySQL CLI.

---

## 💻 Tech Stack
- **Backend**: PHP 7.4+ / PHP 8.x (Native `mysqli`)
- **Database**: MySQL / MariaDB
- **Frontend**: HTML5, Modern CSS Flexbox & Box-Shadow UI

---

## 🚀 Panduan Instalasi & Menjalankan

### 1. Persiapan Database
1. Buka **phpMyAdmin** (`http://localhost/phpmyadmin`) atau terminal MySQL.
2. Buat database baru bernama `db_mahasiswa` atau langsung import file `database.sql`:
   ```bash
   mysql -u root -p < database.sql
   ```

### 2. Konfigurasi Koneksi
Buka file `koneksi.php` dan sesuaikan kredensial database lokal Anda jika berbeda:
```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa";
```

### 3. Jalankan Aplikasi
1. Tempatkan folder proyek ini ke dalam folder server lokal (misalnya `htdocs` untuk XAMPP):
   ```text
   C:/xampp/htdocs/mahasiswa-crud-php/
   ```
2. Buka browser dan akses:
   ```text
   http://localhost/mahasiswa-crud-php/
   ```
3. Login menggunakan kredensial default:
   - **Username**: `admin`
   - **Password**: `admin123`

---

## 📂 Struktur Direktori
```text
├── database.sql        # Skema dan seeder database
├── koneksi.php         # Handler koneksi MySQLi
├── login.php           # Tampilan login form
├── proses_login.php    # Autentikasi user & inisialisasi session
├── logout.php          # Destruksi session logout
├── dashboard.php       # Tampilan tabel utama data mahasiswa
├── tambah.php          # Form input mahasiswa baru
├── proses_tambah.php   # Query INSERT data
├── edit.php            # Form edit data mahasiswa
├── proses_edit.php     # Query UPDATE data
├── hapus.php           # Query DELETE data
└── README.md
```

---

## 👤 Author
- **Cahya Dwi Saputra**
