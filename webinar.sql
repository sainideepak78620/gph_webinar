-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2022 at 12:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinar`
--

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `title`, `description`) VALUES
(4, 'parthil', '6'),
(5, 'yuvraj', '6'),
(6, 'pooja', '6'),
(7, 'poojan', '6'),
(8, 'Make mini project in php', 'I will make todo list app'),
(9, 'Aatif answered quickly', 'Aatif is a good boy'),
(10, 'Aatif answered quickly', 'Aatif is a good boy'),
(14, 'dsfdsfddf', 'sdfdsfdsfsdf'),
(15, 'rgfdgfdg', 'fdgfdgfdgfdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
