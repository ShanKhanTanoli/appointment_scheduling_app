-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:25 PM
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
  `training_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `alias`, `slug`, `site_id`, `trainer_id`, `training_type_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Shan', 'Khan', 'XE44GP69LVFZG390MI71', '81KFM7AUSIEZWMLUVJCV', 3, 1, 2, '2022-04-10', '12:35:00', '2022-04-02 06:15:36', '2022-04-02 08:16:07'),
(2, 'User2', 'User2', 'YM6XWIHBNECY0KDHBI3P', 'N4S0ZCHCN1EAHQN32BMJ', 3, 6, 2, '2022-04-01', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(3, 'User3', 'User3', 'OON9WDRORFY7JGHGYX1R', '871IG1VHGPEEAJKJGN3P', 1, 4, 1, '2022-04-11', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(4, 'User4', 'User4', 'GX3CTVEN4MA0L4H2GOOU', '8BROX3HNN54YHSQPDEP5', 2, 5, 1, '2022-04-06', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(5, 'User5', 'User5', 'XWW2YFK7DTJLXPLZ5W5W', '9EJUX6RAZGWA5FKWZYGU', 3, 7, 1, '2022-04-01', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(6, 'User6', 'User6', 'UHMHDNP8QUZ0IOSTJPVF', 'QMLWAT2P6AWHFIOXNIRD', 3, 3, 2, '2022-04-04', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(7, 'User7', 'User7', 'B4RYPHW3ANGWVQHTCMGN', 'AZYCLM5I593NWP3IZCUO', 4, 6, 2, '2022-04-04', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(8, 'User8', 'User8', 'T4S3WP1YEGHHLDWZFCV1', 'XBUQWDXCD88OIKJCGQY0', 2, 10, 1, '2022-04-07', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(9, 'User9', 'User9', 'NMAPSALXU3MYDJ2DSN3M', 'TNN51SJ2H5XPMDHUD2IF', 4, 9, 2, '2022-04-11', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(10, 'User10', 'User10', 'J0WFYPZGM84K8UU2O9JW', 'LT58MZUU8LJDBYSJPQIF', 3, 10, 2, '2022-04-03', '11:15:00', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(15, 'shankhan', 'Tanoli', '867564564353', '2OZMAQQHC0NWVYLREGYN', 3, 1, 1, '2022-04-02', '21:30:17', '2022-04-02 08:24:44', '2022-04-02 08:24:44');

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
(5, '2022_03_23_083043_create_training_types_table', 1),
(6, '2022_03_23_083045_create_sites_table', 1),
(7, '2022_03_23_083046_create_trainers_table', 1),
(8, '2022_03_23_113918_create_appointments_table', 1),
(9, '2022_03_25_111643_create_settings_table', 1);

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
(1, 'ALONZO', '2022-04-02 06:15:36', '2022-04-02 06:15:36');

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
(1, 'IAD16', '2DRREEQWJUFPQY380JFE', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(2, 'IAD56', '3CSUXCAZC4YYXAISZA7V', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(3, 'IAD57', 'Q4IH2Z81VIPNX23UV5OP', '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(4, 'IAD76', '8VKFLDYGLKJX9YFASC8I', '2022-04-02 06:15:36', '2022-04-02 06:15:36');

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
(1, 'Aaron Maxwell', 'shankhantanoli1@gmail.com', '3532816048', 'SDAGOL9XWVLSZNJJMBY6', 3, '2022-04-02 06:15:36', '2022-04-02 08:15:27'),
(2, 'Ben Crutchley', 'ben@email.com', '1065339827', '73ANRZBQJUOGONGE9LJ0', 1, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(3, 'Josh Top', 'josh@email.com', '5594463870', 'ZW841XHREVPW0VDPQU4E', 2, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(4, 'Jake Riddick', 'jake@email.com', '2152732824', 'X8CFTC5AGW5DO1FUHNAZ', 4, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(5, 'Vince Martin', 'vince@email.com', '8791792292', '6DPOTA7BZ3PXII5XTRUK', 1, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(6, 'Shaun Darling', 'shanun@email.com', '3124218499', '7PVOZ8RKRIETDPKBLXKA', 1, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(7, 'Ryan Mason', 'ryan@email.com', '2397640058', 'ZTEINBQXYTLO1LSM0AYQ', 1, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(8, 'Alex Vaughn', 'alex@email.com', '2924317696', 'VCKM4W1ZDDSMWOV1WUCN', 2, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(9, 'Zachary Sansom', 'zachary@email.com', '5051165116', 'C5H2RXFHXKLGFSQW2VAO', 1, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(10, 'Jason Dean', 'jason@email.com', '5896320119', 'PMNB1H6HQT0HUFX8BIEE', 2, '2022-04-02 06:15:36', '2022-04-02 06:15:36'),
(11, 'Justin Hague', 'justin@email.com', '2454972294', 'K612BI0NYFZXWC6E7OH4', 3, '2022-04-02 06:15:36', '2022-04-02 06:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `training_types`
--

CREATE TABLE `training_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_types`
--

INSERT INTO `training_types` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Initial Certification', 'KQPNXWUV7A', '2022-04-02 06:15:35', '2022-04-02 06:15:35'),
(2, 'Quarterly Refresher', 'P4RUDJQITN', '2022-04-02 06:15:35', '2022-04-02 06:15:35');

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
(1, 'Admin', 'shankhantanoli1@gmail.com', NULL, '$2y$10$zYwwl1Sl1PHZR85h170/xeI7CmLcQiCElywTYv0qDi560B.p6ZrF2', '85P2HvII0kT4Z1pewiVhXHtYOEIgQS3PhvVRrB5fSfXUZEqhD8UdNDm60hAu', '2022-04-02 06:15:35', '2022-04-02 06:59:42');

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
  ADD KEY `appointments_trainer_id_foreign` (`trainer_id`),
  ADD KEY `appointments_training_type_id_foreign` (`training_type_id`);

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
-- Indexes for table `training_types`
--
ALTER TABLE `training_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `training_types_slug_unique` (`slug`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `training_types`
--
ALTER TABLE `training_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `appointments_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_training_type_id_foreign` FOREIGN KEY (`training_type_id`) REFERENCES `training_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
