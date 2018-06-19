-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2018 at 07:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'mr y', '2018-06-14 00:28:29', '2018-06-14 00:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_transactions`
--

CREATE TABLE `buyer_transactions` (
  `id` int(11) NOT NULL,
  `client_id` varchar(1000) NOT NULL,
  `product_id` varchar(1000) NOT NULL,
  `advance` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_transactions`
--

INSERT INTO `buyer_transactions` (`id`, `client_id`, `product_id`, `advance`, `status`, `created_at`, `updated_at`) VALUES
(6, '2', '2', 1000, 0, '2018-06-14 06:31:23', '2018-06-14 06:31:23'),
(7, '2', '2', 5000, 0, '2018-06-14 06:35:49', '2018-06-14 06:35:49'),
(8, '1', '7', 1222, 0, '2018-06-14 07:11:42', '2018-06-14 07:11:42'),
(9, 'mr y', 'gtrgy56y6', 100, 0, '2018-06-14 08:58:23', '2018-06-14 08:58:23'),
(10, 'mr y', '435435', 444, 0, '2018-06-14 08:59:50', '2018-06-14 08:59:50'),
(19, 'mr y', '5t54yt', 900, 1, '2018-06-14 15:09:36', '2018-06-14 09:09:36'),
(35, 'mr y', '555', 2000, 1, '2018-06-14 16:02:54', '2018-06-14 10:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_cost` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `amount`, `total_cost`, `created_at`, `updated_at`) VALUES
(5, 0, 0, '2018-06-14 06:33:30', '2018-06-14 00:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_invest` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `amount`, `total_invest`, `created_at`, `updated_at`) VALUES
(5, 0, 11000, '2018-06-14 16:02:55', '2018-06-14 10:02:54'),
(52, 10000, NULL, '2018-06-14 10:00:46', '2018-06-14 10:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `total_loan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `amount`, `name`, `total_loan`, `status`, `created_at`, `updated_at`) VALUES
(3, 3000, 'dgyhfgdh', NULL, 2, '2018-06-14 06:43:22', '2018-06-14 06:43:22'),
(4, 7000, 'fhjhj', NULL, 2, '2018-06-14 06:43:32', '2018-06-14 06:43:32'),
(5, 0, '', 10000, 0, '2018-06-14 12:43:32', '2018-06-14 06:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `buying_date` datetime NOT NULL,
  `chalan` varchar(1000) NOT NULL,
  `product_name` varchar(10000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buy_rate` int(11) NOT NULL,
  `product_buyer` varchar(10000) NOT NULL,
  `product_seller` varchar(10000) NOT NULL,
  `seller_rate` int(11) NOT NULL,
  `qc_out` int(11) DEFAULT NULL,
  `total_sell` int(11) DEFAULT NULL,
  `profit` int(11) NOT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `buying_date`, `chalan`, `product_name`, `quantity`, `buy_rate`, `product_buyer`, `product_seller`, `seller_rate`, `qc_out`, `total_sell`, `profit`, `picture`, `created_at`, `updated_at`) VALUES
(6, '2018-06-13 00:00:00', '435435', 'ghfdh', 100, 12, '1', '1', 13, 10, NULL, 90, '1528979214.jpeg', '2018-06-14 06:26:54', '2018-06-14 06:26:54'),
(7, '2018-06-12 00:00:00', '4r45rt', 'rgtre', 444, 22, '1', '1', 11, 10, NULL, -4774, '1528979434.jpeg', '2018-06-14 06:30:34', '2018-06-14 06:30:34'),
(8, '2018-06-13 00:00:00', 'gtrgy56y6', 'ggfh', 1222, 22, '1', '1', 11222, 11, NULL, 13563200, '1528981008.jpeg', '2018-06-14 06:56:48', '2018-06-14 06:56:48'),
(9, '2018-06-05 00:00:00', 'rt5re6', 'rr', 10, 10, '1', '1', 20, NULL, NULL, 100, NULL, '2018-06-14 07:33:04', '2018-06-14 07:33:04'),
(10, '2018-06-13 00:00:00', 'gtrhtr', 'tyfgh', 100, 10, '1', '1', 120, 1, 1176120, 10890, NULL, '2018-06-14 08:35:48', '2018-06-14 08:35:48'),
(11, '2018-06-12 00:00:00', '56y56ty', 'rfgdfg', 12, 10, '1', '1', 100, 12, 0, 0, NULL, '2018-06-14 08:37:09', '2018-06-14 08:37:09'),
(12, '2018-06-08 00:00:00', '5t54yt', 'ggfh', 100, 10, '1', '1', 100, 10, 9000, 8100, NULL, '2018-06-14 08:38:07', '2018-06-14 08:38:07'),
(13, '2018-06-15 00:00:00', '555', 'gdgdh', 10, 100, '1', '1', 200, NULL, 2000, 1000, NULL, '2018-06-14 09:16:15', '2018-06-14 09:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `passwords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `passwords`) VALUES
(1, 'hardpoint@gmail.com', 'a9f6872922c153f83769deef9e92a21a');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'mr x', '2018-06-14 00:28:20', '2018-06-14 00:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `seller_transactions`
--

CREATE TABLE `seller_transactions` (
  `id` int(11) NOT NULL,
  `client_id` varchar(1000) NOT NULL,
  `product_id` varchar(1000) NOT NULL,
  `paid` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_transactions`
--

INSERT INTO `seller_transactions` (`id`, `client_id`, `product_id`, `paid`, `status`, `created_at`, `updated_at`) VALUES
(31, '1', '9', 200, 1, '2018-06-14 13:46:32', '2018-06-14 07:46:32'),
(32, '1', '6', 1000, 0, '2018-06-14 08:16:14', '2018-06-14 08:16:14'),
(33, 'mr x', '4r45rt', 5000, 0, '2018-06-14 08:58:55', '2018-06-14 08:58:55'),
(42, 'mr x', '555', 1000, 1, '2018-06-14 15:35:31', '2018-06-14 09:35:31'),
(43, 'mr x', '555', 2000, 0, '2018-06-14 09:51:31', '2018-06-14 09:51:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_transactions`
--
ALTER TABLE `buyer_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_transactions`
--
ALTER TABLE `seller_transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer_transactions`
--
ALTER TABLE `buyer_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_transactions`
--
ALTER TABLE `seller_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
