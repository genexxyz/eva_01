-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:02 PM
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
-- Database: `eva_01_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_code` varchar(21) NOT NULL,
  `admin_fname` varchar(30) NOT NULL,
  `admin_mname` varchar(21) NOT NULL,
  `admin_lname` varchar(21) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_code`, `admin_fname`, `admin_mname`, `admin_lname`, `admin_email`, `admin_pass`, `admin_date_added`) VALUES
(1, 'admin', 'Boy', 'Retardo', 'Bakal', 'genesisroxas4@gmaiil.com', '1234', '0000-00-00'),
(2, 'admin2', 'Onni', '', 'Chan', '', '1234', '2024-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `id` int(11) NOT NULL,
  `faculty_code` varchar(21) NOT NULL,
  `faculty_fname` varchar(30) NOT NULL,
  `faculty_mname` varchar(21) NOT NULL,
  `faculty_lname` varchar(21) NOT NULL,
  `faculty_email` varchar(30) NOT NULL,
  `faculty_pass` varchar(50) NOT NULL,
  `faculty_date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`id`, `faculty_code`, `faculty_fname`, `faculty_mname`, `faculty_lname`, `faculty_email`, `faculty_pass`, `faculty_date_added`) VALUES
(1, 'fa123', 'Manny', 'D', 'Pacquiao', 'manny@g.com', '123', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `class_course` varchar(21) NOT NULL,
  `class_level` int(11) NOT NULL,
  `class_section` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `class_course`, `class_level`, `class_section`) VALUES
(1, 'BSIS', 3, 'A'),
(2, 'BSOM', 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(21) NOT NULL,
  `set_systemname` varchar(30) NOT NULL,
  `set_theme` varchar(21) NOT NULL,
  `set_logo` varchar(40) NOT NULL,
  `set_schoolname` varchar(50) NOT NULL,
  `set_sem` varchar(30) NOT NULL,
  `set_acadyear` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `set_systemname`, `set_theme`, `set_logo`, `set_schoolname`, `set_sem`, `set_acadyear`) VALUES
(1, 'EVA-01', 'evagreen', 'logo.ico', 'Bulacan Polytechnic College', '1st', '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `stud_code` varchar(21) NOT NULL,
  `stud_fname` varchar(30) NOT NULL,
  `stud_mname` varchar(21) NOT NULL,
  `stud_lname` varchar(21) NOT NULL,
  `stud_class` int(11) NOT NULL,
  `stud_email` varchar(30) NOT NULL,
  `stud_pass` varchar(50) NOT NULL,
  `stud_date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `stud_code`, `stud_fname`, `stud_mname`, `stud_lname`, `stud_class`, `stud_email`, `stud_pass`, `stud_date_added`) VALUES
(1, 'MA21011456', 'Genesis', 'Retardo', 'Roxas', 1, 'genesisroxas4@gmail.com', 'admin123', '2024-04-09'),
(4, '0123', 'Jane', 'D', 'Doe', 2, 'jane@g.com', '123', '2024-04-09'),
(5, '211', 'was', 'sadsa', 'sadsa', 1, 'g@g.com', '@Student01', '0000-00-00'),
(6, '1234', 'Lennie', 'Martin', 'Roxas', 1, 'l@g.com', '@Student01', '0000-00-00'),
(7, 'ma23232', 'dsd', 'wdwd', 'wdwdw', 1, 'g@a.com', '@Student01', '0000-00-00'),
(8, '01234', 'hi', 'fes', 'sefs', 2, 'g@g.com', '@Student01', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultys`
--
ALTER TABLE `facultys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facultys`
--
ALTER TABLE `facultys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
