use testingstartng;
CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--
use testingstartng;
CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `name`, `description`, `price`, `duration`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laravel', 'Doctor Oluwaseun', 44.00, '4', 1, '2019-10-18 06:44:33', '2019-10-18 07:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--
use testingstartng;
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
-- Table structure for table `migrations`
--
use testingstartng;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_10_17_152645_create_registered_courses_table', 1),
(6, '2019_10_17_152302_create_courses_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--
use testingstartng;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_courses`
--
use testingstartng;
CREATE TABLE `registered_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_courses`
--

INSERT INTO `registered_courses` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2019-10-18 09:58:33', '2019-10-18 09:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
use testingstartng;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--
use testingstartng;
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `active`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tobi', 'admin@gmail.com', '09034017984', 0, '1', NULL, '$2y$10$xWpFpUJgp5kzvqLE2l3xQuiZYWyQe0FovSWIV6M4zPrqxjnb/t7vy', NULL, '2019-10-18 00:31:36', '2019-10-18 06:56:50'),
(2, 'tobi', 'ffftobi@gmail.com', '1234567890', 1, '0', NULL, '$2y$10$I7Ija7GsxhxYJg7BbeUVC.xICJNUMcg12cF28mLcrrWbzVbvHtjpK', NULL, '2019-10-18 00:39:15', '2019-10-18 00:39:15'),
(3, 'tobi', 'oyebamijitobi@gmail.com', 'password', 1, '0', NULL, '$2y$10$1ZdWROVQW2C9kN9cEHTOLeP0h9.EP1MjHmzrQ6pePbTef.lBVALEi', NULL, '2019-10-18 08:35:48', '2019-10-18 08:35:48'),
(4, 'farm', '1@example.com', '1234567887', 1, '0', NULL, '$2y$10$F.vSVGaIdxC/FDfOIsdbVuq8yREQSR.JjkMbxNlGuHVcMtOZyDN96', NULL, '2019-10-18 08:44:15', '2019-10-18 08:44:15');






-- //username
-- b9427288030a37
--  //host
-- us-cdbr-iron-east-05.cleardb.net
-- -- //password
-- 94134f40
