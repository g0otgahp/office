-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 05:31 AM
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
-- Table structure for table `quotation_order`
--

CREATE TABLE `quotation_order` (
  `orderId` int(11) NOT NULL COMMENT 'ไอดี',
  `orderProductId` int(11) NOT NULL,
  `orderName` varchar(100) NOT NULL COMMENT 'ชื่อรายการสินค้า',
  `orderDetail` varchar(100) NOT NULL COMMENT 'รายละเอียด',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวณ',
  `orderUnit` varchar(45) NOT NULL COMMENT 'หน่วยนับ',
  `orderPrice` int(11) NOT NULL COMMENT 'ราคาต่อหน่วย',
  `orderDiscount` int(11) NOT NULL COMMENT 'ลดเหลือต่อหน่วย',
  `orderQuotationId` int(11) NOT NULL COMMENT 'ไอดีใบบิล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotation_order`
--

INSERT INTO `quotation_order` (`orderId`, `orderProductId`, `orderName`, `orderDetail`, `orderQty`, `orderUnit`, `orderPrice`, `orderDiscount`, `orderQuotationId`) VALUES
(1, 1, 'LG Digital Signage รุ่น 55SE3KD', 'Full HD / HDMI x 4 / Audio : Stereo', 1, 'ชิ้น', 10000, 0, 5),
(2, 1, 'LG Digital Signage รุ่น 55SE3KD', 'Full HD / HDMI x 4 / Audio : Stereo', 1, 'ชิ้น', 10000, 0, 6),
(3, 1, 'LG Digital Signage รุ่น 55SE3KD', 'Full HD / HDMI x 4 / Audio : Stereo', 1, 'ชิ้น', 10000, 0, 1),
(4, 1, 'LG Digital Signage รุ่น 55SE3KD', 'Full HD / HDMI x 4 / Audio : Stereo', 20, 'ชิ้น', 10000, 9000, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotation_order`
--
ALTER TABLE `quotation_order`
  ADD PRIMARY KEY (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotation_order`
--
ALTER TABLE `quotation_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี', AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
