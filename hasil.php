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
<link rel="icon" href="assets/images/logo.png">
<link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
<title> Hasil Diagonosa  </title>    
    <meta name="viewport"   content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Diagnosa">
    <meta name="author" content="Ane">
    <meta name="keywords" content="Hasil Diagnosa">
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
<header>
            <nav>
            <a href="index.php"><img src="assets/images/logo.png" alt="Logo Puskesmas Talawi"><b> Puskesmas Talawi</b></a>
                <ul>
                    <li> <a href="index.php"> Beranda </a></li>
                    <li> <a href="#blog"> Blog</a></li>
                    <li> <a href="#kontak"> Kontak</a></li>
                </ul>
            </nav>
        </header>

    <main>
        
        <section id="hasil diagonsa">
    <h1>Hasil Diagnosa Anda</h1> 
    <p>Hasil diagnosa Anda adalah <?php echo $status;?> menderita <?php echo $nama_penyakit; ?></p> 
    <p>Persentase kepercayaan: <?php echo round($hasil * 100, 2); ?>%</p> 
	<a href="index.php" class="btn btn-biru"> Kembali ke Halaman Utama</a> 
        </section>
    <section id="kontak">
                <h1 class="judul teks-tengah">Kontak Pendaftaran</h1>
                <div class="container">
                    <div style="width: 50%;text-align: left;">
                    <b> Telp :</b>
                    <p> (0754) 410444</p>

                    <b> Alamat :</b>
                    <p> Talawi Hilir, Talawi, Kota Sawahlunto
                    <p> Sumatera Barat </p>
                    
                    <b> Jam buka :</b>
                    <p> 24 Jam</p>
                    </div>
                    <form action="send.php" method="post" target="_blank">
                        <input type="text" name="name" placeholder="Nama"/>
                        <input type="text" name="usia" placeholder="Usia"/>
                        <input type="text" name="pesan" placeholder="Pesan Anda"/>
                    </textarea>
                    <br/>
                    <button type="submit" name="submit" class="btn btn-biru" > Kirim Pesan</button>
                    </form>
                </iv>
                </section>
                <!--Bagian Kontak-->
        </main>
        <footer>
            <p> Web Diagnosa Penyakit Paru - Puskesmas Talawi</p>
        </footer>
</body>
</html>