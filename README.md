CRUD Mini Project - PHP MySQLi (Procedural)

Struktur:
- config.php : koneksi database
- index.php  : menampilkan data
- create.php : menambah data (prepared statement)
- update.php : mengedit data (prepared statement)
- delete.php : menghapus data (prepared statement)
- style.css  : opsional tampilan

Database:
CREATE DATABASE db_crud;
USE db_crud;
CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);

Cara menjalankan:
1. Ekstrak folder ke htdocs (XAMPP) atau www (Laragon).
2. Import database sesuai script di atas.
3. Akses via browser: http://localhost/crud_mysqli/index.php
