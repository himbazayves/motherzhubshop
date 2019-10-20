-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2019 at 06:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mothezhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `blog_picture` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE IF NOT EXISTS `blog_comment` (
  `blog_comm_id` int(9) NOT NULL AUTO_INCREMENT,
  `blog_id` int(9) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_comm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cathe_id` int(9) NOT NULL AUTO_INCREMENT,
  `cathe_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cathe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cathe_id`, `cathe_name`) VALUES
(2, 'Baby food'),
(22, 'babyz goods and items'),
(23, 'motherlyz goods and items'),
(24, 'toddlerz good and item');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messages_id` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `names` varchar(100) NOT NULL,
  PRIMARY KEY (`messages_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_id`, `email`, `tel`, `content`, `names`) VALUES
(1, 'turatsinzejunior83@gmail.com', '+250729003160', ' gghjikoo', 'yves');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` int(9) NOT NULL AUTO_INCREMENT,
  `product_id` int(9) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `client_email` varchar(100) NOT NULL,
  `client_phone` varchar(100) NOT NULL,
  `client_names` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `size`, `status`, `client_email`, `client_phone`, `client_names`, `total`, `order_date`) VALUES
(1, 19, '2', NULL, 'completed', 'order@gmail.com', '0729003160', 'six order', '890', '2019-10-05'),
(2, 20, '30', NULL, 'completed', 'himbazaorder@gmail.com', '0729003160', 'First Order', '2100', '2019-10-07'),
(3, 32, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'himbaza yves', '6000', '2019-10-14'),
(4, 32, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'himbaza yves', '6000', '2019-10-14'),
(5, 29, '7', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'six order', '1400', '2019-10-14'),
(6, 31, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'second Order', '6000', '2019-10-14'),
(7, 31, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'second Order', '6000', '2019-10-14'),
(8, 31, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'second Order', '6000', '2019-10-14'),
(9, 31, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'second Order', '6000', '2019-10-14'),
(10, 31, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'second Order', '6000', '2019-10-14'),
(11, 31, '30', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'second Order', '6000', '2019-10-14'),
(12, 30, '6', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'himbaaza yves', '1200', '2019-10-14'),
(13, 30, '6', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'himbaaza yves', '1200', '2019-10-14'),
(14, 30, '6', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'himbaaza yves', '1200', '2019-10-14'),
(15, 29, '6', NULL, 'pending', 'himbazaorder@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-14'),
(16, 29, '30', NULL, 'pending', 'order@gmail.com', '0729003160', 'eric', '6000', '2019-10-14'),
(17, 29, '30', NULL, 'pending', 'order@gmail.com', '0729003160', 'eric', '6000', '2019-10-14'),
(18, 29, '12', NULL, 'pending', 'iradukundaferdinand25@gmail.com', '66777', 'Ferdinand IRADUKUNDA', '2400', '2019-10-15'),
(19, 29, '12', NULL, 'pending', 'iradukundaferdinand25@gmail.com', '66777', 'Ferdinand IRADUKUNDA', '2400', '2019-10-15'),
(20, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(21, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(22, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(23, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(24, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(25, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(26, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(27, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(28, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'himbaza yves', '1200', '2019-10-18'),
(29, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '1200', '2019-10-18'),
(30, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '1200', '2019-10-18'),
(31, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '1200', '2019-10-18'),
(32, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '1200', '2019-10-18'),
(33, 29, '6', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '1200', '2019-10-18'),
(34, 29, '30', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '6000', '2019-10-18'),
(35, 29, '30', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '6000', '2019-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(9) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_reduction` varchar(255) NOT NULL DEFAULT '0',
  `product_description` varchar(255) NOT NULL,
  `product_picture` varchar(255) NOT NULL,
  `sub_cath_id` int(9) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_reduction`, `product_description`, `product_picture`, `sub_cath_id`) VALUES
(2, 'lgllglg', '666', '606', '', '', 0),
(36, 'yogurt', '5467', '5656', 'yogurt', 'uploads/bg_1 (6).jpg', 23),
(37, 'homemade', '200', '566', 'yogurt2', 'uploads/course-5.jpg', 23),
(38, 'fgh', '555', '555666', 'yogurt', 'uploads/bg_5.jpg', 23),
(39, 'cereal', '200', '45', '78', 'uploads/bg_2 (2).jpg', 1),
(40, 'cereal', '200', '45', '78', 'uploads/bg_2 (3).jpg', 1),
(41, '', '', '', '', '', 1),
(42, 'powered milk', '45', '56', 'powered milk', 'uploads/bg_2 (4).jpg', 25),
(43, 'dry baby cereal and oats', '5', '7', 'dry baby cereal and oats', 'uploads/course-3.jpg', 26),
(44, 'dry baby cereal and oats', '5', '7', 'dry baby cereal and oats', 'uploads/course-3 (1).jpg', 26),
(45, 'dessert ', '6', '56', '56', 'uploads/bg_5 (1).jpg', 27),
(46, 'homemade', '200', '67', 'order test', 'uploads/bg_5 (2).jpg', 28),
(47, '', '', '', '', '', 30),
(48, '', '', '', '', '', 31),
(49, '', '', '', '', '', 32),
(50, '', '', '', '', '', 33),
(51, '', '', '', '', '', 34),
(52, '', '', '', '', '', 35),
(53, '', '', '', '', '', 36),
(54, '', '', '', '', '', 37),
(55, '', '', '', '', '', 38),
(56, '', '', '', '', '', 39),
(57, '', '', '', '', '', 40),
(58, '', '', '', '', '', 34),
(59, '', '', '', '', '', 42),
(60, '', '', '', '', '', 43),
(61, '', '', '', '', '', 44),
(62, '', '', '', '', '', 45),
(63, '', '', '', '', '', 46),
(64, '', '', '', '', '', 47),
(65, '', '', '', '', '', 48),
(66, '', '', '', '', '', 49),
(67, 'homemade', '200', '', '', '', 47);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_cath_id` int(9) NOT NULL AUTO_INCREMENT,
  `cathe_id` int(9) NOT NULL,
  `sub_cathe_name` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_cath_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cath_id`, `cathe_id`, `sub_cathe_name`) VALUES
(1, 2, 'cereals'),
(4, 6, 'essential goods of motherhood'),
(11, 8, 'party theme'),
(12, 8, 'party theme'),
(15, 1, 'party notebook'),
(17, 2, 'cereals'),
(18, 2, 'juice'),
(23, 2, 'yoghurt'),
(24, 2, 'powdered_milk'),
(25, 2, 'powdered milk'),
(26, 2, 'dry baby cereal and oats'),
(27, 2, 'dessert '),
(28, 2, 'veggies and grain flour'),
(30, 22, 'room decoration and preparation'),
(31, 22, 'matress'),
(32, 22, 'duvet cover'),
(33, 22, 'quilt'),
(34, 22, 'bedding sets'),
(35, 22, 'bumpers'),
(36, 22, 'crib netting'),
(37, 22, 'pillow and pillow case'),
(38, 22, 'baby sheets'),
(39, 23, 'pregnancy pillow'),
(40, 23, 'nursing pillow'),
(41, 23, 'bedding sets'),
(42, 23, 'breast pads'),
(43, 23, 'breast feeding pump'),
(44, 23, 'pregnancy and prenatal belt'),
(45, 23, 'feeding cover maternity'),
(46, 24, 'toddler room decoration'),
(47, 24, 'toddler room ornament'),
(48, 24, 'toddler bedding sets'),
(49, 24, 'toddler pillow and pillowcase');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
