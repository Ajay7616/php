-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2024 at 10:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `writers_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) NOT NULL,
  `incoming_id` varchar(255) NOT NULL,
  `outgoing_id` varchar(255) NOT NULL,
  `msg` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `incoming_id`, `outgoing_id`, `msg`) VALUES
(1, '828437914', '292617442', 'Testing'),
(2, '292617442', '731860701', 'hi'),
(3, '292617442', '292617442', 'Know'),
(4, '731860701', '292617442', 'Know'),
(5, '292617442', '731860701', 'Are you receiving the msg?'),
(6, '731860701', '292617442', 'Yes I am'),
(7, '292617442', '731860701', 'Checking'),
(8, '292617442', '731860701', 'Are you okay?'),
(9, '292617442', '731860701', 'Hi'),
(10, '292617442', '731860701', 'Hello'),
(11, '292617442', '731860701', 'Testing'),
(12, '292617442', '731860701', 'Text'),
(13, '731860701', '292617442', 'Hi'),
(14, '292617442', '731860701', 'Hu'),
(15, '828437914', '181908014', 'Hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
