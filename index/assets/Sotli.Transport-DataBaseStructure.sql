-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 3 朁E07 日 15:22
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voyager.ci`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bagages`
--

CREATE TABLE `bagages` (
  `bagageId` int(11) NOT NULL,
  `bagageType` int(11) NOT NULL,
  `bagageCouleur` int(11) DEFAULT NULL,
  `bagageProprio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `bagage_types`
--

CREATE TABLE `bagage_types` (
  `bagageTypeId` int(11) NOT NULL,
  `label` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `cars`
--

CREATE TABLE `cars` (
  `carId` int(11) NOT NULL,
  `carImmat` varchar(10) NOT NULL,
  `carCompagnie` int(11) NOT NULL,
  `carNbPlaces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `chauffeurId` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `sexe` int(1) NOT NULL,
  `dateNaissance` date NOT NULL,
  `addresse` varchar(90) NOT NULL,
  `telephone` varchar(8) NOT NULL,
  `email` varchar(70) NOT NULL,
  `compagnie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `compagnies`
--

CREATE TABLE `compagnies` (
  `compagnieId` int(11) NOT NULL,
  `compagnie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `conduire_un_car`
--

CREATE TABLE `conduire_un_car` (
  `id` int(11) NOT NULL,
  `chauffeur` int(11) NOT NULL,
  `car` int(11) NOT NULL,
  `voyage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `couleurs`
--

CREATE TABLE `couleurs` (
  `couleurId` int(11) NOT NULL,
  `couleur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `gares`
--

CREATE TABLE `gares` (
  `gareId` int(11) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `ville` int(11) NOT NULL,
  `compagnie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `promotions`
--

CREATE TABLE `promotions` (
  `promoId` int(11) NOT NULL,
  `promoTitre` varchar(60) NOT NULL,
  `promoDesc` varchar(255) NOT NULL,
  `promoCompagnie` int(11) DEFAULT NULL,
  `promoVille` int(11) DEFAULT NULL,
  `promoGare` int(11) DEFAULT NULL,
  `tauxRemise` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `codeCoupon` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `reservations`
--

CREATE TABLE `reservations` (
  `reservatioId` int(11) NOT NULL,
  `reservationCode` int(11) NOT NULL,
  `voyageurId` int(11) NOT NULL,
  `voyageId` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `nbPlaces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `villes`
--

CREATE TABLE `villes` (
  `villeId` int(11) NOT NULL,
  `ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `voyages`
--

CREATE TABLE `voyages` (
  `voyageId` int(11) NOT NULL,
  `voyageCode` varchar(10) NOT NULL,
  `heureDepart` time NOT NULL,
  `heureArrivee` time NOT NULL,
  `gareDepart` int(11) NOT NULL,
  `gareArrivee` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `voyageurs`
--

CREATE TABLE `voyageurs` (
  `voyageurId` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `prenom` int(11) NOT NULL,
  `sexe` int(11) NOT NULL,
  `addresse` int(11) NOT NULL,
  `dateEnreg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagages`
--
ALTER TABLE `bagages`
  ADD PRIMARY KEY (`bagageId`),
  ADD KEY `bagageType` (`bagageType`),
  ADD KEY `bagageCouleur` (`bagageCouleur`),
  ADD KEY `bagageProprio` (`bagageProprio`);

--
-- Indexes for table `bagage_types`
--
ALTER TABLE `bagage_types`
  ADD PRIMARY KEY (`bagageTypeId`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carId`),
  ADD KEY `carCompagnie` (`carCompagnie`);

--
-- Indexes for table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`chauffeurId`),
  ADD KEY `compagnie` (`compagnie`);

--
-- Indexes for table `compagnies`
--
ALTER TABLE `compagnies`
  ADD PRIMARY KEY (`compagnieId`);

--
-- Indexes for table `conduire_un_car`
--
ALTER TABLE `conduire_un_car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chauffeur` (`chauffeur`),
  ADD KEY `car` (`car`),
  ADD KEY `voyage` (`voyage`);

--
-- Indexes for table `couleurs`
--
ALTER TABLE `couleurs`
  ADD PRIMARY KEY (`couleurId`);

--
-- Indexes for table `gares`
--
ALTER TABLE `gares`
  ADD PRIMARY KEY (`gareId`),
  ADD KEY `ville` (`ville`),
  ADD KEY `compagnie` (`compagnie`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promoId`),
  ADD UNIQUE KEY `codeCoupon` (`codeCoupon`),
  ADD KEY `promoCompagnie` (`promoCompagnie`),
  ADD KEY `promoVille` (`promoVille`),
  ADD KEY `promoGare` (`promoGare`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservatioId`),
  ADD UNIQUE KEY `reservationCode` (`reservationCode`),
  ADD KEY `voyageurId` (`voyageurId`),
  ADD KEY `voyageId` (`voyageId`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`villeId`);

--
-- Indexes for table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`voyageId`),
  ADD KEY `gareDepart` (`gareDepart`),
  ADD KEY `gareArrivee` (`gareArrivee`);

--
-- Indexes for table `voyageurs`
--
ALTER TABLE `voyageurs`
  ADD PRIMARY KEY (`voyageurId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagages`
--
ALTER TABLE `bagages`
  MODIFY `bagageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bagage_types`
--
ALTER TABLE `bagage_types`
  MODIFY `bagageTypeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `chauffeurId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compagnies`
--
ALTER TABLE `compagnies`
  MODIFY `compagnieId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conduire_un_car`
--
ALTER TABLE `conduire_un_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `couleurs`
--
ALTER TABLE `couleurs`
  MODIFY `couleurId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gares`
--
ALTER TABLE `gares`
  MODIFY `gareId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservatioId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `villeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `voyageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `bagages`
--
ALTER TABLE `bagages`
  ADD CONSTRAINT `bagages_ibfk_1` FOREIGN KEY (`bagageType`) REFERENCES `bagage_types` (`bagageTypeId`),
  ADD CONSTRAINT `bagages_ibfk_2` FOREIGN KEY (`bagageCouleur`) REFERENCES `couleurs` (`couleurId`),
  ADD CONSTRAINT `bagages_ibfk_3` FOREIGN KEY (`bagageProprio`) REFERENCES `voyageurs` (`voyageurId`);

--
-- テーブルの制約 `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`carCompagnie`) REFERENCES `compagnies` (`compagnieId`);

--
-- テーブルの制約 `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD CONSTRAINT `chauffeurs_ibfk_1` FOREIGN KEY (`compagnie`) REFERENCES `compagnies` (`compagnieId`);

--
-- テーブルの制約 `conduire_un_car`
--
ALTER TABLE `conduire_un_car`
  ADD CONSTRAINT `conduire_un_car_ibfk_1` FOREIGN KEY (`chauffeur`) REFERENCES `chauffeurs` (`chauffeurId`),
  ADD CONSTRAINT `conduire_un_car_ibfk_2` FOREIGN KEY (`car`) REFERENCES `cars` (`carId`),
  ADD CONSTRAINT `conduire_un_car_ibfk_3` FOREIGN KEY (`voyage`) REFERENCES `voyages` (`voyageId`);

--
-- テーブルの制約 `gares`
--
ALTER TABLE `gares`
  ADD CONSTRAINT `gares_ibfk_1` FOREIGN KEY (`ville`) REFERENCES `villes` (`villeId`),
  ADD CONSTRAINT `gares_ibfk_2` FOREIGN KEY (`compagnie`) REFERENCES `compagnies` (`compagnieId`);

--
-- テーブルの制約 `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_ibfk_1` FOREIGN KEY (`promoVille`) REFERENCES `villes` (`villeId`),
  ADD CONSTRAINT `promotions_ibfk_2` FOREIGN KEY (`promoGare`) REFERENCES `gares` (`gareId`),
  ADD CONSTRAINT `promotions_ibfk_3` FOREIGN KEY (`promoCompagnie`) REFERENCES `compagnies` (`compagnieId`);

--
-- テーブルの制約 `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`voyageId`) REFERENCES `voyages` (`voyageId`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`voyageurId`) REFERENCES `voyageurs` (`voyageurId`);

--
-- テーブルの制約 `voyages`
--
ALTER TABLE `voyages`
  ADD CONSTRAINT `voyages_ibfk_1` FOREIGN KEY (`gareDepart`) REFERENCES `gares` (`gareId`),
  ADD CONSTRAINT `voyages_ibfk_2` FOREIGN KEY (`gareArrivee`) REFERENCES `gares` (`gareId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
