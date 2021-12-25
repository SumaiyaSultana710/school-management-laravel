-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 06:56 PM
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
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(20) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `directory` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `duedate` varchar(50) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `filename`, `directory`, `date`, `duedate`, `class_id`, `section_id`, `subject_id`) VALUES
(8001, 'Bangla Assignment', 'class8_syllabus.pdf', '2021-12-12', '2021-12-12', 8, 1, 81),
(8002, 'Math Assignment', 'class-8mathassignment.pdf', '2021-12-01', '2021-12-04', 8, 1, 83);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(3) NOT NULL,
  `classname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classname`) VALUES
(1, 'One'),
(2, 'Two'),
(3, 'Three'),
(4, 'Four'),
(5, 'Five'),
(6, 'Six'),
(7, 'Seven'),
(8, 'Eight');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `starting` varchar(20) NOT NULL,
  `ending` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `starting`, `ending`) VALUES
(1, 'Christmas', '25 December', '25 December'),
(2, 'Craft Day', '06 January', '06 January'),
(3, 'School Picnic', '20 January', '30 January'),
(4, 'Multicultural Fair', '25 February', '29 February');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `finalgrade` varchar(50) NOT NULL,
  `section_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `student_id`, `subject_id`, `class_id`, `finalgrade`, `section_id`) VALUES
(8801, '2021-03-001', 81, 8, 'A+', 1),
(8802, '2021-03-001', 82, 8, 'A', 1),
(8803, '2021-03-001', 83, 8, 'A+', 1),
(8804, '2021-03-001', 84, 8, 'A', 1),
(8805, '2021-03-001', 85, 8, 'A+', 1),
(8806, '2021-03-001', 86, 8, 'A', 1),
(8807, '2021-03-001', 87, 8, 'A+', 1),
(8808, '2021-03-001', 88, 8, 'A', 1),
(8809, '2021-03-001', 89, 8, 'A+', 1),
(8800, '2021-03-001', 80, 8, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(20) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `directory` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `subject_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `filename`, `directory`, `date`, `subject_id`, `section_id`, `class_id`) VALUES
(880, 'Math Note', 'class-8mathnote.pdf', '2021-12-01', 83, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(20) NOT NULL,
  `noticedate` datetime NOT NULL,
  `class_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `noticedate`, `class_id`, `subject_id`, `section_id`, `description`) VALUES
(10, '2021-12-02 18:06:42', 8, 81, 1, 'Today\'s class cancel.'),
(10, '2021-12-02 18:06:42', 8, 86, 1, 'Class test in 20th August'),
(10, '2021-12-02 18:06:42', 8, 85, 1, 'Submit your assignment before 15th august');

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
(1, '2021-04-001', 'Mr. Mahfuzur Rahman', 'Business', '01000456945', '2021-03-001', 'mrrahman@gmail.com', 'Father', 'default.png'),
(3, '2021-04-002', 'Mr Rahman', 'Business', '01142136520', '2021-03-002', 'rahman@gmail.com', 'father', '274.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `result_id` int(11) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `midmarks` int(11) NOT NULL,
  `finalmarks` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `result_id`, `class_id`, `section_id`, `attendance`, `midmarks`, `finalmarks`, `total`, `subject_id`, `student_id`) VALUES
(1, 8803, 8, 1, 30, 80, 80, 190, 83, '2021-03-001'),
(2, 8804, 8, 1, 30, 60, 60, 150, 84, '2021-03-001'),
(3, 8805, 8, 1, 30, 80, 80, 190, 85, '2021-03-001'),
(4, 8806, 8, 1, 30, 60, 60, 150, 86, '2021-03-001'),
(5, 8807, 8, 1, 30, 80, 80, 190, 87, '2021-03-001'),
(6, 8808, 8, 1, 30, 60, 60, 150, 88, '2021-03-001'),
(7, 8809, 8, 1, 30, 80, 80, 190, 89, '2021-03-001'),
(8, 8800, 8, 1, 30, 60, 60, 150, 80, '2021-03-001'),
(9, 8801, 8, 1, 30, 80, 80, 190, 81, '2021-03-001'),
(10, 8802, 8, 1, 30, 60, 60, 150, 82, '2021-03-001');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `routine_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `startingtime` time NOT NULL,
  `endingtime` time NOT NULL,
  `day` varchar(50) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `teachername` varchar(50) NOT NULL,
  `sectionname` varchar(50) NOT NULL,
  `subjectname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`routine_id`, `class_id`, `section_id`, `teacher_id`, `startingtime`, `endingtime`, `day`, `subject_id`, `teachername`, `sectionname`, `subjectname`) VALUES
(801, 8, 1, '2021-02-001', '09:00:00', '10:00:00', 'Sunday', 81, 'Md. Abdur Rahim', 'A', 'Bangla'),
(802, 8, 1, '2021-02-002', '10:00:00', '11:00:00', 'Sunday', 82, 'Md. Rafiq', 'A', 'English'),
(803, 8, 1, '2021-02-003', '11:00:00', '12:00:00', 'Sunday', 83, 'Mr Rahman', 'A', 'Math'),
(804, 8, 1, '2021-02-004', '13:00:00', '14:00:00', 'Sunday', 84, 'Md. Ashfak', 'A', 'Science'),
(805, 8, 1, '2021-02-005', '09:00:00', '10:00:00', 'Saturday', 85, 'Md. Mahfuzur Rahman', 'A', 'Sociology'),
(806, 8, 1, '2021-02-006', '10:00:00', '11:00:00', 'Saturday', 86, 'Md. Mahbub', 'A', 'Religion'),
(807, 8, 1, '2021-02-007', '11:00:00', '12:00:00', 'Saturday', 87, 'Md. Jiya Uddin', 'A', 'ICT'),
(808, 8, 1, '2021-02-008', '13:00:00', '14:00:00', 'Saturday', 88, 'Md. Fazlul Karim', 'A', 'World Knowledge'),
(809, 8, 1, '2021-02-009', '09:00:00', '10:00:00', 'Monday', 89, 'Md. Karim', 'A', 'Home Economics'),
(800, 8, 1, '2021-02-010', '10:00:00', '11:00:00', 'Monday', 80, 'Md. Sarkar', 'A', 'Agriculture'),
(801, 8, 1, '2021-02-001', '11:00:00', '12:00:00', 'Monday', 81, 'Md. Abdur Rahim', 'A', 'Bangla'),
(802, 8, 1, '2021-02-002', '13:00:00', '14:00:00', 'Monday', 82, 'Md. Rafiq', 'A', 'English'),
(803, 8, 1, '2021-02-003', '09:00:00', '10:00:00', 'Tuesday', 83, 'Mr Rahman', 'A', 'Math'),
(804, 8, 1, '2021-02-004', '10:00:00', '11:00:00', 'Tuesday', 84, 'Md. Ashfak', 'A', 'Science'),
(805, 8, 1, '2021-02-005', '11:00:00', '12:00:00', 'Tuesday', 85, 'Md. Mahfuzur Rahman', 'A', 'Sociology'),
(806, 8, 1, '2021-02-006', '13:00:00', '14:00:00', 'Tuesday', 86, 'Md. Mahbub', 'A', 'Religion'),
(807, 8, 1, '2021-02-007', '09:00:00', '10:00:00', 'Wednessday', 87, 'Md. Jiya Uddin', 'A', 'ICT'),
(808, 8, 1, '2021-02-008', '10:00:00', '11:00:00', 'Wednessday', 88, 'Md. Fazlul Karim', 'A', 'World Knowledge'),
(809, 8, 1, '2021-02-009', '11:00:00', '12:00:00', 'Wednessday', 89, 'Md. Karim', 'A', 'Home Economics'),
(800, 8, 1, '2021-02-010', '13:00:00', '14:00:00', 'Wednessday', 80, 'Md. Sarkar', 'A', 'Agriculture'),
(801, 8, 1, '2021-02-001', '09:00:00', '10:00:00', 'Thursday', 81, 'Md. Abdur Rahim', 'A', 'Bangla'),
(802, 8, 1, '2021-02-002', '10:00:00', '11:00:00', 'Thursday', 82, 'Md. Rafiq', 'A', 'English'),
(803, 8, 1, '2021-02-003', '11:00:00', '12:00:00', 'Thursday', 83, 'Mr Rahman', 'A', 'Math'),
(804, 8, 1, '2021-02-004', '13:00:00', '14:00:00', 'Thursday', 84, 'Md. Ashfak', 'A', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `sectionname` varchar(50) NOT NULL,
  `classteacher` varchar(50) NOT NULL,
  `subject_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `class_id`, `sectionname`, `classteacher`, `subject_id`) VALUES
(801, 8, 'A', '2021-02-001', 81),
(802, 8, 'A', '2021-02-002', 82),
(803, 8, 'A', '2021-02-003', 83),
(804, 8, 'A', '2021-02-004', 84),
(805, 8, 'A', '2021-02-005', 85),
(806, 8, 'A', '2021-02-006', 86),
(807, 8, 'A', '2021-02-007', 87),
(808, 8, 'A', '2021-02-008', 88),
(809, 8, 'A', '2021-02-009', 89),
(800, 8, 'A', '2021-02-010', 80);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `class_id` int(2) NOT NULL,
  `section_id` int(2) NOT NULL,
  `studentid` varchar(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `studentgender` varchar(10) NOT NULL,
  `student_academic_mail` varchar(50) NOT NULL,
  `studentimage` varchar(100) NOT NULL,
  `parentid` varchar(11) DEFAULT NULL,
  `paddress` varchar(500) NOT NULL,
  `caddress` varchar(500) NOT NULL,
  `studentreligion` varchar(20) NOT NULL,
  `studentcontact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `class_id`, `section_id`, `studentid`, `studentname`, `fathername`, `mothername`, `studentgender`, `student_academic_mail`, `studentimage`, `parentid`, `paddress`, `caddress`, `studentreligion`, `studentcontact`) VALUES
(1, 8, 1, '2021-03-001', 'Munia Rahman', 'Mr. Mahfuzur Rahman', 'Bilkis Begum', 'female', 's202103001@student.school.ac.bd', 'student.jpg', '2021-04-001', 'mmm', 'Mirpur,Dhaka', 'Muslim', '01931111212'),
(2, 7, 1, '2021-03-002', 'Farhana', 'Mr. Siddik', 'Mrs. Siddik', 'female', 's202103002@student.school.ac.bd', 'student.jpg', NULL, 'Chittagong', 'Dhanmondi, Dhaka', 'Muslim', '01234567911');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(20) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `class_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subjectname`, `class_id`) VALUES
(81, 'Bangla', 8),
(82, 'English', 8),
(83, 'Math', 8),
(84, 'Science', 8),
(85, 'Sociology', 8),
(86, 'Religion', 8),
(87, 'ICT', 8),
(88, 'World Knowledge', 8),
(89, 'Home Economics', 8),
(80, 'Agriculture', 8),
(71, 'Bangla', 7);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `syllabus_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabus_id`, `title`, `directory`, `subject_id`, `class_id`) VALUES
(1, 'class-8', 'class8_syllabus.pdf', 81, 8);

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
  `subject_id` varchar(10) NOT NULL,
  `teachergmail` varchar(100) NOT NULL,
  `teacherimage` varchar(200) NOT NULL,
  `teachercontact` varchar(20) NOT NULL,
  `teacheraddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacherid`, `teachername`, `designation`, `qualification`, `description`, `subject_id`, `teachergmail`, `teacherimage`, `teachercontact`, `teacheraddress`) VALUES
(1, '2021-02-001', 'Md. Abdur Rahim', 'Lecturer', 'Masters in Bangla', 'good', '81', 't202102001@teacher.school.ac.bd', 'teacher.png', '01334567910', 'hgyigyhikgbv'),
(2, '2021-02-002', 'Md. Rafiq', 'Lecturer', 'Masters in English', 'good', '82', 't202102002@teacher.school.ac.bd', 'teacher.png', '01004567910', 'MIrpur,Dhaka'),
(3, '2021-02-003', 'Md. Rahman', 'Lecturer', 'Masters in Mathematics', 'good', '83', 't202102003@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(4, '2021-02-004', 'Md. Ashfak', 'Lecturer', 'Masters in Science', 'good', '84', 't202102004@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(5, '2021-02-005', 'Md. Mahfuzur Rahman', 'Lecturer', 'Masters in Sociology', 'good', '85', 't202102005@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(6, '2021-02-006', 'Md. Mahbub', 'Lecturer', 'Masters in Religion', 'good', '86', 't202102006@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(7, '2021-02-007', 'Md. Jiya Uddin', 'Lecturer', 'Masters in CSE', 'good', '87', 't202102007@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(8, '2021-02-008', 'Md. Fazlul Karim', 'Lecturer', 'Masters in Sociology', 'good', '88', 't202102008@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(9, '2021-02-009', 'Md. Karim', 'Lecturer', 'Masters in Home Economics', 'good', '89', 't202102009@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka'),
(10, '2021-02-010', 'Md. Sarkar', 'Lecturer', 'Masters in Agriculture', 'good', '80', 't202102010@teacher.school.ac.bd', 'teacher.png', '01004567910', 'Mirpur,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upload_id` int(20) NOT NULL,
  `assignment_id` int(20) NOT NULL,
  `uploadfilename` varchar(50) NOT NULL,
  `uploaddate` varchar(50) NOT NULL,
  `student_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `assignment_id`, `uploadfilename`, `uploaddate`, `student_id`) VALUES
(1, 8001, 'gradesheet (1).pdf', '2021-12-22', '2021-03-001'),
(2, 8002, 'class-8mathnote.pdf', '2021-12-24', '2021-03-001');

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
(3, '2021-02-001', '112233', 'teacher'),
(4, '2021-01-001', '112233', 'admin'),
(5, '2021-02-002', '123456', 'teacher'),
(6, '2021-02-003', '123456', 'teacher'),
(7, '2021-02-004', '123456', 'teacher'),
(8, '2021-02-005', '123456', 'teacher'),
(9, '2021-02-006', '123456', 'teacher'),
(10, '2021-02-007', '123456', 'teacher'),
(11, '2021-02-008', '123456', 'teacher'),
(12, '2021-02-009', '123456', 'teacher'),
(13, '2021-02-010', '123456', 'teacher'),
(14, '2021-03-002', '123456', 'student'),
(18, '2021-04-002', '123456+', 'parent');

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
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`syllabus_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `syllabus_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `upload_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
