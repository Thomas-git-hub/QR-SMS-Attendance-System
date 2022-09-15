-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 07:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ins_ref_id` varchar(50) NOT NULL,
  `bs_id` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `assign_student`
--

CREATE TABLE `assign_student` (
  `as_id` int(11) NOT NULL,
  `block_ref_id` varchar(50) NOT NULL,
  `student_ref_id` varchar(50) NOT NULL,
  `as_ref_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_student`
--

INSERT INTO `assign_student` (`as_id`, `block_ref_id`, `student_ref_id`, `as_ref_id`) VALUES
(4, '166325122077309', '166326295692452', '166326295637200');

-- --------------------------------------------------------

--
-- Table structure for table `assign_sub`
--

CREATE TABLE `assign_sub` (
  `as_id` int(11) NOT NULL,
  `ins_ref_id` varchar(50) NOT NULL,
  `bs_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_sub`
--

INSERT INTO `assign_sub` (`as_id`, `ins_ref_id`, `bs_id`) VALUES
(6, '166325134125900', '166325150367167'),
(7, '166325134125900', '166325151115237'),
(8, '166325134125900', '166325152522910'),
(9, '166325138016285', '166325166819778'),
(10, '166325138016285', '166325168596930'),
(12, '166325134125900', '166325329091751'),
(13, '166325138016285', '166325332649120'),
(14, '166325134125900', '166325568711201');

-- --------------------------------------------------------

--
-- Table structure for table `block_subject`
--

CREATE TABLE `block_subject` (
  `bs_id` varchar(50) NOT NULL,
  `block_ref_id` varchar(50) NOT NULL,
  `subject_ref_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_subject`
--

INSERT INTO `block_subject` (`bs_id`, `block_ref_id`, `subject_ref_id`) VALUES
('166325150367167', '166325121047278', '166325144432900'),
('166325151115237', '166325121047278', '166325145762881'),
('166325152522910', '166325126342432', '166325145762881'),
('166325166819778', '166325157721004', '166325162689713'),
('166325168596930', '166325157721004', '166325163474475'),
('166325169653793', '166325157721004', '166325144432900'),
('166325329091751', '166325122077309', '166325144432900'),
('166325332649120', '166325157721004', '166325162689713'),
('166325568711201', '166325122077309', '166325145762881');

-- --------------------------------------------------------

--
-- Table structure for table `block_tbl`
--

CREATE TABLE `block_tbl` (
  `block_id` int(11) NOT NULL,
  `block_ref_id` varchar(50) NOT NULL,
  `block_name` varchar(50) NOT NULL,
  `str_ref_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_tbl`
--

INSERT INTO `block_tbl` (`block_id`, `block_ref_id`, `block_name`, `str_ref_id`) VALUES
(26, '166325119087168', 'BlocK A', ''),
(27, '166325121047278', 'A', '166325116999112'),
(28, '166325122077309', 'B', '166325116999112'),
(29, '166325125663327', 'A', ''),
(30, '166325126342432', 'A', '166325125087586'),
(31, '166325129965591', 'B', '166325125087586'),
(32, '166325156839854', 'A', '166325155272404'),
(33, '166325157721004', 'B', '166325155272404'),
(34, '166325776169449', 'D', '166325155272404');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_tbl`
--

CREATE TABLE `instructor_tbl` (
  `ins_id` int(11) NOT NULL,
  `ins_ref_id` varchar(50) NOT NULL,
  `ins_fullname` varchar(50) NOT NULL,
  `ins_idnumber` int(11) NOT NULL,
  `ins_contact` bigint(20) NOT NULL,
  `ins_position` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor_tbl`
--

INSERT INTO `instructor_tbl` (`ins_id`, `ins_ref_id`, `ins_fullname`, `ins_idnumber`, `ins_contact`, `ins_position`, `username`, `password`, `status`) VALUES
(5, '166325134125900', 'Anallyn Borlasas', 0, 9219657947, '', 'analyn@gmail.com', '123', 0),
(6, '166325138016285', 'Arnold Platon', 0, 9219657947, '', 'platon@gmail.com', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `strand_tbl`
--

CREATE TABLE `strand_tbl` (
  `str_id` int(11) NOT NULL,
  `str_ref_id` varchar(50) NOT NULL,
  `str_name` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `str_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strand_tbl`
--

INSERT INTO `strand_tbl` (`str_id`, `str_ref_id`, `str_name`, `grade`, `str_active`) VALUES
(40, '166325116999112', 'STEM', 11, 1),
(41, '166325125087586', 'STEM', 12, 1),
(43, '166325155272404', 'GAS', 11, 1),
(44, '166325777380006', 'ABM', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `sdt_id` int(11) NOT NULL,
  `sdt_ref_id` varchar(50) NOT NULL,
  `sdt_fullname` varchar(50) NOT NULL,
  `sdt_gender` varchar(50) NOT NULL,
  `sdt_address` varchar(100) NOT NULL,
  `sdt_parentNumber` varchar(20) NOT NULL,
  `qr_id` varchar(50) NOT NULL,
  `sdt_username` varchar(50) NOT NULL,
  `sdt_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`sdt_id`, `sdt_ref_id`, `sdt_fullname`, `sdt_gender`, `sdt_address`, `sdt_parentNumber`, `qr_id`, `sdt_username`, `sdt_password`) VALUES
(9, '166326295692452', 'dasdasd', 'Male', '123456', '09219657947', '', '123456@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `subject_id` int(11) NOT NULL,
  `subject_ref_id` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `str_ref_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`subject_id`, `subject_ref_id`, `subject_name`, `str_ref_id`) VALUES
(1, 'sub1', 'Gen Math', 'str1'),
(2, 'sub2', 'Science', 'str1'),
(3, 'sub3', 'P.E', 'str2'),
(4, 'sub4', 'English', 'str2'),
(5, 'sub5', 'T.L.E', 'str2'),
(6, '166253616615995', 'Filipino', 'str1'),
(7, '166253618289231', 'Filipino', 'str2'),
(8, '166288469616629', 'math', '166288465496476'),
(9, '166288470496980', 'science', '166288465496476'),
(10, '166325144432900', 'Physics1', '166325116999112'),
(11, '166325145762881', 'Math Advance', '166325116999112'),
(12, '166325162689713', 'Philosophy', '166325155272404'),
(13, '166325163474475', 'English1', '166325155272404');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `trans_id` int(11) NOT NULL,
  `ins_ref_id` varchar(50) NOT NULL,
  `bsi_id` varchar(50) NOT NULL,
  `stf_ref_id` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `trans_message` varchar(100) NOT NULL,
  `trans_datetime` datetime NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`trans_id`, `ins_ref_id`, `bsi_id`, `stf_ref_id`, `sender`, `trans_message`, `trans_datetime`, `type`, `status`) VALUES
(1, 'ins1', 'bs1', 's1', 'sender1', 'Vice Ganda entered the school on August 30, 2022- 8:00 am. From: hvsdhVSGFD', '2022-08-30 08:01:51', 'time in', 'ontime'),
(2, 'ins2', 'bs2', 's2', 'sender1', 'Anne Curtis entered the school on August 30, 2022- 8:00 am. From: hvsdhVSGFD', '2022-08-30 08:01:52', 'time in', 'ontime');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assign_student`
--
ALTER TABLE `assign_student`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `assign_sub`
--
ALTER TABLE `assign_sub`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `block_subject`
--
ALTER TABLE `block_subject`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `block_tbl`
--
ALTER TABLE `block_tbl`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `instructor_tbl`
--
ALTER TABLE `instructor_tbl`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `strand_tbl`
--
ALTER TABLE `strand_tbl`
  ADD PRIMARY KEY (`str_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`sdt_id`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_student`
--
ALTER TABLE `assign_student`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assign_sub`
--
ALTER TABLE `assign_sub`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `block_tbl`
--
ALTER TABLE `block_tbl`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `instructor_tbl`
--
ALTER TABLE `instructor_tbl`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `strand_tbl`
--
ALTER TABLE `strand_tbl`
  MODIFY `str_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `sdt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
