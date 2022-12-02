-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 01:43 PM
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
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `identifier` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `identifier`, `username`, `password`) VALUES
(1, 'JIlez4zusGBlpVdPE0I4', 'sanjay', '77'),
(2, 'ORyaw5xPn6jTjI8nKbuaAetbrURDBf4', 'dievan', '32'),
(3, 'yHcqL0uQxs7QwPrdWWAp2IbHtwItB17pKKFwDlxM', 'zuhaib', '94'),
(4, 'dfWpptSAtAUeb6NgFY0LMF', 'dalvir', '35'),
(5, 'kA07uc2fGAkQMy4TTHJH3YBeVx5EasIybW3dcMacXJnSdwKOX0IuLBFBKwPJ', 'arshdeep', '25'),
(6, 'nXCol0COaSAOSqkWPuo1Otgybu0UwR5fTVrTqQ', 'ravjot', '75'),
(7, 'xUm6Or65PlWhlSFMUu7ltf', 'alexander', '266'),
(8, 'KTBCJVMxxFojl6okl9AL5', 'hans', '47');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` int(11) NOT NULL,
  `order_number` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `product` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`id`, `order_number`, `name`, `email`, `product`) VALUES
(1, 1, 'John Smith', 'jsmith@mail.org', 'After Shave'),
(2, 2, 'Maggie Adams', 'madams@gmail.com', 'Daily Skin Care Kit'),
(3, 3, 'Alison Carlson', 'acarlson@gmail.com', 'Perfume'),
(4, 4, 'Jason Moore', 'jmoore@gmail.com', 'Face Mask ');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `identifier` varchar(60) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `birth` date NOT NULL,
  `housenumber` int(2) NOT NULL,
  `streetname` varchar(100) NOT NULL,
  `townname` varchar(100) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `postcode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `identifier`, `name`, `email`, `password`, `birth`, `housenumber`, `streetname`, `townname`, `postcode`) VALUES
(1, '2U7RG0ruABM7qdLn3vSOE5SFdXX', 'John Smith', 'jsmith@mail.org', 'echo7', '1992-01-01', 22, 'Intern Avenue', 'Camden', 'C22 NL1'),
(2, '5lgVWjwPCNCGw87PsuB0D8r5xRa4j480TKx06WNL', 'Maggie Adams', 'madams@gmail.com', 'flower19', '1995-02-05', 43, 'Shelby Drive', 'Monton', 'MO3 7BY'),
(3, '474utRSI5gKFWSxIQE2sc7', 'Matt Edwards', 'medwards00@gmail.com', 'builder1@1', '2000-09-11', 1, 'Saint Manny Avenue', 'Boston', 'BU8 3BQ'),
(4, '8j0g8WYAsa4sAkbhjUTlNRvqYXcAD31AXc7fxMG6QW0fNHWlkLekdHE2veVJ', 'Ash Jackson', 'jxash@gmail.com', 'A.Jx1998', '1998-11-16', 234, 'Fairway Avenue', 'Birmingham', 'WB9 7LK'),
(5, 'hFQIzIPg7Rl86H2G71dIUhxQ0lNgYm130gN', 'Alison Carlson', 'acarlson@gmail.com', 'acarlson.9718', '1997-11-18', 123, 'Jamerson Avenue', 'Birmingham', 'BJ5 8JK'),
(6, 'NjPgwVD53', 'Jason Moore', 'jmoore@gmail.com', 'Brum1999.31.Moore', '1999-05-31', 678, 'Jacksons Avenue', 'Birmingham', 'IJ6 8JK');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(30) DEFAULT NULL,
  `product_description` varchar(200) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `product_description`, `size`, `price`, `images`) VALUES
(1, 'Daily Skin Care Kit', 'A Full Care Package of Skin Essentials, suited towards the priority of Well Health Care (Anti-Wrinkle Cream, Perfume, Face Wash, Moisturiser).', 200, '45.00', 'P1.PNG'),
(3, 'Anti Wrinkle Cream', 'Suitable for all skin types (dry, oily and sensitive). All in one Rejuvenating Formula towards anti-aging.', 250, '10.00', 'P2.PNG'),
(4, 'Insulin Pump', 'An Electronic Device that pumps Insulin around the body, during a 24-hour duration, ensuring all areas have an appropriate sugar level.', 1, '20.00', 'P3.PNG'),
(5, 'After Shave', 'Vanilla and Oud Fragrance to use after shaving facial hair for men.', 50, '14.00', 'P4.PNG'),
(6, 'Bottle of Shampoo', 'A stronger formulae that enables the cleanse of unwanted dirt and oils from the scalp.', 250, '6.00', 'P5.PNG'),
(7, 'Perfume', 'A fragrant formula to provide an appealing scent when applied. (Floral and Blackberry).', 50, '25.00', 'P6.jpg'),
(8, 'Thermometer', 'A piece of equipment used to detect the temperature of solids, liquids and gases.', 1, '12.00', 'P7.PNG'),
(9, 'Face Mask ', 'Protective Mask for the prevention of catching known diseases such as Influenza and COVID-19.', 1, '1.00', 'P8.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
