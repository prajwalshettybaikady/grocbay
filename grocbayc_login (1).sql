-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2021 at 01:46 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocbayc_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `clickLink` longtext COLLATE utf8_unicode_ci,
  `isActive` tinyint(1) NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerFor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '999'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `type_id`, `title`, `description`, `startDate`, `endDate`, `clickLink`, `isActive`, `bannerImage`, `bannerFor`, `data`, `branch`) VALUES
(1, 1, 'Main Slider 1', NULL, NULL, NULL, 'https://www.grocbay.com/', 1, 'banner6006cdc68bd20.jpeg', '1', '20, 22', '999'),
(2, 1, 'Main Slider 2', NULL, NULL, NULL, '', 1, 'banner6006ce68b9362.jpeg', '2', '20', '999'),
(3, 1, 'Main Slider 2', NULL, NULL, NULL, '', 1, 'banner6006ceb079b00.jpeg', '5', '1, 2', '999'),
(4, 2, 'AD1 - Banner1', NULL, NULL, NULL, NULL, 1, 'banner6008315147626.jpeg', '1', '20, 22', '999'),
(5, 2, 'AD1 - Banner2', NULL, NULL, NULL, NULL, 1, 'banner60083178afda3.jpeg', '2', '62', '999'),
(6, 2, 'AD1 - Banner3', NULL, NULL, NULL, NULL, 1, 'banner600831e7158a4.png', '2', '64', '999'),
(7, 5, 'Ad2 Banner1', NULL, NULL, NULL, NULL, 1, 'banner60096dd53f79d.png', '1', '22, 24, 34', '999'),
(8, 9, 'Ad3 - Banner1', NULL, NULL, NULL, NULL, 1, 'banner60096e704a5a1.png', '1', '155', '999'),
(9, 10, 'Ad4 - Banner1', NULL, NULL, NULL, NULL, 1, 'banner600bcb9216d4f.jpeg', '1', '20, 22, 28, 30', '999'),
(10, 10, 'Ad4 - Banner2', NULL, NULL, NULL, '', 1, 'banner600bcba95aa2d.jpeg', '2', '24', '999'),
(11, 11, 'Ad5 Banner1', NULL, NULL, NULL, NULL, 1, 'banner600aad62dbbd6.png', '0', '2', '999'),
(12, 11, 'Ad5 Banner2', NULL, NULL, NULL, NULL, 1, 'banner600aaddb130f9.png', '1', '20', '999');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_type`
--

CREATE TABLE `advertisement_type` (
  `id` int(11) NOT NULL,
  `typeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisement_type`
--

INSERT INTO `advertisement_type` (`id`, `typeName`) VALUES
(2, 'Ad 1 | Below Featured Categories 1'),
(5, 'Ad 2 | Below Featured Items 1\r\n'),
(9, 'Ad 3 | Below Featured Categories 2'),
(10, 'Ad 4 [Vertical] | Below Featured Categories 3'),
(11, 'Ad 5 | Below Vertical Slider'),
(1, 'Main Slider'),
(8, 'website Banner - BOTTOM'),
(7, 'website Banner - TOP'),
(3, 'Website Slider');

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `file` varchar(200) DEFAULT '',
  `status` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `id` int(11) NOT NULL,
  `customer_d` int(11) DEFAULT NULL,
  `addressType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lattitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logingitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extraInfo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isdefault` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`id`, `customer_d`, `addressType`, `fullName`, `address`, `lattitude`, `logingitude`, `extraInfo`, `isdefault`) VALUES
(2, 1, 'home', 'Deekshith ', '112, hay ennassim, Casablanca , Ambalpadi, Udupi - ', '13.3374486', '74.7307807', NULL, 1),
(6, 5, 'home', 'ananthakrishna ', '12, udupi, Ambalpadi - ', '13.3374486', '74.7307807', NULL, 0),
(24, 6, 'home', 'Sumanth Shetty ', '115, testimg, hello 124, cros, hello 1234, Ambalpadi - ', '13.3374486', '74.7307807', NULL, 0),
(29, 1, 'home', 'Deekshith S ', 'gxddd, hfddd, Ambalpadi - ', '13.337028600000002', '74.7309217', NULL, 0),
(31, 9, 'home', 'Admin test', '1234 mnt street', '', '', '', 0),
(32, 7, 'home', 'shwetha acharya  ', 'As, df, Brahmagiri - ', '13.338408099999999', '74.7478031', NULL, 0),
(33, 7, 'home', 'shwetha acharya  ', 'qw, xxx, Brahmagiri - ', '13.3368614', '74.7395159', NULL, 0),
(34, 1, 'home', 'Kavana Shettigar  ', '1-3, Udupi, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(35, 1, 'home', 'Kavana Shettigar  ', '1-3, udupi, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(36, 1, 'home', 'Kavana Shettigar  ', '1, dff, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(37, 1, 'home', 'Kavana Shettigar  ', 'f, fgh, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(38, 1, 'home', 'Kavana Shettigar  ', 'f, xb, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(39, 1, 'home', 'Kavana Shettigar  ', 'y, cb, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(40, 1, 'home', 'Kavana Shettigar  ', 'f, y, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(41, 1, 'home', 'Kavana Shettigar  ', 'sd, ghk, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(42, 1, 'home', 'Kavana Shettigar  ', 'fg, fgjj, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(43, 1, 'home', 'Kavana Shettigar  ', 'r, rr, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(44, 1, 'home', 'Kavana Shettigar  ', '2, dgh, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(46, 1, 'home', 'Kavana Shettigar  ', '22, cvh, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(47, 1, 'home', 'Kavana Shettigar  ', 'vj, gh, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(48, 1, 'home', 'Kavana Shettigar  ', 'fg, kj, Ambalpadi, Udupi - ', '13.3368811', '74.7365977', NULL, 0),
(49, 1, 'home', 'Kavana Shettigar  ', 'hdhh, rurur, Brahmagiri - ', '13.3331819', '74.7393828', NULL, 0),
(50, 1, 'home', 'Kavana Shettigar  ', 'gvvv, fgg, Ambalpadi, Udupi - ', '13.336887', '74.7366337', NULL, 0),
(51, 2, 'home', 'shwetha acharya ', 'ggg, ghh, Tenkanidyoor - ', '13.365985994844015', '74.71351180225611', NULL, 0),
(52, 2, 'home', 'shwetha acharya ', 'hffjfh, fjfhf, Tenkanidyoor - ', '13.365980700000001', '74.7135117', NULL, 0),
(53, 3, 'home', 'de  ', 'hhhh, hhhj, Tenkanidyoor - ', '13.365980700000001', '74.7135117', NULL, 0),
(54, 1, 'Work', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', '13.333677999999999', '74.7317', NULL, 0),
(55, 7, 'Work', 'shwetha acharya ', '12, udupi, Brahmagiri - ', '13.34071372352855', '74.7421594709158', NULL, 0),
(56, 1, 'home', 'Kavana Shettigar  ', 'dd, gvv, Brahmagiri - ', '13.338408099999999', '74.7478031', NULL, 0),
(57, 1, 'home', 'Kavana Shettigar  ', 'agag, avavs, Brahmagiri - ', '13.336122336438583', '74.74732037633657', NULL, 0),
(58, 1, 'home', 'Kavana Shettigar  ', '12, ananth, Ambalpadi - ', '13.3374486', '74.7307807', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorySlug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iconImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryDescription` longtext COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '999',
  `ref` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `categoryName`, `categorySlug`, `iconImage`, `bannerImage`, `categoryDescription`, `parent_id`, `branch`, `ref`) VALUES
(1, 'Amul', 'amul', '6013f130d0278amul.png', NULL, NULL, 1, '999', NULL),
(2, 'Coca-Cola', 'coca-cola', '6017aaced62cccoca-cola.png', NULL, NULL, 1, '999', NULL),
(3, 'Nivea', 'nivea', '6017ab0076aa0nivea.jpeg', NULL, NULL, 1, '999', NULL),
(4, 'Patanjali', 'patanjali', '6017ab22bd646patanjali.png', NULL, NULL, 1, '999', NULL),
(5, 'Tata', 'tata', '6017aca5914eftata.png', NULL, NULL, 1, '999', NULL),
(6, 'Grocbay', 'grocbay', NULL, NULL, NULL, 0, '999', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `csv_logs`
--

CREATE TABLE `csv_logs` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT '999'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `gst` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobileNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isOnline` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `apiKey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registrationKey` longtext COLLATE utf8_unicode_ci,
  `membership` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `latitude` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `longitude` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `area` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `channel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '999'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `gst`, `email`, `mobileNo`, `username`, `isActive`, `isOnline`, `roles`, `apiKey`, `otp`, `path`, `registrationKey`, `membership`, `latitude`, `longitude`, `area`, `ip`, `created_date`, `device`, `channel`, `branch`) VALUES
(1, NULL, 'testing@gmail.com', '9876543210', 'Kavana Shettigar ', 1, 1, '[\"ROLE_CUSTOMER\"]', '1', '5555', '', 'eftYWBW4YhY:APA91bEFdB8Y8gqdYQoFmcgHDFK7XjYyOflS-R5s7WQcTuIXDwmIIyrCZCLLZhi4tV68-YefyGzt8F4sch49n7kk-9yauHBGBJt-3eZuoApYDSK-CN-1K6oUQlUg0qdgqa8SmBCUjhwv', '0', '13.336889', '74.7366204', 'Ambalpadi, Udupi', '43.247.159.148', '43.247.159.148', 'Android', 'Android', '999'),
(2, NULL, 'sdf@gmail.com', '9483989553', 'jhg ', 1, 1, '[\"ROLE_CUSTOMER\"]', '2', '7758', '', 'eeT3Eouascw:APA91bGJspSOrCMDifYM9q_2MM_scNdzdwBmhJrMdOzNaI5dCrqy7ARv25OmDLwo6vMO77eOXjJe-Q30oENB52ppRfgBz4ki8w10lwicJxzB0npFc1vgOVgcrNH_YyR3-2qBZ3zKF4dm', '0', '19.285637264099034', '72.8691092133522', 'Mira Road, Mira Bhayandar', '43.247.159.148', '21-01-2021', 'Android', 'Android', '999'),
(3, NULL, 'an@gmail.com', '123456789', 'ananth ', 1, 1, '[\"ROLE_CUSTOMER\"]', '3', NULL, '', 'eJgCyd7Kb5E:APA91bEGpYVNSHcP1ibbmsSSuLpl4G_MnDZMOfX0w5t7bPkpbscFuHjmQk3vuf-si0lRnDlykhZBwps9gnJx04b-m1ZCrS_MzGTasKMaaqAwBMY24z1yRPzSNs9KYu9wuDX1CvKQM0CQ', '0', NULL, NULL, NULL, '157.45.203.149', '25-01-2021', 'Android', 'Android', '999'),
(4, NULL, 'ananth@yahoo.com', '876546', 'anantha ', 1, 1, '[\"ROLE_CUSTOMER\"]', '4', NULL, '', 'eJgCyd7Kb5E:APA91bEGpYVNSHcP1ibbmsSSuLpl4G_MnDZMOfX0w5t7bPkpbscFuHjmQk3vuf-si0lRnDlykhZBwps9gnJx04b-m1ZCrS_MzGTasKMaaqAwBMY24z1yRPzSNs9KYu9wuDX1CvKQM0CQ', '0', NULL, NULL, NULL, '157.45.203.149', '25-01-2021', 'Android', 'Android', '999'),
(5, NULL, 'anan@gmail.com', '8618320591', 'ananthakrishna ', 1, 1, '[\"ROLE_CUSTOMER\"]', '5', '3607', '', 'fQ0SAmlHRwiFFRbWHNN7mS:APA91bH-bjyIj5KIrXo_EilMmYjv1JpgzIZ3MHhQKedZVbqSk0WudH7tDFziACTKvsYmXLS6sXjEI7kC45rFf0aYNp7KX9vH95jpcZknd_NMfl_AbRSSaLplT_gFBoFPiNp7-rPISOoH', '0', '13.3368907', '74.736617', 'Ambalpadi, Udupi', '43.247.159.148', '25-01-2021', 'Android', 'Android', '999'),
(6, NULL, 'sumanthshetty89@gmail.com', '8970042852', 'Sumanth Shetty ', 1, 1, '[\"ROLE_CUSTOMER\"]', '6', NULL, '', 'fyJxTyOPNGA:APA91bFER_1HuAWBt-UHMourOTlv_rC0i3B3LyFzMXw0balkRJWiEgOU93w95IZgIFw1ZRc82p88HLsqBT5SkEnjzRXP-Ag1ersGc2wWH3ic-g-i8Z3paE7y_bAJXeFE6huCsOXknS4o', '0', '13.3368912', '74.7364595', 'Ambalpadi, Udupi', '43.247.159.148', '29-01-2021', 'Android', 'Android', '999'),
(7, NULL, 'shwethaacharya153@gmail.com', '8296367409', 'shwetha acharya ', 1, 1, '[\"ROLE_CUSTOMER\"]', '7', '3201', '', 'fQ0SAmlHRwiFFRbWHNN7mS:APA91bH-bjyIj5KIrXo_EilMmYjv1JpgzIZ3MHhQKedZVbqSk0WudH7tDFziACTKvsYmXLS6sXjEI7kC45rFf0aYNp7KX9vH95jpcZknd_NMfl_AbRSSaLplT_gFBoFPiNp7-rPISOoH', '0', '13.3368743', '74.736636', 'Brahmagiri, Udupi', '43.247.159.148', '30-01-2021', 'Android', 'Android', '999'),
(8, NULL, 'keshavak644@gmail.com', '9008690274', 'keshava kulal ', 1, 1, '[\"ROLE_CUSTOMER\"]', '8', NULL, '', 'dJJU6dCCm48:APA91bHeQn6gykpRW8MrjfglJ22fT0bYA9dRDTySTCZ9e3_LNc-D2N63uWBHYNZvji_le7GqtRPsvh3za1pW1y4OIoTYNVASHpTTL_VOIxrfgJWF0dTNv2bJTiDNUKFiznXbwWqmf8HV', '0', NULL, NULL, NULL, '43.247.159.148', '01-02-2021', 'Android', 'Android', '999'),
(9, '', 'admin@grocbay.com', '987654321', 'Admin test', 1, 1, '[\"ROLE_CUSTOMER\"]', 'customer60180a945b5688.12012301', NULL, '/', '137300', '0', NULL, NULL, NULL, '197.247.5.211', '01-02-2021 19:35 PM', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 'Admin', '999'),
(10, NULL, 'dee@gmail.com', '8660196434', 'Deekshith ', 1, 1, '[\"ROLE_CUSTOMER\"]', '10', NULL, '', 'ejSRaS9Twgo:APA91bHdvic_UzcMugVcM_nAUezIKmNpx1QhvHwXKxFoGNp5YxAF5xa8lAy3-lKRMQvHlgGjXTHAoPTeujMcfUjgBoEIvdrn8F4No3ZUbOO5i4BVA8oduPhVR9MXArwuH0-BjJl09eSG', '0', '13.3368837', '74.7366294', 'Ambalpadi, Udupi', '43.247.159.148', '02-02-2021', 'Android', 'Android', '999');

-- --------------------------------------------------------

--
-- Table structure for table `customer_logs`
--

CREATE TABLE `customer_logs` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `device` varchar(200) DEFAULT NULL,
  `channel` varchar(100) DEFAULT NULL,
  `created_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_d` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL,
  `actualAmount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalTax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryCharge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promocode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `totalDiscount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orderAmount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci,
  `landmark` longtext COLLATE utf8_unicode_ci,
  `logitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentStatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proccessTime` datetime DEFAULT NULL,
  `cancelTime` datetime DEFAULT NULL,
  `readyTime` datetime DEFAULT NULL,
  `dispatchTime` datetime DEFAULT NULL,
  `onwayTime` datetime DEFAULT NULL,
  `deliveryTime` datetime DEFAULT NULL,
  `completeTime` datetime DEFAULT NULL,
  `sortTime` datetime DEFAULT NULL,
  `restoAppFee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `restPay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fixtime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fixDate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deliveryBoy` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `tray` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `trayStatus` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderFrom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `channel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `returnStatus` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transactionId` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discountTotal` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '999',
  `loyalty` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `wallet` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `picker` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `total_loyalty` varchar(200) COLLATE utf8_unicode_ci DEFAULT '0',
  `total_quantity` varchar(200) COLLATE utf8_unicode_ci DEFAULT '0',
  `total_price` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `edited` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `version` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `membership` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `cost` double DEFAULT '0',
  `slotReason` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `rescheduleTime` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `customer_d`, `orderDate`, `actualAmount`, `totalTax`, `deliveryCharge`, `promocode`, `totalDiscount`, `orderAmount`, `customerName`, `address`, `landmark`, `logitude`, `latitude`, `orderType`, `paymentType`, `paymentStatus`, `orderStatus`, `proccessTime`, `cancelTime`, `readyTime`, `dispatchTime`, `onwayTime`, `deliveryTime`, `completeTime`, `sortTime`, `restoAppFee`, `restPay`, `fixtime`, `fixDate`, `deliveryBoy`, `tray`, `trayStatus`, `area`, `orderFrom`, `channel`, `note`, `returnStatus`, `transactionId`, `discountTotal`, `branch`, `loyalty`, `wallet`, `picker`, `total_loyalty`, `total_quantity`, `total_price`, `edited`, `version`, `membership`, `cost`, `slotReason`, `rescheduleTime`) VALUES
('10001', 1, '2021-01-22 12:59:37', '224', '26.88', '0', NULL, '0', '224', 'Deekshith ', 'rygd, bhg, bhb, bn, ded, Udupi - ', NULL, '74.74679533392191', '13.344328963519269', 'Delivery', 'paytm', 'failed', 'failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 12:59:37', '22.4', '201.6', '12:30 PM - 7:00 PM', '22-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '21', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 245, NULL, NULL),
('10002', 1, '2021-01-22 15:30:21', '87', '10.44', '40', NULL, '0', '127', 'Deekshith ', 'rygd, bhg, bhb, bn, ded, Udupi - ', NULL, '74.74679533392191', '13.344328963519269', 'Delivery', 'paytm', 'failed', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 15:30:21', '12.7', '114.3', '', '22-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '8', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 95, NULL, NULL),
('10003', 1, '2021-01-22 19:48:06', '87', '10.44', '40', NULL, '0', '127', 'Deekshith ', 'rygd, bhg, bhb, bn, ded, Udupi - ', NULL, '74.74679533392191', '13.344328963519269', 'Delivery', 'cod', 'pending', 'cancelled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 19:48:06', '12.7', '114.3', '', '22-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '8', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 95, NULL, NULL),
('10004', 1, '2021-01-22 23:03:58', '174', '20.88', '0', NULL, '0', '174', 'Deekshith S ', 'g, yw, te, GT w, gs, Ambalpadi - , 401107', NULL, '74.7307807', '13.3374486', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 23:03:58', '17.4', '156.6', '12:30 PM - 7:00 PM', '23-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '16', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 190, NULL, NULL),
('10005', 1, '2021-01-23 17:19:17', '135', '16.2', '0', NULL, '0', '135', 'Deekshith S ', '112, hay ennassim, Casablanca , Ambalpadi, Udupi - ', NULL, '74.7366617', '13.3368902', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 17:19:17', '13.5', '121.5', '', '23-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 140, NULL, NULL),
('10006', 1, '2021-01-23 17:42:12', '55', '6.6', '40', NULL, '0', '95', 'Deekshith S ', '112, hay ennassim, Casablanca , Ambalpadi, Udupi - ', NULL, '74.7366617', '13.3368902', 'Delivery', 'cod', 'pending', 'cancelled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 17:42:12', '9.5', '85.5', '', '23-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 60, NULL, NULL),
('10007', 1, '2021-01-27 12:26:39', '740', '88.8', '0', NULL, '0', '740', 'Deekshith ', '112, hay ennassim, Casablanca , Ambalpadi, Udupi - ', NULL, '74.7307807', '13.3374486', 'delivery', 'cod', NULL, 'processing', '2021-01-27 12:32:40', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-27 12:32:40', '0', '666', '7:00 PM - 10:30 PM', '27-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Admin', '', NULL, NULL, '10', '999', '0', '0', '0', '0', '0', '0', '0', '0', '0', 750, NULL, NULL),
('10008', 1, '2021-01-27 13:31:55', '905', '108.6', '0', NULL, '0', '905', 'Deekshith S ', 'hsh, jehej, heuu, hhh, hewh, Ambalpadi - , hehehe', NULL, '74.7307807', '13.3374486', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-27 13:31:55', '90.5', '814.5', '', '27-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'hehhe nanu gaandi kavana', NULL, NULL, '25', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 930, NULL, NULL),
('10009', 1, '2021-01-28 16:40:45', '148', '17.76', '0', NULL, '0', '148', 'Deekshith S ', 'fhffhhf, hfhfhf, Ambalpadi - ', NULL, '74.7309217', '13.337028600000002', 'Delivery', 'paytm', 'failed', 'failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-28 16:40:45', '14.8', '133.2', '', '28-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10010', 1, '2021-01-28 16:41:11', '148', '17.76', '0', NULL, '0', '148', 'Deekshith S ', 'fhffhhf, hfhfhf, Ambalpadi - ', NULL, '74.7309217', '13.337028600000002', 'Delivery', 'paytm', 'failed', 'failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-28 16:41:11', '14.8', '133.2', '', '28-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10011', 6, '2021-01-29 10:58:23', '203', '24.36', '0', NULL, '0', '203', 'Sumanth Shetty ', '115, testimg, hello 124, cros, hello 1234, Ambalpadi - ', NULL, '74.7307807', '13.3374486', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-29 10:58:23', '20.3', '182.7', '', '29-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '7', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 210, NULL, NULL),
('10012', 1, '2021-01-29 17:24:37', '110', '13.2', '0', NULL, '0', '110', 'Testing Demo ', '55, 22, Ambalpadi, Udupi - ', NULL, '74.7366617', '13.3368902', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-29 17:24:37', '11', '99', '', '29-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '10', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 120, NULL, NULL),
('10013', 1, '2021-01-29 17:26:49', '296', '35.52', '0', NULL, '0', '296', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-29 17:26:49', '29.6', '266.4', '', '29-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '4', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 300, NULL, NULL),
('10014', 1, '2021-01-29 17:27:59', '148', '17.76', '0', NULL, '0', '148', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-29 17:27:59', '14.8', '133.2', '', '29-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10015', 1, '2021-01-30 13:05:12', '495', '59.4', '0', NULL, '0', '495', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-30 13:05:12', '49.5', '445.5', '', '30-01-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ftt', NULL, NULL, '45', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 540, NULL, NULL),
('10016', 1, '2021-02-01 11:39:54', '148', '17.76', '0', NULL, '0', '148', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 11:39:54', '14.8', '133.2', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10017', 1, '2021-02-01 12:03:28', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:03:28', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10018', 1, '2021-02-01 12:03:55', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:03:55', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10019', 1, '2021-02-01 12:04:25', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:04:25', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10020', 1, '2021-02-01 12:05:11', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:05:11', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10021', 1, '2021-02-01 12:07:58', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:07:58', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10022', 1, '2021-02-01 12:10:25', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:10:25', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10023', 1, '2021-02-01 12:10:34', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:10:34', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10024', 1, '2021-02-01 12:11:10', '2250', '270', '0', NULL, '0', '2250', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:11:10', '225', '2025', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'ghgefvh', NULL, NULL, '90', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 2340, NULL, NULL),
('10025', 5, '2021-02-01 12:51:16', '495', '59.4', '0', NULL, '0', '495', 'ananthakrishna ', '12, udupi, Ambalpadi - ', NULL, '74.7307807', '13.3374486', 'delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:51:16', '49.5', '445.5', '12:30 PM - 7:00 PM', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Admin', '', NULL, NULL, '45', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 540, NULL, NULL),
('10026', 5, '2021-02-01 12:52:35', '495', '59.4', '0', NULL, '0', '495', 'ananthakrishna ', '12, udupi, Ambalpadi - ', NULL, '74.7307807', '13.3374486', 'delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:52:35', '49.5', '495', '12:30 PM - 7:00 PM', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Admin', '', NULL, NULL, '45', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 540, NULL, NULL),
('10027', 5, '2021-02-01 12:54:39', '495', '59.4', '0', NULL, '0', '495', 'ananthakrishna ', '12, udupi, Ambalpadi - ', NULL, '74.7307807', '13.3374486', 'delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 12:54:39', '49.5', '495', '12:30 PM - 7:00 PM', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Admin', '', NULL, NULL, '45', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 540, NULL, NULL),
('10028', 1, '2021-02-01 14:42:15', '296', '35.52', '0', NULL, '0', '296', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 14:42:15', '29.6', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '4', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 300, NULL, NULL),
('10029', 1, '2021-02-01 15:53:18', '135', '16.2', '0', NULL, '0', '135', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 15:53:18', '13.5', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 140, NULL, NULL),
('10030', 1, '2021-02-01 15:57:36', '135', '16.2', '0', NULL, '0', '135', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 15:57:36', '13.5', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 140, NULL, NULL),
('10031', 1, '2021-02-01 16:21:43', '283', '33.96', '0', NULL, '0', '283', 'Deekshith S ', 'eeeeee, eerr, Ambalpadi - ', NULL, '74.73051', '13.3359843', 'Delivery', 'wallet', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 16:21:43', '28.3', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '7', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 290, NULL, NULL),
('10032', 1, '2021-02-01 19:44:09', '662', '79.44', '0', NULL, '0', '662', 'Deekshith S ', 'gxddd, hfddd, Ambalpadi - ', NULL, '74.7309217', '13.337028600000002', 'Delivery', 'paytm', 'failed', 'failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 19:44:09', '66.2', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '18', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 680, NULL, NULL),
('10033', 1, '2021-02-01 19:44:15', '662', '79.44', '0', NULL, '0', '662', 'Deekshith S ', 'gxddd, hfddd, Ambalpadi - ', NULL, '74.7309217', '13.337028600000002', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 19:44:15', '66.2', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '18', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 680, NULL, NULL),
('10034', 1, '2021-02-01 19:47:52', '554', '66.48', '0', NULL, '0', '554', 'Deekshith S ', 'gxddd, hfddd, Ambalpadi - ', NULL, '74.7309217', '13.337028600000002', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-01 19:47:52', '55.4', '10', '', '01-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '16', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 570, NULL, NULL),
('10035', 1, '2021-02-02 12:13:57', '55', '6.6', '40', NULL, '0', '95', 'Kavana Shettigar  ', '1, dff, Ambalpadi, Udupi - ', NULL, '74.7365977', '13.3368811', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 12:13:57', '9.5', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Web', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 60, NULL, NULL),
('10036', 7, '2021-02-02 12:43:50', '148', '17.76', '0', NULL, '0', '148', 'shwetha acharya  ', 'qw, xxx, Brahmagiri - ', NULL, '74.7395159', '13.3368614', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 12:43:50', '14.8', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10037', 1, '2021-02-02 15:14:49', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '22, cvh, Ambalpadi, Udupi - ', NULL, '74.7365977', '13.3368811', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 15:14:49', '14.8', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10038', 1, '2021-02-02 16:13:18', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', 'vj, gh, Ambalpadi, Udupi - ', NULL, '74.7365977', '13.3368811', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 16:13:18', '14.8', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10039', 1, '2021-02-02 17:47:54', '55', '6.6', '40', NULL, '0', '95', 'Kavana Shettigar  ', 'hdhh, rurur, Brahmagiri - ', NULL, '74.7393828', '13.3331819', 'Delivery', 'paytm', 'failed', 'failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 17:47:54', '9.5', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Web', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 60, NULL, NULL),
('10040', 1, '2021-02-02 17:48:18', '55', '6.6', '40', NULL, '0', '95', 'Kavana Shettigar  ', 'hdhh, rurur, Brahmagiri - ', NULL, '74.7393828', '13.3331819', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 17:48:18', '9.5', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Web', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 60, NULL, NULL),
('10041', 1, '2021-02-02 18:30:55', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', 'hdhh, rurur, Brahmagiri - ', NULL, '74.7393828', '13.3331819', 'Delivery', 'cod', NULL, 'delivered', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 18:36:49', '14.8', '10', '', '02-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10042', 2, '2021-02-03 12:08:47', '148', '17.76', '0', NULL, '0', '148', 'shwetha acharya ', 'ggg, ghh, Tenkanidyoor - ', NULL, '74.71351180225611', '13.365985994844015', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 12:08:47', '14.8', '10', '', '03-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10043', 2, '2021-02-03 12:12:21', '148', '17.76', '0', NULL, '0', '148', 'shwetha acharya ', 'hffjfh, fjfhf, Tenkanidyoor - ', NULL, '74.7135117', '13.365980700000001', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 12:12:21', '14.8', '10', '', '03-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10044', 3, '2021-02-03 13:21:43', '148', '17.76', '0', NULL, '0', '148', 'de  ', 'hhhh, hhhj, Tenkanidyoor - ', NULL, '74.7135117', '13.365980700000001', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 13:21:43', '14.8', '10', '', '03-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10045', 1, '2021-02-03 15:16:11', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', NULL, '74.7317', '13.333677999999999', 'Delivery', 'paytm', 'failed', 'failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 15:16:11', '14.8', '10', '', '03-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10046', 1, '2021-02-03 15:16:29', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', NULL, '74.7317', '13.333677999999999', 'Delivery', 'cod', 'pending', 'cancelled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 15:16:29', '14.8', '10', '', '03-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', 'sdsds', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10047', 2, '2021-02-03 17:56:59', '148', '17.76', '0', NULL, '0', '148', 'shwetha acharya ', 'hffjfh, fjfhf, Tenkanidyoor - ', NULL, '74.7135117', '13.365980700000001', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 17:56:59', '14.8', '10', '', '03-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10048', 1, '2021-02-04 10:09:10', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', NULL, '74.7317', '13.333677999999999', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-04 10:09:10', '14.8', '10', '', '04-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Web', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10049', 1, '2021-02-04 14:59:41', '296', '35.52', '0', NULL, '0', '296', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', NULL, '74.7317', '13.333677999999999', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-04 14:59:41', '29.6', '10', '11:00 AM - 2:30 PM', '04-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '4', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 300, NULL, NULL),
('10050', 1, '2021-02-04 17:10:17', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', NULL, '74.7317', '13.333677999999999', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-04 17:10:17', '14.8', '10', '', '04-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10051', 1, '2021-02-04 17:24:24', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, udupi, Ambalpadi - , 12', NULL, '74.7317', '13.333677999999999', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-04 17:24:24', '14.8', '10', '', '04-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10052', 1, '2021-02-04 17:46:33', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', 'dd, gvv, Brahmagiri - ', NULL, '74.7478031', '13.338408099999999', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-04 17:46:33', '14.8', '10', '', '04-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10053', 1, '2021-02-05 13:26:03', '135', '16.2', '0', NULL, '0', '135', 'Kavana Shettigar  ', 'agag, avavs, Brahmagiri - ', NULL, '74.74732037633657', '13.336122336438583', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-05 13:26:03', '13.5', '10', '', '05-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '5', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 140, NULL, NULL),
('10054', 1, '2021-02-05 14:26:17', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, ananth, Ambalpadi - ', NULL, '74.7307807', '13.3374486', 'Delivery', 'cod', 'pending', 'received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-05 14:26:17', '14.8', '10', '', '05-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL),
('10055', 1, '2021-02-05 16:37:57', '148', '17.76', '0', NULL, '0', '148', 'Kavana Shettigar  ', '12, ananth, Ambalpadi - ', NULL, '74.7307807', '13.3374486', 'Delivery', 'cod', NULL, 'processing', '2021-02-08 11:33:59', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-08 11:33:59', '14.8', '10', '12:30 PM - 7:00 PM', '05-02-2021', NULL, '0', NULL, 'Grocbay ', NULL, 'Android', '', NULL, NULL, '2', '999', '0', '0', '0', '0', '0', '0', '0', NULL, '0', 150, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_items`
--

CREATE TABLE `customer_order_items` (
  `id` int(11) NOT NULL,
  `order_d` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priceVariavtion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actualAmount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extraAmount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subTotal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isTray` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trayQty` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loyalty` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `discountPrice` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `discountTotal` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0',
  `cost` double DEFAULT '0',
  `weight` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `return_time` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `reason` longtext CHARACTER SET utf8 COLLATE utf8_bin,
  `edited` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `barcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_order_items`
--

INSERT INTO `customer_order_items` (`id`, `order_d`, `itemId`, `itemName`, `priceVariavtion`, `price`, `quantity`, `actualAmount`, `extraAmount`, `tax`, `discount`, `subTotal`, `isTray`, `trayQty`, `sku`, `hsn`, `loyalty`, `discountPrice`, `discountTotal`, `cost`, `weight`, `return_time`, `reason`, `edited`, `barcode`, `brand`) VALUES
(1, '10001', '17', 'Maida', '1 Kg', '32', '7', '224', '0', '18', '0', '224', '0', NULL, '35', '0', '0', '3', '21', 245, '0', '0', NULL, '0', '0', '2'),
(2, '10002', '17', 'Maida', '1 Kg', '32', '1', '32', '0', '18', '0', '32', '0', NULL, '35', '0', '0', '3', '3', 35, '0', '0', NULL, '0', '0', '2'),
(3, '10002', '21', 'Rice Flour', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(4, '10003', '17', 'Maida', '1 Kg', '32', '1', '32', '0', '18', '0', '32', '0', NULL, '35', '0', '0', '3', '3', 35, '0', '0', NULL, '0', '0', '2'),
(5, '10003', '21', 'Rice Flour', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(6, '10004', '17', 'Maida', '1 Kg', '32', '2', '64', '0', '18', '0', '64', '0', NULL, '35', '0', '0', '3', '6', 70, '0', '0', NULL, '0', '0', '2'),
(7, '10004', '21', 'Rice Flour', '1 Kg', '55', '2', '110', '0', '18', '0', '110', '0', NULL, '60', '0', '0', '5', '10', 120, '0', '0', NULL, '0', '0', '2'),
(8, '10005', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(9, '10006', '22', 'Idli Sooji', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(10, '10007', '19', 'Besan Flour', '1 Kg', '148', '5', '740', '0', '18', '0', '740', '0', NULL, '150', '0', '0', '2', '10', 750, '0', '0', NULL, '0', '0', '2'),
(11, '10008', '19', 'Besan Flour', '1 Kg', '148', '5', '740', '0', '18', '0', '740', '0', NULL, '150', '0', '0', '2', '10', 750, '0', '0', NULL, '0', '0', '2'),
(12, '10008', '21', 'Rice Flour', '1 Kg', '55', '3', '165', '0', '18', '0', '165', '0', NULL, '60', '0', '0', '5', '15', 180, '0', '0', NULL, '0', '0', '2'),
(13, '10009', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(14, '10010', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(15, '10011', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(16, '10011', '21', 'Rice Flour', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(17, '10012', '21', 'Rice Flour', '1 Kg', '55', '2', '110', '0', '18', '0', '110', '0', NULL, '60', '0', '0', '5', '10', 120, '0', '0', NULL, '0', '0', '2'),
(18, '10013', '19', 'Besan Flour', '1 Kg', '148', '2', '296', '0', '18', '0', '296', '0', NULL, '150', '0', '0', '2', '4', 300, '0', '0', NULL, '0', '0', '2'),
(19, '10014', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(20, '10015', '21', 'Rice Flour', '1 Kg', '55', '5', '275', '0', '18', '0', '275', '0', NULL, '60', '0', '0', '5', '25', 300, '0', '0', NULL, '0', '0', '2'),
(21, '10015', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(22, '10016', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(23, '10017', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(24, '10017', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(25, '10017', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(26, '10018', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(27, '10018', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(28, '10018', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(29, '10019', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(30, '10019', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(31, '10019', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(32, '10020', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(33, '10020', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(34, '10020', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(35, '10021', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(36, '10021', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(37, '10021', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(38, '10022', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(39, '10022', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(40, '10022', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(41, '10023', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(42, '10023', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(43, '10023', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(44, '10024', '19', 'Besan Flour', '1 Kg', '148', '10', '1480', '0', '18', '0', '1480', '0', NULL, '150', '0', '0', '2', '20', 1500, '0', '0', NULL, '0', '0', '2'),
(45, '10024', '21', 'Rice Flour', '1 Kg', '55', '10', '550', '0', '18', '0', '550', '0', NULL, '60', '0', '0', '5', '50', 600, '0', '0', NULL, '0', '0', '2'),
(46, '10024', '22', 'Idli Sooji', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(47, '10025', '21', 'Rice Flour', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(48, '10025', '22', 'Idli Sooji', '1 Kg', '55', '5', '275', '0', '18', '0', '275', '0', NULL, '60', '0', '0', '5', '25', 300, '0', '0', NULL, '0', '0', '2'),
(49, '10026', '21', 'Rice Flour', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(50, '10026', '22', 'Idli Sooji', '1 Kg', '55', '5', '275', '0', '18', '0', '275', '0', NULL, '60', '0', '0', '5', '25', 300, '0', '0', NULL, '0', '0', '2'),
(51, '10027', '21', 'Rice Flour', '1 Kg', '55', '4', '220', '0', '18', '0', '220', '0', NULL, '60', '0', '0', '5', '20', 240, '0', '0', NULL, '0', '0', '2'),
(52, '10027', '22', 'Idli Sooji', '1 Kg', '55', '5', '275', '0', '18', '0', '275', '0', NULL, '60', '0', '0', '5', '25', 300, '0', '0', NULL, '0', '0', '2'),
(53, '10028', '19', 'Besan Flour', '1 Kg', '148', '2', '296', '0', '18', '0', '296', '0', NULL, '150', '0', '0', '2', '4', 300, '0', '0', NULL, '0', '0', '2'),
(54, '10029', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(55, '10030', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(56, '10031', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(57, '10031', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(58, '10032', '19', 'Besan Flour', '1 Kg', '148', '3', '444', '0', '18', '0', '444', '0', NULL, '150', '0', '0', '2', '6', 450, '0', '0', NULL, '0', '0', '2'),
(59, '10032', '126', 'Rice Flour', '500gms', '28', '1', '28', '0', '18', '0', '28', '0', NULL, '30', '0', '0', '2', '2', 30, '0', '0', NULL, '0', '0', '2'),
(60, '10032', '22', 'Idli Sooji', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(61, '10032', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(62, '10033', '19', 'Besan Flour', '1 Kg', '148', '3', '444', '0', '18', '0', '444', '0', NULL, '150', '0', '0', '2', '6', 450, '0', '0', NULL, '0', '0', '2'),
(63, '10033', '126', 'Rice Flour', '500gms', '28', '1', '28', '0', '18', '0', '28', '0', NULL, '30', '0', '0', '2', '2', 30, '0', '0', NULL, '0', '0', '2'),
(64, '10033', '22', 'Idli Sooji', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(65, '10033', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(66, '10034', '22', 'Idli Sooji', '1 Kg', '55', '2', '110', '0', '18', '0', '110', '0', NULL, '60', '0', '0', '5', '10', 120, '0', '0', NULL, '0', '0', '2'),
(67, '10034', '19', 'Besan Flour', '1 Kg', '148', '3', '444', '0', '18', '0', '444', '0', NULL, '150', '0', '0', '2', '6', 450, '0', '0', NULL, '0', '0', '2'),
(68, '10035', '21', 'Rice Flour', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(69, '10036', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(70, '10037', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(71, '10038', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(72, '10039', '21', 'Rice Flour', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(73, '10040', '21', 'Rice Flour', '1 Kg', '55', '1', '55', '0', '18', '0', '55', '0', NULL, '60', '0', '0', '5', '5', 60, '0', '0', NULL, '0', '0', '2'),
(74, '10041', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(75, '10042', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(76, '10043', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(77, '10044', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(78, '10045', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(79, '10046', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(80, '10047', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(81, '10048', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(82, '10049', '19', 'Besan Flour', '1 Kg', '148', '2', '296', '0', '18', '0', '296', '0', NULL, '150', '0', '0', '2', '4', 300, '0', '0', NULL, '0', '0', '2'),
(83, '10050', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(84, '10051', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(85, '10052', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(86, '10053', '26', 'Atta- Multigrain', '1 Kg', '135', '1', '135', '0', '18', '0', '135', '0', NULL, '140', '0', '0', '5', '5', 140, '0', '0', NULL, '0', '0', '2'),
(87, '10054', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2'),
(88, '10055', '19', 'Besan Flour', '1 Kg', '148', '1', '148', '0', '18', '0', '148', '0', NULL, '150', '0', '0', '2', '2', 150, '0', '0', NULL, '0', '0', '2');

-- --------------------------------------------------------

--
-- Table structure for table `customer_with_promocode`
--

CREATE TABLE `customer_with_promocode` (
  `customer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promocode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extra_package`
--

CREATE TABLE `extra_package` (
  `id` int(11) NOT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `packageName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pricingType` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `title` varchar(450) DEFAULT 'Undefined Location',
  `value` varchar(3000) DEFAULT NULL,
  `created_date` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `minimum_order_amount_normal` varchar(500) DEFAULT NULL,
  `delivery_charge_normal` varchar(500) DEFAULT NULL,
  `minimum_order_amount_prime` varchar(500) DEFAULT NULL,
  `delivery_charge_prime` varchar(500) DEFAULT NULL,
  `minimum_order_amount_express` varchar(500) DEFAULT NULL,
  `delivery_charge_express` varchar(500) DEFAULT NULL,
  `branch` varchar(100) NOT NULL DEFAULT '999',
  `duration` varchar(100) DEFAULT '00:00',
  `start` varchar(200) DEFAULT NULL,
  `end` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `title`, `value`, `created_date`, `latitude`, `longitude`, `minimum_order_amount_normal`, `delivery_charge_normal`, `minimum_order_amount_prime`, `delivery_charge_prime`, `minimum_order_amount_express`, `delivery_charge_express`, `branch`, `duration`, `start`, `end`) VALUES
(1, 'Grocbay ', '[{\"lat\":71.61174604791145,\"lng\":35.53738154999999},{\"lat\":18.23977851697443,\"lng\":-22.470430950000008},{\"lat\":-4.642137536760961,\"lng\":80.53738154999999},{\"lat\":55.73329196309155,\"lng\":167.02175655}]', '20-01-2021', NULL, NULL, '100', '40', '100', '40', '100', '30', '999', '1 hour', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loyalty`
--

CREATE TABLE `loyalty` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0',
  `type` varchar(100) NOT NULL DEFAULT '0',
  `minimum_order_amount` varchar(100) NOT NULL DEFAULT '0',
  `points` varchar(100) NOT NULL DEFAULT '0',
  `maximum_redeem` varchar(100) NOT NULL DEFAULT '0',
  `discount` varchar(100) NOT NULL DEFAULT '0',
  `branch` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loyalty`
--

INSERT INTO `loyalty` (`id`, `status`, `type`, `minimum_order_amount`, `points`, `maximum_redeem`, `discount`, `branch`) VALUES
(1, '0', '0', '0', '0', '0', '0', '999'),
(2, '0', '0', '0', '0', '0', '0', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT ' ',
  `avator` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `parent_id` varchar(100) DEFAULT '0' COMMENT '0 for main ,1 for sub',
  `status` varchar(100) DEFAULT NULL,
  `discounted_price` varchar(100) NOT NULL DEFAULT '0',
  `branch` varchar(100) NOT NULL DEFAULT '999',
  `post_image` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `name`, `avator`, `price`, `description`, `duration`, `parent_id`, `status`, `discounted_price`, `branch`, `post_image`) VALUES
(1, 'GRAB Membership', '6013ef9f3aca1_1611919263.', NULL, '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', NULL, '0', '0', '0', '999', '6013ef9f3ade3_1611919263POST.'),
(152, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '900', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '1', '1', '1', '800', '999', '6013ef9f3ade3_1611919263POST.'),
(153, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '900', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '3', '1', '1', '950', '999', '6013ef9f3ade3_1611919263POST.'),
(157, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '100', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '2', '1', '1', '98', '999', '6013ef9f3ade3_1611919263POST.'),
(158, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '1000', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '8', '1', '1', '10000', '999', '6013ef9f3ade3_1611919263POST.'),
(159, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '100', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '2', '1', '1', '98', '999', '6013ef9f3ade3_1611919263POST.'),
(160, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '500', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '5', '1', '1', '499', '999', '6013ef9f3ade3_1611919263POST.'),
(162, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '100', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '1', '1', '1', '55', '999', '6013ef9f3ade3_1611919263POST.'),
(163, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '100', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '6', '1', '1', '50', '999', '6013ef9f3ade3_1611919263POST.'),
(164, 'Silver', '6013ef9f3aca1_1611919263.', '99', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '1', '1', '0', '49', '999', '6013ef9f3ade3_1611919263POST.'),
(165, 'GRAB Membership', '6013ef9f3aca1_1611919263.', '1000', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '12', '1', '1', '550', '999', '6013ef9f3ade3_1611919263POST.'),
(166, 'Gold', '6013ef9f3aca1_1611919263.', '295', '4% Additional discount on All Products.\r\nUnlimited Free Delivery Orders Above Rs 300/-\r\nPriority on Delivery.\r\n', '3', '1', '0', '149', '', '6013ef9f3ade3_1611919263POST.');

-- --------------------------------------------------------

--
-- Table structure for table `membership_history`
--

CREATE TABLE `membership_history` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `purchased_date` varchar(100) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `expiry_date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `membership_id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `category` varchar(300) COLLATE utf8_unicode_ci DEFAULT '0',
  `itemName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemSlug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vegType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemShortDescription` longtext COLLATE utf8_unicode_ci,
  `itemDescription` longtext COLLATE utf8_unicode_ci,
  `itemFeaturedImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regularPrice` double DEFAULT NULL,
  `salePrice` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `isSubscription` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `salesTax` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxItem` varchar(255) COLLATE utf8_unicode_ci DEFAULT '10',
  `totalQty` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `brand` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `alert` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `duration` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nested` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 for normal else different',
  `delivery` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'slot',
  `priority` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '999',
  `parent` varchar(500) COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `category_id`, `category`, `itemName`, `itemSlug`, `vegType`, `itemShortDescription`, `itemDescription`, `itemFeaturedImage`, `regularPrice`, `salePrice`, `isActive`, `isSubscription`, `salesTax`, `maxItem`, `totalQty`, `brand`, `alert`, `reference`, `duration`, `nested`, `type`, `delivery`, `priority`, `branch`, `parent`) VALUES
(1, NULL, '4', 'Mosambi(ಮುಸುಂಬಿ)', 'mosambi(ಮುಸುಂಬಿ)', 'none', NULL, NULL, NULL, 0, '100', 1, '1', '18', NULL, NULL, '1', '10', '', '3', '0', '1', 'slot', '1', '0', '0'),
(2, NULL, '4', 'Mosambi(ಮುಸುಂಬಿ)', 'mosambi(ಮುಸುಂಬಿ)', 'none', NULL, NULL, NULL, 0, '100', 2, '1', '18', '10', '50', '1', '10', '', '3', '0', '1', 'slot', '1', '999', '1'),
(3, NULL, '36', 'Almonds', 'almonds', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '1', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(4, NULL, '36', 'Almonds', 'almonds', 'veg', NULL, NULL, '423126.png', 0, '0', 2, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '3'),
(5, NULL, '58', 'Liril Lemon & Tea Tree Oil Soap', 'liril-lemon-&-tea-tree-oil-soap', 'none', NULL, 'The fragrance with cues of Lemon provides an invigorating shower experience\r\nExperience a blast of lemon freshness that will leave your senses rejuvenated\r\nInvigorating lemon freshness\r\nSoap with Lemon & Tea Tree Oil\r\nIt’s the perfect balance of care and freshness in one soap.\r\nBlast of freshness. Skin Type: For all skin types. Type: Bathing soap', NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(6, NULL, '58', 'Liril Lemon', 'liril-lemon', 'none', NULL, 'The fragrance with cues of Lemon provides an invigorating shower experience\r\nExperience a blast of lemon freshness that will leave your senses rejuvenated\r\nInvigorating lemon freshness\r\nSoap with Lemon & Tea Tree Oil\r\nIt’s the perfect balance of care and freshness in one soap.\r\nBlast of freshness. Skin Type: For all skin types. Type: Bathing soap', '149492.png', 0, '0', 2, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '5'),
(7, NULL, '30', 'Banana(ಬಾಳೆಹಣ್ಣು)', 'banana(ಬಾಳೆಹಣ್ಣು)', 'veg', NULL, NULL, '534484.png', 0, '0', 2, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(8, NULL, '0', 'Banana(ಬಾಳೆಹಣ್ಣು)', 'banana(ಬಾಳೆಹಣ್ಣು)', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', '10', '0', '0', '10', '', '0', '0', '1', 'slot', NULL, '999', '7'),
(9, NULL, '0', 'Bounce Biscuit', 'bounce-biscuit', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '1', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(10, NULL, '70', 'Bounce Biscuit', 'bounce-biscuit', 'veg', NULL, NULL, '769749.png', 0, '0', 2, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '9'),
(11, NULL, '30', 'Apples', 'apples', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(12, NULL, '30', 'Apples', 'apples', 'veg', NULL, NULL, '428608.png', 0, '0', 2, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '11'),
(13, NULL, '62', 'Tomato', 'tomato', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(14, NULL, '62', 'Tomato', 'tomato', 'veg', NULL, NULL, '769367.png', 0, '0', 2, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '13'),
(15, NULL, '30', 'Strawberries', 'strawberries', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(16, NULL, '30', 'Strawberries', 'strawberries', 'veg', NULL, NULL, '977580.png', 0, '0', 2, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '15'),
(17, NULL, '20', 'Aashirvad Atta', 'aashirvad-atta', 'veg', NULL, NULL, '530524.jpeg', 0, '0', 2, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(18, NULL, '0,0,0,0,0', 'Aashirvad Atta', 'aashirvad-atta', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '999', '17'),
(19, NULL, '20', 'Maida', 'maida', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(20, NULL, '20', 'Maida', 'maida', 'veg', NULL, NULL, '771290.jpeg', 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '19'),
(21, NULL, '20', 'Besan Flour', 'besan-flour', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(22, NULL, '20', 'Besan Flour', 'besan-flour', 'veg', NULL, NULL, '111564.jpeg', 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '21'),
(23, NULL, '20', 'Rice Flour', 'rice-flour', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(24, NULL, '20', 'Rice Flour', 'rice-flour', 'veg', NULL, NULL, '372813.png', 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '23'),
(25, NULL, '20', 'Idli Sooji', 'idli-sooji', 'veg', NULL, NULL, '310355.jpeg', 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(26, NULL, '0', 'Idli Sooji', 'idli-sooji', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '999', '25'),
(27, NULL, '20', 'Corn Flour', 'corn-flour', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(28, NULL, '20', 'Corn Flour', 'corn-flour', 'veg', NULL, NULL, '776460.png', 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '27'),
(29, NULL, '20', 'Atta- Multigrain', 'atta--multigrain', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(30, NULL, '20', 'Atta- Multigrain', 'atta--multigrain', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '29'),
(31, NULL, '20', 'Rice Powder', 'rice-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(32, NULL, '20', 'Rice Powder', 'rice-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '31'),
(33, NULL, '20', 'Rava - Samba Wheat', 'rava---samba-wheat', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(34, NULL, '20', 'Rava - Samba Wheat', 'rava---samba-wheat', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '33'),
(35, NULL, '4', 'Moong Dal', 'moong-dal', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', NULL, '0', '0'),
(36, NULL, '4', 'Moong Dal', 'moong-dal', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '35'),
(37, NULL, '4', 'Toor Dal', 'toor-dal', 'veg', NULL, NULL, '219740.png', 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(38, NULL, '0', 'Toor Dal', 'toor-dal', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '999', '37'),
(39, NULL, '4', 'Kabuli Channa', 'kabuli-channa', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(40, NULL, '4', 'Kabuli Channa', 'kabuli-channa', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', '1', '999', '39'),
(41, NULL, '4', 'Channa Dal', 'channa-dal', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(42, NULL, '4', 'Channa Dal', 'channa-dal', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '41'),
(43, NULL, '4', 'Green Moong Whole/Sabut', 'green-moong-whole/sabut', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(44, NULL, '4', 'Green Moong Whole/Sabut', 'green-moong-whole/sabut', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '43'),
(45, NULL, '4', 'Fried Gram/Bengal Gram', 'fried-gram/bengal-gram', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(46, NULL, '4', 'Fried Gram/Bengal Gram', 'fried-gram/bengal-gram', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '45'),
(47, NULL, '4', 'Rajma', 'rajma', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(48, NULL, '4', 'Rajma', 'rajma', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '47'),
(49, NULL, '4', 'Masoor Dal', 'masoor-dal', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(50, NULL, '4', 'Masoor Dal', 'masoor-dal', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', '-15', '999', '49'),
(51, NULL, '34', 'Basmati Rice', 'basmati-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(52, NULL, '0', 'Basmati Rice', 'basmati-rice', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '999', '51'),
(53, NULL, '34', 'Sona Masoori Rice', 'sona-masoori-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(54, NULL, '34', 'Sona Masoori Rice', 'sona-masoori-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '53'),
(55, NULL, '34', 'Rice - Jeera/Jeeraga Samba', 'rice---jeera/jeeraga-samba', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(56, NULL, '34', 'Rice - Jeera/Jeeraga Samba', 'rice---jeera/jeeraga-samba', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '55'),
(57, NULL, '34', 'Steam Rice', 'steam-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(58, NULL, '34', 'Steam Rice', 'steam-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '2', '10', '', '0', '0', '0', 'slot', NULL, '999', '57'),
(59, NULL, '4,20', 'Banana(ಬಾಳೆಹಣ್ಣು)-dubai', 'banana(ಬಾಳೆಹಣ್ಣು)-dubai', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '1', '10', '', '0', '0', '0', 'slot', '0', '0', '0'),
(60, NULL, '0,0', 'Banana(ಬಾಳೆಹಣ್ಣು)-dubai', 'banana(ಬಾಳೆಹಣ್ಣು)-dubai', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '999', '59'),
(61, NULL, '34', 'Red Poha', 'red-poha', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(62, NULL, '0', 'Red Poha', 'red-poha', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '61'),
(63, NULL, '34', 'Long Grain Rice', 'long-grain-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(64, NULL, '0', 'Long Grain Rice', 'long-grain-rice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '63'),
(65, NULL, '34', 'Wheat - Whole', 'wheat---whole', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(66, NULL, '0', 'Wheat - Whole', 'wheat---whole', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '65'),
(67, NULL, '34', 'Rice - Jeera', 'rice---jeera', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(68, NULL, '0', 'Rice - Jeera', 'rice---jeera', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '67'),
(69, NULL, '36', 'Almond/Badam', 'almond/badam', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(70, NULL, '0', 'Almond/Badam', 'almond/badam', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '69'),
(71, NULL, '36', 'Cashew/Kaju - Whole', 'cashew/kaju---whole', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(72, NULL, '0', 'Cashew/Kaju - Whole', 'cashew/kaju---whole', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '71'),
(73, NULL, '36', 'Raisins/Kishmish', 'raisins/kishmish', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(74, NULL, '0', 'Raisins/Kishmish', 'raisins/kishmish', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '73'),
(75, NULL, '36', 'Cashew/Kaju - Broken', 'cashew/kaju---broken', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(76, NULL, '0', 'Cashew/Kaju - Broken', 'cashew/kaju---broken', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '75'),
(77, NULL, '36', 'Walnut/Akhrot- Kernels', 'walnut/akhrot--kernels', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(78, NULL, '0', 'Walnut/Akhrot- Kernels', 'walnut/akhrot--kernels', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '77'),
(79, NULL, '36', 'Anjeer - Figs', 'anjeer---figs', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(80, NULL, '0', 'Anjeer - Figs', 'anjeer---figs', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '79'),
(81, NULL, '36', 'Pista - Irani, Roasted & Salted', 'pista---irani,-roasted-&-salted', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(82, NULL, '0', 'Pista - Irani, Roasted & Salted', 'pista---irani,-roasted-&-salted', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '81'),
(83, NULL, '36', 'Flax Seeds', 'flax-seeds', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(84, NULL, '0', 'Flax Seeds', 'flax-seeds', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '83'),
(85, NULL, '36', 'Dates', 'dates', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(86, NULL, '0', 'Dates', 'dates', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '85'),
(87, NULL, '36', 'Dry Dates', 'dry-dates', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(88, NULL, '0', 'Dry Dates', 'dry-dates', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '87'),
(89, NULL, '38', 'Jeera Powder', 'jeera-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(90, NULL, '0', 'Coriander/Dhania Seeds', 'coriander/dhania-seeds', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '89'),
(91, NULL, '38', 'Turmeric Powder', 'turmeric-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(92, NULL, '0', 'Turmeric Powder', 'turmeric-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '91'),
(93, NULL, '38', 'Cumin Powder', 'cumin-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(94, NULL, '0', 'Cumin Powder', 'cumin-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '93'),
(95, NULL, '38', 'Chilli Powder', 'chilli-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(96, NULL, '0', 'Chilli Powder', 'chilli-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '95'),
(97, NULL, '38', 'Briyani Masala', 'briyani-masala', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(98, NULL, '0', 'Coriander (Dhania) Seeds', 'coriander-(dhania)-seeds', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '97'),
(99, NULL, '38', 'Cardamom (Elaichi)', 'cardamom-(elaichi)', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(100, NULL, '0', 'Cardamom (Elaichi)', 'cardamom-(elaichi)', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '99'),
(101, NULL, '38', 'Black Peppercorn (Kali Mirch)', 'black-peppercorn-(kali-mirch)', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(102, NULL, '0', 'Black Peppercorn (Kali Mirch)', 'black-peppercorn-(kali-mirch)', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '101'),
(103, NULL, '38', 'Bay Leaf (Tej Patta)', 'bay-leaf-(tej-patta)', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(104, NULL, '0', 'Bay Leaf (Tej Patta)', 'bay-leaf-(tej-patta)', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '103'),
(105, NULL, '40', 'Tata Salt', 'tata-salt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(106, NULL, '0', 'Tata Salt', 'tata-salt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '105'),
(107, NULL, '40', 'Iodized Salt', 'iodized-salt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(108, NULL, '0', 'Iodized Salt', 'iodized-salt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '107'),
(109, NULL, '40', 'Crystal Salt', 'crystal-salt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(110, NULL, '0', 'Crystal Salt', 'crystal-salt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '109'),
(111, NULL, '40', 'Tata Salt Lite', 'tata-salt-lite', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(112, NULL, '0', 'Tata Salt Lite', 'tata-salt-lite', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '111'),
(113, NULL, '42', 'Madhur Sugar - Refined', 'madhur-sugar---refined', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(114, NULL, '0', 'Madhur Sugar - Refined', 'madhur-sugar---refined', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '113'),
(115, NULL, '42', 'Parry\'s Refined Sugar', 'parry\'s-refined-sugar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(116, NULL, '0', 'Parry\'s Refined Sugar', 'parry\'s-refined-sugar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '115'),
(117, NULL, '42', 'Jaggery Powder', 'jaggery-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(118, NULL, '0', 'Jaggery Powder', 'jaggery-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '117'),
(119, NULL, '42', 'Jaggery Cubes', 'jaggery-cubes', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(120, NULL, '0', 'Jaggery Cubes', 'jaggery-cubes', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '119'),
(121, NULL, '22', 'Goodlife Toned Milk', 'goodlife-toned-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(122, NULL, '0', 'Goodlife Toned Milk', 'goodlife-toned-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '121'),
(123, NULL, '22', 'Amul Gold- Homogenised Standardised Milk', 'amul-gold--homogenised-standardised-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(124, NULL, '0', 'Amul Gold- Homogenised Standardised Milk', 'amul-gold--homogenised-standardised-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '123'),
(125, NULL, '22', 'Amul Taaza Fresh Toned Milk', 'amul-taaza-fresh-toned-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(126, NULL, '0', 'Amul Taaza Fresh Toned Milk', 'amul-taaza-fresh-toned-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '125'),
(127, NULL, '22', 'Nestle A+ Slim Skimmed Milk', 'nestle-a+-slim-skimmed-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(128, NULL, '0', 'Nestle A+ Slim Skimmed Milk', 'nestle-a+-slim-skimmed-milk', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '127'),
(129, NULL, '44', 'Sandwich Bread', 'sandwich-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(130, NULL, '0', 'Sandwich Bread', 'sandwich-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '129'),
(131, NULL, '44', 'Brown Bread', 'brown-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(132, NULL, '0', 'Brown Bread', 'brown-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '131'),
(133, NULL, '44', 'Milk Bread', 'milk-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(134, NULL, '0', 'Milk Bread', 'milk-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '133'),
(135, NULL, '44', 'Burger Buns', 'burger-buns', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(136, NULL, '0', 'Burger Buns', 'burger-buns', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '135'),
(137, NULL, '44', 'Multigrain Bread', 'multigrain-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(138, NULL, '0', 'Multigrain Bread', 'multigrain-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '137'),
(139, NULL, '44', 'Wheat Bread', 'wheat-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(140, NULL, '0', 'Wheat Bread', 'wheat-bread', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '139'),
(141, NULL, '44', 'Bread Pav', 'bread-pav', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(142, NULL, '0', 'Bread Pav', 'bread-pav', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '141'),
(143, NULL, '46', 'Dark Fantasy Choco Fills- Cookies', 'dark-fantasy-choco-fills--cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(144, NULL, '0', 'Dark Fantasy Choco Fills- Cookies', 'dark-fantasy-choco-fills--cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '143'),
(145, NULL, '46', 'Choco Almond Nutty Cookies', 'choco-almond-nutty-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(146, NULL, '0', 'Choco Almond Nutty Cookies', 'choco-almond-nutty-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '145'),
(147, NULL, '46', 'Dipped Cookie', 'dipped-cookie', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(148, NULL, '0', 'Dipped Cookie', 'dipped-cookie', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '147'),
(149, NULL, '46', 'White Choco Cashew Nutty Cookies', 'white-choco-cashew-nutty-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(150, NULL, '0', 'White Choco Cashew Nutty Cookies', 'white-choco-cashew-nutty-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '149'),
(151, NULL, '46', 'Peanut Butter Nutty Cookies', 'peanut-butter-nutty-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(152, NULL, '0', 'Peanut Butter Nutty Cookies', 'peanut-butter-nutty-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '151'),
(153, NULL, '46', 'Dark Fantasy - Luxuria Choco Fills Biscuits - Cookies', 'dark-fantasy---luxuria-choco-fills-biscuits---cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(154, NULL, '0', 'Dark Fantasy - Luxuria Choco Fills Biscuits - Cookies', 'dark-fantasy---luxuria-choco-fills-biscuits---cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '153'),
(155, NULL, '48', 'Fruit Tea Cake', 'fruit-tea-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(156, NULL, '0', 'Fruit Tea Cake', 'fruit-tea-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '155'),
(157, NULL, '48', 'Tea Cake - Banana Walnut', 'tea-cake---banana-walnut', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(158, NULL, '0', 'Tea Cake - Banana Walnut', 'tea-cake---banana-walnut', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '157'),
(159, NULL, '48', 'Fruity Fun Cake', 'fruity-fun-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '1', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(160, NULL, '0', 'Fruity Fun Cake', 'fruity-fun-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '159'),
(161, NULL, '48', 'Fruity Fun Cake', 'fruity-fun-cake', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(162, NULL, '0', 'Fruity Fun Cake', 'fruity-fun-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '161'),
(163, NULL, '48', 'Choco Chip Tea Cake', 'choco-chip-tea-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(164, NULL, '0', 'Choco Chip Tea Cake', 'choco-chip-tea-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '163'),
(165, NULL, '48', 'Muffin/Cup Cake - Choco Chip', 'muffin/cup-cake---choco-chip', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(166, NULL, '0', 'Muffin/Cup Cake - Choco Chip', 'muffin/cup-cake---choco-chip', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '165'),
(167, NULL, '48', 'Pineapple Cake', 'pineapple-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(168, NULL, '0', 'Pineapple Cake', 'pineapple-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '167'),
(169, NULL, '48', 'Tutti Frutty Cake', 'tutti-frutty-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(170, NULL, '0', 'Tutti Frutty Cake', 'tutti-frutty-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '169'),
(171, NULL, '48', 'Chocolate Cheese Cake', 'chocolate-cheese-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(172, NULL, '0', 'Chocolate Cheese Cake', 'chocolate-cheese-cake', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '171'),
(173, NULL, '70', 'Oreo Choco Creme Biscuits', 'oreo-choco-creme-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(174, NULL, '0', 'Oreo Choco Creme Biscuits', 'oreo-choco-creme-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '173'),
(175, NULL, '70', 'Gluco Biscuits - Parle-G', 'gluco-biscuits---parle-g', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(176, NULL, '0', 'Gluco Biscuits - Parle-G', 'gluco-biscuits---parle-g', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '175'),
(177, NULL, '70', 'Bourbon Cream Biscuit - Chocolate Flavor', 'bourbon-cream-biscuit---chocolate-flavor', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(178, NULL, '0', 'Bourbon Cream Biscuit - Chocolate Flavor', 'bourbon-cream-biscuit---chocolate-flavor', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '177'),
(179, NULL, '70', 'Good Day Cashew Cookies', 'good-day-cashew-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(180, NULL, '0', 'Good Day Cashew Cookies', 'good-day-cashew-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '179'),
(181, NULL, '70', 'Vita Marie Gold Biscuits', 'vita-marie-gold-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(182, NULL, '0', 'Vita Marie Gold Biscuits', 'vita-marie-gold-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '181'),
(183, NULL, '70', 'Krackjack Biscuits', 'krackjack-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(184, NULL, '0', 'Krackjack Biscuits', 'krackjack-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '183'),
(185, NULL, '70', 'Digestive Biscuits', 'digestive-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(186, NULL, '0', 'Digestive Biscuits', 'digestive-biscuits', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '185'),
(187, NULL, '70', 'Good Day Chocochip Cookies', 'good-day-chocochip-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(188, NULL, '0', 'Good Day Chocochip Cookies', 'good-day-chocochip-cookies', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '187'),
(189, NULL, '24', 'Surf Excel Easy Wash Detergent Powder', 'surf-excel-easy-wash-detergent-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(190, NULL, '0', 'Surf Excel Easy Wash Detergent Powder', 'surf-excel-easy-wash-detergent-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '189'),
(191, NULL, '24', 'Rin Advanced Detergent Powder', 'rin-advanced-detergent-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(192, NULL, '0', 'Rin Advanced Detergent Powder', 'rin-advanced-detergent-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '191'),
(193, NULL, '24', 'Mr. White Detergent Powder', 'mr.-white-detergent-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(194, NULL, '0', 'Mr. White Detergent Powder', 'mr.-white-detergent-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '193'),
(195, NULL, '24', 'Ariel Complete Detergent Washing Powder', 'ariel-complete-detergent-washing-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(196, NULL, '0', 'Ariel Complete Detergent Washing Powder', 'ariel-complete-detergent-washing-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '195'),
(197, NULL, '24', 'Henko Matic Top Load Detergent', 'henko-matic-top-load-detergent', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(198, NULL, '0', 'Henko Matic Top Load Detergent', 'henko-matic-top-load-detergent', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '197'),
(199, NULL, '24', 'Tide Ultra Matic Detergent Washing Powder', 'tide-ultra-matic-detergent-washing-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(200, NULL, '0', 'Tide Ultra Matic Detergent Washing Powder', 'tide-ultra-matic-detergent-washing-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '199'),
(201, NULL, '24', 'Henko Stain Care Powder', 'henko-stain-care-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(202, NULL, '0', 'Henko Stain Care Powder', 'henko-stain-care-powder', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '201'),
(203, NULL, '50', 'Vim Dishwash Gel', 'vim-dishwash-gel', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(204, NULL, '0', 'Vim Dishwash Gel', 'vim-dishwash-gel', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '203'),
(205, NULL, '50', 'Vim Anti Smell Bar', 'vim-anti-smell-bar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(206, NULL, '0', 'Vim Anti Smell Bar', 'vim-anti-smell-bar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '205'),
(207, NULL, '50', 'Exo Round Dish Wash Bar', 'exo-round-dish-wash-bar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(208, NULL, '0', 'Roll over image to zoom in Exo Round Dish Wash Bar', 'roll-over-image-to-zoom-in-exo-round-dish-wash-bar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '207'),
(209, NULL, '50', 'Vim Dishwash Liquid Gel Lemon Refill Pouch', 'vim-dishwash-liquid-gel-lemon-refill-pouch', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(210, NULL, '0', 'Vim Dishwash Liquid Gel Lemon Refill Pouch', 'vim-dishwash-liquid-gel-lemon-refill-pouch', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '209'),
(211, NULL, '50', 'Pril Dish Wash Bar', 'pril-dish-wash-bar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(212, NULL, '0', 'Pril Dish Wash Bar', 'pril-dish-wash-bar', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '211'),
(213, NULL, '50', 'Pril Kraft Dish Washing Liquid', 'pril-kraft-dish-washing-liquid', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(214, NULL, '0', 'Pril Kraft Dish Washing Liquid', 'pril-kraft-dish-washing-liquid', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '213'),
(215, NULL, '52', 'Disinfectant Toilet Cleaner Liquid', 'disinfectant-toilet-cleaner-liquid', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(216, NULL, '0', 'Disinfectant Toilet Cleaner Liquid', 'disinfectant-toilet-cleaner-liquid', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '215'),
(217, NULL, '52', 'Harpic Original Powerplus', 'harpic-original-powerplus', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(218, NULL, '0', 'Harpic Original Powerplus', 'harpic-original-powerplus', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '217'),
(219, NULL, '52', 'Harpic Bathroom Cleaner', 'harpic-bathroom-cleaner', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(220, NULL, '0', 'Harpic Bathroom Cleaner', 'harpic-bathroom-cleaner', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '219'),
(221, NULL, '52', 'Lizol Disinfectant Cleaner', 'lizol-disinfectant-cleaner', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(222, NULL, '0', 'Lizol Disinfectant Cleaner', 'lizol-disinfectant-cleaner', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '221'),
(223, NULL, '52', 'Colin Glass and Surface Cleaner Spray with Shine Boosters', 'colin-glass-and-surface-cleaner-spray-with-shine-boosters', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(224, NULL, '0', 'Colin Glass and Surface Cleaner Spray with Shine Boosters', 'colin-glass-and-surface-cleaner-spray-with-shine-boosters', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '223'),
(225, NULL, '52', 'Harpic White and Shine Bleach', 'harpic-white-and-shine-bleach', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(226, NULL, '0', 'Harpic White and Shine Bleach', 'harpic-white-and-shine-bleach', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '225'),
(227, NULL, '52', 'Dettol Liquid Disinfectant', 'dettol-liquid-disinfectant', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(228, NULL, '0', 'Dettol Liquid Disinfectant', 'dettol-liquid-disinfectant', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '227'),
(229, NULL, '52', 'Domex Fresh Toilet Cleaner', 'domex-fresh-toilet-cleaner', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(230, NULL, '0', 'Domex Fresh Toilet Cleaner', 'domex-fresh-toilet-cleaner', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '229'),
(231, NULL, '26', 'Coca Cola', 'coca-cola', 'veg', NULL, 'wvgreggsgfgsg', NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(232, NULL, '0', 'Coca Cola', 'coca-cola', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '231'),
(233, NULL, '26', 'Pepsi', 'pepsi', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(234, NULL, '0', 'Pepsi', 'pepsi', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '233'),
(235, NULL, '26', 'Mountain Dew', 'mountain-dew', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(236, NULL, '0', 'Mountain Dew', 'mountain-dew', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '235'),
(237, NULL, '26', 'Tropicana Fruit Juice', 'tropicana-fruit-juice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(238, NULL, '0', 'Tropicana Fruit Juice', 'tropicana-fruit-juice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '237'),
(239, NULL, '26', 'Sprite Soft Drink', 'sprite-soft-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(240, NULL, '0', 'Sprite Soft Drink', 'sprite-soft-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '239'),
(241, NULL, '26', 'Maaza Juice', 'maaza-juice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(242, NULL, '0', 'Maaza Juice', 'maaza-juice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '241'),
(243, NULL, '26', 'Real Fruit Juice', 'real-fruit-juice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(244, NULL, '0', 'Real Fruit Juice', 'real-fruit-juice', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '243'),
(245, NULL, '26', '7 Up Nimbooz Nimbooz Soft Drink', '7-up-nimbooz-nimbooz-soft-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(246, NULL, '0', '7 Up Nimbooz Nimbooz Soft Drink', '7-up-nimbooz-nimbooz-soft-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '245'),
(247, NULL, '54', 'Red Label Tea', 'red-label-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(248, NULL, '0', 'Red Label Tea', 'red-label-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '247'),
(249, NULL, '54', 'Tata Tea Gold', 'tata-tea-gold', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(250, NULL, '0', 'Tata Tea Gold', 'tata-tea-gold', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '249'),
(251, NULL, '54', 'Nescafe Classic Coffee', 'nescafe-classic-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(252, NULL, '0', 'Nescafe Classic Coffee', 'nescafe-classic-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '251'),
(253, NULL, '54', 'Taj Mahal Tea', 'taj-mahal-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(254, NULL, '0', 'Taj Mahal Tea', 'taj-mahal-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '253'),
(255, NULL, '54', 'Bru Instant Coffee', 'bru-instant-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(256, NULL, '0', 'Bru Instant Coffee', 'bru-instant-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '255'),
(257, NULL, '6,54', 'Bru Green Label Coffee', 'bru-green-label-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(258, NULL, '0', 'Bru Green Label Coffee', 'bru-green-label-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '257'),
(259, NULL, '54', '3 Roses Tea', '3-roses-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(260, NULL, '0', '3 Roses Tea', '3-roses-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '259'),
(261, NULL, '54', 'Tetly Green Tea', 'tetly-green-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(262, NULL, '0', 'Tetly Green Tea', 'tetly-green-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '261'),
(263, NULL, '54', 'Tata Agni Leaf', 'tata-agni-leaf', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(264, NULL, '0', 'Tata Agni Leaf', 'tata-agni-leaf', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '263'),
(265, NULL, '54', 'Lipton Loose Green Tea', 'lipton-loose-green-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(266, NULL, '0', 'Lipton Loose Green Tea', 'lipton-loose-green-tea', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '265'),
(267, NULL, '54', 'Nescafe Classic Coffee', 'nescafe-classic-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(268, NULL, '0', 'Nescafe Classic Coffee', 'nescafe-classic-coffee', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '267'),
(269, NULL, '56', 'Pro-Health Drink - Chocolate', 'pro-health-drink---chocolate', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(270, NULL, '0', 'Pro-Health Drink - Chocolate', 'pro-health-drink---chocolate', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '269'),
(271, NULL, '56', 'Health & Nutrition Drink', 'health-&-nutrition-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(272, NULL, '0', 'Health & Nutrition Drink', 'health-&-nutrition-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '271'),
(273, NULL, '56', 'Health Drink', 'health-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(274, NULL, '0', 'Health Drink', 'health-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '273'),
(275, NULL, '56', 'Glucose Based Beverage Mix', 'glucose-based-beverage-mix', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(276, NULL, '0', 'Glucose Based Beverage Mix', 'glucose-based-beverage-mix', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '275');
INSERT INTO `menu_item` (`id`, `category_id`, `category`, `itemName`, `itemSlug`, `vegType`, `itemShortDescription`, `itemDescription`, `itemFeaturedImage`, `regularPrice`, `salePrice`, `isActive`, `isSubscription`, `salesTax`, `maxItem`, `totalQty`, `brand`, `alert`, `reference`, `duration`, `nested`, `type`, `delivery`, `priority`, `branch`, `parent`) VALUES
(277, NULL, '56', 'MTR Badam Drink Mix', 'mtr-badam-drink-mix', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(278, NULL, '0', 'MTR Badam Drink Mix', 'mtr-badam-drink-mix', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '277'),
(279, NULL, '56', 'Lite Health & Nutrition Drink - Classic Malt', 'lite-health-&-nutrition-drink---classic-malt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(280, NULL, '0', 'Lite Health & Nutrition Drink - Classic Malt', 'lite-health-&-nutrition-drink---classic-malt', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '279'),
(281, NULL, '56', 'Cadburry BournVita Health Drink', 'cadburry-bournvita-health-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(282, NULL, '0', 'Cadburry BournVita Health Drink', 'cadburry-bournvita-health-drink', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '281'),
(283, NULL, '56', 'Pediasure Complete & Balanced', 'pediasure-complete-&-balanced', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(284, NULL, '0', 'Pediasure Complete & Balanced', 'pediasure-complete-&-balanced', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '283'),
(285, NULL, '0', 'Tata Tea Chakra Gold Premium', 'tata-tea-chakra-gold-premium', 'veg', NULL, NULL, NULL, 0, '0', 2, '1', '18', NULL, NULL, '1', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(286, NULL, '0', 'Tata Tea Chakra Gold Premium', 'tata-tea-chakra-gold-premium', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '285'),
(287, NULL, '56', 'Complan Refill, Kesar Badam,', 'complan-refill,-kesar-badam,', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(288, NULL, '0', 'Complan Refill, Kesar Badam,', 'complan-refill,-kesar-badam,', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '287'),
(289, NULL, '28', 'Dove Hair Fall Rescue Shampoo', 'dove-hair-fall-rescue-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(290, NULL, '0', 'Dove Hair Fall Rescue Shampoo', 'dove-hair-fall-rescue-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '289'),
(291, NULL, '28', 'Dabur Vatika Ayurvedic Shampoo', 'dabur-vatika-ayurvedic-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(292, NULL, '0', 'Dabur Vatika Ayurvedic Shampoo', 'dabur-vatika-ayurvedic-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '291'),
(293, NULL, '28', 'Loreal Paris Total Repair', 'loreal-paris-total-repair', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(294, NULL, '0', 'Loreal Paris Total Repair', 'loreal-paris-total-repair', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '293'),
(295, NULL, '28', 'Tresemme Keratin Smooth Shampoo', 'tresemme-keratin-smooth-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '2', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(296, NULL, '0', 'Tresemme Keratin Smooth Shampoo', 'tresemme-keratin-smooth-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '295'),
(297, NULL, '28', 'Tresemme Keratin Smooth Shampoo', 'tresemme-keratin-smooth-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '6', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(298, NULL, '0', 'Tresemme Keratin Smooth Shampoo', 'tresemme-keratin-smooth-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '297'),
(299, NULL, '28', 'Dove Hair Fall Rescue Shampoo', 'dove-hair-fall-rescue-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '6', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(300, NULL, '0', 'Dove Hair Fall Rescue Shampoo', 'dove-hair-fall-rescue-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '299'),
(301, NULL, '28', 'Head & shoulders Anti-Dandruff Shampoo - Anti Hairfall', 'head-&-shoulders-anti-dandruff-shampoo---anti-hairfall', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '6', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(302, NULL, '0', 'Head & shoulders Anti-Dandruff Shampoo - Anti Hairfall', 'head-&-shoulders-anti-dandruff-shampoo---anti-hairfall', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '301'),
(303, NULL, '28', 'Parachute Advanced Aloe Vera Enriched Coconut Hair Oil', 'parachute-advanced-aloe-vera-enriched-coconut-hair-oil', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '6', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(304, NULL, '0', 'Parachute Advanced Aloe Vera Enriched Coconut Hair Oil', 'parachute-advanced-aloe-vera-enriched-coconut-hair-oil', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '303'),
(305, NULL, '28', 'Panteen Silky Smooth Shampoo', 'panteen-silky-smooth-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', NULL, NULL, '6', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(306, NULL, '0', 'Panteen Silky Smooth Shampoo', 'panteen-silky-smooth-shampoo', 'veg', NULL, NULL, NULL, 0, '0', 1, '1', '18', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '305'),
(307, NULL, '22', 'Ananda Premium Paneer', 'ananda-premium-paneer', 'veg', 'N/A', 'Ananda paneer prem. Is untouched by hand and is specially prepared for different types of indian recipes like shahi paneer, paneer bhurji, and mughlai paneer. Ananda paneer is full of protein for a balanced diet and prevents from various bones diseases.', NULL, 0, '0', 2, '1', '5', NULL, NULL, '1', '10', '', '0', '0', '0', 'slot', '0', '999', '0'),
(308, NULL, '0', 'Ananda Premium Paneer', 'ananda-premium-paneer', 'veg', 'N/A', 'Ananda paneer prem. Is untouched by hand and is specially prepared for different types of indian recipes like shahi paneer, paneer bhurji, and mughlai paneer. Ananda paneer is full of protein for a balanced diet and prevents from various bones diseases.', NULL, 0, '0', 1, '1', '5', '10', '0', '0', '10', '', '0', '0', '0', 'slot', NULL, '0', '307');

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `notificationFor` varchar(10) NOT NULL DEFAULT '0',
  `dateTime` varchar(50) NOT NULL,
  `data` varchar(80) NOT NULL DEFAULT '0',
  `message` longtext NOT NULL,
  `branch` varchar(500) DEFAULT '900',
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `ref`, `notificationFor`, `dateTime`, `data`, `message`, `branch`, `image`) VALUES
(1, '0', '6', '25-01-2021 at 17:02 PM', '0', 'big indian sale', '999', ''),
(2, '1', '4', '25-01-2021 at 17:06 PM', '20', 'veg', '999', ''),
(3, '2', '10', '25-01-2021 at 17:08 PM', '1, 2, 3, 4', 'brands', '999', ''),
(4, '3', '6', '25-01-2021 at 17:09 PM', '0', 'hjjhdtdg', '999', ''),
(5, '4', '5', '25-01-2021 at 17:11 PM', '38, 40', 'apple', '999', ''),
(6, '5', '5', '25-01-2021 at 17:14 PM', '24', 'tea', '999', ''),
(7, '6', '6', '25-01-2021 at 17:17 PM', '0', 'apple', '999', ''),
(8, '7', '6', '25-01-2021 at 17:18 PM', '0', 'apple', '999', ''),
(9, '8', '6', '25-01-2021 at 17:22 PM', '0', 'axa\r\n', '999', ''),
(10, '9', '5', '25-01-2021 at 17:26 PM', '20', 'masala &atta', '999', ''),
(11, '10', '5', '25-01-2021 at 17:48 PM', '20', 'rice', '999', ''),
(12, '11', '5', '25-01-2021 at 17:49 PM', '20', 'atta', '999', ''),
(13, '12', '5', '25-01-2021 at 17:51 PM', '20', 'atta', '999', ''),
(14, '13', '5', '25-01-2021 at 17:52 PM', '20', 'rice', '999', ''),
(15, '14', '10', '25-01-2021 at 17:57 PM', '2', 'rric', '999', ''),
(16, '15', '10', '25-01-2021 at 17:57 PM', '2', 'jhjvjhyfy', '999', ''),
(17, '16', '5', '27-01-2021 at 13:33 PM', '4, 20', 'rice', '999', ''),
(18, '17', '5', '27-01-2021 at 13:33 PM', '4, 20', 'rice', '999', ''),
(19, '18', '4', '27-01-2021 at 13:34 PM', '22', 'wefwe', '999', ''),
(20, '19', '6', '27-01-2021 at 18:23 PM', '0', 'egg', '999', ''),
(21, '20', '6', '27-01-2021 at 18:24 PM', '0', 'veg', '999', ''),
(22, '21', '6', '27-01-2021 at 18:32 PM', '0', 'quqck', '999', ''),
(23, '22', '6', '28-01-2021 at 10:02 AM', '0', 'mos', '999', ''),
(24, '23', '4', '30-01-2021 at 11:43 AM', '20', 'Test Offer', '999', ''),
(25, '24', '4', '30-01-2021 at 11:43 AM', '20', 'Hello', '999', 'banner600aaddb130f9.png'),
(26, '25', '4', '30-01-2021 at 11:45 AM', '22', 'hello', '999', 'banner600aaddb130f9.png'),
(27, '26', '6', '01-02-2021 at 19:36 PM', '0', 'Hurry!', '999', ''),
(28, '27', '6', '01-02-2021 at 19:37 PM', '0', 'hhhhhhh', '999', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification_history`
--

CREATE TABLE `notification_history` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0' COMMENT '0 for pending,1 for viewed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_history`
--

INSERT INTO `notification_history` (`id`, `ref`, `user`, `status`) VALUES
(1, '0', '5', '1'),
(2, '1', '5', '999'),
(3, '2', '5', '0'),
(4, '3', '1', '1'),
(5, '4', '5', '1'),
(6, '5', '5', '1'),
(7, '6', '5', '1'),
(8, '7', '5', '1'),
(9, '8', '5', '1'),
(10, '9', '5', '1'),
(11, '10', '5', '1'),
(12, '11', '5', '0'),
(13, '12', '5', '1'),
(14, '13', '1', '1'),
(15, '14', '5', '0'),
(16, '15', '1', '1'),
(17, '16', '1', '1'),
(18, '17', '1', '1'),
(19, '18', '1', '1'),
(20, '19', '5', '0'),
(21, '20', '5', '0'),
(22, '21', '5', '0'),
(23, '22', '5', '1'),
(24, '23', '1', '0'),
(25, '24', '1', '1'),
(26, '25', '1', '1'),
(27, '26', '9', '0'),
(28, '27', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_item_extras`
--

CREATE TABLE `order_item_extras` (
  `id` int(11) NOT NULL,
  `order_item_d` int(11) DEFAULT NULL,
  `typeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_extras`
--

CREATE TABLE `package_extras` (
  `id` int(11) NOT NULL,
  `extra_package_id` int(11) DEFAULT NULL,
  `typeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(10000) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `parent` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0',
  `latitude` varchar(200) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`id`, `name`, `address`, `contact`, `parent`, `status`, `latitude`, `longitude`) VALUES
(1, 'Udupi', 'dfasdfasdf', '9876543210', '', '0', '13.3369669', '74.7366206');

-- --------------------------------------------------------

--
-- Table structure for table `price_variation`
--

CREATE TABLE `price_variation` (
  `id` int(11) NOT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `variationName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(250) COLLATE utf8_unicode_ci DEFAULT '',
  `price` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `membership_price` varchar(200) COLLATE utf8_unicode_ci DEFAULT '-',
  `subscription` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `priority` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `mrp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `maxItem` varchar(100) COLLATE utf8_unicode_ci DEFAULT '10',
  `status` int(11) DEFAULT '0',
  `minItem` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `reference` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `sku` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `net_weight` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `loyalty` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `cost` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `price_variation`
--

INSERT INTO `price_variation` (`id`, `menu_item_id`, `variationName`, `barcode`, `price`, `membership_price`, `subscription`, `priority`, `mrp`, `stock`, `maxItem`, `status`, `minItem`, `reference`, `sku`, `hsn`, `featured_image`, `weight`, `net_weight`, `loyalty`, `cost`) VALUES
(1, 1, '500 g', '', '4', '10', '0', '1', '-50', '0', '10', 0, '1', 'x', '', '0', '', '0.5', '0', '0', 140),
(2, 1, '1 Kg', '', '2', '10', '0', '1', '0', '0', '10', 0, '1', 'x', '', '0', '', '1', '0', '0', 90),
(3, 2, '1 Kg', '0', '2', '5', '0', '0', '0', '74', '10', 0, '1', 'x', '', '0', '', '1', '0', '0', 0),
(4, 3, '1 Kg', '0', '30', '15', '0', '0', '45', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(5, 5, '125 g (Pack of 6)', '0', '229.50', '0', '0', '0', '229.50', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 200),
(6, 7, '1 Kg', '', '38', '32', '0', '0', '40', '500', '10', 0, '1', 'x', '', '0', '', '1', '0', '0', 40),
(7, 9, '84gms', '0', '5', '0', '0', '0', '10', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 5),
(8, 15, '1 Kg', '0', '200', '198', '0', '1', '220', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 195),
(9, 4, '1 Kg', '0', '335', '332', '0', '0', '400', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 330),
(10, 6, '125 g (Pack of 6)', '0', '195', '192', '0', '0', '200', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 200),
(11, 10, '82gms', '0', '9', '7', '0', '0', '10', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 10),
(12, 12, '1 Kg', '0', '190', '170', '0', '0', '200', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 200),
(13, 14, '1 Kg', '0', '28', '26', '0', '0', '30', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(14, 16, '1 Kg', '0', '230', '220', '0', '0', '250', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 250),
(15, 17, '1 Kg', '0', '55', '53', '0', '0', '60', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(16, 19, '1 Kg', '0', '30', '29', '0', '0', '35', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 32),
(17, 20, '1 Kg', '0', '32', '30', '0', '0', '35', '489', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 35),
(18, 21, '1 Kg', '0', '148', '145', '0', '0', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(19, 22, '1 Kg', '0', '148', '145', '0', '0', '150', '378', '10', 0, '1', 'x', '', '0', '', '0', '0', '10', 150),
(20, 23, '1 Kg', '0', '55', '52', '0', '0', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(21, 24, '1 Kg', '0', '55', '52', '0', '0', '60', '390', '10', 0, '1', 'x', '', '0', '', '0', '0', '10', 60),
(22, 25, '1 Kg', '0', '55', '50', '0', '0', '60', '439', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(23, 27, '1 Kg', '0', '28', '25', '0', '0', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(24, 28, '500gms', '0', '28', '25', '0', '0', '30', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(25, 29, '1 Kg', '0', '135', '132', '0', '0', '140', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 140),
(26, 30, '1 Kg', '0', '135', '132', '0', '0', '140', '493', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 140),
(27, 31, '500gms', '0', '25', '22', '0', '1', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(28, 32, '500gms', '0', '28', '25', '0', '0', '30', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(29, 33, '500gms', '0', '57', '55', '0', '0', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(30, 34, '500gms', '0', '57', '55', '0', '0', '60', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(31, 35, '1 Kg', '0', '132', '130', '0', '0', '135', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 135),
(32, 36, '1 Kg', '0', '132', '130', '0', '0', '135', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 135),
(33, 37, '1 Kg', '0', '118', '115', '0', '1', '120', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 120),
(34, 39, '1 Kg', '0', '98', '95', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(35, 40, '1 Kg', '0', '98', '95', '0', '0', '100', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(36, 41, '1 Kg', '', '100', '98', '0', '1', '110', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 110),
(37, 42, '1 Kg', '0', '100', '98', '0', '0', '110', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 110),
(38, 43, '1 Kg', '0', '122', '120', '0', '1', '125', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 125),
(39, 44, '1 Kg', '0', '122', '120', '0', '0', '125', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 125),
(40, 45, '1 Kg', '0', '125', '120', '0', '0', '130', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 130),
(41, 46, '1 Kg', '0', '125', '120', '0', '1', '130', '500', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 130),
(42, 47, '1 Kg', '0', '150', '148', '0', '1', '154', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 154),
(43, 48, '1 Kg', '0', '150', '148', '0', '1', '154', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 154),
(44, 49, '1kg', '0', '100', '98', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(45, 50, '1 Kg', '0', '95', '92', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(46, 51, '1 Kg', '0', '85', '82', '0', '1', '90', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 90),
(47, 53, '1 Kg', '0', '95', '92', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(48, 54, '1 Kg', '0', '95', '92', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(49, 55, '1 Kg', '0', '115', '110', '0', '1', '117', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 117),
(50, 56, '1 Kg', '0', '45', '0', '0', '0', '45', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 45),
(51, 57, '1 Kg', '0', '55', '0', '0', '1', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(52, 59, '500gms', '0', '450', '0', '0', '0', '458', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(53, 58, '1 Kg', '0', '55', '52', '0', '1', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(54, 61, '1 Kg', '0', '48', '45', '0', '1', '50', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 50),
(55, 63, '1 Kg', '0', '35', '32', '0', '1', '40', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 40),
(56, 65, '1 Kg', '0', '100', '98', '0', '1', '110', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 110),
(57, 67, '1 Kg', '0', '118', '115', '0', '1', '120', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 120),
(58, 69, '1 Kg', '0', '335', '334', '0', '0', '400', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 400),
(59, 71, '1 Kg', '0', '250', '248', '0', '1', '300', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 300),
(60, 73, '1 Kg', '0', '265', '262', '0', '1', '268', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 268),
(61, 75, '1 Kg', '0', '695', '693', '0', '0', '700', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 700),
(62, 77, '1 Kg', '0', '500', '0', '0', '0', '500', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 500),
(63, 79, '1 Kg', '0', '332', '330', '0', '0', '350', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 350),
(64, 81, '1 Kg', '0', '500', '500', '0', '1', '500', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 500),
(65, 83, '1 Kg', '0', '128', '125', '0', '1', '130', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 130),
(66, 85, '1 Kg', '0', '115', '112', '0', '0', '120', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 120),
(67, 87, '1 Kg', '0', '158', '155', '0', '1', '160', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 160),
(68, 89, '500gms', '0', '85', '0', '0', '1', '90', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 90),
(69, 91, '500gms', '0', '120', '118', '0', '0', '120', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 120),
(70, 93, '500gms', '0', '98', '95', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(71, 95, '500gms', '0', '120', '0', '0', '1', '120', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 120),
(72, 97, '500gms', '0', '95', '90', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(73, 99, '500gms', '0', '885', '882', '0', '1', '900', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 900),
(74, 101, '500gms', '0', '148', '145', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(75, 103, '500gms', '0', '95', '92', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(76, 105, '1 Kg', '0', '25', '30', '0', '0', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(77, 107, '1 Kg', '0', '20', '0', '0', '0', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(78, 109, '1 Kg', '0', '15', '0', '0', '1', '15', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 15),
(79, 111, '1 Kg', '0', '20', '0', '0', '1', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(80, 113, '1 Kg', '0', '45', '42', '0', '1', '50', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 50),
(81, 115, '1 Kg', '0', '65', '62', '0', '0', '70', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 70),
(82, 117, '1 Kg', '0', '200', '0', '0', '1', '200', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 200),
(83, 119, '1 Kg', '0', '92', '90', '0', '0', '95', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 95),
(84, 121, '500ml', '0', '25', '0', '0', '1', '25', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 25),
(85, 123, '1 Litre', '0', '60', '58', '0', '1', '63', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 63),
(86, 125, '500ml', '0', '30', '28', '0', '1', '33', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 33),
(87, 127, '1 Litre', '0', '84', '0', '0', '1', '84', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 84),
(88, 129, '400gms', '0', '30', '', '0', '1', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(89, 131, '400gms', '0', '40', '0', '0', '1', '40', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 40),
(90, 133, '400gms', '0', '40', '0', '0', '1', '40', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 40),
(91, 135, '200gms', '0', '35', '32', '0', '0', '40', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 40),
(92, 137, '200gms', '0', '35', '31', '0', '0', '40', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 40),
(93, 139, '400gms', '0', '30', '28', '0', '1', '35', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 35),
(94, 141, '300gms', '0', '30', '0', '0', '1', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(95, 143, '300gms', '0', '80', '0', '0', '0', '80', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 80),
(96, 145, '25gms', '0', '30', '28', '0', '0', '35', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 35),
(97, 147, '150gms', '0', '50', '48', '0', '0', '55', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 55),
(98, 149, '25gms', '0', '35', '0', '0', '0', '35', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 35),
(99, 151, '25gms', '0', '32', '30', '0', '0', '35', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 35),
(100, 153, '150gms', '0', '44', '42', '0', '1', '44', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 44),
(101, 155, '250gms', '0', '98', '95', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(102, 157, '250gms', '0', '145', '140', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(103, 159, '120gms', '0', '12', '10', '0', '1', '15', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 15),
(104, 161, '120gms', '0', '12', '10', '0', '1', '15', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 15),
(105, 163, '250gms', '0', '145', '140', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(106, 165, '200gms', '0', '62', '60', '0', '0', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(107, 167, '45gms', '0', '12', '10', '0', '1', '15', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 15),
(108, 169, '40gms', '0', '10', '8', '0', '1', '10', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 10),
(109, 171, '200gms', '0', '148', '145', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(110, 173, '120gms', '0', '25', '22', '0', '1', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(111, 175, '250gms', '0', '19', '16', '0', '1', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(112, 177, '150gms', '0', '22', '20', '0', '1', '25', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 25),
(113, 179, '100gms', '0', '35', '30', '0', '1', '40', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 40),
(114, 181, '150gms', '0', '18', '15', '0', '1', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(115, 183, '200gms', '0', '28', '25', '0', '0', '30', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 30),
(116, 185, '150gms', '0', '32', '30', '0', '1', '35', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 35),
(117, 187, '100gms', '0', '18', '16', '0', '0', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(118, 189, '1kg', '0', '105', '100', '0', '1', '110', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 110),
(119, 191, '1 Kg', '0', '58', '55', '0', '1', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 60),
(120, 193, '1 Kg', '0', '48', '45', '0', '1', '50', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 50),
(121, 195, '1 Kg', '0', '118', '115', '0', '1', '125', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 125),
(122, 197, '1 Kg', '0', '100', '100', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(123, 199, '1 Kg', '0', '98', '95', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(124, 201, '1 Kg', '0', '98', '95', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(125, 20, '500gms', '0', '12', '10', '0', '1', '15', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 15),
(126, 24, '500gms', '0', '28', '25', '0', '1', '30', '-2', '10', 0, '1', 'x', '', '0', '', '0', '0', '23', 30),
(127, 203, '750ml', '0', '105', '100', '0', '1', '110', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 110),
(128, 203, '500ml', '', '55', '50', '0', '1', '60', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '5', 60),
(129, 205, '250gms', '0', '18', '15', '0', '1', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 20),
(130, 207, '700gms', '0', '78', '75', '0', '1', '80', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '3', 80),
(131, 209, '1Litre', '0', '140', '138', '0', '1', '142', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 142),
(132, 211, '500gms', '0', '48', '45', '0', '1', '50', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 50),
(133, 213, '750ml', '0', '120', '118', '0', '1', '125', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 125),
(134, 215, '1 Litre', '0', '165', '160', '0', '1', '168', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '3', 168),
(135, 217, '1 Litre', '0', '165', '160', '0', '1', '168', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 168),
(136, 219, '1 Litre', '0', '132', '130', '0', '1', '135', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '4', 135),
(137, 221, '1 Litre', '0', '130', '125', '0', '1', '145', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 145),
(138, 223, '500ml', '0', '72', '70', '0', '1', '80', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 80),
(139, 225, '500ml', '0', '83', '80', '0', '1', '85', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 85),
(140, 227, '500ml', '0', '160', '155', '0', '0', '165', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '1', 165),
(141, 229, '750ml', '0', '80', '75', '0', '1', '85', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 85),
(142, 231, '300ml', '', '0', '0', '0', '1', '0', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '1', 45),
(143, 233, '1 Litre', '0', '145', '150', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '4', 140),
(144, 235, '1 Litre', '0', '148', '145', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(145, 237, '1 Litre', '0', '068', '65', '0', '1', '70', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 70),
(146, 239, '1 Litre', '0', '42', '40', '0', '1', '45', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '1', 45),
(147, 241, '1 Litre', '0', '62', '60', '0', '1', '65', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 65),
(148, 243, '1 Litre', '0', '95', '90', '0', '1', '100', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 100),
(149, 245, '350ml', '0', '19', '15', '0', '1', '20', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 20),
(150, 247, '1 Kg', '0', '368', '360', '0', '1', '370', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 370),
(151, 249, '1 Kg', '0', '45', '42', '0', '1', '46', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 46),
(152, 251, '1 Kg', '0', '448', '445', '0', '1', '500', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 500),
(153, 253, '1 Kg', '0', '182', '180', '0', '1', '185', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '3', 185),
(154, 255, '200gms', '0', '130', '128', '0', '1', '136', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 136),
(155, 257, '1 Kg', '0', '190', '185', '0', '1', '200', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 200),
(156, 259, '1 Kg', '0', '590', '585', '0', '1', '600', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 600),
(157, 261, '500gms', '0', '335', '330', '0', '1', '400', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 400),
(158, 24, '5 kg', '0', '60', '0', '0', '0', '70', '0', '10', 1, '1', 'x', '113232', '0', '', '0', '0', '0', 40),
(159, 263, '500gms', '0', '345', '335', '0', '1', '350', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 350),
(160, 24, '6 kg', '0', '340', '0', '0', '0', '345', '0', '10', 1, '1', 'x', '454634', '0', '', '0', '0', '0', 0),
(161, 265, '100gms', '0', '145', '140', '0', '1', '150', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 150),
(162, 267, '200gms', '0', '165', '160', '0', '1', '170', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 170),
(163, 269, '500gms', '0', '200', '198', '0', '1', '202', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 202),
(164, 271, '500gms', '0', '228', '225', '0', '1', '230', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 230),
(165, 273, '1 Kg', '0', '118', '115', '0', '1', '120', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 120),
(166, 275, '1 Kg', '0', '245', '240', '0', '1', '250', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 250),
(167, 277, '1 Kg', '0', '440', '440', '0', '1', '450', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 450),
(168, 279, '1 Kg', '0', '245', '240', '0', '1', '250', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 250),
(169, 281, '1 Kg', '0', '195', '190', '0', '1', '200', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 200),
(170, 283, '1 Kg', '0', '645', '642', '0', '1', '650', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 650),
(171, 285, '1 Kg', '0', '338', '335', '', '1', '400', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 400),
(172, 287, '500gms', '0', '245', '240', '', '1', '250', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '2', 250),
(173, 289, '1 Litre', '0', '505', '500', '', '1', '510', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 510),
(174, 291, '100ml', '0', '202', '200', '', '1', '206', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 206),
(175, 291, '640ml', '0', '702', '700', '', '1', '706', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '5', 706),
(176, 293, '1 Litre', '0', '668', '660', '', '1', '700', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '9', 700),
(177, 295, '1 Litre', '0', '518', '515', '', '1', '520', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 520),
(178, 24, '2 Kg', '0', '50', '40', '2', '0', '60', '0', '10', 1, '1', 'x', '', '0', '', '2', '2', '0', 0),
(179, 24, '1kg', '0', '40', '41', '2', '0', '50', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(180, 24, '1kg', '', '0', '0', '2', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(181, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(182, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(183, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(184, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(185, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(186, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(187, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(188, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(189, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(190, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(191, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(192, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(193, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(194, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(195, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(196, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(197, 24, '1kg', '', '0', '0', '2kg', '0', '0', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 0),
(198, 20, '5 kg', '0', '32', '0', '', '0', '34', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 22),
(199, 20, '10', '0', '320', '0', '', '0', '340', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 300),
(200, 20, '6 kg', '0', '180', '0', '', '0', '200', '0', '10', 1, '1', 'x', '', '0', '', '0', '0', '0', 100),
(201, 297, '1 Litre', '0', '584', '580', '', '1', '585', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '3', 585),
(202, 297, '500ml', '', '284', '280', '', '1', '285', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '3', 285),
(203, 299, '1 Litre', '0', '566', '560', '', '1', '569', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 569),
(204, 301, '650ml', '0', '403', '400', '', '1', '405', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '5', 405),
(205, 303, '250ml', '0', '105', '100', '', '1', '108', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '4', 108),
(206, 303, '150ml', '', '73', '70', '', '1', '75', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '4', 75),
(207, 305, '1 Litre', '0', '658', '660', '', '1', '660', '0', '10', 0, '1', 'x', '', '0', '', '0', '0', '0', 660),
(208, 307, 'Ananda Premium Paneer', '0', '75', '73', '1', '0', '80', '0', '2', 0, '1', 'x', 'BG2010', '0406', '', '0', '200 g', '0', 67);

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promoCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `discountType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discountValue` double NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `usageType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usageLimit` int(11) NOT NULL,
  `promocodeType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promocodeFor` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `minOrderAmountValidation` tinyint(1) NOT NULL,
  `newUsersOnly` tinyint(1) NOT NULL,
  `minOrderAmount` double NOT NULL,
  `items` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sponser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0 for discount, 1 for Cashback',
  `max_discount` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `max_discount_amount` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `promoFor` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo_usage`
--

CREATE TABLE `promo_usage` (
  `id` int(11) NOT NULL,
  `customer_d` int(11) DEFAULT NULL,
  `promo_d` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `gst` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurantName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `restaurantSlug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `restaurantAddress` longtext COLLATE utf8_unicode_ci,
  `restaurantLocation` longtext COLLATE utf8_unicode_ci,
  `restaurantLat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurantLong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primaryMobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondaryMobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primaryEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondaryEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vegType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `openTime` time DEFAULT NULL,
  `closeTime` time DEFAULT NULL,
  `isOpen` tinyint(1) NOT NULL,
  `isFeatured` tinyint(1) NOT NULL,
  `taxType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax` double NOT NULL,
  `serviceFee` double NOT NULL,
  `popularity` double NOT NULL,
  `minOrderAmount` double NOT NULL,
  `deliveryCharge` double NOT NULL,
  `restaurantTerms` longtext COLLATE utf8_unicode_ci,
  `iconImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderType` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `privacy` longtext COLLATE utf8_unicode_ci,
  `countryCode` varchar(100) COLLATE utf8_unicode_ci DEFAULT '+91',
  `currencyFormat` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT 'Rs',
  `dashboardColor` varchar(100) COLLATE utf8_unicode_ci DEFAULT '#324981',
  `sms` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'GROCBAY',
  `apiKey` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firebase` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  `featured` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `topSellingItem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discountItem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_label` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'Featured Item',
  `discount_label` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'Featured Item',
  `nested` int(11) NOT NULL DEFAULT '0',
  `wallet` longtext COLLATE utf8_unicode_ci,
  `returns` longtext COLLATE utf8_unicode_ci,
  `refund` longtext COLLATE utf8_unicode_ci,
  `facebook_url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `minimum_order_amount` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `play_store` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apple_store` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slot` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_label` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `defaultImage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allowoutofstock` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_format` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_two` longtext COLLATE utf8_unicode_ci,
  `category_two_label` longtext COLLATE utf8_unicode_ci,
  `category_three` longtext COLLATE utf8_unicode_ci,
  `category_three_label` longtext COLLATE utf8_unicode_ci,
  `smsgateway` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `gst`, `restaurantName`, `restaurantSlug`, `description`, `restaurantAddress`, `restaurantLocation`, `restaurantLat`, `restaurantLong`, `primaryMobile`, `secondaryMobile`, `primaryEmail`, `secondaryEmail`, `vegType`, `openTime`, `closeTime`, `isOpen`, `isFeatured`, `taxType`, `tax`, `serviceFee`, `popularity`, `minOrderAmount`, `deliveryCharge`, `restaurantTerms`, `iconImage`, `bannerImage`, `orderType`, `privacy`, `countryCode`, `currencyFormat`, `dashboardColor`, `sms`, `apiKey`, `firebase`, `featured`, `discount`, `topSellingItem`, `discountItem`, `featured_label`, `discount_label`, `nested`, `wallet`, `returns`, `refund`, `facebook_url`, `instagram_url`, `youtube_url`, `twitter_url`, `minimum_order_amount`, `play_store`, `apple_store`, `slot`, `category`, `category_label`, `defaultImage`, `allowoutofstock`, `number_format`, `category_two`, `category_two_label`, `category_three`, `category_three_label`, `smsgateway`) VALUES
(999, '1234', 'Grocbay', 'grocbay', '', 'Dummy Address', 'Udupi', '13.3393679', '74.7411707', '1234567890', '1234567890', 'groc@admin.com', NULL, 'veg', '18:04:51', '18:04:51', 1, 0, 'inclusive', 12, 10, 0, 0, 0, '', NULL, NULL, '[]', '', '+91', '₹', NULL, 'APPINS', '331458AXE7M45zyo5edb8dd2P1', '', '22, 24', '24, 25, 32, 34', NULL, NULL, 'Featured Item', 'Discounted Item', 1, '', '', '', '', '', '', '', '0', '', '', '5', '20, 60, 62, 64', 'Online Deals', NULL, '1', '0', '4, 20, 22, 24, 26', 'Groceries and Staples', '26, 30, 62, 64', 'Vegetables and Fruits', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_ratings`
--

CREATE TABLE `restaurant_ratings` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ratings` int(11) NOT NULL,
  `reviews` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_logs`
--

CREATE TABLE `return_logs` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `itemId` varchar(100) DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT '0' COMMENT '0 for not done 1 for done',
  `itemName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_lists`
--

CREATE TABLE `shopping_lists` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `listname_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `variation` varchar(100) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_lists`
--

INSERT INTO `shopping_lists` (`id`, `customer_id`, `item_id`, `listname_id`, `qty`, `variation`) VALUES
(1, 2, 20, 1, 0, '17'),
(2, 1, 24, 16, 0, '21'),
(3, 1, 22, 15, 0, '19'),
(4, 1, 22, 16, 0, '19'),
(5, 1, 22, 17, 0, '19'),
(6, 1, 24, 17, 0, '21'),
(7, 1, 24, 18, 0, '21'),
(8, 1, 24, 15, 0, '21'),
(9, 1, 22, 18, 0, '19'),
(10, 1, 25, 18, 0, '22'),
(11, 1, 34, 18, 0, '30'),
(12, 1, 25, 19, 0, '22'),
(13, 1, 22, 19, 0, '19'),
(14, 1, 24, 19, 0, '21'),
(15, 6, 22, 20, 0, '19'),
(16, 6, 24, 20, 0, '21'),
(17, 1, 22, 21, 0, '19');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_lists_name`
--

CREATE TABLE `shopping_lists_name` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_lists_name`
--

INSERT INTO `shopping_lists_name` (`id`, `customer_id`, `name`) VALUES
(1, 2, 'Weekly Groceries'),
(20, 6, 'Test 1');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `start` varchar(100) DEFAULT NULL,
  `end` varchar(100) DEFAULT NULL,
  `orders` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `start`, `end`, `orders`, `date`, `area`) VALUES
(8, '7:00 PM', '10:30 PM', '60', '29-01-2021', '1'),
(7, '12:30 PM', '7:00 PM', '50', '29-01-2021', '1'),
(6, '11:00 AM', '2:30 PM', '150', '29-01-2021', '1'),
(5, '5:30 AM', '11:00 AM', '100', '29-01-2021', '1'),
(9, '10:30 PM', '11:00 PM', '60', '29-01-2021', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slotstatus`
--

CREATE TABLE `slotstatus` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT '',
  `status` varchar(100) DEFAULT '0',
  `start` varchar(100) DEFAULT '',
  `end` varchar(100) DEFAULT '',
  `area` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `registration_user` varchar(100) NOT NULL,
  `registration_delivery` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `order_u` varchar(100) NOT NULL,
  `order_a` varchar(100) NOT NULL,
  `recciving` varchar(100) NOT NULL,
  `delivery_u` varchar(100) NOT NULL,
  `delivery_d` varchar(100) NOT NULL,
  `delivered` varchar(100) NOT NULL,
  `completed` varchar(100) NOT NULL,
  `cancelled` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `registration_user`, `registration_delivery`, `otp`, `order_u`, `order_a`, `recciving`, `delivery_u`, `delivery_d`, `delivered`, `completed`, `cancelled`) VALUES
(1, 'ddd', '', '5f328337d6fc0504505a8ef8', '5f3ca657d6fc057ce829a089', '5f59c99e4b71654f2634404f', '   ', '5f3ca603d6fc0563a6411ba6 ', '', '5f3ca539d6fc050a872ab28e', '5f3ca592d6fc054855628884', '5f3ca5c5d6fc0507026cbbcd');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `addedBy` varchar(100) DEFAULT NULL,
  `ref` varchar(200) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `mode` varchar(100) DEFAULT NULL COMMENT '0 for in 1 for out',
  `branch` varchar(100) DEFAULT '999'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `addedBy`, `ref`, `date`, `description`, `time`, `mode`, `branch`) VALUES
(1, 'Admin', '10000', '14-01-2021', 'TGGVGJHV', '04:10 PM', '0', '999'),
(2, 'Admin', '10001', '14-01-2021', 'HBHJBKJBKJBKJ', '04:11 PM', '0', '999'),
(3, 'Admin', '10002', '14-01-2021', 'GHJKJNNK', '04:12 PM', '0', '999'),
(4, 'Admin', '10003', '14-01-2021', 'KERPOIEWSW', '04:14 PM', '0', '999'),
(5, 'Admin', '10004', '14-01-2021', 'KERPOIEWSW', '04:14 PM', '0', '999'),
(6, 'Admin', '10005', '14-01-2021', 'added from csv', '04:15 PM', '0', '999'),
(7, 'Admin', '10006', '14-01-2021', 'yhgyh', '04:20 PM', '0', '999'),
(8, 'Admin', '10007', '20-01-2021', 'added from csv', '02:51 PM', '0', '999'),
(9, 'Admin', '10008', '27-01-2021', 'abc', '12:37 PM', '0', '999'),
(10, 'Admin', '10009', '27-01-2021', 'abc', '12:38 PM', '1', '999');

-- --------------------------------------------------------

--
-- Table structure for table `stock_logs`
--

CREATE TABLE `stock_logs` (
  `id` int(11) NOT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `stockId` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_logs`
--

INSERT INTO `stock_logs` (`id`, `qty`, `ref`, `stockId`, `type`) VALUES
(1, '15', '10000', '3', '1'),
(2, '20', '10001', '3', '1'),
(3, '50', '10002', '3', '1'),
(4, '10', '10004', '3', '1'),
(5, '50', '10005', '2', '0'),
(6, '74', '10006', '3', '0'),
(7, '500', '10007', '9', '0'),
(8, '500', '10007', '10', '0'),
(9, '500', '10007', '6', '0'),
(10, '500', '10007', '11', '0'),
(11, '500', '10007', '12', '0'),
(12, '500', '10007', '13', '0'),
(13, '500', '10007', '14', '0'),
(14, '500', '10007', '15', '0'),
(15, '500', '10007', '17', '0'),
(16, '500', '10007', '19', '0'),
(17, '500', '10007', '21', '0'),
(18, '500', '10007', '22', '0'),
(19, '500', '10007', '24', '0'),
(20, '500', '10007', '26', '0'),
(21, '500', '10007', '28', '0'),
(22, '500', '10007', '30', '0'),
(23, '500', '10007', '32', '0'),
(24, '500', '10007', '33', '0'),
(25, '500', '10007', '35', '0'),
(26, '500', '10007', '37', '0'),
(27, '500', '10007', '39', '0'),
(28, '500', '10007', '41', '0'),
(29, '5', '10008', '19', '0'),
(30, '5', '10009', '22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stock_return`
--

CREATE TABLE `stock_return` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `customerId` varchar(100) DEFAULT NULL,
  `itemId` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `deliveryTime` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `deliveryBoy` varchar(100) DEFAULT NULL,
  `assignedBy` varchar(100) DEFAULT NULL,
  `addedTime` varchar(100) DEFAULT NULL,
  `assignedTime` varchar(100) DEFAULT NULL,
  `AcceptedTime` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `mode` varchar(100) DEFAULT '0' COMMENT '0 for return 1 for exchange',
  `reason` varchar(600) DEFAULT '-',
  `note` varchar(400) DEFAULT '-',
  `latitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `refund` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorySlug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iconImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryDescription` longtext COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `featured` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `nested` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '999',
  `ref` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `categoryName`, `categorySlug`, `iconImage`, `bannerImage`, `categoryDescription`, `parent_id`, `featured`, `priority`, `status`, `nested`, `branch`, `ref`) VALUES
(1, 'Grocery & Staples', 'grocery-&-staples', '60001997659a4_1610619287.jpg', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(2, 'Grocery & Staples', 'grocery-&-staples', '6009220c45db9_1611211276.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '1'),
(3, 'Dals & Pulses', 'dals-&-pulses', '600019e628bb2_1610619366.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(4, 'Dals & Pulses', 'dals-&-pulses', '6006b68849feb_1611052680.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '3'),
(5, 'Organic', 'organic', '60001a2a41b2a_1610619434.', NULL, NULL, 3, '0', 0, '0', '1', '0', NULL),
(6, 'Organic', 'organic', '601b8c9e00d44_1612418206.', NULL, NULL, 4, '1', 0, '0', '1', '999', '5'),
(7, 'Breakfast & Dairy', 'breakfast-&-dairy', '60016cec233c8_1610706156.', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(8, 'Breakfast & Dairy', 'breakfast-&-dairy', '6006db26b46a7_1611062054.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '7'),
(9, 'Household & Cleaning', 'household-&-cleaning', '60016d038be47_1610706179.', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(10, 'Household & Cleaning', 'household-&-cleaning', '6007e0aa3f815_1611129002.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '9'),
(11, 'Beverages- Energy & Soft drinks', 'beverages--energy-&-soft-drinks', '60016d1c718d6_1610706204.', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(12, 'Beverages', 'beverages', '600800e337e99_1611137251.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '11'),
(13, 'Personal Care- Hair Care', 'personal-care--hair-care', '60016d3a4e3be_1610706234.', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(14, 'Personal Care', 'personal-care', '600927b49f92b_1611212724.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '13'),
(15, ' Fruits & Vegetables- Fruits', '-fruits-&-vegetables--fruits', '60016d5aa1a58_1610706266.', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(16, ' Fruits & Vegetables', '-fruits-&-vegetables', '60092a7783c64_1611213431.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '15'),
(17, '  Meat & Fish', '--meat-&-fish', '60016d70bb4ff_1610706288.', NULL, NULL, NULL, '0', 0, '0', '0', '0', NULL),
(18, '  Meat & Fish', '--meat-&-fish', '60091eba6e598_1611210426.png', NULL, NULL, NULL, '0', 0, '0', '0', '999', '17'),
(19, 'Dals & Pulses', 'dals-&-pulses', '60016db67f361_1610706358.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(20, 'Atta & Flours', 'atta-&-flours', '6006b99213ef0_1611053458.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '19'),
(21, 'Dairy, Bread', 'dairy,-bread', '60016de6c1c38_1610706406.', NULL, NULL, 7, '0', 0, '0', '0', '0', NULL),
(22, 'Dairy', 'dairy', '6007d8507f820_1611126864.png', NULL, NULL, 8, '0', 0, '0', '0', '999', '21'),
(23, 'Laundry & Detergents', 'laundry-&-detergents', '60016e076c0d8_1610706439.', NULL, NULL, 9, '0', 0, '0', '0', '0', NULL),
(24, 'Laundry & Detergents', 'laundry-&-detergents', '6007f7569dbcb_1611134806.png', NULL, NULL, 10, '0', 0, '0', '0', '999', '23'),
(25, 'Tea & Coffee', 'tea-&-coffee', '60016e2e48a67_1610706478.', NULL, NULL, 11, '0', 0, '0', '0', '0', NULL),
(26, 'Energy & Soft drinks', 'energy-&-soft-drinks', '600800b9ea173_1611137209.png', NULL, NULL, 12, '0', 0, '0', '0', '999', '25'),
(27, ' Hair Care', '-hair-care', '60016e61876b2_1610706529.', NULL, NULL, 13, '0', 0, '0', '0', '0', NULL),
(28, ' Hair Care', '-hair-care', '60081592f118e_1611142546.png', NULL, NULL, 14, '0', 0, '0', '0', '999', '27'),
(29, ' Fruits, Vegetables', '-fruits,-vegetables', '60016e96b1760_1610706582.', NULL, NULL, 15, '0', 0, '0', '0', '0', NULL),
(30, ' Fruits', '-fruits', '60090df7a2c5b_1611206135.png', NULL, NULL, 16, '0', 0, '0', '0', '999', '29'),
(31, 'Red meat', 'red-meat', '60016ec660ce5_1610706630.', NULL, NULL, 17, '0', 0, '0', '0', '0', NULL),
(32, 'Egg & Chicken', 'egg-&-chicken', '6009311be999f_1611215131.png', NULL, NULL, 18, '0', 0, '0', '0', '999', '31'),
(33, 'Rice & other grains', 'rice-&-other-grains', '6001702e44966_1610706990.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(34, 'Rice & other grains', 'rice-&-other-grains', '6006c1474c815_1611055431.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '33'),
(35, ' Dry fruits ', '-dry-fruits-', '60017051a9223_1610707025.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(36, ' Dry fruits ', '-dry-fruits-', '6006d194acbc5_1611059604.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '35'),
(37, 'Masala & Spices', 'masala-&-spices', '6001706a65dc9_1610707050.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(38, 'Masala & Spices', 'masala-&-spices', '6006d1a8b96c6_1611059624.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '37'),
(39, 'Salt', 'salt', '6001708d74714_1610707085.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(40, 'Salt', 'salt', '6006d1c067ab8_1611059648.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '39'),
(41, 'Sugar & Jaggery', 'sugar-&-jaggery', '600170a85b858_1610707112.', NULL, NULL, 1, '0', 0, '0', '0', '0', NULL),
(42, 'Sugar & Jaggery', 'sugar-&-jaggery', '6006d1ecf329a_1611059692.png', NULL, NULL, 2, '0', 0, '0', '0', '999', '41'),
(43, 'Bread & Buns', 'bread-&-buns', '6001716543b15_1610707301.', NULL, NULL, 7, '0', 0, '0', '0', '0', NULL),
(44, 'Bread & Buns', 'bread-&-buns', '6007f05b7ddc6_1611133019.png', NULL, NULL, 8, '0', 0, '0', '0', '999', '43'),
(45, 'Cookies', 'cookies', '6001721fbba52_1610707487.', NULL, NULL, 7, '0', 0, '0', '0', '0', NULL),
(46, 'Cookies', 'cookies', '6007d9527f702_1611127122.png', NULL, NULL, 8, '0', 0, '0', '0', '999', '45'),
(47, 'Cakes & Pastries', 'cakes-&-pastries', '6001724265fe4_1610707522.', NULL, NULL, 7, '0', 0, '0', '0', '0', NULL),
(48, 'Cakes & Pastries', 'cakes-&-pastries', '6007f07529074_1611133045.png', NULL, NULL, 8, '0', 0, '0', '0', '999', '47'),
(49, 'Dishwashers', 'dishwashers', '6001725f00a1f_1610707551.', NULL, NULL, 9, '0', 0, '0', '0', '0', NULL),
(50, 'Dishwashers', 'dishwashers', '6007f773349c5_1611134835.png', NULL, NULL, 10, '0', 0, '0', '0', '999', '49'),
(51, 'House Cleaning', 'house-cleaning', '6001727a987c4_1610707578.', NULL, NULL, 9, '0', 0, '0', '0', '0', NULL),
(52, 'House Cleaning', 'house-cleaning', '6007f799acc4e_1611134873.png', NULL, NULL, 10, '0', 0, '0', '0', '999', '51'),
(53, 'Tea & Coffee', 'tea-&-coffee', '6001731bdc832_1610707739.', NULL, NULL, 11, '0', 0, '0', '0', '0', NULL),
(54, 'Tea & Coffee', 'tea-&-coffee', '600800cc401a3_1611137228.png', NULL, NULL, 12, '0', 0, '0', '0', '999', '53'),
(55, 'Health drink & Supplements', 'health-drink-&-supplements', '600173432f394_1610707779.', NULL, NULL, 11, '0', 0, '0', '0', '0', NULL),
(56, 'Health drink & Supplements', 'health-drink-&-supplements', '600800f62a244_1611137270.png', NULL, NULL, 12, '0', 0, '0', '0', '999', '55'),
(57, 'Hair Care', 'hair-care', '6001736371feb_1610707811.', NULL, NULL, 13, '0', 0, '0', '0', '0', NULL),
(58, 'Skin care', 'skin-care', '600815a34010a_1611142563.png', NULL, NULL, 14, '0', 0, '0', '0', '999', '57'),
(59, 'Miscellaneous', 'miscellaneous', '6001739bd8c0a_1610707867.', NULL, NULL, 13, '0', 0, '0', '0', '0', NULL),
(60, 'Miscellaneous', 'miscellaneous', '600815b86c9ec_1611142584.png', NULL, NULL, 14, '0', 0, '0', '0', '999', '59'),
(61, ' Fruits', '-fruits', '600173dec54b8_1610707934.', NULL, NULL, 15, '0', 0, '0', '0', '0', NULL),
(62, ' Vegetables', '-vegetables', '60090e083a536_1611206152.png', NULL, NULL, 16, '0', 0, '0', '0', '999', '61'),
(63, 'Herbs & Seasoning', 'herbs-&-seasoning', '6001743845b89_1610708024.', NULL, NULL, 15, '0', 0, '0', '0', '0', NULL),
(64, 'Herbs & Seasoning', 'herbs-&-seasoning', '60090e26688df_1611206182.png', NULL, NULL, 16, '0', 0, '0', '0', '999', '63'),
(65, 'Lean Meat', 'lean-meat', '6001746971018_1610708073.', NULL, NULL, 17, '0', 0, '0', '0', '0', NULL),
(66, 'Mutton', 'mutton', '60091faf97e87_1611210671.png', NULL, NULL, 18, '0', 0, '0', '0', '999', '65'),
(67, 'Sea Food', 'sea-food', '600174910bb2c_1610708113.', NULL, NULL, 17, '0', 0, '0', '0', '0', NULL),
(68, 'Fish & Sea Food', 'fish-&-sea-food', '6009332c361d6_1611215660.png', NULL, NULL, 18, '0', 0, '0', '0', '999', '67'),
(69, 'Biscuits', 'biscuits', '60068145cda88_1611039045.', NULL, NULL, 7, '0', 0, '0', '0', '0', NULL),
(70, 'Biscuits', 'biscuits', '6007f092dfb7d_1611133074.png', NULL, NULL, 8, '0', 0, '0', '0', '999', '69'),
(71, 'Dal', 'dal', '601b8f23729fe_1612418851.', NULL, NULL, 3, '1', 4, '0', '1', '0', NULL),
(72, 'Dal', 'dal', '601b8f23729fe_1612418851.', NULL, NULL, 4, '1', 4, '0', '1', '999', '71'),
(73, 'test category', 'test-category', '601cfae755fb4_1612511975.', NULL, NULL, NULL, '1', 0, '0', '0', '0', NULL),
(74, 'test category', 'test-category', '601cfae755fb4_1612511975.', NULL, NULL, NULL, '1', 0, '0', '0', '999', '73'),
(75, 'Grocery & Staples', 'grocery-&-staples', '60001997659a4_1610619287.jpg', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '1'),
(76, 'Dals & Pulses', 'dals-&-pulses', '600019e628bb2_1610619366.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '3'),
(77, 'Organic', 'organic', '60001a2a41b2a_1610619434.', NULL, NULL, 76, '0', 0, '0', '1', '1000', '5'),
(78, 'Dal', 'dal', '601b8f23729fe_1612418851.', NULL, NULL, 76, '1', 4, '0', '1', '1000', '71'),
(79, 'Dals & Pulses', 'dals-&-pulses', '60016db67f361_1610706358.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '19'),
(80, 'Rice & other grains', 'rice-&-other-grains', '6001702e44966_1610706990.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '33'),
(81, ' Dry fruits ', '-dry-fruits-', '60017051a9223_1610707025.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '35'),
(82, 'Masala & Spices', 'masala-&-spices', '6001706a65dc9_1610707050.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '37'),
(83, 'Salt', 'salt', '6001708d74714_1610707085.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '39'),
(84, 'Sugar & Jaggery', 'sugar-&-jaggery', '600170a85b858_1610707112.', NULL, NULL, 75, '0', 0, '0', '0', '1000', '41'),
(85, 'Breakfast & Dairy', 'breakfast-&-dairy', '60016cec233c8_1610706156.', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '7'),
(86, 'Dairy, Bread', 'dairy,-bread', '60016de6c1c38_1610706406.', NULL, NULL, 85, '0', 0, '0', '0', '1000', '21'),
(87, 'Bread & Buns', 'bread-&-buns', '6001716543b15_1610707301.', NULL, NULL, 85, '0', 0, '0', '0', '1000', '43'),
(88, 'Cookies', 'cookies', '6001721fbba52_1610707487.', NULL, NULL, 85, '0', 0, '0', '0', '1000', '45'),
(89, 'Cakes & Pastries', 'cakes-&-pastries', '6001724265fe4_1610707522.', NULL, NULL, 85, '0', 0, '0', '0', '1000', '47'),
(90, 'Biscuits', 'biscuits', '60068145cda88_1611039045.', NULL, NULL, 85, '0', 0, '0', '0', '1000', '69'),
(91, 'Household & Cleaning', 'household-&-cleaning', '60016d038be47_1610706179.', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '9'),
(92, 'Laundry & Detergents', 'laundry-&-detergents', '60016e076c0d8_1610706439.', NULL, NULL, 91, '0', 0, '0', '0', '1000', '23'),
(93, 'Dishwashers', 'dishwashers', '6001725f00a1f_1610707551.', NULL, NULL, 91, '0', 0, '0', '0', '1000', '49'),
(94, 'House Cleaning', 'house-cleaning', '6001727a987c4_1610707578.', NULL, NULL, 91, '0', 0, '0', '0', '1000', '51'),
(95, 'Beverages- Energy & Soft drinks', 'beverages--energy-&-soft-drinks', '60016d1c718d6_1610706204.', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '11'),
(96, 'Tea & Coffee', 'tea-&-coffee', '60016e2e48a67_1610706478.', NULL, NULL, 95, '0', 0, '0', '0', '1000', '25'),
(97, 'Tea & Coffee', 'tea-&-coffee', '6001731bdc832_1610707739.', NULL, NULL, 95, '0', 0, '0', '0', '1000', '53'),
(98, 'Health drink & Supplements', 'health-drink-&-supplements', '600173432f394_1610707779.', NULL, NULL, 95, '0', 0, '0', '0', '1000', '55'),
(99, 'Personal Care- Hair Care', 'personal-care--hair-care', '60016d3a4e3be_1610706234.', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '13'),
(100, ' Hair Care', '-hair-care', '60016e61876b2_1610706529.', NULL, NULL, 99, '0', 0, '0', '0', '1000', '27'),
(101, 'Hair Care', 'hair-care', '6001736371feb_1610707811.', NULL, NULL, 99, '0', 0, '0', '0', '1000', '57'),
(102, 'Miscellaneous', 'miscellaneous', '6001739bd8c0a_1610707867.', NULL, NULL, 99, '0', 0, '0', '0', '1000', '59'),
(103, ' Fruits & Vegetables- Fruits', '-fruits-&-vegetables--fruits', '60016d5aa1a58_1610706266.', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '15'),
(104, ' Fruits, Vegetables', '-fruits,-vegetables', '60016e96b1760_1610706582.', NULL, NULL, 103, '0', 0, '0', '0', '1000', '29'),
(105, ' Fruits', '-fruits', '600173dec54b8_1610707934.', NULL, NULL, 103, '0', 0, '0', '0', '1000', '61'),
(106, 'Herbs & Seasoning', 'herbs-&-seasoning', '6001743845b89_1610708024.', NULL, NULL, 103, '0', 0, '0', '0', '1000', '63'),
(107, '  Meat & Fish', '--meat-&-fish', '60016d70bb4ff_1610706288.', NULL, NULL, NULL, '0', 0, '0', '0', '1000', '17'),
(108, 'Red meat', 'red-meat', '60016ec660ce5_1610706630.', NULL, NULL, 107, '0', 0, '0', '0', '1000', '31'),
(109, 'Lean Meat', 'lean-meat', '6001746971018_1610708073.', NULL, NULL, 107, '0', 0, '0', '0', '1000', '65'),
(110, 'Sea Food', 'sea-food', '600174910bb2c_1610708113.', NULL, NULL, 107, '0', 0, '0', '0', '1000', '67'),
(111, 'test category', 'test-category', '601cfae755fb4_1612511975.', NULL, NULL, NULL, '1', 0, '0', '0', '1000', '73');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `start` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `raisedBy` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `parent` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `subject` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `raisingDate` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `completedDate` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `message` longtext COLLATE utf8_bin,
  `attachment` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `remarks` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ticketStatus` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'Open',
  `callback` int(11) NOT NULL DEFAULT '0',
  `attachment_type` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0' COMMENT '0 for single,1 for multiple',
  `branch` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobileNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apiKey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registrationKey` longtext COLLATE utf8_unicode_ci,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci,
  `userPic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `branch` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `mobileNumber`, `email`, `apiKey`, `registrationKey`, `password`, `address`, `userPic`, `userType`, `isActive`, `roles`, `branch`) VALUES
(5, 'Super', 'Admin', '9876543210', 'root@grocbay.com', NULL, '1', '$2y$13$M4HwPEdFPOW7B75/Kd7hNuOOBFL1PUO6cNxb2q1.Qnup9/LgirGKO', 'Wristcode technolgies .5th Floor Raj Towers,Near udupi city bustand,Udupi', NULL, 'root', 1, '[\"ROLE_ADMIN\"]', '0'),
(28, 'John', 'Cena', '9876543212', 'admin@grocbay.com', NULL, '1', '$2y$13$M4HwPEdFPOW7B75/Kd7hNuOOBFL1PUO6cNxb2q1.Qnup9/LgirGKO', 'Appinsight technologies .', NULL, 'Admin', 1, '[\"ROLE_ADMIN\"]', '999'),
(32, 'Testing', 'test', '8660196434', 'dee@grocbay.com', NULL, '1', '$2y$13$M4HwPEdFPOW7B75/Kd7hNuOOBFL1PUO6cNxb2q1.Qnup9/LgirGKO', NULL, NULL, 'Delivery', 1, '[\"ROLE_ADMIN\"]', '999'),
(33, 'john', 'k', '9999999999', 'john@grocbay.com', NULL, '0', '$2y$13$vyLnvZEw8qtD8fEqg9Ap0Ozv4Yn6YKml9trW5d3eJiu4a05lbRLUu', 'abc', NULL, 'Admin', 1, '[\"ROLE_ADMIN\"]', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `variation_files`
--

CREATE TABLE `variation_files` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variation_files`
--

INSERT INTO `variation_files` (`id`, `image`, `ref`) VALUES
(1, 'strawberry-table@3x.png', '8'),
(2, 'Almonds@3x.png', '9'),
(3, 'asset-1@3x.png', '10'),
(4, 'bounceoranegevanila-1@3x.png', '11'),
(5, 'hiclipart.com (16)@3x.png', '12'),
(6, 'hiclipart.com (10)@3x.png', '13'),
(7, 'strawberry-table@3x.png', '14'),
(8, 'Atta & Flours.jpg', '15'),
(9, 'Ananda Premium Paneer.jpg', '208');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL DEFAULT '0',
  `postpaid` varchar(100) NOT NULL DEFAULT '0',
  `prepaid` varchar(100) NOT NULL DEFAULT '0',
  `ref` varchar(100) NOT NULL DEFAULT '-',
  `status` varchar(100) NOT NULL DEFAULT '0',
  `date` varchar(100) NOT NULL DEFAULT '-',
  `duration` varchar(100) DEFAULT '10',
  `loyalty` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `user`, `postpaid`, `prepaid`, `ref`, `status`, `date`, `duration`, `loyalty`) VALUES
(1, 6, '100', '0', '6', '0', '30-01-2021', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_due`
--

CREATE TABLE `wallet_due` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL DEFAULT '',
  `ref` varchar(100) NOT NULL DEFAULT '',
  `balance` varchar(100) NOT NULL DEFAULT '',
  `duedate` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '0',
  `note` varchar(100) NOT NULL DEFAULT '',
  `paid` varchar(100) NOT NULL DEFAULT '-',
  `date` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_logs`
--

CREATE TABLE `wallet_logs` (
  `id` int(11) NOT NULL,
  `ref` varchar(100) DEFAULT '0',
  `credit` varchar(100) DEFAULT '0',
  `debit` varchar(100) DEFAULT '0',
  `date` varchar(100) DEFAULT '-',
  `balance` varchar(100) DEFAULT '0',
  `note` varchar(300) DEFAULT '-',
  `type` varchar(100) DEFAULT '0' COMMENT '0 for prepaid 1 for postpaid',
  `status` varchar(100) DEFAULT NULL,
  `dateTime` varchar(100) NOT NULL DEFAULT '',
  `mode` varchar(100) DEFAULT 'online',
  `order_d` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet_logs`
--

INSERT INTO `wallet_logs` (`id`, `ref`, `credit`, `debit`, `date`, `balance`, `note`, `type`, `status`, `dateTime`, `mode`, `order_d`) VALUES
(1, '6', '100', '0', '30-01-2021', '100', 'Added By Admin', '2', '0', '02-47 pm', 'cash', '0');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `topbar` varchar(200) DEFAULT NULL,
  `topbarColor` varchar(200) DEFAULT NULL,
  `topbarBackground` varchar(200) DEFAULT NULL,
  `headerColor` varchar(200) DEFAULT NULL,
  `headerBackground` varchar(200) DEFAULT NULL,
  `background` varchar(200) DEFAULT NULL,
  `backgroundColor` varchar(200) DEFAULT NULL,
  `footerBackground` varchar(200) DEFAULT NULL,
  `footerColor` varchar(200) DEFAULT NULL,
  `primaryColor` varchar(200) DEFAULT NULL,
  `primaryBackground` varchar(200) DEFAULT NULL,
  `googleKey` varchar(200) DEFAULT NULL,
  `facebookKey` varchar(200) DEFAULT NULL,
  `header` varchar(3000) DEFAULT NULL,
  `footer` varchar(3000) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `keywords` varchar(600) DEFAULT NULL,
  `payment_mode` varchar(200) DEFAULT NULL,
  `payment_gateway` varchar(200) DEFAULT NULL,
  `mode` varchar(100) DEFAULT NULL,
  `gateway_id` varchar(100) DEFAULT NULL,
  `gateway_secret` varchar(100) DEFAULT NULL,
  `delivery_type` varchar(100) DEFAULT NULL,
  `start` varchar(500) DEFAULT NULL,
  `end` varchar(500) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `default_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `topbar`, `topbarColor`, `topbarBackground`, `headerColor`, `headerBackground`, `background`, `backgroundColor`, `footerBackground`, `footerColor`, `primaryColor`, `primaryBackground`, `googleKey`, `facebookKey`, `header`, `footer`, `title`, `description`, `keywords`, `payment_mode`, `payment_gateway`, `mode`, `gateway_id`, `gateway_secret`, `delivery_type`, `start`, `end`, `logo`, `favicon`, `default_image`) VALUES
(1, NULL, '#ffffff', '#619127', '#ffffff', '#104c1c', '#f5f5f5', '#000000', '#303030', '#ffffff', '#ffffff', '#000000', '', 'dd', 'Supplying all type of Fruits, Vegetables, Groceries & Many more...', 'Delivery on your desired time slot | Cash On Delivery | Free Shipping', 'Tokree | Online Grocery Solution!', 'Express Delivery | Cash On Delivery | Free Shipping', '5', 'cod,online,wallet,loyalty,express,pickupfromstore', 'Paytm', 'PRODUCTION', '5s', '6', NULL, '6:00 AM', '7:00 PM', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C95F6AEE51600A2A` (`bannerImage`),
  ADD KEY `IDX_C95F6AEEC54C8C93` (`type_id`);

--
-- Indexes for table `advertisement_type`
--
ALTER TABLE `advertisement_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6F5C4C61B16D2E23` (`typeName`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6660E456EDE76272` (`customer_d`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csv_logs`
--
ALTER TABLE `csv_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_81398E09E37B250` (`mobileNo`),
  ADD UNIQUE KEY `UNIQ_81398E09800A1141` (`apiKey`);

--
-- Indexes for table `customer_logs`
--
ALTER TABLE `customer_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3B1CE6A3EDE76272` (`customer_d`);

--
-- Indexes for table `customer_order_items`
--
ALTER TABLE `customer_order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_61CBB6B8E6BBC1E0` (`order_d`);

--
-- Indexes for table `customer_with_promocode`
--
ALTER TABLE `customer_with_promocode`
  ADD PRIMARY KEY (`customer_id`,`promocode_id`),
  ADD KEY `IDX_5127EEA59395C3F3` (`customer_id`),
  ADD KEY `IDX_5127EEA5C76C06D9` (`promocode_id`);

--
-- Indexes for table `extra_package`
--
ALTER TABLE `extra_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6B360779AB44FE0` (`menu_item_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `value` (`value`);

--
-- Indexes for table `loyalty`
--
ALTER TABLE `loyalty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_history`
--
ALTER TABLE `membership_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D754D55012469DE2` (`category_id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_history`
--
ALTER TABLE `notification_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item_extras`
--
ALTER TABLE `order_item_extras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BBD06F986AEF1273` (`order_item_d`);

--
-- Indexes for table `package_extras`
--
ALTER TABLE `package_extras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1860160D6A3272` (`extra_package_id`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_variation`
--
ALTER TABLE `price_variation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E12A00169AB44FE0` (`menu_item_id`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_usage`
--
ALTER TABLE `promo_usage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_39C262E6EDE76272` (`customer_d`),
  ADD KEY `IDX_39C262E6D1B7041A` (`promo_d`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_AD83772472150B7E` (`restaurantName`),
  ADD UNIQUE KEY `UNIQ_AD837724B4ABEE1A` (`restaurantSlug`),
  ADD UNIQUE KEY `UNIQ_AD83772424F11397` (`primaryMobile`),
  ADD UNIQUE KEY `UNIQ_AD837724D2E57CA3` (`primaryEmail`),
  ADD UNIQUE KEY `UNIQ_AD837724C5730A69` (`iconImage`),
  ADD UNIQUE KEY `UNIQ_AD83772451600A2A` (`bannerImage`);

--
-- Indexes for table `restaurant_ratings`
--
ALTER TABLE `restaurant_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4FD5BBC9395C3F3` (`customer_id`);

--
-- Indexes for table `return_logs`
--
ALTER TABLE `return_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_lists`
--
ALTER TABLE `shopping_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_lists_name`
--
ALTER TABLE `shopping_lists_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slotstatus`
--
ALTER TABLE `slotstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_logs`
--
ALTER TABLE `stock_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_return`
--
ALTER TABLE `stock_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64955E247B2` (`mobileNumber`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649800A1141` (`apiKey`),
  ADD UNIQUE KEY `UNIQ_8D93D6493256010B` (`userPic`);

--
-- Indexes for table `variation_files`
--
ALTER TABLE `variation_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_due`
--
ALTER TABLE `wallet_due`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_logs`
--
ALTER TABLE `wallet_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `advertisement_type`
--
ALTER TABLE `advertisement_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `csv_logs`
--
ALTER TABLE `csv_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_logs`
--
ALTER TABLE `customer_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_order_items`
--
ALTER TABLE `customer_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `extra_package`
--
ALTER TABLE `extra_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loyalty`
--
ALTER TABLE `loyalty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `membership_history`
--
ALTER TABLE `membership_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notification_history`
--
ALTER TABLE `notification_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_item_extras`
--
ALTER TABLE `order_item_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_extras`
--
ALTER TABLE `package_extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup`
--
ALTER TABLE `pickup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price_variation`
--
ALTER TABLE `price_variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `promo_usage`
--
ALTER TABLE `promo_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `restaurant_ratings`
--
ALTER TABLE `restaurant_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_logs`
--
ALTER TABLE `return_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_lists`
--
ALTER TABLE `shopping_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shopping_lists_name`
--
ALTER TABLE `shopping_lists_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slotstatus`
--
ALTER TABLE `slotstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stock_logs`
--
ALTER TABLE `stock_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stock_return`
--
ALTER TABLE `stock_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `variation_files`
--
ALTER TABLE `variation_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_due`
--
ALTER TABLE `wallet_due`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet_logs`
--
ALTER TABLE `wallet_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `FK_C95F6AEEC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `advertisement_type` (`id`);

--
-- Constraints for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD CONSTRAINT `FK_6660E456EDE76272` FOREIGN KEY (`customer_d`) REFERENCES `customer` (`id`);

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `FK_3B1CE6A3EDE76272` FOREIGN KEY (`customer_d`) REFERENCES `customer` (`id`);

--
-- Constraints for table `customer_order_items`
--
ALTER TABLE `customer_order_items`
  ADD CONSTRAINT `FK_61CBB6B8E6BBC1E0` FOREIGN KEY (`order_d`) REFERENCES `customer_order` (`id`);

--
-- Constraints for table `customer_with_promocode`
--
ALTER TABLE `customer_with_promocode`
  ADD CONSTRAINT `FK_5127EEA59395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `promocode` (`id`),
  ADD CONSTRAINT `FK_5127EEA5C76C06D9` FOREIGN KEY (`promocode_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD CONSTRAINT `FK_D754D55012469DE2` FOREIGN KEY (`category_id`) REFERENCES `sub_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
