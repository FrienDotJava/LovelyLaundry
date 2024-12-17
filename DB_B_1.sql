-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2024 at 01:59 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u356889012_tubes_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `harga_per_unit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `nama_layanan`, `harga_per_unit`) VALUES
(1, 'Regular Laundry', 5000),
(2, 'Same Day Laundry', 9000),
(3, 'Next Day Laundry', 6000),
(4, 'Dry Cleaning', 3500),
(5, 'Iron Cleaning', 4000);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `berat` double NOT NULL,
  `tanggal_pickup` date NOT NULL,
  `tanggal_antar` date DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_layanan`, `berat`, `tanggal_pickup`, `tanggal_antar`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 11, '2024-11-29', '2024-11-29', 'Delivered', '2024-11-27 09:45:46', '2024-11-28 19:19:25'),
(4, 5, 2, 3, '2024-11-29', NULL, 'Finished', '2024-11-27 09:59:41', '2024-12-16 17:10:27'),
(5, 1, 4, 10, '2024-11-23', NULL, 'Delivered', '2024-11-27 10:17:34', '2024-12-16 15:54:22'),
(7, 1, 4, 3, '2024-12-03', NULL, 'Delivered', '2024-12-02 02:01:35', '2024-12-16 17:10:58'),
(8, 1, 1, 23, '2024-12-04', NULL, 'Delivered', '2024-12-02 02:01:45', '2024-12-14 17:19:23'),
(9, 1, 3, 11, '2024-12-02', NULL, 'Delivered', '2024-12-02 02:01:53', '2024-12-16 17:11:05'),
(10, 1, 4, 12, '2024-12-02', NULL, 'Delivered', '2024-12-02 02:02:01', '2024-12-16 17:11:07'),
(11, 5, 2, 22, '2024-12-03', NULL, 'Finished', '2024-12-02 02:02:23', '2024-12-14 17:18:47'),
(12, 5, 2, 1, '2024-12-04', NULL, 'Finished', '2024-12-02 02:02:32', '2024-12-16 17:10:04'),
(13, 5, 5, 22, '2024-12-02', NULL, 'On Progress', '2024-12-02 02:02:40', '2024-12-16 17:07:51'),
(14, 5, 3, 22, '2024-12-03', NULL, 'Waiting Pickup', '2024-12-02 02:02:48', '2024-12-02 02:02:48'),
(15, 5, 2, 22, '2024-12-04', NULL, 'Finished', '2024-12-02 02:02:54', '2024-12-16 17:07:38'),
(16, 1, 1, 3, '2024-12-18', NULL, 'Delivered', '2024-12-16 16:34:41', '2024-12-16 17:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aokoADaV8W1VgwtCeRNI6BTCcea3ldUgUoJad0kl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFVGTjRXeUJCR1RDNFNaRjQ3dGtId2F1QTlBYldmS0RMR01uNUE1RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734195960),
('OwSQrwL74EAcHylq5GgtY5o235qDIVsYezEUT1iY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYWFndElQeklablM3aWNjSEl3eHhDVXhzQTRteldaMmxka1dhcndkaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1733742882);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `metode_bayar` varchar(255) NOT NULL,
  `total_biaya` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_user`, `id_order`, `tanggal_transaksi`, `metode_bayar`, `total_biaya`, `created_at`, `updated_at`) VALUES
(3, 1, 5, '2024-12-09', 'Cash on Delivery', 41500, '2024-12-09 01:33:12', '2024-12-09 01:33:12'),
(4, 1, 8, '2024-12-14', 'QRIS', 118000, '2024-12-14 17:19:23', '2024-12-14 17:19:23'),
(5, 1, 7, '2024-12-16', 'QRIS', 13500, '2024-12-16 17:10:58', '2024-12-16 17:10:58'),
(6, 1, 9, '2024-12-16', 'Cash on Delivery', 69000, '2024-12-16 17:11:05', '2024-12-16 17:11:05'),
(7, 1, 10, '2024-12-16', 'Cash on Delivery', 45000, '2024-12-16 17:11:07', '2024-12-16 17:11:07'),
(8, 1, 16, '2024-12-16', 'QRIS', 18000, '2024-12-16 17:11:10', '2024-12-16 17:11:10');

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
  `role` varchar(50) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noHp` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `noHp`, `address`) VALUES
(1, 'Frendy', 'frenfrendy3@gmail.com', NULL, '$2y$12$PsSbH1cpCelyHqQVuQr6Ke2osHMKcgavCHSJAZT2CZFxpTlGxNfj2', 'Customer', NULL, '2024-10-20 09:45:07', '2024-12-09 03:25:41', '082157048343', 'Jl. Tambak Bayan 9/7, Depok, Sleman, D. I. Yogyakarta, 78811'),
(2, 'Hendra', 'ketapang2266@gmail.com', NULL, '$2y$12$v6iGv4s0mCP8I.EqcaeXk.YOmn0wGYlKEAqwas/sRr6jw4sB5KM66', 'Customer', NULL, '2024-10-21 07:08:10', '2024-10-21 07:08:10', '089691835227', 'Jl. mana saja'),
(4, 'Admin', 'admin@lovely.com', NULL, '$2y$12$0YGpNexQt9uITFs39KEE.uhsTM2Jw8PX2uCkK1dQzJyM1v7t6l8Pe', 'Administrator', NULL, '2024-10-21 22:29:00', '2024-10-21 22:29:00', '0000000000', '-'),
(5, 'Noveno', 'noveno@gmail.com', NULL, '$2y$12$Ypvlrq/7sX98g8NX5c00Oen7TtNOA8UQnbuxMc9E6yy8UbD7p2y3G', 'Customer', NULL, '2024-10-23 01:57:43', '2024-10-23 01:57:43', '02456789123', 'Jl.Babarsari'),
(6, 'Coba', 'coba@gmail.com', NULL, '$2y$12$CvsjCVWqbyI9TlCXUPZHvOo4.flFPmqETyzuJTJB5A2wIc30EHUOC', 'Customer', NULL, '2024-11-29 19:35:56', '2024-11-29 19:35:56', '089691835227', 'ppp'),
(7, 'test', 'testpw@gmail.com', NULL, '$2y$12$iWGnaCdKGPgB0T0fk.OXlOeKDXPG6vCGcqIMyYfR2JyJmybfB3dbG', 'Customer', NULL, '2024-12-14 17:41:21', '2024-12-14 17:41:21', '123123123', 'Jl.  Tambak Babarsari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layanan_order` (`id_layanan`),
  ADD KEY `user_order` (`id_user`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `layanan_order` FOREIGN KEY (`id_layanan`) REFERENCES `layanans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
