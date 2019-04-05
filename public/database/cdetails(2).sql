-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 11:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bci`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `c_id` bigint(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cemp` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phoneno` bigint(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `industrytype` varchar(30) NOT NULL,
  `businesstype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`c_id`, `cname`, `slug`, `cemp`, `material`, `block`, `sector`, `area`, `state`, `phoneno`, `email`, `industrytype`, `businesstype`) VALUES
(1, 'SHARMA AUTO', 'sharma-auto', 'Sant Kumar Sharma', 'Motor Brake Shous', 'A-2  ', 'Sector-1', 'Bawana', 'Delhi', 9312835122, 'singhpuneei@gmail.com\r\n', 'automobiles', 'manufacturer'),
(2, 'HINDUSTAN BROOMS', 'hindustan-brooms', 'Amit Jain', 'Brooms', 'A-3 ', 'Sector-3', 'Bawana', 'Delhi', 9810074613, '', 'houseware', 'manufacturer'),
(3, 'FORTUNE ENTERPRISES', 'fortune-enterprises', 'Aman Aggarwal', 'Safity Shoes', 'A-5  ', 'Sector-3', 'Bawana', 'Delhi', 9811962523, '', 'fashion accesories', 'manufacturer'),
(4, 'JAI BHAWANI INDS', 'jai-bhawani-inds', 'B.K. Garg', 'C.R.Pipe', 'A-6 ', 'Sector-1 ', 'Bawana', 'Delhi', 9871955755, '', 'industrial supplies', 'manufacturer'),
(5, 'S.R OFFSET PRESS', 'offset-press', 'Harish Malhotra', 'Printing Press', 'A-7  ', 'Sector-3', 'Bawana', 'Delhi', 9818380011, '', 'publishing', 'service provider'),
(6, 'SANJAY SUCHDEVA LURINDA MUL SONS', 'sanjay-lurinda', 'Sanjay', '', 'A-8 ', 'Sector-1 ', 'Bawana', 'Delhi', 9818503131, '', 'food and beverages', 'retailer'),
(7, 'PARGATI MOULD PLAST', 'pargati-mould', 'Sanjay Arora', 'Injection Moulding', 'A-9 ', 'Sector-1', 'Bawana', 'Delhi', 9643960062, '', 'industrial supplies', 'manufacturer'),
(8, 'PAL AUTO', 'pal-auto', 'Manmohan Singh', 'Auto Parts', 'A-11 ', 'Sector-3 ', 'Bawana', 'Delhi', 9312664028, '', 'automobiles', 'wholesaler'),
(9, 'S.K. INDUSTRIES', 'sk-industries', 'Ankit', 'Presure Cooker', 'A-12 ', 'Sector-3 ', 'Bawana', 'Delhi', 9811550006, '', 'houseware', 'manufacturer'),
(10, 'KUNAL ENTERPRISES', 'kunal-enterprises', 'Manvinder Singh', 'Cosmetic Accessories', 'A-13 ', 'Sector-1 ', 'Bawana', 'Delhi', 93102441959, '', 'cosmetics', 'wholesaler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
