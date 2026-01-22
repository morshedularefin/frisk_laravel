-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2026 at 03:24 PM
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
(1, 'admin_1767838824.jpg', 'Morshedul Arefin', 'admin@example.com', '2026-01-05 02:56:17', '$2y$12$3hi30oSUpg0vr8LsnLi.9.pTZ3EOSn.uS/zBn2bBw0nPwanG5oNSy', 'KzMKoiIomS3w8hYXUEscLpoJSfjBTDJWbfLj7SG08AF9Ocml8Eg19JE6sDWE', '2026-01-05 02:56:17', '2026-01-18 21:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `description`, `year`, `tag`, `url`, `item_order`, `created_at`, `updated_at`) VALUES
(1, 'New York Design Week', 'Primis malorum an pri. Meliore nostrum ex nam quando.', '2017', 'MAIN DEVELOPER', NULL, 1, '2026-01-16 23:01:42', '2026-01-16 23:24:13'),
(2, 'The Blue Design Awards', 'Primis malorum an pri. Meliore nostrum ex nam quando.', '2021', 'ANIMATOR', NULL, 2, '2026-01-16 23:02:14', '2026-01-16 23:24:16'),
(3, 'Best Web Flow', 'Primis malorum an pri. Meliore nostrum ex nam quando.', '2023', 'MAIN DESIGNER', NULL, 3, '2026-01-16 23:02:40', '2026-01-16 23:24:18'),
(4, 'Berlin Interactive Award', 'Primis malorum an pri. Meliore nostrum ex nam quando.', '2025', 'BEST INNOVATIONS', NULL, 4, '2026-01-16 23:03:10', '2026-01-16 23:24:21');

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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_page_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `photo`, `url`, `home_page_2`, `home_page_5`, `about_page`, `created_at`, `updated_at`) VALUES
(1, 'client_1768545349.svg', NULL, 'Yes', 'Yes', 'Yes', '2026-01-16 00:35:49', '2026-01-16 17:49:37'),
(2, 'client_1768545359.svg', '#', 'Yes', 'Yes', 'Yes', '2026-01-16 00:35:59', '2026-01-16 17:47:03'),
(3, 'client_1768545365.svg', '#', 'Yes', 'Yes', 'Yes', '2026-01-16 00:36:05', '2026-01-16 17:47:06'),
(4, 'client_1768545371.svg', '#', 'Yes', 'Yes', 'Yes', '2026-01-16 00:36:11', '2026-01-16 17:47:15'),
(5, 'client_1768545377.svg', '#', 'Yes', 'Yes', 'Yes', '2026-01-16 00:36:17', '2026-01-16 17:47:20'),
(6, 'client_1768545383.svg', '#', 'Yes', 'Yes', 'Yes', '2026-01-16 00:36:23', '2026-01-16 17:47:25'),
(7, 'client_1768545389.svg', '#', 'Yes', 'No', 'Yes', '2026-01-16 00:36:29', '2026-01-16 17:47:31'),
(8, 'client_1768545396.svg', '#', 'Yes', 'No', 'Yes', '2026-01-16 00:36:36', '2026-01-16 17:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Uta Medina', 'uta_medina@example.com', 'An aperiri eligendi antiopam sed, novum maiorum qui et. Et cum verear regione sensibu.', 'Approved', '2026-01-19 02:31:10', '2026-01-19 03:46:13'),
(2, 4, 'TaShya Boyle', 'wacoqygom@mailinator.com', 'Eos et solum dolor fierent, dicit choro definitiones ei mei. Eu persius fabellas perfecto est.', 'Approved', '2026-01-19 02:32:35', '2026-01-19 02:32:35'),
(10, 3, 'Alexis Delgado', 'johemohimu@mailinator.com', 'Veri debet lobortis ad sed. Vitae lobortis vel ad, sea audiam praesent iudicabit ut.', 'Approved', '2026-01-19 03:37:35', '2026-01-19 03:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint UNSIGNED NOT NULL,
  `number1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `number1`, `title1`, `text1`, `number2`, `title2`, `text2`, `number3`, `title3`, `text3`, `created_at`, `updated_at`) VALUES
(1, '35', 'Years of Experience', 'We are a creative agency brands building insightful strategy, creating unique designs helping.', '370', 'Successful Projects', 'We are a creative agency brands building insightful strategy, creating unique designs helping.', '145', 'Satisfied Customers', 'We are a creative agency brands building insightful strategy, creating unique designs helping.', NULL, '2026-01-17 00:38:54');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_order` int NOT NULL DEFAULT '0',
  `faq_page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `home_page_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `home_page_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `item_order`, `faq_page`, `home_page_1`, `home_page_5`, `created_at`, `updated_at`) VALUES
(1, 'Who owns the website and code once the project is finished?', 'Upon final payment and project completion, you retain 100% ownership of the website, including all source code, design assets, and database structures created during the project.', 1, 'Yes', 'No', 'No', '2026-01-15 23:40:26', '2026-01-15 23:44:04'),
(2, 'Do you provide a Non-Disclosure Agreement (NDA)?', 'We prioritize the security of your business ideas and are happy to sign a formal NDA before discussing any sensitive project details to ensure your intellectual property is protected.', 2, 'Yes', 'No', 'No', '2026-01-15 23:41:51', '2026-01-15 23:44:08'),
(3, 'What is your typical design and development process?', 'Our process begins with a discovery phase to define goals, followed by wireframing, UI/UX design, client feedback loops, and finally, the technical development and testing of the approved designs.', 3, 'Yes', 'No', 'No', '2026-01-15 23:44:29', '2026-01-15 23:44:29'),
(4, 'Can you integrate third-party APIs and services?', 'We have extensive experience integrating various third-party services, including payment gateways like Stripe, CRM systems, and social media APIs, to extend the functionality of your application.', 4, 'Yes', 'No', 'No', '2026-01-15 23:44:49', '2026-01-15 23:44:49'),
(5, 'How do you handle website migrations from other platforms?', 'We manage the entire migration process by ensuring that all data, SEO equity, and files are safely transferred to the new environment with minimal downtime for your business operations.', 5, 'Yes', 'No', 'No', '2026-01-15 23:45:09', '2026-01-15 23:45:09'),
(6, 'Do you provide training on how to manage the website?', 'Once the project is live, we provide a personalized training session or video walkthrough to ensure you and your team are comfortable managing content and updating your new digital platform.', 6, 'Yes', 'No', 'Yes', '2026-01-15 23:45:33', '2026-01-15 23:57:40'),
(7, 'What happens if I need changes after the site is live?', 'We offer a dedicated warranty period for bug fixes post-launch, and any additional feature requests can be handled through a separate small-task agreement or an ongoing maintenance plan.', 7, 'Yes', 'No', 'Yes', '2026-01-15 23:45:52', '2026-01-15 23:57:46'),
(8, 'Branding Design', 'We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating.', 8, 'No', 'Yes', 'No', '2026-01-15 23:46:27', '2026-01-15 23:58:14'),
(9, 'Illustration Modelling', 'We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating.', 9, 'No', 'Yes', 'No', '2026-01-15 23:46:48', '2026-01-15 23:58:29'),
(10, 'Website Development', 'We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating.', 10, 'No', 'Yes', 'No', '2026-01-15 23:47:10', '2026-01-15 23:58:46'),
(11, 'Do you offer ongoing maintenance and support?', 'Yes, we provide post-launch support packages that include security updates, performance monitoring, and regular backups to ensure your digital assets remain healthy and functional.', 11, 'No', 'No', 'Yes', '2026-01-15 23:47:42', '2026-01-15 23:47:42'),
(12, 'How do you ensure the security of my website?', 'We implement industry-standard security protocols, including SSL certificates, data encryption, and secure coding practices within the Laravel framework to protect your site against vulnerabilities.', 12, 'No', 'No', 'Yes', '2026-01-15 23:48:08', '2026-01-15 23:48:08'),
(13, 'Can you help me update an existing website?', 'Absolutely, we can perform comprehensive audits of your current site to implement modern design updates, fix technical bugs, or migrate your system to a more powerful framework.', 13, 'No', 'No', 'Yes', '2026-01-15 23:48:28', '2026-01-15 23:48:28'),
(15, 'Digital Marketing', 'We design high quality websites that make users come back for more. A good website tells a story that will make users fully immerse themselves operating.', 14, 'No', 'Yes', 'No', '2026-01-15 23:59:10', '2026-01-15 23:59:10');

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
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(10, '2026_01_16_043546_create_package_features_table', 8),
(11, '2026_01_16_052700_create_faqs_table', 9),
(12, '2026_01_16_062535_create_clients_table', 10),
(13, '2026_01_17_045359_create_awards_table', 11),
(14, '2026_01_17_060524_create_counters_table', 12),
(15, '2026_01_17_105958_create_skills_table', 13),
(16, '2026_01_18_012328_create_services_table', 14),
(17, '2026_01_18_044301_create_portfolios_table', 15),
(18, '2026_01_18_074801_create_portfolio_photos_table', 16),
(19, '2026_01_18_095159_create_post_categories_table', 17),
(20, '2026_01_18_102722_create_posts_table', 18),
(21, '2026_01_19_082034_create_comments_table', 19),
(22, '2026_01_19_101802_create_replies_table', 20),
(23, '2026_01_20_015012_create_product_categories_table', 21),
(24, '2026_01_20_034302_create_products_table', 22),
(25, '2026_01_22_053902_create_product_photos_table', 23),
(26, '2026_01_22_060604_create_product_features_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, 1, 'HOSTING SETUP', 'No', 4, '2026-01-15 22:53:43', '2026-01-15 23:06:20'),
(4, 1, 'DIRECT SUPPORT', 'No', 3, '2026-01-15 22:54:04', '2026-01-15 23:06:16'),
(5, 1, 'WEB DESIGN', 'No', 5, '2026-01-15 22:54:17', '2026-01-15 22:54:17'),
(6, 1, 'WEB DEVELOPMENT', 'No', 6, '2026-01-15 22:54:28', '2026-01-15 22:54:49'),
(7, 2, 'WEB & MOBILE', 'Yes', 1, '2026-01-15 22:55:27', '2026-01-15 22:55:27'),
(8, 2, 'FREE CUSTOM DOMAIN', 'Yes', 2, '2026-01-15 22:55:35', '2026-01-15 22:55:35'),
(9, 2, 'HOSTING SETUP', 'Yes', 4, '2026-01-15 22:56:06', '2026-01-15 23:08:01'),
(10, 2, 'DIRECT SUPPORT', 'Yes', 3, '2026-01-15 22:56:14', '2026-01-15 23:07:57'),
(11, 2, 'WEB DESIGN', 'No', 5, '2026-01-15 22:56:23', '2026-01-15 22:56:23'),
(12, 2, 'WEB DEVELOPMENT', 'No', 6, '2026-01-15 22:56:32', '2026-01-15 22:56:32'),
(13, 3, 'WEB & MOBILE', 'Yes', 1, '2026-01-15 22:56:52', '2026-01-15 22:56:52'),
(14, 3, 'FREE CUSTOM DOMAIN', 'Yes', 2, '2026-01-15 22:56:58', '2026-01-15 22:56:58'),
(15, 3, 'HOSTING SETUP', 'Yes', 4, '2026-01-15 22:57:04', '2026-01-15 23:08:19'),
(16, 3, 'DIRECT SUPPORT', 'Yes', 3, '2026-01-15 22:57:11', '2026-01-15 23:08:15'),
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_start_date` date DEFAULT NULL,
  `project_end_date` date DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_order` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `photo`, `title`, `slug`, `description`, `category`, `software`, `project_start_date`, `project_end_date`, `client`, `website`, `item_order`, `created_at`, `updated_at`) VALUES
(1, 'portfolio_1768712693.jpg', 'Decentralized Platform', 'decentralized-platform', '<p>Ea unum admodum periculis mea, ludus detracto duo ea. Usu dicunt vocibus no. Et vim harum menandri, habeo complectitur per te. Usu ea suas iudico evertitur, in nam possim atomorum. Sed ad munere corpora scaevola, clita assentior ne nec. Vis nobis omnium ullamcorper et.</p>\r\n<p>At nihil clita eos, graeci molestiae aliquando ea has. Nec tamquam accusata intellegebat ei, mel quem diam ut. Sit modus utinam ea. Has at nullam moderatius, ea natum porro ponderum eam. Sint repudiandae vix ei, ius persius civibus et.</p>\r\n<p>Minim libris iuvaret ex qui. Ne cotidieque referrentur philosophia duo, sit ea maluisset splendide definitiones. Esse senserit mea at, mea ei quas molestie elaboraret, has ad erat numquam perpetua. Accusata maluisset appellantur sed ad, reque erroribus complectitur an eum.</p>\r\n<p>Pri no fabulas maiestatis reprehendunt, nisl nusquam vivendum eu qui. Dolorum noluisse probatus at cum. Vis decore labore et. Quo accumsan percipit efficiantur te, assum singulis abhorreant mea in, esse atqui moderatius te usu. Vix et sint persius efficiendi.</p>', 'Branding / Development / Marketing', 'Figma, PHP, Laravel', '2021-02-13', '2021-08-24', 'ABC Company', 'https://www.google.com', 3, '2026-01-17 23:04:53', '2026-01-18 00:48:35'),
(2, 'portfolio_1768713416.png', 'App for Business', 'app-for-business', '<p>Ea unum admodum periculis mea, ludus detracto duo ea. Usu dicunt vocibus no. Et vim harum menandri, habeo complectitur per te. Usu ea suas iudico evertitur, in nam possim atomorum. Sed ad munere corpora scaevola, clita assentior ne nec. Vis nobis omnium ullamcorper et.</p>\r\n<p>At nihil clita eos, graeci molestiae aliquando ea has. Nec tamquam accusata intellegebat ei, mel quem diam ut. Sit modus utinam ea. Has at nullam moderatius, ea natum porro ponderum eam. Sint repudiandae vix ei, ius persius civibus et.</p>\r\n<p>Minim libris iuvaret ex qui. Ne cotidieque referrentur philosophia duo, sit ea maluisset splendide definitiones. Esse senserit mea at, mea ei quas molestie elaboraret, has ad erat numquam perpetua. Accusata maluisset appellantur sed ad, reque erroribus complectitur an eum.</p>\r\n<p>Pri no fabulas maiestatis reprehendunt, nisl nusquam vivendum eu qui. Dolorum noluisse probatus at cum. Vis decore labore et. Quo accumsan percipit efficiantur te, assum singulis abhorreant mea in, esse atqui moderatius te usu. Vix et sint persius efficiendi.</p>', 'Development / Marketing', 'PHP, Laravel', '2025-07-18', '2026-01-06', 'ABC Company', 'https://www.google.com', 5, '2026-01-17 23:16:56', '2026-01-18 00:04:41'),
(3, 'portfolio_1768713506.jpg', 'Educational Platform', 'educational-platform', '<p>Ea unum admodum periculis mea, ludus detracto duo ea. Usu dicunt vocibus no. Et vim harum menandri, habeo complectitur per te. Usu ea suas iudico evertitur, in nam possim atomorum. Sed ad munere corpora scaevola, clita assentior ne nec. Vis nobis omnium ullamcorper et.</p>\r\n<p>At nihil clita eos, graeci molestiae aliquando ea has. Nec tamquam accusata intellegebat ei, mel quem diam ut. Sit modus utinam ea. Has at nullam moderatius, ea natum porro ponderum eam. Sint repudiandae vix ei, ius persius civibus et.</p>\r\n<p>Minim libris iuvaret ex qui. Ne cotidieque referrentur philosophia duo, sit ea maluisset splendide definitiones. Esse senserit mea at, mea ei quas molestie elaboraret, has ad erat numquam perpetua. Accusata maluisset appellantur sed ad, reque erroribus complectitur an eum.</p>\r\n<p>Pri no fabulas maiestatis reprehendunt, nisl nusquam vivendum eu qui. Dolorum noluisse probatus at cum. Vis decore labore et. Quo accumsan percipit efficiantur te, assum singulis abhorreant mea in, esse atqui moderatius te usu. Vix et sint persius efficiendi.</p>', 'Development / Marketing', 'PHP, Figma, Laravel', '2017-09-26', '2018-04-02', 'ABC Company', 'https://www.google.com', 1, '2026-01-17 23:18:26', '2026-01-18 00:48:01'),
(4, 'portfolio_1768713595.jpg', 'Nova Scotia Winery', 'nova-scotia-winery', '<p>Ea unum admodum periculis mea, ludus detracto duo ea. Usu dicunt vocibus no. Et vim harum menandri, habeo complectitur per te. Usu ea suas iudico evertitur, in nam possim atomorum. Sed ad munere corpora scaevola, clita assentior ne nec. Vis nobis omnium ullamcorper et.</p>\r\n<p>At nihil clita eos, graeci molestiae aliquando ea has. Nec tamquam accusata intellegebat ei, mel quem diam ut. Sit modus utinam ea. Has at nullam moderatius, ea natum porro ponderum eam. Sint repudiandae vix ei, ius persius civibus et.</p>\r\n<p>Minim libris iuvaret ex qui. Ne cotidieque referrentur philosophia duo, sit ea maluisset splendide definitiones. Esse senserit mea at, mea ei quas molestie elaboraret, has ad erat numquam perpetua. Accusata maluisset appellantur sed ad, reque erroribus complectitur an eum.</p>\r\n<p>Pri no fabulas maiestatis reprehendunt, nisl nusquam vivendum eu qui. Dolorum noluisse probatus at cum. Vis decore labore et. Quo accumsan percipit efficiantur te, assum singulis abhorreant mea in, esse atqui moderatius te usu. Vix et sint persius efficiendi.</p>', 'Branding / Development / Marketing', 'PHP, Laravel, Figma', '2025-05-21', '2025-11-28', 'ABC Company', 'https://www.google.com', 4, '2026-01-17 23:19:55', '2026-01-18 00:15:49'),
(5, 'portfolio_1768713668.jpg', 'Caramba Product', 'caramba-product', '<p>Ea unum admodum periculis mea, ludus detracto duo ea. Usu dicunt vocibus no. Et vim harum menandri, habeo complectitur per te. Usu ea suas iudico evertitur, in nam possim atomorum. Sed ad munere corpora scaevola, clita assentior ne nec. Vis nobis omnium ullamcorper et.</p>\r\n<p>At nihil clita eos, graeci molestiae aliquando ea has. Nec tamquam accusata intellegebat ei, mel quem diam ut. Sit modus utinam ea. Has at nullam moderatius, ea natum porro ponderum eam. Sint repudiandae vix ei, ius persius civibus et.</p>\r\n<p>Minim libris iuvaret ex qui. Ne cotidieque referrentur philosophia duo, sit ea maluisset splendide definitiones. Esse senserit mea at, mea ei quas molestie elaboraret, has ad erat numquam perpetua. Accusata maluisset appellantur sed ad, reque erroribus complectitur an eum.</p>\r\n<p>Pri no fabulas maiestatis reprehendunt, nisl nusquam vivendum eu qui. Dolorum noluisse probatus at cum. Vis decore labore et. Quo accumsan percipit efficiantur te, assum singulis abhorreant mea in, esse atqui moderatius te usu. Vix et sint persius efficiendi.</p>', 'Branding / Development / Marketing', 'Figma, Laravel', '2016-12-01', '2019-12-30', 'ABC Company', 'https://www.google.com', 2, '2026-01-17 23:21:08', '2026-01-18 00:48:20'),
(6, 'portfolio_1768713751.png', 'Trading Website Design', 'trading-website-design', '<p>Ea unum admodum periculis mea, ludus detracto duo ea. Usu dicunt vocibus no. Et vim harum menandri, habeo complectitur per te. Usu ea suas iudico evertitur, in nam possim atomorum. Sed ad munere corpora scaevola, clita assentior ne nec. Vis nobis omnium ullamcorper et.</p>\r\n<p>At nihil clita eos, graeci molestiae aliquando ea has. Nec tamquam accusata intellegebat ei, mel quem diam ut. Sit modus utinam ea. Has at nullam moderatius, ea natum porro ponderum eam. Sint repudiandae vix ei, ius persius civibus et.</p>\r\n<p>Minim libris iuvaret ex qui. Ne cotidieque referrentur philosophia duo, sit ea maluisset splendide definitiones. Esse senserit mea at, mea ei quas molestie elaboraret, has ad erat numquam perpetua. Accusata maluisset appellantur sed ad, reque erroribus complectitur an eum.</p>\r\n<p>Pri no fabulas maiestatis reprehendunt, nisl nusquam vivendum eu qui. Dolorum noluisse probatus at cum. Vis decore labore et. Quo accumsan percipit efficiantur te, assum singulis abhorreant mea in, esse atqui moderatius te usu. Vix et sint persius efficiendi.</p>', 'Branding / Development / Marketing', 'Laravel, Figma', '2026-01-10', NULL, 'ABC Company', 'https://www.google.com', 6, '2026-01-17 23:22:31', '2026-01-18 00:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_photos`
--

CREATE TABLE `portfolio_photos` (
  `id` bigint UNSIGNED NOT NULL,
  `portfolio_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_photos`
--

INSERT INTO `portfolio_photos` (`id`, `portfolio_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 3, 'portfolio_photo_1768725447.png', '2026-01-18 02:37:27', '2026-01-18 02:37:27'),
(2, 3, 'portfolio_photo_1768725453.png', '2026-01-18 02:37:33', '2026-01-18 02:37:33'),
(4, 5, 'portfolio_photo_1768725648.png', '2026-01-18 02:40:48', '2026-01-18 02:40:48'),
(5, 5, 'portfolio_photo_1768725656.png', '2026-01-18 02:40:56', '2026-01-18 02:40:56'),
(6, 1, 'portfolio_photo_1768725736.png', '2026-01-18 02:42:16', '2026-01-18 02:42:16'),
(7, 1, 'portfolio_photo_1768725741.png', '2026-01-18 02:42:21', '2026-01-18 02:42:21'),
(8, 4, 'portfolio_photo_1768725816.png', '2026-01-18 02:43:36', '2026-01-18 02:43:36'),
(9, 4, 'portfolio_photo_1768725820.png', '2026-01-18 02:43:40', '2026-01-18 02:43:40'),
(10, 2, 'portfolio_photo_1768725896.png', '2026-01-18 02:44:56', '2026-01-18 02:44:56'),
(11, 2, 'portfolio_photo_1768725900.png', '2026-01-18 02:45:00', '2026-01-18 02:45:00'),
(12, 6, 'portfolio_photo_1768725967.png', '2026-01-18 02:46:07', '2026-01-18 02:46:07'),
(13, 6, 'portfolio_photo_1768725971.png', '2026-01-18 02:46:11', '2026-01-18 02:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `post_category_id` bigint UNSIGNED NOT NULL,
  `admin_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category_id`, `admin_id`, `title`, `slug`, `short_description`, `description`, `photo`, `tags`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Everything You Should Know About Return', 'everything-you-should-know-about-return', 'Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.', '<p>Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.</p>\r\n<p>Quo at ornatus praesent expetendis. Eam fabulas consectetuer reprehendunt in. Affert saperet duo ne. Eum ut hinc gubergren, in veri putent legimus sea.</p>\r\n<p>An aperiri eligendi antiopam sed, novum maiorum qui et. Et cum verear regione sensibus, te autem novum tritani quo. Ut qui dolor efficiantur, sed solet instructior et. Autem sonet affert est an, an vix iuvaret bonorum elaboraret.</p>\r\n<p>Eos et solum dolor fierent, dicit choro definitiones ei mei. Eu persius fabellas perfecto est. Bonorum delectus urbanitas eos ei. Est primis habemus conclusionemque et, quodsi saperet necessitatibus ea mei, elitr tollit voluptaria vis id.</p>\r\n<p>Vidisse labitur propriae nec no, te pro viris graeci copiosae. Vim an animal fastidii scriptorem. Verterem ullamcorper no sed. Ea sea dicta quidam saperet.</p>\r\n<p>Veri debet lobortis ad sed. Vitae lobortis vel ad, sea audiam praesent iudicabit ut. Nam prompta iracundia ea, ex esse melius omittantur vis. Ex eam odio amet graeco, ea mei omnes explicari definiebas. Libris ponderum interesset ei nec, pri ei mentitum copiosae.</p>\r\n<p>Commodo voluptatum ei vel. Est et oratio graeco, dolore ornatus praesent eu nam. Ut prima delectus vix, usu et porro aperiam appetere. Qui diam ancillae id. Falli decore vel an, no vis nemore contentiones. Phaedrum principes nam cu, ius tation saperet interesset an.</p>', 'post_1768734173.png', 'company,color,brand', '2026-01-18 05:02:53', '2026-01-18 19:42:34'),
(2, 1, 1, '6 Big Commerce Design Tips For Big Results', 'big-commerce-design-tips', 'Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.', '<p>Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.</p>\r\n<p>Quo at ornatus praesent expetendis. Eam fabulas consectetuer reprehendunt in. Affert saperet duo ne. Eum ut hinc gubergren, in veri putent legimus sea.</p>\r\n<p>An aperiri eligendi antiopam sed, novum maiorum qui et. Et cum verear regione sensibus, te autem novum tritani quo. Ut qui dolor efficiantur, sed solet instructior et. Autem sonet affert est an, an vix iuvaret bonorum elaboraret.</p>\r\n<p>Eos et solum dolor fierent, dicit choro definitiones ei mei. Eu persius fabellas perfecto est. Bonorum delectus urbanitas eos ei. Est primis habemus conclusionemque et, quodsi saperet necessitatibus ea mei, elitr tollit voluptaria vis id.</p>\r\n<p>Vidisse labitur propriae nec no, te pro viris graeci copiosae. Vim an animal fastidii scriptorem. Verterem ullamcorper no sed. Ea sea dicta quidam saperet.</p>\r\n<p>Veri debet lobortis ad sed. Vitae lobortis vel ad, sea audiam praesent iudicabit ut. Nam prompta iracundia ea, ex esse melius omittantur vis. Ex eam odio amet graeco, ea mei omnes explicari definiebas. Libris ponderum interesset ei nec, pri ei mentitum copiosae.</p>\r\n<p>Commodo voluptatum ei vel. Est et oratio graeco, dolore ornatus praesent eu nam. Ut prima delectus vix, usu et porro aperiam appetere. Qui diam ancillae id. Falli decore vel an, no vis nemore contentiones. Phaedrum principes nam cu, ius tation saperet interesset an.</p>', 'post_1768787032.png', 'design,tips,ecommerce', '2026-01-18 19:43:52', '2026-01-18 19:43:52'),
(3, 2, 1, 'Four Steps to Conduct a Successful Usability', 'four-steps-conduct-successful-usability', 'Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.', '<p>Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.</p>\r\n<p>Quo at ornatus praesent expetendis. Eam fabulas consectetuer reprehendunt in. Affert saperet duo ne. Eum ut hinc gubergren, in veri putent legimus sea.</p>\r\n<p>An aperiri eligendi antiopam sed, novum maiorum qui et. Et cum verear regione sensibus, te autem novum tritani quo. Ut qui dolor efficiantur, sed solet instructior et. Autem sonet affert est an, an vix iuvaret bonorum elaboraret.</p>\r\n<p>Eos et solum dolor fierent, dicit choro definitiones ei mei. Eu persius fabellas perfecto est. Bonorum delectus urbanitas eos ei. Est primis habemus conclusionemque et, quodsi saperet necessitatibus ea mei, elitr tollit voluptaria vis id.</p>\r\n<p>Vidisse labitur propriae nec no, te pro viris graeci copiosae. Vim an animal fastidii scriptorem. Verterem ullamcorper no sed. Ea sea dicta quidam saperet.</p>\r\n<p>Veri debet lobortis ad sed. Vitae lobortis vel ad, sea audiam praesent iudicabit ut. Nam prompta iracundia ea, ex esse melius omittantur vis. Ex eam odio amet graeco, ea mei omnes explicari definiebas. Libris ponderum interesset ei nec, pri ei mentitum copiosae.</p>\r\n<p>Commodo voluptatum ei vel. Est et oratio graeco, dolore ornatus praesent eu nam. Ut prima delectus vix, usu et porro aperiam appetere. Qui diam ancillae id. Falli decore vel an, no vis nemore contentiones. Phaedrum principes nam cu, ius tation saperet interesset an.</p>', 'post_1768787101.png', 'step,success,business', '2026-01-18 19:45:01', '2026-01-18 19:45:01'),
(4, 2, 1, 'Five Winning Voice Search Marketing Tips', 'five-winning-voice-search-marketing-tips', 'Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.', '<p>Lorem ipsum dolor sit amet, altera dolores pertinax id ius. Officiis perpetua reformidans per at, eligendi platonem voluptatum an vix. Cum an sale commodo blandit, eos graeci accusata an. Magna phaedrum facilisis usu no. Sint prodesset ea est.</p>\r\n<p>Quo at ornatus praesent expetendis. Eam fabulas consectetuer reprehendunt in. Affert saperet duo ne. Eum ut hinc gubergren, in veri putent legimus sea.</p>\r\n<p>An aperiri eligendi antiopam sed, novum maiorum qui et. Et cum verear regione sensibus, te autem novum tritani quo. Ut qui dolor efficiantur, sed solet instructior et. Autem sonet affert est an, an vix iuvaret bonorum elaboraret.</p>\r\n<p>Eos et solum dolor fierent, dicit choro definitiones ei mei. Eu persius fabellas perfecto est. Bonorum delectus urbanitas eos ei. Est primis habemus conclusionemque et, quodsi saperet necessitatibus ea mei, elitr tollit voluptaria vis id.</p>\r\n<p>Vidisse labitur propriae nec no, te pro viris graeci copiosae. Vim an animal fastidii scriptorem. Verterem ullamcorper no sed. Ea sea dicta quidam saperet.</p>\r\n<p>Veri debet lobortis ad sed. Vitae lobortis vel ad, sea audiam praesent iudicabit ut. Nam prompta iracundia ea, ex esse melius omittantur vis. Ex eam odio amet graeco, ea mei omnes explicari definiebas. Libris ponderum interesset ei nec, pri ei mentitum copiosae.</p>\r\n<p>Commodo voluptatum ei vel. Est et oratio graeco, dolore ornatus praesent eu nam. Ut prima delectus vix, usu et porro aperiam appetere. Qui diam ancillae id. Falli decore vel an, no vis nemore contentiones. Phaedrum principes nam cu, ius tation saperet interesset an.</p>', 'post_1768787184.png', 'marketing,tips,business', '2026-01-18 19:46:24', '2026-01-18 19:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Branding', 'branding', '2026-01-18 04:03:47', '2026-01-18 04:03:47'),
(2, 'Business', 'business', '2026-01-18 04:04:33', '2026-01-18 04:04:33'),
(3, 'Company', 'company', '2026-01-18 04:04:44', '2026-01-18 04:04:44'),
(4, 'Modern', 'modern', '2026-01-18 04:04:58', '2026-01-18 04:04:58'),
(5, 'Design', 'design', '2026-01-18 04:05:04', '2026-01-18 04:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_category_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `view_count` int NOT NULL DEFAULT '0',
  `total_rating` decimal(3,2) NOT NULL DEFAULT '0.00',
  `total_reviews` int NOT NULL DEFAULT '0',
  `average_rating` decimal(3,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `photo`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `view_count`, `total_rating`, `total_reviews`, `average_rating`, `created_at`, `updated_at`) VALUES
(1, 2, 'product_1769057930.png', 'CartFlow eCommerce Engine', 'cartflow-ecommerce-engine', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 39.00, 19.00, 0, 0.00, 0, 0.00, '2026-01-21 22:58:50', '2026-01-21 22:58:50'),
(2, 1, 'product_1769058127.png', 'SupportTick Ticketing System', 'supporttick-ticketing-system', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 12.00, 12.00, 0, 0.00, 0, 0.00, '2026-01-21 23:02:07', '2026-01-21 23:02:07'),
(3, 5, 'product_1769058164.png', 'InventoryMaster 360', 'inventory-master-360', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 49.00, 29.00, 0, 0.00, 0, 0.00, '2026-01-21 23:02:44', '2026-01-21 23:05:05'),
(4, 3, 'product_1769058200.png', 'EduManager Pro', 'edu-manager-pro', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 24.00, 24.00, 0, 0.00, 0, 0.00, '2026-01-21 23:03:20', '2026-01-21 23:05:17'),
(5, 4, 'product_1769058264.png', 'RealState Connect Directory', 'real-state-connect-directory', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 79.00, 49.00, 0, 0.00, 0, 0.00, '2026-01-21 23:04:24', '2026-01-21 23:05:23'),
(6, 1, 'product_1769058367.png', 'The Clean Code Blueprint', 'clean-code-blueprint', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 14.00, 14.00, 0, 0.00, 0, 0.00, '2026-01-21 23:06:07', '2026-01-21 23:06:07'),
(7, 3, 'product_1769058413.png', 'Full-Stack Freelancer Toolkit', 'full-stack-freelancer-toolkit', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 27.00, 27.00, 0, 0.00, 0, 0.00, '2026-01-21 23:06:53', '2026-01-21 23:06:53'),
(8, 2, 'product_1769058480.png', 'QuickBill Invoice & GST System', 'quick-bill-invoice-gst', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 37.00, 23.00, 0, 0.00, 0, 0.00, '2026-01-21 23:08:00', '2026-01-21 23:08:00'),
(9, 2, 'product_1769058515.png', 'Hospicare Patient Management', 'hospicare-patient-management', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 40.00, 30.00, 0, 0.00, 0, 0.00, '2026-01-21 23:08:35', '2026-01-21 23:08:35'),
(10, 4, 'product_1769058562.png', 'FormBuilder Drag-and-Drop Pro', 'form-builder-drag-drop-pro', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 20.00, 20.00, 0, 0.00, 0, 0.00, '2026-01-21 23:09:22', '2026-01-21 23:09:22'),
(11, 2, 'product_1769058599.png', 'JobHunt Recruitment Portal', 'job-hunt-recruitment-portal', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 32.00, 14.00, 0, 0.00, 0, 0.00, '2026-01-21 23:09:59', '2026-01-21 23:09:59'),
(12, 2, 'product_1769058635.png', 'AffiliateTrack Referral System', 'affiliate-track-referral-system', 'Lorem ipsum dolor sit amet, te verear mentitum legendos has, no vim impedit salutandi disputando. Harum clita doctus est et. Wisi dicam graeci cum no. Deserunt torquatos moderatius in per, nisl perpetua his an mel.', '<p>Solet primis sea eu, qui facilis verterem dissentiet ne. Corrumpit reformidans eum ne, ei eum justo dicunt lucilius. Etiam homero maluisset has ei. Cu iudico doming iudicabit his, in nam choro vivendo vituperata. Qui ei quando saperet. Quot lorem harum ei per, ut eos moderatius scribentur necessitatibus. Id veritus epicuri eligendi mel, mea ipsum libris aperiri et. Ei erant sonet neglegentur qui, eum verear assentior referrentur ex, per cu commodo efficiendi dissentias.</p>\r\n<p>Ne tollit convenire vulputate eum, cu has quaestio iudicabit, eu populo quaeque vituperatoribus sit. Ei est audiam aeterno vidisse, an dicat offendit cum. Ei eros brute pro. Quidam vulputate in vel, at pro suscipit probatus. Odio qualisque te vim, te agam alienum pro.</p>\r\n<p>Eu duo consul debitis, vis duis consul in. Dolorem eligendi definitionem ius ne, hinc disputando vix an. Has eu porro falli recteque, an vis apeirian deseruisse delicatissimi. Modo dolores eum at, iriure epicuri referrentur est ei, cum ludus legere platonem no. Populo possim ea cum, sea an ipsum veniam mediocrem, pri nonumy efficiantur id. Sit eu accommodare disputationi, cum te omittam reformidans, saepe consul no mei. Cu integre convenire eam, ea mei meis minimum.</p>', 99.00, 79.00, 0, 0.00, 0, 0.00, '2026-01-21 23:10:35', '2026-01-21 23:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Development & Tech', '2026-01-19 19:57:40', '2026-01-19 19:57:40'),
(2, 'Design & Creative', '2026-01-19 19:57:48', '2026-01-19 19:57:48'),
(3, 'Strategy & Consulting', '2026-01-19 19:57:54', '2026-01-19 19:57:54'),
(4, 'User Experience', '2026-01-19 19:58:07', '2026-01-19 19:58:07'),
(5, 'FinTech Services', '2026-01-19 19:58:23', '2026-01-19 19:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `product_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Technology', 'PHP, Laravel', '2026-01-22 00:13:29', '2026-01-22 00:13:29'),
(2, 1, 'Architecture', 'MVC', '2026-01-22 00:14:18', '2026-01-22 00:14:18'),
(3, 1, 'Authentication', 'Laravel Breeze', '2026-01-22 00:14:28', '2026-01-22 00:14:28'),
(4, 1, 'Payment Gateway', 'PayPal, Stripe', '2026-01-22 00:14:38', '2026-01-22 00:14:38'),
(5, 2, 'Technology', 'PHP, Laravel', '2026-01-22 00:15:00', '2026-01-22 00:15:00'),
(6, 2, 'Authentication', 'Laravel Breeze', '2026-01-22 00:15:10', '2026-01-22 00:15:10'),
(7, 2, 'Frontend', 'Blade Templates, Tailwind CSS', '2026-01-22 00:15:21', '2026-01-22 00:15:21'),
(8, 2, 'Admin Dashboard', 'Responsive Custom Panel', '2026-01-22 00:15:34', '2026-01-22 00:15:34'),
(9, 2, 'Deployment', 'Docker & Shared Hosting Ready', '2026-01-22 00:15:45', '2026-01-22 00:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

CREATE TABLE `product_photos` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_photos`
--

INSERT INTO `product_photos` (`id`, `product_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'product_photo_1769060699.png', '2026-01-21 23:44:59', '2026-01-21 23:44:59'),
(2, 1, 'product_photo_1769060707.png', '2026-01-21 23:45:07', '2026-01-21 23:45:07'),
(3, 1, 'product_photo_1769060727.png', '2026-01-21 23:45:27', '2026-01-21 23:45:27'),
(5, 2, 'product_photo_1769060807.png', '2026-01-21 23:46:47', '2026-01-21 23:46:47'),
(6, 2, 'product_photo_1769060824.png', '2026-01-21 23:47:04', '2026-01-21 23:47:04'),
(7, 2, 'product_photo_1769060832.png', '2026-01-21 23:47:12', '2026-01-21 23:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `comment_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `comment_id`, `name`, `email`, `reply`, `reply_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 'Kisumu', 'kisumu@mailinator.com', 'Sea graece oportere ea, ei dicant sensibus consequuntur usu. Vis reque vivendum eu.', 'User', 'Approved', '2026-01-19 04:26:11', '2026-01-19 04:44:24'),
(3, 4, 1, 'Loty Loviwi', 'lotyloviwi@mailinator.com', 'Ut omnium scripserit usu, eam at veri rebum detracto, ne sit viderer efficiantur.', 'User', 'Approved', '2026-01-19 04:27:46', '2026-01-19 04:43:26'),
(4, 4, 1, 'Morshedul Arefin', 'admin@example.com', 'Thank you so much for the awesome and good comment.', 'Admin', 'Approved', '2026-01-19 04:51:10', '2026-01-19 04:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_order` int DEFAULT '0',
  `home_page_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_page_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_page_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `photo`, `name`, `slug`, `short_description`, `description`, `item_order`, `home_page_2`, `home_page_3`, `home_page_5`, `created_at`, `updated_at`) VALUES
(1, 'service_icon_1768701261.svg', 'service_photo_1768701669.png', 'Branding Design', 'branding-design', 'Sea ea augue eripuit, et labores fierent electram pro, te atqui ceteros adipiscing ius eum inimicus.', '<p>Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.</p>\r\n<p>Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.</p>\r\n<p>Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis, quo no aperiri fabellas. Animal alterum verterem usu ut, ei est agam insolens reprimique, et lorem regione ceteros sed.</p>\r\n<p>Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam definitionem duo, natum eruditi sanctus no eos. Ut iudico graece his, his te latine vulputate, virtute equidem ut qui.</p>', 1, 'Yes', 'Yes', 'Yes', '2026-01-17 19:45:20', '2026-01-17 20:28:58'),
(2, 'service_icon_1768700890.svg', 'service_photo_1768701675.png', 'Web Development', 'web-development', 'Sea ea augue eripuit, et labores fierent electram pro, te atqui ceteros adipiscing ius eum inimicus.', '<p>Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.</p>\r\n<p>Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.</p>\r\n<p>Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis, quo no aperiri fabellas. Animal alterum verterem usu ut, ei est agam insolens reprimique, et lorem regione ceteros sed.</p>\r\n<p>Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam definitionem duo, natum eruditi sanctus no eos. Ut iudico graece his, his te latine vulputate, virtute equidem ut qui.</p>', 2, 'Yes', 'Yes', 'Yes', '2026-01-17 19:48:10', '2026-01-17 20:29:06'),
(3, 'service_icon_1768700946.svg', 'service_photo_1768701681.png', 'Digital Marketing', 'digital-marketing', 'Sea ea augue eripuit, et labores fierent electram pro, te atqui ceteros adipiscing ius eum inimicus.', '<p>Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.</p>\r\n<p>Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.</p>\r\n<p>Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis, quo no aperiri fabellas. Animal alterum verterem usu ut, ei est agam insolens reprimique, et lorem regione ceteros sed.</p>\r\n<p>Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam definitionem duo, natum eruditi sanctus no eos. Ut iudico graece his, his te latine vulputate, virtute equidem ut qui.</p>', 3, 'Yes', 'Yes', 'Yes', '2026-01-17 19:49:06', '2026-01-17 20:29:10'),
(4, 'service_icon_1768701003.svg', 'service_photo_1768701687.png', 'Illustration Modelling', 'illustration-modelling', 'Sea ea augue eripuit, et labores fierent electram pro, te atqui ceteros adipiscing ius eum inimicus.', '<p>Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.</p>\r\n<p>Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.</p>\r\n<p>Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis, quo no aperiri fabellas. Animal alterum verterem usu ut, ei est agam insolens reprimique, et lorem regione ceteros sed.</p>\r\n<p>Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam definitionem duo, natum eruditi sanctus no eos. Ut iudico graece his, his te latine vulputate, virtute equidem ut qui.</p>', 4, 'Yes', 'No', 'Yes', '2026-01-17 19:50:03', '2026-01-17 20:29:14'),
(5, 'service_icon_1768701035.svg', 'service_photo_1768701693.png', 'Content Marketing', 'content-marketing', 'Sea ea augue eripuit, et labores fierent electram pro, te atqui ceteros adipiscing ius eum inimicus.', '<p>Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.</p>\r\n<p>Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.</p>\r\n<p>Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis, quo no aperiri fabellas. Animal alterum verterem usu ut, ei est agam insolens reprimique, et lorem regione ceteros sed.</p>\r\n<p>Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam definitionem duo, natum eruditi sanctus no eos. Ut iudico graece his, his te latine vulputate, virtute equidem ut qui.</p>', 5, 'No', 'No', 'Yes', '2026-01-17 19:50:35', '2026-01-17 20:29:18'),
(6, 'service_icon_1768701081.svg', 'service_photo_1768701700.png', 'Social Advertising', 'social-advertising', 'Sea ea augue eripuit, et labores fierent electram pro, te atqui ceteros adipiscing ius eum inimicus.', '<p>Lorem ipsum dolor sit amet, feugait lobortis ne cum. Tempor everti pri ex, nec periculis philosophia ne. Populo quodsi referrentur mea cu. Et sed sint mollis viderer, ex hinc veri percipit his. Eos ea agam posse ludus, est ei dicat luptatum contentiones, vix velit aeterno no. In qui summo nullam ceteros.</p>\r\n<p>Primis malorum an pri. Meliore nostrum ex nam, quando mediocrem id eam, vim te periculis delicatissimi. Sit no verear docendi denique, pri ad odio corpora apeirian. Ex has persius dolorem, vix clita contentiones at. Id albucius apeirian vis, sed id vero possit tacimates.</p>\r\n<p>Discere impedit ei has, his aperiri antiopam contentiones at. An errem laoreet vix, ei ridens prompta phaedrum pri. In harum delenit ocurreret sea. Nullam tacimates quo at, ea vim libris meliore. Nulla partiendo te vis, quo no aperiri fabellas. Animal alterum verterem usu ut, ei est agam insolens reprimique, et lorem regione ceteros sed.</p>\r\n<p>Vim no facilisi gloriatur. Et mel accommodare philosophia, eos ad doming tritani habemus. Id est graece tincidunt, ut nonumy aliquando vix, aperiri nusquam scriptorem eu has. Mel ex graece legendos, an audiam definitionem duo, natum eruditi sanctus no eos. Ut iudico graece his, his te latine vulputate, virtute equidem ut qui.</p>', 6, 'No', 'No', 'Yes', '2026-01-17 19:51:21', '2026-01-17 20:29:23');

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
('0INPYlEEEbLdUteNOlaRZ7Tw9yVDzeeROBFr91n8', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVGlBZHJJREc1VHVGa0pVWnpEMlZBMlFwRW9WdHlORXEzVUJPRnJ3aiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cz9wYWdlPTEiO3M6NToicm91dGUiO3M6ODoicHJvZHVjdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1769095346),
('MVDfaosz2i15PHfJCJCYM4HQK9ZTQMBRgfl4tu94', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU0tyeTNTQUF1QzAzSFZ6eDhudFI0bTY3ZXd3dlY0SVEzR0xFWjJQOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0L2luZGV4IjtzOjU6InJvdXRlIjtzOjE5OiJhZG1pbi5wcm9kdWN0LmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1769062564);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int NOT NULL,
  `item_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`, `item_order`, `created_at`, `updated_at`) VALUES
(1, 'Branding', 84, 1, '2026-01-17 05:06:47', '2026-01-17 05:06:47'),
(2, 'Development', 69, 2, '2026-01-17 05:07:20', '2026-01-17 05:07:20'),
(3, 'Advertising', 79, 3, '2026-01-17 05:07:31', '2026-01-17 07:23:45'),
(4, 'Marketing', 94, 4, '2026-01-17 05:07:46', '2026-01-17 05:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolios_slug_unique` (`slug`);

--
-- Indexes for table `portfolio_photos`
--
ALTER TABLE `portfolio_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_name_unique` (`name`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio_photos`
--
ALTER TABLE `portfolio_photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_photos`
--
ALTER TABLE `product_photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
