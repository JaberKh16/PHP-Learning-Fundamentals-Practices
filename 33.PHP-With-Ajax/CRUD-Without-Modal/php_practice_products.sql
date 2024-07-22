-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2024 at 07:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_practice_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(16) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_type` varchar(20) DEFAULT NULL,
  `product_barcode` varchar(50) DEFAULT NULL,
  `product_price` decimal(10,0) DEFAULT NULL,
  `product_status` varchar(10) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_code`, `product_name`, `product_type`, `product_barcode`, `product_price`, `product_status`, `created_at`) VALUES
(1, 'PROD-S4B49QA7MTG', 'Asus P-A50', 'Electronics', 'ELEC-12', '350', '2', '2024-07-21 10:48:47'),
(2, 'PROD-S4B49QA7MTG', 'Asus P-A20', 'Electronics', 'ELEC-123', '450', '1', '2024-07-21 12:44:21'),
(3, 'PROD-S4B49QA7MTG', 'Asus P-A50', 'Electronics', 'ELEC-12', '350', '1', '2024-07-21 11:02:22'),
(38, 'PROD-AFL4J2UKK29', 'Theodore Velazquez', 'Reiciendis adipisci ', 'Omnis sunt eius quo', '128', '1', '2024-07-21 11:38:02'),
(39, 'PROD-AFL4J2UKK29', 'Theodore Velazquez', 'Reiciendis adipisci ', 'Omnis sunt eius quo', '128', '2', '2024-07-21 11:38:56'),
(43, 'PROD-27Q8P6AV2N1', 'Latifah Sanders', 'Nihil voluptatem ul', 'Aperiam ea perferend', '789', '1', '2024-07-21 11:43:22'),
(44, 'PROD-27Q8P6AV2N1', 'Latifah Sanders', 'Nihil voluptatem ul', 'Aperiam ea perferend', '789', '1', '2024-07-21 11:44:23'),
(45, 'PROD-27Q8P6AV2N1', 'Latifah Sanders', 'Nihil voluptatem ul', 'Aperiam ea perferend', '789', '1', '2024-07-21 11:45:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
