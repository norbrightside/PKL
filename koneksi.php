<?php
$host = "localhost";
$user = "id21325529_root";
$password = "Rizki5665.";
$database = "id21325529_penyakit_paru";
// membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);
// check koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>