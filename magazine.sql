-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 10:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `gateway`
--

CREATE TABLE `gateway` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gateway`
--

INSERT INTO `gateway` (`username`, `password`) VALUES
('admin', '$2y$10$SW2VYi8Q74ZaRcpUJfl0keQF4GHsclHKUetiGSChAMajas.OY1uCK');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `paymethod` varchar(15) NOT NULL,
  `renew` varchar(3) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `renewdate` date DEFAULT NULL,
  `cancel` varchar(3) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `comment1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subid`, `uid`, `type`, `paymethod`, `renew`, `startdate`, `enddate`, `renewdate`, `cancel`, `comment`, `comment1`) VALUES
(1, 16, 'paid', 'cash', 'no', '0000-00-00', '0000-00-00', NULL, 'no', 'comment', NULL),
(2, 20, 'Paid', 'Cash', 'No', '2020-11-01', '2022-12-31', '0000-00-00', 'No', 'dsf', 'f'),
(3, 22, 'Paid', 'Cash', 'No', '2020-12-29', '2022-12-25', '0000-00-00', 'No', 'sd', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `uid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `conginitial` varchar(10) DEFAULT NULL,
  `designation` varchar(2) DEFAULT NULL,
  `hname` varchar(100) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `oname` varchar(50) DEFAULT NULL,
  `congname` varchar(50) DEFAULT NULL,
  `cmobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aphone` int(10) DEFAULT NULL,
  `nationality` varchar(20) NOT NULL,
  `cstate` varchar(20) NOT NULL,
  `cdistrict` varchar(40) NOT NULL,
  `ccity` varchar(40) DEFAULT NULL,
  `caddress` varchar(200) NOT NULL,
  `cpin` int(6) NOT NULL,
  `entrydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`uid`, `fname`, `mname`, `lname`, `conginitial`, `designation`, `hname`, `gender`, `oname`, `congname`, `cmobile`, `email`, `aphone`, `nationality`, `cstate`, `cdistrict`, `ccity`, `caddress`, `cpin`, `entrydate`) VALUES
(16, 'newuser', 'jshd', 'hdashd', '', 'Mr', '32', 'Male', 'dsf', 'fsdf', '9997255049', 'hahahah@gmail.com', 5465465, 'indian', 'uttar pradesh', 'dfsdf', 'bareilly', 'dasdsadsds', 243122, '2020-11-20'),
(17, 'sdfsdf', 'sdasa', 'ssfdfs', '', 'Sr', 'dashgdaj', 'Male', 'sdajhd', 'hsdsjhd', '9997255049', 'newuser@gmail.com', 9997552, 'indian', 'karanataka', 'bangalore', 'bangalore', 'asdfsdfsfd', 243122, '2020-11-30'),
(18, 'sdfsdf', 'sdasa', 'ssfdfs', '', 'Sr', 'dashgdaj', 'Male', 'sdajhd', 'hsdsjhd', '9997255049', 'newuser@gmail.com', 9997552, 'indian', 'karanataka', 'bangalore', 'bangalore', 'asdfsdfsfd', 243122, '2020-11-30'),
(19, 'sdfsdf', 'sdasa', 'ssfdfs', 'bsdahgd', 'Sr', 'dashgdaj', 'Male', 'sdajhd', 'hsdsjhd', '9997255049', 'newuser@gmail.com', 9997552, 'indian', 'karanataka', 'bangalore', 'bangalore', 'asdfsdfsfd', 243122, '2020-11-30'),
(20, 'Shobhit', 'Kumar', 'Gangwar', 'nsdamnsdb', 'Fr', 'X-1 Shastri Nagar', 'Male', 'damsn', 'ads', '9997255049', 'shobhitgangwar@yahoo.com', 5465465, 'indian', 'Karnataka', 'bareilly', 'Bareilly', 'sdffsdf', 243122, '2020-11-20'),
(21, 'Shobhit', 'Kumar', 'Gangwar', 'nsdamnsdb', 'Fr', 'X-1 Shastri Nagar', 'Male', 'damsn', 'ads', '9997255049', 'shobhitgangwar@yahoo.com', 5465465, 'indian', 'Karnataka', 'bareilly', 'Bareilly', 'sdffsdf', 243122, '2020-11-20'),
(22, 'new ', 'user', 'test', 'yes', 'Mr', '34', 'Male', 'sad', 'gdfg', '9997255049', 'shobhitgangwar1@yahoo.com', 45565654, 'indian', 'Karnataka', 'bangalore', 'Bareilly', 'dsfsdfsd', 243122, '2020-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gateway`
--
ALTER TABLE `gateway`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userdetail` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
