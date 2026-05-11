<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$prodi_mahasiswa = $_POST['prodi_mahasiswa'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', prodi_mahasiswa='$prodi_mahasiswa' WHERE id='$id'");

header("location:index.php");
?>
