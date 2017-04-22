-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:15 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `map`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact_details`
--

CREATE TABLE `emergency_contact_details` (
  `user_id` int(2) NOT NULL,
  `contact_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contact_details`
--

INSERT INTO `emergency_contact_details` (`user_id`, `contact_no`) VALUES
(1, '9678224577'),
(1, '9818444423'),
(6, '8867435690'),
(7, '9823476588'),
(7, '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_details`
--

CREATE TABLE `user_profile_details` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin_code` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile_details`
--

INSERT INTO `user_profile_details` (`user_id`, `user_name`, `password`, `gender`, `address`, `pin_code`) VALUES
(1, 'gosimon', 'ska12', 'M', 'wsws', '110088'),
(1, 'gosimon', 'ska12', 'M', 'wsws', '110088'),
(1, 'gosimon', 'hh5', 'M', 'wsws', '110088'),
(1, 'gosimon', 'hh5', 'M', 'wsws', '110088'),
(2, 'gosimon', 'hh5', 'M', 'wsws', '110088'),
(3, 'ksazm', 'hh7', 'M', 'xsakjanj', '110088'),
(4, 'sx', 'jj1', 'M', ',sx,sx', '110088');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_contact_details`
--
ALTER TABLE `emergency_contact_details`
  ADD PRIMARY KEY (`user_id`,`contact_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
