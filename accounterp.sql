-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 12:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyet_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `name`, `short_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HRA', 'hra', 1, 1, 1, '2021-05-11 22:58:00', '2021-05-11 22:59:57', NULL),
(2, 'Travel', 'travel', 1, 1, NULL, '2021-05-11 22:58:32', '2021-05-11 22:58:32', NULL),
(3, 'Medical', 'medical', 1, 1, NULL, '2021-05-11 22:58:56', '2021-05-11 22:58:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_datetime` datetime NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 => InActive, 1 => Published, 2 => Draft, 3 => Scheduled',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `publish_datetime`, `featured_image`, `content`, `meta_title`, `cannonical_link`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'vel vero provident', '2013-06-19 06:00:20', NULL, 'Autem ut numquam eum consequatur. Unde consectetur excepturi voluptas sed. Corrupti eaque rerum provident culpa enim numquam perspiciatis.', 'fugit at unde', 'http://krajcik.net/quisquam-quia-qui-reprehenderit-quas-qui-aut-id', 'et-aut-harum-adipisci-similique', 'Est similique velit cum in soluta aut voluptas. Officiis aut vel ipsa quia. Excepturi eum qui tenetur ut necessitatibus aut rerum.', 'ullam', 0, 5, NULL, '2021-04-05 04:29:58', '2021-04-05 04:29:58', NULL),
(2, 'accusamus reiciendis consequatur', '2010-08-08 05:01:36', NULL, 'Impedit voluptate et iste consequatur magnam. Dolorem porro cumque autem recusandae dolor dicta. Sunt suscipit facilis iusto amet recusandae. Ut omnis fuga eius enim maxime.', 'sit fugiat vel', 'https://larkin.org/et-non-dolores-ex-omnis-necessitatibus-modi.html', 'sint-non-voluptatum-magnam-aut-quos', 'Eos minus omnis qui et nam nihil harum tempora. Sint sit nobis exercitationem incidunt saepe. Nesciunt minus quam non nam. Aperiam perferendis tempora omnis harum a excepturi quos.', 'autem', 2, 5, NULL, '2021-04-05 04:29:58', '2021-04-05 04:29:58', NULL),
(3, 'quas eos qui', '1992-07-14 20:15:24', NULL, 'Beatae ipsum id expedita architecto quia magnam. Aut odio blanditiis possimus culpa. Rerum rerum quidem molestiae culpa nisi nesciunt sint. Alias numquam asperiores nisi adipisci voluptatem.', 'magnam hic soluta', 'http://www.friesen.com/quidem-vitae-ut-aliquam-omnis-repellendus-atque-repellat', 'doloribus-dolore-cupiditate-repellendus-dolor', 'Veniam ullam nobis porro omnis et qui. Sapiente quisquam aut in in. Placeat quia in quae sunt est. Fugiat magni delectus animi veritatis vitae magni quis.', 'consequatur', 3, 5, NULL, '2021-04-05 04:29:58', '2021-04-05 04:29:58', NULL),
(4, 'voluptatem dolore ipsam', '2015-05-23 22:20:16', NULL, 'Ratione soluta sit quae ipsum suscipit et. Voluptatem ducimus veritatis magni cumque odio. Aperiam tempora et unde.', 'omnis aut corrupti', 'https://www.zulauf.com/sit-perspiciatis-doloribus-sed-nihil-eaque-dolorum-quaerat', 'nihil-corrupti-sint-doloribus-est-dolor', 'Sed odit eligendi ab et est modi dicta. Aliquid quaerat voluptatem nisi autem qui suscipit ipsa.', 'est', 2, 5, NULL, '2021-04-05 04:29:58', '2021-04-05 04:29:58', NULL),
(5, 'illo molestias ut', '2003-08-10 10:24:21', NULL, 'Quia non consequatur dolor voluptas. Sapiente voluptatibus dolorem harum aut provident. Accusantium facilis aut accusamus.', 'ipsum eos ex', 'http://pollich.org/', 'veritatis-occaecati-autem-aliquid-sit', 'Corporis cupiditate quia aut. Qui aut placeat velit culpa quibusdam sed. Praesentium quae officia cupiditate sint doloremque accusamus est.', 'itaque', 0, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(6, 'minus eos velit', '1979-08-05 18:16:06', NULL, 'Repellendus molestiae et rem aliquid sed et. Sit repudiandae rerum dolor. Laboriosam mollitia animi animi id ut nostrum quibusdam.', 'culpa et consectetur', 'http://fisher.com/dolor-fugiat-sint-ad-eum-soluta-ipsa-minus', 'deserunt-repudiandae-expedita-impedit-assumenda-quaerat-aut', 'Et magnam rerum quia. Ex eum rem et inventore hic. Perferendis qui porro quae doloremque nesciunt. Porro dolore repudiandae qui quo inventore nostrum dolorem voluptas.', 'nulla', 3, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(7, 'nihil laborum qui', '2001-01-23 03:17:15', NULL, 'Eligendi nam et libero. Enim illum neque culpa debitis. Et dolores est eius. Est at quibusdam quos alias et amet. Aut voluptatum nam ratione.', 'qui repellendus consequatur', 'http://www.parisian.biz/et-ut-ut-sequi-molestias-in-vero-necessitatibus', 'qui-asperiores-vel-eligendi-illo-ipsa', 'Non pariatur saepe quae rem voluptas non natus. Aspernatur doloremque enim quia repellendus ex esse culpa. Quos impedit neque officia voluptatem voluptas dolores quis. Consequatur dignissimos et rem possimus recusandae tenetur et.', 'est', 0, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(8, 'et vel voluptas', '2021-02-09 07:02:30', NULL, 'Aliquid aspernatur delectus maxime molestiae. Quia quo ut nihil tempore molestiae aut. Delectus eum debitis totam corrupti quia dolor doloribus.', 'et enim vero', 'http://www.muller.com/nisi-provident-qui-quas-est.html', 'numquam-est-in-non-est-dolores-qui-amet', 'Facilis debitis sit repellat dolorem ut sit ab. Illum asperiores quam modi vel aut. Dolores quaerat necessitatibus optio magnam omnis ratione unde. Sequi eum quas a iste animi consequatur.', 'ea', 3, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(9, 'delectus rem quis', '2005-06-10 16:36:41', NULL, 'Tenetur saepe neque occaecati saepe. Temporibus doloremque sapiente reiciendis sunt. Quia eos omnis culpa omnis et. Tenetur facilis veniam ea quo velit.', 'voluptas aspernatur eligendi', 'http://kohler.com/enim-sunt-repellat-ipsa-dolores-possimus', 'quo-cupiditate-consectetur-magni-fugiat-quia', 'Fugiat ut nostrum et fuga sint neque mollitia. Facilis maiores totam assumenda repudiandae. Ea ea iure voluptate quo quasi.', 'sed', 1, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(10, 'nihil tempore perferendis', '1978-07-20 00:42:16', NULL, 'Ad commodi quae dolore tempore aliquid ut. Harum perferendis iure sint cumque vel. Et quos natus ea dolorem animi. Qui et dolor iusto rerum.', 'velit soluta veniam', 'http://www.maggio.info/rerum-quia-et-cupiditate-minus-quasi', 'sed-vel-qui-eos-sunt-iusto-vero', 'Id et officiis facere velit asperiores aliquid. Nihil corporis eaque et est sed cumque optio. Blanditiis quo voluptas est dolorem et magnam natus. Et aut exercitationem magnam deserunt.', 'odio', 3, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'quis eos omnis', 1, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(2, 'est ducimus sunt', 1, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(3, 'facilis sed qui', 0, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(4, 'officiis cum dolor', 0, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(5, 'nihil reiciendis qui', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(6, 'laboriosam et aut', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(7, 'velit explicabo laudantium', 1, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(8, 'eum vitae blanditiis', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(9, 'temporibus quaerat aut', 1, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(10, 'quos distinctio ut', 1, 5, NULL, '2021-04-05 04:30:01', '2021-04-05 04:30:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_map_categories`
--

CREATE TABLE `blog_map_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_map_categories`
--

INSERT INTO `blog_map_categories` (`id`, `blog_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `blog_map_tags`
--

CREATE TABLE `blog_map_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_map_tags`
--

INSERT INTO `blog_map_tags` (`id`, `blog_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'facere', 0, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(2, 'eveniet', 1, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(3, 'molestiae', 1, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(4, 'velit', 0, 5, NULL, '2021-04-05 04:29:59', '2021-04-05 04:29:59', NULL),
(5, 'sed', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(6, 'aperiam', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(7, 'odio', 1, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(8, 'labore', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(9, 'praesentium', 0, 5, NULL, '2021-04-05 04:30:00', '2021-04-05 04:30:00', NULL),
(10, 'eligendi', 1, 5, NULL, '2021-04-05 04:30:01', '2021-04-05 04:30:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(13) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `company_id`, `email`, `phoneno`, `address`, `website`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Global Eyet India', 9, 'info@globaleyet.com', '0471-234567', 'Attingal, TVM, Kerala', 'globaleyet.com', 1, 1, 1, '2021-04-05 04:29:59', '2021-04-09 05:23:02', NULL),
(16, 'Branch1', 1, 'brach@mail.com', '8994556567567', 'India', 'branch.com', 1, 1, 1, '2021-04-09 02:45:54', '2021-04-09 05:22:56', NULL),
(17, 'Branch2', 13, 'brach1@mail.com', '8994556567567', 'India', 'branch1.com', 1, 1, 1, '2021-04-09 02:49:10', '2021-04-09 05:22:48', NULL),
(18, 'Branch3 update', NULL, 'brach3@mail.com', '8994556567567', 'India', 'branch2.com', 0, 1, 1, '2021-04-09 02:50:32', '2021-04-09 03:02:01', '2021-04-09 03:02:01'),
(19, 'New Branch', 9, 'admin@admin.com', '8994556567567', 'KL', 'newrobin.com', 1, 1, 1, '2021-04-09 05:15:34', '2021-04-09 05:22:39', NULL),
(20, 'Branch techs', 15, 'admin@admin.com', '8994556567567', 's1', 'robin.com', 1, 1, 1, '2021-04-09 05:16:12', '2021-04-09 05:22:33', NULL),
(21, 'Banglore', 16, 'hcladmin@admin.com', '8994556567567', 'trr', 'robin.com', 1, 1, NULL, '2021-04-12 01:37:48', '2021-04-12 01:37:48', NULL),
(22, 'Wipro Bangalore', 17, 'wwwadmin@admin.com', '9712333', 'test', 'banrobin.com', 1, 1, NULL, '2021-04-18 00:13:05', '2021-04-18 00:13:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Brands1 c', 1, 1, 1, '2021-04-12 06:42:20', '2021-04-12 06:55:15', '2021-04-12 06:55:15'),
(2, 'Brands2', 1, 1, NULL, '2021-04-12 06:46:11', '2021-04-12 06:46:11', NULL),
(3, 'SAADASD', 1, 1, 1, '2021-04-12 06:56:15', '2021-04-12 06:57:58', NULL),
(4, 'Brands1', 1, 1, NULL, '2021-04-18 00:43:20', '2021-04-18 00:43:25', '2021-04-18 00:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(12) DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Mobiles', NULL, 1, 1, 1, '2021-04-12 06:30:00', '2021-04-12 06:33:59', NULL),
(11, 'Samsung Mobile', 8, 1, 1, 1, '2021-04-26 05:17:33', '2021-04-26 05:20:39', NULL),
(14, 'Iphone', 8, 1, 1, NULL, '2021-04-27 05:11:31', '2021-04-27 05:11:31', NULL),
(15, 'Redme', 8, 1, 1, NULL, '2021-04-27 05:11:43', '2021-04-27 05:11:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phoneno`, `address`, `website`, `currency`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Global Eyet', 'info@globaleyet.com', '0471-234567', 'Attingal, TVM, Kerala', 'globaleyet.com', 'INR', 1, 1, 1, '2021-04-05 04:29:59', '2021-04-27 00:49:35', NULL),
(9, 'Robin Solutions Pvt Ltd', 'robin@software.com', '098433455456', 'bangalore, Karnadaka', 'robinsoftware.com', 'INR', 1, 1, 1, '2021-04-05 04:30:00', '2021-04-27 00:49:27', NULL),
(10, 'Er Robin Pvt Ltd', NULL, NULL, NULL, '', NULL, 1, 1, NULL, '2021-04-05 04:30:01', '2021-04-08 07:07:36', '2021-04-08 07:07:36'),
(11, 'Test Robin', NULL, NULL, NULL, '', NULL, 1, 1, NULL, '2021-04-08 03:05:10', '2021-04-08 07:06:28', '2021-04-08 07:06:28'),
(12, 'Boss Comapny', NULL, NULL, NULL, '', NULL, 1, 1, NULL, '2021-04-08 03:12:04', '2021-04-08 07:09:23', '2021-04-08 07:09:23'),
(13, 'Test Robins software', 'admin@admin.com', '9712333', '110, india', 'robin.com', 'INR', 1, 1, 1, '2021-04-08 07:09:57', '2021-04-27 00:49:14', NULL),
(14, 'test Global Solutions', NULL, NULL, NULL, '', NULL, 1, 1, NULL, '2021-04-08 07:19:50', '2021-04-08 07:19:52', '2021-04-08 07:19:52'),
(15, 'Mondaikadu Solutions', 'mondaikadu@test.com', '0807654321', 'Mondaikadu, Tamil Nadu', 'mondaikadu.com', 'INR', 1, 1, 1, '2021-04-08 23:07:44', '2021-04-27 00:48:58', NULL),
(16, 'HCL', 'hcl@gmail.com', '90000', 'test', 'hcl.com', 'INR', 1, 1, 1, '2021-04-12 01:37:22', '2021-04-27 00:48:50', NULL),
(17, 'Wipro', 'admin@global.com', '8994556567567', 'test', 'wwwrobin.com', 'INR', 1, 1, 1, '2021-04-18 00:12:08', '2021-04-27 00:48:37', NULL),
(18, 'Amazon', 'test@amazon.com', '900434354', 'Attingal, TVM', 'Amazon.com', 'INR', 1, 1, 1, '2021-04-27 00:45:50', '2021-04-27 00:46:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `short_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rupees', 'INR', 1, 1, 1, '2021-04-26 23:36:26', '2021-04-26 23:43:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(13) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `company_id`, `email`, `phoneno`, `address`, `website`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Usha', 1, 'usha@test.com', '1233435445', 'Testing', 'usha.com', 1, 1, NULL, '2021-04-13 01:21:43', '2021-04-13 01:21:43', NULL),
(2, 'Jeeva Mary', 1, 'jeeva@web.com', '97743334', 'Test', 'jeeva.com', 1, 1, 1, '2021-04-13 01:28:45', '2021-04-13 01:34:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `name`, `short_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PF', 'pf', 1, 1, NULL, '2021-05-12 01:03:19', '2021-05-12 01:03:19', NULL),
(2, 'Professional Tax', 'professonal_tax', 1, 1, NULL, '2021-05-12 01:03:51', '2021-05-12 01:03:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `title`, `slug`, `content`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Voluptas corrupti eos et mollitia consectetur.', 'voluptas-corrupti-eos-et-mollitia-consectetur', 'Ea aut inventore possimus nulla soluta. Tempore distinctio perferendis quae quis aut. Sit sapiente natus et expedita recusandae quod. Deleniti et laudantium amet sed quis.', 0, 1, NULL, '2021-03-31 09:30:06', NULL, NULL),
(2, 'Fuga autem illum omnis quaerat tempora.', 'fuga-autem-illum-omnis-quaerat-tempora', 'Ratione dolorem voluptatibus harum. Consequuntur dolores recusandae placeat. Nostrum molestias dolore ut.', 1, 1, NULL, '2021-04-04 02:43:21', NULL, NULL),
(3, 'Perferendis magni ullam est.', 'perferendis-magni-ullam-est', 'Sed doloribus quia veniam quos. Officiis laboriosam quis eos non unde magnam laudantium. Aperiam et tempora illo magni. Iste optio sunt facilis veritatis voluptas.', 0, 2, NULL, '2021-04-03 19:22:40', NULL, NULL),
(4, 'Similique labore est.', 'similique-labore-est', 'Adipisci sequi minus similique exercitationem sit eius. Ea voluptatem suscipit sunt aliquam.', 0, 2, NULL, '2021-03-31 12:06:24', NULL, NULL),
(5, 'Et rerum animi modi totam.', 'et-rerum-animi-modi-totam', 'Laudantium repellendus ullam sunt laborum dolor. Et rem sint velit. Est dolorum earum beatae laboriosam.', 1, 1, NULL, '2021-04-05 01:13:55', NULL, NULL),
(6, 'Voluptatem reprehenderit facilis aut quas.', 'voluptatem-reprehenderit-facilis-aut-quas', 'Corrupti eum omnis aliquam facere dolor cum. Inventore pariatur omnis quibusdam sint officia unde aut excepturi. Labore ipsa eum velit et omnis et ut sit. Voluptates et fugit saepe aut aperiam quam.', 1, 2, NULL, '2021-03-31 23:10:12', NULL, NULL),
(7, 'Voluptate aut voluptatum nesciunt.', 'voluptate-aut-voluptatum-nesciunt', 'Id quos aut praesentium ullam nisi labore libero. Doloribus occaecati incidunt atque distinctio. Quibusdam nostrum qui rerum eveniet est sed ad amet.', 0, 1, NULL, '2021-03-27 10:34:38', NULL, NULL),
(8, 'Rerum sint omnis minus sit.', 'rerum-sint-omnis-minus-sit', 'Dolorum praesentium autem qui qui vel repellendus. Repellat dolorem sunt sit.', 0, 2, NULL, '2021-04-04 18:58:09', NULL, NULL),
(9, 'Deleniti voluptas quia ea earum dicta.', 'deleniti-voluptas-quia-ea-earum-dicta', 'Doloribus non animi inventore reiciendis. Ratione sunt et in veritatis sint velit quo tenetur. Veniam enim sit ab voluptatem numquam facilis sunt.', 0, 2, NULL, '2021-04-04 19:45:34', NULL, NULL),
(10, 'Dignissimos ut sint qui sunt qui.', 'dignissimos-ut-sint-qui-sunt-qui', 'Aut a adipisci repudiandae cum distinctio. Velit minus tenetur sint inventore laboriosam molestiae. Doloribus quis vero voluptatem sint. Illum nihil harum explicabo aspernatur sit.', 0, 1, NULL, '2021-03-27 03:24:16', NULL, NULL),
(11, 'Repellat in voluptate dolorem.', 'repellat-in-voluptate-dolorem', 'Veniam deserunt deleniti veritatis dignissimos deserunt nesciunt. Et corporis alias nemo labore reprehenderit. Et dolores tempora ut eum nulla et rem. Iste est consequatur maxime deleniti accusantium quo aliquid.', 1, 2, NULL, '2021-03-28 01:53:16', NULL, NULL),
(12, 'Veniam voluptatem recusandae at sit sint.', 'veniam-voluptatem-recusandae-at-sit-sint', 'Incidunt totam aliquid dolores ducimus rerum. In fugiat recusandae recusandae non. Harum dolores sunt dicta sit consequatur quae quis.', 1, 1, NULL, '2021-03-31 11:57:49', NULL, NULL),
(13, 'Est quod et asperiores esse.', 'est-quod-et-asperiores-esse', 'Animi nemo sit tenetur commodi ab consectetur tempore. Voluptatem aut qui repudiandae eveniet illum velit. Quas omnis impedit et ut consequuntur veritatis et.', 0, 2, NULL, '2021-04-04 19:42:00', NULL, NULL),
(14, 'Commodi consectetur labore qui quisquam.', 'commodi-consectetur-labore-qui-quisquam', 'Aut ipsa amet natus iste est. Voluptates autem fuga exercitationem consequuntur autem et assumenda. Accusamus est iusto ut esse tempore ratione nam. Magnam totam omnis ut ipsam. Et minima est est omnis ipsam.', 0, 1, NULL, '2021-03-29 21:40:31', NULL, NULL),
(15, 'Quis doloremque nihil sequi.', 'quis-doloremque-nihil-sequi', 'Debitis numquam aliquam voluptatum molestiae excepturi. Qui dolorem sit placeat laborum quo. Maxime consequatur tempora facere magnam asperiores nobis.', 1, 2, NULL, '2021-04-03 22:47:12', NULL, NULL),
(16, 'Qui voluptatem consequatur ad quo dignissimos.', 'qui-voluptatem-consequatur-ad-quo-dignissimos', 'Iste et consequatur molestiae omnis a aut. Quia pariatur placeat laborum aspernatur modi consectetur quod. Necessitatibus ipsam voluptatem ex quia cumque ipsa iure. Facilis autem accusantium aut quisquam iste. Sunt iusto quibusdam eum fuga vel et.', 1, 1, NULL, '2021-03-30 17:28:25', NULL, NULL),
(17, 'Blanditiis est ex.', 'blanditiis-est-ex', 'Veniam dolor inventore ut sint aut sint illo. At at tempore voluptatibus. Est ratione qui inventore eveniet soluta voluptates cumque. Iusto nam ullam qui ut minus aut.', 1, 1, NULL, '2021-04-01 09:06:51', NULL, NULL),
(18, 'Repellendus aspernatur officiis impedit dolores.', 'repellendus-aspernatur-officiis-impedit-dolores', 'Dolore sint asperiores et fuga a et. Id corrupti dolorem voluptas et eaque. Minima maiores iusto ut aspernatur fuga.', 0, 1, NULL, '2021-03-31 08:53:25', NULL, NULL),
(19, 'Dolor quis repudiandae atque est.', 'dolor-quis-repudiandae-atque-est', 'Suscipit incidunt non est inventore provident. Quo voluptas repellendus qui dolores libero hic voluptatem. Itaque vitae blanditiis voluptate cum omnis eveniet et rerum.', 1, 2, NULL, '2021-03-30 20:46:31', NULL, NULL),
(20, 'Voluptatem atque eum voluptas tenetur.', 'voluptatem-atque-eum-voluptas-tenetur', 'Molestiae odio quos et et repellendus. Eveniet corporis possimus eveniet recusandae. Non eligendi nihil quod est.', 0, 2, NULL, '2021-03-30 18:15:14', NULL, NULL),
(21, 'Aut repellendus quidem.', 'aut-repellendus-quidem', 'Deserunt natus est ipsum iste eveniet impedit. Pariatur quos numquam natus numquam quos expedita error quidem. In quasi quasi in repellat aut.', 0, 1, NULL, '2021-03-29 05:33:38', NULL, NULL),
(22, 'Rerum quasi et tempore.', 'rerum-quasi-et-tempore', 'Est ea facilis provident qui iusto dolor repellendus error. Aperiam voluptas aut nostrum deserunt animi odit est. A facilis culpa corporis cumque sit.', 1, 2, NULL, '2021-04-04 15:21:49', NULL, NULL),
(23, 'Recusandae non aut dicta fugiat.', 'recusandae-non-aut-dicta-fugiat', 'Fuga placeat dicta id. Dicta eum voluptatum mollitia sunt quo enim. Pariatur sint ea perspiciatis quidem et. Quae quis voluptatem nulla sed omnis beatae.', 0, 2, NULL, '2021-04-04 07:51:30', NULL, NULL),
(24, 'Nihil sed voluptas.', 'nihil-sed-voluptas', 'Numquam dolorem fugit sunt sed consectetur voluptas eum consectetur. Exercitationem accusamus hic dicta quos laudantium.', 0, 1, NULL, '2021-03-26 17:57:51', NULL, NULL),
(25, 'Sint illum sit repellat.', 'sint-illum-sit-repellat', 'Pariatur inventore velit vitae consequatur. Repudiandae tempore esse est aut natus nobis. Ratione quia earum architecto porro. Quae et perspiciatis saepe in cum dolores.', 0, 1, NULL, '2021-03-31 21:34:36', NULL, NULL),
(26, 'Aut accusamus repudiandae est.', 'aut-accusamus-repudiandae-est', 'Accusamus ut consequuntur beatae. Dolor quia libero optio qui. Sequi occaecati corrupti sed sint eius.', 1, 1, NULL, '2021-03-27 10:46:19', NULL, NULL),
(27, 'Illum corporis dolor.', 'illum-corporis-dolor', 'Asperiores laborum et dignissimos ratione qui nesciunt. Dolorum suscipit et quod est recusandae. Iste placeat consequatur voluptates eius consequatur similique. Voluptatem corporis pariatur totam maiores sed est et.', 0, 1, NULL, '2021-04-03 03:51:53', NULL, NULL),
(28, 'Voluptatum consectetur exercitationem beatae molestiae.', 'voluptatum-consectetur-exercitationem-beatae-molestiae', 'Tempora quis facere cum officia veniam molestias adipisci. Est aut omnis ut molestiae est. Voluptas perspiciatis neque nihil reiciendis corrupti rem. Quidem aspernatur illo quidem magni deserunt consequatur qui.', 1, 2, NULL, '2021-04-04 09:22:48', NULL, NULL),
(29, 'Velit debitis occaecati itaque corporis.', 'velit-debitis-occaecati-itaque-corporis', 'Enim error aut rerum ut unde. Praesentium ipsam eligendi aperiam doloribus. Id placeat nisi vitae ut natus aliquam.', 1, 2, NULL, '2021-04-01 12:39:44', NULL, NULL),
(30, 'Voluptatem id laborum quasi temporibus.', 'voluptatem-id-laborum-quasi-temporibus', 'Dolor fugit quia harum et nulla quod enim. Fuga nulla rerum dolorum. Sit quasi omnis laboriosam dolorem.', 1, 2, NULL, '2021-03-30 09:32:48', NULL, NULL),
(31, 'Doloremque magnam eos nemo.', 'doloremque-magnam-eos-nemo', 'Sed dolores qui et nam tempora dignissimos ut sapiente. Ut dolorum nostrum sequi cumque consequatur ipsa nisi. Perferendis enim laborum pariatur aspernatur voluptatibus assumenda sit.', 0, 2, NULL, '2021-04-02 13:19:54', NULL, NULL),
(32, 'Totam dolore ipsum.', 'totam-dolore-ipsum', 'Libero beatae aliquid non blanditiis omnis in inventore. Alias autem dolor qui laborum nesciunt minima architecto natus. A necessitatibus cumque delectus et repudiandae. Ex vitae illo et veritatis accusantium tenetur doloribus voluptatem.', 1, 1, NULL, '2021-03-26 14:46:28', NULL, NULL),
(33, 'Voluptatum tempore autem rem minus ipsam.', 'voluptatum-tempore-autem-rem-minus-ipsam', 'Sint repudiandae similique quia minus ipsa. Natus rerum quibusdam rerum laudantium. Iusto id quam consequatur hic voluptatem officia cum.', 1, 1, NULL, '2021-04-03 03:13:22', NULL, NULL),
(34, 'A cupiditate temporibus.', 'a-cupiditate-temporibus', 'Totam eum est est illo. Voluptatem ab dolores molestiae adipisci. Id qui sed sed tenetur distinctio error sunt. Eius eos non velit voluptate. Quos voluptas et dolorem sapiente.', 0, 2, NULL, '2021-03-31 14:45:37', NULL, NULL),
(35, 'Velit aut est fugit earum.', 'velit-aut-est-fugit-earum', 'Itaque et ut autem aliquid quisquam. Voluptate consequatur impedit qui facere ut. Consequatur perferendis quis inventore aliquam sit nesciunt quo.', 1, 1, NULL, '2021-04-04 12:43:20', NULL, NULL),
(36, 'Quia molestiae voluptate aperiam.', 'quia-molestiae-voluptate-aperiam', 'Occaecati eligendi ad quae dicta dolorem quia voluptatem. Et et fugit autem. Suscipit quis dolorum velit iste suscipit sit illo. Aliquid non architecto sequi beatae blanditiis.', 0, 2, NULL, '2021-03-29 15:10:57', NULL, NULL),
(37, 'Eligendi mollitia quam sit tempore.', 'eligendi-mollitia-quam-sit-tempore', 'Laboriosam impedit nam voluptatibus voluptatem ullam ipsum cupiditate. Modi ut dolor accusamus debitis dolorem nobis. Dolorem voluptatem optio vitae voluptates quos. Mollitia qui autem reiciendis.', 0, 2, NULL, '2021-03-29 11:05:33', NULL, NULL),
(38, 'Et nemo tempora a sapiente atque.', 'et-nemo-tempora-a-sapiente-atque', 'Voluptas dolore sunt et quas aut odit cum. Est deleniti alias nihil inventore. Ut id et eos inventore rem amet ut possimus.', 0, 2, NULL, '2021-04-02 06:36:12', NULL, NULL),
(39, 'Beatae voluptas dolores nihil.', 'beatae-voluptas-dolores-nihil', 'Facilis consectetur modi dignissimos consequatur iusto est. Fugiat quas tenetur omnis. Molestiae velit voluptatem qui porro explicabo.', 1, 2, NULL, '2021-03-27 02:36:05', NULL, NULL),
(40, 'Repellendus a reiciendis aliquam.', 'repellendus-a-reiciendis-aliquam', 'Beatae perspiciatis quae dignissimos. Praesentium itaque tempora sed quo corrupti veniam dolores. Inventore quam consequatur amet natus.', 0, 1, NULL, '2021-03-31 17:25:42', NULL, NULL),
(41, 'Minus et voluptas.', 'minus-et-voluptas', 'Voluptatum non consequatur dolor. Qui ea impedit voluptatem. A sit ut animi.', 1, 2, NULL, '2021-04-03 21:45:48', NULL, NULL),
(42, 'Et placeat consequatur suscipit facere explicabo.', 'et-placeat-consequatur-suscipit-facere-explicabo', 'Dicta ea fuga accusantium et quod aliquam eaque incidunt. Perspiciatis est quos voluptas voluptatem error.', 1, 2, NULL, '2021-03-26 23:55:09', NULL, NULL),
(43, 'Minima laborum dignissimos.', 'minima-laborum-dignissimos', 'Et voluptas ut mollitia deleniti occaecati sapiente. Nisi rerum ut debitis omnis. Aut atque est vitae consequuntur facere qui vero.', 1, 1, NULL, '2021-04-02 05:16:25', NULL, NULL),
(44, 'Minima quam et numquam.', 'minima-quam-et-numquam', 'Voluptatum quibusdam iusto ad in aut. Distinctio exercitationem error dignissimos qui voluptatem facere quidem sunt. Recusandae dolorum error voluptas aliquid. Ratione ea eum aut.', 0, 2, NULL, '2021-03-26 17:19:23', NULL, NULL),
(45, 'Voluptatem error nihil sint maxime.', 'voluptatem-error-nihil-sint-maxime', 'Qui voluptate enim non earum. Aut blanditiis magnam cum temporibus ut sunt omnis. Dolore ut et et ea quis.', 1, 2, NULL, '2021-04-04 12:55:32', NULL, NULL),
(46, 'Nihil occaecati ut nostrum.', 'nihil-occaecati-ut-nostrum', 'Magni maiores amet quis ex error sequi omnis voluptatem. Laudantium nobis aut dolor dolorum. Consequuntur et in deleniti sunt neque id voluptas.', 0, 1, NULL, '2021-03-27 12:30:19', NULL, NULL),
(47, 'Aspernatur error corrupti corrupti veniam consequatur.', 'aspernatur-error-corrupti-corrupti-veniam-consequatur', 'Voluptatem rem cupiditate deserunt neque. Incidunt dolor odio qui voluptas inventore possimus asperiores beatae. Sed consequuntur accusamus perferendis illum.', 1, 1, NULL, '2021-03-28 00:23:31', NULL, NULL),
(48, 'Est quaerat nemo dolorem vitae.', 'est-quaerat-nemo-dolorem-vitae', 'Harum laudantium expedita id ab at. Distinctio corporis provident modi tempore tempora. Repudiandae et sed tempora eaque voluptatem. Accusantium sed odio velit ratione. Dicta dignissimos aperiam libero nemo omnis quia.', 0, 2, NULL, '2021-03-29 01:57:17', NULL, NULL),
(49, 'Ut doloribus quod reiciendis.', 'ut-doloribus-quod-reiciendis', 'Nobis reprehenderit et maxime neque consectetur occaecati occaecati illum. Officia ex et magnam necessitatibus omnis. Ut eum molestiae omnis velit consequuntur id.', 1, 1, NULL, '2021-03-29 06:38:22', NULL, NULL),
(50, 'Tempora rerum non.', 'tempora-rerum-non', 'Libero dolores accusamus omnis deserunt et repellendus. Sit quia fugit odit eligendi. Repudiandae debitis rerum dolor animi. Nobis aut laboriosam rerum quam voluptatem.', 0, 1, NULL, '2021-03-30 14:55:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(13) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `company_id`, `email`, `phoneno`, `address`, `website`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Robin', 1, 'robin.globaleyet@gamil.com', '07373633124', 'attingal\r\nTVM', 'ww.robin.com', 1, 1, NULL, '2021-05-24 05:00:58', '2021-05-24 05:00:58', NULL),
(2, 'Sujn', 9, 'sujin@localhost.com', '07373633124', 'attingal\r\nTVM', 'ww.sob.com', 1, 1, NULL, '2021-05-24 05:01:35', '2021-05-24 05:01:35', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Voluptatem velit esse quam dolorem voluptatem reprehenderit.', 'Aperiam odio consequuntur odit autem ipsam rem pariatur. Esse harum ut exercitationem aperiam velit odio veniam. Nisi rerum dolorem repudiandae laudantium qui dolor.', 0, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(2, 'Consequuntur quo aliquam soluta autem qui aperiam quia.', 'Sint saepe corporis est. Hic officiis ratione similique autem maxime vero est. Molestiae est ullam odit nulla fuga a. Porro occaecati harum odit quod ex. Qui eum placeat eius qui pariatur.', 0, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(3, 'Sequi totam eveniet ipsum assumenda ipsa qui.', 'Quibusdam cum nisi omnis. Ratione accusantium sit facilis laborum dolor nulla. Qui quis ut maiores molestias ut vel cupiditate itaque. Voluptatem ipsam dolores quis aut possimus. Omnis nesciunt temporibus corrupti et.', 1, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(4, 'Assumenda reprehenderit quibusdam nam possimus voluptas sed.', 'Repudiandae corporis facilis sapiente tempora. Ex quos ipsa sit sed non eos sit. Omnis vitae voluptas ut velit tenetur. Blanditiis quia nam tempora quaerat assumenda quia atque rerum. Illum sunt molestias doloribus aut aut.', 0, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(5, 'Similique maiores dolor dolores sed quia et.', 'Eveniet aliquam dolores ipsam assumenda qui quia. Laborum nisi et ipsa officia molestiae voluptas. Enim fugiat non eveniet. Sed animi laboriosam iure.', 0, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(6, 'Et quisquam quisquam laborum id.', 'Voluptatem unde velit aut doloremque aut. Omnis quis porro voluptates reiciendis et. Saepe veritatis voluptas amet. Ducimus sint itaque voluptas sit.', 1, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(7, 'Voluptate voluptatem ad ipsam inventore iure.', 'Aut quas sed atque fugiat animi incidunt. Ut sunt consequatur repellat atque et unde sunt. Repellat accusamus voluptates sunt eos perferendis perspiciatis quam.', 1, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(8, 'Eveniet amet unde perspiciatis modi rerum laborum.', 'Quia nobis optio tempore hic eligendi atque deserunt. Officiis eos harum eligendi enim non itaque. Voluptatem alias et totam non et.', 1, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(9, 'Unde est pariatur consequatur et odit odio odit.', 'Delectus vitae ipsa in doloremque et qui assumenda quas. Et nesciunt inventore necessitatibus qui. Magni molestias maxime perferendis quod fugiat. Sed omnis neque est corporis vel esse cupiditate.', 1, '2021-04-05 04:29:58', '2021-04-05 04:29:58', NULL),
(10, 'Tempore et architecto et inventore veniam ducimus.', 'Praesentium reprehenderit nemo enim temporibus veritatis est asperiores. Illo et eligendi maiores eum. Rerum facere numquam dolorum necessitatibus veniam saepe.', 1, '2021-04-05 04:29:58', '2021-04-05 04:29:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ledgers`
--

CREATE TABLE `ledgers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `recordable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recordable_id` bigint(20) UNSIGNED NOT NULL,
  `context` tinyint(3) UNSIGNED NOT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pivot` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ledgers`
--

INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Alan\",\"last_name\":\"Whitmore\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"gv33PTHLWTBUrVOYfD92nDYSmxUYrlQkgpl1O4ijxyNQem5Mngp2dAjptLFz\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-05 09:59:48\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'f9f016a4eaff3dd71cf2e60a83edfcbc70fe9203cd625662132e18ed96eae56fd08e6936e312a0d68d28b4ca951bc9e4667d1fd5ecb54c6f36c69671302f9b29', '2021-04-05 04:31:01', '2021-04-05 04:31:01'),
(2, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Alan\",\"last_name\":\"Whitmore\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-05 10:01:02\",\"last_login_ip\":\"127.0.0.1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"gv33PTHLWTBUrVOYfD92nDYSmxUYrlQkgpl1O4ijxyNQem5Mngp2dAjptLFz\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-05 10:01:02\",\"deleted_at\":null}', '[\"timezone\",\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'f4b41336eeebf67d8a5e5e9ec84b447017817d6eafe5bb26097d2154d94c990111629db35ee7f1b228d10a6807071181d25d1e95e1282dc1e3636d841d84f19a', '2021-04-05 04:31:02', '2021-04-05 04:31:02'),
(3, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-05 10:01:02\",\"last_login_ip\":\"127.0.0.1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ivOnfx1TiPdOvWGTJA0gv9nYD4Z9NhEr2tB6jdP6FvprgGRfqDlWyvb3zYRj\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-05 10:01:02\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://127.0.0.1:8000/logout', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '8285746559dd8e5d43811bc80e0eee53b3664a8fe366d534d5b9eb3fdc6087d19ad36868787733fbde0b81936506a4fe40401378bee25ad3311d270b9bb87c31', '2021-04-05 05:10:51', '2021-04-05 05:10:51'),
(4, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-05 11:39:14\",\"last_login_ip\":\"127.0.0.1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ivOnfx1TiPdOvWGTJA0gv9nYD4Z9NhEr2tB6jdP6FvprgGRfqDlWyvb3zYRj\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-05 11:39:14\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '2ebeff5a99a35b73f87df94799e950d7f7fa33ca1f8988ceeb9c71bb7b2070ddf4ab5668a80bfde39e962345d791751fa6e736c8c9b10c3f133f8c06a93d52c1', '2021-04-05 06:09:14', '2021-04-05 06:09:14'),
(5, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-07 06:26:06\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ivOnfx1TiPdOvWGTJA0gv9nYD4Z9NhEr2tB6jdP6FvprgGRfqDlWyvb3zYRj\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-07 06:26:06\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'd38977c6352b519a60780ee6b214a60e62d20360d6fd1c4808632c29a0b92cd4891d54449fc91dcff772fe16f7c1dae0a0d264cf6de79b4bebc8f3ef3728cd13', '2021-04-07 00:56:07', '2021-04-07 00:56:07'),
(6, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-07 06:26:06\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Ijb5kA0YBQsoLabdz1iXtH1L8hlQjjdutuIHMSCSY5OXRfhAyhRV18Miac0j\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-07 06:26:06\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'fd0d5bd33a0dad3b2cd0c08e4bf4c2135740225af514fae34910a7afc358ae0c3efb59bd589a73ed78fb99e17253c9361e326d2e44c4ce9baf192c68c8bd333a', '2021-04-07 23:15:57', '2021-04-07 23:15:57'),
(7, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-08 04:47:34\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Ijb5kA0YBQsoLabdz1iXtH1L8hlQjjdutuIHMSCSY5OXRfhAyhRV18Miac0j\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-08 04:47:34\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '0c0f778b88907101ba20a50e778042c62943e241a5f800fbd6d1fd2a44b02c7268b5378d345d3d17ea33a87fcf863ad09bc7aea4274d71d54eaf572f7367d396', '2021-04-07 23:17:34', '2021-04-07 23:17:34'),
(8, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 5, 4, 'deleted', '{\"id\":5,\"uuid\":\"c7079696-0cd5-4da3-a7b7-814bb0db10aa\",\"first_name\":\"Fiona\",\"last_name\":\"Ortiz\",\"email\":\"frederic.sporer@example.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Y4f7E6n9qYuVi81q9yadxeFkvup60wjZ.JQk56H5fg5La8WcFf3fa\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"e655122d2fabebbb3a4ad37ae7ea3415\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":1,\"created_by\":null,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"xgpC1oW3d1\",\"created_at\":\"2021-04-05 09:59:58\",\"updated_at\":\"2021-04-09 11:25:31\",\"deleted_at\":\"2021-04-09 11:25:31\"}', '[]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user/5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '0c316874dc6dce294445e23a7bb3751024d4c6b171352a15b0ccc8300364afebacdf4ed213ea35fe5000d8df533b20abf915b00af9122671f07eb5d9b932d39f', '2021-04-09 05:55:31', '2021-04-09 05:55:31'),
(9, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 5, 4, 'deleted', '{\"id\":5,\"uuid\":\"c7079696-0cd5-4da3-a7b7-814bb0db10aa\",\"first_name\":\"Fiona\",\"last_name\":\"Ortiz\",\"email\":\"frederic.sporer@example.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Y4f7E6n9qYuVi81q9yadxeFkvup60wjZ.JQk56H5fg5La8WcFf3fa\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"e655122d2fabebbb3a4ad37ae7ea3415\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":1,\"created_by\":null,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"xgpC1oW3d1\",\"created_at\":\"2021-04-05 09:59:58\",\"updated_at\":\"2021-04-09 11:25:31\",\"deleted_at\":\"2021-04-09 11:25:31\"}', '[]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user/5/delete-permanently', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'd6e3c7c588056e96301ef064bc9d656628b7f44ddcf3c591a684ca84273cc9e7eb7737d1dcd1f5db5791184e07562fc422f81f21e23d3e1d47450a175ddc6714', '2021-04-09 05:55:51', '2021-04-09 05:55:51'),
(10, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 5, 4, 'forceDeleted', '{\"id\":5,\"uuid\":\"c7079696-0cd5-4da3-a7b7-814bb0db10aa\",\"first_name\":\"Fiona\",\"last_name\":\"Ortiz\",\"email\":\"frederic.sporer@example.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Y4f7E6n9qYuVi81q9yadxeFkvup60wjZ.JQk56H5fg5La8WcFf3fa\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"e655122d2fabebbb3a4ad37ae7ea3415\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":1,\"created_by\":null,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"xgpC1oW3d1\",\"created_at\":\"2021-04-05 09:59:58\",\"updated_at\":\"2021-04-09 11:25:31\",\"deleted_at\":\"2021-04-09 11:25:31\"}', '[]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user/5/delete-permanently', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '4d38e0892e9dc4ad8c9624c6e404445e09e2735e0eae868b2e3a97c807255a7379798ca6ad60036836776d8354819ab78b95c378f3b0174b71f9afcda07e2117', '2021-04-09 05:55:51', '2021-04-09 05:55:51'),
(11, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'created', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[\"first_name\",\"last_name\",\"email\",\"password\",\"status\",\"confirmation_code\",\"confirmed\",\"created_by\",\"uuid\",\"updated_at\",\"created_at\",\"id\"]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'c5ef733290a4d275f6d5b9d32e66cede15bb763cd4fcfda7f589addfcd39451b5c24385222061357eaf83ade34033dae22c8b86a28e950ce93c685f35529633f', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(12, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":6,\"role_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'adcd5cb378ee7c72dbe72654fcdacff452b0a72f522a1a13364a830f37a79d99096a05adac4536d2e7a66113478bd6576051ec5dba7b5162dcffd1aee9aa25f0', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(13, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"1\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'aca753f33b8d2c120542900bbcc6d71afd11f5f87c97880e208226e9e4f50a02e6a98441d1197a4e87e744285a3cc39d96a144f0dd37906f74b8879efb199431', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(14, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'af1274e08a67f8ab6aadff3f779fdf6e6a73eb3180dcfdd2289efd87033296c35ba3cac0bf843c6d06ce99a75112c5420d1b705dd620bf4f5e72701a6f2da526', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(15, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"4\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '3c5039d5f2b4da6dc611ac49fce35e22da29cb032f7253a46962258b7c7338eaf9b92c97da40aa6e29635f1bf7372553794768ef67f51e4100546f5b3980b4db', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(16, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"5\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '3025891084c027270c933536dfbe08d1e2663de74b08015447ad9cbaf0c5104d7b2dacae36cfbf502419f97bb6f06b8f3f4ab63c4b5953d5f32210a64ca7101b', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(17, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"6\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '74405c272f0faa9bf3c5f37877f340e86e0cb492fb1b957c5632a35c39507348861ab0ea3dd1c6299dcb014ef0f995ae337057b99093364a5a330188847a1235', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(18, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"7\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '5be2d6cfd7e5c81b8a9855c3435c6915467015a1c7c4997059f08bfc32647dc374cbf2c0dbbce184e796e35830c74dd348b28f9ba5d63821c5fc9bb7ae0da137', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(19, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"8\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '4a487ca5af26c05f22d45741074c9aeeba16c535fa2848c52744db105ff6291bc3a339bdf77be1d99dc83c229c558bd96a713b950f36436ef7fa2ffe925fb4c1', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(20, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"16\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '231cc5330cf95adcd7482b6889f86a0787eed65541ca956be8070e1fca0e554c765db616b9cc1c5a9d5ff97945d0636519e588fbbe3fc855e72193e6d49dc264', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(21, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"20\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '790481a1f675bdeab68458b4ead996a54b23655943467541d90cb5577c636cb51478d7af23eaa17d135f0f165fd71ebd33b4865c0ed541804531d3b6854c0b80', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(22, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"24\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '7e7d9dd0ac612d05310d6a79008edf51f76b06714ed3c71c68af65e00ae36d3050f0459c4d2fa7d954c75e3bdca423ac8655849798701562b2227f4d14f0bddf', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(23, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"25\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'c007438a53ed98e6387bb367562b6ff68d47e8658a1e4bf76f416e16d6b20d5ac0eff00ed14512639b955a5591d001e507a0b3fcbe17e23611c579b757866233', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(24, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"26\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '6f3604a7dbc98eab2c2f6d910d6882d43e33681b6ad2ef8db500acece2a1c007348a141fc197416f9c31825d4b5db573eb1d53b381e725f2ab5dcd0d38d0dffd', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(25, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 6, 4, 'attached', '{\"first_name\":\"Robin\",\"last_name\":\"GnanaRaj\",\"email\":\"robin@gnanaraj.com\",\"password\":\"$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62\",\"status\":1,\"confirmation_code\":\"0cc3478fc4ff4d21bcda0050ab4bff04\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"9e93c072-77a6-4ed1-ac47-add3f6d406f5\",\"updated_at\":\"2021-04-09 12:12:14\",\"created_at\":\"2021-04-09 12:12:14\",\"id\":6}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":6,\"permission_id\":\"27\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '8c9e63cbcf62b7aac6044096af1ef1f7e7a8ebbf4b5c902f149018040b0576e98a38b466001b8cf50325a3c798b73e138ec5ef4f5bca8a53a6d368564ebd66f4', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(26, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'created', '{\"first_name\":\"sam\",\"company_id\":\"1\",\"branch_id\":\"1\",\"last_name\":\"kumar\",\"email\":\"sam@kumar.com\",\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"status\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"updated_at\":\"2021-04-09 12:18:27\",\"created_at\":\"2021-04-09 12:18:27\",\"id\":7}', '[\"first_name\",\"company_id\",\"branch_id\",\"last_name\",\"email\",\"password\",\"status\",\"confirmation_code\",\"confirmed\",\"created_by\",\"uuid\",\"updated_at\",\"created_at\",\"id\"]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'fafa022e3ba63b6b9d44fe7883565a747f00c5d4dbd6f0e9c75fe00140112d6061a73098dc8d86185e5dc33a2ea7efceb7445a7f11d8c2281271bed3f4b89aff', '2021-04-09 06:48:27', '2021-04-09 06:48:27'),
(27, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'attached', '{\"first_name\":\"sam\",\"company_id\":\"1\",\"branch_id\":\"1\",\"last_name\":\"kumar\",\"email\":\"sam@kumar.com\",\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"status\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"updated_at\":\"2021-04-09 12:18:27\",\"created_at\":\"2021-04-09 12:18:27\",\"id\":7}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":7,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '60c8fd2648895acd212a6268c5c2f385ace9e3e4117fe746bdd1668ded1a7142278edb9b7cb9a2bedc0c53dd505816f4ea34c47fc185879373c295eee23baa24', '2021-04-09 06:48:27', '2021-04-09 06:48:27'),
(28, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'attached', '{\"first_name\":\"sam\",\"company_id\":\"1\",\"branch_id\":\"1\",\"last_name\":\"kumar\",\"email\":\"sam@kumar.com\",\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"status\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"updated_at\":\"2021-04-09 12:18:27\",\"created_at\":\"2021-04-09 12:18:27\",\"id\":7}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":7,\"permission_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '4e19b88b6235db25b3436918dc86f037d79269fffac3ee1cd0cba6d051461ced16eb23ef406ab719b02ca398e1ab361b2b50deec936e2eea474be90f0c7295dc', '2021-04-09 06:48:27', '2021-04-09 06:48:27'),
(29, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"sam\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:18:27\",\"deleted_at\":null}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":7,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'fc3fc5861eb53157d2ddecbb62b330691d9bc8344170c7878bdbd76e036218396ca182640f2d8755c11f929df99cbe711586e1404038c36fa760bdc44ab45903', '2021-04-09 06:50:53', '2021-04-09 06:50:53'),
(30, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"sam\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:18:27\",\"deleted_at\":null}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":7,\"permission_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '79c24adf98a36ac0fc811cb5aba56aa7dd0a646f4e20d165315aec7142d97abf078cd4453b02a3e09d8e66b5be4097285306c322363ce3a30a727731c11bb393', '2021-04-09 06:50:53', '2021-04-09 06:50:53'),
(31, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"sam\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:18:27\",\"deleted_at\":null}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":7,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '5c0b66b232101a372790f1bba48f9cc40a1ccff9d3f35d89a2a792f9de46ffeaf74c2ca6c502e8b73495b13e3778d504975dd15ccadc204250c05a93d47ceba3', '2021-04-09 06:51:28', '2021-04-09 06:51:28'),
(32, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"sam\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:18:27\",\"deleted_at\":null}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":7,\"permission_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'c53dda04228f20817a02bc9bd83f1aef51305ed5526d9418f563f14e859acc44abe432c01bb5af75e113a2616e80c88cfdf225b127e65a507f419c65233b2062', '2021-04-09 06:51:28', '2021-04-09 06:51:28'),
(33, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'updated', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"samss\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:23:24\",\"deleted_at\":null}', '[\"first_name\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'c40a7fe359591a80bed48c07ec00cd72d4fe60af964d18e7cdd4bb209e1d84e09a89099a312e1d6cf62065bdcc992cbd9da0786adb16970c1645f13c964d88ff', '2021-04-09 06:53:24', '2021-04-09 06:53:24'),
(34, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"samss\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:23:24\",\"deleted_at\":null}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":7,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'c08331c858465301c4732e425779009cc6457070ff37d7c95ea4811ddb672e3479d938e2aebce978677e06ca9fad0ebf6595c1523c5e8e71b4c20f362d0a5a5b', '2021-04-09 06:53:24', '2021-04-09 06:53:24'),
(35, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"samss\",\"last_name\":\"kumar\",\"company_id\":1,\"branch_id\":1,\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:23:24\",\"deleted_at\":null}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":7,\"permission_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'd3c1866d2668d9cc5b63c0335991cbb83865e16e44e9ec8d88bbc49b63bc223cf2c3584aaa9cb18570b38e00e946370d2bd09a722d2122359701165d5e96d943', '2021-04-09 06:53:24', '2021-04-09 06:53:24'),
(36, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'updated', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"samss\",\"last_name\":\"kumar\",\"company_id\":\"9\",\"branch_id\":\"17\",\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:25:10\",\"deleted_at\":null}', '[\"company_id\",\"branch_id\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'd511820f1d108d91a1d8b2d8ea47eb99aba45b85a89b1725d7aafa39b53809f8cbd235871ef28986bd847deedd8efb4c05ed2cf0c26438eaf3d69c97519659d0', '2021-04-09 06:55:10', '2021-04-09 06:55:10'),
(37, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"samss\",\"last_name\":\"kumar\",\"company_id\":\"9\",\"branch_id\":\"17\",\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:25:10\",\"deleted_at\":null}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":7,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'fc346763f7fd1caeddfc727bc85fe1b359d6f557a5aa12c21e14625c912920659d2856c3b4062e6631d1dfdbc459be260e59b49dd1a44184664e7ae33f27c937', '2021-04-09 06:55:10', '2021-04-09 06:55:10'),
(38, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 7, 4, 'synced', '{\"id\":7,\"uuid\":\"8a7c834d-f903-4ccb-a874-56af0c55ca65\",\"first_name\":\"samss\",\"last_name\":\"kumar\",\"company_id\":\"9\",\"branch_id\":\"17\",\"email\":\"sam@kumar.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"bc978f597eee78ba0694986cfce9bb29\",\"confirmed\":\"1\",\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":null,\"created_at\":\"2021-04-09 12:18:27\",\"updated_at\":\"2021-04-09 12:25:10\",\"deleted_at\":null}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":7,\"permission_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '01df526aeb354df7d3834cec87d0c932ffec28b87d6d715beac6f85d58a62a0700e5ec585200bde5cd411a38b4fa5a02ede846b74b5dc2f4a89222b7f2897f43', '2021-04-09 06:55:10', '2021-04-09 06:55:10'),
(39, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 8, 4, 'created', '{\"first_name\":\"employee\",\"company_id\":\"16\",\"branch_id\":\"21\",\"last_name\":\"hclemp\",\"email\":\"hclemp@gg.com\",\"password\":\"$2y$10$CtapGSOIuhtxTwym6\\/fImeQBBnwFNwfEL\\/QCwpTPf3PZKSeGbH0xe\",\"status\":1,\"confirmation_code\":\"779117e03407b155fd29d6e3917d417f\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"7d16b327-61ea-4a28-870e-ba2205ac7598\",\"updated_at\":\"2021-04-12 07:09:47\",\"created_at\":\"2021-04-12 07:09:47\",\"id\":8}', '[\"first_name\",\"company_id\",\"branch_id\",\"last_name\",\"email\",\"password\",\"status\",\"confirmation_code\",\"confirmed\",\"created_by\",\"uuid\",\"updated_at\",\"created_at\",\"id\"]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'f48895a84e106033865f287e8be3cf15b50a2ccb48db6196c90ffb25bd0bbcaf6e96c79636df631fd8a752ef334d5fed1cb09a695d2e8b41e9d8074bcfaab164', '2021-04-12 01:39:47', '2021-04-12 01:39:47'),
(40, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 8, 4, 'attached', '{\"first_name\":\"employee\",\"company_id\":\"16\",\"branch_id\":\"21\",\"last_name\":\"hclemp\",\"email\":\"hclemp@gg.com\",\"password\":\"$2y$10$CtapGSOIuhtxTwym6\\/fImeQBBnwFNwfEL\\/QCwpTPf3PZKSeGbH0xe\",\"status\":1,\"confirmation_code\":\"779117e03407b155fd29d6e3917d417f\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"7d16b327-61ea-4a28-870e-ba2205ac7598\",\"updated_at\":\"2021-04-12 07:09:47\",\"created_at\":\"2021-04-12 07:09:47\",\"id\":8}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":8,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '90608810ccde0ae4d742a80bdb2b445d3cd155db257e487f6de5dbe2b6d7ef2da6803123226e8e88b21dd17a9e0352bbc02f4a0d548d8d87a67d79a04ec5dc77', '2021-04-12 01:39:47', '2021-04-12 01:39:47'),
(41, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 8, 4, 'attached', '{\"first_name\":\"employee\",\"company_id\":\"16\",\"branch_id\":\"21\",\"last_name\":\"hclemp\",\"email\":\"hclemp@gg.com\",\"password\":\"$2y$10$CtapGSOIuhtxTwym6\\/fImeQBBnwFNwfEL\\/QCwpTPf3PZKSeGbH0xe\",\"status\":1,\"confirmation_code\":\"779117e03407b155fd29d6e3917d417f\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"7d16b327-61ea-4a28-870e-ba2205ac7598\",\"updated_at\":\"2021-04-12 07:09:47\",\"created_at\":\"2021-04-12 07:09:47\",\"id\":8}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":8,\"permission_id\":\"2\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'b58d8bd0e00b139b92b5231484262bf1f054d55cef077eb42c8cbed335112ede2f3f2ad7e2034a7f759a948a2775fe9c592bdbc877e4cddfcefcb4222e6d8881', '2021-04-12 01:39:47', '2021-04-12 01:39:47'),
(42, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-15 07:31:47\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Ijb5kA0YBQsoLabdz1iXtH1L8hlQjjdutuIHMSCSY5OXRfhAyhRV18Miac0j\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-15 07:31:47\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '5465609b7efd1685c1e89672aea90496d98d6aaed8dd11a436b26188d669c0386c612233a8d97c656dd7d62e276549a005aac57144662e3d04e11be4d28b14bf', '2021-04-15 02:01:47', '2021-04-15 02:01:47'),
(43, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-15 07:31:47\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"fwMRDg4C5tFabC6aVKPvEF2QBxnOJBbrXgnCQqKiYaHlDbNCY4mfv7n4lOGB\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-15 07:31:47\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '1695078d94b532b981e7b5f1dedfe1b17fa010dde1d327635afbfb5d9562b18c8ec3380c4d0926467de0a4130a6edb6908b5cca11893a84eba54977e49ce5b51', '2021-04-18 00:30:41', '2021-04-18 00:30:41'),
(44, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:01:15\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"fwMRDg4C5tFabC6aVKPvEF2QBxnOJBbrXgnCQqKiYaHlDbNCY4mfv7n4lOGB\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:01:15\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '5a829175f4bb031a08f79840ff65f6f68517d461689c1b6197cffbc4997624507a66a93d6a053cac5af5c0e968f57b3aa2d8e8dcc603bdead25cada19ee5132d', '2021-04-18 00:31:16', '2021-04-18 00:31:16');
INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
(45, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:01:15\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Blo4nANdn2cHPzR6wb6kXINPUhDsXJbDf8gwRQh6hVRRvfM7bhdanx6d6D97\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:01:15\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'cacc78fcde8a1895346d6e24c1188b8397c7b698514d80995679242a1506c5a8c40f352ab12846f1ce71a33963bb489db8231f7968fb2a580ee5cd760e40d239', '2021-04-18 00:31:26', '2021-04-18 00:31:26'),
(46, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:01:39\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Blo4nANdn2cHPzR6wb6kXINPUhDsXJbDf8gwRQh6hVRRvfM7bhdanx6d6D97\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:01:39\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'fea8936040b4de9d217a09236e457257843591054d0f668ffad2deb8efa434c3501a937cd3f6fad25327c88a6a3263302888294729a3abd002709a28280efa7e', '2021-04-18 00:31:39', '2021-04-18 00:31:39'),
(47, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'created', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[\"first_name\",\"company_id\",\"branch_id\",\"last_name\",\"email\",\"password\",\"status\",\"confirmation_code\",\"confirmed\",\"created_by\",\"uuid\",\"updated_at\",\"created_at\",\"id\"]', '[]', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'c9b8e68b0281f54d773c3f1ef53b49eb51085c79e82e788ab7027441cc1d04d49651dbc8cae36e00cafea42e4dd5bbfd641831dcf1be461f55e0311a1300dbf5', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(48, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'attached', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":9,\"role_id\":\"3\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '685d61c55f188af2419fcb8ba4fc62f5e59f6c923f815e4945ebfa4f563be3a8303fa6e24ab6ad847c84629a1d62a0497aac3b14c36947bc44acf96550c21088', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(49, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'attached', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":9,\"permission_id\":\"1\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '384d976c2ebfd506401cb81b91a9a4386f4633f241a19d023331fa2585209e3d599df993a3a7d83a071ea9b9e37e8cbfc728141f7eee595c1eb507f7d173d823', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(50, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'attached', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":9,\"permission_id\":\"8\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '61bc9319fc202140fd040d6cd9c3d1c625bb31a18d928b4527e86b3dc4e4038e3f18ca055e160633a560764b553e3b6edec0c43b5e9a2033aa5071f65f9e177f', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(51, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'attached', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":9,\"permission_id\":\"9\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'f19bc442922bde1fae148ecd03e42c9f7d5cc0c00d377d7716873fe08156120c80fb0ccb6b1e451d2649fdb921f49af4800ac72c7c8fa55040b1e4f5bdb825d1', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(52, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'attached', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":9,\"permission_id\":\"10\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'b54abcfadec2c16dae90ba92f3a7e7f4a047cbb613793a24141cf006eee4517b9f7dc27c72dcf155024e9a3d20e21f668581f1f425aab8d1bb04bceed3802488', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(53, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'attached', '{\"first_name\":\"robin\",\"company_id\":\"17\",\"branch_id\":\"22\",\"last_name\":\"raj\",\"email\":\"robin@admin.com\",\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"status\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"created_by\":1,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"updated_at\":\"2021-04-18 06:02:57\",\"created_at\":\"2021-04-18 06:02:57\",\"id\":9}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":9,\"permission_id\":\"11\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '34c1e190e3400734e4fe2e2c13eb5bd6265ef76f56b5a8a69456a3b6f87d96d49a4ec73457c05b6d337e8581a5122c66459367ca158c75256bad82f714f02128', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(54, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:01:39\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"LHSTsW38mWmcxXZCFN9Re2mus0hj3IT2fGHwdsBGBSgYlHjEHyh4HIR1nUsQ\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:01:39\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '8f7f58ce4c19dd9ee2aa943027ead6e0535288458fa074a34b693ead50b5287dff9944b4abca9ae10c9f82ebda015a1837c510e3aa73bb6aee5d58ceddedddb2', '2021-04-18 00:33:06', '2021-04-18 00:33:06'),
(55, 'App\\Models\\Auth\\User', 9, 'App\\Models\\Auth\\User', 9, 4, 'updated', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":17,\"branch_id\":22,\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"EDuY1HmJ55V2tTLWkx6s1MqCryvcHVLDa22wR7oc3Y2NS2zGVQDWSpO0bNDl\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:02:57\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '476c1f927976dc0ab7793ffa71618923ca1204714ea6a512c8cd64f0249b353b083ee8ccdaebff3ba25a1124eea525278eac3b4cfb36e48b8fe5b6d4c99eaa7e', '2021-04-18 00:33:22', '2021-04-18 00:33:22'),
(56, 'App\\Models\\Auth\\User', 9, 'App\\Models\\Auth\\User', 9, 4, 'updated', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":17,\"branch_id\":22,\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:03:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"EDuY1HmJ55V2tTLWkx6s1MqCryvcHVLDa22wR7oc3Y2NS2zGVQDWSpO0bNDl\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:03:22\",\"deleted_at\":null}', '[\"timezone\",\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '0a0e8185d06a0b115af4c83b1e9fcfec7a87bd0329ab3609fc5b9480a8a2ddfd381c5b87260546a8937749bd67c042f2e2557b18deee8b65784737baef559716', '2021-04-18 00:33:22', '2021-04-18 00:33:22'),
(57, 'App\\Models\\Auth\\User', 9, 'App\\Models\\Auth\\User', 9, 4, 'updated', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":17,\"branch_id\":22,\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:03:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"sHhTFmbHzfJSalt0qXc5EuX8oYdSjAi9LIxvBR0JyYz6tblAKpPnktnqL4sF\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:03:22\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '4a71e1f349d24ca18af600f18ff5aad70adf5500aba0cdb7aa1563a1332e54968246675ff32f980799d3d57e0f6f6f1458d738e0fd1430badb4983875ca51a56', '2021-04-18 00:33:37', '2021-04-18 00:33:37'),
(58, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:03:46\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"LHSTsW38mWmcxXZCFN9Re2mus0hj3IT2fGHwdsBGBSgYlHjEHyh4HIR1nUsQ\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:03:46\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'c6ccdd75a083580a84d516faa26448de2a97fc0cba255da720d57475534d9453bd88bca1da940b9f72ca5943da01e4bc6c63131de336b285c9993d95a0955007', '2021-04-18 00:33:46', '2021-04-18 00:33:46'),
(59, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'synced', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":\"17\",\"branch_id\":\"22\",\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":\"1\",\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:03:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"sHhTFmbHzfJSalt0qXc5EuX8oYdSjAi9LIxvBR0JyYz6tblAKpPnktnqL4sF\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:03:22\",\"deleted_at\":null}', '[]', '{\"relation\":\"roles\",\"properties\":[{\"user_id\":9,\"role_id\":\"4\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '429ddbd3945a34a166c639d631333729fd65b7f58840e34024cfb47c53635d36628889a9bb57c49e09807cba762ed3e180dc10bf27460900e8eff8286977e634', '2021-04-18 00:34:36', '2021-04-18 00:34:36'),
(60, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 9, 4, 'synced', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":\"17\",\"branch_id\":\"22\",\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":\"1\",\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:03:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":\"1\",\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"sHhTFmbHzfJSalt0qXc5EuX8oYdSjAi9LIxvBR0JyYz6tblAKpPnktnqL4sF\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:03:22\",\"deleted_at\":null}', '[]', '{\"relation\":\"permissions\",\"properties\":[{\"user_id\":9,\"permission_id\":\"1\"},{\"user_id\":9,\"permission_id\":\"2\"},{\"user_id\":9,\"permission_id\":\"8\"},{\"user_id\":9,\"permission_id\":\"9\"},{\"user_id\":9,\"permission_id\":\"10\"},{\"user_id\":9,\"permission_id\":\"11\"},{\"user_id\":9,\"permission_id\":\"12\"},{\"user_id\":9,\"permission_id\":\"24\"}]}', '[]', 'http://localhost/eyet_account/public/admin/auth/user/9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'b62d45fd198ac1cb33ff44bcf5b8ffdeddcbcd7daab2d6081829beb913c4a5e016eb1f3dd7011c25cab80a8b34d3780cde9bed6bf8a90c7e72de88e27886d760', '2021-04-18 00:34:36', '2021-04-18 00:34:36'),
(61, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:03:46\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"UqakOB7SoE65kkndjRDn5N4JiKucKb19QyCEw7eEoRmANCrMZVNB8FzLTiyd\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:03:46\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '6285a46c19a68a9960c000120cf46a2970cb559cf633e9d61eb306abac8de5a68ce10dde8f44ad451f3a6bfb87df6177f9ff6c3115e28d1630f72846ff097a31', '2021-04-18 00:34:43', '2021-04-18 00:34:43'),
(62, 'App\\Models\\Auth\\User', 9, 'App\\Models\\Auth\\User', 9, 4, 'updated', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":17,\"branch_id\":22,\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:04:57\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"sHhTFmbHzfJSalt0qXc5EuX8oYdSjAi9LIxvBR0JyYz6tblAKpPnktnqL4sF\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:04:57\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '4492c8de5693d6b2084e9078cbefe718e3c2e5a241e1685f71dfd378891043aab307691faedbf9ddf64a5a148299f5715cbe89a9701afb0f674612c9b298462a', '2021-04-18 00:34:57', '2021-04-18 00:34:57'),
(63, 'App\\Models\\Auth\\User', 9, 'App\\Models\\Auth\\User', 9, 4, 'updated', '{\"id\":9,\"uuid\":\"777918cb-1735-439b-9793-e69f4587c8f3\",\"first_name\":\"robin\",\"last_name\":\"raj\",\"company_id\":17,\"branch_id\":22,\"email\":\"robin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$\\/Rzpeu3lA87.KJ\\/1Ug47ueFPJkQIq66Oaf1GDdvGd\\/X686uUTMXc6\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"4226f3aba316d82b5696925513e344d4\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:04:57\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"8dSBUUYRLwDrhy57g2lEhc8c1fb7ir9dkPGcQnMW2ZzXe90H3kmpZKp2LcNv\",\"created_at\":\"2021-04-18 06:02:57\",\"updated_at\":\"2021-04-18 06:04:57\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/eyet_account/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'ec5a048fa07d7d30d796075829fb3d1edb471431d5b776a4ea435d1f7ba35aaf028de9a715313d75d4aad5ac8eb9b80e3adeb86df338509e0cc101978f213455', '2021-04-18 00:35:06', '2021-04-18 00:35:06'),
(64, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-18 06:05:14\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"UqakOB7SoE65kkndjRDn5N4JiKucKb19QyCEw7eEoRmANCrMZVNB8FzLTiyd\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-18 06:05:14\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 'cf1d264a7a1e029e9807e8d1287109eb8479e7867dad64a7a9ba120b1aa70f321740df9c90ce937cf4cb7f3015a165d4ecd489f0454b6c70b8fa204ea912c159', '2021-04-18 00:35:14', '2021-04-18 00:35:14'),
(65, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-04-19 04:39:33\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"UqakOB7SoE65kkndjRDn5N4JiKucKb19QyCEw7eEoRmANCrMZVNB8FzLTiyd\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-04-19 04:39:33\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/eyet_account/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', '75d42045f533ae1988da0d803c5b6de605e6c59c28f22bea028306985373a041da21148d5765d38c28ba693551a90aee7e9d082a2465ccbe308d59e15a8b8e60', '2021-04-18 23:09:33', '2021-04-18 23:09:33'),
(66, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 4, 4, 'deleted', '{\"id\":4,\"uuid\":\"25930a75-3e1c-4513-8487-48982ac31d62\",\"first_name\":\"Ceasar\",\"last_name\":\"Kuhic\",\"company_id\":null,\"branch_id\":null,\"email\":\"braden74@example.org\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$cSbNu\\/AAiGe6veG2zgkCi.fgy8GYdCpj7pnNZWBu5EQXSrjmJvsOa\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"0e6dd188dd7006a20806dbd846223584\",\"confirmed\":1,\"timezone\":null,\"last_login_at\":null,\"last_login_ip\":null,\"to_be_logged_out\":0,\"status\":1,\"created_by\":null,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"DvMWrbQFdR\",\"created_at\":\"2021-04-05 09:59:56\",\"updated_at\":\"2021-04-28 08:37:53\",\"deleted_at\":\"2021-04-28 08:37:53\"}', '[]', '[]', '[]', 'http://localhost/accounting/public/admin/auth/user/4', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '1d08ec6dfe9d39922e75bb0b0ad782f4510eb0c887dc67adc2f838aa7ec3b64e77d648c8d9b6903a27e9047b37f7ff96db7eb63c6f405f3ec086bb461c1d6978', '2021-04-28 03:07:53', '2021-04-28 03:07:53'),
(67, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-03 04:28:26\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"UqakOB7SoE65kkndjRDn5N4JiKucKb19QyCEw7eEoRmANCrMZVNB8FzLTiyd\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-03 04:28:27\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '72a325409e81b2ddd02f532521ae0afcba92d0899c4a9a744f10743d5297b28df1cf0c4c695d29da963f3ebd20debb76fe4b0aacb6f322000c530744db8a4688', '2021-05-02 22:58:27', '2021-05-02 22:58:27'),
(68, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-03 04:28:26\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"gFePikUhZ6SIkUkZiQ4a3pQhK9oHvILt2aGFZHbF4SR8JZAdkzWyI0R1D9nP\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-03 04:28:27\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '2b22bc2b8d8abaefb3844647a356120f817e7d86f82e0135b60478ba2b544b8b7d42f4e87271180c7c0409c0f5c1118d33daa122b7d4b0f392e767be4371898b', '2021-05-03 22:27:48', '2021-05-03 22:27:48'),
(69, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:00:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"gFePikUhZ6SIkUkZiQ4a3pQhK9oHvILt2aGFZHbF4SR8JZAdkzWyI0R1D9nP\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:00:23\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'b7aff04a5a9eb532d9aaad4006734ab857d40e85b16339c2395a5b4e84e204e2a90dac8b5dd21ca1f113fbe9f7c42dee23657ff6d64a85be67e7053b4a514295', '2021-05-03 22:30:23', '2021-05-03 22:30:23'),
(70, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:00:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"OwsiJysHQqyN3aaAbEdKoFcjs4cW9aw13SZS6WnPp1hvATI4RZAhn1xlHxl0\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:00:23\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a6379c094d62242731c2c4b608392adfd2a85a909c3146a880225e1330eaf33668f3e62942c26a72fe30aa3222fc03739f5c9fd907eae3b058a5495d38dacbee', '2021-05-03 23:00:43', '2021-05-03 23:00:43'),
(71, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:30:56\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"OwsiJysHQqyN3aaAbEdKoFcjs4cW9aw13SZS6WnPp1hvATI4RZAhn1xlHxl0\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:30:57\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a0cdfceaa730b250b6a75df82f93262db2dda38088bbff64245331eb31466117d6212a6175467401d199ef833fcc1988eac6aaddffaa04389cf3eedf5443032b', '2021-05-03 23:00:57', '2021-05-03 23:00:57'),
(72, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:30:56\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ibJPw6W9kQr9zVAhhxugemsTNKM1uS4aCSNaZqko1Ziibjbr7GUmdpz5fGrD\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:30:57\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'c3128948ca15294e2dcd76567cb0214b2924d1bb9aff465755fea5970137dda5d15b9a64f823ca431793f189c471700fa2a2b7d3d854b67ebfca1c339755c3b9', '2021-05-03 23:09:44', '2021-05-03 23:09:44'),
(73, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:39:55\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ibJPw6W9kQr9zVAhhxugemsTNKM1uS4aCSNaZqko1Ziibjbr7GUmdpz5fGrD\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:39:58\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'c3595ddab21fa8ee1a4ba1954ead44357b5db7de64eb8fc1bfd2abeeb545743c1ed8cccd5df4055ea422b3f144b01f1a6f93dbb790b510ba8a2ab8994151cede', '2021-05-03 23:09:58', '2021-05-03 23:09:58'),
(74, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:39:55\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"NtAEHs1cVMWGyhyHJRV7iM6fjfYwh9sEvIOoc8oIzpNR1EApmFvzhIvtdozZ\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:39:58\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'ee1ddfe418e41f42cb1d6a4d2258e3eea36e72bcdd85c590659a4d37cff59dc85c5aadfee3709cc6f4f8137050a7a5f0b4fc3a27f78db5a8fc04e513a7f70752', '2021-05-03 23:19:10', '2021-05-03 23:19:10'),
(75, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:49:19\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"NtAEHs1cVMWGyhyHJRV7iM6fjfYwh9sEvIOoc8oIzpNR1EApmFvzhIvtdozZ\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:49:20\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a31f62438d90a1787a4ae3e97c3c3c70b15327c430f20ed55a86fa1a98e84f25ab612bf910477fa468dc0044a534813b4a3c815532092dd3ae4936f0aba05e13', '2021-05-03 23:19:20', '2021-05-03 23:19:20'),
(76, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 04:49:19\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"6eJh8FU7VAtJKv210cXrPYdMMi1hfQ5VXTjUFb2KC5djfTcVuwPB0Hjk5fEd\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 04:49:20\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '092c3abebc045791173b990a9161ceb2326cc1d4c65832bc243e4829df78eeb7760578faa31bdd21653e7202fd7995f9c1c5e7e1afe2f7b68f335ffd3666ed83', '2021-05-04 12:11:51', '2021-05-04 12:11:51'),
(77, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 17:42:03\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"6eJh8FU7VAtJKv210cXrPYdMMi1hfQ5VXTjUFb2KC5djfTcVuwPB0Hjk5fEd\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 17:42:04\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'f6ca6de922f9286431ab2b5989230988b736c2a7b25e3d53bbcb98c4df55e92a8c52808325d9859ec98997c58788a7d4e15d0417492dd5ebb698b36ce01baead', '2021-05-04 12:12:04', '2021-05-04 12:12:04'),
(78, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 17:42:03\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"FLpFfyxnR60BWQsdqJHopgaR6aacgePacTehvUfP9SFxzODc03GfRFlDEKKh\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 17:42:04\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'ec04730be41d13382d90fbb7483472f4aa6b9b39834b3fa3311e052692fe1411872ab36538f73c6b5eb22c421af64accce3afa695dd08423f60547a51382a5f2', '2021-05-04 12:14:45', '2021-05-04 12:14:45'),
(79, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 17:44:57\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"FLpFfyxnR60BWQsdqJHopgaR6aacgePacTehvUfP9SFxzODc03GfRFlDEKKh\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 17:44:57\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a9c752bccb60910db1f3be3a755a95082c0a58e650738bde7c0ce78478b530c7720b748b1878e6555bbceb652bb170d99b88cfb19d53bf6bf2c9251bd50d5b50', '2021-05-04 12:14:57', '2021-05-04 12:14:57'),
(80, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 17:44:57\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"AyGjIJ0O2Aj0AMcDXWiCdvAg58AY6Zf7Kt7532RjbnMEVr2zbsWl1JISdKkt\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 17:44:57\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '46fbe9c345fd3b4c82927cff44c5c4871dd361df78bcc41e23c705762374bbff163d21485a022863c35349d88b36c0d10c733d7578efaef9a65e66d810a1afe7', '2021-05-04 12:22:40', '2021-05-04 12:22:40'),
(81, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 17:52:51\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"AyGjIJ0O2Aj0AMcDXWiCdvAg58AY6Zf7Kt7532RjbnMEVr2zbsWl1JISdKkt\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 17:52:51\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '7a435e54da6b843c51fef1488597de055e6860ad4e7829f29ea0904df7a06c2a06620f6cff4c8286a72c6df99078de22c5213e08608db9602a34a5bf7ccd813a', '2021-05-04 12:22:51', '2021-05-04 12:22:51'),
(82, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 17:52:51\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"w8PZSf9nUCzViLXaaQjoe6SU0TucbOjJkBDnThcsWIL24OQ0mPXZnF7XCLHR\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 17:52:51\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '7fa44e62b9000450a94f5f33ae730aff03d6a43470dd3da88a726d4d9a6ee1bcfd46168345fc04234a699d08746f64975dee3aef1d54c692cf652e6912124b3b', '2021-05-04 12:32:03', '2021-05-04 12:32:03'),
(83, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 18:02:16\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"w8PZSf9nUCzViLXaaQjoe6SU0TucbOjJkBDnThcsWIL24OQ0mPXZnF7XCLHR\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 18:02:17\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'eea6fcc51c728ade2ac733f45d733f4d427620cfb327fa073547ba7eb87d9a28d44cb36f3b58f04c11776af26e46eedce80d9394f9698b9c44bd8114ceaae8c9', '2021-05-04 12:32:17', '2021-05-04 12:32:17');
INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
(84, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-04 18:02:16\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"sWfKju2chyF8uT1N4cJ8UJJeGOZ0PIVVw3qFOf0oYw2PqPOnKdMv4eJs9AkX\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-04 18:02:17\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '4ceeb05fd3fcf1acf339cc20438460a833ae3f00d7d657f194eec5d23ff0ae2f600c572fc99669ac8cecc14d930acaa759009d48cc292cef4d4a6cf9e4d9185e', '2021-05-05 22:25:38', '2021-05-05 22:25:38'),
(85, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-06 03:55:48\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"sWfKju2chyF8uT1N4cJ8UJJeGOZ0PIVVw3qFOf0oYw2PqPOnKdMv4eJs9AkX\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-06 03:55:49\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a30b5e91c072f3979127ac6df9c8a05453f7bd4170ba47e937d137d52cf5bca827b1a806c32dfa18a8192db67feece219d4531c72dda28369e2fbc8142bb738d', '2021-05-05 22:25:49', '2021-05-05 22:25:49'),
(86, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-06 03:55:48\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"He6Pj2QtGzlpVWuggzJBRg0KJUU1mGovNwz2OGkB5puQ7aG0QfK9eeealSVQ\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-06 03:55:49\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '6925c15a18ae51fbb5dd1cb4f201d63f15510d1e82016bc5cf9ea6daa304d4af7c689f714a04ba9614b9fce4c6c3fee0b0bb3e43c8982063c1a19eff88b9a696', '2021-05-05 22:35:25', '2021-05-05 22:35:25'),
(87, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-06 04:05:39\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"He6Pj2QtGzlpVWuggzJBRg0KJUU1mGovNwz2OGkB5puQ7aG0QfK9eeealSVQ\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-06 04:05:39\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '4668da2d9e2419c21fe9f4a1a5dbc58b4a35206d3be715a72a25227c584d1c265aab7e23bf26ab91fa0e863bce8ee336cb2cf1512f0ccfd3e85c71a330f1ff05', '2021-05-05 22:35:40', '2021-05-05 22:35:40'),
(88, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-06 04:05:39\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"vUCPs5gVZEpiuBl65MAgLj7diE6xfStyJUv2v9VasSDnZM1adbTf3vFIbPam\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-06 04:05:39\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a036c214af855792abe080e4c30ca1dadc886bde5db14bf70b3c452aee6584ba3ac67843055570b035f65b9d997c5023d09461901a469a61852e893eada71751', '2021-05-05 22:39:25', '2021-05-05 22:39:25'),
(89, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-06 04:09:36\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"vUCPs5gVZEpiuBl65MAgLj7diE6xfStyJUv2v9VasSDnZM1adbTf3vFIbPam\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-06 04:09:40\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '1ad440f11f21f8840c7e293a7a84cf10281f47fa61feaa8d8de3311dd020ff4ea44a828b5140b984bba519cf3bc377d5d7ab7407dfa388bdf073a2009c84df80', '2021-05-05 22:39:40', '2021-05-05 22:39:40'),
(90, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$Oz\\/Lu17DCz5.9kcoOZxG2e3rHUEaCw4TzkMqhIVNBD7lz.PEQS\\/8K\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 08:40:33\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"vUCPs5gVZEpiuBl65MAgLj7diE6xfStyJUv2v9VasSDnZM1adbTf3vFIbPam\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 08:40:35\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting1/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '3b142ec8d3fef4d65cce29cfb3b01dc96795f52fb331ec11a17a6c735a40bcfec2bf57729f315604820054254703699d3b6879fb8562b7bdbd5520ff9fe5f570', '2021-05-11 03:10:36', '2021-05-11 03:10:36'),
(91, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 08:40:33\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"vUCPs5gVZEpiuBl65MAgLj7diE6xfStyJUv2v9VasSDnZM1adbTf3vFIbPam\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 11:12:40\",\"deleted_at\":null}', '[\"password\",\"password_changed_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/password/expired', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'e66649971d64ce68983b7361dc848769a7753f2027d899aaee4edad2c7bf6f534e497ccab58369ac57924eeb29f90a4f3fe701946f0312c4f2014e07d2d04fe7', '2021-05-11 05:42:40', '2021-05-11 05:42:40'),
(92, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 11:14:56\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"vUCPs5gVZEpiuBl65MAgLj7diE6xfStyJUv2v9VasSDnZM1adbTf3vFIbPam\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 11:14:56\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '5ad37bbf4250f478898f1aec22e0eb4c13f5a182359191ff6e1c01440c815b2e34b1e0325017196646fe7e670bf659f079fcd447c21999d0e0ace684ba062422', '2021-05-11 05:44:57', '2021-05-11 05:44:57'),
(93, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 11:14:56\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"egxFTtG6TSx3h1WeI1OfmIkcYwIuhFfaxHdqQS2pMKXn6jdAHDQxIBexjUag\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 11:14:56\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounting1/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '031a0beea18327513159c850def72d8842d62780671d4085bc031cb9bcee8fa9a51bdad16a6f8e970fbcb8bd4689c3e6436c911480b64912b1e9c755c0d27d2c', '2021-05-11 09:23:04', '2021-05-11 09:23:04'),
(94, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 14:53:36\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"egxFTtG6TSx3h1WeI1OfmIkcYwIuhFfaxHdqQS2pMKXn6jdAHDQxIBexjUag\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 14:53:36\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting1/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '805440baf6b1a3c36dbc6c36053ae987834b4fba82ed2e81e7873f04bb5ffc0b5b499c015a7863c5ba49780d5ef58907dfa0d37f64aff85da4494caa42a4dc1b', '2021-05-11 09:23:36', '2021-05-11 09:23:36'),
(95, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 15:48:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"egxFTtG6TSx3h1WeI1OfmIkcYwIuhFfaxHdqQS2pMKXn6jdAHDQxIBexjUag\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 15:48:22\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounting1/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'e3aec697f09822b730a121902d1b72fb078ab8a6d864f763eb9c2bc0ab049cdd250be04e30c35fa3c60c522561b97e28183297afceec7fbd5f80593b8f0e0308', '2021-05-11 10:18:22', '2021-05-11 10:18:22'),
(96, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-11 15:48:22\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"VFaTwSfoQQC6h9v5KhpYhvsZKQhtfHIu7FDTG7sdnAF3UlFNAwPMktQUsO3w\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-11 15:48:22\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'ea16a59218f8f6cd5a89b9fbf0822abd2640a83c02d83326ba258103e85163d6f28243ab6fe85b4e4431e658c40732d4d77760735d5b34f109f3ce24cd779048', '2021-05-12 06:24:25', '2021-05-12 06:24:25'),
(97, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-12 11:54:55\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"VFaTwSfoQQC6h9v5KhpYhvsZKQhtfHIu7FDTG7sdnAF3UlFNAwPMktQUsO3w\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-12 11:54:56\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'b4047a007d1972355db9da684f9723a8e07980f17ec0f121d2208eac855aea04f9c4da376bc9144a080e575f268eb7e38f6260ecb304a1b7cc6aaeeaebdfa36d', '2021-05-12 06:24:56', '2021-05-12 06:24:56'),
(98, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-12 11:54:55\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"9ykOxgOy2r311VyLeupb3rmJfnMa3d3TtPojvtuFbeCU1yzJunF3j6jg98dy\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-12 11:54:56\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '48f8261f1a3fd48b90b7742e018289491988c74bb0ba5fe677b3be1f6ce5f20baad3ec2b25886f26d4c9f3f8df4366dfcc61dfdc53eb1903787387142f64b289', '2021-05-12 06:30:28', '2021-05-12 06:30:28'),
(99, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-12 12:00:42\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"9ykOxgOy2r311VyLeupb3rmJfnMa3d3TtPojvtuFbeCU1yzJunF3j6jg98dy\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-12 12:00:42\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'fe6f33ff762071fedc43769fa532eee9c2e512e263f41e9ca70a027d90648c39e642191df4c1e6391c3ed923e5ef122a938bb0c5d9692657c8db0433443877fb', '2021-05-12 06:30:42', '2021-05-12 06:30:42'),
(100, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-12 12:00:42\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Pq17tSlf8ReMD668qaSHgUkxxUfn6ueW3pA0EgLs0Nt9mynviBIuz7ncK7CH\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-12 12:00:42\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '2f7a836f356ce005a69798b7c3102878412778f67138d3508e1072801ea3cb556df861d6f87521ae5512114086868cb9e6e81bf5d4211f284db316b65c0e6b32', '2021-05-12 06:41:19', '2021-05-12 06:41:19'),
(101, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-12 12:11:36\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Pq17tSlf8ReMD668qaSHgUkxxUfn6ueW3pA0EgLs0Nt9mynviBIuz7ncK7CH\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-12 12:11:36\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '2faf5dfd8930fa7e6d2abbd19b34dfe15e23ef2b6ed434908deabd28bd3e77312f45073535d2c8e2d6eaf967a25e59ae9cf52dadabc4ab525a303812dcecf5fe', '2021-05-12 06:41:36', '2021-05-12 06:41:36'),
(102, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-12 12:11:36\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Rp3fXoCPE7lUImdJComiJoVvGMUVdElJEImrcyRLklSJrqgm5e5Ucpe1jexc\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-12 12:11:36\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'cb0ee0966d7eda558ee03d1e1a3bbc916f708071406bce4d80dc5e0885365f9462596e5bd0bb5e05b15e73627d8f3a4e246d40d0fdea048fbcdef839ee798198', '2021-05-17 05:53:17', '2021-05-17 05:53:17'),
(103, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:24:00\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"Rp3fXoCPE7lUImdJComiJoVvGMUVdElJEImrcyRLklSJrqgm5e5Ucpe1jexc\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:24:01\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'e8bdbfe59a556962dab43f13f75d00116aead78ed15de771532e798c6461498af3f09495730c9172f1c5af67ab379fc942e540e84e4aac9ff50805c97da445e2', '2021-05-17 05:54:01', '2021-05-17 05:54:01'),
(104, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:24:00\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"jnR14VPWw8uHEy3sKhMCtzZjsHgEUXfcNsr2YivDNcyT7Q0kAeTIARpLGC7X\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:24:01\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '6cc6d5d8857569a6291ce0c6a5badbab63025c4d2215b7b0880dc19f07ede39707b60668fef41a2eb6fae45a1552dfc5d8cd122fcccc4305c7a7ca3f1e2e25d8', '2021-05-17 05:54:51', '2021-05-17 05:54:51'),
(105, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:25:02\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"jnR14VPWw8uHEy3sKhMCtzZjsHgEUXfcNsr2YivDNcyT7Q0kAeTIARpLGC7X\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:25:02\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'fd142da99aa7e21aa5278f378865c9e5980eac8ce256831e7a0f284da3b9d21043737fb352bd12b01eedc3db22c1b59683871bd6534d81e6d57e07d95071786f', '2021-05-17 05:55:02', '2021-05-17 05:55:02'),
(106, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:25:02\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ts0Npp9lUfecFwKD5CvJBFoG6gH7TStsyA60DH1tWvkeed5Qv5jRqo8hs4dc\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:25:02\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '2a5b74678c412780e922834b694ad6dc3cb5247ff97b4deb2d883b664280c74ebfd7a5cd7f38c80f277c45d83cf27471c06e7b1ae00ac6cd37cac0d0922cd196', '2021-05-17 06:06:14', '2021-05-17 06:06:14'),
(107, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:36:32\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"ts0Npp9lUfecFwKD5CvJBFoG6gH7TStsyA60DH1tWvkeed5Qv5jRqo8hs4dc\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:36:32\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '809925a24bb2652cb7298ffd50d46f6ee09bee9a5a823bafeaa3eb560698d59753cb6be62d94aeee6d22b34c0809f44596926b8b978576d6e3873310ad899fc1', '2021-05-17 06:06:32', '2021-05-17 06:06:32'),
(108, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:36:32\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"4hVjWUkkMXx9jwjytv30lVGEW78wEjgeDCiI8QwvZzgrAmhzA0cK4J4cNsLV\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:36:32\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'ca2373479cd08378a6d7b1920ec4c2720f749279946a6b17a7f015f190426ca9124282e3d04557d69af295573fe74e8c8c8d5ab7e0ea8bfb2f43d4c312dec83f', '2021-05-17 06:08:56', '2021-05-17 06:08:56'),
(109, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:39:09\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"4hVjWUkkMXx9jwjytv30lVGEW78wEjgeDCiI8QwvZzgrAmhzA0cK4J4cNsLV\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:39:09\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '64ed7eeee5f5cb1502503c129ff169098b40945ff5b159f4bdc41429aa2fac7c986e122f3710422c5054f9c53887cf654110da9727fa49cc66bfca602e8ae20e', '2021-05-17 06:09:09', '2021-05-17 06:09:09'),
(110, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:39:09\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"DY7qjmWWmCCKzDKlGpgrzolFUTcKX37P91ulozNQDiqEsTbnA64OoElw85Cl\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:39:09\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'c776ae8653c365e2aee4a0abc7d862b04763db94f089c663cd3f99b1299065f3e329ffcfee6abc56a6463ad0ddd369a8c3f810287c07272b4d94a04d55349ac6', '2021-05-17 06:10:02', '2021-05-17 06:10:02'),
(111, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:40:16\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"DY7qjmWWmCCKzDKlGpgrzolFUTcKX37P91ulozNQDiqEsTbnA64OoElw85Cl\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:40:16\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '23afb21549b9fe0f8db187ef58fb40195ecd06af2ab554062ac9d9140325a1c582b7595e6f9e374047ef14b20469ff295cae2c21dd5ca941ccda71aef9c2f21c', '2021-05-17 06:10:17', '2021-05-17 06:10:17'),
(112, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:40:16\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"VjmeRneOtrkrICaQ6puMrm30Ucb1bq6Sot1AeOBJMXtx7X8B8vA03xZkIkW3\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:40:16\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'a09e7294c4c1da1c914c1fa78527b5c832884ee4da9f3d4b24549c1904b6aaa56e38449156de8964b41f4f18314bbd4389fd44e8060fd3758fa723c7e823a67a', '2021-05-17 06:11:07', '2021-05-17 06:11:07'),
(113, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:41:21\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"VjmeRneOtrkrICaQ6puMrm30Ucb1bq6Sot1AeOBJMXtx7X8B8vA03xZkIkW3\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:41:21\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'feefc6f19bd02e0d109ec75f7c00860093b72b94f57192cb7d09de14bf274e0aaa4b83edf19743baf34b71162e162ea5c73a9b327d4068d6ae529c1a4e124ad5', '2021-05-17 06:11:21', '2021-05-17 06:11:21'),
(114, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 11:41:21\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"bpEaHWJVwqUriLJOY88RhXXZufDEnW8BnK7hPG1QizR3QvicMlpOcRfgPLZ8\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 11:41:21\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'f6c93a98a109d553d8f3b0ba56b70c9ad95619fea8a38cf2a18136848967fd95a3161e9183074d60b71fb78144ffb2863704b77971beba596633ffb5669d8cb9', '2021-05-17 06:43:01', '2021-05-17 06:43:01'),
(115, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 12:13:16\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"bpEaHWJVwqUriLJOY88RhXXZufDEnW8BnK7hPG1QizR3QvicMlpOcRfgPLZ8\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 12:13:16\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'aa6ce533271d54900a214394f0daa135fc617a4645f82a35e82807face0e5d22365e409bbaa44f2f23ceea6ac3af2bd0851fc65d8dc6783f6026a541207113d5', '2021-05-17 06:43:16', '2021-05-17 06:43:16'),
(116, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 12:13:16\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"NYsK1as7eyXZ3egFzCeuWs7qXFgVnUeE6D2GdPo3thORAJo2GUyFVHYKfgXx\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 12:13:16\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '4007fbac1aa506ec75240359612918074e25ca643371c7cd1844fce102102be435a391759a91696d25eb36ec3036c32b2cde6c53884fa8218adadbb7e8c45f19', '2021-05-17 08:05:50', '2021-05-17 08:05:50'),
(117, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 13:36:15\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"NYsK1as7eyXZ3egFzCeuWs7qXFgVnUeE6D2GdPo3thORAJo2GUyFVHYKfgXx\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 13:36:15\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '2d51a856cee51bd5782ac2ceef7f7e8c9e333936214eefc823e4047b511fe205a69876800cf36464ca2623b071d9d9768b9c92e8e2c4efca19a4914865d9cf28', '2021-05-17 08:06:15', '2021-05-17 08:06:15'),
(118, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-17 13:36:15\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"PY2bIbBchF9BNBWj1nJ7tHbfipmHKXbI9pSAqdSk6W4ImpZbC650sO6RM6yE\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-17 13:36:15\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'd383da10df07ffd499c91f2de061944a8901875af16c2c4cf62c47a91511d7dd1840a42f03ab6a34190ced9378ffc991cca328ace8c70398c261eacb960ea3d2', '2021-05-17 08:06:45', '2021-05-17 08:06:45'),
(119, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-19 12:41:59\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"PY2bIbBchF9BNBWj1nJ7tHbfipmHKXbI9pSAqdSk6W4ImpZbC650sO6RM6yE\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-19 12:42:01\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'ea7ecf20e46ff82fb133a3eaead994cf0eefa4fde7824c50e362b75f4f7b958c6a7bb2163f1c7771642ca11501f2a416b9bd4cfe9787d4d69d50b3c8f01973f5', '2021-05-19 07:12:02', '2021-05-19 07:12:02'),
(120, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-19 12:41:59\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"M275SyXoiHDR3hL4wFNiYSOmY3Z2w6L6FZr2bsqAOIixfyrZW3a3rsJp3b8l\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-19 12:42:01\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2ede997b9d150d7eb5946e10239a7bc5d1723eae034194713b46b3d13031ec7b891a80bce57490a49ea55c64e87b131ec85b6572d1e4f556e045aea156507175', '2021-05-23 11:01:48', '2021-05-23 11:01:48'),
(121, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-23 16:32:21\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"M275SyXoiHDR3hL4wFNiYSOmY3Z2w6L6FZr2bsqAOIixfyrZW3a3rsJp3b8l\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-23 16:32:22\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'e6dd6392e3e05d5bb117b32f5d846570e9f106c36c6ddc10a3bd5ac0bd4a8f138cf815d5ca3a524b80169773d9b2c88c87b7b273c4a7a2fbb469c300a40e66bf', '2021-05-23 11:02:22', '2021-05-23 11:02:22');
INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
(122, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-23 16:32:21\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"paVOSwC9IsLw66Q6wrrbPPTqONYqfbCgwGBF0y7qtxrLPUoZTAxjbCmU52ua\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-23 16:32:22\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://localhost/accounterp/public/logout', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'cae9f807dac904c15c4d50f11a514da80fea45bdc01a6a65f7bf3993b279f4fce13126e28b809ca5a3b101a2e5c52ccf2cc9ab2db6a3dc35e2f88cac1b3f7a13', '2021-05-23 11:03:32', '2021-05-23 11:03:32'),
(123, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"5418d7a1-b5c7-4298-8eaf-38b95eac4dd5\",\"first_name\":\"Robin\",\"last_name\":\"Global Eyet\",\"company_id\":null,\"branch_id\":null,\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG\",\"password_changed_at\":\"2021-05-11 11:12:40\",\"active\":1,\"confirmation_code\":\"2f2838ed0a8fec077451cd10c3eab9d5\",\"confirmed\":1,\"timezone\":\"America\\/New_York\",\"last_login_at\":\"2021-05-23 16:33:57\",\"last_login_ip\":\"::1\",\"to_be_logged_out\":0,\"status\":1,\"created_by\":1,\"updated_by\":null,\"is_term_accept\":0,\"remember_token\":\"paVOSwC9IsLw66Q6wrrbPPTqONYqfbCgwGBF0y7qtxrLPUoZTAxjbCmU52ua\",\"created_at\":\"2021-04-05 09:59:48\",\"updated_at\":\"2021-05-23 16:33:59\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://localhost/accounterp/public/login', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '81c316838891fd82d633ca5cc4674dd12de2e46b8a89fbacc5d27a331433943c63c7bb4ce6de7a513b42227032d103cce807610cd8b7cdf3250951898904941c', '2021-05-23 11:03:59', '2021-05-23 11:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `loanemis`
--

CREATE TABLE `loanemis` (
  `id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(13) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `emidate` date DEFAULT NULL,
  `paymentdate` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loanemis`
--

INSERT INTO `loanemis` (`id`, `loan_id`, `amount`, `emidate`, `paymentdate`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1000.00', '2021-05-17', '2021-05-17', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(13) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `duration` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emi` decimal(10,2) DEFAULT NULL,
  `interest` decimal(10,2) DEFAULT NULL,
  `total_interest` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `name`, `employee_id`, `amount`, `duration`, `emi`, `interest`, `total_interest`, `total_amount`, `startdate`, `enddate`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Personal Loan', 1, '10000.00', '10', '1000.00', '0.00', '0.00', '10000.00', '2021-05-15', '2022-03-15', 1, 1, 1, '2021-05-15 08:01:10', '2021-05-15 08:50:27', NULL),
(2, 'Medical loan', 1, '5000.00', '10', '500.00', '0.00', '0.00', '5000.00', '2021-05-15', '2022-03-15', 1, 1, NULL, '2021-05-15 08:02:43', '2021-05-15 08:02:43', NULL);

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2017_09_03_144628_create_permission_tables', 1),
(9, '2017_09_11_174816_create_social_accounts_table', 1),
(10, '2017_09_26_140332_create_cache_table', 1),
(11, '2017_09_26_140528_create_sessions_table', 1),
(12, '2017_09_26_140609_create_jobs_table', 1),
(13, '2017_11_02_060149_create_blog_categories_table', 1),
(14, '2017_11_02_060149_create_blog_map_categories_table', 1),
(15, '2017_11_02_060149_create_blog_map_tags_table', 1),
(16, '2017_11_02_060149_create_blog_tags_table', 1),
(17, '2017_11_02_060149_create_blogs_table', 1),
(18, '2017_11_02_060149_create_faqs_table', 1),
(19, '2017_11_02_060149_create_pages_table', 1),
(20, '2018_04_08_033256_create_password_histories_table', 1),
(21, '2018_11_21_000001_create_ledgers_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_06_11_080530_create_email_templates_table', 1),
(24, '2020_06_18_060624_add_foreign_key_constraints_to_acl_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Starter Personal Access Client', 'nj4FrGc4UgcSDBo3P6reVdrnM4FXAeyK2QGBkk1A', NULL, 'http://localhost', 1, 0, 0, '2021-04-05 04:28:41', '2021-04-05 04:28:41'),
(2, NULL, 'Laravel Starter Password Grant Client', 'SVoqCNIamDUmziHeuD81cUwmjFMv4jroi6lvCOPn', 'users', 'http://localhost', 0, 1, 0, '2021-04-05 04:28:41', '2021-04-05 04:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-05 04:28:41', '2021-04-05 04:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_slug`, `description`, `cannonical_link`, `seo_title`, `seo_keyword`, `seo_description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'iusto dolores labore molestiae', 'consequatur-et-aspernatur-iusto', 'Sunt numquam voluptatem odit ipsa fugiat cumque sequi. Omnis distinctio minus consequuntur tempora.', 'https://www.hahn.com/numquam-velit-soluta-magnam-hic', 'eos', 'nostrum', 'Ut asperiores non qui eos eius. Hic voluptate ut et blanditiis molestias nulla.', 0, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(2, 'et iusto reiciendis tempore', 'consequatur-quam-beatae-exercitationem-deleniti-vel-hic', 'Voluptatem a maxime laudantium dolorem adipisci quis. Ipsam non molestiae ullam. Odit itaque qui molestiae. Minima sequi similique eos aut.', 'http://bergnaum.biz/porro-maiores-aliquid-in-debitis', 'eaque', 'aperiam', 'Est corporis consequatur dolorum sit facere temporibus rerum. Ex fuga adipisci nulla id et similique. Sint dignissimos consequatur ut porro voluptatum ut facilis excepturi.', 1, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(3, 'omnis ipsa dolores non', 'in-aut-veritatis-corrupti-iste-et', 'Iste itaque sunt praesentium illo maxime unde. Iusto molestiae pariatur quo mollitia id iusto. Temporibus nemo voluptatum et quidem aliquid.', 'http://little.com/voluptas-accusantium-consequatur-natus-impedit-dolores-beatae-aspernatur-quam.html', 'perferendis', 'modi', 'Magni nemo similique cupiditate est quaerat. Qui sit blanditiis rem pariatur laborum magnam provident. Odit maiores consequatur ducimus dolor occaecati. Quia ex in veritatis voluptatem.', 1, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(4, 'quos animi a possimus', 'quo-fuga-nisi-asperiores-similique-consequatur', 'Deleniti aliquam dolor et alias. Quis illum et architecto. Consequatur aut voluptatum consectetur quia. Ab impedit dolor quod quos facere non.', 'http://www.schumm.org/', 'voluptatibus', 'est', 'Illum non blanditiis qui ut aut. Explicabo et distinctio sit minima.', 1, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(5, 'quo delectus impedit est', 'aut-quibusdam-a-non-soluta-illum', 'Enim facilis veniam excepturi officia et voluptas ut. Fuga eveniet recusandae dolores eum. In ex atque minima hic.', 'http://hauck.com/exercitationem-non-molestiae-rerum-reiciendis-earum.html', 'est', 'eaque', 'Sit aperiam qui in numquam laudantium at. Sunt explicabo aut dolorem et praesentium sint alias voluptates. Molestiae repellendus molestiae pariatur omnis non id. Assumenda ipsam incidunt expedita quam consectetur quia.', 0, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(6, 'minus delectus facere animi', 'voluptas-voluptas-beatae-similique-rerum-odio-quia-sequi', 'Veniam ratione totam expedita consectetur. Nihil deleniti animi voluptas mollitia et. Laudantium qui sit asperiores ullam deserunt inventore.', 'http://www.spencer.com/eaque-quam-explicabo-velit-qui', 'rem', 'nesciunt', 'Hic in et qui reiciendis et. Inventore ratione excepturi et quia autem et ex qui. Inventore occaecati sunt rerum molestiae tenetur eos. Similique repellendus magni aut enim rerum aut. Molestiae nulla sapiente maiores ad.', 1, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(7, 'esse maiores quod hic', 'tempore-et-tempore-sed', 'Eum et consequatur praesentium reprehenderit maiores asperiores voluptas quas. Quo nihil repellat quam commodi id. Autem voluptas aut dignissimos dolores sit excepturi deleniti modi.', 'http://roberts.com/', 'quas', 'temporibus', 'Est amet cupiditate ad asperiores. Alias fugit molestiae nulla voluptates quam repudiandae fugiat. Veritatis quis perferendis officia enim adipisci voluptates.', 0, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(8, 'ut eum a aut', 'enim-harum-placeat-quae-voluptatum-illum-labore-ipsum-fugiat', 'Unde ut repudiandae quia non adipisci aut. Qui repudiandae qui animi commodi totam error voluptatem vitae. Quae in eveniet qui sunt nulla repellat laudantium. Ea vel ipsa repellendus earum et ut.', 'http://spencer.info/quo-sequi-maiores-voluptas-quos', 'error', 'eligendi', 'Nihil beatae commodi voluptatem natus exercitationem. Nam tempora voluptate voluptatem numquam qui sunt ut. Iusto optio consequuntur excepturi odio. Ipsa et et voluptas officia fugiat veritatis dolorem.', 1, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(9, 'impedit qui optio perferendis', 'provident-quaerat-natus-ducimus-aut-voluptatibus-suscipit-nesciunt-quos', 'Repellendus accusamus fuga et quia. Nulla dolorum est modi eligendi consequuntur. Sunt nihil quia debitis. Vel reprehenderit molestias corporis aspernatur.', 'http://kohler.com/pariatur-sunt-provident-nemo', 'itaque', 'ut', 'Praesentium neque omnis distinctio dolor minus consectetur dicta. Minima quidem accusamus quae quae. Sapiente eaque quod eligendi ab. Recusandae cum necessitatibus eum hic. Temporibus iste provident quis adipisci cum quia minima est.', 0, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(10, 'est voluptate odio officia', 'et-iure-voluptas-velit', 'Officia autem saepe nihil repellat enim repudiandae et. Voluptatibus architecto unde sed blanditiis sit. Quia nam molestiae at culpa provident nobis provident.', 'http://www.prosacco.net/aspernatur-tempore-nihil-laborum-blanditiis', 'quia', 'pariatur', 'Quia quo labore ducimus ut et. Sed suscipit placeat ipsam quos sed animi a.', 0, 4, NULL, '2021-04-05 04:29:57', '2021-04-05 04:29:57', NULL),
(11, 'About Us', 'about-us', '<p>testing</p>', 'http://roberts.com/', 'about', 'about', '<p>about</p>', 1, 1, NULL, '2021-04-18 00:23:40', '2021-04-18 00:23:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_histories`
--

CREATE TABLE `password_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_histories`
--

INSERT INTO `password_histories` (`id`, `user_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 4, '$2y$10$cSbNu/AAiGe6veG2zgkCi.fgy8GYdCpj7pnNZWBu5EQXSrjmJvsOa', '2021-04-05 04:29:56', '2021-04-05 04:29:56'),
(3, 6, '$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62', '2021-04-09 06:42:14', '2021-04-09 06:42:14'),
(4, 7, '$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq', '2021-04-09 06:48:27', '2021-04-09 06:48:27'),
(5, 8, '$2y$10$CtapGSOIuhtxTwym6/fImeQBBnwFNwfEL/QCwpTPf3PZKSeGbH0xe', '2021-04-12 01:39:47', '2021-04-12 01:39:47'),
(6, 9, '$2y$10$/Rzpeu3lA87.KJ/1Ug47ueFPJkQIq66Oaf1GDdvGd/X686uUTMXc6', '2021-04-18 00:32:57', '2021-04-18 00:32:57'),
(7, 1, '$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG', '2021-05-11 05:42:40', '2021-05-11 05:42:40');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'view-backend', 'View Backend', 1, 1, 1, NULL, '2021-04-05 04:29:50', '2021-04-05 04:29:50', NULL),
(2, 'view-frontend', 'View Frontend', 2, 1, 1, 1, '2021-04-05 04:29:51', '2021-04-18 00:18:20', NULL),
(3, 'view-access-management', 'View Access Management', 3, 1, 1, NULL, '2021-04-05 04:29:51', '2021-04-05 04:29:51', NULL),
(4, 'view-user-management', 'View User Management', 4, 1, 1, NULL, '2021-04-05 04:29:51', '2021-04-05 04:29:51', NULL),
(5, 'view-active-user', 'View Active User', 5, 1, 1, NULL, '2021-04-05 04:29:51', '2021-04-05 04:29:51', NULL),
(6, 'view-deactive-user', 'View Deactive User', 6, 1, 1, NULL, '2021-04-05 04:29:51', '2021-04-05 04:29:51', NULL),
(7, 'view-deleted-user', 'View Deleted User', 7, 1, 1, NULL, '2021-04-05 04:29:51', '2021-04-05 04:29:51', NULL),
(8, 'show-user', 'Show User Details', 8, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(9, 'create-user', 'Create User', 9, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(10, 'edit-user', 'Edit User', 9, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(11, 'delete-user', 'Delete User', 10, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(12, 'activate-user', 'Activate User', 11, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(13, 'deactivate-user', 'Deactivate User', 12, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(14, 'login-as-user', 'Login As User', 13, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(15, 'clear-user-session', 'Clear User Session', 14, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(16, 'view-role-management', 'View Role Management', 15, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(17, 'create-role', 'Create Role', 16, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(18, 'edit-role', 'Edit Role', 17, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(19, 'delete-role', 'Delete Role', 18, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(20, 'view-permission-management', 'View Permission Management', 19, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(21, 'create-permission', 'Create Permission', 20, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(22, 'edit-permission', 'Edit Permission', 21, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(23, 'delete-permission', 'Delete Permission', 22, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(24, 'view-page', 'View Page', 23, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(25, 'create-page', 'Create Page', 24, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(26, 'edit-page', 'Edit Page', 25, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(27, 'delete-page', 'Delete Page', 26, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(28, 'view-email-template', 'View Email Templates', 27, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-09 05:43:11', '2021-04-09 05:43:11'),
(29, 'create-email-template', 'Create Email Templates', 28, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-09 05:43:04', '2021-04-09 05:43:04'),
(30, 'edit-email-template', 'Edit Email Templates', 29, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-09 05:42:47', '2021-04-09 05:42:47'),
(31, 'delete-email-template', 'Delete Email Templates', 30, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-09 05:42:56', '2021-04-09 05:42:56'),
(32, 'edit-settings', 'Edit Settings', 31, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-05 04:29:52', NULL),
(33, 'view-blog-category', 'View Blog Categories Management', 32, 1, 1, NULL, '2021-04-05 04:29:52', '2021-04-09 05:41:58', '2021-04-09 05:41:58'),
(34, 'create-blog-category', 'Create Blog Category', 33, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:41:44', '2021-04-09 05:41:44'),
(35, 'edit-blog-category', 'Edit Blog Category', 34, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:41:39', '2021-04-09 05:41:39'),
(36, 'delete-blog-category', 'Delete Blog Category', 35, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:41:32', '2021-04-09 05:41:32'),
(37, 'view-blog-tag', 'View Blog Tags Management', 36, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:41:20', '2021-04-09 05:41:20'),
(38, 'create-blog-tag', 'Create Blog Tag', 37, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:41:11', '2021-04-09 05:41:11'),
(39, 'edit-blog-tag', 'Edit Blog Tag', 38, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:40:57', '2021-04-09 05:40:57'),
(40, 'delete-blog-tag', 'Delete Blog Tag', 39, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:40:50', '2021-04-09 05:40:50'),
(41, 'view-blog', 'View Blogs Management', 40, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:40:39', '2021-04-09 05:40:39'),
(42, 'create-blog', 'Create Blog', 41, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:40:19', '2021-04-09 05:40:19'),
(43, 'edit-blog', 'Edit Blog', 42, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:40:08', '2021-04-09 05:40:08'),
(44, 'delete-blog', 'Delete Blog', 43, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:40:03', '2021-04-09 05:40:03'),
(45, 'view-faq', 'View FAQ Management', 44, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:39:27', '2021-04-09 05:39:27'),
(46, 'create-faq', 'Create FAQ', 45, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:39:19', '2021-04-09 05:39:19'),
(47, 'edit-faq', 'Edit FAQ', 46, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:39:10', '2021-04-09 05:39:10'),
(48, 'delete-faq', 'Delete FAQ', 47, 1, 1, NULL, '2021-04-05 04:29:53', '2021-04-09 05:39:01', '2021-04-09 05:39:01'),
(49, 'create-company', 'Company Creation', 32, 1, 1, NULL, '2021-04-18 00:18:38', '2021-04-18 00:18:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(48, 2, 3),
(79, 1, 2),
(80, 3, 2),
(81, 4, 2),
(82, 5, 2),
(83, 6, 2),
(84, 7, 2),
(85, 8, 2),
(86, 16, 2),
(87, 20, 2),
(88, 24, 2),
(89, 25, 2),
(90, 26, 2),
(91, 27, 2),
(92, 49, 2),
(95, 1, 4),
(96, 2, 4),
(97, 8, 4),
(98, 9, 4),
(99, 10, 4),
(100, 11, 4),
(101, 12, 4),
(102, 24, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `user_id`) VALUES
(1, 42, 2),
(2, 34, 2),
(3, 38, 2),
(4, 29, 2),
(5, 46, 2),
(6, 25, 2),
(7, 44, 2),
(8, 36, 2),
(9, 40, 2),
(10, 31, 2),
(11, 48, 2),
(12, 27, 2),
(13, 43, 2),
(14, 35, 2),
(15, 39, 2),
(16, 30, 2),
(17, 47, 2),
(18, 26, 2),
(19, 8, 2),
(20, 3, 2),
(21, 5, 2),
(22, 1, 2),
(23, 33, 2),
(24, 37, 2),
(25, 41, 2),
(26, 6, 2),
(27, 7, 2),
(28, 28, 2),
(29, 45, 2),
(30, 24, 2),
(31, 20, 2),
(32, 16, 2),
(33, 4, 2),
(34, 2, 3),
(35, 1, 6),
(36, 3, 6),
(37, 4, 6),
(38, 5, 6),
(39, 6, 6),
(40, 7, 6),
(41, 8, 6),
(42, 16, 6),
(43, 20, 6),
(44, 24, 6),
(45, 25, 6),
(46, 26, 6),
(47, 27, 6),
(48, 2, 7),
(49, 2, 8),
(50, 1, 9),
(51, 8, 9),
(52, 9, 9),
(53, 10, 9),
(54, 11, 9),
(55, 2, 9),
(56, 12, 9),
(57, 24, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_barcode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_cat` int(11) NOT NULL,
  `product_subcat` int(11) DEFAULT NULL,
  `product_brand` int(11) DEFAULT NULL,
  `product_unit` int(11) DEFAULT NULL,
  `product_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_alertqty` int(11) DEFAULT NULL,
  `product_tax` int(11) DEFAULT NULL,
  `product_discounttype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_discount` decimal(10,2) DEFAULT NULL,
  `product_amount` decimal(10,2) DEFAULT NULL,
  `product_taxamount` decimal(10,2) DEFAULT NULL,
  `product_margintype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_marginamount` double(10,2) DEFAULT NULL,
  `product_netamount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `product_barcode`, `product_cat`, `product_subcat`, `product_brand`, `product_unit`, `product_image`, `product_alertqty`, `product_tax`, `product_discounttype`, `product_discount`, `product_amount`, `product_taxamount`, `product_margintype`, `product_marginamount`, `product_netamount`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Samsung Galaxy 5', 'SG005', 'Bar099455', 8, 11, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '700.00', 1, 1, NULL, '2021-04-27 05:08:35', '2021-04-27 05:08:35', NULL),
(7, 'Iphone11', 'Iphone11', 'Bar99011', 8, 14, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3000.00', 1, 1, 1, '2021-04-27 05:12:35', '2021-04-27 05:12:43', NULL),
(8, 'Redme 9 Pro', 'Red9pro', 'bar89900', 8, 15, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '500.00', 1, 1, NULL, '2021-04-27 05:13:45', '2021-04-27 05:13:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseitems`
--

CREATE TABLE `purchaseitems` (
  `id` int(12) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `purchaseitems_cat` int(11) DEFAULT NULL,
  `purchaseitems_subcat` int(11) DEFAULT NULL,
  `purchaseitems_name` int(11) DEFAULT NULL,
  `purchaseitems_quantity` varchar(10) DEFAULT NULL,
  `purchaseitems_price` decimal(10,2) DEFAULT NULL,
  `purchaseitems_actual_amount` decimal(10,0) DEFAULT NULL,
  `purchaseitems_discount_rate` decimal(11,2) DEFAULT NULL,
  `purchaseitems_discount_amount` decimal(11,2) DEFAULT NULL,
  `purchaseitems_final_amount` decimal(11,2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaseitems`
--

INSERT INTO `purchaseitems` (`id`, `purchase_id`, `purchaseitems_cat`, `purchaseitems_subcat`, `purchaseitems_name`, `purchaseitems_quantity`, `purchaseitems_price`, `purchaseitems_actual_amount`, `purchaseitems_discount_rate`, `purchaseitems_discount_amount`, `purchaseitems_final_amount`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 1, 8, 11, 6, '50', '100.00', '5000', NULL, NULL, '5000.00', '2021-04-30 00:28:36', '2021-04-30 00:28:36', NULL),
(2, 2, 8, 15, 8, '2', '3000.00', '6000', NULL, NULL, '6000.00', '2021-05-04 12:43:05', '2021-05-04 12:43:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchasereturnitems`
--

CREATE TABLE `purchasereturnitems` (
  `id` int(12) NOT NULL,
  `purchasereturn_id` int(11) NOT NULL,
  `purchasereturnitems_cat` int(11) DEFAULT NULL,
  `purchasereturnitems_subcat` int(11) DEFAULT NULL,
  `purchasereturnitems_name` int(11) DEFAULT NULL,
  `purchasereturnitems_quantity` varchar(10) DEFAULT NULL,
  `purchasereturnitems_price` decimal(10,2) DEFAULT NULL,
  `purchasereturnitems_actual_amount` decimal(10,0) DEFAULT NULL,
  `purchasereturnitems_discount_rate` decimal(11,2) DEFAULT NULL,
  `purchasereturnitems_discount_amount` decimal(11,2) DEFAULT NULL,
  `purchasereturnitems_final_amount` decimal(11,2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchasereturns`
--

CREATE TABLE `purchasereturns` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchasereturn_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasereturn_date` date DEFAULT NULL,
  `purchasereturn_company` int(13) DEFAULT NULL,
  `purchasereturn_branch` int(13) DEFAULT NULL,
  `purchasereturn_supplier` int(13) DEFAULT NULL,
  `purchasereturn_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasereturn_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasereturn_amount` decimal(10,2) DEFAULT NULL,
  `purchasereturn_discounttype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasereturn_discountamount` decimal(10,2) DEFAULT NULL,
  `purchasereturn_discounttotal` decimal(10,2) DEFAULT NULL,
  `purchasereturn_taxtype` int(10) DEFAULT NULL,
  `purchasereturn_taxamount` decimal(10,2) DEFAULT NULL,
  `purchasereturn_netamount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_company` int(13) DEFAULT NULL,
  `purchase_branch` int(13) DEFAULT NULL,
  `purchase_supplier` int(13) DEFAULT NULL,
  `purchase_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_amount` decimal(10,2) DEFAULT NULL,
  `purchase_discounttype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_discountamount` decimal(10,2) DEFAULT NULL,
  `purchase_discounttotal` decimal(10,2) DEFAULT NULL,
  `purchase_taxtype` int(10) DEFAULT NULL,
  `purchase_taxamount` decimal(10,2) DEFAULT NULL,
  `purchase_netamount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `purchase_no`, `purchase_date`, `purchase_company`, `purchase_branch`, `purchase_supplier`, `purchase_image`, `purchase_notes`, `purchase_amount`, `purchase_discounttype`, `purchase_discountamount`, `purchase_discounttotal`, `purchase_taxtype`, `purchase_taxamount`, `purchase_netamount`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Purch001', '2021-04-30', 9, 16, 2, NULL, NULL, '5000.00', NULL, NULL, NULL, NULL, '0.00', '5000.00', 2, 1, NULL, '2021-04-30 00:28:36', '2021-04-30 00:28:36', NULL),
(2, 'Puchs002', '2021-05-04', 9, 16, 2, NULL, NULL, '6000.00', NULL, NULL, NULL, NULL, '0.00', '6000.00', 2, 1, NULL, '2021-05-04 12:43:05', '2021-05-04 12:43:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT 0,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Administrator', 1, 1, 0, 1, 1, '2021-04-05 04:29:49', '2021-04-18 00:14:28', NULL),
(2, 'Company  Admin', 0, 2, 0, 1, 1, '2021-04-05 04:29:49', '2021-04-18 00:29:08', NULL),
(3, 'Branch Admin', 0, 3, 0, 1, 1, '2021-04-05 04:29:49', '2021-04-09 05:44:36', NULL),
(4, 'Employee', 0, 4, 0, 1, 1, '2021-04-12 01:38:40', '2021-04-18 00:34:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 6, 2),
(5, 7, 3),
(6, 8, 3),
(8, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(13) DEFAULT NULL,
  `basic_salary` decimal(10,2) DEFAULT NULL,
  `total_allowance` decimal(10,2) DEFAULT NULL,
  `total_deduction` decimal(10,2) DEFAULT NULL,
  `net_salary` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_allowances`
--

CREATE TABLE `salary_allowances` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary_id` int(13) DEFAULT NULL,
  `allowance_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_deductions`
--

CREATE TABLE `salary_deductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary_id` int(13) DEFAULT NULL,
  `deduction_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saleitems`
--

CREATE TABLE `saleitems` (
  `id` int(12) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `saleitems_cat` int(11) DEFAULT NULL,
  `saleitems_subcat` int(11) DEFAULT NULL,
  `saleitems_name` int(11) DEFAULT NULL,
  `saleitems_quantity` varchar(10) DEFAULT NULL,
  `saleitems_price` decimal(10,2) DEFAULT NULL,
  `saleitems_actual_amount` decimal(10,0) DEFAULT NULL,
  `saleitems_discount_rate` decimal(11,2) DEFAULT NULL,
  `saleitems_discount_amount` decimal(11,2) DEFAULT NULL,
  `saleitems_final_amount` decimal(11,2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saleitems`
--

INSERT INTO `saleitems` (`id`, `sale_id`, `saleitems_cat`, `saleitems_subcat`, `saleitems_name`, `saleitems_quantity`, `saleitems_price`, `saleitems_actual_amount`, `saleitems_discount_rate`, `saleitems_discount_amount`, `saleitems_final_amount`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 1, 8, 11, 6, '5', '100.00', '500', NULL, NULL, '500.00', '2021-04-30 00:29:13', '2021-04-30 00:29:13', NULL),
(2, 2, 8, 11, 6, '2', '500.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:02:46', '2021-05-03 23:02:46', NULL),
(3, 2, 8, 14, 7, '1', '1000.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:02:46', '2021-05-03 23:02:46', NULL),
(4, 3, 8, 11, 6, '2', '500.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:03:58', '2021-05-03 23:03:58', NULL),
(5, 3, 8, 14, 7, '1', '1000.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:03:58', '2021-05-03 23:03:58', NULL),
(6, 4, 8, 11, 6, '2', '500.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:08:39', '2021-05-03 23:08:39', NULL),
(7, 4, 8, 14, 7, '1', '1000.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:08:39', '2021-05-03 23:08:39', NULL),
(8, 5, 8, 11, 6, '2', '500.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:09:08', '2021-05-03 23:09:08', NULL),
(9, 5, 8, 14, 7, '1', '1000.00', '1000', NULL, NULL, '1000.00', '2021-05-03 23:09:08', '2021-05-03 23:09:08', NULL),
(10, 6, 8, 14, 7, '1', '2000.00', '2000', NULL, NULL, '2000.00', '2021-05-03 23:11:05', '2021-05-03 23:11:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salereturnitems`
--

CREATE TABLE `salereturnitems` (
  `id` int(12) NOT NULL,
  `salereturn_id` int(11) NOT NULL,
  `salereturnitems_name` int(11) DEFAULT NULL,
  `salereturnitems_quantity` varchar(10) DEFAULT NULL,
  `salereturnitems_type` varchar(50) DEFAULT NULL,
  `salereturnitems_price` decimal(10,2) DEFAULT NULL,
  `salereturnitems_actual_amount` decimal(10,0) DEFAULT NULL,
  `salereturnitems_discount_rate` decimal(11,2) DEFAULT NULL,
  `salereturnitems_discount_amount` decimal(11,2) DEFAULT NULL,
  `salereturnitems_final_amount` decimal(11,2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salereturns`
--

CREATE TABLE `salereturns` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `salereturn_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salereturn_date` date DEFAULT NULL,
  `salereturn_company` int(13) DEFAULT NULL,
  `salereturn_branch` int(13) DEFAULT NULL,
  `salereturn_customer` int(13) DEFAULT NULL,
  `salereturn_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salereturn_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salereturn_amount` decimal(10,2) DEFAULT NULL,
  `salereturn_discounttype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salereturn_discountamount` decimal(10,2) DEFAULT NULL,
  `salereturn_discounttotal` decimal(10,2) DEFAULT NULL,
  `salereturn_taxtype` int(10) DEFAULT NULL,
  `salereturn_taxamount` decimal(10,2) DEFAULT NULL,
  `salereturn_netamount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `sale_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_date` date DEFAULT NULL,
  `sale_company` int(13) DEFAULT NULL,
  `sale_branch` int(13) DEFAULT NULL,
  `sale_customer` int(13) DEFAULT NULL,
  `sale_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_amount` decimal(10,2) DEFAULT NULL,
  `sale_discounttype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_discountamount` decimal(10,2) DEFAULT NULL,
  `sale_discounttotal` decimal(10,2) DEFAULT NULL,
  `sale_taxtype` int(10) DEFAULT NULL,
  `sale_taxamount` decimal(10,2) DEFAULT NULL,
  `sale_netamount` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_no`, `sale_date`, `sale_company`, `sale_branch`, `sale_customer`, `sale_image`, `sale_notes`, `sale_amount`, `sale_discounttype`, `sale_discountamount`, `sale_discounttotal`, `sale_taxtype`, `sale_taxamount`, `sale_netamount`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sal001', '2021-04-30', 9, 16, 2, NULL, NULL, '500.00', NULL, NULL, NULL, NULL, '0.00', '500.00', 2, 1, NULL, '2021-04-30 00:29:13', '2021-04-30 00:29:13', NULL),
(2, 'Sal0003', '2021-05-04', 17, 16, 1, NULL, NULL, '2000.00', NULL, NULL, NULL, NULL, '0.00', '2000.00', 2, 1, NULL, '2021-05-03 23:02:46', '2021-05-03 23:02:46', NULL),
(3, 'Sal0003', '2021-05-04', 17, 16, 1, NULL, NULL, '2000.00', NULL, NULL, NULL, NULL, '0.00', '2000.00', 2, 1, NULL, '2021-05-03 23:03:58', '2021-05-03 23:03:58', NULL),
(4, 'Sal0003', '2021-05-04', 17, 16, 1, NULL, NULL, '2000.00', NULL, NULL, NULL, NULL, '0.00', '2000.00', 2, 1, NULL, '2021-05-03 23:08:39', '2021-05-03 23:08:39', NULL),
(5, 'Sal0003', '2021-05-04', 17, 16, 1, NULL, NULL, '2000.00', NULL, NULL, NULL, NULL, '0.00', '2000.00', 2, 1, NULL, '2021-05-03 23:09:08', '2021-05-03 23:09:08', NULL),
(6, 'Sal0008', '2021-05-04', 9, 17, 2, NULL, NULL, '2000.00', NULL, NULL, NULL, NULL, '0.00', '2000.00', 2, 1, NULL, '2021-05-03 23:11:05', '2021-05-03 23:11:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(13) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `company_id`, `email`, `phoneno`, `address`, `website`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Johnson & Johnson', 1, 'Johnson@supply.com', '9005454500', '110, Kanyakumari, Tamil Nadu', 'mondaikadu.com', 0, 1, 1, '2021-04-13 04:14:06', '2021-04-13 04:16:43', NULL),
(2, 'LG', 1, 'admin@admin.com', '8994556567567', 'sdd', 'robin.com', 1, 1, NULL, '2021-04-13 04:18:02', '2021-04-13 04:18:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `short_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kilo Grams', 'kg', 1, 1, 1, '2021-04-13 00:18:46', '2021-04-13 00:27:18', NULL),
(2, 'SSR', 'SDFSDGFSDGSDG', 1, 1, NULL, '2021-04-13 00:27:28', '2021-04-13 00:27:33', '2021-04-13 00:27:33'),
(3, 'Meter', 'm', 1, 1, NULL, '2021-04-13 04:17:28', '2021-04-13 04:17:28', NULL),
(4, 'Pieces', 'Pcs', 1, 1, NULL, '2021-04-18 00:42:36', '2021-04-18 00:42:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(13) DEFAULT NULL,
  `branch_id` int(13) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gravatar',
  `avatar_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_be_logged_out` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `is_term_accept` tinyint(1) NOT NULL DEFAULT 0 COMMENT ' 0 = not accepted,1 = accepted',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `first_name`, `last_name`, `company_id`, `branch_id`, `email`, `avatar_type`, `avatar_location`, `password`, `password_changed_at`, `active`, `confirmation_code`, `confirmed`, `timezone`, `last_login_at`, `last_login_ip`, `to_be_logged_out`, `status`, `created_by`, `updated_by`, `is_term_accept`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5418d7a1-b5c7-4298-8eaf-38b95eac4dd5', 'Robin', 'Global Eyet', NULL, NULL, 'admin@admin.com', 'gravatar', NULL, '$2y$10$M4sWzL4YV0OJWt5EX0rOWO15X97B6SpAsLFhp1QZ1MCQ9jl8jYVZG', '2021-05-11 05:42:40', 1, '2f2838ed0a8fec077451cd10c3eab9d5', 1, 'America/New_York', '2021-05-23 11:03:57', '::1', 0, 1, 1, NULL, 0, 'paVOSwC9IsLw66Q6wrrbPPTqONYqfbCgwGBF0y7qtxrLPUoZTAxjbCmU52ua', '2021-04-05 04:29:48', '2021-05-23 11:03:59', NULL),
(2, '5409af86-f72a-472c-b2d2-28234331ae34', 'Justin', 'Bevan', NULL, NULL, 'executive@executive.com', 'gravatar', NULL, '$2y$10$IzifDwXBLkbvSx/byb7TQ.q0.S/BCxUGVXfOhs3dGrBfxkIc80Ht6', NULL, 1, 'bf7e3b1f746cad5d90b9ff422876e0b8', 1, NULL, NULL, NULL, 0, 1, 1, NULL, 0, NULL, '2021-04-05 04:29:48', '2021-04-05 04:29:48', NULL),
(3, '29acfe1e-5bf1-4b3d-8c76-c6b692d6e320', 'User', 'Test', NULL, NULL, 'user@user.com', 'gravatar', NULL, '$2y$10$QR0/4JVyn4S0x2MXjLFK9OXinTDUabz2JsxC3wQbGJpgaMiPm5Ovm', NULL, 1, '1fd66e4f2930be46889d4ed1b0048fe1', 1, NULL, NULL, NULL, 0, 1, 1, NULL, 0, NULL, '2021-04-05 04:29:48', '2021-04-05 04:29:48', NULL),
(4, '25930a75-3e1c-4513-8487-48982ac31d62', 'Ceasar', 'Kuhic', NULL, NULL, 'braden74@example.org', 'gravatar', NULL, '$2y$10$cSbNu/AAiGe6veG2zgkCi.fgy8GYdCpj7pnNZWBu5EQXSrjmJvsOa', NULL, 1, '0e6dd188dd7006a20806dbd846223584', 1, NULL, NULL, NULL, 0, 1, NULL, NULL, 0, 'DvMWrbQFdR', '2021-04-05 04:29:56', '2021-04-28 03:07:53', '2021-04-28 03:07:53'),
(6, '9e93c072-77a6-4ed1-ac47-add3f6d406f5', 'Robin', 'GnanaRaj', NULL, NULL, 'robin@gnanaraj.com', 'gravatar', NULL, '$2y$10$lhmhNPzkvISGqFWAX6JAHuAsZzFCQ8uaBBl.BmLlEfxYtOLgIvE62', NULL, 1, '0cc3478fc4ff4d21bcda0050ab4bff04', 1, NULL, NULL, NULL, 0, 1, 1, NULL, 0, NULL, '2021-04-09 06:42:14', '2021-04-09 06:42:14', NULL),
(7, '8a7c834d-f903-4ccb-a874-56af0c55ca65', 'samss', 'kumar', 9, 17, 'sam@kumar.com', 'gravatar', NULL, '$2y$10$MLj1k85WpebIKqT9.A0.geVwgJ4FdMPMK7uQaVdTaY1E78vilwjXq', NULL, 1, 'bc978f597eee78ba0694986cfce9bb29', 1, NULL, NULL, NULL, 0, 1, 1, NULL, 0, NULL, '2021-04-09 06:48:27', '2021-04-09 06:55:10', NULL),
(8, '7d16b327-61ea-4a28-870e-ba2205ac7598', 'employee', 'hclemp', 16, 21, 'hclemp@gg.com', 'gravatar', NULL, '$2y$10$CtapGSOIuhtxTwym6/fImeQBBnwFNwfEL/QCwpTPf3PZKSeGbH0xe', NULL, 1, '779117e03407b155fd29d6e3917d417f', 1, NULL, NULL, NULL, 0, 1, 1, NULL, 0, NULL, '2021-04-12 01:39:47', '2021-04-12 01:39:47', NULL),
(9, '777918cb-1735-439b-9793-e69f4587c8f3', 'robin', 'raj', 17, 22, 'robin@admin.com', 'gravatar', NULL, '$2y$10$/Rzpeu3lA87.KJ/1Ug47ueFPJkQIq66Oaf1GDdvGd/X686uUTMXc6', NULL, 1, '4226f3aba316d82b5696925513e344d4', 1, 'America/New_York', '2021-04-18 00:34:57', '::1', 0, 1, 1, NULL, 0, '8dSBUUYRLwDrhy57g2lEhc8c1fb7ir9dkPGcQnMW2ZzXe90H3kmpZKp2LcNv', '2021-04-18 00:32:57', '2021-04-18 00:34:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_map_categories`
--
ALTER TABLE `blog_map_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_map_categories_blog_id_index` (`blog_id`),
  ADD KEY `blog_map_categories_category_id_index` (`category_id`);

--
-- Indexes for table `blog_map_tags`
--
ALTER TABLE `blog_map_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_map_tags_blog_id_index` (`blog_id`),
  ADD KEY `blog_map_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ledgers`
--
ALTER TABLE `ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ledgers_recordable_type_recordable_id_index` (`recordable_type`,`recordable_id`),
  ADD KEY `ledgers_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indexes for table `loanemis`
--
ALTER TABLE `loanemis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_page_slug_unique` (`page_slug`);

--
-- Indexes for table `password_histories`
--
ALTER TABLE `password_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseitems`
--
ALTER TABLE `purchaseitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasereturnitems`
--
ALTER TABLE `purchasereturnitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasereturns`
--
ALTER TABLE `purchasereturns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_allowances`
--
ALTER TABLE `salary_allowances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_deductions`
--
ALTER TABLE `salary_deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saleitems`
--
ALTER TABLE `saleitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salereturnitems`
--
ALTER TABLE `salereturnitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salereturns`
--
ALTER TABLE `salereturns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_accounts_user_id_foreign` (`user_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_map_categories`
--
ALTER TABLE `blog_map_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_map_tags`
--
ALTER TABLE `blog_map_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `loanemis`
--
ALTER TABLE `loanemis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `password_histories`
--
ALTER TABLE `password_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchaseitems`
--
ALTER TABLE `purchaseitems`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchasereturnitems`
--
ALTER TABLE `purchasereturnitems`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasereturns`
--
ALTER TABLE `purchasereturns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_allowances`
--
ALTER TABLE `salary_allowances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_deductions`
--
ALTER TABLE `salary_deductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saleitems`
--
ALTER TABLE `saleitems`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salereturnitems`
--
ALTER TABLE `salereturnitems`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salereturns`
--
ALTER TABLE `salereturns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `password_histories`
--
ALTER TABLE `password_histories`
  ADD CONSTRAINT `password_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
