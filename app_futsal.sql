-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2019 pada 08.56
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Adminsatu', 'Admin_satu@gmail.com', NULL, '$2y$10$KmwiYyHpgoBm/pZ7jCvVgeRsYc4.rwiPAEpK/C9s4UC74utML3jQm', NULL, '2019-04-09 11:08:17', '2019-04-09 11:08:17'),
(3, 'Admin_dua', 'Admin_dua@gmail.com', NULL, '$2y$10$BaHwnf.qtl9uRiF7qEKqwuunmwFie/J5kAdK9BfmY9XA4ZAKm2/Si', NULL, '2019-05-12 00:52:28', '2019-05-12 00:52:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` bigint(20) UNSIGNED NOT NULL,
  `tgl_booking` date NOT NULL,
  `waktu_booking` time NOT NULL,
  `lapangan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selesai` time NOT NULL,
  `No_BK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `tgl_booking`, `waktu_booking`, `lapangan`, `selesai`, `No_BK`, `status`, `gmail`, `member_id`) VALUES
(18, '2019-05-18', '01:00:00', 'Karpet Plastik', '00:00:00', 'P2', 'Batal', 'bagus@gmail.com', 1),
(22, '2019-05-15', '01:00:00', 'Lapangan Parquette', '02:00:00', 'P1', 'Jadi', 'bagus@gmail.com', 1),
(25, '2019-05-17', '02:00:00', 'Lapangan Parquette', '04:00:00', 'p4', 'Proses', 'izzazlf@gmail.com', 15),
(26, '2019-05-02', '00:00:00', 'Lapangan Sintetis', '03:00:00', 'p5', 'Proses', 'bagus@gmail.com', 15),
(27, '2019-05-16', '00:00:00', 'Lapangan Parquette', '02:00:00', 'p6', 'Jadi', 'bagus@gmail.com', 13),
(28, '2019-05-24', '05:00:00', 'Lapangan Sintetis', '08:00:00', 'p7', 'Jadi', 'bagus@gmail.com', 1),
(29, '2019-05-25', '02:00:00', 'Lapangan Parquette', '03:00:00', 'p7', 'Jadi', 'bagus@gmail.com', 1),
(30, '2019-05-18', '01:00:00', 'Karpet Plastik', '03:00:00', NULL, NULL, 'bagus@gmail.com', 1),
(31, '2019-05-23', '23:00:00', 'Pilih Lapangan', '00:00:00', NULL, NULL, 'izzazlf@gmail.com', 11),
(32, '2019-05-23', '23:00:00', 'Pilih Lapangan', '00:00:00', NULL, NULL, 'izzazlf@gmail.com', 11),
(33, '2019-05-23', '23:00:00', 'Pilih Lapangan', '00:00:00', NULL, NULL, 'izzazlf@gmail.com', 11),
(34, '2019-05-10', '00:00:00', 'Lapangan Parquette', '23:00:00', 'P08', 'Proses', NULL, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_event` date NOT NULL,
  `batas_umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama_event`, `tgl_event`, `batas_umur`, `keterangan`, `organizer`) VALUES
(1, 'Piala Dispora Kabupaten Lamongan', '2019-04-18', '19 Tahun', 'Turnamen Tahunan Antar SMA Se-Lamongan', 'Dinas Pemuda Dan Olaraga'),
(2, 'Extrajoss cup 2019', '2019-04-27', 'Bebas Umur', 'Kuota 32 Tim', 'PT.JossSusu3'),
(3, 'Extrajoss cup 2019', '2019-04-02', 'Bebas Umur', 'Kuota 32 Tim', 'PT.Indomarine'),
(5, 'Extrajoss cup 2019', '2019-04-18', 'Bebas Umur', 'Kuota 32 Tim , 12 pemain', 'PT.Joss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `file` varchar(150) NOT NULL,
  `keterangan` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `file`, `keterangan`) VALUES
(1, '1557753264_BG.png', 'Kode P003'),
(2, '1557755810_LOGO.png', 'P003'),
(9, '1557810348_logo.png', 'P0011'),
(10, '1557901307_vokasi.png', 'P0023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telfon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama_member`, `alamat`, `umur`, `telfon`, `tgl_daftar`) VALUES
(1, 'Bagus Nur Wahyu', 'Kediri Aja', '21 Tahun', '081211212121', '2019-04-19'),
(11, 'Jihan', 'Surabaya', '16 Tahun', '08723451672', '2019-05-17'),
(12, 'Ari', 'Lumajang', '14 Tahun', '08123451172', '2019-05-17'),
(13, 'Andi', 'Surabaya', '38 Tahun', '08713451672', '2019-05-11'),
(14, 'pradana', 'malang', '28 Tahun', '08723151672', '2019-05-10'),
(15, 'Izza Zulfa', 'surabaya', '19 Tahun', '085604067797', '2019-05-22'),
(16, 'Alonso', 'Lamongan', '20 Tahun', '08645674334', '2019-05-29'),
(17, 'Adi Rahman', 'Semarang', '23 Tahun', '08645674334', '2019-05-27'),
(18, 'Helgi Chabdra', 'Tulungagung', '20 Tahun', '08756644332', '2019-05-16'),
(19, 'Ubaid', 'Lamongan', '20 Tahun', '0865544233', '2019-05-28'),
(20, 'Billy Keraf Setiawan', 'Papua', '24 Tahun', '098765423', '2019-05-25'),
(21, 'Ridwan Hamisi', 'Samarinda', '20 Tahun', '08756644332', '2019-05-31'),
(23, 'Dhimas Edo K', 'Malang', '20 Tahun', '08756644332', '2019-05-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_09_160524_create_admins', 1),
(4, '2019_04_09_160722_create_events', 1),
(5, '2019_04_09_160800_create_member', 1),
(6, '2019_04_09_160858_create_lapangan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(10) NOT NULL,
  `bkg_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_transaksi` varchar(150) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `bkg_id`, `jumlah`, `status`, `keterangan`, `kode_transaksi`, `tgl_bayar`) VALUES
(2, 18, 'Rp.500.000', 'lunas', 'segera melakukan transaksi', 'R002', '2019-05-08'),
(3, 18, 'Rp.500.000', 'Proses', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'R001', '2019-05-30'),
(4, 22, 'Rp.500.000', 'Proses', 'Segerah Melakukan Transaksi BNI 0865xxxx AT.LFC', 'R003', '2019-05-22'),
(5, 27, 'Rp.500.000', 'Proses', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'ROO4', '2019-05-24'),
(6, 28, 'Rp.200.000', 'Jadi', 'Segera membayar', 'P008', '2019-05-24'),
(7, 28, 'Rp.200.000', 'Jadi', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'P008', '2019-05-24'),
(8, 28, 'Rp.700.000', 'Jadi', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'P011', '2019-05-24'),
(9, 28, 'Rp.600.000', 'Jadi', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'P009', '2019-05-24'),
(10, 28, 'Rp.300.000', 'Jadi', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'P018', '2019-05-24'),
(11, 28, 'Rp.100.000', 'Jadi', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'P028', '2019-05-24'),
(12, 26, 'Rp.500.000', 'Jadi', 'Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC', 'R0099', '2019-05-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `email`, `comment`) VALUES
(2, 'dipo', 'didin9570@gmail.com', 'mantabs'),
(3, 'Satrio', 'Satrio@gmail.com', 'YYYYY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'didin', 'didin9570@gmail.com', NULL, '$2y$10$e8kQgodoPFVcTPXV7Lw8MOh.g/Qicw2nsfK.nap0AK0sXxp86uNeW', NULL, '2019-04-09 09:53:02', '2019-04-09 09:53:02'),
(2, 'hansamu', 'hansamu@gmail.com', NULL, '$2y$10$F/yuD9tj.zikTNsRdnoCvuk/dIBvPxfvlI5MApiYGdd5FpdPFcHqS', NULL, '2019-04-09 23:42:05', '2019-04-09 23:42:05'),
(3, 'albi', 'aldi@gmail.com', NULL, '$2y$10$of3BkDUr5YlSlSylZGhj2.Wvt3JAN3KfbciquZodfpBxlGkKiM2Je', NULL, '2019-04-10 02:34:45', '2019-04-10 02:34:45'),
(4, 'bsa', 'bgs@gmail.com', NULL, '$2y$10$.sFEcuHU7AGM6qSey3n4c.RCdrAGxAXH2R6PwF/NNCEh.mH.J28dq', NULL, '2019-04-10 02:42:38', '2019-04-10 02:42:38'),
(5, 'pengguna', 'pengguna@gmail.com', NULL, '$2y$10$lX3Vwas1l42UgFicNLimj.ctQ238UWpoaI5e2aK0O8J01uPtVh7lm', NULL, '2019-04-11 09:14:09', '2019-04-11 09:14:09'),
(6, 'izza', 'izzazlf@gmail.com', NULL, '$2y$10$2Xbk2O9e1Gux27J9vmklfuRrE2Iw62Q5/Q.Wf5rbfI.uTVniBKwWW', NULL, '2019-05-11 23:44:31', '2019-05-11 23:44:31'),
(7, 'Satrio', 'Satrio@gmail.com', NULL, '$2y$10$xdT6Y.lU9s32kTvy94RuyO4/ahF8y.4TUYQCNilSfUTMGb.Po5LUi', NULL, '2019-05-14 23:19:14', '2019-05-14 23:19:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `member_id` (`member_id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_booking` (`bkg_id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`bkg_id`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
