-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Apr 02, 2019 at 10:14 AM
=======
-- Generation Time: Apr 02, 2019 at 08:43 AM
>>>>>>> d34f776f667c8bbc1ef9b819e53a48c183f006b3
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
<<<<<<< HEAD
-- Database: `directory`
=======
-- Database: `bci`
>>>>>>> d34f776f667c8bbc1ef9b819e53a48c183f006b3
--

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `c_id` bigint(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemp` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phoneno` bigint(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`c_id`, `cname`, `cemp`, `material`, `block`, `sector`, `area`, `state`, `phoneno`, `email`) VALUES
<<<<<<< HEAD
(1, 'SHARMA AUTO', 'Sant Kumar Sharma', 'Motor Brake Shous', 'A-2 ', 'Sector-1 ', 'Bawana', 'Delhi', 9312835122, ''),
(2, 'HINDUSTAN BROOMS', 'Amit Jain', 'Brooms', 'A-3 ', 'Sector-3 ', 'Bawana', ' Delhi', 9810074613, ''),
(3, 'FORTUNE ENTERPRISES', 'Aman Aggarwal', 'Safity Shoes', 'A-5 ', 'Sector-3', ' Bawana', 'Delhi', 9811962523, ''),
(4, 'JAI BHAWANI INDS', 'B.K. Garg', 'C.R.Pipe', 'A-6 ', 'Sector-1 ', 'Bawana', 'Delhi', 9871955755, ''),
(5, 'S.R OFFSET PRESS', 'Harish Malhotra', 'Printing Press', 'A-7 ', 'Sector-3 ', 'Bawana', 'Delhi', 9818380011, ''),
(6, 'SANJAY SUCHDEVA LURINDA MUL SONS', 'Sanjay', '', 'A-8 ', 'Sector-1', ' Bawana', 'Delhi', 9818503131, ''),
(7, 'PARGATI MOULD PLAST', 'Sanjay Arora', 'Injection Moulding', 'A-9 ', 'Sector-1 ', 'Bawana', 'Delhi', 9643960062, ''),
(8, 'PAL AUTO', 'Manmohan Singh', 'Auto Parts', 'A-11 ', 'Sector-3', 'Bawana', 'Delhi', 9312664028, ''),
(9, 'S.K. INDUSTRIES', 'Ankit', 'Presure Cooker', 'A-12', 'Sector-3 ', 'Bawana', 'Delhi', 9811550006, ''),
=======
(1, 'SHARMA AUTO', 'Sant Kumar Sharma', 'Motor Brake Shous', 'A-2  ', 'Sector-1', 'Bawana', 'Delhi', 9312835122, ''),
(2, 'HINDUSTAN BROOMS', 'Amit Jain', 'Brooms', 'A-3 ', 'Sector-3', 'Bawana', 'Delhi', 9810074613, ''),
(3, 'FORTUNE ENTERPRISES', 'Aman Aggarwal', 'Safity Shoes', 'A-5  ', 'Sector-3', 'Bawana', 'Delhi', 9811962523, ''),
(4, 'JAI BHAWANI INDS', 'B.K. Garg', 'C.R.Pipe', 'A-6 ', 'Sector-1 ', 'Bawana', 'Delhi', 9871955755, ''),
(5, 'S.R OFFSET PRESS', 'Harish Malhotra', 'Printing Press', 'A-7  ', 'Sector-3', 'Bawana', 'Delhi', 9818380011, ''),
(6, 'SANJAY SUCHDEVA LURINDA MUL SONS', 'Sanjay', '', 'A-8 ', 'Sector-1 ', 'Bawana', 'Delhi', 9818503131, ''),
(7, 'PARGATI MOULD PLAST', 'Sanjay Arora', 'Injection Moulding', 'A-9 ', 'Sector-1', 'Bawana', 'Delhi', 9643960062, ''),
(8, 'PAL AUTO', 'Manmohan Singh', 'Auto Parts', 'A-11 ', 'Sector-3 ', 'Bawana', 'Delhi', 9312664028, ''),
(9, 'S.K. INDUSTRIES', 'Ankit', 'Presure Cooker', 'A-12 ', 'Sector-3 ', 'Bawana', 'Delhi', 9811550006, ''),
>>>>>>> d34f776f667c8bbc1ef9b819e53a48c183f006b3
(10, 'KUNAL ENTERPRISES', 'Manvinder Singh', 'Cosmetic Accessories', 'A-13 ', 'Sector-1 ', 'Bawana', 'Delhi', 93102441959, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
<<<<<<< HEAD
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `Cname` (`cname`,`phoneno`,`block`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `c_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
  ADD PRIMARY KEY (`c_id`);
>>>>>>> d34f776f667c8bbc1ef9b819e53a48c183f006b3
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
