-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2024 at 03:51 AM
-- Server version: 9.0.1
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sub_judul` varchar(100) NOT NULL,
  `url_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `sub_judul`, `url_gambar`) VALUES
(1, 'Gabriel Davinche Manalu', 'Mahasiswa Informatika Unviersitas Pembangunan Jaya', 'assets/img/hero-bg3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_kontak`
--

CREATE TABLE `data_kontak` (
  `id` int NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_kontak`
--

INSERT INTO `data_kontak` (`id`, `alamat`, `nomor`, `email`) VALUES
(1, 'Wisma Tajur, Ciledug', '+62 821-6265-4079', 'gabriel.manalu04@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'aa', 's@gmail.com', 'a', 'adadadgaoi');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `jenis_pendidikan` varchar(20) NOT NULL,
  `waktu_pendidikan` varchar(50) NOT NULL,
  `instansi_pendidikan` varchar(50) NOT NULL,
  `nilai` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jenis_pendidikan`, `waktu_pendidikan`, `instansi_pendidikan`, `nilai`) VALUES
(1, 'SD', '2010 - 2016', 'SDN Jombang 01', '80'),
(2, 'SMP', '2016 - 2019', 'SMPN 6 Tangerang Selatan', '82'),
(3, 'SMA', '2019 - 2022', 'SMAN 10 Tangerang Selatan', '86'),
(4, 'Universitas', '2023 - Now', 'Universitas Pembangunan Jaya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `nama_pengalaman` varchar(100) NOT NULL,
  `waktu_pengalaman` varchar(100) NOT NULL,
  `lokasi_pengalaman` varchar(100) NOT NULL,
  `deskripsi_pengalaman` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `nama_pengalaman`, `waktu_pengalaman`, `lokasi_pengalaman`, `deskripsi_pengalaman`) VALUES
(1, 'Membuat Desain Aplikasi Mobile', '2023', 'Universitas Pembangunan Jaya', 'Mengembangkan desain antarmuka pengguna (UI) untuk aplikasi mobile yang dirancang untuk memenuhi keburuhan user menggunakan Figma, mencakup wireframes, mockups, dan prototipe interaktif. <br> <br>\r\nMenganalisis perilaku pengguna untuk mengidentifikasi masalah utama dalam alur penggunaan aplikasi, serta memberikan solusi desain yang lebih efektif. <br> <br>\r\nMembuat powerpoint presentasi desain dan laporan desain rancangan aplikasi <br> <br>\r\nBerkoordinasi dengan tim untuk memastikan desain sesuai dengan kebutuhan user. <br> <br>'),
(2, 'MEMBUAT JURNAL MENGENAI INOVASI TEKNOLOGI UNTUK PENYANDANG DISABILITAS', '2024', 'Universitas Pembangunan Jaya', 'Meneliti dan menganalisis berbagai solusi teknologi inovatif yang mendukung penyandang disabilitas, mencakup aplikasi aksesibilitas, perangkat assistive, dan teknologi berbasis AI. <br> <br>\r\nMelakukan studi literatur untuk memperkaya isi jurnal dengan data terkini dan relevan.');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id` int NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `tahun_proyek` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `url_gambar` varchar(100) NOT NULL,
  `url_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id`, `nama_proyek`, `tahun_proyek`, `url_gambar`, `url_link`) VALUES
(4, 'Web Design - Aplikasi MYP', '2023-2024', 'assets/img/portfolio/project1.png', 'https://www.figma.com/design/fBUJyN0JDb8PxvnYexOjAU/Project-IMK?node-id=0-1&node-type=canvas&t=isVNNrI1OpORb9st-0'),
(5, 'Web Design - WAHU WEB', '2024', 'assets/img/portfolio/project2.png', 'https://www.figma.com/design/jdB3Y92PwsCQ04GaEus9WC/WAHU-WEB?node-id=0-1&node-type=canvas&t=SCz1Q0SZR7tLC9CW-0');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int NOT NULL,
  `nama_skill` varchar(20) NOT NULL,
  `persen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nama_skill`, `persen`) VALUES
(1, 'HTML', 65),
(2, 'PHP', 60),
(3, 'CSS', 60),
(4, 'Pyhton', 60),
(5, 'Figma', 80),
(6, 'Ibis Paint', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `url_gambar` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `pendidikan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `deskripsi`, `url_gambar`, `nama`, `hobby`, `umur`, `pendidikan`) VALUES
(1, 'Seorang Mahasiswa Informatika yang sangat senang belajar dan ingin mencari tahu selak beluk dunia, terutama dunia komputer.', 'assets/img/aboutme.jpeg', 'Gabriel Davinche Manalu', 'Menyanyi Dan Bermain', '20', 'S1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kontak`
--
ALTER TABLE `data_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_kontak`
--
ALTER TABLE `data_kontak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
