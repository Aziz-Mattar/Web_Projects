-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 11:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin@cc.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Consumer Electronics', 'Electronics'),
(2, 'Office & School & Supplies', 'Office & School & Supplies'),
(3, 'Furniture', 'Furniture'),
(4, 'Tools & Hardware', 'Tools '),
(7, 'Test2', 'Test2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `type` enum('discount','normal','') NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `categoryId`, `type`, `price`, `discount`, `image`) VALUES
(2, 'wireless charging', 1, 'normal', 100, 0, 'wireless charging.jpg'),
(3, 'light magnetic cable', 1, 'normal', 20, 0, 'light magnetic cable1.jpg'),
(4, 'Smart Watch', 1, 'normal', 10, 0, 'Smart Watch.jpg'),
(5, 'Earphone ', 1, 'normal', 5, 0, 'Earphone.jpg'),
(6, 'power bank', 1, 'normal', 25, 0, 'power bank.jpg'),
(7, 'Quadcopter ', 1, 'normal', 45, 0, 'Quadcopter.jpg'),
(8, 'Video Card', 1, 'normal', 200, 0, 'Video Card.jpg'),
(9, 'Television', 1, 'normal', 250, 0, 'Television.jpg'),
(10, 'Apple MacBook Pro 15', 1, 'normal', 500, 0, 'Apple MacBook Pro 15.jpg'),
(11, 'Sandisk SSD', 1, 'normal', 40, 0, 'Sandisk SSD.jpg'),
(12, 'Sandisk Micro SD ', 1, 'normal', 5, 0, 'Sandisk Micro SD.jpg'),
(13, 'swing chair ', 3, 'discount', 45, 15, 'swing chair.jpg'),
(14, 'office chair', 3, 'discount', 50, 10, 'office chair.jpg'),
(15, 'dining chair', 3, 'discount', 10, 5, 'dining chair.jpg'),
(16, 'sofa set ', 3, 'discount', 220, 20, 'sofa set.png'),
(17, 'Bed Mattress', 3, 'discount', 120, 10, 'Bed Mattress.jpg'),
(18, 'Hammock ', 3, 'discount', 10, 5, 'Hammock.png'),
(19, 'Sofa Bed', 3, 'discount', 70, 15, 'Sofa Bed.jpg'),
(20, 'Garden Chair ', 3, 'discount', 5, 5, 'Garden Chair.jpg'),
(21, 'Gaming Chair ', 3, 'discount', 80, 20, 'Gaming Chair.jpg'),
(22, 'Bed', 3, 'discount', 100, 15, 'Bed.jpg'),
(23, 'Wardrobe ', 3, 'discount', 100, 25, 'Wardrobe.jpg'),
(24, 'Plastic Chairs ', 3, 'discount', 2, 10, 'Plastic Chairs.jpg'),
(25, 'Wood Chisel ', 4, 'normal', 5, 0, 'Wood Chisel.jpg'),
(26, 'Nail Gun ', 4, 'normal', 5, 0, 'Nail Gun.jpg'),
(27, 'Duct Cutter', 4, 'normal', 45, 0, 'Duct Cutter.jpg'),
(28, 'caulking gun', 4, 'normal', 10, 0, 'caulking gun.jpg'),
(29, ' Hexagon Wrench', 4, 'normal', 5, 0, 'Hexagon Wrench.jpg'),
(30, 'Knife Pliers ', 4, 'normal', 10, 0, 'Knife Pliers.jpg'),
(31, 'Shovel', 4, 'normal', 8, 0, 'Shovel.jpg'),
(32, 'Scissor', 4, 'normal', 4, 0, 'Scissor.jpg'),
(33, 'Hammer', 4, 'normal', 25, 0, 'Hammer.jpg'),
(34, 'Screwdriver Set', 4, 'normal', 3, 0, 'Screwdriver Set.jpg'),
(35, 'Cross Wrench', 4, 'normal', 10, 0, 'Cross Wrench.jpg'),
(36, 'Axe ', 4, 'normal', 15, 0, 'Axe.jpg'),
(37, 'Sticky Notes', 2, 'normal', 2, 0, 'Sticky Notes.png'),
(38, 'Office Desk Organizer', 2, 'normal', 3, 0, 'Office Desk Organizer.jpg'),
(39, 'pencil ', 2, 'normal', 1, 0, 'pencil.jpg'),
(40, 'pens ', 2, 'normal', 1, 0, 'pens.jpg'),
(41, 'Calculator', 2, 'normal', 15, 0, 'Calculator.jpg'),
(42, 'Notebook', 2, 'normal', 2, 0, 'Notebook.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
