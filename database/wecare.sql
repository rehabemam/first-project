-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 10:09 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_bdate` date NOT NULL,
  `appoint_dep` varchar(30) NOT NULL,
  `appoint_date` varchar(30) NOT NULL,
  `appoint_drs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `user_id`, `user_name`, `user_email`, `user_mobile`, `user_address`, `user_gender`, `user_bdate`, `appoint_dep`, `appoint_date`, `appoint_drs`) VALUES
(1, 0, 'mmm', 'mm@yahoo.com', 1008145166, 'hkhkjhk', 0, '2002-02-08', 'skin', '0000-00-00', ''),
(2, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2004-05-14', '3', '0000-00-00', ''),
(3, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-03-15', '1', '0000-00-00', ''),
(4, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-02-16', '2', '0000-00-00', ''),
(5, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-04-17', '2', '0000-00-00', ''),
(6, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-02-17', '1', '0000-00-00', ''),
(7, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-03-17', '2', '0000-00-00', ''),
(8, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-03-17', '2', '0000-00-00', ''),
(9, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-04-14', '1', '0000-00-00', ''),
(10, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-04-14', '1', '0000-00-00', ''),
(11, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-01-18', '1', '0000-00-00', ''),
(12, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-01-18', '1', '0000-00-00', ''),
(13, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-01-18', '1', '0000-00-00', ''),
(14, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-01-18', '1', '0000-00-00', ''),
(15, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-01-18', '1', '0000-00-00', ''),
(16, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2001-01-18', '1', '0000-00-00', ''),
(17, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-04-16', '2', '0000-00-00', ''),
(18, 0, 'mmm', 'mm@yahoo.com', 1008145664, 'hkhkjhk', 0, '2002-04-16', '2', '0000-00-00', 'Dr.sara Mazzei'),
(19, 0, 'xcxc', 'dfdfshgas@yahoo.com', 1008145664, 'wedwsfdsfdsf', 0, '2001-04-18', '2', '0000-00-00', 'Dr.sara Mazzei'),
(20, 0, 'neama', 'neama@yahoo.com', 1008145664, 'helwan', 0, '2000-04-19', '4', '06/10/2018', 'Dr.robert jone'),
(21, 0, 'jojo', 'dfdfshgas@yahoo.com', 1008145664, 'giza', 0, '2000-03-17', '2', '26/09/2018', 'Dr.robert jone'),
(22, 7, 'marwa', 'marwa@yahoo.com', 1008145664, 'helwan', 0, '1982-04-19', '2', '28/09/2018', 'Dr.Sergio Mazzei');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `app_mobile` int(11) NOT NULL,
  `app_email` varchar(50) NOT NULL,
  `app_address` varchar(255) NOT NULL,
  `app_gender` tinyint(4) DEFAULT NULL,
  `app_bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`app_id`, `app_name`, `app_mobile`, `app_email`, `app_address`, `app_gender`, `app_bdate`) VALUES
(1, 'marwa', 1008043253, 'marwa@yahoo.com', 'helwan', 0, '1991-11-17'),
(2, 'marwa', 1008043253, 'marwak@yahoo.com', 'helwan', 0, '2015-02-07'),
(3, 'marwa', 1008043253, 'maaaarwa@yahoo.com', 'helwan', 0, '2001-12-18'),
(4, 'ffffff', 1008043253, 'ffffff@yahoo.com', 'helwan', 0, '2002-10-18'),
(5, 'hkjhkj', 1008043253, 'klkjh@yahoo.com', 'helwan', 0, '2012-05-04'),
(6, 'marwa55', 1008043253, 'marwa55@yahoo.com', 'helwan', 0, '2001-01-17'),
(7, 'marwa', 1008043253, 'marwakkk@yahoo.com', 'helwan', 0, '2014-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_staus` tinyint(4) NOT NULL,
  `user_bdate` date NOT NULL,
  `user_symptoms` varchar(1000) NOT NULL,
  `HBP` tinyint(4) NOT NULL DEFAULT '0',
  `HD` tinyint(4) NOT NULL DEFAULT '0',
  `HC` tinyint(4) NOT NULL DEFAULT '0',
  `diabets` tinyint(4) NOT NULL DEFAULT '0',
  `allergy` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_gender`, `user_staus`, `user_bdate`, `user_symptoms`, `HBP`, `HD`, `HC`, `diabets`, `allergy`) VALUES
(1, 'marwa', 'marwa@yahoo.com', 1008044167, 1, 1, '2011-07-13', 'nkn,kn,n,m,n,m', 0, 0, 0, 1, 1),
(2, 'neama', 'neama@yahoo.com', 1008044166, 1, 1, '1994-09-05', 'i have high pressure ', 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_mobile` int(11) NOT NULL,
  `contact_msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mobile`, `contact_msg`) VALUES
(1, 'marwa', 105652626, 'hello im marwa khaled '),
(2, 'marwa', 105652626, 'hello im marwa khaled '),
(3, 'ww', 105652626, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`) VALUES
(1, 'kids'),
(2, 'skin'),
(3, 'optical'),
(4, 'heart'),
(5, 'dental'),
(6, 'xray');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_title` varchar(50) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `dr_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`dr_id`, `dr_name`, `dr_title`, `dep_id`, `dr_img`) VALUES
(1, 'Dr.makky veil', 'Specialist in Otolaryngology ', 1, 'kids/mid.png'),
(2, ' Dr.Jelena Maksimovic', 'General Practitioner, Pediatrician', 1, 'kids/thid.jpg'),
(3, 'Dr. Riham Ammar ', 'Specialist in Pediatrics', 1, 'kids/fir.jpg'),
(4, 'Dr.Sergio Mazzei', 'Specialist in General Surgery', 2, 'skin/Ophthalmologist-4-263x319.jpg'),
(5, 'Dr.robert jone', 'Specialist in Plastic Surgery', 2, 'skin/Ophthalmologist-3-263x319.jpg'),
(6, 'Dr.jone sam', 'Consultant Dermatologist', 2, 'skin/chief-doctors.jpg'),
(7, 'Dr.hossam el sawy', ' consultant Ocular plastic surgery', 3, 'optical/newdr4.png'),
(8, 'Dr.Emma Adsuar Gomez ', ' consultant vision correction surgery', 3, 'optical/new2dr.png'),
(9, 'Dr.maram saad', 'Specialist in laser catarct surgery', 3, 'optical/new3dr.png'),
(10, 'Dr. Samaa Sherif El Abd ', ' consultant heart transplant', 4, 'heart/doctor-dress-png.png'),
(11, 'Dr.Valentina Ghorashi ', ' consCarotid angioplasty and stenting', 4, 'heart/png-woman-doctor-doctor-png-243.png'),
(12, 'Dr.Mahmoud Ahmed EL Batawi', 'spealist Mitral valve replacement', 4, 'heart/images.jpg'),
(13, 'Dr.sara jack', 'General Dentist', 5, 'dentail/dr2.png'),
(14, 'Dr.jack merrt', 'Consultant of Surgical Dentistry', 5, 'dentail/Doctor.png'),
(15, 'Dr. rooze danial', ' specialized in Adult Dentistry, Pediatric Dentist', 5, 'dentail/dr-d.png'),
(16, 'Dr.marina yosef', 'speaialist in x-ray', 6, 'x-ray/doctor2.png'),
(17, 'Dr.mary nazeef', 'speaialist in x-ray', 6, 'x-ray/dre1.png'),
(18, 'Dr.john mark', 'speaialist in x-ray', 6, 'x-ray/copy.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_mobile`, `user_address`, `user_gender`, `user_bdate`) VALUES
(2, 'root', 'fcea920f7412b5da7be0cf42b8c937', 'gooo@yahoo.com', 1007896544, 'helwan', 0, '2002-10-17'),
(3, 'mohanad', 'fcea920f7412b5da7be0cf42b8c937', 'mohanad@yahoo.com', 1000804416, 'giza', 0, '1992-09-17'),
(4, 'marwa', '99a9fb6cf89ed8e387a86d6180b344', 'marwa@yahoo.com', 1000804416, '15 may', 1, '2004-11-17'),
(5, 'rehab', 'fcea920f7412b5da7be0cf42b8c937', 'rehab@gmail.com', 1000804416, 'giza', 1, '2004-08-17'),
(6, 'dina', 'f093c0fed979519fbc43d772b76f5c', 'dina@yahoo.com', 1000804416, 'giza', 1, '1994-05-16'),
(7, 'mm', 'ca71de902e4ff67ac2e7c799c13ce314', 'mm@yahoo.com', 1000804416, 'helwan', 1, '1992-06-17'),
(8, 'mohand', '25f9e794323b453885f5181f1b624d0b', 'moh@yahoo.com', 1007896544, 'giza', 0, '2003-11-16'),
(9, 'root', '25f9e794323b453885f5181f1b624d0b', 'nti@yahoo.com', 1007896544, 'giza', 0, '1982-10-18'),
(10, 'user', 'f8d003056f5993e42fb3b3adf207fdfa', 'mohanad5@yahoo.com', 1007896594, 'giza', 0, '1982-11-17'),
(11, 'neama', '25f9e794323b453885f5181f1b624d0b', 'ne3ama@yahoo.com', 1000804416, 'helwan', 1, '1985-02-11'),
(12, 'ahmad', 'f5bb0c8de146c67b44babbf4e6584cc0', 'ahmad@gmail.com', 1125930013, 'helwan', 0, '2003-09-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
