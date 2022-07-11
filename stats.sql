-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 11:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id_stat` int(11) NOT NULL,
  `type_depense` varchar(255) DEFAULT NULL,
  `montant_depense` double DEFAULT NULL,
  `date_depense` timestamp NULL DEFAULT NULL,
  `type_revenu` varchar(355) DEFAULT NULL,
  `montant_revenu` double DEFAULT NULL,
  `date_revenu` timestamp NULL DEFAULT NULL,
  `id_entree` int(11) DEFAULT NULL,
  `id_sortie` int(11) DEFAULT NULL,
  `id_salaire` int(11) DEFAULT NULL,
  `id_minerval` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id_stat`, `type_depense`, `montant_depense`, `date_depense`, `type_revenu`, `montant_revenu`, `date_revenu`, `id_entree`, `id_sortie`, `id_salaire`, `id_minerval`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'Minerval', 3, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:50:55', '2022-07-07 17:50:55'),
(2, NULL, NULL, NULL, 'Minerval', 250000, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:51:22', '2022-07-07 17:51:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id_stat`),
  ADD KEY `id_entree` (`id_entree`),
  ADD KEY `id_sortie` (`id_sortie`),
  ADD KEY `id_minerval` (`id_minerval`),
  ADD KEY `id_salaire` (`id_salaire`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`id_entree`) REFERENCES `entrees` (`id_entree`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stats_ibfk_2` FOREIGN KEY (`id_sortie`) REFERENCES `sorties` (`id_sortie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stats_ibfk_3` FOREIGN KEY (`id_minerval`) REFERENCES `minervals` (`id_min`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stats_ibfk_4` FOREIGN KEY (`id_salaire`) REFERENCES `salaires` (`id_salaire`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
