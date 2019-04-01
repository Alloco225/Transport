-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 3 朁E31 日 00:39
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
-- テーブルの構造 `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `cities`
--

INSERT INTO `cities` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Abidjan', NULL, NULL, NULL),
(2, 'Bouaké', NULL, NULL, NULL),
(3, 'San Pédro', NULL, NULL, NULL),
(4, 'Bonon', NULL, NULL, NULL),
(5, 'Bonoua', NULL, NULL, NULL),
(6, 'Bondoukou', NULL, NULL, NULL),
(7, 'Adjamé', NULL, NULL, NULL),
(8, 'Cocody', NULL, NULL, NULL),
(9, 'Zouénoula', NULL, NULL, NULL),
(10, 'Yopougon', NULL, NULL, NULL),
(11, 'Koumassi', NULL, NULL, NULL),
(12, 'Bingerville', NULL, NULL, NULL),
(13, 'Daloa', NULL, NULL, NULL),
(14, 'Yamoussoukro', NULL, NULL, NULL),
(15, 'Bouaflé', NULL, NULL, NULL),
(16, 'Marcory', NULL, NULL, NULL),
(17, 'Treichville', NULL, NULL, NULL),
(18, 'Port-Boué', NULL, NULL, NULL),
(19, 'Gagnoa', NULL, NULL, NULL),
(20, 'Yopougon Maroc', NULL, NULL, NULL),
(21, 'Yopougon Siporex', NULL, NULL, NULL),
(22, 'Marcory non résidentiel', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
