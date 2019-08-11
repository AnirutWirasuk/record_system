-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2019 at 08:32 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ACADEMIC','TEACHING') NOT NULL DEFAULT 'ACADEMIC'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(001, 'four', 'four1234', 'ชื่อ นามสกุล', 'TEACHING'),
(002, 'admin', 'admin1234', 'ภูริภัทร ปราบภัย', 'ACADEMIC'),
(003, '1', '12345', 'Phuripuch', 'TEACHING');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_record`
--

CREATE TABLE `teaching_record` (
  `code_subjects` text COLLATE utf8_bin NOT NULL COMMENT 'รหัสวิชา',
  `subjects` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'วิชา',
  `teaching_name` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'ชื่อครูผู้สอน',
  `level` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'ระดับชั้น',
  `room` int(2) NOT NULL COMMENT 'ห้อง',
  `interest` text COLLATE utf8_bin NOT NULL COMMENT 'ความสนใจ',
  `teaching` text COLLATE utf8_bin NOT NULL COMMENT 'เรื่องที่สอน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
