-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 11:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
(3, '2019_03_11_063650_create_files_table', 2),
(8, '2014_10_12_000000_create_users_table', 3),
(9, '2014_10_12_100000_create_password_resets_table', 3),
(10, '2019_03_16_082814_create_files_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` int(20) NOT NULL,
  `vid_title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `path` varchar(200) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `duration` float NOT NULL,
  `cat_id` int(20) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_timing`
--
-- Error reading structure for table bci.video_timing: #1932 - Table 'bci.video_timing' doesn't exist in engine
-- Error reading data for table bci.video_timing: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `bci`.`video_timing`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`),
  ADD KEY `CategoryFK` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `CategoryFK` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
