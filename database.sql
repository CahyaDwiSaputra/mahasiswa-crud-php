-- Database Schema for Mahasiswa CRUD & Auth
CREATE DATABASE IF NOT EXISTS db_mahasiswa;
USE db_mahasiswa;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jurusan VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Seed Initial Data
INSERT INTO users (username, password) VALUES ('admin', 'admin123')
ON DUPLICATE KEY UPDATE id=id;

INSERT INTO mahasiswa (nama, jurusan) VALUES 
('Cahya Dwi Saputra', 'D3 Teknik Informatika'),
('Ahmad Fauzan', 'D3 Teknik Informatika'),
('Siti Nurhaliza', 'S1 Sistem Informasi');
