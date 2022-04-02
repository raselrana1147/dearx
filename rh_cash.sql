-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 07:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rh_cash`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_codes`
--

CREATE TABLE `active_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_codes`
--

INSERT INTO `active_codes` (`id`, `code`, `expired_at`, `created_at`, `updated_at`) VALUES
(4, '939393', NULL, '2021-12-04 00:06:54', '2021-12-04 00:06:54'),
(5, '541618', NULL, '2021-12-04 00:07:54', '2021-12-04 00:07:54'),
(6, '944180', NULL, '2021-12-04 00:07:56', '2021-12-04 00:07:56'),
(7, '289370', NULL, '2021-12-04 00:07:58', '2021-12-04 00:07:58'),
(8, '617732', NULL, '2021-12-04 00:07:59', '2021-12-04 00:07:59'),
(10, '942322', NULL, '2021-12-04 00:22:37', '2021-12-04 00:22:37'),
(11, '865193', NULL, '2021-12-04 00:22:54', '2021-12-04 00:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Rasel Rana', 'raselrana1147@gmail.com', '01964719349', '$2y$10$he9NXvZL1JCZBeN1oXzgauZMV.OE7LKPvF7btKJydA80mmEZbUexq', 'pecnwltzpb1636525436.jpg', 'admin', '2021-11-01 22:52:34', '2021-11-10 00:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(19, 'aaaa', '<p>So, let\'s take a look at some of those quotes to get energized and inspired at work and in our personal lives. (I made the quote images using Canva.)<br></p>', 0, '2021-11-04 04:56:15', '2021-11-04 04:56:15'),
(20, 'ffff', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; line-height: unset; font-size: 15px; color: rgb(102, 102, 102); font-family: SolaimanLipi, Arial, sans-serif; text-align: justify;\">অভিনয়জীবনের ২৪ বছরে পা রাখলেন অভিনেত্রী দিলারা হানিফ পূর্ণিমা। গত কয়েক বছর অভিনয়ের চেয়ে তাঁকে বেশি দেখা গেছে অনুষ্ঠান উপস্থাপনায়। মুক্তির অপেক্ষায় আছে তাঁর একাধিক চলচ্চিত্র। গত রোববার সন্ধ্যায় চট্টগ্রাম থেকে মুঠোফোনেই তিনি জানালেন পেরিয়ে আসা জীবনের নানা গল্প।</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; line-height: unset; font-size: 15px; color: rgb(102, 102, 102); font-family: SolaimanLipi, Arial, sans-serif;\">চট্টগ্রামে কেন?</p>', 0, '2021-11-04 05:06:20', '2021-11-04 05:06:20'),
(23, 'ddddd', '<p>অনেক দিন আগেই আমি বুঝেছি যে শুয়োরের সঙ্গে দ্বন্দ্বযুদ্ধ করতে নেই। শরীর নোংরা হয়ে যাবে এবং শুয়োরটি এইটিই পছন্দ করবে। – সাইরাস চিং<br></p>', 0, '2021-11-04 06:18:12', '2021-11-04 06:18:12'),
(24, 'ggggg', '<p>The insight and experience of others is a valuable source of inspiration and motivation. And learning from successful leaders and entrepreneurs is a fantastic way to grow.<br></p>', 0, '2021-11-04 06:18:44', '2021-11-04 06:18:44'),
(25, 'Speach', '<p>Life throws curveballs. And while there might be blockers to success, it\'s imperative to keep pushing with the knowledge mistakes will be made and failure is inevitable.<br></p>', 0, '2021-11-04 06:19:13', '2021-11-04 06:19:13'),
(26, 'Speech', '<p>Even the world\'s most successful individuals have experienced their fair share of setbacks and hardships. There\'s much to learn from their challenges as well as their success. Luckily, they\'ve condensed their wisdom into meaningful quotes that you can store for later use.<br></p>', 0, '2021-11-04 06:19:42', '2021-11-04 06:19:42'),
(27, 'Speech', '<p>So, let\'s take a look at some of those quotes to get energized and inspired at work and in our personal lives. (I made the quote images using Canva.)<br></p>', 0, '2021-11-04 06:20:06', '2021-11-04 06:20:06'),
(28, 'Speech', '<div style=\"border: 1pt solid rgb(238, 238, 238); padding: 7pt 7pt 7pt 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin-left: 0.25in; margin-right: 0in;\">\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.25in; text-indent: -0.25in; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: none; padding: 0in;\"><span lang=\"EN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Arial Unicode MS&quot;;\r\nmso-fareast-font-family:&quot;Arial Unicode MS&quot;;mso-bidi-font-family:&quot;Arial Unicode MS&quot;;\r\ncolor:#363940\">অন্তত ষাট হাজার বই সঙ্গে না থাকলে জীবন অচল ।- ইউরোপ কাপানো নেপোলিয়ান</span><span lang=\"EN\"><o:p></o:p></span></p>\r\n\r\n</div>', 0, '2021-11-04 06:21:17', '2021-11-04 06:21:17'),
(29, 'Speech', '<div style=\"border: 1pt solid rgb(238, 238, 238); padding: 7pt 7pt 7pt 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin-left: 0.25in; margin-right: 0in;\">\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.25in; text-indent: -0.25in; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: none; padding: 0in;\"><span lang=\"EN\" style=\"font-size:\r\n12.0pt;line-height:150%;color:#363940\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;</span></span><!--[endif]--><span lang=\"EN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Arial Unicode MS&quot;;\r\nmso-fareast-font-family:&quot;Arial Unicode MS&quot;;mso-bidi-font-family:&quot;Arial Unicode MS&quot;;\r\ncolor:#363940\">প্রচুর বই নিয়ে গরীব হয়ে চিলোকোঠায় বসবাস করব তবু এমন রাজা হতে চাই\r\nনা যে বই পড়তে ভালবাসে না ।- জন মেকলে</span><span lang=\"EN\"><o:p></o:p></span></p>\r\n\r\n</div>', 0, '2021-11-04 06:21:49', '2021-11-04 06:21:49'),
(30, 'Speech', '<div style=\"border: 1pt solid rgb(238, 238, 238); padding: 7pt 7pt 7pt 0in; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin-left: 0.25in; margin-right: 0in;\">\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.25in; text-indent: -0.25in; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: none; padding: 0in;\"><span lang=\"EN\" style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Arial Unicode MS&quot;;\r\nmso-fareast-font-family:&quot;Arial Unicode MS&quot;;mso-bidi-font-family:&quot;Arial Unicode MS&quot;;\r\ncolor:#363940\">আমি চাই যে বই পাঠরত অবস্থায় যেন আমার মৃত্যু হয়।- নর্মান মেলর</span><span lang=\"EN\"><o:p></o:p></span></p>\r\n\r\n</div>', 0, '2021-11-04 06:22:21', '2021-11-04 06:22:21'),
(31, 'Speech', 'যারা প্রত্যেক বস্তুরই দাম জানেন\r\nকিন্তু কোনও বস্তুরই প্রকৃত মূল্য জানেন না তারাই সমালোচক। – ওসকার ওয়াইড।', 0, '2021-11-04 06:22:48', '2021-11-07 02:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `meta_name`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 'paginate', '4', NULL, NULL),
(2, 'work_wage', '3.35', NULL, NULL),
(3, 'work_limit', '105', NULL, NULL),
(4, 'maintenance_mode', 'yes', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_01_122420_create_admins_table', 2),
(6, '2021_11_02_074002_create_otp_apis_table', 3),
(7, '2021_11_04_063433_create_advertisements_table', 4),
(8, '2021_11_06_082415_create_payments_table', 5),
(9, '2021_11_07_062930_create_metas_table', 6),
(10, '2021_11_08_054552_create_package_seens_table', 7),
(11, '2021_11_11_052108_create_withdraws_table', 8),
(12, '2021_11_11_094911_create_transactions_table', 9),
(13, '2021_11_20_042603_create_payment_settings_table', 10),
(14, '2021_12_02_104549_create_active_codes_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `otp_apis`
--

CREATE TABLE `otp_apis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otp_apis`
--

INSERT INTO `otp_apis` (`id`, `username`, `password`, `sender`, `api_url`, `country_code`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'roadhelperbd', 'roadhelperbd', '8809612440699', 'http://api.icombd.com/api/v2/sendsms/plaintext', '88', 'Bangladesh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_seens`
--

CREATE TABLE `package_seens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `current_page` int(11) NOT NULL,
  `next_page` int(11) NOT NULL DEFAULT 0,
  `last_page` int(11) NOT NULL DEFAULT 0,
  `per_page` int(11) NOT NULL DEFAULT 0,
  `total_row` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_seens`
--

INSERT INTO `package_seens` (`id`, `user_id`, `current_page`, `next_page`, `last_page`, `per_page`, `total_row`, `created_at`, `updated_at`) VALUES
(83, 23, 1, 2, 3, 4, 11, '2021-12-02 01:17:12', '2021-12-02 01:17:12');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operator_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `operator_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bkash', '9qo1t58cew1636199122.png', '2021-11-06 04:13:32', '2021-11-06 05:45:22'),
(2, 'Nagad', '1bs0jtmuvu1636199029.png', '2021-11-06 04:39:10', '2021-11-06 05:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `user_id`, `payment_id`, `account_number`, `created_at`, `updated_at`) VALUES
(1, 23, 1, '01744460010', '2021-11-19 22:46:41', '2021-11-19 22:47:40'),
(2, 23, 2, '01744460010', '2021-11-19 22:47:21', '2021-11-19 22:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(11,2) NOT NULL DEFAULT 0.00,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `payment_id`, `amount`, `account_number`, `type`, `created_at`, `updated_at`) VALUES
(1, 23, 1, 500.00, '01744460010', 'personal', '2021-11-24 01:13:14', '2021-11-24 01:13:14'),
(2, 23, 1, 500.00, '01744460010', 'agent', '2021-11-24 01:21:30', '2021-11-24 01:21:30'),
(3, 23, 1, 500.00, '01620193118', 'personal', '2021-11-24 01:22:04', '2021-11-24 01:22:04'),
(4, 23, 1, 500.00, '01620193118', 'personal', '2021-11-24 02:19:07', '2021-11-24 02:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` double(11,2) DEFAULT 0.00,
  `today_earn` float(11,2) DEFAULT 0.00,
  `coin` int(11) NOT NULL DEFAULT 0,
  `user_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=active,1=inactive',
  `mobile_otp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `balance`, `today_earn`, `coin`, `user_code`, `referal_code`, `avatar`, `is_active`, `mobile_otp`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'Rasel Rana', '01964719349', 249.80, 0.00, 0, 'RH570855', NULL, 't1n7xfek7a1636182253.jpg', 0, '89851', '$2y$10$trNw47ZbGCSdmuADK.pP1.Ul6j45r7jDTM6b.jyk4nYEY0KUm/X2G', NULL, NULL, '2021-11-02 05:18:24', '2021-12-02 05:01:33'),
(25, 'Rasel Rana', '01830718882', NULL, 0.00, 0, 'RH999906', NULL, NULL, 1, '65029', '$2y$10$x3TIhLan7F7hVSxDI.hSnu2IK1/y/w3RGGNDmSW7FItsldJDINC1C', NULL, NULL, '2021-11-03 04:52:17', '2021-12-02 03:55:11'),
(26, 'Rasel Rana', '01830718882ss', NULL, 0.00, 0, 'RH360207', NULL, NULL, 1, '99831', '$2y$10$3v7x937v1L.HKYBWkv9ei.qwdH4yg4ROlXMhr6ylQyTLvMZsG1Zhq', NULL, NULL, '2021-11-07 03:22:56', '2021-12-02 04:13:12'),
(27, 'Rasel Rana', '01830718882sshghh', NULL, 0.00, 0, 'RH509096', NULL, NULL, 1, '61924', '$2y$10$56wm7kRFKQmDkm6VVItaYuOHuRgAtDxddztWFPw7XSlpaRPisVyDG', NULL, NULL, '2021-11-07 03:23:07', '2021-12-02 03:54:33'),
(29, 'Rasel Rana', '01620193118', 0.00, 0.00, 0, 'RH801695', NULL, NULL, 1, '99578', '$2y$10$d4/wCuzMEwI54SdQZECIwurxVbh5sc2u7tToS3W196jxOzE4w/pqS', NULL, NULL, '2021-12-02 01:41:52', '2021-12-02 03:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(11,2) NOT NULL DEFAULT 0.00,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pendding,1=accept,2=reject',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `payment_id`, `amount`, `account_number`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 23, 1, 500.00, '01620193118', 'personal', 0, '2021-11-11 00:59:46', '2021-11-24 01:22:18'),
(2, 23, 1, 500.00, '01620193118', 'personal', 0, '2021-11-11 01:00:39', '2021-11-24 01:22:19'),
(3, 23, 1, 500.00, '01744460010', 'personal', 0, '2021-11-19 23:35:50', '2021-11-24 01:22:16'),
(4, 23, 1, 500.00, '01744460010', 'personal', 0, '2021-11-19 23:36:33', '2021-11-24 01:22:15'),
(5, 23, 1, 500.00, '01744460010', 'personal', 0, '2021-11-19 23:36:42', '2021-11-24 01:22:11'),
(6, 23, 1, 500.00, '01620193118', 'personal', 1, '2021-11-19 23:39:19', '2021-11-24 02:19:07'),
(7, 23, 1, 500.00, '01744460010', 'agent', 0, '2021-11-20 05:56:36', '2021-11-24 01:22:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_codes`
--
ALTER TABLE `active_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `active_codes_code_unique` (`code`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_apis`
--
ALTER TABLE `otp_apis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_seens`
--
ALTER TABLE `package_seens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_seens_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_user_code_unique` (`user_code`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdraws_user_id_foreign` (`user_id`),
  ADD KEY `withdraws_payment_id_foreign` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_codes`
--
ALTER TABLE `active_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `otp_apis`
--
ALTER TABLE `otp_apis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_seens`
--
ALTER TABLE `package_seens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_seens`
--
ALTER TABLE `package_seens`
  ADD CONSTRAINT `package_seens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD CONSTRAINT `withdraws_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `withdraws_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
