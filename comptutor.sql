-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 07:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comptutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Phone` char(12) NOT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `LastName`, `FirstName`, `Phone`, `Email`) VALUES
(1, 'lastName', 'firstName', '000-000-0000', 'admin@smsu.edu'),

-- --------------------------------------------------------

--
-- Stand-in structure for view `basicadminview`
--
CREATE TABLE `basicadminview` (
`AdminID` int(11)
,`LastName` varchar(50)
,`FirstName` varchar(50)
,`Phone` char(12)
,`Email` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `basicstudentview`
--
CREATE TABLE `basicstudentview` (
`StarID` int(11)
,`FirstName` varchar(50)
,`LastName` varchar(50)
,`Email` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `LessonId` int(11) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Semester` char(12) DEFAULT NULL,
  `LessonDate` varchar(10) DEFAULT '01/01/1900',
  `StartTime` varchar(5) NOT NULL DEFAULT '00:00',
  `EndTime` varchar(5) NOT NULL DEFAULT '00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberId` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberId`, `Role`, `Username`, `Password`) VALUES
(1, 'Tutor', 'tutor@smsu.edu', 'tutor'),
(2, 'Student', 'student@smsu.edu', 'student'),
(3, 'Admin', 'admin@smsu.edu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StarID` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StarID`, `LastName`, `FirstName`, `Email`) VALUES
(1, 'lastName', 'firstName', 'student@smsu.edu'),

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `TutorID` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Phone` char(12) DEFAULT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`TutorID`, `LastName`, `FirstName`, `Phone`, `Email`) VALUES
(4, 'lastName', 'firstName', '000-000-0000', 'tutor@smsu.edu'),

-- --------------------------------------------------------

--
-- Stand-in structure for view `tutornameemail`
--
CREATE TABLE `tutornameemail` (
`TutorID` int(11)
,`FirstName` varchar(50)
,`LastName` varchar(50)
,`Phone` char(12)
,`Email` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_rating`
--

CREATE TABLE `tutor_rating` (
  `TutorID` int(11) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `WasHelpful` varchar(3) NOT NULL,
  `Rating` int(1) NOT NULL DEFAULT '0',
  `Comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `basicadminview`
--
DROP TABLE IF EXISTS `basicadminview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `basicadminview`  AS  select `admin`.`AdminID` AS `AdminID`,`admin`.`LastName` AS `LastName`,`admin`.`FirstName` AS `FirstName`,`admin`.`Phone` AS `Phone`,`admin`.`Email` AS `Email` from `admin` ;

-- --------------------------------------------------------

--
-- Structure for view `basicstudentview`
--
DROP TABLE IF EXISTS `basicstudentview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `basicstudentview`  AS  select `student`.`StarID` AS `StarID`,`student`.`FirstName` AS `FirstName`,`student`.`LastName` AS `LastName`,`student`.`Email` AS `Email` from `student` ;

-- --------------------------------------------------------

--
-- Structure for view `tutornameemail`
--
DROP TABLE IF EXISTS `tutornameemail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tutornameemail`  AS  select `tutor`.`TutorID` AS `TutorID`,`tutor`.`FirstName` AS `FirstName`,`tutor`.`LastName` AS `LastName`,`tutor`.`Phone` AS `Phone`,`tutor`.`Email` AS `Email` from `tutor` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`LessonId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberId`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StarID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`TutorID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `tutor_rating`
--
ALTER TABLE `tutor_rating`
  ADD PRIMARY KEY (`TutorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `LessonId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `TutorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tutor_rating`
--
ALTER TABLE `tutor_rating`
  MODIFY `TutorID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
