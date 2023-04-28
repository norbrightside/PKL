<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body>
    <h1>Selamat Datang di Sistem Pakar Penyakit Paru-Paru</h1>
    <form action="hasil.php" method="post">
      <h2 class="container">  Pilih Gejala yang Anda Alami:</h2>
      <?php
        // Menyambung ke database
        $conn = new mysqli("localhost", "root", "", "sistem_pakar");
        // Memeriksa koneksi
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }
        // Mengambil data gejala dari database
        $sql = "SELECT id, kode_gejala, nama_gejala FROM gejala";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // Menampilkan data gejala dalam checkbox
          while($row = $result->fetch_assoc()) {
            echo "<div class='teks-kiri'><input type='checkbox' name='gejala[]' value='" . $row["id"] . "'>" . $row["kode_gejala"] . " - " . $row["nama_gejala"] . "<br>";
          }
        } else {
          echo "Tidak ada data gejala.";
        }
        // Menutup koneksi
        $conn->close();
      ?>
      <br>
      <input type="submit" class="btn-biru" value="Diagnosis">
    </form>
  </body>
</html>