-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 07:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `name` varchar(30) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`name`, `id`) VALUES
('IT2', 2),
('fifth_semester', 5),
('six_semester', 6),
('eigth_semester', 8),
('IT_1', 9),
('fifth_class', 12);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class` varchar(30) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `p1` int(3) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `p2` int(3) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `p3` int(3) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `p4` int(3) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `p5` int(3) NOT NULL,
  `marks` int(3) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `rno`, `class`, `sub1`, `p1`, `sub2`, `p2`, `sub3`, `p3`, `sub4`, `p4`, `sub5`, `p5`, `marks`, `percentage`) VALUES
('aakash', 1, 'IT2', 'CN', 90, 'ITCS', 30, 'DA', 79, 'IP', 5, 'SE', 99, 303, 60.6),
('manas', 17, 'IT_1', 'hindi', 12, 'english', 50, 'math', 35, 'science', 98, 'sst', 5, 200, 40),
('ishika', 42, 'IT_1', 'hindi', 55, 'english', 55, 'math', 55, 'computer', 55, 'physical education', 55, 275, 55),
('mansi', 45, 'IT_1', 'hindi', 10, 'english', 20, 'math', 30, 'science', 40, 'sst', 50, 150, 30),
('natasha', 51, 'IT_1', 'HCI', 15, 'COI', 25, 'ITCS', 35, 'SE', 45, 'hindi', 55, 175, 35),
('vansh', 70, 'IT_1', 'hindi', 50, 'english', 25, 'math', 45, 'science', 99, 'sst', 21, 240, 48);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `parents_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `rno`, `class_name`, `parents_name`) VALUES
('aakash', 1, 'IT2', 'aakashP'),
('abhimanyu', 4, 'IT_1', 'abhimanyuP'),
('ishika', 42, 'IT_1', 'imp'),
('manas', 17, 'IT_1', 'manaskepapa'),
('mansi', 45, 'IT_1', 'mansikepapa'),
('natasha', 51, 'IT_1', 'np'),
('vansh', 70, 'IT_1', 'vanshkepapa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rno`),
  ADD KEY `class` (`class`),
  ADD KEY `name` (`name`,`rno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`name`,`rno`),
  ADD KEY `class_name` (`class_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`class`) REFERENCES `class` (`name`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`name`,`rno`) REFERENCES `students` (`name`, `rno`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_name`) REFERENCES `class` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
