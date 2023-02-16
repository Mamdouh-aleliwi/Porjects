-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 05:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_sections`
--

CREATE TABLE `course_sections` (
  `c_num` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_sections`
--

INSERT INTO `course_sections` (`c_num`, `c_name`) VALUES
(1, 'الاعمال'),
(3, 'التقنيه'),
(5, 'محاسبه'),
(15, 'تسويق');

-- --------------------------------------------------------

--
-- Table structure for table `create_course`
--

CREATE TABLE `create_course` (
  `c_number` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_price` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `c_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_course`
--

INSERT INTO `create_course` (`c_number`, `c_name`, `c_price`, `image`, `c_num`) VALUES
(44, 'تطبيقات مايكروسوفت اوفيس', 1000, 'img/$ma.png', 1),
(48, 'تطبيقات مايكروسوفت اوفيس', 500, 'img/$ma.png', 1),
(49, 'ريادة الاعمال', 650, 'img/$ma.png', 1),
(50, 'الاداره المالية', 1200, 'img/$ma.png', 5),
(52, 'تطبيقات اوفيس', 0, 'img/$ma.png', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username1` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username1`, `password`, `level`) VALUES
(1, 'mmdoh', 'mmdoh', '12345', 1),
(2, 'saad', 'saad', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_sections`
--
ALTER TABLE `course_sections`
  ADD PRIMARY KEY (`c_num`);

--
-- Indexes for table `create_course`
--
ALTER TABLE `create_course`
  ADD PRIMARY KEY (`c_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_sections`
--
ALTER TABLE `course_sections`
  MODIFY `c_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `create_course`
--
ALTER TABLE `create_course`
  MODIFY `c_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
