-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 11:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(10) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `product`, `price`, `quantity`, `description`) VALUES
(1, 'Daily Skin Care Kit', '45.00', 1, 'A Full Care Package of Skin Essentials, suited towards the priority of Well Health Care (Anti-Wrinkle Cream, Perfume, Face Wash, Moisturiser)'),
(2, 'Anti Wrinkle Cream', '10.00', 1, 'Suitable for all skin types (dry, oily and sensitive). All in one Rejuvenating Formula towards anti-ageing'),
(3, 'Insulin Pump', '20.00', 1, 'An Electronic Device that pumps Insulin around the body, during a 24-hour duration, ensuring all areas have an appropriate sugar level'),
(4, 'After Shave', '14.00', 1, 'Vanilla and Oud Fragrance to use after shaving facial hair for men '),
(5, 'Shampoo', '6.00', 1, 'A stronger formulae that enables the cleanse of unwanted dirt and oils from the scalp'),
(6, 'Perfume', '25.00', 1, 'A fragrant formula to provide an appealing scent when applied (Floral and Blackberry)'),
(7, 'Thermometer', '12.00', 1, 'A piece of equipment used to detect the temperature of solids, liquids and gases'),
(8, 'White Face Mask', '1.00', 1, 'Protective Mask for the prevention of catching known diseases such as Influenza and COVID-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
