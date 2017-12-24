-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 06:44 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result_system`
--
CREATE DATABASE `result_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `result_system`;

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(45) NOT NULL,
  `stream_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stream_id` (`stream_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_criteria_details`
--

CREATE TABLE IF NOT EXISTS `faculty_criteria_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `criteria_name` varchar(45) NOT NULL,
  `criteria_marks` int(5) NOT NULL,
  `faculty_sub_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `faculty_sub_id` (`faculty_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE IF NOT EXISTS `faculty_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(30) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `faculty_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `dob`) VALUES
(2, 'ramesh12', 'ramesh', '', 'chouhan', 'ramesh  chouhan', 'suresh', 'male', 9832748978, 'ramesh@gmail.com', '1999-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE IF NOT EXISTS `faculty_subjects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(60) NOT NULL,
  `subject_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `faculty_id` (`faculty_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `semester_details`
--

CREATE TABLE IF NOT EXISTS `semester_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `semester_name` varchar(45) NOT NULL,
  `course_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stream_details`
--

CREATE TABLE IF NOT EXISTS `stream_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stream_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_criteria_details`
--

CREATE TABLE IF NOT EXISTS `student_criteria_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(60) NOT NULL,
  `faculty_criteria_id` int(10) NOT NULL,
  `obt_marks` int(5) NOT NULL,
  `out_marks` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`,`faculty_criteria_id`),
  KEY `faculty_criteria_id` (`faculty_criteria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(20) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `admin_year` year(4) NOT NULL,
  `roll_no` int(3) NOT NULL,
  `course` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `admin_year`, `roll_no`, `course`, `dob`) VALUES
(3, '2010bca20', 'ramesh', 'singh', 'chouhan', 'ramesh singh chouhan', 'suresh', 'male', 7987897897, 'ramesh@gmail.com', 2010, 20, 'BCA', '2007-07-01'),
(21, '2010bca21', 'dinesh', 'singh', 'chouhan', 'dinesh singh chouhan', 'suresh', 'male', 9847389753, 'dinesh@gmail.com', 2010, 21, 'BCA', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_details`
--

CREATE TABLE IF NOT EXISTS `subjects_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subjects_name` varchar(60) NOT NULL,
  `is_practical` tinyint(1) NOT NULL,
  `semester_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `semester_id` (`semester_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE IF NOT EXISTS `users_details` (
  `user_id` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_ques` enum('favourite teacher','mother name','childhood friend','favourite food') NOT NULL,
  `security_ans` varchar(60) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` enum('active','deactive') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`user_id`, `password`, `security_ques`, `security_ans`, `user_type`, `status`) VALUES
('2010bca20', 'ramesh12', 'favourite teacher', 'leena', 'student', 'active'),
('2010bca21', 'Dinesh@12', 'favourite teacher', 'leena', 'student', 'deactive'),
('ramesh12', 'Ramesh@12', 'favourite teacher', 'leena', 'faculty', 'deactive');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_details`
--
ALTER TABLE `course_details`
  ADD CONSTRAINT `course_details_ibfk_1` FOREIGN KEY (`stream_id`) REFERENCES `stream_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_criteria_details`
--
ALTER TABLE `faculty_criteria_details`
  ADD CONSTRAINT `faculty_criteria_details_ibfk_1` FOREIGN KEY (`faculty_sub_id`) REFERENCES `faculty_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD CONSTRAINT `faculty_details_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `users_details` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  ADD CONSTRAINT `faculty_subjects_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_details` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester_details`
--
ALTER TABLE `semester_details`
  ADD CONSTRAINT `semester_details_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_criteria_details`
--
ALTER TABLE `student_criteria_details`
  ADD CONSTRAINT `student_criteria_details_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_criteria_details_ibfk_2` FOREIGN KEY (`faculty_criteria_id`) REFERENCES `faculty_criteria_details` (`faculty_sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users_details` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects_details`
--
ALTER TABLE `subjects_details`
  ADD CONSTRAINT `subjects_details_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
