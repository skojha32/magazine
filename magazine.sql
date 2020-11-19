-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 05:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
  `category` varchar(15) NOT NULL,
  `paymethod` varchar(15) NOT NULL,
  `renew` varchar(3) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `renewdate` date DEFAULT NULL,
  `cancel` varchar(3) NOT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `pstate` varchar(20) NOT NULL,
  `pdistrict` varchar(40) NOT NULL,
  `pcity` varchar(40) DEFAULT NULL,
  `paddress` varchar(200) NOT NULL,
  `ppin` int(6) NOT NULL,
  `dstate` varchar(20) NOT NULL,
  `ddistrict` varchar(40) NOT NULL,
  `dcity` varchar(40) DEFAULT NULL,
  `daddress` varchar(200) NOT NULL,
  `dpin` int(6) NOT NULL,
  `pmobile` varchar(10) NOT NULL,
  `dmobile` varchar(10) NOT NULL,
  `entrydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

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
