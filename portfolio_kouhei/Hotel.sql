-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 6 月 21 日 06:13
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
-- Database: `Hotel`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `Customer`
--

CREATE TABLE `Customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_gender` varchar(11) NOT NULL,
  `customer_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `Customer`
--

INSERT INTO `Customer` (`customer_id`, `customer_name`, `customer_phone`, `customer_mail`, `customer_password`, `customer_address`, `customer_gender`, `customer_age`) VALUES
(6, 'Dave', '007007', 'dave@gmail.com', 'dave11', 'IT-park', 'male', 28),
(9, 'Shuto', '1212121', 'shuto@gmail.com', 'shuto00', 'Chiba', 'female', 24),
(10, 'Takuya', '0987654321', 'takuya@gmail.com', 'takuya555', 'Taiwan', 'male', 21),
(13, 'kouhey.n', '00011155', 'kouhey@gmail.com', 'kouhey', 'Japan', 'male', 33),
(15, 'Ginger', '09109193', 'ginger@gmail.com', 'ginger111', 'road', 'female', 25),
(16, 'Akiko', '777888', 'akiko@gmail.com', 'akiko77', 'Japan', 'female', 22),
(17, 'Justine', '998877', 'justine@gmail.com', '5544', 'China', 'female', 23),
(19, 'nakashima', '012345', 'nakashima@gmail.com', '1234', 'Japan', 'male', 23);

-- --------------------------------------------------------

--
-- テーブルの構造 `Reservation`
--

CREATE TABLE `Reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_customer_id` int(11) NOT NULL,
  `reservation_check_in` date NOT NULL,
  `reservation_check_out` date NOT NULL,
  `reservation_adult` int(11) NOT NULL,
  `reservation_children` int(11) NOT NULL,
  `reservation_room_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `Reservation`
--

INSERT INTO `Reservation` (`reservation_id`, `reservation_customer_id`, `reservation_check_in`, `reservation_check_out`, `reservation_adult`, `reservation_children`, `reservation_room_name`) VALUES
(10, 7, '2019-07-17', '2019-07-22', 2, 2, 'Deluxe Room'),
(11, 8, '2019-06-12', '2019-06-15', 2, 2, 'Deluxe Room'),
(14, 10, '2019-08-01', '2019-08-05', 2, 2, 'Single Room'),
(15, 11, '2019-06-14', '2019-06-16', 2, 1, 'Presidential Room'),
(16, 11, '2019-08-08', '2019-08-14', 4, 4, 'Suite Room'),
(17, 13, '2019-08-01', '2019-08-03', 1, 1, 'Single Room'),
(19, 14, '2019-08-14', '2019-08-16', 4, 1, 'Family Room'),
(21, 5, '2019-06-20', '2019-06-25', 1, 0, 'Family Room'),
(22, 5, '2019-05-22', '2019-05-24', 4, 2, 'Suite Room'),
(29, 15, '2019-09-03', '2019-09-06', 2, 0, 'Single Room'),
(31, 18, '2019-06-22', '2019-06-23', 1, 0, 'Single Room'),
(32, 19, '2019-08-22', '2019-08-28', 2, 0, 'Family Room'),
(33, 5, '2019-06-22', '2019-06-25', 1, 0, 'Single Room');

-- --------------------------------------------------------

--
-- テーブルの構造 `Room`
--

CREATE TABLE `Room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `Room`
--

INSERT INTO `Room` (`room_id`, `room_name`, `room_price`) VALUES
(1, 'Single Room', '90.00'),
(2, 'Family Room', '120.00'),
(3, 'Presidential Room', '250.00'),
(4, 'Deluxe Room', '300.00'),
(5, 'Executive Room', '380.00'),
(6, 'Suite Room', '500.00');

-- --------------------------------------------------------

--
-- テーブルの構造 `Staff`
--

CREATE TABLE `Staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_phone` int(50) NOT NULL,
  `staff_mail` varchar(50) NOT NULL,
  `staff_password` varchar(50) NOT NULL,
  `staff_address` varchar(50) NOT NULL,
  `staff_gender` varchar(11) NOT NULL,
  `staff_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `Staff`
--

INSERT INTO `Staff` (`staff_id`, `staff_name`, `staff_phone`, `staff_mail`, `staff_password`, `staff_address`, `staff_gender`, `staff_age`) VALUES
(1, 'jon', 55555, 'keredo@gmail.com', '2222', 'newyork', 'male', 30),
(2, 'takuya', 123445, 'takuya@mail', 'dfhg', 'usa', 'female', 22),
(3, 'syuto', 777890, 'syuto@mail', 'kkaa', 'chiba', 'male', 47),
(4, 'chris', 12321, 'chris@mail', '88989', 'cebu', 'female', 77);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
