-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for eshop
CREATE DATABASE IF NOT EXISTS `eshop` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `eshop`;

-- Dumping structure for table eshop.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table eshop.groups: 0 rows
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`) VALUES
	(1, 'food'),
	(2, 'transport'),
	(3, 'household goods'),
	(4, 'services'),
	(5, 'other');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table eshop.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `product_group` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COMMENT='CA Products';

-- Dumping data for table eshop.products: 7 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `brand`, `description`, `price`, `weight`, `image`, `product_group`) VALUES
	(22, 'asdgfg', 'sdfhsdh', 'sdhsdh', 1.00, 1.00, 'asdgfg_sdfhsdh_55305.jpg', NULL),
	(23, 'asdv', 'asga', 'asdg', 12.00, 12.00, 'asdv_asga_56285.jpg', NULL),
	(24, 'ascv', 'asdv', ' awf', 1.00, 1.00, 'ascv_asdv_72748.jpg', NULL),
	(25, 'asdv', 'asdv', 'asdv', 1.00, 1.00, 'asdv_asdv_93484.jpg', NULL),
	(26, '211r', 'asf', 'asv', 1.00, 1.00, '211r_asf_29923.jpg', NULL),
	(27, 'asva', 'asdv', 'vasdv', 1.00, 1.00, 'asva_asdv_85704.jpg', NULL),
	(21, 'vistiena', 'kaisiadoriu paukstynas', 'vistienos file', 4.28, 1.00, 'vistiena_kaisiadoriu paukstynas_97810.jpg', NULL),
	(28, 'asdf', 'av', 'asdvadsv', 1.00, 1.00, 'asdf_av_52094.gif', 2),
	(29, 'asg', 'adfg', 'asg', 1.00, 1.00, 'asg_adfg_17309.jpg', 3);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
