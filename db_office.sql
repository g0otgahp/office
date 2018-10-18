-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 05:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginId` int(11) NOT NULL,
  `loginUsername` varchar(100) NOT NULL,
  `loginPassword` varchar(100) NOT NULL,
  `profileId` int(11) NOT NULL,
  `loginStatus` int(11) NOT NULL DEFAULT '1',
  `loginLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `loginUsername`, `loginPassword`, `profileId`, `loginStatus`, `loginLog`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '2018-10-17 09:00:32'),
(2, 'kaiixtongz', '6ce5ffdd9b901df6732b6f1494233a63', 2, 1, '2018-10-17 04:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionId` int(11) NOT NULL,
  `positionName` varchar(100) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '1',
  `positionStatus` int(11) NOT NULL DEFAULT '1',
  `positionLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionId`, `positionName`, `permission`, `positionStatus`, `positionLog`) VALUES
(1, 'Accounting Manager - ผู้จัดการฝ่ายบัญชี', 3, 1, '2018-10-17 02:13:01'),
(2, 'Accounting Supervisor - หัวหน้าฝ่ายบัญชี', 2, 1, '2018-10-16 09:22:25'),
(3, 'Accounting Officer - พนักงานบัญชี', 1, 1, '2018-10-16 09:23:15'),
(4, 'Admin Supervisor - หัวหน้าแอดมิน', 2, 1, '2018-10-16 09:44:59'),
(5, 'Admin Officer - เจ้าหน้าที่แอดมิน', 1, 1, '2018-10-16 09:45:01'),
(6, 'Chief Executive Officer - ผู้บริหารระดับสูง', 4, 1, '2018-10-16 09:45:06'),
(7, 'Computer Graphic Design - นักออกแบบ', 2, 1, '2018-10-16 09:45:37'),
(8, 'Developer - ผู้พัฒนาระบบ', 3, 1, '2018-10-16 09:45:11'),
(9, 'Executive Secretary - เลขานุการผู้บริหาร', 2, 1, '2018-10-16 09:45:14'),
(10, 'Messenger - คนส่งเอกสาร', 1, 1, '2018-10-17 08:38:53'),
(11, 'Operator - พนักงานรับโทรศัพท์', 2, 1, '2018-10-16 09:47:24'),
(12, 'Repair & Maintenance -  วิศวกรฝ่ายซ่อมบำรุง', 2, 1, '2018-10-16 09:48:51'),
(13, 'Sales Manager - ผู้จัดการฝ่ายขาย', 3, 1, '2018-10-16 09:50:55'),
(14, 'Salesman - พนักงานขาย', 2, 1, '2018-10-16 09:52:03'),
(15, 'Service Technician - เจ้าหน้าที่เทคนิคฝ่ายบริการ', 2, 1, '2018-10-16 09:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileId` int(11) NOT NULL,
  `profilePrefix` varchar(20) NOT NULL,
  `profileName` varchar(100) NOT NULL,
  `profileSurname` varchar(100) NOT NULL,
  `profileNickname` varchar(100) NOT NULL,
  `profileSex` varchar(20) NOT NULL,
  `profileCitizenId` varchar(20) NOT NULL,
  `profileEmail` varchar(100) NOT NULL,
  `profilePhone` varchar(20) NOT NULL,
  `profileImage` varchar(200) NOT NULL DEFAULT 'noImg.png',
  `profileAddress` varchar(500) NOT NULL,
  `positionId` int(11) NOT NULL,
  `profileStatus` int(11) NOT NULL DEFAULT '1',
  `profileLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileId`, `profilePrefix`, `profileName`, `profileSurname`, `profileNickname`, `profileSex`, `profileCitizenId`, `profileEmail`, `profilePhone`, `profileImage`, `profileAddress`, `positionId`, `profileStatus`, `profileLog`) VALUES
(1, '', 'Administrator', 'นิวซีโน่ (ประเทศไทย)', 'Admin', 'หญิง', 'Administrator', 'admin@newzeno.com', '', '20181017102617.jpg', 'นิวซีโน่ (ประเทศไทย)', 4, 1, '2018-10-17 09:00:25'),
(2, 'นาย', 'อดิพงษ์', 'ธรรมนวกุล', 'โต้ง', 'ชาย', '1102944123463', 'tong.adipong@gmail.com', '0809073005', '20181017065642.jpg', 'เลขที่. 200 ถนน. พุทธมณฑลสาย 3 แขวง. บางไผ่ เขต. บางแค จังหวัด. กรุงเทพมหานคร', 8, 1, '2018-10-17 08:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
