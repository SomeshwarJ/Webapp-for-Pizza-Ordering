-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 12, 2021 at 06:27 AM
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
-- Table structure for table `nonvegpizza`
--

CREATE TABLE `nonvegpizza` (
  `id` varchar(300) NOT NULL,
  `images` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `size` varchar(200) NOT NULL,
  `prize` int(200) NOT NULL,
  `desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonvegpizza`
--

INSERT INTO `nonvegpizza` (`id`, `images`, `name`, `size`, `prize`, `desc`) VALUES
('5', 'images/Dominator.jpg', 'Chicken Dominator', 'Small', 99, 'Treat your taste buds with Double Pepper Barbecue Chicken, Peri-Peri Chicken, Chicken Tikka & Grilled Chicken Rashers'),
('3', 'images/Chicken_Golden_Delight.jpg', 'Chicken Golden Delight', 'Regular', 199, 'Mmm! Barbeque chicken with a topping of golden corn loaded with extra cheese. Worth its weight in gold!'),
('2', 'images/Chicken_Sausage.jpg', 'CHICKEN SAUSAGE', 'Large', 599, 'Chicken Sausage I Cheese'),
('9', 'images/golden_corn_veg.jpg', 'Golden Chicken Paneer', 'Large', 599, 'Golden Chicken Paneer'),
('8', 'images/IndianChickenTikka.jpg', 'Indi Chicken Tikka', 'Regular', 199, 'The wholesome flavour of tandoori masala with Chicken tikka I onion I red paprika I mint mayo'),
('4', 'images/Non-Veg_Supreme.jpg', 'Non Veg Supreme', 'Small', 99, 'Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri Chicken, Grilled Chicken Rashers'),
('7', 'images/Pepper_Barbeque_Onion.jpg', 'PEPPER BARBECUEONION', 'Regular', 199, 'Grilled Chicken Rashers I Peri-Peri Chicken I Onion I Capsicum'),
('1', 'images/Pepper_Barbeque.jpg', 'Pepper Barbequecheese', 'Small', 99, 'Pepper Barbecue Chicken I Cheese'),
('6', 'images/Pepper_Barbeque_Onion.jpg', 'Pepper BarbequeOnion', 'Large', 599, 'Pepper Barbecue Chicken I Onion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nonvegpizza`
--
ALTER TABLE `nonvegpizza`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
