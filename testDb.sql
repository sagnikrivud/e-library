-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2019 at 07:25 PM
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
  `image` varchar(150) NOT NULL,
  `cat_id` int(155) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `quantity`, `image`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Harry Potter', 'JK r', '8', '/Images/hp.jpg', 1, '2019-09-18 01:00:12', '2019-09-01 00:53:25'),
(2, 'Take', 'Mr. Q', '4', 'Images/take.jpg', 5, NULL, NULL),
(3, 'A night to remember', 'Walter Lord', '6', 'Images/titanik.jpg', 2, NULL, NULL),
(4, 'Posiedon', 'Anna Banks', '10', 'Images/posidon.jpg', 2, NULL, NULL),
(5, 'Black Forest', 'Livingstone', '5', 'Images/black forest.jpg', 1, NULL, NULL),
(6, 'Legend Of the peacock Throne ', 'C. Emella', '7', 'Images/pecock.jpg', 4, NULL, NULL),
(7, 'The haunted Tour', 'James A. jeff', '6', 'Images/haunted.jpg', 1, NULL, NULL),
(8, 'The Killer trap', 'K.R. Hill', '10', 'Images/killer.jpg', 3, NULL, NULL),
(9, 'The Lie', 'C. L. Taylor', '6', 'Images/lie.jpg', 3, NULL, NULL),
(10, 'Dracula', 'Bram Stroker', '7', 'Images/drakula.jpg', 1, NULL, NULL);

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
(1, 'Haunted', '2019-09-18 08:54:25', NULL),
(2, 'Adventure', '2019-09-18 08:58:41', NULL),
(3, 'Detective', '2019-09-18 08:47:38', NULL),
(4, 'history', '2019-09-20 09:15:43', NULL),
(5, 'entertainment', '2019-09-01 04:04:44', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `user_id`, `book_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'D', '2019-09-11 07:29:10', NULL),
(9, 4, 6, 'D', '2019-09-10 11:28:25', '2019-09-09 23:50:39'),
(10, 4, 6, 'C', '2019-09-11 07:28:28', '2019-09-09 23:52:26'),
(13, 4, 7, 'A', '2019-09-10 11:30:35', '2019-09-10 05:45:51'),
(14, 4, 2, 'I', '2019-09-10 07:49:33', '2019-09-10 07:49:33'),
(15, 4, 2, 'F', '2019-09-11 07:25:33', '2019-09-10 23:34:14'),
(16, 4, 8, 'I', '2019-09-11 00:23:09', '2019-09-11 00:23:09'),
(17, 4, 3, 'I', '2019-09-12 02:27:53', '2019-09-12 02:27:53'),
(18, 4, 8, 'I', '2019-09-12 03:16:34', '2019-09-12 03:16:34'),
(19, 4, 8, 'I', '2019-09-12 03:22:19', '2019-09-12 03:22:19'),
(20, 4, 9, 'I', '2019-09-12 03:24:06', '2019-09-12 03:24:06'),
(21, 4, NULL, 'I', '2019-09-12 03:46:36', '2019-09-12 03:46:36'),
(22, 4, 8, 'I', '2019-09-12 03:47:07', '2019-09-12 03:47:07');

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
(4, 'test', 'test@mail.com', '90564545514', '/Images/lotus-978659__340.jpg', 1, '$2y$10$O66saCyUpiCd8KE.pflt..9vQ2Cf28E7vaoJdRVl/6Yu6.afQBi0i', '2', '7AQFTSfVBI8fPwklIKqbDwhAJ9ofS6lRRjHeauO1f2jHWja1ohEq9WmLxXon', '2019-09-05 07:11:17', '2019-09-11 05:08:38'),
(5, 'sagnik', 'sagnik@unifiedinfotech.net', '90001115', '/Images/marguerite-daisy-beautiful-beauty.jpg', 1, '$2y$10$3fLZ.1fRWWKINuKEDbR.MublQGHmFmLwc4c/9/D..IhMCYjDD5YUu', '2', 'OpNYmJraNGsyM2qe05ybkrUecUsTqHICT9ZVw8G6c91mzTTaEi7NH8rSxNvm', '2019-09-05 07:42:40', '2019-09-12 04:01:23'),
(6, 'test@mail.com', 'test2@mail.com', '87765778', NULL, 0, '$2y$10$6BSFP7j03gdRB9dHqJu3yOBhrjnk/KlQ59X6oMm/sWGnQh0MNSzDG', '2', 'SsHnlWDE3R5xKelrH1fLHzhrppCSrLdS5dxelsx4qAmIaDXUIKAbvL5mlvgz', '2019-09-10 23:21:49', '2019-09-10 23:21:49');

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
(1, 2, 'sR24geEscPpRSE0vxc0La3vik7rEa6rug8I82AYU', '2019-09-05 06:29:45', '2019-09-05 06:29:45'),
(2, 3, 'Zi8CJ5jhL7yhOooL4hpQPOepNNnR7n5wZyKYxGuf', '2019-09-05 06:33:49', '2019-09-05 06:33:49'),
(3, 4, 'vjRFZdnh2DZSAv85MzU4NwSnseMYrOL54Rvq9GhF', '2019-09-05 07:11:17', '2019-09-05 07:11:17'),
(4, 5, 'hFtUkBdJjVrTTi2W3JugUerRGcF81ZQXun3m7giq', '2019-09-05 07:42:40', '2019-09-05 07:42:40'),
(5, 6, 'Zy7fogCtFwgUpgj7JloiukeZowEs7IVZoTIH8e4j', '2019-09-10 23:21:49', '2019-09-10 23:21:49');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_catagories`
--
ALTER TABLE `book_catagories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
