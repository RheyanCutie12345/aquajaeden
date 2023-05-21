-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 02:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquajaeden`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ConsumerType` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `Email`, `ConsumerType`, `Date`, `Address`, `Contact`) VALUES
(1, 'Rheyan John V. Blanco', 'rheyanjohnblancogwapo@gmail.com', 'Household', 'May/13/2023', 'Tres Fuentes Brgy Lantad Silay City Tabugon', '0999999'),
(5, 'Jonah Grace ', 'jonahgrace@gmail.com', 'Personal Consumption', 'May/16/2023', 'Eb Magalona', '09878473874384'),
(8, 'Jan Russel Engracial', 'russel@gmail.com', 'Small Business', 'May/16/2023', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(20) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact_no` varchar(255) NOT NULL,
  `Total Amount` int(20) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date_Delivered` varchar(50) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `Product`, `Address`, `Contact_no`, `Total Amount`, `Status`, `Date_Delivered`, `payment_id`) VALUES
(1000, '', '', '', 0, 'Delivered', '', 1000),
(1014, 'Pure Pour', 'Pick Up at Store', '09082312545', 1500, 'Delivered', 'May/15/2023', 1042),
(1018, 'Pure Pour', 'Eb Magalona', '09878473874384', 300, 'Delivered', 'May/16/2023', 1046),
(1019, 'Oasis5', 'Eb Magalona', '09878473874384', 500, 'In Queue', '', 1047),
(1020, 'Aqua Jug', 'Kabankalan City Brgy tabugon', '0923475', 500, 'In Queue', '', 1048);

-- --------------------------------------------------------

--
-- Table structure for table `payment_form`
--

CREATE TABLE `payment_form` (
  `payment_id` int(11) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `TotalAmount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_form`
--

INSERT INTO `payment_form` (`payment_id`, `Product`, `Name`, `Price`, `Quantity`, `TotalAmount`) VALUES
(1000, '', '', 0, 0, 0),
(1042, 'Pure Pour', 'Rheyan John V. Blanco', 15, 100, 1500),
(1046, 'Pure Pour', 'Jonah Grace ', 15, 20, 300),
(1047, 'Oasis5', 'Jonah Grace ', 25, 20, 500),
(1048, 'Aqua Jug', 'Rheyan John V. Blanco', 25, 20, 500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Name`, `Price`) VALUES
('P3dF1K9', 'Pure Pour', 15),
('Q5jH8L0', 'Aqua Jug', 25),
('R7xG9Y2', 'Oasis5', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `type`, `Name`, `Username`, `password`) VALUES
(1, 'admin', 'Rheyan John Blanco', 'admin', 'abcde'),
(22, 'Delivery', 'Rheyan John', 'delivery1', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `payment_form`
--
ALTER TABLE `payment_form`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `payment_form`
--
ALTER TABLE `payment_form`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1049;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
