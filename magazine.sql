-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 11:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
  `password` varchar(100) NOT NULL,
  `sessionid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gateway`
--

INSERT INTO `gateway` (`username`, `password`, `sessionid`) VALUES
('shivam', '$2y$10$6Z4dYVbm', NULL),
('shubham', '$2y$10$Zii3631w', NULL),
('student', '$2y$10$rqv../U5XapZpEEM/E3C/u3nBMCSPyUFpnBnENlv5tlwMYfIrat.a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `paymethod` varchar(15) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `comment1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subid`, `uid`, `type`, `paymethod`, `startdate`, `enddate`, `comment`, `comment1`) VALUES
(2, 1, 'Paid', 'Card', '2020-11-19', '2021-11-19', NULL, NULL),
(3, 2, 'Complementary', 'Card', '2020-11-19', '2021-05-19', '', ''),
(5, 4, 'Paid', 'Card', '2020-01-01', '2020-06-01', NULL, NULL),
(6, 6, 'Paid', 'Cash', '2020-11-19', '2021-04-19', 'null', 'null'),
(9, 14, 'Paid', 'Cheque', '2020-11-21', '2020-12-21', '', ''),
(10, 15, 'Paid', 'Bank', '2020-11-21', '2020-11-23', '', '');

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
  `designation` varchar(10) DEFAULT NULL,
  `hname` varchar(100) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `oname` varchar(50) DEFAULT NULL,
  `congname` varchar(50) DEFAULT NULL,
  `cmobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aphone` varchar(10) DEFAULT NULL,
  `nationality` varchar(20) NOT NULL,
  `cstate` varchar(20) NOT NULL,
  `cdistrict` varchar(40) NOT NULL,
  `ccity` varchar(40) DEFAULT NULL,
  `caddress` varchar(200) NOT NULL,
  `cpin` varchar(6) NOT NULL,
  `entrydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`uid`, `fname`, `mname`, `lname`, `conginitial`, `designation`, `hname`, `gender`, `oname`, `congname`, `cmobile`, `email`, `aphone`, `nationality`, `cstate`, `cdistrict`, `ccity`, `caddress`, `cpin`, `entrydate`) VALUES
(1, 'Shivaji', 'Maha', 'Raja', NULL, 'Fr', NULL, 'Male', NULL, NULL, '7412589634', 'you@example.com', NULL, 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', 'Kristu Jayanti College', '560077', '2020-11-19'),
(2, 'George', '', 'John', '', 'Mr', '', 'Male', '', '', '8523697412', 'john@example.com', '', 'Indian', 'Karnataka', 'Bangalore Rural', '', 'Pattrick Mansion', '560089', '2020-11-19'),
(4, 'Mohit', 'Prakash', 'Yadav', NULL, 'Mr', NULL, 'Male', NULL, NULL, '8794561235', 'yadav@gmail.com', NULL, 'Indian', 'Karnataka', 'Bangalore Urban', NULL, 'Prestige Building,Horamavu', '560023', '2020-11-19'),
(6, 'Shashi', 'Kant', 'Ojha', '', 'Mr', '', 'Male', '', '', '9513578524', 'shashi@gmail.com', '7639632415', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '202 T,Main Road', '560077', '2020-11-19'),
(14, 'Mohan', '', 'Lal', '', 'Mr', '', 'Male', '', '', '7774441112', 'mohan@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', 'Truck House', '700051', '2020-11-21'),
(15, 'Ved', '', 'Prakash', '', 'Prof', '', 'Trans', '', '', '8884445556', 'ved@ms.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', 'Central Plaza', '700051', '2020-11-21');

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
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
