-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 08:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `mobile`, `email`) VALUES
(1, 'admin', 'admin', '9822334455', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `society` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `flatno` varchar(255) NOT NULL,
  `complaint` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `society`, `owner`, `flatno`, `complaint`) VALUES
(1, 'Source Code', 'Ajit', '100', 'water problem');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `society_name` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `ctime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `society_name`, `cdate`, `ctime`) VALUES
(1, 'Birthday Party', 'Source Code', '2019/04/17', '7:00');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE IF NOT EXISTS `society` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `society_name` varchar(255) NOT NULL,
  `chairman_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `floors` varchar(255) NOT NULL,
  `flats` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `society_name`, `chairman_name`, `address`, `floors`, `flats`, `regno`) VALUES
(1, 'Source Code', 'Vinod Sir', 'Deccan', '5', '10', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emergencyno` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL DEFAULT '0',
  `society` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `address`, `city`, `pincode`, `cardno`, `password`, `emergencyno`, `amount`, `society`) VALUES
(1, 'Mayur Shinde', '8208847127', 'mayur1.srccode@gmail.com', 'Pune', 'Shirur', '412210', '123123123123', '123', '9665673725', '50000', 'Source Code');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
