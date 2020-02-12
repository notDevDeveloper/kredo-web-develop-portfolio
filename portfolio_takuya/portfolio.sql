-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 6 月 21 日 06:08
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_confirmpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_confirmpass`) VALUES
(1, 'Takuya Ito', 'takuya19991120@gmail.com', '1120', '1120');

-- --------------------------------------------------------

--
-- テーブルの構造 `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_student_name` varchar(50) NOT NULL,
  `appointment_student_email` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_teacher` varchar(50) NOT NULL,
  `appointment_timezone` varchar(50) NOT NULL,
  `appointment_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_teacher_id` int(11) NOT NULL,
  `comment_student_id` int(11) NOT NULL,
  `comment_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_teacher_id`, `comment_student_id`, `comment_text`) VALUES
(1, 9, 16, 'He  is good teacher!');

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(1, 'takuya', 'takuya@gmail.com', 'question', 'please more information');

-- --------------------------------------------------------

--
-- テーブルの構造 `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_teacher_id` int(11) NOT NULL,
  `course_date` date NOT NULL,
  `course_timezone` varchar(50) NOT NULL,
  `reservation_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `course`
--

INSERT INTO `course` (`course_id`, `course_teacher_id`, `course_date`, `course_timezone`, `reservation_status`) VALUES
(1, 9, '2019-06-24', 'morning', 'available'),
(2, 9, '2019-06-24', 'afternoon', 'available'),
(3, 9, '2019-06-24', 'night', 'available'),
(4, 10, '2019-06-24', 'morning', 'available'),
(5, 10, '2019-06-24', 'afternoon', 'available'),
(6, 10, '2019-06-24', 'night', 'available'),
(7, 11, '2019-06-24', 'morning', 'available'),
(8, 11, '2019-06-24', 'afternoon', 'available'),
(9, 11, '2019-06-24', 'night', 'available'),
(10, 12, '2019-06-24', 'morning', 'available'),
(11, 12, '2019-06-24', 'afternoon', 'available'),
(12, 12, '2019-06-24', 'night', 'available'),
(13, 13, '2019-06-24', 'morning', 'available'),
(14, 13, '2019-06-24', 'afternoon', 'available'),
(15, 13, '2019-06-24', 'night', 'available'),
(16, 14, '2019-06-24', 'morning', 'available'),
(17, 14, '2019-06-24', 'afternoon', 'available'),
(18, 14, '2019-06-24', 'night', 'available'),
(19, 24, '2019-06-24', 'morning', 'available');

-- --------------------------------------------------------

--
-- テーブルの構造 `course_request`
--

CREATE TABLE `course_request` (
  `request_id` int(11) NOT NULL,
  `request_course_id` int(11) NOT NULL,
  `request_student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_pass` varchar(50) NOT NULL,
  `student_confirmpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_email`, `student_pass`, `student_confirmpass`) VALUES
(3, 'toru', 'toru10969@gmail.com', '10969', '10969'),
(4, 'taka', 'taka10969@gmail.com', '10969', '10969'),
(5, 'tomoya', 'tomoya10969@gmail.com', '10969', '10969'),
(6, 'Ryota', 'ryota10969@gmail.com', '10969', '10969'),
(7, 'takeru', 'takeru_k1@gmail.com', '111', '111'),
(8, 'haruna', 'haruna_sca@gmail.com', '69', '69');

-- --------------------------------------------------------

--
-- テーブルの構造 `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_cefr` varchar(50) NOT NULL,
  `teacher_specialty` varchar(50) NOT NULL,
  `teacher_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_cefr`, `teacher_specialty`, `teacher_image`) VALUES
(9, 'wilson', 'wilson@gmail.com', 'c1', 'grammar', 'images/tutor_1.jpg'),
(10, 'Parker', 'parker@gmail.com', 'c2', 'speaking', 'images/tutor_2.jpg'),
(11, 'Smith', 'smith@gmail', 'c1', 'grammar,business', 'images/tutor_3.jpg'),
(12, 'Henderson', 'henderson@gmail.com', 'c2', 'pronunciation', 'images/tutor_4.jpg'),
(13, 'Mike', 'mike@gmail.com', 'c2', 'grammar', 'images/tutor_5.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_confirmpass` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_confirmpass`, `user_type`) VALUES
(10, 'ito', 'ito@gmail.com', '1120', '1120', 'Admin'),
(11, 'taka', 'taka@gmail.com', '10969', '10969', 'Student'),
(12, 'toru', 'toru@gmail.com', '10969', '10969', 'Student'),
(13, 'ryota', 'ryota@gmail.com', '10969', '10969', 'Student'),
(14, 'tomoya', 'tomoya@gmail.com', '10969', '10969', 'Student'),
(15, 'admin', 'admin@gmail.com', '1120', '1120', 'Admin'),
(17, 'takuya', 'takuya1120@gmail.com', '1120', '1120', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_request`
--
ALTER TABLE `course_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `course_request`
--
ALTER TABLE `course_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
