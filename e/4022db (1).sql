-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 10:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4022db`
--
CREATE DATABASE IF NOT EXISTS `4022db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4022db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(7) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_dob` varchar(255) NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_skills` varchar(255) NOT NULL,
  `a_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_title`, `a_fullname`, `a_dob`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'Web Developer(Full Stack)', 'นาย', 'อดิเทพ จำเริญเจือ', '20/02/2025', 'ปริญญาตรี', 'เขียนโปรแกรม', '5 ปี'),
(2, 'UX/UI Designer', 'นาย', 'Aditap jamroenjua', '18/12/2025', 'ปริญญาตรี', 'php,html', '3 year');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(7) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(200) NOT NULL,
  `r_address` varchar(500) NOT NULL,
  `r_birthday` varchar(100) NOT NULL,
  `r_color` varchar(200) NOT NULL,
  `r_major` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_color`, `r_major`) VALUES
(1, 'อดิเทพ จำเริญเจือ', '', 0, '', '', '', ''),
(5, 'Aditap jamroenjua', '', 0, '', '', '', ''),
(6, 'อดิเทพ จำเปิญ', '099 844 4556', 0, '', '', '', ''),
(7, 'อดิเทพ จำเริญเจือ', '099 844 4556', 0, '', '', '', ''),
(9, 'Aditap jamroenjua', '099 844 4556', 180, '1111', '2025-12-01', '#000000', 'การคอมพิวเตอร์ธุรกิจ'),
(10, 'Aditap jamroenjua', '099 844 4556', 155, '-', '-', '#0d6efd', '-'),
(11, 'Aditap jamroenjua', '099 844 4556', 155, '-', '-', '#0d6efd', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
