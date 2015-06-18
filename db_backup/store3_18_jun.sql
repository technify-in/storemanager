-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 05:35 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store3`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE IF NOT EXISTS `distributors` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(64) NOT NULL,
  `contactperson` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tin` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `name`, `contactperson`, `address`, `mobile`, `phone`, `email`, `tin`) VALUES
(1, 'Vision Telecommunications Pvt. Ltd.', 'Manmohan Swaraj', 'Vision Telecommunication India Pvt Ltd-Punjab\r\nOpp. Mayur Hotel, Behind Indian Overseas Bank, Zirakpur\r\nPunjab', '8591239007', '9988888950', 'manmohan@ksons.co.in', '03062151092'),
(2, 'BAMA Infotech', 'Gurdeep Singh', '14-D, Kitchlu Nagar, Opp. Lions Club, Ludhiana - 141 001, Punjab, India.', '8146321400', '01615031333', 'info@bamainfotech.com', '03051110336'),
(3, 'Dummy Distributor', 'BKM', 'Some place nice', '9', '12345677', '22bankim@gmail.com', '1'),
(4, 'pal singh', 'pal', 'agra', '1001100', '100111', 'pal@email.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `fcontact` varchar(30) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `designation`, `contact`, `fcontact`, `photo`, `dob`, `password`, `active`, `username`) VALUES
(1, 'jaspal', 'Service', '+91 95-01-465775', '+91 96-46-161177', '#', '15-01-1990', 'jaspal775', 0, 'jaspal'),
(2, 'harmeet', 'Manager', '+91 95-01-002070', '95-01-002070', '#', '15-1-1990', 'admin', 0, 'admin'),
(3, 'manjot', 'Sales', '9855280009', '+91 96-46-101992', '#', '19-9-1990', 'manjot009', 0, 'manjot');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `imei` varchar(30) DEFAULT NULL,
  `sno` varchar(30) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(63) NOT NULL,
  `tax` varchar(30) NOT NULL,
  `dp` varchar(30) NOT NULL,
  `mrp` varchar(30) NOT NULL,
  `vat_bill_id` varchar(30) NOT NULL,
  `p_condition` varchar(30) NOT NULL,
  `stock_type` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `imei`, `sno`, `pid`, `name`, `tax`, `dp`, `mrp`, `vat_bill_id`, `p_condition`, `stock_type`) VALUES
(1, '890890', '98098', '98908', 0, 'i890', '9', '09898', '8908', '', '0', 'A'),
(2, 'MD298HN/A', '121213', '9089789088', 0, '5 16GB Silver', '13', '10000', '1000', '', '0', 'on'),
(3, 'MD298HN/A', '902839038', '31231248', 0, '5 16GB Silver', '13', '10000', '1000', '', '0', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `stockitemtypes`
--

CREATE TABLE IF NOT EXISTS `stockitemtypes` (
  `id` int(11) unsigned NOT NULL,
  `parentcategoryid` int(11) unsigned NOT NULL,
  `type` varchar(32) NOT NULL,
  `SKU` varchar(64) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockitemtypes`
--

INSERT INTO `stockitemtypes` (`id`, `parentcategoryid`, `type`, `SKU`) VALUES
(2, 1, 'iPhone 4 8GB Black', 'MD128HN/A'),
(3, 1, 'iPhone 4 8GB White', 'MD198HN/A'),
(4, 1, 'iPhone 4 16GB Black', 'MC603HN/B'),
(5, 1, '4 16GB White', 'MC604HN/A'),
(6, 1, ' 4S 8GB Black', 'MF265HN/A'),
(7, 1, '4S 8GB White', 'MF266HN/A'),
(8, 1, '5 16GB Slate Gray', 'MD297HN/A'),
(9, 1, '5 16GB Silver', 'MD298HN/A'),
(10, 1, '5 32GB Slate Gray', 'MD299HN/A'),
(11, 1, '5 32GB Silver', 'MD300HN/A'),
(12, 1, '5S 16GB Gold', 'MF354HN/A'),
(13, 1, '5S 16GB Space Gray', 'MF352HN/A'),
(14, 1, '5S 16GB Silver', 'MF353HN/A'),
(15, 1, '5S 32GB Gold', 'MF357HN/A'),
(16, 1, '5S 32GB Space Gray', 'MF355HN/A'),
(17, 1, '5S 32GB Silver', 'MF356HN/A'),
(18, 1, '5S 64GB Gold', 'MF360HN/A'),
(19, 1, '5S 64GB Space Gray', 'MF358HN/A'),
(20, 1, '5S 64GB Silver', 'MF359HN/A'),
(21, 1, '6 16GB Gold', 'MG492HN/A'),
(22, 1, '6 16GB Space Gray', 'MG472HN/A'),
(23, 1, '6 16GB Silver', 'MG482HN/A'),
(24, 1, '6 64GB Gold', 'MG4J2HN/A'),
(25, 1, '6 64GB Space Gray', 'MG4F2HN/A\n'),
(26, 1, '6 64GB Silver', 'MG4H2HN/A'),
(27, 1, '6 128GB Gold', NULL),
(28, 1, '6 128GB Space Gray', NULL),
(29, 1, '6 128GB Silver', NULL),
(30, 1, '6 Plus 16GB Gold', NULL),
(31, 1, '6 Plus 16GB Space Gray', NULL),
(32, 1, '6 Plus 16GB Silver', NULL),
(33, 1, '6 Plus 64GB Gold', NULL),
(34, 1, '6 Plus 64GB Space Gray', NULL),
(35, 1, '6 Plus 64GB Silver', NULL),
(36, 1, '6 Plus 128GB Gold', NULL),
(37, 1, '6 Plus 128GB Space Gray', NULL),
(38, 1, '6 Plus 128GB Silver', NULL),
(39, 0, 'iPad', NULL),
(40, 39, 'Mini 16GB WiFi Gray', NULL),
(41, 39, 'Mini 16GB WiFi Silver', 'MD531HN/A'),
(42, 39, 'Mini 16GB WiFi + Cell Gray', NULL),
(43, 39, 'Mini 16GB WiFi + Cell Silver', 'MD543HN/A'),
(44, 39, 'Mini 32GB WiFi Gray', NULL),
(45, 39, 'Mini 32GB WiFi Silver', NULL),
(46, 39, 'Mini 32GB WiFi + Cell Gray', NULL),
(47, 39, 'Mini 32GB WiFi + Cell Silver', NULL),
(48, 39, 'Mini 64GB WiFi Gray', NULL),
(49, 39, 'Mini 64GB WiFi Silver', NULL),
(50, 39, 'Mini 64GB WiFi + Cell Gray', NULL),
(51, 39, 'Mini 64GB WiFi + Cell Silver', NULL),
(52, 39, 'Mini RD 16GB WiFi Gray', NULL),
(53, 39, 'Mini RD 16GB WiFi Silver', 'ME279HN/A'),
(54, 39, 'Mini RD 16GB WiFi + Cell Gray', NULL),
(55, 39, 'Mini RD 16GB WiFi + Cell Silver', NULL),
(56, 39, 'Mini RD 32GB WiFi Gray', NULL),
(57, 39, 'Mini RD 32GB WiFi Silver', NULL),
(58, 39, 'Mini RD 32GB WiFi + Cell Gray', NULL),
(59, 39, 'Mini RD 32GB WiFi + Cell Silver', NULL),
(60, 39, 'Mini RD 64GB WiFi Gray', NULL),
(61, 39, 'Mini RD 64GB WiFi Silver', NULL),
(62, 39, 'Mini RD 64GB WiFi + Cell Gray', NULL),
(63, 39, 'Mini RD 64GB WiFi + Cell Silver', NULL),
(162, 39, 'Mini 3 16GB WiFi Gray', NULL),
(163, 39, 'Mini 3 16GB WiFi Silver', NULL),
(164, 39, 'Mini 3 16GB WiFi + Cell Gray', NULL),
(165, 39, 'Mini 3 16GB WiFi + Cell Silver', NULL),
(166, 39, 'Mini 3 64GB WiFi Gray', NULL),
(167, 39, 'Mini 3 64GB WiFi Silver', NULL),
(168, 39, 'Mini 3 64GB WiFi + Cell Gray', NULL),
(169, 39, 'Mini 3 64GB WiFi + Cell Silver', NULL),
(170, 39, 'Mini 3 128GB WiFi Gray', NULL),
(171, 39, 'Mini 3 128GB WiFi Silver', NULL),
(172, 39, 'Mini 3 128GB WiFi + Cell Gray', NULL),
(173, 39, 'Mini 3 128GB WiFi + Cell Silver', NULL),
(174, 39, 'Air 16GB WiFi Gray', NULL),
(175, 39, 'Air 16GB WiFi Silver', 'MD788HN/A'),
(176, 39, 'Air 16GB WiFi + Cell Gray', 'MD786HN/A'),
(177, 39, 'Air 16GB WiFi + Cell Silver', 'MD794HN/A'),
(178, 39, 'Air 32GB WiFi Gray', NULL),
(179, 39, 'Air 32GB WiFi Silver', 'MD789HN/A'),
(180, 39, 'Air 32GB WiFi + Cell Gray', NULL),
(181, 39, 'Air 32GB WiFi + Cell Silver', NULL),
(182, 39, 'Air 64GB WiFi Gray', NULL),
(183, 39, 'Air 64GB WiFi Silver', NULL),
(184, 39, 'Air 64GB WiFi + Cell Gray', NULL),
(185, 39, 'Air 64GB WiFi + Cell Silver', NULL),
(186, 39, 'Air 128GB WiFi Gray', NULL),
(187, 39, 'Air 128GB WiFi Silver', NULL),
(188, 39, 'Air 128GB WiFi + Cell Gray', NULL),
(189, 39, 'Air 128GB WiFi + Cell Silver', NULL),
(190, 39, 'Air 2 16GB WiFi Gray', NULL),
(191, 39, 'Air 2 16GB WiFi Silver', NULL),
(192, 39, 'Air 2 16GB WiFi Gold', NULL),
(193, 39, 'Air 2 16GB WiFi + Cell Gray', NULL),
(194, 39, 'Air 2 16GB WiFi + Cell Silver', NULL),
(195, 39, 'Air 2 16GB WiFi + Cell Gold', NULL),
(196, 39, 'Air 2 64GB WiFi Gray', NULL),
(197, 39, 'Air 2 64GB WiFi Silver', NULL),
(198, 39, 'Air 2 64GB WiFi Gold', NULL),
(199, 39, 'Air 2 64GB WiFi + Cell Gray', NULL),
(200, 39, 'Air 2 64GB WiFi + Cell Silver', NULL),
(201, 39, 'Air 2 64GB WiFi + Cell Gold', NULL),
(202, 39, 'Air 2 128GB WiFi Gray', NULL),
(203, 39, 'Air 2 128GB WiFi Silver', NULL),
(204, 39, 'Air 2 128GB WiFi Gold', NULL),
(205, 39, 'Air 2 128GB WiFi + Cell Gray', NULL),
(206, 39, 'Air 2 128GB WiFi + Cell Silver', NULL),
(207, 39, 'Air 2 128GB WiFi + Cell Gold', NULL),
(208, 0, 'iPod', NULL),
(209, 208, 'Shuffle 2GB Blue', NULL),
(210, 208, 'Shuffle 2GB Pink', NULL),
(211, 208, 'Shuffle 2GB Purple', NULL),
(212, 208, 'Shuffle 2GB Silver', NULL),
(213, 208, 'Shuffle 2GB Gray', NULL),
(214, 208, 'Shuffle 2GB Green', NULL),
(215, 208, 'Shuffle 2GB Yellow', NULL),
(216, 208, 'Nano 16GB Blue', NULL),
(217, 208, 'Nano 16GB Pink', NULL),
(218, 208, 'Nano 16GB Purple', NULL),
(219, 208, 'Nano 16GB Silver', NULL),
(220, 208, 'Nano 16GB Gray', NULL),
(221, 208, 'Nano 16GB Green', NULL),
(222, 208, 'Nano 16GB Yellow', NULL),
(223, 208, 'Classic 160GB Black', NULL),
(224, 208, 'Classic 160GB White', NULL),
(225, 208, 'iPod Touch 5th Gen 32GB Blue', NULL),
(226, 208, 'iPod Touch 5th Gen 32GB Pink', NULL),
(227, 208, 'iPod Touch 5th Gen 32GB Purple', NULL),
(228, 208, 'iPod Touch 5th Gen 32GB Silver', NULL),
(229, 208, 'iPod Touch 5th Gen 32GB Gray', NULL),
(230, 208, 'iPod Touch 5th Gen 32GB Green', NULL),
(231, 208, 'iPod Touch 5th Gen 32GB Yellow', NULL),
(232, 0, 'Accessories', NULL),
(233, 232, '30 Pin to USB Cable', 'MA591G/C'),
(234, 232, 'AirPort Express', NULL),
(235, 232, 'Apple EarPods', 'MD827ZM/A'),
(236, 232, 'Apple Keyboard with Numeric Keyp', NULL),
(237, 232, 'Apple Lightning to 30-pin Adapte', NULL),
(238, 232, 'Apple Magic Mouse', NULL),
(239, 232, 'Apple Magic TrackPad', NULL),
(240, 232, 'Apple Wireless Keyboard', NULL),
(241, 232, 'iPhone 5C Cover', NULL),
(242, 232, 'iPhone 5C Dock', NULL),
(243, 232, 'iPhone 5S Cover', NULL),
(244, 232, 'iPhone 5S Dock', NULL),
(245, 232, 'Lightning to USB Cable', 'MD818ZM/A'),
(246, 232, 'USB Power Adapter 12W', NULL),
(247, 232, 'USB Power Adapter 5W', NULL),
(248, 232, 'Apple Protection Plan for iPhone', 'MC265FE/C'),
(249, 232, 'Apple Protection Plan for iPad', 'MC593FE/B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockitemtypes`
--
ALTER TABLE `stockitemtypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`),
  ADD KEY `parentcategoryid` (`parentcategoryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stockitemtypes`
--
ALTER TABLE `stockitemtypes`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=250;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
