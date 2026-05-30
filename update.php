<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data</title></head>
<body>
<h2>Edit Data Mahasiswa</h2>
<form method="post">
  Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>"><br>
  Email: <input type="text" name="email" value="<?= $row['email']; ?>"><br>
  <button type="submit" name="update">Update</button>
