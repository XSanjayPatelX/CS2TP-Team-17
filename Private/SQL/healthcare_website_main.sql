-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2022 at 03:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare_website`
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `housenumber` int(2) NOT NULL,
  `streetname` varchar(100) NOT NULL,
  `townname` varchar(100) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `postcode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `birth`, `housenumber`, `streetname`, `townname`, `postcode`) VALUES
(1, 'John Smith', 'jsmith@mail.org', '1992-01-01', 22, 'Intern Avenue', 'Camden', 'C22 NL1'),
(2, 'Maggie Adams', 'm.adams@email.com', '1969-12-03', 43, 'Shelby Drive', 'Monton', 'MO3 7BY'),
(3, 'Matt Edwards', 'medwards00@gmail.com', '2000-09-11', 1, 'Saint Manny Avenue', 'Boston', 'BU8 3BQ');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` int(11) NOT NULL,
  `order_number` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `product` varchar(30) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `quantity` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`id`, `order_number`, `name`, `email`, `product`, `size`, `quantity`) VALUES
(1, 150, 'John Smith', 'jsmith@mail.org', 'Face wash', 250, 1),
(2, 120, 'Maggie Adams', 'm.adams@email.com', 'Vitamin D tablets', 100, 1),
(3, 170, 'Matt Edwards', 'medwards00@gmail.com', 'Body lotion', 150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `email`, `password`) VALUES
(1, 'jsmith@mail.org', 'echo7'),
(2, 'm.adams@email.com', 'flower19'),
(3, 'medwards00@gmail.com', 'builder1@1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(30) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `price` float NOT NULL,
  `quantity` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `size`, `price`, `quantity`) VALUES
(1, 'Moisturiser', 236, 14.99, 1),
(3, 'Face wash', 250, 11.99, 1),
(4, '+pol', 300, 5, 1),
(5, 'Body lotion', 150, 5.99, 1),
(6, 'Petroleum jelly', 250, 3.99, 1),
(7, 'Vitamin D tablets', 100, 3, 1),
(8, 'Shampoo', 500, 5.75, 1),
(9, 'Deodorant', 150, 2.5, 1);

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
