-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 02:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakarcovid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kd_gejala`, `gejala`) VALUES
(1, 'G001', 'Demam'),
(2, 'G002', 'Batuk'),
(3, 'G003', 'Kelelahan'),
(4, 'G004', 'Kehilangan Rasa atau Bau'),
(5, 'G005', 'Sakit Tenggorokan'),
(6, 'G006', 'Sakit Kepala'),
(7, 'G007', 'Sakit dan Nyeri'),
(8, 'G008', 'Diare'),
(9, 'G009', 'Ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki'),
(10, 'G010', 'Mata merah atau iritasi\r\n'),
(11, 'G011', 'kesulitan bernapas atau sesak napas'),
(12, 'G012', 'kesulitan berbicara atau bergerak, atau bingung'),
(13, 'G013', 'nyeri dada'),
(14, 'G014', 'Bersin-bersin'),
(15, 'G015', 'Hidung tersumbat dan berair'),
(16, 'G016', 'Sakit tenggorokan'),
(17, 'G017', 'Sakit kepala ringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kode`
--

CREATE TABLE `tb_kode` (
  `id` int(11) NOT NULL,
  `G001` tinyint(4) NOT NULL,
  `G002` tinyint(4) NOT NULL,
  `G003` tinyint(4) NOT NULL,
  `G004` tinyint(4) NOT NULL,
  `G005` tinyint(4) NOT NULL,
  `G006` tinyint(4) NOT NULL,
  `G007` tinyint(4) NOT NULL,
  `G008` tinyint(4) NOT NULL,
  `G009` tinyint(4) NOT NULL,
  `G010` tinyint(4) NOT NULL,
  `G011` tinyint(4) NOT NULL,
  `G012` tinyint(4) NOT NULL,
  `G013` tinyint(4) NOT NULL,
  `G014` tinyint(4) NOT NULL,
  `G015` tinyint(4) NOT NULL,
  `G016` tinyint(4) NOT NULL,
  `G017` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kode`
--

INSERT INTO `tb_kode` (`id`, `G001`, `G002`, `G003`, `G004`, `G005`, `G006`, `G007`, `G008`, `G009`, `G010`, `G011`, `G012`, `G013`, `G014`, `G015`, `G016`, `G017`) VALUES
(1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0),
(4, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `penyakit` text NOT NULL,
  `info` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `penyakit`, `info`, `solusi`) VALUES
(1, 'coronavirus (COVID-19)', 'Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).\r\n\r\nVirus ini menular melalui percikan dahak (droplet) dari saluran pernapasan, misalnya ketika berada di ruang tertutup yang ramai dengan sirkulasi udara yang kurang baik atau kontak langsung dengan droplet.', 'Belum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Namun, beberapa obat seperti favipirapir dan remdesivir sudah bisa digunakan pada kasus COVID-19 sedang hingga berat. Sementara itu, obat-obatan lain, seperti molnupiravir, masih diteliti efektivitas dan manfaatnya sebagai pengobatan COVID-19.'),
(2, 'Virus Corona (COVID-19) Gejala yang sedikit tidak umum', 'Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, Middle-East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS).\r\n\r\nAda dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia.', 'belum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Namun, beberapa obat seperti favipirapir dan remdesivir sudah bisa digunakan pada kasus COVID-19 sedang hingga berat. Sementara itu, obat-obatan lain, seperti molnupiravir, masih diteliti efektivitas dan manfaatnya sebagai pengobatan COVID-19.\r\n'),
(3, 'Virus Corona (COVID-19) Gejala Serius', 'Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, Middle-East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS).\r\n\r\nAda dugaan bahwa virus Corona awalnya ditularkan dari hewan ke manusia. Namun, kemudian diketahui bahwa virus Corona juga menular dari manusia ke manusia.', 'elum ada obat yang benar-benar efektif untuk mengatasi infeksi virus Corona atau COVID-19. Namun, beberapa obat seperti favipirapir dan remdesivir sudah bisa digunakan pada kasus COVID-19 sedang hingga berat. Sementara itu, obat-obatan lain, seperti molnupiravir, masih diteliti efektivitas dan manfaatnya sebagai pengobatan COVID-19.'),
(4, 'Flu Biasa', 'Flu biasa terjadi ketika rhinovirus menyerang saluran pernapasan. Umumnya, keluhan yang muncul datang dari hidung dan tenggorokan (saluran pernapasan atas)', 'Flu umumnya dapat sembuh sendiri dalam waktu 4–9 hari. Semakin kuat daya tahan tubuh, semakin cepat flu sembuh. Oleh karena itu, dokter akan menyarankan penderita flu untuk banyak beristirahat, makan makanan bernutrisi, dan minum air putih yang cukup.\r\nSementara untuk meringankan gejala flu, dokter biasanya akan memberikan:\r\n-Chlorpheniramine.\r\n-Paracetamol dan ibuprofen.\r\n-Kombinasi paracetamol, chlorpheniramine, pseudoepherine, dan guaifenesin.');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `alamat`, `no_hp`, `gambar`) VALUES
(2, 'rustam', '12345', 'Okinawa', '086554432121', '1348942583_blk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_kode`
--
ALTER TABLE `tb_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
