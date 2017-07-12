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
  `group_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table eshop.groups: 5 rows
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `group_name`) VALUES
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
  `weight` decimal(10,3) DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `product_group` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COMMENT='CA Products';

-- Dumping data for table eshop.products: 11 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `brand`, `description`, `price`, `weight`, `image`, `product_group`) VALUES
	(30, 'Bananas', 'Brasil', 'The banana plant is the largest herbaceous flowering plant. All the above-ground parts of a banana plant grow from a structure usually called a "corm". Plants are normally tall and fairly sturdy, and are often mistaken for trees, but what appears to be a trunk is actually a "false stem" or pseudostem.', 0.89, 1.000, 'Bananas_Brasil_16048.jpg', 1),
	(31, 'Hamburger', 'McDonalds', 'Hamburgers are often served with cheese, lettuce, tomato, bacon, onion, pickles, or chiles; condiments such as mustard, mayonnaise, ketchup, relish, or "special sauce"; and are frequently placed on sesame seed buns. A hamburger topped with cheese is called a cheeseburger.', 2.59, 0.300, 'Hamburger_McDonalds_72900.jpg', 1),
	(32, 'Spaghetti', 'Italian', 'Spaghetti (Italian pronunciation: [spaˈɡetti]) is a long, thin, cylindrical, solid pasta. It is a staple food of traditional Italian cuisine. Like other pasta, spaghetti is made of milled wheat and water. Italian spaghetti is made from durum wheat semolina, but elsewhere it may be made with other kinds of flour.', 5.99, 0.450, 'Spaghetti_Italian_54630.jpg', 1),
	(33, 'Tomatoe', 'Spain', 'The tomato (see pronunciation) is the edible fruit of Solanum lycopersicum, commonly known as a tomato plant, which belongs to the nightshade family, Solanaceae. The species originated in Central and South America.', 1.39, 1.000, 'Tomatoe_Spain_95160.jpg', 1),
	(34, 'Waffles', 'Bistro', 'The stiff batter for the waffles is made from flour, butter, brown sugar, yeast, milk, and eggs. Medium-sized balls of batter are put on the waffle iron. When the waffle is baked and while it is still warm, it is cut into two halves.', 3.89, 0.250, 'Waffles_Bistro_39325.jpg', 1),
	(35, 'Jars', 'Steklo', 'A hard brittle transparent or translucent noncrystalline solid, consisting of metal silicates or similar compounds. It is made from a fused mixture of oxides, such as lime, silicon dioxide, etc., and is used for making windows, mirrors, bottles, etc.  ', 2.50, 0.156, 'Jars_Steklo_29532.jpg', 3),
	(36, 'Pots', 'Kitchen Masters', 'a container of earthenware, metal, etc., usually round and deep and having a handle or handles and often a lid, used for cooking, serving, and other purposes. 2. such a container with its contents: a pot of stew. ... the amount contained in or held by a pot; potful.', 10.99, 1.365, 'Pots_Kitchen Masters_31738.jpg', 3),
	(37, 'Sneakers', 'Air Jordan', 'Air Jordan is a brand of basketball footwear and athletic clothing produced by Nike and endorsed and created for Chicago Bulls basketball player Michael Jordan. The original Air Jordan I sneaker, produced for Jordan in 1984, were released to the public in 1985. The shoes were designed for Nike by Peter Moore, Tinker Hatfield, and Bruce Kilgore.', 359.00, 0.400, 'Sneakers_Air Jordan_42960.jfif', 5),
	(38, 'Clothes', 'Guess', 'Guess is an American clothing brand and retailer. In addition to clothing for both men and women, Guess markets other fashion accessories such as watches.', 25.99, 0.215, 'Clothes_Guess_20361.jpg', 5),
	(39, 'Pipe', 'Wooden Bros', 'A smoking pipe is a device made to allow the user to inhale or taste smoke or vapor derived from the burning or vaporization of some substance.', 50.00, 0.112, 'Pipe_Wooden Bros_72317.jpg', 5),
	(40, 'Car service', 'Martonas', 'A motor vehicle service is a series of maintenance procedures carried out at a set time interval or after the vehicle has travelled a certain distance. ', 500.00, 0.000, 'Car service_Martonas_78559.jpg', 4),
	(41, 'Computer service', 'IT tech', 'his Computer Technician job description template is optimized for posting on online job boards or careers pages and easy to customise for your company.', 200.00, 0.000, 'Computer service_IT tech_63088.jpg', 4),
	(42, 'Car', 'BMW', 'Bayerische Motoren Werke AG usually known under its abbreviation BMW is a German luxury vehicle, motorcycle, and engine manufacturing company', 50000.00, 1896.000, 'Car_BMW_92127.jpg', 2),
	(43, 'Car', 'Mazda', 'Mazda Motor Corporation commonly referred to as simply Mazda, is a Japanese multinational ..... Years, Symbol, Description.', 25999.00, 1456.000, 'Car_Mazda_39309.png', 2),
	(44, 'Car', 'Volkswagen', 'Volkswagen shortened to VW, is a German automaker founded on May 28, 1937 by the German Labour Front and headquartered in Wolfsburg.', 35999.00, 1563.000, 'Car_Volkswagen_47374.png', 2),
	(45, 'Car', 'Volvo', 'The Volvo Group (stylized as VOLVO) is a Swedish multinational manufacturing company headquartered in Gothenburg.', 45999.00, 1789.000, 'Car_Volvo_97268.jpg', 2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
