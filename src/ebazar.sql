-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 06:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(250) NOT NULL,
  `product_cat` varchar(250) NOT NULL,
  `product_subcat` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_details` text NOT NULL,
  `product_images` varchar(250) NOT NULL,
  `product_color` varchar(250) NOT NULL,
  `product_size` varchar(250) NOT NULL,
  `product_price` int(250) NOT NULL,
  `product_discount` int(250) NOT NULL,
  `seller_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_subcat`, `product_name`, `product_details`, `product_images`, `product_color`, `product_size`, `product_price`, `product_discount`, `seller_id`) VALUES
(1, 'man', 't-shirt', 'Men\'s half t-shirt', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue', 'S,M,L,XL', 2000, 80, 101),
(2, 'man', 't-shirt', 'Men\'s Full T-Shirt', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 1600, 60, 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
