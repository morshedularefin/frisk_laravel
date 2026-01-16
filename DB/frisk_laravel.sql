-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2026 at 05:01 AM
-- Server version: 8.0.40
-- PHP Version: 8.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frisk_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `avatar`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin_1767838824.jpg', 'Super Admin', 'admin@example.com', '2026-01-05 02:56:17', '$2y$12$3hi30oSUpg0vr8LsnLi.9.pTZ3EOSn.uS/zBn2bBw0nPwanG5oNSy', 'KzMKoiIomS3w8hYXUEscLpoJSfjBTDJWbfLj7SG08AF9Ocml8Eg19JE6sDWE', '2026-01-05 02:56:17', '2026-01-07 20:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('frisk-cache-ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1768287083),
('frisk-cache-ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1768287083;', 1768287083),
('frisk-cache-asasd@dsad.asd|127.0.0.1', 'i:1;', 1768278854),
('frisk-cache-asasd@dsad.asd|127.0.0.1:timer', 'i:1768278854;', 1768278854),
('frisk-cache-asd@das.asd|127.0.0.1', 'i:1;', 1768278547),
('frisk-cache-asd@das.asd|127.0.0.1:timer', 'i:1768278547;', 1768278547),
('frisk-cache-c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:2;', 1768287208),
('frisk-cache-c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1768287208;', 1768287208),
('frisk-cache-fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'i:1;', 1768288282),
('frisk-cache-fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f:timer', 'i:1768288282;', 1768288282),
('laravel-cache-1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1767600375),
('laravel-cache-1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1767600375;', 1767600375),
('laravel-cache-asd@das.asd|127.0.0.1', 'i:1;', 1767752327),
('laravel-cache-asd@das.asd|127.0.0.1:timer', 'i:1767752327;', 1767752327),
('laravel-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1767600451),
('laravel-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1767600451;', 1767600451);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marquees`
--

CREATE TABLE `marquees` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marquees`
--

INSERT INTO `marquees` (`id`, `text`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Crafting Your Vision', NULL, '2026-01-14 00:16:51', '2026-01-14 00:30:29'),
(2, 'Building Your Future', 'https://www.google.com/', '2026-01-14 00:17:03', '2026-01-14 00:28:40'),
(3, 'Defining Your Success', 'https://www.google.com/', '2026-01-14 00:17:14', '2026-01-14 00:28:42'),
(4, 'Scaling Your Growth', 'https://www.google.com/', '2026-01-14 00:17:24', '2026-01-14 00:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_04_044511_create_admins_table', 2),
(5, '2026_01_13_111526_add_extra_fields_to_users_table', 3),
(6, '2026_01_14_014953_create_testimonials_table', 4),
(7, '2026_01_14_061039_create_marquees_table', 5),
(8, '2026_01_14_123122_create_team_members_table', 6),
(9, '2026_01_16_025630_create_packages_table', 7),
(10, '2026_01_16_043546_create_package_features_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `duration`, `description`, `button_text`, `button_link`, `item_order`, `created_at`, `updated_at`) VALUES
(1, 'Standard', 39.00, 'mo', 'Discere impedit ei has, his aperiri antiopam contentiones at.', 'CONTACT US', '#', 1, '2026-01-15 21:11:54', '2026-01-15 22:32:04'),
(2, 'Premium', 79.00, 'mo', 'Vim no facilisi gloriatur. Et mel accommodare philosophiae.', 'CONTACT US', '#', 2, '2026-01-15 21:12:25', '2026-01-15 22:32:07'),
(3, 'Gold', 99.00, 'mo', 'Cum ipsum eleifend repudiare at, cu eam integre interpre.', 'CONTACT US', '#', 3, '2026-01-15 21:12:44', '2026-01-15 22:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `package_features`
--

CREATE TABLE `package_features` (
  `id` bigint UNSIGNED NOT NULL,
  `package_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_features`
--

INSERT INTO `package_features` (`id`, `package_id`, `name`, `availability`, `item_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'WEB & MOBILE', 'Yes', 1, '2026-01-15 22:49:05', '2026-01-15 22:53:11'),
(2, 1, 'FREE CUSTOM DOMAIN', 'Yes', 2, '2026-01-15 22:53:18', '2026-01-15 22:53:29'),
(3, 1, 'HOSTING SETUP', 'No', 3, '2026-01-15 22:53:43', '2026-01-15 22:55:48'),
(4, 1, 'DIRECT SUPPORT', 'No', 4, '2026-01-15 22:54:04', '2026-01-15 22:55:56'),
(5, 1, 'WEB DESIGN', 'No', 5, '2026-01-15 22:54:17', '2026-01-15 22:54:17'),
(6, 1, 'WEB DEVELOPMENT', 'No', 6, '2026-01-15 22:54:28', '2026-01-15 22:54:49'),
(7, 2, 'WEB & MOBILE', 'Yes', 1, '2026-01-15 22:55:27', '2026-01-15 22:55:27'),
(8, 2, 'FREE CUSTOM DOMAIN', 'Yes', 2, '2026-01-15 22:55:35', '2026-01-15 22:55:35'),
(9, 2, 'HOSTING SETUP', 'Yes', 3, '2026-01-15 22:56:06', '2026-01-15 22:56:06'),
(10, 2, 'DIRECT SUPPORT', 'Yes', 4, '2026-01-15 22:56:14', '2026-01-15 22:56:14'),
(11, 2, 'WEB DESIGN', 'No', 5, '2026-01-15 22:56:23', '2026-01-15 22:56:23'),
(12, 2, 'WEB DEVELOPMENT', 'No', 6, '2026-01-15 22:56:32', '2026-01-15 22:56:32'),
(13, 3, 'WEB & MOBILE', 'Yes', 1, '2026-01-15 22:56:52', '2026-01-15 22:56:52'),
(14, 3, 'FREE CUSTOM DOMAIN', 'Yes', 2, '2026-01-15 22:56:58', '2026-01-15 22:56:58'),
(15, 3, 'HOSTING SETUP', 'Yes', 3, '2026-01-15 22:57:04', '2026-01-15 22:57:04'),
(16, 3, 'DIRECT SUPPORT', 'Yes', 4, '2026-01-15 22:57:11', '2026-01-15 22:57:11'),
(17, 3, 'WEB DESIGN', 'Yes', 5, '2026-01-15 22:57:17', '2026-01-15 22:57:17'),
(18, 3, 'WEB DEVELOPMENT', 'Yes', 6, '2026-01-15 22:57:23', '2026-01-15 22:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CC3AdiCLimKy6G9mfSQpC2tSGjkCTLCyPeUBvr1m', 2, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTHljS2JWVXR5bTBwRkNFWHN5ZE5DTGJiM3dKbFFiVm5xdFU5czFyYyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vcHJpY2luZy1wbGFuL2luZGV4IjtzOjU6InJvdXRlIjtzOjI0OiJhZG1pbi5wcmljaW5nLXBsYW4uaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1768539684);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `photo`, `name`, `slug`, `position`, `biography`, `email`, `phone`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'team_member_1768395419.png', 'Jos Carrington', 'jos-carrington', 'Software Engineer', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'joseph@example.com', '650-384-3367', '#', '#', '#', '#', '#', '2026-01-14 06:56:59', '2026-01-14 07:28:02'),
(2, 'team_member_1768395638.png', 'Anthony Wood', 'anthony-wood', 'Web Developer', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'anthony@example.com', '815-922-2180', '#', '#', '#', '#', '#', '2026-01-14 07:00:38', '2026-01-14 07:27:58'),
(3, 'team_member_1768395691.png', 'Lester Lorenz', 'lester-lorenz', 'Web Designer', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'lester@example.com', '605-226-6251', '#', '#', '#', '#', '#', '2026-01-14 07:01:31', '2026-01-14 07:01:31'),
(4, 'team_member_1768395743.png', 'Jacob Woods', 'jacob-woods', 'Product Manager', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'jacob@example.com', '615-360-9249', '#', '#', '#', '#', '#', '2026-01-14 07:02:23', '2026-01-14 22:51:50'),
(5, 'team_member_1768395800.png', 'Gerald Cleve', 'gerald-cleve', 'Senior Engineer', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'gerald@example.com', '607-973-0647', '#', '#', '#', '#', NULL, '2026-01-14 07:03:20', '2026-01-14 07:28:17'),
(7, 'team_member_1768397747.png', 'Daniel Henson', 'daniel-henson', 'UI Designer', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'daniel@example.com', '678-782-2655', '#', '#', '#', '#', '#', '2026-01-14 07:35:47', '2026-01-14 07:35:47'),
(8, 'team_member_1768397794.png', 'Andy Bumpus', 'andy-bumpus', 'Graphic Designer', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'andy@example.com', '954-655-3589', '#', '#', '#', '#', '#', '2026-01-14 07:36:34', '2026-01-14 07:36:34'),
(9, 'team_member_1768397851.png', 'Will Reynolds', 'will-reynolds', 'SEO Expert', 'Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.\r\n\r\nPrimis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.', 'will@example.com', '304-617-1657', '#', '#', '#', '#', '#', '2026-01-14 07:37:31', '2026-01-14 07:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Daniyel Karlos', 'Dairy Scientist, System Star', '\"Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis.\"', '2026-01-13 20:12:38', '2026-01-13 22:07:13'),
(2, 'Chris Williams', 'Personal Technician, Cardinal Stores', '\"Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse.\"', '2026-01-13 20:14:19', '2026-01-13 22:07:26'),
(3, 'Jerry Rivera', 'Deckhand, Luskin', '\"Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at.\"', '2026-01-13 20:15:12', '2026-01-13 22:05:47'),
(5, 'Columbus Hadden', 'Aerobics Instructor, Wise Solutions', '\"Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam.\"', '2026-01-13 22:06:47', '2026-01-13 22:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `phone`, `address`, `country`, `state`, `city`, `zip_code`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Peter', 'peter@example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-05 02:07:08', '$2y$12$JjrV8qdamku3C1cDZ7G.de0Gw9rimbmLnf37.xePLup5XdkwHUyuO', 'xDzqChSLIrkcmJusFb7oaHI5okQ0illpmrApmBem6r28pvfrtsuGBluHo5bo', '2026-01-05 02:00:10', '2026-01-12 23:02:26'),
(4, NULL, 'Smith', 'smith@example.com', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-05 02:05:15', '$2y$12$AyVYI3G9vNS3dv2Pfh5mSuXGD022cjtLOIi646/jmV3BN2vfpdAri', NULL, '2026-01-05 02:03:25', '2026-01-05 02:05:15'),
(8, 'user_1768304188.png', 'David Beckham', 'david@example.com', '+1 (169) 207-3811', '23, AA Street Lane', 'USA', 'CA', 'NYC', '81076', '2026-01-13 01:10:22', '$2y$12$iqGupx7egH03QhfArVov0eTNLM5N6EannFjP8MnCz0F8uyM6YJQYu', NULL, '2026-01-13 01:10:06', '2026-01-13 05:36:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquees`
--
ALTER TABLE `marquees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_features`
--
ALTER TABLE `package_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_members_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marquees`
--
ALTER TABLE `marquees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_features`
--
ALTER TABLE `package_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
