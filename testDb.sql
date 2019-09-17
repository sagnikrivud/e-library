-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2019 at 04:01 PM
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
(10, 'Dracula', 'Bram Stroker', '7', 'Images/drakula.jpg', 1, NULL, NULL),
(14, 'hello', 'jk', '3', NULL, NULL, '2019-09-13 07:38:06', '2019-09-13 07:38:06'),
(15, 'Gidzilla', 'Eric powell', '3', '/tmp/phpquNUmu', NULL, '2019-09-15 23:45:34', '2019-09-15 23:45:34'),
(16, 'The House', 'frank Peritti', '5', 'Images/House.jpg', 2, '2019-09-18 06:02:26', '2019-09-15 04:50:22'),
(17, 'Chokher Bali', 'Rabindra Nath Tagore', '10', 'Images/chokherbali.jpg', 2, '2019-09-07 22:47:15', '2019-09-01 00:44:16'),
(18, 'Roktokorobee', 'Rabindra Nath Tagore', '6', 'Images/roktokorobee.jpg', 2, '2019-09-07 23:44:15', '2019-09-14 23:44:16'),
(19, 'Meghnad Bodh Kabbo', 'Mikel Madhusudan Datta', '5', 'Images/meghnadbodh.jpg', NULL, '2019-09-21 21:41:14', '2019-09-01 07:40:16'),
(20, 'Jurrassic Park', 'Michel Crikton', '4', '/Images/8166938bd0912c7c7e366af053374a96.jpg', NULL, '2019-09-17 03:53:45', '2019-09-17 03:53:45');

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
(1, 4, 1, 'D', '2019-09-16 12:01:50', NULL),
(9, 4, 6, 'D', '2019-09-16 12:01:55', '2019-09-09 23:50:39'),
(10, 4, 6, 'D', '2019-09-17 06:05:34', '2019-09-09 23:52:26'),
(13, 4, 7, 'D', '2019-09-16 12:55:50', '2019-09-10 05:45:51'),
(14, 4, 2, 'D', '2019-09-16 12:55:39', '2019-09-10 07:49:33'),
(15, 4, 2, 'F', '2019-09-11 07:25:33', '2019-09-10 23:34:14'),
(16, 4, 8, 'F', '2019-09-16 13:00:23', '2019-09-11 00:23:09'),
(17, 4, 3, 'F', '2019-09-16 12:17:05', '2019-09-12 02:27:53'),
(18, 4, 8, 'F', '2019-09-16 12:09:36', '2019-09-12 03:16:34'),
(19, 4, 8, 'F', '2019-09-16 12:09:46', '2019-09-12 03:22:19'),
(20, 4, 9, 'D', '2019-09-17 09:07:18', '2019-09-12 03:24:06'),
(22, 4, 8, 'F', '2019-09-16 12:09:55', '2019-09-12 03:47:07'),
(23, 4, 10, 'A', '2019-09-16 12:02:30', '2019-09-13 05:14:41'),
(24, 8, 4, 'C', '2019-09-17 07:36:14', '2019-09-16 00:09:22'),
(25, 4, 17, 'I', '2019-09-17 02:30:16', '2019-09-17 02:30:16');

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
(4, 'test', 'test@mail.com', '90564545514', '/Images/male.jpg', 1, '$2y$10$O66saCyUpiCd8KE.pflt..9vQ2Cf28E7vaoJdRVl/6Yu6.afQBi0i', '1', 'jvZdeNjPz9TLejd6G2GEI23flkEoQmM6fyrts0fc0m6q2HZ3ntDT2qM2IXtd', '2019-09-05 07:11:17', '2019-09-17 02:11:55'),
(5, 'sagnik', 'sagnik@unifiedinfotech.net', '90001115', '/Images/marguerite-daisy-beautiful-beauty.jpg', 1, '$2y$10$3fLZ.1fRWWKINuKEDbR.MublQGHmFmLwc4c/9/D..IhMCYjDD5YUu', '2', 'G31DbN9OMiirLdcUZhPHmdG5EuXi4TNF4Ln3hRmnsFXYSzk0zIzhnPLcrwoG', '2019-09-05 07:42:40', '2019-09-12 04:01:23'),
(6, 'test@mail.com', 'test2@mail.com', '87765778', NULL, 0, '$2y$10$6BSFP7j03gdRB9dHqJu3yOBhrjnk/KlQ59X6oMm/sWGnQh0MNSzDG', '', 'SsHnlWDE3R5xKelrH1fLHzhrppCSrLdS5dxelsx4qAmIaDXUIKAbvL5mlvgz', '2019-09-10 23:21:49', '2019-09-10 23:21:49'),
(7, 'Liza', 'liza@unifiedinfotech.net', '90888370', NULL, 0, '$2y$10$mtzlnRhwYl.Cfph6P0xfb.18qXgaf3gnpAwRhVQWAI0zoo4NTBd8G', '2', 'lh22U5AgDGX3MpjKO2Rcbvk49KxSBUZ35NmYCCbK1JwoajoZPy1uW59YfGix', '2019-09-16 00:03:45', '2019-09-16 00:03:45'),
(8, 'Liza', 'lisa@unifiedinfotech.net', '980655676', '/Images/female.jpg', 1, '$2y$10$LJ6y5x6CuHxVmtDZV1k5TuMHi1BLALdD55EtHIYSCI4aSW4O3Fw4y', '2', 'ihn4QCxDXqb6rMAAy1TTId0wXeFNLduLk6XDeBZDzFj1vKhL5Y8P5fnZMesC', '2019-09-16 00:07:07', '2019-09-16 00:09:10'),
(9, 'hgd', 'fgf@mail.com', '847879849', NULL, 0, '$2y$10$23bWe1zBEBvtEh0tNVSjUO9ELYlATyfjJZ.YX4nyYneW6aArnX0Bq', '2', 'R7y7WYcp6HHA7dJuz9gbe1fDUcwEoUh3JseH0dVyCX8HVl76vhGjMkOTlKJI', '2019-09-17 01:54:51', '2019-09-17 01:54:51'),
(10, 'sd', 'sd@gmail.com', '234434344', NULL, 0, '$2y$10$ww08xMALAROpm7jmr4j.ZOTCeBNZFnu9p4KoI0UxUP7PAQhUJC.QC', '2', 'acZICpjMuwByf1bXuVl9b4hwNrXRZOrtFsxkqHAzlLlLsEsxTSBOElvI5RdR', '2019-09-17 02:25:05', '2019-09-17 02:25:05');

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
(5, 6, 'Zy7fogCtFwgUpgj7JloiukeZowEs7IVZoTIH8e4j', '2019-09-10 23:21:49', '2019-09-10 23:21:49'),
(6, 7, '9rPr9G3bCXufa6BWxc5QMZ9Iv4H4Yo2jMo1zoQhH', '2019-09-16 00:03:45', '2019-09-16 00:03:45'),
(7, 8, '90cJdNlx1daxOA9bdPbrVoiGMi9YtqnODpnV6CSS', '2019-09-16 00:07:07', '2019-09-16 00:07:07'),
(8, 9, 'h9kmmcuFu1FmvPJnQ8DlhoRWvgI3rgv9OWuGcrhp', '2019-09-17 01:54:51', '2019-09-17 01:54:51'),
(9, 10, 'XdiR487H0DSRceAeVSMMS1a6iRaC0uO85PmNhlUC', '2019-09-17 02:25:05', '2019-09-17 02:25:05');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
