-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 07:24 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prj2`
--

-- --------------------------------------------------------

--
-- Table structure for table `fkps`
--

CREATE TABLE `fkps` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sub` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pq` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ahli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukpj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_lokasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_akk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fkps`
--

INSERT INTO `fkps` (`id`, `kode_perusahaan`, `nama_perusahaan`, `nama_sub`, `no_kon`, `foto_kon`, `nilai`, `pq`, `ahli`, `ukpj`, `lokasi`, `detail_lokasi`, `no_hp`, `akk`, `date_akk`, `created_at`, `updated_at`) VALUES
(1, 'PKG', 'Petrokimia Gresik', NULL, '3456789876', '1532704563409.jpg', '1000000', '1532704563409.jpg', '1532704563409.jpg', 'Departemen IT', 'Luar Kawasan Pabrik', 'Moniak', '091762564254', 'Personal', NULL, '2018-08-17 00:22:23', '2018-08-17 00:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `fps`
--

CREATE TABLE `fps` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sub` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_personal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_diri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_kesehatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_akk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `helm_kuning` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seragam_pkg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sepatu_safety` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masker` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baju_panjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acceptTerms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fps`
--

INSERT INTO `fps` (`id`, `nama_perusahaan`, `nama_sub`, `nama_personal`, `foto_diri`, `no_ktp`, `foto_ktp`, `alamat`, `tanggal_lahir`, `usia`, `surat_kesehatan`, `foto_akk`, `helm_kuning`, `seragam_pkg`, `sepatu_safety`, `masker`, `baju_panjang`, `others`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `acceptTerms`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Petrokimia Gresik', 'sub1', 'Prasasti', '1532704563409.jpg', '6512345678623456', '1532704563409.jpg', 'Sidoarjo', '2018-08-14', '20', '1532704563409.jpg', '1532704563409.jpg', 'Helm Kuning', 'on', 'on', 'on', 'on', NULL, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, '2018-08-17 00:23:14', '2018-08-17 00:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_06_010838_create_fkps_table', 1),
(4, '2018_08_06_034708_create_fps_table', 1),
(5, '2018_08_14_050936_create_jadwals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `kode_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_perusahaan`, `kode_perusahaan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Petrokimia Gresik', 'PKG', '$2y$10$deG1RrYhwhZ1v.zu04jweOZOvG/usxDzrRdhiZfcbpHPYNQa1FXgK', NULL, '2018-08-14 22:00:45', '2018-08-14 22:00:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fkps`
--
ALTER TABLE `fkps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fps`
--
ALTER TABLE `fps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fps_no_ktp_unique` (`no_ktp`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_kode_perusahaan_index` (`kode_perusahaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_kode_perusahaan_unique` (`kode_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fkps`
--
ALTER TABLE `fkps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fps`
--
ALTER TABLE `fps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
