-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 12:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chairman`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `produce_id` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `produce_id`, `buyer`) VALUES
(2, '5f206eb58909f', 'buyer1'),
(4, '5f2753f0d3fb5', 'admin1'),
(5, '5f206da65d787', 'admin1'),
(6, '5f206eb58909f', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `produce`
--

CREATE TABLE `produce` (
  `produce_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `produce_type` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produce`
--

INSERT INTO `produce` (`produce_id`, `name`, `price`, `quantity`, `image`, `produce_type`, `seller`) VALUES
('5f206da65d787', 'Beans', '200.00', 22, '5f206da65d787.jpg', 'Cereals', 'seller1'),
('5f2753f0d3fb5', 'Carrot', '20.00', 20, '5f2753f0d3fb5.jpg', 'Vegetables', 'seller1');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `produce_id` varchar(255) NOT NULL,
  `produce_name` varchar(255) NOT NULL,
  `produce_type` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `seller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `produce_id`, `produce_name`, `produce_type`, `buyer`, `quantity`, `seller`) VALUES
(1, '5f206eb58909f', 'Cassava', 'Root Tubers', 'buyer1', 5, 'seller1'),
(2, '5f206eb58909f', 'Cassava', 'Root Tubers', 'buyer1', 5, 'seller1'),
(3, '5f206eb58909f', 'Cassava', 'Root Tubers', 'buyer1', 2, 'seller1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `account_type`, `password`) VALUES
(2, 'seller1', 'user1@users.com', '+1111111111', 'seller', '$2y$10$EuLb4uQStOytdCKRSuuMoODz.yOSUrQATWldbeuq/vGTeOpOKfZHy'),
(3, 'buyer1', 'buyer1@buyers.com', '+1111111222', 'buyer', '$2y$10$FR8TqjhSoZ6KkOtJf5RRO.m3p/ZQeFiVnw75DxmKg/c3Euc2BzenC'),
(4, 'admin1', 'admin@admin.com', '+233241810000', 'admin', '$2y$10$/Qfn1iyBJKoVaLefd4/jJ.24mnstTdW/mL/BKZfFuTv23lIWACUGG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produce`
--
ALTER TABLE `produce`
  ADD PRIMARY KEY (`produce_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
