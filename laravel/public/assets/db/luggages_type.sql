-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 3 朁E31 日 00:43
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
-- テーブルの構造 `luggages_type`
--

CREATE TABLE `luggages_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `luggages_type`
--

INSERT INTO `luggages_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Valise Large', NULL, NULL),
(2, 'Valise Moyenne', NULL, NULL),
(3, 'Valise Petite', NULL, NULL),
(4, 'Sac de Marchandise', NULL, NULL),
(5, 'Carton', NULL, NULL),
(6, 'Sac à dos', NULL, NULL),
(7, 'Animaux', NULL, NULL),
(8, 'Ustensils', NULL, NULL),
(9, 'Valise Large', NULL, NULL),
(10, 'Valise Moyenne', NULL, NULL),
(11, 'Valise Petite', NULL, NULL),
(12, 'Sac de Marchandise', NULL, NULL),
(13, 'Carton', NULL, NULL),
(14, 'Sac à dos', NULL, NULL),
(15, 'Animaux', NULL, NULL),
(16, 'Ustensils', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luggages_type`
--
ALTER TABLE `luggages_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luggages_type`
--
ALTER TABLE `luggages_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
