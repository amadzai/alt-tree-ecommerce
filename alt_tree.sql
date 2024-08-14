-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 10:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alt_tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `alt_tree_cart`
--

CREATE TABLE `alt_tree_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `pictureSource` varchar(100) NOT NULL,
  `grand_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alt_tree_product`
--

CREATE TABLE `alt_tree_product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `pictureSource` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alt_tree_product`
--

INSERT INTO `alt_tree_product` (`id`, `name`, `price`, `description`, `pictureSource`, `stock`) VALUES
(1, 'Biodegradable Bag', 10, 'A carrier bag made of biodegradable materials', 'biobag.png', 502),
(2, 'Refurbished Piano', 250, 'A piano that has been refurbished', 'piano.png', 5000),
(3, 'Recycled Golf Balls', 20, 'Recycled golf balls received from driving ranges, golf clubs, and recycling centers. Comes in packs of ten (10).', 'golf.png', 500),
(4, 'Biodegradable Bottle', 40, 'Water bottles made from recycled biodegradable materials. Comes in packs of five (5).', 'biobottle.png', 2000),
(5, 'Refurbished Sofa Chair', 75, 'Sofa chair received from recycling centers and donators that has been refurbished.', 'sofa.png', 50),
(6, 'Recycled Pencil Holder', 12, 'Pencil holder made from recycled aluminium tins.', 'pencil.png', 1500),
(7, 'Biodegradable Cups', 10, 'Cups made from recycled biodegradable materials. Comes in packs of fifty (50).', 'biocup.png', 1000),
(8, 'Refurbished Guitar', 50, 'Guitar received from recycling centers and donators that has been refurbished.', 'guitar.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alt_tree_user`
--

CREATE TABLE `alt_tree_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `phone_number` text NOT NULL,
  `address` text NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 1,
  `pictureSource` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alt_tree_user`
--

INSERT INTO `alt_tree_user` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `user_type`, `phone_number`, `address`, `is_approved`, `pictureSource`) VALUES
(1, 'admin', '', '', 'admin@alttree.com', '$2y$10$7o98JrV0vkA9Mdx.yUzCYeUKb0PhUAS0SVfcvPSEzx8b1w25NQ7qK', 'admin', '', '', 1, ''),
(2, 'admin_madz', '', '', 'adminmadz@alttree.com', '$2y$10$ksffzm0/DAkQmD9XEDMMZONdI8uUBpos1d1kP3FGP7uA5kHywt3C6', 'admin', '', '', 1, ''),
(3, 'emilymorgan', 'Emily', 'Morgan', 'emilymorg@gmail.com', '$2y$10$DPLI5.f0ivjpd1rHRCJkvuPMTmqGPdewZj1qDIqdX1gnxnQdKIUyS', 'user', '0146793423', '123 Maple Street Springfield, IL 62704 USA', 1, 'avatar-4.jpg'),
(4, 'lucytan', 'Lucy', 'Tan', 'lucyt@hotmail.com', '$2y$10$ynuqeW2v4EzXPHbWChtnkOtxk2ICiNyZSyAZMKRlz.5vzAhX1i3.q', 'user', '0125347789', '456 Elm Avenue Gotham, NY 10001 USA', 1, 'avatar-1.jpg'),
(5, 'mrtngren', 'Martin', 'Grennan', 'martingrennan@gmail.com', '$2y$10$bjRA7nVQLecyexsv0A4DvOg2ukzFbfH.6W2ycLgjkwXErcDnKAkmm', 'user', '0167472134', '789 Oak Drive Riverside, CA 92501 USA', 1, 'avatar-2.jpg'),
(6, 'tomasBuit', 'Tomas', 'Buitero', 'tbuit@gmail.com', '$2y$10$jvgkQSqRqfepEZgDMlN1jOTdBL0OFU8TYrsHAQLebT/xExppn1IIi', 'user', '0123009873', '101 Pine Lane Lincoln, NE 68508 USA', 1, 'avatar-3.jpg'),
(7, 'fkemperman', 'Frederik', 'Kemperman', 'fkemper@outlook.com', '$2y$10$j.xzH4CykjsTAk/njkCGwu0blWQ70EL0RQrcCluzrPkrwS7VHWj6i', 'user', '0187772411', '202 Birch Road Shelbyville, TN 37160 USA', 1, 'avatar-5.jpg'),
(8, 'johnbud', 'John', 'Budderman', 'johnbud@gmail.com', '$2y$10$d9WoD2CIiYAHpHrf/.Cy.eXtuexUhIS5tFAK/3Um7fHjdVWYTeTCO', 'user', '0199987633', '303 Cedar Boulevard Metropolis, WA 98101 USA', 1, 'avatar-6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alt_tree_cart`
--
ALTER TABLE `alt_tree_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `alt_tree_product`
--
ALTER TABLE `alt_tree_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alt_tree_user`
--
ALTER TABLE `alt_tree_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alt_tree_cart`
--
ALTER TABLE `alt_tree_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alt_tree_product`
--
ALTER TABLE `alt_tree_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `alt_tree_user`
--
ALTER TABLE `alt_tree_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alt_tree_cart`
--
ALTER TABLE `alt_tree_cart`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `alt_tree_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
