-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 08:23 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_role` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_image`, `admin_role`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'Saiful', 'user/g1.jpg', 'Admin', 'sahim@gmail.com', '$2y$10$iEv26Oh1eZdfwyMdMqS3Bupc3ahwFyV2/hZ7BHbrcsiZnnLPF.4xG', 1),
(2, 'Sahim', '', '', 'sahim@gmail.com', '', 1),
(3, 'Fahim', 'user/amit.png', '', 'fahim@gmail.com', '$2y$10$jZwdckv0Gl7NPWb9cVXY9uanOgufAxA4wSJWwFa9yRhrfBMRTahem', 1),
(7, 'Saifulss', 'user/122.jpg', '', 'ssahim@gmail.com', '$2y$10$ASA69U0JDx8RBDoWni59.O4dx3dyPvpPi1bWY7nQ2BnrWQkEBKgp6', 1),
(8, 'Nayan Pal', 'user/g.jpg', 'Admin', 'nayan@gmail.com', '$2y$10$t9CdgGw70St3C9SSyyu8KuZLsRVqwTk1lZYj2cDVoWtvlVIsN2agC', 1),
(12, 'Sahim', '', '', 'sahim12@gmail.com', '$2y$10$/U5BPh5cBRrp2OVi2hBi7O/WLiCDw9sdnegtTfgr/R6Uy8kB6JkfO', 1),
(13, 'admin', 'user/g2.jpg', 'Admin', 'admin@gmail.com', '$2y$10$lkYOAJANJW9vFCfM6jY8fOq0Mjkx8CD6kmrqjey2/PkbM.zcX5lwu', 1),
(14, 'Saiful', 'user/12.jpg', 'Admin', 'saiful@gmail.com', '$2y$10$mOWzxxlYNRL61NRJzp1Wq.9ht6sOFODER/wc7tJP7MlJBSqoDT9dO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ambulance`
--

CREATE TABLE `tbl_ambulance` (
  `amb_id` int(11) NOT NULL,
  `amb_name` varchar(255) NOT NULL,
  `amb_contact` varchar(255) NOT NULL,
  `amb_loc` text NOT NULL,
  `amb_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ambulance`
--

INSERT INTO `tbl_ambulance` (`amb_id`, `amb_name`, `amb_contact`, `amb_loc`, `amb_status`) VALUES
(2, 'ICU Ambulance', '01672412645', 'Chawkbazar ewagrhes', 1),
(3, 'CMH', '01756128527', 'Dhaka', 1),
(4, 'Green Ambulance Service', '015656128527', 'Chittagong', 1),
(5, 'Medinova Medical Service Ltd.', '018656128527', 'GEC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `appointment_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `doc_id`, `patient_name`, `phone_number`, `gender`, `appointment_date`, `appointment_time`) VALUES
(10, 31, 'Amir ul Islam', '01756128527', 'Male', '2018-07-24', '07:00:00'),
(11, 31, 'Demo', '01756128527', 'Male', '2018-07-24', '07:00:00'),
(14, 31, 'Amir ul Islam', '01756128527', 'Male', '2018-07-24', '05:00:00'),
(15, 31, 'Amir ul fa', '01756128527', 'Male', '2018-07-24', '05:00:00'),
(17, 31, 'Mitun Tohid', '01756128527', 'Male', '2018-07-17', '01:30:00'),
(18, 33, 'Mohiuddin', '01756128527', 'Male', '2018-07-24', '10:00:00'),
(19, 34, 'Sajjad', '01756128527', 'Male', '2018-07-28', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cabin`
--

CREATE TABLE `tbl_cabin` (
  `cabin_id` int(11) NOT NULL,
  `cabin_capacity` int(50) NOT NULL,
  `cabin_desc` text NOT NULL,
  `cabin_charge` int(100) NOT NULL,
  `cabin_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cabin`
--

INSERT INTO `tbl_cabin` (`cabin_id`, `cabin_capacity`, `cabin_desc`, `cabin_charge`, `cabin_status`) VALUES
(1, 5, 'AC', 2000, 2),
(2, 5, 'Non AC', 5000, 2),
(3, 6, 'General', 4000, 1),
(4, 5, 'AC', 6000, 1),
(5, 7, 'Non AC', 3000, 1),
(6, 15, 'General', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_desc` text NOT NULL,
  `dept_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dept`
--

INSERT INTO `tbl_dept` (`dept_id`, `dept_name`, `dept_desc`, `dept_status`) VALUES
(1, 'Pathology', 'Medicine', 1),
(2, 'Neurology', 'SD', 1),
(3, 'Cardiology', 'Cardiology', 1),
(4, 'Orthopedics', 'Orthopedics', 1),
(5, 'Gynocology', 'Gynocologyrrtdr6', 1),
(6, 'Surgeon', 'dfss', 1),
(7, 'Medicine', 'Medicine', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doc_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_image` text NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_password` varchar(255) NOT NULL,
  `doc_mobile_no` varchar(16) NOT NULL,
  `doc_qualification` varchar(255) NOT NULL,
  `doc_designation` varchar(255) NOT NULL,
  `doc_category` varchar(255) NOT NULL,
  `doc_birth_date` date NOT NULL,
  `doc_join_date` date NOT NULL,
  `doc_chamber` varchar(255) NOT NULL,
  `doc_fee` int(100) NOT NULL,
  `doc_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doc_id`, `hospital_id`, `admin_id`, `doc_name`, `doc_image`, `doc_email`, `doc_password`, `doc_mobile_no`, `doc_qualification`, `doc_designation`, `doc_category`, `doc_birth_date`, `doc_join_date`, `doc_chamber`, `doc_fee`, `doc_status`) VALUES
(29, 19, 1, 'Fahim', 'uploads/doc26.jpg', 'fahim@gmail.com', '', '01672412645', 'MBBS', 'Professor', '3', '2018-07-25', '2018-07-24', 'DewanHat', 1000, 1),
(30, 19, 1, 'Sahim', 'uploads/doctor3.jpg', 'sahim@gmail.com', '$2y$10$OvuDg3qtDmdWjlG2WlOduOgVn.BOJrZtujIgqVAKfJ.1lhNwlAFfO', '01672412645', 'MBBS ,FCPS', 'FCPS', '1', '2015-06-27', '2016-06-27', 'DewanHat', 1000, 1),
(31, 19, 1, 'Sadman', 'uploads/doc52.jpg', 'sadman@mail.com', '', '01672412645', 'MBBS', 'Associate Professor', '2', '2018-07-17', '2018-07-04', 'DewanHat', 1000, 1),
(32, 20, 1, 'rakib', 'uploads/amit.png', 'sahim@gmail.com', '', '01672412645', 'MBBS ,FCPS', 'Associate Professor', '1', '2018-06-27', '2016-06-27', 'DewanHat', 1000, 1),
(33, 22, 1, 'karim', 'uploads/doctor4.jpg', 'irfan@gmail.com', '', '01672412645', 'MBBS', 'Professor', '3', '2018-07-25', '2018-07-03', 'Sylhet', 1000, 1),
(34, 24, 1, 'Demo', 'uploads/doc37.jpg', 'demo@gmail.com', '', '01672412645', 'FCPS', 'Associate Professor', '4', '1980-06-27', '2016-06-27', 'Agrabad', 1000, 1),
(35, 19, 1, 'Jony', 'uploads/g4.jpg', 'jony@gmail.com', '', '01672412645', 'MBBS', 'Associate Professor', '1', '1980-06-27', '2016-06-27', 'Anderkilla', 1000, 1),
(36, 25, 1, 'hasan', 'uploads/me4.jpg', 'hasan@gmail.com', '', '01672412645', 'PGT ,MBBS', 'Professor', '4', '1980-06-27', '2018-06-19', 'Anderkilla', 1200, 1),
(37, 0, 1, 'Sajjad', 'uploads/124.jpg', 'sajjad@gmail.com', '$2y$10$ouewLBk7CaYv.9x/cEUI8OGVephC7WB5Rz84WgavWQQyrce8zI9x.', '01672412645', 'MBBS', 'Associate Professor', '2', '2018-07-17', '0000-00-00', '', 0, 1),
(38, 0, 1, 'Sahim', 'uploads/5423_1117741211592988_8247905096730824255_n_(1)3.jpg', 'sahim@gmail.com', '', '01672412645', 'MBBS', 'Associate Professor', '3', '2018-07-25', '0000-00-00', '', 0, 1),
(39, 0, 1, 'fahim', 'uploads/5423_1117741211592988_8247905096730824255_n_(1)4.jpg', 'fahim@gmail.com', '$2y$10$czZgnOM.eI8hWbyoQT0/uuJzFgQUHkQh2VNSy.s//7VYv1SLU/Q1.', '01672412645', 'MBBS', 'Associate Professor', '2', '2018-07-17', '0000-00-00', '', 0, 1),
(40, 0, 1, 'mitun', 'uploads/125.jpg', 'mitun@gmail.com', '$2y$10$y3akMNt1E8iK/Pv8w1g0K.tfGQW3kxAqizhq/Ka7snHFy.3T9uKrq', '01672412645', 'MBBS', 'Associate Professor', '2', '1980-06-27', '0000-00-00', '', 0, 1),
(41, 24, 1, 'Sajjad', 'uploads/126.jpg', 'sajjad@gmail.com', '$2y$10$JWSOO33YHIHXquEyR0CHTuPI3b07WpD.7kJvsPid8Y6gQYc9PZ18u', '01672412645', 'MBBS', 'FCPS', '2', '2018-07-25', '2018-07-12', 'Anderkilla', 700, 1),
(42, 23, 1, 'Zahid', 'uploads/127.jpg', 'zahid@gmail.com', '$2y$10$.fnpcG7.dpigxWABpQ4qbOo0ejoZD9.NwJ24/SJEUB4M7q8IJ8wvu', '01672412645', 'MBBS', 'Associate Professor', '1', '2018-07-25', '2018-06-21', 'DewanHat', 1000, 1),
(43, 22, 1, 'King', 'uploads/amit3.png', 'king@gmail.com', '$2y$10$BPLiztNT.jotq8kvS5xaTO7nBopM1s.4Lifzx65a3W8CKD/2tpF7e', '01672412645', 'MBBS', 'MBBS', '5', '1980-06-27', '2016-06-27', '', 1000, 1),
(45, 23, 1, 'sa', 'uploads/doc18.jpg', 'sa@gmail.com', '$2y$10$cK3QaxTQNDfC5BcTPVuHRevZRVDySeTC8TGyONmQ7fS3ZitrX4V7q', '01672412645', 'MBBS', 'FCPS', '1', '1980-06-27', '2018-06-19', '', 1000, 1),
(46, 23, 1, 'Kalyan', 'uploads/doctor5.jpg', 'amit@gmail.com', '$2y$10$BS0WlbYE3BhdYbxPEiDzuerkAUvBbQvNl1JOnfJcqYBm166tm/ClS', '01672412645', 'MBBS', 'MBBS ,FCPS', '1', '1980-06-27', '2018-06-19', '', 1000, 1),
(47, 22, 1, 'Sajjad', 'uploads/128.jpg', 'sajjad@gmail.com', '$2y$10$wxzC.zyS2zUscu1AAGnTdu9u9DilJBvxMkyBRQztzK21lVTeK8cxi', '01672412645', 'FCPS', 'MBBS', '2', '2018-07-17', '2018-06-18', '', 700, 1),
(48, 23, 1, 'hasan', 'uploads/doc53.jpg', 'hasan@gmail.com', '$2y$10$BWgV7Q3QcrsXqjXvYPon2.Sl6cF9CbG9bivLBMABRJmvNfF90fBcK', '01672412645', 'FCPS', 'MBBS', '3', '1980-06-27', '2018-06-19', '', 1000, 1),
(49, 23, 1, 'Mahmud', 'uploads/129.jpg', 'mahmud@gmail.com', '$2y$10$pwrSxpciwNs3Qta88I3/G.PZRUH4jhzwEWNPbCpglfQz9T4LHjUWC', '01672412645', 'MBBS', 'MBBS', '3', '1980-06-27', '2018-06-19', '', 1000, 1),
(50, 20, 1, 'hsan', 'uploads/5423_1117741211592988_8247905096730824255_n2.jpg', 'hsan@gmail.com', '$2y$10$U8Bm8kIgxPoOvIWyPI4b0uOpwEqlp9rHSckzZJBbs/6FUPxnsekcq', '01672412645', 'FCPS', 'Associate Professor', '3', '2018-07-18', '2018-06-18', '', 1000, 1),
(51, 19, 0, 'Sahimmmm', 'uploads/5423_1117741211592988_8247905096730824255_n3.jpg', 'ssssahim@gmail.com', '$2y$10$TlfOXEcfkO/3XL1PJFQHAuhLRKuShX6Av/Hh//ZJqHZ.MJC0VXQim', '01672412645', 'MBBS', 'Associate Professor', '2', '2018-07-24', '2018-06-27', '', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor`
--

CREATE TABLE `tbl_donor` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_blood_group` varchar(11) NOT NULL,
  `donor_email` varchar(255) NOT NULL,
  `donor_mobile_no` varchar(16) NOT NULL,
  `donor_address` varchar(255) NOT NULL,
  `donor_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_donor`
--

INSERT INTO `tbl_donor` (`donor_id`, `donor_name`, `donor_blood_group`, `donor_email`, `donor_mobile_no`, `donor_address`, `donor_status`) VALUES
(1, 'Sahim Alam', 'AB+', 'sahim@gmail.com', '01672412645', 'Sahim', 1),
(2, 'Mitun', 'AB+', 'sahim1345678@gmail.com', '01853132102', 'Kajir Dewri', 1),
(4, 'Sahim', 'O+', 'sahim@gmail.com', '1672412645', 'Agrabad', 1),
(5, 'Fahim', 'A-', 'fahim@gmail.com', '1853132102', 'Agrabad', 1),
(6, 'Sadman', 'A-', 'sahim@gmail.com', '01672412645', 'Agrabad', 1),
(7, 'Saiful alam', 'A+', 'sahim@gmail.com', '01672412645', 'Agrabad', 1),
(9, 'Sahim', 'AB-', 'sahim1345678@gmail.com', '01672412645', 'Chawkbazar', 1),
(10, 'Amit', 'O-', 'sahim1345678@gmail.com', '01853132102', 'Agrabad', 1),
(11, 'Mohiuddin Sadman', 'B+', 'sadman@gmail.com', '0155591198', 'Chawkbazar', 1),
(12, 'Asraf', 'B-', 'asraf@gmail.com', '01756128527', 'Agrabad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `hospital_id` int(11) NOT NULL,
  `cabin_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_desc` text NOT NULL,
  `hospital_contact` varchar(16) NOT NULL,
  `hospital_location` text NOT NULL,
  `hospital_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`hospital_id`, `cabin_id`, `hospital_name`, `hospital_desc`, `hospital_contact`, `hospital_location`, `hospital_status`) VALUES
(19, 4, 'Metro Hospital', 'ds', '01672412645', 'dfs', 1),
(20, 6, 'United Hospital', 'adfs', '01672412645', 'dfas', 1),
(22, 4, 'Apollo', 'szfd', '01672412645', 'rse', 1),
(23, 4, 'BCG Trust', 'sdf', '01672412645', 'dfsa', 1),
(24, 4, 'CMC', 'CMC', '01872412645', 'sdc', 1),
(25, 3, 'Sqaure', 'As', '01672412645', 'afdsdd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `test_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_price` int(100) NOT NULL,
  `test_desc` text NOT NULL,
  `test_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`test_id`, `doc_id`, `test_name`, `test_price`, `test_desc`, `test_status`) VALUES
(21, 31, 'MRI', 6980, 'afd', 1),
(22, 32, 'Blood Test12', 500, 'ff7i', 1),
(23, 33, 'HIV', 2000, 'daf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  ADD PRIMARY KEY (`amb_id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `tbl_cabin`
--
ALTER TABLE `tbl_cabin`
  ADD PRIMARY KEY (`cabin_id`);

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_cabin`
--
ALTER TABLE `tbl_cabin`
  MODIFY `cabin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
