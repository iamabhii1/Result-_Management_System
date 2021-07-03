-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 09:33 AM
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
('fifth_semester', 5),
('six_semester', 6),
('eigth_semester', 8),
('IT_1', 9);

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
('aakash', 1, 'six_semester', '', 90, '', 70, '', 88, '', 55, '', 85, 439, 87.8),
('aayushi', 3, 'six_semester', '', 5, '', 4, '', 3, '', 2, '', 1, 15, 3),
('abhimanyu', 4, 'fifth_semester', '', 50, '', 49, '', 48, '', 47, '', 46, 240, 48),
('akriti', 9, 'IT_1', '', 1, '', 45, '', 87, '', 34, '', 90, 257, 51.4),
('monalisa', 21, 'IT_1', '', 12, '', 13, '', 14, '', 59, '', 98, 196, 39.2),
('ishika', 42, 'IT_1', 'hindi', 55, 'english', 55, 'math', 55, 'computer', 55, 'physical education', 55, 275, 55),
('natasha', 51, 'IT_1', 'HCI', 15, 'COI', 25, 'ITCS', 35, 'SE', 45, 'hindi', 55, 175, 35);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `rno`, `class_name`) VALUES
('abhimanyu', 4, 'fifth_semester'),
('akriti', 9, 'IT_1'),
('akshita', 10, 'IT_1'),
('ishika', 42, 'IT_1'),
('manisha', 20, 'IT_1'),
('mohini', 50, 'IT_1'),
('monalisa', 21, 'IT_1'),
('natasha', 51, 'IT_1'),
('aakash', 1, 'six_semester'),
('aayushi', 3, 'six_semester');

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
