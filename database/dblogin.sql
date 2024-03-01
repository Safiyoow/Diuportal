-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 12:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `othername` varchar(15) DEFAULT NULL,
  `workstatus` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `othername`, `workstatus`, `email`) VALUES
(1, 'zayidmohamedy', '81fc1ab2bc18de67f8fd1e86251792fc', 'Mohamed', 'Hassanc', 'zayid', 'manager', 'sayidka843@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cse101`
--

CREATE TABLE `cse101` (
  `english_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse101`
--

INSERT INTO `cse101` (`english_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(3, 'zayidmohamedy', '12', '45', '47', '92', '1', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `cse102`
--

CREATE TABLE `cse102` (
  `indexNumber` int(30) NOT NULL,
  `username` char(15) NOT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse102`
--

INSERT INTO `cse102` (`indexNumber`, `username`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(0, 'zayidmohamedy', '12', '45', '30', '75', '2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `cse201`
--

CREATE TABLE `cse201` (
  `ict_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse201`
--

INSERT INTO `cse201` (`ict_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(1, 'zayidmohamedy', '12', '45', '47', '92', '1', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `cse202`
--

CREATE TABLE `cse202` (
  `rme_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse202`
--

INSERT INTO `cse202` (`rme_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(2, 'zayidmohamedy', '12', '45', '47', '92', '1', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `eee101`
--

CREATE TABLE `eee101` (
  `social_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eee101`
--

INSERT INTO `eee101` (`social_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(1, 'zayidmohamedy', '12', '23', '45', '68', '3', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `eee102`
--

CREATE TABLE `eee102` (
  `ghlanguage_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eee102`
--

INSERT INTO `eee102` (`ghlanguage_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(1, 'zayidmohamedy', '12', '23', '45', '68', '3', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `gender` char(7) DEFAULT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `otherName` varchar(15) DEFAULT NULL,
  `birthdate` varchar(10) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `residentialAddress` char(30) NOT NULL,
  `postalAddress` char(70) NOT NULL,
  `maritalStatus` varchar(10) NOT NULL,
  `levelofEducation` varchar(20) DEFAULT NULL,
  `skill` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `nextofKin` varchar(40) NOT NULL,
  `phoneofNextofKin` char(15) DEFAULT NULL,
  `relationwithNextofKin` varchar(40) DEFAULT NULL,
  `ssnitID` varchar(20) DEFAULT NULL,
  `bankName` varchar(30) DEFAULT NULL,
  `bankBrach` varchar(20) DEFAULT NULL,
  `accountNumber` varchar(20) NOT NULL,
  `startingDate` varchar(10) NOT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`username`, `password`, `gender`, `firstName`, `lastname`, `otherName`, `birthdate`, `phone`, `residentialAddress`, `postalAddress`, `maritalStatus`, `levelofEducation`, `skill`, `position`, `nextofKin`, `phoneofNextofKin`, `relationwithNextofKin`, `ssnitID`, `bankName`, `bankBrach`, `accountNumber`, `startingDate`, `email`) VALUES
('zayid', '81fc1ab2bc18de67f8fd1e86251792fc', 'Mohamed', 'Hassanc', 'zayid', 'Male', '2023-12-12', '01928681906', 'Chadudan 1', 'Gjft', 'married', 'master', '', 'lecturer', 'Mohamed Abdullahi Hassanc', '', 'brother', 'ss1', 'Mohamed Abdullahi Hassanc', '', '', '12/11/2022', 'sayidka843@gmail.com'),
('zayidka', '81dc9bdb52d04dc20036dbd8313ed055', 'Mohamed', 'Hassanc', 'zayid', 'Male', '2023-12-12', '01928681906', 'Chadudan 1', 'Gjft', 'married', 'master', '', 'lecturer', 'Mohamed Abdullahi Hassanc', '', 'brother', 'ss1', 'Mohamed Abdullahi Hassanc', '', '', '12/11/2022', 'sayidka843@gmail.com'),
('zayidmohamedy', '81fc1ab2bc18de67f8fd1e86251792fc', 'Mohamed', 'Hassanc', 'zayid', 'Male', '2023-12-12', '01928681906', 'Chadudan 1', 'Gjft', 'married', 'master', '', 'lecturer', 'Mohamed Abdullahi Hassanc', '', 'brother', 'ss1', 'Mohamed Abdullahi Hassanc', '', '', '12/11/2022', 'sayidka843@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `existingBalance` decimal(10,2) DEFAULT NULL,
  `feesForAcademicYear` decimal(10,2) DEFAULT NULL,
  `paymentMade` decimal(10,5) DEFAULT NULL,
  `balanceCarryForward` decimal(10,2) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `username`, `existingBalance`, `feesForAcademicYear`, `paymentMade`, `balanceCarryForward`, `lastname`, `firstname`, `class`) VALUES
(1, 'zayidmohamedy', '22000.00', '96000.00', '22000.00000', '22000.00', 'hassan', 'Mohamed Abdullahi', 'd56');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_path`) VALUES
(1, 'uploads/muslimah.jpg'),
(2, 'uploads/Screenshot_12.jpg'),
(3, 'uploads/Screenshot_12.jpg'),
(4, 'uploads/muslimah.jpg'),
(5, 'uploads/muslimah.jpg'),
(6, 'uploads/muslimah.jpg'),
(7, 'uploads/muslimah.jpg'),
(8, 'uploads/muslimah.jpg'),
(9, 'uploads/Screenshot_12.jpg'),
(10, 'uploads/muslimah.jpg'),
(11, 'uploads/Screenshot_12.jpg'),
(12, 'uploads/muslimah.jpg'),
(13, 'uploads/muslimah.jpg'),
(14, 'uploads/zayid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form_two`
--

CREATE TABLE `form_two` (
  `id` int(11) NOT NULL,
  `nameofStudent` varchar(30) DEFAULT NULL,
  `vacationDate` char(35) DEFAULT NULL,
  `reopeningDate` char(35) DEFAULT NULL,
  `form` char(8) DEFAULT NULL,
  `term` char(6) DEFAULT NULL,
  `englishClassScore` char(2) DEFAULT NULL,
  `englishExamScore` char(2) DEFAULT NULL,
  `englishTotalScore` char(3) DEFAULT NULL,
  `englishGrade` char(1) DEFAULT NULL,
  `englishRemark` char(15) DEFAULT NULL,
  `scienceClassScore` char(2) DEFAULT NULL,
  `scienceExamScore` char(2) DEFAULT NULL,
  `scienceTotalScore` char(3) DEFAULT NULL,
  `scienceGrade` char(1) DEFAULT NULL,
  `scienceRemark` char(15) DEFAULT NULL,
  `socialCLassScore` char(2) DEFAULT NULL,
  `socialExamScore` char(2) DEFAULT NULL,
  `socialTotalScore` char(3) DEFAULT NULL,
  `socialGrade` char(1) DEFAULT NULL,
  `socialRemark` char(15) DEFAULT NULL,
  `mathematicsClassScore` char(2) DEFAULT NULL,
  `mathematicsExamScore` char(2) DEFAULT NULL,
  `mathematicsTotalScore` char(3) DEFAULT NULL,
  `mathematicsGrade` char(1) DEFAULT NULL,
  `mathematicsRemark` char(15) DEFAULT NULL,
  `RMEClassScore` char(2) DEFAULT NULL,
  `RMEExamScore` char(2) DEFAULT NULL,
  `RMETotalScore` char(3) DEFAULT NULL,
  `RMEGrade` char(1) DEFAULT NULL,
  `RMERemark` char(15) DEFAULT NULL,
  `BDTClassScore` char(2) DEFAULT NULL,
  `BDTExamScore` char(2) DEFAULT NULL,
  `BDTTotalScore` char(3) DEFAULT NULL,
  `BDTGrade` char(1) DEFAULT NULL,
  `BDTRemark` char(15) DEFAULT NULL,
  `ICTClassScore` char(2) DEFAULT NULL,
  `ICTExamScore` char(2) DEFAULT NULL,
  `ICTTotalScore` char(3) DEFAULT NULL,
  `ICTGrade` char(1) DEFAULT NULL,
  `ICTRemark` char(15) DEFAULT NULL,
  `GhanaianLanguageClassScore` char(2) DEFAULT NULL,
  `GhanaianLanguageExamScore` char(2) DEFAULT NULL,
  `GhanaianLanguageTotalScore` char(3) DEFAULT NULL,
  `GhanaianLanguageGrade` char(1) DEFAULT NULL,
  `GhanaianLanguageRemark` char(15) DEFAULT NULL,
  `FrenchClassScore` char(2) DEFAULT NULL,
  `FrenchExamScocre` char(2) DEFAULT NULL,
  `FrenchTotalScore` char(3) DEFAULT NULL,
  `FrenchGrade` char(1) DEFAULT NULL,
  `FrenchRemark` char(15) DEFAULT NULL,
  `Attendance` char(3) DEFAULT NULL,
  `Outof` char(3) DEFAULT NULL,
  `Raw_Score` char(3) DEFAULT NULL,
  `Attitude` char(35) DEFAULT NULL,
  `Conduct` char(35) DEFAULT NULL,
  `Interest` char(35) DEFAULT NULL,
  `Aggregate` char(2) DEFAULT NULL,
  `Academic_Year` char(10) DEFAULT NULL,
  `Teacher_Remark` char(35) DEFAULT NULL,
  `Promoted_Repeated` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ged101`
--

CREATE TABLE `ged101` (
  `bdt_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ged101`
--

INSERT INTO `ged101` (`bdt_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(2, 'zayidmohamedy', '12', '45', '47', '92', '1', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `math101`
--

CREATE TABLE `math101` (
  `maths_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math101`
--

INSERT INTO `math101` (`maths_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(2, 'zayidmohamedy', '12', '48', '45', '93', '1', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `math201`
--

CREATE TABLE `math201` (
  `french_id` int(11) NOT NULL,
  `indexNumber` char(15) DEFAULT NULL,
  `Class` char(10) DEFAULT NULL,
  `ClassScore` char(2) DEFAULT NULL,
  `ExamScore` char(2) DEFAULT NULL,
  `TotalScore` char(3) DEFAULT NULL,
  `Grade` char(1) DEFAULT NULL,
  `Remark` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math201`
--

INSERT INTO `math201` (`french_id`, `indexNumber`, `Class`, `ClassScore`, `ExamScore`, `TotalScore`, `Grade`, `Remark`) VALUES
(1, 'zayidmohamedy', '12', '45', '47', '92', '4', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `sba_users`
--

CREATE TABLE `sba_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `class` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sba_users`
--

INSERT INTO `sba_users` (`id`, `username`, `password`, `firstname`, `lastname`, `subject`, `class`) VALUES
(1, 'staff1', '81dc9bdb52d04dc20036dbd8313ed055', 'Mohamed', 'Hassanc', 'cse101', 'd56'),
(2, 'staff2', '81dc9bdb52d04dc20036dbd8313ed055', 'moa', 'ad', 'math101', 'd56'),
(3, 'staff3', '81dc9bdb52d04dc20036dbd8313ed055', 'ali', 'mohamed', 'cse102', 'd56'),
(5, 'staff4', '81dc9bdb52d04dc20036dbd8313ed055', 'salman', 'jama', 'cse201', 'd56'),
(7, 'staff5', '81dc9bdb52d04dc20036dbd8313ed055', 'mohamed', 'rashiid', 'ged101', 'd56'),
(8, 'staff6', '81dc9bdb52d04dc20036dbd8313ed055', 'safiya ', 'shariif', 'cse202', 'd56'),
(9, 'staff7', '81dc9bdb52d04dc20036dbd8313ed055', 'nur', 'alam', 'eee101', 'd56'),
(10, 'staff8', '81dc9bdb52d04dc20036dbd8313ed055', ' shariful ', 'islam', 'eee102', 'd56'),
(11, 'staff9', '81dc9bdb52d04dc20036dbd8313ed055', 'badhan', 'mazumder', 'math201', 'd56');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `username` char(15) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `otherName` varchar(15) DEFAULT NULL,
  `programme` varchar(50) NOT NULL,
  `currentMajor` varchar(20) DEFAULT NULL,
  `gender` char(7) NOT NULL,
  `dateOfBirth` char(10) NOT NULL,
  `level` int(11) NOT NULL,
  `hall` varchar(20) DEFAULT NULL,
  `roomNumber` char(5) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `cellPhone` char(15) NOT NULL,
  `homePhone` char(15) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `homeAddress` varchar(30) DEFAULT NULL,
  `postalAddress` varchar(70) DEFAULT NULL,
  `postalTown` varchar(20) DEFAULT NULL,
  `placeOfBirth` varchar(20) NOT NULL,
  `homeTown` varchar(20) NOT NULL,
  `guadianName` varchar(30) DEFAULT NULL,
  `guadianOccupation` varchar(20) DEFAULT NULL,
  `relationWithGuadian` varchar(15) DEFAULT NULL,
  `guadianPhoneNumber` char(15) DEFAULT NULL,
  `country` varchar(60) NOT NULL,
  `durationOfStudy` varchar(35) DEFAULT NULL,
  `dateOfCommencement` char(10) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` varchar(15) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `othername` varchar(15) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `guardianName` varchar(30) DEFAULT NULL,
  `guardianOccupation` varchar(20) DEFAULT NULL,
  `guardianPhone` varchar(15) DEFAULT NULL,
  `relationWithGuadian` varchar(20) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `birthdate` varchar(15) DEFAULT NULL,
  `residentialAddress` varchar(20) DEFAULT NULL,
  `postalAddress` varchar(60) DEFAULT NULL,
  `durationOfStudy` varchar(15) DEFAULT NULL,
  `dateOfEnrollment` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`, `firstname`, `lastname`, `othername`, `gender`, `guardianName`, `guardianOccupation`, `guardianPhone`, `relationWithGuadian`, `class`, `birthdate`, `residentialAddress`, `postalAddress`, `durationOfStudy`, `dateOfEnrollment`) VALUES
('abdullahi', '6e992ddd550f0c852c63f223b717f9b3', 'abdullahi ', 'ahmed', 'ali', 'Male', 'said', 'driver', '0186472353', 'uncle', '12', '12/12/1998', '237G+9PF Salalah, Om', 'Gjft', '12', '0015-11-23'),
('said', '81fc1ab2bc18de67f8fd1e86251792fc', 'abdullahi ', 'ahmed', 'ali', 'Male', 'said', 'driver', '0186472353', 'uncle', '12', '12/12/1998', '237G+9PF Salalah, Om', 'Gjft', '12', '0015-11-23'),
('salman', '81dc9bdb52d04dc20036dbd8313ed055', 'abdullahi ', 'ahmed', 'ali', 'Male', 'said', 'driver', '0186472353', 'uncle', '12', '12/12/1998', '237G+9PF Salalah, Om', 'Gjft', '12', '0015-11-23'),
('zayidka843@gmai', 'ca1c9da53f09bde1766b4f31c0a57608', 'Mohamed Abdulla', 'Hassan', 'zayidka', 'Male', 'Mohamed Abdullahi Ha', 'driver', '01755432943', 'uncle', 'd55', '12/12/1998', 'Chadudan 1', 'Gjft', '12', '2024-12-23'),
('zayidmohamed', 'ca1c9da53f09bde1766b4f31c0a57608', 'Mohamed', 'Hassanc', 'zayid', 'Male', ' bdullahi Ha', 'driver', '0186472353', 'father', '12', '12/12/1998', 'Chadudan 1', 'Gjft', '12', '1998-11-11'),
('zayidmohamedy', '81dc9bdb52d04dc20036dbd8313ed055', 'Mohamed', 'Hassanc', 'zayid', 'Male', 'Mohamed Abdullahi Ha', 'student', '0186472353', 'uncle', '12', '12/12/1998', 'Chadudan 1', 'Gjft', '12', '1998-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `examDate` varchar(20) DEFAULT NULL,
  `examTime` varchar(23) NOT NULL,
  `venue` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `status` enum('pending','admitted','canceled') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `event_name`, `event_date`, `student_username`, `status`) VALUES
(5, '1', '2023-12-12', 'zayidmohamedy', 'admitted'),
(6, '2', '0000-00-00', 'zayidmohamedy', 'admitted'),
(7, '2', '0000-00-00', 'zayidmohamedy', 'admitted'),
(8, '2', '0000-00-00', 'zayidmohamedy', 'admitted'),
(9, '3', '0000-00-00', 'zayidmohamedy', 'admitted'),
(10, '1', '0001-12-12', 'zayidmohamedy', 'admitted'),
(11, '2', '2023-11-20', 'zayidmohamedy', 'admitted'),
(12, '2', '2023-11-20', 'zayidmohamedy', 'admitted');

-- --------------------------------------------------------

--
-- Table structure for table `tour_events`
--

CREATE TABLE `tour_events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_events`
--

INSERT INTO `tour_events` (`id`, `event_name`, `event_date`, `status`) VALUES
(1, 'Campus Tour 1: Comila', '2023-11-15', 'active'),
(2, 'Campus Tour 2: Cox bazar', '2023-11-20', 'active'),
(3, 'Campus Tour 3: chitagoen  ', '2023-11-25', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse101`
--
ALTER TABLE `cse101`
  ADD PRIMARY KEY (`english_id`);

--
-- Indexes for table `cse102`
--
ALTER TABLE `cse102`
  ADD PRIMARY KEY (`username`) USING BTREE,
  ADD KEY `science-id` (`username`);

--
-- Indexes for table `cse201`
--
ALTER TABLE `cse201`
  ADD PRIMARY KEY (`ict_id`);

--
-- Indexes for table `cse202`
--
ALTER TABLE `cse202`
  ADD PRIMARY KEY (`rme_id`);

--
-- Indexes for table `eee101`
--
ALTER TABLE `eee101`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `eee102`
--
ALTER TABLE `eee102`
  ADD PRIMARY KEY (`ghlanguage_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_two`
--
ALTER TABLE `form_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ged101`
--
ALTER TABLE `ged101`
  ADD PRIMARY KEY (`bdt_id`);

--
-- Indexes for table `math101`
--
ALTER TABLE `math101`
  ADD PRIMARY KEY (`maths_id`);

--
-- Indexes for table `math201`
--
ALTER TABLE `math201`
  ADD PRIMARY KEY (`french_id`);

--
-- Indexes for table `sba_users`
--
ALTER TABLE `sba_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_events`
--
ALTER TABLE `tour_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cse101`
--
ALTER TABLE `cse101`
  MODIFY `english_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cse201`
--
ALTER TABLE `cse201`
  MODIFY `ict_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cse202`
--
ALTER TABLE `cse202`
  MODIFY `rme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eee101`
--
ALTER TABLE `eee101`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eee102`
--
ALTER TABLE `eee102`
  MODIFY `ghlanguage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `form_two`
--
ALTER TABLE `form_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ged101`
--
ALTER TABLE `ged101`
  MODIFY `bdt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `math101`
--
ALTER TABLE `math101`
  MODIFY `maths_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `math201`
--
ALTER TABLE `math201`
  MODIFY `french_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sba_users`
--
ALTER TABLE `sba_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tour_events`
--
ALTER TABLE `tour_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
