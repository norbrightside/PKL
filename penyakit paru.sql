CREATE DATABASE IF NOT EXISTS penyakit_paru;
 USE penyakit_paru;
 CREATE TABLE penyakit (
  penyakit_id INT NOT NULL AUTO_INCREMENT,
  penyakit_nama VARCHAR(100) NOT NULL,
  PRIMARY KEY (penyakit_id)
);
 CREATE TABLE gejala (
  gejala_id INT NOT NULL AUTO_INCREMENT,
  gejala_nama VARCHAR(200) NOT NULL,
  PRIMARY KEY (gejala_id)
);
 CREATE TABLE kondisi (
  kondisi_id INT NOT NULL AUTO_INCREMENT,
  kondisi_nama VARCHAR(50) NOT NULL,
  kondisi_nilai_cf FLOAT NOT NULL,
  PRIMARY KEY (kondisi_id)
);
 INSERT INTO penyakit (penyakit_nama) VALUES
('Infeksi Saluran Penafasan Atas (ISPA)'),
('Asma'),
('Bronkiolitis'),
('Bronkitis Akut'),
('Tuberkulosis Paru (TB Paru)'),
('Penyakit Paru Obstruktif Kronik (PPOK)'),
('Pneumonia');
 INSERT INTO gejala (gejala_nama) VALUES
('Batuk '),
('Batuk Berdahak'),
('Sesak Nafas'),
('Demam'),
('Napas Berbunyi (Mengi)'),
('Ada Riwayat Alergi'),
('Ada Riwayat Asma dalam Keluarga'),
('Batuk Makin Parah'),
('Sulit Menelun Sesuatu'),
('Muntah Karena Batuk'),
('Batuk Yang Disertai Dahak Berwarna putih, Kuning, atau Hijau'),
('Nyeri Dada'),
('Sakit Tenggorokan'),
('Menggigil'),
('Nyeri Otot dan/atau Punggung '),
('Badan Lemas'),
('Batuk >2 Minggu '),
('Batuk Dapat Campur Darah'),
('Berat Badan Turun'),
('Tidak Nafsu Makan'),
('Berkeringat Pada Malam Hari'),
('Batuk Kronik Dengan/Tanpa Dahak Yang Tidak Kunjung Sembuh'),
('Makin Sering Tersengal-sengal'),
('Rasa Berat Di Dada'),
('Mual'),
('Banyak Berkeringat'),
('Keletihan'),
('Napas Cepat'),
('Nyeri Kepala'),
('Hidung Tersumbat');
 INSERT INTO kondisi (kondisi_nama, kondisi_nilai_cf) VALUES
('Iya', 1),
('Hampir Iya', 0.8),
('Mungkin', 0.6),
('Hampir Tidak', 0.2),
('Tidak', 0);