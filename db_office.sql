-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 05:49 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `customerCompany` varchar(100) NOT NULL,
  `customerPrefix` varchar(20) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerNickname` varchar(50) NOT NULL,
  `customerSex` varchar(20) NOT NULL,
  `customerDepartment` varchar(100) NOT NULL,
  `customerPosition` varchar(100) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `customerMainPhone` varchar(20) NOT NULL,
  `customerSubPhone` varchar(20) NOT NULL,
  `customerFax` varchar(20) NOT NULL,
  `customerAddress` varchar(500) NOT NULL,
  `customerStatus` int(11) NOT NULL DEFAULT '1',
  `customerLog` varchar(100) NOT NULL,
  `customerLogName` varchar(500) NOT NULL,
  `customerLogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerCompany`, `customerPrefix`, `customerName`, `customerNickname`, `customerSex`, `customerDepartment`, `customerPosition`, `customerEmail`, `customerMainPhone`, `customerSubPhone`, `customerFax`, `customerAddress`, `customerStatus`, `customerLog`, `customerLogName`, `customerLogTime`) VALUES
(1, 'บริษัท นิวซีโน่ (ประเทศไทย)', 'นาย', 'ธัญพัฒน์ ปัญญรัศมิชนม์', 'ป๊อป', 'ชาย', 'ผู้บริหาร', 'ผู้บริหารระดับสูง', 'pop@newzeno.com', '0993254289', '', '', 'บริษัท นิวซีโน่ (ประเทศไทย) 184/5 ถนน.สมเด็จพระปิ่นเกล้า (สี่แยกปิ่นเกล้า) แขวง.อรุณอัมรินทร์ เขต.บางกอกน้อย กรุงเทพมหานคร 11130', 1, 'แก้ไขลูกค้า', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:49:42');

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
  `loginLog` varchar(100) NOT NULL,
  `loginLogName` varchar(500) NOT NULL,
  `loginLogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `loginUsername`, `loginPassword`, `profileId`, `loginStatus`, `loginLog`, `loginLogName`, `loginLogTime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 'แก้ไขพนักงาน', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:34:45'),
(2, 'guest', '084e0343a0486ff05530df6c705c8bb4', 2, 1, 'แก้ไขพนักงาน', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:36:15'),
(3, 'kaiixtongz', '6ce5ffdd9b901df6732b6f1494233a63', 3, 1, 'แก้ไขพนักงาน', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionId` int(11) NOT NULL,
  `positionName` varchar(100) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '1',
  `positionStatus` int(11) NOT NULL DEFAULT '1',
  `positionLog` varchar(100) NOT NULL,
  `positionLogName` varchar(500) NOT NULL,
  `positionLogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionId`, `positionName`, `permission`, `positionStatus`, `positionLog`, `positionLogName`, `positionLogTime`) VALUES
(1, 'Accounting Manager - ผู้จัดการฝ่ายบัญชี', 4, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:34'),
(2, 'Accounting Supervisor - หัวหน้าฝ่ายบัญชี', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:43'),
(3, 'Accounting Officer - พนักงานบัญชี', 1, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:45'),
(4, 'Admin Supervisor - หัวหน้าแอดมิน', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:47'),
(5, 'Admin Officer - เจ้าหน้าที่แอดมิน', 1, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:49'),
(6, 'Chief Executive Officer - ผู้บริหารระดับสูง', 4, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:57'),
(7, 'Computer Graphic Design - นักออกแบบ', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:42:59'),
(8, 'Developer - ผู้พัฒนาระบบ', 3, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:02'),
(9, 'Executive Secretary - เลขานุการผู้บริหาร', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:05'),
(10, 'Messenger - คนส่งเอกสาร', 1, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:07'),
(11, 'Operator - พนักงานรับโทรศัพท์', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:13'),
(12, 'Repair & Maintenance -  วิศวกรฝ่ายซ่อมบำรุง', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:18'),
(13, 'Sales Manager - ผู้จัดการฝ่ายขาย', 3, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:21'),
(14, 'Salesman - พนักงานขาย', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:24'),
(15, 'Service Technician - เจ้าหน้าที่เทคนิคฝ่ายบริการ', 2, 1, 'แก้ไขตำแหน่ง', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 01:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productCode` varchar(30) NOT NULL,
  `productCategory` varchar(100) NOT NULL,
  `productModel` varchar(100) NOT NULL,
  `productBrand` varchar(100) NOT NULL,
  `productDetail` varchar(500) NOT NULL,
  `productCost` int(11) NOT NULL,
  `productRetail` int(11) NOT NULL,
  `productUser1` int(11) NOT NULL,
  `productUser2` int(11) NOT NULL,
  `productDealer1` int(11) NOT NULL,
  `productDealer2` int(11) NOT NULL,
  `productStatus` int(11) NOT NULL DEFAULT '1',
  `productLog` varchar(100) NOT NULL,
  `productLogName` varchar(300) NOT NULL,
  `productLogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productCode`, `productCategory`, `productModel`, `productBrand`, `productDetail`, `productCost`, `productRetail`, `productUser1`, `productUser2`, `productDealer1`, `productDealer2`, `productStatus`, `productLog`, `productLogName`, `productLogTime`) VALUES
(1, 'DS-0001-LG', 'Digital Signage', '55SE3KD', 'LG', 'Full HD / HDMI x 4 / Audio : Stereo', 5000, 10000, 9000, 8000, 7000, 6000, 1, 'ลบสินค้า', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 03:26:31');

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
  `profileLog` varchar(100) NOT NULL,
  `profileLogName` varchar(500) NOT NULL,
  `profileLogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileId`, `profilePrefix`, `profileName`, `profileSurname`, `profileNickname`, `profileSex`, `profileCitizenId`, `profileEmail`, `profilePhone`, `profileImage`, `profileAddress`, `positionId`, `profileStatus`, `profileLog`, `profileLogName`, `profileLogTime`) VALUES
(1, '', 'Administrator', 'นิวซีโน่ (ประเทศไทย)', 'Admin', '', 'Administrator', 'admin@newzeno.com', '', '20181027043445.jpg', 'นิวซีโน่ (ประเทศไทย)', 4, 1, 'แก้ไขพนักงาน', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:37:31'),
(2, '', 'Guest', 'นิวซีโน่ (ประเทศไทย)', 'Guest', '', 'Guest', 'Guest@newzeno.com', '', '20181027043615.jpg', 'บริษัท นิวซีโน่ (ประเทศไทย) จำกัด\r\n', 10, 1, 'แก้ไขพนักงาน', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:37:33'),
(3, 'นาย', 'อดิพงษ์', 'ธรรมนวกุล', 'โต้ง', 'ชาย', '1102944123463', 'tong.adipong@gmail.com', '0809073005', '20181027043632.png', 'เลขที่. 200 ถนน. พุทธมณฑลสาย 3 แขวง. บางไผ่ เขต. บางแค จังหวัด. กรุงเทพมหานคร', 8, 1, 'แก้ไขพนักงาน', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierId` int(11) NOT NULL,
  `supplierCompany` varchar(100) NOT NULL,
  `supplierPrefix` varchar(20) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `supplierNickname` varchar(50) NOT NULL,
  `supplierSex` varchar(20) NOT NULL,
  `supplierDepartment` varchar(100) NOT NULL,
  `supplierPosition` varchar(100) NOT NULL,
  `supplierEmail` varchar(50) NOT NULL,
  `supplierMainPhone` varchar(20) NOT NULL,
  `supplierSubPhone` varchar(20) NOT NULL,
  `supplierFax` varchar(20) NOT NULL,
  `supplierAddress` varchar(500) NOT NULL,
  `supplierStatus` int(11) NOT NULL DEFAULT '1',
  `supplierLog` varchar(100) NOT NULL,
  `supplierLogName` varchar(500) NOT NULL,
  `supplierLogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierId`, `supplierCompany`, `supplierPrefix`, `supplierName`, `supplierNickname`, `supplierSex`, `supplierDepartment`, `supplierPosition`, `supplierEmail`, `supplierMainPhone`, `supplierSubPhone`, `supplierFax`, `supplierAddress`, `supplierStatus`, `supplierLog`, `supplierLogName`, `supplierLogTime`) VALUES
(1, 'บริษัท แอซซ่า ซิสเตมส์ จำกัด', 'นางสาว', 'วัชราภรณ์', 'เล็ก', 'หญิง', 'ฝ่ายบัญชี', 'ผู้จัดการฝ่ายบัญชี', '', '0882138102', '', '', 'บริษัท แอซซ่า ซิสเตมส์ จำกัด', 1, 'แก้ไขผู้จำหน่าย', 'นาย อดิพงษ์ ธรรมนวกุล', '2018-10-27 02:50:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
