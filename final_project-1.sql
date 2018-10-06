-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 10:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `name` varchar(100) NOT NULL,
  `lat` float(20,10) DEFAULT NULL,
  `lng` float(20,10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`name`, `lat`, `lng`, `status`) VALUES
('4 number Alik trasnport/BRTC wifi bus', NULL, NULL, NULL),
('9 number bus', NULL, NULL, NULL),
('Alif Paribahan', NULL, NULL, NULL),
('Ashirbad', NULL, NULL, NULL),
('Bahon Paribahan', NULL, NULL, NULL),
('Bihongo', NULL, NULL, NULL),
('Boishakhi ', NULL, NULL, NULL),
('BRTC 1', NULL, NULL, NULL),
('BRTC 2', NULL, NULL, NULL),
('BRTC 3', NULL, NULL, NULL),
('Cantonment Mini service', NULL, NULL, NULL),
('Desh Bangla paribahan', NULL, NULL, NULL),
('Dhaka Metro service', NULL, NULL, NULL),
('ETC', NULL, NULL, NULL),
('Himachol', NULL, NULL, NULL),
('Jabale Nur paribahan', NULL, NULL, NULL),
('Konok paribahan', NULL, NULL, NULL),
('Mirpur Mission paribahan', NULL, NULL, NULL),
('New Vision', NULL, NULL, NULL),
('Projapoti paribahan', NULL, NULL, NULL),
('Rangdhonu', NULL, NULL, NULL),
('Robrob Paribahan', NULL, NULL, NULL),
('Shokolpo paribahan', NULL, NULL, NULL),
('Tetulia paribahan', NULL, NULL, NULL),
('Titas Paribahan', NULL, NULL, NULL),
('Torongo plus', NULL, NULL, NULL),
('Trans silva', NULL, NULL, NULL),
('TRUST LINE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bus_busstop_relation`
--

CREATE TABLE `bus_busstop_relation` (
  `bus_name` varchar(100) NOT NULL,
  `bus_stop_id` int(5) NOT NULL,
  `crossed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_busstop_relation`
--

INSERT INTO `bus_busstop_relation` (`bus_name`, `bus_stop_id`, `crossed`) VALUES
('4 number Alik trasnport/BRTC wifi bus', 5, ''),
('4 number Alik trasnport/BRTC wifi bus', 7, ''),
('4 number Alik trasnport/BRTC wifi bus', 44, ''),
('4 number Alik trasnport/BRTC wifi bus', 46, ''),
('4 number Alik trasnport/BRTC wifi bus', 58, ''),
('4 number Alik trasnport/BRTC wifi bus', 68, ''),
('4 number Alik trasnport/BRTC wifi bus', 72, ''),
('4 number Alik trasnport/BRTC wifi bus', 75, ''),
('9 number bus', 28, ''),
('9 number bus', 32, ''),
('9 number bus', 48, ''),
('9 number bus', 60, ''),
('9 number bus', 69, ''),
('Alif Paribahan', 15, ''),
('Alif Paribahan', 28, ''),
('Alif Paribahan', 30, ''),
('Alif Paribahan', 31, ''),
('Alif Paribahan', 34, ''),
('Alif Paribahan', 35, ''),
('Alif Paribahan', 36, ''),
('Alif Paribahan', 39, ''),
('Alif Paribahan', 42, ''),
('Alif Paribahan', 43, ''),
('Ashirbad', 28, ''),
('Ashirbad', 29, ''),
('Ashirbad', 48, ''),
('Ashirbad', 60, ''),
('Ashirbad', 61, ''),
('Ashirbad', 62, ''),
('Ashirbad', 63, ''),
('Ashirbad', 64, ''),
('Ashirbad', 65, ''),
('Ashirbad', 66, ''),
('Ashirbad', 67, ''),
('Bahon Paribahan', 16, ''),
('Bahon Paribahan', 28, ''),
('Bahon Paribahan', 30, ''),
('Bahon Paribahan', 33, ''),
('Bahon Paribahan', 54, ''),
('Bahon Paribahan', 59, ''),
('Bahon Paribahan', 60, ''),
('Bahon Paribahan', 61, ''),
('Bahon Paribahan', 64, ''),
('Bahon Paribahan', 68, ''),
('Bahon Paribahan', 69, ''),
('Bihongo', 30, ''),
('Bihongo', 31, ''),
('Bihongo', 32, ''),
('Bihongo', 34, ''),
('Bihongo', 35, ''),
('Bihongo', 36, ''),
('Bihongo', 39, ''),
('Bihongo', 41, ''),
('Bihongo', 42, ''),
('Boishakhi', 27, ''),
('Boishakhi', 36, ''),
('Boishakhi', 41, ''),
('Boishakhi', 42, ''),
('Boishakhi', 48, ''),
('Boishakhi', 49, ''),
('Boishakhi', 61, ''),
('Boishakhi', 75, ''),
('BRTC 1', 27, ''),
('BRTC 1', 28, ''),
('BRTC 1', 30, ''),
('BRTC 1', 44, ''),
('BRTC 1', 50, ''),
('BRTC 1', 51, ''),
('BRTC 1', 53, ''),
('BRTC 1', 55, ''),
('BRTC 2', 27, ''),
('BRTC 2', 28, ''),
('BRTC 2', 30, ''),
('BRTC 2', 34, ''),
('BRTC 2', 35, ''),
('BRTC 2', 36, ''),
('BRTC 2', 37, ''),
('BRTC 2', 38, ''),
('BRTC 2', 40, ''),
('BRTC 2', 41, ''),
('BRTC 2', 42, ''),
('BRTC 2', 43, ''),
('BRTC 3', 10, ''),
('BRTC 3', 36, ''),
('BRTC 3', 39, ''),
('BRTC 3', 41, ''),
('BRTC 3', 56, ''),
('BRTC 3', 58, ''),
('BRTC 3', 60, ''),
('Cantonment Mini service', 20, ''),
('Cantonment Mini service', 21, ''),
('Cantonment Mini service', 33, ''),
('Cantonment Mini service', 37, ''),
('Cantonment Mini service', 38, ''),
('Desh Bangla paribahan', 27, ''),
('Desh Bangla paribahan', 53, ''),
('Dhaka Metro service', 28, ''),
('Dhaka Metro service', 48, ''),
('Dhaka Metro service', 60, ''),
('Dhaka Metro service', 61, ''),
('Dhaka Metro service', 62, ''),
('Dhaka Metro service', 63, ''),
('Dhaka Metro service', 64, ''),
('Dhaka Metro service', 65, ''),
('Dhaka Metro service', 66, ''),
('Dhaka Metro service', 67, ''),
('ETC', 4, ''),
('ETC', 30, ''),
('ETC', 31, ''),
('ETC', 34, ''),
('ETC', 35, ''),
('ETC', 44, ''),
('ETC', 58, ''),
('ETC', 68, ''),
('ETC', 72, ''),
('ETC', 76, ''),
('ETC', 77, ''),
('Himachol', 28, ''),
('Himachol', 30, ''),
('Himachol', 34, ''),
('Himachol', 35, ''),
('Himachol', 36, ''),
('Himachol', 39, ''),
('Himachol', 42, ''),
('Himachol', 43, ''),
('Himachol', 54, ''),
('Jabale Nur paribahan', 28, ''),
('Jabale Nur paribahan', 30, ''),
('Jabale Nur paribahan', 41, ''),
('Jabale Nur paribahan', 44, ''),
('Jabale Nur paribahan', 48, ''),
('Jabale Nur paribahan', 50, ''),
('Jabale Nur paribahan', 60, ''),
('Jabale Nur paribahan', 61, ''),
('Jabale Nur paribahan', 69, ''),
('Konok paribahan', 30, ''),
('Konok paribahan', 32, ''),
('Konok paribahan', 37, ''),
('Konok paribahan', 51, ''),
('Konok paribahan', 53, ''),
('Mirpur Mission paribahan', 28, ''),
('Mirpur Mission paribahan', 57, ''),
('Mirpur Mission paribahan', 58, ''),
('Mirpur Mission paribahan', 59, ''),
('New Vision', 28, ''),
('New Vision', 57, ''),
('New Vision', 58, ''),
('New Vision', 59, ''),
('Projapoti paribahan', 10, ''),
('Projapoti paribahan', 28, ''),
('Projapoti paribahan', 30, ''),
('Projapoti paribahan', 44, ''),
('Projapoti paribahan', 48, ''),
('Projapoti paribahan', 50, ''),
('Projapoti paribahan', 51, ''),
('Projapoti paribahan', 53, ''),
('Projapoti paribahan', 60, ''),
('Projapoti paribahan', 61, ''),
('Projapoti paribahan', 69, ''),
('Rangdhonu', 22, ''),
('Rangdhonu', 23, ''),
('Rangdhonu', 47, ''),
('Rangdhonu', 48, ''),
('Rangdhonu', 60, ''),
('Rangdhonu', 63, ''),
('Rangdhonu', 64, ''),
('Rangdhonu', 68, ''),
('Rangdhonu', 73, ''),
('Robrob Paribahan', 27, ''),
('Robrob Paribahan', 28, ''),
('Robrob Paribahan', 30, ''),
('Robrob Paribahan', 38, ''),
('Robrob Paribahan', 39, ''),
('Robrob Paribahan', 40, ''),
('Robrob Paribahan', 44, ''),
('Robrob Paribahan', 56, ''),
('Shokolpo paribahan', 5, ''),
('Shokolpo paribahan', 14, ''),
('Shokolpo paribahan', 16, ''),
('Shokolpo paribahan', 28, ''),
('Shokolpo paribahan', 30, ''),
('Shokolpo paribahan', 49, ''),
('Shokolpo paribahan', 57, ''),
('Shokolpo paribahan', 58, ''),
('Shokolpo paribahan', 75, ''),
('Shokolpo paribahan', 78, ''),
('Tetulia paribahan', 30, ''),
('Tetulia paribahan', 44, ''),
('Tetulia paribahan', 47, ''),
('Tetulia paribahan', 48, ''),
('Tetulia paribahan', 49, ''),
('Tetulia paribahan', 50, ''),
('Tetulia paribahan', 51, ''),
('Tetulia paribahan', 53, ''),
('Titas Paribahan', 27, ''),
('Titas Paribahan', 28, ''),
('Titas Paribahan', 57, ''),
('Torongo plus', 10, ''),
('Torongo plus', 11, ''),
('Torongo plus', 12, ''),
('Torongo plus', 14, ''),
('Torongo plus', 15, ''),
('Torongo plus', 43, ''),
('Torongo plus', 64, ''),
('Torongo plus', 68, ''),
('Torongo plus', 73, ''),
('Trans silva', 28, ''),
('Trans silva', 59, ''),
('Trans silva', 60, ''),
('Trans silva', 61, ''),
('Trans silva', 63, ''),
('Trans silva', 64, ''),
('Trans silva', 68, ''),
('Trans silva', 69, ''),
('Trans silva', 70, ''),
('Trans silva', 72, ''),
('TRUST LINE', 30, ''),
('TRUST LINE', 38, ''),
('TRUST LINE', 41, ''),
('TRUST LINE', 46, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stop`
--

CREATE TABLE `bus_stop` (
  `bus_stop_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lat` float(20,10) NOT NULL,
  `lng` float(20,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stop`
--

INSERT INTO `bus_stop` (`bus_stop_id`, `name`, `lat`, `lng`) VALUES
(4, 'Kawranbazar', 23.7519207001, 90.3924102783),
(5, 'Bangla Motor', 23.7457809448, 90.3941421509),
(6, 'Panthapath signal', 23.7514476776, 90.3780593872),
(7, 'Palton', 23.7300815582, 90.4099578857),
(8, 'Nabisko', 23.7696132660, 90.4004669189),
(9, 'Bongo Bazar', 23.7233524323, 90.4049301147),
(10, 'Mohammadpur', 23.7572422028, 90.3613128662),
(11, 'Shankar', 23.7507057190, 90.3677139282),
(12, 'Dhamondi 15', 23.7440032959, 90.3722610474),
(13, 'Jhigtola', 23.7392139435, 90.3750381470),
(14, 'Malibag rail gate', 23.7496070862, 90.4120559692),
(15, 'Banshri', 23.7631530762, 90.4330825806),
(16, 'Kamlapur', 23.7323226929, 90.4246520996),
(17, 'Katabon', 23.7386226654, 90.3913497925),
(18, 'Notre Dame College', 23.7310256958, 90.4206466675),
(19, 'Shapla Chattar, Motijhil', 23.7267475128, 90.4207687378),
(20, 'Kochukhet', 23.7915668488, 90.3871002197),
(21, 'Soinik club', 23.7904605865, 90.3994979858),
(22, 'Adabor', 23.7735958099, 90.3612213135),
(23, 'Fokirapul', 23.7354660034, 90.4007949829),
(24, 'Sayedabad', 23.7157554626, 90.4286346436),
(26, 'Mouchak', 23.7466506958, 90.4118194580),
(27, 'Gabtoli', 23.7832489014, 90.3428955078),
(28, 'Mirpur 1', 23.7985744476, 90.3530960083),
(29, 'Mirpur 2', 23.8050594330, 90.3634338379),
(30, 'Mirpur 10', 23.8067455292, 90.3686294556),
(31, 'Mirpur 11', 23.8159637451, 90.3661117554),
(32, 'Mirpur 12', 23.8280639648, 90.3640670776),
(33, 'Mirpur 14', 23.7983913422, 90.3875885010),
(34, 'Kazipara', 23.7971897125, 90.3728408813),
(35, 'Shewrapara', 23.7904186249, 90.3756256104),
(36, 'Mohakhali', 23.7782211304, 90.3977355957),
(37, 'Kakoli', 23.7952404022, 90.4010467529),
(38, 'Banani', 23.7936935425, 90.4065017700),
(39, 'Gulshan 1', 23.7802886963, 90.4164199829),
(40, 'Gulshan 2', 23.7936534882, 90.4147872925),
(41, 'Natun Bazar', 23.7977104187, 90.4235153198),
(42, 'Badda', 23.7806243896, 90.4255294800),
(43, 'Rampura', 23.7656021118, 90.4218215942),
(44, 'Kalshi', 23.8221340179, 90.3776702881),
(45, 'Jamuna Future Park', 23.8126487732, 90.4255065918),
(46, 'Cantonment (jahangir Gate)', 23.7753105164, 90.3899383545),
(47, 'Shia Mosjid', 23.7624034882, 90.3589324951),
(48, 'Shamoli', 23.7748298645, 90.3656616211),
(49, 'Agargaon', 23.7771701813, 90.3803558350),
(50, 'Bissho Road', 23.8212013245, 90.4186096191),
(51, 'Airport', 23.8514480591, 90.4077224731),
(53, 'Abdullahpur', 23.8797588348, 90.4011764526),
(54, 'Khilgaon', 23.7480449677, 90.4233932495),
(55, 'Tongi', 23.8937835693, 90.4030532837),
(56, 'Badda Link Road', 23.7806701660, 90.4244155884),
(57, 'Chiriyakhana (Mirpur)', 23.8113136292, 90.3485183716),
(58, 'Framgate', 23.7574348450, 90.3903350830),
(59, 'Pressclub (Motijhil)', 23.7299900055, 90.4059677124),
(60, 'Asadgate', 23.7604446411, 90.3728179932),
(61, 'Kolyanpur', 23.7779903412, 90.3610763550),
(62, 'Shukrabad', 23.7524261475, 90.3775024414),
(63, 'Kolabagan', 23.7481575012, 90.3800201416),
(64, 'Science Lab', 23.7387924194, 90.3834381104),
(65, 'Nilkhet', 23.7321166992, 90.3851394653),
(66, 'Azimpur', 23.7271099091, 90.3862609863),
(67, 'New Market', 23.7343864441, 90.3844833374),
(68, 'Shahbag', 23.7381858826, 90.3958663940),
(69, 'Technical (Mirpur)', 23.7938766479, 90.3742218018),
(70, 'Jatrabari', 23.7101249695, 90.4342803955),
(71, 'Babubazar Bridge', 23.7106285095, 90.4027709961),
(72, 'Gulistan', 23.7251663208, 90.4119873047),
(73, 'Kakrail', 23.7375259399, 90.4081420898),
(74, 'Mazar Road', 23.7829895020, 90.3471755981),
(75, 'Bijoy Shoroni', 23.7644329071, 90.3889541626),
(76, 'IDB', 23.7782745361, 90.3789672852),
(77, 'Sadarghat', 23.7095794678, 90.4118652344),
(78, 'Mogbazar', 23.7483406067, 90.4029617310),
(79, 'Azampur', 23.8638496399, 90.3942947388);

-- --------------------------------------------------------

--
-- Table structure for table `share_location`
--

CREATE TABLE `share_location` (
  `user_from` int(5) NOT NULL,
  `user_to` int(5) NOT NULL,
  `lat` float(20,10) NOT NULL,
  `lng` float(20,10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `bus_busstop_relation`
--
ALTER TABLE `bus_busstop_relation`
  ADD PRIMARY KEY (`bus_name`,`bus_stop_id`),
  ADD KEY `bus_id` (`bus_name`,`bus_stop_id`),
  ADD KEY `bus_stop_id` (`bus_stop_id`);

--
-- Indexes for table `bus_stop`
--
ALTER TABLE `bus_stop`
  ADD PRIMARY KEY (`bus_stop_id`),
  ADD KEY `bus_stop_id` (`bus_stop_id`);

--
-- Indexes for table `share_location`
--
ALTER TABLE `share_location`
  ADD PRIMARY KEY (`user_from`,`user_to`,`time`),
  ADD KEY `user_from` (`user_from`,`user_to`),
  ADD KEY `user_to` (`user_to`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`,`phone`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_stop`
--
ALTER TABLE `bus_stop`
  MODIFY `bus_stop_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_busstop_relation`
--
ALTER TABLE `bus_busstop_relation`
  ADD CONSTRAINT `bus_busstop_relation_ibfk_5` FOREIGN KEY (`bus_name`) REFERENCES `bus` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bus_busstop_relation_ibfk_6` FOREIGN KEY (`bus_stop_id`) REFERENCES `bus_stop` (`bus_stop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `share_location`
--
ALTER TABLE `share_location`
  ADD CONSTRAINT `share_location_ibfk_1` FOREIGN KEY (`user_from`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `share_location_ibfk_2` FOREIGN KEY (`user_to`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
