-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 06:53 PM
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
-- Table structure for table `sorties`
--

CREATE TABLE `sorties` (
  `id_sortie` varchar(255) NOT NULL,
  `type_sortie` varchar(255) NOT NULL,
  `designation_sortie` varchar(255) NOT NULL,
  `montant_sortie` double NOT NULL,
  `id_salaire` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sorties`
--

INSERT INTO `sorties` (`id_sortie`, `type_sortie`, `designation_sortie`, `montant_sortie`, `id_salaire`, `created_at`, `updated_at`) VALUES
('901405', 'achat', 'paiement electricite', 35000, NULL, '2022-07-11 08:50:06', '2022-07-11 08:50:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id_sortie`),
  ADD KEY `id_salaire` (`id_salaire`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sorties`
--
ALTER TABLE `sorties`
  ADD CONSTRAINT `id_salaire` FOREIGN KEY (`id_salaire`) REFERENCES `salaires` (`id_salaire`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
