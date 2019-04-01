-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 3 朁E31 日 00:32
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `drivers`
--

INSERT INTO `drivers` (`id`, `first_name`, `last_name`, `birth_date`, `email`, `phone`, `address`, `created_at`, `updated_at`, `company_id`) VALUES
(1, 'Kouassi', 'Kouamé', '1980-10-08', 'kouassi_kouame34@gmail.com', '01020103', 'Cocody Riviera 3', NULL, NULL, 1),
(2, 'Koffi', 'Kouamé', '1980-10-18', 'koffi_kouame34@gmail.com', '01020104', 'Koumassi Cité AGL 3', NULL, NULL, 1),
(3, 'Kouassi', 'Armand', '1985-10-08', 'kouassiarmand4@gmail.com', '01028103', 'Dabou', NULL, NULL, 1),
(4, 'Allou', 'Kouamé', '1999-10-08', 'allouallo@gmail.com', '01020403', 'Sipim 5 Energy', NULL, NULL, 2),
(5, 'Koulouan', 'Kouamé', '1870-10-08', 'koulouankoulouan@gmail.com', '24586921', 'Attogban 2', NULL, NULL, 1),
(6, 'Alphone', 'Elric', '1912-12-08', 'alphoneE@gmail.com', '25874136', 'Resenboul', NULL, NULL, 1),
(7, 'May', 'Chan', '2003-10-08', 'mayMay@gmail.com', '01020123', 'Cocody Palmeraie 3', NULL, NULL, 1),
(8, 'Atama', 'Saitama', '1985-10-08', 'onepunchman@gmail.com', '02010405', 'Z City', NULL, NULL, 2),
(9, 'Sonic', 'Hedgehog', '2005-10-08', 'fastiam@yahoo.fr', '26589874', 'Riviera 3', NULL, NULL, 1),
(10, 'Alain', 'Kouamé', '1980-01-08', 'allain@gmail.com', '02010403', 'Alépé', NULL, NULL, 1),
(11, 'Ilsa', 'Fost', '1925-12-25', 'britishspy@gmail.com', '65981423', 'London next to BB', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_email_unique` (`email`),
  ADD UNIQUE KEY `drivers_phone_unique` (`phone`),
  ADD KEY `drivers_company_id_foreign` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
