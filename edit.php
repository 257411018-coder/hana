<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data</h2>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">
    Nama: <input type="text" name="nama_mahasiswa" value="<?= $d['nama_mahasiswa'] ?>"><br>
    Prodi: <input type="text" name="prodi_mahasiswa" value="<?= $d['prodi_mahasiswa'] ?>"><br>
    <button type="submit">Update</button>
</form>
