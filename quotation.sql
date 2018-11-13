-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 05:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quoId` int(11) NOT NULL COMMENT 'ไอดี',
  `quoNo` varchar(45) NOT NULL COMMENT 'เลขบิล',
  `quoDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่ออกใบ',
  `quoCompany` varchar(45) NOT NULL COMMENT 'ชื่อหน่วยงาน',
  `quoCustomerId` int(11) NOT NULL COMMENT 'ไอดีลูกค้า',
  `quoTel` varchar(45) NOT NULL COMMENT 'เบอร์โทร',
  `quoEmail` varchar(45) NOT NULL COMMENT 'อีเมลล์',
  `quoProject` varchar(45) NOT NULL COMMENT 'ชื่อโปรเจค',
  `quoReachDay` int(11) NOT NULL COMMENT 'ยื่นราคาภายในระยะวันที่',
  `quoTransportDay` int(11) NOT NULL COMMENT 'ส่งของภายในระยะวันที่',
  `quoPayments` varchar(45) NOT NULL COMMENT 'เงื่อนไขการชำระ',
  `quoOfferId` int(11) NOT NULL COMMENT 'ไอดีผู้ออกใบเสนอ',
  `quoStatus` int(11) NOT NULL DEFAULT '2' COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`quoId`, `quoNo`, `quoDate`, `quoCompany`, `quoCustomerId`, `quoTel`, `quoEmail`, `quoProject`, `quoReachDay`, `quoTransportDay`, `quoPayments`, `quoOfferId`, `quoStatus`) VALUES
(1, 'QU0001', '2018-11-13 04:14:19', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'ชื่อโปรเจค', 30, 30, 'เงินสด', 1, 3),
(2, 'QU0001', '2018-11-11 06:59:50', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'ชื่อโปรเจค', 30, 30, 'เงินสด', 1, 2),
(3, 'QU0001', '2018-11-11 06:59:55', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'ชื่อโปรเจค', 30, 30, 'เงินสด', 1, 3),
(4, 'QU0001', '2018-11-11 06:59:59', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'ชื่อโปรเจค', 30, 30, 'เงินสด', 1, 2),
(5, 'QU0001', '2018-11-13 04:14:22', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'ชื่อโปรเจค', 30, 30, 'เงินสด', 1, 3),
(6, 'QU0001', '2018-11-13 04:14:30', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'ชื่อโปรเจค', 30, 30, 'เงินสด', 1, 2),
(7, 'QU0001', '0000-00-00 00:00:00', 'บริษัท นิวซีโน่ (ประเทศไทย)', 1, '0993254289', 'pop@newzeno.com', 'โรงเรียน A', 30, 30, 'เงินสด', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quoId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี', AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
