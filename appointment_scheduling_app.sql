-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 10:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_scheduling_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_id` bigint(20) UNSIGNED DEFAULT NULL,
  `trainer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `alias`, `slug`, `site_id`, `trainer_id`, `created_at`, `updated_at`) VALUES
(1, 'User1', 'User1', '7MUSULSXX0WFSM1U7ZCA', 'FMEDTABLYNEPJNOPW9FT', 1, 1, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(2, 'User2', 'User2', 'HHHADL3IJ8N2ZPH2ZGVV', 'LERC4ESWJR1QFT1BW61V', 3, 5, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(3, 'User3', 'User3', 'DQCKF3LX8D0HQBXS9X1Y', 'AYZYEV5L8EOA2DOJZAFA', 1, 1, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(4, 'User4', 'User4', 'HGVJVHV91OG7ANXVSIUI', '9MCHACOCNMHVATRBTT0G', 2, 4, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(5, 'User5', 'User5', 'S6GIPP52HE5XIHT6TGYI', 'RRTQZTU8XKFJPZCVFLPZ', 1, 2, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(6, 'User6', 'User6', 'BNO9XUWLHKW6MH09RXXS', 'AWDQT5ZSXI7EMJROVPJQ', 4, 1, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(7, 'User7', 'User7', 'HQ0IYHFSMONUUTVJWXWW', 'Y75FNDFSLJEZE20BN007', 4, 6, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(8, 'User8', 'User8', 'KKLTWXDXBZOLFBFWMVM0', 'BRQEHTZLH9M3BWZKQRIC', 2, 8, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(9, 'User9', 'User9', 'QCPVG4BXDSRFBG6LPACU', 'JIRRLS9EC47I9FDISAC2', 3, 3, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(10, 'User10', 'User10', 'TC4EGXGP848UEE4T8OKB', 'WXRSHKYKJVV0JJOGU0YN', 2, 11, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(11, 'shan', 'khan', '99999', 'ZGZ3KUONMC2VTDOPN5YH', 2, 1, '2022-03-25 16:28:42', '2022-03-25 16:28:42');

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

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_23_083045_create_sites_table', 1),
(6, '2022_03_23_083046_create_trainers_table', 1),
(7, '2022_03_23_113918_create_appointments_table', 1),
(8, '2022_03_25_111643_create_settings_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `text_logo`, `created_at`, `updated_at`) VALUES
(1, 'ALONZO', '2022-03-25 16:08:03', '2022-03-25 16:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `code`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'IAD16', 'LEHJOVXKEIOMP5IOKUHY', '2022-03-25 16:08:02', '2022-03-25 16:08:02'),
(2, 'IAD56', 'PWIXF6RRZQGEP1DLXRWO', '2022-03-25 16:08:02', '2022-03-25 16:08:02'),
(3, 'IAD57', 'CENJPDEFP3MXTVN8ZHVB', '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(4, 'IAD76', 'NEDTY2ORUV14JP5FOEBO', '2022-03-25 16:08:03', '2022-03-25 16:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `email`, `number`, `slug`, `site_id`, `created_at`, `updated_at`) VALUES
(1, 'Aaron Maxwell', 'aaron@email.com', '4252394217', 'BZAFORG7ZJG4V2ORRQF5', 2, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(2, 'Ben Crutchley', 'ben@email.com', '6211360601', 'WUM58X1DDHXKSBTLNUNU', 3, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(3, 'Josh Top', 'josh@email.com', '3894337967', 'VZSHIY2NVQESQJMGNXV0', 2, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(4, 'Jake Riddick', 'jake@email.com', '5391711223', 'DIMOYOW0ZOT1A0AJE9AF', 1, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(5, 'Vince Martin', 'vince@email.com', '9110168310', 'MP51ISQLZVIHDGNKZRYV', 1, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(6, 'Shaun Darling', 'shanun@email.com', '7826174736', 'P4DKLTIQSRZBQ1JPLDTG', 3, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(7, 'Ryan Mason', 'ryan@email.com', '1851546779', 'HHQ1XFEKCUVDUGRYFXUS', 3, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(8, 'Alex Vaughn', 'alex@email.com', '7531159284', 'ZCIEJWCVC0GOBJOMGOXH', 3, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(9, 'Zachary Sansom', 'zachary@email.com', '1381085152', 'KIAOBNVKVORYGEU3S0FY', 2, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(10, 'Jason Dean', 'jason@email.com', '4728207564', 'SNPON8TUWKQ3WJHDBCFR', 2, '2022-03-25 16:08:03', '2022-03-25 16:08:03'),
(11, 'Justin Hague', 'justin@email.com', '9964287212', 'I5XDPGJRATCUP8CZZIUN', 4, '2022-03-25 16:08:03', '2022-03-25 16:08:03');

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
(1, 'Admin', 'admin@email.com', NULL, '$2y$10$I4ONKwVb1T81zze8STZ94e7RdJAGwWH1uOJZhJeSHWLPvFKF0WQq2', NULL, '2022-03-25 16:08:02', '2022-03-25 16:08:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointments_slug_unique` (`slug`),
  ADD KEY `appointments_site_id_foreign` (`site_id`),
  ADD KEY `appointments_trainer_id_foreign` (`trainer_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sites_slug_unique` (`slug`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trainers_email_unique` (`email`),
  ADD UNIQUE KEY `trainers_number_unique` (`number`),
  ADD UNIQUE KEY `trainers_slug_unique` (`slug`),
  ADD KEY `trainers_site_id_foreign` (`site_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
