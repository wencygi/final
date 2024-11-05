-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 12:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `course` varchar(10) NOT NULL,
  `year_level` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `course`, `year_level`, `section`, `photo`) VALUES
(1, 'Ahyen', 'Female', 'HTM', '2nd Year', 'ITE201', 'd9030a5696d2507a1dfb38a686ac93c2.jpg'),
(2, 'Gab ', 'Male', 'HTM', '2nd Year', 'ITE202', 'GR0AksWacAIGRtn.jpg'),
(3, 'Nat', 'Male', 'BSIT', '1st Year', 'ITE201', 'd9030a5696d2507a1dfb38a686ac93c2.jpg'),
(6, 'Baz', 'Male', 'CE', '2nd Year', 'ITE101', 'f7d8f2df2827bd6f8e0e95b12434ceab.jpg'),
(7, 'Baz', 'Male', 'CE', '2nd Year', 'ITE101', 'f7d8f2df2827bd6f8e0e95b12434ceab.jpg'),
(8, 'Justin', 'Male', 'BSIT', '2nd Year', 'ITE201', '9d1d428eb91e669fb41a05866037b91f.jpg'),
(9, 'Nat', 'Female', 'HTM', '2nd Year', 'ITE201', 'f7d8f2df2827bd6f8e0e95b12434ceab.jpg'),
(10, 'Renz', 'Male', 'BSIT', '2nd Year', 'ITE201', '9d1d428eb91e669fb41a05866037b91f.jpg'),
(11, 'Santos', 'Female', 'HTM', '1st Year', 'ITE101', 'd9030a5696d2507a1dfb38a686ac93c2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
