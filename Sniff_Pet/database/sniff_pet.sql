-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 11:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sniff_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(50) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emp_position` varchar(50) CHARACTER SET latin1 NOT NULL,
  `age` int(50) NOT NULL,
  `contact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `emp_position`, `age`, `contact`, `address`, `gender`) VALUES
(1, 'Allen', 'Veterinarian', 35, '09560437989', 'Danga', 'Male'),
(2, 'Juna', 'Groomer', 30, '09123412121', 'Guguinto', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(225) NOT NULL,
  `name` varchar(225) CHARACTER SET latin1 NOT NULL,
  `files` varchar(225) CHARACTER SET latin1 NOT NULL,
  `text` text CHARACTER SET latin1 NOT NULL,
  `time` int(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `name`, `files`, `text`, `time`, `date`) VALUES
(1, 'a', '', 'a', 1575249576, '2019-12-02'),
(2, 'a', '', 'a', 1575249614, '2019-12-02'),
(3, 'Santos', '', 'Allen', 1575249959, '2019-12-02'),
(4, 'h', 'dogo.png', 'hi', 1575250040, '2019-12-02'),
(5, 'anonymous', '', 'dasdasda', 1575251399, '2019-12-02'),
(6, 'Hi', '', 'Jack', 1575265382, '2019-12-02'),
(7, 'Vincent', '', 'Pogi si Allen', 1575266171, '2019-12-02'),
(8, 'anonymous', 'O969zbQ.jpg', 'wow', 1575266698, '2019-12-02'),
(9, 'Sam', '', 'Hello', 1575269714, '2019-12-02'),
(10, 'allen', 'allen', 'asdasd', 0, '0000-00-00'),
(11, 'anonymous', '', 'Nice! Sana all!', 1575525984, '2019-12-05'),
(13, 'Sam', '', 'Alele', 1575526924, '2019-12-05'),
(14, 'Arjude', '', 'COmplex', 1575526963, '2019-12-05'),
(15, 'Juna', '', 'Juna', 1575611370, '2019-12-06'),
(16, 'anonymous', 'pngtree-vector-house-icon-png-image_695726.jpg', 'asdasd', 1575611430, '2019-12-06'),
(17, 'anonymous', 'pngtree-vector-house-icon-png-image_695726.jpg', 'asdasd', 1575619248, '2019-12-06'),
(18, 'anonymous', '38674906-paws-wallpapers.jpg', 'asd', 1575619350, '2019-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(5) NOT NULL,
  `client_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone_number` varchar(30) CHARACTER SET latin1 NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `client_name`, `address`, `gender`, `phone_number`, `username`, `password`) VALUES
(1, 'allen allen', '', 'Male', '09560437989', 'allen', 'allen'),
(2, 'Jack Reyes', '', 'Female', '09112231231', 'Jack', 'jack'),
(3, 'Juna Tria', '', 'Male', '09612712187', 'Juna', 'junapogi'),
(4, 'Allen Santos', '', 'Male', '09560437989', 'Allen', 'allen0013'),
(5, 'Allen Talavera', 'Danga', 'Male', '09560438979', '0013', 'allen');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(15) NOT NULL,
  `avatar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pet_owner` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `breed` varchar(50) CHARACTER SET latin1 NOT NULL,
  `age` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `avatar`, `pet_name`, `pet_type`, `pet_owner`, `address`, `breed`, `age`, `gender`) VALUES
(1, '50428380_2169543303098157_5292242475744755712_n.jp', 'allen', 'lenal', 'allen allen', '', 'ne', '2 months', 'Male'),
(2, '50428380_2169543303098157_5292242475744755712_n.jp', 'Hi', 'Cat', '<br />\r\n<b>Notice</b>:  Undefined variable: row in', '<br />\r\n<b>Notice</b>:  Undefined variable: row in', 'Puskal', '1 year', 'Female'),
(3, 'dog-cat-best-friends_102034-74.jpg', 'ad', 're', 'Allen Talavera', 'Danga', 'ng', '1 year', 'Female'),
(4, '38674906-paws-wallpapers.jpg', 'asd', 'dsa', 'Allen Talavera', 'Danga', 'asd', '2 months', 'Male'),
(5, 'home-icon-mobile-app-and-web-site-start-main-page-', 'asd', 'asd', 'Allen Talavera', 'Danga', 'asd', '1 year', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `service_price` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_price`) VALUES
(1, 'Check-Up', '$100'),
(2, 'Groom', '$50');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vaccine_id` int(11) NOT NULL,
  `avatar` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vaccine_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pet_weight` int(50) NOT NULL,
  `vaccine_against` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vaccine_manufact` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vaccine_lotno` int(100) NOT NULL,
  `veterinarian` varchar(500) CHARACTER SET latin1 NOT NULL,
  `vaccine_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vaccine_id`, `avatar`, `vaccine_name`, `pet_weight`, `vaccine_against`, `vaccine_manufact`, `vaccine_lotno`, `veterinarian`, `vaccine_date`) VALUES
(1, '0', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(2, '0', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(3, '0', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(4, '0', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(5, '0', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(6, '0', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(7, '0', '', 45, 'worm', 'allen', 123123, 'sam', '2019-12-05 15:08:45'),
(8, '0', '', 45, 'worm', 'allen', 123123, 'sam', '2019-12-05 15:08:45'),
(9, '0', '', 45, 'worm', 'allen', 123123, 'sam', '2019-12-05 15:08:45'),
(10, '0', '', 45, 'worm', 'allen', 123123, 'sam', '2019-12-05 15:08:45'),
(11, '0', '', 45, 'worm', 'allen', 123123, 'sam', '2019-12-05 15:08:45'),
(12, '0', '', 45, 'worm', 'allen', 123123, 'sam', '2019-12-05 15:08:45'),
(13, '', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(14, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(15, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(16, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(17, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:08:45'),
(18, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:09:06'),
(19, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:09:56'),
(20, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:10:00'),
(21, 'spidey.jpg', '', 45, 'Worm', 'Allen', 123123, 'Sam', '2019-12-05 15:10:10'),
(22, 'shutterstock_449717452-e1519069366969-1024x542.jpg', '', 45, 'tae', 'allen', 123123, 'Sam', '2019-12-05 15:15:12'),
(23, 'shutterstock_449717452-e1519069366969-1024x542.jpg', '', 45, 'tae', 'allen', 123123, 'Sam', '2019-12-05 15:15:58'),
(24, '38674906-paws-wallpapers.jpg', '', 12, 'worm', 'allen', 321321, 'samm', '2019-12-05 15:17:48'),
(25, '38674906-paws-wallpapers.jpg', '', 12, 'worm', 'allen', 321321, 'samm', '2019-12-05 15:18:26'),
(26, '38674906-paws-wallpapers.jpg', '', 12, 'worm', 'allen', 321321, 'samm', '2019-12-05 15:18:32'),
(27, '38674906-paws-wallpapers.jpg', '', 12, 'worm', 'allen', 321321, 'samm', '2019-12-05 15:18:42'),
(28, '38674906-paws-wallpapers.jpg', '', 12, 'worm', 'allen', 321321, 'samm', '2019-12-05 15:18:46'),
(29, 'spidey.jpg', 'It', 45, 'worm', 'allen', 123123, 'Sam', '2019-12-05 15:22:17'),
(30, 'spidey.jpg', 'It', 45, 'worm', 'allen', 123123, 'Sam', '2019-12-05 15:23:59'),
(31, 'spidey.jpg', 'It', 45, 'worm', 'allen', 123123, 'Sam', '2019-12-05 15:24:07'),
(32, 'spidey.jpg', 'It', 45, 'worm', 'allen', 123123, 'Sam', '2019-12-05 15:28:26'),
(33, 'spidey.jpg', 'It', 45, 'worm', 'allen', 123123, 'Sam', '2019-12-05 15:28:52'),
(34, 'spidey.jpg', 'Allen', 45, 'Worm', 'Juna', 123123, 'Sam', '2019-12-06 05:43:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
