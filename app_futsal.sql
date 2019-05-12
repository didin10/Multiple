-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2019 pada 16.30
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
(2, 'Adminsatu', 'Admin_satu@gmail.com', NULL, '$2y$10$KmwiYyHpgoBm/pZ7jCvVgeRsYc4.rwiPAEpK/C9s4UC74utML3jQm', NULL, '2019-04-09 11:08:17', '2019-04-09 11:08:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` bigint(20) UNSIGNED NOT NULL,
  `tgl_booking` date NOT NULL,
  `waktu_booking` time NOT NULL,
  `lapangan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uang_muka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `tgl_booking`, `waktu_booking`, `lapangan`, `uang_muka`, `biaya_booking`, `status`, `member_id`) VALUES
(1, '2019-04-30', '10:00:00', '', 'No DP', '120.000', 'belom bayar', 1),
(4, '2019-05-24', '03:00:00', 'Lapangan Parquette', 'Lunas belom', '100.000', 'Belom Bayar', 1),
(5, '2019-05-25', '10:00:00', 'Lapangan Parquette', 'Lunas', '100.000', 'lunas', 5),
(6, '2019-05-25', '03:00:00', 'Lapangan Sintetis', '50.000', '100.000', 'DP', 2),
(7, '2019-05-24', '04:02:00', 'Lapangan Parquette', 'Lunas', NULL, NULL, 2),
(8, '2019-05-16', '02:00:00', 'Lapangan Vinyl', 'Lunas', NULL, NULL, 1),
(9, '2019-05-16', '02:00:00', 'Lapangan Vinyl', 'Lunas', NULL, NULL, 1),
(10, '2019-05-31', '01:00:00', 'Lapangan Sintetis', 'Lunas', NULL, NULL, 5),
(11, '2019-05-11', '00:00:00', 'Karpet Plastik', 'Lunas', NULL, NULL, 4),
(12, '2019-05-11', '01:00:00', 'Lapangan Parquette', '50.000', NULL, NULL, 4),
(13, '2019-05-11', '01:00:00', 'Lapangan Parquette', '50.000', NULL, NULL, 4),
(14, '2019-05-18', '01:00:00', 'Lapangan Vinyl', 'Lunas belom', NULL, NULL, 1),
(15, '2019-05-11', '17:00:00', 'Lapangan Parquette', 'Lunas belom', NULL, NULL, 4),
(16, '2019-05-18', '01:00:00', 'Lapangan Parquette', 'Lunas', NULL, NULL, 1),
(17, '2019-05-09', '01:00:00', 'Lapangan Taraflex', 'Lunas belom', NULL, NULL, 2),
(18, '2019-05-18', '01:00:00', 'Karpet Plastik', 'Lunas belom', NULL, NULL, 1),
(19, '2019-05-24', '23:00:00', 'Lapangan Sintetis', 'Lunas', '100.000', 'Lunas', 5),
(20, '2019-05-11', '01:00:00', 'Lapangan Vinyl', 'Lunas belom', NULL, NULL, 2),
(21, '2019-05-18', '23:00:00', 'Lapangan Vinyl', 'Lunas', NULL, NULL, 1);

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
(2, 'Extrajoss cup 2019', '2019-04-27', 'Bebas Umur', 'Kuota 32 Tim', 'PT.JossSusu'),
(3, 'Extrajoss cup 2019', '2019-04-02', 'Bebas Umur', 'Kuota 32 Tim', 'PT.JossSusu'),
(5, 'Extrajoss cup 2019', '2019-04-18', 'Bebas Umur', 'Kuota 32 Tim , 12 pemain', 'PT.Joss'),
(6, 'wahyu', '2019-04-09', 'Bebas Umur', 'Kuota 32 Tim , 12 pemain', 'PT.JossSus');

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
(2, 'Albi Kurnia', 'Tulungagung', '20 Tahun', '0865544233', '2019-04-04'),
(4, 'Wahyu tri', 'babat - Lamongan', '20', '08645674334', '2019-04-20'),
(5, 'Non-Member', '-', '-', '-', '2018-10-01'),
(6, 'Albi Kurnia', 'Tulungagung', '20', '0865544233', '2019-05-08');

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
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'pengguna', 'pengguna@gmail.com', NULL, '$2y$10$lX3Vwas1l42UgFicNLimj.ctQ238UWpoaI5e2aK0O8J01uPtVh7lm', NULL, '2019-04-11 09:14:09', '2019-04-11 09:14:09');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
