-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 02:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-bazar-master`
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
(2, 'man', 't-shirt', 'Men\'s Full T-Shirt', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 1600, 60, 101),
(3, 'man', 'Formal Shirts', 'Men\'s Formal Shirts', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 1300, 50, 101),
(4, 'man', 'Casual Shirts', 'Men\'s Casual Shirts', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 1500, 50, 101),
(5, 'man', 'Jeans', 'Men\'s Jeans', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 2000, 200, 101),
(6, 'man', 'Trousers', 'Men\'s Trousers', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 1800, 200, 101),
(7, 'man', 'Track Pant', 'Men\'s Track Pant', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 2000, 200, 101),
(8, 'man', 'Cargos', 'Men\'s Cargos', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red', 'S,M,L,XL', 999, 99, 101),
(9, 'man', 'Ties', 'Men\'s Ties', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, red, green', '', 250, 50, 101),
(10, 'man', 'Blazers', 'Men\'s Blazers', '', 'm2.jpeg,m2.1.jpeg,m2.2.jpeg,m2.3,jpeg ', 'black, blue, green', 'S,M,L,XL', 3250, 150, 101),
(11, 'women', 'Sarees', 'women\'s Sarees', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue', '', 2500, 100, 101),
(12, 'women', 'Kurtis', 'women\'s Kurtis', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 1300, 100, 101),
(13, 'women', 'Lehenga', 'women\'s Lehenga', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 2300, 100, 101),
(14, 'women', 'Heels', 'women\'s heels', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 2100, 100, 101),
(15, 'women', 'Jewellery', 'women\'s Jewellery', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 3500, 100, 101),
(16, 'women', 'Hair Dryers', 'women\'s Hair Dryers', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 2700, 100, 101),
(17, 'women', 'Make Up', 'women\'s Make Up', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 2700, 100, 101),
(18, 'women', 'Skin Care', 'women\'s Skin Care', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 1400, 100, 101),
(19, 'women', 'Palazzos', 'women\'s Palazzos', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 2200, 100, 101),
(20, 'women', 'Salwar & Patiala', 'women\'s Salwar & Patiala', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 1700, 100, 101),
(21, 'Child', 'Sandals', 'Child Sandals', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M', 1100, 111, 101),
(22, 'Child', 'Shoes', 'Child Shoes', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M', 1100, 111, 101),
(23, 'Child', 'Kid\'s Watches', 'Child Kid\'s Watches', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M', 800, 111, 101),
(24, 'Child', 'Boys jacket', 'Child Boys jacket', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 1100, 111, 101),
(25, 'Child', 'Girls jacket', 'Child Girls jacket', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', 'S,M,L,XL', 1100, 111, 101),
(26, 'Child', 'Baby Food', 'Child Baby Food', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 400, 111, 101),
(27, 'Child', 'Baby oil', 'Child Baby oil', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 300, 111, 101),
(28, 'Child', 'Baby Toys', 'Child Baby Toys', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 500, 111, 101),
(29, 'Child', 'Baby Grooming', 'Child Baby Grooming', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 900, 111, 101),
(30, 'Child', 'Baby Educational Toys', 'Child Baby Educational Toys', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 1900, 100, 101),
(31, 'electronics', 'MI', 'Mobile', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 18000, 1000, 101),
(32, 'electronics', 'Oppo', 'Mobile', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 17000, 999, 101),
(33, 'electronics', 'Vivo', 'Mobile', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 13000, 999, 101),
(34, 'electronics', 'Apple', 'Mobile', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 25000, 1999, 101),
(35, 'electronics', 'realme', 'Mobile', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 15000, 499, 101),
(36, 'electronics', 'Dell', 'Laptop', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 45000, 1499, 101),
(37, 'electronics', 'HP', 'Laptop', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 35000, 1499, 101),
(38, 'electronics', 'Van speaker', 'Speakers', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 1500, 100, 101),
(39, 'electronics', 'DSLR', 'Camera', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 70000, 1500, 101),
(40, 'electronics', 'Apple Earphones', 'Earphones', '', 'm.jpeg,m1.1.jpeg,m1.2.jpeg,m1.3.jpeg', 'red, white, blue, green', '', 1000, 100, 101);

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
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
