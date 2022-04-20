-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 08:04 PM
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
-- Table structure for table `assign_work`
--

CREATE TABLE `assign_work` (
  `Reqno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_add1` text NOT NULL,
  `user_add2` text NOT NULL,
  `user_city` varchar(60) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `assign_tech` text NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_work`
--

INSERT INTO `assign_work` (`Reqno`, `request_id`, `request_info`, `request_desc`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_code`, `user_email`, `user_mobile`, `assign_tech`, `assign_date`) VALUES
(4, 2, 'laptop not working', 'it is not starting ', 'rina', '37/A', 'Eastern view', 'Dhaka', 1217, 'saima@gmail.com', 1334555667, 'saimon', '0000-00-00'),
(5, 3, 'tv screen blinking', 'tv screen is not started properly', 'samina', '77/2', 'wari', 'Dhaka', 1217, 'samina34@gmail.com', 135555578, 'saimon', '2021-04-21'),
(6, 3, 'tv screen blinking', 'tv screen is not started properly', 'samina', '77/2', 'wari', 'Dhaka', 1217, 'samina34@gmail.com', 135555578, 'saimon', '2021-04-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_work`
--
ALTER TABLE `assign_work`
  ADD PRIMARY KEY (`Reqno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_work`
--
ALTER TABLE `assign_work`
  MODIFY `Reqno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
