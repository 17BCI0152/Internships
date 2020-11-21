-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selex`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitor1`
--

CREATE TABLE `monitor1` (
  `sno` int(11) NOT NULL,
  `main` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `5` varchar(100) NOT NULL,
  `dt1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitord`
--

CREATE TABLE `monitord` (
  `sno` int(11) NOT NULL,
  `main` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `m1` varchar(100) NOT NULL,
  `m2` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `dt1` varchar(100) NOT NULL,
  `dt2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rmsd`
--

CREATE TABLE `rmsd` (
  `sno` int(11) NOT NULL,
  `main` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `data2` varchar(100) NOT NULL,
  `dt1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transmitterd`
--

CREATE TABLE `transmitterd` (
  `sno` int(11) NOT NULL,
  `main` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `dt1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `user_type`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin', '49bb197bec17b7d20b2df6b1f3c3434a'),
('user', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitor1`
--
ALTER TABLE `monitor1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `monitord`
--
ALTER TABLE `monitord`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rmsd`
--
ALTER TABLE `rmsd`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transmitterd`
--
ALTER TABLE `transmitterd`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitor1`
--
ALTER TABLE `monitor1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitord`
--
ALTER TABLE `monitord`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rmsd`
--
ALTER TABLE `rmsd`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transmitterd`
--
ALTER TABLE `transmitterd`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
