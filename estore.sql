-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 01:02 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `address_1` varchar(45) DEFAULT NULL,
  `address_2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `extra` varchar(45) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `customers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `cust_id`, `type`, `address_1`, `address_2`, `city`, `extra`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `customers_id`) VALUES
(1, 2, NULL, ' gbgfbfg', '  giza 3', '    giza', '  no comment fbhghb', NULL, NULL, NULL, NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE `apis` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `key_1` varchar(100) DEFAULT NULL,
  `key_2` varchar(100) DEFAULT NULL,
  `key_3` varchar(100) DEFAULT NULL,
  `key_4` varchar(100) DEFAULT NULL,
  `key_5` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `by` int(11) DEFAULT NULL,
  `timestamp-1` timestamp NULL DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `main_image` varchar(45) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `by_name` varchar(45) DEFAULT NULL,
  `by_email` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `title`) VALUES
(25, 'img/brand/1.png', 'gggg', NULL, NULL, NULL, NULL, 'mahmt'),
(31, 'img/brand/5.png', 'ttt', NULL, NULL, NULL, NULL, 'tttt'),
(32, 'img/brand/4.png', 'ffff', NULL, NULL, NULL, NULL, 'ffffff'),
(33, 'img/brand/', 'bhbbb', NULL, NULL, NULL, NULL, 'fffff'),
(34, 'img/brand/', 'hhhh', NULL, NULL, NULL, NULL, 'barnd 1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `notes`, `image`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(2, 'mangoo', 'this is very usefulltoo', 'good', 'img/category/p6.jpg', NULL, NULL, NULL, NULL),
(3, 'tometos', 'cheap', 'powerfull', 'img/category/dddd.jpg', NULL, NULL, NULL, NULL),
(4, 'vegetabales', 'awserftg', 'dfs', 'img/category/tttt.jpg', NULL, NULL, NULL, NULL),
(5, 'gvj', 'this is very usefulltoo', 'hbkh', 'img/category/gggg.jpg', NULL, NULL, NULL, NULL),
(6, 'plays', 'nice', 'good', 'img/category/dddd.jpg', NULL, NULL, NULL, NULL),
(7, 'eeeee', 'eeee', 'eee', 'img/category/dddd.jpg', NULL, NULL, NULL, NULL),
(8, 'sd', 'sssssss', 'ssssss', 'img/category/dddd.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `token` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `uinque_id` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `phone`, `email`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `token`, `password`, `uinque_id`, `birthday`, `nationality`, `gender`, `role`) VALUES
(12, '   afaf gomaa', 'gomaa', '98078978', 'afaf@gmail.com', NULL, NULL, NULL, NULL, NULL, '', 'agc555553', 'ba248c985ace94863880921d8900c53h', '2019-09-09', 'egyptian', 'femal', 1),
(20, 'ggg', NULL, NULL, 'ggg@gmail.com', NULL, NULL, NULL, NULL, NULL, '', '123456', 'ba248c985ace94863880921d8900c53f', '0000-00-00', '', '', 0),
(21, 'sds', NULL, NULL, 'xcs@tghtfgh', NULL, NULL, NULL, NULL, NULL, '', '4t4567576', '82d5984c2a2ad4c62caf1dd073b1c91c', '0000-00-00', '', '', 0),
(22, 'gbtrfhbtgh', NULL, NULL, 'gfd@htghjnytc', NULL, NULL, NULL, NULL, NULL, '', 'njyuk8i7o8', 'c3efc2e60f61c1415a10aee895ade13b', '0000-00-00', '', '', 0),
(23, 'g bgfnhfgtjhnty', NULL, NULL, 'ghnhgn@ytjytjkyu7', NULL, NULL, NULL, NULL, NULL, '', 'jkyuku8ol98', '19b2ee584019fd82721c6069678fc3a5', '0000-00-00', '', '', 0),
(24, 'kkk', NULL, NULL, 'kkk@gmail.com', NULL, NULL, NULL, NULL, NULL, '', '123456', 'cb42e130d1471239a27fca6228094f0e', '0000-00-00', '', '', 0),
(26, 'fdcfdcfrd', NULL, NULL, 'dfvfrv@gtfhtgbhyfg', NULL, NULL, NULL, NULL, NULL, '', 'tghtrfjyjuyj', 'db47b96f7d4e63a6ae6a95fe04e1cd64', '0000-00-00', '', '', 0),
(29, 'yjnyhjnu', NULL, NULL, 'juh@hmnjuhykj', NULL, NULL, NULL, NULL, NULL, '', 'uyklu8o89ilk ', '5de37bc5d6a8024b19d51f2a962d58d6', '0000-00-00', '', '', 0),
(30, 'yjnyhjnu', NULL, NULL, 'juh@hmnjuhykj', NULL, NULL, NULL, NULL, NULL, '', 'uyklu8o89ilk ', '5de37bc5d6a8024b19d51f2a962d58d6', '0000-00-00', '', '', 0),
(31, 'yjnyhjnu', NULL, NULL, 'juh@hmnjuhykj', NULL, NULL, NULL, NULL, NULL, '', 'uyklu8o89ilk ', '5de37bc5d6a8024b19d51f2a962d58d6', '0000-00-00', '', '', 0),
(32, 'yjnyhjnu', NULL, NULL, 'juh@hmnjuhykj', NULL, NULL, NULL, NULL, NULL, '', 'uyklu8o89ilk ', '5de37bc5d6a8024b19d51f2a962d58d6', '0000-00-00', '', '', 0),
(33, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'jyui76i87uik8lo', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(34, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'jyui76i87uik8lo', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(35, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'jyui76i87uik8lo', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(36, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'thytjuyikuik', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(37, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'thytjuyikuik', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(38, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', '][][]po[p', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(39, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', '][][]po[p', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(40, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'p;\'p;\'p;\'', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(41, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'p;\'p;\'p;\'', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(42, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'p;\'p;\'p;\'', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(43, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'p;\'p;\'p;\'', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(44, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'cfdsfc', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(45, 'afafsfsdf', NULL, NULL, 'fefs@fghg.com', NULL, NULL, NULL, NULL, NULL, '', 'cfdsfc', '989a02793fa39abf8d56d82137a75b92', '0000-00-00', '', '', 0),
(46, 'fhbfrghgtjyh', NULL, NULL, 'jyhjyuiui', NULL, NULL, NULL, NULL, NULL, '', 'uikuikuu', '0d6fb7afddd1e1e3e339430d33a3d125', '0000-00-00', '', '', 0),
(47, 'fhbfrghgtjyh', NULL, NULL, 'jyhjyuiui', NULL, NULL, NULL, NULL, NULL, '', 'uikuikuu', '0d6fb7afddd1e1e3e339430d33a3d125', '0000-00-00', '', '', 0),
(48, 'hnmhmhmh', NULL, NULL, 'hkjhk,hj@etgrytght', NULL, NULL, NULL, NULL, NULL, '', 'jykujlkjlk', '61ed7fb07e9a32f448b11137f539695d', '0000-00-00', '', '', 0),
(49, 'liklio;po;o', NULL, NULL, 'hjkhg@gtfhjgyuy', NULL, NULL, NULL, NULL, NULL, '', 'jk,jliopik;o', '02ea3adc16a28d8b671633029fb998a0', '0000-00-00', '', '', 0),
(50, 'iloiloi;plo', NULL, NULL, 'klk@ghgjhkj', NULL, NULL, NULL, NULL, NULL, '', 'jkjlipo9;p', 'fc7f1710f309b9c34751147cdb4c793d', '0000-00-00', '', '', 0),
(51, 'kulil,i', NULL, NULL, 'il.oi;pip9i', NULL, NULL, NULL, NULL, NULL, '', 'ilo9iol99il', '2e9a6a3b4e4de0d68871c3ccf91dcf9d', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers_has_orders`
--

CREATE TABLE `customers_has_orders` (
  `customers_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers_has_wishlist`
--

CREATE TABLE `customers_has_wishlist` (
  `customers_id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jumbtron`
--

CREATE TABLE `jumbtron` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jumbtron`
--

INSERT INTO `jumbtron` (`id`, `product_id`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE `latest` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `latest`
--

INSERT INTO `latest` (`id`, `product_id`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'home', 'http://localhost/estore/', NULL, NULL, NULL, NULL, NULL),
(2, 'shop', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'blog', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'pages', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'contact', 'http://localhost/estore/about/contact', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_children`
--

CREATE TABLE `menu_children` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_children`
--

INSERT INTO `menu_children` (`id`, `parent_id`, `title`, `link`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `menu_id`) VALUES
(0, 2, 'Product Details', '', NULL, NULL, NULL, NULL, NULL, 2),
(8, 2, 'Product Checkout', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(9, 2, 'Shopping Cart', 'product/cart', NULL, NULL, NULL, NULL, NULL, 2),
(10, 2, 'Confirmation', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(11, 2, 'Shop Category', 'product/Catagory/', NULL, NULL, NULL, NULL, NULL, 2),
(12, 3, 'Blog', 'blog/Blog', NULL, NULL, NULL, NULL, NULL, 3),
(13, 3, 'Blog Details', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(15, 4, 'Tracking', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(16, 4, 'Elements', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(17, 2, 'Comapre Product', '/product/compare', NULL, NULL, NULL, NULL, NULL, 3);

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
(60, '2019_06_26_001125_create_add_ons_table', 4),
(65, '2019_06_27_160300_create_ighlight_program_table', 8),
(70, '2019_06_27_183900_create_sight_programs_table', 11),
(71, '2019_06_27_184308_create_accommodation_programs_table', 12),
(75, '2019_06_27_192826_create_programs_accommodation_table', 16),
(80, '2019_06_29_180351_create_promo_table', 19),
(261, '2014_10_12_000000_create_users_table', 20),
(262, '2014_10_12_100000_create_password_resets_table', 20),
(263, '2019_06_16_163041_create_media_table', 20),
(264, '2019_06_17_115027_create_images_table', 20),
(265, '2019_06_17_173110_create_sliders_table', 20),
(266, '2019_06_17_223352_create_posts_table', 20),
(267, '2019_06_22_145000_create_pages_table', 20),
(268, '2019_06_23_161321_create_accommodations_table', 20),
(269, '2019_06_25_103241_create_programs_table', 20),
(270, '2019_06_26_001125_create_addons_table', 20),
(271, '2019_06_26_104327_create_highlights_table', 20),
(272, '2019_06_26_125934_create_sights_table', 20),
(273, '2019_06_27_160300_create_highlight_programs_table', 20),
(274, '2019_06_27_184555_create_addon_programs_table', 20),
(275, '2019_06_27_191302_create_programs_sights_table', 20),
(276, '2019_06_27_193952_create_accommodations_programs_table', 20),
(277, '2019_06_27_213432_create_sections_table', 20),
(278, '2019_06_29_190035_create_referrals_table', 20),
(279, '2019_06_29_203250_create_promos_table', 20),
(280, '2019_06_30_162332_create_related_table', 20),
(281, '2019_06_30_163111_create_programs_related_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `shipping` varchar(45) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `extras` float DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_price` decimal(10,0) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `orderdata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `product_id`, `product_price`, `quantity`, `order_id`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `orderdata`, `user_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[{\"item_id\":\"75\",\"item_quantity\":\"undefined\",\"item_name\":\"clothes\",\"item_price\":\"2100\",\"item_user_id\":\"12\"},{\"item_id\":\"79?>\",\"item_quantity\":\"undefined\",\"item_name\":\"azsssssssss\",\"item_price\":\"4444444\",\"item_user_id\":\"12\"}]', 0),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-30 12:02:40', NULL, NULL, '[{\"item_id\":\"75\",\"item_quantity\":\"undefined\",\"item_name\":\"clothes\",\"item_price\":\"2100\",\"item_user_id\":\"12\"},{\"item_id\":\"79?>\",\"item_quantity\":\"undefined\",\"item_name\":\"azsssssssss\",\"item_price\":\"4444444\",\"item_user_id\":\"12\"}]', 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_products_has_orders`
--

CREATE TABLE `order_products_has_orders` (
  `order_products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `slug`, `breif`, `image`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Egypt Programs', 'Egypt Tour Packages', 'egypt-tour-packages', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px; background-color: rgb(255, 255, 255);\">Experience all that Egypt has to offer with an exclusive private group holiday. We offer tour packages to suit any taste, mixing classic tours of Ancient Egypt with city tours, diving holidays, and adventures in the desert..</span><br></p>', NULL, 0, NULL, '2019-06-30 14:54:41', '2019-06-30 14:54:41'),
(2, 'Classical Tour Packages', 'Egypt Tours and Travel Packages to Egypt', 'egypt-tours-and-travel-packages-to-egypt', '<p><span style=\"\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16.8px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\">Our Egypt Tours and Holidays Packages are based on the flexibility of its operation and can be adjusted according to your needs, if you need to tail your own holiday please contact our Tailor</span><br></p>', 'images/egypt-classical-tours.jpg', 1, NULL, '2019-06-30 14:56:22', '2019-06-30 14:58:55'),
(3, 'Nile River Cruises', 'Egypt Nile Cruise Holidays .', 'egypt-nile-cruise-holidays', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px;\">Egypt is known from a long of years ago with its magnificent Nile and its fertile banks. we organize for Egypt lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs &amp; the&nbsp;</span><br></p>', NULL, 0, NULL, '2019-06-30 20:42:46', '2019-06-30 20:42:46'),
(4, 'Lake Nasser Cruise', 'Lake Nasser Cruise title', 'lake-nasser-cruise-title', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px; color: rgb(66, 66, 66);\">lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs &amp; the mystery of the Nile</span><br></p>', '/storage/4/abu-simbel.jpg', 3, NULL, '2019-06-30 20:45:24', '2019-06-30 20:45:24'),
(5, 'Egypt Excurions', 'Egypt Excursions  title', 'egypt-excursions-title', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16.8px;\">its fertile banks. we organize for Egypt lovers a trip on the wonderful Nile helping them to relieve all their sadness, feeling the spirit of pharaohs</span><br></p>', NULL, 0, NULL, '2019-06-30 20:47:15', '2019-06-30 20:47:15'),
(6, 'Egypt', 'egypt toures travel', 'egypt-toures-travel', '<p><span style=\"color: rgb(255, 255, 255);\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" color:=\"\" 255);\"=\"\">all their sadness, feeling the spirit of pharaohs &amp; the mystery of the Nile</span><br></p>', '/storage/3/Excursions.jpg', 5, NULL, '2019-06-30 20:53:37', '2019-06-30 20:54:46');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_to_home_page` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `desc`, `add_to_home_page`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'img/blog/main-blog/m-blog-1.jpg', 'Astronomy Binoculars A Great Alternative', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 0, NULL, NULL, NULL),
(2, 'img/blog/main-blog/m-blog-2.jpg', 'Astronomy Binoculars A Great Alternative2', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.2', 0, NULL, NULL, NULL),
(3, 'img/blog/main-blog/m-blog-3.jpg', 'Astronomy Binoculars A Great Alternative3', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.3', 0, NULL, NULL, NULL),
(4, 'img/blog/main-blog/m-blog-4.jpg', 'Astronomy Binoculars A Great Alternative4', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.4', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `price_before` decimal(10,0) DEFAULT NULL,
  `price_after` decimal(10,0) DEFAULT NULL,
  `category_id` int(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `specs` varchar(45) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `jumbtron_id` int(11) NOT NULL,
  `latest_id` int(11) NOT NULL,
  `deals_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `image_group` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tag_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `attrubites` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `quantity` int(100) NOT NULL,
  `small_description` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `latest` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price_before`, `price_after`, `category_id`, `description`, `specs`, `brand_id`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `jumbtron_id`, `latest_id`, `deals_id`, `stock_id`, `image_group`, `tag_id`, `status`, `attrubites`, `quantity`, `small_description`, `image`, `latest`) VALUES
(93, 'product 1', '120', '100', 4, 'des', 'no', NULL, 'this good product', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'a:5:{i:0;s:6:\"p1.jpg\";i:1;s:6:\"p2.jpg\";i:2;s:6:\"p6.jpg\";i:3;s:6:\"p7.jpg\";i:4;s:6:\"p8.jpg\";}', 0, 0, '{\"width\":\"100\",\"size\":\"2k\"}', 200, 'brief', 'img/product/p1.jpg', 2),
(94, 'product 2', '125', '100', 4, 'des', 'no', NULL, 'this good product', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'a:5:{i:0;s:6:\"p1.jpg\";i:1;s:6:\"p2.jpg\";i:2;s:6:\"p6.jpg\";i:3;s:6:\"p7.jpg\";i:4;s:6:\"p8.jpg\";}', 0, 0, '{\"width\":\"100\",\"size\":\"2k\"}', 200, 'brief', 'img/product/p1.jpg', 2),
(95, 'product 3', '10000', '12000', 4, 'des', 'no', NULL, 'this good product', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'a:5:{i:0;s:6:\"p1.jpg\";i:1;s:6:\"p2.jpg\";i:2;s:6:\"p6.jpg\";i:3;s:6:\"p7.jpg\";i:4;s:6:\"p8.jpg\";}', 0, 0, '{\"width\":\"100\",\"size\":\"2k\"}', 200, 'brief', 'img/product/p1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products_has_order_products`
--

CREATE TABLE `products_has_order_products` (
  `products_id` int(11) NOT NULL,
  `order_products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products_has_reviews`
--

CREATE TABLE `products_has_reviews` (
  `products_id` int(11) NOT NULL,
  `reviews_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products_has_wishlist`
--

CREATE TABLE `products_has_wishlist` (
  `products_id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `related`
--

CREATE TABLE `related` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `abouts` text DEFAULT NULL,
  `newsletter_email` varchar(255) DEFAULT NULL,
  `insta_logins` varchar(45) DEFAULT NULL,
  `footer` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `instagram` varchar(45) DEFAULT NULL,
  `youtube` varchar(45) DEFAULT NULL,
  `currency` decimal(10,0) DEFAULT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `favicon` varchar(45) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL,
  `address_2` varchar(250) DEFAULT NULL,
  `time_of_work` varchar(50) DEFAULT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `title`, `abouts`, `newsletter_email`, `insta_logins`, `footer`, `facebook`, `twitter`, `instagram`, `youtube`, `currency`, `email_address`, `address`, `phone`, `favicon`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`, `address_2`, `time_of_work`, `Date`) VALUES
(1, 'img/logo.png', 'Karma Shop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.', 'mahmoud@yahoo', 'mahmoud@yahoo', 'wwww', 'https://facebook.com', 'https://twitter.com', 'mahmoud@yahoo', 'mahmoud@yahoo', '0', 'support@colorlib.com', 'California, United States', '00 (440) 9865 562', 'nnnns', 'good', NULL, NULL, NULL, NULL, 'Santa monica bullevard', 'Mon to Fri 9am to 6 pm', '2019-12-01 12:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `quantity`, `notes`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `category_id`, `title`) VALUES
(6, 4, 'fruits'),
(7, 4, 'ni'),
(8, 4, 'sssssss'),
(9, 2, 'zzzzzz'),
(10, 7, 'ddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `week_product`
--

CREATE TABLE `week_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `week_product`
--

INSERT INTO `week_product` (`id`, `product_id`) VALUES
(5, 78),
(29, 0),
(31, 82),
(45, 77),
(46, 90),
(47, 85),
(48, 80),
(49, 87),
(50, 89),
(51, 90),
(52, 91),
(54, 80);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_address_customers1_idx` (`customers_id`);

--
-- Indexes for table `apis`
--
ALTER TABLE `apis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_has_orders`
--
ALTER TABLE `customers_has_orders`
  ADD PRIMARY KEY (`customers_id`,`orders_id`),
  ADD KEY `fk_customers_has_orders_orders1_idx` (`orders_id`),
  ADD KEY `fk_customers_has_orders_customers1_idx` (`customers_id`);

--
-- Indexes for table `customers_has_wishlist`
--
ALTER TABLE `customers_has_wishlist`
  ADD PRIMARY KEY (`customers_id`,`wishlist_id`),
  ADD KEY `fk_customers_has_wishlist_wishlist1_idx` (`wishlist_id`),
  ADD KEY `fk_customers_has_wishlist_customers1_idx` (`customers_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumbtron`
--
ALTER TABLE `jumbtron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest`
--
ALTER TABLE `latest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_children`
--
ALTER TABLE `menu_children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_children_menu_idx` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products_has_orders`
--
ALTER TABLE `order_products_has_orders`
  ADD PRIMARY KEY (`order_products_id`,`orders_id`),
  ADD KEY `fk_order_products_has_orders_orders1_idx` (`orders_id`),
  ADD KEY `fk_order_products_has_orders_order_products1_idx` (`order_products_id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_tracking_orders1_idx` (`orders_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_jumbtron1_idx` (`jumbtron_id`),
  ADD KEY `fk_products_latest1_idx` (`latest_id`),
  ADD KEY `fk_products_deals1_idx` (`deals_id`),
  ADD KEY `fk_products_stock1_idx` (`stock_id`),
  ADD KEY `fk_products_tags` (`tag_id`),
  ADD KEY `fk_products_brand` (`brand_id`),
  ADD KEY `fk_products_category` (`category_id`);

--
-- Indexes for table `products_has_order_products`
--
ALTER TABLE `products_has_order_products`
  ADD PRIMARY KEY (`products_id`,`order_products_id`),
  ADD KEY `fk_products_has_order_products_order_products1_idx` (`order_products_id`),
  ADD KEY `fk_products_has_order_products_products1_idx` (`products_id`);

--
-- Indexes for table `products_has_reviews`
--
ALTER TABLE `products_has_reviews`
  ADD PRIMARY KEY (`products_id`,`reviews_id`),
  ADD KEY `fk_products_has_reviews_reviews1_idx` (`reviews_id`),
  ADD KEY `fk_products_has_reviews_products1_idx` (`products_id`);

--
-- Indexes for table `products_has_wishlist`
--
ALTER TABLE `products_has_wishlist`
  ADD PRIMARY KEY (`products_id`,`wishlist_id`),
  ADD KEY `fk_products_has_wishlist_wishlist1_idx` (`wishlist_id`),
  ADD KEY `fk_products_has_wishlist_products1_idx` (`products_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related`
--
ALTER TABLE `related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `week_product`
--
ALTER TABLE `week_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apis`
--
ALTER TABLE `apis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jumbtron`
--
ALTER TABLE `jumbtron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest`
--
ALTER TABLE `latest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_children`
--
ALTER TABLE `menu_children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `related`
--
ALTER TABLE `related`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `week_product`
--
ALTER TABLE `week_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customers_has_orders`
--
ALTER TABLE `customers_has_orders`
  ADD CONSTRAINT `fk_customers_has_orders_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customers_has_wishlist`
--
ALTER TABLE `customers_has_wishlist`
  ADD CONSTRAINT `fk_customers_has_wishlist_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_has_wishlist_wishlist1` FOREIGN KEY (`wishlist_id`) REFERENCES `wishlist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_children`
--
ALTER TABLE `menu_children`
  ADD CONSTRAINT `fk_menu_children_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_products_has_orders`
--
ALTER TABLE `order_products_has_orders`
  ADD CONSTRAINT `fk_order_products_has_orders_order_products1` FOREIGN KEY (`order_products_id`) REFERENCES `order_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_products_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD CONSTRAINT `fk_order_tracking_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_has_order_products`
--
ALTER TABLE `products_has_order_products`
  ADD CONSTRAINT `fk_products_has_order_products_order_products1` FOREIGN KEY (`order_products_id`) REFERENCES `order_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_order_products_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_has_reviews`
--
ALTER TABLE `products_has_reviews`
  ADD CONSTRAINT `fk_products_has_reviews_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_reviews_reviews1` FOREIGN KEY (`reviews_id`) REFERENCES `reviews` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_has_wishlist`
--
ALTER TABLE `products_has_wishlist`
  ADD CONSTRAINT `fk_products_has_wishlist_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_wishlist_wishlist1` FOREIGN KEY (`wishlist_id`) REFERENCES `wishlist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
