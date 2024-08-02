-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 02, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cutm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(100) DEFAULT NULL,
  `AdminPassword` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `AdminName`, `AdminPassword`) VALUES
(1, 'Pratap', '9937'),
(2, '9937', '9937');

-- --------------------------------------------------------

--
-- Table structure for table `assignsubject`
--

CREATE TABLE `assignsubject` (
  `assignsubjectId` int(11) NOT NULL,
  `assignTeacher` int(11) DEFAULT NULL,
  `assignCourse` int(11) DEFAULT NULL,
  `assignYear` varchar(50) DEFAULT NULL,
  `assignSemester` varchar(50) DEFAULT NULL,
  `assignSubject` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignsubject`
--

INSERT INTO `assignsubject` (`assignsubjectId`, `assignTeacher`, `assignCourse`, `assignYear`, `assignSemester`, `assignSubject`) VALUES
(1, 1, 94, '1st Year', 'I sem', 2),
(2, 1, 129, '1st YearSelect year', 'II sem', 7),
(3, 4, 132, '1st YearSelect year', 'I sem', 9);

-- --------------------------------------------------------

--
-- Table structure for table `attendancedetails`
--

CREATE TABLE `attendancedetails` (
  `attendanceId` int(11) NOT NULL,
  `attendanceStatus` varchar(255) NOT NULL,
  `attendanceDate` varchar(255) NOT NULL,
  `attendanceStudent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendancedetails`
--

INSERT INTO `attendancedetails` (`attendanceId`, `attendanceStatus`, `attendanceDate`, `attendanceStudent`) VALUES
(1, 'P', '1', 2024),
(2, 'P', '2024-05-04', 1),
(3, 'P', '2024-05-04', 2),
(4, 'P', '2024-05-04', 1),
(5, 'P', '2024-05-04', 2),
(6, 'P', '2024-05-06', 1),
(7, 'P', '2024-05-06', 2),
(8, 'P', '2024-05-07', 1),
(9, 'P', '2024-05-07', 2),
(10, 'P', '2024-05-08', 1),
(11, 'P', '2024-05-08', 2),
(12, 'P', '2024-05-09', 1),
(13, 'P', '2024-05-09', 2),
(14, 'P', '', 5),
(15, 'P', '2024-06-03', 5),
(16, 'P', '2024-06-05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseName`) VALUES
(93, 'B.Tech'),
(94, 'BCA'),
(129, 'MCA'),
(130, 'B Pharm'),
(132, '12th');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `stuname` varchar(50) DEFAULT NULL,
  `stupassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `stuname`, `stupassword`) VALUES
(1, 'Swati', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `registersubject`
--

CREATE TABLE `registersubject` (
  `registerId` int(11) NOT NULL,
  `studentRegister` int(11) NOT NULL,
  `subjectRegister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `studentId` int(11) NOT NULL,
  `studentFirstName` varchar(200) DEFAULT NULL,
  `studentLastName` varchar(200) DEFAULT NULL,
  `studentRollNo` varchar(200) DEFAULT NULL,
  `studentMailId` varchar(200) DEFAULT NULL,
  `studentPassword` varchar(200) DEFAULT NULL,
  `studentCourse` int(11) DEFAULT NULL,
  `studentYear` varchar(200) DEFAULT NULL,
  `studentSemester` varchar(50) DEFAULT NULL,
  `studentSubject` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`studentId`, `studentFirstName`, `studentLastName`, `studentRollNo`, `studentMailId`, `studentPassword`, `studentCourse`, `studentYear`, `studentSemester`, `studentSubject`) VALUES
(1, 'Pratap Chandra', 'Kuldi', '202401', 'pratap@gmail.com', '202401', 129, '1st Year', 'II sem', 7),
(2, 'Gopinath', 'Behera', '202402', 'Gopinath@123gmail.com', '202402', 129, '1st Year', 'II sem', NULL),
(4, 'Jagyan Prakash', 'Sahoo', '202403', 'jagyan@gmail.com', '202403', 129, '1st Year', 'II sem', NULL),
(5, 'Swapna', 'Purty', '202404', 'swapna@gmail.com', '202404', 132, '1st Year', 'I sem', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjectdetails`
--

CREATE TABLE `subjectdetails` (
  `subjectId` int(11) NOT NULL,
  `subjectName` varchar(100) DEFAULT NULL,
  `subjectCode` varchar(100) DEFAULT NULL,
  `subjectYear` varchar(100) DEFAULT NULL,
  `subjectSemester` varchar(100) DEFAULT NULL,
  `subjectCourse` int(11) DEFAULT NULL,
  `subjectStudent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjectdetails`
--

INSERT INTO `subjectdetails` (`subjectId`, `subjectName`, `subjectCode`, `subjectYear`, `subjectSemester`, `subjectCourse`, `subjectStudent`) VALUES
(2, 'c++', 'CUTM2', '1st YearSelect year', 'I sem', 94, 1),
(3, 'Software Engineering', 'CUTM3', '1st Year', 'I sem', 94, NULL),
(7, 'AWP', 'CUTM2', '2nd Year', 'II sem', 129, 5),
(8, 'a', 'a', '1st Year', 'I sem', 130, NULL),
(9, 'math', 'CUTM4', '1st Year', 'I sem', 132, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `teacherId` int(11) NOT NULL,
  `teacherFirstName` varchar(200) DEFAULT NULL,
  `teacherLastName` varchar(200) DEFAULT NULL,
  `teacherMailId` varchar(200) DEFAULT NULL,
  `teacherPassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`teacherId`, `teacherFirstName`, `teacherLastName`, `teacherMailId`, `teacherPassword`) VALUES
(1, 'Satyajit', 'Samantaray', 'satyajit@gmail.com', '1234'),
(2, 'ss', 'ss', 's', 's'),
(3, 'ss', 'ss', 's', 's'),
(4, 'Ganesh', 'Purty', 'ganesh@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assignsubject`
--
ALTER TABLE `assignsubject`
  ADD PRIMARY KEY (`assignsubjectId`),
  ADD KEY `assignTeacher` (`assignTeacher`),
  ADD KEY `assignSubject` (`assignSubject`),
  ADD KEY `assignCourse` (`assignCourse`);

--
-- Indexes for table `attendancedetails`
--
ALTER TABLE `attendancedetails`
  ADD PRIMARY KEY (`attendanceId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registersubject`
--
ALTER TABLE `registersubject`
  ADD PRIMARY KEY (`registerId`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`studentId`),
  ADD UNIQUE KEY `studentRollNo` (`studentRollNo`),
  ADD KEY `studentCourse` (`studentCourse`);

--
-- Indexes for table `subjectdetails`
--
ALTER TABLE `subjectdetails`
  ADD PRIMARY KEY (`subjectId`),
  ADD KEY `subjectCourse` (`subjectCourse`),
  ADD KEY `subjectStudent` (`subjectStudent`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`teacherId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignsubject`
--
ALTER TABLE `assignsubject`
  MODIFY `assignsubjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendancedetails`
--
ALTER TABLE `attendancedetails`
  MODIFY `attendanceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registersubject`
--
ALTER TABLE `registersubject`
  MODIFY `registerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjectdetails`
--
ALTER TABLE `subjectdetails`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `teacherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignsubject`
--
ALTER TABLE `assignsubject`
  ADD CONSTRAINT `assignsubject_ibfk_1` FOREIGN KEY (`assignTeacher`) REFERENCES `teacherdetails` (`teacherId`),
  ADD CONSTRAINT `assignsubject_ibfk_2` FOREIGN KEY (`assignSubject`) REFERENCES `subjectdetails` (`subjectId`),
  ADD CONSTRAINT `assignsubject_ibfk_3` FOREIGN KEY (`assignCourse`) REFERENCES `course` (`courseId`);

--
-- Constraints for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD CONSTRAINT `studentdetails_ibfk_1` FOREIGN KEY (`studentCourse`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `studentdetails_ibfk_2` FOREIGN KEY (`studentSubject`) REFERENCES `subjectdetails` (`subjectId`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `subjectdetails`
--
ALTER TABLE `subjectdetails`
  ADD CONSTRAINT `subjectdetails_ibfk_1` FOREIGN KEY (`subjectCourse`) REFERENCES `course` (`courseId`),
  ADD CONSTRAINT `subjectdetails_ibfk_2` FOREIGN KEY (`subjectStudent`) REFERENCES `studentdetails` (`studentId`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
