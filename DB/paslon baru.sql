-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 07:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paslon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fraksi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `fraksi`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@domain.com', '$2y$10$x.2fuK/tFcL9IboV9aSz6eLAnXMQkZVTZnHiQgmSpZI9IUmcTI61i', 'app', 0, '2023-07-20 15:55:16', NULL),
(3, 'Golkar', 'golkar@domain.com', '$2y$10$8KE9g8DSf5VGZp0n1KPY.e.rLcKt3gCXZclfGq29eeeAsV/X8kH0K', 'partai', 1, '2023-07-24 20:15:42', '2023-07-24 20:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `is_slider` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi_berita`, `gambar`, `is_slider`, `created_at`, `updated_at`) VALUES
(2, 'a', '<p>a</p>', '1689869372.png', 1, '2023-07-20 08:59:52', '2023-07-20 09:09:32'),
(3, '123', '<p>DASDADS</p>', '1689996849.jpg', 1, '2023-07-21 20:34:09', '2023-07-21 20:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `coblos`
--

CREATE TABLE `coblos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `paslon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coblos`
--

INSERT INTO `coblos` (`id`, `user`, `paslon`, `created_at`, `updated_at`) VALUES
(1, '0', '4', '2023-07-21 20:26:55', '2023-07-21 20:26:55'),
(2, '0', '3', '2023-07-21 20:27:31', '2023-07-21 20:27:31'),
(3, '0', '5', '2023-07-21 20:30:21', '2023-07-21 20:30:21'),
(4, '0', '6', '2023-07-21 20:31:07', '2023-07-21 20:31:07'),
(5, '0', '5', '2023-07-21 20:31:31', '2023-07-21 20:31:31'),
(6, '0', '6', '2023-07-24 20:11:07', '2023-07-24 20:11:07'),
(7, '0', '6', '2023-07-24 20:11:13', '2023-07-24 20:11:13'),
(8, '0', '6', '2023-07-24 20:11:43', '2023-07-24 20:11:43'),
(9, '0', '6', '2023-07-24 20:12:33', '2023-07-24 20:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `dapil`
--

CREATE TABLE `dapil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dapil` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dapil`
--

INSERT INTO `dapil` (`id`, `nama_dapil`, `daerah`, `created_at`, `updated_at`) VALUES
(1, 'Dapil 1', 'Baamang', '2023-07-20 08:56:36', '2023-07-20 08:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fraksi`
--

CREATE TABLE `fraksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_fraksi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fraksi`
--

INSERT INTO `fraksi` (`id`, `nama_fraksi`, `created_at`, `updated_at`) VALUES
(1, 'Partai Golongan Karya', '2023-07-20 08:55:56', '2023-07-20 08:55:56'),
(2, 'Partai Demokrasi Indonesia Perjuangan', '2023-07-20 08:56:19', '2023-07-20 08:56:19'),
(3, 'PPP', '2023-07-21 20:33:19', '2023-07-21 20:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_berita` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_03_054847_create_paslon_table', 1),
(6, '2023_07_06_153120_create_admins_table', 1),
(7, '2023_07_10_144855_create_berita_table', 1),
(8, '2023_07_11_114714_create_table_komentar', 1),
(9, '2023_07_12_155743_create_table_dapil', 1),
(10, '2023_07_13_143733_add_field_to_users_table', 1),
(11, '2023_07_14_132931_create_table_coblos', 1),
(12, '2023_07_17_130322_add_field_roles_to_admins_table', 1),
(13, '2023_07_17_130916_create_table_fraksi', 1),
(14, '2023_07_17_132219_add_field_fraksi_to_admins_table', 1),
(15, '2023_07_20_144339_add_field_is_slider_to_berita_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paslon`
--

CREATE TABLE `paslon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fraksi` varchar(255) NOT NULL,
  `dapil` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `r_pen` varchar(255) NOT NULL,
  `r_pek` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paslon`
--

INSERT INTO `paslon` (`id`, `no`, `nama`, `fraksi`, `dapil`, `agama`, `r_pen`, `r_pek`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 1, 'abdul', '1', '1', 'Islam', '<p>sdasda</p>', '<p>sdada</p>', '1689996373.jpg', '2023-07-21 20:26:13', '2023-07-21 20:26:13'),
(4, 2, 'Agus', '1', '1', 'Islam', '<p>sdada</p>', '<p>dsasd</p>', '1689996394.jpg', '2023-07-21 20:26:34', '2023-07-21 20:26:34'),
(5, 2, 'alan', '1', '1', 'Islam', '<p>dasdas</p>', '<p>saasd</p>', '1689996600.jpg', '2023-07-21 20:30:00', '2023-07-21 20:30:00'),
(6, 3, 'bambang', '1', '1', 'Islam', '<p>saads</p>', '<p>asdasd</p>', '1689996653.jpg', '2023-07-21 20:30:53', '2023-07-21 20:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `dapil` int(11) NOT NULL,
  `role` enum('oprator','user') NOT NULL DEFAULT 'oprator',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `dapil`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kjasdnjkas', 'asal@domain.com', NULL, '$2y$10$UBMUgCuQ5YK8BNyWftF2GO333LRaKbCvLA48b6cXsKR2Uhr6tRa6m', 1, 'user', NULL, '2023-07-24 20:12:13', '2023-07-24 20:12:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coblos`
--
ALTER TABLE `coblos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dapil`
--
ALTER TABLE `dapil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fraksi`
--
ALTER TABLE `fraksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paslon`
--
ALTER TABLE `paslon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coblos`
--
ALTER TABLE `coblos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dapil`
--
ALTER TABLE `dapil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fraksi`
--
ALTER TABLE `fraksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `paslon`
--
ALTER TABLE `paslon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
