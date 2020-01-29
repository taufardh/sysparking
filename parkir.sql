-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 02:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plat_nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id`, `plat_nomor`, `status`, `bayar`, `created_at`, `updated_at`) VALUES
(1, 'Z2400TS', 'keluar', 2000, '2020-01-28 18:52:21', '2020-01-28 18:55:20'),
(2, 'AA1234YU', 'keluar', 4500, '2020-01-28 19:00:11', '2020-01-29 01:14:46'),
(3, 'H9800TS', 'masuk', 2000, '2020-01-28 19:01:01', '2020-01-28 19:01:01'),
(4, 'AB9876UY', 'masuk', 2000, '2020-01-28 19:05:38', '2020-01-28 19:05:38'),
(5, 'B1YI', 'masuk', 2000, '2020-01-29 01:16:11', '2020-01-29 01:16:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
