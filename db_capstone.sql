-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 01:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(200) NOT NULL,
  `brand_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(1, 'kb'),
(2, 'kb'),
(3, 'kb'),
(4, 'kb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catsub_pivot`
--

CREATE TABLE `tbl_catsub_pivot` (
  `id` int(200) NOT NULL,
  `cat_id` int(200) NOT NULL,
  `sub_cat_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_information`
--

CREATE TABLE `tbl_employee_information` (
  `emp_ID` int(11) NOT NULL,
  `Employee_ID` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Contact_Number` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee_information`
--

INSERT INTO `tbl_employee_information` (`emp_ID`, `Employee_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Password`, `Position`, `Type`, `Contact_Number`, `Status`) VALUES
(1, 'Admin001', 'Admin001', 'Admin001', 'Admin001', 'Admin001', 'Status', 'Faculty', '', 'Status');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `sub_cat_id` int(200) NOT NULL,
  `sub_name` varchar(200) NOT NULL,
  `category_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`sub_cat_id`, `sub_name`, `category_id`) VALUES
(1, '0', 0),
(2, '0', 0),
(3, 'wireless', 0),
(4, 'wireless', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_levels`
--

CREATE TABLE `tbl_user_levels` (
  `user_id` int(11) NOT NULL,
  `Employee_ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Userlevel` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_levels`
--

INSERT INTO `tbl_user_levels` (`user_id`, `Employee_ID`, `Password`, `Userlevel`, `Status`) VALUES
(1, 'Admin1', 'Admin1', 'Admin', 'Inactive'),
(2, 'Faculty001', 'Faculty001', 'Faculty', 'Active'),
(3, 'Admin001', 'Admin001', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_type` varchar(100) NOT NULL,
  `cat_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `cat_type`, `cat_status`) VALUES
(3333, 'aaaa', 'bbb ', 'Active'),
(3334, 'lll', 'ass', 'Active'),
(22222, 'wq', 'qwwe', 'Active'),
(22223, '', '', 'Status'),
(22224, 'leo', 'name', 'Active'),
(22225, '', '', 'Status'),
(22226, '', '', 'Status'),
(22227, '', '', 'Status'),
(22228, '', '', 'Status'),
(22229, 'Status', 'Status', 'Status'),
(22230, 'da', 'ad', 'Status'),
(22231, 'catname', 'cattype', 'Active'),
(22237, 'kb', 'wireless', 'Active'),
(22238, 'kb', 'usb', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `item_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `cat_type` int(11) NOT NULL,
  `item_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_location`
--

CREATE TABLE `tb_location` (
  `loc_id` int(100) NOT NULL,
  `roomnumber` varchar(100) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `roomdescription` varchar(200) NOT NULL,
  `roomstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_location`
--

INSERT INTO `tb_location` (`loc_id`, `roomnumber`, `roomtype`, `roomdescription`, `roomstatus`) VALUES
(4, '3212', 'safsSZDHGd', 'aStfgSDHgjzSkjadjNVmxnc>JJweituiergjSAKvbhjlzdf?LKSJSEAIGhfdz;ljO:EDG', 'Active'),
(5, '24546', 'ASFAD', 'ASTGSDH', 'Status'),
(6, 'SAFSDG', 'ASFGSDG', 'ASFGSDG', 'Inactive'),
(7, '', '', '', 'Status'),
(8, 'safadf', 'dsgdfg', '', 'Active'),
(9, '316', 'classroom', '', 'Active'),
(10, 'AEDASF', 'AFdsg', '', 'Active'),
(11, '', '', '', 'Active'),
(12, '', '', '', 'Active'),
(13, '', '', '', 'Active'),
(16, '319', 'kitchen', 'dsfbdkajnafklfjlkadfd', 'Active'),
(17, '3546', 'safshgfhsf', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_roomtypes`
--

CREATE TABLE `tb_roomtypes` (
  `rmtypes_id` int(100) NOT NULL,
  `roomtypes` varchar(100) NOT NULL,
  `roomtypedescription` varchar(100) NOT NULL,
  `roomtypestatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_roomtypes`
--

INSERT INTO `tb_roomtypes` (`rmtypes_id`, `roomtypes`, `roomtypedescription`, `roomtypestatus`) VALUES
(7, 'safaf', '', ''),
(8, 'classroom', 'ewfdvgb', ''),
(9, 'kitchen', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `suppid` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `businessname` varchar(100) NOT NULL,
  `businessaddress` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `telephonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`suppid`, `firstname`, `middlename`, `lastname`, `businessname`, `businessaddress`, `phonenumber`, `telephonenumber`, `email`, `status`) VALUES
(4, 'leo', 'ylar', 'legitimas', '', '', '0', '0', '', 'Status'),
(5, '', '', '', '', '', '0', '0', '', 'Status'),
(6, '', '', '', '', '', '0', '0', '', 'Status'),
(7, 'leo', 'legitimas', 'ylar', '', 'calb', '2147483647', '33333', 'leo@gmail.com', 'Active'),
(8, '', '', '', '', '', '0', '0', '', 'Status'),
(9, '', '', '', '', '', '0', '0', '', 'Status'),
(10, '', '', '', '', '', '0', '0', '', 'Status'),
(11, '', '', '', '', '', '0', '0', '', 'Status'),
(12, '', '', '', '', '', '0', '0', '', 'Status'),
(13, '', '', '', '', '', '0', '0', '', 'Status'),
(14, '', '', '', '', '', '0', '0', '', 'Status'),
(15, '', '', '', '', '', '0', '0', '', 'Status'),
(16, '', '', '', '', '', '0', '0', '', 'Status'),
(17, '', '', '', '', '', '0', '0', '', 'Status'),
(18, '', '', '', '', '', '0', '0', '', 'Status'),
(19, '', '', '', '', '', '0', '0', '', 'Status'),
(20, '', '', '', '', '', '0', '0', '', 'Status'),
(21, '', '', '', '', '', '0', '0', '', 'Status'),
(22, '', '', '', '', '', '0', '0', '', 'Status'),
(23, '', '', '', '', '', '0', '0', '', 'Status'),
(24, '', '', '', '', '', '0', '0', '', 'Status'),
(25, '', '', '', '', '', '0', '0', '', 'Status'),
(26, 'leo', 'ylar', 'leogitimas', 'leoleo', 'calb', '11111', '2222', 'leo@gmail.com', 'Active'),
(27, 'leo', 'ylar', 'legitimas', 'sti', 'calb', '11111112', '2222221', 'ting2.exe@gmail.com', 'Active'),
(28, '', '', '', '', '', '0', '0', '', 'Status'),
(29, 'leoleo', 'errteere', 'legitimas', '', 'calb', '11111112', '2222221', 'leo@gmail.com', 'Active'),
(30, '', '', '', '', '', '0', '0', '', 'Status'),
(31, '', '', '', '', '', '0', '0', '', 'Status'),
(32, 'dadasd', '', 'dsadsa', 'dsadsa', '', '0', '0', '', 'Status'),
(33, '', '', '', '', '', '0', '0', '', ''),
(34, 'zz', 'zz', 'zz', 'zz', 'zz', '111', '111', 'leo@gmail.com', 'Active'),
(35, 'leo', 'errteere', 'legitimas', 'leo', 'calb', '1231', '3232', 'ting2.exe@gmail.com', 'Active'),
(36, 'leoleoleo', 'ylar', 'fege', 'leo', 'calb', '2431231', '12312313', 'ting2.exe@gmail.com', 'Active'),
(37, 'ee', '', 'ee', 'ee', 'ee', '22', '0', '', 'Status'),
(38, 'ee', '', 'ee', 'ee', 'ee', '22', '0', '', 'Active'),
(39, 'qq', 'qq', 'qq', 'qq', 'qq', '22', '22', '', 'Active'),
(40, 'qq', 'qq', 'qq', 'qq', 'qq', '22', '22', '', 'Active'),
(41, 'leo', 'errteere', 'legitimas', 'sti', 'calb', '0', '0', '', 'Active'),
(42, 'leo', 'errteere', 'legitimas', 'sti', 'calb', '0', '0', '', 'Active'),
(43, 'www', 'ww', 'ww', 'ww', 'ww', '0', '0', '', 'Active'),
(44, 'leo', '', 'legitimas', 'leo', 'calb', '123', '12312313', 'kitongz', 'Active'),
(45, 'qweq', '', 'qwe', 'qweetw', 'wrqwe', '2147483647', '123', 'samitigel115@gmail.com', 'Active'),
(46, 'leo', 'ylar', 'legitimas', 'leo', 'calb', '2147483647', '111', 'samitigel115@gmail.com', 'Active'),
(47, 'xx', 'xx', 'xx', 'xx', 'xx', '2147483647', '111', 'leo@gmail.com', 'Active'),
(48, 'xx', 'xx', 'xx', 'xx', 'xx', '2147483647', '111', 'leo@gmail.com', 'Active'),
(49, 'zz', 'zz', 'zz', 'zz', 'zz', '2147483647', '333', 'kitongz@gmail.com', 'Active'),
(50, 'rr', 'rr', 'rr', 'rr', 'rr', '9454694760', '111-11-111', 'kitongz@gmail.com', 'Active'),
(51, 'xz', 'ee', 'eee', 'ee', 'ee', '9999999999', '', 'samitigel115@gmail.com', 'Active'),
(52, '2', 'a', 'zz', 'zz', '1ss', '9454694760', '111-11-111', 'samitigel115@gmai.com', 'Active'),
(53, '2', 'dd', 'dd', 'dd', 'dd', '9454694760', '222-22-21', 'kitongz@gmail.com', 'Active'),
(55, 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', '9236525998', '000-00-001', '', 'Status');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_catsub_pivot`
--
ALTER TABLE `tbl_catsub_pivot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_user_levels`
--
ALTER TABLE `tbl_user_levels`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tb_location`
--
ALTER TABLE `tb_location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `tb_roomtypes`
--
ALTER TABLE `tb_roomtypes`
  ADD PRIMARY KEY (`rmtypes_id`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`suppid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_catsub_pivot`
--
ALTER TABLE `tbl_catsub_pivot`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `sub_cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_levels`
--
ALTER TABLE `tbl_user_levels`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22239;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_location`
--
ALTER TABLE `tb_location`
  MODIFY `loc_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_roomtypes`
--
ALTER TABLE `tb_roomtypes`
  MODIFY `rmtypes_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `suppid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
