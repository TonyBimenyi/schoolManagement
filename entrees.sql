-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 06:54 PM
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
-- Table structure for table `entrees`
--

CREATE TABLE `entrees` (
  `id_entree` varchar(255) NOT NULL,
  `type_entree` varchar(255) NOT NULL,
  `designation_entree` varchar(255) NOT NULL,
  `montant_entree` double NOT NULL,
  `id_min` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrees`
--

INSERT INTO `entrees` (`id_entree`, `type_entree`, `designation_entree`, `montant_entree`, `id_min`, `created_at`, `updated_at`) VALUES
('501639', 'achat', 'voiture', 1200000, 1, '2022-07-11 08:20:22', '2022-07-11 08:20:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrees`
--
ALTER TABLE `entrees`
  ADD PRIMARY KEY (`id_entree`),
  ADD KEY `id_min` (`id_min`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entrees`
--
ALTER TABLE `entrees`
  ADD CONSTRAINT `id_min` FOREIGN KEY (`id_min`) REFERENCES `minervals` (`id_min`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
