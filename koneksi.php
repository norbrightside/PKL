<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "penyakit_paru";
// membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);
// check koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>