<?php 
session_start(); 
$hasil = $_SESSION['hasil_diagnosa']; 
if ($hasil >= 0.9) { 
    $status = "Sangat mungkin"; 
} else if ($hasil >= 0.7) { 
    $status = "Mungkin"; 
} else if ($hasil >= 0.5) { 
    $status = "Kemungkinan kecil"; 
} else { 
    $status = "Tidak mungkin"; 
} 
$nama_penyakit = $_SESSION['nama_penyakit']
?> 
<!DOCTYPE html> 
<html> 
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
    <title>Halaman Hasil Diagnosa</title> 
</head> 
<body> 
    <h1>Hasil Diagnosa</h1> 
    <p>Hasil diagnosa Anda adalah <?php echo $status;?> menderita <?php echo $nama_penyakit; ?></p> 
    <p>Persentase kepercayaan: <?php echo round($hasil * 100, 2); ?>%</p> 
	<a href="index.php" class="btn btn-biru"> Kembali ke Halaman Utama</a> 
</body> 
</html>