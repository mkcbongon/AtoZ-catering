-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atozcatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(40) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `order_stat` varchar(20) NOT NULL,
  `client` varchar(40) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `quantity` int(3) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `package_id`, `package_name`, `availability`, `order_stat`, `client`, `contact`, `address`, `quantity`, `total`) VALUES
(100000001, 10000001, 'Package 1', 'Available', 'Pending', 'Maria Bongon', '', '', 1, 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`event_id`, `event_name`, `details`) VALUES
(1001, 'Birthdays', 'Celebration of Birthdays');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL,
  `amount` double(10,2) NOT NULL,
  `availability` varchar(20) NOT NULL DEFAULT 'NOT AVAILABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `details`, `image`, `amount`, `availability`) VALUES
(100001, 'Spaghetti', 'Filipino Style Sweet Spaghetti with loads of hotdogs and meat chunks topped with grated cheese.', '287035398_982437429089606_9001116290326092230_n-removebg-preview.png', 400.00, 'NOT AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `food_select`
--

CREATE TABLE `food_select` (
  `select_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_1` int(11) NOT NULL,
  `quan_1` int(11) NOT NULL,
  `food_2` int(11) NOT NULL,
  `quan_2` int(11) NOT NULL,
  `food_3` int(11) NOT NULL,
  `quan_3` int(11) NOT NULL,
  `food_4` int(11) NOT NULL,
  `quan_4` int(11) NOT NULL,
  `food_5` int(11) NOT NULL,
  `quan_5` int(11) NOT NULL,
  `food_6` int(11) NOT NULL,
  `quan_6` int(11) NOT NULL,
  `food_7` int(11) NOT NULL,
  `quan_7` int(11) NOT NULL,
  `food_8` int(11) NOT NULL,
  `quan_8` int(11) NOT NULL,
  `food_9` int(11) NOT NULL,
  `quan_9` int(11) NOT NULL,
  `food_10` int(11) NOT NULL,
  `quan_10` int(11) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_select`
--

INSERT INTO `food_select` (`select_id`, `user_id`, `food_1`, `quan_1`, `food_2`, `quan_2`, `food_3`, `quan_3`, `food_4`, `quan_4`, `food_5`, `quan_5`, `food_6`, `quan_6`, `food_7`, `quan_7`, `food_8`, `quan_8`, `food_9`, `quan_9`, `food_10`, `quan_10`, `availability`, `total`) VALUES
(1000001, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `select_id` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `availability` varchar(20) NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `user_id`, `select_id`, `total`, `availability`) VALUES
(10000001, 102, 1000001, 0.00, 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(11) NOT NULL,
  `ref_no` int(50) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `processed by` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `ref_no`, `event_id`, `user_id`, `package_id`, `total`, `date`, `processed by`) VALUES
(10001, 123271, 1001, 102, 10000001, 0.00, '2023-01-28 17:23:21', 'giolo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `usertype` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `lastname`, `firstname`, `email`, `password`, `usertype`, `created_at`) VALUES
(101, 'giolo', 'Evora', 'Giolo', 'giolo.evora@gmail.com', '$2y$10$YCLEBF1m6x1n5rEeaVh/I.skNtkuUJ/9ltF0RW59MgWrBqb2SEnuS', 'admin', '2023-01-07 04:33:00'),
(102, 'Krissa', 'Bongon', 'Maria', 'bongon@gmail.com', '$2y$10$HGWsSktJWvuVQ1sg.GQqi.sRF4ygBUPmNm3IxiKN6nOFVHHC9ORTG', '', '2023-01-07 08:17:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_select`
--
ALTER TABLE `food_select`
  ADD PRIMARY KEY (`select_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000002;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100002;

--
-- AUTO_INCREMENT for table `food_select`
--
ALTER TABLE `food_select`
  MODIFY `select_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000002;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000002;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
