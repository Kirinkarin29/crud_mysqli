<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Data CRUD</title></head>
<body>
<h2>Data Mahasiswa</h2>
<a href="create.php">Tambah Data</a>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['email']}</td>
            <td>
              <a href='update.php?id={$row['id']}'>Edit</a> |
              <a href='delete.php?id={$row['id']}'>Hapus</a>
            </td>
          </tr>";
}
?>
</table>
</body>
</html>
