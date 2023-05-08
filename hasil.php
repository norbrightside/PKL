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
<title> Web Portofolio  </title>    
    <meta name="viewport"   content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Portofolio">
    <meta name="author" content="Ane">
    <meta name="keywords" content="web Portofolio">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>    
<title>Halaman Hasil Diagnosa</title> 
</head> 
<body> 
    <h1>Hasil Diagnosa</h1> 
    <p>Hasil diagnosa Anda adalah <?php echo $status;?> menderita <?php echo $nama_penyakit; ?></p> 
    <p>Persentase kepercayaan: <?php echo round($hasil * 100, 2); ?>%</p> 
	<a href="index.php" class="btn btn-biru"> Kembali ke Halaman Utama</a> 
</body> 
</html>