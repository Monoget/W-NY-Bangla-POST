-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2022 at 06:27 PM
-- Server version: 5.7.32-35-log
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbn6jp0qc1bhev`
--

-- --------------------------------------------------------

--
-- Table structure for table `publishdate`
--

CREATE TABLE `publishdate` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishdate`
--

INSERT INTO `publishdate` (`id`, `date`, `created_at`) VALUES
(1, '2022-01-14', '2022-02-15 16:34:31'),
(2, '2022-01-21', '2022-02-15 16:34:31'),
(3, '2022-01-28', '2022-02-15 16:34:31'),
(4, '2022-02-04', '2022-02-15 16:34:31'),
(5, '2022-02-11', '2022-02-15 16:34:31'),
(6, '2022-02-18', '2022-02-17 20:59:14'),
(7, '2022-02-25', '2022-02-25 09:33:01'),
(8, '2022-03-04', '2022-03-03 19:51:30'),
(9, '2022-03-11', '2022-03-11 08:59:25'),
(10, '2022-03-18', '2022-03-17 18:29:46'),
(11, '2022-03-25', '2022-03-25 14:26:15'),
(12, '2022-04-01', '2022-04-08 13:43:50'),
(13, '2022-04-08', '2022-04-08 13:43:46'),
(14, '2022-04-15', '2022-04-14 21:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publishdate`
--
ALTER TABLE `publishdate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publishdate`
--
ALTER TABLE `publishdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
