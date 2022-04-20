-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 07:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_add1` text NOT NULL,
  `user_add2` text NOT NULL,
  `user_city` varchar(60) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`request_id`, `request_info`, `request_desc`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_code`, `user_email`, `user_mobile`, `user_date`) VALUES
(1, 'keyboard not working', 'some buttons are not working', 'Saima', '88/1', 'Ideal Point', 'Dhaka', 1217, 'saima@gmail.com', 1334434565, 462021),
(2, 'laptop not working', 'it is not starting ', 'rina', '37/A', 'Eastern view', 'Dhaka', 1217, 'saima@gmail.com', 1334555667, 462021),
(3, 'tv screen blinking', 'tv screen is not started properly', 'samina', '77/2', 'wari', 'Dhaka', 1217, 'samina34@gmail.com', 135555578, 462021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
