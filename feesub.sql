-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 07:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feesub`
--

-- --------------------------------------------------------

--
-- Table structure for table `rcv`
--

CREATE TABLE `rcv` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reg_no` int(255) NOT NULL,
  `class` text NOT NULL,
  `depositer` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `total` int(255) NOT NULL,
  `due` int(255) DEFAULT NULL,
  `rec_no` int(255) NOT NULL,
  `particulars` varchar(255) DEFAULT NULL,
  `fee_month` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcv`
--

INSERT INTO `rcv` (`id`, `name`, `reg_no`, `class`, `depositer`, `date`, `total`, `due`, `rec_no`, `particulars`, `fee_month`) VALUES
(57, 'raj', 503, 'kg', 'mother', '2016-09-19', 470, NULL, 1, ' tie    admisson yearly', 'jan feb mar         '),
(58, 'raju', 504, '4', 'mother', '2016-09-19', 1150, NULL, 2, '     admisson ', 'jan           '),
(59, 'raju', 504, '4', 'mother', '2016-09-19', 500, NULL, 3, '      yearly', '           '),
(60, 'raju', 504, '4', 'mother', '2016-09-19', 500, NULL, 4, '      yearly', '           '),
(61, 'raju', 504, '4', 'mother', '2016-09-19', 500, NULL, 5, '      yearly', '           '),
(62, 'raju', 504, '4', 'mother', '2016-09-19', 500, NULL, 6, '      yearly', '           '),
(63, 'raju', 504, '4', 'mother', '2016-09-19', 500, NULL, 7, '      yearly', '           '),
(64, 'raju', 504, '4', 'mother', '2016-09-19', 500, NULL, 8, '      yearly', '           '),
(65, 'rajun', 504, '4', 'mother', '2016-09-19', 1320, NULL, 9, ' tie    admisson ', 'jan feb          '),
(66, 'rajun', 504, '4', 'mother', '2016-09-19', 1320, NULL, 10, ' tie    admisson ', 'jan feb          '),
(67, 'rajun', 504, '4', 'mother', '2016-09-19', 1320, NULL, 11, ' tie    admisson ', 'jan feb          '),
(68, 'rajun', 504, '4', 'mother', '2016-09-19', 1320, NULL, 12, ' tie    admisson ', 'jan feb          '),
(69, 'surovi', 111, '5', 'mother', '2016-09-19', 220, NULL, 13, 'diary tie     ', '           dec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rcv`
--
ALTER TABLE `rcv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rcv`
--
ALTER TABLE `rcv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
