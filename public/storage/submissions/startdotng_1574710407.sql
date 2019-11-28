-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startdotng`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `title`, `description`, `price`, `duration`, `active`, `created_at`, `updated_at`) VALUES
(1, 2, 'HTML', 'With HTML you can create your own Web site. This tutorial teaches you everything about HTML. HTML is easy to learn - You will enjoy it.', 500.00, '3', 1, '2019-11-04 11:31:07', '2019-11-04 13:03:30'),
(2, 4, 'Javascript', 'JavaScript is the programming language of HTML and the Web. Programming makes computers do what you want them to do. JavaScript is easy to learn. This platform will teach you JavaScript from basic to advanced.', 4000.00, '4', 1, '2019-11-04 11:32:24', '2019-11-04 12:27:35'),
(3, 4, 'PHP', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient.', 2000.00, '3', 1, '2019-11-04 11:40:15', '2019-11-04 11:40:15'),
(4, 1, 'Bootstrap', 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites. Bootstrap is completely free to download and use!!!', 500.00, '2', 1, '2019-11-04 12:30:48', '2019-11-04 12:39:05');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_10_29_090030_create_users_table', 1),
(3, '2019_10_29_091506_create_blogs_table', 1),
(4, '2019_10_29_091711_create_contacts_table', 1),
(5, '2019_10_29_131051_create_registered_courses_table', 1),
(6, '2019_10_29_131218_create_courses_table', 1),
(7, '2019_10_29_131630_create_reviews_table', 1),
(8, '2019_10_29_132227_create_course_contents_table', 1),
(9, '2019_10_30_163624_create_subscriptions_table', 1),
(10, '2019_10_31_151445_create_assignments_table', 1),
(11, '2019_11_03_153516_create_schedules_table', 1),
(12, '2019_11_04_120816_create_submissions_table', 1),
(13, '2019_11_20_154905_create_resources_table', 2),
(14, '2019_11_22_175318_create_reviews_table', 3);

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
-- Table structure for table `registered_courses`
--

CREATE TABLE `registered_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_courses`
--

INSERT INTO `registered_courses` (`id`, `user_id`, `course_id`, `progress`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 0, '2019-11-04 13:10:58', '2019-11-04 13:10:58'),
(2, 5, 4, 0, '2019-11-04 13:11:18', '2019-11-04 13:11:18'),
(3, 3, 2, 0, '2019-11-04 15:32:29', '2019-11-04 15:32:29'),
(5, 3, 4, 0, '2019-11-04 19:23:45', '2019-11-04 19:23:45'),
(6, 3, 1, 0, '2019-11-25 11:10:29', '2019-11-25 11:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `course_id`, `file`, `created_at`, `updated_at`) VALUES
(1, '4', 'BaseController.zip', '2019-11-20 15:43:58', '2019-11-20 15:43:58'),
(2, '4', 'index.html', '2019-11-20 15:44:41', '2019-11-20 15:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `date`, `time`, `course_id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-11', '08:24:00', 3, '2019-11-04 17:00:04', '2019-11-04 17:00:04'),
(2, '2019-11-12', '08:45:00', 4, '2019-11-04 17:00:26', '2019-11-04 17:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `username`, `phone`, `email`, `role`, `active`, `email_verified_at`, `password`, `status`, `profile_pic`, `about`, `remember_token`) VALUES
(1, '2019-11-04 11:17:20', '2019-11-20 14:02:13', 'Admin', 'Admin', 'admin', '12345678', 'admin@test.com', 2, 1, NULL, '$2y$10$PFJvWcPELiMQ30KSrZlGte9l54uiva4etfKC5oM2QXxgrcHeIUN2u', NULL, 'shirt (5)_1574262133.jpg', NULL, NULL),
(2, '2019-11-04 11:18:28', '2019-11-04 19:02:01', 'Tutor', 'Tutor', 'tutor', '121322443', 'tutor@test.com', 1, 1, NULL, '$2y$10$dRJasVxafYhD/yPn1FJP3uNmLB4DdD0S/ygHyFXPx6mm9QoIwQeYi', 'Frontend', '', 'I am a good mentor', NULL),
(3, '2019-11-04 11:19:16', '2019-11-04 11:19:16', 'User', 'User', 'user', '1263576437', 'user@test.com', 0, 1, NULL, '$2y$10$J95mByM2TGlRTWf73/dI2eYNaqO.Hq8PinxoiMhQvhHHyxm.Vsbdm', NULL, NULL, NULL, NULL),
(4, '2019-11-04 11:38:58', '2019-11-04 11:38:58', 'Tutor2', 'Tutor2', 'tutor2', '545484', 'tutor2@test.com', 1, 1, NULL, '12345678', NULL, NULL, NULL, NULL),
(5, '2019-11-04 13:05:01', '2019-11-04 13:05:01', 'User2', 'User2', 'user2', '74763895', 'user2@test.com', 0, 1, NULL, '$2y$10$jfa6lBXrg1bl2ZGFihcld.5Fqi3uoLdYAK1lnvAq.FcVJS9T9D8zC', NULL, NULL, NULL, NULL),
(6, '2019-11-05 16:55:44', '2019-11-05 16:55:44', 'Tutor3', 'Tutor3', 'newtutor', '7475943', 'tutor3@test.com', 1, 1, NULL, '12345678', NULL, NULL, NULL, NULL),
(7, '2019-11-05 16:56:17', '2019-11-05 16:56:17', 'Admin2', 'Admin2', 'admin2', '28357572', 'admin2@test.com', 2, 1, NULL, '12345678', NULL, NULL, NULL, NULL),
(8, '2019-11-22 15:26:50', '2019-11-22 15:26:50', 'Test', 'Test', 'test', '164863846', 'test@test.com', 2, 1, NULL, '$2y$10$Vz13PxnA8L2RNDk/JbSzeOFys0YWZ/fBjpcEpxuyvHX5iN6Rmy3tS', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `registered_courses`
--
ALTER TABLE `registered_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registered_courses`
--
ALTER TABLE `registered_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
