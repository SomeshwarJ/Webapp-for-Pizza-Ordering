-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 12, 2021 at 06:21 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `sides`
--

CREATE TABLE `sides` (
  `id` varchar(300) NOT NULL,
  `images` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `prize` int(200) NOT NULL,
  `desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sides`
--

INSERT INTO `sides` (`id`, `images`, `name`, `prize`, `desc`) VALUES
('1', 'images/170046_BMC_image_for_Website_272X272.jpg', 'Butterscotch Mousse Cake', 199, 'A Chocolaty indulgence with layers of fluffy Butterscotch Cream and Dark Chocolate Cake, topped with crunchy Chocolate morsels - for a perfect dessert!'),
('6', 'images/150135_Aha_Non_Veg_439x307-01.jpg', 'Chicken Parcel', 399, 'Crispy wavy masala coated fries served with a spicy tomato chilli sauce'),
('3', 'images/046015 garlic bread_1346075642.jpg', 'Garlic Breadsticks', 199, 'The endearing tang of garlic in breadstics baked to perfection.'),
('2', 'images/stuffed-garlic-breadstick_1346070564.jpg', 'Stuffed Garlic Bread', 149, 'Freshly Baked Garlic Bread stuffed with mozzarella cheese, sweet corns & tangy and spicy jalapeños'),
('5', 'images/taco.png', 'Taco Mexicana-Veg(Single)', 99, 'Taco Mexicana-Veg(Single)'),
('4', 'images/046115-white-pasta-veg-1346597403.jpg', 'Veg Pasta Italiano White', 99, 'Penne Pasta tossed with extra virgin olive oil, exotic herbs & a generous helping of new flavoured sauce.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sides`
--
ALTER TABLE `sides`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
