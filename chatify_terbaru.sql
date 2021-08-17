-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 06:46 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatify`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(2094586551, 'user', 5, 5, 'hi', NULL, 1, '2021-08-04 08:51:01', '2021-08-04 08:51:03'),
(2261159989, 'user', 5, 4, 'hi palerian', NULL, 1, '2021-08-04 08:51:35', '2021-08-04 19:22:57'),
(2261407077, 'user', 4, 5, 'hi too', NULL, 1, '2021-08-04 19:23:01', '2021-08-04 19:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `claim_covid`
--

CREATE TABLE `claim_covid` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `gambar_hasiltest` varchar(255) DEFAULT NULL,
  `gambar_pcr` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tanggal_confirmed` date DEFAULT NULL,
  `status_verified` int(11) NOT NULL DEFAULT 0,
  `pilihan_isolasi` int(11) DEFAULT NULL,
  `sembuh` varchar(255) DEFAULT 'belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim_covid`
--

INSERT INTO `claim_covid` (`id`, `id_user`, `nim_nip`, `gambar_hasiltest`, `gambar_pcr`, `keterangan`, `tanggal_confirmed`, `status_verified`, `pilihan_isolasi`, `sembuh`, `created_at`, `updated_at`) VALUES
(66, NULL, 'k808081', NULL, NULL, 'kampret', '2021-05-02', 1, 1, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(67, NULL, 'k808082', NULL, NULL, 'kampret', '2021-05-03', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(68, NULL, 'k808083', NULL, NULL, 'kampret', '2021-05-04', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(69, NULL, 'k808084', NULL, NULL, 'kampret', '2021-05-04', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(70, NULL, 'k808085', NULL, NULL, 'kampret', '2021-05-04', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(71, NULL, 'k808086', NULL, NULL, 'kampret', '2021-05-04', 1, 3, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(72, NULL, 'k808087', NULL, NULL, 'kampret', '2021-05-04', 1, 4, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(73, NULL, 'k808088', NULL, NULL, 'kampret', '2021-05-04', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(74, NULL, 'k808089', NULL, NULL, 'kampret', '2021-05-04', 1, 1, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(75, NULL, 'k808090', NULL, NULL, 'kampret', '2021-05-11', 1, 3, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(76, NULL, 'k808091', NULL, NULL, 'kampret', '2021-05-12', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(77, NULL, 'k808092', NULL, NULL, 'kampret', '2021-05-13', 1, 4, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(78, NULL, 'k808093', NULL, NULL, 'kampret', '2021-05-13', 1, 1, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(79, NULL, 'k808094', NULL, NULL, 'kampret', '2021-05-13', 1, 2, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(80, NULL, 'k808095', NULL, NULL, 'kampret', '2021-05-16', 1, 3, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(81, NULL, 'k808096', NULL, NULL, 'kampret', '2021-05-17', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(82, NULL, 'k808097', NULL, NULL, 'kampret', '2021-05-18', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(83, NULL, 'k808098', NULL, NULL, 'kampret', '2021-05-19', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(84, NULL, 'k808099', NULL, NULL, 'kampret', '2021-05-20', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(85, NULL, 'k808100', NULL, NULL, 'kampret', '2021-05-20', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(86, NULL, 'k808101', NULL, NULL, 'kampret', '2021-05-20', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(87, NULL, 'k808102', NULL, NULL, 'kampret', '2021-05-20', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(88, NULL, 'k808103', NULL, NULL, 'kampret', '2021-05-20', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(89, NULL, 'k808104', NULL, NULL, 'kampret', '2021-05-21', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(90, NULL, 'k808105', NULL, NULL, 'kampret', '2021-05-22', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(91, NULL, 'k808106', NULL, NULL, 'kampret', '2021-05-23', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(92, NULL, 'k808107', NULL, NULL, 'kampret', '2021-05-24', 1, NULL, 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(93, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'hjh', '2021-08-19', 0, NULL, 'sudah', '2021-08-16 08:47:36', '2021-08-16 08:48:29'),
(94, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'asda', '2021-08-10', 0, NULL, 'sudah', '2021-08-16 08:51:17', '2021-08-16 20:03:16'),
(95, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'asdasd', '2021-08-13', 0, 2, 'belum', '2021-08-16 20:18:18', '2021-08-16 20:18:18'),
(96, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'asd', '2021-08-13', 0, 2, 'sudah', '2021-08-16 20:18:46', '2021-08-16 20:56:54'),
(97, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'asdadsads', '2021-08-26', 0, 2, 'sudah', '2021-08-16 20:57:43', '2021-08-16 21:02:15'),
(98, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'sadasd', '2021-08-06', 0, 2, 'sudah', '2021-08-16 21:02:28', '2021-08-16 21:11:32'),
(99, 11, NULL, 'foto_antigen_K202075.xlsx', NULL, 'asads', '2021-08-19', 0, 2, 'sudah', '2021-08-16 21:19:21', '2021-08-16 21:23:13'),
(100, 11, '123', 'foto_antigen_123.xlsx', NULL, 'asdasdsa', '2021-08-17', 1, 2, 'sudah', '2021-08-16 21:24:36', '2021-08-16 21:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `claim_covid_history`
--

CREATE TABLE `claim_covid_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `sembuh` varchar(255) DEFAULT 'belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim_covid_history`
--

INSERT INTO `claim_covid_history` (`id`, `id_user`, `nim_nip`, `sembuh`, `created_at`, `updated_at`) VALUES
(32, NULL, 'k808081', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(33, NULL, 'k808082', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(34, NULL, 'k808083', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(35, NULL, 'k808084', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(36, NULL, 'k808085', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(37, NULL, 'k808086', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(38, NULL, 'k808087', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(39, NULL, 'k808088', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(40, NULL, 'k808089', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(41, NULL, 'k808090', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(42, NULL, 'k808091', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(43, NULL, 'k808092', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(44, NULL, 'k808093', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(45, NULL, 'k808094', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(46, NULL, 'k808095', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(47, NULL, 'k808096', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(48, NULL, 'k808097', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(49, NULL, 'k808098', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(50, NULL, 'k808099', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(51, NULL, 'k808100', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(52, NULL, 'k808101', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(53, NULL, 'k808102', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(54, NULL, 'k808103', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(55, NULL, 'k808104', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(56, NULL, 'k808105', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(57, NULL, 'k808106', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(58, NULL, 'k808107', 'belum', '2021-08-15 07:45:12', '2021-08-15 07:45:12'),
(59, NULL, '123', 'sudah', '2021-08-16 21:25:12', '2021-08-16 21:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `claim_gejala`
--

CREATE TABLE `claim_gejala` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `gejala` text NOT NULL,
  `keadaan` varchar(255) NOT NULL,
  `ambulan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `url_map` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `orang` varchar(255) NOT NULL,
  `kontak_covid` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `berhenti` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `claim_isolasi`
--

CREATE TABLE `claim_isolasi` (
  `id` int(11) NOT NULL,
  `id_covid` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `alasan` text NOT NULL,
  `alamat` text NOT NULL,
  `url_map` text NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `butuh_bantuan` varchar(255) DEFAULT NULL,
  `kiriman_bantuan` varchar(255) NOT NULL,
  `selesai` varchar(255) NOT NULL,
  `status_change` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `claim_isolasi_rslainnya`
--

CREATE TABLE `claim_isolasi_rslainnya` (
  `id` int(11) NOT NULL,
  `id_covid` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `alamat_tempat` varchar(255) DEFAULT NULL,
  `url_tempat` varchar(255) DEFAULT NULL,
  `selesai` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `claim_isolasi_terpusat`
--

CREATE TABLE `claim_isolasi_terpusat` (
  `id` int(11) NOT NULL,
  `id_covid` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `rumah_sehat` varchar(255) NOT NULL,
  `selesai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim_isolasi_terpusat`
--

INSERT INTO `claim_isolasi_terpusat` (`id`, `id_covid`, `id_user`, `nim_nip`, `rumah_sehat`, `selesai`, `created_at`, `updated_at`) VALUES
(20, 98, NULL, NULL, 'RS1', 'sudah', '2021-08-16 21:02:28', '2021-08-16 21:11:32'),
(21, 99, NULL, NULL, 'RS1', 'sudah', '2021-08-16 21:19:21', '2021-08-16 21:23:13'),
(22, 100, NULL, NULL, 'RS1', 'sudah', '2021-08-16 21:24:36', '2021-08-16 21:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `claim_vaksin`
--

CREATE TABLE `claim_vaksin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `dosis_ke` int(11) NOT NULL,
  `link` text NOT NULL,
  `keterangan` text NOT NULL,
  `status_verified` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `claim_vaksin_history`
--

CREATE TABLE `claim_vaksin_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nim_nip` varchar(255) DEFAULT NULL,
  `dosis` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`) VALUES
(4, 'palerian', 'palerian@gmail.com', NULL, 'user', '$2y$10$AfVTVFXyqxjZnmQjECOOsuUg8uO49WY.9RoxvKkrQ27PGdpmvTFP2', NULL, '2021-08-04 08:48:51', '2021-08-04 09:00:12', 'avatar.png', '#2180f3', 0, 0),
(5, 'yahya', 'yahya@gmail.com', NULL, 'operator', '$2y$10$9wVdT3BvyPXlz1A/7sa3Nu3ANQwQaEG5W.rS9Wlk8k0SW3dawtLvy', NULL, '2021-08-04 08:49:40', '2021-08-14 22:39:09', 'avatar.png', '#4CAF50', 0, 0),
(6, 'Rasyid Paradisa', 'admin@gmail.com', NULL, 'admin', '$2y$10$hvaCqy9kAvd0tVE04qQBPOO.SXYXxEsUgxb7s8gcyQ7Hk0U3.kbV.', NULL, '2021-08-04 20:43:07', '2021-08-08 06:34:41', 'avatar.png', '#2180f3', 1, 0),
(7, 'user', 'user@gmail.com', NULL, 'user', '$2y$10$J97YsFK.CmmpHtnJ7K24KecOpsLvmi9EJmwbejLaI/oT0/t.N1PLS', NULL, '2021-08-05 02:39:16', '2021-08-05 02:39:16', 'avatar.png', '#2180f3', 0, 0),
(8, 'friends', 'friend@gmail.com', NULL, 'user', '$2y$10$dNxkNeBgZLVbZfe3S3PC.eHsqFE.kXYB8X9EyxBu8H1za90sCDaGy', NULL, '2021-08-06 04:29:36', '2021-08-06 04:29:36', 'avatar.png', '#2180f3', 0, 0),
(11, 'fahri', 'dokterfahri@gmail.com', NULL, 'user', '$2y$10$5ywlfaHcsrAiEm8Vm7gsMuUoXIkKVg/se/ANrB1QKkp5G3lgu.acK', NULL, '2021-08-07 20:48:13', '2021-08-07 20:48:13', 'avatar.png', '#2180f3', 0, 0),
(12, 'polka', 'polka@gmail.com', NULL, 'user', '$2y$10$Yc9FQJ9mZ20i6a58cuR2puUTruQjd0QCC/K4lkl74gXtIxMkAU1/6', NULL, '2021-08-11 08:58:41', '2021-08-11 08:58:41', 'avatar.png', '#2180f3', 0, 0),
(13, 'elsa', 'dokterelsa@gmail.com', NULL, 'user', '$2y$10$Vak2S9SqVCp8rAsuAPJJ9uvYTWWEgWfmy.ivvahNWoFKpxHyD0pJ2', NULL, '2021-08-11 17:37:00', '2021-08-11 17:37:00', 'avatar.png', '#2180f3', 0, 0),
(14, 'operator', 'operator@gmail.com', NULL, 'operator', '$2y$10$dOdAcz67Pl//lV93AiepBe.Y1E6.bhC9.voFLpo/Vhxq4p.DOFira', NULL, '2021-08-14 22:09:03', '2021-08-14 22:09:03', 'avatar.png', '#2180f3', 0, 0),
(15, 'viana', 'viana@gmail.com', NULL, 'user', '$2y$10$qF9rwI02yXshaqmBhXWGI.cCFQrk59iMKWapZBUfNV8CMtYl/t8A2', NULL, '2021-08-15 02:50:23', '2021-08-15 02:50:23', 'avatar.png', '#2180f3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nim_nip` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `gambar_ktp` varchar(255) DEFAULT NULL,
  `verified` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `id_user`, `nama_lengkap`, `nim_nip`, `no_telp`, `status`, `alamat`, `gambar_ktp`, `verified`, `created_at`, `updated_at`) VALUES
(12, 6, 'Rasyid Fiana Paradisa', 'K202010', '081353283911', 'dokter', 'Jl. Ahmad Yani', 'foto_ktp_K202010.jpeg', 'yes', '2021-08-04 21:18:09', '2021-08-15 05:46:47'),
(13, 4, 'Palerian Eversky', 'K202020', '081353283922', 'biasa', 'Jl. Kasuari', 'foto_ktp_K202020.JPG', 'no', '2021-08-04 21:51:30', '2021-08-04 21:51:30'),
(14, 7, 'Ivelia Kanya', 'K202030', '081353283933', 'biasa', 'Jl. Ngandikan', 'foto_ktp_K202030.JPG', 'no', '2021-08-05 02:40:16', '2021-08-05 02:40:16'),
(15, 5, 'Yahya Muhammad', 'K20203', '081353283944', 'dokter', 'Jl. Janti', 'foto_ktp_K20203.JPG', 'yes', '2021-08-05 03:56:19', '2021-08-05 03:56:19'),
(16, 8, 'Frenzy Virouza', 'K808080', '081353283955', 'biasa', 'Jl. Suprapto', 'foto_ktp_K808080.JPG', 'no', '2021-08-06 04:30:25', '2021-08-06 04:30:25'),
(17, 9, 'Anang Wijayanto', 'K202055', '081353283222', 'dokter', 'Jl. Kapuk', 'foto_ktp_K202055.jpg', 'yes', '2021-08-07 02:16:51', '2021-08-07 02:16:51'),
(18, 10, 'riki aston', 'K202090', '081353283921', 'biasa', 'Jl. Kasuari', 'foto_ktp_K202090.JPG', 'no', '2021-08-07 06:53:28', '2021-08-07 06:53:28'),
(19, 11, 'Fahri Rossiana', '123', '081353283008', 'dokter', 'Jl. Suteja', 'foto_ktp_K202075.JPG', 'yes', '2021-08-07 20:48:55', '2021-08-07 20:48:55'),
(20, 12, 'polka dimika', 'K202095', '081353283927', 'biasa', 'Jl. Sutawijaya', 'foto_ktp_K202095.png', 'no', '2021-08-11 08:59:25', '2021-08-11 08:59:25'),
(21, 13, 'elsa varadisa', 'K202085', '081353283123', 'dokter', 'Jl. Kapuk', 'foto_ktp_K202085.png', 'no', '2021-08-11 17:37:42', '2021-08-11 17:37:42'),
(22, 14, 'operator kampus', 'k808029', '081353283333', 'biasa', 'Jl. Suteja', 'foto_ktp_k808029.xlsx', 'no', '2021-08-14 22:09:31', '2021-08-14 22:09:31'),
(23, 15, 'viana', 'k808023', '081353283934', 'tenaga medis', 'Jl. Yongki', 'foto_ktp_k808023.sql', 'yes', '2021-08-15 02:51:05', '2021-08-15 02:51:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_covid`
--
ALTER TABLE `claim_covid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_covid_history`
--
ALTER TABLE `claim_covid_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_gejala`
--
ALTER TABLE `claim_gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `claim_isolasi`
--
ALTER TABLE `claim_isolasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_isolasi_rslainnya`
--
ALTER TABLE `claim_isolasi_rslainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_isolasi_terpusat`
--
ALTER TABLE `claim_isolasi_terpusat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_vaksin`
--
ALTER TABLE `claim_vaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim_vaksin_history`
--
ALTER TABLE `claim_vaksin_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claim_covid`
--
ALTER TABLE `claim_covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `claim_covid_history`
--
ALTER TABLE `claim_covid_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `claim_gejala`
--
ALTER TABLE `claim_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `claim_isolasi`
--
ALTER TABLE `claim_isolasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `claim_isolasi_rslainnya`
--
ALTER TABLE `claim_isolasi_rslainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `claim_isolasi_terpusat`
--
ALTER TABLE `claim_isolasi_terpusat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `claim_vaksin`
--
ALTER TABLE `claim_vaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `claim_vaksin_history`
--
ALTER TABLE `claim_vaksin_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
