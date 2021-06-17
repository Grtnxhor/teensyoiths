-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 01:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teens`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'teenstoyouth', '184da1856d2c36dc9e95cff7582a07dc');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `pix` text NOT NULL,
  `quote` text NOT NULL,
  `author` text NOT NULL,
  `author_mail` text NOT NULL,
  `view` text NOT NULL,
  `totview` text NOT NULL,
  `datepost` datetime NOT NULL,
  `lastdate` text NOT NULL,
  `post_url` text NOT NULL,
  `pidr` text NOT NULL,
  `propix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `sn`, `title`, `details`, `pix`, `quote`, `author`, `author_mail`, `view`, `totview`, `datepost`, `lastdate`, `post_url`, `pidr`, `propix`) VALUES
(42, '1', 'This is me', '<p>nsndnsndbvsdnvsnvvdsnvds<br>dnsdvnsdbsnvsdnsvdnsvdnsdsD<br>sdbvsdsndnsvdnsvdsd</p>', 'veenodetech_201792709_3515071901926043_971760420957350483_n.jpg', '', 'Sam .O. Salau', 'samosalau@yahoo.com', '0', '0', '2021-06-16 01:33:57', 'Jun 30, 2021', 'This-is-me', '', 'a6e36fa3-f1db-4040-9069-86e56d7ff89bsamosalau.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `email` text NOT NULL,
  `text` text NOT NULL,
  `post_url` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `linkcount`
--

CREATE TABLE `linkcount` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `count` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `linkcount`
--

INSERT INTO `linkcount` (`id`, `link`, `count`) VALUES
(1, 'account', '0'),
(2, 'biology', '0'),
(3, 'chemistry', '0'),
(4, 'crk', '0'),
(5, 'economics', '0'),
(6, 'english', '0'),
(7, 'maths', '0'),
(8, 'phy', '0'),
(9, 'uoe', '0'),
(10, 'lifechange', '0'),
(11, 'commerce', '0'),
(12, 'joke', '0'),
(13, 'mb1', '0'),
(14, 'mb2', '0'),
(15, 'nude', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `email` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `sn` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pword` text NOT NULL,
  `usname` text NOT NULL,
  `tel` text NOT NULL,
  `about` text NOT NULL,
  `activator` text NOT NULL,
  `datereg` datetime NOT NULL,
  `active` text NOT NULL,
  `propix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `sn`, `name`, `email`, `pword`, `usname`, `tel`, `about`, `activator`, `datereg`, `active`, `propix`) VALUES
(12, '1', 'Sam .O. Salau', 'samosalau@yahoo.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Sam .O. Salau', '', '', '', '2021-04-25 09:46:56', '1', 'a6e36fa3-f1db-4040-9069-86e56d7ff89bsamosalau.jpg'),
(14, '1', 'Abolade Greatness', 'demo', '7e36723822df1cadd0cc888e0681d37b', 'demo', '09010484986', '', 'e5350fbfc8a5bdd9a1b4bb89a4473102', '2021-06-16 01:32:03', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `art` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkcount`
--
ALTER TABLE `linkcount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkcount`
--
ALTER TABLE `linkcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
