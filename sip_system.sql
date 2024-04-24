-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 04:44 PM
-- Server version: 5.7.43-log
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `deploy_student`
--

CREATE TABLE `deploy_student` (
  `deployment_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `intern_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deploy_student`
--

INSERT INTO `deploy_student` (`deployment_id`, `student_id`, `firstname`, `lastname`, `intern_id`, `company_id`) VALUES
(2, 4, 'user3', 'user3', 23, 4),
(3, 1, 'user', 'user', 11, 4),
(4, 1, 'user', 'user', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `intern_application`
--

CREATE TABLE `intern_application` (
  `application_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `internship_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intern_company`
--

CREATE TABLE `intern_company` (
  `company_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ceo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_company`
--

INSERT INTO `intern_company` (`company_id`, `name`, `address`, `phone_no`, `email`, `ceo`) VALUES
(3, 'CPU', 'jaro', '2131', 'potot@yahoo.com', 'JM'),
(4, 'WaterWorld', 'Janiuay', '2131212', 'yuju@yahoo.com', 'JM'),
(5, 'McDo', 'lapaz', '12312', 'neon@gmail.com', 'DONALD');

-- --------------------------------------------------------

--
-- Table structure for table `intern_internship`
--

CREATE TABLE `intern_internship` (
  `internship_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_internship`
--

INSERT INTO `intern_internship` (`internship_id`, `title`, `description`, `start_date`, `end_date`, `company_id`) VALUES
(9, 'Backend', 'maintain back end', '2024-04-09', '2024-04-22', 3),
(10, 'Encoder', 'type fast like a golden lion', '2024-04-12', '2024-04-30', 3),
(11, 'WateBoy', 'Carries 200kg of water', '2024-04-21', '2024-08-21', 4),
(12, 'Refillant', 'refill water with hose', '2024-04-13', '2024-04-28', 4),
(13, 'manughakot', 'basta', '2024-04-03', '2024-04-15', 4),
(14, 'taga cheer', 'mamaw', '2024-04-02', '2024-04-24', 4),
(15, 'tenant', 'yuju@yahoo.com', '2024-04-13', '2024-04-30', 4),
(17, 'manugtrapo', 'basta gwapo', '2024-04-09', '2024-04-30', 4),
(18, 'grupokoa', 'subong', '2024-04-04', '2024-04-24', 4),
(19, 'basta planga', 'plangea', '2024-04-03', '2024-04-30', 4),
(20, 'duenas lord', 'aswang', '2024-04-09', '2024-04-30', 4),
(21, 'dwad', 'wadawd', '2024-04-03', '2024-09-02', 4),
(23, 'Encoder', 'satubigan', '2024-04-12', '2024-05-01', 4),
(24, 'Cashier', 'cashcash', '2024-04-20', '2024-04-30', 5);

-- --------------------------------------------------------

--
-- Table structure for table `intern_students`
--

CREATE TABLE `intern_students` (
  `student_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_students`
--

INSERT INTO `intern_students` (`student_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'user', 'user', 'user', 'user'),
(3, 'user2', 'user2', 'user2', 'user2'),
(4, 'user3', 'user3', 'user3', 'user3');

-- --------------------------------------------------------

--
-- Table structure for table `intern_supervisor`
--

CREATE TABLE `intern_supervisor` (
  `supervisor_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_supervisor`
--

INSERT INTO `intern_supervisor` (`supervisor_id`, `name`, `lastname`, `username`, `email`, `password`) VALUES
(6, 'Neon', 'Batislaon', 'SupNeon', 'neon@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_files`
--

CREATE TABLE `pdf_files` (
  `pdf_id` int(10) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `file_size` int(10) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_files`
--

INSERT INTO `pdf_files` (`pdf_id`, `file_name`, `file_path`, `file_size`, `file_type`, `student_id`) VALUES
(20, 'test.pdf', '../../uploads/test.pdf', 1687660, 'application/pdf', 3),
(23, 'Student Athlete Resume.pdf', '../../uploads/Student Athlete Resume.pdf', 96506, 'application/pdf', 4),
(24, 'test.pdf', '../../uploads/test.pdf', 1687660, 'application/pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deploy_student`
--
ALTER TABLE `deploy_student`
  ADD PRIMARY KEY (`deployment_id`),
  ADD KEY `deploy_studentId` (`student_id`),
  ADD KEY `deploy_companyId` (`company_id`),
  ADD KEY `deploy_internId` (`intern_id`);

--
-- Indexes for table `intern_application`
--
ALTER TABLE `intern_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `application_companyid` (`company_id`),
  ADD KEY `application_internid` (`internship_id`),
  ADD KEY `application_studentid` (`student_id`);

--
-- Indexes for table `intern_company`
--
ALTER TABLE `intern_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `intern_internship`
--
ALTER TABLE `intern_internship`
  ADD PRIMARY KEY (`internship_id`),
  ADD KEY `COMPANYID` (`company_id`);

--
-- Indexes for table `intern_students`
--
ALTER TABLE `intern_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `intern_supervisor`
--
ALTER TABLE `intern_supervisor`
  ADD PRIMARY KEY (`supervisor_id`);

--
-- Indexes for table `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD PRIMARY KEY (`pdf_id`),
  ADD KEY `STUDENTID` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deploy_student`
--
ALTER TABLE `deploy_student`
  MODIFY `deployment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intern_application`
--
ALTER TABLE `intern_application`
  MODIFY `application_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intern_company`
--
ALTER TABLE `intern_company`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intern_internship`
--
ALTER TABLE `intern_internship`
  MODIFY `internship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `intern_students`
--
ALTER TABLE `intern_students`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intern_supervisor`
--
ALTER TABLE `intern_supervisor`
  MODIFY `supervisor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `pdf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deploy_student`
--
ALTER TABLE `deploy_student`
  ADD CONSTRAINT `deploy_companyId` FOREIGN KEY (`company_id`) REFERENCES `intern_company` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deploy_internId` FOREIGN KEY (`intern_id`) REFERENCES `intern_internship` (`internship_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deploy_studentId` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `intern_application`
--
ALTER TABLE `intern_application`
  ADD CONSTRAINT `application_companyid` FOREIGN KEY (`company_id`) REFERENCES `intern_company` (`company_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_internid` FOREIGN KEY (`internship_id`) REFERENCES `intern_internship` (`internship_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_studentid` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `intern_internship`
--
ALTER TABLE `intern_internship`
  ADD CONSTRAINT `COMPANYID` FOREIGN KEY (`company_id`) REFERENCES `intern_company` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD CONSTRAINT `STUDENTID` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
