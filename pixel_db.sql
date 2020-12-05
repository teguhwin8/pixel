-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 04:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend_access_log`
--

CREATE TABLE `backend_access_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_access_log`
--

INSERT INTO `backend_access_log` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', '2020-11-28 23:01:27', '2020-11-28 23:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `backend_users`
--

CREATE TABLE `backend_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persist_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_users`
--

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `role_id`, `activated_at`, `last_login`, `created_at`, `updated_at`, `deleted_at`, `is_superuser`) VALUES
(1, 'Admin', 'Person', 'admin', 'admin@domain.tld', '$2y$10$AMgKv313CeMbZGbGvZUilO.mr4/kSO7goLAjL2Op85GYqizBNuODG', NULL, '$2y$10$GF5iKzzvRd/9ts6mqcclc.28FXci6yljKRT3yXUXBf05XskhENq1m', NULL, '', 1, 2, NULL, '2020-11-28 23:01:26', '2020-11-28 23:00:23', '2020-11-28 23:01:26', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_users_groups`
--

CREATE TABLE `backend_users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_users_groups`
--

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_groups`
--

CREATE TABLE `backend_user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_new_user_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_user_groups`
--

INSERT INTO `backend_user_groups` (`id`, `name`, `created_at`, `updated_at`, `code`, `description`, `is_new_user_default`) VALUES
(1, 'Owners', '2020-11-28 23:00:23', '2020-11-28 23:00:23', 'owners', 'Default group for website owners.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_preferences`
--

CREATE TABLE `backend_user_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_roles`
--

CREATE TABLE `backend_user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_system` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_user_roles`
--

INSERT INTO `backend_user_roles` (`id`, `name`, `code`, `description`, `permissions`, `is_system`, `created_at`, `updated_at`) VALUES
(1, 'Publisher', 'publisher', 'Site editor with access to publishing tools.', '', 1, '2020-11-28 23:00:22', '2020-11-28 23:00:22'),
(2, 'Developer', 'developer', 'Site administrator with access to developer tools.', '', 1, '2020-11-28 23:00:23', '2020-11-28 23:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_throttle`
--

CREATE TABLE `backend_user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT 0,
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT 0,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT 0,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_user_throttle`
--

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`) VALUES
(1, 1, '::1', 0, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_data`
--

CREATE TABLE `cms_theme_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_logs`
--

CREATE TABLE `cms_theme_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_templates`
--

CREATE TABLE `cms_theme_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deferred_bindings`
--

CREATE TABLE `deferred_bindings` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_bind` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `failed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2013_10_01_000001_Db_Deferred_Bindings', 1),
(2, '2013_10_01_000002_Db_System_Files', 1),
(3, '2013_10_01_000003_Db_System_Plugin_Versions', 1),
(4, '2013_10_01_000004_Db_System_Plugin_History', 1),
(5, '2013_10_01_000005_Db_System_Settings', 1),
(6, '2013_10_01_000006_Db_System_Parameters', 1),
(7, '2013_10_01_000007_Db_System_Add_Disabled_Flag', 1),
(8, '2013_10_01_000008_Db_System_Mail_Templates', 1),
(9, '2013_10_01_000009_Db_System_Mail_Layouts', 1),
(10, '2014_10_01_000010_Db_Jobs', 1),
(11, '2014_10_01_000011_Db_System_Event_Logs', 1),
(12, '2014_10_01_000012_Db_System_Request_Logs', 1),
(13, '2014_10_01_000013_Db_System_Sessions', 1),
(14, '2015_10_01_000014_Db_System_Mail_Layout_Rename', 1),
(15, '2015_10_01_000015_Db_System_Add_Frozen_Flag', 1),
(16, '2015_10_01_000016_Db_Cache', 1),
(17, '2015_10_01_000017_Db_System_Revisions', 1),
(18, '2015_10_01_000018_Db_FailedJobs', 1),
(19, '2016_10_01_000019_Db_System_Plugin_History_Detail_Text', 1),
(20, '2016_10_01_000020_Db_System_Timestamp_Fix', 1),
(21, '2017_08_04_121309_Db_Deferred_Bindings_Add_Index_Session', 1),
(22, '2017_10_01_000021_Db_System_Sessions_Update', 1),
(23, '2017_10_01_000022_Db_Jobs_FailedJobs_Update', 1),
(24, '2017_10_01_000023_Db_System_Mail_Partials', 1),
(25, '2017_10_23_000024_Db_System_Mail_Layouts_Add_Options_Field', 1),
(26, '2013_10_01_000001_Db_Backend_Users', 2),
(27, '2013_10_01_000002_Db_Backend_User_Groups', 2),
(28, '2013_10_01_000003_Db_Backend_Users_Groups', 2),
(29, '2013_10_01_000004_Db_Backend_User_Throttle', 2),
(30, '2014_01_04_000005_Db_Backend_User_Preferences', 2),
(31, '2014_10_01_000006_Db_Backend_Access_Log', 2),
(32, '2014_10_01_000007_Db_Backend_Add_Description_Field', 2),
(33, '2015_10_01_000008_Db_Backend_Add_Superuser_Flag', 2),
(34, '2016_10_01_000009_Db_Backend_Timestamp_Fix', 2),
(35, '2017_10_01_000010_Db_Backend_User_Roles', 2),
(36, '2018_12_16_000011_Db_Backend_Add_Deleted_At', 2),
(37, '2014_10_01_000001_Db_Cms_Theme_Data', 3),
(38, '2016_10_01_000002_Db_Cms_Timestamp_Fix', 3),
(39, '2017_10_01_000003_Db_Cms_Theme_Logs', 3),
(40, '2018_11_01_000001_Db_Cms_Theme_Templates', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_brand`
--

CREATE TABLE `pixel_store_brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pixel_store_brand`
--

INSERT INTO `pixel_store_brand` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `slug`, `website_url`, `is_active`) VALUES
(1, '2020-11-28 23:35:41', '2020-11-28 23:35:41', NULL, 'Asus', 'asus', '', 1),
(2, '2020-11-28 23:35:49', '2020-11-28 23:35:49', NULL, 'Samsung', 'samsung', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_category`
--

CREATE TABLE `pixel_store_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pixel_store_category`
--

INSERT INTO `pixel_store_category` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `slug`, `parent`, `is_active`) VALUES
(1, '2020-11-28 23:34:58', '2020-11-28 23:34:58', NULL, 'Komputer', 'komputer', NULL, 1),
(2, '2020-11-28 23:44:30', '2020-11-28 23:44:30', NULL, 'Laptop', 'laptop', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_collection_banner`
--

CREATE TABLE `pixel_store_collection_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_discount_banner`
--

CREATE TABLE `pixel_store_discount_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `text_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `text_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_general`
--

CREATE TABLE `pixel_store_general` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pixel_store_general`
--

INSERT INTO `pixel_store_general` (`id`, `name`, `address`, `phone`, `email`, `fax`, `whatsapp`, `facebook`, `instagram`, `youtube`, `twitter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pixel Computer', '', '', '', NULL, '', '', '', '', '', '2020-11-28 23:04:29', '2020-11-28 23:04:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_gift`
--

CREATE TABLE `pixel_store_gift` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_product`
--

CREATE TABLE `pixel_store_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pixel_store_product`
--

INSERT INTO `pixel_store_product` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `price`, `option`, `description`, `video_link`, `category_id`, `brand_id`, `is_active`, `slug`) VALUES
(1, '2020-12-05 08:13:02', '2020-12-05 08:25:09', NULL, 'Test Produk 1', 100000, NULL, 'Test Deskripsi Produk 1 Test Deskripsi Produk 1 Test Deskripsi Produk 1 Test Deskripsi Produk 1 Test Deskripsi Produk 1 Test Deskripsi Produk 1 Test Deskripsi Produk 1 Test Deskripsi Produk 1', NULL, 0, NULL, 1, 'test-produk-1');

-- --------------------------------------------------------

--
-- Table structure for table `pixel_store_slider`
--

CREATE TABLE `pixel_store_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desciption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pixel_store_slider`
--

INSERT INTO `pixel_store_slider` (`id`, `created_at`, `updated_at`, `deleted_at`, `title_1`, `title_2`, `desciption`, `slogan`, `button_text`, `link`, `is_active`, `description`) VALUES
(1, '2020-11-28 23:37:00', '2020-11-28 23:37:00', NULL, 'Lorem Ipsum', 'Color Picker', 'This is a description', 'This is a slogan', 'Click Here', '#', 1, 'null'),
(2, '2020-11-28 23:38:00', '2020-11-28 23:38:00', NULL, 'Test', 'Again', 'Desciption is awesome', 'Slogan in here', 'Click Here', '#', 1, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_mail_blockers`
--

CREATE TABLE `rainlab_user_mail_blockers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_activity` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_event_logs`
--

CREATE TABLE `system_event_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_event_logs`
--

INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(1, 'error', 'ErrorException: Trying to get property \'logo\' of non-object in C:\\xampp3\\htdocs\\pixel\\modules\\cms\\classes\\CodeParser.php(291) : eval()\'d code:11\nStack trace:\n#0 C:\\xampp3\\htdocs\\pixel\\modules\\cms\\classes\\CodeParser.php(291) : eval()\'d code(11): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Trying to get p...\', \'C:\\\\xampp3\\\\htdoc...\', 11, Array)\n#1 C:\\xampp3\\htdocs\\pixel\\modules\\cms\\classes\\Controller.php(484): Cms5fc33943d8617856241718_fd91950e22a44d852030fa50f23b41f3Class->onStart()\n#2 C:\\xampp3\\htdocs\\pixel\\modules\\cms\\classes\\Controller.php(394): Cms\\Classes\\Controller->execPageCycle()\n#3 C:\\xampp3\\htdocs\\pixel\\modules\\cms\\classes\\Controller.php(225): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#4 C:\\xampp3\\htdocs\\pixel\\modules\\cms\\classes\\CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#5 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#6 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#7 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#8 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#9 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#10 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#11 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#12 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#13 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#14 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#15 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#16 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#17 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#18 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#19 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#23 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#24 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(68): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#25 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#30 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#31 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#32 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#33 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#34 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(25): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#37 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#38 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#39 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#40 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#41 C:\\xampp3\\htdocs\\pixel\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#42 {main}', NULL, '2020-11-28 23:01:39', '2020-11-28 23:01:39'),
(2, 'error', 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Class \'System\\Models\\Files\' not found in C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships.php:653\nStack trace:\n#0 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Database\\Concerns\\HasRelationships.php(650): Illuminate\\Database\\Eloquent\\Model->newRelatedInstance(\'System\\\\Models\\\\F...\')\n#1 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Database\\Concerns\\HasRelationships.php(299): October\\Rain\\Database\\Model->attachOne(\'System\\\\Models\\\\F...\', NULL, NULL, \'product_image\')\n#2 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Database\\Model.php(645): October\\Rain\\Database\\Model->handleRelation(\'product_image\')\n#3 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Database\\Concerns\\HasRelationships.php(698): October\\Rain\\Database\\Model->__call(\'product_image\', Array)\n#4 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\FormField.php(702): October\\Rain\\Database\\Model->getRelationValue(\'product_image\')\n#5 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\FormField.php(632): Backend\\Classes\\FormField->getFieldNameFromData(\'product_image\', Object(Pixel\\Store\\Models\\Product), NULL)\n#6 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\widgets\\Form.php(1118): Backend\\Classes\\FormField->getValueFromData(Object(Pixel\\Store\\Models\\Product), NULL)\n#7 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\widgets\\Form.php(877): Backend\\Widgets\\Form->getFieldValue(Object(Backend\\Classes\\FormField))\n#8 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\widgets\\Form.php(722): Backend\\Widgets\\Form->makeFormField(\'product_image\', Array)\n#9 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\widgets\\Form.php(562): Backend\\Widgets\\Form->addFields(Array, \'primary\')\n#10 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\widgets\\Form.php(154): Backend\\Widgets\\Form->defineFormFields()\n#11 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\behaviors\\FormController.php(174): Backend\\Widgets\\Form->bindToController()\n#12 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\behaviors\\FormController.php(220): Backend\\Behaviors\\FormController->initForm(Object(Pixel\\Store\\Models\\Product))\n#13 [internal function]: Backend\\Behaviors\\FormController->create()\n#14 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Extension\\ExtendableTrait.php(414): call_user_func_array(Array, Array)\n#15 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\Controller.php(184): Backend\\Classes\\Controller->extendableCall(\'create\', Array)\n#16 [internal function]: Backend\\Classes\\Controller->__call(\'create\', Array)\n#17 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\Controller.php(405): call_user_func_array(Array, Array)\n#18 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\Controller.php(296): Backend\\Classes\\Controller->execPageAction(\'create\', Array)\n#19 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\BackendController.php(165): Backend\\Classes\\Controller->run(\'create\', Array)\n#20 [internal function]: Backend\\Classes\\BackendController->run(\'pixel/store/pro...\')\n#21 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)\n#22 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#23 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Backend\\Classes\\BackendController), \'run\')\n#24 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()\n#25 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()\n#26 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#27 C:\\xampp3\\htdocs\\pixel\\modules\\backend\\classes\\BackendController.php(68): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#28 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(131): Backend\\Classes\\BackendController->Backend\\Classes\\{closure}(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#31 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#32 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#33 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#34 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#37 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#38 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#39 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#40 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#41 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#42 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(68): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#43 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#44 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#45 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#46 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#47 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#48 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#49 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Router\\CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#50 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#51 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#52 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#53 C:\\xampp3\\htdocs\\pixel\\vendor\\october\\rain\\src\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(25): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#54 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#55 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#56 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#57 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#58 C:\\xampp3\\htdocs\\pixel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#59 C:\\xampp3\\htdocs\\pixel\\index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#60 {main}', NULL, '2020-12-05 08:12:04', '2020-12-05 08:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `system_files`
--

CREATE TABLE `system_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, '5fc339e84db92177058639.png', 'thumb_2_190_64_0_0_auto.png', 18769, 'image/png', NULL, NULL, 'logo', '1', 'Pixel\\Store\\Models\\General', 1, 1, '2020-11-28 23:04:24', '2020-11-28 23:04:29'),
(3, '5fc3410fe8046552741620.png', '5f62db8da0f87003037708.png', 13574, 'image/png', NULL, NULL, 'icon', '1', 'Pixel\\Store\\Models\\Category', 1, 3, '2020-11-28 23:34:55', '2020-11-28 23:34:58'),
(4, '5fc341843e0f5814528044.png', '5f6775aaaa13f423812361.png', 415281, 'image/png', NULL, NULL, 'slider_left', '1', 'Pixel\\Store\\Models\\Slider', 1, 4, '2020-11-28 23:36:52', '2020-11-28 23:37:00'),
(5, '5fc3418906372948146756.png', '5f6775e913e19260664753.png', 278433, 'image/png', NULL, NULL, 'slider_right', '1', 'Pixel\\Store\\Models\\Slider', 1, 5, '2020-11-28 23:36:57', '2020-11-28 23:37:00'),
(6, '5fc341c306d09887851756.png', '5f6775b10b800903019924.png', 218127, 'image/png', NULL, NULL, 'slider_left', '2', 'Pixel\\Store\\Models\\Slider', 1, 6, '2020-11-28 23:37:55', '2020-11-28 23:38:00'),
(7, '5fc341c5b2151158972836.png', '5f6775ddb5db9643392574.png', 172055, 'image/png', NULL, NULL, 'slider_right', '2', 'Pixel\\Store\\Models\\Slider', 1, 7, '2020-11-28 23:37:57', '2020-11-28 23:38:00'),
(8, '5fc3434c61d96095519856.png', '5f62db8da0f87003037708.png', 13574, 'image/png', NULL, NULL, 'icon', '2', 'Pixel\\Store\\Models\\Category', 1, 8, '2020-11-28 23:44:28', '2020-11-28 23:44:30'),
(9, '5fcba37428044089450887.jpg', '3x3.jpg', 11479, 'image/jpeg', NULL, NULL, 'product_image', '1', 'Pixel\\Store\\Models\\Product', 1, 9, '2020-12-05 08:12:52', '2020-12-05 08:13:02'),
(10, '5fcba37a314bf370401733.jpg', 'home-image.jpg', 85207, 'image/jpeg', NULL, NULL, 'product_image_2', '1', 'Pixel\\Store\\Models\\Product', 1, 10, '2020-12-05 08:12:58', '2020-12-05 08:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_layouts`
--

CREATE TABLE `system_mail_layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_css` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_locked` tinyint(1) NOT NULL DEFAULT 0,
  `options` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_mail_layouts`
--

INSERT INTO `system_mail_layouts` (`id`, `name`, `code`, `content_html`, `content_text`, `content_css`, `is_locked`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Default layout', 'default', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-default\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n\n        <!-- Header -->\n        {% partial \'header\' body %}\n            {{ subject|raw }}\n        {% endpartial %}\n\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n\n        <!-- Footer -->\n        {% partial \'footer\' body %}\n            &copy; {{ \"now\"|date(\"Y\") }} {{ appName }}. All rights reserved.\n        {% endpartial %}\n\n    </table>\n\n</body>\n</html>', '{{ content|raw }}', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2020-11-28 23:00:22', '2020-11-28 23:00:22'),
(2, 'System layout', 'system', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-system\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n\n                                        <!-- Subcopy -->\n                                        {% partial \'subcopy\' body %}\n                                            **This is an automatic message. Please do not reply to it.**\n                                        {% endpartial %}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n    </table>\n\n</body>\n</html>', '{{ content|raw }}\n\n\n---\nThis is an automatic message. Please do not reply to it.', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2020-11-28 23:00:22', '2020-11-28 23:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_partials`
--

CREATE TABLE `system_mail_partials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_templates`
--

CREATE TABLE `system_mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_parameters`
--

CREATE TABLE `system_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_parameters`
--

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 'system', 'update', 'count', '3'),
(2, 'system', 'update', 'retry', '1606716089'),
(3, 'cms', 'theme', 'active', '\"pixel-template\"');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_history`
--

CREATE TABLE `system_plugin_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_plugin_history`
--

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'Indikator.DevTools', 'comment', '1.0.0', 'First version of Developer Tools.', '2020-11-28 23:00:20'),
(2, 'Indikator.DevTools', 'comment', '1.1.0', 'Edit plugins with the code editor.', '2020-11-28 23:00:20'),
(3, 'Indikator.DevTools', 'comment', '1.1.1', 'Translate some English texts.', '2020-11-28 23:00:20'),
(4, 'Indikator.DevTools', 'comment', '1.1.2', 'Fixed the Create file issue.', '2020-11-28 23:00:20'),
(5, 'Indikator.DevTools', 'comment', '1.1.3', 'Added new icon for main navigation.', '2020-11-28 23:00:20'),
(6, 'Indikator.DevTools', 'comment', '1.1.4', 'Show the PHP\'s configuration.', '2020-11-28 23:00:20'),
(7, 'Indikator.DevTools', 'comment', '1.1.5', 'Minor code improvements and bugfix.', '2020-11-28 23:00:20'),
(8, 'Indikator.DevTools', 'comment', '1.1.6', 'The top menu icon shows again.', '2020-11-28 23:00:20'),
(9, 'Indikator.DevTools', 'comment', '1.1.7', 'Fixed the Create folder issue.', '2020-11-28 23:00:20'),
(10, 'Indikator.DevTools', 'comment', '1.1.8', '!!! Updated for October 420+.', '2020-11-28 23:00:20'),
(11, 'Indikator.DevTools', 'comment', '1.1.9', 'Updated the main navigation icon.', '2020-11-28 23:00:20'),
(12, 'Indikator.DevTools', 'comment', '1.1.9', 'Added last modified date.', '2020-11-28 23:00:20'),
(13, 'Indikator.DevTools', 'comment', '1.2.0', 'The syntax highlighting works again!', '2020-11-28 23:00:20'),
(14, 'Indikator.DevTools', 'comment', '1.2.1', 'Help links open in a new window.', '2020-11-28 23:00:20'),
(15, 'Martin.Adminer', 'comment', '1.0.0', 'First version of Adminer for OctoberCMS', '2020-11-28 23:00:20'),
(16, 'Martin.Adminer', 'comment', '1.1.0', 'Added plugin settings', '2020-11-28 23:00:20'),
(17, 'Martin.Adminer', 'comment', '1.1.0', 'Load Adminer from an <iframe>', '2020-11-28 23:00:20'),
(18, 'Martin.Adminer', 'comment', '1.1.1', 'Bugfix', '2020-11-28 23:00:20'),
(19, 'Martin.Adminer', 'comment', '1.2.0', 'Autologin feature (MySQL only)', '2020-11-28 23:00:20'),
(20, 'Martin.Adminer', 'comment', '1.2.1', 'Bugfix', '2020-11-28 23:00:20'),
(21, 'Martin.Adminer', 'comment', '1.2.2', 'added Hungarian language (thanks to gergo85)', '2020-11-28 23:00:20'),
(22, 'Martin.Adminer', 'comment', '1.2.2', 'added missing translations', '2020-11-28 23:00:20'),
(23, 'Martin.Adminer', 'comment', '1.2.3', 'fix with manual login', '2020-11-28 23:00:20'),
(24, 'Martin.Adminer', 'comment', '1.2.4', 'added MIT license', '2020-11-28 23:00:20'),
(25, 'Martin.Adminer', 'comment', '1.2.4', 'updated Hungarian language (thanks to gergo85)', '2020-11-28 23:00:20'),
(26, 'Martin.Adminer', 'comment', '1.2.5', 'Upgrade to Adminer 4.2.5', '2020-11-28 23:00:20'),
(27, 'Martin.Adminer', 'comment', '1.2.5', 'fix on Autologin', '2020-11-28 23:00:20'),
(28, 'Martin.Adminer', 'comment', '1.2.5', 'added svg toolbar icon', '2020-11-28 23:00:20'),
(29, 'Martin.Adminer', 'comment', '1.2.6', 'Fixed SQLite support', '2020-11-28 23:00:20'),
(30, 'Martin.Adminer', 'comment', '1.2.6', 'Added SQLite Autologin', '2020-11-28 23:00:20'),
(31, 'Martin.Adminer', 'comment', '1.2.6.1', 'Update the Hungarian translate', '2020-11-28 23:00:20'),
(32, 'Martin.Adminer', 'comment', '1.2.7', 'Upgrade to Adminer 4.3.0', '2020-11-28 23:00:20'),
(33, 'Martin.Adminer', 'comment', '1.2.8', 'Added PostgreSQL Autologin', '2020-11-28 23:00:20'),
(34, 'Martin.Adminer', 'comment', '1.2.9', 'Upgrade to Adminer 4.3.1', '2020-11-28 23:00:20'),
(35, 'Martin.Adminer', 'comment', '1.3.0', 'Adminer themes support', '2020-11-28 23:00:20'),
(36, 'Martin.Adminer', 'comment', '1.3.1', 'New option to hide main menu item', '2020-11-28 23:00:20'),
(37, 'Martin.Adminer', 'comment', '1.3.1', 'haeckel theme updated', '2020-11-28 23:00:20'),
(38, 'Martin.Adminer', 'comment', '1.3.2', 'added French language (thanks to pvullioud)', '2020-11-28 23:00:20'),
(39, 'Martin.Adminer', 'comment', '1.4.0', 'Upgrade to Adminer 4.5.0', '2020-11-28 23:00:20'),
(40, 'Martin.Adminer', 'comment', '1.6.2', 'Upgrade to Adminer 4.6.2', '2020-11-28 23:00:20'),
(41, 'Martin.Adminer', 'comment', '1.6.3', 'Upgrade to Adminer 4.6.3', '2020-11-28 23:00:20'),
(42, 'Martin.Adminer', 'comment', '1.6.3', 'New/updated themes', '2020-11-28 23:00:20'),
(43, 'Martin.Adminer', 'comment', '1.6.3', 'Settings page reorganization', '2020-11-28 23:00:20'),
(44, 'Martin.Adminer', 'comment', '1.6.3', 'Themes selector includes previews', '2020-11-28 23:00:20'),
(45, 'Martin.Adminer', 'comment', '1.6.3', 'New setting to override default database connection', '2020-11-28 23:00:20'),
(46, 'Martin.Adminer', 'comment', '1.6.3', 'Added italian language (thanks to scanzy)', '2020-11-28 23:00:20'),
(47, 'Martin.Adminer', 'comment', '1.6.3.1', 'Changed Autologin control type', '2020-11-28 23:00:20'),
(48, 'Martin.Adminer', 'comment', '1.6.3.2', 'updated Hungarian language (thanks to gergo85)', '2020-11-28 23:00:20'),
(49, 'Martin.Adminer', 'comment', '1.7.0', 'Upgrade to Adminer 4.7.0', '2020-11-28 23:00:20'),
(50, 'Martin.Adminer', 'comment', '1.7.0', 'Autologin 100% working', '2020-11-28 23:00:20'),
(51, 'Martin.Adminer', 'comment', '1.7.0', 'Code refactoring', '2020-11-28 23:00:20'),
(52, 'Martin.Adminer', 'comment', '1.7.0', 'Updated themes', '2020-11-28 23:00:20'),
(53, 'Martin.Adminer', 'comment', '1.7.4', 'Upgrade to Adminer 4.7.4', '2020-11-28 23:00:20'),
(54, 'Martin.Adminer', 'comment', '1.7.4', 'Updated themes', '2020-11-28 23:00:20'),
(55, 'October.Demo', 'comment', '1.0.1', 'First version of Demo', '2020-11-28 23:00:20'),
(56, 'Pixel.Store', 'comment', '1.0.1', 'Initialize plugin.', '2020-11-28 23:00:20'),
(57, 'Pixel.Store', 'script', '1.0.2', 'builder_table_create_pixel_store_general.php', '2020-11-28 23:00:20'),
(58, 'Pixel.Store', 'comment', '1.0.2', 'Created table pixel_store_general', '2020-11-28 23:00:20'),
(59, 'Pixel.Store', 'script', '1.0.3', 'builder_table_create_pixel_store_category.php', '2020-11-28 23:00:20'),
(60, 'Pixel.Store', 'comment', '1.0.3', 'Created table pixel_store_category', '2020-11-28 23:00:20'),
(61, 'Pixel.Store', 'script', '1.0.4', 'builder_table_update_pixel_store_category.php', '2020-11-28 23:00:20'),
(62, 'Pixel.Store', 'comment', '1.0.4', 'Updated table pixel_store_category', '2020-11-28 23:00:20'),
(63, 'Pixel.Store', 'script', '1.0.5', 'builder_table_create_pixel_store_brand.php', '2020-11-28 23:00:20'),
(64, 'Pixel.Store', 'comment', '1.0.5', 'Created table pixel_store_brand', '2020-11-28 23:00:20'),
(65, 'Pixel.Store', 'script', '1.0.6', 'builder_table_create_pixel_store_gift.php', '2020-11-28 23:00:21'),
(66, 'Pixel.Store', 'comment', '1.0.6', 'Created table pixel_store_gift', '2020-11-28 23:00:21'),
(67, 'Pixel.Store', 'script', '1.0.7', 'builder_table_create_pixel_store_slider.php', '2020-11-28 23:00:21'),
(68, 'Pixel.Store', 'comment', '1.0.7', 'Created table pixel_store_slider', '2020-11-28 23:00:21'),
(69, 'Pixel.Store', 'script', '1.0.8', 'builder_table_update_pixel_store_slider.php', '2020-11-28 23:00:21'),
(70, 'Pixel.Store', 'comment', '1.0.8', 'Updated table pixel_store_slider', '2020-11-28 23:00:21'),
(71, 'Pixel.Store', 'script', '1.0.9', 'builder_table_update_pixel_store_slider_2.php', '2020-11-28 23:00:21'),
(72, 'Pixel.Store', 'comment', '1.0.9', 'Updated table pixel_store_slider', '2020-11-28 23:00:21'),
(73, 'Pixel.Store', 'script', '1.0.10', 'builder_table_update_pixel_store_slider_3.php', '2020-11-28 23:00:21'),
(74, 'Pixel.Store', 'comment', '1.0.10', 'Updated table pixel_store_slider', '2020-11-28 23:00:21'),
(75, 'Pixel.Store', 'script', '1.0.11', 'builder_table_create_pixel_store_collection_banner.php', '2020-11-28 23:00:21'),
(76, 'Pixel.Store', 'comment', '1.0.11', 'Created table pixel_store_collection_banner', '2020-11-28 23:00:21'),
(77, 'Pixel.Store', 'script', '1.0.12', 'builder_table_create_pixel_store_discount_banner.php', '2020-11-28 23:00:21'),
(78, 'Pixel.Store', 'comment', '1.0.12', 'Created table pixel_store_discount_banner', '2020-11-28 23:00:21'),
(79, 'Pixel.Store', 'script', '1.0.13', 'builder_table_update_pixel_store_discount_banner.php', '2020-11-28 23:00:21'),
(80, 'Pixel.Store', 'comment', '1.0.13', 'Updated table pixel_store_discount_banner', '2020-11-28 23:00:21'),
(81, 'RainLab.Builder', 'comment', '1.0.1', 'Initialize plugin.', '2020-11-28 23:00:21'),
(82, 'RainLab.Builder', 'comment', '1.0.2', 'Fixes the problem with selecting a plugin. Minor localization corrections. Configuration files in the list and form behaviors are now autocomplete.', '2020-11-28 23:00:21'),
(83, 'RainLab.Builder', 'comment', '1.0.3', 'Improved handling of the enum data type.', '2020-11-28 23:00:21'),
(84, 'RainLab.Builder', 'comment', '1.0.4', 'Added user permissions to work with the Builder.', '2020-11-28 23:00:21'),
(85, 'RainLab.Builder', 'comment', '1.0.5', 'Fixed permissions registration.', '2020-11-28 23:00:21'),
(86, 'RainLab.Builder', 'comment', '1.0.6', 'Fixed front-end record ordering in the Record List component.', '2020-11-28 23:00:21'),
(87, 'RainLab.Builder', 'comment', '1.0.7', 'Builder settings are now protected with user permissions. The database table column list is scrollable now. Minor code cleanup.', '2020-11-28 23:00:21'),
(88, 'RainLab.Builder', 'comment', '1.0.8', 'Added the Reorder Controller behavior.', '2020-11-28 23:00:21'),
(89, 'RainLab.Builder', 'comment', '1.0.9', 'Minor API and UI updates.', '2020-11-28 23:00:21'),
(90, 'RainLab.Builder', 'comment', '1.0.10', 'Minor styling update.', '2020-11-28 23:00:21'),
(91, 'RainLab.Builder', 'comment', '1.0.11', 'Fixed a bug where clicking placeholder in a repeater would open Inspector. Fixed a problem with saving forms with repeaters in tabs. Minor style fix.', '2020-11-28 23:00:21'),
(92, 'RainLab.Builder', 'comment', '1.0.12', 'Added support for the Trigger property to the Media Finder widget configuration. Names of form fields and list columns definition files can now contain underscores.', '2020-11-28 23:00:21'),
(93, 'RainLab.Builder', 'comment', '1.0.13', 'Minor styling fix on the database editor.', '2020-11-28 23:00:21'),
(94, 'RainLab.Builder', 'comment', '1.0.14', 'Added support for published_at timestamp field', '2020-11-28 23:00:21'),
(95, 'RainLab.Builder', 'comment', '1.0.15', 'Fixed a bug where saving a localization string in Inspector could cause a JavaScript error. Added support for Timestamps and Soft Deleting for new models.', '2020-11-28 23:00:21'),
(96, 'RainLab.Builder', 'comment', '1.0.16', 'Fixed a bug when saving a form with the Repeater widget in a tab could create invalid fields in the form\'s outside area. Added a check that prevents creating localization strings inside other existing strings.', '2020-11-28 23:00:21'),
(97, 'RainLab.Builder', 'comment', '1.0.17', 'Added support Trigger attribute support for RecordFinder and Repeater form widgets.', '2020-11-28 23:00:21'),
(98, 'RainLab.Builder', 'comment', '1.0.18', 'Fixes a bug where \'::class\' notations in a model class definition could prevent the model from appearing in the Builder model list. Added emptyOption property support to the dropdown form control.', '2020-11-28 23:00:21'),
(99, 'RainLab.Builder', 'comment', '1.0.19', 'Added a feature allowing to add all database columns to a list definition. Added max length validation for database table and column names.', '2020-11-28 23:00:21'),
(100, 'RainLab.Builder', 'comment', '1.0.20', 'Fixes a bug where form the builder could trigger the \"current.hasAttribute is not a function\" error.', '2020-11-28 23:00:21'),
(101, 'RainLab.Builder', 'comment', '1.0.21', 'Back-end navigation sort order updated.', '2020-11-28 23:00:21'),
(102, 'RainLab.Builder', 'comment', '1.0.22', 'Added scopeValue property to the RecordList component.', '2020-11-28 23:00:21'),
(103, 'RainLab.Builder', 'comment', '1.0.23', 'Added support for balloon-selector field type, added Brazilian Portuguese translation, fixed some bugs', '2020-11-28 23:00:21'),
(104, 'RainLab.Builder', 'comment', '1.0.24', 'Added support for tag list field type, added read only toggle for fields. Prevent plugins from using reserved PHP keywords for class names and namespaces', '2020-11-28 23:00:21'),
(105, 'RainLab.Builder', 'comment', '1.0.25', 'Allow editing of migration code in the \"Migration\" popup when saving changes in the database editor.', '2020-11-28 23:00:21'),
(106, 'RainLab.Builder', 'comment', '1.0.26', 'Allow special default values for columns and added new \"Add ID column\" button to database editor.', '2020-11-28 23:00:21'),
(107, 'RainLab.Pages', 'comment', '1.0.1', 'Implemented the static pages management and the Static Page component.', '2020-11-28 23:00:21'),
(108, 'RainLab.Pages', 'comment', '1.0.2', 'Fixed the page preview URL.', '2020-11-28 23:00:21'),
(109, 'RainLab.Pages', 'comment', '1.0.3', 'Implemented menus.', '2020-11-28 23:00:21'),
(110, 'RainLab.Pages', 'comment', '1.0.4', 'Implemented the content block management and placeholder support.', '2020-11-28 23:00:21'),
(111, 'RainLab.Pages', 'comment', '1.0.5', 'Added support for the Sitemap plugin.', '2020-11-28 23:00:21'),
(112, 'RainLab.Pages', 'comment', '1.0.6', 'Minor updates to the internal API.', '2020-11-28 23:00:21'),
(113, 'RainLab.Pages', 'comment', '1.0.7', 'Added the Snippets feature.', '2020-11-28 23:00:21'),
(114, 'RainLab.Pages', 'comment', '1.0.8', 'Minor improvements to the code.', '2020-11-28 23:00:21'),
(115, 'RainLab.Pages', 'comment', '1.0.9', 'Fixes issue where Snippet tab is missing from the Partials form.', '2020-11-28 23:00:21'),
(116, 'RainLab.Pages', 'comment', '1.0.10', 'Add translations for various locales.', '2020-11-28 23:00:21'),
(117, 'RainLab.Pages', 'comment', '1.0.11', 'Fixes issue where placeholders tabs were missing from Page form.', '2020-11-28 23:00:21'),
(118, 'RainLab.Pages', 'comment', '1.0.12', 'Implement Media Manager support.', '2020-11-28 23:00:21'),
(119, 'RainLab.Pages', 'script', '1.1.0', 'snippets_rename_viewbag_properties.php', '2020-11-28 23:00:21'),
(120, 'RainLab.Pages', 'comment', '1.1.0', 'Adds meta title and description to pages. Adds |staticPage filter.', '2020-11-28 23:00:21'),
(121, 'RainLab.Pages', 'comment', '1.1.1', 'Add support for Syntax Fields.', '2020-11-28 23:00:21'),
(122, 'RainLab.Pages', 'comment', '1.1.2', 'Static Breadcrumbs component now respects the hide from navigation setting.', '2020-11-28 23:00:21'),
(123, 'RainLab.Pages', 'comment', '1.1.3', 'Minor back-end styling fix.', '2020-11-28 23:00:21'),
(124, 'RainLab.Pages', 'comment', '1.1.4', 'Minor fix to the StaticPage component API.', '2020-11-28 23:00:21'),
(125, 'RainLab.Pages', 'comment', '1.1.5', 'Fixes bug when using syntax fields.', '2020-11-28 23:00:21'),
(126, 'RainLab.Pages', 'comment', '1.1.6', 'Minor styling fix to the back-end UI.', '2020-11-28 23:00:21'),
(127, 'RainLab.Pages', 'comment', '1.1.7', 'Improved menu item form to include CSS class, open in a new window and hidden flag.', '2020-11-28 23:00:21'),
(128, 'RainLab.Pages', 'comment', '1.1.8', 'Improved the output of snippet partials when saved.', '2020-11-28 23:00:21'),
(129, 'RainLab.Pages', 'comment', '1.1.9', 'Minor update to snippet inspector internal API.', '2020-11-28 23:00:21'),
(130, 'RainLab.Pages', 'comment', '1.1.10', 'Fixes a bug where selecting a layout causes permanent unsaved changes.', '2020-11-28 23:00:21'),
(131, 'RainLab.Pages', 'comment', '1.1.11', 'Add support for repeater syntax field.', '2020-11-28 23:00:21'),
(132, 'RainLab.Pages', 'comment', '1.2.0', 'Added support for translations, UI updates.', '2020-11-28 23:00:21'),
(133, 'RainLab.Pages', 'comment', '1.2.1', 'Use nice titles when listing the content files.', '2020-11-28 23:00:21'),
(134, 'RainLab.Pages', 'comment', '1.2.2', 'Minor styling update.', '2020-11-28 23:00:21'),
(135, 'RainLab.Pages', 'comment', '1.2.3', 'Snippets can now be moved by dragging them.', '2020-11-28 23:00:21'),
(136, 'RainLab.Pages', 'comment', '1.2.4', 'Fixes a bug where the cursor is misplaced when editing text files.', '2020-11-28 23:00:21'),
(137, 'RainLab.Pages', 'comment', '1.2.5', 'Fixes a bug where the parent page is lost upon changing a page layout.', '2020-11-28 23:00:21'),
(138, 'RainLab.Pages', 'comment', '1.2.6', 'Shared view variables are now passed to static pages.', '2020-11-28 23:00:21'),
(139, 'RainLab.Pages', 'comment', '1.2.7', 'Fixes issue with duplicating properties when adding multiple snippets on the same page.', '2020-11-28 23:00:21'),
(140, 'RainLab.Pages', 'comment', '1.2.8', 'Fixes a bug where creating a content block without extension doesn\'t save the contents to file.', '2020-11-28 23:00:21'),
(141, 'RainLab.Pages', 'comment', '1.2.9', 'Add conditional support for translating page URLs.', '2020-11-28 23:00:21'),
(142, 'RainLab.Pages', 'comment', '1.2.10', 'Streamline generation of URLs to use the new Cms::url helper.', '2020-11-28 23:00:21'),
(143, 'RainLab.Pages', 'comment', '1.2.11', 'Implements repeater usage with translate plugin.', '2020-11-28 23:00:21'),
(144, 'RainLab.Pages', 'comment', '1.2.12', 'Fixes minor issue when using snippets and switching the application locale.', '2020-11-28 23:00:21'),
(145, 'RainLab.Pages', 'comment', '1.2.13', 'Fixes bug when AJAX is used on a page that does not yet exist.', '2020-11-28 23:00:21'),
(146, 'RainLab.Pages', 'comment', '1.2.14', 'Add theme logging support for changes made to menus.', '2020-11-28 23:00:21'),
(147, 'RainLab.Pages', 'comment', '1.2.15', 'Back-end navigation sort order updated.', '2020-11-28 23:00:21'),
(148, 'RainLab.Pages', 'comment', '1.2.16', 'Fixes a bug when saving a template that has been modified outside of the CMS (mtime mismatch).', '2020-11-28 23:00:21'),
(149, 'RainLab.Pages', 'comment', '1.2.17', 'Changes locations of custom fields to secondary tabs instead of the primary Settings area. New menu search ability on adding menu items', '2020-11-28 23:00:21'),
(150, 'RainLab.Pages', 'comment', '1.2.18', 'Fixes cache-invalidation issues when RainLab.Translate is not installed. Added Greek & Simplified Chinese translations. Removed deprecated calls. Allowed saving HTML in snippet properties. Added support for the MediaFinder in menu items.', '2020-11-28 23:00:21'),
(151, 'RainLab.Pages', 'comment', '1.2.19', 'Catch exception with corrupted menu file.', '2020-11-28 23:00:21'),
(152, 'RainLab.Pages', 'comment', '1.2.20', 'StaticMenu component now exposes menuName property; added pages.menu.referencesGenerated event.', '2020-11-28 23:00:21'),
(153, 'RainLab.Pages', 'comment', '1.2.21', 'Fixes a bug where last Static Menu item cannot be deleted. Improved Persian, Slovak and Turkish translations.', '2020-11-28 23:00:21'),
(154, 'RainLab.Pages', 'comment', '1.3.0', 'Added support for using Database-driven Themes when enabled in the CMS configuration.', '2020-11-28 23:00:21'),
(155, 'RainLab.Pages', 'comment', '1.3.1', 'Added ChildPages Component, prevent hidden pages from being returned via menu item resolver.', '2020-11-28 23:00:21'),
(156, 'RainLab.Pages', 'comment', '1.3.2', 'Fixes error when creating a subpage whose parent has no layout set.', '2020-11-28 23:00:21'),
(157, 'RainLab.Pages', 'comment', '1.3.3', 'Improves user experience for users with only partial access through permissions', '2020-11-28 23:00:21'),
(158, 'RainLab.Pages', 'comment', '1.3.4', 'Fix error where large menus were being truncated due to the PHP \"max_input_vars\" configuration value. Improved Slovenian translation.', '2020-11-28 23:00:21'),
(159, 'RainLab.Pages', 'comment', '1.3.5', 'Minor fix to bust the browser cache for JS assets. Prevent duplicate property fields in snippet inspector.', '2020-11-28 23:00:21'),
(160, 'RainLab.User', 'script', '1.0.1', 'create_users_table.php', '2020-11-28 23:00:21'),
(161, 'RainLab.User', 'script', '1.0.1', 'create_throttle_table.php', '2020-11-28 23:00:21'),
(162, 'RainLab.User', 'comment', '1.0.1', 'Initialize plugin.', '2020-11-28 23:00:21'),
(163, 'RainLab.User', 'comment', '1.0.2', 'Seed tables.', '2020-11-28 23:00:21'),
(164, 'RainLab.User', 'comment', '1.0.3', 'Translated hard-coded text to language strings.', '2020-11-28 23:00:21'),
(165, 'RainLab.User', 'comment', '1.0.4', 'Improvements to user-interface for Location manager.', '2020-11-28 23:00:21'),
(166, 'RainLab.User', 'comment', '1.0.5', 'Added contact details for users.', '2020-11-28 23:00:21'),
(167, 'RainLab.User', 'script', '1.0.6', 'create_mail_blockers_table.php', '2020-11-28 23:00:22'),
(168, 'RainLab.User', 'comment', '1.0.6', 'Added Mail Blocker utility so users can block specific mail templates.', '2020-11-28 23:00:22'),
(169, 'RainLab.User', 'comment', '1.0.7', 'Add back-end Settings page.', '2020-11-28 23:00:22'),
(170, 'RainLab.User', 'comment', '1.0.8', 'Updated the Settings page.', '2020-11-28 23:00:22'),
(171, 'RainLab.User', 'comment', '1.0.9', 'Adds new welcome mail message for users and administrators.', '2020-11-28 23:00:22'),
(172, 'RainLab.User', 'comment', '1.0.10', 'Adds administrator-only activation mode.', '2020-11-28 23:00:22'),
(173, 'RainLab.User', 'script', '1.0.11', 'users_add_login_column.php', '2020-11-28 23:00:22'),
(174, 'RainLab.User', 'comment', '1.0.11', 'Users now have an optional login field that defaults to the email field.', '2020-11-28 23:00:22'),
(175, 'RainLab.User', 'script', '1.0.12', 'users_rename_login_to_username.php', '2020-11-28 23:00:22'),
(176, 'RainLab.User', 'comment', '1.0.12', 'Create a dedicated setting for choosing the login mode.', '2020-11-28 23:00:22'),
(177, 'RainLab.User', 'comment', '1.0.13', 'Minor fix to the Account sign in logic.', '2020-11-28 23:00:22'),
(178, 'RainLab.User', 'comment', '1.0.14', 'Minor improvements to the code.', '2020-11-28 23:00:22'),
(179, 'RainLab.User', 'script', '1.0.15', 'users_add_surname.php', '2020-11-28 23:00:22'),
(180, 'RainLab.User', 'comment', '1.0.15', 'Adds last name column to users table (surname).', '2020-11-28 23:00:22'),
(181, 'RainLab.User', 'comment', '1.0.16', 'Require permissions for settings page too.', '2020-11-28 23:00:22'),
(182, 'RainLab.User', 'comment', '1.1.0', '!!! Profile fields and Locations have been removed.', '2020-11-28 23:00:22'),
(183, 'RainLab.User', 'script', '1.1.1', 'create_user_groups_table.php', '2020-11-28 23:00:22'),
(184, 'RainLab.User', 'script', '1.1.1', 'seed_user_groups_table.php', '2020-11-28 23:00:22'),
(185, 'RainLab.User', 'comment', '1.1.1', 'Users can now be added to groups.', '2020-11-28 23:00:22'),
(186, 'RainLab.User', 'comment', '1.1.2', 'A raw URL can now be passed as the redirect property in the Account component.', '2020-11-28 23:00:22'),
(187, 'RainLab.User', 'comment', '1.1.3', 'Adds a super user flag to the users table, reserved for future use.', '2020-11-28 23:00:22'),
(188, 'RainLab.User', 'comment', '1.1.4', 'User list can be filtered by the group they belong to.', '2020-11-28 23:00:22'),
(189, 'RainLab.User', 'comment', '1.1.5', 'Adds a new permission to hide the User settings menu item.', '2020-11-28 23:00:22'),
(190, 'RainLab.User', 'script', '1.2.0', 'users_add_deleted_at.php', '2020-11-28 23:00:22'),
(191, 'RainLab.User', 'comment', '1.2.0', 'Users can now deactivate their own accounts.', '2020-11-28 23:00:22'),
(192, 'RainLab.User', 'comment', '1.2.1', 'New feature for checking if a user is recently active/online.', '2020-11-28 23:00:22'),
(193, 'RainLab.User', 'comment', '1.2.2', 'Add bulk action button to user list.', '2020-11-28 23:00:22'),
(194, 'RainLab.User', 'comment', '1.2.3', 'Included some descriptive paragraphs in the Reset Password component markup.', '2020-11-28 23:00:22'),
(195, 'RainLab.User', 'comment', '1.2.4', 'Added a checkbox for blocking all mail sent to the user.', '2020-11-28 23:00:22'),
(196, 'RainLab.User', 'script', '1.2.5', 'update_timestamp_nullable.php', '2020-11-28 23:00:22'),
(197, 'RainLab.User', 'comment', '1.2.5', 'Database maintenance. Updated all timestamp columns to be nullable.', '2020-11-28 23:00:22'),
(198, 'RainLab.User', 'script', '1.2.6', 'users_add_last_seen.php', '2020-11-28 23:00:22'),
(199, 'RainLab.User', 'comment', '1.2.6', 'Add a dedicated last seen column for users.', '2020-11-28 23:00:22'),
(200, 'RainLab.User', 'comment', '1.2.7', 'Minor fix to user timestamp attributes.', '2020-11-28 23:00:22'),
(201, 'RainLab.User', 'comment', '1.2.8', 'Add date range filter to users list. Introduced a logout event.', '2020-11-28 23:00:22'),
(202, 'RainLab.User', 'comment', '1.2.9', 'Add invitation mail for new accounts created in the back-end.', '2020-11-28 23:00:22'),
(203, 'RainLab.User', 'script', '1.3.0', 'users_add_guest_flag.php', '2020-11-28 23:00:22'),
(204, 'RainLab.User', 'script', '1.3.0', 'users_add_superuser_flag.php', '2020-11-28 23:00:22'),
(205, 'RainLab.User', 'comment', '1.3.0', 'Introduced guest user accounts.', '2020-11-28 23:00:22'),
(206, 'RainLab.User', 'comment', '1.3.1', 'User notification variables can now be extended.', '2020-11-28 23:00:22'),
(207, 'RainLab.User', 'comment', '1.3.2', 'Minor fix to the Auth::register method.', '2020-11-28 23:00:22'),
(208, 'RainLab.User', 'comment', '1.3.3', 'Allow prevention of concurrent user sessions via the user settings.', '2020-11-28 23:00:22'),
(209, 'RainLab.User', 'comment', '1.3.4', 'Added force secure protocol property to the account component.', '2020-11-28 23:00:22'),
(210, 'RainLab.User', 'comment', '1.4.0', '!!! The Notifications tab in User settings has been removed.', '2020-11-28 23:00:22'),
(211, 'RainLab.User', 'comment', '1.4.1', 'Added support for user impersonation.', '2020-11-28 23:00:22'),
(212, 'RainLab.User', 'comment', '1.4.2', 'Fixes security bug in Password Reset component.', '2020-11-28 23:00:22'),
(213, 'RainLab.User', 'comment', '1.4.3', 'Fixes session handling for AJAX requests.', '2020-11-28 23:00:22'),
(214, 'RainLab.User', 'comment', '1.4.4', 'Fixes bug where impersonation touches the last seen timestamp.', '2020-11-28 23:00:22'),
(215, 'RainLab.User', 'comment', '1.4.5', 'Added token fallback process to Account / Reset Password components when parameter is missing.', '2020-11-28 23:00:22'),
(216, 'RainLab.User', 'comment', '1.4.6', 'Fixes Auth::register method signature mismatch with core OctoberCMS Auth library', '2020-11-28 23:00:22'),
(217, 'RainLab.User', 'comment', '1.4.7', 'Fixes redirect bug in Account component / Update translations and separate user and group management.', '2020-11-28 23:00:22'),
(218, 'RainLab.User', 'comment', '1.4.8', 'Fixes a bug where calling MailBlocker::removeBlock could remove all mail blocks for the user.', '2020-11-28 23:00:22'),
(219, 'RainLab.User', 'comment', '1.5.0', '!!! Required password length is now a minimum of 8 characters. Previous passwords will not be affected until the next password change.', '2020-11-28 23:00:22'),
(220, 'RainLab.User', 'script', '1.5.1', 'users_add_ip_address.php', '2020-11-28 23:00:22'),
(221, 'RainLab.User', 'comment', '1.5.1', 'User IP addresses are now logged. Introduce registration throttle.', '2020-11-28 23:00:22'),
(222, 'RainLab.User', 'comment', '1.5.2', 'Whitespace from usernames is now trimmed, allowed for username to be added to Reset Password mail templates.', '2020-11-28 23:00:22'),
(223, 'RainLab.User', 'comment', '1.5.3', 'Fixes a bug in the user update functionality if password is not changed. Added highlighting for banned users in user list.', '2020-11-28 23:00:22'),
(224, 'Pixel.Store', 'script', '1.0.14', 'builder_table_create_pixel_store_product.php', '2020-12-05 07:59:52'),
(225, 'Pixel.Store', 'comment', '1.0.14', 'Created table pixel_store_product', '2020-12-05 07:59:52'),
(226, 'Pixel.Store', 'script', '1.0.15', 'builder_table_update_pixel_store_product.php', '2020-12-05 08:19:13'),
(227, 'Pixel.Store', 'comment', '1.0.15', 'Updated table pixel_store_product', '2020-12-05 08:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_versions`
--

CREATE TABLE `system_plugin_versions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT 0,
  `is_frozen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_plugin_versions`
--

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`) VALUES
(1, 'Indikator.DevTools', '1.2.1', '2020-11-28 23:00:20', 0, 0),
(2, 'Martin.Adminer', '1.7.4', '2020-11-28 23:00:20', 0, 0),
(3, 'October.Demo', '1.0.1', '2020-11-28 23:00:20', 0, 0),
(4, 'Pixel.Store', '1.0.15', '2020-12-05 08:19:13', 0, 0),
(5, 'RainLab.Builder', '1.0.26', '2020-11-28 23:00:21', 0, 0),
(6, 'RainLab.Pages', '1.3.5', '2020-11-28 23:00:21', 0, 0),
(7, 'RainLab.User', '1.5.3', '2020-11-28 23:00:22', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_request_logs`
--

CREATE TABLE `system_request_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_code` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_revisions`
--

CREATE TABLE `system_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `item`, `value`) VALUES
(1, 'martin_adminer_settings', '{\"mode\":\"1\",\"autologin\":\"1\",\"hide_menu\":\"0\",\"use_connection\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persist_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `is_guest` tinyint(1) NOT NULL DEFAULT 0,
  `is_superuser` tinyint(1) NOT NULL DEFAULT 0,
  `created_ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Guest', 'guest', 'Default group for guest users.', '2020-11-28 23:00:22', '2020-11-28 23:00:22'),
(2, 'Registered', 'registered', 'Default group for registered users.', '2020-11-28 23:00:22', '2020-11-28 23:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_throttle`
--

CREATE TABLE `user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT 0,
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT 0,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT 0,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend_access_log`
--
ALTER TABLE `backend_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend_users`
--
ALTER TABLE `backend_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_unique` (`login`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD KEY `act_code_index` (`activation_code`),
  ADD KEY `reset_code_index` (`reset_password_code`),
  ADD KEY `admin_role_index` (`role_id`);

--
-- Indexes for table `backend_users_groups`
--
ALTER TABLE `backend_users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Indexes for table `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_unique` (`name`),
  ADD KEY `code_index` (`code`);

--
-- Indexes for table `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`);

--
-- Indexes for table `backend_user_roles`
--
ALTER TABLE `backend_user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_unique` (`name`),
  ADD KEY `role_code_index` (`code`);

--
-- Indexes for table `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `backend_user_throttle_user_id_index` (`user_id`),
  ADD KEY `backend_user_throttle_ip_address_index` (`ip_address`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_data_theme_index` (`theme`);

--
-- Indexes for table `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_logs_type_index` (`type`),
  ADD KEY `cms_theme_logs_theme_index` (`theme`),
  ADD KEY `cms_theme_logs_user_id_index` (`user_id`);

--
-- Indexes for table `cms_theme_templates`
--
ALTER TABLE `cms_theme_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_templates_source_index` (`source`),
  ADD KEY `cms_theme_templates_path_index` (`path`);

--
-- Indexes for table `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deferred_bindings_master_type_index` (`master_type`),
  ADD KEY `deferred_bindings_master_field_index` (`master_field`),
  ADD KEY `deferred_bindings_slave_type_index` (`slave_type`),
  ADD KEY `deferred_bindings_slave_id_index` (`slave_id`),
  ADD KEY `deferred_bindings_session_key_index` (`session_key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_brand`
--
ALTER TABLE `pixel_store_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_category`
--
ALTER TABLE `pixel_store_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_collection_banner`
--
ALTER TABLE `pixel_store_collection_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_discount_banner`
--
ALTER TABLE `pixel_store_discount_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_general`
--
ALTER TABLE `pixel_store_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_gift`
--
ALTER TABLE `pixel_store_gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_product`
--
ALTER TABLE `pixel_store_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pixel_store_slider`
--
ALTER TABLE `pixel_store_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rainlab_user_mail_blockers`
--
ALTER TABLE `rainlab_user_mail_blockers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_user_mail_blockers_email_index` (`email`),
  ADD KEY `rainlab_user_mail_blockers_template_index` (`template`),
  ADD KEY `rainlab_user_mail_blockers_user_id_index` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `system_event_logs`
--
ALTER TABLE `system_event_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_event_logs_level_index` (`level`);

--
-- Indexes for table `system_files`
--
ALTER TABLE `system_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_files_field_index` (`field`),
  ADD KEY `system_files_attachment_id_index` (`attachment_id`),
  ADD KEY `system_files_attachment_type_index` (`attachment_type`);

--
-- Indexes for table `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_mail_partials`
--
ALTER TABLE `system_mail_partials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_mail_templates_layout_id_index` (`layout_id`);

--
-- Indexes for table `system_parameters`
--
ALTER TABLE `system_parameters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_index` (`namespace`,`group`,`item`);

--
-- Indexes for table `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_history_code_index` (`code`),
  ADD KEY `system_plugin_history_type_index` (`type`);

--
-- Indexes for table `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_versions_code_index` (`code`);

--
-- Indexes for table `system_request_logs`
--
ALTER TABLE `system_request_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_revisions`
--
ALTER TABLE `system_revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`),
  ADD KEY `system_revisions_user_id_index` (`user_id`),
  ADD KEY `system_revisions_field_index` (`field`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_settings_item_index` (`item`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_login_unique` (`username`),
  ADD KEY `users_activation_code_index` (`activation_code`),
  ADD KEY `users_reset_password_code_index` (`reset_password_code`),
  ADD KEY `users_login_index` (`username`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_groups_code_index` (`code`);

--
-- Indexes for table `user_throttle`
--
ALTER TABLE `user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_throttle_user_id_index` (`user_id`),
  ADD KEY `user_throttle_ip_address_index` (`ip_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backend_access_log`
--
ALTER TABLE `backend_access_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_users`
--
ALTER TABLE `backend_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `backend_user_roles`
--
ALTER TABLE `backend_user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_theme_templates`
--
ALTER TABLE `cms_theme_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pixel_store_brand`
--
ALTER TABLE `pixel_store_brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pixel_store_category`
--
ALTER TABLE `pixel_store_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pixel_store_collection_banner`
--
ALTER TABLE `pixel_store_collection_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pixel_store_discount_banner`
--
ALTER TABLE `pixel_store_discount_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pixel_store_general`
--
ALTER TABLE `pixel_store_general`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pixel_store_gift`
--
ALTER TABLE `pixel_store_gift`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pixel_store_product`
--
ALTER TABLE `pixel_store_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pixel_store_slider`
--
ALTER TABLE `pixel_store_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rainlab_user_mail_blockers`
--
ALTER TABLE `rainlab_user_mail_blockers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_event_logs`
--
ALTER TABLE `system_event_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_files`
--
ALTER TABLE `system_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_mail_partials`
--
ALTER TABLE `system_mail_partials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_parameters`
--
ALTER TABLE `system_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_request_logs`
--
ALTER TABLE `system_request_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_revisions`
--
ALTER TABLE `system_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_throttle`
--
ALTER TABLE `user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
