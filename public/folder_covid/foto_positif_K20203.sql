-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 12.42
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

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
-- Struktur dari tabel `ch_favorites`
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
-- Struktur dari tabel `ch_messages`
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
-- Dumping data untuk tabel `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(2094586551, 'user', 5, 5, 'hi', NULL, 1, '2021-08-04 08:51:01', '2021-08-04 08:51:03'),
(2261159989, 'user', 5, 4, 'hi palerian', NULL, 1, '2021-08-04 08:51:35', '2021-08-04 19:22:57'),
(2261407077, 'user', 4, 5, 'hi too', NULL, 1, '2021-08-04 19:23:01', '2021-08-04 19:23:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `claim_covid`
--

CREATE TABLE `claim_covid` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambar_hasiltest` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `sembuh` varchar(255) DEFAULT 'belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `claim_covid`
--

INSERT INTO `claim_covid` (`id`, `id_user`, `gambar_hasiltest`, `keterangan`, `sembuh`, `created_at`, `updated_at`) VALUES
(14, 7, 'foto_positif_K202030.JPG', 'Saya terpapar oleh adik saya', 'belum', '2021-08-05 03:03:44', '2021-08-05 03:03:44'),
(15, 10, 'foto_positif_K202090.JPG', 'Saya alhamdulillah tidak bergejala', 'belum', '2021-08-07 06:54:55', '2021-08-07 06:54:55'),
(16, 11, 'foto_positif_K202075.JPG', 'Alhamdulillah Saya Sudah Sehat !', 'sudah', '2021-08-07 20:50:53', '2021-08-07 21:01:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `claim_covid_history`
--

CREATE TABLE `claim_covid_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sembuh` varchar(255) DEFAULT 'belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `claim_covid_history`
--

INSERT INTO `claim_covid_history` (`id`, `id_user`, `sembuh`, `created_at`, `updated_at`) VALUES
(14, 7, 'belum', '2021-08-05 03:03:44', '2021-08-05 03:03:44'),
(15, 10, 'belum', '2021-08-07 06:54:55', '2021-08-07 06:54:55'),
(16, 11, 'belum', '2021-08-07 20:50:53', '2021-08-07 21:01:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `claim_gejala`
--

CREATE TABLE `claim_gejala` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
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

--
-- Dumping data untuk tabel `claim_gejala`
--

INSERT INTO `claim_gejala` (`id`, `id_user`, `gejala`, `keadaan`, `ambulan`, `alamat`, `url_map`, `jenis`, `orang`, `kontak_covid`, `link`, `berhenti`, `created_at`, `updated_at`) VALUES
(9, 7, 'Mual-mual', 'ya', 'tidak', 'Jl. Kasuari', 'https://www.google.co.id/maps', 'rumah orang tua', 'ya', 'Tetangga saya, selisih 1-2 bangunan dari tempat saya tinggal menderita COVID-19', 'https://drive.google.com', 'belum', '2021-08-05 03:52:09', '2021-08-05 03:52:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `claim_isolasi`
--

CREATE TABLE `claim_isolasi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `alamat` text NOT NULL,
  `url_map` text NOT NULL,
  `butuh_bantuan` varchar(255) DEFAULT NULL,
  `kiriman_bantuan` varchar(255) NOT NULL,
  `selesai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `claim_isolasi`
--

INSERT INTO `claim_isolasi` (`id`, `id_user`, `alasan`, `alamat`, `url_map`, `butuh_bantuan`, `kiriman_bantuan`, `selesai`, `created_at`, `updated_at`) VALUES
(8, 7, 'covid', 'Jl. Mawar', 'https://www.google.co.id/maps/', 'ya', 'belum', 'belum', '2021-08-05 03:54:26', '2021-08-05 03:54:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `claim_vaksin`
--

CREATE TABLE `claim_vaksin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dosis_ke` int(11) NOT NULL,
  `link` text NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `claim_vaksin`
--

INSERT INTO `claim_vaksin` (`id`, `id_user`, `dosis_ke`, `link`, `keterangan`, `created_at`, `updated_at`) VALUES
(12, 7, 1, 'https://drive.google.com/', 'UNS Kampus Kentingan', '2021-08-05 03:53:31', '2021-08-05 03:53:31'),
(13, 9, 1, 'www.google.com', 'Jl. Senayan', '2021-08-07 05:54:03', '2021-08-07 05:54:03'),
(14, 9, 2, 'www.google.com', 'Jl. Senayan', '2021-08-07 06:07:32', '2021-08-07 06:07:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_22_192348_create_messages_table', 1),
(5, '2019_10_16_211433_create_favorites_table', 1),
(6, '2019_10_18_223259_add_avatar_to_users', 1),
(7, '2019_10_20_211056_add_messenger_color_to_users', 1),
(8, '2019_10_22_000539_add_dark_mode_to_users', 1),
(9, '2019_10_25_214038_add_active_status_to_users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`) VALUES
(4, 'palerian', 'palerian@gmail.com', NULL, 'user', '$2y$10$AfVTVFXyqxjZnmQjECOOsuUg8uO49WY.9RoxvKkrQ27PGdpmvTFP2', NULL, '2021-08-04 08:48:51', '2021-08-04 09:00:12', 'avatar.png', '#2180f3', 0, 0),
(5, 'yahya', 'yahya@gmail.com', NULL, 'user', '$2y$10$9wVdT3BvyPXlz1A/7sa3Nu3ANQwQaEG5W.rS9Wlk8k0SW3dawtLvy', NULL, '2021-08-04 08:49:40', '2021-08-04 19:42:57', 'avatar.png', '#4CAF50', 0, 0),
(6, 'Rasyid Paradisa', 'admin@gmail.com', NULL, 'admin', '$2y$10$hvaCqy9kAvd0tVE04qQBPOO.SXYXxEsUgxb7s8gcyQ7Hk0U3.kbV.', NULL, '2021-08-04 20:43:07', '2021-08-08 06:34:41', 'avatar.png', '#2180f3', 1, 0),
(7, 'user', 'user@gmail.com', NULL, 'user', '$2y$10$J97YsFK.CmmpHtnJ7K24KecOpsLvmi9EJmwbejLaI/oT0/t.N1PLS', NULL, '2021-08-05 02:39:16', '2021-08-05 02:39:16', 'avatar.png', '#2180f3', 0, 0),
(8, 'friends', 'friend@gmail.com', NULL, 'user', '$2y$10$dNxkNeBgZLVbZfe3S3PC.eHsqFE.kXYB8X9EyxBu8H1za90sCDaGy', NULL, '2021-08-06 04:29:36', '2021-08-06 04:29:36', 'avatar.png', '#2180f3', 0, 0),
(9, 'anang', 'dokter@gmail.com', NULL, 'user', '$2y$10$DxmnWwSOcTr8NKXYDpHPaeID0lM5hT.3ihVrAxOvw6SXi31iNneB.', NULL, '2021-08-07 02:16:03', '2021-08-07 02:16:03', 'avatar.png', '#2180f3', 0, 0),
(10, 'riki', 'riki@gmail.com', NULL, 'user', '$2y$10$Yz2XEKFAzNeEFpWeVI6f6..96DoxmuyELSFTiLHWtamnw5LV/94e2', NULL, '2021-08-07 06:52:30', '2021-08-07 06:52:30', 'avatar.png', '#2180f3', 0, 0),
(11, 'fahri', 'dokterfahri@gmail.com', NULL, 'user', '$2y$10$5ywlfaHcsrAiEm8Vm7gsMuUoXIkKVg/se/ANrB1QKkp5G3lgu.acK', NULL, '2021-08-07 20:48:13', '2021-08-07 20:48:13', 'avatar.png', '#2180f3', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
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
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `id_user`, `nama_lengkap`, `nim_nip`, `no_telp`, `status`, `alamat`, `gambar_ktp`, `verified`, `created_at`, `updated_at`) VALUES
(12, 6, 'Rasyid Fiana Paradisa', 'K202010', '081353283911', 'dokter', 'Jl. Ahmad Yani', 'foto_ktp_K202010.jpeg', 'no', '2021-08-04 21:18:09', '2021-08-04 21:18:09'),
(13, 4, 'Palerian Eversky', 'K202020', '081353283922', 'biasa', 'Jl. Kasuari', 'foto_ktp_K202020.JPG', 'no', '2021-08-04 21:51:30', '2021-08-04 21:51:30'),
(14, 7, 'Ivelia Kanya', 'K202030', '081353283933', 'biasa', 'Jl. Ngandikan', 'foto_ktp_K202030.JPG', 'no', '2021-08-05 02:40:16', '2021-08-05 02:40:16'),
(15, 5, 'Yahya Muhammad', 'K20203', '081353283944', 'dokter', 'Jl. Janti', 'foto_ktp_K20203.JPG', 'yes', '2021-08-05 03:56:19', '2021-08-05 03:56:19'),
(16, 8, 'Frenzy Virouza', 'K808080', '081353283955', 'biasa', 'Jl. Suprapto', 'foto_ktp_K808080.JPG', 'no', '2021-08-06 04:30:25', '2021-08-06 04:30:25'),
(17, 9, 'Anang Wijayanto', 'K202055', '081353283222', 'dokter', 'Jl. Kapuk', 'foto_ktp_K202055.jpg', 'yes', '2021-08-07 02:16:51', '2021-08-07 02:16:51'),
(18, 10, 'riki aston', 'K202090', '081353283921', 'biasa', 'Jl. Kasuari', 'foto_ktp_K202090.JPG', 'no', '2021-08-07 06:53:28', '2021-08-07 06:53:28'),
(19, 11, 'Fahri Rossiana', 'K202075', '081353283008', 'dokter', 'Jl. Suteja', 'foto_ktp_K202075.JPG', 'yes', '2021-08-07 20:48:55', '2021-08-07 20:48:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `claim_covid`
--
ALTER TABLE `claim_covid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `claim_covid_history`
--
ALTER TABLE `claim_covid_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `claim_gejala`
--
ALTER TABLE `claim_gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `claim_isolasi`
--
ALTER TABLE `claim_isolasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `claim_vaksin`
--
ALTER TABLE `claim_vaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `claim_covid`
--
ALTER TABLE `claim_covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `claim_covid_history`
--
ALTER TABLE `claim_covid_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `claim_gejala`
--
ALTER TABLE `claim_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `claim_isolasi`
--
ALTER TABLE `claim_isolasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `claim_vaksin`
--
ALTER TABLE `claim_vaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
