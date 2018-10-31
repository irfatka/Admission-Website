-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 04:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fe_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `sid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact1` varchar(10) NOT NULL,
  `contact2` varchar(10) DEFAULT NULL,
  `sscmarks` int(10) NOT NULL,
  `hscmarks` int(10) NOT NULL,
  `cetmarks` int(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`sid`, `firstname`, `lastname`, `gender`, `contact1`, `contact2`, `sscmarks`, `hscmarks`, `cetmarks`, `college`, `branch`, `type`) VALUES
(1, 'Saqiuzzaman', 'Hossain', 'Male', '2147483647', '0', 78, 60, 140, 'SIES', 'Computer Engineering', 'ST'),
(2, 'Rishi ', 'Kataria', 'Male', '2147483647', '2147483647', 75, 86, 124, 'DY Patil', 'IT Engineering', 'General'),
(3, 'Irfat', 'Kapde', 'Female', '8169327695', '', 90, 86, 138, 'Pillai College of Engineering', 'Computer Engineering', 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
