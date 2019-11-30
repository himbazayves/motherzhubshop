-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2019 at 12:39 PM
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
  `blog_id` int(56) NOT NULL AUTO_INCREMENT,
  `title` longtext,
  `blog_picture` varchar(200) NOT NULL,
  `content` text,
  `summary` longtext,
  `blog_date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `blog_picture`, `content`, `summary`, `blog_date`) VALUES
(31, 'second', '20190919_125047.jpg', 'Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', 'Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', '2019-10-26'),
(32, 'second', '20190919_125047.jpg', 'Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', 'Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', '2019-10-26'),
(34, 'my title', 'bg_3.jpg', 'Eligibility Criteria\r\nThe Eligibility Criteria is simple for RIPS Internship in America for International Students.\r\n\r\nUndergraduate Students & those who are Recently Graduating between December and June or Recently Graduated are eligible.\r\nInternational students, including students attending a university outside the U.S., are eligible to apply for paid internships in USA for international students.\r\nMust be at least 18 years of age to participate in the program. Please see the FAQs page for more information.\r\nInternational Students can only apply for the RIPS Internship in Los Angeles (RIPS-LA)\r\nCheck Global UGRAD 2020 Exchange Program to USA (Fully Funded)\r\n\r\nRequired Documents\r\nResume/CV\r\nReference letters\r\nA transcript or academic Record (Official or Unofficial)\r\nCheck Greifswald international students festival 2020 in Germany || Funded ||\r\n\r\nCheck Yenching Global Symposium Conference in Beijing 2020 (Fully Funded)\r\n\r\nDeadline\r\nThe Last Date to Apply for the RIPS Summer Internship 2020 in the United States is February 12th, 2020. Chances of Selection are More if You send Your Applications as early as possible.\r\n\r\nHow to Apply:\r\nThe Application Procedure is Online. Complete an Online Application & also upload the required documents. The official Advertisement is given below.\r\n\r\n\r\n \r\nCLICK HERE TO APPLY FOR RIPS 2020 INTERNSHIP\r\nCLICK HERE FOR OFFICIAL ADVERTISEMENT', 'q3w4e54r65768798 43w54e5r6t87y8u9 a346e5r6t878u9 5465768t78yu9 45678u9', '2019-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE IF NOT EXISTS `blog_comment` (
  `blog_comm_id` int(9) NOT NULL AUTO_INCREMENT,
  `blog_id` int(9) NOT NULL,
  `comment` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `names` varchar(100) NOT NULL,
  `blog_comm_date` varchar(100) NOT NULL,
  PRIMARY KEY (`blog_comm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`blog_comm_id`, `blog_id`, `comment`, `email`, `tel`, `names`, `blog_comm_date`) VALUES
(1, 31, '\r\n\r\nImage placeholder\r\nJohn Doe\r\nsectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?\r\n\r\n', 'turatsinzejunior83@gmail.com', '+250729003160', 'mugiraneza himbaza ', '2019-10-26'),
(2, 31, '\r\n\r\nImage placeholder\r\nJohn Doe\r\nsectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?\r\n\r\n', 'turatsinzejunior83@gmail.com', '+250729003160', 'mugiraneza himbaza ', '2019-10-26'),
(3, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(4, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(5, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(6, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(7, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(8, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(9, 31, 'Image placeholder John Doe sectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'turatsinzejunior83@gmail.com', 'o788455333', 'yves', '2019-10-26'),
(10, 32, 'emporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', 'turatsinzejunior83@gmail.com', '+250729003160', 'iradukunda ferdinand', '2019-10-26'),
(11, 32, 'emporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', 'turatsinzejunior83@gmail.com', '+250729003160', 'iradukunda ferdinand', '2019-10-26'),
(12, 32, 'emporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', 'turatsinzejunior83@gmail.com', '+250729003160', 'iradukunda ferdinand', '2019-10-26'),
(13, 32, 'emporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.', 'turatsinzejunior83@gmail.com', '+250729003160', 'iradukunda ferdinand', '2019-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cathe_id` int(9) NOT NULL AUTO_INCREMENT,
  `cathe_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cathe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cathe_id`, `cathe_name`) VALUES
(2, 'Baby food'),
(22, 'babyz goods and items'),
(23, 'motherlyz goods and items'),
(24, 'toddlerz good and item'),
(25, 'empty'),
(26, 'books');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`, `product_name`) VALUES
(1, 'about.jpg', '2019-10-22 18:45:47', '1', '1'),
(2, 'babe.jpg', '2019-10-22 18:45:47', '1', '1'),
(13, '20190921_101021.jpg', '1', '1', 'homemade'),
(14, '20190921_101021.jpg', '1', '1', 'ishuka'),
(15, '20190930_113934.jpg', '1', '1', 'ishuka yanyuma'),
(16, '20190921_101036.jpg', '1', '1', ''),
(17, '20190921_100953.jpg', '1', '1', ''),
(18, '20190921_100934.jpg', '1', '1', ''),
(19, '20190921_100934.jpg', '1', '1', ''),
(20, '20190921_100953.jpg', '1', '1', ''),
(21, 'test.jpg', '1', '1', ''),
(22, '20190921_100934.jpg', '1', '1', ''),
(23, '20190921_100934.jpg', '1', '1', ''),
(24, '20190921_100934.jpg', '1', '1', ''),
(25, '20190921_101036.jpg', '1', '1', ''),
(26, '20190921_100953.jpg', '1', '1', ''),
(27, '20190921_100934.jpg', '1', '1', ''),
(28, '20190921_100934.jpg', '1', '1', ''),
(29, '20190921_100934.jpg', '1', '1', ''),
(30, '20190921_100934.jpg', '1', '1', ''),
(31, '20190921_100934.jpg', '1', '1', ''),
(32, '20190921_100934.jpg', '1', '1', ''),
(33, '20190921_101036.jpg', '1', '1', 'ishuka yanyuma'),
(34, '20190930_113811.jpg', '1', '1', 'ishuka yanyuma'),
(35, '20190921_100934.jpg', '1', '1', 'ishuka yanyuma'),
(36, '20190921_100934.jpg', '1', '1', 'ishuka yanyuma'),
(37, '20190921_100934.jpg', '1', '1', 'ishuka yanyuma'),
(38, '20190921_100934.jpg', '1', '1', 'ishuka yanyuma'),
(39, '20190921_100921.jpg', '1', '1', 'ishuka'),
(40, '20191005_111717.jpg', '1', '1', 'ishuka'),
(41, '20190921_100934.jpg', '1', '1', 'ishuka'),
(42, '20190830_003048.jpg', '1', '1', 'ishuka'),
(43, '20190921_100921.jpg', '1', '1', 'ishuka'),
(44, '20190921_100934.jpg', '1', '1', 'ishuka'),
(45, '20190921_100934.jpg', '1', '1', 'ishuka'),
(46, '20190921_100934.jpg', '1', '1', 'ishuka'),
(47, '20190921_100934.jpg', '1', '1', 'ishuka'),
(48, '20190921_100953.jpg', '1', '1', 'ishuka yanyuma'),
(49, '20190921_100934.jpg', '1', '1', 'ishuka yanyuma'),
(50, '20191005_112900.jpg', '1', '1', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

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
(35, 29, '30', NULL, 'pending', 'order@gmail.com', '0729003160', 'second Order', '6000', '2019-10-18'),
(36, 36, '4', NULL, 'failed', 'himbazaorder@gmail.com', '+250729003160', 'himbaza yves', '21868', '2019-11-20'),
(37, 81, '4', NULL, 'failed', 'himbazaorder@gmail.com', '0729003160', 'himbaza yves', '40000', '2019-11-21');

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
  `product_description` longtext NOT NULL,
  `product_picture` varchar(255) NOT NULL,
  `sub_cath_id` int(9) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_reduction`, `product_description`, `product_picture`, `sub_cath_id`) VALUES
(60, '', '', '', '', '', 43),
(61, '', '', '', '', '', 44),
(62, '', '', '', '', '', 45),
(63, '', '', '', '', '', 46),
(64, '', '', '', '', '', 47),
(65, '', '', '', '', '', 48),
(66, '', '', '', '', '', 49),
(67, 'homemade', '200', '', '', '', 47),
(68, 'vannila', '200', '45', 'homemade', 'uploads/about-1 (1).jpg', 23),
(69, 'homemade', '200', '5566566', '6677', '', 30),
(70, 'homemade', '200', '56', 'ddddffyhs  fhguihja', '', 39),
(71, 'homemade', '200', '56', 'test is my first test', 'uploads/20190921_100934 (1).jpg', 30),
(72, 'baby food', '200', '455', 'test is my first test', 'uploads/20190830_003048 (1).jpg', 30),
(73, 'homemade', '200', '56', 'homemade', 'uploads/222.JPG', 30),
(74, 'homemade', '', '', 'test is my first test', '', 50),
(75, 'homemade', '200', '56', 'FGHJKI', 'uploads/444.JPG', 30),
(76, 'homemade', '200', '56', 'FGHJKI', 'uploads/444.JPG(1).jpg', 30),
(77, 'ishuka', '300', '34', 'ishuka nziza', 'uploads/20190921_100934 (2).jpg', 30),
(78, 'ishuka yanyuma', '200', '45', '45', 'uploads/20190830_003048 (2).jpg', 30),
(79, '', '', '', '', 'uploads/20190919_125103 (1).jpg', 51),
(80, 'yves', '200', '6', 'At first, she made her baby bibs and burp and in between he helped other mother who has the problem of feeding their babies which minded it ask a lot to make your little one a chubby baby without having the enough economy. she used the vegetable .fruit and tuber to make her jeryâ€™s food and been an excellent work and starting the motherâ€™s hub was the way to share the experience with the other moms who is struggling out there.\r\n\r\n', 'uploads/b4 (5).jpg', 30),
(81, 'france lait', '10000', '10', 'infant food ', 'uploads/Cereal & Oats.jpg', 25);

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

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
(49, 24, 'toddler pillow and pillowcase'),
(50, 25, ' '),
(51, 26, 'baby food cooking book'),
(52, 26, 'baby and toddler gaming books'),
(53, 26, 'baby and toddler gaming books');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'yves', 'Yves$1997.', '2019-11-20 00:00:00'),
(2, 'himbaza', '$2y$10$z34Xb1HgevwqEW2wFz.l8ugY.n0LBErYKFGeZ7FuwC6K67rLOVjNS', '2019-11-20 14:40:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
