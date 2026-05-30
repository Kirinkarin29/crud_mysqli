<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Data</title></head>
<body>
<h2>Tambah Data Mahasiswa</h2>
<form method="post">
  Nama: <input type="text" name="nama"><br>
  Email: <input type="text" name="email"><br>
  <button type="submit" name="submit">Simpan</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $stmt = mysqli_prepare($conn, "INSERT INTO mahasiswa (nama, email) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $_POST['nama'], $_POST['email']);
    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
