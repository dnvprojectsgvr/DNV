-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 02:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `login_type` varchar(16) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `login_type`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'CQWBQ2K4s6iXauaBCJtShyimtXaY4zVWXFJ/s3FDVZA='),
(2, 'admin', 'admin', 'EAZolWd/IurN+YgL/oyF35yJ5JDEAlkhu4g5rdIiyTg='),
(3, 'admin', 'admin', 'FA8oEXHu3pLHR7ZyB54CML6zAH0peT4Nlx2gNBm1j2s='),
(13, 'employee', 'niravparmar', 'fTqhROUyIXoI7IjOz4VwB2yAgiCnPx8k4JQGjiYwWrM='),
(14, 'employee', 'jaysolanki', 'fBgLnjgBKt8dgoY9MUfsqP3Yy2r8l+oKCp9jz6CR8EU='),
(15, 'employee', 'cm', 'setIq/fB+vgy56YZAnyrl6ZbaCN8+BFVklbx7QsObK8='),
(16, 'employee', 'viraj', 'BzvHQi8mdd7ftBxx1Axs2pVcgvuvtdoic3FGzRNxzQc='),
(17, 'employee', '', '/MCmc2VlUiy6cAMZN43pMGrxzYpoqdlqllYPxQDB5K0='),
(18, 'employee', 'rj', 'JeYFToCuF6hkReV78nrD4+MCQ1JvKb5JeodE5hlqhNA='),
(19, 'employee', 'abc', 'ReM4VvP5W4WXgXMZEaO5B7Zpn6CVhShAjzuAM0h3j+g='),
(20, 'admin', 'admin', 'CQWBQ2K4s6iXauaBCJtShyimtXaY4zVWXFJ/s3FDVZA=');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(10) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_criteria_details`
--

CREATE TABLE `faculty_criteria_details` (
  `id` int(10) NOT NULL,
  `criteria_name` varchar(45) NOT NULL,
  `criteria_marks` int(5) NOT NULL,
  `faculty_sub_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(10) NOT NULL,
  `faculty_id` varchar(30) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `faculty_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `dob`) VALUES
(2, 'ramesh12', 'ramesh', '', 'chouhan', 'ramesh  chouhan', 'suresh', 'male', 9832748978, 'ramesh@gmail.com', '1999-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_leaves`
--

CREATE TABLE `faculty_leaves` (
  `faculty_leaveid` int(11) NOT NULL,
  `faculty_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `leave_fromdate` date NOT NULL,
  `leave_todate` date NOT NULL,
  `leave_reason` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `requested_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faculty_leaves`
--

INSERT INTO `faculty_leaves` (`faculty_leaveid`, `faculty_id`, `leave_fromdate`, `leave_todate`, `leave_reason`, `status`, `requested_datetime`) VALUES
(14, 'ramesh12', '2018-02-01', '2018-02-05', 'college trip', 'deleted', '0000-00-00 00:00:00'),
(15, 'ramesh12', '2018-01-30', '2018-03-01', 'test\r\n', 'pending', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE `faculty_subjects` (
  `id` int(10) NOT NULL,
  `faculty_id` varchar(60) NOT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portal_config`
--

CREATE TABLE `portal_config` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(128) NOT NULL,
  `club_address` varchar(512) NOT NULL,
  `short_name` varchar(12) NOT NULL,
  `url` varchar(256) NOT NULL,
  `developer_name` varchar(64) NOT NULL,
  `developer_web` varchar(256) NOT NULL,
  `company_name` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portal_config`
--

INSERT INTO `portal_config` (`club_id`, `club_name`, `club_address`, `short_name`, `url`, `developer_name`, `developer_web`, `company_name`) VALUES
(1, 'DNV College', 'Plot no.3, Subhash Nagar, Sector 9A, Gandhidham(370205)', 'DNV', 'http://localhost/dnv/admin', 'GVR', 'http://compuzr.blogspot.in', 'Dnv College');

-- --------------------------------------------------------

--
-- Table structure for table `semester_details`
--

CREATE TABLE `semester_details` (
  `id` int(10) NOT NULL,
  `semester_name` varchar(45) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stream_details`
--

CREATE TABLE `stream_details` (
  `id` int(10) NOT NULL,
  `stream_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_criteria_details`
--

CREATE TABLE `student_criteria_details` (
  `id` int(10) NOT NULL,
  `student_id` varchar(60) NOT NULL,
  `faculty_criteria_id` int(10) NOT NULL,
  `obt_marks` int(5) NOT NULL,
  `out_marks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `admin_year` year(4) NOT NULL,
  `roll_no` int(3) NOT NULL,
  `course` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `admin_year`, `roll_no`, `course`, `dob`) VALUES
(2, '2010bca20', 'ramesh', 'singh', 'chouhan', 'ramesh singh chouhan', 'suresh', 'male', 8732467563, 'ramesh@gmail.com', 2010, 20, 'BCA', '1999-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_details`
--

CREATE TABLE `subjects_details` (
  `id` int(10) NOT NULL,
  `subjects_name` varchar(60) NOT NULL,
  `is_practical` tinyint(1) NOT NULL,
  `semester_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `user_id` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_ques` enum('favourite teacher','mother name','childhood friend','favourite food') NOT NULL,
  `security_ans` varchar(60) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`user_id`, `password`, `security_ques`, `security_ans`, `user_type`, `status`) VALUES
('2010bca20', 'Ramesh@12', 'mother name', 'heena', 'student', 'active'),
('admin', 'admin', 'favourite teacher', 'beena', 'admin', 'active'),
('ramesh12', 'Ramesh@12', 'favourite teacher', 'leena', 'faculty', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stream_id` (`stream_id`);

--
-- Indexes for table `faculty_criteria_details`
--
ALTER TABLE `faculty_criteria_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_sub_id` (`faculty_sub_id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `faculty_leaves`
--
ALTER TABLE `faculty_leaves`
  ADD PRIMARY KEY (`faculty_leaveid`);

--
-- Indexes for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `portal_config`
--
ALTER TABLE `portal_config`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `semester_details`
--
ALTER TABLE `semester_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `stream_details`
--
ALTER TABLE `stream_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_criteria_details`
--
ALTER TABLE `student_criteria_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`,`faculty_criteria_id`),
  ADD KEY `faculty_criteria_id` (`faculty_criteria_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subjects_details`
--
ALTER TABLE `subjects_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semester_id` (`semester_id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_criteria_details`
--
ALTER TABLE `faculty_criteria_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty_leaves`
--
ALTER TABLE `faculty_leaves`
  MODIFY `faculty_leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester_details`
--
ALTER TABLE `semester_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stream_details`
--
ALTER TABLE `stream_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_criteria_details`
--
ALTER TABLE `student_criteria_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects_details`
--
ALTER TABLE `subjects_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
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
