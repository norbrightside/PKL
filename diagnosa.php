<?php
require_once 'koneksi.php';
// ambil data gejala dari database
$sql_gejala = "SELECT * FROM gejala";
$result_gejala = mysqli_query($conn, $sql_gejala);
// ambil data kondisi dari database
$sql_kondisi = "SELECT * FROM kondisi";
$result_kondisi = mysqli_query($conn, $sql_kondisi);
 // buat tombol untuk diagnosa
if (isset($_POST['diagnosa'])) {
    // ambil nilai CF gejala yang dipilih oleh pengguna
    $cf_gejala1 = $_POST['kondisi_1'];
    $cf_gejala2 = $_POST['kondisi_2'];
    $cf_gejala3 = $_POST['kondisi_3'];
    $cf_gejala4 = $_POST['kondisi_4'];
      // ambil nilai CF penyakit dari database
    $cf_penyakit1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT penyakit_nilai_cf FROM penyakit WHERE penyakit_id = 1"))['penyakit_nilai_cf'];
    $cf_penyakit2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT penyakit_nilai_cf FROM penyakit WHERE penyakit_id = 2"))['penyakit_nilai_cf'];
     // melakukan diagnosa sesuai dengan rules yang telah ditentukan
    $hasil1 = min($cf_gejala1, $cf_gejala2) * $cf_penyakit1;
    $hasil2 = min($cf_gejala2, $cf_gejala3, $cf_gejala4) * $cf_penyakit2;
     // mencari nilai tertinggi dan menyimpan hasil diagnosa ke dalam variabel $hasil
$hasil = max($hasil1, $hasil2);
if ($hasil == $hasil1) {
    $penyakit_id = 1;
    $persentase = $hasil1 * 100 ;
} else {
    $penyakit_id = 2;
    $persentase = $hasil2 * 100 ;
}

// ambil nama penyakit dari database berdasarkan id penyakit
$sql_penyakit = "SELECT penyakit_nama FROM penyakit WHERE penyakit_id = $penyakit_id";
$result_penyakit = mysqli_query($conn, $sql_penyakit);
$row_penyakit = mysqli_fetch_assoc($result_penyakit);
$nama_penyakit = $row_penyakit['penyakit_nama'];
     // simpan hasil diagnosa ke session
    session_start();
    $_SESSION['hasil_diagnosa'] = $hasil;
    $_SESSION['penyakit_id'] = $penyakit_id;
    $_SESSION['nama_penyakit'] = $nama_penyakit;
     // redirect ke halaman hasil.php
    header('Location: hasil.php');
    exit();
}
?>
 <!DOCTYPE html>
<html>
<head>
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
    <title>Halaman Gejala</title>
</head>
<body>
<header>
            <nav>
                <a href="index.php"> <b> Puskesmas Talawi</b> </a>
                <ul>
                    <li> <a href="index.php"> Beranda </a></li>
                    <li> <a href="#blog"> Blog</a></li>
                    <li> <a href="#kontak"> Kontak</a></li>
                </ul>
            </nav>
        </header>
    <h1>Halaman Gejala</h1>
    <form method="post">
        <table>
            <tr>
                <th>No.</th>
                <th>Nama Gejala</th>
                <th>Kondisi</th>
            </tr>
            <?php $no = 1; ?>
            <?php while ($row_gejala = mysqli_fetch_assoc($result_gejala)) : ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row_gejala['gejala_nama']; ?></td>
                    <td>
                        <select name="kondisi_<?php echo $row_gejala['gejala_id']; ?>">
                            <?php while ($row_kondisi = mysqli_fetch_assoc($result_kondisi)) : ?>
                                <option value="<?php echo $row_kondisi['kondisi_nilai_cf']; ?>"><?php echo $row_kondisi['kondisi_nama']; ?></option>
                            <?php endwhile; ?>
                            <?php mysqli_data_seek($result_kondisi, 0); ?>
                        </select>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endwhile; ?>
        </table>
        <br>
        <input type="submit" name="diagnosa" value="Diagnosa">
    </form>
</body>
</html>