-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 04:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel_ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'epic design', 'Epic design is a reputed dress related brand. They produce dresses for both men and women.', 1, '2021-05-23 14:42:35', '2021-05-23 14:42:35'),
(3, 'Dress Shop', 'Dress shop is reputed for men\'s and women\'s dress', 1, '2021-05-23 15:11:30', '2021-05-23 15:11:30'),
(4, 'Baby dress', 'Baby dress is a reputed baby dress related brand.', 1, '2021-05-24 12:33:58', '2021-05-24 12:33:58'),
(5, 'My Electronics', 'My Electronics is a reputed electronics brand.', 1, '2021-05-24 12:34:36', '2021-05-24 12:34:36'),
(6, 'My Home Appliance', 'My Home Appliance is a reputed home appliance related brand.', 1, '2021-05-24 12:35:31', '2021-05-24 12:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(13, 'Men\'s wear', 'Men\'s Wear', 1, '2021-05-23 14:25:35', '2021-05-23 14:26:33'),
(14, 'Women\'s Wear', 'Exclusive women\'s wear', 1, '2021-05-23 14:26:21', '2021-05-23 14:26:21'),
(15, 'Babies Dress', 'Exclusive dresses for babies.', 1, '2021-05-24 03:19:14', '2021-05-24 03:19:14'),
(16, 'Electornics', 'Different kinds of electronic products', 1, '2021-05-24 03:20:21', '2021-05-24 03:20:21'),
(17, 'TV and Home Appliance', 'TV and Home Appliance related products.', 1, '2021-05-24 09:39:37', '2021-05-24 09:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(18, 'MD', 'Karim', 'md.karim@mail.com', '$2y$10$4gNSmY4OQX7gLDfw54NaSOEv0mKL8hF1R7JB9ARvQj9ATAykVYKq6', '123456789', '1/1, New Road, New City.', '2021-04-28 08:10:57', '2021-04-28 08:10:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_01_02_134043_create_catagories_table', 2),
(4, '2021_01_02_182602_create_categories_table', 3),
(5, '2021_01_18_140927_create_brands_table', 4),
(6, '2021_01_19_174544_create_products_table', 5),
(7, '2021_02_24_174339_create_customers_table', 6),
(8, '2021_03_03_064643_create_shippings_table', 7),
(9, '2021_04_21_181806_create_orders_table', 8),
(10, '2021_04_21_181916_create_payments_table', 8),
(11, '2021_04_21_181948_create_order_details_table', 8),
(12, '2021_04_22_183056_create_order_details_table', 9),
(13, '2021_05_23_073439_create_sliders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(15, 18, 17, 2000.00, 'Pending', '2021-05-27 09:29:40', '2021-05-27 09:29:40'),
(16, 18, 17, 2000.00, 'Pending', '2021-05-27 09:55:57', '2021-05-27 09:55:57'),
(17, 18, 18, 1400.00, 'Pending', '2021-05-27 10:14:10', '2021-05-27 10:14:10'),
(18, 18, 19, 3000.00, 'Pending', '2021-05-28 00:33:26', '2021-05-28 00:33:26'),
(19, 18, 19, 700.00, 'Pending', '2021-05-28 00:34:02', '2021-05-28 00:34:02'),
(20, 18, 20, 900.00, 'Pending', '2021-05-28 00:50:48', '2021-05-28 00:50:48'),
(21, 18, 21, 900.00, 'Pending', '2021-05-28 10:40:24', '2021-05-28 10:40:24'),
(22, 18, 22, 46000.00, 'Pending', '2021-05-29 01:08:16', '2021-05-29 01:08:16'),
(23, 18, 23, 900.00, 'Pending', '2021-05-29 02:21:42', '2021-05-29 02:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(12, 15, 39, 'men\'s t-shirt', 500.00, 1, '2021-05-27 09:29:40', '2021-05-27 09:29:40'),
(13, 15, 38, 'formal shirt for men', 1500.00, 1, '2021-05-27 09:29:40', '2021-05-27 09:29:40'),
(14, 17, 39, 'men\'s t-shirt', 500.00, 1, '2021-05-27 10:14:10', '2021-05-27 10:14:10'),
(15, 17, 37, 'Baby dress 4', 900.00, 1, '2021-05-27 10:14:10', '2021-05-27 10:14:10'),
(16, 18, 38, 'formal shirt for men', 1500.00, 2, '2021-05-28 00:33:26', '2021-05-28 00:33:26'),
(17, 19, 21, 't-shirt for men', 700.00, 1, '2021-05-28 00:34:02', '2021-05-28 00:34:02'),
(18, 20, 37, 'Baby dress 4', 900.00, 1, '2021-05-28 00:50:49', '2021-05-28 00:50:49'),
(19, 21, 37, 'Baby dress 4', 900.00, 1, '2021-05-28 10:40:24', '2021-05-28 10:40:24'),
(20, 22, 17, 'men\'s t-shirt', 500.00, 2, '2021-05-29 01:08:16', '2021-05-29 01:08:16'),
(21, 22, 30, 'Laptop', 45000.00, 1, '2021-05-29 01:08:16', '2021-05-29 01:08:16'),
(22, 23, 37, 'Baby dress 4', 900.00, 1, '2021-05-29 02:21:42', '2021-05-29 02:21:42');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(14, 15, 'Cash', 'Pending', '2021-05-27 09:29:40', '2021-05-27 09:29:40'),
(15, 16, 'Cash', 'Pending', '2021-05-27 09:55:58', '2021-05-27 09:55:58'),
(16, 17, 'Cash', 'Pending', '2021-05-27 10:14:10', '2021-05-27 10:14:10'),
(17, 18, 'Cash', 'Pending', '2021-05-28 00:33:26', '2021-05-28 00:33:26'),
(18, 19, 'Cash', 'Pending', '2021-05-28 00:34:02', '2021-05-28 00:34:02'),
(19, 20, 'Cash', 'Pending', '2021-05-28 00:50:48', '2021-05-28 00:50:48'),
(20, 21, 'Cash', 'Pending', '2021-05-28 10:40:24', '2021-05-28 10:40:24'),
(21, 22, 'Cash', 'Pending', '2021-05-29 01:08:16', '2021-05-29 01:08:16'),
(22, 23, 'Cash', 'Pending', '2021-05-29 02:21:42', '2021-05-29 02:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(17, 13, 2, 'men\'s t-shirt', 500.00, 4, 'This is an exclusive men\'s t-shirt.', '<p>This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt. This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.This t-shirt comes from Epic Design shop. This is an exclusive men&#39;s t-shirt.</p>', 'produc-images/men\'s t-shirt.jpg', 1, '2021-05-24 13:51:00', '2021-05-24 13:51:00'),
(18, 13, 3, 'formal shirt for men', 1500.00, 5, 'This is a formal shirt from men.', '<p>This shirt comes from Dress Shop. This is an exclusive nice formal shirt. This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.This shirt comes from Dress Shop. This is an exclusive nice formal shirt.</p>', 'produc-images/formal shirt for men.jpg', 1, '2021-05-24 13:49:31', '2021-05-24 13:49:31'),
(19, 13, 2, 't-shirt for men', 700.00, 4, 'This t-shirt is from Epic Design dress shop.', '<p>This is a men&#39;s t-shirt. This t-shirt is from Epic Design dress shop.&nbsp;This is a men&#39;s t-shirt. This t-shirt is from Epic Design dress shop.This is a men&#39;s t-shirt. This t-shirt is from Epic Design dress shop.This is a men&#39;s t-shirt. This t-shirt is from Epic Design dress shop.This is a men&#39;s t-shirt. This t-shirt is from Epic Design dress shop.This is a men&#39;s t-shirt. This t-shirt is from Epic Design dress shop.</p>', 'produc-images/t-shirt for men.jpg', 1, '2021-05-23 15:28:27', '2021-05-23 15:28:27'),
(20, 13, 3, 'White Men\'s formal shirt', 2000.00, 2, 'White color men\'s formal shirt.', '<p>White color men&#39;s shirt. This is white in color. This shirt is from Dress Shop.</p>', 'produc-images/White Men\'s formal shirt.jpg', 1, '2021-05-23 15:14:26', '2021-05-23 15:14:26'),
(22, 15, 4, 'Baby dress', 550.00, 3, 'This is a nice dress for babies.', '<p>This baby dress is from Baby Dress shop. This is a nice dress for babies. This baby dress is from Baby Dress shop. This is a nice dress for babies.This baby dress is from Baby Dress shop. This is a nice dress for babies.This baby dress is from Baby Dress shop. This is a nice dress for babies.This baby dress is from Baby Dress shop. This is a nice dress for babies.This baby dress is from Baby Dress shop. This is a nice dress for babies.This baby dress is from Baby Dress shop. This is a nice dress for babies.This baby dress is from Baby Dress shop. This is a nice dress for babies.</p>', 'produc-images/Baby dress.jpg', 1, '2021-05-24 12:38:26', '2021-05-24 12:38:26'),
(23, 14, 2, 'Women\'s dress', 1500.00, 2, 'This dress is from epic design shop.', '<p>This is dress comes with exclusive design. This dress is from epic design shop. This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.This is dress comes with exclusive design. This dress is from epic design shop.</p>', 'produc-images/Women\'s dress.jpg', 1, '2021-05-24 12:41:16', '2021-05-24 12:41:16'),
(24, 17, 6, 'Blender', 2000.00, 4, 'This blender comes from My Home Appliance shop.', '<p>This blender comes from My Home Appliance shop. This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.This blender comes from My Home Appliance shop.</p>', 'produc-images/Blender.jpg', 1, '2021-05-24 12:47:26', '2021-05-24 12:47:26'),
(25, 17, 6, 'Oven', 30000.00, 5, 'This oven comes from My Home Appliance shop.', '<p>This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.This oven comes from My Home Appliance shop.</p>', 'produc-images/Oven.jpg', 1, '2021-05-24 12:49:18', '2021-05-24 12:49:18'),
(26, 17, 6, 'Washing Machine', 40000.00, 4, 'This washing machine comes from My Home Appliance shop.', '<p>This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.This washing machine comes from My Home Appliance shop.</p>', 'produc-images/Washing Machine.jpg', 1, '2021-05-24 12:51:46', '2021-05-24 12:51:46'),
(27, 14, 3, 'Women\'s sharee', 2000.00, 2, 'This dress is from Dress Shop.', '<p>This dress is from Dress Shop. This is an exclusive designed dress. This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.This dress is from Dress Shop. This is an exclusive designed dress.</p>', 'produc-images/Women\'s sharee.jpg', 1, '2021-05-24 12:54:09', '2021-05-24 12:54:09'),
(28, 14, 3, 'Women\'s exclusive sharee', 4000.00, 2, 'This is an exclusive designed dress.', '<p>This is an exclusive designed dress. This dress comes from Dress Shop. This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.This is an exclusive designed dress. This dress comes from Dress Shop.</p>', 'produc-images/Women\'s exclusive sharee.jpg', 1, '2021-05-24 12:57:51', '2021-05-24 12:57:51'),
(29, 14, 2, 'Women\'s exclusive dress', 5000.00, 3, 'This dress comes from Epic Design.', '<p>This is an exclusive designed dress. This dress comes from Epic Design.&nbsp;This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design. This is an exclusive designed dress. This dress comes from Epic Design.</p>', 'produc-images/Women\'s exclusive dress.jpg', 1, '2021-05-24 13:00:56', '2021-05-24 13:00:56'),
(30, 16, 5, 'Laptop', 45000.00, 4, 'This laptop comes from My Electronics.', '<p>This laptop comes from My Electronics. This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.This laptop comes from My Electronics.</p>', 'produc-images/Laptop.jpg', 1, '2021-05-24 13:02:56', '2021-05-24 13:02:56'),
(31, 17, 6, 'Television', 30000.00, 6, 'This television is from My Home Appliance', '<p>This television comes from MyHome Appliance. This television comes from MyHome Appliance.This television comes from MyHome Appliance.This television comes from MyHome Appliance.This television comes from MyHome Appliance.This television comes from MyHome Appliance.This television comes from MyHome Appliance.This television comes from MyHome Appliance.</p>', 'produc-images/Television.jpg', 1, '2021-05-24 13:04:20', '2021-05-28 13:36:18'),
(32, 16, 5, 'Mobile 1', 20000.00, 5, 'This mobile phone comes from My Electronics.', '<p>This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.This mobile phone comes from My Electronics.</p>', 'produc-images/Mobile 1.jpg', 1, '2021-05-24 13:05:59', '2021-05-24 13:05:59'),
(33, 16, 5, 'Mobile 2', 50000.00, 5, 'This smart phone comes from My Electronics.', '<p>This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.This smart phone comes from My Electronics.</p>', 'produc-images/Mobile 2.jpg', 1, '2021-05-24 13:08:49', '2021-05-24 13:08:49'),
(34, 15, 4, 'Baby dress 1', 450.00, 3, 'This baby dress comes from Baby Dress shop.', '<p>This is a very nice baby dress. This baby dress comes from Baby Dress shop. This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.This is a very nice baby dress. This baby dress comes from Baby Dress shop.</p>', 'produc-images/Baby dress 1.jpg', 1, '2021-05-24 13:40:01', '2021-05-24 13:40:01'),
(35, 15, 4, 'Baby dress 2', 750.00, 4, 'This is a  very nice baby dress.', '<p>This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress. This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.This baby dress comes from Baby Dress shop. This is a&nbsp; very nice baby dress.</p>', 'produc-images/Baby dress 2.jpg', 1, '2021-05-24 13:43:11', '2021-05-24 13:43:11'),
(36, 15, 4, 'Baby dress 3', 850.00, 5, 'This baby dress comes from Baby dress shop.', '<p>This is a very nice baby dress. This baby dress comes from Baby dress shop. This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.This is a very nice baby dress. This baby dress comes from Baby dress shop.</p>', 'produc-images/Baby dress 3.jpg', 1, '2021-05-24 13:44:37', '2021-05-24 13:44:37'),
(37, 15, 4, 'Baby dress 4', 900.00, 3, 'This is a very nice baby dress.', '<p>This baby dress comes from Baby Dress shop. This is a very nice baby dress. This baby dress comes from Baby Dress shop. This is a very nice baby dress.This baby dress comes from Baby Dress shop. This is a very nice baby dress.This baby dress comes from Baby Dress shop. This is a very nice baby dress.This baby dress comes from Baby Dress shop. This is a very nice baby dress.This baby dress comes from Baby Dress shop. This is a very nice baby dress.This baby dress comes from Baby Dress shop. This is a very nice baby dress.This baby dress comes from Baby Dress shop. This is a very nice baby dress.</p>', 'produc-images/Baby dress 4.jpg', 1, '2021-05-24 13:46:15', '2021-05-24 13:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`shipping_id`, `full_name`, `email`, `phone_number`, `shipping_address`, `created_at`, `updated_at`) VALUES
(17, 'MD Karim', 'md.karim@mail.com', '123456789', '1/1, New Road, New City.', '2021-05-27 09:29:34', '2021-05-27 09:29:34'),
(18, 'Jaheda', 'jaheda@mail.com', '9558585', 'ffdasfd dfsaf', '2021-05-27 10:13:36', '2021-05-27 10:13:36'),
(19, 'MD Karim', 'md.karim@mail.com', '123456789', 'adafdfasd', '2021-05-28 00:33:22', '2021-05-28 00:33:22'),
(20, 'MD Karim', 'md.karim@mail.com', '123456789', 'adafdfasd', '2021-05-28 00:50:38', '2021-05-28 00:50:38'),
(21, 'MD Karim', 'md.karim@mail.com', '123456789', 'adafdfasd', '2021-05-28 10:40:18', '2021-05-28 10:40:18'),
(22, 'MD Karim', 'md.karim@mail.com', '123456789', '1/1, New Road, New City.', '2021-05-29 00:59:40', '2021-05-29 00:59:40'),
(23, 'MD Karim', 'md.karim@mail.com', '123456789', '1/1, New Road, New City.', '2021-05-29 02:21:37', '2021-05-29 02:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_image`, `created_at`, `updated_at`) VALUES
(32, 'Men\'s Wear Slider', 'slider-images/Men\'s Wear Slider.jpg', '2021-05-28 05:12:12', '2021-05-28 05:12:12'),
(33, 'Men\'s formal dress 1', 'slider-images/Men\'s formal dress 1.jpg', '2021-05-28 05:13:39', '2021-05-28 05:13:39'),
(34, 'Men\'s formal dress 2', 'slider-images/Men\'s formal dress 2.jpg', '2021-05-28 05:15:39', '2021-05-28 05:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Karim', 'md.karim@mail.com', '$2y$10$84gUZc51Y59rRUtMEn.SAeQ9s0Cn5ZpbGjvYuHGzGUFzMGKKdQaq6', 'zuOUZRWk5Mn5cfM5ZR1BjD1NoKOTpPnokwZ65zlb15GxdrVjOTDzQygVGOYu', '2021-05-22 00:13:00', '2021-05-22 00:13:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
