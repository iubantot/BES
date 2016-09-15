-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 03:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue-eye`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `account_id` int(11) UNSIGNED NOT NULL,
  `userid` varchar(23) NOT NULL DEFAULT '',
  `user_pass` varchar(32) NOT NULL DEFAULT '',
  `sex` enum('M','F','S') NOT NULL DEFAULT 'M',
  `email` varchar(39) NOT NULL DEFAULT '',
  `group_id` tinyint(3) NOT NULL DEFAULT '0',
  `logincount` mediumint(9) UNSIGNED NOT NULL DEFAULT '0',
  `lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(100) NOT NULL DEFAULT '',
  `birthdate` date NOT NULL DEFAULT '0000-00-00',
  `fname` varchar(23) NOT NULL DEFAULT '',
  `lname` varchar(23) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`account_id`, `userid`, `user_pass`, `sex`, `email`, `group_id`, `logincount`, `lastlogin`, `last_ip`, `birthdate`, `fname`, `lname`, `address`) VALUES
(2000000, 'test', 'test', 'M', '', 1, 0, '0000-00-00 00:00:00', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `name` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `account_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000001;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
