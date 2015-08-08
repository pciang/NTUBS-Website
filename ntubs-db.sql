-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 04:18 AM
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
  `user_id` varchar(32) COLLATE utf8_bin NOT NULL,
  `full_name` tinytext CHARACTER SET utf8 NOT NULL,
  `password` tinytext COLLATE utf8_bin NOT NULL,
  `last_activity` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `full_name`, `password`, `last_activity`) VALUES
('pc1ang', 'Peter', 'ganteng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `img_path` tinytext COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8_bin NOT NULL,
  `location` tinytext COLLATE utf8_bin NOT NULL,
  `datetime_end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `datetime`, `img_path`, `content`, `is_draft`, `title`, `location`, `datetime_end`) VALUES
(1, '2015-01-30 19:00:00', 'img/event.jpg', '<b>Speaker:</b> Prof. Tan', 0, 'Dharma Talk: "The Path as a Human"', 'LT 15', '2015-01-30 21:30:00'),
(2, '2015-01-29 19:00:00', 'img/event2.jpg', '', 0, 'Basic Meditation', 'Nanyang House Seminar Room 2', '2015-01-29 21:30:00'),
(3, '2015-01-28 09:00:00', 'img/event3.jpg', 'Play games! Win prizes!', 0, 'Buddhism Awareness Week: Follow the Footsteps', 'Linkway @Admin Building', '2015-01-29 17:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
