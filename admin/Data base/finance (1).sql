-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 03:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `applyfor` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `joingdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `address`, `qualification`, `dob`, `mobile`, `email`, `experience`, `skill`, `applyfor`, `time`, `date`, `status`, `joingdate`) VALUES
(1, 'ANJAYS', 'BHAVNAGAR', 'BCAsss', '11/11/1997', '2738327483', 'CHAUHAN@gmail.com', '0-1year', 'gaming', 'php devloper', '10:00 AM TO 7:00PM', '', '', ''),
(2, 'sssssss', '', 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'sssssss', '10:00 AM TO 1:00PM', '', '', ''),
(3, 'sssssss', '', 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'sssssss', '10:00 AM TO 1:00PM', '', '', ''),
(4, 'sssssss', 's', 'ss', 'sss', 'ssss', 'eeeeee', 'xcxcxc', 'zxvxvxv', 'fbgfjugyh', '10:00 AM TO 7:00PM', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'adminn', 'CHAUHAN2222@gmail.com', 'ssss', 'sssssss'),
(2, 'adminn', 'CHAUHAN2222@gmail.com', 'ssss', 'sssssss'),
(3, 'adminn', 'CHAUHAN2222@gmail.com', 'ssss', 'sssssss'),
(4, 'adminn', 'CHAUHAN2222@gmail.com', 'ssss', 'sssssss'),
(5, 'adminn', 'CHAUHAN2222@gmail.com', 'ssss', 'sssssss'),
(6, 'sssssss', 'sssssss', 'sssssss', 'sssssss'),
(7, 'sssssss', 'sssssss', 'sssssss', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `mobile`, `email`, `address`, `service`) VALUES
(1, 'UDAY CHAUHAN', '2738327483', 'CHAUHAN@gmail.com', '656567', 'Bhavnagar'),
(2, 'uday', '2738327483', 'CHAUHAN@gmail.com', '67657567', 'Gandhinagr'),
(4, 'Chauhan uday', '6666666666666', 'CHAUHAN66@gmail.com', '666', 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `name`, `mobile`, `branch`, `city`) VALUES
('2106', 'admin', 'chauhan', '8160008787', 'vadva', 'bhavnagr'),
('admin', 'admin', 'sanjay', '8160008787', 'vadva', 'bhavnagr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
