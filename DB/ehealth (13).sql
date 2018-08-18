-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 05:25 AM
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
(22, 'Amit', 'uploads/amit7.png', 'User', 'amit123@gmail.com', '$2y$10$NPc8NEgbt7ZyA8U5q5mqgOPelxNjxQfKVciIOjhz9QXdsZ8J1Evvy', 1, 0),
(23, 'ami', 'uploads/Adata1.jpg', 'User', 'ami@gmail.com', '$2y$10$nKb8Vj7fs.TC6oDjxHF1Yeokz4WEuLZNgd6CZs8Vgy/34r6HZWHIW', 1, 0),
(24, 'Saiful', 'uploads/Adata2.jpg', 'User', 'ami12@gmail.com', '$2y$10$ONmX9pc5ny8dgF83dL3qjODiNiyGEO8H7.kw4.5mrEpDMnQ8EMRwi', 1, 0),
(25, 'nayan', 'uploads/Adata3.jpg', 'User', 'nayan@gmail.com', '$2y$10$RtrnvTNk9/UYCMm/3FlYheY0SqtETxBz5skYhGIFDcU17S4zHSq6C', 1, 0),
(26, 'dd', 'uploads/amit8.png', 'User', 'dd@gmail.com', '$2y$10$oUsw.zF6wkbCUMxl4Kx5B.sZGMo1tcsGcLjOTZpWUf5lEeYgBfco.', 1, 0),
(27, 'mitun', 'uploads/doc72.jpg', 'User', 'mitun123@gmail.com', '$2y$10$pCho86Ibfk4hUTeuk2QypuXMIQeiKomJVVBmjT1b.zeI7GONvH3fG', 1, 0),
(30, 'Sadman', 'uploads/doc110.jpg', 'Doctor', 'sadman@gmail.com', '$2y$10$.jO94TMXQ/TCnTvnl3U/yeTzJxispBRVqp.VdZeRoLl/8vS0U/HM6', 1, 62),
(31, 'Mitun', 'uploads/doc29.jpg', 'Doctor', 'mitun@gmail.com', '$2y$10$uG0jgZGPkS2LQV7tNuyQZOX/uEMczcs68lB9o/PS0Ufd24fA6lniW', 1, 63),
(32, 'Imran', 'uploads/doc42.jpg', 'Doctor', 'imran@gmail.com', '$2y$10$JEsInSsbwns0EtD4/z/tlOmsFfKsOrWhMhJ/GAjzbm5HAdqR0gwAm', 1, 64),
(33, 'Fahim', 'uploads/doc54.jpg', 'Doctor', 'fahim@gmail.com', '$2y$10$NJvStp8i1tO1f58hJnpdX.L5zsJzfOqMV3uWJJobbgOAGYP5oPoQS', 1, 65),
(34, 'Sajjad', 'uploads/doc73.jpg', 'Doctor', 'sajjad@gmail.com', '$2y$10$Kdwm6IVFjCBgcjOFaJU4T.t7W8/AKcacgg5z4/xIbGUtxfGkS0hEe', 1, 66),
(35, 'Rakib', 'uploads/doctor7.jpg', 'Doctor', 'rakib@gmail.com', '$2y$10$w1Fo15YihBcspls9Q18/ae.0eMVWdPBcENhfZwOTstrwhuoMxtv0y', 1, 67),
(36, 'Julhas Nain', 'uploads/me5.jpg', 'Doctor', 'julhas@gmail.com', '$2y$10$.iPyu4WsV.3X0wZJZwR7Eu6GKtth1AZc5Bo04WtPF7pq7yxJbSs06', 1, 68),
(37, 'Shahbaz', 'uploads/doc8.jpg', 'Doctor', 'shabaz@gmail.com', '$2y$10$57QyVnTHRG0QBp00rAPCqudDlGPQV9MLv2HWqHdM/jAhcd6vqTBri', 1, 69),
(38, 'Irfan', 'uploads/doc9.jpg', 'Doctor', 'irfan@gmail.com', '$2y$10$hNFv.2ffZrpK5P4KJbecJuNs8S9048voNM3BqrzKXVr2MrUI2i9iO', 1, 70),
(39, 'Joy ', 'uploads/doc10.jpg', 'Doctor', 'joy@gmail.com', '$2y$10$bI.8iZXsreKnfZmk6sz52.wghrrwxEKe5Pav9/45vfaH6i1I2OVFO', 1, 71),
(40, 'Nishan', 'uploads/doc121.jpg', 'Doctor', 'nishan@gmail.com', '$2y$10$p/z2/DsYXzQxpxcqVszF0uoDUfvRxCPSL20cRTFRhVoqjLZ97.5a6', 1, 72),
(41, 'Mahmud', 'uploads/doc112.jpg', 'Doctor', 'mahmud@gmail.com', '$2y$10$m6m64WQgZPHHc3yKIwGYYeIJBEGv/cwBOUAqaNOblpZEsBjHDch9K', 1, 73),
(42, 'Sina', 'uploads/doc74.jpg', 'Doctor', 'sina@gmail.com', '$2y$10$xM2G6IaIG0.r.F.SzPJ2wu70Ddr636w0p7jQTTqo8GpY5YJvbH3AC', 1, 74),
(43, 'Raju', 'uploads/doc131.jpg', 'Doctor', 'raju@gmail.com', '$2y$10$WIslmBVekpOJeRdxHIS4qOrkxMYmgTUsipmTH1QJj1l3qrojO4Wyy', 1, 75),
(44, 'Sayem', 'uploads/doc141.jpg', 'Doctor', 'sayem@gmail.com', '$2y$10$4mnD1Kce0Frgf3jjFcyhoeWdpYdKiUxl7ve5eLij4ftc/jRLwXfKO', 1, 76),
(45, 'Amir ul Islam', '', 'Patient', 'amir@gmail.com', '$2y$10$SuOVnkDrVPqHKw8K.3DC4u.1ihrz5LzG/gH1rGPu.SiQn9VxKsyNK', 1, 8),
(46, 'Saiful Alam', '', 'Patient', 'saiful@gmail.com', '$2y$10$FiVQE.41XIhfHa3HEGzPce46W.YMcbvIYGsXDiGfFEv8oTGdDJTNG', 1, 9),
(47, 'sayeed', '', 'Patient', 'sayeed@gmail.com', '$2y$10$l/TyqzeRsalq1/eGRB3dIe/Ydlbf0BHBIx6SDiiEeYY84z3AkVHcm', 1, 10),
(48, 'demo', 'uploads/g8.jpg', 'User', 'demo@gmail.com', '$2y$10$.nm/iDspv0noFQfH1w5wLu0O/lvb6fO0gihk7diTdhAAZjaGfqxZW', 1, 0),
(49, 'tohidul', '', 'Patient', 'tohidul@gmail.com', '$2y$10$198Tz0FBYymRv6V3Gu.e4eRZGZ.1VhKlFM9wIGQnCwYCi6myJPqPm', 1, 11),
(50, 'Faisal', '', 'Patient', 'faisal@gmail.com', '$2y$10$irPB3WNF1YKIimBeGphf3uv.dkKyB1V6mY/o2O4skw6sHqk8ccmVy', 1, 12),
(51, 'M A Hasan', 'uploads/doc43.jpg', 'Doctor', 'mahasan@gmail.com', '$2y$10$jKFQZ63C0trOVtx0PBuZCO67mCDG0Ipwq3nkQAx1yN0jS403bJhyG', 1, 77),
(52, 'Tareq Iqbal', 'uploads/doc63.jpg', 'Doctor', 'tareq@gmail.com', '$2y$10$GztOyWac5kGrqLKV0PM6P.f//HJMw6lEgL1exiZmwvqjCivpoT66O', 1, 78),
(53, 'Didarul Alam', 'uploads/doc210.jpg', 'Doctor', 'didar@gmail.com', '$2y$10$IUb0NH2R4OT3RJBpqhF/m.Iog4gRLeKUmAYy/Mju3u1/cQ4gZlkv2', 1, 79),
(54, 'arman', '', 'Patient', 'arman@gmail.com', '$2y$10$7IUQoBQ8LFgPeg6QALEd8OmqeGwLDg/u62QhY39CWEgRxGk2vhi3O', 1, 13),
(55, 'Rudro', '', 'Patient', 'didar@gmail.com', '$2y$10$681WYM/.QGA3QsbUx0UwR.ZDccGknCNgAEEncpdS4Iesa4wK1lUE.', 1, 14),
(56, 'Rudro', '', 'Patient', 'rudro@gmail.com', '$2y$10$hwpDZuxpIY9pFT9m036R8.OTnpZyodBf9u4pkr1jtvTyGcsVOMcpW', 1, 15);

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
  `doc_fee` int(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `appointment_status` tinyint(3) NOT NULL DEFAULT '1',
  `payment_type` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `doc_id`, `patient_id`, `patient_name`, `phone_number`, `gender`, `doc_fee`, `appointment_date`, `appointment_time`, `appointment_status`, `payment_type`, `payment_status`) VALUES
(56, 64, 8, 'Amir ul Islam', '01687606755', '', 1200, '2018-07-24', '16:30:00', 0, 'cash_on_delivery', 'Pending'),
(57, 64, 8, 'Amir ul Islam', '01687606755', '', 1200, '2018-07-24', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(58, 64, 9, 'Saiful Alam', '01687606755', '', 1200, '2018-07-24', '17:30:00', 1, 'cash_on_delivery', 'Pending'),
(59, 70, 8, 'Amir ul Islam', '01687606755', '', 1000, '2018-07-24', '18:00:00', 1, 'ssl_commerz', 'Pending'),
(60, 69, 8, 'Amir ul Islam', '01687606755', '', 1000, '2018-08-28', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(61, 71, 8, 'Amir ul Islam', '01687606755', '', 1200, '2018-08-30', '17:30:00', 1, 'cash_on_delivery', 'Pending'),
(62, 68, 8, 'Amir ul Islam', '01687606755', '', 800, '2018-09-07', '18:00:00', 1, 'cash_on_delivery', 'Pending'),
(63, 65, 8, 'Amir ul Islam', '01687606755', '', 1200, '1970-01-01', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(64, 64, 9, 'Saiful Alam', '01687606755', '', 1200, '2018-07-28', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(65, 71, 9, 'Saiful Alam', '01687606755', '', 1200, '2018-07-16', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(66, 69, 10, 'sayeed', '01776758804', '', 1000, '2018-08-22', '17:00:00', 1, 'ssl_commerz', 'Pending'),
(67, 64, 10, 'sayeed', '01776758804', '', 1200, '2018-08-24', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(68, 71, 10, 'sayeed', '01776758804', '', 1200, '2018-08-20', '18:00:00', 1, 'cash_on_delivery', 'Pending'),
(69, 63, 11, 'tohidul', '01687606755', '', 1000, '2018-08-23', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(70, 67, 11, 'tohidul', '01687606755', '', 1000, '2018-08-24', '17:00:00', 1, 'ssl_commerz', 'Pending'),
(71, 72, 11, 'tohidul', '01687606755', '', 1200, '2018-08-17', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(72, 68, 12, 'Faisal', '01687606755', '', 800, '2018-07-24', '17:00:00', 0, 'cash_on_delivery', 'Pending'),
(74, 77, 11, 'tohidul', '01687606755', '', 1000, '2018-07-24', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(75, 77, 11, 'tohidul', '01687606755', '', 1000, '2018-08-29', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(76, 77, 11, 'tohidul', '01687606755', '', 1000, '2018-09-01', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(77, 78, 11, 'tohidul', '01687606755', '', 800, '2018-08-31', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(78, 79, 11, 'tohidul', '01687606755', '', 700, '2018-09-06', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(79, 67, 11, 'tohidul', '01687606755', '', 1000, '2018-09-08', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(80, 74, 11, 'tohidul', '01687606755', '', 1200, '2018-09-06', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(81, 62, 13, 'arman', '01687606755', '', 1200, '2018-09-07', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(82, 73, 13, 'arman', '01687606755', '', 1000, '2018-08-29', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(83, 77, 13, 'arman', '01687606755', '', 1000, '2018-09-05', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(84, 75, 13, 'arman', '01687606755', '', 1000, '2018-09-08', '17:00:00', 1, 'ssl_commerz', 'Pending'),
(85, 73, 13, 'arman', '01687606755', '', 1000, '2018-09-08', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(86, 66, 13, 'arman', '01687606755', '', 1000, '2018-08-25', '17:30:00', 1, 'cash_on_delivery', 'Pending'),
(87, 76, 13, 'arman', '01687606755', '', 1000, '2018-09-08', '18:00:00', 1, 'cash_on_delivery', 'Pending'),
(88, 69, 13, 'arman', '01687606755', '', 1000, '2018-09-07', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(89, 73, 15, 'Rudro', '01776758804', '', 1000, '2018-08-31', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(90, 76, 15, 'Rudro', '01776758804', '', 1000, '2018-10-27', '16:30:00', 1, 'cash_on_delivery', 'Pending'),
(91, 69, 15, 'Rudro', '01776758804', '', 1000, '2017-07-24', '17:30:00', 1, 'cash_on_delivery', 'Pending'),
(92, 69, 15, 'Rudro', '01776758804', '', 1000, '2017-07-24', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(93, 69, 15, 'Rudro', '01776758804', '', 1000, '2015-06-14', '17:00:00', 1, 'cash_on_delivery', 'Pending'),
(94, 69, 15, 'Rudro', '01776758804', '', 1000, '2015-06-14', '18:00:00', 1, 'cash_on_delivery', 'Pending'),
(95, 69, 15, 'Rudro', '01776758804', '', 1000, '1970-01-01', '06:00:00', 1, 'cash_on_delivery', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` text NOT NULL,
  `blog_desc` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `blog_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_view` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `blog_status` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_image`, `blog_desc`, `admin_id`, `blog_date`, `blog_view`, `blog_status`) VALUES
(1, 'Health', 'uploads/bbb.jpg', 'The concept of healthy living has evolved from a laser focus on fitness and nutrition into a mentality about holistic health.\r\n\r\nFrom mental health, to family and work life, living a healthy life is multifaceted. And the key is often balancing it all. Finding that balance can be tricky… and the overwhelming amount of advice on the web doesn’t necessarily make it any easier.\r\n\r\nIn compiling our list of the best healthy living blogs, we looked for the bloggers who are leading by example. Healthy living isn’t always easy. But knowing that you have role models and supportive communities to lift you up when you’re ready to throw in the towel can make all the difference.\r\n\r\nHealthy. Happy. Life.\r\nThe driving force behind Kathy Patalsky’s bright and inviting blog is to inspire you to try plant-based foods and to show some love to your body and soul. The vegan author and blogger shares delectable recipes that would inspire anyone to give the vegan lifestyle a chance. Visit the blog.\r\n\r\nMommypotamus\r\nTraditional wisdom and modern research are the pillars of Heather’s blog. She shares her passion for nourishing her family in every way she can. That includes using evidence-based research to guide her choices with food, natural remedies, homemade beauty, and cleaning products. Recent posts include which natural cleaning products to buy and how to DIY them yourself, a recipe for no-bake peanut butter bites, and natural remedies for allergy relief. Visit the blog.\r\n\r\nMyFitnessPal Blog\r\nYou may have used this popular app to track your food intake and exercise. Trust us, the blog is just as useful. From recipes and workout suggestions, to inspiring member stories, the content is varied, relevant, and worth checking out. Visit the blog.\r\n\r\nSarah Wilson\r\nThe New York Times best-selling author made her name with IQuitSugar.com, Australia’s biggest digital wellness site, where she helped 1.5 million people break their sugar habit. On her blog, Sarah writes compelling posts about everything from anxiety and food waste, to autoimmune disorder, toxin-free living, and “cool loneliness.” Visit the blog.\r\n\r\nPeanut Butter Fingers\r\nWhat started as a way to share recipes and exercise tips with Julie Fagan’s friends and family, evolved into a blog that’s loved and read by thousands. Julie’s (mostly) healthy approach to living a balanced life allows room for her favorite indulgences like a peanut butter finger now and then. That makes her posts all the more relatable. Visit the blog.\r\n\r\nFit Bottomed Girls\r\nRunning on the firm belief that fit bottoms come in all shapes and sizes, it’s no surprise that Fit Bottomed Girls (a pioneer in the body positive movement) has become an online phenomenon. Millions of people flock here for no-diet tips on living healthfully, finding the best workout gear, and to get inspiration from the success stories of fellow community members. Visit the blog.\r\n\r\nHappy Fit Mama\r\nIf anyone can be described as a healthy living expert, it’s Angela. This happy, fit mama is a clinical exercise physiologist and RRCA running coach. Or as she calls it, a “fitness junkie.” She shares her expertise on her blog. When she’s not running, practicing yoga, and working out (and posting about it), you’ll find her in the kitchen. There, she likes to whip up healthy recipes for her family. Visit the blog.\r\n\r\nDelish Knowledge\r\nA registered dietitian, yoga teacher, and self-proclaimed avocado lover, Alex Caspero leads by example on her blog. She’s a firm believer in the notion that developing nutritious eating habits is best maintained by introducing healthy, delicious foods creatively. That’s exactly what she’s doing. Come for the drool-worthy photos, stay for the incredible vegetarian recipes. Visit the blog.\r\n\r\nToby Amidor Nutrition\r\nWith over 18 years of experience, Toby Amidor is a nutrition expert. She’s often featured on television for her knowledgeable, approachable manner. Her blog content is no different, covering topics like food safety, heart health, farm-to-table, kids, recipes, weight loss, and more. For practical, straightforward information on all areas of wellness, Toby’s blog and website are a valuable resource. Visit the blog.\r\n\r\nWeighty Matters\r\nSince 2005, Yoni Freedhoff has been calling out what he dubs the “corporate advertising, ridiculous public policies, and the general ne’er-do-wells of Big Food, nutrition, and obesity.” The Ottawa doctor and co-owner of Bariatric Medical Institute, a nonsurgical weight loss center, is amusingly unforgiving in his acerbic reviews of current trends and practices in the fitness and nutrition world. Visit the blog.\r\n\r\nHealthy Living Blogs\r\nCollaboration and community are the big ideas at Healthy Living Blogs, which was designed to enhance the already supportive community of the healthy living blogosphere. The site welcomes all blogs, with just one caveat — every blog featured here has to focus on health. You’ll find new blogs and new inspiration on this simple site, with a handy directory that also makes it easy to find local support. Visit the blog.\r\n\r\nNaturally Savvy\r\nIf you’ve ever felt overwhelmed by all the contradictory health information out there, Naturally Savvy is for you. From addressing common healthy living questions (e.g., Can intermittent fasting slow aging?) to sharing healthy recipes, personal and home care tips, and much more, this blog covers it all. Visit the blog.\r\n\r\nThe Healthy Maven\r\nHelping women live healthfully, instead of living for their health, is the cornerstone for the Healthy Maven. Davida doesn’t describe herself as the average wellness junkie. She’s more likely to focus on quality over quantity when it comes to a life well-lived. As the wellness landscape continues to evolve, Davida is here with tons of great recipes, workouts, and healthy living tips, all designed to help you become your own health advocate. Visit the blog.\r\n\r\nFitful Focus\r\nA personal challenge to live a healthier life about six years ago turned Nicole into a NASM-certified personal trainer on a mission to spread the fitness love. Her approach to healthy living is on the holistic side. She’s as passionate about good food as she is about breaking a sweat. Follow along for new ways to get fit, keep your belly full of good food, and stay focused on healthy living. Visit the blog.\r\n\r\nBites of Wellness\r\nSam is a nutrition coach and personal trainer. On the blog, she shows you how to tackle health and wellness one bite at a time. She owns a healthy catering company and a women’s-focused gym, but her blog is a way for her to reach and help as many women as possible. From healthy, wholesome recipes that come together in under 30 minutes, to workouts, nutrition, and fitness courses, there’s a lot to like. Visit the blog.\r\n\r\nHealthy Set Go by Allina Health\r\nHealthy, set, go! The Allina Health blog features current health news, recipes, exercises, preventive care, and so much more. The site is intuitive and organized. That makes it easy to find specific information or learn something new. Visit the blog.\r\n\r\n\r\nJessica has been a writer and editor for over 10 years. Following the birth of her first son, she left her advertising job to begin freelancing. Today, she writes, edits, and consults for a great group of steady and growing clients as a work-at-home mom of four, squeezing in a side gig as a fitness co-director for a martial arts academy. Between her busy home life and mix of clients from varied industries — like stand-up paddleboarding, energy bars, industrial real estate, and more — Jessica never gets bored.\r\n\r\nWritten by Jessica Timmons on April 18, 2018\r\nrelated stories\r\n', 1, '2018-08-06 15:57:49', 99, NULL),
(2, 'হেপাটাইটিস এ কি? হেপাটাইটিস এ এর লক্ষন ও চিকিৎসা', 'uploads/bbb1.jpg', 'হেপাটাইটিস এ হল হেপাটাইটিস ‘এ’ ভাইরাসের সংক্রমনে সৃষ্ট একটি তীব্রসংক্রামক রোগ যা প্রদাহ সৃষ্টি করে যকৃতের স্বাভাবিক কার্যক্ষমতায় ব্যাঘাত ঘটায়। পাঁচটি পরিচিত হেপাটাইটিস (এ, বি, সি, ডি, ও ই) ভাইরাসের মধ্যে এটি অন্যতম। শিশু কিংবা বড় যে কারোরই এই রোগ হতে পারে। হেপাটাইটিস এ ভাইরাসের সংক্রমনে অনেক ক্ষেত্রে কোন উপসর্গই দেখা যায় না বিশেষ করে শিশুদের ক্ষেত্রে। আবার কিছু কিছু ক্ষেত্রে কিছু উপসর্গ দেখা যায়।\r\n\r\nসাধারনত সংক্রমণ এবং উপসর্গের মধ্যে দুই থেকে ছয় সপ্তাহের ব্যবধান থাকে এবং উপসর্গ দেখা দেওয়ার পর মোটামুটিভাবে আট সপ্তাহ স্থায়ী হয়। উপসর্গসমূহের মধ্যে উল্লেখযোগ্য হচ্ছে জ্বর, তলপেটে ব্যথা, বমি বমি ভাব বা বমি, উদরাময়, ত্বক হলুদ হয়ে যাওয়া ইত্যাদি। আবার কিছু ক্ষেত্রে, প্রাথমিক সংক্রমণের পরবর্তী ছয় মাস সময়ে উপসর্গসমূহ আবার ফিরে আসতে পারে। মৃদু বা হাল্কা হেপাটাইটিস এ এর ক্ষেত্রে তেমন কোন চিকিৎসার প্রয়োজন নেই। সাধারনত এই রোগে যারা আক্রান্ত হন, তারা কোন রকম যকৃতের ক্ষতি ছাড়াই বেশিরভাগ ক্ষেত্রে সু্‌স্থ হয়ে ওঠেন। কিছু ক্ষেত্রে যকৃতের তীব্র বিকলতা হতে পারে বিশেষ করে প্রবীণ মানুষদের ক্ষেত্রে। দূষিত খাবার ও পানি গ্রহণ এবং আক্রান্ত ব্যক্তি সংস্পর্শে আসলে এই রোগ হতে পারে।\r\n\r\nকিভাবে ছড়ায়\r\nএটা সাধারণত সংক্রামিত মল দ্বারা দূষিত খাবার বা পানি পানের মাধ্যমে ছড়াতে পারে। আবার আক্রান্ত ব্যক্তির রান্না করা বা পরিবেশন করা খাবার খেলে, মারাত্মকভাবে হেপাটাইটিস ‘এ’ আক্রান্ত এলাকায় বসবাস বা ভ্রমণ করলে, হেপাটাইটিস ‘এ’ আক্রান্ত কোন ব্যক্তির রক্ত গ্রহণ করলে, ধূমপান বা যেকোনো মাদক সেবন করলে কিংবা সংক্রামিত ব্যক্তির সঙ্গে ঘনিষ্ঠ সম্পর্ক বা স্পর্শের মাধ্যমেও এটা ছড়াতে পারে।\r\n\r\nহেপাটাইটিস এ এর উপসর্গ\r\nঅনেক ক্ষেত্রে এ ভাইরাসে আক্রান্ত হলেও কোন উপসর্গই দেখা যায় না, বিশেষ করে শিশুদের ক্ষেত্রে। আবার শিশুরা সংক্রমিত হলে বেসিরভাগ ক্ষেত্রেই তাদের মধ্যে কোনো উপসর্গ দেখা যায় না, কিন্তু তাদের থেকে অন্যদের সংক্রমণ হতে পারে। সাধারনত হেপাটাইটিস এ ভাইরাস দ্বারা আক্রান্ত হবার এক মাস পর পর্যন্ত এর কোন লক্ষণ বা উপসর্গ দেখা যায় না। যদি উপসর্গ দেখা যায়, তখন সেগুলো মোটামুটি আট সপ্তাহ স্থায়ী হয়। উপসর্গসমূহ হল অবসাদ অনুভব করা, বমি বমি ভাব হওয়া বা বমি করা, উদরাময়, ত্বক এবং চোখ হলুদ হয়ে যাওয়া, তলপেটে ব্যথা, ক্ষুদা মন্দা, জ্বর, মাংসপেশীতে ব্যথা, চুলকানি, গাঢ় রংয়ের প্রস্রাব ইত্যাদি।\r\n\r\nপ্রয়োজনীয় পরীক্ষা নিরীক্ষা\r\nযেহেতু হেপাটাইটিস এ এর উপসর্গগুলো অন্যান্য অনেক রোগের উপসর্গসমূহের অনুরূপ, তাই রোগ নির্ণয়ের জন্য রক্ত পরীক্ষার প্রয়োজন হয়ে থাকে।\r\n\r\nচিকিৎসা\r\nশিশুদের ক্ষেত্রে এটা সাধারনভাবে তেমন বিপজ্জনক নয়। একবার সংক্রমণ হওয়ার পরে একজন মানুষের মধ্যে তার অবশিষ্ট জীবনের জন্য এই রোগ প্রতিরোধের ক্ষমতা তৈরি হয়ে যায়।এর কোনো সুনির্দিষ্ট চিকিৎসা পদ্ধতি নেই। চিকিৎসক প্রয়োজন মনে করলে বমি বমি ভাব বা উদরাময়ের জন্য বিশ্রাম ও ওষুধের পরামর্শ দিতে পারেন। সাধারনভাবে এই রোগ সম্পূর্ণরূপে সেরে যায় এবং যকৃতের কোন সমস্যা থাকে না। কিছু ক্ষেত্রে বিশেষ করে বয়স্কদের ক্ষেত্রে যকৃতের চরম বিকলতা ঘটলে, যকৃত প্রতিস্থাপনের মাধ্যমে তার চিকিৎসা করা হয়ে থাকে।\r\n\r\nযেহেতু হেপাটাইটিস ‘এ’র কোন নির্দিষ্ট চিকিৎসা নেই। তাই, হেপাটাইটিস ‘এ’ আক্রান্ত রোগীকে চিকিৎসকেরা কিছু ব্যাপারে সতর্ক থাকতে বলেন। যেমন-\r\n\r\nপর্যাপ্ত পরিমাণে বিশ্রাম নিতে হবে।\r\nপানি ভালভাবে ফুটিয়ে ঠাণ্ডা করে পান করতে হবে।\r\nপ্রচুর পরিমানে পানি বা তরল খাবার গ্রহন করতে হবে।\r\nবমি বমি ভাবের ফলে কোন কিছু খেতে ইচ্ছে না করলে, সারাদিন অল্প অল্প করে হালকা ও সহজে হজম হয় এমন খাবার খেতে হবে।\r\nধূমপান, অ্যালকোহল বা অন্য যেকোন মাদক বর্জন করতে হবে।\r\nপুষ্টিকর খাবার গ্রহন করতে হবে। নিয়মিত সুষম খাদ্য যেমন- শাক-সবজি ও ফলমূল খেতে হবে এবং পর্যাপ্ত পরিমাণে ঘুমাতে হবে।\r\nখাবার রান্নার সময় ভালো করে সিদ্ধ করতে হবে।\r\nবাসী বা পঁচা খাবার খাওয়া যাবে না।\r\nহোটেলের খাবার না খাওয়াই ভাল।\r\nরান্নার আগে হাত ভালভাবে ধুতে হবে।\r\nখাওয়ার আগে ও পায়খানা ব্যবহারের পর হাত ভালভাবে সাবান দিয়ে ভালভাবে ধুতে হবে।\r\nআক্রান্ত ব্যক্তিকে রান্না করা বা রান্না পরিবেশন থেকে বিরত থাকতে হবে।\r\nচিকিৎসকের পরামর্শ অনুযায়ী ঔষধ সেবনের পাশাপাশি তার সাথে নিয়মিত যোগাযোগ রক্ষা করতে হবে।\r\nহেপাটাইটিস এ প্রতিরোধে করনীয়\r\n\r\nবারে বারে হাত ভালোমত পরিষ্কার করতে হবে।\r\nখাবার যথাযথভাবে রান্না করা।\r\nহেপাটাইটিস ‘এ’ প্রতিরোধে হেপাটাইটিস ‘এ’ এর ভ্যাকসিন নিতে হবে।\r\nমারাত্মকভাবে হেপাটাইটিস ‘এ’ আক্রান্ত এলাকায় ভ্রমন বা বসবাসের ক্ষেত্রে অত্যন্ত সতর্ক হতে হবে।\r\nকাচা ফল, সবজি এবং অন্যান্য খাবার ভাল করে ধুয়ে জীবাণুমুক্ত করে খেতে হবে।\r\nঅবশ্যই বিশুদ্ধ পানি পান করতে হবে এবং খাবার সবসময় গরম করে খেতে হবে।\r\nআক্রান্ত ব্যক্তির রান্না বা পরিবেশন করা খাবার খাওয়া যাবে না।\r\nআক্রান্ত ব্যক্তির সংস্পর্শে থাকা বা তার সাথে শারীরিক সম্পর্ক করা যাবে না।\r\nকোন কারনে রক্ত গ্রহনের প্রয়োজন হলে ভালভাবে দাতার রক্ত পরীক্ষা করে নিতে হবে।\r\nধূমপান, অ্যালকোহল বা যেকোনো ধরনের মাদক বর্জন করতে হবে।\r\nহেপাটাইটিস এ এর টিকা\r\nহেপাটাইটিস ‘এ’ প্রতিরোধে হেপাটাইটিস এ টিকা বেশ কার্যকর। একবার এই টিকা নিলে এটা সারা জীবনের জন্য কার্যকর থাকে। কিছু দেশে শিশুদের জন্য এবং যাদের আগে এই টিকা দেওয়া হয়নি এমন মানুষদের জন্য এটা নিয়মিতভাবে সুপারিশ করা হয়।\r\n\r\nহেপাটাইটিস ‘এ’ এর সংক্রমনে জটিলতা\r\nঅনেক ক্ষেত্রেই এ রোগ একা একাই ভাল হয়ে যায়। আবার কোন কোন রোগীর ক্ষেত্রে হেপাটাইটিস ‘এ’র লক্ষণ বা উপসর্গ স্বাভাবিক মাত্রার চেয়েও অনেক বেশী স্থায়ী হয় কিংবা লক্ষণ বা উপসর্গ ভালো হয়ে যাওয়ার পরও তা আবার ফিরে আসে। কিছু ক্ষেত্রে যকৃতের কার্যক্ষমতা হ্রাস পায় বা যকৃত অকার্যকর হয়ে পড়তে পারে, বিশেষ করে বয়স্কদের ক্ষেত্রে।\r\n\r\nসবশেষে\r\nহেপাটাইটিস ‘এ’ এর সংক্রমনের ঘটনা অনেক হলেও বেশিরভাগ ক্ষেত্রেই কোন উপসর্গ দেখা যায় না। অনেক ক্ষেত্রেই রোগী একা একাই সুস্থ্য হয়ে যায়। এ রোগে একবার আক্রান্ত হলে শরীরে এই রোগের প্রতিরোধ ক্ষমতা তৈরি হয়। উন্নয়নশীল দেশের অনেক শিশুই ১০ বছরের কম বয়সেই এই ভাইরাসের সংক্রমণের শিকার হয়, আবার একা একা সুস্থ্যও হয়ে যায়। হেপাটাইটিস ‘এ’ এর টিকা নিলে সারা জীবনের জন্য এটা এই ভাইরাস থেকে সুরক্ষা দেয়। তাই শিশু ও যারা এই ভাইরাসের টিকা নেননি, তারা এই টিকা নিয়ে এই ভাইরাস থেকে সুরক্ষিত থাকতে পারেন। হেপাটাইটিস সম্পর্কে সচেতনতা বৃদ্ধির জন্য প্রতি বছর ২৮ জুলাই তারিখে বিশ্ব হেপাটাইটিস দিবস পালিত হয়।', 1, '2018-08-06 16:02:37', 73, NULL),
(3, 'ফ্যান্টম পেইন – এক অবাস্তব পেইন', 'uploads/pexels-photo-1288484.jpeg', 'ফ্যান্টম পেইন এমন এক ধরনের ব্যথা যা মানুষ শরীরের সেই অংশে অনুভব করে, যা তার শরীরে নেই। ধরুন কারো পা বা হাত কেটে ফেলা হলো, পরবর্তিতে যখন তার হাত বা পা নেই, তখন যদি তার সেই অংশে ব্যথা অনুভূত হয়, তাকেই ফ্যান্টম পেইন বলে।\r\n\r\n \r\n\r\nপ্রশ্ন হচ্ছে এই ব্যথা কি আসলেই ব্যথা নাকি কোনো সাইকোলজিক্যাল ডিসঅর্ডার?\r\n\r\nকিছু দিন আগ পর্যন্ত ও ফ্যান্টম পেইনকে সাইকোলজিক্যাল সমস্যা হিসেবেই গন্য করা হতো, আর এর পিছনে লজিক্যাল কারন ও ছিলো, যেই অংশই শরীরে নেই, সেখানে ব্যথা হওয়াটাতো স্বাভাবিক কোনো বহিঃপ্রকাশ হতে পারেনা।\r\n\r\n \r\n\r\nকিন্তু মেডিকেল সাইন্স এভার চেঞ্জিং – প্রতিদিনই কোনো না কোনো দিক থেকে এগিয়ে যাচ্ছে এটা। ব্যপারটা এমনযে আজ মেডিকেল সাইন্সের জন্য যেটা চিকিৎসা হয়তো কিছুদিন পর সেটা ঐ রোগের জন্য অপচিকিৎসা।\r\n\r\n \r\n\r\nফ্যান্টম পেইন এর ক্ষেত্রেও তেমনটাই দেখা গেলো, রিসার্চে করে দেখা গেলো যখন রোগীরা ব্যথা কমপ্লেইন করে তখন তাদের ব্রেন-এ (ব্রেন এর যে অংশে শরীরের সেই পার্ট রিপ্রেসেন্ট করে) ঠিক ই নার্ভ স্টিমুলাস দেখা যায়, অর্থাৎ এই ফ্যান্টম পেইন নিছকই কোনো মানসিক ভারসাম্যহীনতা নয়, বরং বাস্তব সম্মত ব্যথা।\r\n\r\n \r\n\r\nসে জন্য প্রথম দিকে এন্টি সাইকোটিক ঔষধ এর চিকিৎসা তে ব্যবহার করা হলেও বর্তমানে প্রধানত ট্রাডিশানাল পেইন কিলার দিয়ে ই এর চিকিৎসা করা হয়। শুধু তাই নয়, বর্তমানে আরো অনেক ইন্টারেস্টিং চিকিৎসা পদ্ধতির উপরও রিসার্চ চলছে, যার একটি ম্যাজিক মিরর বা যাদুর আয়না।\r\n\r\n \r\n\r\nজ্বী ঠিকই পড়ছেন, এটা আমাদের রূপকথার যাদুর আয়না নয়, বরং এডভান্সড মেডিকেল রিসার্চ এর ফলাফল এই যাদুর আয়না।\r\n\r\n \r\n\r\nম্যাজিক মিরর এক মজার স্ক্রিন, যার সামনে কোনো এমপ্যুটি (যার শরীরের কোনো একটি পার্ট, হাত বা পা নেই) দাড়ালে স্ক্রিনে সে নিজের শরীরের না থাকা পার্ট দেখতে পায়, এবং এক দিকের সাথে কো অর্ডিনেশান করে সে তার না থাকা অংশের মুভমেন্ট ও দেখতে পায় এবং ফ্যান্টম পেইন এর চিকিৎসা তে এই ম্যাজিক মিরর চমৎকার ভূমিকা পালন করছে।', 1, '2018-08-10 03:31:07', 104, NULL),
(5, 'ঈদের আনন্দের সাথে চাই স্বাস্থ্যকর খাবার', 'uploads/pexels-photo-1268551_(2).jpeg', 'ঈদ মানে আনন্দ, ঈদ মানে একমাস রোজা রাখার পর সবাই একসাথে আনন্দ সুখ ভাগাভাগি করে সুন্দর জামা-কাপড়ে ঘুরাঘুরি আর ভালো খাওয়া দাওয়া। তবে ঈদ এর দিনটাতে সকলের সাথে আনন্দ ভাগাভাগি করার পাশাপাশি শারীরিক সুস্থতার দিকে খেয়াল রাখাটাও খুবই জরুরী।\r\n\r\nএকমাস টানা রোজা রাখায় স্বাভাবিক ভাবেই আপনার খাবারের সময় সূচিতে পরিবর্তন হয়েছে। কিন্তু রোজা শেষে এই ঈদ এর দিন থেকে তা আবার পাল্টে যাবে। তাই প্রথমেই যে ব্যপারটা মনে রাখতে হবে আপনি কখন কোন খাবারটা ঠিক কি পরিমান খাবেন। নয়ত হঠাৎ করে খুব আয়োজন করে পরিমানের অধিক খাবার আপনার দ্রুত অসুস্থ হয়ে যাওয়ার কারন হতে পারে।\r\n\r\nঈদ এ আপনার সুস্থতা ও একটি স্বাস্থ্যকর খাবার তালিকা নিয়েই আজকের এই আর্টিকেল সাজানো হয়েছে।  সুস্থ থাকুন, আনন্দময় হয় আপনার ঈদ।\r\n\r\n \r\n\r\nঈদের সকালে যা খাবেন...\r\n\r\nঈদের দিনের সকালের খাবারটা অবশ্যই ভেবে চিন্তে শুরু করবেন। কারন বিগত ৩০দিন ধরে এই সময় টায় আপনার খাওয়ার অভ্যাস ছিলোনা। তাই হালকা নাস্তা দিয়ে শুরু করুন। সবুজ সবজি দিয়ে তেল ছাড়া রুটি খুব ভালো একটি খাবার। আবার মিষ্টি জাতিও খাবার পছন্দ থাকলে আপনি দুধ বা দুধের তৈরি সেমাই পুডিং বা কাস্টার্ড, মিষ্টি ফল যেমন কলা,আম ইত্যাদি খেয়ে সকাল টা শুরু করতে পারেন। যারা সকালের নাস্তায় চা পছন্দ করেন তারা কফি বা দুধ চায়ের বদলে গ্রিন টি খেলে ভালো। অতিরিক্ত তেলের অবশ্যই কিছু খাবেন না। নতুবা আপানর এসিডিটি, বুক জালাপোড়া, পাতলা পায়খানা, বদহজম বা বমি হতে পারে।\r\n\r\n \r\n\r\nঈদের দুপুরে যা খাবেন...\r\n\r\nঈদের দুপুরে একটু ভারি খাবারে টেবিল সাজানো হবে সেটাই স্বাভাবিক। অনেকদিন পর সবাই মিলে দুপুরে খুব হৈচৈ করে খেতে বসায় পরিমানের বেশিই খাওয়া হয়ে যায়। সে খাবার যদি স্বাস্থ্যকর হয় তাহলে কোন সমস্যা নেই। খাবারে কার্বোহাইড্রেট এর চাহিদা হিসেবে খিচুরি, বিরিয়ানি বা পলাও রাখতে পারেন। মুরগী বা গরুর মাংশের পাশাপাশি মাছের কিছু আইটেম রাখতে পারেন। যেমন মাছের কোরমা, মাছের কোপতা, কাটলেট ইত্যাদি। এগুলো খেতেও সুস্বাদু আবার সাস্থের জন্যও উপকারি। যে খাবার ই তৈরি করা হওকনা কেন,অতিরিক্ত তেল বা ঘি ব্যবহার থেকে বিরত থাকুন। কারন এই অতিরিক্ত তেল বা ঘি দিয়ে তৈরি খাবার, কার্বনেটেড পানিও আপানর পাকস্থলীতে অম্লত্ব বাড়িয়ে দিবে যার কারনে বমি হতে পারে। তবে খাওয়া দাওয়ার পর টক দই আপানর অনেকটাই স্বস্থি নিয়ে আসবে। \r\n\r\n \r\n\r\nঈদের দিন রাতে যা খাবেন...\r\n\r\nসারাদিনের অনিয়মিত ভারি খাবারের পর আপানকে অবশ্যই রাতের খাবারে বাড়তি সতর্ক থাকতে হবে। হালকা খাবার বেছে নিন। রুটি সাথে কাবাব,সাদা ভাত এর সাথে পাতলা কোন তরকারি এগুলো দরকার আপানার রাতের খাবার তালিকায়। তবে রাতে খাবার পর একটু হেঁটে নেয়াটা জরুরী। এবং খাওয়ার আধাঘণ্টা পর পানি পান করুন।\r\n\r\n \r\n\r\nবাড়তি কিছু সতর্কতা...\r\n\r\n*** খাবার তৈরিতে সয়াবিন তেল বা ঘি এর পরিবর্তে উদ্ভিজ তেল ব্যবহার করুন।\r\n\r\n*** সালাদ এর উপকরন হিসেবে শশা,টমেটো, কাচা পেঁপে, মুলা ইত্যাদি বেছে নিন।\r\n\r\n*** সারাদিনে নানান রকম কোল্ড ড্রিঙ্কস এর পরিবর্তে ফলের রস, লেবুর শরবত, জিরা পানি, বোরহানি, লাচ্ছি ইত্যাদি পান করুন।\r\n\r\n*** খাবারের মাঝে পানি পান করা থেকে বিরত থাকুক। খাবারের অন্তত ৩০মিন পর পানি পান করুন।\r\n\r\n*** সালাদে নানান রকম ক্রিম, কালার, মেওনিজ, টেস্টিং সল্ট এর পরিবর্তে মধু লবণ চিনি গোলমরিচ সরিষা বাটা লেবুর রস টক দই ইত্যাদি ব্যবহার করুন।', 1, '2018-08-15 14:07:28', 23, NULL),
(6, 'szgagsd', 'uploads/125.jpg', 'adsgz', 1, '2018-08-15 14:10:09', 5, NULL),
(7, 'কুরবানির ঈদে স্বাস্থ্যকর খাবার', 'uploads/pexels-photo-769289.jpeg', 'দিন পেরিয়ে রাত গড়ালেই কাল পবিত্র ঈদ-উল-আযহা, যার অপর নাম কোরবানির ঈদ। ঈদ মানে আনন্দ, ঈদ মানে খুশি, ঈদ মানে ঘোরাফেরা, সাথে খাওয়া-দাওয়া। আর কোরবানি ঈদের অন্যান্য খাবারের সঙ্গে মূল আয়োজন হল মাংসের বিভিন্ন আইটেম। অবশ্যই মাংস খাবেন, কিন্তু চাই পরিমিতি জ্ঞান ও সংযম। চাই স্বাস্থ্য সচেতনতা।\r\n\r\n#    মনে রাখবেন, কোনও অবস্থাতেই দৈনিক খাদ্যতালিকায় চর্বি জাতীয় খাদ্য যেন ৩০ শতাংশের বেশি না হয়। মাংস ভালভাবে সিদ্ধ করে রান্না করবেন। নয়তো কৃমি সংক্রমণের ঝুঁকি থাকে। মনে রাখবেন, অল্প তাপে বেশি সময় ঢেকে মাংস রান্না করলে ভিটামিন ডি সংরক্ষিত থাকে।\r\n\r\n#    বেকড রান্না অনেক বেশি স্বাস্থ্য সম্মত। কাবাবের একটা সুবিধা হচ্ছে ঝলসানোর কারণে রান্না মাংসের থেকে কাবাবে চর্বির পরিমাণ কমে যায়। তবে খেয়াল রাখবেন কাবাবের মাংস যেনও আধা-সেদ্ধ না থাকে, না হলে ফিতা কৃমি হওয়ার ভয় থেকে যায়।এছাড়া কাবাবের সাথে নান-রুটি, পরোটা পরিহার করাই ভালো। পরিবর্তে কাবাবের সাথে এক প্লেট ফ্রেশ সালাদ হতে পারে একটি চমৎকার কম্বিনেশন।\r\n\r\n#    খাবার পরে কোল্ড ড্রিঙ্কের বদলে দই নিয়ে আসুন। সাথে রাখুন ঘরে তৈরি বোরহানি, লাবাং, মাঠা ইত্যাদি স্বাস্থ্যকর পানীয়। মাংস খাওয়া শেষে দই খাবেন। দই  প্রবায়োটিকসের খুব ভাল উৎস, শুধু তাই নয়, ভুড়ি ভোজের পরে টক বা মিষ্টি দই খেলে সেদিনের মতো গ্যাস্ট্রিকের সমস্যা থেকেও মুক্তি পাওয়া যায়।\r\n\r\n#    কোষ্ঠকাঠিন্য ঈদের সময়ের আরেকটি  সাধারণ সমস্যা। এক্ষেত্রে ঈদের আগের রাতে বা ঈদের সকালে ইসবগুলের ভুষি পানিতে মিশিয়ে খেয়ে নিতে পারেন। এর সাথে প্রচুর পানি পান করে নেবেন। ঈদের দিন দুপুর ও রাতে অবশ্যই সবজির একটি পদ রাখবেন। আর সব খাবারের ফাঁকেফাঁকে পানি বা অন্যান্য স্বাস্থ্যকর পানীয় পান করতে ভুলবেন না।\r\n\r\n#    যাদের ইউরিক এসিড বেশি কিংবা যারা কিডনি রোগে আক্রান্ত, তারা অবশ্যই একজন চিকিৎসকের  পরামর্শ অনুযায়ী মাংস খাবেন। এছাড়া যারা উচ্চ রক্তচাপ,হৃদরোগ কিংবা ডায়াবেটিসে ভুগছেন, তারা অবশ্যই পরিমানমত খাবেন। অতিরিক্ত তেলমশলা এড়িয়ে যাবেন। পোলাও/ বিরিয়ানি যে কোনো একটি একবেলা খাবেন; মগজ/কলিজা এড়িয়ে যাওয়া ভাল; খাবারের সাথে সালাদ, টক দই , লেবু খাবেন। দিনের কোন একসময় অবশ্যই ৩০মি হেঁটে নিবেন। অবশ্যই ঈদের পরদিন থেকে স্বাভাবিক খাবারে ফেরত আসবেন।\r\n\r\n#    যারা নিয়মিত ঔষধ সেবন করছেন, উৎসব-আনন্দে তাদের ঔষধ সেবন যেন বাদ না পড়ে সে ব্যাপারে সতর্ক থাকুন।\r\n\r\n#    অবশ্যই স্বাস্থ্য সম্মত উপায়ে মাংস সংরক্ষণ করুন। মনে রাখবেন, পানি বিশেষ করে রক্ত ঝরানোটা খুব  প্রয়োজন। নয়ত ফ্রিজের ঠাণ্ডায় মাংসের ভিতরে তা জমে বরফ হয়ে যায়, এতে  করে মাংসের পুষ্টি মান কমে যায়, এমনকি স্বাদ ও নষ্ট হয়।ফ্রিজিং এবং থ’ য়িং এর বাজে প্রভাব এড়াতে মাংস ছোট ছোট প্যাকেট করে ফ্রিজিং করুন। এভাবে সংরক্ষণ করলে মাংসের প্রোটিন, আয়রন  ও ফসফরাস সংরক্ষিত থাকে।\r\n\r\nসব ধরনের স্বাস্থ্য সমস্যা এড়িয়ে পুষ্টিসমৃদ্ধ পরিমিত মজাদার খাবারের সাথে সবার ঈদ হয়ে উঠুক আনন্দময়; সবাই ভালো থাকুন, সুস্থ থাকুন।', 32, '2018-08-15 16:19:06', 4, NULL),
(8, 'Julhas', 'uploads/Digital_Therapy_Machine.jpg', 'gzf', 36, '2018-08-15 17:37:18', 3, NULL);

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
(1, 'Nephrology', 'Medicine', 1),
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
  `doc_bmdc` int(20) NOT NULL,
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

INSERT INTO `tbl_doctor` (`doc_id`, `hospital_id`, `doc_name`, `doc_image`, `doc_email`, `doc_password`, `doc_mobile_no`, `doc_qualification`, `doc_designation`, `doc_bmdc`, `doc_category`, `symptoms`, `disease`, `doc_birth_date`, `doc_join_date`, `doc_chamber`, `doc_fee`, `doc_status`) VALUES
(62, 19, 'Sadman', 'uploads/doc110.jpg', 'sadman@gmail.com', '$2y$10$XN55TDHLQAeL3gCJAbGbvOTOuNsgvlbX.hGBFEBqwCLS.J2KzVFo6', '01672412645', 'MBBS', 'Associate Professor', 50114444, '1', 'Foamy urine,Fatigue,Loss of appetite', 'Chronic kidney disease,Uremia', '1989-01-11', '2016-06-27', 'Chwakbazar', 1200, 1),
(63, 20, 'Mitun', 'uploads/doc29.jpg', 'mitun@gmail.com', '$2y$10$FWZwJJVYcpRByUoq5AzBxe5y2OKjMD3HoyKSmVX..c03JjmxdguUG', '01672412645', 'MBBS ,FCPS', 'Associate Professor', 50114445, '2', 'Partial or complete paralysis,Muscle weakness', 'Parkinson\'s disease', '1990-02-05', '2017-06-27', 'Anderkilla', 1000, 1),
(64, 22, 'Imran', 'uploads/doc42.jpg', 'imran@gmail.com', '$2y$10$NKCHLPay3C5h3pefC/d5geQBZSXwVDqIpErFzTq2qVzge5rZUQKD.', '01672412645', 'MBBS ,FCPS', 'Professor', 50114446, '3', 'Shortness of breath,Sweating,Nausea', 'Heart arrhythmia', '1991-10-22', '2015-06-21', 'Boshudhara', 1200, 1),
(65, 23, 'Fahim', 'uploads/doc54.jpg', 'fahim@gmail.com', '$2y$10$iyvKPVO7/f5DKu5MXoNnYerdEVuOVAcTQ0XDvzu.ukhAyZMGMtaMm', '01672412645', 'PGT ,MBBS', 'MBBS ,FCPS', 50114447, '4', 'Recurring or constant joint pain or tenderness', 'Carpal Tunnel Syndrome', '1988-07-15', '2014-06-19', 'Chadanaish', 1200, 1),
(66, 24, 'Sajjad', 'uploads/doc73.jpg', 'sajjad@gmail.com', '$2y$10$OnJngoXLZB7pCubmOIoO7e0mS6rDqX6Z.cusG4qL1FeYrgjcnvjde', '01672412645', 'MBBS ,FCPS', 'FCPS', 50114448, '7', 'Chest pain. Constipation', 'Dengue, Malaria', '1980-06-27', '2018-06-19', 'Probortok', 1000, 1),
(67, 25, 'Rakib', 'uploads/doctor7.jpg', 'rakib@gmail.com', '$2y$10$mSfIoPMI32LaM4gBlPTjjOUzwVwZy6cnYi6lA9YXLtFq848gBtKi.', '01672412645', 'MBBS ,FCPS', 'MBBS ,FCPS', 50114449, '1', 'Foamy urine,Loss of appetite', 'Kidney failure,Hematuria', '1993-07-17', '2018-06-19', 'pantopoth', 1000, 1),
(68, 19, 'Julhas Nain', 'uploads/me5.jpg', 'julhas@gmai.com', '$2y$10$JUuYqCLYYmrOhCA.HguIBOq7NXR8//3iix52yvG2P3goMaj2FizFe', '01672412645', 'FCPS', 'MBBS ,FCPS', 50114450, '1', 'Severe swelling, Foamy urine', 'Kidney pain,Kidney stone', '1988-06-27', '2015-06-20', 'Chwakbazar', 800, 1),
(69, 19, 'Shahbaz', 'uploads/doc8.jpg', 'shabaz@gmail.com', '$2y$10$o6qtS.FP9CMWVvuuTUfro.G1M2m1y5KllOdvfxftJj8ssNf8AUO2O', '01672412645', 'MBBS ,FCPS', 'Professor', 50114451, '3', 'Nausea, Irregular heartbeat', 'Hypertension,Cardiac arrest', '1990-07-17', '2016-06-27', 'Chwakbazar', 1000, 1),
(70, 23, 'Irfan', 'uploads/doc9.jpg', 'irfan@gmail.com', '$2y$10$8NjXJweXTWaIQW2cl0Ke7eUk3MOHf1C3E06bn2IgToBuSpcJUQ95C', '01672412645', 'MBBS ,FCPS', 'Assistant  Professor', 50114455, '3', 'Shortness of breath. Sweating', 'Bradycardia,Indigestion', '1985-06-27', '2014-06-27', 'Chadanaish', 1000, 1),
(71, 24, 'Joy ', 'uploads/doc10.jpg', 'joy@gmail.com', '$2y$10$JfgOsbt.D1cMc4DhpkMGBeX/tBA0fYmvHEMPn5vwl.Nx0VNRu8.2W', '01672412645', 'MBBS ,FCPS', 'FCPS', 50114457, '2', 'Difficulty reading and writing. Poor cognitive abilities', 'Stroke, Brain damage', '1983-06-27', '2016-06-27', 'Probortok', 1200, 1),
(72, 25, 'Nishan', 'uploads/doc121.jpg', 'nishan@gmail.com', '$2y$10$yXXPag/KsgbhAuZFECYMiOS2k3V7idoOB0Eth0G6nyTeXoPJLyMZS', '01672412645', 'PGT ,MBBS', 'Professor', 50114458, '2', 'Partial or complete loss of sensation,Seizure', 'Traumatic brain injury', '1986-06-27', '2015-06-20', 'Boshudhara', 1200, 1),
(73, 19, 'Mahmud', 'uploads/doc112.jpg', 'mahmud@gmail.com', '$2y$10$1QhL5BI1yT.I3c.HM22ZUubUbQ4QesRH7.mhkpjRM6D1mJufks19y', '01672412645', 'MBBS ,FCPS', 'FCPS, MBBS ', 50114460, '4', 'Recurring or constant joint pain or tenderness', 'Bone cancer,Hip fracture', '1980-06-27', '2014-06-27', 'Chwakbazar', 1000, 1),
(74, 25, 'Sina', 'uploads/doc74.jpg', 'sina@gmail.com', '$2y$10$f3CTE18FGwmYMlQ.vs6Pd.PLNPoFQgyE8j1VaWdE1xzF8ndN.b9Ti', '01677676056', 'MBBS ,MD', 'Associate Professor', 50114460, '4', 'Bone disease, Bone fracture, backpain ', 'Osteoarthritis., Rheumatoid Arthritis', '1980-06-27', '2015-06-20', 'pantopoth', 1200, 1),
(75, 25, 'Raju', 'uploads/doc131.jpg', 'raju@gmail.com', '$2y$10$DBgIP4y24Oh4bS6onlmbs.OcyXhinKhpsQguzWE1kifM4ZuDvdBX.', '01672412645', 'MBBS ,FCPS', 'Professor', 50114462, '7', 'Abdominal pain, Blood in stool', 'Allergy,Appendicitis', '1993-08-22', '2016-06-27', 'pantopoth', 1000, 1),
(76, 23, 'Sayem', 'uploads/doc141.jpg', 'sayem@gmail.com', '$2y$10$r1foqXlg/bLrCakmNIH3cOjLEZg0NoBd8eMtPZAgz/aBfec/5F/vu', '01672412645', 'MBBS ,FCPS', 'Associate Professor', 50114463, '7', 'Chest pain, Constipation', 'Crohn\'s Disease,Depression', '1988-07-17', '2016-06-27', 'Chadanaish', 1000, 1),
(77, 26, 'M A Hasan', 'uploads/doc43.jpg', 'mahasan@gmail.com', '$2y$10$hfwX5JNOepEQwRTqIbo77ecT1xs3TEmxdIU1eSYg0Pu1YbIH/rw8q', '01677676056', 'MBBS ,MD', 'Associate Professor', 50114466, '7', 'fever,tumor,cough,vomiting', 'Dengue,TB', '1980-06-27', '2015-06-20', 'Probortok Moor', 1000, 1),
(78, 26, 'Tareq Iqbal', 'uploads/doc63.jpg', 'tareq@gmail.com', '$2y$10$StFxya2FxDo6Te3PVMZvrOpnhlaev0CAVYhhMM3aXC0yTYWr1DLlS', '01672412645', 'MBBS ,FCPS', 'Associate Professor', 50114470, '3', 'Diarrhea, Fever, Coughing, Bleeding, headache', 'TB, Asthma, Hepatitis-C, ', '1980-06-27', '2016-06-27', 'Probortok Moor', 800, 1),
(79, 26, 'Didarul Alam', 'uploads/doc210.jpg', 'didar@gmail.com', '$2y$10$QF5VwS8eiB2GYGD6PDykm.auLvpTfuipfgxtl3Xp6qDBlVv4SQVvS', '01672412645', 'MBBS ,FCPS', 'Assistant  Professor', 50114471, '7', 'Poor cognitive abilities, Unexplained pain', 'Osteoarthritis., Rheumatoid Arthritis', '1980-06-27', '2018-06-18', 'Probortok Moor', 700, 1);

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
(12, 'Asraf', 'B-', 'asraf@gmail.com', '01756128527', 'Agrabad', 1),
(13, 'Shohag', 'A+', 'shohag@gmail.com', '01672412645', 'Bahaddarhat', 1),
(14, 'Tohid', 'O+', 'tohid@gmail.com', '01677676056', 'Agrabad', 1),
(15, 'Rakibul Huda', 'A-', 'rakibul@yahoo.com', '01672412645', 'Enayet Bazar', 1),
(16, 'Shafee', 'B+', 'shafee@yahoo.com', '01853132102', 'GEC', 1),
(17, 'SIna', 'O-', 'sina@yahoo.com', '01672412645', 'Naya Bazar', 1),
(18, 'Raju', 'O-', 'raju@ymail.com', '01672412645', 'Bahaddarhat', 1),
(19, 'Joy', 'O-', 'joy@gmail.com', '01672412645', 'Madar bari', 1),
(20, 'Nehal', 'AB-', 'nehal@gmail.com', '01672412645', 'Bashundhara', 1),
(21, 'Deepto', 'B-', 'deepto@gmail.com', '01672412645', 'Dewa bazar', 1);

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
(19, 4, 'Metro Hospital', 'This hospital mainly focus on neurology', '01672412645', 'Kuril chowrasta', 1),
(20, 6, 'United Hospital', 'Specialized hospital for all kind of treatment', '01672412645', 'Panthapath', 1),
(22, 4, 'Apollo', 'Specialized hospital with foreign doctors', '01672412645', 'Bashundhara', 1),
(23, 4, 'BCG Trust', 'This is medical college come hospital', '01555555555', 'Chandanaish', 1),
(24, 4, 'Chittagong Medical', 'This is Government hospital', '01872412645', 'Chalkbazar', 1),
(25, 3, 'Sqaure', 'Luxurious Hospital in the capital city', '01672412645', 'Panthapath', 1),
(26, 3, 'Chevron', 'We are the destination for high end diagnostics in Bangladesh', '01555555555', 'Probortok Moor', 1);

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
(8, 'Amir ul Islam', '01687606755', 'amir@gmail.com', '$2y$10$myeYhaxf3yGkk6m4xc1XbeaKymkL6AAUxVXURs3n61g2K4TyZ0ote', 1),
(9, 'Saiful Alam', '01687606755', 'saiful@gmail.com', '$2y$10$NKenDnfQ2v9UPqT46YUFAe9fpyNomSm6aadphQgqQLVzI3O8CLJaa', 1),
(10, 'sayeed', '01776758804', 'sayeed@gmail.com', '$2y$10$IeABAGE8ipj17DdOkRQnOO5ds1cLB0ldtrzyzWbioJpwYHp9LrFZm', 1),
(11, 'tohidul', '01687606755', 'tohidul@gmail.com', '$2y$10$zsaMWI7qXgDptqFBrAh4Deoj9ls2XQiQZymFMS4tSNl0awdh40tRq', 1),
(12, 'Faisal', '01687606755', 'faisal@gmail.com', '$2y$10$1HVAIYUy9wpreMGWLhNwm.3brl2pdN3fa3jI4dth1oZYzUW06L.8C', 1),
(13, 'arman', '01687606755', 'arman@gmail.com', '$2y$10$1V7UWkAmVT5dbpmreH7wn.eG3B/eK3tpG5Zw9PhNZWZQTnBJkWeBm', 1),
(14, 'Rudro', '01776758804', 'didar@gmail.com', '$2y$10$fZaStNU94nn9sSSftunKc.9Y/KWzetbseJpkpUJz/QUGmw0yI47PG', 1),
(15, 'Rudro', '01776758804', 'rudro@gmail.com', '$2y$10$VqqLlhSY4dke4/dO.93RN.pScf1chXPHzApcD8CzcraCncvazzmWC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `blog_id`, `admin_id`, `message`, `post_date`) VALUES
(1, 1, 24, 'asy', '2018-08-10 09:51:52'),
(2, 2, 24, 'jvhkul', '2018-08-10 10:11:24'),
(3, 1, 26, 'fsgrwhs', '2018-08-10 10:23:43'),
(4, 2, 26, 'fsgrwhs', '2018-08-10 10:23:50'),
(5, 3, 26, 'sg', '2018-08-10 10:24:06'),
(6, 3, 26, 'sreyyts', '2018-08-10 10:24:23'),
(7, 3, 26, 'fti', '2018-08-10 10:26:49'),
(8, 3, 26, 'sd', '2018-08-10 10:28:17'),
(9, 0, 26, 'dfg', '2018-08-10 10:38:28'),
(10, 0, 26, 'sgdf', '2018-08-10 10:40:45'),
(11, 0, 26, 'fzds', '2018-08-10 10:42:43'),
(12, 2, 26, 'How was that? This is Applicable for all\r\n', '2018-08-10 11:30:32'),
(13, 2, 27, 'What are the requirements of staying fit always?', '2018-08-10 13:03:42'),
(14, 1, 1, 'dsg', '2018-08-14 12:27:49'),
(16, 3, 48, 'How was that?\r\n', '2018-08-15 13:31:55'),
(17, 3, 48, 'I know that\r\n', '2018-08-15 13:35:27'),
(18, 3, 48, 'zds', '2018-08-15 13:36:45'),
(19, 3, 48, 'zds', '2018-08-15 13:37:02'),
(20, 3, 48, 'asdf', '2018-08-15 13:37:52'),
(21, 3, 48, 'dsfd', '2018-08-15 13:38:04'),
(22, 2, 48, 'hx', '2018-08-15 13:38:37'),
(23, 3, 48, 'sdf', '2018-08-15 13:39:04'),
(24, 2, 48, 'hx', '2018-08-15 13:39:44'),
(25, 1, 48, 'cvb', '2018-08-15 13:40:18'),
(26, 2, 48, 'sdagfshdzf', '2018-08-15 13:40:36'),
(27, 2, 48, 'sdagfshdzfsdfh', '2018-08-15 13:41:07'),
(28, 2, 48, 'adgsgahzare', '2018-08-15 13:42:06'),
(29, 2, 48, 'sgzrghaerz', '2018-08-15 13:43:13'),
(30, 7, 38, 'It\'s really applicable for all', '2018-08-15 16:21:17'),
(31, 8, 46, 'sadg', '2018-08-15 17:38:41');

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
(13, 2.00, 31, 6),
(14, 4.50, 55, 7),
(15, 3.00, 32, 6),
(16, 4.00, 32, 5),
(17, 3.00, 42, 5),
(18, 3.00, 35, 5),
(19, 3.00, 64, 8),
(20, 4.00, 64, 9),
(21, 4.00, 70, 8),
(22, 5.00, 69, 8),
(23, 4.50, 71, 8),
(24, 4.50, 68, 8),
(25, 3.50, 65, 8),
(26, 4.00, 71, 9),
(27, 4.00, 69, 10),
(28, 5.00, 64, 10),
(29, 2.00, 71, 10),
(30, 4.50, 63, 11),
(31, 4.50, 67, 11),
(32, 4.50, 72, 11),
(33, 3.00, 68, 12),
(34, 5.00, 77, 11),
(35, 4.50, 78, 11),
(36, 3.00, 79, 11),
(37, 4.50, 74, 11),
(38, 3.50, 62, 13),
(39, 5.00, 73, 13),
(40, 4.00, 77, 13),
(41, 5.00, 75, 13),
(42, 4.50, 66, 13),
(43, 4.50, 76, 13),
(44, 5.00, 69, 13),
(45, 4.00, 73, 15),
(46, 5.00, 76, 15);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
