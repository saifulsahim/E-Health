-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 07:43 PM
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
(3, 'Fahim', 'fahim@gmail.com', '$2y$10$wDMhoAHPNYO.A4uyeN6IN.grMl4byZk3w5.Ri1wqkiOlsWEFizPOi', 1),
(7, 'Saiful', 'ssahim@gmail.com', '$2y$10$9TTLncqXmHRZsDkARPazReQsesyngHZIwyoVgVyo6uxZLIkGsQHbK', 1),
(8, 'Nayan Pal', 'nayan@gmail.com', '', 1),
(9, 'Saifullll Allam', 'ssssahim@gmail.com', '789', 1),
(10, 'Saiful', 'ssaiful@gmail.com', '$2y$10$skKi4TME85T8HALTpOntO.5mMieAot8FwudzMnmhMNsqS3z/sJjle', 2),
(11, 'Amit', 'amit@gmail.com', '$2y$10$yV19a5AQNDgSxZOIyOQto.aV0UPyAp.BVXVPMZUgvzZWoCT7rqVX2', 1),
(12, 'Sahim', 'sahim12@gmail.com', '$2y$10$/U5BPh5cBRrp2OVi2hBi7O/WLiCDw9sdnegtTfgr/R6Uy8kB6JkfO', 1);

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
(2, 'ICU Ambulance', '01672412645', 'Chawkbazar ewagrhes', 2),
(3, 'CMH', '01756128527', 'Dhaka', 2),
(4, 'Green Ambulance Service', '015656128527', 'Chittagong', 1),
(5, 'Medinova Medical Service Ltd.', '018656128527', 'GEC', 1);

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
(1, 5, 'AC', 2000, 1),
(2, 5, 'Non AC', 5000, 1),
(3, 6, 'General', 4000, 1),
(4, 5, 'AC', 6000, 1),
(5, 7, 'Non AC', 3000, 1),
(6, 15, 'General', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doc_id` int(11) NOT NULL,
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

INSERT INTO `tbl_doctor` (`doc_id`, `doc_name`, `doc_image`, `doc_email`, `doc_mobile_no`, `doc_qualification`, `doc_designation`, `doc_category`, `doc_birth_date`, `doc_join_date`, `doc_chamber`, `doc_fee`, `doc_status`) VALUES
(11, 'Sahimmmm', 'uploads/doc3.jpg', 'fahim@gmail.com', '0167214545', 'MBBS', 'Associate Professor', 'Orthopedics', '2011-05-16', '2016-07-27', 'Agrabad', 1200, 1),
(12, 'Fahim', 'uploads/doctor4.jpg', 'sahim@gmail.com', '01672412645', 'MBBS', 'Professor', 'Neurology', '1980-06-27', '2016-06-27', 'Agrabad', 1000, 1),
(13, 'Amit', 'uploads/amit.png', 'amit@gmail.com', '01754125774', 'MBBS ,FCPS', 'Assistant  Professor', 'Pathology', '2027-12-06', '2016-06-27', 'Anderkilla', 100, 1),
(14, 'Amir', 'uploads/doc17.jpg', 'amir@gmail.com', '01756145256', 'FCPS', 'Lecturer', 'Psychiatrist', '1990-06-29', '2018-06-21', 'DewanHat', 900, 1),
(16, 'Tanmoy', 'uploads/td1.jpg', 'td@gmail.com', '0175612587', 'PGT', 'Associate Professor', 'Neurosurgeon', '1990-02-21', '2016-06-27', 'Barma', 500, 1),
(17, 'Kalyan', 'uploads/me.jpg', 'kalyan@gmail.com', '017561257441', 'FCPS', 'Associate Professor', 'Dental', '2010-06-22', '2018-06-19', 'Sylhet', 900, 1),
(18, 'Asraf', 'uploads/doc4.jpg', 'asraf@gmail.com', '01672412645', 'MBBS', 'Associate Professor', 'Cardiology', '2018-06-06', '2015-06-10', 'Lalkan Bazar', 1000, 1),
(19, 'Fahim Alam', 'uploads/doc5.jpg', 'fahim@gmail.com', '01672412645', 'FCPS', 'Assistant Professor', 'Dermatology', '1980-02-05', '2009-02-12', 'GEC', 1200, 1),
(20, 'Sahim', 'uploads/doc18.jpg', 'sahim@gmail.com', '01672412645', 'FCPS', 'PGT', 'Orthopedics', '1980-06-27', '2018-06-19', 'Agrabad', 500, 1),
(21, 'Imran', 'uploads/doc31.jpg', 'imran@gmail.com', '01672412645', 'MBBS', 'Professor', 'Cardiology', '1980-06-27', '2015-06-20', 'Agrabad', 700, 1),
(22, 'Kishore', 'uploads/doc23.jpg', 'kishore@gmail.com', '01672412645', 'MBBS ,FCPS', 'Associate Professor', 'Pathology', '1991-03-11', '2014-06-08', 'Barma', 600, 1);

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
(2, 'Saiful', 'B-', 'sahim1345678@gmail.com', '01853132102', 'Kajir Dewri', 2),
(4, 'Sahim', 'O+', 'sahim@gmail.com', '1672412645', 'Agrabad', 2),
(5, 'Fahim', 'A-', 'fahim@gmail.com', '1853132102', 'Agrabad', 1),
(6, 'Saiful', 'A+', 'sahim@gmail.com', '01672412645', 'Agrabad', 2),
(7, 'Saiful alam', 'A+', 'sahim@gmail.com', '01672412645', 'Agrabad', 1),
(9, 'Sahim', 'B-', 'sahim1345678@gmail.com', '01672412645', 'Chawkbazar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_category` varchar(255) NOT NULL,
  `hospital_desc` text NOT NULL,
  `cabin_desc` varchar(255) NOT NULL,
  `cabin_charge` int(50) NOT NULL,
  `hospital_contact` varchar(16) NOT NULL,
  `hospital_location` text NOT NULL,
  `hospital_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`hospital_id`, `hospital_name`, `doctor_name`, `doctor_category`, `hospital_desc`, `cabin_desc`, `cabin_charge`, `hospital_contact`, `hospital_location`, `hospital_status`) VALUES
(1, 'United Hospital LTD', '21', '12', 'This is Applicable for all ', 'General', 5, '01672412645', 'Dhaka', 1),
(2, 'Sqaure Hospital', '18', '21', 'This is Applicable for all ', '3', 6, '01772412645', 'Dhaka', 2),
(3, 'Apollo', '13', '19', 'gfd', '3', 3, '01672412645', 'sg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `test_id` int(11) NOT NULL,
  `doc_image` text NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_category` varchar(255) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_price` int(100) NOT NULL,
  `test_desc` text NOT NULL,
  `test_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`test_id`, `doc_image`, `doc_name`, `doc_category`, `test_name`, `test_price`, `test_desc`, `test_status`) VALUES
(1, '', '17', '11', 'MRI', 1500, 'MRI Test', 2),
(2, '', '16', '16', 'ECG', 2000, 'ECG Test ', 1),
(4, '', '12', '20', 'Nayan', 500, 'gfg', 1),
(5, '', '18', '22', 'Amit', 1000, 'sgf', 1),
(6, '', '16', '16', 'Saiful', 2000, 'dsg', 1),
(7, '', '17', '20', 'Saiful', 2500, 'gsh', 1),
(8, '', '14', '19', 'Alam', 2000, 'gsh', 1),
(9, '', '14', '17', 'Nayan', 6980, 'Hello world', 2),
(10, '18', '11', '20', 'Nayan', 500, 'fgs', 1),
(11, '16', '17', '14', 'Ami', 500, 'gar', 1),
(12, '13', '13', '12', 'Nayan', 500, 'cgj', 1);

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
-- Indexes for table `tbl_cabin`
--
ALTER TABLE `tbl_cabin`
  ADD PRIMARY KEY (`cabin_id`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cabin`
--
ALTER TABLE `tbl_cabin`
  MODIFY `cabin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
