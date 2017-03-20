-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 12:27 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siliconstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `price`, `checkout_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 38500, 26339, 0, '2017-03-19 20:41:04', '2017-03-19 20:41:04'),
(2, 1, 81890, 1313613234, 0, '2017-03-19 20:47:44', '2017-03-19 20:47:44'),
(3, 1, 89880, 1135771556, 12, '2017-03-19 20:59:04', '2017-03-19 20:59:04'),
(4, 1, 1741434, 1319880983, 102, '2017-03-19 20:59:42', '2017-03-19 20:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Women Clothings', 'women-clothings', '2017-03-17 17:53:24', '2017-03-17 17:53:24'),
(2, 'Men Clothings', 'men-clothings', '2017-03-17 17:09:54', '2017-03-17 18:45:16'),
(9, 'Phone & Tablets', 'phone-tablets', '2017-03-17 18:59:34', '2017-03-17 18:59:34'),
(10, 'Computers', 'computers', '2017-03-18 21:39:52', '2017-03-18 21:39:52'),
(11, 'Electronics', 'electronics', '2017-03-18 21:40:04', '2017-03-18 21:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_name`, `description`, `photo`, `price`, `quantity`, `category_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(6, 'Fernanda Bell Sleeve Dress- Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman.jpg', '6000', 40, '1', 4, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(7, 'Floral Off Shoulder Midi Dress- Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman1.jpg', '7500', 40, '1', 5, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(8, 'Lisa Cape Dress - Wine', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman2.jpg', '8090', 40, '1', 6, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(9, 'Hayley Midi Dress- Navy', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman3.jpg', '4300', 40, '1', 7, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(10, 'Nena Peplum Dress - Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman4.jpg', '6450', 40, '1', 8, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(11, 'Lisa Cape Dress - Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman5.jpg', '2200', 40, '1', 9, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(12, 'Tumi midi dress- black/white', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman6.jpg', '5500', 40, '1', 9, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(13, 'Bose midi dress-Wine', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman7.jpg', '7800', 40, '1', 4, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(14, 'Paloma Maxi Wrap Dress - Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman8.jpg', '7809', 40, '1', 5, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(15, 'Zena Wrap Maxi - Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman9.jpg', '7800', 40, '1', 6, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(16, 'Adriana Cold Shoulder Dress - Multicolour', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman10.jpg', '6200', 40, '1', 7, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(17, 'Olivia pocket Dress- Purple', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman11.jpg', '5400', 40, '1', 8, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(18, 'Ameera Off Shoulder Frill Dress- Teal green', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman12.jpg', '6340', 40, '1', 9, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(19, 'Floral Illusion Dress- Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman13.jpg', '6450', 40, '1', 4, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(20, 'Merisa Wrap Maxi - Multicolour', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman14.jpg', '7200', 40, '1', 5, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(21, 'Nena Peplum Top- Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman15.jpg', '8400', 40, '1', 6, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(22, 'Lisa Cape Dress - White', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman16.jpg', '6300', 40, '1', 7, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(23, 'Hayley Midi Dress - Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman17.jpg', '6200', 40, '1', 8, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(24, 'Bose midi dress-Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman18.jpg', '6100', 40, '1', 8, '2017-03-18 23:32:00', '2017-03-18 23:32:00'),
(25, 'Kendra Bell Sleeve Dress- Royal blue', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman1.jpg', '7490', 40, '1', 4, '2017-03-18 23:32:01', '2017-03-18 23:32:01'),
(26, 'Hannah Cold Shoulder Dress- Black', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman.jpg', '6200', 40, '1', 5, '2017-03-18 23:32:01', '2017-03-18 23:32:01'),
(27, 'Simi V-neck Cold Shoulder Dress- Navy Blue', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman2.jpg', '5234', 40, '1', 6, '2017-03-18 23:32:01', '2017-03-18 23:32:01'),
(28, 'Tessy Bardot Cold Shoulder Top- Multi', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'woman4.jpg', '6450', 40, '1', 7, '2017-03-18 23:32:01', '2017-03-18 23:32:01'),
(29, 'Zack Dotted Casual Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man.jpg', '6290', 40, '2', 10, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(30, 'Dotted Pattern Long Sleeve Shir', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man1.jpg', '7300', 40, '2', 11, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(31, 'Contrast Spread Collar Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man2.jpg', '8200', 40, '2', 12, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(32, 'Terry V Front Pattern Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man3.jpg', '4300', 40, '2', 14, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(33, 'Ashish Patterned Spread Collar Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man4.jpg', '6030', 40, '2', 10, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(34, 'Jay Spread Collar Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man5.jpg', '2300', 40, '2', 11, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(35, 'Mason Patterned Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man6.jpg', '5200', 40, '2', 12, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(36, 'Bob Plain Formal Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man7.jpg', '7880', 40, '2', 14, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(37, 'Damien Plain Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man8.jpg', '7290', 40, '2', 10, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(38, 'Men&#039;s Checkered Shirts', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man.jpg', '7480', 40, '2', 11, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(39, 'Men&#039;s Zayden Pin-Down Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man1.jpg', '6302', 40, '2', 12, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(40, 'Leo  Men''s Zayden Pin-Down Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man1.jpg', '5500', 40, '2', 14, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(41, 'Men&#039;s Delan Patterned Body Fit Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man2.jpg', '6300', 40, '2', 10, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(42, 'Nichiha Pin-Down Contrast Long Sleeve Shirt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man3.jpg', '6000', 40, '2', 11, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(43, 'Jack Lace Patterned Long Sleeve Shirt - White', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man4.jpg', '7323', 40, '2', 12, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(44, 'Bachan Dot Pattern Long Sleeve Shrt', 'A sample description, hope you know lorem ipsum, have you heard about it?', 'man5.jpg', '8300', 40, '2', 14, '2017-03-19 00:03:44', '2017-03-19 00:03:44'),
(61, 'Innjoo  Fire2 Plus', 'X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'phone1.jpg', '26300', 40, '9', 16, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(62, 'Innjoo  Fire2 Plus', 'Innjoo  X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'phone1.jpg', '55300', 40, '9', 17, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(63, 'Alcatel  Pop Star', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone6.jpg', '55300', 40, '9', 18, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(64, 'Gionee  M6- Champagne (64GB)', 'BAM 4&quot; 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'phone3.jpg', '26500', 40, '9', 19, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(65, 'Gionee  P8w - Black', 'iMose  BAM 4" 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'phone4.jpg', '26430', 40, '9', 16, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(66, 'Tecno  W2 - Grey', 'Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone5.png', '17320', 40, '9', 17, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(67, 'Innjoo  Halo X - Grey', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone6.jpg', '35500', 40, '9', 18, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(68, 'Gionee  M5- Gold', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'phone7.png', '36500', 40, '9', 19, '2017-03-19 00:20:28', '2017-03-19 00:20:28'),
(69, 'Tecno W3', 'One Touch Popstar - Gold + FREE 8GB Memory Card', 'phone8.png', '17300', 40, '9', 16, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(70, 'Tecno  Tecno W3', 'Alcatel  One Touch Popstar - Gold + FREE 8GB Memory Card', 'phone1.jpg', '21302', 40, '9', 17, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(71, 'Phantom 6 - Gold', 'A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'phone6.jpg', '40000', 40, '9', 18, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(72, 'Tecno  Y2 - Blue', 'UHANS  A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'phone3.jpg', '15320', 40, '9', 19, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(73, '1409 - Dark Blue', 'SHIPPED FROM OVERSEAS', 'phone4.jpg', '28090', 40, '9', 16, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(74, 'L8 Lite - Black', 'Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'phone5.png', '48004', 40, '9', 17, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(75, 'Tecno  L8 Lite - Black', 'UHANS  Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'phone6.jpg', '42400', 40, '9', 18, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(76, 'Alcatel  One Touch Popstar', 'A8 PLUS - 3G Tablet/Smartphone (6.0 inch Android 5.1 MTK6580 Quad Core 1GB/8GB) EU Plug - Rose Gold', 'phone7.png', '65000', 40, '9', 19, '2017-03-19 00:20:29', '2017-03-19 00:20:29'),
(77, 'Pavilion x360 11-k103na N7H44EA#ABU Intel Celeron', 'X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'laptop.jpg', '26800', 40, '10', 26, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(78, 'Hp-14 Intel Celeron Dualcore-1.6GHz (4GB,500GB HDD) 14 Inch Windows 10 Laptop', 'Innjoo  X3 - Black (4 Inch, 3G, 4GB Rom, 512 MB Ram)', 'laptop1.jpg', '55680', 40, '10', 27, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(79, 'MacBook Pro - 15.4&quot; Display - Intel Core i7 - 16GB Memory - 256GB Flash Storage', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop2.jpg', '5540', 40, '10', 28, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(80, '250 G4 Intel Celeron Dual Core-1.6GHz', 'BAM 4&quot; 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'laptop3.jpg', '2690', 40, '10', 32, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(81, 'HP 250 G4 Intel Celeron 1.6GHz', 'iMose  BAM 4" 3G Dual SIM Smart Phone - Black + Android Marshmallow + Free Leather Flip Case Cover', 'laptop4.jpg', '2688', 40, '10', 26, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(82, 'Pavilion X2 Intel Atom', 'Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop5.jpg', '1729', 40, '10', 27, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(83, 'G4 AMD Dual Core-1.4GHz ', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop.jpg', '3556', 40, '10', 28, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(84, 'X453SA Intel celeron dualcore-2.16Ghz ', 'Fero  Royale A1 - Space Grey + Free Daviva Fabric + 1 Headset + F-Secure Anti-Virus + #500 Airtime', 'laptop1.jpg', '3640', 40, '10', 32, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(85, 'Aspire ES 14 Intel Celeron Quad Core', 'One Touch Popstar - Gold + FREE 8GB Memory Card', 'laptop2.jpg', '1729', 40, '10', 26, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(86, 'Intel Celeron Dual Core-1.7ghz', 'Alcatel  One Touch Popstar - Gold + FREE 8GB Memory Card', 'laptop3.jpg', '2165', 40, '10', 27, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(87, 'Intel celeron quad core 1.6Ghz', 'A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'laptop4.jpg', '4020', 40, '10', 28, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(88, 'Stream 11 Intel celeron 2gb Ram', 'UHANS  A101 - 4G Smartphone 5.0 inch Android 6.0 MT6737 1.3GHz Quad Core 1GB+8GB EU Plug - White', 'laptop5.jpg', '1530', 40, '10', 32, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(89, 'Pavilion x2 10- k000nia Detachable Touch PC ', 'SHIPPED FROM OVERSEAS', 'laptop3.jpg', '2880', 40, '10', 26, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(90, 'Ideapad 300-14IBR Intel celeron-1.6ghz ', 'Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'laptop4.jpg', '4880', 40, '10', 27, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(91, 'Lenovo  Ideapad 300-14IBR Intel celeron-1.6ghz', 'UHANS  Upscale UHANS H5000 4G 1.25GHz Quad-core 3GB + 32GB Dual Camera Smartphone', 'laptop2.jpg', '4290', 40, '10', 28, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(92, 'Lenovo  Ideapad 300-14IBR Intel celeron-1.6ghz', 'A8 PLUS - 3G Tablet/Smartphone (6.0 inch Android 5.1 MTK6580 Quad Core 1GB/8GB) EU Plug - Rose Gold', 'laptop1.jpg', '6580', 40, '10', 32, '2017-03-19 00:40:59', '2017-03-19 00:40:59'),
(93, '40-Inch SFLED40EL Full HD LED TV', '40-Inch SFLED40EL Full HD LED TV', 'tv.jpg', '2650', 40, '11', 22, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(94, 'Scanfrost  40-Inch SFLED40EL Full HD LED TV', 'Scanfrost  40-Inch SFLED40EL Full HD LED TV', 'tv2.jpg', '5560', 40, '11', 23, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(95, '40&quot; Digital FHDTV', '40&quot; Digital FHDTV', 'tv.jpg', '5540', 40, '11', 24, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(96, 'Startimes  40" Digital FHDTV', 'Startimes  40" Digital FHDTV', 'tv1.jpg', '2650', 40, '11', 25, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(97, 'Hisense  40-Inch Full HD LED Television With USB Video HX40M2160F', 'Hisense  40-Inch Full HD LED Television With USB Video HX40M2160F', 'tv3.jpg', '2600', 40, '11', 22, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(98, '40&quot; LC40LE265M AQUOS LED TV - Black', '40&quot; LC40LE265M AQUOS LED TV - Black', 'tv4.jpg', '1700', 40, '11', 23, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(99, 'Sharp  40" LC40LE265M AQUOS LED TV - Black', 'Sharp  40" LC40LE265M AQUOS LED TV - Black', 'tv5.jpg', '3525', 40, '11', 24, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(100, '39 inch LN5100 Full HD LED TV', '39 inch LN5100 Full HD LED TV', 'tv6.jpg', '3600', 40, '11', 25, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(101, '40&quot; Digital HD LED TV UA40J5000AKXSJ - Black', '40&quot; Digital HD LED TV UA40J5000AKXSJ - Black', 'tv7.jpg', '1750', 40, '11', 22, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(102, 'Samsung  40" Digital HD LED TV UA40J5000AKXSJ - Black', 'Samsung  40" Digital HD LED TV UA40J5000AKXSJ - Black', 'tv8.jpg', '2140', 40, '11', 23, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(103, '40 inch 40BLE4420BF/ 4421BF Full HD LED TV', '40 inch 40BLE4420BF/ 4421BF Full HD LED TV', 'tv.jpg', '4000', 40, '11', 24, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(104, 'Beko   40 inch 40BLE4420BF/ 4421BF Full HD LED TV', 'Beko   40 inch 40BLE4420BF/ 4421BF Full HD LED TV', 'tv1.jpg', '1530', 40, '11', 25, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(105, '49-Inch Full HD LED Television With USB Video HISTV49M2160F', '49-Inch Full HD LED Television With USB Video HISTV49M2160F', 'tv2.jpg', '2800', 40, '11', 22, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(106, 'Hisense  49-Inch Full HD LED Television With USB Video HISTV49M2160F', 'Hisense  49-Inch Full HD LED Television With USB Video HISTV49M2160F', 'tv3.jpg', '4840', 40, '11', 23, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(107, 'LG  43-Inch Full HD Digital LED TV - 43LH500T+ Free Wall Bracket', 'LG  43-Inch Full HD Digital LED TV - 43LH500T+ Free Wall Bracket', 'tv5.jpg', '4280', 40, '11', 24, '2017-03-19 00:51:53', '2017-03-19 00:51:53'),
(108, 'Beko   40-inch 40BLE6420BL Full HD LED TV', 'Beko   40-inch 40BLE6420BL Full HD LED TV', 'tv4.jpg', '6500', 40, '11', 25, '2017-03-19 00:51:53', '2017-03-19 00:51:53');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_02_06_153626_create_roles_table', 1),
(4, '2017_03_17_104645_create_items_table', 2),
(5, '2017_03_17_174357_create_categories_table', 3),
(6, '2017_03_17_181219_create_tags_table', 4),
(7, '2017_03_17_200312_create_accounts_table', 4),
(8, '2017_03_19_191837_create_coupons_table', 5),
(9, '2017_02_06_194238_create_users_table', 6);

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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'Short Sleeves', 'short-sleeves', 1, '2017-03-18 07:20:15', '2017-03-18 21:50:42'),
(5, 'Women Tops', 'women-tops', 1, '2017-03-18 21:52:30', '2017-03-18 21:52:30'),
(6, 'Women Skirts', 'women-skirts', 1, '2017-03-18 21:52:48', '2017-03-18 21:52:48'),
(7, 'Women Dresses', 'women-dresses', 1, '2017-03-18 21:53:09', '2017-03-18 21:53:09'),
(8, 'Women''s Bags', 'womens-bags', 1, '2017-03-18 21:53:35', '2017-03-18 21:53:35'),
(9, 'Jewellery', 'jewellery', 1, '2017-03-18 21:53:56', '2017-03-18 21:53:56'),
(10, 'Men''s T-Shirts', 'mens-t-shirts', 2, '2017-03-18 21:54:14', '2017-03-18 21:54:14'),
(11, 'Trousers & Chinos', 'trousers-chinos', 2, '2017-03-18 21:54:29', '2017-03-18 21:54:29'),
(12, 'Polo Shirts', 'polo-shirts', 2, '2017-03-18 21:54:54', '2017-03-18 21:54:54'),
(14, 'Slippers & Sandals', 'slippers-sandals', 2, '2017-03-18 21:55:40', '2017-03-18 21:55:40'),
(16, 'Android Phones', 'android-phones', 9, '2017-03-18 21:56:25', '2017-03-18 21:56:25'),
(17, 'iPhones', 'iphones', 9, '2017-03-18 21:56:52', '2017-03-18 21:56:52'),
(18, 'Windows Phones', 'windows-phones', 9, '2017-03-18 21:57:09', '2017-03-18 21:57:09'),
(19, 'Power Banks', 'power-banks', 9, '2017-03-18 21:57:30', '2017-03-18 21:57:30'),
(22, 'Below 32 Inches Televisions', 'below-32-inches-televisions', 11, '2017-03-18 21:59:50', '2017-03-18 21:59:50'),
(23, '32 Inches Televisions', '32-inches-televisions', 11, '2017-03-18 22:00:12', '2017-03-18 22:00:12'),
(24, 'Home Theatres and Audio', 'home-theatres-and-audio', 11, '2017-03-18 22:00:47', '2017-03-18 22:00:47'),
(25, 'Electronic Accessories', 'electronic-accessories', 11, '2017-03-18 22:01:33', '2017-03-18 22:01:33'),
(26, 'Mini Laptops', 'mini', 10, '2017-03-18 22:01:53', '2017-03-18 22:01:53'),
(27, 'Monitors', 'monitors', 10, '2017-03-18 22:02:31', '2017-03-18 22:02:31'),
(28, 'Desktop Computers', 'desktop-computers', 10, '2017-03-18 22:02:48', '2017-03-18 22:02:48'),
(32, 'Professional Laptops', 'professional-laptops', 10, '2017-03-18 22:04:06', '2017-03-18 22:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `address`, `city`, `state`, `role_id`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ojo Kayode', 'admin@admin.com', '$2y$10$XAlp6M1m6z0amQim5a6bmu1U.6YbxOp9DltgEU3UHOHPB22GBGsKq', 'admin', '130 gbedemuke street', 'osogbo', 'osun state', 0, '08166575861', 'ZN6w6ssdVV2T2tCfLNdQQ3sCr0IPnECa3nE9L84sjQfpzo31mVbcOpnbXMmd', '2017-03-19 19:36:11', '2017-03-19 19:36:11'),
(2, 'Ojo Kayode', 'mixpeal@gmail.com', '', '', '', '', '', 0, '', 'ULzrgLEGyUvI9DPlg7tyMfO1MKrImme9dX8DfOOK4rtkB8XWr0YXr7RDaEj4', '2017-03-19 22:00:18', '2017-03-19 22:00:18'),
(3, 'Ojo Kayode', 'djmixpeal@gmail.com', '', '', '', '', '', 0, '', 'ahbvkzWV2vAjVI7z5dViX2AKl0AO8uqnCVIg8onXuhrZYphAPYd9Hccr26yO', '2017-03-19 22:02:12', '2017-03-19 22:02:12'),
(4, 'Ojo Emmanuel', 'mixpealboy@gmail.com', '', '', '', '', '', 0, '', '87wFlqjPp8ELruVJCEQWtlG3TPgrmxCPXeLcHkA3HOffmx4Ed1c05nuSopWz', '2017-03-19 22:10:00', '2017-03-19 22:10:00'),
(5, 'Ojo Kayode', 'mixpeal@hotmail.com', '', '', '', '', '', 0, '', NULL, '2017-03-19 22:15:26', '2017-03-19 22:15:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
