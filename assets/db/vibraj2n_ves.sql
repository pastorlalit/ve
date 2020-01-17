-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2020 at 11:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ves`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactqueries`
--

DROP TABLE IF EXISTS `contactqueries`;
CREATE TABLE IF NOT EXISTS `contactqueries` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `contactname` varchar(50) NOT NULL,
  `contactemail` varchar(200) NOT NULL,
  `contactnumber` varchar(13) NOT NULL,
  `contactcity` varchar(60) NOT NULL,
  `contactsubject` varchar(300) NOT NULL,
  `contactmessage` varchar(500) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactqueries`
--

INSERT INTO `contactqueries` (`contactid`, `contactname`, `contactemail`, `contactnumber`, `contactcity`, `contactsubject`, `contactmessage`) VALUES
(1, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'New  Batch Timing ?'),
(2, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'New  Batch Timing ?'),
(3, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'New Batch ?'),
(4, 'Kapil', 'asdad@gmail.com', '7773070823', 'Bhopal', 'SSC', 'dasdadfsdf'),
(5, 'lalit', 'asdad@gmail.com', '7773070823', 'Bhopal', 'SSC', 'dsadadd'),
(6, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'XZdzzsff'),
(7, 'Dsa', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'ZXZccxc'),
(8, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'Xzzffsfsfsff'),
(9, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'dsfdff', 'czczzxczc'),
(10, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'dsfdff', 'czxccxc'),
(11, 'lalit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'zxZXzcczc'),
(12, 'Ankit', 'lalitpastor@gmail.com', '7773070823', 'Bhopal', 'SSC', 'cxdfddgdgg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `name`) VALUES
(1, 'lalitpastor1989@gmail.com', 'lalit123', 'Lalit Pastor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
