-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 01:35 PM
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
-- Table structure for table `enseignants`
--

CREATE TABLE `enseignants` (
  `id_ens` int(11) NOT NULL,
  `nom_ens` varchar(255) NOT NULL,
  `prenom_ens` varchar(255) NOT NULL,
  `telephone_ens` varchar(255) NOT NULL,
  `email_ens` varchar(255) NOT NULL,
  `adress_ens` varchar(255) NOT NULL,
  `sexe_ens` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enseignants`
--

INSERT INTO `enseignants` (`id_ens`, `nom_ens`, `prenom_ens`, `telephone_ens`, `email_ens`, `adress_ens`, `sexe_ens`, `created_at`, `updated_at`) VALUES
(1, 'Shikaneza', 'Alain', '79999234', '', 'Kigobe', 'Homme', '0000-00-00 00:00:00', ''),
(2, 'BImenyimana', 'Tony Blaise', '69543122', 'bito@biu.bi', 'gihosha', 'homme', '2022-06-29 16:38:01', ''),
(3, 'Tuyishimire', 'Noella', '68899054', 'tuno@biu.bi', 'gasenyi', 'femme', '2022-06-29 16:47:43', '2022-06-29 18:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `entrees`
--

CREATE TABLE `entrees` (
  `id_entree` int(11) NOT NULL,
  `type_entree` varchar(255) NOT NULL,
  `montant_entree` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'Niyonkuru', 'Laurente', '1998-08-14', 'lo@biu.bi', 'Gihosha', 69845674, 7, 'Femme', 1, 10, 'BAC II', '2021-2022', 'Celibataire', '2022-07-02 19:28:37', '2022-07-02 19:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `facultes`
--

CREATE TABLE `facultes` (
  `id_fac` int(11) NOT NULL,
  `nom_fac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultes`
--

INSERT INTO `facultes` (`id_fac`, `nom_fac`) VALUES
(1, 'Business and Administration'),
(2, 'Science and Technology\r\n');

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
(5, '2022_06_21_142232_create_fac_table', 1),
(6, '2022_06_21_185223_create_etudiants_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `minervals`
--

CREATE TABLE `minervals` (
  `id_min` int(11) NOT NULL,
  `id_etu` int(11) NOT NULL,
  `montant_paye` double NOT NULL,
  `montant_total` double NOT NULL,
  `tranche` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `id_personnel` int(11) NOT NULL,
  `nom_personnel` varchar(255) NOT NULL,
  `prenom_personnel` varchar(255) NOT NULL,
  `telephone_personnel` varchar(255) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `salaire` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id_personnel`, `nom_personnel`, `prenom_personnel`, `telephone_personnel`, `sexe`, `email`, `fonction`, `salaire`, `created_at`, `updated_at`) VALUES
(1, 'Nishimwe', 'Alain Bruce', '79800653', 'homme', 'brucart@biu.bi', 'comptable', 100000, NULL, NULL),
(2, 'Njejimana', 'Elissa', '79483743', 'homme', 'eli@biu.bi', 'doyen', 1200000, '2022-07-06 18:32:46', '2022-07-06 18:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `sorties`
--

CREATE TABLE `sorties` (
  `id_sortie` int(11) NOT NULL,
  `type_sortie` varchar(255) NOT NULL,
  `montant_sortie` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specialisations`
--

CREATE TABLE `specialisations` (
  `id_spec` int(11) NOT NULL,
  `nom_spec` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fac` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialisations`
--

INSERT INTO `specialisations` (`id_spec`, `nom_spec`, `id_fac`, `created_at`, `updated_at`) VALUES
(4, 'Genie Logiciel', 2, NULL, NULL),
(5, 'Reseau et Telecom', 2, NULL, NULL),
(6, 'Regional integration and International Trade', 1, NULL, NULL),
(9, 'Procurement and Logistics management', 1, NULL, NULL),
(10, 'Non Governmental Organization Management', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id_stat` int(11) NOT NULL,
  `type_depense` varchar(255) NOT NULL,
  `montant_depense` double NOT NULL,
  `date_depense` timestamp NULL DEFAULT NULL,
  `type_revenu` varchar(355) NOT NULL,
  `montant_revenu` double NOT NULL,
  `date_revenu` timestamp NULL DEFAULT NULL,
  `id_entree` int(11) NOT NULL,
  `id_sortie` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `etat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yvan Igor', '', 'bito@biu.bi', NULL, '$2y$10$/30eqMl/B0ufyiU1lfE0WOB/xLMJ1/erYpym9D5/pw/74Vj1EYfAG', 'super admin', 1, NULL, '2022-06-22 19:23:05', '2022-06-22 19:23:05'),
(2, 'Bruce', '', 'bruce@biu.bi', NULL, 'bujumbura', 'super admin', 1, NULL, NULL, NULL),
(3, 'TonyTresor', '', 'tony@biu.bi', NULL, 'bujumbura', 'admin\r\n', 0, NULL, NULL, NULL),
(4, 'Manimpa Tony Tresor', 'Tresor', 'mato@biu.bi', NULL, '$2y$10$.WAY2qrsGaSU3HFN3tvqnO9TzMTxzFwV4GSmC./.pC3zoYofA/38y', 'Super Admin', 0, NULL, '2022-06-29 19:52:12', '2022-06-29 19:52:12'),
(8, 'cunyr@mailinator.com', 'gawol', 'geqyker@mailinator.com', NULL, '$2y$10$TJiK0VHzHmyfXQ1n7QIwzO.vpHKA3v5Gj8RWYaLO9S0tZA3rXl0w6', 'Admin', 0, NULL, '2022-06-29 19:58:38', '2022-06-29 19:58:38'),
(9, 'Njejimana', 'Elissa', 'eli@biu.bi', NULL, '$2y$10$XhfWLaaLOACtMkIPpt0MOePnAWtVyNZbF/gBG7k8KtAbclUgI2I1u', 'doyen', 1, NULL, '2022-07-06 18:32:46', '2022-07-06 18:32:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enseignants`
--
ALTER TABLE `enseignants`
  ADD PRIMARY KEY (`id_ens`);

--
-- Indexes for table `entrees`
--
ALTER TABLE `entrees`
  ADD PRIMARY KEY (`id_entree`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etu`),
  ADD KEY `id_fac` (`id_fac`),
  ADD KEY `id_spec` (`id_spec`);

--
-- Indexes for table `facultes`
--
ALTER TABLE `facultes`
  ADD PRIMARY KEY (`id_fac`);

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
-- Indexes for table `minervals`
--
ALTER TABLE `minervals`
  ADD PRIMARY KEY (`id_min`),
  ADD KEY `id_etu` (`id_etu`);

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
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id_personnel`);

--
-- Indexes for table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id_sortie`);

--
-- Indexes for table `specialisations`
--
ALTER TABLE `specialisations`
  ADD PRIMARY KEY (`id_spec`),
  ADD KEY `id_fac` (`id_fac`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id_stat`),
  ADD KEY `id_entree` (`id_entree`),
  ADD KEY `id_sortie` (`id_sortie`);

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
-- AUTO_INCREMENT for table `enseignants`
--
ALTER TABLE `enseignants`
  MODIFY `id_ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entrees`
--
ALTER TABLE `entrees`
  MODIFY `id_entree` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facultes`
--
ALTER TABLE `facultes`
  MODIFY `id_fac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `minervals`
--
ALTER TABLE `minervals`
  MODIFY `id_min` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id_sortie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialisations`
--
ALTER TABLE `specialisations`
  MODIFY `id_spec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`id_fac`) REFERENCES `facultes` (`id_fac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etudiants_ibfk_2` FOREIGN KEY (`id_spec`) REFERENCES `specialisations` (`id_spec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `minervals`
--
ALTER TABLE `minervals`
  ADD CONSTRAINT `minervals_ibfk_1` FOREIGN KEY (`id_etu`) REFERENCES `etudiants` (`id_etu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specialisations`
--
ALTER TABLE `specialisations`
  ADD CONSTRAINT `specialisations_ibfk_1` FOREIGN KEY (`id_fac`) REFERENCES `facultes` (`id_fac`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`id_entree`) REFERENCES `entrees` (`id_entree`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stats_ibfk_2` FOREIGN KEY (`id_sortie`) REFERENCES `sorties` (`id_sortie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
