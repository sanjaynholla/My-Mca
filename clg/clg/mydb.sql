-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 05:04 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `vid` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ccode` varchar(100) NOT NULL,
  `pktno` int(11) NOT NULL,
  `scrno` int(11) NOT NULL,
  `gt` bigint(20) NOT NULL,
  `1a` int(11) NOT NULL,
  `1b` int(11) NOT NULL,
  `1c` int(11) NOT NULL,
  `1d` int(11) NOT NULL,
  `2a` int(11) NOT NULL,
  `2b` int(11) NOT NULL,
  `2c` int(11) NOT NULL,
  `2d` int(11) NOT NULL,
  `3a` int(11) NOT NULL,
  `3b` int(11) NOT NULL,
  `3c` int(11) NOT NULL,
  `3d` int(11) NOT NULL,
  `4a` int(11) NOT NULL,
  `4b` int(11) NOT NULL,
  `4c` int(11) NOT NULL,
  `4d` int(11) NOT NULL,
  `5a` int(11) NOT NULL,
  `5b` int(11) NOT NULL,
  `5c` int(11) NOT NULL,
  `5d` int(11) NOT NULL,
  `6a` int(11) NOT NULL,
  `6b` int(11) NOT NULL,
  `6c` int(11) NOT NULL,
  `6d` int(11) NOT NULL,
  `7a` int(11) NOT NULL,
  `7b` int(11) NOT NULL,
  `7c` int(11) NOT NULL,
  `7d` int(11) NOT NULL,
  `8a` int(11) NOT NULL,
  `8b` int(11) NOT NULL,
  `8c` int(11) NOT NULL,
  `8d` int(11) NOT NULL,
  `9a` int(11) NOT NULL,
  `9b` int(11) NOT NULL,
  `9c` int(11) NOT NULL,
  `9d` int(11) NOT NULL,
  `10a` int(11) NOT NULL,
  `10b` int(11) NOT NULL,
  `10c` int(11) NOT NULL,
  `10d` int(11) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `t4` int(11) NOT NULL,
  `t5` int(11) NOT NULL,
  `t6` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `t10` int(11) NOT NULL,
  `gt1` bigint(20) NOT NULL,
  `gt2` bigint(20) NOT NULL,
  `gt3` bigint(20) NOT NULL,
  `gt4` bigint(20) NOT NULL,
  `gt5` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`vid`, `id`, `username`, `ccode`, `pktno`, `scrno`, `gt`, `1a`, `1b`, `1c`, `1d`, `2a`, `2b`, `2c`, `2d`, `3a`, `3b`, `3c`, `3d`, `4a`, `4b`, `4c`, `4d`, `5a`, `5b`, `5c`, `5d`, `6a`, `6b`, `6c`, `6d`, `7a`, `7b`, `7c`, `7d`, `8a`, `8b`, `8c`, `8d`, `9a`, `9b`, `9c`, `9d`, `10a`, `10b`, `10c`, `10d`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `gt1`, `gt2`, `gt3`, `gt4`, `gt5`) VALUES
('', 1, 'sanju16', '231', 4, 7, 0, 22, 22, 22, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 2, 'sanju16', '123456', 4, 9, 0, 56, 56, 5555, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 3, 'sanju16', '2134', 6, 10, 0, 1, 12, 13, 14, 21, 22, 23, 24, 31, 32, 33, 34, 41, 42, 43, 44, 51, 52, 53, 54, 61, 62, 63, 64, 71, 72, 73, 74, 81, 82, 83, 84, 91, 92, 93, 94, 101, 102, 103, 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 8, 'karma16', '2', 2, 2, 0, 22, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 9, 'sanju16', '16mca4dcc1', 1, 1, 0, 7, 7, 3, 3, 2, 8, 2, 8, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 3, 3, 3, 3, 8, 2, 2, 8, 4, 4, 4, 8, 2, 2, 2, 4, 6, 3, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 10, 'sanju16', '1de', 1, 1, 64, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 5, 5, 5, 5, 2, 2, 2, 2, 8, 12, 16, 4, 4, 4, 8, 12, 20, 0, 0, 0, 0, 0, 0),
('', 11, 'karma16', '1de', 2, 2, 80, 2, 2, 4, 5, 3, 3, 3, 3, 1, 1, 1, 1, 7, 2, 3, 2, 3, 3, 3, 3, 5, 5, 5, 5, 6, 6, 3, 3, 9, 9, 1, 1, 3, 3, 4, 3, 1, 1, 1, 1, 13, 12, 4, 14, 12, 20, 18, 20, 13, 0, 0, 0, 0, 0, 0),
('', 12, 'sanju16', '2535', 1, 1, 56, 2, 2, 0, 2, 3, 3, 0, 3, 5, 6, 0, 3, 3, 3, 0, 4, 1, 1, 0, 1, 1, 1, 1, 1, 2, 2, 3, 3, 4, 4, 3, 3, 1, 1, 1, 1, 2, 2, 2, 3, 8, 12, 17, 14, 4, 4, 10, 14, 4, 0, 0, 0, 0, 0, 0),
('', 13, 'sanju16', '2536', 1, 1, 56, 2, 2, 0, 2, 3, 3, 0, 3, 5, 6, 0, 3, 3, 3, 0, 4, 1, 1, 0, 1, 1, 1, 1, 1, 2, 2, 3, 3, 4, 4, 3, 3, 1, 1, 1, 1, 2, 2, 2, 3, 8, 12, 17, 14, 4, 4, 10, 14, 4, 0, 0, 0, 0, 0, 0),
('', 14, 'sanju16', '2323', 1, 1, 66, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 8, 2, 1, 2, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 3, 3, 2, 2, 2, 3, 1, 1, 1, 4, 4, 8, 17, 6, 16, 16, 16, 12, 9, 7, 8, 17, 16, 16, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` text NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `department`, `username`, `password`, `mail`, `sdate`, `edate`, `mobile`, `designation`, `college`) VALUES
(1, 'Admin', '1', '', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '', '0000-00-00', '0000-00-00', '', '', ''),
(3, 'Suman', '3', 'MBA', 'suman', 'a01610228fe998f515a72dd730294d87', 'as@gmail.com', '2018-07-23', '2018-07-10', '8888888888', 'Associate Professor', 'BMS'),
(4, 'Suman', '2', 'MCA', 'sanju13', '81dc9bdb52d04dc20036dbd8313ed055', 'sanu@gmail.com', '2018-07-31', '2018-07-01', '9980111533', 'Assistant Professor', 'bms'),
(5, 'Santh', '2', 'MBA', 'santu13', '81dc9bdb52d04dc20036dbd8313ed055', 'santu@gmail.com', '2018-07-31', '2018-07-01', '9980111533', '', ''),
(6, 'Sam', '2', 'MCA', 'sam', '81dc9bdb52d04dc20036dbd8313ed055', 'sam@gmail.com', '2018-07-23', '2018-07-23', '9981111533', '', ''),
(7, 'ajayholla', '2', 'MTech', 'ajay', '81dc9bdb52d04dc20036dbd8313ed055', 'ajay@gmail.com', '2016-05-11', '2017-10-10', '1111111111', '', ''),
(8, 'sjse', '2', 'MTech', 'karma', '81dc9bdb52d04dc20036dbd8313ed055', 'sa2j@gmail.com', '2018-07-27', '2018-07-28', '7881111511', '', ''),
(9, 'prak', '3', 'MBA', 'prak', 'adbb209dc791bbb0c47233dee1ba0f11', 'suryap@gmail.com', '2018-07-31', '2018-07-25', '0000000088', 'Associate Professor', 'bms'),
(10, 'karma', '2', 'MTech', 'karma2', '81dc9bdb52d04dc20036dbd8313ed055', 'sa2j@gmail.com', '2018-07-27', '2018-07-28', '7881111511', '', ''),
(11, 'karantha', '3', 'MTech', 'karantha', '81dc9bdb52d04dc20036dbd8313ed055', 'kar@gmail.com', '2008-05-14', '2007-10-11', '7777777777', 'Associate Professor', 'BMS'),
(12, 'santhosh1', '2', 'MBA', 'santhosh1', '81dc9bdb52d04dc20036dbd8313ed055', 'sa@g.com', '2018-07-02', '2018-07-02', '1111111111', '', ''),
(15, 'sanju16', '3', 'MBA', 'sanju16', '81dc9bdb52d04dc20036dbd8313ed055', 'w@gmail.com', '2018-07-26', '2018-07-26', '0000000000', 'Associate Professor', 'bms'),
(16, 'karm', '3', 'MCA', 'karma16', '81dc9bdb52d04dc20036dbd8313ed055', 'k@g.com', '2018-07-18', '2018-07-24', '9999999999', 'Associate Professor', 'bms'),
(17, 'Coordinator', '2', 'MCA', 'Coordinator', '81dc9bdb52d04dc20036dbd8313ed055', 'co@g.com', '2018-08-01', '2018-08-03', '9999999999', '', ''),
(19, 'cos', '2', 'MCA', 'cos', 'a01610228fe998f515a72dd730294d87', 'b@g.com', '2018-08-22', '2018-08-30', '0000000000', 'Associate Professor', 'bms'),
(20, 'r', '2', 'MCA', 'cotry', 'd93591bdf7860e1e4ee2fca799911215', 'd@g.com', '2018-08-20', '2018-08-21', '2222222222', 'Assistant Professor', 'bms'),
(21, 'ustry', '3', 'MCA', 'ustry', 'd93591bdf7860e1e4ee2fca799911215', 'a@h.com', '2018-08-06', '2018-08-07', '1111111111', 'Assistant Professor', 'bms'),
(22, 'Saaa', '2', 'MBA', 'saaa', '81dc9bdb52d04dc20036dbd8313ed055', 'a@gmail.com', '2018-08-23', '2018-08-28', '9999999999', 'Professor', 'bms');

-- --------------------------------------------------------

--
-- Table structure for table `vals`
--

CREATE TABLE `vals` (
  `scode` varchar(100) NOT NULL,
  `udate` date NOT NULL,
  `utime` time NOT NULL,
  `username` varchar(100) NOT NULL,
  `scripts` bigint(10) NOT NULL,
  `pkt` bigint(10) NOT NULL,
  `renum` double NOT NULL,
  `days` bigint(10) NOT NULL,
  `allowance` double NOT NULL,
  `pay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vals`
--

INSERT INTO `vals` (`scode`, `udate`, `utime`, `username`, `scripts`, `pkt`, `renum`, `days`, `allowance`, `pay`) VALUES
('14', '2018-07-03', '00:59:00', 'Sanjay', 10, 4, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vals`
--
ALTER TABLE `vals`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
