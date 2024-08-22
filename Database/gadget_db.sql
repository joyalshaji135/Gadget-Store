-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 09:34 PM
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
-- Database: `gadget_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_login_tbl`
--

CREATE TABLE `user_login_tbl` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login_tbl`
--

INSERT INTO `user_login_tbl` (`login_id`, `user_id`, `username`, `password`) VALUES
(1, 0, 'joyals', '$2y$10$38fO3lrMwAyajTFmOjCTaOwqPPakMWPGbsfFvgl.ZPuBckpZQdT3C');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_tbl`
--

CREATE TABLE `user_registration_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone_number` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_address_1` varchar(255) NOT NULL,
  `user_address_2` varchar(255) NOT NULL,
  `user_postal_code` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration_tbl`
--

INSERT INTO `user_registration_tbl` (`user_id`, `username`, `full_name`, `user_email`, `user_phone_number`, `user_country`, `user_state`, `user_address_1`, `user_address_2`, `user_postal_code`, `user_password`, `user_status`) VALUES
(1, 'joyals', 'joyal', 'joyal@gmail.com', '8590343392', 'pakistan', 'mp', 'jkasd', 'akdkj', '712637', '$2y$10$38fO3lrMwAyajTFmOjCTaOwqPPakMWPGbsfFvgl.ZPuBckpZQdT3C', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login_tbl`
--
ALTER TABLE `user_login_tbl`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `user_registration_tbl`
--
ALTER TABLE `user_registration_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login_tbl`
--
ALTER TABLE `user_login_tbl`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registration_tbl`
--
ALTER TABLE `user_registration_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
