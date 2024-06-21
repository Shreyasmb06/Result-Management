-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 12:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `email`, `user_type`, `password`) VALUES
(1, 'sujan', 'sujanrk@gmail.com', 'admin', '2003');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `creation_date`) VALUES
('21cs1', 'dbms', 'db1', '2024-03-01'),
('21cs2', 'cn', 'cn1', '2024-03-01'),
('21cs3', 'ajs', 'ajs1', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `course_combination`
--

CREATE TABLE `course_combination` (
  `cc_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `dep_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_combination`
--

INSERT INTO `course_combination` (`cc_id`, `course_id`, `dep_id`, `course_name`, `creation_date`) VALUES
('1', '21cs1', 'cs1', 'dbms', '2024-03-01'),
('2', '21cs2', 'cs2', 'cn', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` varchar(50) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `sem`, `section`, `creation_date`) VALUES
('cs1', 'cs', 5, 'c', '2024-03-01'),
('cs2', 'cs', 5, 'c', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(50) NOT NULL,
  `stu_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `dep_id` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL,
  `posting_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `stu_id`, `course_id`, `dep_id`, `marks`, `posting_date`) VALUES
(3, '1', '21cs1', 'cs1', '70', 'dd'),
(4, '1', '21cs1', 'cs1', '70', NULL),
(5, '1', '21cs1', 'cs1', '70', NULL),
(6, '1', '21cs1', 'cs1', '70', NULL),
(7, '1', '21cs2', 'cs1', '36', NULL),
(8, '5', '21cs1', 'cs1', '90', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentstable`
--

CREATE TABLE `studentstable` (
  `stu_id` varchar(50) NOT NULL,
  `roll_num` int(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_num` varchar(50) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `dep_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentstable`
--

INSERT INTO `studentstable` (`stu_id`, `roll_num`, `name`, `email`, `password`, `phone_num`, `user_type`, `dep_id`) VALUES
('1', 122, 'abhi', 'abhi@gmail.com', '111', '234345', 'student', 'cs1'),
('2', 122, 'abhi k', 'abhi@gmail.com', '333', '56765', 'student', 'cs1'),
('3', 123, 'shreyas', 'shreyasmb8055@gmail.com', '2003', '56765', 'student', 'cs1'),
('5', 156, 'shreyas', 'shreyasmb8055@gmail.com', '1304', '90099', 'student', 'cs1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_combination`
--
ALTER TABLE `course_combination`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `saj` (`course_id`),
  ADD KEY `shr` (`dep_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `suji` (`course_id`),
  ADD KEY `su` (`dep_id`),
  ADD KEY `suj` (`stu_id`);

--
-- Indexes for table `studentstable`
--
ALTER TABLE `studentstable`
  ADD PRIMARY KEY (`stu_id`),
  ADD KEY `kr` (`dep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_combination`
--
ALTER TABLE `course_combination`
  ADD CONSTRAINT `saj` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shr` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `su` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suj` FOREIGN KEY (`stu_id`) REFERENCES `studentstable` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suji` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentstable`
--
ALTER TABLE `studentstable`
  ADD CONSTRAINT `kr` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
