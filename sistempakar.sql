-- Membuat database baru
CREATE DATABASE IF NOT EXISTS sistem_pakar;
 -- Menggunakan database yang telah dibuat
USE sistem_pakar;
 -- Membuat tabel gejala
CREATE TABLE IF NOT EXISTS gejala (
  id INT PRIMARY KEY AUTO_INCREMENT,
  kode_gejala VARCHAR(10) NOT NULL,
  nama_gejala VARCHAR(255) NOT NULL
);
 -- Menambahkan data contoh ke tabel gejala
INSERT INTO gejala (kode_gejala, nama_gejala) VALUES
  ('G01', 'Sulit bernafas'),
  ('G02', 'Batuk berdahak'),
  ('G03', 'Tenggorokan sakit'),
  ('G04', 'Pusing'),
  ('G05', 'Mual');
 -- Membuat tabel penyakit
CREATE TABLE IF NOT EXISTS penyakit (
  id INT PRIMARY KEY AUTO_INCREMENT,
  kode_penyakit VARCHAR(10) NOT NULL,
  nama_penyakit VARCHAR(255) NOT NULL,
  penanganan VARCHAR(300) NOT NULL
);
 -- Menambahkan data contoh ke tabel penyakit
INSERT INTO penyakit (kode_penyakit, nama_penyakit, penanganan) VALUES
  ('P01', 'Pneumonia', 'Istirahat yang cukup'),
  ('P02', 'Tuberkulosis', 'Istirahat yang cukup'),
  ('P03', 'Bronkitis', 'Istirahat yang cukup');
 -- Membuat tabel nilai keyakinan (CF)
CREATE TABLE IF NOT EXISTS cf (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_gejala INT NOT NULL,
  id_penyakit INT NOT NULL,
  nilai_cf DECIMAL(5, 2) NOT NULL,
  FOREIGN KEY (id_gejala) REFERENCES gejala (id),
  FOREIGN KEY (id_penyakit) REFERENCES penyakit (id)
);
 -- Menambahkan data contoh ke tabel cf
INSERT INTO cf (id_gejala, id_penyakit, nilai_cf) VALUES
  (1, 1, 0.8),
  (2, 1, 0.9),
  (1, 2, 0.7),
  (3, 2, 0.6),
  (2, 3, 0.5),
  (3, 3, 0.4);