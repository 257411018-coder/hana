
<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_latihan");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>