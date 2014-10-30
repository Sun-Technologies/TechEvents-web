-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2014 at 07:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE IF NOT EXISTS `event_list` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(100) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `short_address` varchar(255) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `short_name` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `full_address` varchar(500) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event_list`
--

INSERT INTO `event_list` (`event_id`, `event_title`, `event_type`, `short_address`, `event_date`, `event_time`, `short_name`, `image_url`, `full_address`, `full_description`) VALUES
(1, 'test', 'hackthons', 'test', '2014-10-19', '12:12:00', 'test', 'test', 'test', '<p>test</p>'),
(2, 'test1', 'hackthons', 'test', '2014-10-16', '12:21:00', 'test', 'test', 'test', '<p>test</p>'),
(3, 'test123', 'hackthons', 'sfsdfds', '2014-10-31', '04:02:00', 'fdsfds', 'http://insolitebuzz.fr/wp-content/uploads/2014/10/test-all-the-things.jpg', 'dsfdsf', '<p>dsffdsfdsfdsff</p>'),
(4, 'Code For the Kingdom', 'hackthons', 'bannergattha', '2014-10-16', '23:12:00', 'Kingdoms', 'http://www.writechangegrow.com/wp-content/uploads/2012/08/iStock_Taking-a-Test.jpg', 'test', '<p><strong>bannergattha</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>test</strong></p>\r\n<p><strong>test1 test123 test143</strong></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
