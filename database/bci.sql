-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 03:15 PM
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
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `ad_middle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_right` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_bottom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advt`
--

CREATE TABLE `advt` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `position` varchar(25) NOT NULL,
  `image` varchar(60) NOT NULL,
  `link` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advt`
--

INSERT INTO `advt` (`id`, `title`, `position`, `image`, `link`, `created_at`, `updated_at`) VALUES
(3, 'trial1', 'right', '25-IMG_3871.JPG', 'https://hdtuto.com/article/laravel-55-validation-example-with-custom-message', '2019-09-18 08:12:25', '2019-09-18 08:12:25'),
(4, 'dfhj', 'bottom', '71-IMG_4129.JPG', 'https://www.webslesson.info/2019/08/front-end-form-validation-using-parsleysjs-in-laravel-58.html', '2019-09-18 08:25:13', '2019-09-18 08:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`job_id`, `user_id`, `firstname`, `lastname`, `email`, `created_at`, `updated_at`) VALUES
(1, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-08-28 03:31:09', '2019-08-28 03:31:09'),
(1, 14, 'puneet', 'singh', 'puneet12@gmail.com', '2019-08-30 00:49:07', '2019-08-30 00:49:07'),
(2, 14, 'puneet', 'singh', 'puneet12@gmail.com', '2019-08-30 00:39:04', '2019-08-30 00:39:04'),
(3, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-08-28 03:35:45', '2019-08-28 03:35:45'),
(3, 14, 'puneet', 'singh', 'puneet12@gmail.com', '2019-08-30 00:41:48', '2019-08-30 00:41:48'),
(4, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-08-31 01:49:43', '2019-08-31 01:49:43'),
(5, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-08-28 03:36:54', '2019-08-28 03:36:54'),
(7, 20, 'Puneet', 'singh', 'puneet1@gmail.com', '2019-09-17 07:12:31', '2019-09-17 07:12:31'),
(12, 14, 'puneet', 'singh', 'puneet12@gmail.com', '2019-08-30 00:16:41', '2019-08-30 00:16:41'),
(13, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-08-31 01:49:24', '2019-08-31 01:49:24'),
(14, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-09-13 07:49:04', '2019-09-13 07:49:04'),
(15, 20, 'Puneet', 'singh', 'puneet1@gmail.com', '2019-09-17 07:27:05', '2019-09-17 07:27:05'),
(17, 4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', '2019-09-18 10:17:58', '2019-09-18 10:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `candidatedatas`
--

CREATE TABLE `candidatedatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basicgraduation` int(11) DEFAULT NULL,
  `graduation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diploma` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postgraduation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctorate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidatedatas`
--

INSERT INTO `candidatedatas` (`id`, `user_id`, `mobile_no`, `firstname`, `lastname`, `email`, `state`, `city`, `gender`, `dob`, `skills`, `experience`, `salary`, `jobtitle`, `companyname`, `industry`, `duration`, `basicgraduation`, `graduation`, `diploma`, `postgraduation`, `doctorate`, `certificate`, `resume`, `created_at`, `updated_at`) VALUES
(1, 11, 2147483647, 'daminee', 'saini', 'damineesaini11@gmail.com', 'an', 'DELHI', 'female', '2019-08-20', 'maths', '1.1', '1.1', 'accountant', 'aa tech', 'Ind60', '0.1', 0, 'BCA', '', 'CS', NULL, 'uydjghgdskjsdh', 'RevisedUGSchedule2019.pdf', '2019-08-09 10:02:14', '2019-08-09 10:02:14'),
(2, 11, 2147483647, 'daminee', 'saini', 'damineesaini11@gmail.com', 'hp', 'gkjhjk', 'male', '2019-08-12', 'ygjkjh', '2.0', '0.0', 'accountant', 'uygyiyh', 'Ind60', '1.1', 0, 'BARCH', '', 'CS', NULL, 'ygluou', 'express-handbook.pdf', '2019-08-11 10:22:31', '2019-08-11 10:22:31'),
(3, 12, 2147483647, 'Anjali', 'gupta', 'anjali@gmail.com', 'Haryana', 'delhi', 'female', '2019-08-13', 'sqwdwq', '8.7', '3.2', 'wqdqwd', 'wqdadsa', 'Mining / Quarrying', '5.5', 12, 'BCOM', '', 'MCA', NULL, 'ADsdsD', 'express-handbook.pdf', '2019-08-24 09:41:33', '2019-08-24 09:41:33'),
(4, 12, 2147483647, 'Anjali', 'gupta', 'anjali@gmail.com', 'Haryana', 'delhi', 'female', '2019-08-13', 'sqwdwq', '8.7', '3.2', 'wqdqwd', 'wqdadsa', 'Mining / Quarrying', '5.5', 12, 'BCOM', NULL, 'MCA', NULL, 'ADsdsD', 'express-handbook.pdf', '2019-08-27 09:45:49', '2019-08-27 09:45:49'),
(5, 12, 2147483647, 'Anjali', 'gupta', 'anjali@gmail.com', 'Haryana', 'delhi', 'female', '2019-08-13', 'sqwdwq', '8.7', '3.2', 'wqdqwd', 'wqdadsa', 'Mining / Quarrying', '5.5', 12, 'BCOM', NULL, 'MCA', NULL, 'ADsdsD', 'express-handbook.pdf', '2019-08-27 09:48:20', '2019-08-27 09:48:20'),
(6, 12, 2147483647, 'Anjali', 'gupta', 'anjali@gmail.com', 'Haryana', 'delhi', 'female', '2019-08-13', 'sqwdwq', '8.7', '3.2', 'wqdqwd', 'wqdadsa', 'Mining / Quarrying', '5.5', 12, 'BCOM', NULL, 'MCA', NULL, 'ADsdsD', 'express-handbook.pdf', '2019-08-27 09:54:07', '2019-08-27 09:54:07'),
(7, 12, 2147483647, 'Anjali', 'gupta', 'anjali@gmail.com', 'Haryana', 'delhi', 'female', '2019-08-13', 'sqwdwq', '8.7', '3.2', 'wqdqwd', 'wqdadsa', 'Mining / Quarrying', '5.5', 12, 'BCOM', NULL, 'MCA', NULL, 'ADsdsD', 'express-handbook.pdf', '2019-08-27 09:55:28', '2019-08-27 09:55:28'),
(8, 4, 2147483647, 'Priya', 'Dahiya', 'priya2481996@gmail.com', 'Delhi', 'delhi', 'female', '1998-04-12', 'c++', '2.2', '11.3', 'ghjhskj', 'jhkjhkjh', 'Administration', '1.1', 12, 'BCA', NULL, 'CA', NULL, 'dhwkjhwkj', 'Diagrams.pdf', '2019-08-28 02:59:35', '2019-08-28 02:59:35'),
(9, 14, 1234567891, 'puneet', 'singh', 'puneet12@gmail.com', 'Delhi', 'hgd', 'male', '1995-12-12', 'asdfg', '5.3', '4.4', 'sedrf', 'Hindustan Brooms', 'Agriculture / Dairy/ Fertilizer/Pesticides', '4.4', 12, 'BA', NULL, 'MA', NULL, 'dgfh', 'C V KIRTI.docx', '2019-08-30 00:48:52', '2019-08-30 00:48:52'),
(10, 4, 2147483647, 'Priya', 'Dahiya', 'priya2481996@gmail.com', 'Delhi', 'delhi', 'female', '1998-04-12', 'c++', '2.2', '11.3', 'ghjhskj', 'jhkjhkjh', 'Administration', '1.1', 12, 'BCA', NULL, 'CA', NULL, 'dhwkjhwkj', 'Diagrams.pdf', '2019-09-03 00:59:51', '2019-09-03 00:59:51'),
(11, 4, 2147483647, 'Priya', 'Dahiya', 'priya2481996@gmail.com', 'Delhi', 'delhi', 'female', '1998-04-15', 'c++', '2.2', '11.3', 'ghjhskj', 'jhkjhkjh', 'Administration', '1.1', 12, 'BCA', NULL, 'CA', NULL, 'dhwkjhwkj', 'C V KIRTI.docx', '2019-09-03 01:00:15', '2019-09-03 01:00:15'),
(12, 4, 2147483647, 'Priya', 'Dahiya', 'priya2481996@gmail.com', 'Delhi', 'delhi', 'female', '1998-04-12', 'c++', '2.2', '11.3', 'ghjhskj', 'jhkjhkjh', 'Administration', '1.1', 12, 'BCA', NULL, 'CA', NULL, 'dhwkjhwkj', 'C V KIRTI.docx', '2019-09-03 11:39:20', '2019-09-03 11:39:20'),
(13, 20, 2147483647, 'Puneet', 'singh', 'puneet1@gmail.com', 'Delhi', 'gih', 'male', '1996-09-06', 'sadfghj', '8.6', '7.17', 'developer', 'hcl', 'Animation / Gaming', '5.2', 12, 'BCA', NULL, 'MCA', NULL, 'sadfghj', 'Diagrams.pdf', '2019-09-17 07:10:19', '2019-09-17 07:10:19'),
(14, 19, 2147483647, 'Kirti', 'Sharma', 'hindustan@gmail.com', 'Delhi', 'delhi', 'female', '1996-12-12', 'c++', '.', '.', NULL, NULL, NULL, '.', NULL, NULL, NULL, NULL, NULL, NULL, 'Diagrams (1).pdf', '2019-09-18 06:00:23', '2019-09-18 06:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(20) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `sub_category` varchar(100) DEFAULT NULL,
  `parent` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `c_id` int(10) UNSIGNED NOT NULL,
  `ccode` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cemp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industrytype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businesstype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`c_id`, `ccode`, `user_id`, `cname`, `slug`, `cemp`, `about`, `block`, `sector`, `area`, `state`, `phoneno`, `email`, `industrytype`, `businesstype`, `image`, `logo`, `header`, `created_at`, `updated_at`) VALUES
(7, 103, 15, 'Yamaha Motors', 'yamaha-motors', 'daminee', '', 'a1', '12', 'bawana', 'delhi', 2147483647, 'yamaha@gmail.com', 'Food and beverages', 'wholesaler', 'microweb\\images\\team/6Lt8yG8ASjorQfJ3zCRvAAZTGffq2KI1FcuGFVFY.jpeg', '14-IMG_3975.JPG', NULL, '2019-08-31 01:30:13', '2019-09-02 00:39:15'),
(8, 104, 16, 'D.P Doors', 'dp-doors', 'Kailash', '', '12', '65', 'Bawana', 'Delhi', 2147483647, 'dpdoors@gmail.com', 'Automobiles', 'service provider', 'microweb\\images\\team/L0qL1fROYjZpssvGj46ie0iFkLYCx3bdw8dNnZ2a.jpeg', '', NULL, '2019-09-01 05:02:44', '2019-09-01 05:22:58'),
(9, 102, 17, 'Sharma Auto', 'sharma-auto', 'Daksh Sharma', '<p>aszgdhxfjcgkhluhjkgfds</p>', 'A-23', '12', 'Bawana', 'Delhi', 2147483647, 'sharmaauto@gmail.com', 'Automobiles', 'wholesaler', '100-IMG_3964.JPG', '49-IMG_3871.JPG', NULL, '2019-09-03 00:18:38', '2019-09-09 07:43:50'),
(10, 123, 18, 'trial company', 'trial-company', 'Daminee', '<p>We provide best it solutions in the world.</p>', 'A2', '12', 'Bawana', 'Delhi', 2147483647, 'trialcompany@contact.com', 'It solutions', 'service provider', '24-20180206_072727.jpg', '71-IMG_2970.JPG', NULL, '2019-09-13 07:23:17', '2019-09-13 07:28:42'),
(11, 101, 19, 'Hindustan brooms', 'hindustan-brooms', 'Lakshay', '<p><span style=\"color: #404040; font-family: Roboto, sans-serif; font-size: 20px;\">Hans Christian Gram is a 19th-20th century Danish bacteriologist noted for his development of the Gram stain. Born in Copenhagen on September 13, 1853, Hans Christian discovered a staining technique, which is used to identify and classify different types of bacteria. The technique is used till date even after a century.</span></p>', '24', '12', 'Bawana', 'delhi', 2147483647, 'hindustan@gmail.com', 'Metals', 'retailer', '55-IMG_4334.JPG', '83-bowlbasin.jpg', '63-contact.jpg', '2019-09-13 08:27:11', '2019-09-20 07:25:00'),
(12, 120, 21, 'BAKWAS COMPANY', 'bakwaas-company', 'kishan', '', 'a-56', '34', 'bawana', 'delhi', 2147483647, 'bak@gmail.com', 'It solutions', 'wholesaler', '66-IMG_3985.JPG', '12-IMG_4012.JPG', NULL, '2019-09-17 07:51:44', '2019-09-17 07:52:58'),
(13, 160, 22, 'Talent pvt ltd', 'talent-pvt', 'Prakash Gupta', '<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">An&nbsp;</span><strong style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">article</strong><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;(with the&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;\" title=\"List of glossing abbreviations\" href=\"https://en.wikipedia.org/wiki/List_of_glossing_abbreviations\">linguistic glossing abbreviation</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><span class=\"smallcaps\" style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-caps: small-caps; text-transform: lowercase;\"><strong>art</strong></span></span><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">) is a&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;\" title=\"Word\" href=\"https://en.wikipedia.org/wiki/Word\">word</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;that is used with a&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;\" title=\"Noun\" href=\"https://en.wikipedia.org/wiki/Noun\">noun</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;(as a standalone word or a&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;\" title=\"Prefix\" href=\"https://en.wikipedia.org/wiki/Prefix\">prefix</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;or&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;\" title=\"Suffix\" href=\"https://en.wikipedia.org/wiki/Suffix\">suffix</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">) to specify grammatical&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;\" title=\"Definiteness\" href=\"https://en.wikipedia.org/wiki/Definiteness\">definiteness</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;of the noun, and in some languages extending to volume or numerical scope.</span></p>', 'A-45', '67', 'bawana', 'delhi', 1111132123, 'bye@gmail.com', 'Metals', 'retailer', '81-IMG_3960.JPG', '91-Ceramic-Sanitary-Ware-Market-2.jpg', NULL, '2019-09-18 09:01:11', '2019-09-18 09:57:47'),
(14, 155, 23, 'Indian Enterprise', 'indian-enterprise', 'Vijay sharma', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">An&nbsp;<strong>article</strong>&nbsp;(with the&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"List of glossing abbreviations\" href=\"https://en.wikipedia.org/wiki/List_of_glossing_abbreviations\">linguistic glossing abbreviation</a>&nbsp;<span class=\"smallcaps\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-caps: small-caps; text-transform: lowercase;\"><strong>art</strong></span></span>) is a&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Word\" href=\"https://en.wikipedia.org/wiki/Word\">word</a>&nbsp;that is used with a&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Noun\" href=\"https://en.wikipedia.org/wiki/Noun\">noun</a>&nbsp;(as a standalone word or a&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Prefix\" href=\"https://en.wikipedia.org/wiki/Prefix\">prefix</a>&nbsp;or&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Suffix\" href=\"https://en.wikipedia.org/wiki/Suffix\">suffix</a>) to specify grammatical&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Definiteness\" href=\"https://en.wikipedia.org/wiki/Definiteness\">definiteness</a>&nbsp;of the noun, and in some languages extending to volume or numerical scope.</p>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">The articles in&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"English grammar\" href=\"https://en.wikipedia.org/wiki/English_grammar\">English grammar</a>&nbsp;are&nbsp;<em>the</em>&nbsp;and&nbsp;<em>a/an</em>, and in certain contexts&nbsp;<em>some</em>.&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"A and an\" href=\"https://en.wikipedia.org/wiki/A_and_an#Indefinite_article\">\"An\" and \"a\"</a>&nbsp;are modern forms of the Old English \"an\", which in&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Anglian dialects\" href=\"https://en.wikipedia.org/wiki/Anglian_dialects\">Anglian dialects</a>&nbsp;was the number \"one\" (compare \"on\" in&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Saxons\" href=\"https://en.wikipedia.org/wiki/Saxons\">Saxon dialects</a>) and survived into&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Modern Scots\" href=\"https://en.wikipedia.org/wiki/Modern_Scots\">Modern Scots</a>&nbsp;as the number \"owan\". Both \"on\" (respelled \"one\" by the&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Norman language\" href=\"https://en.wikipedia.org/wiki/Norman_language\">Norman language</a>) and \"an\" survived into&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Modern English\" href=\"https://en.wikipedia.org/wiki/Modern_English\">Modern English</a>, with \"one\" used as the number and \"an\" (\"a\", before nouns that begin with a&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Consonant\" href=\"https://en.wikipedia.org/wiki/Consonant\">consonant</a>&nbsp;sound) as an indefinite article.</p>', 'a-34', '65', 'bawana', 'delhi', 2147483647, 'indian@gmail.com', 'Textile', 'wholesaler', '83-CM-102S-300x300.jpg', '10-IMG_3873.JPG', NULL, '2019-09-18 10:05:10', '2019-09-18 10:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `companyproduct`
--

CREATE TABLE `companyproduct` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyproduct`
--

INSERT INTO `companyproduct` (`id`, `company_id`, `product_name`, `image`, `slug`) VALUES
(6, 9, 'mobile', '16-IMG_3960.JPG', 'sharma-auto'),
(8, 9, 'trial', '37-IMG_3965.JPG', 'sharma-auto'),
(9, 11, 'broom 1', '91-IMG_3965.JPG', 'hindustan-brooms'),
(10, 11, 'broom 2', '52-IMG_3976.JPG', 'hindustan-brooms'),
(11, 11, 'broom 3', '97-IMG_3987.JPG', 'hindustan-brooms'),
(12, 11, 'broom 4', '88-IMG_4003.JPG', 'hindustan-brooms'),
(13, 12, 'bak', '88-IMG_3986.JPG', 'bakwaas-company'),
(14, 13, 'fibre', '37-0Y0J8wnk.jpg', 'talent-pvt'),
(15, 13, 'bhj', '58-F1002151-Carbon-Single-lever-basin-mixer.jpg', 'talent-pvt'),
(16, 13, 'hello', '28-bowlbasin.jpg', 'talent-pvt'),
(17, 13, 'bbjkk', '80-31e4A2qCbvL.jpg', 'talent-pvt'),
(18, 14, 'fibre', '30-1_??13-1.jpg', 'indian-enterprise'),
(19, 14, 'brick', '73-31e4A2qCbvL.jpg', 'indian-enterprise'),
(20, 11, 'mobile', '16-IMG_3960.JPG', 'hindustan-brooms');

-- --------------------------------------------------------

--
-- Table structure for table `companyverify`
--

CREATE TABLE `companyverify` (
  `id` int(10) UNSIGNED NOT NULL,
  `ccode` int(11) NOT NULL,
  `cname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyverify`
--

INSERT INTO `companyverify` (`id`, `ccode`, `cname`) VALUES
(1, 101, 'Hindustan Brooms'),
(2, 102, 'Sharma Auto'),
(3, 103, 'Yamaha Motors'),
(4, 104, 'D.P Doors'),
(5, 123, 'trial company'),
(6, 120, 'BAKWAAS COMPANY'),
(7, 155, 'Indian Enterprise'),
(9, 160, 'Talent pvt');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `author`, `photo`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'hgkj', 'yigjb jhkjh hbmbj ghvhbj', '2019-12-12', 'jghhvn', 'wash.png', 'ACTIVE', 'hgkj', '2019-09-18 08:24:04', '2019-09-20 07:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Prakesh Chand Jain(1).mp4', '113747914', 'Prakesh Chand Jain(1).png', '2019-03-24 11:53:29', '2019-03-24 11:53:29'),
(2, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-24 11:54:01', '2019-03-24 11:54:01'),
(3, 'Internet of things.mp4', '15631703', 'Internet of things.png', '2019-03-24 11:54:17', '2019-03-24 11:54:17'),
(9, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-25 11:46:07', '2019-03-25 11:46:07'),
(10, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-26 03:44:55', '2019-03-26 03:44:55'),
(11, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-27 04:10:37', '2019-03-27 04:10:37'),
(12, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-27 04:13:15', '2019-03-27 04:13:15'),
(13, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-28 01:07:53', '2019-03-28 01:07:53'),
(14, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-28 01:09:15', '2019-03-28 01:09:15'),
(15, 'Internet of things.mp4', '15631703', 'Internet of things.png', '2019-03-28 01:09:50', '2019-03-28 01:09:50'),
(16, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-28 01:31:04', '2019-03-28 01:31:04'),
(17, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-28 01:32:07', '2019-03-28 01:32:07'),
(18, 'Clock_Face_3Videvo.mov', '13475505', 'Clock_Face_3Videvo.png', '2019-03-28 03:34:22', '2019-03-28 03:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `functional`
--

CREATE TABLE `functional` (
  `sc_id` int(11) NOT NULL,
  `sc_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `functional_industry`
--

CREATE TABLE `functional_industry` (
  `scindus_id` int(11) NOT NULL,
  `indus_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageid` varchar(100) NOT NULL,
  `imagename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `cname` varchar(50) NOT NULL,
  `cemp` varchar(50) NOT NULL,
  `contactno` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `udhyog_no` int(50) NOT NULL,
  `reg_no` int(50) NOT NULL,
  `gst_in` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industry_type`
--

CREATE TABLE `industry_type` (
  `industype_id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industry_type_industry`
--

CREATE TABLE `industry_type_industry` (
  `id` int(11) NOT NULL,
  `indus_id` int(11) NOT NULL,
  `industype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `company_name` varchar(100) NOT NULL,
  `ceo` varchar(100) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website_link` varchar(100) NOT NULL,
  `ranking` int(11) NOT NULL,
  `revenue` int(11) NOT NULL,
  `indus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `company_id` int(10) UNSIGNED NOT NULL,
  `hr_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_openings`
--

INSERT INTO `job_openings` (`job_id`, `job_title`, `experience`, `skills`, `postdate`, `expdate`, `location`, `status`, `del`, `ip_address`, `package`, `job_desc`, `company_name`, `company_id`, `hr_name`, `created_at`, `updated_at`) VALUES
(1, 'software developer', '2 years', 'C, C++', '2019-03-15', '2019-12-23', 'delhi', 1, 0, '127.0.0.1', '30000', 'jifvhihdkcnd', 'hcl', 0, 'neha', '2019-03-18 09:32:36', '2019-08-31 02:51:37'),
(2, 'software tester', '4 years', 'advance java', '2019-03-15', '2019-03-30', 'mumbai', 0, 0, '127.0.0.1', '500000', 'congrats', 'TCS', 0, 'parul', '2019-03-18 09:32:36', NULL),
(3, 'software developer', '5 years', 'advance java', '2019-03-20', '2019-04-10', 'lucknow', 0, 0, '127.0.0.1', '40000', 'dwndckj cxnis', 'NIIT', 0, 'ayushi', '2019-03-18 09:32:36', NULL),
(4, 'web developer', '6 years', 'C++', '2019-04-05', '2019-04-13', 'punjab', 0, 0, '127.0.0.1', '57788', 'sxuuehsd beducheokdsn', 'chetu', 0, 'damini', '2019-03-18 09:32:36', NULL),
(5, 'uhsgs', '2 years', 'C', '2019-03-16', '2019-03-01', 'delhi', 0, 0, '127.0.0.1', '20000', 'test', '1994', 0, 'Neha Thakur', '2019-03-18 09:55:47', NULL),
(6, 'software developer', '3 years', 'C#', '2019-03-14', '2019-03-29', 'delhi', 0, 0, '127.0.0.1', '80760', 'ffughtyj', 'sresrty', 0, 'grdh', '2019-03-18 10:15:49', NULL),
(7, 'web developer', '2 years', 'c c++', '2019-03-09', '2019-12-23', 'pune', 1, 0, '127.0.0.1', '900000', 'hjgjfhdgdg', 'nagarro', 0, 'hahaha', '2019-03-19 06:25:39', '2019-08-31 02:49:57'),
(8, 'web developer', '2 years', 'bca', '2019-03-22', '2019-03-30', 'delhi', 0, 0, '127.0.0.1', '89750', 'nghghgj', 'hsjg', 0, 'hkhkh', '2019-03-19 09:40:09', NULL),
(9, 'Developer', '3 years', 'sdfg', '0000-00-00', '0000-00-00', 'Delhi', 0, 0, '127.0.0.1', '11222', 'dfsgh', 'Wipro', 0, 'Anu', '2019-08-13 04:33:41', '2019-08-13 04:33:41'),
(10, 'sdf', '1 years', 'jkm', '0000-00-00', '0000-00-00', 'bangalore', 0, 0, '127.0.0.1', '1243465', 'sfdgh', 'Sharma Auto', 0, 'uh', '2019-08-13 04:52:44', '2019-08-13 04:52:44'),
(11, 'gkjhsklsaj', '1 years', 'fyuhlk', '2019-02-02', '2019-02-02', 'delhi', 0, 0, '127.0.0.1', '12345678', 'fhjagckjd;asc;ldkcdc;ldc', 'Sharma Auto', 0, 'jkjhkjkl', '2019-08-13 04:57:42', '2019-08-13 04:57:42'),
(12, 'Developer', '5 years', 'field', '0000-00-00', '0000-00-00', 'Delhi', 0, 0, '127.0.0.1', '10000', 'asdfhg', 'Hindustan Brooms', 0, 'hisd', '2019-08-30 00:15:47', '2019-08-30 00:15:47'),
(13, 'dgfghfjhgkj', '1 years', 'fjklj', '0000-00-00', '0000-00-00', 'dffjehkl', 0, 0, '127.0.0.1', '1200000', 'gqdzfqhjazjqhzkjqsbqs', 'yamaha motors', 0, 'daminee', '2019-08-31 01:41:21', '2019-08-31 01:41:21'),
(14, 'developer', '1 years', 'nothing', '2019-09-01', '2019-09-14', 'delhi', 1, 0, '127.0.0.1', '88', 'abvc', 'ABC', 0, 'puneet', '2019-09-13 07:43:48', '2019-09-13 07:45:53'),
(15, 'trial1', '2 years', 'dvf', '2019-09-17', '2019-12-27', 'gurgaon', 1, 0, '127.0.0.1', '4746575', 'rtdy ygvyg hvhvjh hgvhbjh gvhjbg ybh', 'Hindustan brooms', 0, 'dddddd', '2019-09-17 07:25:07', '2019-09-17 07:25:44'),
(16, 'deb', '2 years', 'yughjb', '2019-09-20', '2019-12-29', 'dekhi', 1, 0, '127.0.0.1', '123344', 'ffsbgb fdbdsbsd fdfdbg', 'Talent pvt ltd', 0, 'kjlsdklj', '2019-09-18 09:27:42', '2019-09-18 10:16:28'),
(17, 'developer', '3 years', 'ki', '2019-10-10', '2019-10-15', 'delhi', 1, 0, '127.0.0.1', '2346500', 'serdgtf sdfgh dxfgh', 'Indian Enterprise', 0, 'himanshu', '2019-09-18 10:15:23', '2019-09-18 10:16:25'),
(18, 'trial job', '0 years', 'sad', '2019-10-18', '2021-05-10', 'delhi', 1, 0, '127.0.0.1', '100000', 'wdqw qsfa sddas ascas', 'Indian Enterprise', 14, 'deepak', '2019-10-18 12:40:01', '2019-10-18 12:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `livevideos`
--

CREATE TABLE `livevideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `duration` decimal(8,2) NOT NULL,
  `starttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livevideos`
--

INSERT INTO `livevideos` (`id`, `video_id`, `name`, `filename`, `description`, `order`, `duration`, `starttime`, `endtime`, `created_at`, `updated_at`) VALUES
(32, 3, 'test', 'IMG_4209.mp4', '', 1, '30.70', '2019-09-18 08:19:36', '2019-09-18 08:20:06', '2019-09-18 08:19:36', '2019-09-18 08:19:36'),
(33, 4, 'song', 'RABB WANGU _ JASS MANAK  (Full Song) Latest Punjabi Songs 2019.mp4', '', 2, '203.85', '2019-09-18 08:20:07', '2019-09-18 08:23:00', '2019-09-18 08:19:37', '2019-09-18 08:19:37'),
(34, 5, 'hhghjg', 'videoplayback.mp4', '', 3, '172.11', '2019-09-18 08:23:01', '2019-09-18 08:23:00', '2019-09-18 08:19:39', '2019-09-18 08:19:39'),
(35, 6, 'fhdhg', 'DJ RINK _ KHADKE GLASSY REMIX _ JABARIYA JODI _ SIDHARTH M, PARINEETI C _ YO YO HONEY SINGH.mp4', '', 4, '224.75', '2019-09-18 08:23:01', '2019-09-18 08:26:46', '2019-09-18 08:19:41', '2019-09-18 08:19:41'),
(36, 2, 'fjsdhfjh', 'IMG_4009.MP4', '', 5, '15.51', '2019-09-18 08:26:47', '2019-09-18 08:23:17', '2019-09-18 08:19:41', '2019-09-18 08:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_01_07_073615_create_tagged_table', 1),
(23, '2014_01_07_073615_create_tags_table', 1),
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2016_01_01_000000_create_pages_table', 1),
(27, '2016_01_01_000000_create_posts_table', 1),
(28, '2016_02_15_204651_create_categories_table', 1),
(29, '2016_06_29_073615_create_tag_groups_table', 1),
(30, '2016_06_29_073615_update_tags_table', 1),
(31, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(32, '2019_03_22_052848_create_roles_table', 1),
(33, '2019_03_22_052929_create_user_role_table', 1),
(34, '2019_03_25_165629_create_videos_table', 1),
(35, '2019_04_11_081404_create_video_categories_table', 1),
(36, '2019_04_20_060234_create_livevideos_table', 1),
(37, '2019_04_20_085907_create_applicants_table', 1),
(38, '2019_04_24_082620_create_events_table', 1),
(39, '2019_05_14_092359_create_advertisements_table', 1),
(40, '2019_07_24_085306_create_companyverify_table', 1),
(41, '2019_07_24_085358_create_companydetails_table', 1),
(42, '2019_07_25_075806_create_cdetails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_industry`
--

CREATE TABLE `product_industry` (
  `productindus_id` int(11) NOT NULL,
  `Indus_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(1, NULL, NULL, 'Admin', ''),
(2, NULL, NULL, 'Moderator', ''),
(3, NULL, NULL, 'General User', ''),
(4, NULL, NULL, 'Company', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `svid` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`svid`, `title`, `image`, `description`, `slug`) VALUES
(1, 'dgdfglkg', '10-71wa-slY7fL._SX425_.jpg', 'fgfdiguhjgkjdiuhgifjkndfkjhifdughiufgdfjkgfdiughfiughdfjghdfkjghfdgudfhgiudfhgkjdfhgiufghdfijgdfjghd8ughdjfdfgdfhjh', 'sharma-auto'),
(2, 'Timepass', '64-CEBV7629.JPG', 'you can spend all your day doing nothing', 'trial-company'),
(4, 'service 1', '69-IMG_3975.JPG', 'trial of this service is the best thing for the world you can be free with it', 'hindustan-brooms'),
(5, 'trial2', '20-IMG_3979.JPG', 'we have to be always busy in the world with some work so that no one can feel alone', 'hindustan-brooms'),
(6, 'tyui 1', '93-IMG_4011.JPG', 'there is only one thing that can stop you from pursuing your dreams.', 'hindustan-brooms'),
(7, 'dream 4', '26-IMG_4037.JPG', 'you have yorself in every problem . so help yourself whenever you can', 'hindustan-brooms'),
(8, 'free', '98-Topaz-Quarter-Turn-Series.jpg', 'hajhaghj jhsajgshj sahgjas', 'talent-pvt'),
(9, 'trial', '40-71wa-slY7fL._SX425_.jpg', 'An article (with the linguistic glossing abbreviation art) is a word that', 'talent-pvt'),
(10, 'ut', '34-CM-102S-300x300.jpg', 'szdf zdxfcgv zdxfcg', 'indian-enterprise');

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `cstid` int(30) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `reviewstars` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`cstid`, `customername`, `image`, `review`, `reviewstars`, `slug`) VALUES
(4, 'dsdfsd', '63-31e4A2qCbvL.jpg', 'sdaasssdfsdffzfs', '', 'sharma-auto'),
(5, 'test', '24-IMG_3979.JPG', 'poi sdfg edfg dsfg wedrt', '', 'hindustan-brooms'),
(6, 'trial', '19-IMG_3975.JPG', 'In this article, we will learn how to implement sweetalert in laravel 5 application. Here i am going to use uxweb/sweet-alert package for Sweet Alert Messages in laravel 5 application.', '', 'hindustan-brooms'),
(7, 'trual', '36-bowlbasin.jpg', 'An article (with the linguistic glossing abbreviation art) is a word that is used with a noun', '', 'talent-pvt'),
(8, 'gkjhkj', '81-71wa-slY7fL._SX425_.jpg', 'An article (with the linguistic glossing abbreviation art) is a word that is used with a noun', '', 'talent-pvt'),
(9, 'test', '87-shower.jpg', 'htrd her srdgfh', '', 'indian-enterprise'),
(10, 'trial', '84-ewc.png', 'zsdxf sazdxfcg szdxfg', '', 'indian-enterprise');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `verifyToken`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MDDr12g8CL', 'jcPnruJD2Q', 'test@gmail.com', NULL, '$2y$10$SgFoJgipR4vNYr7uZ8v71exTriJ25EesIBIQxQZMY17zSGZP/spz2', NULL, 1, NULL, NULL, NULL),
(2, 'daminee', 'saini', 'damineesaini@yahoo.in', NULL, '$2y$10$f3F3rZ1T1OZff140E.FY8O.Sr8s7tBhVGtwsbUBtqEPCTXa4tRf76', 'RnpCBgoWULmZlhRN6Xm4r9qH7afBI52ul1leXdty', 0, NULL, '2019-08-06 22:57:28', '2019-08-06 22:57:28'),
(3, 'Test', 'User', 'testuser@gmail.com', NULL, '$2y$10$ps6Ht4igaF/PmnCbLVP/QOTcCLTFvDpeMGPO7ndNnNA6cdOiz.g5G', 'hp4AMeDuj89YpN0POxPoJSFiKD5wnvCAv6CBEUj2', 0, NULL, '2019-08-07 03:16:13', '2019-08-07 03:16:13'),
(4, 'Priya', 'Dahiya', 'priya2481996@gmail.com', NULL, '$2y$10$EqVs0Wn33vW6Sup/mTSSru6Ins4CbQTsv9vgyA0zUhaAzAz5HLuHe', '3fqLu6lpoqUQvnXqcji544v8TD3jBhHiBNU0Qwa5', 0, NULL, '2019-08-13 01:28:48', '2019-08-13 01:28:48'),
(11, 'daminee', 'saini', 'damineesaini@gmail.com', NULL, '$2y$10$Ts2uK2lgrWBSfc52MMO.ZONXADkONvy8FCLpdKIpsDKdqkZL05882', '8Dq0sHUPT8pdKLY0MJnTODP6j2Z4NwvYnkKrG66Z', 0, NULL, '2019-08-13 04:11:57', '2019-08-13 04:11:57'),
(12, 'Puneet', 'Singh', 'puneet@gmail.com', NULL, '$2y$10$seZoKD3MpKEHb9kwjx1MH.Z2p5sGq6jtexKqr.cQO9uApe/35hyGS', 'X1EFzcM8jbJqLE8YKCgkH30eojWWLzaPfmvyOEYD', 0, NULL, '2019-08-13 04:44:49', '2019-08-13 04:44:49'),
(13, 'Puneet', 'singh', '1234yyrr@gmail.com', NULL, '$2y$10$uwJPg9uMF.oohXnkfQkYm.xImRy2XbLPeMe7lSm10aYnVUfNvuHoW', 'JTJ5GEtizwDBryZtBN8Zcypaw9Rc42LTcf1UMgme', 0, NULL, '2019-08-20 22:56:07', '2019-08-20 22:56:07'),
(14, 'puneet', 'singh', 'puneet12@gmail.com', NULL, '$2y$10$5K8LlSy/OGBtpR1sbu18pu5IFuRgpg3lKMx1A.FTctxWau9KpbQ1W', 'NRFSV6UECBJgw7wcJBTXTQENha8r3yIBosMAIEnM', 0, NULL, '2019-08-30 00:08:45', '2019-08-30 00:08:45'),
(15, 'daminee', 'saini', 'damkineesaini11@gmail.com', NULL, '$2y$10$VbpENfALYW9IepDerxEk1.hOF6A6ICeLuC1wjS76q6ca.5aXprTSa', 'lHah3Co3AiRHCs2bTzgcJA1nRpmoHahVZ14AmxoE', 0, NULL, '2019-08-31 01:30:13', '2019-08-31 01:30:13'),
(16, 'Praveen', 'lik', 'praveen@gmail.com', NULL, '$2y$10$B/W2KyizzwGbtZzg86EGcekEvtLitRK24X64c6pI3ApZuL93S.aNa', 'aRNpS0lMktQotYTpIIny6iIkMPb71ha1D95TZ2Ey', 0, NULL, '2019-09-01 05:02:44', '2019-09-01 05:02:44'),
(17, 'Prakash', 'Sharma', 'sharma@gmail.com', NULL, '$2y$10$2rAClyNur5z2pEXSUCXWr.BhoRvYkq69JXJitdIkIpqmsvKLSwgCG', 'Dz7GzII1DP2Gx6sTOhC5gL4a9sJXX9mSmixeFmDX', 0, NULL, '2019-09-03 00:18:38', '2019-09-03 00:18:38'),
(18, 'daminee', 'saini', 'damineesaini12@yahoo.in', NULL, '$2y$10$.WdDHxemf//0/H/aw43GouKXsdDb.fuXu1rnoPVZ2azco7UWXFWPG', 'IwmZETPmEF0RpWfpNcgdzoF44s5BzWaMGlFgadUB', 0, NULL, '2019-09-13 07:23:17', '2019-09-13 07:23:17'),
(19, 'Kirti', 'Sharma', 'hindustan@gmail.com', NULL, '$2y$10$xUwRLAG8RM/J97Ct54jXs.Z2JTWZn/nWGzUbD5WWQaDDGiQwlcQ6a', 'jXeeUgWyIM95XvDqZpOP80NgnF5PdRG6V3BO2bEK', 0, NULL, '2019-09-13 08:27:11', '2019-09-13 08:27:11'),
(20, 'Puneet', 'singh', 'puneet1@gmail.com', NULL, '$2y$10$S0e4cBnElzNaKRHDZq.FluQJKRoms9C4gjx6lqewET4MSliObgMTm', '80XaSjhi8FQxqXqh2Gru5at5eta8NqZe9H9Rlngx', 0, NULL, '2019-09-17 07:04:46', '2019-09-17 07:04:46'),
(21, 'Puneet', 's', 'ps@gmail.com', NULL, '$2y$10$4.yojVzhGFKs3IujH1W.je40Qk0T30BTlHPiNkVTriyKKF6lvMw1S', 'ftnoYKudSPVugrBpMFJMqRajoanXKB2zwbpsDfo9', 0, NULL, '2019-09-17 07:51:44', '2019-09-17 07:51:44'),
(22, 'Lie', 'tye', 'bye@gmail.com', NULL, '$2y$10$hq79z7wmYwzI29M6i9cWwOcLaPXup9WM0/INl4R4O9KJdjPuScv7O', 'nI9kr1PvAsNjEXDCNykleL7bta5w3tKldkMfrbhm', 0, NULL, '2019-09-18 09:01:11', '2019-09-18 09:01:11'),
(23, 'Deepak', 'Saini', 'indian@gmail.com', NULL, '$2y$10$ZglaJJVaL1Pg9cTMYsLOi.ps5GnCM5g4mHeevBHpnrcYQOoXDkSd6', 'VMLEPsRaS9a00HiLWTanXNiBAPRDCEZGRH8Eoc2h', 0, NULL, '2019-09-18 10:05:10', '2019-09-18 10:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, NULL, NULL, '1', 1),
(2, NULL, NULL, '2', 3),
(3, NULL, NULL, '3', 3),
(4, NULL, NULL, '4', 3),
(5, NULL, NULL, '10', 4),
(6, NULL, NULL, '11', 1),
(7, NULL, NULL, '12', 3),
(8, NULL, NULL, '13', 3),
(9, NULL, NULL, '14', 4),
(10, NULL, NULL, '15', 4),
(11, NULL, NULL, '16', 4),
(12, NULL, NULL, '17', 4),
(13, NULL, NULL, '18', 4),
(14, NULL, NULL, '19', 4),
(15, NULL, NULL, '20', 3),
(16, NULL, NULL, '21', 4),
(17, NULL, NULL, '22', 4),
(18, NULL, NULL, '23', 4);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` decimal(8,2) NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `category`, `tags`, `name`, `size`, `slug`, `duration`, `thumbnail`, `visible`, `created_at`, `updated_at`) VALUES
(2, 'trialsmall', 'small video', 'Rules & Regulations', '[{\"value\":\"hjdhfjh\"}]', 'IMG_4009.MP4', '8426089', 'f2d2d1b3', '15.51', 'IMG_3965.JPG', 1, '2019-09-13 08:02:08', '2019-09-20 05:20:18'),
(3, 'test', 'xcn bnbg vnb', 'Rules & Regulations', '[{\"value\":\"sdfg\"}]', 'IMG_4209.mp4', '8006968', 'd7ab7e6a', '30.70', 'IMG_3975.JPG', 1, '2019-09-18 06:59:31', '2019-09-20 05:22:59'),
(4, 'song', '4min video', 'Rules & Regulations', '[{\"value\":\"songs\"}]', 'RABB WANGU _ JASS MANAK  (Full Song) Latest Punjabi Songs 2019.mp4', '23874976', '71772627', '203.85', 'the-punisher-skull-wallpaper-10.jpg', 1, '2019-09-18 07:13:24', '2019-09-18 07:13:24'),
(5, 'hhghjg', 'bvbvbv', 'Rules & Regulations', '[{\"value\":\"ghg\"}]', 'videoplayback.mp4', '14892227', 'ba21016c', '172.11', 'IMG_3960.JPG', 1, '2019-09-18 07:39:23', '2019-09-18 07:39:23'),
(6, 'fhdhg', 'djfgkln', 'Rules & Regulations', '[{\"value\":\"rsdhgjh\"}]', 'DJ RINK _ KHADKE GLASSY REMIX _ JABARIYA JODI _ SIDHARTH M, PARINEETI C _ YO YO HONEY SINGH.mp4', '119746850', 'c2c3a2ce', '224.75', 'Screenshot (5).png', 1, '2019-09-18 08:19:16', '2019-09-18 08:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'taxation', '2019-08-30 23:02:12', '2019-09-20 05:26:47'),
(2, 'Songs', '2019-09-18 07:52:47', '2019-09-18 07:52:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advt`
--
ALTER TABLE `advt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`job_id`,`user_id`);

--
-- Indexes for table `candidatedatas`
--
ALTER TABLE `candidatedatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `companyproduct`
--
ALTER TABLE `companyproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `companyverify`
--
ALTER TABLE `companyverify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `functional`
--
ALTER TABLE `functional`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `functional_industry`
--
ALTER TABLE `functional_industry`
  ADD PRIMARY KEY (`scindus_id`),
  ADD KEY `IID_fk` (`indus_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `uniquekey` (`udhyog_no`,`cname`,`address`,`contactno`,`gst_in`,`email`) USING BTREE;

--
-- Indexes for table `industry_type`
--
ALTER TABLE `industry_type`
  ADD PRIMARY KEY (`industype_id`);

--
-- Indexes for table `industry_type_industry`
--
ALTER TABLE `industry_type_industry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i_fk` (`indus_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`indus_id`);

--
-- Indexes for table `job_openings`
--
ALTER TABLE `job_openings`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `livevideos`
--
ALTER TABLE `livevideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_industry`
--
ALTER TABLE `product_industry`
  ADD PRIMARY KEY (`productindus_id`),
  ADD KEY `id_fk` (`Indus_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`svid`);

--
-- Indexes for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indexes for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Indexes for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`cstid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advt`
--
ALTER TABLE `advt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidatedatas`
--
ALTER TABLE `candidatedatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `companyproduct`
--
ALTER TABLE `companyproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `companyverify`
--
ALTER TABLE `companyverify`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job_openings`
--
ALTER TABLE `job_openings`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `livevideos`
--
ALTER TABLE `livevideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `svid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `cstid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
