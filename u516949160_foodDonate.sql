-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2024 at 09:58 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u516949160_foodDonate`
--

-- --------------------------------------------------------

--
-- Table structure for table `homegallery`
--

CREATE TABLE `homegallery` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `home1` varchar(200) NOT NULL,
  `home2` varchar(200) NOT NULL,
  `home3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lati` float(20,18) NOT NULL,
  `logi` float(20,18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`id`, `name`, `lati`, `logi`) VALUES
(158, 'jhaggjgdjs', 26.743871688842773000, 83.282699584960940000),
(159, 'sandep', 26.741399765014650000, 83.272575378417970000),
(160, 'sandep', 26.741399765014650000, 83.272575378417970000),
(161, 'sandep', 26.741399765014650000, 83.272575378417970000),
(162, 'dasfg', 26.741460800170900000, 83.272651672363280000),
(163, 'jhaggjgdjs', 26.743871688842773000, 83.282699584960940000),
(164, 'jhaggjgdjs', 26.743871688842773000, 83.282699584960940000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `beggerid` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(10) NOT NULL,
  `latti` float(20,18) NOT NULL,
  `logi` float(20,18) NOT NULL,
  `consumerid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `dishName` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `userid` int(10) NOT NULL,
  `home1` varchar(200) NOT NULL,
  `home2` varchar(200) NOT NULL,
  `home3` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `useless` datetime NOT NULL,
  `latti` double(20,18) NOT NULL,
  `logi` double(20,18) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `someOneComming` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `dishName`, `type`, `userid`, `home1`, `home2`, `home3`, `time`, `useless`, `latti`, `logi`, `profile`, `someOneComming`) VALUES
(22, 'uiay', 'शाकाहारी', 9, 'homeImg1/1687347359.png', 'homeImg2/1687347359.png', 'homeImg3/1687347359.png', '2023-06-21 11:35:59', '2023-06-21 17:35:59', 26.743872300000000000, 83.282698800000000000, 'donermenu/1687347359.png', 1),
(23, 'Ndnjf', 'शाकाहारी', 9, 'homeImg1/1687347694.jpg', 'homeImg2/1687347694.jpg', 'homeImg3/1687347694.jpg', '2023-06-21 11:41:34', '2023-06-21 17:41:34', 26.741361900000000000, 83.272589400000000000, 'donermenu/1687347694.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `profileimg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `profileimg`) VALUES
(8, 'Wajid', 'muniransari0725@gmail.com', 'qazqaz', 'donerprofile/1687346808.jpg'),
(9, 'sandeep', 'sandeep@gmail.com', '12345678', 'donerprofile/1687347289.png'),
(10, 'Rajeev Sharma', 'rajeevsharmamachphy@gmail.com', 'rajeev123', 'donerprofile/1687348282.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homegallery`
--
ALTER TABLE `homegallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homegallery`
--
ALTER TABLE `homegallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newuser`
--
ALTER TABLE `newuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
