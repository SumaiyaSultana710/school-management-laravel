-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 02:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_m_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(3) NOT NULL,
  `classname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(10) NOT NULL,
  `parentid` varchar(11) NOT NULL,
  `parentname` varchar(50) NOT NULL,
  `parentoccupation` varchar(20) NOT NULL,
  `parentcontact` varchar(20) NOT NULL,
  `studentid` varchar(11) NOT NULL,
  `parentgmail` varchar(50) NOT NULL,
  `relation` varchar(12) NOT NULL,
  `parentimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `parentid`, `parentname`, `parentoccupation`, `parentcontact`, `studentid`, `parentgmail`, `relation`, `parentimage`) VALUES
(1, '2021-04-001', 'Mr. Mahfuzur Rahman', 'Business', '01334567945', '2021-03-001', 'mrrahman@gmail.com', 'Father', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionid` int(10) NOT NULL,
  `sectionname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `studentid` varchar(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `studentgender` varchar(10) NOT NULL,
  `student_academic_mail` varchar(50) NOT NULL,
  `studentimage` varchar(100) NOT NULL,
  `parentid` varchar(11) NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `caddress` varchar(500) NOT NULL,
  `studentreligion` varchar(20) NOT NULL,
  `studentcontact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentid`, `studentname`, `fathername`, `mothername`, `studentgender`, `student_academic_mail`, `studentimage`, `parentid`, `paddress`, `caddress`, `studentreligion`, `studentcontact`) VALUES
(1, '2021-03-001', 'Munia Rahman', 'Mr. Mahfuzur Rahman', 'Bilkis Begum', 'female', 's202103001@student.school.ac.bd', 'student.jpg', '2021-04-001', 'mmm', 'Mirpur,Dhaka', 'Muslim', '01931111212');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(3) NOT NULL,
  `subjectid` int(3) NOT NULL,
  `subjectname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `teacherid` varchar(11) NOT NULL,
  `teachername` varchar(50) NOT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `teachergmail` varchar(100) NOT NULL,
  `teacherimage` varchar(200) NOT NULL,
  `teachercontact` varchar(20) NOT NULL,
  `teacheraddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacherid`, `teachername`, `designation`, `qualification`, `description`, `teachergmail`, `teacherimage`, `teachercontact`, `teacheraddress`) VALUES
(1, '2010-02-001', 'Md. Abdur Rahim', 'Lecturer', 'MSc in Mathematics', 'good', 't201002001@teacher.school.ac.bd', 'teacher.png', '01334567910', 'hgyigyhikgbv');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `password`, `type`) VALUES
(1, '2021-03-001', '112233', 'student'),
(2, '2021-04-001', '112233', 'parent'),
(3, '2010-02-001', '112233', 'teacher'),
(4, '2021-01-001', '112233', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
