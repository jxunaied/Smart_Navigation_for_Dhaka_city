-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 11:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lat` float(20,10) DEFAULT NULL,
  `lng` float(20,10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `lat`, `lng`, `status`) VALUES
(3, 'Alif Paribahan', NULL, NULL, NULL),
(10, 'BRTC', NULL, NULL, NULL),
(13, 'Dhaka Metro service', NULL, NULL, NULL),
(16, 'Jabale Nur paribahan', NULL, NULL, NULL),
(20, 'Projapoti paribahan', NULL, NULL, NULL),
(26, 'Torongo plus', NULL, NULL, NULL),
(27, 'Trans silva', NULL, NULL, NULL),
(28, 'Shuprovat', NULL, NULL, NULL),
(29, 'Winner', NULL, NULL, NULL),
(30, 'ATCL', NULL, NULL, NULL),
(31, 'Safety 36', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `busstop_distance`
--

CREATE TABLE `busstop_distance` (
  `id` int(10) NOT NULL,
  `src_id` int(5) NOT NULL,
  `dest_id` int(5) NOT NULL,
  `src_name` varchar(100) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `distance` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `huristic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busstop_distance`
--

INSERT INTO `busstop_distance` (`id`, `src_id`, `dest_id`, `src_name`, `dest_name`, `distance`, `duration`, `huristic`) VALUES
(1, 4, 8, 'Kawranbazar', 'Nabisko', '2911', '21', '2138'),
(32, 4, 63, 'Kawranbazar', 'Kolabagan', '2452', '11', '1305'),
(43, 8, 36, 'Nabisko', 'Mohakhali', '1060', '11', '1011'),
(84, 10, 11, 'Mohammadpur', 'Shankar', '1000', '7', '1026'),
(110, 10, 60, 'Mohammadpur', 'Asadgate', '1241', '7', '1182'),
(124, 11, 12, 'Shankar', 'Dhamondi 15', '850', '4', '789'),
(204, 14, 26, 'Malibag rail gate', 'Mouchak', '350', '3', '331'),
(213, 14, 42, 'Malibag rail gate', 'Badda', '3783', '18', '3690'),
(214, 14, 43, 'Malibag rail gate', 'Rampura', '2001', '8', '1998'),
(236, 14, 73, 'Malibag rail gate', 'Kakrail', '1801', '11', '1143'),
(250, 15, 43, 'Banshri', 'Rampura', '1480', '8', '1242'),
(299, 17, 64, 'Katabon', 'Science Lab', '750', '3', '742'),
(303, 17, 68, 'Katabon', 'Shahbag', '300', '2', '191'),
(340, 18, 72, 'Notre Dame College', 'Gulistan', '2497', '15', '1005'),
(374, 26, 73, 'Mouchak', 'Kakrail', '1311', '', '952'),
(376, 28, 30, 'Mirpur 1', 'Mirpur 10', '1859', '10', '1794'),
(395, 28, 61, 'Mirpur 1', 'Kolyanpur', '3015', '12', '2402'),
(403, 28, 69, 'Mirpur 1', 'Technical (Mirpur)', '1999', '8', '1902'),
(408, 30, 31, 'Mirpur 10', 'Mirpur 11', '1608', '8', '1587'),
(409, 30, 34, 'Mirpur 10', 'Kazipara', '1152', '10', '1151'),
(416, 30, 44, 'Mirpur 10', 'Kalshi', '2901', '15', '2151'),
(439, 31, 34, 'Mirpur 11', 'Kazipara', '', '', ''),
(469, 34, 35, 'Kazipara', 'Shewrapara', '813', '7', '804'),
(498, 35, 36, 'Shewrapara', 'Mohakhali', '5437', '15', '2472'),
(505, 35, 49, 'Shewrapara', 'Agargaon', '1601', '10', '1449'),
(526, 36, 39, 'Mohakhali', 'Gulshan 1', '2393', '14', '2118'),
(537, 36, 58, 'Mohakhali', 'Framgate', '2659', '12', '2261'),
(554, 39, 42, 'Gulshan 1', 'Badda', '', '', ''),
(562, 39, 56, 'Gulshan 1', 'Badda Link Road', '865', '6', '858'),
(579, 41, 42, 'Natun Bazar', 'Badda', '', '', ''),
(584, 41, 50, 'Natun Bazar', 'Bissho Road', '', '', ''),
(587, 41, 56, 'Natun Bazar', 'Badda Link Road', '1973', '9', '1873'),
(604, 42, 43, 'Badda', 'Rampura', '', '', ''),
(653, 44, 50, 'Kalshi', 'Bissho Road', '4967', '12', '4158'),
(673, 48, 49, 'Shamoli', 'Agargaon', '1645', '7', '1509'),
(680, 48, 60, 'Shamoli', 'Asadgate', '1805', '5', '1786'),
(681, 48, 61, 'Shamoli', 'Kolyanpur', '555', '2', '553'),
(682, 48, 62, 'Shamoli', 'Shukrabad', '', '', ''),
(714, 50, 51, 'Bissho Road', 'Airport', '', '', ''),
(716, 50, 56, 'Bissho Road', 'Badda Link Road', '', '', ''),
(733, 51, 53, 'Airport', 'Abdullahpur', '3550', '15', '3222'),
(807, 59, 68, 'Pressclub (Motijhil)', 'Shahbag', '1500', '5', '1380'),
(810, 59, 72, 'Pressclub (Motijhil)', 'Gulistan', '1200', '7', '792'),
(813, 60, 61, 'Asadgate', 'Kolyanpur', '', '', ''),
(814, 60, 62, 'Asadgate', 'Shukrabad', '1110', '6', '1017'),
(815, 60, 63, 'Asadgate', 'Kolabagan', '1800', '10', '1506'),
(833, 61, 69, 'Kolyanpur', 'Technical (Mirpur)', '850', '3', '825'),
(838, 62, 63, 'Shukrabad', 'Kolabagan', '550', '2', '490'),
(849, 63, 64, 'Kolabagan', 'Science Lab', '1110', '5', '1058'),
(861, 64, 67, 'Science Lab', 'New Market', '500', '2', '298'),
(862, 64, 68, 'Science Lab', 'Shahbag', '1311', '7', '1255'),
(868, 65, 66, 'Nilkhet', 'Azimpur', '610', '5', '570'),
(869, 65, 67, 'Nilkhet', 'New Market', '350', '2', '350'),
(876, 66, 67, 'Azimpur', 'New Market', '1000', '6', '947'),
(892, 68, 73, 'Shahbag', 'Kakrail', '2011', '10', '1284'),
(898, 70, 72, 'Jatrabari', 'Gulistan', '3070', '15', '2838'),
(903, 73, 77, 'Kakrail', 'Sadarghat', '3791', '30', '3178');

-- --------------------------------------------------------

--
-- Table structure for table `bus_busstop_relation`
--

CREATE TABLE `bus_busstop_relation` (
  `id` int(5) NOT NULL,
  `bus_id` int(5) NOT NULL,
  `bus_stop_id` int(5) NOT NULL,
  `serial` int(5) NOT NULL,
  `crossed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_busstop_relation`
--

INSERT INTO `bus_busstop_relation` (`id`, `bus_id`, `bus_stop_id`, `serial`, `crossed`) VALUES
(1, 3, 15, 9, ''),
(2, 3, 28, 1, ''),
(3, 3, 30, 2, ''),
(5, 3, 34, 3, ''),
(6, 3, 35, 4, ''),
(7, 3, 36, 5, ''),
(8, 3, 39, 6, ''),
(9, 3, 42, 7, ''),
(10, 3, 43, 8, ''),
(11, 10, 10, 1, ''),
(12, 10, 36, 4, ''),
(13, 10, 39, 5, ''),
(14, 10, 41, 7, ''),
(15, 10, 56, 6, ''),
(16, 10, 58, 3, ''),
(17, 10, 60, 2, ''),
(18, 13, 28, 1, ''),
(19, 13, 48, 3, ''),
(20, 13, 60, 4, ''),
(21, 13, 61, 2, ''),
(22, 13, 62, 5, ''),
(23, 13, 63, 6, ''),
(24, 13, 64, 7, ''),
(25, 13, 65, 9, ''),
(26, 13, 66, 10, ''),
(27, 13, 67, 8, ''),
(28, 16, 28, 4, ''),
(29, 16, 30, 5, ''),
(30, 16, 41, 8, ''),
(31, 16, 44, 6, ''),
(32, 16, 48, 2, ''),
(33, 16, 50, 7, ''),
(34, 16, 60, 1, ''),
(35, 16, 61, 3, ''),
(37, 20, 10, 1, ''),
(38, 20, 28, 6, ''),
(39, 20, 30, 7, ''),
(40, 20, 44, 8, ''),
(41, 20, 48, 3, ''),
(42, 20, 50, 9, ''),
(43, 20, 51, 10, ''),
(44, 20, 53, 11, ''),
(45, 20, 60, 2, ''),
(46, 20, 61, 4, ''),
(47, 20, 69, 5, ''),
(48, 26, 10, 1, ''),
(49, 26, 11, 2, ''),
(50, 26, 12, 3, ''),
(51, 26, 14, 7, ''),
(52, 26, 15, 9, ''),
(53, 26, 43, 8, ''),
(54, 26, 64, 4, ''),
(55, 26, 68, 5, ''),
(56, 26, 73, 6, ''),
(57, 27, 28, 1, ''),
(58, 27, 59, 8, ''),
(59, 27, 60, 4, ''),
(60, 27, 61, 3, ''),
(61, 27, 63, 5, ''),
(62, 27, 64, 6, ''),
(63, 27, 68, 7, ''),
(64, 27, 69, 2, ''),
(65, 27, 70, 10, ''),
(66, 27, 72, 9, ''),
(67, 28, 14, 4, ''),
(68, 28, 26, 3, ''),
(69, 28, 41, 6, ''),
(70, 28, 42, 5, ''),
(71, 28, 50, 7, ''),
(72, 28, 73, 2, ''),
(73, 28, 77, 1, ''),
(74, 29, 4, 5, ''),
(75, 29, 8, 6, ''),
(76, 29, 36, 7, ''),
(77, 29, 39, 8, ''),
(78, 29, 50, 10, ''),
(79, 29, 56, 9, ''),
(80, 29, 63, 4, ''),
(81, 29, 64, 3, ''),
(82, 29, 66, 1, ''),
(83, 29, 67, 2, ''),
(84, 30, 10, 1, ''),
(85, 30, 17, 6, ''),
(86, 30, 18, 10, ''),
(87, 30, 59, 8, ''),
(88, 30, 60, 2, ''),
(89, 30, 62, 3, ''),
(90, 30, 63, 4, ''),
(91, 30, 64, 5, ''),
(92, 30, 68, 7, ''),
(93, 30, 72, 9, ''),
(94, 31, 30, 10, ''),
(95, 31, 31, 11, ''),
(96, 31, 34, 9, ''),
(97, 31, 35, 8, ''),
(98, 31, 48, 6, ''),
(99, 31, 49, 7, ''),
(100, 31, 62, 5, ''),
(101, 31, 63, 4, ''),
(102, 31, 64, 3, ''),
(103, 31, 66, 1, ''),
(104, 31, 67, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stop`
--

CREATE TABLE `bus_stop` (
  `bus_stop_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `l_lat` float(20,10) NOT NULL,
  `l_lng` float(20,10) NOT NULL,
  `r_lat` float(20,10) NOT NULL,
  `r_lng` float(20,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stop`
--

INSERT INTO `bus_stop` (`bus_stop_id`, `name`, `l_lat`, `l_lng`, `r_lat`, `r_lng`) VALUES
(4, 'Kawran Bazar Bus Stop, Dhaka', 23.7520008087, 90.3923416138, 23.7519989014, 90.3924713135),
(8, 'Nabisco Bus Stop, Dhaka', 23.7696342468, 90.4009323120, 23.7696304321, 90.4010772705),
(10, 'Mohammadpur Bus Stop, Dhaka', 23.7570266724, 90.3615188599, 23.7570075989, 90.3616027832),
(11, 'Sankar Bus Stop, Dhaka', 23.7506523132, 90.3681640625, 23.7507915497, 90.3682403564),
(12, 'Dhanmondi 15 no bus stop, Dhaka', 23.7440052032, 90.3727035522, 23.7442836761, 90.3727111816),
(14, 'Malibagh Rail Gate Bus Stop, Dhaka', 23.7502136230, 90.4129562378, 23.7501392365, 90.4130172729),
(15, 'D Block Bus Stop, Banasree Main Road, Dhaka', 23.7631511688, 90.4335708618, 23.7631282806, 90.4337234497),
(17, 'Kataban Bus Stand, Dhaka', 23.7310256958, 90.4206466675, 23.7386627197, 90.3911590576),
(18, 'Notre Dame College, Dhaka', 23.7310009003, 90.4210968018, 23.7310504913, 90.4212570190),
(26, 'Mouchak Bus Stand, Dhaka', 23.7459907532, 90.4115066528, 23.7460441589, 90.4125061035),
(28, 'Mirpur 1 Bus Stop, Dhaka', 23.7986583710, 90.3532409668, 23.7987785339, 90.3536453247),
(30, 'Mirpur 10 Bus Stopage, Dhaka', 23.8067188263, 90.3685607910, 23.8068199158, 90.3686904907),
(31, 'Mirpur 11 Bus Stand, Dhaka', 23.8159008026, 90.3659896851, 23.8159828186, 90.3662185669),
(34, 'Kazipara Bus Stop, Dhaka', 23.7971458435, 90.3727951050, 23.7972011566, 90.3729324341),
(35, 'ShewraPara Bus Stand, Dhaka', 23.7903728485, 90.3756484985, 23.7904148102, 90.3758010864),
(36, 'Mohakhali Bus Stop, Dhaka', 23.7782268524, 90.3978271484, 23.7781162262, 90.3982467651),
(39, 'Gulshan 1 Bus Stop, Dhaka', 23.7803344727, 90.4172058105, 23.7804012299, 90.4162216187),
(41, 'Natun Bazar Bus Stand, Dhaka', 23.7977790833, 90.4234161377, 23.7979297638, 90.4235992432),
(42, 'Uttar Badda Bus Stop, Dhaka', 23.7854213715, 90.4255828857, 23.7855243683, 90.4257659912),
(43, 'Rampura Bus Stop, Dhaka', 23.7655677795, 90.4217224121, 23.7655200958, 90.4218444824),
(44, 'Kalshi Bus Stand, Dhaka', 23.8219680786, 90.3776550293, 23.8223037720, 90.3777389526),
(48, 'Shyamoli Bus Stop, Dhaka', 23.7750396729, 90.3652496338, 23.7750396729, 90.3655166626),
(49, 'Agargaon Bus Stop, Dhaka', 23.7767047882, 90.3797302246, 23.7773151398, 90.3805999756),
(50, 'Bishwa Road Bus Stop, Dhaka', 23.8213615417, 90.4183807373, 23.8212070465, 90.4186935425),
(51, 'Airport Bus Stand, Dhaka - Mymensingh Highway, Dhaka', 23.8512115479, 90.4077377319, 23.8515796661, 90.4077072144),
(53, 'Abdullahpur Bus Stop, Dhaka - Ashulia Highway, Dhaka', 23.8797397614, 90.4011001587, 23.8798084259, 90.4012908936),
(56, 'Link Road Bus Stand, Dhaka', 23.7806205750, 90.4255599976, 23.7806358337, 90.4257125854),
(58, 'Farmgate Bus Stop, Dhaka', 23.7574214935, 90.3902206421, 23.7579288483, 90.3902130127),
(59, 'Press Club Bus Stop, Dhaka', 23.7298812866, 90.4060592651, 23.7300701141, 90.4060211182),
(60, 'Asad Gate Bus Stand, Dhaka', 23.7597179413, 90.3731307983, 23.7603759766, 90.3729782104),
(61, 'Kallyanpur Bus Stop, Dhaka', 23.7784862518, 90.3599243164, 23.7786464691, 90.3598861694),
(62, 'Shukrabad Bus Stop, Dhaka', 23.7524223328, 90.3774490356, 23.7524852753, 90.3775634766),
(63, 'Kolabagan Bus Stop, Dhaka', 23.7489376068, 90.3794097900, 23.7487564087, 90.3797912598),
(64, 'Science Lab Bus Station, Dhaka', 23.7388057709, 90.3833312988, 23.7394676208, 90.3833923340),
(65, 'Nilkhet Bus Stop, Dhaka', 23.7320327759, 90.3850708008, 23.7328281403, 90.3850021362),
(66, 'Azimpur Bus Stop, Dhaka', 23.7265815735, 90.3862762451, 23.7271003723, 90.3863830566),
(67, 'New Market, Dhaka', 23.7342796326, 90.3844070435, 23.7343978882, 90.3845901489),
(68, 'Shahbagh Bus Stop, Dhaka', 23.7375984192, 90.3956375122, 23.7387943268, 90.3960266113),
(69, 'Technical Bus Stop, Principal Abul Kashem Road, Dhaka', 23.7813453674, 90.3520050049, 23.7814788818, 90.3520660400),
(70, 'Jatrabari Bus Stop, Dhaka', 23.7100429535, 90.4343109131, 23.7101535797, 90.4346389771),
(72, 'Gulistan Bus Stop, Dhaka', 23.7250652313, 90.4119186401, 23.7251567841, 90.4120483398),
(73, 'Kakrail Bus Stop, Dhaka', 23.7374248505, 90.4085998535, 23.7375488281, 90.4085922241),
(77, 'Sadar Ghat Bus Stop, Dhaka', 23.7096633911, 90.4097900391, 23.7096595764, 90.4120254517);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `from_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`from_id`, `to_id`, `status`) VALUES
(1, 3, 1),
(1, 4, 1),
(1, 6, 1),
(1, 9, 1),
(2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `busid` int(5) NOT NULL,
  `source` int(5) NOT NULL,
  `destination` int(5) NOT NULL,
  `starting_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ending_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saved_location`
--

CREATE TABLE `saved_location` (
  `id` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `lat` float(20,10) NOT NULL,
  `lng` float(20,10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved_location`
--

INSERT INTO `saved_location` (`id`, `userid`, `lat`, `lng`, `date`, `time`) VALUES
(12, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:37:54'),
(15, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:40'),
(16, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:42'),
(17, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:42'),
(18, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:43'),
(19, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:44'),
(20, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:44'),
(21, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:44'),
(22, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:44'),
(23, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:45'),
(24, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:45'),
(25, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:45'),
(26, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:45'),
(27, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:45'),
(28, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:45'),
(29, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:46'),
(30, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:46'),
(31, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:46'),
(32, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:46'),
(33, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:46'),
(34, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:46'),
(35, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:47'),
(36, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:47'),
(37, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:47'),
(38, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:47'),
(39, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:47'),
(40, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:48'),
(41, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:48'),
(42, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:48'),
(43, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:48'),
(44, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:48'),
(45, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:48'),
(46, 1, 0.0000000000, 0.0000000000, '2018-10-01', '09:38:52'),
(47, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:53'),
(48, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:54'),
(49, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:55'),
(50, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:56'),
(51, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:38:59'),
(52, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:39:01'),
(53, 1, 23.7872161865, 90.4404907227, '2018-10-01', '09:39:01'),
(56, 1, 0.0000000000, 0.0000000000, '2018-10-02', '02:12:17'),
(57, 1, 0.0000000000, 0.0000000000, '2018-10-02', '04:08:29'),
(58, 7, 0.0000000000, 0.0000000000, '2018-10-02', '04:15:14'),
(59, 7, 0.0000000000, 0.0000000000, '2018-10-02', '04:15:14'),
(60, 7, 23.7872085571, 90.4404678345, '2018-10-02', '04:15:14'),
(61, 7, 23.7872085571, 90.4404678345, '2018-10-02', '04:15:14'),
(62, 7, 23.7872085571, 90.4404678345, '2018-10-02', '04:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `share_location`
--

CREATE TABLE `share_location` (
  `id` int(5) NOT NULL,
  `user_from` int(5) NOT NULL,
  `user_to` int(5) NOT NULL,
  `lat` float(20,10) NOT NULL,
  `lng` float(20,10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_location`
--

INSERT INTO `share_location` (`id`, `user_from`, `user_to`, `lat`, `lng`, `time`, `address`) VALUES
(0, 1, 3, 23.7872085571, 90.4405059814, '2018-10-01 22:34:49', ''),
(28, 1, 6, 23.7924098969, 90.4356155396, '2018-10-01 05:28:21', ''),
(29, 4, 1, 23.7299423218, 90.3858489990, '2018-10-01 21:16:30', ''),
(30, 9, 1, 23.7519207001, 90.3924102783, '2018-10-01 05:29:14', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'SAIF AHMED ANIK', 'saif@gmail.com', '01674339903'),
(2, 'ZUNAYET HOSSAIN', 'zunayet@gmail.com', 'jbcjsbc'),
(3, 'ZAHID HOSSAIN', 'zahid@gmail.com', '01670898699 '),
(4, 'SHAKHAWAT HOSSAIN', 'shakhawat@gmail.com', '01671451201   '),
(5, 'SHAFAYAT MUGDHA', 'mugdha@gmail.com', '01521333439'),
(6, 'SHIFAT NIPA', 'nipa@gmail.com', '01689880506'),
(7, 'SAIMOON IMRAN', 'saimoon@gmail.com', '01515631793'),
(8, 'SNIGDHA SARKAR', 'snigdha@gmail.com', '01774936678'),
(9, 'TISHA MARJAN', 'tisha@gmail.com', '01785814665');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `busstop_distance`
--
ALTER TABLE `busstop_distance`
  ADD PRIMARY KEY (`src_id`,`dest_id`),
  ADD KEY `dest_id` (`dest_id`);

--
-- Indexes for table `bus_busstop_relation`
--
ALTER TABLE `bus_busstop_relation`
  ADD PRIMARY KEY (`bus_id`,`bus_stop_id`,`serial`),
  ADD KEY `bus_id` (`bus_stop_id`),
  ADD KEY `bus_stop_id` (`bus_stop_id`),
  ADD KEY `bus_id_2` (`bus_id`);

--
-- Indexes for table `bus_stop`
--
ALTER TABLE `bus_stop`
  ADD PRIMARY KEY (`bus_stop_id`),
  ADD KEY `bus_stop_id` (`bus_stop_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`from_id`,`to_id`),
  ADD KEY `from_id` (`from_id`,`to_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`,`userid`,`busid`,`source`,`destination`),
  ADD KEY `userid` (`userid`,`busid`,`source`,`destination`),
  ADD KEY `busid` (`busid`),
  ADD KEY `source` (`source`),
  ADD KEY `destination` (`destination`);

--
-- Indexes for table `saved_location`
--
ALTER TABLE `saved_location`
  ADD PRIMARY KEY (`id`,`userid`),
  ADD KEY `id` (`id`,`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `share_location`
--
ALTER TABLE `share_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_from` (`user_from`,`user_to`),
  ADD KEY `user_to` (`user_to`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`,`password`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_stop`
--
ALTER TABLE `bus_stop`
  MODIFY `bus_stop_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `saved_location`
--
ALTER TABLE `saved_location`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `busstop_distance`
--
ALTER TABLE `busstop_distance`
  ADD CONSTRAINT `busstop_distance_ibfk_1` FOREIGN KEY (`src_id`) REFERENCES `bus_stop` (`bus_stop_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `busstop_distance_ibfk_2` FOREIGN KEY (`dest_id`) REFERENCES `bus_stop` (`bus_stop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bus_busstop_relation`
--
ALTER TABLE `bus_busstop_relation`
  ADD CONSTRAINT `bus_busstop_relation_ibfk_6` FOREIGN KEY (`bus_stop_id`) REFERENCES `bus_stop` (`bus_stop_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bus_busstop_relation_ibfk_7` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`busid`) REFERENCES `bus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`source`) REFERENCES `bus_stop` (`bus_stop_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_4` FOREIGN KEY (`destination`) REFERENCES `bus_stop` (`bus_stop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saved_location`
--
ALTER TABLE `saved_location`
  ADD CONSTRAINT `saved_location_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `share_location`
--
ALTER TABLE `share_location`
  ADD CONSTRAINT `share_location_ibfk_1` FOREIGN KEY (`user_from`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `share_location_ibfk_2` FOREIGN KEY (`user_to`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
