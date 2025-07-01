-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2025 pada 18.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_willi_d1a240404`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(1, 'Saya, Dede Willi, adalah seorang mahasiswa di Universitas Subang yang sedang menempuh pendidikan di bidang Sistem Informasi. Sejak awal kuliah, saya memiliki ketertarikan yang besar terhadap teknologi dan bagaimana sistem informasi dapat digunakan untuk memecahkan berbagai masalah dalam dunia bisnis. Selama masa studi, saya aktif terlibat dalam berbagai kegiatan organisasi kampus, termasuk menjadi anggota klub teknologi dan mengikuti seminar-seminar yang berkaitan dengan perkembangan terbaru di bidang IT. Selain itu, saya juga berusaha untuk mengembangkan keterampilan praktis melalui proyek-proyek kelompok dan magang di perusahaan lokal. Dengan semangat untuk terus belajar dan berinovasi, saya berharap dapat berkontribusi dalam pengembangan solusi teknologi yang bermanfaat bagi masyarakat dan industri di masa depan.\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(1, 'Mahasiswa', 'Sistem Informasi (SI) memainkan peran krusial dalam bisnis modern dengan mengintegrasikan teknologi informasi, orang, dan proses untuk mengumpulkan, memproses, menyimpan, dan mendistribusikan informasi yang mendukung pengambilan keputusan, meningkatkan efisiensi operasional, dan meningkatkan layanan pelanggan. Dengan memanfaatkan SI, perusahaan dapat membuat keputusan yang lebih baik berdasarkan data akurat, mengotomatiskan proses untuk mengurangi biaya, serta mengembangkan produk dan layanan baru yang inovatif. Namun, tantangan seperti biaya implementasi, keamanan data, dan perubahan budaya organisasi harus dihadapi. Mahasiswa Sistem Informasi memiliki peluang besar untuk berkontribusi dalam pengembangan dan implementasi SI, baik sebagai pengembang sistem, analis data, maupun konsultan teknologi, sehingga mereka dapat menjadi aset berharga bagi perusahaan di masa depan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(1, 'karyawan 2 E', 'WhatsApp Image 2025-02-21 at 16.56.21_c0ef970a.jpg'),
(2, 'Willi', 'WhatsApp Image 2025-06-28 at 01.36.41_b788fa9d.jpg'),
(3, '2 E', 'foto6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
