-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 04:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '0',
  `description` varchar(150) NOT NULL DEFAULT '0',
  `available` varchar(150) NOT NULL DEFAULT '0',
  `image` varchar(150) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `description`, `available`, `image`) VALUES
(1, 'Gampaha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', '1', 'img/placeholder.png'),
(2, 'Colombo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', '0', 'img/placeholder.png'),
(3, 'Galle', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', '1', 'img/placeholder.png'),
(4, 'Kandy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', '1', 'img/placeholder.png');

-- --------------------------------------------------------

--
-- Table structure for table `resevation`
--

CREATE TABLE `resevation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `branch_id` int(11) NOT NULL DEFAULT 0,
  `size` varchar(50) NOT NULL DEFAULT '0',
  `qty` int(11) NOT NULL DEFAULT 0,
  `laminate` varchar(50) NOT NULL DEFAULT '0',
  `total` double(15,2) NOT NULL DEFAULT 0.00,
  `advanced` double(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resevation`
--

INSERT INTO `resevation` (`id`, `user_id`, `branch_id`, `size`, `qty`, `laminate`, `total`, `advanced`) VALUES
(1, 0, 1, '16x20', 5, '', 900.00, 450.00),
(2, 1, 3, '11x14', 10, '', 1500.00, 750.00),
(3, 1, 3, '11x14', 10, '', 1500.00, 750.00),
(4, 1, 3, '11x14', 10, '', 1500.00, 750.00),
(5, 1, 3, '11x14', 3, '', 450.00, 225.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(150) NOT NULL DEFAULT '',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `role` varchar(150) NOT NULL DEFAULT '',
  `password` varchar(150) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `contact`, `role`, `password`) VALUES
(1, 'Niraj', 'niraj.rkn@gmail.com', '0766426998', 'user', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resevation`
--
ALTER TABLE `resevation`
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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resevation`
--
ALTER TABLE `resevation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
