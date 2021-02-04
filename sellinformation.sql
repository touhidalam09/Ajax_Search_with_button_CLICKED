-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 05:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellinformation`
--

CREATE TABLE `sellinformation` (
  `id` int(11) UNSIGNED NOT NULL,
  `Catagory` varchar(250) NOT NULL,
  `Product` varchar(253) NOT NULL,
  `SellerName` varchar(253) NOT NULL,
  `SellerContactNumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellinformation`
--

INSERT INTO `sellinformation` (`id`, `Catagory`, `Product`, `SellerName`, `SellerContactNumber`) VALUES
(1, 'Vehicles', 'BMW', 'Touhid Alam', '1682838484'),
(2, 'Vehicles', 'BMW', 'Rifat Alam', '1682838484'),
(3, 'Vehicles', 'Audi', 'Abir Alam', '1682838484'),
(4, 'Bike', 'ZX25', 'Rakib Alam', '1682838484'),
(5, 'Bike', 'R15', 'Ashik Alam', '1682838484'),
(6, 'Vehicles', 'BMW', 'Alamin Alam', '1682838484'),
(7, 'Vehicles', 'Audi', 'Mamun Alam', '1682838484'),
(8, 'Vehicles', 'BMW', 'Adnan Alam', '1682838484');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellinformation`
--
ALTER TABLE `sellinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellinformation`
--
ALTER TABLE `sellinformation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
