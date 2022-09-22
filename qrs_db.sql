-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 04:49 PM
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
(14, '166384970676975', '166384995187121', '166384995176187'),
(15, '166384970676975', '166385012053976', '166385012057873'),
(16, '166385028480291', '166385079027230', '166385079014130'),
(17, '166385466489902', '166385512873698', '166385512835471'),
(18, '166385467592773', '166385545419788', '166385545435730'),
(19, '166385466489902', '166385585520935', '166385585547058'),
(20, '166385604833624', '166385636083975', '166385636018501');

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
(31, '166368460172463', '166384979039732'),
(32, '166368460172463', '166384984266803'),
(33, '166368460172463', '166385037545647'),
(34, '166385480282567', '166385485165846'),
(35, '166385480282567', '166385486776220'),
(36, '166385480282567', '166385489142351'),
(37, '166385480282567', '166385492088983'),
(38, '166385480282567', '166385612780524'),
(39, '166385480282567', '166385671658357');

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
('166384979039732', '166384970676975', '166384974067652'),
('166384984266803', '166384970676975', '166384975988172'),
('166385037545647', '166385028480291', '166385029816772'),
('166385485165846', '166385466489902', '166385471094346'),
('166385486776220', '166385466489902', '166385472422832'),
('166385489142351', '166385467592773', '166385471094346'),
('166385492088983', '166385467592773', '166385472422832'),
('166385612780524', '166385604833624', '166385609885988'),
('166385671658357', '166385466489902', '166385668892623');

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
(39, '166384970676975', 'A-STEM-11', '166325116999112'),
(40, '166384971952176', 'B-STEM-12', '166325116999112'),
(41, '166385028480291', 'A-11-Abm', '166325777380006'),
(42, '166385465051634', 'A-Grade-11-CSS', ''),
(43, '166385466489902', 'A-Grade-11-CSS', '166385461437341'),
(44, '166385467592773', 'B-Grade-11-CSS', '166385461437341'),
(45, '166385604833624', 'A-12-css', '166385599494275'),
(46, '166385606294039', 'B-12-css', '166385599494275'),
(47, '166385607437734', 'C-12-css', '166385599494275');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_tbl`
--

CREATE TABLE `instructor_tbl` (
  `ins_id` int(11) NOT NULL,
  `ins_ref_id` varchar(50) NOT NULL,
  `ins_fullname` varchar(50) NOT NULL,
  `ins_idnumber` varchar(50) NOT NULL,
  `ins_contact` varchar(20) NOT NULL,
  `ins_position` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor_tbl`
--

INSERT INTO `instructor_tbl` (`ins_id`, `ins_ref_id`, `ins_fullname`, `ins_idnumber`, `ins_contact`, `ins_position`, `username`, `password`, `status`) VALUES
(7, '166368460172463', 'platon', '0', '9219657947', '', 'platon@gmail.com', '123456', 0),
(8, '166368464419380', 'analayn ciusd', '0', '9219657947', '', 'analyn@gmail.com', '123456', 0),
(9, '166385480282567', '11CSSinstructor', '2121212222', '09219657947', '', '11CSSinstructor@gmail.com', '123456', 0),
(10, '166385650194395', 'flexibleInstructor', 'flexibleInstructor', '09219657947', '', 'flexibleInstructor@gmail.com', '123456', 0);

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
(44, '166325777380006', 'ABM', 11, 1),
(45, '166385461437341', 'Grade11-CSS', 11, 1),
(46, '166385599494275', 'Grade12-css', 12, 1);

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
  `sdt_password` varchar(50) NOT NULL,
  `sdt_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`sdt_id`, `sdt_ref_id`, `sdt_fullname`, `sdt_gender`, `sdt_address`, `sdt_parentNumber`, `qr_id`, `sdt_username`, `sdt_password`, `sdt_active`) VALUES
(19, '166384995187121', 'garde11stemA', 'Male', 'garde11stemA', '09219657947', '', 'garde11stemA@gmail.com', '123456', 1),
(20, '166385012053976', 'garde11stemAPerson2', 'Female', 'dasdadasdasdsad', '09219657947', '', 'garde11stemAPerson2@gmail.com', '123456', 1),
(21, '166385079027230', 'abm112121', 'Male', 'abm1@gmail.com', '09219657947', '', 'abm11blocka@gmail.com', '123456', 1),
(22, '166385512873698', 'A-Grade-11-CSS-student', 'Male', 'dsdasdasdaddsd', '09219657947', '', 'a-grade-11-ccs-student@gmail.com', '123456', 1),
(23, '166385545419788', 'b-11-css-studet', 'Female', 'dasdas', '09219657947', '', 'b-11-css-studet@gmail.com', '123456', 1),
(24, '166385585520935', 'A-GRADE-11-CSS-S2', 'Male', 'dasdsadasdasdad', '09219657947', '', 'a-grade-11-css-s2@gmail.com', '654321', 1),
(25, '166385636083975', 'A-12-css-std', 'Male', 'A-12-css-std', '09219657947', '', 'a-12-css-std@gmail.com', '123456', 1);

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
(20, '166384974067652', 'SUB1 -STEM-A-11', '166325116999112'),
(21, '166384975988172', 'SUB2 -STEM-A-11', '166325116999112'),
(22, '166385029816772', 'ABM-11-SUbjec1', '166325777380006'),
(23, '166385033354551', 'ABm-11-sbuject2', '166325777380006'),
(24, '166385471094346', 'programming-grade11CSS', '166385461437341'),
(25, '166385472422832', 'networking-grade11CSS', '166385461437341'),
(26, '166385609885988', 'prog-12-css', '166385599494275'),
(27, '166385610834008', 'net-12-css', '166385599494275'),
(28, '166385668892623', 'hardware-grade11CSS', '166385461437341');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `trans_id` int(11) NOT NULL,
  `ins_ref_id` varchar(50) NOT NULL,
  `bs_id` varchar(50) NOT NULL,
  `std_ref_id` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `trans_message` varchar(100) NOT NULL,
  `trans_datetime` datetime NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`trans_id`, `ins_ref_id`, `bs_id`, `std_ref_id`, `sender`, `trans_message`, `trans_datetime`, `type`, `status`) VALUES
(46, '166368460172463', '166385037545647', '166385079027230', 'ONE WAY SMS', 'ABM112121 ,  ON-TIME on Mr/Ms. Platon class at 8:47 pm - September 22  \n \n Note: This auto generated', '2022-09-22 20:47:46', 'ON-TIME', 'active'),
(47, '166368460172463', '166385037545647', '166385079027230', 'ONE WAY SMS', 'ABM112121 ,  ON-TIME on Mr/Ms. Platon class at 9:24 pm - September 22  \n \n Note: This auto generated', '2022-09-22 21:24:53', 'ON-TIME', 'active'),
(48, '166385480282567', '166385486776220', '166385512873698', 'ONE WAY SMS', 'A-GRADE-11-CSS-STUDENT ,  ON-TIME on Mr/Ms. 11CSSinstructor class at 10:00 pm - September 22  \n \n No', '2022-09-22 22:00:46', 'ON-TIME', 'active'),
(49, '166385480282567', '166385492088983', '166385545419788', 'ONE WAY SMS', 'B-11-CSS-STUDET ,  LATE on Mr/Ms. 11CSSinstructor class at 10:05 pm - September 22  \n \n Note: This a', '2022-09-22 22:05:33', 'LATE', 'active'),
(50, '166385480282567', '166385486776220', '166385512873698', 'ONE WAY SMS', 'A-GRADE-11-CSS-STUDENT ,  ON-TIME on Mr/Ms. 11CSSinstructor class at 10:06 pm - September 22  \n \n No', '2022-09-22 22:06:52', 'ON-TIME', 'active'),
(51, '166385480282567', '166385485165846', '166385512873698', 'ONE WAY SMS', 'A-GRADE-11-CSS-STUDENT ,  ON-TIME on Mr/Ms. 11CSSinstructor class at 10:07 pm - September 22  \n \n No', '2022-09-22 22:07:52', 'ON-TIME', 'active'),
(52, '166385480282567', '166385485165846', '166385512873698', 'ONE WAY SMS', 'A-GRADE-11-CSS-STUDENT ,  LATE on Mr/Ms. 11CSSinstructor class at 10:08 pm - September 22  \n \n Note:', '2022-09-22 22:08:41', 'LATE', 'active'),
(53, '166385480282567', '166385486776220', '166385585520935', 'ONE WAY SMS', 'A-GRADE-11-CSS-S2 ,  ON-TIME on Mr/Ms. 11CSSinstructor class at 10:11 pm - September 22  \n \n Note: T', '2022-09-22 22:11:40', 'ON-TIME', 'active'),
(54, '166385480282567', '166385612780524', '166385636083975', 'ONE WAY SMS', 'A-12-CSS-STD ,  ON-TIME on Mr/Ms. 11CSSinstructor class at 10:19 pm - September 22  \n \n Note: This a', '2022-09-22 22:19:54', 'ON-TIME', 'active'),
(55, '166385480282567', '166385671658357', '166385512873698', 'ONE WAY SMS', 'A-GRADE-11-CSS-STUDENT ,  LATE on Mr/Ms. 11CSSinstructor class at 10:41 pm - September 22  \n \n Note:', '2022-09-22 22:41:50', 'LATE', 'active'),
(56, '166385480282567', '166385671658357', '166385585520935', 'ONE WAY SMS', 'A-GRADE-11-CSS-S2 ,  LATE on Mr/Ms. 11CSSinstructor class at 10:44 pm - September 22  \n \n Note: This', '2022-09-22 22:44:13', 'LATE', 'active');

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
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `assign_sub`
--
ALTER TABLE `assign_sub`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `block_tbl`
--
ALTER TABLE `block_tbl`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `instructor_tbl`
--
ALTER TABLE `instructor_tbl`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `strand_tbl`
--
ALTER TABLE `strand_tbl`
  MODIFY `str_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `sdt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
