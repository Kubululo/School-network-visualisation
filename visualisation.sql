-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 06:14 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visualisation`
--

-- --------------------------------------------------------

--
-- Table structure for table `a011`
--

DROP TABLE IF EXISTS `a011`;
CREATE TABLE IF NOT EXISTS `a011` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a011`
--

INSERT INTO `a011` (`id`, `name`, `MAC_adress`, `ip_adress`, `VNC_adress`, `AIRYTEC_adress`, `remember`) VALUES
(1, 'WS-101', '00:00:00:00:00', '192.168.1.1', '10.0.0.150:4250', '192.168.1.1:8000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `a108`
--

DROP TABLE IF EXISTS `a108`;
CREATE TABLE IF NOT EXISTS `a108` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a109`
--

DROP TABLE IF EXISTS `a109`;
CREATE TABLE IF NOT EXISTS `a109` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b108`
--

DROP TABLE IF EXISTS `b108`;
CREATE TABLE IF NOT EXISTS `b108` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b109`
--

DROP TABLE IF EXISTS `b109`;
CREATE TABLE IF NOT EXISTS `b109` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b110`
--

DROP TABLE IF EXISTS `b110`;
CREATE TABLE IF NOT EXISTS `b110` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b201`
--

DROP TABLE IF EXISTS `b201`;
CREATE TABLE IF NOT EXISTS `b201` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b201`
--

INSERT INTO `b201` (`id`, `name`, `MAC_adress`, `ip_adress`, `VNC_adress`, `AIRYTEC_adress`, `remember`) VALUES
(2, 'ws-010', '00:00:00:00:00:00', '192.168.1.1', '123', '192.168.1.1:8000', 1),
(3, 'WS-101', '00:00:00:00:00', '192.168.1.1', '10.0.0.150:4250', '192.168.1.1:8000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b203`
--

DROP TABLE IF EXISTS `b203`;
CREATE TABLE IF NOT EXISTS `b203` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b204`
--

DROP TABLE IF EXISTS `b204`;
CREATE TABLE IF NOT EXISTS `b204` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b206`
--

DROP TABLE IF EXISTS `b206`;
CREATE TABLE IF NOT EXISTS `b206` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `remember` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoty` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

DROP TABLE IF EXISTS `computers`;
CREATE TABLE IF NOT EXISTS `computers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `CPU` varchar(10) DEFAULT NULL,
  `RAM` varchar(10) DEFAULT NULL,
  `HDD` varchar(10) DEFAULT NULL,
  `MAC_adress` varchar(50) DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `room` enum('A011','A108','A109','B108','B109','B110','B201','B203','B204','B206') NOT NULL,
  `VNC_adress` varchar(50) DEFAULT NULL,
  `AIRYTEC_adress` varchar(50) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `name`, `manufacturer`, `CPU`, `RAM`, `HDD`, `MAC_adress`, `ip_adress`, `room`, `VNC_adress`, `AIRYTEC_adress`, `comment`) VALUES
(11, 'WS-101', 'Lenovo', '2.5GHz', '8GB', '500GB', '00:00:00:00:00', '192.168.1.1', 'B201', '10.0.0.150:4250', '192.168.1.1:8000', 'test'),
(8, 'WS-101', 'Lenovo', '2.5GHz', '8GB', '500GB', '00:00:00:00:00', '192.168.1.1', 'B201', '10.0.0.150:4250', '192.168.1.1:8000', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2014_10_12_000000_create_category_table', 2),
(7, '2018_11_26_201006_create_schedules_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notebooks`
--

DROP TABLE IF EXISTS `notebooks`;
CREATE TABLE IF NOT EXISTS `notebooks` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `teacher` varchar(50) NOT NULL,
  `room` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `CPU` varchar(15) DEFAULT NULL,
  `RAM` varchar(15) DEFAULT NULL,
  `HDD` varchar(15) DEFAULT NULL,
  `MAC_adress` varchar(50) NOT NULL,
  `IP_adress` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notebooks`
--

INSERT INTO `notebooks` (`id`, `teacher`, `room`, `name`, `manufacturer`, `CPU`, `RAM`, `HDD`, `MAC_adress`, `IP_adress`) VALUES
(2, 'Butkovsky', 'B204', 'WS-104', 'HP', '2.5GHz', '8GB', '1TB', '00:00:00:00:00', '192.168.1.1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('polepetko@gmail.sk', '$2y$10$E8zrz0/Fh3HAgkTIHfs5XOviOHUrlpXE9JLuYxL3Zs34/TZae8oEO', '2018-10-19 14:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

DROP TABLE IF EXISTS `printers`;
CREATE TABLE IF NOT EXISTS `printers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `MAC_adress` varchar(17) NOT NULL,
  `IP_adress` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`id`, `name`, `room`, `type`, `MAC_adress`, `IP_adress`) VALUES
(1, 'Kyocera', 'vratnica', 'sietova', '00:00:00:00:00:00', '10.0.0.150 ');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_name` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `person` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `created_at`, `updated_at`, `event_name`, `start_date`, `end_date`, `person`) VALUES
(2, '2018-11-27 18:23:34', '2018-11-27 18:23:34', 'Psychologicka', '2019-01-01', '2019-01-10', 'Jakub'),
(3, '2018-12-06 17:02:03', '2018-12-06 17:02:03', 'Psychologicka', '2018-12-07', '2018-12-08', 'Jakub'),
(4, '2019-01-31 20:04:18', '2019-01-31 20:04:18', 'otvor okno', '2019-02-01', '2019-02-02', 'Jakub'),
(5, '2019-02-07 17:55:43', '2019-02-07 17:55:43', 'JJLHJK', '2019-02-09', '2019-02-10', 'Jakub'),
(6, '2019-03-25 06:52:27', '2019-03-25 06:52:27', 'JJLHJK', '2019-03-08', '2019-03-14', 'Jakub Skurčák'),
(7, '2019-03-25 07:04:48', '2019-03-25 07:04:48', 'otvor okno', '2019-03-08', '2019-03-21', 'Jakub Skurčák'),
(8, '2019-03-25 18:39:15', '2019-03-25 18:39:15', 'otvor okno', '2019-02-26', '2019-02-26', 'Jakub Skurčák');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` set('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `admin` int(2) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `remember`, `admin`) VALUES
(4, 'Kokot', 'skurcak@outlook.com', '$2y$10$Aewbgo.HeO3SsgSMvj0zZ.zUxm3Uz8cvjcRdYtNqQbk2teRkmh64u', 'tqu2acic7FaMGNx5KnncXmgGNmr0lhWFrUVHgwjuaroqesxo6CiFb9PKDLVc', '2019-03-25 18:33:29', '2019-03-25 21:26:43', NULL, '1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
