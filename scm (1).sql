-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 02:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` varchar(13) NOT NULL,
  `Admin_name` varchar(25) NOT NULL,
  `Admin_Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_name`, `Admin_Phone`) VALUES
('AD001', 'ADMIN1', 987654321),
('AD002', 'ADMIN2', 963852741),
('AD003', 'ADMIN3', 789456123);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_id` varchar(13) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_id`, `Password`) VALUES
('AD001', 'Admin1'),
('AD002', 'Admin2'),
('AD003', 'Admin3');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `Catalogue_id` int(11) NOT NULL,
  `User_id` varchar(13) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`Catalogue_id`, `User_id`, `Product_id`, `Quantity`) VALUES
(221070, '1105ab', 4444, 1),
(314445, '1102ab', 4444, 25),
(911980, '1106ab', 5555, 40),
(986851, '1101ab', 2222, 200);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_id` int(11) NOT NULL,
  `Class_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_id`, `Class_name`) VALUES
(0, 'Abhishek'),
(1, 'Supplier'),
(2, 'Production'),
(3, 'Wholeseller'),
(4, 'Retailer'),
(5, 'Customer'),
(256, 'Something');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Inventory_id` int(11) NOT NULL,
  `User_id` varchar(13) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Inventory_id`, `User_id`, `Product_id`, `Quantity`) VALUES
(221070, '1105ab', 4444, 1),
(314445, '1102ab', 4444, 50),
(911980, '1106ab', 5555, 50),
(986851, '1101ab', 2222, 200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_id` varchar(13) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_id`, `Password`, `Class_id`) VALUES
('1101ab', 'Abhishek', 1),
('1102ab', 'Saadhvi', 4),
('1105ab', '1105ab', 5),
('1106ab', '1106ab', 3);

-- --------------------------------------------------------

--
-- Table structure for table `logistic_company`
--

CREATE TABLE `logistic_company` (
  `Company_id` int(11) NOT NULL,
  `Company_name` varchar(25) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Mode_of_transportation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logistic_company`
--

INSERT INTO `logistic_company` (`Company_id`, `Company_name`, `Location`, `Mode_of_transportation`) VALUES
(0, '', '', ''),
(1, 'VRS Transport', 'Bangalore', 'Air'),
(2, 'New India PVT LTD', 'Mumbai', 'Road'),
(3, 'CRC Cargo', 'Delhi', 'Air'),
(4, 'Ryzen Movers', 'Chennai', 'Road');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `Placed_by` varchar(13) NOT NULL,
  `Placed_to` varchar(13) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Log_company_id` int(11) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Placed_by`, `Placed_to`, `Product_id`, `Quantity`, `Price`, `Log_company_id`, `Status`) VALUES
(555555, '1103ab', '1101ab', 1111, 3, 1000, 1, 'In-transit'),
(904207, '1101ab', '1102ab', 2222, 5, 15000, 4, 'Placed'),
(3356564, '1102ab', '1101ab', 2222, 10, 4566, 2, 'Done');

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `Place_order` AFTER INSERT ON `orders` FOR EACH ROW INSERT INTO usage_log VALUES (NULL, NEW.Placed_by, NEW.Placed_to,'Order Placed', NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_orders` AFTER UPDATE ON `orders` FOR EACH ROW INSERT INTO usage_log VALUES (NULL, NEW.Placed_by, NEW.Placed_to,'Order Updated', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Product_name` varchar(25) NOT NULL,
  `Product_type` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `Product_type`, `Price`) VALUES
(1111, 'Plastic', 'Raw', 200),
(2222, 'Tubes', 'Semi-Processed', 3000),
(3333, 'Screen', 'Semi-Processed', 4000),
(4444, 'TV_1234', 'Processed', 20000),
(5555, 'TV_2456', 'Processed', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `usage_log`
--

CREATE TABLE `usage_log` (
  `Sl.no` int(11) NOT NULL,
  `User_id` varchar(11) NOT NULL,
  `Associated_id` varchar(13) DEFAULT NULL,
  `Comments` varchar(25) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usage_log`
--

INSERT INTO `usage_log` (`Sl.no`, `User_id`, `Associated_id`, `Comments`, `Timestamp`) VALUES
(1, '1101ab', 'NA', 'New Account Created', '2021-01-15 00:59:30'),
(2, '1101ab', 'NA', 'Account deleted', '2021-01-15 00:59:33'),
(3, '1102ab', 'NA', 'New Account Created', '2021-01-15 00:59:36'),
(4, '1102ab', 'NA', 'Account Updated', '2021-01-15 00:59:38'),
(5, '1102ab', 'NA', 'Account deleted', '2021-01-15 01:00:19'),
(6, '1011ab', 'NA', 'New Account Created', '2021-01-15 01:02:01'),
(7, '1011ab', 'NA', 'Account Updated', '2021-01-15 01:02:03'),
(8, '1102ab', 'NA', 'New Account Created', '2021-01-15 05:46:12'),
(9, '1102ab', 'NA', 'Account Updated', '2021-01-15 05:46:14'),
(10, '1102ab', 'NA', 'Account Updated', '2021-01-15 05:46:14'),
(11, '1011ab', 'NA', 'Account deleted', '2021-01-15 05:47:31'),
(12, '1102ab', 'NA', 'Account deleted', '2021-01-15 05:47:33'),
(13, '1102ab', 'NA', 'New Account Created', '2021-01-15 05:47:52'),
(14, '1102ab', 'NA', 'Account Updated', '2021-01-15 05:47:52'),
(15, '1101ab', 'NA', 'New Account Created', '2021-01-15 05:48:58'),
(16, '1101ab', 'NA', 'Account Updated', '2021-01-15 05:49:00'),
(17, '1101ab', '1102ab', 'Order Placed', '2021-01-15 06:04:15'),
(18, '1102ab', 'NA', 'Account deleted', '2021-01-16 05:29:09'),
(19, '1102ab', 'NA', 'New Account Created', '2021-01-16 05:36:30'),
(20, '1102ab', 'NA', 'Account Updated', '2021-01-16 05:36:30'),
(21, '1102ab', '1101ab', 'Order Placed', '2021-01-16 05:37:10'),
(39, '4454ab', 'NA', 'New Account Created', '2021-01-19 19:51:53'),
(40, '4454ab', 'NA', 'Account Updated', '2021-01-19 19:51:53'),
(41, '4454ab', 'NA', 'Account deleted', '2021-01-19 19:52:32'),
(42, '1102ab', 'NA', 'Account deleted', '2021-01-19 20:02:22'),
(43, '2156', 'NA', 'New Account Created', '2021-01-19 20:15:03'),
(44, '2156', 'NA', 'Account Updated', '2021-01-19 20:15:05'),
(45, '2156', 'NA', 'Account deleted', '2021-01-19 20:16:40'),
(46, '1103ab', 'NA', 'New Account Created', '2021-01-20 04:56:17'),
(47, '1103ab', 'NA', 'Account Updated', '2021-01-20 04:56:20'),
(48, '1102ab', 'NA', 'New Account Created', '2021-01-20 04:57:26'),
(49, '1102ab', 'NA', 'Account Updated', '2021-01-20 04:57:28'),
(50, '1104ab', 'NA', 'New Account Created', '2021-01-20 04:58:06'),
(51, '1104ab', 'NA', 'Account Updated', '2021-01-20 04:58:07'),
(52, '1105ab', 'NA', 'New Account Created', '2021-01-20 04:58:57'),
(53, '1105ab', 'NA', 'Account Updated', '2021-01-20 04:58:59'),
(54, '1106ab', 'NA', 'New Account Created', '2021-01-20 04:59:47'),
(55, '1106ab', 'NA', 'Account Updated', '2021-01-20 04:59:50'),
(56, '1103ab', '1101ab', 'Order Placed', '2021-01-20 05:03:24'),
(57, '1103ab', '1101ab', 'Order Placed', '2021-01-20 05:04:57'),
(58, '1104ab', '1101ab', 'Order Updated', '2021-01-20 05:17:51'),
(59, '1104ab', '1103ab', 'Order Placed', '2021-01-20 05:26:26'),
(60, '1103ab', '1101ab', 'Order Updated', '2021-01-20 06:55:28'),
(61, '1103ab', '1101ab', 'Order Updated', '2021-01-20 07:00:58'),
(62, '1104ab', '1103ab', 'Order Updated', '2021-01-20 07:01:40'),
(63, '1104ab', 'NA', 'Account deleted', '2021-01-20 07:57:43'),
(64, '1103ab', 'NA', 'Account deleted', '2021-01-20 08:09:45'),
(65, '1101ab', '1102ab', 'Order Placed', '2021-01-20 09:41:11'),
(66, '1101ab', '1102ab', 'Order Placed', '2021-01-20 09:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` varchar(13) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Class_id` int(11) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Inventory_id` int(11) DEFAULT NULL,
  `Catalogue_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `Class_id`, `Phone`, `Email`, `Location`, `Inventory_id`, `Catalogue_id`) VALUES
('1101ab', 'Abhishek', 1, 748596542, 'abhi@gmail.com', 'Bangalore', 986851, 986851),
('1102ab', 'Saadhvi', 4, 897456321, 'saadhvi@gmail.com', 'Mysore', 314445, 314445),
('1105ab', 'Alex', 5, 123654987, 'alex@gmail.com', 'Kolkatta', 221070, 221070),
('1106ab', 'Marry', 3, 874563214, 'marry@gmail.com', 'Chennai', 911980, 911980);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `delete_acc` AFTER DELETE ON `user` FOR EACH ROW INSERT INTO usage_log VALUES(NULL, OLD.User_id,'NA', 'Account deleted', NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_acc` AFTER UPDATE ON `user` FOR EACH ROW INSERT into usage_log VALUES(NULL, NEW.User_id,'NA', 'Account Updated', NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usage_log` AFTER INSERT ON `user` FOR EACH ROW INSERT into usage_log VALUES(null, NEW.User_id,'NA', 'New Account Created', NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`Catalogue_id`),
  ADD KEY `Catalogue_user_id` (`User_id`),
  ADD KEY `Catalogue_product_id` (`Product_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Inventory_id`),
  ADD KEY `invent_user_id` (`User_id`),
  ADD KEY `invent_product_id` (`Product_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `class` (`Class_id`);

--
-- Indexes for table `logistic_company`
--
ALTER TABLE `logistic_company`
  ADD PRIMARY KEY (`Company_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `Log_company` (`Log_company_id`),
  ADD KEY `orders_product_id` (`Product_id`),
  ADD KEY `placed_by` (`Placed_by`),
  ADD KEY `placed_to` (`Placed_to`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `usage_log`
--
ALTER TABLE `usage_log`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `class_id` (`Class_id`),
  ADD KEY `inventory_id` (`Inventory_id`),
  ADD KEY `catalogue_id` (`Catalogue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usage_log`
--
ALTER TABLE `usage_log`
  MODIFY `Sl.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD CONSTRAINT `Admin_id` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD CONSTRAINT `Catalogue_product_id` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Catalogue_user_id` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `invent_product_id` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invent_user_id` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `class` FOREIGN KEY (`Class_id`) REFERENCES `class` (`Class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_user_id` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Log_company` FOREIGN KEY (`Log_company_id`) REFERENCES `logistic_company` (`Company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_product_id` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `placed_to` FOREIGN KEY (`Placed_to`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `catalogue_id` FOREIGN KEY (`Catalogue_id`) REFERENCES `catalogue` (`Catalogue_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_id` FOREIGN KEY (`Class_id`) REFERENCES `class` (`Class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_id` FOREIGN KEY (`Inventory_id`) REFERENCES `inventory` (`Inventory_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
