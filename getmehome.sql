-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 06:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getmehome`
--

-- --------------------------------------------------------

--
-- Table structure for table `busservice`
--

CREATE TABLE `busservice` (
  `busno` varchar(20) NOT NULL,
  `sp` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `toj` time NOT NULL,
  `fare` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busservice`
--

INSERT INTO `busservice` (`busno`, `sp`, `departure`, `arrival`, `day`, `toj`, `fare`) VALUES
('121', 'Haryana Roadways', 'Yamunanagar', 'Delhi', 'Tue', '18:00:00', 500),
('12123', 'Haryana Roadways', 'Yamunanagar', 'Delhi', 'Thu', '18:00:00', 500),
('1213', 'Pottukuchi ', 'Thiruvanthpuram', 'Delhi', 'Tue', '14:16:05', 1215),
('122', 'Raju Travels', 'Delhi', 'Thiruvanthpuram', 'Wed', '02:00:00', 5536),
('1221', 'Mumbai Travels', 'Mumbai', 'Delhi', 'Sun', '07:20:21', 5628),
('12210', 'Gautam Roadways', 'Shimla', 'Delhi', 'Mon', '16:00:00', 1234),
('1222', 'Mumbai Travels', 'Mumbai', 'Delhi', 'Sun', '10:19:18', 655),
('12221', 'Raju Travels', 'Delhi', 'Thiruvanthpuram', 'Mon', '02:00:00', 5536),
('12222', 'Raju Travels', 'Delhi', 'Thiruvanthpuram', 'Tue', '02:00:00', 5536),
('1223', 'Lokhandwala buses', 'Mumbai', 'Delhi', 'Sun', '11:21:12', 852),
('122312', 'Lokhandwala buses', 'Mumbai', 'Delhi', 'Mon', '08:21:12', 852),
('1226', 'Shimla Travels', 'Delhi', 'Shimla', 'Tue', '14:15:32', 784),
('1227', 'Batra Travels', 'Jammu', 'Dehradun', 'Wed', '19:27:45', 963),
('1228', 'Bihari Buses', 'Patna', 'Ranchi', 'Thu', '18:15:42', 753),
('123', 'Rani Travels', 'Lucknow', 'Mumbai', 'Thu', '08:00:00', 781),
('124', 'BankeBihari Travels', 'Mathura ', 'Shimla', 'Fri', '09:21:00', 955),
('125', 'GuptaJi Bus serv.', 'Yamunanagar', 'Delhi', 'Mon', '12:00:00', 350),
('12512', 'GuptaJi Bus serv.', 'Yamunanagar', 'Delhi', 'Mon', '12:32:14', 350),
('126', 'Dilliwale chalo', 'Delhi', 'Mumbai', 'Sat', '08:22:12', 985),
('127', 'Bhojpuri Travels', 'Delhi', 'Mumbai', 'Sat', '23:28:01', 555),
('127211', 'Bhojpuri Travels', 'Delhi', 'Mumbai', 'Tue', '23:28:01', 555),
('127212', 'Bhojpuri Travels', 'Delhi', 'Mumbai', 'Wed', '23:28:01', 555),
('127213', 'Bhojpuri Travels', 'Delhi', 'Mumbai', 'Thu', '23:28:01', 555),
('127214', 'Bhojpuri Travels', 'Delhi', 'Mumbai', 'Fri', '23:28:01', 555),
('128', 'Delhi Travels', 'Delhi', 'Mumbai', 'Sat', '09:00:00', 900),
('12821', 'Delhi Travels', 'Delhi', 'Mumbai', 'Sun', '09:00:00', 900),
('12822', 'Delhi Travels', 'Delhi', 'Mumbai', 'Mon', '09:00:00', 900),
('222', 'Mumbai Travels', 'Mumbai', 'Thiruvanthpuram', 'Sun', '10:19:18', 655),
('6557', 'GuptaJi Buses', 'Yamunanagar', 'Delhi', 'Fri', '06:40:23', 987),
('78781', 'Haryana Travels', 'Delhi', 'Yamunanagar', 'Fri', '06:34:20', 852),
('78782', 'Haryana Travels', 'Delhi', 'Yamunanagar', 'Sat', '06:34:20', 852),
('78783', 'Haryana Travels', 'Delhi', 'Yamunanagar', 'Sun ', '06:34:20', 852);

-- --------------------------------------------------------

--
-- Table structure for table `travellog`
--

CREATE TABLE `travellog` (
  `username` varchar(20) DEFAULT NULL,
  `Name` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `toj` time NOT NULL,
  `fare` bigint(20) NOT NULL,
  `busno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travellog`
--

INSERT INTO `travellog` (`username`, `Name`, `departure`, `arrival`, `doj`, `toj`, `fare`, `busno`) VALUES
('ayush380', 'Ayush', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('ayush380', 'a', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('ayush380', 'asd', 'Delhi', 'Mumbai', '2016-12-03', '08:22:12', 985, '126'),
('sss', 'arjun', 'Jammu', 'Dehradun', '2016-12-14', '19:27:45', 963, '1227'),
('sss', 'arjun', 'Jammu', 'Dehradun', '2016-12-14', '19:27:45', 963, '1227'),
('sss', 'shivank', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('sss', 'shivank', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('sss', 'shivank', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('sss', 'shivank', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('sss', 'shivank', 'Delhi', 'Mumbai', '2016-12-04', '09:00:00', 900, '12821'),
('sss', 'puttukuchi', 'Thiruvanthpuram', 'Delhi', '2016-12-06', '14:16:05', 1215, '1213'),
('abhinav', 'abhinav', 'Shimla', 'Delhi', '2016-12-05', '16:00:00', 1234, '12210'),
('qqq', 'qqq', 'Delhi', 'Mumbai', '2016-12-10', '23:28:01', 555, '127'),
('qqq', 'qqq', 'Delhi', 'Mumbai', '2016-12-10', '08:22:12', 985, '126'),
('qqq', 'qqq', 'Delhi', 'Mumbai', '2016-12-10', '23:28:01', 555, '127'),
('arjun223', 'arjun', 'Delhi', 'Mumbai', '2016-12-17', '09:00:00', 900, '128'),
('priyansh93', 'Priyansh', 'Delhi', 'Mumbai', '2016-12-17', '23:28:01', 555, '127'),
('shivank', 'shivank', 'Delhi', 'Mumbai', '2018-02-11', '09:00:00', 900, '12821'),
('shivank', 'shivank', 'Delhi', 'Mumbai', '2018-02-10', '23:28:01', 555, '127'),
('shivank1404', 'shivank', 'Delhi', 'Yamunanagar', '2018-02-18', '06:34:20', 852, '78783'),
('shivank', 'shivank', 'Delhi', 'Mumbai', '2018-02-18', '09:00:00', 900, '12821');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('123', '123', 'aaa2@aa'),
('abhinav', 'asd', 'abhinav@gmail.com'),
('arjun223', 'asd', 'asd@asd.com'),
('ay', '123', 'asd@dsa.com'),
('ayush1224', 'pass', 'ayush380@gmail.com'),
('ayush380', 'asd', 'asdadf@sdfsdf.com'),
('bhaaya', '12345', 'gvgfd@jkhjk.com'),
('chawla_harsh', 'abcde', 'harsh.harshcool.chaw'),
('gagan', 'gagan', 'gagandeep@gmail.com'),
('Priyansh93', 'password', 'as@d.com'),
('qqq', 'qqq', 'q@p'),
('shivam14', 'shivam', 'kapoorshivam1.sk@gma'),
('shivank', 'shivank', 'shivank.1404@gmail.c'),
('shivank1404', 'shivank', 'shivank@gmail.com'),
('sss', 'lsd', 's@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busservice`
--
ALTER TABLE `busservice`
  ADD PRIMARY KEY (`busno`);

--
-- Indexes for table `travellog`
--
ALTER TABLE `travellog`
  ADD KEY `username` (`username`),
  ADD KEY `busno` (`busno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `travellog`
--
ALTER TABLE `travellog`
  ADD CONSTRAINT `travellog_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `travellog_ibfk_2` FOREIGN KEY (`busno`) REFERENCES `busservice` (`busno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
