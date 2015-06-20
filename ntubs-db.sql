-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2015 at 05:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ntubs-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `full_name`, `password`) VALUES
('admin', 'Peter', 'ganteng');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(255) COLLATE utf8_bin NOT NULL,
  `datetime` datetime NOT NULL,
  `img_path` char(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `content` varchar(16383) COLLATE utf8_bin NOT NULL,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `datetime`, `img_path`, `content`, `is_draft`) VALUES
(1, 'Dharma Talk - The Path as Human', '2015-06-19 19:30:00', 'img/20150619191751.jpg', 'Location: LT15', 0),
(2, 'Meditation Class: Basic Meditation', '2015-06-20 20:00:00', 'img/20150619191701.jpg', '<b>Note: HTML tags are enabled</b>', 0),
(3, 'Buddhism Awareness Week: Follow the Footsteps', '2015-06-27 09:00:00', 'img/20150619193505.jpg', '<p><b>Location: </b> NTU.</p>', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
