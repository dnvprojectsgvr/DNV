-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 05:30 AM
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
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `number` varchar(15) NOT NULL,
  `mobile` varchar(120) NOT NULL,
  `email` varchar(250) NOT NULL,
  `work` text NOT NULL,
  `address` varchar(120) NOT NULL,
  `school` varchar(120) NOT NULL,
  `pix` varchar(120) NOT NULL,
  `group` varchar(120) NOT NULL,
  `note` text NOT NULL,
  `time_add` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', 'Your private,secure & beautiful online diary.'),
(2, 'Vision', 'We will keep the site as secure as possible but please be careful with your personal information.'),
(3, 'History', ''),
(4, 'Footer', '<p style=\"text-align:center\">Online Diary Managenment System</p>\n\n<p style=\"text-align:center\">All Rights Reserved &reg;2013</p>\n'),
(5, 'Upcoming Events', ''),
(6, 'Title', '<p><span style=\"font-family:trebuchet ms,geneva\">Online Diary Management System</span></p>\n'),
(7, 'News', ''),
(8, 'Announcements', ''),
(10, 'Calendar', ''),
(11, 'Directories', ''),
(12, 'president', ''),
(13, 'motto', ''),
(14, 'Campuses', '');

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
(1, 'bca', 1),
(2, 'bba', 2);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `date_start` varchar(100) NOT NULL,
  `date_end` varchar(100) NOT NULL
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

--
-- Dumping data for table `faculty_criteria_details`
--

INSERT INTO `faculty_criteria_details` (`id`, `criteria_name`, `criteria_marks`, `faculty_sub_id`) VALUES
(1, 'assignement', 10, 1),
(2, 'viva', 30, 1);

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
  `dob` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `faculty_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `dob`, `status`) VALUES
(2, 'ramesh12', 'ramesh', '', 'chouhan', 'ramesh  chouhan', 'suresh', 'male', 9832748978, 'ramesh@gmail.com', '1999-07-05', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE `faculty_subjects` (
  `id` int(10) NOT NULL,
  `faculty_id` varchar(60) NOT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_subjects`
--

INSERT INTO `faculty_subjects` (`id`, `faculty_id`, `subject_id`) VALUES
(1, 'ramesh12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `share_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `user_id`, `share_id`, `fname`, `uploaded_by`) VALUES
(138, 'admin/uploads/2711_File_goods clearance(part).docx', '2014-07-30 15:28:00', 'project material for goods clearance system', 111, 249, 'Good clearance system', 'Mark Isay'),
(139, 'admin/uploads/6230_File_banking.png', '2014-09-04 07:54:15', 'image', 221, 111, 'pix', 'Grace Amaka'),
(140, 'admin/uploads/7518_File_img-20150907-wa0004-001.jpg', '2015-10-08 10:55:42', 'my brother\'s graduation', 223, 0, 'abuti', 'naledimolefe'),
(141, 'admin/uploads/7777_File_IMG-20150907-WA0011.jpg', '2015-10-08 11:01:35', 'He made us proud', 224, 0, 'zak', 'Tshiamomolefe');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`) VALUES
(1, 'Family'),
(2, 'Friends');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(50) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `message_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message_sent`
--

CREATE TABLE `message_sent` (
  `message_sent_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `heading` varchar(400) NOT NULL,
  `details` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `details`, `date`, `pic`) VALUES
(1, 'Registration form is now available in our college campus. come now to be registerd', 'Registration form is available in our college so if you want to join our in our college please come with 20000Tsh for that registration form', '0000-00-00', ''),
(2, 'Mobile Application started soon', 'Mobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobi', '0000-00-00', ''),
(3, 'New Year Party', 'This party will be held on 31st DEC at college campus till 10PM.', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` varchar(350) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `user_id`) VALUES
(0, '1509624533C7l4SSdVUAIa7J1.jpg large.jpg', 0),
(0, '1509624533P_20160723_114316.jpg', 0),
(0, '1509624533pic.jpg', 0),
(0, '1509624533sign.jpg', 0),
(0, '1509624584C7l4SSdVUAIa7J1.jpg large.jpg', 0),
(0, '1509624584P_20160723_114316.jpg', 0),
(0, '1509624584pic.jpg', 0),
(0, '1509624584sign.jpg', 0),
(0, '150962468488895.jpg', 0),
(0, '150962468496028.jpg', 0),
(0, '1509624684101716.jpg', 0),
(0, '1509624684209536.jpg', 0),
(0, '1509624684279509.jpg', 0),
(0, '1509624684284379.jpg', 0),
(0, '1509624684325912.jpg', 0),
(0, '1509624684351677.jpg', 0),
(0, '1509624684352781.jpg', 0),
(0, '1509624684358830.jpg', 0),
(0, '1509624684392248.jpg', 0),
(0, '1509624684398120.jpg', 0),
(0, '1509624684420761.jpg', 0),
(0, '1509624684427651.jpg', 0),
(0, '1509624684431202.jpg', 0),
(0, '1509624684458977.jpg', 0),
(0, '1509624684469415.jpg', 0),
(0, '1509624684681200.jpg', 0),
(0, '1509624685697997.jpg', 0),
(0, '1509624685703493.jpg', 0),
(0, '1509624685715497.jpg', 0),
(0, '1509624685728309.jpg', 0),
(0, '1509624685735906.jpg', 0),
(0, '1509624685792309.jpg', 0),
(0, '1509624685835698.jpg', 0);

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
-- Table structure for table `student_backpack`
--

CREATE TABLE `student_backpack` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(100) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL
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
  `father_name` varchar(45) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `admin_year` year(4) NOT NULL,
  `roll_no` int(3) NOT NULL,
  `course` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_id`, `f_name`, `m_name`, `l_name`, `full_name`, `father_name`, `gender`, `mob_no`, `email_id`, `admin_year`, `roll_no`, `course`, `dob`, `status`) VALUES
(3, '2010bca20', 'ramesh', 'singh', 'chouhan', 'ramesh singh chouhan', 'suresh', 'male', 7987897897, 'ramesh@gmail.com', 2010, 20, 'BCA', '2007-07-01', 'ACTIVE'),
(21, '2010bca21', 'dinesh', 'singh', 'chouhan', 'dinesh singh chouhan', 'suresh', 'male', 9847389753, 'dinesh@gmail.com', 2010, 21, 'BCA', '0000-00-00', 'ACTIVE');

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
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `about` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('2010bca20', 'ramesh12', 'favourite teacher', 'leena', 'student', 'active'),
('2010bca21', 'dinesh@12', 'favourite teacher', 'leena', 'student', 'deactive'),
('admin', 'admin', 'favourite teacher', 'leena', 'admin', 'active'),
('ramesh12', 'ramesh@12', 'favourite teacher', 'leena', 'faculty', 'active');

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
-- Indexes for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty_criteria_details`
--
ALTER TABLE `faculty_criteria_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty_subjects`
--
ALTER TABLE `faculty_subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `portal_config`
--
ALTER TABLE `portal_config`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `subjects_details`
--
ALTER TABLE `subjects_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
