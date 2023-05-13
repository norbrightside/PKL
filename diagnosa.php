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
    $cf_gejala5 = $_POST['kondisi_5'];
    $cf_gejala6 = $_POST['kondisi_6'];
    $cf_gejala7 = $_POST['kondisi_7'];
    $cf_gejala8 = $_POST['kondisi_8'];
    $cf_gejala9 = $_POST['kondisi_9'];
    $cf_gejala10 = $_POST['kondisi_10'];
    $cf_gejala11 = $_POST['kondisi_11'];
    $cf_gejala12 = $_POST['kondisi_12'];
    $cf_gejala13 = $_POST['kondisi_13'];
    $cf_gejala14 = $_POST['kondisi_14'];
    $cf_gejala15 = $_POST['kondisi_15'];
    $cf_gejala16 = $_POST['kondisi_16'];
    $cf_gejala17 = $_POST['kondisi_17'];
    $cf_gejala18 = $_POST['kondisi_18'];
    $cf_gejala19 = $_POST['kondisi_19'];
    $cf_gejala20 = $_POST['kondisi_20'];
    $cf_gejala21 = $_POST['kondisi_21'];
    $cf_gejala22 = $_POST['kondisi_22'];
    $cf_gejala23 = $_POST['kondisi_23'];
    $cf_gejala24 = $_POST['kondisi_24'];
    $cf_gejala25 = $_POST['kondisi_25'];
    $cf_gejala26 = $_POST['kondisi_26'];
    $cf_gejala27 = $_POST['kondisi_27'];
    $cf_gejala28 = $_POST['kondisi_28'];
    $cf_gejala29 = $_POST['kondisi_29'];
    $cf_gejala30 = $_POST['kondisi_30'];

    
     // melakukan diagnosa sesuai dengan rules yang telah ditentukan
    $hasil1 = min($cf_gejala2, $cf_gejala3, $cf_gejala4, $cf_gejala30) * 0.55;
    $hasil2 = min($cf_gejala2, $cf_gejala3, $cf_gejala4) * 0.45;
    $hasil3 = min($cf_gejala2, $cf_gejala3, $cf_gejala5, $cf_gejala6, $cf_gejala7) * 0.69;
    $hasil4 = min($cf_gejala2, $cf_gejala3, $cf_gejala5) * 0.31;
    $hasil5 = min($cf_gejala5, $cf_gejala5, $cf_gejala8, $cf_gejala9, $cf_gejala10) * 0.55;
    $hasil6 = min($cf_gejala3, $cf_gejala5, $cf_gejala8, $cf_gejala9) * 0.45;
    $hasil7 = min($cf_gejala3, $cf_gejala4, $cf_gejala11, $cf_gejala12, $cf_gejala13, $cf_gejala14, $cf_gejala15, $cf_gejala16) * 0.61;
    $hasil8 = min($cf_gejala3, $cf_gejala4, $cf_gejala11, $cf_gejala12, $cf_gejala13, $cf_gejala14, $cf_gejala16) * 0.39;
    $hasil9 = min($cf_gejala2, $cf_gejala3, $cf_gejala4, $cf_gejala12, $cf_gejala14, $cf_gejala16, $cf_gejala17, $cf_gejala18, $cf_gejala19, $cf_gejala20, $cf_gejala21) * 0.54;
    $hasil10 = min($cf_gejala2, $cf_gejala3, $cf_gejala4, $cf_gejala12, $cf_gejala14, $cf_gejala16, $cf_gejala17, $cf_gejala19, $cf_gejala20, $cf_gejala21) * 0.46;
    $hasil11 = min($cf_gejala5, $cf_gejala16, $cf_gejala19, $cf_gejala22, $cf_gejala23, $cf_gejala24) * 0.50;
    $hasil12 = min($cf_gejala5, $cf_gejala16, $cf_gejala19, $cf_gejala22, $cf_gejala24) * 0.50;
    $hasil13 = min($cf_gejala1, $cf_gejala4, $cf_gejala10, $cf_gejala12, $cf_gejala15, $cf_gejala16, $cf_gejala20, $cf_gejala25, $cf_gejala26, $cf_gejala27, $cf_gejala28, $cf_gejala29) * 0.64;
    $hasil14 = min($cf_gejala1, $cf_gejala4, $cf_gejala12, $cf_gejala14, $cf_gejala16, $cf_gejala20, $cf_gejala26) * 0.36;

    //menggabungkan nilai CF rule dengan penyakit yang sama
    $hasil15 = $hasil1+($hasil2*(1-$hasil1));
    $hasil16 = $hasil3+($hasil4*(1-$hasil3));
    $hasil17 = $hasil5+($hasil6*(1-$hasil5));
    $hasil18 = $hasil7+($hasil8*(1-$hasil7));
    $hasil19 = $hasil9+($hasil10*(1-$hasil9));
    $hasil20 = $hasil11+($hasil12*(1-$hasil11));
    $hasil21 = $hasil13+($hasil14*(1-$hasil13));

     // mencari nilai tertinggi dan menyimpan hasil diagnosa ke dalam variabel $hasil
    $hasil = max($hasil15, $hasil16, $hasil17, $hasil18, $hasil19, $hasil20, $hasil21);
    if ($hasil == $hasil15) {
        $penyakit_id = 1;
    } else 
    if ($hasil == $hasil16){
        $penyakit_id = 2;
    } else
    if ($hasil == $hasil17) {
        $penyakit_id = 3;
    } else
    if ($hasil == $hasil18) {
        $penyakit_id = 4;
    } else
    if ($hasil == $hasil19) {
        $penyakit_id = 5;
    } else
    if ($hasil == $hasil20) {
        $penyakit_id = 6;
    } else
    if ($hasil == $hasil21) {
        $penyakit_id = 7;
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
    <meta name="description" content="Diagonsa Penyakit Paru">
    <meta name="keywords" content="Sistem Pakar">
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
    <title>Halaman Diagonosa</title>
</head>
<body>
<header>
            <nav>
                <a href="index.php"> <b> Puskesmas Talawi</b> </a>
                <ul>
                    <li> <a href="index.php"> Beranda </a></li>
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
     <!--Bagian KOntak-->
     <section id="kontak">
                <h1 class="judul teks-tengah">Kontak</h1>
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
                </div>
                </section>
                <!--Bagian Kontak-->
        </main>
        <footer>
            <p> Web Diagnosa Penyakit Paru - Puskesmas Talawi</p>
        </footer>
</body>
</html>