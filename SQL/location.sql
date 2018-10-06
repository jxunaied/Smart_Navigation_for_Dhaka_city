-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 11:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(3) NOT NULL,
  `name` varchar(10) NOT NULL,
  `lat` varchar(12) NOT NULL,
  `lng` varchar(12) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `lat`, `lng`, `status`) VALUES
(7, 'a', '23.786089', '90.425654', 0),
(8, 'a', '23.785621', '90.425747', 0),
(9, 'a', '23.785349', '90.425775', 0),
(10, 'a', '23.784874', '90.425840', 0),
(11, 'a', '23.784661', '90.425849', 0),
(12, 'a', '23.784160', '90.425924', 0),
(13, 'a', '23.783594', '90.425849', 0),
(14, 'a', '23.782929', '90.425875', 0),
(15, 'a', '23.782426', '90.425813', 0),
(16, 'a', '23.781744', '90.425804', 0),
(17, 'a', '23.785525', '90.425636', 0),
(18, 'a', '23.785111', '90.425840', 0),
(19, 'a', '23.784373', '90.425884', 0),
(20, 'a', '23.783782', '90.425840', 0),
(21, 'a', '23.783517', '90.425826', 0),
(22, 'a', '23.783030', '90.425915', 0),
(23, 'a', '23.782639', '90.425864', 0),
(24, 'a', '23.782106', '90.425827', 0),
(25, 'a', '23.781715', '90.425805', 0),
(26, 'a', '23.781566', '90.425775', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
