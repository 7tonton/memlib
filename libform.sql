-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 10:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `libform`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
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
  `stu_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp`
--

CREATE TABLE IF NOT EXISTS `tbl_temp` (
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
  `stu_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
 ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tbl_temp`
--
ALTER TABLE `tbl_temp`
 ADD PRIMARY KEY (`stu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
