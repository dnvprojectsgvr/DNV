-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 05:18 PM
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
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `srt_date` date NOT NULL,
  `lst_date` date NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'open' COMMENT '1=Active, 0=Inactive',
  `subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `faculty_id`, `srt_date`, `lst_date`, `name`, `note`, `picture`, `created`, `modified`, `status`, `subject`) VALUES
(1, 'ramesh12', '2018-02-01', '2018-03-01', 'test', 'manager@example.com', '', '2018-03-02 21:42:05', '2018-03-02 21:42:05', 'closed', 0),
(2, 'ramesh12', '2018-02-20', '2018-03-06', 'test 2', 'admin@example.com', '', '2018-03-02 21:43:06', '2018-03-02 21:43:06', 'deleted', 0),
(3, 'ramesh12', '2018-02-10', '2018-02-21', 'test 3', 'svirajpal@gmail.com', '', '2018-03-02 21:43:49', '2018-03-02 21:43:49', 'closed', 0),
(4, 'ramesh12', '2018-02-02', '2018-03-02', 'test 4', '8401418867', 'data.pdf', '2018-03-02 21:44:59', '2018-03-02 21:44:59', 'closed', 0),
(5, 'ramesh12', '2018-02-01', '2018-03-04', 'nkvhjvjhv', 'jhvjhvjhv', 'check.pdf', '2018-03-02 21:47:34', '2018-03-02 21:47:34', 'deleted', 0),
(6, 'ramesh12', '2018-03-01', '2018-03-24', 'IBPS part 4', 'this was a test', 'IBPS_CRP_SPL_VII_Detail_Advt8.pdf', '2018-03-03 18:32:19', '2018-03-03 18:32:19', 'closed', 0),
(7, 'ramesh12', '2018-02-27', '2018-03-03', 'test 4', 'this was a test 2', '', '2018-03-03 18:32:03', '2018-03-03 18:32:03', 'open', 0),
(8, 'ramesh12', '2018-03-01', '2018-03-15', 'test 6', 'this was a test with faculty id', 'jijosa_waiting_ticket14APR_2018.pdf', '2018-03-02 22:12:40', '2018-03-02 22:12:40', 'open', 0),
(9, 'ramesh12', '2018-03-01', '2018-03-15', 'test 5', 'this was a test with faculty id (2)', 'ssc_sp_payment.pdf', '2018-03-02 22:16:17', '2018-03-02 22:16:17', 'open', 0),
(10, 'ramesh12', '2018-03-09', '2018-03-20', 'nkvhjvjhvsfedsd', 'sdsfghjkhhg', 'check3.pdf', '2018-03-02 22:33:55', '2018-03-02 22:33:55', 'closed', 0),
(11, 'ramesh12', '2018-03-13', '2018-02-25', 'test 2', 'this was a test with faculty id', 'IBPS_CRP_SPL_VII_Detail_Advt1.pdf', '2018-03-02 22:34:33', '2018-03-02 22:34:33', 'closed', 0),
(12, 'ramesh12', '2018-02-01', '2018-03-01', 'IBPS part 2 edit', 'this was a test', 'IBPS_CRP_SPL_VII_Detail_Advt2.pdf', '2018-03-03 18:00:29', '2018-03-03 18:00:29', 'closed', 0),
(13, 'ramesh12', '2018-02-01', '2018-03-01', 'IBPS part 3', 'this was a test', 'IBPS_CRP_SPL_VII_Detail_Advt4.pdf', '2018-03-03 18:07:30', '2018-03-03 18:07:30', 'closed', 0),
(14, 'ramesh12', '2018-02-01', '2018-03-01', 'IBPS part 3', 'this was a test', 'IBPS_CRP_SPL_VII_Detail_Advt5.pdf', '2018-03-03 18:08:42', '2018-03-03 18:08:42', 'closed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(10) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_name`, `stream_id`) VALUES
(1, 'BCA', 1),
(2, 'BBA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `criteria_details`
--

CREATE TABLE `criteria_details` (
  `id` int(10) NOT NULL,
  `criteria_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `u_id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `class` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`u_id`, `name`, `class`) VALUES
(1, 'test', ' \r\n                    this is a test of gallery with agents of shield.                   '),
(2, 'test', 'test of gallery with agents of shield');

-- --------------------------------------------------------

--
-- Table structure for table `events_photos`
--

CREATE TABLE `events_photos` (
  `id` int(11) NOT NULL,
  `image` varchar(350) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `events_photos`
--

INSERT INTO `events_photos` (`id`, `image`, `user_id`) VALUES
(1, '1519877646vlcsnap-error294.png', 1),
(5, '1519964832vlcsnap-error317.png', 1),
(7, '1519965177P_20160723_114316.jpg', 1),
(8, '1519965177vlcsnap-error294.png', 1),
(9, '1519965177vlcsnap-error317.png', 1),
(10, '1519965177vlcsnap-error767.png', 1),
(11, '1519965195P_20160723_114316.jpg', 1),
(12, '1519965195vlcsnap-error294.png', 1),
(13, '1519965195vlcsnap-error317.png', 1),
(14, '1519965195vlcsnap-error767.png', 1),
(15, '1520005556P_20160723_114316.jpg', 2),
(16, '1520005556vlcsnap-error294.png', 2),
(17, '1520005556vlcsnap-error317.png', 2),
(18, '1520005556vlcsnap-error767.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_criteria_details`
--

CREATE TABLE `faculty_criteria_details` (
  `id` int(10) NOT NULL,
  `criteria_id` int(10) NOT NULL,
  `criteria_marks` int(5) NOT NULL,
  `faculty_sub_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `faculty_id` varchar(30) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`faculty_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `dob`, `status`) VALUES
('ramesh12', 'ramesh', 'ram', 'chouhan', 'ramesh  chouhan', 'suresh', 'male', 9843789754, 'ramesh@gmail.com', '1999-07-05', 'ACTIVE');

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
  `requested_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faculty_leaves`
--

INSERT INTO `faculty_leaves` (`faculty_leaveid`, `faculty_id`, `leave_fromdate`, `leave_todate`, `leave_reason`, `status`, `requested_datetime`) VALUES
(14, 'ramesh12', '2018-02-01', '2018-02-05', 'college trip', 'deleted', '0000-00-00 00:00:00'),
(15, 'ramesh12', '2018-01-30', '2018-03-01', 'test\r\n', 'pending', '0000-00-00 00:00:00'),
(16, 'ramesh12', '2018-01-30', '2018-02-10', 'this is also a test', 'pending', '2018-02-11 13:53:47'),
(17, 'ramesh12', '2018-03-01', '2018-03-31', 'thigjfcbtrdvy', 'approved', '2018-03-01 09:38:37');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `u_id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `class` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`u_id`, `name`, `class`) VALUES
(1, 'test', ' \r\n                     \r\n                    this is a test of gallery with agents of shield.                                     ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photos`
--

CREATE TABLE `gallery_photos` (
  `id` int(11) NOT NULL,
  `image` varchar(350) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallery_photos`
--

INSERT INTO `gallery_photos` (`id`, `image`, `user_id`) VALUES
(1, '1520005608P_20160723_114316.jpg', 1),
(2, '1520005608vlcsnap-error294.png', 1),
(3, '1520005608vlcsnap-error317.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecture_report`
--

CREATE TABLE `lecture_report` (
  `id` int(10) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `subject` int(10) NOT NULL,
  `note` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `no_of_pre_student` int(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `reporttime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture_report`
--

INSERT INTO `lecture_report` (`id`, `faculty_id`, `subject`, `note`, `date`, `no_of_pre_student`, `status`, `reporttime`) VALUES
(1, 'ramesh12', 0, 'This is a test', '2018-02-07', 14, 'approved', '2018-02-11 13:55:22'),
(2, 'ramesh12', 0, 'this is also a test', '2018-02-07', 15, 'rejected', '2018-02-11 13:55:42'),
(3, 'ramesh12', 0, 'test', '2018-02-17', 50, 'pending', '2018-02-11 14:08:48');

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

--
-- Dumping data for table `semester_details`
--

INSERT INTO `semester_details` (`id`, `semester_name`, `course_id`) VALUES
(1, 'SEM-1', 1),
(2, 'SEM-2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stream_details`
--

CREATE TABLE `stream_details` (
  `id` int(10) NOT NULL,
  `stream_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream_details`
--

INSERT INTO `stream_details` (`id`, `stream_name`) VALUES
(1, 'SCIENCE'),
(2, 'COMMERCE');

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
  `dob` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `admin_year`, `roll_no`, `course`, `dob`, `status`) VALUES
('2010bca20', 'suresh', 'singh', 'chouhan', 'suresh singh chouhan', 'ganesh', 'male', 8768563476, 'suresh@gmail.com', 2010, 20, 'BCA', '1999-07-05', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_details`
--

CREATE TABLE `subjects_details` (
  `id` int(10) NOT NULL,
  `subjects_name` varchar(60) NOT NULL,
  `criteria_marks` int(5) NOT NULL,
  `is_practical` tinyint(1) NOT NULL,
  `semester_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_details`
--

INSERT INTO `subjects_details` (`id`, `subjects_name`, `criteria_marks`, `is_practical`, `semester_id`) VALUES
(1, 'PHP', 0, 1, 1),
(2, 'ACCOUNTS', 0, 0, 2),
(6, 'vb.net', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(12) NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `name`, `description`, `user_id`, `create_date`, `status`) VALUES
(1, 'test 4', 'sdfghjkj', '', '2018-03-03 21:43:30', 'open'),
(2, 'dfghj', 'sdfghkjlk;', '', '2018-03-03 21:43:30', 'open'),
(3, 'sdsfghjkl;lkjhgfd', 'fgfhjlkjhgfds', '', '2018-03-03 21:43:30', 'open');

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
('2010bca20', 'Suresh@12', 'favourite teacher', 'heena', 'student', 'active'),
('admin', 'admin', 'favourite teacher', 'beena', 'admin', 'active'),
('ramesh12', 'ramesh@123', 'favourite teacher', 'geeta', 'faculty', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stream_id` (`stream_id`);

--
-- Indexes for table `criteria_details`
--
ALTER TABLE `criteria_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `events_photos`
--
ALTER TABLE `events_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_criteria_details`
--
ALTER TABLE `faculty_criteria_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_sub_id` (`faculty_sub_id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `gallery_photos`
--
ALTER TABLE `gallery_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_report`
--
ALTER TABLE `lecture_report`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `faculty_criteria_id` (`faculty_criteria_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subjects_details`
--
ALTER TABLE `subjects_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `criteria_details`
--
ALTER TABLE `criteria_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events_photos`
--
ALTER TABLE `events_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `faculty_criteria_details`
--
ALTER TABLE `faculty_criteria_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_leaves`
--
ALTER TABLE `faculty_leaves`
  MODIFY `faculty_leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery_photos`
--
ALTER TABLE `gallery_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lecture_report`
--
ALTER TABLE `lecture_report`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semester_details`
--
ALTER TABLE `semester_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stream_details`
--
ALTER TABLE `stream_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student_criteria_details`
--
ALTER TABLE `student_criteria_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects_details`
--
ALTER TABLE `subjects_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  ADD CONSTRAINT `faculty_criteria_details_ibfk_1` FOREIGN KEY (`faculty_sub_id`) REFERENCES `faculty_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_criteria_details_ibfk_2` FOREIGN KEY (`criteria_id`) REFERENCES `criteria_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `student_criteria_details_ibfk_3` FOREIGN KEY (`faculty_criteria_id`) REFERENCES `faculty_criteria_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
