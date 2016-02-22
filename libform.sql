-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 12:01 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libform`
--

-- --------------------------------------------------------

--
-- Table structure for table `stf_info`
--

CREATE TABLE `stf_info` (
  `stf_id` varchar(32) NOT NULL,
  `stf_nid` varchar(44) NOT NULL,
  `stf_cam` varchar(44) NOT NULL,
  `stf_fname` varchar(44) NOT NULL,
  `stf_mname` varchar(44) NOT NULL,
  `stf_lname` varchar(44) NOT NULL,
  `stf_dep` varchar(44) NOT NULL,
  `stf_email` varchar(44) NOT NULL,
  `stf_address` varchar(100) NOT NULL,
  `stf_mob` varchar(44) NOT NULL,
  `stf_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE `stu_info` (
  `stu_id` varchar(44) NOT NULL,
  `stu_nid` varchar(44) NOT NULL,
  `stu_cam` varchar(44) NOT NULL,
  `stu_fname` varchar(44) NOT NULL,
  `stu_mname` varchar(44) NOT NULL,
  `stu_lname` varchar(44) NOT NULL,
  `stu_dep` varchar(44) NOT NULL,
  `stu_email` varchar(44) NOT NULL,
  `stu_address` varchar(100) NOT NULL,
  `stu_mob` varchar(44) NOT NULL,
  `stu_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stu_info`
--

INSERT INTO `stu_info` (`stu_id`, `stu_nid`, `stu_cam`, `stu_fname`, `stu_mname`, `stu_lname`, `stu_dep`, `stu_email`, `stu_address`, `stu_mob`, `stu_date`) VALUES
('', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stf_info`
--
ALTER TABLE `stf_info`
  ADD PRIMARY KEY (`stf_id`);

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
  ADD PRIMARY KEY (`stu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
