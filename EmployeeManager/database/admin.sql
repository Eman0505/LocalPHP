-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2022 at 11:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`) VALUES
(5, 'Leon Dela Cruz', 'Quezon City'),
(8, 'Thomas Hugo', 'New York City'),
(9, 'Edison Monrou', 'California City'),
(11, 'Emanuele Clyde Palado', 'San Juan City'),
(12, 'eman palado', 'san juan'),
(13, 'Clyde Domingo', 'Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(4, 'leo', 'leoN@gmail.com', 'user', '6b42d00c4ca6ddc33a604c54b8ce4adc'),
(5, 'admin', 'admin@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Thomas', 'ttrain@gmail.com', 'user', '61b3a8faa9c1091806675c230a9abe64'),
(8, 'Edison', 'TEd@gmail.com', 'user', '2ac43aa43bf473f9a9c09b4b608619d3'),
(10, 'noel', 'gnoel909@gmail.com', 'user', '89e55d4f580dd044088b9a003110b37a'),
(11, 'empalado', 'palado.emanuele@gmail.com', 'user', '04ecff4292be7186a9fbfa186e83b87e'),
(12, 'eman', 'eman@gmail.com', 'user', '674f3c2c1a8a6f90461e8a66fb5550ba'),
(13, 'clyde', 'clyde@gmail.com', 'user', '01cfcd4f6b8770febfb40cb906715822');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
