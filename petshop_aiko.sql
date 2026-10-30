-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2026 at 03:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop_aiko`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_produk`, `qty`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 58720.37, '2026-09-05 16:35:14', '2026-09-05 16:35:14'),
(2, 1, 2, 1, 97546.88, '2026-09-05 16:35:14', '2026-09-05 16:35:14'),
(3, 1, 3, 1, 14138.46, '2026-09-05 16:35:14', '2026-09-05 16:35:14'),
(4, 2, 1, 1, 58720.37, '2026-09-06 01:19:07', '2026-09-06 01:19:07'),
(5, 3, 1, 1, 58720.37, '2026-09-06 03:20:14', '2026-09-06 03:20:14'),
(6, 4, 2, 1, 97546.88, '2026-09-06 03:28:16', '2026-09-06 03:28:16'),
(7, 4, 3, 3, 42415.38, '2026-09-06 03:28:16', '2026-09-06 03:28:16'),
(8, 5, 1, 2, 117440.74, '2026-09-06 03:29:31', '2026-09-06 03:29:31'),
(9, 6, 19, 2, 80000, '2026-09-08 15:07:38', '2026-09-08 15:07:38'),
(10, 6, 10, 1, 25000, '2026-09-08 15:07:38', '2026-09-08 15:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
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
  `attempts` smallint(5) UNSIGNED NOT NULL,
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'ea', '2026-09-05 14:45:26', '2026-09-05 14:45:26'),
(2, 'illum', '2026-09-05 14:45:26', '2026-09-05 14:45:26'),
(3, 'eaque', '2026-09-05 14:45:26', '2026-09-05 14:45:26'),
(4, 'Makanan', '2026-09-07 06:18:27', '2026-09-07 06:18:27'),
(5, 'Perawatan', '2026-09-07 06:18:27', '2026-09-07 06:18:27'),
(6, 'Aksesoris', '2026-09-07 06:18:27', '2026-09-07 06:18:27');

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
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_05_015335_create_categories_table', 1),
(5, '2026_08_05_015358_create_suppliers_table', 1),
(6, '2026_08_05_015408_create_products_table', 1),
(7, '2026_08_05_015418_create_costomers_table', 1),
(8, '2026_08_05_015433_create_transactions_table', 1),
(9, '2026_08_05_015457_create_transaction_details_table', 1),
(10, '2026_08_05_015418_create_customers_table', 1),
(11, '2026_09_05_233823_add_status_to_transaksi_table', 2);

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'iniaiko1', 'randukuning', '085726365632', '2026-09-05 16:35:14', '2026-09-05 16:35:14'),
(2, 'aiko coba1', 'randung', '0986353739', '2026-09-06 01:19:07', '2026-09-06 01:19:07'),
(3, 'aikocoba1', 'randukuning', '085726365632', '2026-09-06 03:20:14', '2026-09-06 03:20:14'),
(4, 'aikocoba1', 'randukuning gag', '085726365632', '2026-09-06 03:28:16', '2026-09-06 03:28:16'),
(5, 'aikocoba1', 'rgsudgoudl', '085726365632', '2026-09-06 03:29:31', '2026-09-06 03:29:31'),
(6, 'Lea Wintheiser', '10386 Cathryn Radial\nBenedictmouth, IL 23236', '1-678-331-9347', '2026-09-07 06:30:56', '2026-09-07 06:30:56'),
(7, 'Louvenia Jacobson', '49624 Jefferey Lights\nWest Devan, NH 75781-7823', '+1-904-410-2762', '2026-09-07 06:30:56', '2026-09-07 06:30:56'),
(8, 'Mr. Gabriel Rohan', '8044 Christian Vista\nEast Annie, AZ 04926', '1-260-618-3495', '2026-09-07 06:30:56', '2026-09-07 06:30:56'),
(9, 'aiko coba1', 'randukuning', '085726365632', '2026-09-08 15:07:38', '2026-09-08 15:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_supplier` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_supplier`, `nama_produk`, `harga`, `stok`, `satuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'voluptatem', 58720.37, 27, 'pack', '2026-09-05 14:45:27', '2026-09-05 14:45:27'),
(2, 1, 1, 'esse', 97546.88, 62, 'pcs', '2026-09-05 14:45:27', '2026-09-05 14:45:27'),
(3, 1, 1, 'cupiditate', 14138.46, 44, 'botol', '2026-09-05 14:45:27', '2026-09-05 14:45:27'),
(4, 1, 1, 'Whiskas Makanan Kucing', 35000, 20, 'pack', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(5, 1, 1, 'Royal Canin Makanan Kucing', 85000, 15, 'pack', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(6, 1, 1, 'Pedigree Makanan Anjing', 65000, 15, 'pack', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(7, 2, 2, 'Pasir Kucing', 45000, 20, 'pack', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(8, 2, 2, 'Shampoo Hewan', 50000, 10, 'botol', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(9, 3, 3, 'Mainan Kucing', 30000, 12, 'pcs', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(10, 3, 3, 'Kalung Hewan', 25000, 10, 'pcs', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(11, 3, 3, 'Tempat Makan Hewan', 40000, 10, 'pcs', '2026-09-07 06:23:51', '2026-09-07 06:23:51'),
(12, 1, 1, 'Whiskas Makanan Kucing', 35000, 20, 'pack', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(13, 1, 1, 'Royal Canin Makanan Kucing', 85000, 15, 'pack', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(14, 1, 1, 'Pedigree Makanan Anjing', 65000, 15, 'pack', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(15, 2, 2, 'Pasir Kucing', 45000, 20, 'pack', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(16, 2, 2, 'Shampoo Hewan', 50000, 10, 'botol', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(17, 3, 3, 'Mainan Kucing', 30000, 12, 'pcs', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(18, 3, 3, 'Kalung Hewan', 25000, 10, 'pcs', '2026-09-07 06:33:44', '2026-09-07 06:33:44'),
(19, 3, 3, 'Tempat Makan Hewan', 40000, 10, 'pcs', '2026-09-07 06:33:45', '2026-09-07 06:33:45');

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
('8XqJMbrxqrUpjoyfHrEx6pHyiEE3kb61ZSA468Pe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI5U1dRRnpGdGtXU3FWS1Z1NU1DUVJVTzdIdGJESDcwdUZ2eWxKZWZiIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pblwvZGFzaGJvYXJkIiwicm91dGUiOiJhZG1pbi5kYXNoYm9hcmQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1788905315),
('PA4XQX3JGmHsyjVSUT4kQPf2cyqHoYICHp0WCCzo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJUbk93NzdoSFpBWjhwQ0paeTdHVGpYNVBaZkJpUnNmWHhLQXl2MnNmIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1793326051);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` bigint(20) UNSIGNED NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Lowell Breitenberg', '+14808829324', '348 Bayer Canyon\nKuphalburgh, VT 77736-2871', '2026-09-05 14:45:26', '2026-09-05 14:45:26'),
(2, 'Maximilian Okuneva', '+1 (229) 571-7303', '638 Myron Lane Suite 083\nTroytown, MI 94297', '2026-09-05 14:45:26', '2026-09-05 14:45:26'),
(3, 'Blaise Rice I', '520-416-6121', '4891 Delbert Prairie Suite 746\nNorth Nathaniel, SD 74057-1669', '2026-09-05 14:45:26', '2026-09-05 14:45:26'),
(4, 'PetFood Supplier', '081234567801', 'Jl. Mawar No. 10', '2026-09-07 06:18:27', '2026-09-07 06:18:27'),
(5, 'PetCare Supplier', '081234567802', 'Jl. Melati No. 20', '2026-09-07 06:18:27', '2026-09-07 06:18:27'),
(6, 'PetAccessory Supplier', '081234567803', 'Jl. Kenanga No. 30', '2026-09-07 06:18:27', '2026-09-07 06:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `total` double NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Menunggu Persetujuan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tanggal`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2026-09-05', 170405.71, 'Disetujui', '2026-09-05 16:35:14', '2026-09-05 17:23:12'),
(2, 2, '2026-09-06', 58720.37, 'Ditolak', '2026-09-06 01:19:07', '2026-09-06 01:25:22'),
(3, 3, '2026-09-06', 58720.37, 'Disetujui', '2026-09-06 03:20:14', '2026-09-06 03:20:51'),
(4, 4, '2026-09-06', 139962.26, 'Disetujui', '2026-09-06 03:28:16', '2026-09-06 03:28:34'),
(5, 5, '2026-09-06', 117440.74, 'Ditolak', '2026-09-06 03:29:31', '2026-09-06 03:29:35'),
(6, 9, '2026-09-08', 105000, 'Menunggu Persetujuan', '2026-09-08 15:07:38', '2026-09-08 15:07:38');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `detail_transaksi_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `detail_transaksi_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_id_pelanggan_foreign` (`id_pelanggan`);

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
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_transaksi_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
