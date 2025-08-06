-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 04:23 AM
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
-- Database: `db_akalink2`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `waktu_absen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL,
  `id_sesi` bigint(20) UNSIGNED NOT NULL,
  `guru` varchar(255) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `barcode_data` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT '',
  `password` varchar(255) NOT NULL,
  `nip` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nama`, `username`, `password`, `nip`, `alamat`, `jeniskelamin`, `created_at`, `updated_at`) VALUES
(1, 'fiza', 'guru', '$2y$12$n67BYFeyf0IZM9rKy4SHrONEshA58wTqfwgFnLHKYrtkjDGkURLTC', 1234, 'Tameran', 'Perempuan', NULL, NULL),
(2, 'bunga', 'yuni', '$2y$12$XKZaM0iecdG18L8iMn0c6uOvquqm3Xz971Cw19keSqyfIsr78Lq7m', 1234, 'Tameran', 'Perempuan', NULL, NULL),
(3, 'Yola', 'yola', '$2y$12$Qisk42eAp9RjdQPNuhypbudNH45sb5weAz7wa2aOKJo74aQi1QCIO', 1234, 'Tameran', 'Perempuan', NULL, NULL),
(4, 'Yolanda', 'yolanda', '$2y$12$ZeIj3OzoRR.g1FiAqeaeF.jO7lHov1YCI23BlDAQlLXcovZZ/BQeK', 1234, 'Tameran', 'Perempuan', NULL, NULL),
(8, 'guru', 'yun', '$2y$12$Vo6HMReJMYN16sucVjGeYuLrgOjkctcRd4YSpklw6/PiHjP.fAKCe', 1234, 'Tameran', 'Perempuan', NULL, NULL),
(9, 'bunga', 'bunga', '$2y$12$7FiXnmuiznrPfAH7WAzwz.FCPQJsFQ98Yvp7BAOlxpFWKocWClau6', 1234, 'bengkalis', 'Perempuan', NULL, NULL),
(10, 'Fiza', 'fiza', '$2y$12$5nSsVl9BS8fFLcY6gOB6ROQ2nUr8TLhWMfkbmjyJubM5NUu6AmUEW', 12345, 'Bengkalis', 'Perempuan', NULL, NULL),
(11, 'bayu', 'bayu123', '$2y$12$9wcT1L0vQYB0aoOjH3TGBeWUezkS5rujh/gNEkku5lwPO.Nacff5W', 394834787, 'jaja', 'laki', NULL, NULL),
(12, 'bayu', 'bayu1234', '$2y$12$kp3OCjk8.TehYbmmCNPxbuu2s.YXzn3oM.p7qeD26BSY6XyhfzQji', 1190, 'jaja', 'laki', NULL, NULL),
(13, 'bayu', 'gurubaru123', '$2y$12$J62vi1F/UbRBnw2iJqMZ9OTi1PQeUGLUTnnHnEb1D4az4f9XN9j2O', 1190, 'jaja', 'laki', NULL, NULL),
(14, 'Siti Badriah', 'badriah', '$2y$12$j.haWLdf9eZ/TgtLZDC1/eSXxgGkzaYHlmPkV1RQ.BAhu45qapmcK', 4832, 'papua nugini', 'campuran', NULL, NULL),
(15, 'wadi', 'wadi', '$2y$12$FWYPb8Yrqmqya10nqMrJjuiVASaaiocJ//zOM5tRCmlZK5VdPDwTS', 3214, 'sungai batang', 'laki-laki', NULL, NULL),
(16, 'wakuu', 'wakuku', '$2y$12$Ynq6Hw5IF77NrvGaBt7qz.DCAHAc/k0LPGYtf0xGHhBVBKdrvjKYa', 22, 'kos retta', 'laki', NULL, NULL),
(18, 'waku', 'waku122', '', 122, 'kos retta', 'Laki-Laki', NULL, NULL),
(19, 'wagoo', 'waku', '$2y$12$7G4M4qhT3ioCcT8M2NCvfefsSshmY8xwlTtkaeF2YIY8tO3UDF4zq', 111, 'kos retta', 'Laki-Laki', '2024-12-19 20:07:00', '2024-12-19 20:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jam` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `matapelajaran` varchar(255) NOT NULL,
  `guru` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `jam`, `hari`, `matapelajaran`, `guru`, `kelas`, `created_at`, `updated_at`) VALUES
(1, '07.15-12.10', 'Senin', 'IPA', 'Norhafiza', '10 A', NULL, NULL),
(2, '07.15-12.10', 'Selasa', 'IPA', 'Fiza', '12 A', NULL, NULL),
(4, '11:00', 'Selasa', 'koding woy', 'endahahahha', '11 C', NULL, NULL);

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
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `nama`, `judul`, `kelas`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Fiza', 'Bunga Melati', '11 A', '', NULL, NULL),
(2, 'suci ramadhani', 'fiza', '11 A', '12.00', NULL, NULL),
(3, 'suci ramadhani', 'kimia', '10 B', '07.15-9.15', NULL, NULL),
(4, 'suci ramadhani', 'kimia', '10 B', '07.15-9.15', NULL, NULL),
(5, 'bayu', 'lapor pelajaran selesai', '12 A', '07.15-9.15', NULL, NULL),
(6, 'www', 'www', '10 B', 'www', NULL, NULL),
(7, 'xixixiix', 'xixii', '10 A', 'xixi', '2024-12-20 00:45:17', '2024-12-20 00:45:17'),
(8, 'xixixiix', 'xixii', '10 A', 'xixi', '2024-12-20 00:57:57', '2024-12-20 00:57:57'),
(9, 'tes', 'tes', '10 A', 'tes', NULL, NULL),
(10, 'tes', 'tes', '10 A', 'tes', NULL, NULL),
(11, 'tes', 'tes', '10 A', 'tes', NULL, NULL),
(12, 'hehe', 'hehe', '10 A', 'hehe', NULL, NULL),
(13, 'eeeddd', 'ddd', '10 A', 'ddd', NULL, NULL),
(14, 'endah', 'tes', '10 A', 'yyyy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
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
(21, '0001_01_01_000000_create_users_table', 1),
(22, '0001_01_01_000001_create_cache_table', 1),
(23, '0001_01_01_000002_create_jobs_table', 1),
(24, '2024_12_07_023746_create_gurus_table', 1),
(26, '2024_12_11_133301_create_jadwals_table', 1),
(27, '2024_12_15_021715_create_gurus_table', 2),
(28, '2024_12_15_035441_create_gurus_table', 3),
(29, '2024_12_15_043724_create_jadwals_table', 4),
(30, '2024_12_15_060443_create_siswas_table', 5),
(31, '2024_12_15_060620_create_laporans_table', 6),
(33, '2024_12_15_093037_add_email_and_password_to_siswas_table', 7),
(34, '2024_12_15_095307_add_kelas_to_siswas_table', 8),
(35, '2024_12_15_123724_create_personal_access_tokens_table', 9),
(36, '2024_12_16_083936_create_tugas_table', 10),
(37, '2024_12_16_093805_create_profils_table', 11),
(38, '2024_12_16_153906_create_tugas_table', 12),
(39, '2024_12_17_124430_create_gurus_table', 13),
(40, '2024_12_19_145802_create_sesi_absensis_table', 14),
(41, '2024_12_19_145838_create_absensis_table', 14),
(45, '2024_12_19_233813_add_mata_pelajaran_and_guru_to_sesi_absensis_table', 15),
(46, '2024_12_20_071109_create_mapels_table', 16),
(47, '2024_12_20_095152_add_mata_pelajaran_to_tugas_table', 16),
(48, '2024_12_20_135533_add_waktu_to_tugas_table', 17),
(49, '2024_12_20_140013_add_kelas_to_tugas_table', 18),
(50, '2024_12_20_140422_add_default_value_to_judul_in_tugas_table', 19),
(51, '2024_12_20_145531_create_holidays_table', 20);

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
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sesi_absensis`
--

CREATE TABLE `sesi_absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `guru` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sesi_absensis`
--

INSERT INTO `sesi_absensis` (`id`, `tipe`, `status`, `kelas`, `mata_pelajaran`, `guru`, `tanggal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Masuk', 'Aktif', '10 A', '', '', '2024-12-20', 'absen pelajaran matematika', '2024-12-19 16:15:42', '2024-12-19 16:15:42'),
(2, 'Pulang', 'Aktif', 'XII IPS 10', '', '', '2024-12-20', 'Mari pulang', '2024-12-19 16:26:46', '2024-12-19 16:26:46'),
(3, 'Masuk', 'Aktif', 'XII IPS 1', '', '', '2024-12-20', 'alamak', '2024-12-19 16:48:22', '2024-12-19 16:48:22'),
(4, 'Masuk', 'Aktif', '12A', 'Biologi', 'endahahahha', '2024-02-04', 'materi', '2024-12-20 00:20:03', '2024-12-20 00:20:03');

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
('4Oc3zfmRzmc46KPv2npX9XyAPcjrPiMzVXA0KGmL', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMlFYMDZCQkpUQ2hkSWE4TXFtbTVKVkpVSkZqUXU1TFNOOE9lYlhveCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ndXJ1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1734709203),
('o9rz5tNWqFcn67HlnyOMTHVCqdIY7rHdCnqA80Zd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmRoYVMycVVTU2lWdWc4MTgwb1dNY3ZUV2xYVVlsWVdKVXQwaEtWdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ndXJ1L3R1Z2FzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1734751003);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `nip`, `alamat`, `jeniskelamin`, `email`, `password`, `kelas`, `created_at`, `updated_at`) VALUES
(3, 'Suci Rahmadani', '098492957843', 'papua nugini', 'Perempuan', 'suci@gmail.com', '$2y$12$SPvBTanaDxuSRH.wPnE8fO/00dT9rC6EKRlEl7fyXmGPuwIYYmSkC', '10 A', '2024-12-15 06:03:49', '2024-12-15 06:03:49'),
(4, 'wadi', '6364637273', 'Korean style', 'Laki-Laki', 'wadi@gmail.com', '$2y$12$ELVYJ5QzYkgtgydIfYa8UeiLgSE7cKXXJKhtftCCCBykjRqtJriq.', '11 B', '2024-12-15 08:22:10', '2024-12-19 05:31:58'),
(5, 'Suci', '2737377282', 'kamboja', 'Perempuan', 'suci2@gmail.com', '$2y$12$bnYTNXWItoth5PMWy3egf.DCaEM54wES1Br./RviAh3YA4m5AenUO', '10 A', '2024-12-15 17:07:49', '2024-12-15 17:07:49'),
(6, 'Suci Ramadhani', '4917429742', 'polandia', 'Perempuan', 'suci4@gmail.com', '$2y$12$BxnSR3.J2F5YWPFKtbzZTOOYCSMUrxoeimzw5OQES1o3eqgRlvl.m', '10 B', '2024-12-15 17:09:52', '2024-12-15 17:09:52'),
(7, 'John Doe', '12345', 'Jalan Merdeka No. 1', 'Laki-laki', 'johndoe@example.com', '$2y$12$OK7FXBKtQpztzfnrofjjHO8f01Xq8sLTTdZaxK74dxhtocA.Rf/na', '12 A', '2024-12-15 22:05:01', '2024-12-19 03:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL DEFAULT 'Judul Default',
  `deskripsi` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `judul`, `deskripsi`, `file`, `created_at`, `updated_at`, `nama`, `waktu`, `kelas`) VALUES
(1, 'Bunga', 'Tanaman Hijau', 'C:\\Users\\HP\\AppData\\Local\\Temp\\php3CE6.tmp', NULL, NULL, NULL, NULL, NULL),
(2, 'Bunga', 'Tanaman Hijau', 'BUSINESS PLAN (1).docx', '2024-12-16 19:49:22', '2024-12-16 19:49:22', NULL, NULL, NULL),
(3, 'Bunga', 'Tanaman Hijau', 'C:\\Users\\HP\\AppData\\Local\\Temp\\phpC30E.tmp', NULL, NULL, NULL, NULL, NULL),
(4, 'Bunga', 'Tanaman Hijau', 'donas profil.png', '2024-12-16 20:00:52', '2024-12-16 20:00:52', NULL, NULL, NULL),
(5, 'Bunga', 'Tanaman Hijau', 'C:\\Users\\HP\\AppData\\Local\\Temp\\php54E8.tmp', NULL, NULL, NULL, NULL, NULL),
(6, 'Bunga', 'Tanaman Hijau', 'MODUL 4 LARAVEL 11.pdf', '2024-12-16 20:11:19', '2024-12-16 20:11:19', NULL, NULL, NULL),
(7, 'Siska', 'Tanaman Bunga Mawar', 'C:\\Users\\HP\\AppData\\Local\\Temp\\phpFD68.tmp', NULL, NULL, NULL, NULL, NULL),
(8, 'Siska', 'Tanaman Bunga Mawar', 'JobSheet Klasifikasi KNN.pdf', '2024-12-16 21:32:52', '2024-12-16 21:32:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$hIBwXfWKgXjY/1U0kPAJI.1v9OB7drSFfyFSPvCQqqr3CLCxCsrAO', '2024-12-11 06:19:35', '2024-12-11 06:19:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_id_sesi_foreign` (`id_sesi`);

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
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_username_unique` (`username`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mapels_kode_mapel_unique` (`kode_mapel`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sesi_absensis`
--
ALTER TABLE `sesi_absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_email_unique` (`email`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sesi_absensis`
--
ALTER TABLE `sesi_absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_id_sesi_foreign` FOREIGN KEY (`id_sesi`) REFERENCES `sesi_absensis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
