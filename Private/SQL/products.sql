-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2022 at 10:53 PM
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
(1, 'Daily Skin Care Kit', 'A Full Care Package of Skin Essentials, suited towards the priority of Well Health Care (Anti-Wrinkle Cream, Perfume, Face Wash, Moisturiser).', 200, "45.00", 'P1.PNG'),
(3, 'Anti Wrinkle Cream', 'Suitable for all skin types (dry, oily and sensitive). All in one Rejuvenating Formula towards anti-aging.', 250, "10.00", 'P2.PNG'),
(4, 'Insulin Pump', 'An Electronic Device that pumps Insulin around the body, during a 24-hour duration, ensuring all areas have an appropriate sugar level.', 1, "20.00", 'P3.PNG'),
(5, 'After Shave', 'Vanilla and Oud Fragrance to use after shaving facial hair for men.', 50, "14.00", 'P4.PNG'),
(6, 'Bottle of Shampoo', 'A stronger formulae that enables the cleanse of unwanted dirt and oils from the scalp.', 250, "6.00", 'P5.png'),
(7, 'Perfume', 'A fragrant formula to provide an appealing scent when applied. (Floral and Blackberry).', 50, "25.00", 'P6.jpg'),
(8, 'Thermometer', 'A piece of equipment used to detect the temperature of solids, liquids and gases.', 1, "12.00", 'P7.PNG'),
(9, 'Face Mask ', 'Protective Mask for the prevention of catching known diseases such as Influenza and COVID-19.', 1, "1.00", 'P8.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
