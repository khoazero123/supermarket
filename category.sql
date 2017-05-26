-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 10:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `parent` int(2) NOT NULL DEFAULT '0',
  `display` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `parent`, `display`) VALUES
(1, 'Automovie & Motorcyle', NULL, 0, 1),
(2, 'Electronics', NULL, 0, 1),
(3, 'Fashion & Accecssories', NULL, 0, 1),
(4, 'Smartphone & Table', NULL, 0, 1),
(5, 'Furniture', NULL, 0, 1),
(6, 'Handbags', NULL, 0, 1),
(7, 'Health & Beauty', NULL, 0, 1),
(8, 'Bags & Shoe', NULL, 0, 1),
(9, 'Accessories', NULL, 0, 1),
(10, 'Televisions & Monitor', NULL, 0, 1),
(11, 'Toy & Hobbies', NULL, 0, 1),
(12, 'Computer & Networking', NULL, 0, 1),
(13, 'Laptop & Accessories', NULL, 0, 1),
(14, 'Sport & Outdoors', NULL, 0, 1),
(15, 'Camera & Lamp', NULL, 0, 1),
(16, 'Watch & Shoes', NULL, 0, 1),
(17, 'SmartPhone', NULL, 0, 1),
(18, 'Camera & USB', NULL, 0, 1),
(19, 'Electrolux & Furniture', NULL, 0, 1),
(20, 'Sport', NULL, 0, 1),
(21, 'Accessories', NULL, 2, 1),
(22, 'Swimming', NULL, 2, 1),
(23, 'Computers & Networking', NULL, 2, 1),
(24, 'Flashlights & Lamps', NULL, 2, 1),
(25, 'Fashion Men''s', NULL, 3, 1),
(26, 'Accessories', NULL, 3, 1),
(27, 'Fashion Women''s', NULL, 3, 1),
(28, 'Handbag & Shoes', NULL, 3, 1),
(29, 'Smartphone & Table', NULL, 4, 1),
(30, 'Mobile Phones', NULL, 4, 1),
(31, 'Phone Bags & Cases', NULL, 4, 1),
(32, 'Mobile Phone Accessories', NULL, 4, 1),
(33, 'Mobile Phone Parts', NULL, 4, 1),
(34, 'Walkie-Talkies', NULL, 4, 1),
(35, 'Communication Equipment', NULL, 4, 1),
(36, 'Furniture', NULL, 5, 1),
(37, 'Handbags Formen''s', NULL, 5, 1),
(38, 'Accessories', NULL, 5, 1),
(39, 'Clothing Bags', NULL, 5, 1),
(40, 'Walkie-Talkies', NULL, 5, 1),
(41, 'Handbags', NULL, 6, 1),
(42, 'Industrial Supplies', NULL, 6, 1),
(43, 'Car & Motorbike', NULL, 6, 1),
(44, 'Shop For Bike', NULL, 6, 1),
(45, 'Shop For Car', NULL, 6, 1),
(46, 'Football', NULL, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
