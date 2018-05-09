-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 08:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` double NOT NULL,
  `invice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `freight` double NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `cons_no`, `ship_name`, `phone`, `s_add`, `rev_name`, `r_phone`, `r_add`, `type`, `weight`, `invice_no`, `qty`, `book_mode`, `freight`, `mode`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`) VALUES
(1, 'M22P7KHM', 'Tousif Khan', '020 253623', 's sd sdsd', 'Rizwan Ahmed', '020 88552', 'sd sd s', 'Parcel', 20, '252525', 12, 'TBB', 240, 'Road', '29/04/2018', '12', 'Delivered', 'ds ds d', '2018-01-26'),
(2, 'QIWWGIQP', 'Asif khan', '020 253623', 'shani peth', 'munna bhai', '020 88552', 'asdas das d', 'Documents', 20, '252525', 12, 'TBB', 240, 'Train', '29/03/2018', '4', 'Delivered', 'Plz deliver it', '2018-02-28'),
(3, 'Q906F73L', 'Amol sarode', '9484848445', 'metha nagar, bhusawal', 'sunil pal', '8585425412', 'balliram peth', 'Documents', 12, '239098', 12, 'ToPay', 200, 'Air', '26/01/2018', '4', 'Delivered', 'Thanks', '2018-01-20'),
(4, '2THBV8UM', 'Farzana Sk', '9532685965', 'xzyz', 'Asif Khan', '9852451254', 'ABC', 'Parcel', 2, '23788', 4, 'Paid', 90, 'Road', '20/01/2018', '12', 'Delivered', 'Plz transit', '2018-01-15'),
(5, 'H374ZTGO', 'saleem', '8954335576', 'lucknow aliganj', 'shyam', '8954335576', 'delhi', 'Documents', 2, '22532', 1, 'Paid', 500, 'Air', '29/04/2018', '04:16pm', 'Landed', 'fast', '2018-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_officers`
--

CREATE TABLE `tbl_courier_officers` (
  `cid` int(10) NOT NULL,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_officers`
--

INSERT INTO `tbl_courier_officers` (`cid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(7, 'saleem', 'saleem123lu', 'lucknow', 'alis06922@gmail.com', '8954335576', 'Fast Courier - Lucknow', '2018-05-02 13:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_track`
--

CREATE TABLE `tbl_courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_track`
--

INSERT INTO `tbl_courier_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(1, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Delayed', 'Delay due to rain', '2011-01-30 10:23:04'),
(3, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Delayed', 'Delayed due to rain', '2011-01-30 10:26:43'),
(4, 4, '2THBV8UM', 'Fast Courier - Aurangabad', 'Delayed', 'Due to rain', '2011-01-30 17:44:52'),
(5, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Completed', 'Completed', '2011-01-30 17:49:11'),
(6, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Onhold', '', '2018-04-24 12:42:12'),
(7, 1, 'M22P7KHM', 'Lucknow', 'In Transit', '', '2018-04-24 12:47:24'),
(8, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'Completed', '', '2018-04-27 11:12:38'),
(9, 1, 'M22P7KHM', 'Fast Courier - Jalgaon', 'In Transit', '', '2018-04-27 17:41:09'),
(10, 5, 'H374ZTGO', 'Fast Courier - Aurangabad', 'Landed', '', '2018-04-29 16:17:18'),
(11, 5, 'H374ZTGO', 'Fast Courier - Pune', 'Landed', '', '2018-05-01 12:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`) VALUES
(1, 'Fast Courier - Jalgaon', '290, shani peth, jalgaon', 'Jalgaon', '0257-25125', '10.00 am - 9.00 pm', 'Shammi Kapur'),
(2, 'Fast Courier - Aurangabad', '20/12, sector 12, bhavani peth', 'Aurangabad', '0245-858521', '10.00 am - 9.00 pm', 'Amol Patil'),
(3, 'Fast Courier - Pune', '230, Fashion Street', 'pune', '020-25125', '10.00 am - 9.00 pm', 'Atul Nigade');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quote`
--

CREATE TABLE `tbl_quote` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `freighttype` varchar(20) NOT NULL,
  `distance` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `parceltype` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quote`
--
ALTER TABLE `tbl_quote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_quote`
--
ALTER TABLE `tbl_quote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
