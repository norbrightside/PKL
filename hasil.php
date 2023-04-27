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
        $sql = "SELECT p.kode_penyakit, p.nama_penyakit, ROUND(SUM(cf.nilai_cf)*100, 2) AS nilai_cf
                FROM penyakit p
                JOIN cf ON p.id = cf.id_penyakit
                WHERE cf.id_gejala IN ('" . implode("', '", $gejala) . "')
                GROUP BY p.id
                ORDER BY nilai_cf DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // Menampilkan hasil diagnosis dalam tabel
          echo "<table>
                <tr>
                  <th>Kode Penyakit</th>
                  <th>Nama Penyakit</th>
                  <th>Nilai Probabilitas</th>
                </tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['kode_penyakit'] . "</td>
                    <td>" . $row['nama_penyakit'] . "</td>
                    <td>" . $row['nilai_cf'] . "%</td>
                  </tr>";
          }
          echo "</table>";
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