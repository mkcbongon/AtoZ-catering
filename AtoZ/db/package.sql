-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2023 at 11:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_details` varchar(100) NOT NULL,
  `package_amount` decimal(10,2) NOT NULL,
  `package_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `package_availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_details`, `package_amount`, `package_image`, `package_availability`) VALUES
(1, 'Package 1', 'Lumpia', '200.00', '287707634_393171242614934_4983530222573051779_n-removebg-preview.png', ''),
(2, 'Package 2', 'Pancit Malabon', '1500.00', '287322074_584430849693953_7888449592751003336_n-removebg-preview.png', ''),
(3, 'Package 3', 'Spaghetti', '2000.00', '287035398_982437429089606_9001116290326092230_n-removebg-preview.png', ''),
(4, 'Package 4', 'Pancit Canton', '2000.00', '287863025_574188137407501_3637018002562364023_n.jpg', ''),
(5, 'Package 5', 'siomai', '200.00', '288732497_1132713783954070_7917748137329217156_n.jpg', ''),
(6, 'Package 6', 'Lumpia', '200.00', '287301280_749608699498996_7784406168882877577_n.jpg', ''),
(7, 'Package 1', 'Lumpia', '200.00', 'Brown Simple Food Store Logo.png', ''),
(8, 'Combo 1', 'Fried Chicken, Siomai', '1500.00', '287707634_393171242614934_4983530222573051779_n-removebg-preview.png', ''),
(9, 'Combo 2', 'Spaghetti and Fried Chicken', '1500.00', '287035398_982437429089606_9001116290326092230_n-removebg-preview.png', 'Available'),
(10, 'Combo 3', 'Pancit Malabon', '200.00', '287863025_574188137407501_3637018002562364023_n-removebg-preview.png', 'Not Available'),
(11, 'Package 7', 'Lumpia', '200.00', '0ff37f6d6cc747f6929a3ef2f4e69842_1621332537182058484-removebg-preview.png', 'Not Available'),
(12, 'Package 8', 'Lumpia', '200.00', '287752319_403997335113732_5504225819738169447_n-removebg-preview (1).png', 'Available'),
(13, 'Package 10', 'rice', '2000.00', '1_bTs0NsqShIanns-eibWGUw-removebg-preview.png', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
