-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 01:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'suryaprasadtripathy8@gmail.com', 'pinkylove'),
(2, 'alihaider126@gmail.com', 'ali126');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5b13ed3a6e006', '5b13ed3a9436a'),
('5b13ed72489d8', '5b13ed7263d70'),
('64a567497f165', '64a567497fa2c'),
('64a56749827b3', '64a5674982f5f'),
('64a5674985584', '64a5674985d27'),
('64a567498b019', '64a567498b81a'),
('64a567498f04b', '64a567498f7ac'),
('64a567499396d', '64a5674994234'),
('64a5674997f16', '64a5674999a44'),
('64a567499f001', '64a567499f82b'),
('64a56749a2317', '64a56749a2d7e'),
('64a56749a5759', '64a56749a5fed'),
('64a56749ab5c1', '64a56749abe57'),
('64a56749ae8bf', '64a56749af0d2'),
('64a56749b478d', '64a56749b4ffa'),
('64a56749babd4', '64a56749bb4f1'),
('64a56749be35e', '64a56749bec13');

-- --------------------------------------------------------

--
-- Table structure for table `blog_title`
--

CREATE TABLE `blog_title` (
  `blog_id` int(10) NOT NULL,
  `blog_title` varchar(20) NOT NULL,
  `blog_descrip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_title`
--

INSERT INTO `blog_title` (`blog_id`, `blog_title`, `blog_descrip`) VALUES
(4, 'Social Anxiety', 'Social Anxiety Work Exists'),
(5, 'Depression', 'Dperession is  the main cause of how a mental ');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('aqifakhtar22@gmail.com', '64a5670a8026f', -12, 15, 1, 14, '2023-07-05 12:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5b13ed3a6e006', 'sdb', '5b13ed3a9436a'),
('5b13ed3a6e006', 'jsdb', '5b13ed3a94374'),
('5b13ed3a6e006', 'dsbv', '5b13ed3a94377'),
('5b13ed3a6e006', 'jbdv', '5b13ed3a94379'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d70'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7a'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7d'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d80'),
('64a567497f165', 'from scratch', '64a567497fa26'),
('64a567497f165', 'from beginning', '64a567497fa2c'),
('64a567497f165', 'from mid', '64a567497fa2d'),
('64a567497f165', 'from end', '64a567497fa2e'),
('64a56749827b3', '', '64a5674982f5f'),
('64a56749827b3', '', '64a5674982f65'),
('64a56749827b3', '', '64a5674982f66'),
('64a56749827b3', '', '64a5674982f67'),
('64a5674985584', '', '64a5674985d27'),
('64a5674985584', '', '64a5674985d2d'),
('64a5674985584', '', '64a5674985d2f'),
('64a5674985584', '', '64a5674985d30'),
('64a567498b019', '', '64a567498b81a'),
('64a567498b019', '', '64a567498b81d'),
('64a567498b019', '', '64a567498b81e'),
('64a567498b019', '', '64a567498b821'),
('64a567498f04b', '', '64a567498f7ac'),
('64a567498f04b', '', '64a567498f7af'),
('64a567498f04b', '', '64a567498f7b0'),
('64a567498f04b', '', '64a567498f7b3'),
('64a567499396d', '', '64a5674994234'),
('64a567499396d', '', '64a5674994239'),
('64a567499396d', '', '64a567499423c'),
('64a567499396d', '', '64a567499423d'),
('64a5674997f16', '', '64a5674999a44'),
('64a5674997f16', '', '64a5674999a4b'),
('64a5674997f16', '', '64a5674999a4c'),
('64a5674997f16', '', '64a5674999a4d'),
('64a567499f001', '', '64a567499f82b'),
('64a567499f001', '', '64a567499f833'),
('64a567499f001', '', '64a567499f834'),
('64a567499f001', '', '64a567499f835'),
('64a56749a2317', '', '64a56749a2d7e'),
('64a56749a2317', '', '64a56749a2d86'),
('64a56749a2317', '', '64a56749a2d87'),
('64a56749a2317', '', '64a56749a2d88'),
('64a56749a5759', '', '64a56749a5fed'),
('64a56749a5759', '', '64a56749a5ff3'),
('64a56749a5759', '', '64a56749a5ff6'),
('64a56749a5759', '', '64a56749a5ff7'),
('64a56749ab5c1', '', '64a56749abe57'),
('64a56749ab5c1', '', '64a56749abe5d'),
('64a56749ab5c1', '', '64a56749abe5f'),
('64a56749ab5c1', '', '64a56749abe60'),
('64a56749ae8bf', '', '64a56749af0d2'),
('64a56749ae8bf', '', '64a56749af0d7'),
('64a56749ae8bf', '', '64a56749af0da'),
('64a56749ae8bf', '', '64a56749af0db'),
('64a56749b478d', '', '64a56749b4ffa'),
('64a56749b478d', '', '64a56749b5002'),
('64a56749b478d', '', '64a56749b5004'),
('64a56749b478d', '', '64a56749b5005'),
('64a56749babd4', '', '64a56749bb4f1'),
('64a56749babd4', '', '64a56749bb4f8'),
('64a56749babd4', '', '64a56749bb4f9'),
('64a56749babd4', '', '64a56749bb4fa'),
('64a56749be35e', '', '64a56749bec13'),
('64a56749be35e', '', '64a56749bec1a'),
('64a56749be35e', '', '64a56749bec1d'),
('64a56749be35e', '', '64a56749bec1e');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5b13ed30cd71f', '5b13ed3a6e006', 'dbjb', 4, 1),
('5b13ed6bb8bcd', '5b13ed72489d8', 'dvsd', 4, 1),
('64a5670a8026f', '64a567497f165', 'How you encounter your disease?', 4, 1),
('64a5670a8026f', '64a56749827b3', '', 4, 2),
('64a5670a8026f', '64a5674985584', '', 4, 3),
('64a5670a8026f', '64a567498b019', '', 4, 4),
('64a5670a8026f', '64a567498f04b', '', 4, 5),
('64a5670a8026f', '64a567499396d', '', 4, 6),
('64a5670a8026f', '64a5674997f16', '', 4, 7),
('64a5670a8026f', '64a567499f001', '', 4, 8),
('64a5670a8026f', '64a56749a2317', '', 4, 9),
('64a5670a8026f', '64a56749a5759', '', 4, 10),
('64a5670a8026f', '64a56749ab5c1', '', 4, 11),
('64a5670a8026f', '64a56749ae8bf', '', 4, 12),
('64a5670a8026f', '64a56749b478d', '', 4, 13),
('64a5670a8026f', '64a56749babd4', '', 4, 14),
('64a5670a8026f', '64a56749be35e', '', 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `date`) VALUES
('64a5670a8026f', 'Depression', 2, 1, 15, '2023-07-05 12:50:18'),
('64ae524e4ad4c', 'Schizophrenia', 2, 1, 15, '2023-07-12 07:12:14'),
('64ae5a02f0bdf', 'Eating Disorder', 3, 1, 15, '2023-07-12 07:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('aqifakhtar22@gmail.com', -15, '2023-07-05 12:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`contact_id`, `user_name`, `user_email`, `subject`, `content`) VALUES
(8, 'Mental', 'thisisaqif@gmail.com', 'Computer Science', 'DFTYGBUN'),
(9, 'Mental', 'thisisaqif@gmail.com', 'Computer Science', 'cyvubhinjk'),
(10, 'ali', 'alihaide22@gmail.com', 'crtvybunijmo,pl.[', 'ctfvygbuhnimo,pxrcrtyunjik'),
(11, 'ali', 'alihaide22@gmail.com', 'crtvybunijmo,pl.[', 'ctfvygbuhnimo,pxrcrtyunjik'),
(12, 'Mental', 'thisisaqif@gmail.com', 'crtvybunijmo,pl.[', 'xecrtvyuniop'),
(13, 'Mental', 'thisisaqif@gmail.com', 'crtvybunijmo,pl.[', 'xecrtvyuniop'),
(14, 'Mental', 'thisisaqif@gmail.com', 'crtvybunijmo,pl.[', 'xecrtvyuniop'),
(15, 'Mental', 'thisisaqif@gmail.com', 'crtvybunijmo,pl.[', 'xecrtvyuniop'),
(16, 'Mental', 'thisisaqif@gmail.com', 'crtvybunijmo,pl.[', 'xecrtvyuniop'),
(17, 'Mental', 'thisisaqif@gmail.com', 'crtvybunijmo,pl.[', 'xecrtvyuniop');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `college`, `email`, `password`) VALUES
('aqif', 'FGC ', 'aqifakhtar22@gmail.com', 'aqifakhtar12'),
('hamza', 'punjab', 'hamza12@gmail.com', 'hamza12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog_title`
--
ALTER TABLE `blog_title`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_title`
--
ALTER TABLE `blog_title`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
