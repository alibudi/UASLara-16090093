-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2019 pada 12.22
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `headline`, `foto`, `penulis`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bencana', 'bencana', '1562692186yDSzdj9fW4BXi5F7OGxVtS.jpg', 'joni', 'inilah', '2019-07-09 10:09:46', '2019-07-10 17:11:05', '2019-07-10 17:11:05'),
(2, 'Seminar dan Rapat', 'Seminar dan Rapat Kordinasi DPRD Provinsi jawa Tengah', '1562803851CYj0aaYCKycOLCC64ptBJw.jpg', 'joni', 'ini adalah seminar dan rapat', '2019-07-10 17:10:51', '2019-07-10 17:10:51', NULL),
(3, 'rapat desk finalisasi raperda', 'rapat desk finalisasi raperda', '1562829923Cd3eJVfckfLQEw3SNYPAX5.jpg', 'andi', 'rapat desk finalisasi raperda', '2019-07-11 00:25:23', '2019-07-11 00:25:23', NULL),
(4, 'rapat', 'rapatt', '1562829962HxFGhbS3QPbCsyhbKRMil6.jpg', 'budi', 'rapatt', '2019-07-11 00:26:02', '2019-07-11 00:26:02', NULL),
(5, 'seminar', 'seminar', '1562829983PIpKRAfnH1fUcqXk5ppdvl.jpg', 'adi', 'seminar', '2019-07-11 00:26:23', '2019-07-11 00:26:23', NULL),
(6, 'rapat kordinasi', 'kordinasi', '1563091219EgkCFLL0oZU8BGQyc2PgRY.jpg', 'joni', 'rapat adalah', '2019-07-14 00:59:54', '2019-07-14 01:00:28', '2019-07-14 01:00:28'),
(7, 'rapat ini', 'ini rapat coba', '1563092172dmubR2XU7eSbtKUCualsWg.jpg', 'andi', 'ini adalah rapat coba yah', '2019-07-14 01:15:39', '2019-07-14 01:16:20', '2019-07-14 01:16:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `judul`, `foto`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asdfdsfdsfdfdsf', '1562776070D4dyES8vIEPcxKBIgbz74G.jpg', 'aaaaaaaaaaaaaaaa', '2019-07-10 09:27:50', '2019-07-10 17:32:01', '2019-07-10 17:32:01'),
(2, 'rapat', '1562804905gyeyjjO1L5HkViid3DJkMo.jpg', 'rapat', '2019-07-10 17:28:25', '2019-07-10 17:28:25', NULL),
(3, 'rapat hari ini juga', '1563091402qQNMUEfyUN2x53xRbCgXac.jpg', 'rapat hari ini berjalan dengan lancar', '2019-07-14 01:01:15', '2019-07-14 01:03:36', '2019-07-14 01:03:36'),
(4, 'rapat', '1563092214OlUOvmcmAlbB27eAsLqqYi.jpg', 'rapat', '2019-07-14 01:16:54', '2019-07-14 01:17:18', '2019-07-14 01:17:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` char(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'asdfdfds', '2019-07-06 17:07:29', '2019-07-06 17:09:19', '2019-07-06 17:09:19'),
(9, 'joni', '2019-07-06 17:22:45', '2019-07-06 17:31:49', '2019-07-06 17:31:49'),
(10, 'as', '2019-07-06 18:14:37', '2019-07-06 18:14:49', '2019-07-06 18:14:49'),
(11, 'Perda', '2019-07-07 09:23:24', '2019-07-07 09:23:24', NULL),
(12, 'aa', '2019-07-08 06:02:06', '2019-07-08 06:02:06', NULL),
(13, 'aa', '2019-07-08 06:38:11', '2019-07-08 06:38:11', NULL),
(14, 'sadfds', '2019-07-08 20:30:21', '2019-07-08 20:30:21', NULL),
(15, 'aaa', '2019-07-09 01:03:29', '2019-07-09 01:03:29', NULL),
(16, 'sdfdsf', '2019-07-09 01:03:36', '2019-07-09 01:03:36', NULL),
(17, 'asdfdsfdsf', '2019-07-09 01:33:54', '2019-07-09 01:33:54', NULL),
(18, 'asdfdfds', '2019-07-09 01:36:52', '2019-07-12 10:35:18', '2019-07-12 10:35:18'),
(19, 'as', '2019-07-09 01:46:18', '2019-07-12 10:35:13', '2019-07-12 10:35:13'),
(20, 'perbup', '2019-07-12 10:34:57', '2019-07-12 10:35:05', '2019-07-12 10:35:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_activities`
--

CREATE TABLE `login_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_06_122900_create_kategori_table', 1),
(4, '2019_07_04_160013_create_table_produk', 1),
(5, '2019_07_04_162408_create_table_kategoris', 2),
(6, '2019_07_07_022829_create_table_produks', 3),
(7, '2019_07_09_130955_create_table_beritas', 4),
(8, '2019_07_09_133703_create_table_galeris', 4),
(9, '2019_07_10_144737_create_log_activity_table', 5),
(10, '2019_07_10_154949_create_login_activities_table', 6),
(11, '2019_07_12_194748_create_logs_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomor` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nomor`, `tahun`, `tentang`, `file`, `konten`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12', '12312', 'asdfds', '1562466634oQB1Er2wkADRRtpgp4OObU.PNG', 'sadfds', '2019-07-06 19:30:34', '2019-07-09 07:39:50', '2019-07-09 07:39:50'),
(2, '23', '2212', 'asadsf', '1562672592kZUxIQOp64KBz6iWe8DCcG.PNG', 'aaaa', '2019-07-09 04:43:12', '2019-07-09 06:31:30', '2019-07-09 06:31:30'),
(3, '24241', '12342', 'sadfdsfds', '1562678061JYqIrRc5CaWQ0lBZpphFTa.PNG', 'asdfds', '2019-07-09 06:14:21', '2019-07-09 06:30:11', '2019-07-09 06:30:11'),
(4, '1212', '1212', 'asdfdsfds', '1562678677dpbX0nrIWqKvs0kBpmy8iQ.PNG', 'sdfsdfdsaf', '2019-07-09 06:24:37', '2019-07-09 06:29:37', '2019-07-09 06:29:37'),
(5, '211234', '1221232', 'asdfdsfsdfsaf23as', '1562683057MXmo5VRc3MOyMuvsnYhvY4.jpg', 'asdfdsf2', '2019-07-09 07:00:15', '2019-07-09 09:05:28', '2019-07-09 09:05:28'),
(6, '23123', '2221', 'afsdfds', '1562683614eO24XXHHCJ2MmmLE5dO2Ta.PNG', 'sdfdsafds', '2019-07-09 07:46:54', '2019-07-10 00:40:06', '2019-07-10 00:40:06'),
(7, '1221', '32321', 'sadfsdf', '1562683704hTRhjzW8N16qk8K4xEZUI4.PNG', 'adfds', '2019-07-09 07:48:24', '2019-07-09 07:48:29', '2019-07-09 07:48:29'),
(8, '123123', '2222', 'afsdf', '1562692012vszM5ik5cvoaGE8FQO2BEu.PNG', 'sdfdsf', '2019-07-09 10:06:52', '2019-07-09 22:11:37', '2019-07-09 22:11:37'),
(9, '212', '2222', 'asaaa', '1562744427IA6AakD9lXDd6uGmF6HcTV.jpg', 'asdfdsf', '2019-07-10 00:40:27', '2019-07-10 16:55:56', '2019-07-10 16:55:56'),
(10, '12', '2019', 'hukum pidana', '1562798954OOv5mPpThKp2maGrgEPV0n.pdf', 'aaaa', '2019-07-10 15:49:14', '2019-07-10 16:56:03', '2019-07-10 16:56:03'),
(11, '39', '2018', 'Organisasi Dan Tata Kerja Lembaga Teknis Daerah, Inspektorat, Satuan Polisi Pamong Praja Dan Lembaga Lain Kabupaten Brebes', '1562802948q7p5SJRmkAclHnrDOnkF7u.pdf', 'asdfdsf', '2019-07-10 16:55:48', '2019-07-10 16:55:48', NULL),
(12, '9', '2008', 'Sistem Penyelenggaraan Pendidikan Di Kabupaten Brebes', '1562803157d6yuCujFCeXVWTMRL1UVAD.pdf', 'Sistem Penyelenggaraan Pendidikan Di Kabupaten Brebes', '2019-07-10 16:59:17', '2019-07-10 16:59:17', NULL),
(13, '12', '2008', 'Perubahan Anggaran Pendapatan Dan Belanja Daerah Kabupaten Brebes Tahun Anggaran 2008', '1562803185KhiIwrvUgzDlCvQbPICXv7.pdf', 'Perubahan Anggaran Pendapatan Dan Belanja Daerah Kabupaten Brebes Tahun Anggaran 2008', '2019-07-10 16:59:45', '2019-07-10 16:59:45', NULL),
(14, '1', '2009', 'Anggaran Pendapatan Dan Belanja Daerah Kabupaten Brebes Tahun Anggaran 2009', '1562803210X6mZmnVPkUjPdzqAmlU4Sr.pdf', 'Anggaran Pendapatan Dan Belanja Daerah Kabupaten Brebes Tahun Anggaran 2009', '2019-07-10 17:00:10', '2019-07-10 17:00:10', NULL),
(15, '4', '2009', 'Pembentukan, Penghapusan, Penggabungan Desa Dan Perubahan Status Desa Menjadi Kelurahan', '1562803374aNnmFYLiQro8D5e68Mhn4N.pdf', 'Pembentukan, Penghapusan, Penggabungan Desa Dan Perubahan Status Desa Menjadi Kelurahan', '2019-07-10 17:02:54', '2019-07-10 17:02:54', NULL),
(16, '4', '2009', 'Pembentukan, Penghapusan, Penggabungan Desa Dan Perubahan Status Desa Menjadi Kelurahan', '1562803374DNdHIVmHSo3h1tPYhF4MyU.pdf', 'Pembentukan, Penghapusan, Penggabungan Desa Dan Perubahan Status Desa Menjadi Kelurahan', '2019-07-10 17:02:54', '2019-07-10 17:02:54', NULL),
(17, '1', '2010', 'Anggaran Pendapatan Dan Belanja Daerah Kabupaten Brebes Tahun Anggaran 2010', '1562803404v3c91L4t7gLPgD9Yyao2yK.pdf', 'Anggaran Pendapatan Dan Belanja Daerah Kabupaten Brebes Tahun Anggaran 2010', '2019-07-10 17:03:24', '2019-07-10 17:03:24', NULL),
(18, '1', '2018', 'Dokumentasi hukum', '1563091062lQZZE8cpWHN3EINlYK2TPz.pdf', 'dokumentasi', '2019-07-14 00:57:42', '2019-07-14 01:14:40', '2019-07-14 01:14:40'),
(19, '9', '2017', 'kordinasi hari hukum indonesia', '1563092025VvEtwhpKFtjIuQc1ZL0iT0.pdf', 'kordinasi hari hukum', '2019-07-14 01:13:45', '2019-07-14 01:14:20', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alibudii', 'budiali122@gmail.com', NULL, '$2y$10$jCH6Gol6nl7Z9pcKtJ06reHiW6RvH1zxNqK1XvD2/1v6OZ4Gr4wRK', NULL, '2019-07-06 11:49:29', '2019-07-06 11:49:29'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$Ziz4/1jiqZ4sU72FAlOOr.diRPkREtDl14wVrIOdHwgpmYJriX6lG', NULL, '2019-07-10 09:06:14', '2019-07-10 09:06:14'),
(3, 'ali', 'admin@admin.com', NULL, '$2y$10$.9.etHt.21GJWXl/Zr1hZeQNZ1zg/rINJCz42Vf4t7lsG2Xc27P66', NULL, '2019-07-13 14:50:23', '2019-07-13 14:50:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_activities`
--
ALTER TABLE `login_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_activities_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
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
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `login_activities`
--
ALTER TABLE `login_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login_activities`
--
ALTER TABLE `login_activities`
  ADD CONSTRAINT `login_activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
