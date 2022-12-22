-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 11:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `resettoken`, `resettokenexpire`) VALUES
(77, 'akshay', ' akki123l@gmail.com', '', '0', 'user role', NULL, NULL),
(82, 'vikas', 'vikas@gmail.com ', '', '1', 'developer', NULL, NULL),
(83, 'vishal', 'visha123l@gmail.com ', '', '0', 'developer', NULL, NULL),
(84, 'sachin', 'sac@12 ', '', '0', 'support', NULL, NULL),
(85, 'sachin', ' sac@12', '', '1', 'support', NULL, NULL),
(86, 'om', ' om@gmail', '', '0', 'support', NULL, NULL),
(88, 'akki', 'akki@gmail.com ', '', '0', 'tester', NULL, NULL),
(90, 'sachin', ' sac@yahoo.com', '', '1', 'support', NULL, NULL),
(91, 'omkar', '05omkar.chavan@gmail.com', '1111', '', '', '2c4ebb586b98aa8d09ace0150d34232e', '2022-12-22'),
(92, 'vishwa', 'vishwa@gmail.com ', '', '1', 'tester', NULL, NULL),
(93, 'shiva', 'shiva@gmailcom', '456', '', '', NULL, NULL),
(94, 'shiva', '25omkar.chavan@gmail.com', '456', '', '', '09a50efcd79f8c03e8443ff8b9963dda', '2022-12-21'),
(95, 'Hardiik Demo', 'hardik8945@gmail.com', 'Hardik@1', '', '', '6f5c342cd7a5a39b4cee709018905f49', '2022-12-22'),
(96, 'jay', 'jay@gmail.com', '7894', '', '', NULL, NULL),
(97, 'sachin', 'sac@gmail.com', 'Sachin@123', '', '', '7476e397746614ee3c12f83254c62c0b', '2022-12-22'),
(98, 'sachin', 'sac@gmail.com', 'Sachin@123', '', '', NULL, NULL),
(99, 'sachin', 'sac@gmail.com', 'Sachin@123', '', '', NULL, NULL),
(100, 'ramesh', 'ramesh@123', 'Ramesh@123', '', '', '045d65d31e7709509a46c754d73519a4', '2022-12-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
