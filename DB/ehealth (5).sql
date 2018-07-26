-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 01:17 PM
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
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'Saiful', 'sahim@gmail.com', '$2y$10$iEv26Oh1eZdfwyMdMqS3Bupc3ahwFyV2/hZ7BHbrcsiZnnLPF.4xG', 1),
(2, 'Sahim', 'sahim@gmail.com', '', 1),
(3, 'Fahim', 'fahim@gmail.com', '$2y$10$4sy0UQWB478FEVysnn3Idu5NhdsceXy/glfAUgOI4JJdJm.B6LjqG', 1),
(7, 'Saiful', 'ssahim@gmail.com', '$2y$10$9TTLncqXmHRZsDkARPazReQsesyngHZIwyoVgVyo6uxZLIkGsQHbK', 1),
(8, 'Nayan Pal', 'nayan@gmail.com', '$2y$10$mC1fcPrFyvhM75Zcx/a1Ge1wKcvW5gKrTTwsth1YL29Zc/QObRUTu', 1),
(9, 'Saifullll Allam', 'ssssahim@gmail.com', '789', 1),
(10, 'Saiful', 'ssaiful@gmail.com', '$2y$10$skKi4TME85T8HALTpOntO.5mMieAot8FwudzMnmhMNsqS3z/sJjle', 2),
(11, 'Amit', 'amit@gmail.com', '$2y$10$yV19a5AQNDgSxZOIyOQto.aV0UPyAp.BVXVPMZUgvzZWoCT7rqVX2', 1),
(12, 'Sahim', 'sahim12@gmail.com', '$2y$10$/U5BPh5cBRrp2OVi2hBi7O/WLiCDw9sdnegtTfgr/R6Uy8kB6JkfO', 1),
(13, 'admin', 'admin@gmail.com', '1234', 1);

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
  `patient_name` varchar(255) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `patient_name`, `phone_number`, `gender`, `appointment_date`, `appointment_time`) VALUES
(1, 'Amir ul Islam', '01756128527', 'Female', '2009-10-26', '06:00:00'),
(2, 'Sahid', '01756128527', 'Male', '1970-01-01', '12:00:00'),
(4, 'OVi', '01756128527', 'Female', '2014-06-04', '01:00:00'),
(5, 'Amir ul Islam', '01756128527', 'Male', '1970-01-01', '11:00:00'),
(7, 'TD', '01756128527', 'Female', '2015-06-14', '07:00:00'),
(8, 'Saad', '01756128527', 'Male', '2015-06-14', '00:00:05');

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
  `doc_name` varchar(255) NOT NULL,
  `doc_image` text NOT NULL,
  `doc_email` varchar(255) NOT NULL,
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

INSERT INTO `tbl_doctor` (`doc_id`, `hospital_id`, `doc_name`, `doc_image`, `doc_email`, `doc_mobile_no`, `doc_qualification`, `doc_designation`, `doc_category`, `doc_birth_date`, `doc_join_date`, `doc_chamber`, `doc_fee`, `doc_status`) VALUES
(29, 19, 'Fahim', 'uploads/doc26.jpg', 'fahim@gmail.com', '01672412645', 'MBBS', 'Professor', '3', '2018-07-25', '2018-07-24', 'DewanHat', 1000, 1),
(30, 19, 'Sahim', 'uploads/doctor3.jpg', 'sahim@gmail.com', '01672412645', 'MBBS ,FCPS', 'FCPS', '1', '2015-06-27', '2016-06-27', 'DewanHat', 1000, 1),
(31, 19, 'Sadman', 'uploads/doc52.jpg', 'sadman@mail.com', '01672412645', 'MBBS', 'Associate Professor', '2', '2018-07-17', '2018-07-04', 'DewanHat', 1000, 1),
(32, 20, 'rakib', 'uploads/doc36.jpg', 'sahim@gmail.com', '01672412645', 'MBBS ,FCPS', 'Associate Professor', '1', '2018-06-27', '2016-06-27', 'DewanHat', 1000, 1),
(33, 22, 'Irfan', 'uploads/doc41.jpg', 'irfan@gmail.com', '01672412645', 'MBBS', 'Professor', '3', '2018-07-25', '2018-07-03', 'Sylhet', 1000, 1),
(34, 24, 'Demo', 'uploads/doc37.jpg', 'demo@gmail.com', '01672412645', 'FCPS', 'Associate Professor', '4', '1980-06-27', '2016-06-27', 'Agrabad', 1000, 1),
(35, 19, 'Jony', 'uploads/g4.jpg', 'jony@gmail.com', '01672412645', 'MBBS', 'Associate Professor', '1', '1980-06-27', '2016-06-27', 'Anderkilla', 1000, 1);

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
(24, 4, 'CMC', 'CMC', '01872412645', 'sdc', 1);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
