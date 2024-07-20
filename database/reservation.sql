-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 08:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `concern` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `full_name`, `division`, `section`, `concern`, `date`, `created_at`) VALUES
(1, 'SAMPLE', 'SAMPLE', 'SAMPLE', 'WINDOWS UPDATE', NULL, '2024-07-20 14:45:19'),
(2, 'TEST', 'TEST', 'TEST', 'WIFI CONNECTION', NULL, '2024-07-20 15:10:55'),
(3, 'AS', 'AS', 'AS', 'WIFI CONNECTION', NULL, '2024-07-20 15:14:48'),
(4, 'AA', 'A', 'A', 'WINDOWS UPDATE', '2024-07-31', '2024-07-20 15:44:20'),
(5, 'J', 'J', 'J', 'WIFI CONNECTION', '2024-07-26', '2024-07-20 15:52:40'),
(6, 'QQ', 'QQ', 'QQ', 'WINDOWS UPDATE', '2024-07-31', '2024-07-20 15:53:35'),
(7, 'AA', 'AA', 'A', 'WIFI CONNECTION', '2024-07-31', '2024-07-20 17:30:28'),
(8, 'A', 'A', 'A', 'WINDOWS UPDATE', '2024-07-31', '2024-07-20 17:30:51'),
(9, 'S', 'S', 'S', 'WIFI CONNECTION', '2024-07-31', '2024-07-20 17:31:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
