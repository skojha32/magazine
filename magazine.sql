-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 11:04 PM
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
('student', '$2y$10$rqv../U5XapZpEEM/E3C/u3nBMCSPyUFpnBnENlv5tlwMYfIrat.a', '5fbbccb757e9d');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `paymethod` varchar(15) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `comment1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subid`, `uid`, `type`, `paymethod`, `startdate`, `enddate`, `comment`, `comment1`) VALUES
(2, 1, 'Paid', 'Cash', '2020-11-19', '2021-11-19', '', ''),
(3, 2, 'Complementary', 'Bank', '2020-11-19', '2021-05-19', '', ''),
(6, 6, 'Paid', 'Cash', '2020-11-19', '2021-04-19', 'null', 'null'),
(9, 14, 'Paid', 'Cheque', '2020-11-21', '2020-12-21', '', ''),
(10, 15, 'Paid', 'Bank', '2020-11-21', '2020-11-23', '', ''),
(12, 17, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(13, 18, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(14, 19, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(15, 20, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(16, 21, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(17, 22, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(18, 23, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(19, 24, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(20, 25, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(21, 26, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(22, 27, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(23, 28, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(24, 29, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(25, 30, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(26, 31, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(27, 32, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(28, 33, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(29, 34, 'Paid', 'Cash', '2020-11-22', '2020-11-23', '', ''),
(30, 35, 'Paid', 'Cash', '2020-11-19', '2020-11-20', '', ''),
(31, 36, 'Paid', 'Cash', '2020-11-20', '2020-11-24', '', ''),
(32, 37, 'Paid', 'Cash', '2020-11-20', '2020-11-21', '', ''),
(35, 40, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(36, 41, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(37, 42, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(38, 43, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(39, 44, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(40, 45, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(41, 46, 'Complementary', 'Others', '2020-11-22', '2020-11-24', '', ''),
(42, 47, 'Paid', 'Cash', '2020-11-23', '2020-11-24', '', ''),
(43, 48, 'Paid', 'Cash', '2020-11-23', '2020-11-24', '', ''),
(44, 51, 'Paid', 'Bank', '2020-11-23', '2020-11-24', '', ''),
(45, 53, 'Paid', 'Bank', '2020-11-24', '2020-11-29', '', ''),
(46, 99, 'Complementary', 'Cheque', '2020-11-23', '2020-11-25', '', ''),
(48, 105, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 106, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 107, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 'Shivaji', 'Maha', 'Raja', '', 'Fr', '', 'Male', '', '', '7412589634', 'shivaji@example.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', 'Kristu Jayanti College', '560077', '2020-11-19'),
(2, 'George', '', 'John', '', 'Mr', '', 'Male', '', '', '8523697412', '18CS1A3132@kristujayanti.com', '', 'Indian', 'Karnataka', 'Bangalore Rural', '', 'Pattrick Mansion', '560089', '2020-11-19'),
(6, 'Shashi', 'Kant', 'Ojha', '', 'Mr', '', 'Male', '', '', '9513578524', 'shashi@gmail.com', '7639632415', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '202 T,Prestige Building,Block A,Flat 411,G.N Clony Road,Opposite to Maya Temple,MG Street,Indiranagar', '560077', '2020-11-19'),
(14, 'Mohan', '', 'Lal', '', 'Mr', '', 'Male', '', '', '7774441112', 'mohan@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', 'Truck House', '700051', '2020-11-21'),
(15, 'Ved', '', 'Prakash', '', 'Prof', '', 'Trans', '', '', '8884445556', 'ved@ms.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', 'Central Plaza', '700051', '2020-11-21'),
(17, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9992223331', 'ajay@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(18, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay1@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(19, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay2@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(20, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay3@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(21, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay4@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(22, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay5@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(23, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay6@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(24, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay7@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(25, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay8@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(26, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay9@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(27, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay10@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(28, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay11@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(29, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay12@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(30, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay13@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(31, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay14@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(32, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay15@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(33, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay16@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(34, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', 'ajay17@hindi.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(35, 'Ajay', '', 'Prakash', '', 'Fr', '', 'Male', '', '', '9513578524', '18CS1H2096@kristujayanti.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(36, 'Shashi', 'Kant', 'Ojha', '', 'Fr', '', 'Male', '', '', '9513578524', 'skojha32@gmail.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(37, 'Aditya', '', 'Singh', '', 'Prof', '', 'Male', '', '', '9513578524', 'adityathegreatbest@gmail.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Block A,Flat 703,River Valley,DumDum', '560077', '2020-11-22'),
(40, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajay24@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(41, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajay25@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(42, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajay26@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(43, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajay27@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(44, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajay28@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(45, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajay29@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(46, 'Ajay', '', 'Prakash', '', 'Mr', '', 'Male', '', '', '8884445556', 'ajayeya@gmail.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560077', '2020-11-22'),
(47, 'Pratap', 'Rana', 'Mukhiya', 'St', 'Fr', 'Pan House', 'Male', 'Pratap Rana', 'Pent House', '9874563216', 'pratap@gmail.com', '8974561234', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560029', '2020-11-23'),
(48, 'Binda', '', 'Rai', '', 'Dr', '', 'Female', '', '', '5556664442', 'binda@hindi.com', '', 'Indian', 'WestBengal', 'North 24 Parganas', 'Kolkata', '212A,Block A,Flat 703,River Valley,DumDum,Opp To RadheMai Temple,G.N Clony,Bangalore', '560029', '2020-11-23'),
(51, 'Pratapa', 'Rana', 'Mukhiya', 'St', 'Fr', 'Pan House', 'Male', 'Pratap Rana', 'Pent House', '9874563216', 'pratap1@gmail.com', '7774445558', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560025', '2020-11-23'),
(53, 'Pratapo', 'Rana', 'Mukhiya', 'St', 'Fr', 'Pan House', 'Male', 'Pratap Rana', 'Pent House', '9874563216', 'pratap2@gmail.com', '7774445558', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560025', '2020-11-23'),
(99, 'Mina', 'Rana', 'Mukhiya', 'St', 'Fr', 'Pan House', 'Male', 'Pratap Rana', 'Pent House', '9874563216', 'pratap5@gmail.com', '7774445558', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560025', '2020-11-23'),
(105, 'Moti', 'Rana', 'Mukhiya', '', 'Fr', '', 'Male', '', '', '9874563216', 'moti@gmail.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560025', '2020-11-23'),
(106, 'Mahiya', 'Vijay', 'Raj', '', 'Fr', '', 'Female', '', '', '9874563216', 'mahiya@vijay.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560025', '2020-11-23'),
(107, 'Tina', '', 'Rina', '', 'Miss', '', 'Female', '', '', '9874563216', 'tina@merijaan.com', '', 'Indian', 'Karnataka', 'Bangalore Urban', 'Bangalore', '212A,Govind Mitra Road', '560025', '2020-11-23');

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
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

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
