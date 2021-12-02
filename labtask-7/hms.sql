-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:14 PM
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
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `address` varchar(14) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manger`
--

INSERT INTO `manger` (`id`, `name`, `phone`, `address`, `age`, `email`, `PASSWORD`) VALUES
(1, 'Riaz', '01956038614', 'dhaka', 23, 'riazuliqbalfer', 'riazuliqbalfer'),
(3, 'Tushar', '01303064689', 'Feni', 25, 'tushar@gmial.c', '11111'),
(4, 'Nabil', '01824785132', 'kuratoli', 30, 'info@halalbuy.', '123123'),
(6, 'Kashem', '0130306423', 'dhaka', 32, 'kashem@gmail.c', 'kashem@gmail.com'),
(7, 'hasan', '1616516161', 'dhaka', 20, 'hasan@gmail.com', '123123'),
(8, 'Ahmed', '01303064682', 'Dhaka', 25, 'ahmed@gmaill.com', '123123'),
(9, 'Printhu', '016303030', 'dhaka', 23, 'printhu', '123123'),
(10, 'Al Bakin Tushar', '01956038516', 'dhaka', 23, 'tushar@gmail.com', '121212'),
(11, '', '', '', 0, '', ''),
(16, 'Abdullah', '0190985656', 'dhaka', 22, 'abdullah@gmail.com', '1122233'),
(17, 'Khairul', '2616161', 'dhaka', 22, 'kahairul@gmail.com', '112233'),
(18, 'khair', '515616', 'dhaka', 33, 'khair@gmail.com', '123123'),
(19, 'Nabi', '161616', 'dhaka', 30, 'nabi@gmail.com', '123123'),
(24, 'aumlan', '1616161', 'dhaka', 23, 'aumlan@gmail.com', '123123'),
(25, 'naim', '516161', 'dhaka', 22, 'naim@gmail.com', '123123'),
(41, 'Tasmia ', '01612287375', 'Dhaka', 24, 'tasmia@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manger`
--
ALTER TABLE `manger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
