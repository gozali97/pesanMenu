-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2022 at 01:53 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`id`, `id_transaksi`, `id_produk`, `total_item`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 1, 20000, '2022-09-16 05:56:36', '2022-09-16 05:56:36'),
(2, 2, 22, 1, 15000, '2022-09-16 09:24:13', '2022-09-16 09:24:13'),
(3, 3, 22, 1, 15000, '2022-09-16 09:25:52', '2022-09-16 09:25:52'),
(4, 3, 20, 1, 20000, '2022-09-16 09:25:52', '2022-09-16 09:25:52'),
(5, 4, 28, 1, 5000, '2022-09-16 10:03:11', '2022-09-16 10:03:11'),
(6, 5, 20, 2, 40000, '2022-09-21 11:31:33', '2022-09-21 11:31:33'),
(7, 5, 27, 1, 25000, '2022-09-21 11:31:33', '2022-09-21 11:31:33'),
(8, 6, 20, 2, 40000, '2022-09-21 11:32:53', '2022-09-21 11:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Minuman', '2022-08-30 09:43:47', '2022-09-15 06:40:36'),
(2, 'Makanan', '2022-08-30 09:43:57', '2022-08-30 09:43:57'),
(3, 'Dessert', '2022-08-30 09:44:07', '2022-08-30 09:44:07'),
(4, 'Buah', '2022-09-15 06:25:34', '2022-09-15 06:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2022_08_29_180902_create_kategoris_table', 1),
(13, '2022_08_29_181345_create_no_mejas_table', 1),
(14, '2022_08_29_181434_create_produks_table', 1),
(15, '2022_08_29_181919_create_transaksis_table', 1),
(16, '2022_08_29_182253_create_detail_transaksis_table', 1),
(17, '2022_09_14_151032_create_trackings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `no_mejas`
--

CREATE TABLE `no_mejas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `no_mejas`
--

INSERT INTO `no_mejas` (`id`, `no_meja`, `qr_code`, `created_at`, `updated_at`) VALUES
(2, '08', 'abea9d61-bb90-38bc-a569-ede3ddb9740e', '2022-09-01 07:59:09', '2022-09-21 11:44:55'),
(3, '02', '9954ae7e-661b-38b4-8945-93fd2ba1afa3', '2022-09-01 08:08:29', '2022-09-01 08:08:29'),
(4, '03', 'ce2c54b2-3de2-389a-a093-356aed68b960', '2022-09-07 06:08:34', '2022-09-07 06:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama_menu`, `kategori_id`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(20, 'Nasi Goreng', 2, 'Nasi goreng jawa', 20000, '[\"\\/storage\\/images\\/menu\\/nasigoreng.png\"]', '2022-09-05 06:52:45', '2022-09-15 07:00:37'),
(22, 'Sate Ayam', 2, 'Sate', 15000, '[\"\\/storage\\/images\\/menu\\/sate.png\"]', '2022-09-15 06:59:16', '2022-09-15 06:59:16'),
(23, 'Limiade', 2, 'makanan', 12000, '[\"\\/storage\\/images\\/menu\\/laksa.png\"]', '2022-09-15 08:16:43', '2022-09-15 08:16:43'),
(24, 'Laksa Bali', 2, 'ada', 25000, '[\"\\/storage\\/images\\/menu\\/udang-kari.png\"]', '2022-09-15 08:17:04', '2022-09-15 08:17:04'),
(25, 'Jus Strawberry', 1, 'Jus Strawberry', 10000, '[\"\\/storage\\/images\\/menu\\/jus stbry.png\"]', '2022-09-16 05:30:51', '2022-09-16 05:30:51'),
(26, 'Latte', 1, 'Coffe latte', 20000, '[\"\\/storage\\/images\\/menu\\/latte.png\"]', '2022-09-16 05:31:50', '2022-09-16 05:31:50'),
(27, 'Mocha', 1, 'Coffe Mocha', 25000, '[\"\\/storage\\/images\\/menu\\/mocha.png\"]', '2022-09-16 05:32:42', '2022-09-16 05:32:42'),
(28, 'Es Teh', 1, 'Es Teh', 5000, '[\"\\/storage\\/images\\/menu\\/esteh.png\"]', '2022-09-16 05:33:09', '2022-09-16 05:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Menunggu','Diproses','Disajikan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trackings`
--

INSERT INTO `trackings` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Disajikan', '2022-09-16 05:56:36', '2022-09-16 09:57:25'),
(2, 'Menunggu', '2022-09-16 09:24:13', '2022-09-16 09:24:13'),
(3, 'Menunggu', '2022-09-16 09:25:52', '2022-09-16 09:25:52'),
(4, 'Disajikan', '2022-09-16 10:03:11', '2022-09-16 10:05:39'),
(5, 'Menunggu', '2022-09-21 11:31:33', '2022-09-21 11:31:33'),
(6, 'Disajikan', '2022-09-21 11:32:53', '2022-09-21 11:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomeja` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `status` enum('belum bayar','sudah bayar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `nomeja`, `nama_pemesan`, `subtotal`, `total_harga`, `bayar`, `kembalian`, `status`, `created_at`, `updated_at`) VALUES
(1, '01', 'Putri', 1, 22000, NULL, NULL, 'sudah bayar', '2022-09-16 05:56:36', '2022-09-16 05:56:50'),
(2, '01', 'Rosyid', 1, 17000, NULL, NULL, 'belum bayar', '2022-09-16 09:24:13', '2022-09-16 09:24:19'),
(3, '01', 'Rosyid', 2, 37000, NULL, NULL, 'sudah bayar', '2022-09-16 09:25:52', '2022-09-16 09:26:30'),
(4, '02', 'Rosyid', 1, 7000, NULL, NULL, 'sudah bayar', '2022-09-16 10:03:11', '2022-09-16 10:03:23'),
(5, '02', 'Rosyid', 3, 65000, NULL, NULL, 'belum bayar', '2022-09-21 11:31:33', '2022-09-21 11:31:33'),
(6, '02', 'Rosyid', 2, 42000, NULL, NULL, 'sudah bayar', '2022-09-21 11:32:53', '2022-09-21 11:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$IWATaURQhJvHPL3x8DlHo.AItuWaWuPXk7jNTaKFyGHukKwGLq9CW', NULL, '2022-09-16 01:41:45', '2022-09-16 01:41:45'),
(2, 'Kasir', 'kasir@gmail.com', NULL, '$2y$10$DEF3qvfHXN5IjixY.GtIkugjjyNJP/2j4yJsYL/ANImUOg0waaKvK', NULL, '2022-09-16 01:42:49', '2022-09-16 01:42:49'),
(3, 'Gozali', 'gozali@gmail.com', NULL, '$2y$10$cCJkd9jspHZ17XkfMQ43LuJbYoGkeBj7vp62MuJH8JoHL95P9scqm', NULL, '2022-09-16 02:24:08', '2022-09-16 02:24:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_mejas`
--
ALTER TABLE `no_mejas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackings`
--
ALTER TABLE `trackings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `no_mejas`
--
ALTER TABLE `no_mejas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
