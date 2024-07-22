-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2024 at 07:44 PM
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
-- Database: `php_practice_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_Fname` varchar(100) NOT NULL,
  `student_Mname` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_status` varchar(10) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_name`, `student_Fname`, `student_Mname`, `student_email`, `student_status`, `created_at`) VALUES
(11, 'Zachary Mckee', 'Miriam Melton', 'Erin Fry', 'myvypohity@mailinator.com', '1', '2024-07-21 07:46:38'),
(12, 'Karyn Larson', 'Nadine Fulton', 'Dean Gross', 'jafyru@mailinator.com', '2', '2024-07-20 06:29:42'),
(13, 'Zeus Sharpe', 'Scarlet Steele', 'Amery Dillard', 'sinexeferu@mailinator.com', '2', '2024-07-20 06:30:15'),
(14, 'Isaac Burris', 'Leandra Ryan', 'Hector Guerrero', 'xevaw@mailinator.com', '2', '2024-07-20 06:33:38'),
(15, 'Abra Rosario', 'Josiah Emerson', 'Richard Baker', 'bicij@mailinator.com', '1', '2024-07-20 06:35:18'),
(16, 'Mr X', 'Mac', 'Cheese', 'mrx@gmail.com', '1', '2024-07-20 21:13:27'),
(18, 'Jaber', 'mostafakham', 'masuda', 'jaber@preneurlab.com', '2', '2024-07-20 21:15:10'),
(19, 'Liberty Lloyd', 'Yoko Chandler', 'Hanae Combs', 'fifi@mailinator.com', '2', '2024-07-20 22:20:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
