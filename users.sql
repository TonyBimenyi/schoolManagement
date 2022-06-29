-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 03:00 PM
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
(8, 'cunyr@mailinator.com', 'gawol', 'geqyker@mailinator.com', NULL, '$2y$10$TJiK0VHzHmyfXQ1n7QIwzO.vpHKA3v5Gj8RWYaLO9S0tZA3rXl0w6', 'Admin', 0, NULL, '2022-06-29 19:58:38', '2022-06-29 19:58:38');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
