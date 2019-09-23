-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 08:04 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.2.20-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `author` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `cat_id` int(155) DEFAULT NULL,
  `available` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `quantity`, `image`, `cat_id`, `available`, `created_at`, `updated_at`) VALUES
(1, 'Harry potter', 'Jk R', '12', '/Images/ImageHandler.ashx.jpeg', NULL, '12', '2019-09-19 03:52:18', '2019-09-23 02:18:22'),
(2, 'Annebela', 's.g', '10', '/Images/0883929646449_p0_v4_s550x406.jpg', NULL, '10', '2019-09-19 03:56:00', '2019-09-19 07:45:13'),
(3, 'seventh ward', 's.g', '12', '/Images/51f2lcbQWOL.jpg', NULL, '12', '2019-09-19 05:28:38', '2019-09-22 23:42:56'),
(4, 'Godzila', 'Eric powell', '2', '/Images/9781613774571_p0_v1_s550x406.jpg', NULL, '2', '2019-09-19 06:57:05', '2019-09-22 23:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `book_catagories`
--

CREATE TABLE `book_catagories` (
  `id` int(255) NOT NULL,
  `catagory` varchar(155) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_catagories`
--

INSERT INTO `book_catagories` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(1, 'Haunted', '2019-09-23 01:53:23', NULL),
(2, 'Enterteinment', '2019-09-23 00:49:14', NULL),
(3, 'Adventure', '2019-09-23 00:44:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(155) NOT NULL,
  `user_id` int(155) DEFAULT NULL,
  `book_id` int(155) DEFAULT NULL,
  `status` enum('A','I','C','D','F') DEFAULT 'I',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `user_id`, `book_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 4, 'F', '2019-09-22 23:37:07', '2019-09-23 05:07:33'),
(2, 8, 1, 'D', '2019-09-23 02:18:22', '2019-09-10 11:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_09_05_103634_create_verify_users_table', 1),
(18, '2014_10_12_000000_create_users_table', 2),
(19, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(255) NOT NULL,
  `reserve_period` varchar(255) DEFAULT NULL,
  `fine_amount` varchar(255) DEFAULT NULL,
  `toggle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `reserve_period`, `fine_amount`, `toggle`, `created_at`, `updated_at`) VALUES
(1, '3', '15', NULL, '2019-09-23 10:22:20', '2019-09-23 08:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `verified`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@mail.com', '9000000', NULL, 1, '$2y$10$E6e1EEYhOSRCCW7UH8v6wOkIVZAxDCUhC0JioauAoJ8/qUqSGXFxy', '1', 'dbqn8PmpRwJoCsPkI7rrxdU179k3PhhzrIAYiK8lN5DUnQeGOsXliaAsU3rc', '2019-09-19 03:30:04', '2019-09-19 03:30:04'),
(6, 'sagnik', 'sagnikcoold@gmail.com', '9077786676', NULL, 1, '$2y$10$Aup0UUdpHZcFLtorefJckOrlBC3aRypmh.g1CDauA6ux5R3tCBjqG', '2', 'yBtvk0UegDAorH5yfcO0JrwwWgfki8hxdC2FaYsRCbJclHBjCa8GHjE1Ftm5', '2019-09-19 04:31:54', '2019-09-19 04:31:54'),
(7, 'Lisa', 'lisa@unifiedinfotech.net', '9088226300', NULL, 0, '$2y$10$a/gT1RO75fIS0EJPd0ID2.56M6Z6/PkRi8uPbbWsf53qQyYyw/JMK', '2', 'RUyiv81NoEUbY5dccZrgS5fZOdWCGxfyYmEUjJE76FX5fEQqTOIZ4zsIpJZl', '2019-09-19 05:12:20', '2019-09-19 05:12:20'),
(8, 'test2', 'trashsng@gmail.com', '9088811189', '/Images/close-up-of-water-drops-on-pink-flower-royalty-free-image-1129286570-1550867689.jpg', 1, '$2y$10$0DN1i5ijK6Q38BIkOH9nc.K0V5g2zwn8j747vZcDSseMf28iU7OUu', '2', 'xbR4SgwULLZxFY5sbHqDaoWc6hThwLKv73V1WiItwYgCipTuOVXmHB6q7vMA', '2019-09-19 05:34:10', '2019-09-20 01:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Th7p363GWnpqRyX4ZLzShicv8lqW3n5Vf3Mktle3', '2019-09-19 03:30:04', '2019-09-19 03:30:04'),
(2, 2, 'Y94cXyMHmL1NL77uQvDEQHXcbLA5ou8DoDmsk9Gt', '2019-09-19 04:07:14', '2019-09-19 04:07:14'),
(3, 3, 'ArBrjBTmQQ3386Mc0spyEpQHDlsjLny0IyuqaGbz', '2019-09-19 04:25:58', '2019-09-19 04:25:58'),
(4, 4, '0qN6E0dIFEVC1sy6Exwg3kdIJhkGplHkPOolwUCz', '2019-09-19 04:28:09', '2019-09-19 04:28:09'),
(5, 5, '9qTmx0CMZ0fTJ1ocGvS9JGAtgKa50GaT0qFuMUWi', '2019-09-19 04:30:45', '2019-09-19 04:30:45'),
(6, 6, 'sYsGZhKMBc1F0vD7nCSe62dKFKuscfRD1xgTzbCR', '2019-09-19 04:31:54', '2019-09-19 04:31:54'),
(7, 7, 'jRtmMWGmWiPr0SVwvOfeWU4vpEXEAyM6MQJv5r4J', '2019-09-19 05:12:20', '2019-09-19 05:12:20'),
(8, 8, 'a0rtaTVdLmNWu8MVqsx6P7fEEyu3vMuXODLttWUF', '2019-09-19 05:34:10', '2019-09-19 05:34:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_catagories`
--
ALTER TABLE `book_catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_catagories`
--
ALTER TABLE `book_catagories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
