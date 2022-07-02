-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 02:48 PM
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
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etu` int(11) NOT NULL,
  `nom_etu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_etu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_etu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_etu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_etu` int(11) NOT NULL,
  `promotion` int(11) NOT NULL,
  `sexe_etu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fac` int(11) NOT NULL,
  `id_spec` int(11) NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee_academique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_civil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id_etu`, `nom_etu`, `prenom_etu`, `date_naiss`, `email_etu`, `adress_etu`, `telephone_etu`, `promotion`, `sexe_etu`, `id_fac`, `id_spec`, `classe`, `annee_academique`, `etat_civil`, `created_at`, `updated_at`) VALUES
(1, 'Irakoze', 'Chris', '1996-04-24', 'ira@biu.bi', 'Kinindo', 76161970, 7, 'Homme', 1, 6, 'BAC II', '2021-2022', '', '2022-07-01 03:45:45', '2022-07-01 03:45:45'),
(2, 'Nishimwe', 'Alain Bruce', '2002-04-24', 'bruce@biu.bi', 'Carama', 76161970, 7, 'Homme', 2, 4, 'BAC III', '2021-2022', '', '2022-07-01 03:54:49', '2022-07-01 03:54:49'),
(3, 'Niyonkuru', 'Laurent', '1998-08-14', 'lo@biu.bi', 'Gihosha', 69845674, 7, 'Homme', 1, 9, 'BAC III', '2021-2022', 'Celibataire', '2022-07-02 19:28:37', '2022-07-02 19:28:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etu`),
  ADD KEY `id_fac` (`id_fac`),
  ADD KEY `id_spec` (`id_spec`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`id_fac`) REFERENCES `facultes` (`id_fac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etudiants_ibfk_2` FOREIGN KEY (`id_spec`) REFERENCES `specialisations` (`id_spec`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
