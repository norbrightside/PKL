CREATE DATABASE IF NOT EXISTS penyakit_paru;
 USE penyakit_paru;
 CREATE TABLE penyakit (
  penyakit_id INT NOT NULL AUTO_INCREMENT,
  penyakit_nama VARCHAR(100) NOT NULL,
  penyakit_nilai_cf FLOAT NOT NULL,
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
 INSERT INTO penyakit (penyakit_nama, penyakit_nilai_cf) VALUES
('Tuberkulosis', 0.9),
('Paru Obstruktif Kronik (PPOK)', 0.8),
('Kanker Paru', 0.7),
('Pneumonia', 0.6);
 INSERT INTO gejala (gejala_nama) VALUES
('Batuk lebih dari 2 minggu'),
('Batuk Berdahak'),
('Sesak Nafas'),
('Badan Lemas'),
('Nyeri dada'),
('Batuk Dapat Campur Darah'),
('Tidak Nafsu Makan'),
('Berkeringat Pada Malam Hari'),
('Menggigil'),
('Demam'),
('Berat Badan Menurun'),
('Batuk Kronik Dengan/Tanpa Dahak Yang Tidak Kunjung Sembuh'),
('Makin Sering Tersengal-Sengal'),
('Rasa Berat Di Dada'),
('Batuk Berkelanjutan dan Bertambah Parah Hingga Mengalami Batuk Berdarah'),
('Pembengkakan Pada Muka Atau Leher'),
('Sakit Kepala '),
('Sakit Pada Tulang/Bahu/Lengan/Tangan'),
('Suara Menjadi Serak'),
('Kesulitan Atau Sakit Saat Menelan Sesuatu'),
('Perubahan Bentuk Ujung Jari Menjadi Cembung ');
 INSERT INTO kondisi (kondisi_nama, kondisi_nilai_cf) VALUES
('Pasti', 0.9),
('Mungkin', 0.7),
('Tidak', 0);