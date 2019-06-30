-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 06:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `branch`, `mobile`, `birthdate`, `address`, `Email`, `Password`) VALUES
(1, 'admin1', 'it', 1546, '2018-11-03', 'dfyg', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `c1_sub1`
--

CREATE TABLE `c1_sub1` (
  `date` date NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c1_sub1`
--

INSERT INTO `c1_sub1` (`date`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`) VALUES
('2018-11-04', 0, 0, 1, 0, 1, 0, 0, 1, 1, 1),
('2018-11-21', 1, 0, 1, 0, 0, 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `c1_sub2`
--

CREATE TABLE `c1_sub2` (
  `date` date NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c2_sub1`
--

CREATE TABLE `c2_sub1` (
  `date` date NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c2_sub1`
--

INSERT INTO `c2_sub1` (`date`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`) VALUES
('2018-06-01', 1, 0, 1, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `c2_sub2`
--

CREATE TABLE `c2_sub2` (
  `date` date NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `name`, `branch`, `mobile`, `birthdate`, `address`, `Email`, `Password`) VALUES
(1, 'ravi', 'it', 245, '2018-11-01', 'sjger', 'ravi@gmail.com', 'ravi'),
(2, 'faculty1', 'it', 2646, '2018-09-21', 'fgfgigeged', 'faculty@gmail.com', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `parents` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `class`, `mobile`, `parents`, `birthdate`, `address`, `Email`, `Password`) VALUES
(1, 'student1', 'c1', 81414128, 2456, '2018-10-03', 'good morning', 'student@gmail.com', 'student'),
(2, 'abc', 'c2', 1235454, 23565, '2017-08-16', 'rajkot', 'abc@gmail.com', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c1_sub1`
--
ALTER TABLE `c1_sub1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `c1_sub2`
--
ALTER TABLE `c1_sub2`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `c2_sub1`
--
ALTER TABLE `c2_sub1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `c2_sub2`
--
ALTER TABLE `c2_sub2`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
