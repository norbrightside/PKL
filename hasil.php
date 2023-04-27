<!DOCTYPE html>
<html>
  <head>
    <title>Hasil Diagnosis</title>
  </head>
  <body>
    <h1>Hasil Diagnosis</h1>
    <?php
      // Menyambung ke database
      $conn = new mysqli("localhost", "root", "", "sistem_pakar");
      // Memeriksa koneksi
      if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
      }
      // Mendapatkan gejala yang dipilih dari halaman index
      if(isset($_POST['gejala'])) {
        $gejala = $_POST['gejala'];
        // Mencari nilai probabilitas untuk setiap penyakit berdasarkan gejala yang dipilih
        $sql = "SELECT p.kode_penyakit, p.nama_penyakit, 
                ROUND(SUM(cf.nilai_cf), 2)*100 AS nilai_cf,
                p.penanganan
                FROM penyakit p
                JOIN cf ON p.id = cf.id_penyakit
                JOIN gejala g ON cf.id_gejala = g.id
                WHERE cf.id_gejala IN ('" . implode("', '", $gejala) . "')
                GROUP BY p.id
                ORDER BY nilai_cf DESC
                LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // Menampilkan hasil diagnosis
          $row = $result->fetch_assoc();
          echo "<p> Anda menderita " . $row['nama_penyakit'] . " dengan probabilitas " . $row['nilai_cf'] . "%</p>";
          echo "<p> Saran penanganan: " . $row['penanganan'] . "</p>";
        } else {
          echo "Tidak ada hasil diagnosis.";
        }
      } else {
        echo "Tidak ada gejala yang dipilih.";
      }
      // Menutup koneksi
      $conn->close();
    ?>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
  </body>
</html>