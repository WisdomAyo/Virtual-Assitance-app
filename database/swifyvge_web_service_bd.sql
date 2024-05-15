-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 09:31 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swifyvge_web_service_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `artisan_galleries`
--

CREATE TABLE `artisan_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` longtext DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artisan_galleries`
--

INSERT INTO `artisan_galleries` (`id`, `images`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'SwiftedgeVA-30611714834782681714834782948080.mp4', '8', '2024-05-04 18:59:42', '2024-05-04 18:59:42'),
(2, 'SwiftedgeVA-30611715280347351715280347081907.pdf', '19', '2024-05-09 22:45:47', '2024-05-09 22:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `artisan_services`
--

CREATE TABLE `artisan_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `business_category_id` int(11) DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `full_name` longtext DEFAULT NULL,
  `feature_image` text DEFAULT NULL,
  `business_category` text DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `website` longtext DEFAULT NULL,
  `cost` text DEFAULT NULL,
  `per_service` longtext DEFAULT NULL,
  `street_address` longtext DEFAULT NULL,
  `city` longtext DEFAULT NULL,
  `state` longtext DEFAULT NULL,
  `service_description` longtext DEFAULT NULL,
  `experience` longtext DEFAULT NULL,
  `status` varchar(10) DEFAULT '0',
  `rating` longtext DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `employers` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artisan_services`
--

INSERT INTO `artisan_services` (`id`, `user_id`, `business_category_id`, `profile_picture`, `url`, `title`, `full_name`, `feature_image`, `business_category`, `phone`, `email`, `website`, `cost`, `per_service`, `street_address`, `city`, `state`, `service_description`, `experience`, `status`, `rating`, `review`, `employers`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, NULL, 'Excel Data Cleaning', 'Chisom Sunday', '1714792495.jpg', 'Data Entry', '08137009764', 'chisoglo7@gmail.com', NULL, '2000', 'Per Hour', NULL, '492', NULL, 'Cleaning of the Microsoft Data sheet', '3 years', '0', NULL, NULL, NULL, '2024-05-04 07:14:55', '2024-05-04 07:14:55'),
(2, 8, NULL, NULL, NULL, 'Customer service Manager', 'Ololade Lateef', '1714834001.jpg', 'Customer Service', '+447404447211', 'lateef.ololade1@gmail.com', NULL, '£25', 'Per Hour', NULL, 'undefined', NULL, NULL, '8', '0', NULL, NULL, NULL, '2024-05-04 18:46:41', '2024-05-04 19:00:55'),
(3, 8, NULL, NULL, NULL, 'Virtual Assistant', 'Ololade Lateef', '1714834080.mp4', 'Executive Assistance', '+447404447211', 'lateef.ololade1@gmail.com', NULL, '£25', 'Per Hour', NULL, 'undefined', NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-05-04 18:48:00', '2024-05-04 19:02:03'),
(4, 8, NULL, NULL, NULL, 'Virtual Assistant', 'Ololade Lateef', '1714834145.mp4', 'Data Entry', '+447404447211', 'lateef.ololade1@gmail.com', NULL, '£25', 'Per Hour', NULL, 'undefined', NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-05-04 18:49:05', '2024-05-04 19:02:20'),
(5, 19, NULL, NULL, NULL, 'Executive Virtual Assistant', 'Anyalewechi Chibuzo', '1714902790.jpg', 'Executive Assistance', '08036022898', 'chibuzomaria@gmail.com', NULL, '45000', 'Per Hour', NULL, '488', NULL, 'Here to provide executive assistance to the boss of any business or organization in terms of email management, calender management, schedule management financial and Human resources management, Travelling schedules', '7', '0', NULL, NULL, NULL, '2024-05-05 13:53:10', '2024-05-09 22:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `awards_and_certificates`
--

CREATE TABLE `awards_and_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `year` longtext DEFAULT NULL,
  `purpose` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards_and_certificates`
--

INSERT INTO `awards_and_certificates` (`id`, `user_id`, `title`, `desc`, `year`, `purpose`, `created_at`, `updated_at`) VALUES
(1, '20', 'Certificate of completion', 'Certificate of completion', '2024', 'Virtual assistant', '2024-05-09 07:29:01', '2024-05-09 07:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

CREATE TABLE `business_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` varchar(255) NOT NULL DEFAULT '0',
  `url` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `fa_icon` longtext DEFAULT NULL,
  `featured_img` longtext DEFAULT NULL,
  `show_menu` longtext DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `created_by` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`id`, `parent_id`, `url`, `title`, `fa_icon`, `featured_img`, `show_menu`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '0', 'social-media-management', 'Social Media Management', NULL, '1714748538.png', NULL, '1', '1', '2024-05-03 19:02:18', '2024-05-03 19:02:18'),
(2, '0', 'data-entry', 'Data Entry', NULL, '1714750210.png', NULL, '1', '1', '2024-05-03 19:30:10', '2024-05-03 19:30:10'),
(3, '0', 'customer-service', 'Customer Service', NULL, '1714750231.png', NULL, '1', '1', '2024-05-03 19:30:31', '2024-05-03 19:30:31'),
(4, '0', 'administrative', 'Administrative', NULL, '1714750251.png', NULL, '1', '1', '2024-05-03 19:30:51', '2024-05-03 19:30:51'),
(5, '0', 'executive-assistance', 'Executive Assistance', NULL, '1714750270.png', NULL, '1', '1', '2024-05-03 19:31:10', '2024-05-03 19:31:10'),
(6, '0', 'e-commerce', 'E-commerce', NULL, '1714750292.png', NULL, '1', '1', '2024-05-03 19:31:32', '2024-05-03 19:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `call_backs`
--

CREATE TABLE `call_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext DEFAULT NULL,
  `requester` longtext DEFAULT NULL,
  `cname` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `type` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `messages` longtext DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `message_id` longtext DEFAULT NULL,
  `initiator_id` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender_id`, `receiver_id`, `messages`, `attachment`, `message_id`, `initiator_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '1', 'Pls Do  the Work now', NULL, '30621714749032681714749032170541', '1', '0', '2024-05-11 04:57:29', '2024-05-11 04:57:29'),
(2, '2', '1', 'Pls Do  the Work now', NULL, '30621714749032681714749032170541', '1', '0', '2024-05-11 04:57:46', '2024-05-11 04:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `client_requests`
--

CREATE TABLE `client_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `business_category` longtext NOT NULL,
  `sub_category` longtext NOT NULL,
  `fix_location` longtext NOT NULL,
  `current_location` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time_of_appointment` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_of_appointment` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `budget` text NOT NULL,
  `description` longtext NOT NULL,
  `request_type` longtext NOT NULL,
  `service_type` varchar(20) NOT NULL,
  `painter_assigned` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `agreement` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dialing_code` varchar(50) DEFAULT NULL,
  `country_code` varchar(50) DEFAULT NULL,
  `flag` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `dialing_code`, `country_code`, `flag`, `is_active`) VALUES
(1, 'South Africa', '+27', 'ZAF', '🇿🇦', 1),
(2, 'Svalbard and Jan Mayen', '+4779', 'SJM', '🇸🇯', 1),
(3, 'Samoa', '+685', 'WSM', '🇼🇸', 1),
(4, 'Gambia', '+220', 'GMB', '🇬🇲', 1),
(5, 'Saint Kitts and Nevis', '+1869', 'KNA', '🇰🇳', 1),
(6, 'Monaco', '+377', 'MCO', '🇲🇨', 1),
(7, 'Aruba', '+297', 'ABW', '🇦🇼', 1),
(8, 'Guinea-Bissau', '+245', 'GNB', '🇬🇼', 1),
(9, 'North Korea', '+850', 'PRK', '🇰🇵', 1),
(10, 'Paraguay', '+595', 'PRY', '🇵🇾', 1),
(11, 'Bermuda', '+1441', 'BMU', '🇧🇲', 1),
(12, 'Republic of the Congo', '+242', 'COG', '🇨🇬', 1),
(13, 'United States Virgin Islands', '+1340', 'VIR', '🇻🇮', 1),
(14, 'Antigua and Barbuda', '+1268', 'ATG', '🇦🇬', 1),
(15, 'United Kingdom', '+44', 'GBR', '🇬🇧', 1),
(16, 'Mozambique', '+258', 'MOZ', '🇲🇿', 1),
(17, 'Martinique', '+596', 'MTQ', '🇲🇶', 1),
(18, 'British Virgin Islands', '+1284', 'VGB', '🇻🇬', 1),
(19, 'Somalia', '+252', 'SOM', '🇸🇴', 1),
(20, 'Montserrat', '+1664', 'MSR', '🇲🇸', 1),
(21, 'Northern Mariana Islands', '+1670', 'MNP', '🇲🇵', 1),
(22, 'Singapore', '+65', 'SGP', '🇸🇬', 1),
(23, 'Turks and Caicos Islands', '+1649', 'TCA', '🇹🇨', 1),
(24, 'Nicaragua', '+505', 'NIC', '🇳🇮', 1),
(25, 'Norfolk Island', '+672', 'NFK', '🇳🇫', 1),
(26, 'Saint Vincent and the Grenadines', '+1784', 'VCT', '🇻🇨', 1),
(27, 'Peru', '+51', 'PER', '🇵🇪', 1),
(28, 'Mexico', '+52', 'MEX', '🇲🇽', 1),
(29, 'Equatorial Guinea', '+240', 'GNQ', '🇬🇶', 1),
(30, 'Bosnia and Herzegovina', '+387', 'BIH', '🇧🇦', 1),
(31, 'Bahrain', '+973', 'BHR', '🇧🇭', 1),
(32, 'Macau', '+853', 'MAC', '🇲🇴', 1),
(33, 'Barbados', '+1246', 'BRB', '🇧🇧', 1),
(34, 'Uzbekistan', '+998', 'UZB', '🇺🇿', 1),
(35, 'Réunion', '+262', 'REU', '🇷🇪', 1),
(36, 'China', '+86', 'CHN', '🇨🇳', 1),
(37, 'Malawi', '+265', 'MWI', '🇲🇼', 1),
(38, 'Zimbabwe', '+263', 'ZWE', '🇿🇼', 1),
(39, 'Spain', '+34', 'ESP', '🇪🇸', 1),
(40, 'Kenya', '+254', 'KEN', '🇰🇪', 1),
(41, 'Pakistan', '+92', 'PAK', '🇵🇰', 1),
(42, 'Christmas Island', '+61', 'CXR', '🇨🇽', 1),
(43, 'Fiji', '+679', 'FJI', '🇫🇯', 1),
(44, 'Eswatini', '+268', 'SWZ', '🇸🇿', 1),
(45, 'Jersey', '+44', 'JEY', '🇯🇪', 1),
(46, 'Taiwan', '+886', 'TWN', '🇹🇼', 1),
(47, 'Sri Lanka', '+94', 'LKA', '🇱🇰', 1),
(48, 'Belarus', '+375', 'BLR', '🇧🇾', 1),
(49, 'United Arab Emirates', '+971', 'ARE', '🇦🇪', 1),
(50, 'Curaçao', '+599', 'CUW', '🇨🇼', 1),
(51, 'Costa Rica', '+506', 'CRI', '🇨🇷', 1),
(52, 'Angola', '+244', 'AGO', '🇦🇴', 1),
(53, 'Uruguay', '+598', 'URY', '🇺🇾', 1),
(54, 'DR Congo', '+243', 'COD', '🇨🇩', 1),
(55, 'Kuwait', '+965', 'KWT', '🇰🇼', 1),
(56, 'Turkey', '+90', 'TUR', '🇹🇷', 1),
(57, 'Mauritania', '+222', 'MRT', '🇲🇷', 1),
(58, 'Tuvalu', '+688', 'TUV', '🇹🇻', 1),
(59, 'Panama', '+507', 'PAN', '🇵🇦', 1),
(60, 'Egypt', '+20', 'EGY', '🇪🇬', 1),
(61, 'Saint Lucia', '+1758', 'LCA', '🇱🇨', 1),
(62, 'Azerbaijan', '+994', 'AZE', '🇦🇿', 1),
(63, 'Rwanda', '+250', 'RWA', '🇷🇼', 1),
(64, 'Senegal', '+221', 'SEN', '🇸🇳', 1),
(65, 'India', '+91', 'IND', '🇮🇳', 1),
(66, 'Iceland', '+354', 'ISL', '🇮🇸', 1),
(67, 'Suriname', '+597', 'SUR', '🇸🇷', 1),
(68, 'Bulgaria', '+359', 'BGR', '🇧🇬', 1),
(69, 'Micronesia', '+691', 'FSM', '🇫🇲', 1),
(70, 'Kosovo', '+383', 'UNK', '🇽🇰', 1),
(71, 'Sierra Leone', '+232', 'SLE', '🇸🇱', 1),
(72, 'Tunisia', '+216', 'TUN', '🇹🇳', 1),
(73, 'Cuba', '+53', 'CUB', '🇨🇺', 1),
(74, 'Trinidad and Tobago', '+1868', 'TTO', '🇹🇹', 1),
(75, 'Comoros', '+269', 'COM', '🇰🇲', 1),
(76, 'Nauru', '+674', 'NRU', '🇳🇷', 1),
(77, 'Saint Helena, Ascension and Tristan da Cunha', '+290', 'SHN', '🇸🇭', 1),
(78, 'Romania', '+40', 'ROU', '🇷🇴', 1),
(79, 'Marshall Islands', '+692', 'MHL', '🇲🇭', 1),
(80, 'Nepal', '+977', 'NPL', '🇳🇵', 1),
(81, 'Ecuador', '+593', 'ECU', '🇪🇨', 1),
(82, 'Gabon', '+241', 'GAB', '🇬🇦', 1),
(83, 'Saudi Arabia', '+966', 'SAU', '🇸🇦', 1),
(84, 'Dominican Republic', '+1809', 'DOM', '🇩🇴', 1),
(85, 'Saint Pierre and Miquelon', '+508', 'SPM', '🇵🇲', 1),
(86, 'Faroe Islands', '+298', 'FRO', '🇫🇴', 1),
(87, 'Kiribati', '+686', 'KIR', '🇰🇮', 1),
(88, 'Vanuatu', '+678', 'VUT', '🇻🇺', 1),
(89, 'Hungary', '+36', 'HUN', '🇭🇺', 1),
(90, 'South Georgia', '+500', 'SGS', '🇬🇸', 1),
(91, 'Yemen', '+967', 'YEM', '🇾🇪', 1),
(92, 'French Guiana', '+594', 'GUF', '🇬🇫', 1),
(93, 'Seychelles', '+248', 'SYC', '🇸🇨', 1),
(94, 'American Samoa', '+1684', 'ASM', '🇦🇸', 1),
(95, 'Cyprus', '+357', 'CYP', '🇨🇾', 1),
(96, 'Libya', '+218', 'LBY', '🇱🇾', 1),
(97, 'Israel', '+972', 'ISR', '🇮🇱', 1),
(98, 'Vietnam', '+84', 'VNM', '🇻🇳', 1),
(99, 'Slovenia', '+386', 'SVN', '🇸🇮', 1),
(100, 'Iran', '+98', 'IRN', '🇮🇷', 1),
(101, 'Namibia', '+264', 'NAM', '🇳🇦', 1),
(102, 'Greece', '+30', 'GRC', '🇬🇷', 1),
(103, 'Lebanon', '+961', 'LBN', '🇱🇧', 1),
(104, 'Malaysia', '+60', 'MYS', '🇲🇾', 1),
(105, 'Mongolia', '+976', 'MNG', '🇲🇳', 1),
(106, 'Åland Islands', '+35818', 'ALA', '🇦🇽', 1),
(107, 'Georgia', '+995', 'GEO', '🇬🇪', 1),
(108, 'Tajikistan', '+992', 'TJK', '🇹🇯', 1),
(109, 'Albania', '+355', 'ALB', '🇦🇱', 1),
(110, 'Dominica', '+1767', 'DMA', '🇩🇲', 1),
(111, 'Turkmenistan', '+993', 'TKM', '🇹🇲', 1),
(112, 'Colombia', '+57', 'COL', '🇨🇴', 1),
(113, 'Heard Island and McDonald Islands', '+672', 'HMD', '🇭🇲', 1),
(114, 'Venezuela', '+58', 'VEN', '🇻🇪', 1),
(115, 'Guinea', '+224', 'GIN', '🇬🇳', 1),
(116, 'South Sudan', '+211', 'SSD', '🇸🇸', 1),
(117, 'Ukraine', '+380', 'UKR', '🇺🇦', 1),
(118, 'Slovakia', '+421', 'SVK', '🇸🇰', 1),
(119, 'Italy', '+39', 'ITA', '🇮🇹', 1),
(120, 'Falkland Islands', '+500', 'FLK', '🇫🇰', 1),
(121, 'Guadeloupe', '+590', 'GLP', '🇬🇵', 1),
(122, 'Honduras', '+504', 'HND', '🇭🇳', 1),
(123, 'Montenegro', '+382', 'MNE', '🇲🇪', 1),
(124, 'Estonia', '+372', 'EST', '🇪🇪', 1),
(125, 'Brazil', '+55', 'BRA', '🇧🇷', 1),
(126, 'Mauritius', '+230', 'MUS', '🇲🇺', 1),
(127, 'Thailand', '+66', 'THA', '🇹🇭', 1),
(128, 'Bolivia', '+591', 'BOL', '🇧🇴', 1),
(129, 'Sweden', '+46', 'SWE', '🇸🇪', 1),
(130, 'Guernsey', '+44', 'GGY', '🇬🇬', 1),
(131, 'Zambia', '+260', 'ZMB', '🇿🇲', 1),
(132, 'Eritrea', '+291', 'ERI', '🇪🇷', 1),
(133, 'Kazakhstan', '+76', 'KAZ', '🇰🇿', 1),
(134, 'Morocco', '+212', 'MAR', '🇲🇦', 1),
(135, 'Jordan', '+962', 'JOR', '🇯🇴', 1),
(136, 'Myanmar', '+95', 'MMR', '🇲🇲', 1),
(137, 'San Marino', '+378', 'SMR', '🇸🇲', 1),
(138, 'Palau', '+680', 'PLW', '🇵🇼', 1),
(139, 'Mayotte', '+262', 'MYT', '🇾🇹', 1),
(140, 'United States Minor Outlying Islands', '+268', 'UMI', '🇺🇲', 1),
(141, 'Czechia', '+420', 'CZE', '🇨🇿', 1),
(142, 'Jamaica', '+1876', 'JAM', '🇯🇲', 1),
(143, 'Kyrgyzstan', '+996', 'KGZ', '🇰🇬', 1),
(144, 'Sudan', '+249', 'SDN', '🇸🇩', 1),
(145, 'São Tomé and Príncipe', '+239', 'STP', '🇸🇹', 1),
(146, 'Gibraltar', '+350', 'GIB', '🇬🇮', 1),
(147, 'Niger', '+227', 'NER', '🇳🇪', 1),
(148, 'Caribbean Netherlands', '+599', 'BES', '🇧🇶', 1),
(149, 'Australia', '+61', 'AUS', '🇦🇺', 1),
(150, 'Luxembourg', '+352', 'LUX', '🇱🇺', 1),
(151, 'Sint Maarten', '+1721', 'SXM', '🇸🇽', 1),
(152, 'Lesotho', '+266', 'LSO', '🇱🇸', 1),
(153, 'Poland', '+48', 'POL', '🇵🇱', 1),
(154, 'Guam', '+1671', 'GUM', '🇬🇺', 1),
(155, 'Japan', '+81', 'JPN', '🇯🇵', 1),
(156, 'Liberia', '+231', 'LBR', '🇱🇷', 1),
(157, 'Cape Verde', '+238', 'CPV', '🇨🇻', 1),
(158, 'Isle of Man', '+44', 'IMN', '🇮🇲', 1),
(159, 'Burundi', '+257', 'BDI', '🇧🇮', 1),
(160, 'Papua New Guinea', '+675', 'PNG', '🇵🇬', 1),
(161, 'Uganda', '+256', 'UGA', '🇺🇬', 1),
(162, 'Afghanistan', '+93', 'AFG', '🇦🇫', 1),
(163, 'Wallis and Futuna', '+681', 'WLF', '🇼🇫', 1),
(164, 'Central African Republic', '+236', 'CAF', '🇨🇫', 1),
(165, 'Vatican City', '+3906698', 'VAT', '🇻🇦', 1),
(166, 'France', '+33', 'FRA', '🇫🇷', 1),
(167, 'United States', '+1201', 'USA', '🇺🇸', 1),
(168, 'Timor-Leste', '+670', 'TLS', '🇹🇱', 1),
(169, 'Botswana', '+267', 'BWA', '🇧🇼', 1),
(170, 'Austria', '+43', 'AUT', '🇦🇹', 1),
(171, 'Belgium', '+32', 'BEL', '🇧🇪', 1),
(172, 'Greenland', '+299', 'GRL', '🇬🇱', 1),
(173, 'Portugal', '+351', 'PRT', '🇵🇹', 1),
(174, 'Laos', '+856', 'LAO', '🇱🇦', 1),
(175, 'Guatemala', '+502', 'GTM', '🇬🇹', 1),
(176, 'Liechtenstein', '+423', 'LIE', '🇱🇮', 1),
(177, 'Solomon Islands', '+677', 'SLB', '🇸🇧', 1),
(178, 'Switzerland', '+41', 'CHE', '🇨🇭', 1),
(179, 'Palestine', '+970', 'PSE', '🇵🇸', 1),
(180, 'Ireland', '+353', 'IRL', '🇮🇪', 1),
(181, 'Saint Martin', '+590', 'MAF', '🇲🇫', 1),
(182, 'Syria', '+963', 'SYR', '🇸🇾', 1),
(183, 'Bangladesh', '+880', 'BGD', '🇧🇩', 1),
(184, 'Djibouti', '+253', 'DJI', '🇩🇯', 1),
(185, 'Ghana', '+233', 'GHA', '🇬🇭', 1),
(186, 'Denmark', '+45', 'DNK', '🇩🇰', 1),
(187, 'Oman', '+968', 'OMN', '🇴🇲', 1),
(188, 'Bouvet Island', '+47', 'BVT', '🇧🇻', 1),
(189, 'Bahamas', '+1242', 'BHS', '🇧🇸', 1),
(190, 'Algeria', '+213', 'DZA', '🇩🇿', 1),
(191, 'Haiti', '+509', 'HTI', '🇭🇹', 1),
(192, 'Ivory Coast', '+225', 'CIV', '🇨🇮', 1),
(193, 'El Salvador', '+503', 'SLV', '🇸🇻', 1),
(194, 'Netherlands', '+31', 'NLD', '🇳🇱', 1),
(195, 'Philippines', '+63', 'PHL', '🇵🇭', 1),
(196, 'Grenada', '+1473', 'GRD', '🇬🇩', 1),
(197, 'Norway', '+47', 'NOR', '🇳🇴', 1),
(198, 'Cook Islands', '+682', 'COK', '🇨🇰', 1),
(199, 'Andorra', '+376', 'AND', '🇦🇩', 1),
(200, 'Cocos (Keeling) Islands', '+61', 'CCK', '🇨🇨', 1),
(201, 'Mali', '+223', 'MLI', '🇲🇱', 1),
(202, 'Tokelau', '+690', 'TKL', '🇹🇰', 1),
(203, 'Tonga', '+676', 'TON', '🇹🇴', 1),
(204, 'Benin', '+229', 'BEN', '🇧🇯', 1),
(205, 'Togo', '+228', 'TGO', '🇹🇬', 1),
(206, 'Madagascar', '+261', 'MDG', '🇲🇬', 1),
(207, 'Anguilla', '+1264', 'AIA', '🇦🇮', 1),
(208, 'Canada', '+1', 'CAN', '🇨🇦', 1),
(209, 'Armenia', '+374', 'ARM', '🇦🇲', 1),
(210, 'British Indian Ocean Territory', '+246', 'IOT', '🇮🇴', 1),
(211, 'Nigeria', '+234', 'NGA', '🇳🇬', 1),
(212, 'Belize', '+501', 'BLZ', '🇧🇿', 1),
(213, 'Saint Barthélemy', '+590', 'BLM', '🇧🇱', 1),
(214, 'Lithuania', '+370', 'LTU', '🇱🇹', 1),
(215, 'New Caledonia', '+687', 'NCL', '🇳🇨', 1),
(216, 'Russia', '+73', 'RUS', '🇷🇺', 1),
(217, 'Cayman Islands', '+1345', 'CYM', '🇰🇾', 1),
(218, 'Moldova', '+373', 'MDA', '🇲🇩', 1),
(219, 'Croatia', '+385', 'HRV', '🇭🇷', 1),
(220, 'Serbia', '+381', 'SRB', '🇷🇸', 1),
(221, 'Malta', '+356', 'MLT', '🇲🇹', 1),
(222, 'French Polynesia', '+689', 'PYF', '🇵🇫', 1),
(223, 'Latvia', '+371', 'LVA', '🇱🇻', 1),
(224, 'Chile', '+56', 'CHL', '🇨🇱', 1),
(225, 'Finland', '+358', 'FIN', '🇫🇮', 1),
(226, 'Germany', '+49', 'DEU', '🇩🇪', 1),
(227, 'New Zealand', '+64', 'NZL', '🇳🇿', 1),
(228, 'Antarctica', '+672', 'ATA', '🇦🇶', 1),
(229, 'Indonesia', '+62', 'IDN', '🇮🇩', 1),
(230, 'Maldives', '+960', 'MDV', '🇲🇻', 1),
(231, 'Pitcairn Islands', '+64', 'PCN', '🇵🇳', 1),
(232, 'Cameroon', '+237', 'CMR', '🇨🇲', 1),
(233, 'Western Sahara', '+2125288', 'ESH', '🇪🇭', 1),
(234, 'Brunei', '+673', 'BRN', '🇧🇳', 1),
(235, 'Guyana', '+592', 'GUY', '🇬🇾', 1),
(236, 'Tanzania', '+255', 'TZA', '🇹🇿', 1),
(237, 'Chad', '+235', 'TCD', '🇹🇩', 1),
(238, 'French Southern and Antarctic Lands', '+262', 'ATF', '🇹🇫', 1),
(239, 'Cambodia', '+855', 'KHM', '🇰🇭', 1),
(240, 'Qatar', '+974', 'QAT', '🇶🇦', 1),
(241, 'Argentina', '+54', 'ARG', '🇦🇷', 1),
(242, 'Iraq', '+964', 'IRQ', '🇮🇶', 1),
(243, 'Bhutan', '+975', 'BTN', '🇧🇹', 1),
(244, 'Niue', '+683', 'NIU', '🇳🇺', 1),
(245, 'South Korea', '+82', 'KOR', '🇰🇷', 1),
(246, 'Hong Kong', '+852', 'HKG', '🇭🇰', 1),
(247, 'North Macedonia', '+389', 'MKD', '🇲🇰', 1),
(248, 'Burkina Faso', '+226', 'BFA', '🇧🇫', 1),
(249, 'Puerto Rico', '+1787', 'PRI', '🇵🇷', 1),
(250, 'Ethiopia', '+251', 'ETH', '🇪🇹', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ratings`
--

CREATE TABLE `customer_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `year` longtext DEFAULT NULL,
  `purpose` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `title`, `desc`, `year`, `purpose`, `created_at`, `updated_at`) VALUES
(1, '3', 'University of Lagos', 'BSc', '2024', 'Computer Science', '2024-05-04 07:35:30', '2024-05-04 07:35:30'),
(2, '8', 'Lagos State University, Nigeria', 'BSc', '2011', 'Public Relations and Advertising', '2024-05-04 18:58:16', '2024-05-04 18:58:16'),
(3, '20', 'University of Jos', 'Bsc', '2013', 'Medical Lab Science', '2024-05-09 07:30:36', '2024-05-09 07:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `employer_jobs`
--

CREATE TABLE `employer_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `job_title` longtext DEFAULT NULL,
  `job_description` longtext DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `firstname` longtext DEFAULT NULL,
  `lastname` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `industry` longtext DEFAULT NULL,
  `position` longtext DEFAULT NULL,
  `hire_type` longtext DEFAULT NULL,
  `quantity` longtext DEFAULT NULL,
  `business_category_name` longtext DEFAULT NULL,
  `business_category_id` varchar(10) DEFAULT NULL,
  `age_range` longtext DEFAULT NULL,
  `gender` longtext DEFAULT NULL,
  `experience` longtext DEFAULT NULL,
  `level_of_education` longtext DEFAULT NULL,
  `it_skills` longtext DEFAULT NULL,
  `basic_salary` longtext DEFAULT NULL,
  `allowances` longtext DEFAULT NULL,
  `state` longtext DEFAULT NULL,
  `city` longtext DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `application_deadline` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer_jobs`
--

INSERT INTO `employer_jobs` (`id`, `user_id`, `job_title`, `job_description`, `url`, `firstname`, `lastname`, `email`, `phone`, `industry`, `position`, `hire_type`, `quantity`, `business_category_name`, `business_category_id`, `age_range`, `gender`, `experience`, `level_of_education`, `it_skills`, `basic_salary`, `allowances`, `state`, `city`, `status`, `application_deadline`, `created_at`, `updated_at`) VALUES
(1, '4', 'Wordpress Virtual Assitance', 'Clean up the website', 'wordpress-virtual-assitance', 'Ayodeji', NULL, 'okolade@nownow.ng', '08076493502', 'NowNow Digital Systems', '1', 'Full-Time', NULL, 'E-commerce', '6', NULL, 'No Preference', NULL, 'HND', 'Skilled', '₦0 - ₦0', NULL, 'Lagos State', 'undefined', '1', '2024-05-15', '2024-05-11 04:52:26', '2024-05-11 04:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `employer_requests`
--

CREATE TABLE `employer_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `industry` longtext DEFAULT NULL,
  `position` longtext DEFAULT NULL,
  `hire_type` longtext DEFAULT NULL,
  `quantity` longtext DEFAULT NULL,
  `role_description` longtext DEFAULT NULL,
  `age_range` longtext DEFAULT NULL,
  `gender` longtext DEFAULT NULL,
  `experience` longtext DEFAULT NULL,
  `level_of_education` longtext DEFAULT NULL,
  `it_skills` longtext DEFAULT NULL,
  `basic_salary` longtext DEFAULT NULL,
  `allowances` longtext DEFAULT NULL,
  `state` longtext DEFAULT NULL,
  `city` longtext DEFAULT NULL,
  `interview_date` longtext DEFAULT NULL,
  `interview_time` longtext DEFAULT NULL,
  `interview_venue` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `year` longtext DEFAULT NULL,
  `purpose` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `desc`, `year`, `purpose`, `created_at`, `updated_at`) VALUES
(1, '8', 'Airtel BPO', NULL, '2013-2016', 'Customer service Supervisor', '2024-05-04 18:59:12', '2024-05-04 18:59:12'),
(2, '8', 'Medway NHS Maritime Hospital', NULL, '2021-2022', 'Clinical support worker', '2024-05-05 14:04:03', '2024-05-05 14:04:03'),
(3, '8', 'Voyage care', NULL, '2020-2021', 'Support worker', '2024-05-05 14:05:14', '2024-05-05 14:05:14'),
(4, '8', 'Nomase care limited', NULL, '2017-2019', 'Health care assistant', '2024-05-05 14:05:51', '2024-05-05 14:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_requests`
--

CREATE TABLE `hiring_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` varchar(10) DEFAULT NULL,
  `artisan_id` varchar(10) DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `industry` longtext DEFAULT NULL,
  `position` longtext DEFAULT NULL,
  `hire_type` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `artisan_request_id` varchar(255) DEFAULT NULL,
  `client_id` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `service` longtext DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(100) DEFAULT NULL,
  `employer_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `location_address` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `dob` longtext DEFAULT NULL,
  `skills` longtext DEFAULT NULL,
  `skillLevel` longtext DEFAULT NULL,
  `availability` longtext DEFAULT NULL,
  `certification` longtext DEFAULT NULL,
  `cv` longtext DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_mergings`
--

CREATE TABLE `job_mergings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `employer_id` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_mergings`
--

INSERT INTO `job_mergings` (`id`, `user_id`, `job_id`, `employer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '4', '2', '2024-05-11 04:56:05', '2024-05-11 04:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `local_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_19_112332_create_user_table', 1),
(3, '2022_08_09_161425_create_business_categories_table', 1),
(4, '2022_08_10_064619_create_subscriptions_table', 1),
(5, '2022_08_10_150532_create_chat_messages_table', 1),
(6, '2022_08_10_214919_create_artisan_services_table', 1),
(7, '2022_08_10_221236_create_client_requests_table', 1),
(8, '2022_08_16_070852_create_employer_requests_table', 1),
(9, '2022_08_16_085016_create_job_applications_table', 1),
(10, '2022_08_16_104109_create_call_backs_table', 1),
(11, '2022_08_17_222219_create_invoices_table', 1),
(12, '2022_08_20_084441_create_employer_jobs_table', 1),
(13, '2022_08_22_193617_create_hiring_requests_table', 1),
(14, '2022_08_24_144312_create_job_mergings_table', 1),
(15, '2022_08_25_063740_create_customer_ratings_table', 1),
(16, '2022_08_25_072640_create_education_table', 1),
(17, '2022_08_25_072703_create_experiences_table', 1),
(18, '2022_08_25_072740_create_awards_and_certificates_table', 1),
(19, '2022_08_27_183921_create_artisan_galleries_table', 1),
(22, '2022_09_06_090816_create_contact_us_table', 1),
(23, '2022_10_21_092919_add_foreign_key_to_artisan_services', 1),
(24, '2023_10_10_200415_create_countries_table', 2),
(25, '2023_10_10_220719_create_states_table', 3),
(26, '2023_10_10_220802_create_state_areas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 211, 'Abia State', 1, NULL, NULL),
(2, 211, 'Adamawa State', 1, NULL, NULL),
(3, 211, 'Akwa Ibom State', 1, NULL, NULL),
(4, 211, 'Anambra State', 1, NULL, NULL),
(5, 211, 'Bauchi State', 1, NULL, NULL),
(6, 211, 'Bayelsa State', 1, NULL, NULL),
(7, 211, 'Benue State', 1, NULL, NULL),
(8, 211, 'Borno State', 1, NULL, NULL),
(9, 211, 'Cross River State', 1, NULL, NULL),
(10, 211, 'Delta State', 1, NULL, NULL),
(11, 211, 'Ebonyi State', 1, NULL, NULL),
(12, 211, 'Edo State', 1, NULL, NULL),
(13, 211, 'Ekiti State', 1, NULL, NULL),
(14, 211, 'Enugu State', 1, NULL, NULL),
(15, 211, 'FCT', 1, NULL, NULL),
(16, 211, 'Gombe State', 1, NULL, NULL),
(17, 211, 'Imo State', 1, NULL, NULL),
(18, 211, 'Jigawa State', 1, NULL, NULL),
(19, 211, 'Kaduna State', 1, NULL, NULL),
(20, 211, 'Kano State', 1, NULL, NULL),
(21, 211, 'Katsina State', 1, NULL, NULL),
(22, 211, 'Kebbi State', 1, NULL, NULL),
(23, 211, 'Kogi State', 1, NULL, NULL),
(24, 211, 'Kwara State', 1, NULL, NULL),
(25, 211, 'Lagos State', 1, NULL, NULL),
(26, 211, 'Nasarawa State', 1, NULL, NULL),
(27, 211, 'Niger State', 1, NULL, NULL),
(28, 211, 'Ogun State', 1, NULL, NULL),
(29, 211, 'Ondo State', 1, NULL, NULL),
(30, 211, 'Osun State', 1, NULL, NULL),
(31, 211, 'Oyo State', 1, NULL, NULL),
(32, 211, 'Plateau State', 1, NULL, NULL),
(33, 211, 'Rivers State', 1, NULL, NULL),
(34, 211, 'Sokoto State', 1, NULL, NULL),
(35, 211, 'Taraba State', 1, NULL, NULL),
(36, 211, 'Yobe State', 1, NULL, NULL),
(37, 211, 'Zamfara State', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state_areas`
--

CREATE TABLE `state_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state_areas`
--

INSERT INTO `state_areas` (`id`, `state_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aba South', 1, NULL, NULL),
(2, 1, 'Arochukwu', 1, NULL, NULL),
(3, 1, 'Bende', 1, NULL, NULL),
(4, 1, 'Ikwuano', 1, NULL, NULL),
(5, 1, 'Isiala Ngwa North', 1, NULL, NULL),
(6, 1, 'Isiala Ngwa South', 1, NULL, NULL),
(7, 1, 'Isuikwuato', 1, NULL, NULL),
(8, 1, 'Obi Ngwa', 1, NULL, NULL),
(9, 1, 'Ohafia', 1, NULL, NULL),
(10, 1, 'Osisioma', 1, NULL, NULL),
(11, 1, 'Ugwunagbo', 1, NULL, NULL),
(12, 1, 'Ukwa East', 1, NULL, NULL),
(13, 1, 'Ukwa West', 1, NULL, NULL),
(14, 1, 'Umuahia North', 1, NULL, NULL),
(15, 1, 'Umuahia South', 1, NULL, NULL),
(16, 1, 'Umu Nneochi', 1, NULL, NULL),
(17, 2, 'Fufure', 1, NULL, NULL),
(18, 2, 'Ganye', 1, NULL, NULL),
(19, 2, 'Gayuk', 1, NULL, NULL),
(20, 2, 'Gombi', 1, NULL, NULL),
(21, 2, 'Grie', 1, NULL, NULL),
(22, 2, 'Hong', 1, NULL, NULL),
(23, 2, 'Jada', 1, NULL, NULL),
(24, 2, 'Lamurde', 1, NULL, NULL),
(25, 2, 'Madagali', 1, NULL, NULL),
(26, 2, 'Maiha', 1, NULL, NULL),
(27, 2, 'Mayo Belwa', 1, NULL, NULL),
(28, 2, 'Michika', 1, NULL, NULL),
(29, 2, 'Mubi North', 1, NULL, NULL),
(30, 2, 'Mubi South', 1, NULL, NULL),
(31, 2, 'Numan', 1, NULL, NULL),
(32, 2, 'Shelleng', 1, NULL, NULL),
(33, 2, 'Song', 1, NULL, NULL),
(34, 2, 'Toungo', 1, NULL, NULL),
(35, 2, 'Yola North', 1, NULL, NULL),
(36, 2, 'Yola South', 1, NULL, NULL),
(37, 3, 'Eastern Obolo', 1, NULL, NULL),
(38, 3, 'Eket', 1, NULL, NULL),
(39, 3, 'Esit Eket', 1, NULL, NULL),
(40, 3, 'Essien Udim', 1, NULL, NULL),
(41, 3, 'Etim Ekpo', 1, NULL, NULL),
(42, 3, 'Etinan', 1, NULL, NULL),
(43, 3, 'Ibeno', 1, NULL, NULL),
(44, 3, 'Ibesikpo Asutan', 1, NULL, NULL),
(45, 3, 'Ibiono-Ibom', 1, NULL, NULL),
(46, 3, 'Ika', 1, NULL, NULL),
(47, 3, 'Ikono', 1, NULL, NULL),
(48, 3, 'Ikot Abasi', 1, NULL, NULL),
(49, 3, 'Ikot Ekpene', 1, NULL, NULL),
(50, 3, 'Ini', 1, NULL, NULL),
(51, 3, 'Itu', 1, NULL, NULL),
(52, 3, 'Mbo', 1, NULL, NULL),
(53, 3, 'Mkpat-Enin', 1, NULL, NULL),
(54, 3, 'Nsit-Atai', 1, NULL, NULL),
(55, 3, 'Nsit-Ibom', 1, NULL, NULL),
(56, 3, 'Nsit-Ubium', 1, NULL, NULL),
(57, 3, 'Obot Akara', 1, NULL, NULL),
(58, 3, 'Okobo', 1, NULL, NULL),
(59, 3, 'Onna', 1, NULL, NULL),
(60, 3, 'Oron', 1, NULL, NULL),
(61, 3, 'Oruk Anam', 1, NULL, NULL),
(62, 3, 'Udung-Uko', 1, NULL, NULL),
(63, 3, 'Ukanafun', 1, NULL, NULL),
(64, 3, 'Uruan', 1, NULL, NULL),
(65, 3, 'Urue-Offong/Oruko', 1, NULL, NULL),
(66, 3, 'Uyo', 1, NULL, NULL),
(67, 4, 'Anambra East', 1, NULL, NULL),
(68, 4, 'Anambra West', 1, NULL, NULL),
(69, 4, 'Anaocha', 1, NULL, NULL),
(70, 4, 'Awka North', 1, NULL, NULL),
(71, 4, 'Awka South', 1, NULL, NULL),
(72, 4, 'Ayamelum', 1, NULL, NULL),
(73, 4, 'Dunukofia', 1, NULL, NULL),
(74, 4, 'Ekwusigo', 1, NULL, NULL),
(75, 4, 'Idemili North', 1, NULL, NULL),
(76, 4, 'Idemili South', 1, NULL, NULL),
(77, 4, 'Ihiala', 1, NULL, NULL),
(78, 4, 'Njikoka', 1, NULL, NULL),
(79, 4, 'Nnewi North', 1, NULL, NULL),
(80, 4, 'Nnewi South', 1, NULL, NULL),
(81, 4, 'Ogbaru', 1, NULL, NULL),
(82, 4, 'Onitsha North', 1, NULL, NULL),
(83, 4, 'Onitsha South', 1, NULL, NULL),
(84, 4, 'Orumba North', 1, NULL, NULL),
(85, 4, 'Orumba South', 1, NULL, NULL),
(86, 4, 'Oyi', 1, NULL, NULL),
(87, 5, 'Bauchi', 1, NULL, NULL),
(88, 5, 'Bogoro', 1, NULL, NULL),
(89, 5, 'Damban', 1, NULL, NULL),
(90, 5, 'Darazo', 1, NULL, NULL),
(91, 5, 'Dass', 1, NULL, NULL),
(92, 5, 'Gamawa', 1, NULL, NULL),
(93, 5, 'Ganjuwa', 1, NULL, NULL),
(94, 5, 'Giade', 1, NULL, NULL),
(95, 5, 'Itas/Gadau', 1, NULL, NULL),
(96, 5, 'Jama\'are', 1, NULL, NULL),
(97, 5, 'Katagum', 1, NULL, NULL),
(98, 5, 'Kirfi', 1, NULL, NULL),
(99, 5, 'Misau', 1, NULL, NULL),
(100, 5, 'Ningi', 1, NULL, NULL),
(101, 5, 'Shira', 1, NULL, NULL),
(102, 5, 'Tafawa Balewa', 1, NULL, NULL),
(103, 5, 'Toro', 1, NULL, NULL),
(104, 5, 'Warji', 1, NULL, NULL),
(105, 5, 'Zaki', 1, NULL, NULL),
(106, 6, 'Ekeremor', 1, NULL, NULL),
(107, 6, 'Kolokuma/Opokuma', 1, NULL, NULL),
(108, 6, 'Nembe', 1, NULL, NULL),
(109, 6, 'Ogbia', 1, NULL, NULL),
(110, 6, 'Sagbama', 1, NULL, NULL),
(111, 6, 'Southern Ijaw', 1, NULL, NULL),
(112, 6, 'Yenagoa', 1, NULL, NULL),
(113, 7, 'Apa', 1, NULL, NULL),
(114, 7, 'Ado', 1, NULL, NULL),
(115, 7, 'Buruku', 1, NULL, NULL),
(116, 7, 'Gboko', 1, NULL, NULL),
(117, 7, 'Guma', 1, NULL, NULL),
(118, 7, 'Gwer East', 1, NULL, NULL),
(119, 7, 'Gwer West', 1, NULL, NULL),
(120, 7, 'Katsina-Ala', 1, NULL, NULL),
(121, 7, 'Konshisha', 1, NULL, NULL),
(122, 7, 'Kwande', 1, NULL, NULL),
(123, 7, 'Logo', 1, NULL, NULL),
(124, 7, 'Makurdi', 1, NULL, NULL),
(125, 7, 'Obi', 1, NULL, NULL),
(126, 7, 'Ogbadibo', 1, NULL, NULL),
(127, 7, 'Ohimini', 1, NULL, NULL),
(128, 7, 'Oju', 1, NULL, NULL),
(129, 7, 'Okpokwu', 1, NULL, NULL),
(130, 7, 'Oturkpo', 1, NULL, NULL),
(131, 7, 'Tarka', 1, NULL, NULL),
(132, 7, 'Ukum', 1, NULL, NULL),
(133, 7, 'Ushongo', 1, NULL, NULL),
(134, 7, 'Vandeikya', 1, NULL, NULL),
(135, 8, 'Askira/Uba', 1, NULL, NULL),
(136, 8, 'Bama', 1, NULL, NULL),
(137, 8, 'Bayo', 1, NULL, NULL),
(138, 8, 'Biu', 1, NULL, NULL),
(139, 8, 'Chibok', 1, NULL, NULL),
(140, 8, 'Damboa', 1, NULL, NULL),
(141, 8, 'Dikwa', 1, NULL, NULL),
(142, 8, 'Gubio', 1, NULL, NULL),
(143, 8, 'Guzamala', 1, NULL, NULL),
(144, 8, 'Gwoza', 1, NULL, NULL),
(145, 8, 'Hawul', 1, NULL, NULL),
(146, 8, 'Jere', 1, NULL, NULL),
(147, 8, 'Kaga', 1, NULL, NULL),
(148, 8, 'Kala/Balge', 1, NULL, NULL),
(149, 8, 'Konduga', 1, NULL, NULL),
(150, 8, 'Kukawa', 1, NULL, NULL),
(151, 8, 'Kwaya Kusar', 1, NULL, NULL),
(152, 8, 'Mafa', 1, NULL, NULL),
(153, 8, 'Magumeri', 1, NULL, NULL),
(154, 8, 'Maiduguri', 1, NULL, NULL),
(155, 8, 'Marte', 1, NULL, NULL),
(156, 8, 'Mobbar', 1, NULL, NULL),
(157, 8, 'Monguno', 1, NULL, NULL),
(158, 8, 'Ngala', 1, NULL, NULL),
(159, 8, 'Nganzai', 1, NULL, NULL),
(160, 8, 'Shani', 1, NULL, NULL),
(161, 9, 'Akamkpa', 1, NULL, NULL),
(162, 9, 'Akpabuyo', 1, NULL, NULL),
(163, 9, 'Bakassi', 1, NULL, NULL),
(164, 9, 'Bekwarra', 1, NULL, NULL),
(165, 9, 'Biase', 1, NULL, NULL),
(166, 9, 'Boki', 1, NULL, NULL),
(167, 9, 'Calabar Municipal', 1, NULL, NULL),
(168, 9, 'Calabar South', 1, NULL, NULL),
(169, 9, 'Etung', 1, NULL, NULL),
(170, 9, 'Ikom', 1, NULL, NULL),
(171, 9, 'Obanliku', 1, NULL, NULL),
(172, 9, 'Obubra', 1, NULL, NULL),
(173, 9, 'Obudu', 1, NULL, NULL),
(174, 9, 'Odukpani', 1, NULL, NULL),
(175, 9, 'Ogoja', 1, NULL, NULL),
(176, 9, 'Yakuur', 1, NULL, NULL),
(177, 9, 'Yala', 1, NULL, NULL),
(178, 10, 'Aniocha South', 1, NULL, NULL),
(179, 10, 'Bomadi', 1, NULL, NULL),
(180, 10, 'Burutu', 1, NULL, NULL),
(181, 10, 'Ethiope East', 1, NULL, NULL),
(182, 10, 'Ethiope West', 1, NULL, NULL),
(183, 10, 'Ika North East', 1, NULL, NULL),
(184, 10, 'Ika South', 1, NULL, NULL),
(185, 10, 'Isoko North', 1, NULL, NULL),
(186, 10, 'Isoko South', 1, NULL, NULL),
(187, 10, 'Ndokwa East', 1, NULL, NULL),
(188, 10, 'Ndokwa West', 1, NULL, NULL),
(189, 10, 'Okpe', 1, NULL, NULL),
(190, 10, 'Oshimili North', 1, NULL, NULL),
(191, 10, 'Oshimili South', 1, NULL, NULL),
(192, 10, 'Patani', 1, NULL, NULL),
(193, 10, 'Sapele', 1, NULL, NULL),
(194, 10, 'Udu', 1, NULL, NULL),
(195, 10, 'Ughelli North', 1, NULL, NULL),
(196, 10, 'Ughelli South', 1, NULL, NULL),
(197, 10, 'Ukwuani', 1, NULL, NULL),
(198, 10, 'Uvwie', 1, NULL, NULL),
(199, 10, 'Warri North', 1, NULL, NULL),
(200, 10, 'Warri South', 1, NULL, NULL),
(201, 10, 'Warri South West', 1, NULL, NULL),
(202, 11, 'Afikpo North', 1, NULL, NULL),
(203, 11, 'Afikpo South', 1, NULL, NULL),
(204, 11, 'Ebonyi', 1, NULL, NULL),
(205, 11, 'Ezza North', 1, NULL, NULL),
(206, 11, 'Ezza South', 1, NULL, NULL),
(207, 11, 'Ikwo', 1, NULL, NULL),
(208, 11, 'Ishielu', 1, NULL, NULL),
(209, 11, 'Ivo', 1, NULL, NULL),
(210, 11, 'Izzi', 1, NULL, NULL),
(211, 11, 'Ohaozara', 1, NULL, NULL),
(212, 11, 'Ohaukwu', 1, NULL, NULL),
(213, 11, 'Onicha', 1, NULL, NULL),
(214, 12, 'Egor', 1, NULL, NULL),
(215, 12, 'Esan Central', 1, NULL, NULL),
(216, 12, 'Esan North-East', 1, NULL, NULL),
(217, 12, 'Esan South-East', 1, NULL, NULL),
(218, 12, 'Esan West', 1, NULL, NULL),
(219, 12, 'Etsako Central', 1, NULL, NULL),
(220, 12, 'Etsako East', 1, NULL, NULL),
(221, 12, 'Etsako West', 1, NULL, NULL),
(222, 12, 'Igueben', 1, NULL, NULL),
(223, 12, 'Ikpoba Okha', 1, NULL, NULL),
(224, 12, 'Orhionmwon', 1, NULL, NULL),
(225, 12, 'Oredo', 1, NULL, NULL),
(226, 12, 'Ovia North-East', 1, NULL, NULL),
(227, 12, 'Ovia South-West', 1, NULL, NULL),
(228, 12, 'Owan East', 1, NULL, NULL),
(229, 12, 'Owan West', 1, NULL, NULL),
(230, 12, 'Uhunmwonde', 1, NULL, NULL),
(231, 13, 'Efon', 1, NULL, NULL),
(232, 13, 'Ekiti East', 1, NULL, NULL),
(233, 13, 'Ekiti South-West', 1, NULL, NULL),
(234, 13, 'Ekiti West', 1, NULL, NULL),
(235, 13, 'Emure', 1, NULL, NULL),
(236, 13, 'Gbonyin', 1, NULL, NULL),
(237, 13, 'Ido Osi', 1, NULL, NULL),
(238, 13, 'Ijero', 1, NULL, NULL),
(239, 13, 'Ikere', 1, NULL, NULL),
(240, 13, 'Ikole', 1, NULL, NULL),
(241, 13, 'Ilejemeje', 1, NULL, NULL),
(242, 13, 'Irepodun/Ifelodun', 1, NULL, NULL),
(243, 13, 'Ise/Orun', 1, NULL, NULL),
(244, 13, 'Moba', 1, NULL, NULL),
(245, 13, 'Oye', 1, NULL, NULL),
(246, 14, 'Awgu', 1, NULL, NULL),
(247, 14, 'Enugu East', 1, NULL, NULL),
(248, 14, 'Enugu North', 1, NULL, NULL),
(249, 14, 'Enugu South', 1, NULL, NULL),
(250, 14, 'Ezeagu', 1, NULL, NULL),
(251, 14, 'Igbo Etiti', 1, NULL, NULL),
(252, 14, 'Igbo Eze North', 1, NULL, NULL),
(253, 14, 'Igbo Eze South', 1, NULL, NULL),
(254, 14, 'Isi Uzo', 1, NULL, NULL),
(255, 14, 'Nkanu East', 1, NULL, NULL),
(256, 14, 'Nkanu West', 1, NULL, NULL),
(257, 14, 'Nsukka', 1, NULL, NULL),
(258, 14, 'Oji River', 1, NULL, NULL),
(259, 14, 'Udenu', 1, NULL, NULL),
(260, 14, 'Udi', 1, NULL, NULL),
(261, 14, 'Uzo Uwani', 1, NULL, NULL),
(262, 15, 'Bwari', 1, NULL, NULL),
(263, 15, 'Gwagwalada', 1, NULL, NULL),
(264, 15, 'Kuje', 1, NULL, NULL),
(265, 15, 'Kwali', 1, NULL, NULL),
(266, 15, 'Municipal Area Council', 1, NULL, NULL),
(267, 16, 'Balanga', 1, NULL, NULL),
(268, 16, 'Billiri', 1, NULL, NULL),
(269, 16, 'Dukku', 1, NULL, NULL),
(270, 16, 'Funakaye', 1, NULL, NULL),
(271, 16, 'Gombe', 1, NULL, NULL),
(272, 16, 'Kaltungo', 1, NULL, NULL),
(273, 16, 'Kwami', 1, NULL, NULL),
(274, 16, 'Nafada', 1, NULL, NULL),
(275, 16, 'Shongom', 1, NULL, NULL),
(276, 16, 'Yamaltu/Deba', 1, NULL, NULL),
(277, 17, 'Ahiazu Mbaise', 1, NULL, NULL),
(278, 17, 'Ehime Mbano', 1, NULL, NULL),
(279, 17, 'Ezinihitte', 1, NULL, NULL),
(280, 17, 'Ideato North', 1, NULL, NULL),
(281, 17, 'Ideato South', 1, NULL, NULL),
(282, 17, 'Ihitte/Uboma', 1, NULL, NULL),
(283, 17, 'Ikeduru', 1, NULL, NULL),
(284, 17, 'Isiala Mbano', 1, NULL, NULL),
(285, 17, 'Isu', 1, NULL, NULL),
(286, 17, 'Mbaitoli', 1, NULL, NULL),
(287, 17, 'Ngor Okpala', 1, NULL, NULL),
(288, 17, 'Njaba', 1, NULL, NULL),
(289, 17, 'Nkwerre', 1, NULL, NULL),
(290, 17, 'Nwangele', 1, NULL, NULL),
(291, 17, 'Obowo', 1, NULL, NULL),
(292, 17, 'Oguta', 1, NULL, NULL),
(293, 17, 'Ohaji/Egbema', 1, NULL, NULL),
(294, 17, 'Okigwe', 1, NULL, NULL),
(295, 17, 'Orlu', 1, NULL, NULL),
(296, 17, 'Orsu', 1, NULL, NULL),
(297, 17, 'Oru East', 1, NULL, NULL),
(298, 17, 'Oru West', 1, NULL, NULL),
(299, 17, 'Owerri Municipal', 1, NULL, NULL),
(300, 17, 'Owerri North', 1, NULL, NULL),
(301, 17, 'Owerri West', 1, NULL, NULL),
(302, 17, 'Unuimo', 1, NULL, NULL),
(303, 18, 'Babura', 1, NULL, NULL),
(304, 18, 'Biriniwa', 1, NULL, NULL),
(305, 18, 'Birnin Kudu', 1, NULL, NULL),
(306, 18, 'Buji', 1, NULL, NULL),
(307, 18, 'Dutse', 1, NULL, NULL),
(308, 18, 'Gagarawa', 1, NULL, NULL),
(309, 18, 'Garki', 1, NULL, NULL),
(310, 18, 'Gumel', 1, NULL, NULL),
(311, 18, 'Guri', 1, NULL, NULL),
(312, 18, 'Gwaram', 1, NULL, NULL),
(313, 18, 'Gwiwa', 1, NULL, NULL),
(314, 18, 'Hadejia', 1, NULL, NULL),
(315, 18, 'Jahun', 1, NULL, NULL),
(316, 18, 'Kafin Hausa', 1, NULL, NULL),
(317, 18, 'Kazaure', 1, NULL, NULL),
(318, 18, 'Kiri Kasama', 1, NULL, NULL),
(319, 18, 'Kiyawa', 1, NULL, NULL),
(320, 18, 'Kaugama', 1, NULL, NULL),
(321, 18, 'Maigatari', 1, NULL, NULL),
(322, 18, 'Malam Madori', 1, NULL, NULL),
(323, 18, 'Miga', 1, NULL, NULL),
(324, 18, 'Ringim', 1, NULL, NULL),
(325, 18, 'Roni', 1, NULL, NULL),
(326, 18, 'Sule Tankarkar', 1, NULL, NULL),
(327, 18, 'Taura', 1, NULL, NULL),
(328, 18, 'Yankwashi', 1, NULL, NULL),
(329, 19, 'Chikun', 1, NULL, NULL),
(330, 19, 'Giwa', 1, NULL, NULL),
(331, 19, 'Igabi', 1, NULL, NULL),
(332, 19, 'Ikara', 1, NULL, NULL),
(333, 19, 'Jaba', 1, NULL, NULL),
(334, 19, 'Jema\'a', 1, NULL, NULL),
(335, 19, 'Kachia', 1, NULL, NULL),
(336, 19, 'Kaduna North', 1, NULL, NULL),
(337, 19, 'Kaduna South', 1, NULL, NULL),
(338, 19, 'Kagarko', 1, NULL, NULL),
(339, 19, 'Kajuru', 1, NULL, NULL),
(340, 19, 'Kaura', 1, NULL, NULL),
(341, 19, 'Kauru', 1, NULL, NULL),
(342, 19, 'Kubau', 1, NULL, NULL),
(343, 19, 'Kudan', 1, NULL, NULL),
(344, 19, 'Lere', 1, NULL, NULL),
(345, 19, 'Makarfi', 1, NULL, NULL),
(346, 19, 'Sabon Gari', 1, NULL, NULL),
(347, 19, 'Sanga', 1, NULL, NULL),
(348, 19, 'Soba', 1, NULL, NULL),
(349, 19, 'Zangon Kataf', 1, NULL, NULL),
(350, 19, 'Zaria', 1, NULL, NULL),
(351, 20, 'Albasu', 1, NULL, NULL),
(352, 20, 'Bagwai', 1, NULL, NULL),
(353, 20, 'Bebeji', 1, NULL, NULL),
(354, 20, 'Bichi', 1, NULL, NULL),
(355, 20, 'Bunkure', 1, NULL, NULL),
(356, 20, 'Dala', 1, NULL, NULL),
(357, 20, 'Dambatta', 1, NULL, NULL),
(358, 20, 'Dawakin Kudu', 1, NULL, NULL),
(359, 20, 'Dawakin Tofa', 1, NULL, NULL),
(360, 20, 'Doguwa', 1, NULL, NULL),
(361, 20, 'Fagge', 1, NULL, NULL),
(362, 20, 'Gabasawa', 1, NULL, NULL),
(363, 20, 'Garko', 1, NULL, NULL),
(364, 20, 'Garun Mallam', 1, NULL, NULL),
(365, 20, 'Gaya', 1, NULL, NULL),
(366, 20, 'Gezawa', 1, NULL, NULL),
(367, 20, 'Gwale', 1, NULL, NULL),
(368, 20, 'Gwarzo', 1, NULL, NULL),
(369, 20, 'Kabo', 1, NULL, NULL),
(370, 20, 'Kano Municipal', 1, NULL, NULL),
(371, 20, 'Karaye', 1, NULL, NULL),
(372, 20, 'Kibiya', 1, NULL, NULL),
(373, 20, 'Kiru', 1, NULL, NULL),
(374, 20, 'Kumbotso', 1, NULL, NULL),
(375, 20, 'Kunchi', 1, NULL, NULL),
(376, 20, 'Kura', 1, NULL, NULL),
(377, 20, 'Madobi', 1, NULL, NULL),
(378, 20, 'Makoda', 1, NULL, NULL),
(379, 20, 'Minjibir', 1, NULL, NULL),
(380, 20, 'Nasarawa', 1, NULL, NULL),
(381, 20, 'Rano', 1, NULL, NULL),
(382, 20, 'Rimin Gado', 1, NULL, NULL),
(383, 20, 'Rogo', 1, NULL, NULL),
(384, 20, 'Shanono', 1, NULL, NULL),
(385, 20, 'Sumaila', 1, NULL, NULL),
(386, 20, 'Takai', 1, NULL, NULL),
(387, 20, 'Tarauni', 1, NULL, NULL),
(388, 20, 'Tofa', 1, NULL, NULL),
(389, 20, 'Tsanyawa', 1, NULL, NULL),
(390, 20, 'Tudun Wada', 1, NULL, NULL),
(391, 20, 'Ungogo', 1, NULL, NULL),
(392, 20, 'Warawa', 1, NULL, NULL),
(393, 20, 'Wudil', 1, NULL, NULL),
(394, 21, 'Batagarawa', 1, NULL, NULL),
(395, 21, 'Batsari', 1, NULL, NULL),
(396, 21, 'Baure', 1, NULL, NULL),
(397, 21, 'Bindawa', 1, NULL, NULL),
(398, 21, 'Charanchi', 1, NULL, NULL),
(399, 21, 'Dandume', 1, NULL, NULL),
(400, 21, 'Danja', 1, NULL, NULL),
(401, 21, 'Dan Musa', 1, NULL, NULL),
(402, 21, 'Daura', 1, NULL, NULL),
(403, 21, 'Dutsi', 1, NULL, NULL),
(404, 21, 'Dutsin Ma', 1, NULL, NULL),
(405, 21, 'Faskari', 1, NULL, NULL),
(406, 21, 'Funtua', 1, NULL, NULL),
(407, 21, 'Ingawa', 1, NULL, NULL),
(408, 21, 'Jibia', 1, NULL, NULL),
(409, 21, 'Kafur', 1, NULL, NULL),
(410, 21, 'Kaita', 1, NULL, NULL),
(411, 21, 'Kankara', 1, NULL, NULL),
(412, 21, 'Kankia', 1, NULL, NULL),
(413, 21, 'Katsina', 1, NULL, NULL),
(414, 21, 'Kurfi', 1, NULL, NULL),
(415, 21, 'Kusada', 1, NULL, NULL),
(416, 21, 'Mai\'Adua', 1, NULL, NULL),
(417, 21, 'Malumfashi', 1, NULL, NULL),
(418, 21, 'Mani', 1, NULL, NULL),
(419, 21, 'Mashi', 1, NULL, NULL),
(420, 21, 'Matazu', 1, NULL, NULL),
(421, 21, 'Musawa', 1, NULL, NULL),
(422, 21, 'Rimi', 1, NULL, NULL),
(423, 21, 'Sabuwa', 1, NULL, NULL),
(424, 21, 'Safana', 1, NULL, NULL),
(425, 21, 'Sandamu', 1, NULL, NULL),
(426, 21, 'Zango', 1, NULL, NULL),
(427, 22, 'Arewa Dandi', 1, NULL, NULL),
(428, 22, 'Argungu', 1, NULL, NULL),
(429, 22, 'Augie', 1, NULL, NULL),
(430, 22, 'Bagudo', 1, NULL, NULL),
(431, 22, 'Birnin Kebbi', 1, NULL, NULL),
(432, 22, 'Bunza', 1, NULL, NULL),
(433, 22, 'Dandi', 1, NULL, NULL),
(434, 22, 'Fakai', 1, NULL, NULL),
(435, 22, 'Gwandu', 1, NULL, NULL),
(436, 22, 'Jega', 1, NULL, NULL),
(437, 22, 'Kalgo', 1, NULL, NULL),
(438, 22, 'Koko/Besse', 1, NULL, NULL),
(439, 22, 'Maiyama', 1, NULL, NULL),
(440, 22, 'Ngaski', 1, NULL, NULL),
(441, 22, 'Sakaba', 1, NULL, NULL),
(442, 22, 'Shanga', 1, NULL, NULL),
(443, 22, 'Suru', 1, NULL, NULL),
(444, 22, 'Wasagu/Danko', 1, NULL, NULL),
(445, 22, 'Yauri', 1, NULL, NULL),
(446, 22, 'Zuru', 1, NULL, NULL),
(447, 23, 'Ajaokuta', 1, NULL, NULL),
(448, 23, 'Ankpa', 1, NULL, NULL),
(449, 23, 'Bassa', 1, NULL, NULL),
(450, 23, 'Dekina', 1, NULL, NULL),
(451, 23, 'Ibaji', 1, NULL, NULL),
(452, 23, 'Idah', 1, NULL, NULL),
(453, 23, 'Igalamela Odolu', 1, NULL, NULL),
(454, 23, 'Ijumu', 1, NULL, NULL),
(455, 23, 'Kabba/Bunu', 1, NULL, NULL),
(456, 23, 'Kogi', 1, NULL, NULL),
(457, 23, 'Lokoja', 1, NULL, NULL),
(458, 23, 'Mopa Muro', 1, NULL, NULL),
(459, 23, 'Ofu', 1, NULL, NULL),
(460, 23, 'Ogori/Magongo', 1, NULL, NULL),
(461, 23, 'Okehi', 1, NULL, NULL),
(462, 23, 'Okene', 1, NULL, NULL),
(463, 23, 'Olamaboro', 1, NULL, NULL),
(464, 23, 'Omala', 1, NULL, NULL),
(465, 23, 'Yagba East', 1, NULL, NULL),
(466, 23, 'Yagba West', 1, NULL, NULL),
(467, 24, 'Baruten', 1, NULL, NULL),
(468, 24, 'Edu', 1, NULL, NULL),
(469, 24, 'Ekiti', 1, NULL, NULL),
(470, 24, 'Ifelodun', 1, NULL, NULL),
(471, 24, 'Ilorin East', 1, NULL, NULL),
(472, 24, 'Ilorin South', 1, NULL, NULL),
(473, 24, 'Ilorin West', 1, NULL, NULL),
(474, 24, 'Irepodun', 1, NULL, NULL),
(475, 24, 'Isin', 1, NULL, NULL),
(476, 24, 'Kaiama', 1, NULL, NULL),
(477, 24, 'Moro', 1, NULL, NULL),
(478, 24, 'Offa', 1, NULL, NULL),
(479, 24, 'Oke Ero', 1, NULL, NULL),
(480, 24, 'Oyun', 1, NULL, NULL),
(481, 24, 'Pategi', 1, NULL, NULL),
(482, 25, 'Ajeromi-Ifelodun', 1, NULL, NULL),
(483, 25, 'Alimosho', 1, NULL, NULL),
(484, 25, 'Amuwo-Odofin', 1, NULL, NULL),
(485, 25, 'Apapa', 1, NULL, NULL),
(486, 25, 'Badagry', 1, NULL, NULL),
(487, 25, 'Epe', 1, NULL, NULL),
(488, 25, 'Eti Osa', 1, NULL, NULL),
(489, 25, 'Ibeju-Lekki', 1, NULL, NULL),
(490, 25, 'Ifako-Ijaiye', 1, NULL, NULL),
(491, 25, 'Ikeja', 1, NULL, NULL),
(492, 25, 'Ikorodu', 1, NULL, NULL),
(493, 25, 'Kosofe', 1, NULL, NULL),
(494, 25, 'Lagos Island', 1, NULL, NULL),
(495, 25, 'Lagos Mainland', 1, NULL, NULL),
(496, 25, 'Mushin', 1, NULL, NULL),
(497, 25, 'Ojo', 1, NULL, NULL),
(498, 25, 'Oshodi-Isolo', 1, NULL, NULL),
(499, 25, 'Shomolu', 1, NULL, NULL),
(500, 25, 'Surulere', 1, NULL, NULL),
(501, 26, 'Awe', 1, NULL, NULL),
(502, 26, 'Doma', 1, NULL, NULL),
(503, 26, 'Karu', 1, NULL, NULL),
(504, 26, 'Keana', 1, NULL, NULL),
(505, 26, 'Keffi', 1, NULL, NULL),
(506, 26, 'Kokona', 1, NULL, NULL),
(507, 26, 'Lafia', 1, NULL, NULL),
(508, 26, 'Nasarawa', 1, NULL, NULL),
(509, 26, 'Nasarawa Egon', 1, NULL, NULL),
(510, 26, 'Obi', 1, NULL, NULL),
(511, 26, 'Toto', 1, NULL, NULL),
(512, 26, 'Wamba', 1, NULL, NULL),
(513, 27, 'Agwara', 1, NULL, NULL),
(514, 27, 'Bida', 1, NULL, NULL),
(515, 27, 'Borgu', 1, NULL, NULL),
(516, 27, 'Bosso', 1, NULL, NULL),
(517, 27, 'Chanchaga', 1, NULL, NULL),
(518, 27, 'Edati', 1, NULL, NULL),
(519, 27, 'Gbako', 1, NULL, NULL),
(520, 27, 'Gurara', 1, NULL, NULL),
(521, 27, 'Katcha', 1, NULL, NULL),
(522, 27, 'Kontagora', 1, NULL, NULL),
(523, 27, 'Lapai', 1, NULL, NULL),
(524, 27, 'Lavun', 1, NULL, NULL),
(525, 27, 'Magama', 1, NULL, NULL),
(526, 27, 'Mariga', 1, NULL, NULL),
(527, 27, 'Mashegu', 1, NULL, NULL),
(528, 27, 'Mokwa', 1, NULL, NULL),
(529, 27, 'Moya', 1, NULL, NULL),
(530, 27, 'Paikoro', 1, NULL, NULL),
(531, 27, 'Rafi', 1, NULL, NULL),
(532, 27, 'Rijau', 1, NULL, NULL),
(533, 27, 'Shiroro', 1, NULL, NULL),
(534, 27, 'Suleja', 1, NULL, NULL),
(535, 27, 'Tafa', 1, NULL, NULL),
(536, 27, 'Wushishi', 1, NULL, NULL),
(537, 28, 'Abeokuta South', 1, NULL, NULL),
(538, 28, 'Ado-Odo/Ota', 1, NULL, NULL),
(539, 28, 'Egbado North', 1, NULL, NULL),
(540, 28, 'Egbado South', 1, NULL, NULL),
(541, 28, 'Ewekoro', 1, NULL, NULL),
(542, 28, 'Ifo', 1, NULL, NULL),
(543, 28, 'Ijebu East', 1, NULL, NULL),
(544, 28, 'Ijebu North', 1, NULL, NULL),
(545, 28, 'Ijebu North East', 1, NULL, NULL),
(546, 28, 'Ijebu Ode', 1, NULL, NULL),
(547, 28, 'Ikenne', 1, NULL, NULL),
(548, 28, 'Imeko Afon', 1, NULL, NULL),
(549, 28, 'Ipokia', 1, NULL, NULL),
(550, 28, 'Obafemi Owode', 1, NULL, NULL),
(551, 28, 'Odeda', 1, NULL, NULL),
(552, 28, 'Odogbolu', 1, NULL, NULL),
(553, 28, 'Ogun Waterside', 1, NULL, NULL),
(554, 28, 'Remo North', 1, NULL, NULL),
(555, 28, 'Shagamu', 1, NULL, NULL),
(556, 29, 'Akoko North-West', 1, NULL, NULL),
(557, 29, 'Akoko South-West', 1, NULL, NULL),
(558, 29, 'Akoko South-East', 1, NULL, NULL),
(559, 29, 'Akure North', 1, NULL, NULL),
(560, 29, 'Akure South', 1, NULL, NULL),
(561, 29, 'Ese Odo', 1, NULL, NULL),
(562, 29, 'Idanre', 1, NULL, NULL),
(563, 29, 'Ifedore', 1, NULL, NULL),
(564, 29, 'Ilaje', 1, NULL, NULL),
(565, 29, 'Ile Oluji/Okeigbo', 1, NULL, NULL),
(566, 29, 'Irele', 1, NULL, NULL),
(567, 29, 'Odigbo', 1, NULL, NULL),
(568, 29, 'Okitipupa', 1, NULL, NULL),
(569, 29, 'Ondo East', 1, NULL, NULL),
(570, 29, 'Ondo West', 1, NULL, NULL),
(571, 29, 'Ose', 1, NULL, NULL),
(572, 29, 'Owo', 1, NULL, NULL),
(573, 30, 'Atakunmosa West', 1, NULL, NULL),
(574, 30, 'Aiyedaade', 1, NULL, NULL),
(575, 30, 'Aiyedire', 1, NULL, NULL),
(576, 30, 'Boluwaduro', 1, NULL, NULL),
(577, 30, 'Boripe', 1, NULL, NULL),
(578, 30, 'Ede North', 1, NULL, NULL),
(579, 30, 'Ede South', 1, NULL, NULL),
(580, 30, 'Ife Central', 1, NULL, NULL),
(581, 30, 'Ife East', 1, NULL, NULL),
(582, 30, 'Ife North', 1, NULL, NULL),
(583, 30, 'Ife South', 1, NULL, NULL),
(584, 30, 'Egbedore', 1, NULL, NULL),
(585, 30, 'Ejigbo', 1, NULL, NULL),
(586, 30, 'Ifedayo', 1, NULL, NULL),
(587, 30, 'Ifelodun', 1, NULL, NULL),
(588, 30, 'Ila', 1, NULL, NULL),
(589, 30, 'Ilesa East', 1, NULL, NULL),
(590, 30, 'Ilesa West', 1, NULL, NULL),
(591, 30, 'Irepodun', 1, NULL, NULL),
(592, 30, 'Irewole', 1, NULL, NULL),
(593, 30, 'Isokan', 1, NULL, NULL),
(594, 30, 'Iwo', 1, NULL, NULL),
(595, 30, 'Obokun', 1, NULL, NULL),
(596, 30, 'Odo Otin', 1, NULL, NULL),
(597, 30, 'Ola Oluwa', 1, NULL, NULL),
(598, 30, 'Olorunda', 1, NULL, NULL),
(599, 30, 'Oriade', 1, NULL, NULL),
(600, 30, 'Orolu', 1, NULL, NULL),
(601, 30, 'Osogbo', 1, NULL, NULL),
(602, 31, 'Akinyele', 1, NULL, NULL),
(603, 31, 'Atiba', 1, NULL, NULL),
(604, 31, 'Atisbo', 1, NULL, NULL),
(605, 31, 'Egbeda', 1, NULL, NULL),
(606, 31, 'Ibadan North', 1, NULL, NULL),
(607, 31, 'Ibadan North-East', 1, NULL, NULL),
(608, 31, 'Ibadan North-West', 1, NULL, NULL),
(609, 31, 'Ibadan South-East', 1, NULL, NULL),
(610, 31, 'Ibadan South-West', 1, NULL, NULL),
(611, 31, 'Ibarapa Central', 1, NULL, NULL),
(612, 31, 'Ibarapa East', 1, NULL, NULL),
(613, 31, 'Ibarapa North', 1, NULL, NULL),
(614, 31, 'Ido', 1, NULL, NULL),
(615, 31, 'Irepo', 1, NULL, NULL),
(616, 31, 'Iseyin', 1, NULL, NULL),
(617, 31, 'Itesiwaju', 1, NULL, NULL),
(618, 31, 'Iwajowa', 1, NULL, NULL),
(619, 31, 'Kajola', 1, NULL, NULL),
(620, 31, 'Lagelu', 1, NULL, NULL),
(621, 31, 'Ogbomosho North', 1, NULL, NULL),
(622, 31, 'Ogbomosho South', 1, NULL, NULL),
(623, 31, 'Ogo Oluwa', 1, NULL, NULL),
(624, 31, 'Olorunsogo', 1, NULL, NULL),
(625, 31, 'Oluyole', 1, NULL, NULL),
(626, 31, 'Ona Ara', 1, NULL, NULL),
(627, 31, 'Orelope', 1, NULL, NULL),
(628, 31, 'Ori Ire', 1, NULL, NULL),
(629, 31, 'Oyo', 1, NULL, NULL),
(630, 31, 'Oyo East', 1, NULL, NULL),
(631, 31, 'Saki East', 1, NULL, NULL),
(632, 31, 'Saki West', 1, NULL, NULL),
(633, 31, 'Surulere', 1, NULL, NULL),
(634, 32, 'Barkin Ladi', 1, NULL, NULL),
(635, 32, 'Bassa', 1, NULL, NULL),
(636, 32, 'Jos East', 1, NULL, NULL),
(637, 32, 'Jos North', 1, NULL, NULL),
(638, 32, 'Jos South', 1, NULL, NULL),
(639, 32, 'Kanam', 1, NULL, NULL),
(640, 32, 'Kanke', 1, NULL, NULL),
(641, 32, 'Langtang South', 1, NULL, NULL),
(642, 32, 'Langtang North', 1, NULL, NULL),
(643, 32, 'Mangu', 1, NULL, NULL),
(644, 32, 'Mikang', 1, NULL, NULL),
(645, 32, 'Pankshin', 1, NULL, NULL),
(646, 32, 'Qua\'an Pan', 1, NULL, NULL),
(647, 32, 'Riyom', 1, NULL, NULL),
(648, 32, 'Shendam', 1, NULL, NULL),
(649, 32, 'Wase', 1, NULL, NULL),
(650, 33, 'Ahoada East', 1, NULL, NULL),
(651, 33, 'Ahoada West', 1, NULL, NULL),
(652, 33, 'Akuku-Toru', 1, NULL, NULL),
(653, 33, 'Andoni', 1, NULL, NULL),
(654, 33, 'Asari-Toru', 1, NULL, NULL),
(655, 33, 'Bonny', 1, NULL, NULL),
(656, 33, 'Degema', 1, NULL, NULL),
(657, 33, 'Eleme', 1, NULL, NULL),
(658, 33, 'Emuoha', 1, NULL, NULL),
(659, 33, 'Etche', 1, NULL, NULL),
(660, 33, 'Gokana', 1, NULL, NULL),
(661, 33, 'Ikwerre', 1, NULL, NULL),
(662, 33, 'Khana', 1, NULL, NULL),
(663, 33, 'Obio/Akpor', 1, NULL, NULL),
(664, 33, 'Ogba/Egbema/Ndoni', 1, NULL, NULL),
(665, 33, 'Ogu/Bolo', 1, NULL, NULL),
(666, 33, 'Okrika', 1, NULL, NULL),
(667, 33, 'Omuma', 1, NULL, NULL),
(668, 33, 'Opobo/Nkoro', 1, NULL, NULL),
(669, 33, 'Oyigbo', 1, NULL, NULL),
(670, 33, 'Port Harcourt', 1, NULL, NULL),
(671, 33, 'Tai', 1, NULL, NULL),
(672, 34, 'Bodinga', 1, NULL, NULL),
(673, 34, 'Dange Shuni', 1, NULL, NULL),
(674, 34, 'Gada', 1, NULL, NULL),
(675, 34, 'Goronyo', 1, NULL, NULL),
(676, 34, 'Gudu', 1, NULL, NULL),
(677, 34, 'Gwadabawa', 1, NULL, NULL),
(678, 34, 'Illela', 1, NULL, NULL),
(679, 34, 'Isa', 1, NULL, NULL),
(680, 34, 'Kebbe', 1, NULL, NULL),
(681, 34, 'Kware', 1, NULL, NULL),
(682, 34, 'Rabah', 1, NULL, NULL),
(683, 34, 'Sabon Birni', 1, NULL, NULL),
(684, 34, 'Shagari', 1, NULL, NULL),
(685, 34, 'Silame', 1, NULL, NULL),
(686, 34, 'Sokoto North', 1, NULL, NULL),
(687, 34, 'Sokoto South', 1, NULL, NULL),
(688, 34, 'Tambuwal', 1, NULL, NULL),
(689, 34, 'Tangaza', 1, NULL, NULL),
(690, 34, 'Tureta', 1, NULL, NULL),
(691, 34, 'Wamako', 1, NULL, NULL),
(692, 34, 'Wurno', 1, NULL, NULL),
(693, 34, 'Yabo', 1, NULL, NULL),
(694, 35, 'Bali', 1, NULL, NULL),
(695, 35, 'Donga', 1, NULL, NULL),
(696, 35, 'Gashaka', 1, NULL, NULL),
(697, 35, 'Gassol', 1, NULL, NULL),
(698, 35, 'Ibi', 1, NULL, NULL),
(699, 35, 'Jalingo', 1, NULL, NULL),
(700, 35, 'Karim Lamido', 1, NULL, NULL),
(701, 35, 'Kumi', 1, NULL, NULL),
(702, 35, 'Lau', 1, NULL, NULL),
(703, 35, 'Sardauna', 1, NULL, NULL),
(704, 35, 'Takum', 1, NULL, NULL),
(705, 35, 'Ussa', 1, NULL, NULL),
(706, 35, 'Wukari', 1, NULL, NULL),
(707, 35, 'Yorro', 1, NULL, NULL),
(708, 35, 'Zing', 1, NULL, NULL),
(709, 36, 'Bursari', 1, NULL, NULL),
(710, 36, 'Damaturu', 1, NULL, NULL),
(711, 36, 'Fika', 1, NULL, NULL),
(712, 36, 'Fune', 1, NULL, NULL),
(713, 36, 'Geidam', 1, NULL, NULL),
(714, 36, 'Gujba', 1, NULL, NULL),
(715, 36, 'Gulani', 1, NULL, NULL),
(716, 36, 'Jakusko', 1, NULL, NULL),
(717, 36, 'Karasuwa', 1, NULL, NULL),
(718, 36, 'Machina', 1, NULL, NULL),
(719, 36, 'Nangere', 1, NULL, NULL),
(720, 36, 'Nguru', 1, NULL, NULL),
(721, 36, 'Potiskum', 1, NULL, NULL),
(722, 36, 'Tarmuwa', 1, NULL, NULL),
(723, 36, 'Yunusari', 1, NULL, NULL),
(724, 36, 'Yusufari', 1, NULL, NULL),
(725, 37, 'Bakura', 1, NULL, NULL),
(726, 37, 'Birnin Magaji/Kiyaw', 1, NULL, NULL),
(727, 37, 'Bukkuyum', 1, NULL, NULL),
(728, 37, 'Bungudu', 1, NULL, NULL),
(729, 37, 'Gummi', 1, NULL, NULL),
(730, 37, 'Gusau', 1, NULL, NULL),
(731, 37, 'Kaura Namoda', 1, NULL, NULL),
(732, 37, 'Maradun', 1, NULL, NULL),
(733, 37, 'Maru', 1, NULL, NULL),
(734, 37, 'Shinkafi', 1, NULL, NULL),
(735, 37, 'Talata Mafara', 1, NULL, NULL),
(736, 37, 'Chafe', 1, NULL, NULL),
(737, 37, 'Zurmi', 1, NULL, NULL),
(738, 25, 'Agege', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_name` longtext DEFAULT NULL,
  `service_purchased` longtext DEFAULT NULL,
  `package` longtext DEFAULT NULL,
  `cost` longtext DEFAULT NULL,
  `subscription_type` longtext DEFAULT NULL,
  `payment_method` longtext DEFAULT NULL,
  `purchase_date` timestamp NULL DEFAULT NULL,
  `expiration_date` timestamp NULL DEFAULT NULL,
  `status` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` longtext DEFAULT NULL,
  `gender` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `identity` varchar(255) DEFAULT NULL,
  `availability` varchar(100) NOT NULL DEFAULT 'ACTIVELY SEARCHING',
  `password` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `date_of_birth` longtext DEFAULT NULL,
  `street_address` longtext DEFAULT NULL,
  `city` longtext DEFAULT NULL,
  `state` longtext DEFAULT NULL,
  `profile_image` longtext DEFAULT NULL,
  `Location_address` longtext DEFAULT NULL,
  `delivery_address` longtext DEFAULT NULL,
  `role` longtext DEFAULT NULL,
  `business_category` longtext DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `business_name` longtext DEFAULT NULL,
  `facebook` longtext DEFAULT NULL,
  `instagram` longtext DEFAULT NULL,
  `work_experience` longtext DEFAULT NULL,
  `website_address` longtext DEFAULT NULL,
  `service_description` longtext DEFAULT NULL,
  `agreement_status` longtext DEFAULT NULL,
  `compensation_type` longtext DEFAULT NULL,
  `job_preference` longtext DEFAULT NULL,
  `min_amount` varchar(50) DEFAULT NULL,
  `max_amount` varchar(50) DEFAULT NULL,
  `category_id` varchar(50) DEFAULT NULL,
  `is_admin` varchar(10) DEFAULT '0',
  `status` varchar(10) DEFAULT '1',
  `verify_code` varchar(50) DEFAULT NULL,
  `is_verified` varchar(255) DEFAULT NULL,
  `remember_token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `gender`, `email`, `identity`, `availability`, `password`, `phone`, `date_of_birth`, `street_address`, `city`, `state`, `profile_image`, `Location_address`, `delivery_address`, `role`, `business_category`, `country`, `business_name`, `facebook`, `instagram`, `work_experience`, `website_address`, `service_description`, `agreement_status`, `compensation_type`, `job_preference`, `min_amount`, `max_amount`, `category_id`, `is_admin`, `status`, `verify_code`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', '306217145262758517145262758682891332', 'ACTIVELY SEARCHING', '$2y$10$YRFLtlHIFop9xfnJe.fFJ.VvQon7QuKqjh/GeOfoJOdJJ5K.Xi/bO', '08039368856', '2024-05-14', 'Lagos', '67', 'Anambra State', NULL, NULL, NULL, 'Artisan', 'JAVA', NULL, NULL, NULL, NULL, '10', 'https://www.wise.com', 'ok', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '645041', NULL, NULL, '2024-05-01 05:17:55', '2024-05-01 11:18:22'),
(2, 'Kolade Olaniyan', NULL, 'Koladeolaniyan@gmail.com', '30621714749032681714749032170541', 'ACTIVELY SEARCHING', '$2y$10$0AHm1dPTxR1pfJTU66dEx.9F1winhc/k3KHWoqKkq0DlSUf8MxS9.', '08076493502', '2019-01-30', 'Eleganza Bustop Lekki', '488', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Social Media Management', NULL, NULL, NULL, NULL, '4', NULL, 'Virtual Assitance', NULL, NULL, NULL, NULL, NULL, '1', '0', '1', '869166', NULL, NULL, '2024-05-03 19:10:32', '2024-05-03 19:10:32'),
(3, 'Chisom Sunday', NULL, 'chisoglo7@gmail.com', '30621714786319531714786319283712', 'ACTIVELY SEARCHING', '$2y$10$7iUNRJ9mP9UBrsTQVfUJWOrItx3k.m86KK/h56ht.DswjGZZrauDq', '08137009764', '1995-02-10', '10 Emmanuel shonuga', '492', 'Lagos State', '1714793815.jpg', NULL, NULL, 'Artisan', 'Data Entry', NULL, NULL, NULL, NULL, '3', NULL, 'I\'m a Data Analyst', NULL, NULL, NULL, NULL, NULL, '2', '0', '1', '828941', NULL, NULL, '2024-05-04 05:31:59', '2024-05-04 07:36:55'),
(4, 'Ayodeji', NULL, 'okolade@nownow.ng', '30621714793206141714793206647884', 'ACTIVELY SEARCHING', '$2y$10$Zs04HOsBiwlbq7Lr3911jO/EMYxa4K5PnevBEoH98DFjRGAsj68Iy', '08076493502', '2014-01-16', 'Lekki Lagos', 'undefined', 'Lagos State', '1715369294.jpeg', NULL, NULL, 'Employer', NULL, NULL, 'CEO', NULL, NULL, NULL, 'www.nownow.ng', 'A Digital System in the finicial World', NULL, NULL, NULL, NULL, NULL, '211', '2', '1', '428510', '1', NULL, '2024-05-04 07:26:46', '2024-05-10 23:28:14'),
(5, 'Abisoye Matti', NULL, 'abisoyemattias2022@gmail.com', '30621714833143301714833143245972', 'ACTIVELY SEARCHING', '$2y$10$d0zDi9Qb.7srGefOqcvZxefJSS/cz/SYPlhN5kpKKHoXi7Im3RnYC', '07404675751', '1987-03-04', 'Achiever', 'Achiever', 'Jigawa State', NULL, NULL, NULL, 'Artisan', 'Social Media Management', NULL, NULL, NULL, NULL, '1', NULL, 'Personal life coach and virtual assistant', NULL, NULL, NULL, NULL, NULL, '1', '0', '1', '994277', NULL, NULL, '2024-05-04 18:32:23', '2024-05-04 18:32:23'),
(6, 'Chioma Nnadi', NULL, 'chiomajecinta07@gmail.com', '30621714833240471714833240136633', 'ACTIVELY SEARCHING', '$2y$10$4UJK1U46RkEHp6plPWyJ0unXJbJPC0CHP3DzJiccqkHERHgGOpCYq', '09012881918', '1990-01-03', 'Josephat james Strt ijegun imore satelite town lagos', '484', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Social Media Management', NULL, NULL, NULL, NULL, '1', NULL, 'Virtual Assistance', NULL, NULL, NULL, NULL, NULL, '1', '0', '1', '494969', NULL, NULL, '2024-05-04 18:34:00', '2024-05-04 18:34:00'),
(7, 'BOLAJI ABOSEDE OMOTUNDE', NULL, 'mshbtosin2008@gmail.com', '30621714833419721714833419135495', 'ACTIVELY SEARCHING', '$2y$10$WH60SuIg7BHV2IjgrfPfm.kE6U/FSNCMMW.65rPwa9e5Z.h4MfZi2', '07081829101', '1977-05-08', 'OJO LAGOS', '497', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Data Entry', NULL, NULL, NULL, NULL, '10', NULL, 'As a virtual assistant, I perform a wide range of tasks to assist individuals and businesses in managing their daily activities more efficiently. Here are some examples of what I can do: scheduling and planning, Email management, writing and editing, customer support.', NULL, NULL, NULL, NULL, NULL, '2', '0', '1', '280276', NULL, NULL, '2024-05-04 18:36:59', '2024-05-04 18:36:59'),
(8, 'Ololade Lateef', NULL, 'lateef.ololade1@gmail.com', '30621714833494621714833494491987', 'ACTIVELY SEARCHING', '$2y$10$1oX6AbuhNHNOriIU97sl5OdJCtvrMfz8yY79N.6WsD8.20kZ0Cz9K', '+447404447211', '1988-09-09', 'Manchester, United Kingdom', 'undefined', NULL, '1714834428.png', NULL, NULL, 'Artisan', 'Customer Service', NULL, 'Virtual Assistant', NULL, NULL, '8', NULL, 'I am a virtual assistant with over 8years customer service experience.\r\n\r\nLet me do the work for you!\r\n\r\nMy skills are:\r\n* Customer Relations and retention \r\n* Customer resolution/ Service \r\n* Email Management\r\n* Calendar Management \r\n* Digital Declutter', NULL, NULL, NULL, NULL, NULL, '3', '0', '1', '193980', NULL, NULL, '2024-05-04 18:38:14', '2024-05-04 18:55:07'),
(9, 'Ogechi Nnaemeka', NULL, 'ogechiemy@gmail.com', '30621714833508701714833508701880', 'ACTIVELY SEARCHING', '$2y$10$Fm5qXatAQWvlZkSJXD71UuoDU2Ei9ol0t0Ex6pZEG2gbPomPrBXz6', '07032533708', '1986-10-07', '11 Francis Bruce close, Rumuagholu, Port Harcourt', '663', 'Rivers State', NULL, NULL, NULL, 'Artisan', 'Administrative', NULL, NULL, NULL, NULL, '3', NULL, 'As a Virtual Assistant, I help business owners organize the administrative aspect of the business so they can have time for the core aspects of the business. I do this by managing Emails, Scheduling appointment, taking phone calls, booking flights etc', NULL, NULL, NULL, NULL, NULL, '4', '0', '1', '555275', NULL, NULL, '2024-05-04 18:38:28', '2024-05-04 18:38:28'),
(10, 'Elizabet Akintade', NULL, 'yetundeakintade@yahoo.com', '30621714833556171714833556183824', 'ACTIVELY SEARCHING', '$2y$10$a9T2RdTltdX8FVKdR5qHouHZzg3NKq051S0GrOjpoBLZJ9zMYCBii', '+2349032387150', '1976-09-27', '25 Agbelekale street, Mafoluku - Oshodi, Lagos', '482', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Administrative', NULL, NULL, NULL, NULL, '10', NULL, 'Administrative, Data Entry, Executive Assistance, Social Media Management', NULL, NULL, NULL, NULL, NULL, '4', '0', '1', '014401', NULL, NULL, '2024-05-04 18:39:16', '2024-05-04 18:39:16'),
(11, 'juliet john', NULL, 'julianssy@gmail.com', '30621714833643851714833643292903', 'ACTIVELY SEARCHING', '$2y$10$lKsdPyTnxA3e/7VdIF/86uwJ1bEfUMacf7/NQ0HYlmJ/8Ox61tDe2', '07066272972', '1989-07-05', 'Cooperative villa off Badore road, lekki Ajah express road', '482', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Data Entry', NULL, NULL, NULL, NULL, '2', 'https://www.norjexdata.com.ng/', 'data entry/ Virtual Assistant', NULL, NULL, NULL, NULL, NULL, '2', '0', '1', '746932', NULL, NULL, '2024-05-04 18:40:43', '2024-05-04 18:40:43'),
(12, 'Abisoye Matti', NULL, 'abisoyemattiad2022@gmail.com', '30621714833654631714833654992754', 'ACTIVELY SEARCHING', '$2y$10$5oth.5J/mc3Xwx.Pe1bGnuKpslrty2ojqSc0t9Kw44muZw1MtjsCe', '+447404675751', '1987-03-18', 'Achiever', 'Achiever', 'Jigawa State', NULL, NULL, NULL, 'Artisan', 'Social Media Management', NULL, NULL, NULL, NULL, '1', NULL, 'Virtual assistant , Content creator, Digital Marketing', NULL, NULL, NULL, NULL, NULL, '1', '0', '1', '193813', NULL, NULL, '2024-05-04 18:40:55', '2024-05-04 19:51:35'),
(13, 'Ibitola Gbogboade', NULL, 'tolagbogboade@yahoo.com', '30621714833728121714833728271048', 'ACTIVELY SEARCHING', '$2y$10$L7JXXiA1/ZP9c9P0HVd4T.7/cae2y7z3kx5u5ykwwyeI4dMl/KrDO', '08092320855', '1967-04-22', '11/13 Ladejobi Ogunsanya Street.', '493', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Executive Assistance', NULL, NULL, NULL, NULL, '30', NULL, 'I provide accounting services and training', NULL, NULL, NULL, NULL, NULL, '5', '0', '1', '177032', NULL, NULL, '2024-05-04 18:42:08', '2024-05-04 18:42:08'),
(14, 'Chidinma Gbemileke', NULL, 'adorechidinma@gmail.com', '30621714833810201714833810484330', 'ACTIVELY SEARCHING', '$2y$10$CdeMxPlt./kcQ5eIizo5QeUqVeQl.rshM.uJnnE32ZAJfYXUVpyGi', '08067322965', '1992-11-09', 'Katampe, Abuja', '262', 'FCT', '1715233582.jpg', NULL, NULL, 'Artisan', 'Customer Service', NULL, NULL, NULL, NULL, '7', NULL, 'I am a virtual assistant who can help you manage your schedules and calendar. Help with presentation slides and content writing. I am also a business development manager who can help drive your sales department to achieve set targets.', NULL, NULL, NULL, NULL, NULL, '3', '0', '1', '935470', NULL, NULL, '2024-05-04 18:43:30', '2024-05-09 09:46:22'),
(15, 'Nwachukwu Uchechi Maria', NULL, 'uchechiukachukwu@gmail.com', '30621714833825471714833825658608', 'ACTIVELY SEARCHING', '$2y$10$ajDktaPrIwGdceLYXPiuK.vTOi9Ps.GXw9GIh8lQWoE7GN.WAaVeO', '07440287488', '1985-03-31', 'Noblemike@4251', 'Noblemike@4251', 'Adamawa State', NULL, NULL, NULL, 'Artisan', 'Executive Assistance', NULL, NULL, NULL, NULL, '0', NULL, 'Email Management \r\nScheduling Meetings\r\nCalender Management \r\nUse of Excel', NULL, NULL, NULL, NULL, NULL, '5', '0', '1', '312410', NULL, NULL, '2024-05-04 18:43:45', '2024-05-04 18:50:01'),
(16, 'Owokoniran Yusuf Adebayo', NULL, 'yowokoniran@gmail.com', '30621714833899661714833899207138', 'ACTIVELY SEARCHING', '$2y$10$gTFMnueth0QyZzQfyDH8SO1n4PZVg.syHyBvGnEQFwH6aLc3P2/De', '07010828941', '1993-04-06', '3, Akindele cl oke-koto', '738', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Data Entry', NULL, NULL, NULL, NULL, '1', NULL, 'I make life and work stress-free by accurately and efficiently inputting, processing and managing their data into computer or databases using data entry software/tools.', NULL, NULL, NULL, NULL, NULL, '2', '0', '1', '803946', NULL, NULL, '2024-05-04 18:44:59', '2024-05-04 18:44:59'),
(17, 'Rukome Okojie', NULL, 'komeokojie2@gmail.com', '30621714837479691714837479241355', 'ACTIVELY SEARCHING', '$2y$10$pjtn4nTle.JYpBnKx5wSZeFDI7Y0iFBGW.IaIjOYlOmYOWSA0MFqe', '2348099449001', '1988-09-29', '1 Solaru Street, Soluyi, Gbagada.', '493', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Customer Service', NULL, NULL, NULL, NULL, '8', NULL, 'Customer care/email chat support specialist: I handle customer inquiries, requests, and complaints by providing appropriate solutions and alternatives promptly, ensuring follow-up for resolution. \r\nAlso, I escalate and collaborate with other teams as necessary to ensure complete resolution.\r\nAdditionally, I prioritize delivering excellent service and maintaining customer satisfaction to promote loyalty and retention.\r\nI achieve this through attentive phone calls, live chat interactions, and adept problem-solving skills in written communication via email.', NULL, NULL, 'FullTime', NULL, NULL, '3', '0', '1', '883668', NULL, NULL, '2024-05-04 19:44:39', '2024-05-05 12:14:07'),
(18, 'Bello Grace Ayomikun', NULL, 'graceayomikun@gmail.com', '30621714863554931714863554852147', 'ACTIVELY SEARCHING', '$2y$10$4dzC9CAphqrsTagDiY4boeEh.Ii7FuGnJFZ4op90.OYwzSpsy5j0a', '08104592700', '1989-09-17', '11 Abeni close Asa estate Gbagada', '499', 'Lagos State', NULL, NULL, NULL, 'Artisan', 'Customer Service', NULL, NULL, NULL, NULL, '6', NULL, 'As a customer service representative, I handle inquiries, complaints, and requests from customers via various channels such as phone, email, or live chat. I provide assistance, troubleshoot problems, and strive to ensure customer satisfaction by addressing their needs effectively and professionally. Additionally, I may process orders, issue refunds or exchanges, and escalate complex issues to higher levels of support when necessary.', NULL, NULL, NULL, NULL, NULL, '3', '0', '1', '748767', NULL, NULL, '2024-05-05 02:59:14', '2024-05-05 02:59:14'),
(19, 'Anyalewechi Chibuzo', NULL, 'chibuzomaria@gmail.com', '30621714902310131714902310113065', 'ACTIVELY SEARCHING', '$2y$10$dTBJ3uBTID.U6EKLSTQj/e5SytRHQp/gpIdNZoPmH8w2sQNie9UTm', '08036022898', '1986-05-17', '#12 Zimest Avenue, Greenville Estate, Badore, Ajah', '488', 'Lagos State', '1715279392.jpg', NULL, NULL, 'Artisan', 'Administrative', NULL, NULL, NULL, NULL, '7', 'https://www-chibuzomaria-com.typedream.app/', 'Available to provide administrative assistance and support like accounting services, business & project management, Brand Design and management to any business or organization.', NULL, 'pay per job', 'FullTime', NULL, NULL, '4', '0', '1', '672805', NULL, NULL, '2024-05-05 13:45:10', '2024-05-09 22:43:44'),
(20, 'Florence Onyeike', NULL, 'florxyonline@yahoo.com', '30621715011466231715011466896270', 'ACTIVELY SEARCHING', '$2y$10$7rJkWWyz5WxX7OWftM91gOOyQ0C.5ExdKc5OsPWdFuiaxvMR6IqqG', '07035123622', '1989-11-08', 'wuye ultramodern market', '266', 'FCT', '1715011657.jpg', NULL, NULL, 'Artisan', 'Executive Assistance', NULL, NULL, NULL, NULL, '1', NULL, 'I\'m a virtual assistant and social media page manager.', NULL, 'pay per job', 'FullTime', NULL, NULL, '5', '0', '1', '571263', NULL, NULL, '2024-05-06 20:04:26', '2024-05-09 07:32:10'),
(21, 'Joy Chioma Uzodimma', NULL, 'chiomyzz@gmail.com', '30621715066744411715066744739209', 'ACTIVELY SEARCHING', '$2y$10$eaWCrI7eqVUjPfWGhON2fuSVH4HTgpi19SGp7RmBg4BnFOT5v6.2u', '09034230501', '1996-05-25', '3/5 awosika street, Ejigbo, Lagos', '277', 'Imo State', NULL, NULL, NULL, 'Artisan', 'Social Media Management', NULL, NULL, NULL, NULL, '2', NULL, 'As a social media manager i  create,curate, and manage content across various social media platforms to build brand awareness, engage with the audience, and drive traffic or sales. As a social media manager, I always stay updated on trends to maintain an effective online presence.', NULL, NULL, NULL, NULL, NULL, '1', '0', '1', '022396', NULL, NULL, '2024-05-07 11:25:44', '2024-05-07 11:25:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artisan_galleries`
--
ALTER TABLE `artisan_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artisan_services`
--
ALTER TABLE `artisan_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artisan_services_user_id_index` (`user_id`);

--
-- Indexes for table `awards_and_certificates`
--
ALTER TABLE `awards_and_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_categories`
--
ALTER TABLE `business_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_backs`
--
ALTER TABLE `call_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_requests`
--
ALTER TABLE `client_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_jobs`
--
ALTER TABLE `employer_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_requests`
--
ALTER TABLE `employer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring_requests`
--
ALTER TABLE `hiring_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_mergings`
--
ALTER TABLE `job_mergings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_index` (`country_id`);

--
-- Indexes for table `state_areas`
--
ALTER TABLE `state_areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_areas_state_id_index` (`state_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artisan_galleries`
--
ALTER TABLE `artisan_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artisan_services`
--
ALTER TABLE `artisan_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `awards_and_certificates`
--
ALTER TABLE `awards_and_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_categories`
--
ALTER TABLE `business_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `call_backs`
--
ALTER TABLE `call_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_requests`
--
ALTER TABLE `client_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer_jobs`
--
ALTER TABLE `employer_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employer_requests`
--
ALTER TABLE `employer_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hiring_requests`
--
ALTER TABLE `hiring_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_mergings`
--
ALTER TABLE `job_mergings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `state_areas`
--
ALTER TABLE `state_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=739;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artisan_services`
--
ALTER TABLE `artisan_services`
  ADD CONSTRAINT `artisan_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `state_areas`
--
ALTER TABLE `state_areas`
  ADD CONSTRAINT `state_areas_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
