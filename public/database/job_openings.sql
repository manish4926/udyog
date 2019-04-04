-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 11:26 AM
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
-- Database: `emex`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_openings`
--

CREATE TABLE `job_openings` (
  `job_id` int(255) NOT NULL,
  `job_title` text NOT NULL,
  `experience` text NOT NULL,
  `skills` text NOT NULL,
  `postdate` date NOT NULL,
  `expdate` date NOT NULL,
  `location` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `del` tinyint(1) NOT NULL,
  `ip_address` varchar(500) NOT NULL,
  `package` decimal(50,0) NOT NULL,
  `job_desc` text NOT NULL,
  `company_name` text NOT NULL,
  `hr_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_openings`
--

INSERT INTO `job_openings` (`job_id`, `job_title`, `experience`, `skills`, `postdate`, `expdate`, `location`, `status`, `del`, `ip_address`, `package`, `job_desc`, `company_name`, `hr_name`, `created_at`, `updated_at`) VALUES
(1, 'software developer', '2 years', 'C, C++', '2019-03-15', '2019-03-23', 'delhi', 0, 0, '127.0.0.1', '30000', 'jifvhihdkcnd', 'hcl', 'neha', '2019-03-18 09:32:36', NULL),
(2, 'software tester', '4 years', 'advance java', '2019-03-15', '2019-03-30', 'mumbai', 0, 0, '127.0.0.1', '500000', 'congrats', 'TCS', 'parul', '2019-03-18 09:32:36', NULL),
(3, 'software developer', '5 years', 'advance java', '2019-03-20', '2019-04-10', 'lucknow', 0, 0, '127.0.0.1', '40000', 'dwndckj cxnis', 'NIIT', 'ayushi', '2019-03-18 09:32:36', NULL),
(4, 'web developer', '6 years', 'C++', '2019-04-05', '2019-04-13', 'punjab', 0, 0, '127.0.0.1', '57788', 'sxuuehsd beducheokdsn', 'chetu', 'damini', '2019-03-18 09:32:36', NULL),
(5, 'uhsgs', '2 years', 'C', '2019-03-16', '2019-03-01', 'delhi', 0, 0, '127.0.0.1', '20000', 'test', '1994', 'Neha Thakur', '2019-03-18 09:55:47', NULL),
(6, 'software developer', '3 years', 'C#', '2019-03-14', '2019-03-29', 'delhi', 0, 0, '127.0.0.1', '80760', 'ffughtyj', 'sresrty', 'grdh', '2019-03-18 10:15:49', NULL),
(7, 'web developer', '2 years', 'c c++', '2019-03-09', '2019-03-23', 'pune', 0, 0, '127.0.0.1', '900000', 'hjgjfhdgdg', 'nagarro', 'hahaha', '2019-03-19 06:25:39', NULL),
(8, 'web developer', '2 years', 'bca', '2019-03-22', '2019-03-30', 'delhi', 0, 0, '127.0.0.1', '89750', 'nghghgj', 'hsjg', 'hkhkh', '2019-03-19 09:40:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_openings`
--
ALTER TABLE `job_openings`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_openings`
--
ALTER TABLE `job_openings`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
