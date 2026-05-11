<?php
include 'koneksi.php';

// Gunakan mysqli_real_escape_string agar tanda petik aman
$nama_mahasiswa = mysqli_real_escape_string($koneksi, $_POST['nama_mahasiswa']);
$prodi_mahasiswa = mysqli_real_escape_string($koneksi, $_POST['prodi_mahasiswa']);

// Masukkan data ke database
$query = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi_mahasiswa) VALUES ('$nama_mahasiswa', '$prodi_mahasiswa')");

if($query){
    header("location:index.php");
} else {
    echo "Gagal input data: " . mysqli_error($koneksi);
}
?>
