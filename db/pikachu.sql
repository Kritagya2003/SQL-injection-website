-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3333
-- Generation Time: Apr 06, 2024 at 09:55 AM
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
-- Database: `pikachu`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'visible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `status`) VALUES
(1, 'Janak Ko Book', '5', 'visible'),
(2, 'Hacking Book', '555', 'hidden'),
(3, 'Programming Keyboard', '99', 'visible'),
(4, 'Wireless Mouse', '25', 'visible'),
(5, 'Laptop Stand', '35', 'hidden'),
(6, 'External Hard Drive', '120', 'visible'),
(7, 'USB-C Adapter', '15', 'visible'),
(8, 'Gaming Mousepad', '20', 'hidden'),
(9, 'Bluetooth Headphones', '80', 'visible'),
(10, 'Mechanical Keyboard', '150', 'hidden'),
(11, 'Wireless Earbuds', '70', 'visible'),
(12, 'Portable Charger', '50', 'hidden'),
(13, 'Webcam Cover', '5', 'visible'),
(14, 'Mouse Bungee', '12', 'visible'),
(15, 'RGB Gaming Mouse', '40', 'hidden'),
(16, 'Ethernet Cable', '10', 'visible'),
(17, 'Anti-Glare Glasses', '30', 'visible'),
(18, 'CPU Cooler', '60', 'hidden'),
(19, 'Laptop Sleeve', '20', 'visible'),
(20, 'USB Flash Drive', '8', 'hidden'),
(21, 'Wireless Charging Pa', '40', 'visible'),
(22, 'Hami Yestai Tw Ho Ni', '66', 'visible');

-- --------------------------------------------------------

--
-- Table structure for table `uinfo`
--

CREATE TABLE `uinfo` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `bankno` varchar(16) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `citizenno` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uinfo`
--

INSERT INTO `uinfo` (`id`, `fullname`, `email`, `bankno`, `phone`, `citizenno`) VALUES
(1, 'Janak Dhami', 'janu@hello.com', '243535345645678', '9800000000', '353636864665'),
(2, 'John Doe', 'john@example.com', '123456789012345', '9876543210', '1234567890'),
(3, 'Jane Smith', 'jane@example.com', '987654321098765', '1231231234', '0987654321'),
(4, 'Alice Johnson', 'alice@example.com', '543216789012345', '9876543210', '1098765432'),
(5, 'Bob Brown', 'bob@example.com', '987654321098765', '1231231234', '2109876543'),
(6, 'Emily Davis', 'emily@example.com', '123456789012345', '9876543210', '3210987654'),
(7, 'Michael Wilson', 'michael@example.com', '987654321098765', '1231231234', '4321098765'),
(8, 'Samantha Taylor', 'samantha@example.com', '123456789012345', '9876543210', '5432109876'),
(9, 'David Martinez', 'david@example.com', '987654321098765', '1231231234', '6543210987'),
(10, 'Emma White', 'emma@example.com', '123456789012345', '9876543210', '7654321098');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(16) NOT NULL,
  `lname` varchar(16) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `role`) VALUES
(2, 'Pikachu', 'Doe', 'pikachu', 'HelloPikachu', 'admin'),
(3, 'Ramesh', 'Aaryal', 'ramesh', 'gbhjnghfgb', 'member'),
(4, 'John', 'Doe', 'john.doe', 'password123', 'member'),
(5, 'Alice', 'Johnson', 'alice.jo', 'securepassword', 'member'),
(6, 'David', 'Smith', 'david.sm', 'qwerty123', 'member'),
(7, 'Emily', 'Brown', 'emily.br', 'password123', 'member'),
(8, 'Michael', 'Wilson', 'michael.', 'ilovecoding', 'member'),
(9, 'Samantha', 'Taylor', 'samantha', 'codingiscool', 'member'),
(10, 'Emma', 'Jones', 'emma.jon', 'password123', 'member'),
(11, 'James', 'Miller', 'james.mi', 'abc123', 'member'),
(12, 'Olivia', 'Davis', 'olivia.d', 'letmein', 'member'),
(13, 'Ganesh', 'Dhami', 'gsdhami', 'ganesh', 'member'),
(14, 'Janak', 'Dhami', 'jsdhami', 'jsdhami', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uinfo`
--
ALTER TABLE `uinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `uinfo`
--
ALTER TABLE `uinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
