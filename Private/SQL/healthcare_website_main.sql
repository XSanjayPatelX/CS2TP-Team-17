-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 07:13 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `adminkey` int(9) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `adminkey`, `password`) VALUES
(1, 'dievan', 1, '1234'),
(2, 'sanjay', 4, '7657'),
(3, 'dalvir', 2, '1123'),
(4, 'zuhaib', 3, '2345'),
(5, 'alex', 5, '3421'),
(6, 'hans', 8, '5643'),
(7, 'arshdeep', 6, '3654'),
(8, 'ravjot', 7, '9087');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `cardnumber` bigint(16) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`id`, `fullname`, `cardnumber`, `expiration`, `cvv`) VALUES
(1, 'John Smith', 4424453671625989, '2023-07-01', 675),
(2, 'Maggie Adams', 7654980712127543, '2022-12-06', 232),
(3, 'Matt Edwards', 1191524378968919, '2024-01-26', 978);

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
(1, 150, 'John Smith', '', 'Face wash'),
(2, 120, 'Maggie Adams', '', 'Vitamin D tablets'),
(3, 170, 'Matt Edwards', '', 'Body lotion'),
(4, 2, 'Alison Carlson', 'acarlson@gmail.com', 'After Shave');

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
(1, '', 'John Smith', 'jsmith@mail.org', 'echo7', '1992-01-01', 22, 'Intern Avenue', 'Camden', 'C22 NL1'),
(2, '', 'Maggie Adams', 'm.adams@email.com', 'flower19', '0000-00-00', 43, 'Shelby Drive', 'Monton', 'MO3 7BY'),
(3, '', 'Matt Edwards', 'medwards00@gmail.com', 'builder1@1', '2000-09-11', 1, 'Saint Manny Avenue', 'Boston', 'BU8 3BQ'),
(4, 'JJOno3l4nI7HFDblFI6RDI8hdQLNzmjvUI4pNPCYsqTq3hy3l', 'Ash Jackson', 'jxash@gmail.com', '123', '1998-11-16', 234, 'Fairway Avenue', 'Birmingham', 'WB9 7LK'),
(12, 'Inw78ho4V4D0mj46FEscMG9uCrW', 'Alison Carlson', 'acarlson@gmail.com', '1234', '1997-11-18', 123, 'Jamerson Avenue', 'Birmingham', 'BJ5 8JK');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
