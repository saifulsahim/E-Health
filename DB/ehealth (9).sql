-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 07:31 PM
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
  `admin_status` tinyint(3) NOT NULL,
  `insert_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_image`, `admin_role`, `admin_email`, `admin_password`, `admin_status`, `insert_id`) VALUES
(1, 'Saiful', 'user/g1.jpg', 'Admin', 'sahim@gmail.com', '$2y$10$iEv26Oh1eZdfwyMdMqS3Bupc3ahwFyV2/hZ7BHbrcsiZnnLPF.4xG', 1, 0),
(2, 'Sahim', '', '', 'sahim@gmail.com', '', 1, 0),
(3, 'Fahim', 'user/amit.png', '', 'fahim@gmail.com', '$2y$10$jZwdckv0Gl7NPWb9cVXY9uanOgufAxA4wSJWwFa9yRhrfBMRTahem', 1, 0),
(7, 'Saifulss', 'user/122.jpg', 'Doctor', 'ssahim@gmail.com', '$2y$10$n5sibNWxv2RkYQUtZqcSAOCKOfIUZZTG7VlTdFoKmRunuzASBlyse', 1, 0),
(8, 'Nayan Pal', 'user/g.jpg', 'Doctor', 'nayan@gmail.com', '$2y$10$YdZFUfhiqad5Xv/oiYvfPOkBSVsmnnsDKfKUrtgpw7YBzbs3KCORy', 1, 0),
(13, 'admin', 'user/g2.jpg', 'Doctor', 'admin@gmail.com', '$2y$10$lkYOAJANJW9vFCfM6jY8fOq0Mjkx8CD6kmrqjey2/PkbM.zcX5lwu', 1, 0),
(14, 'Saiful', 'user/12.jpg', 'Doctor', 'saiful@gmail.com', '$2y$10$jqM24UAmlGfPRwDNrsxPNuPLt3MRkTg6ZIKaGmv8R0bznG8hcnAbK', 1, 0),
(15, 'Fahim', 'user/doc1.jpg', 'Doctor', 'abedul@gmail.com', '$2y$10$.S2hhkoEIyvBfjbwLl5mA.qgsImLT/AQDAvSn5pT5trtbe5uRiFsi', 1, 0),
(16, 'Argha', 'uploads/amit5.png', 'Doctor', 'orgho@gmail.com', '$2y$10$MwHcUcQxURHHoZMCDvGjpuIiyw734O4BeEjJZ/dcZiwmlsQ7MdR5m', 1, 58),
(17, 'Dhrubo', 'uploads/amit6.png', 'Doctor', 'dhrubo12@gmail.com', '$2y$10$eglVtTfyB437Loefj5loseIA61C1YdWmHW5M2CtDFghliorI6RTby', 1, 59),
(18, 'aaaa', 'user/g4.jpg', 'Patient', 'aaa@aaa.com', '$2y$10$4nx.LMlsglop1QknD7TuSOCRzDgzrJNntXbK1hYPoLfWUJ3g.UCiC', 1, 4),
(19, 'amir', 'user/g3.jpg', 'Patient', 'amir@gmail.com', '$2y$10$Vtie840Rxwbb7rgxOHhnNegBoJHOx9RSRIHnjgXLSOS2evzITokE2', 1, 5),
(20, 'Mostafa', 'uploads/doctor6.jpg', 'Doctor', 'Mostafa@gmail.com', '$2y$10$Cgmllz1JbIS0d.hIXbYGGuGO/Qbf2cCzF7YP3zlNuLa/FHobgJ/QO', 1, 60),
(21, 'sahim', '', 'Patient', 'sah@gmail.com', '$2y$10$l8esF8LUKuGL1uKmw2iuZODZh/PJoyWYBSsm7yVSI.ptQJZ9ALFHW', 1, 6);

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
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `appointment_status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `doc_id`, `patient_id`, `patient_name`, `phone_number`, `gender`, `appointment_date`, `appointment_time`, `appointment_status`) VALUES
(10, 31, 5, 'Amir ul Islam', '01756128527', 'Male', '2018-07-24', '07:00:00', 1),
(11, 31, 6, 'Demo', '01756128527', 'Male', '2018-07-24', '07:00:00', 1),
(14, 31, 5, 'Amir ul Islam', '01756128527', 'Male', '2018-07-24', '05:00:00', 1),
(15, 31, 6, 'Amir ul fa', '01756128527', 'Male', '2018-07-24', '05:00:00', 1),
(17, 31, 5, 'Mitun Tohid', '01756128527', 'Male', '2018-07-17', '01:30:00', 1),
(18, 33, 6, 'Mohiuddin', '01756128527', 'Male', '2018-07-24', '10:00:00', 1),
(19, 34, 5, 'Sajjad', '01756128527', 'Male', '2018-07-28', '08:00:00', 1),
(20, 37, 6, 'Sahid', '01756128527', 'Male', '2011-06-14', '01:00:00', 1),
(21, 37, 5, 'Amir ul Islam', '01756128527', 'Male', '2018-07-24', '01:00:00', 1),
(22, 48, 1, 'sahim', '01672412645', '', '2018-08-29', '07:00:00', 1),
(23, 50, 1, 'sahim', '01672412645', '', '2011-06-14', '07:00:00', 1),
(24, 53, 1, 'sahim', '01672412645', '', '2018-07-24', '12:00:00', 1),
(25, 54, 1, 'sahim', '01672412645', '', '2009-10-26', '12:12:00', 1),
(26, 42, 2, 'mitun', '021959', '', '2015-06-14', '07:07:00', 1),
(27, 42, 2, 'mitun', '021959', '', '2015-06-14', '11:11:00', 1),
(28, 36, 2, 'mitun', '021959', '', '2018-09-05', '10:10:00', 1),
(29, 37, 2, 'mitun', '021959', '', '2018-08-29', '07:07:00', 1),
(30, 52, 1, 'sahim', '01672412645', '', '2018-07-24', '09:09:00', 1),
(31, 59, 1, 'sahim', '01672412645', '', '2018-07-24', '00:00:00', 0),
(32, 59, 1, 'sahim', '01672412645', '', '2018-07-24', '22:30:00', 1),
(33, 59, 1, 'sahim', '01672412645', '', '2011-06-14', '06:30:00', 0),
(34, 59, 1, 'sahim', '01672412645', '', '2018-05-09', '19:00:00', 1),
(35, 36, 1, 'sahim', '01672412645', '', '2018-05-09', '18:30:00', 1),
(36, 58, 4, 'aaaa', '123', '', '2018-08-30', '13:00:00', 0),
(37, 33, 4, 'aaaa', '123', '', '2018-08-13', '19:00:00', 1),
(38, 50, 4, 'aaaa', '123', '', '2018-08-29', '06:30:00', 1),
(39, 40, 5, 'amir', '01756128527', '', '2011-06-14', '12:00:00', 1),
(40, 51, 5, 'amir', '01756128527', '', '2011-06-14', '12:00:00', 1),
(41, 41, 5, 'amir', '01756128527', '', '2011-06-14', '11:00:00', 1),
(42, 57, 5, 'amir', '01756128527', '', '2018-07-28', '11:00:00', 1),
(43, 60, 6, 'sahim', '01672412645', '', '2018-08-05', '19:00:00', 1),
(44, 60, 5, 'amir', '01756128527', '', '2018-08-05', '12:00:00', 1),
(45, 54, 5, 'amir', '01756128527', '', '2018-07-24', '05:30:00', 1),
(46, 54, 5, 'amir', '01756128527', '', '2015-06-14', '05:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `blog_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_view` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `blog_status` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_desc`, `author_id`, `blog_date`, `blog_view`, `blog_status`) VALUES
(1, 'Health', 'Health', 1, '2018-08-06 15:57:49', 4, NULL),
(2, 'Beauty', 'Beauty', 1, '2018-08-06 16:02:37', 10, NULL);

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
  `doc_password` varchar(255) NOT NULL,
  `doc_mobile_no` varchar(16) NOT NULL,
  `doc_qualification` varchar(255) NOT NULL,
  `doc_designation` varchar(255) NOT NULL,
  `doc_category` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `doc_birth_date` date NOT NULL,
  `doc_join_date` date NOT NULL,
  `doc_chamber` varchar(255) NOT NULL,
  `doc_fee` int(100) NOT NULL,
  `doc_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doc_id`, `hospital_id`, `doc_name`, `doc_image`, `doc_email`, `doc_password`, `doc_mobile_no`, `doc_qualification`, `doc_designation`, `doc_category`, `symptoms`, `disease`, `doc_birth_date`, `doc_join_date`, `doc_chamber`, `doc_fee`, `doc_status`) VALUES
(29, 19, 'Fahim', 'uploads/doc26.jpg', 'fahim@gmail.com', '', '01672412645', 'MBBS', 'Professor', '3', 'Sweating,Irregular heartbeat.', 'Heart Ailment, Atrial fibrillation,Myocardial infarction', '2018-07-25', '2018-07-24', 'DewanHat', 1000, 1),
(30, 19, 'Sahim', 'uploads/doctor3.jpg', 'sahim@gmail.com', '$2y$10$OvuDg3qtDmdWjlG2WlOduOgVn.BOJrZtujIgqVAKfJ.1lhNwlAFfO', '01672412645', 'MBBS ,FCPS', 'FCPS', '1', '', '', '2015-06-27', '2016-06-27', 'DewanHat', 1000, 1),
(31, 19, 'Sadman', 'uploads/doc52.jpg', 'sadman@mail.com', '', '01672412645', 'MBBS', 'Associate Professor', '2', '', '', '2018-07-17', '2018-07-04', 'DewanHat', 1000, 1),
(32, 20, 'rakib', 'uploads/amit.png', 'sahim@gmail.com', '', '01672412645', 'MBBS ,FCPS', 'Associate Professor', '2', 'brain tumor', 'brain damage, dystonia,,Myasthenia gravis', '2018-06-27', '2016-06-27', 'DewanHat', 1000, 1),
(33, 22, 'karim', 'uploads/doctor4.jpg', 'irfan@gmail.com', '', '01672412645', 'MBBS', 'Professor', '3', '', '', '2018-07-25', '2018-07-03', 'Sylhet', 1000, 1),
(34, 24, 'Demo', 'uploads/doc37.jpg', 'demo@gmail.com', '', '01672412645', 'FCPS', 'Associate Professor', '4', '', '', '1980-06-27', '2016-06-27', 'Agrabad', 1000, 1),
(35, 19, 'Jony', 'uploads/g4.jpg', 'jony@gmail.com', '', '01672412645', 'MBBS', 'Associate Professor', '1', '', '', '1980-06-27', '2016-06-27', 'Anderkilla', 1000, 1),
(36, 25, 'hasan', 'uploads/me4.jpg', 'hasan@gmail.com', '', '01672412645', 'PGT ,MBBS', 'Professor', '4', '', '', '1980-06-27', '2018-06-19', 'Anderkilla', 1200, 1),
(37, 0, 'Sajjad', 'uploads/124.jpg', 'sajjad@gmail.com', '$2y$10$ouewLBk7CaYv.9x/cEUI8OGVephC7WB5Rz84WgavWQQyrce8zI9x.', '01672412645', 'MBBS', 'Associate Professor', '2', '', '', '2018-07-17', '0000-00-00', '', 0, 1),
(40, 0, 'mitun', 'uploads/125.jpg', 'mitun@gmail.com', '$2y$10$y3akMNt1E8iK/Pv8w1g0K.tfGQW3kxAqizhq/Ka7snHFy.3T9uKrq', '01672412645', 'MBBS', 'Associate Professor', '2', '', '', '1980-06-27', '0000-00-00', '', 0, 1),
(41, 24, 'Sajjad', 'uploads/126.jpg', 'sajjad@gmail.com', '$2y$10$JWSOO33YHIHXquEyR0CHTuPI3b07WpD.7kJvsPid8Y6gQYc9PZ18u', '01672412645', 'MBBS', 'FCPS', '2', '', '', '2018-07-25', '2018-07-12', 'Anderkilla', 700, 1),
(42, 23, 'Zahid', 'uploads/127.jpg', 'zahid@gmail.com', '$2y$10$.fnpcG7.dpigxWABpQ4qbOo0ejoZD9.NwJ24/SJEUB4M7q8IJ8wvu', '01672412645', 'MBBS', 'Associate Professor', '1', '', '', '2018-07-25', '2018-06-21', 'DewanHat', 1000, 1),
(43, 22, 'King', 'uploads/amit3.png', 'king@gmail.com', '$2y$10$BPLiztNT.jotq8kvS5xaTO7nBopM1s.4Lifzx65a3W8CKD/2tpF7e', '01672412645', 'MBBS', 'MBBS', '5', '', '', '1980-06-27', '2016-06-27', '', 1000, 1),
(45, 23, 'sa', 'uploads/doc18.jpg', 'sa@gmail.com', '$2y$10$cK3QaxTQNDfC5BcTPVuHRevZRVDySeTC8TGyONmQ7fS3ZitrX4V7q', '01672412645', 'MBBS', 'FCPS', '1', '', '', '1980-06-27', '2018-06-19', '', 1000, 1),
(46, 23, 'Kalyan', 'uploads/doctor5.jpg', 'amit@gmail.com', '$2y$10$BS0WlbYE3BhdYbxPEiDzuerkAUvBbQvNl1JOnfJcqYBm166tm/ClS', '01672412645', 'MBBS', 'MBBS ,FCPS', '1', '', '', '1980-06-27', '2018-06-19', '', 1000, 1),
(47, 22, 'Sajjad', 'uploads/128.jpg', 'sajjad@gmail.com', '$2y$10$wxzC.zyS2zUscu1AAGnTdu9u9DilJBvxMkyBRQztzK21lVTeK8cxi', '01672412645', 'FCPS', 'MBBS', '2', '', '', '2018-07-17', '2018-06-18', '', 700, 1),
(48, 23, 'hasan', 'uploads/doc53.jpg', 'hasan@gmail.com', '$2y$10$BWgV7Q3QcrsXqjXvYPon2.Sl6cF9CbG9bivLBMABRJmvNfF90fBcK', '01672412645', 'FCPS', 'MBBS', '3', '', '', '1980-06-27', '2018-06-19', '', 1000, 1),
(49, 23, 'Mahmud', 'uploads/129.jpg', 'mahmud@gmail.com', '$2y$10$pwrSxpciwNs3Qta88I3/G.PZRUH4jhzwEWNPbCpglfQz9T4LHjUWC', '01672412645', 'MBBS', 'MBBS', '3', '', '', '1980-06-27', '2018-06-19', '', 1000, 1),
(50, 20, 'hsan', 'uploads/5423_1117741211592988_8247905096730824255_n2.jpg', 'hsan@gmail.com', '$2y$10$U8Bm8kIgxPoOvIWyPI4b0uOpwEqlp9rHSckzZJBbs/6FUPxnsekcq', '01672412645', 'FCPS', 'Associate Professor', '3', '', '', '2018-07-18', '2018-06-18', '', 1000, 1),
(51, 19, 'Sahimmmm', 'uploads/5423_1117741211592988_8247905096730824255_n3.jpg', 'ssssahim@gmail.com', '$2y$10$TlfOXEcfkO/3XL1PJFQHAuhLRKuShX6Av/Hh//ZJqHZ.MJC0VXQim', '01672412645', 'MBBS', 'Associate Professor', '2', '', '', '2018-07-24', '2018-06-27', '', 1000, 1),
(52, 23, 'Imran', 'uploads/doc27.jpg', 'imran@gmail.com', '$2y$10$/ZwSllLu6N8Sn4u88Gp7UebersvyHVcd1d5002GJ5z7uzVb6sAwpC', '01672412645', 'FCPS', 'FCPS', '4', '', '', '1980-06-27', '2016-06-27', '', 700, 1),
(53, 23, 'farhan', 'uploads/5423_1117741211592988_8247905096730824255_n4.jpg', 'farhan@gmail.com', '$2y$10$jnuIpeyyEb2CEofl5Ck7Neopyvz4BzTdIqK07trOJMiVi4o4rVh7a', '01672412645', 'FCPS', 'FCPS', '2', '', '', '2018-07-17', '2016-06-27', '', 700, 1),
(54, 25, 'Sajjad', 'uploads/doc19.jpg', 'mitun@gmail.com', '$2y$10$TJW2t5KvZyz2WfnoSoIjIO8gxDP4Wuw00tmXeaY1aEc4.TrEhfQR6', '01672412645', 'FCPS', 'MBBS ,FCPS', '2', '', '', '2018-07-25', '2018-06-21', '', 700, 1),
(55, 24, 'Sahim', 'uploads/5423_1117741211592988_8247905096730824255_n5.jpg', 'sahim@gmail.com', '$2y$10$kPv2vOWY/1WMhEy9atf3meYC77cg/jChdix4MhajKsHrSChfwqTam', '01672412645', 'FCPS', 'Professor', '3', '', '', '1980-06-27', '2018-06-19', '', 1000, 1),
(56, 20, 'Abedul', 'uploads/doc36.jpg', 'sahim@gmail.com', '$2y$10$r4f/BcjWAmfp/l3GnHFLHewLdyRRKy0fT8WUwwki77Ja62IJERfnu', '01672412645', 'FCPS', 'MBBS', '1', '', '', '2018-07-25', '2016-06-27', '', 700, 1),
(57, 23, 'Amit ', 'uploads/amit4.png', 'kalyan@gmail.com', '$2y$10$pFYOgCGSitoAPdV.mWEg.ORzweLlQD9a.k5FU1Tyrq/GjeZrvGH3a', '01672412645', 'FCPS', 'MBBS', '2', '', '', '2018-08-15', '2018-06-21', '', 1000, 1),
(58, 20, 'Argha charaborty', 'uploads/amit5.png', 'orgho@gmail.com', '$2y$10$ws.eU0DJW2sENjJuGzTmseVmT1P7oX1kgGBk/VwqLF4IuXiBiJBMC', '01672412645', 'MBBS ,FCPS', 'MBBS', '3', '', '', '2018-08-23', '2018-06-18', '', 700, 1),
(59, 22, 'Dhrubo rtrt', 'uploads/amit6.png', 'dhrubo@gmail.com', '$2y$10$eZs3DedU1JKZKZJaaBvC8.VMQz7hikHP2D7n7G6W58LyEcggpT3/e', '01672412645', 'MBBS ,FCPS', 'FCPS', '4', '', '', '2018-08-30', '2018-06-21', '', 7000, 1),
(60, 22, 'Mostafa', 'uploads/doctor6.jpg', 'Mostafa@gmail.com', '$2y$10$0mAWS5z/Vkjyb90hCE/85.BbmeCb76/9DKYi0IFjprTDP7UgtMW2e', '01672412645', 'MBBS ,FCPS', 'MBBS', '2', '', '', '1980-06-27', '2016-06-27', '', 1000, 1);

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
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patient_id`, `patient_name`, `mobile_no`, `email_address`, `password`, `status`) VALUES
(1, 'sahim alam', '01672412645', 'sahim12@gmail.com', '$2y$10$lq954thrdZRsJ/25juIzPOay7tDD.pLmMz3xjLQiUifE8IKNvXB8.', 1),
(3, 'aaaa', '123', 'aaa@aaa.com', '$2y$10$T7gjf7bdzYE.iJdHOSz4u..gNzSNbjETFvKMAe./1RypRbJnC4RRW', 1),
(4, 'aaaa', '123', 'aaa@aaa.com', '$2y$10$m75fApKBBwoLNFob4Q0XNOioogc8cZvSV9rLl/BLNMppxdI0PSK46', 1),
(5, 'amir', '01756128527', 'amir@gmail.com', '$2y$10$azl8fhzgFlrxjK7VxbVXJOdJiJmek23SyTTKF46KX3SB.3r8QycHq', 1),
(6, 'sahim', '01672412645', 'sah@gmail.com', '$2y$10$homR.30nxr/.uOgXopOMC.AtwWGZY/tl6Z9RE2vQacxUy9WqbpVBK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(11) NOT NULL,
  `value` float(10,2) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `value`, `doc_id`, `patient_id`) VALUES
(1, 3.00, 58, 4),
(2, 3.00, 50, 4),
(3, 4.50, 33, 4),
(4, 3.00, 40, 5),
(5, 4.00, 51, 5),
(6, 5.00, 41, 5),
(7, 4.00, 57, 5),
(8, 4.00, 60, 6),
(9, 5.00, 60, 5),
(10, 3.50, 31, 5),
(11, 3.00, 37, 5),
(12, 4.00, 34, 5),
(13, 2.00, 31, 6);

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
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

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
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
