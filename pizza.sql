-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 12, 2021 at 06:26 AM
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
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` varchar(300) NOT NULL,
  `images` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `size` varchar(200) NOT NULL,
  `prize` int(200) NOT NULL,
  `desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `images`, `name`, `size`, `prize`, `desc`) VALUES
('4', 'images/CornCheese.jpg', 'Cheese N Corn', 'Small', 199, 'Cheese I Golden Corn'),
('1', 'images/Deluxe_Veggie.jpg', 'Deluxe Veggie\r\n', 'Small', 99, 'For a vegetarian looking for a BIG treat that goes easy on the spices. The onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.'),
('9', 'images/Double_Cheese_Margherita.jpg', 'Double Cheese Margherita', 'Large', 599, 'The ever-popular Margherita - loaded with extra cheese... oodies of it!'),
('2', 'images/Farmhouse.jpg', 'Farm House', 'Regular', 199, 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes'),
('8', 'images/IndianTandooriPaneer.jpg', 'Indi Tandoori Paneer', 'Regular', 199, 'It is hot. It is spicy. It is oh-so-Indian. Tandoori paneer with capsicum I red paprika I mint mayo'),
('1', 'images/Margherit.jpg', 'Margherit', 'Small', 99, 'A hugely popular margherita, with a deliciously tangy single cheese topping'),
('7', 'images/Mexican_Green_Wave.jpg', 'Mexican Green Wave', 'Regular', 199, 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.'),
('3', 'images/Peppy_Paneer.jpg', 'Peppy Paneer', 'Large', 599, 'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!'),
('6', 'images/Veg_Extravaganz.jpg', 'Veg Extravaganza', 'Large', 599, 'A pizza that staggers under an golden corn, black olives, crunchy onions, crisp capsicum, mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
