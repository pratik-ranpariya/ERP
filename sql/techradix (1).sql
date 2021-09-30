-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2019 at 11:00 AM
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
-- Database: `techradix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`no`, `name`, `address`, `city`, `email`, `mobile`, `mobilenumber`, `gender`, `birthday`, `qualification`, `course`, `image`, `date`) VALUES
(15, 'Ajay Vora', '401, Yogichock circle vaeachha Road surat', 'mumbai', 'pratikranpariya000@gmail.com', ' 8980812362', '', 'Female', '', 'Female', 'Female', 'profile_1567402073.jpg', '2019-09-02 05:27:53'),
(14, 'donalt trump', 'vxcv', 'surat', 'jantagarage@gmail.com', ' 8980812362', '', 'Female', '', 'Female', 'Female', 'profile_1567399400.jpg', '2019-09-02 04:43:20'),
(16, 'dasdsa', 'dasds', 'dadsa', 'dasd', '5345435', '', 'Female', '', 'Female', 'Female', 'profile_1567687680.jpg', '2019-09-05 12:48:00'),
(17, 'fsdfds', 'fsdf', 'fsdf', 'fsdfsd', '23423', '', 'Male', '', 'Female', 'Female', 'profile_1567687812.jpg', '2019-09-05 12:50:12'),
(18, 'hghj', 'bjbj', 'vcxv', 'vxcvc', '35543', 'dfgfd', 'Female', '132232', 'Female', 'Female', 'profile_1567688061.jpg', '2019-09-05 12:54:21'),
(19, 'gdgf', 'gfdg', 'gfgf', 'gfdgf', 'gdfgf', 'gd', 'Female', '45345', 'Female', 'Female', 'profile_1567688335.jpg', '2019-09-05 12:58:55'),
(20, 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'Female', 'xxx', 'Male', 'Female', 'profile_1567698932.png', '2019-09-05 15:55:32'),
(21, 'sdf', 'fsd', 'fd', 'sdf', '45', 'dc', 'Female', '534545345', 'Female', 'Female', 'profile_1567699003.png', '2019-09-05 15:56:43'),
(22, 'fsd', 'fdsf', 'fsdf', 'fsdf', '4rw4r', 'rfdc', 'Female', 'czxczx', 'Female', 'Female', 'profile_1567699084.png', '2019-09-05 15:58:04'),
(23, 'fsdfds', 'fsdfdsf', 'fsdfd', 'fsdfd', 'sdffdsfd', 'N/A', 'Female', '64/56/5656', 'Inquiry', 'Inquiry', 'profile_1567699111.png', '2019-09-05 15:58:31'),
(24, 'dsf', 'fdsf', 'fdfs', 'fsdfd', '534', 'N/A', 'Female', 'fsdfd', 'Female', 'Female', 'profile_1567699236.png', '2019-09-05 16:00:36'),
(25, 'gdfgdf', 'gfdgf', 'gdfg', 'gfdg', 'gdfg', 'fdg', 'Female', '6456546546', 'Female', 'Female', 'profile_1567699271.png', '2019-09-05 16:01:11'),
(26, 'fsd', 'fsdf', 'fsdf', 'fdsf', 'fsdfd', 'N/A', 'Male', '534534535', 'Female', 'Female', 'profile_1567699562.png', '2019-09-05 16:06:02'),
(27, 'fdds', 'fds', 'fdsfs', 'fdsfd', 'sdf', 'N/A', 'Female', '5545345', 'Female', 'Female', 'profile_1567699815.png', '2019-09-05 16:10:15'),
(28, 'fsdfds', 'fdsfds', 'fsdf', 'dgfg', '354534535', '545435454', 'Female', '645654645', 'Male', 'Female', 'profile_1567699855.png', '2019-09-05 16:10:55'),
(29, 'fsdfds', 'fsdfdsf', 'fsdfd', 'fsdfd', 'sdffdsfd', 'N/A', 'Female', '65/46/5654', 'Inquiry', 'Inquiry', 'profile_1567699898.png', '2019-09-05 16:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
CREATE TABLE IF NOT EXISTS `certificate` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `enrollment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`no`, `enrollment`, `image`) VALUES
(1, '101', 'Screenshot (2).png'),
(3, '102', 'Screenshot (1).png'),
(4, '170940107041', 'pratik1.jpg'),
(5, '101', 'jamairaja.jpg'),
(6, '170940107041', 'DGNT.png'),
(7, '1017', 'DGNT.png'),
(8, '12345678', 'UJWL.png'),
(9, '3423434', 'JML.png'),
(10, '3323231', 'AMS.png'),
(11, '103', 'imgpsh_fullsize_anim (1).png'),
(12, '170940107041', 'imgpsh_fullsize_anim (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`no`, `name`) VALUES
(4, 'JAVA'),
(3, 'PHP'),
(10, 'IOS'),
(6, 'GRAPHICS DESIGN'),
(7, 'ETHICAL HEACKING'),
(8, 'C'),
(9, 'C++'),
(11, 'ANDROID'),
(12, 'hacking..');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE IF NOT EXISTS `inquiry` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `comment` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `counseler` varchar(255) NOT NULL,
  `followup` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`no`, `name`, `address`, `city`, `email`, `mobile`, `mobile2`, `gender`, `qualification`, `course`, `comment`, `counseler`, `followup`, `time`) VALUES
(36, 'fsdfds', 'fsdfdsf', 'fsdfd', 'fsdfd', 'sdffdsfd', 'N/A', 'Female', 'Inquiry', 'Inquiry', 'N/A', 'fsdfd', '12/31/1321', '2019-09-05 11:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `mobile`) VALUES
('digant', 'digant', '8980812362');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

DROP TABLE IF EXISTS `visiter`;
CREATE TABLE IF NOT EXISTS `visiter` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`no`, `name`, `mobile`, `purpose`, `time`) VALUES
(31, 'dsadsad', '42343', 'Inquiry', '2019-09-05 12:31:17'),
(9, 'donalt trump', ' 8980812362', 'Other Information', '2019-09-02 07:14:22'),
(10, 'donalt trump', 'sfd', 'Other Information', '2019-09-02 07:14:22'),
(11, 'donalt trump', '555555', 'Other Information', '2019-09-02 07:14:22'),
(19, 'vdsxzc ', 'sfdfd', 'Other Information', '2019-09-02 07:14:22'),
(13, 'kkk', '555555', 'Inquiry', '2019-09-02 07:14:22'),
(14, 'donalt trump', ' 8980812362', 'Inquiry', '2019-09-02 07:14:22'),
(15, 'vdsxzc ', ' 8980812362', 'Inquiry', '2019-09-02 07:14:22'),
(18, 'vdsxzc ', ' 8980812362', 'Interview', '2019-09-02 07:14:22'),
(20, 'vdsxzc ', '555555', 'Other Information', '2019-09-02 07:14:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
