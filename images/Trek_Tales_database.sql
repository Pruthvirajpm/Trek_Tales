-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2023 at 04:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amdamariwad_bookingbreeze`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `name`, `email`, `phone`, `title`, `message`) VALUES
('', 'Mahesh kumar Amda', 'maheshpro.pro@gmail.com', '0', '', 'HEY'),
('', 'Mahesh kumar Amda', 'maheshpro.pro@gmail.com', '0', '', 'HEY'),
('', 'mahesh kumar', 'maheshpro.pro@gmail.com', '919676805596', '', '11'),
('', 'mahesh kumar', 'maheshpro.pro@gmail.com', '919676805596', '11', '111'),
('MSG64dc31888bfd7', 'mahesh kumar', 'maheshpro.pro@gmail.com', '919676805596', 'ercs', 'csdcdscv');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE `hotel_bookings` (
  `booking_id` varchar(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `feature_id` varchar(20) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_bookings`
--

INSERT INTO `hotel_bookings` (`booking_id`, `customer_id`, `feature_id`, `check_in_date`, `check_out_date`, `price`, `quantity`) VALUES
('BOOK64da5051ab268', 'mahesh kumar', '1', '2023-08-15', '2023-08-16', 200.00, 1),
('BOOK64dc1c9a7278a', 'mahesh', '1', '2023-08-16', '2023-08-18', 300.00, 1),
('BOOK64dc1fef09645', 'mahesh kumar', '2', '2023-08-17', '2023-08-18', 200.00, 1),
('BOOK64dc2118109ad', 'mahesh kumar', '4', '2023-08-16', '2023-08-16', 200.00, 1),
('BOOK64dc21ff9b565', 'mahesh kumar', '4', '2023-08-17', '2023-08-17', 400.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `phone`, `country`) VALUES
('USER64dc3304e9157', 'ma@gmail.com', '1234', 'efvf', 'maheshpro.pro@gmail.com', '+919676805596', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
