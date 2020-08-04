-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2020 at 05:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_name` varchar(20) DEFAULT NULL,
  `a_usn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_name`, `a_usn`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `roll_no` int(11) DEFAULT NULL,
  `std_name` text,
  `presenty` char(1) DEFAULT NULL,
  `s_id` text,
  `c_id` text,
  `a_date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`roll_no`, `std_name`, `presenty`, `s_id`, `c_id`, `a_date`) VALUES
(6, 'Meenal', 'A', 'FYCS1', 'FYBCS', '2018/4/1'),
(7, 'Shubham', 'P', 'FYCS1', 'FYBCS', '2018/4/1'),
(6, 'Meenal', 'P', 'FYCS1', 'FYBCS', '2018/4/2'),
(7, 'Shubham', 'P', 'FYCS1', 'FYBCS', '2018/4/2'),
(6, 'Meenal', 'P', 'FYCS1', 'FYBCS', '2018/4/3'),
(7, 'Shubham', 'P', 'FYCS1', 'FYBCS', '2018/4/3'),
(6, 'Meenal', 'P', 'FYCS1', 'FYBCS', '2018/4/4'),
(7, 'Shubham', 'P', 'FYCS1', 'FYBCS', '2018/4/4'),
(6, 'Meenal', 'P', 'FYCS1', 'FYBCS', '2018/4/5'),
(7, 'Shubham', 'P', 'FYCS1', 'FYBCS', '2018/4/5'),
(6, 'Meenal', 'P', 'CS1', 'FYBCS', '2018/4/6'),
(7, 'Shubham', 'A', 'CS1', 'FYBCS', '2018/4/6'),
(6, 'Meenal', 'A', 'CS1', 'FYBCS', '2018/4/7'),
(7, 'Shubham', 'A', 'CS1', 'FYBCS', '2018/4/7'),
(6, 'Meenal', 'P', 'CS1', 'FYBCS', '2018/4/8'),
(7, 'Shubham', 'P', 'CS1', 'FYBCS', '2018/4/8'),
(6, 'Meenal', 'P', 'CS1', 'FYBCS', '2018/4/9'),
(7, 'Shubham', 'P', 'CS1', 'FYBCS', '2018/4/9'),
(6, 'Meenal', 'P', 'CS1', 'FYBCS', '2018/4/10'),
(7, 'Shubham', 'P', 'CS1', 'FYBCS', '2018/4/10'),
(6, 'Meenal', 'P', 'FYM1', 'FYBCS', '7/2/18'),
(7, 'Shubham', 'A', 'FYM1', 'FYBCS', '7/2/18'),
(6, 'Meenal', 'P', 'CS1', 'FYBCS', '7/2/18'),
(7, 'Shubham', 'A', 'CS1', 'FYBCS', '7/2/18'),
(1, 'Aditya', 'P', 'CS4', 'TYBCS', '10/8/1997'),
(2, 'Nishant', 'P', 'CS4', 'TYBCS', '10/8/1997'),
(3, 'Vishnavi', 'A', 'CS4', 'TYBCS', '10/8/1997'),
(4, 'Vikrant', 'A', 'CS4', 'TYBCS', '10/8/1997'),
(5, 'Nilima', 'P', 'CS4', 'TYBCS', '10/8/1997'),
(6, 'Meenal', 'P', 'CS2', 'FYBCS', '2018/4/11'),
(7, 'Shubham', 'P', 'CS2', 'FYBCS', '2018/4/11'),
(8, 'Aakash', 'P', 'SYCS1', 'SYBCS', '8/9/2018'),
(9, 'Amruta', 'A', 'SYCS1', 'SYBCS', '8/9/2018'),
(6, 'Meenal', NULL, 'CS1', 'FYBCS', ''),
(7, 'Shubham', NULL, 'CS1', 'FYBCS', ''),
(6, 'Meenal', NULL, 'CS1', 'FYBCS', ''),
(7, 'Shubham', NULL, 'CS1', 'FYBCS', ''),
(6, 'Meenal', NULL, 'FYCS1', 'FYBCS', ''),
(7, 'Shubham', NULL, 'FYCS1', 'FYBCS', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `c_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `d_id`, `c_name`) VALUES
(1, 1, 'FYBCS'),
(2, 1, 'SYBCS'),
(3, 1, 'TYBCS');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(11) NOT NULL,
  `d_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`) VALUES
(1, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_rno` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `stu_name` text NOT NULL,
  `stu_address` text NOT NULL,
  `stu_contact` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_rno`, `c_id`, `stu_name`, `stu_address`, `stu_contact`) VALUES
(1, 3, 'Aditya', 'Pune', '9665012009'),
(2, 3, 'Nishant', 'Vishrantwadi', '1234567890'),
(3, 3, 'Vishnavi', 'Kothrud', '4567812345'),
(4, 3, 'Vikrant', 'Dhayri', '5645789452'),
(5, 3, 'Nilima', 'Anandnagar', '4578963120'),
(6, 1, 'Meenal', 'Pune', '1234578960'),
(7, 1, 'Shubham', 'Pune', '9865321478'),
(8, 2, 'Aakash', 'Dandekar Rd', '1235467890'),
(9, 2, 'Amruta', 'Karve Rd', '8523697412');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `s_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `s_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `c_id`, `s_name`) VALUES
(1, 3, 'CS1'),
(2, 3, 'CS2'),
(3, 3, 'CS3'),
(4, 3, 'CS4'),
(5, 3, 'CS5'),
(6, 3, 'CS6'),
(7, 1, 'FYCS1'),
(8, 1, 'FYCS2'),
(9, 1, 'FYM1'),
(10, 1, 'FYM2'),
(11, 1, 'FYE1'),
(12, 1, 'FYE2'),
(13, 1, 'S1'),
(14, 1, 'S2'),
(15, 2, 'SYCS1'),
(16, 2, 'SYCS2'),
(17, 2, 'SYM1'),
(18, 2, 'SYM2'),
(19, 2, 'SYE1'),
(20, 2, 'SYE2'),
(21, 2, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` text NOT NULL,
  `t_address` text NOT NULL,
  `t_contact` decimal(10,0) NOT NULL,
  `t_usn` varchar(50) NOT NULL,
  `t_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_address`, `t_contact`, `t_usn`, `t_pass`) VALUES
(1, 'Amol Vaidya', 'Kothrud', '4567893210', 'Amol123', 'Amol123'),
(2, 'Sudhir Chavhan', 'PCMC', '7845123690', 'sud_ch19', 'sudhirchavhan'),
(156, 'Nishant Zende', 'Vishrantwadi', '8547210325', 'nish_80', 'Nish80'),
(1016, 'apeksha', 'hadapsar', '9767210229', 'apeksha_shinde', 'Apeksh10'),
(1297, 'Prasad Jadhav', 'Pune', '9582451785', 'prasad1297', 'Praad1297'),
(10295, 'shubham', 'Kothrud', '8888320279', 'shubhamsk', 'Shubham11'),
(77892, 'chandan shinde', '99 yashshree ashok society durganagar near om super market opp ajinkya mitra mandal', '9552105500', 'chandanshinde', 'C_handan5');

-- --------------------------------------------------------

--
-- Table structure for table `t_cl_sub`
--

CREATE TABLE `t_cl_sub` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cl_sub`
--

INSERT INTO `t_cl_sub` (`t_id`, `c_id`, `s_id`, `d_id`) VALUES
(1, 1, 1, 1),
(1, 1, 2, 1),
(1, 2, 3, 1),
(2, 1, 4, 1),
(2, 1, 5, 1),
(2, 3, 1, 1),
(77892, 1, 9, 1),
(77892, 2, 17, 1),
(77892, 2, 18, 1),
(77892, 3, 5, 1),
(1016, 1, 8, 1),
(1016, 2, 21, 1),
(1016, 3, 4, 1),
(10295, 1, 7, 1),
(10295, 1, 8, 1),
(10295, 2, 15, 1),
(10295, 2, 16, 1),
(1297, 1, 7, 1),
(1297, 1, 8, 1),
(1297, 2, 15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_rno`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_usn` (`t_usn`),
  ADD UNIQUE KEY `t_pass` (`t_pass`);

--
-- Indexes for table `t_cl_sub`
--
ALTER TABLE `t_cl_sub`
  ADD KEY `t_id` (`t_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `class` (`c_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `class` (`c_id`);

--
-- Constraints for table `t_cl_sub`
--
ALTER TABLE `t_cl_sub`
  ADD CONSTRAINT `t_cl_sub_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`),
  ADD CONSTRAINT `t_cl_sub_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `class` (`c_id`),
  ADD CONSTRAINT `t_cl_sub_ibfk_3` FOREIGN KEY (`s_id`) REFERENCES `subject` (`s_id`),
  ADD CONSTRAINT `t_cl_sub_ibfk_4` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
