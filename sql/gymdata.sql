-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 10:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsss`
--

CREATE TABLE `adminsss` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminsss`
--

INSERT INTO `adminsss` (`id`, `username`, `password`) VALUES
(1, 'ronalaine2', 'admin123'),
(2, 'admin', 'admin123'),
(12, 'das', 'dad');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `no` int(11) NOT NULL,
  `membership_id` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_initial` varchar(10) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `brgy` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`no`, `membership_id`, `first_name`, `last_name`, `middle_initial`, `mobile_number`, `date_of_birth`, `email`, `street`, `brgy`, `city`, `gender`, `joining_date`, `fees`) VALUES
(1, 'GYM006', 'Leo', 'Watson', 'R', '09178903211', '1987-04-12', 'leowatson87@example.com', '721 Orchid St.', 'Barangay Dos', 'Taguig', 'Male', '2025-02-11', 499.50),
(2, 'GYM007', 'Grace', 'Reyes', 'T', '09211234567', '1993-11-23', 'gracereyes@example.com', '13 Mango Ave.', 'Barangay Tres', 'Caloocan', 'Female', '2025-01-28', 650.00),
(3, 'GYM008', 'Carlos', 'Dela Cruz', 'B', '09981234567', '1982-06-08', 'carlosdc@example.com', '59 Sampaguita St.', 'Barangay Uno', 'Pasig', 'Male', '2025-03-03', 720.75),
(4, 'GYM009', 'Alyssa', 'Torres', 'J', '09191237890', '2000-12-10', 'alyssa_torres@example.com', '34 Daisy Lane', 'Barangay Quatro', 'Mandaluyong', 'Female', '2025-04-15', 510.00),
(5, 'GYM010', 'Miguel', 'Santos', 'D', '09071238999', '1995-02-28', 'miguel.santos@example.com', '101 Palm Ave.', 'Barangay Cinco', 'Makati', 'Male', '2025-05-01', 580.00),
(6, 'GYM011', 'Nina', 'Garcia', 'E', '09178889900', '1999-08-19', 'nina_garcia@example.com', '25 Lotus Blvd.', 'Barangay Dos', 'Pasay', 'Female', '2025-02-20', 430.25),
(7, 'GYM002', 'Austin', 'Scott', 'V', '5899178748', '1975-01-02', 'qpadilla@hotmail.com', '853 Jennifer Shoals', 'Barangay Quatro', 'Makati', 'Other', '2025-05-05', 602.14),
(8, 'GYM003', 'Amber', 'Banks', 'Z', '+1-830-635-3429', '1990-01-01', 'suzanne39@gmail.com', '44582 Anthony Lakes Suite 745', 'Barangay Quatro', 'Manila', 'Other', '2025-03-24', 394.83),
(9, 'GYM004', 'Sonia', 'Brown', 'M', '703-067-3395', '1979-09-21', 'friedmanbruce@cameron.com', '20483 Anthony Hill', 'Barangay Cinco', 'Makati', 'Other', '2025-04-06', 301.57),
(10, 'GYM005', 'Patricia', 'Brock', 'U', '918.542.8557x2395', '1996-09-16', 'edward00@davidson.com', '121 Gibson Harbor', 'Barangay Uno', 'Quezon City', 'Other', '2025-03-21', 752.14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `phonenumber`, `timestamp`) VALUES
(13, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin123', 123, '2023-05-23 08:54:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsss`
--
ALTER TABLE `adminsss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsss`
--
ALTER TABLE `adminsss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
