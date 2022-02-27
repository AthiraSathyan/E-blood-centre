-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:10 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE IF NOT EXISTS `blood_bank` (
`bl_id` int(100) NOT NULL,
  `log_id` int(100) NOT NULL,
  `center_name` varchar(25) NOT NULL,
  `register_number` int(100) NOT NULL,
  `location` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`bl_id`, `log_id`, `center_name`, `register_number`, `location`, `district`, `email_id`, `contact`, `status`) VALUES
(1, 0, 'srtgbtrsb', 8587878, 'dfbs', 'vv', 'vdfa', 'akvnkv', 'casjc'),
(2, 6, 'mvt', 5327832, 'kew', 'Ernakulam', 'admin@gmail.com', '9898989898', 'added'),
(3, 12, 'iywfeuw', 561834, 'jejqv', 'vfewvbj', 'admin@gmail.com', '232435', 'added'),
(4, 13, 'Ktlm', 111, 'rqg', 'qeg', 'manu@gmail.com', '5765', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE IF NOT EXISTS `blood_request` (
`r_id` int(100) NOT NULL,
  `group` varchar(25) NOT NULL,
  `no_unit` int(25) NOT NULL,
  `date` varchar(15) NOT NULL,
  `bk_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`r_id`, `group`, `no_unit`, `date`, `bk_id`, `user_id`, `status`) VALUES
(1, 'A', 1, '2435', 1, 1, 'wq'),
(2, 'A positive', 1, '2022-02-11', 13, 10, 'requested'),
(3, 'A positive', 1, '2022-02-11', 13, 10, 'requested'),
(4, 'A positive', 1, '2022-02-11', 13, 10, 'requested'),
(5, 'A positive', 1, '2022-02-18', 6, 10, 'approved'),
(6, 'A positive', 1, '2022-02-11', 13, 10, 'requested'),
(7, 'A positive', 1, '2022-02-24', 6, 10, 'requested'),
(8, 'A positive', 1, '2022-02-27', 6, 10, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`log_id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'ram', 'ram', 'Donor', 'approved'),
(2, 'rat', 'rat', 'Donor', 'null'),
(3, 'reji', 'reji', 'Donor', 'null'),
(4, 'shyam', 'shyam', 'Donor', 'null'),
(5, 'bb', 'bb', 'Bank', 'null'),
(6, 'Anju@123', 'bb', 'Bank', 'approved'),
(7, 'cdo', 'jhbfew', 'Bank', 'null'),
(8, 'admin', 'admin', 'admin', 'approved'),
(9, 'Alan', 'Alan', 'Donor', 'approved'),
(10, 'aji', 'aji', 'Seeker', 'approved'),
(11, 'Anju@123', 'k', 'Donor', 'null'),
(12, 'urhbe', 'wen', 'Bank', 'null'),
(13, 'jk', 'kl', 'Bank', 'approved'),
(14, 'ar', 'ar', 'Donor', 'approved'),
(15, 'jeeva ', 'jeeva', 'Donor', 'approved'),
(16, 'anu', 'anu', 'Donor', 'approved'),
(17, 'donor', 'donor', 'Donor', 'rejected'),
(18, 'Raj@12345', 'Raj@12345', 'Donor', 'null'),
(19, 'Lins@gmail.com1', 'Lins@gmail.com1', 'Donor', 'null'),
(20, 'Anju@123', 'Anju@1234', 'Donor', 'null'),
(21, 'Anju@123', 'Anju@1234', 'Donor', 'null'),
(22, 'Anju@1235', 'Anju@1235', 'Donor', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`reg_id` int(100) NOT NULL,
  `log_id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `house_name` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `district` varchar(15) NOT NULL,
  `age` int(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `aadhar` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `weight` int(20) NOT NULL,
  `disease` varchar(55) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_donation` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `log_id`, `name`, `house_name`, `location`, `district`, `age`, `gender`, `blood_group`, `aadhar`, `email`, `weight`, `disease`, `mobile`, `username`, `password`, `last_donation`, `status`) VALUES
(1, 0, 'syam', 'ejnfr', 'regvt', 'reqgr', 22, '', 'A+', '0', 's@gmail.com', 0, '', '9876543210', 'syam', 'syam', '', 'dd'),
(2, 0, 'syam', '', 'iibb', 'Idukki', 12, '', '', '0', 'admin@gmail.com', 0, '', '', 'syam', 'syam', '', 'added'),
(3, 0, 'Manu', '', 'iibb', 'uhbh', 14, '', '', '0', 'ra@gmail.com', 0, '', '', 'manu', 'manu', '', 'added'),
(4, 0, 'rahul', 'jhb', 'iibb', 'Ernakulam', 14, '', 'A+', '0', 'k@gamail.com', 0, '', '9898989898', 'rahul', 'rahul', '', 'added'),
(5, 0, 'ramesh', 'bbudvvbh', 'iibb', 'Idukki', 12, '', 'A+', '0', 'ra@gmail.com', 0, '', '9898989898', 'ram', 'ram', '', 'added'),
(6, 0, 'ramesh', 'bbudvvbh', 'iibb', 'Idukki', 12, '', 'A+', '0', 'ra@gmail.com', 0, '', '9898989898', 'ram', 'ram', '', 'added'),
(7, 0, 'ratheesh', '', 'iibb', 'Ernakulam', 12, '', '', '0', 'ra@gmail.com', 0, '', '9898989898', 'rat', 'rat', '', 'added'),
(8, 0, 'reji', 'bjfw', 'nwfjq', 'jhbfw', 12, '', 'A+', '0', 'syammohananofficial@gmail.com', 0, '', '9898989898', 'reji', 'reji', '', 'added'),
(9, 0, 'syam', 'bbudvvbh', 'nwfjq', 'Idukki', 14, '', 'A+', '2147483647', 'syammohananofficial@gmail.com', 0, '', '9898989898', 'shyam', 'shyam', '', 'added'),
(10, 0, 'alan', 'agghc', 'muvattupuzha', 'Ernakulam', 21, '', 'A+', '2147483647', 's@gmail.com', 0, '', '9898989898', 'Alan', 'Alan', '', 'added'),
(11, 1, 'Manu Mohanan', 'jhhi', 'Kochi', 'Ernakulam', 13, '', 'A positive', '2147483647', 'syammohanan006@gmail.com', 77, '', '9898989898', 'Anju@123', 'k', 'Not yet', 'added'),
(12, 14, 'Arunjnj', 'wiqi', 'jewijfiqkk', 'inwqivkk', 3, 'male', 'A+', '2147483647', 'ar@gmail.com', 7700, 'ffkk', '9898989898', 'ar', 'ar', '', 'added'),
(13, 15, 'jeeva', 'iqivi', 'Nrlm', 'Ernakulam', 13, 'female', 'A+', '2147483647', 'ra@gmail.com', 77, 'no', '9898989898', 'jeeva ', 'jeeva', '', 'added'),
(14, 16, 'Anu', 'kkl', 'muvattupuzha', 'Ernakulam', 21, 'female', 'A positive', '2147483647', 'syammohanan@hotmail.com', 77, 'no', '989898989800', 'anu', 'anu', '2022-02-09', 'added'),
(15, 17, 'donor', 'wiqi', 'muvattupuzha', 'Ernakulam', 21, 'male', 'B positive', '2147483647', 'athirasathyan9922@gmail.com', 50, 'no', '989898989800', 'donor', 'donor', '', 'added'),
(16, 18, 'raj', 'kfebwj', 'Adimali', '', 14, 'male', 'A positive', '2147483647', 'syammohananofficial@gmail.com', 77, 'no', '9898989898', 'Raj@12345', 'Raj@12345', 'not donated yet', 'added'),
(17, 19, 'lins', 'hewiu`', 'iewi', '', 14, 'male', 'A positive', '2147483647', 'k@gamail.com', 50, 'no', '9898989898', 'Lins@gmail.com1', 'Lins@gmail.com1', 'not donated yet', 'added'),
(18, 20, 'ami', 'jhfewjd', 'kewb', '', 89, 'male', 'A positive', '2147483647', 'ra@gmail.com', 77, 'no', '9898989898', 'Anju@123', 'Anju@1234', 'not donated yet', 'added'),
(19, 21, 'ami', 'jhfewjd', 'kewb', '', 89, 'male', 'A positive', '2147483647', 'ra@gmail.com', 77, 'no', '9898989898', 'Anju@123', 'Anju@1234', 'not donated yet', 'added'),
(20, 22, 'di', 'ibij`', 'ni', 'Pathanamthitta', 12, 'female', 'A positive', '12345678901', 'ra@gmail.com', 77, 'no', '9898989898', 'Anju@1235', 'Anju@1235', 'not donated yet', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE IF NOT EXISTS `seeker` (
`sk_id` int(100) NOT NULL,
  `log_id` int(100) NOT NULL,
  `seeker_name` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `s_district` varchar(20) NOT NULL,
  `email_id` varchar(33) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`sk_id`, `log_id`, `seeker_name`, `address`, `mobile`, `loc`, `s_district`, `email_id`) VALUES
(11, 77, 'fda', 'adb', '9876543210', 'kfjew', 'kewb', 's@gmail.com'),
(22, 2, 'fekj', 'fjjshb', '23', 'kfr', 'fjq', 'fwjqb'),
(23, 10, 'syam Mohanan', 'aabjakk', '98989898980', 'nwfjqkk', 'wbggkk', 'athiraks322@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_request`
--

CREATE TABLE IF NOT EXISTS `seeker_request` (
`rq_id` int(100) NOT NULL,
  `bk_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `seeker_request`
--

INSERT INTO `seeker_request` (`rq_id`, `bk_id`, `user_id`, `status`, `date`) VALUES
(9, 0, 0, '0', '2435'),
(10, 16, 10, 'approved', '02.12.22'),
(11, 16, 10, 'rejected', '02.12.22'),
(12, 16, 10, 'rejected', '02.12.22'),
(13, 16, 10, 'approved', '02.15.22'),
(14, 16, 10, 'approved', '02.15.22'),
(15, 16, 10, 'approved', '02.26.22'),
(16, 16, 10, 'requested', '02.26.22'),
(17, 16, 10, 'requested', '02.26.22'),
(18, 16, 10, 'requested', '02.26.22'),
(19, 17, 10, 'requested', '02.26.22');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`s_id` int(100) NOT NULL,
  `A_positive` int(100) NOT NULL,
  `A_negative` int(11) NOT NULL,
  `B_positive` int(11) NOT NULL,
  `B_negative` int(11) NOT NULL,
  `ABP` int(11) NOT NULL,
  `ABN` int(100) NOT NULL,
  `OP` int(100) NOT NULL,
  `O_negative` int(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `bl_id` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`s_id`, `A_positive`, `A_negative`, `B_positive`, `B_negative`, `ABP`, `ABN`, `OP`, `O_negative`, `status`, `bl_id`) VALUES
(1, 2, 1, 1, 1, 1, 111, 1, 1, 'added', 13),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 'addw', 4),
(3, 2, 1, 1, 1, 1, 11, 1, 1, 'added', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
 ADD PRIMARY KEY (`bl_id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
 ADD PRIMARY KEY (`sk_id`);

--
-- Indexes for table `seeker_request`
--
ALTER TABLE `seeker_request`
 ADD PRIMARY KEY (`rq_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
MODIFY `bl_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `reg_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `seeker`
--
ALTER TABLE `seeker`
MODIFY `sk_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `seeker_request`
--
ALTER TABLE `seeker_request`
MODIFY `rq_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
