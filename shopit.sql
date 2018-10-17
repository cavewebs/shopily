-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2018 at 05:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopit`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_pages`
--

CREATE TABLE `active_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_pages`
--

INSERT INTO `active_pages` (`id`, `name`, `enabled`) VALUES
(1, 'blog', 1),
(2, 'terms-and-conditions', 1),
(3, 'privacy-policy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date_added` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `admin_id`, `msg`, `date_added`, `status`, `deleted`) VALUES
(1, 1, 'hello', '2018-09-05', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `name`, `iban`, `bank`, `bic`) VALUES
(1, 'Crypto Wakanda', '0038565699', 'Diamond Bank PLC', 'Savings');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `image`, `url`, `time`) VALUES
(1, 'archi.jpg', 'Cavewebs_Solutions_1', 1535987524),
(2, 'celebrity.jpg', 'Cavewebs_sweat_shirts_that_are_more_than_years_old_2', 1535991410),
(3, 'ntel.png', 'Shop_Mediva_Coutoure_3', 1537200454);

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `title`, `description`, `abbr`, `for_id`) VALUES
(1, 'Cavewebs Solutions', '<p>My guy that uear how una day .&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;</p>\r\n\r\n<p>My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><em>My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;</em></p>\r\n</blockquote>\r\n\r\n<p>My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;My guy that uear how una day&nbsp;</p>\r\n', 'en', 1),
(2, 'Cavewebs sweat shirts that are more than 1000 years old', '<p>Did you know that in the city of Kwander the indegenes discovered a secret that no one ever did discover.&nbsp;</p>\r\n\r\n<p>Kwagh shun yange doo ve je ve yem ve da or kwagh ami. Abatur hir upinen ve gba kwagh tsor kpa gba ve ga. Or wam man gba wan icham orum ave;&nbsp; ye kwagh hemba or batur ver; kwagh hemba or batur ver;&nbsp; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver;</p>\r\n\r\n<blockquote>\r\n<p>kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver;</p>\r\n</blockquote>\r\n\r\n<p>kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver; kwagh hemba or batur ver;</p>\r\n', 'en', 2),
(3, 'Shop Mediva Coutoure', '<p>Hmm. We’re having trouble finding that site.</p>\r\n\r\n<p>We can’t connect to the server at www.google.com.<br />\r\nIf that address is correct, here are three other things you can try:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Try again later.<br />\r\n&nbsp;&nbsp;&nbsp; Check your network connection.<br />\r\n&nbsp;&nbsp;&nbsp; If you are connected but behind a firewall, check that Firefox has permission to access the Web.</p>\r\n', 'en', 3);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Gucci');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_links`
--

CREATE TABLE `confirm_links` (
  `id` int(11) NOT NULL,
  `link` char(32) NOT NULL,
  `for_order` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirm_links`
--

INSERT INTO `confirm_links` (`id`, `link`, `for_order`) VALUES
(1, '9333e609395e2278cc2460a997dda338', 1234),
(2, 'ca6f1196a8574e45abe768486a87954a', 1235),
(3, 'c49d0582aa92ab38cab9164dc8fafcaa', 1236),
(4, '1946606562938583ae1bd5a2abc56dc6', 1237),
(5, '8d97d7e10667c4a06216e67a1e94f3cd', 1238),
(6, 'b6d32d8e717fa3837ec07699a77b1044', 1239),
(7, 'ad33f7e70e5dd936191fd8c38d19d89f', 1240),
(8, '61667298b9d95bb87bdb70b9aba34980', 1241),
(9, '5adaec75c880723632713b0c54ccfed1', 1242),
(10, '49cadaef47bff56a959718b547fd3311', 1243),
(11, '828186af186e4e0aad7ef567e97cb773', 1244),
(12, '224ef44a030f7040d8d602951f6aed29', 1245),
(13, '2a838e7e84852474046d190717c0811c', 1246),
(14, '56fe2ec38d5f8caf368738282ba2e48e', 1247),
(15, '5980c960ef09af55204d0f48da4db6f2', 1248),
(16, '1c86482be55e932dc22a5be479b182bb', 1249),
(17, '18290366b0d4c79248352b2cafa2ed3f', 1250),
(18, '6288135314cc84d5706f5fb5451983d1', 1251);

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law`
--

CREATE TABLE `cookie_law` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cookie_law`
--

INSERT INTO `cookie_law` (`id`, `link`, `theme`, `visibility`) VALUES
(1, 'http://cokies.law', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law_translations`
--

CREATE TABLE `cookie_law_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `learn_more` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cookie_law_translations`
--

INSERT INTO `cookie_law_translations` (`id`, `message`, `button_text`, `learn_more`, `abbr`, `for_id`) VALUES
(1, 'We use cokies', 'Accept', 'More Info', 'en', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount_codes`
--

CREATE TABLE `discount_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `valid_from_date` int(10) UNSIGNED NOT NULL,
  `valid_to_date` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-enabled, 0-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount_codes`
--

INSERT INTO `discount_codes` (`id`, `type`, `code`, `amount`, `valid_from_date`, `valid_to_date`, `status`) VALUES
(1, 'float', 'LOJCY4', '1500', 1533074400, 1538172000, 1),
(2, 'float', 'OMVHWTRF', '400.00', 1535493600, 1537912800, 1),
(3, 'percent', '6OYRD9', '5', 1536616800, 1537394400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `activity`, `username`, `time`) VALUES
(1, 'Go to Settings Page', 'admin', 1535943065),
(2, 'Go to languages', 'admin', 1535943105),
(3, 'User admin logged in', NULL, 1535967620),
(4, 'Go to home page', 'admin', 1535967620),
(5, 'Go to orders page', 'admin', 1535967644),
(6, 'Change status of Order Id 1 to status 1', 'admin', 1535967648),
(7, 'Go to orders page', 'admin', 1535967656),
(8, 'Change status of Order Id 1 to status 1', 'admin', 1535967676),
(9, 'Go to orders page', 'admin', 1535967814),
(10, 'Go to shop categories', 'admin', 1535967832),
(11, 'Go to home page', 'admin', 1535967837),
(12, 'Go to History', 'admin', 1535967853),
(13, 'Go to orders page', 'admin', 1535967976),
(14, 'Go to discounts page', 'admin', 1535967992),
(15, 'Go to discounts page', 'admin', 1535967996),
(16, 'Go to orders page', 'admin', 1535968082),
(17, 'Go to products', 'admin', 1535968340),
(18, 'Go to products', 'admin', 1535968434),
(19, 'Go to products', 'admin', 1535968436),
(20, 'Go to products', 'admin', 1535968452),
(21, 'Go to products', 'admin', 1535968454),
(22, 'Go to products', 'admin', 1535968457),
(23, 'Go to products', 'admin', 1535968475),
(24, 'Go to products', 'admin', 1535968476),
(25, 'Go to products', 'admin', 1535968492),
(26, 'Go to products', 'admin', 1535968519),
(27, 'Go to products', 'admin', 1535968545),
(28, 'Go to products', 'admin', 1535968564),
(29, 'Go to products', 'admin', 1535968592),
(30, 'Go to products', 'admin', 1535968604),
(31, 'Search for product title - ', 'admin', 1535968644),
(32, 'Search for product code - ', 'admin', 1535968644),
(33, 'Go to products', 'admin', 1535968644),
(34, 'Go to discounts page', 'admin', 1535970028),
(35, 'Go to discounts page', 'admin', 1535970032),
(36, 'Go to discounts page', 'admin', 1535970400),
(37, 'Go to discounts page', 'admin', 1535970567),
(38, 'Go to discounts page', 'admin', 1535970575),
(39, 'Go to discounts page', 'admin', 1535970582),
(40, 'Go to discounts page', 'admin', 1535970604),
(41, 'Go to discounts page', 'admin', 1535970608),
(42, 'Go to orders page', 'admin', 1535970617),
(43, 'Go to orders page', 'admin', 1535972483),
(44, 'Go to orders page', 'admin', 1535972605),
(45, 'Go to orders page', 'admin', 1535973202),
(46, 'Go to orders page', 'admin', 1535973225),
(47, 'Go to orders page', 'admin', 1535973245),
(48, 'Go to orders page', 'admin', 1535973249),
(49, 'Go to orders page', 'admin', 1535973253),
(50, 'Go to orders page', 'admin', 1535973257),
(51, 'Go to shop categories', 'admin', 1535973374),
(52, 'Go to publish product', 'admin', 1535973380),
(53, 'Go to orders page', 'admin', 1535973781),
(54, 'Go to orders page', 'admin', 1535973787),
(55, 'Go to orders page', 'admin', 1535973797),
(56, 'Go to Settings Page', 'admin', 1535973948),
(57, 'Go to Templates Page', 'admin', 1535974409),
(58, 'Go to discounts page', 'admin', 1535974415),
(59, 'Go to orders page', 'admin', 1535974444),
(60, 'Go to orders page', 'admin', 1535974449),
(61, 'Go to orders page', 'admin', 1535974873),
(62, 'Search for product title - we', 'admin', 1535974889),
(63, 'Go to products', 'admin', 1535974889),
(64, 'Go to home page', 'admin', 1535974952),
(65, 'Go to products', 'admin', 1535974973),
(66, 'Search for product title - we', 'admin', 1535974978),
(67, 'Go to products', 'admin', 1535974978),
(68, 'Search for product title - e', 'admin', 1535974986),
(69, 'Go to products', 'admin', 1535974986),
(70, 'Search for product title - e', 'admin', 1535975767),
(71, 'Go to products', 'admin', 1535975767),
(72, 'Go to home page', 'admin', 1535975913),
(73, 'Go to products', 'admin', 1535975931),
(74, 'Go to discounts page', 'admin', 1535975934),
(75, 'Go to orders page', 'admin', 1535975939),
(76, 'Go to Settings Page', 'admin', 1535975944),
(77, 'Go to Settings Page', 'admin', 1535975967),
(78, 'Go to Settings Page', 'admin', 1535976305),
(79, 'Go to Settings Page', 'admin', 1535976354),
(80, 'Go to Settings Page', 'admin', 1535976424),
(81, 'Go to Settings Page', 'admin', 1535976550),
(82, 'Go to Settings Page', 'admin', 1535976745),
(83, 'Go to Settings Page', 'admin', 1535976827),
(84, 'Go to home page', 'admin', 1535977658),
(85, 'Go to Settings Page', 'admin', 1535977666),
(86, 'Change footer about us info', 'admin', 1535977684),
(87, 'Go to Settings Page', 'admin', 1535977684),
(88, 'Go to Settings Page', 'admin', 1535977820),
(89, 'Go to Settings Page', 'admin', 1535977929),
(90, 'Go to Settings Page', 'admin', 1535978024),
(91, 'Go to Settings Page', 'admin', 1535978067),
(92, 'Go to Settings Page', 'admin', 1535978148),
(93, 'Go to Settings Page', 'admin', 1535978175),
(94, 'Go to Settings Page', 'admin', 1535978221),
(95, 'Go to Settings Page', 'admin', 1535978228),
(96, 'Go to Settings Page', 'admin', 1535978325),
(97, 'Go to Settings Page', 'admin', 1535978371),
(98, 'Go to Settings Page', 'admin', 1535978389),
(99, 'Change footer about us info', 'admin', 1535978423),
(100, 'Go to Settings Page', 'admin', 1535978423),
(101, 'Go to Settings Page', 'admin', 1535978477),
(102, 'Go to Settings Page', 'admin', 1535978792),
(103, 'Update Google Maps Coordinates and Api Key', 'admin', 1535978815),
(104, 'Go to Settings Page', 'admin', 1535978815),
(105, 'Go to Settings Page', 'admin', 1535980040),
(106, 'Go to Settings Page', 'admin', 1535983936),
(107, 'Go to Settings Page', 'admin', 1535984794),
(108, 'Go to Settings Page', 'admin', 1535984876),
(109, 'Change navigation text', 'admin', 1535984915),
(110, 'Go to Settings Page', 'admin', 1535984915),
(111, 'Go to Templates Page', 'admin', 1535984929),
(112, 'Go to Templates Page', 'admin', 1535984933),
(113, 'Go to Templates Page', 'admin', 1535985348),
(114, 'Go to Settings Page', 'admin', 1535985356),
(115, 'Change navigation text', 'admin', 1535985364),
(116, 'Go to Settings Page', 'admin', 1535985364),
(117, 'Go to Settings Page', 'admin', 1535985571),
(118, 'Go to Titles / Descriptions page', 'admin', 1535985575),
(119, 'Go to Titles / Descriptions page', 'admin', 1535985627),
(120, 'Go to Titles / Descriptions page', 'admin', 1535985637),
(121, 'Go to Titles / Descriptions page', 'admin', 1535985713),
(122, 'Go to Titles / Descriptions page', 'admin', 1535986148),
(123, 'Go to Titles / Descriptions page', 'admin', 1535986161),
(124, 'Go to Titles / Descriptions page', 'admin', 1535986200),
(125, 'Go to Titles / Descriptions page', 'admin', 1535986260),
(126, 'Go to Titles / Descriptions page', 'admin', 1535986361),
(127, 'Go to Titles / Descriptions page', 'admin', 1535986515),
(128, 'Go to Titles / Descriptions page', 'admin', 1535986547),
(129, 'Go to Titles / Descriptions page', 'admin', 1535986566),
(130, 'Go to Titles / Descriptions page', 'admin', 1535986589),
(131, 'Go to Titles / Descriptions page', 'admin', 1535986604),
(132, 'Changed Titles / Descriptions', 'admin', 1535986632),
(133, 'Go to Titles / Descriptions page', 'admin', 1535986632),
(134, 'Go to Titles / Descriptions page', 'admin', 1535987315),
(135, 'Go to Blog', 'admin', 1535987352),
(136, 'Go to Blog Publish', 'admin', 1535987359),
(137, 'Go to Blog', 'admin', 1535987525),
(138, 'Go to Blog', 'admin', 1535987700),
(139, 'Go to Blog', 'admin', 1535987921),
(140, 'Edit page - privacy-policy', 'admin', 1535987946),
(141, 'Go to home page', 'admin', 1535988014),
(142, 'Go to home page', 'admin', 1535988130),
(143, 'Go to Pages manage', 'admin', 1535988142),
(144, 'Page status Changed', 'admin', 1535988151),
(145, 'Page status Changed', 'admin', 1535988152),
(146, 'Go to Pages manage', 'admin', 1535988247),
(147, 'Go to Pages manage', 'admin', 1535988264),
(148, 'Go to Pages manage', 'admin', 1535988278),
(149, 'Go to orders page', 'admin', 1535988354),
(150, 'Go to orders page', 'admin', 1535988357),
(151, 'Go to orders page', 'admin', 1535988372),
(152, 'Go to orders page', 'admin', 1535988374),
(153, 'Go to orders page', 'admin', 1535988376),
(154, 'Go to orders page', 'admin', 1535988377),
(155, 'Go to orders page', 'admin', 1535988914),
(156, 'Go to orders page', 'admin', 1535988928),
(157, 'Go to orders page', 'admin', 1535988953),
(158, 'Go to Titles / Descriptions page', 'admin', 1535988998),
(159, 'Go to Pages manage', 'admin', 1535989004),
(160, 'Go to home page', 'admin', 1535989061),
(161, 'Go to orders page', 'admin', 1535989068),
(162, 'Go to orders page', 'admin', 1535989071),
(163, 'Go to publish product', 'admin', 1535989074),
(164, 'Edit page - privacy-policy', 'admin', 1535989077),
(165, 'Go to Pages manage', 'admin', 1535989097),
(166, 'Go to History', 'admin', 1535989212),
(167, 'Go to orders page', 'admin', 1535989742),
(168, 'Go to Admin Users', 'admin', 1535989749),
(169, 'Go to File Manager', 'admin', 1535989757),
(170, 'Go to languages', 'admin', 1535989787),
(171, 'Go to languages', 'admin', 1535990101),
(172, 'Go to File Manager', 'admin', 1535990108),
(173, 'Go to Admin Users', 'admin', 1535990349),
(174, 'Go to Admin Users', 'admin', 1535990359),
(175, 'Go to languages', 'admin', 1535990377),
(176, 'Go to languages', 'admin', 1535990435),
(177, 'Go to languages', 'admin', 1535990458),
(178, 'Go to home page', 'admin', 1535990483),
(179, 'Go to home page', 'admin', 1535990496),
(180, 'Go to home page', 'admin', 1535990507),
(181, 'Go to Admin Users', 'admin', 1535990517),
(182, 'Go to File Manager', 'admin', 1535990523),
(183, 'Go to File Manager', 'admin', 1535990557),
(184, 'Go to Blog', 'admin', 1535990564),
(185, 'Go to Blog', 'admin', 1535990712),
(186, 'Go to Blog', 'admin', 1535990768),
(187, 'Go to Blog', 'admin', 1535990884),
(188, 'Go to Blog', 'admin', 1535990977),
(189, 'Go to Blog', 'admin', 1535991081),
(190, 'Go to Blog', 'admin', 1535991137),
(191, 'Go to Blog Publish', 'admin', 1535991149),
(192, 'Go to Blog', 'admin', 1535991156),
(193, 'Go to Blog', 'admin', 1535991172),
(194, 'Go to Blog Publish', 'admin', 1535991195),
(195, 'Go to Blog', 'admin', 1535991410),
(196, 'Go to Blog', 'admin', 1535991796),
(197, 'Go to Blog', 'admin', 1535991937),
(198, 'Go to Blog', 'admin', 1535995910),
(199, 'Go to shop categories', 'admin', 1535995965),
(200, 'Go to publish product', 'admin', 1535995968),
(201, 'Go to products', 'admin', 1535995970),
(202, 'Go to publish product', 'admin', 1535995972),
(203, 'Go to File Manager', 'admin', 1535996240),
(204, 'Go to languages', 'admin', 1535996362),
(205, 'Go to languages', 'admin', 1535996443),
(206, 'Go to languages', 'admin', 1535996478),
(207, 'Go to languages', 'admin', 1535996607),
(208, 'Go to Admin Users', 'admin', 1535996699),
(209, 'Go to Admin Users', 'admin', 1535996731),
(210, 'Go to Admin Users', 'admin', 1535996744),
(211, 'Go to Admin Users', 'admin', 1535996775),
(212, 'Go to Admin Users', 'admin', 1535996805),
(213, 'Go to Pages manage', 'admin', 1535996839),
(214, 'Page status Changed', 'admin', 1535996849),
(215, 'Page status Changed', 'admin', 1535996854),
(216, 'Page status Changed', 'admin', 1535996855),
(217, 'Go to Pages manage', 'admin', 1535996859),
(218, 'Page status Changed', 'admin', 1535996888),
(219, 'Page status Changed', 'admin', 1535996891),
(220, 'Page status Changed', 'admin', 1535996894),
(221, 'Go to Admin Users', 'admin', 1535996991),
(222, 'Go to Admin Users', 'admin', 1535996995),
(223, 'Go to languages', 'admin', 1536000749),
(224, 'Go to languages', 'admin', 1536000757),
(225, 'Go to languages', 'admin', 1536000773),
(226, 'Go to languages', 'admin', 1536000872),
(227, 'Go to languages', 'admin', 1536001202),
(228, 'Go to languages', 'admin', 1536001220),
(229, 'Go to languages', 'admin', 1536001273),
(230, 'Go to languages', 'admin', 1536001286),
(231, 'Go to languages', 'admin', 1536001323),
(232, 'Go to languages', 'admin', 1536001372),
(233, 'Go to languages', 'admin', 1536001432),
(234, 'Go to languages', 'admin', 1536001492),
(235, 'Go to languages', 'admin', 1536001535),
(236, 'User admin logged in', NULL, 1536001542),
(237, 'Go to home page', 'admin', 1536001543),
(238, 'Go to Admin Users', 'admin', 1536001591),
(239, 'Go to Admin Users', 'admin', 1536001625),
(240, 'Go to Templates Page', 'admin', 1536001868),
(241, 'Go to Templates Page', 'admin', 1536001875),
(242, 'Go to Templates Page', 'admin', 1536006092),
(243, 'Go to Templates Page', 'admin', 1536006105),
(244, 'Go to Templates Page', 'admin', 1536006247),
(245, 'Go to Templates Page', 'admin', 1536006859),
(246, 'User admin logged in', NULL, 1536040030),
(247, 'Go to home page', 'admin', 1536040031),
(248, 'Go to Templates Page', 'admin', 1536040038),
(249, 'Go to Templates Page', 'admin', 1536040045),
(250, 'Go to Templates Page', 'admin', 1536042175),
(251, 'Go to Pages manage', 'admin', 1536042617),
(252, 'Edit page - privacy-policy', 'admin', 1536042637),
(253, 'Page 3 updated!', 'admin', 1536042650),
(254, 'Edit page - privacy-policy', 'admin', 1536042650),
(255, 'User admin logged in', NULL, 1536042706),
(256, 'Go to home page', 'admin', 1536042706),
(257, 'Go to Templates Page', 'admin', 1536043135),
(258, 'Go to Templates Page', 'admin', 1536043145),
(259, 'Go to Templates Page', 'admin', 1536043462),
(260, 'User admin logged in', NULL, 1536061226),
(261, 'Go to home page', 'admin', 1536061227),
(262, 'Go to shop categories', 'admin', 1536061246),
(263, 'Go to publish product', 'admin', 1536061251),
(264, 'Go to Templates Page', 'admin', 1536061281),
(265, 'Go to Templates Page', 'admin', 1536061292),
(266, 'Go to Templates Page', 'admin', 1536061325),
(267, 'Go to orders page', 'admin', 1536061481),
(268, 'Go to home page', 'admin', 1536064470),
(269, 'Go to Templates Page', 'admin', 1536064532),
(270, 'Go to Templates Page', 'admin', 1536064541),
(271, 'User admin logged in', NULL, 1536139338),
(272, 'Go to home page', 'admin', 1536139338),
(273, 'Go to Templates Page', 'admin', 1536139343),
(274, 'Go to Templates Page', 'admin', 1536139356),
(275, 'Go to Templates Page', 'admin', 1536139372),
(276, 'Go to Templates Page', 'admin', 1536139395),
(277, 'Go to Templates Page', 'admin', 1536139413),
(278, 'Go to Templates Page', 'admin', 1536139442),
(279, 'Go to Templates Page', 'admin', 1536139513),
(280, 'Go to Templates Page', 'admin', 1536139610),
(281, 'User admin logged in', NULL, 1536148449),
(282, 'Go to home page', 'admin', 1536148449),
(283, 'User admin logged in', NULL, 1536148460),
(284, 'Go to home page', 'admin', 1536148460),
(285, 'Go to orders page', 'admin', 1536148470),
(286, 'Go to orders page', 'admin', 1536148476),
(287, 'Go to orders page', 'admin', 1536148478),
(288, 'Go to Blog Publish', 'admin', 1536148481),
(289, 'Go to Pages manage', 'admin', 1536148487),
(290, 'Go to Subscribed Emails', 'admin', 1536148521),
(291, 'Go to Pages manage', 'admin', 1536148940),
(292, 'Go to Titles / Descriptions page', 'admin', 1536148947),
(293, 'Go to orders page', 'admin', 1536148968),
(294, 'User admin logged in', NULL, 1536157581),
(295, 'Go to home page', 'admin', 1536157581),
(296, 'Go to Templates Page', 'admin', 1536157586),
(297, 'Go to Templates Page', 'admin', 1536157593),
(298, 'User admin logged in', NULL, 1536734270),
(299, 'Go to home page', 'admin', 1536734270),
(300, 'Go to Pages manage', 'admin', 1536734294),
(301, 'Go to Settings Page', 'admin', 1536734301),
(302, 'Change site logo', 'admin', 1536734315),
(303, 'Go to Settings Page', 'admin', 1536734315),
(304, 'Go to Templates Page', 'admin', 1536734348),
(305, 'Go to Templates Page', 'admin', 1536734352),
(306, 'Go to Templates Page', 'admin', 1536734400),
(307, 'Go to Templates Page', 'admin', 1536735833),
(308, 'Go to Templates Page', 'admin', 1536735868),
(309, 'Go to Templates Page', 'admin', 1536736268),
(310, 'Go to Templates Page', 'admin', 1536736392),
(311, 'Go to Templates Page', 'admin', 1536736574),
(312, 'Go to Templates Page', 'admin', 1536736629),
(313, 'Go to Templates Page', 'admin', 1536736971),
(314, 'Go to Templates Page', 'admin', 1536739416),
(315, 'Go to Templates Page', 'admin', 1536740182),
(316, 'Go to Settings Page', 'admin', 1536740516),
(317, 'Cookie law information changed', 'admin', 1536740821),
(318, 'Go to Settings Page', 'admin', 1536740821),
(319, 'Go to Settings Page', 'admin', 1536743317),
(320, 'Go to Settings Page', 'admin', 1536743358),
(321, 'Go to Titles / Descriptions page', 'admin', 1536743788),
(322, 'Changed Titles / Descriptions', 'admin', 1536743833),
(323, 'Go to Titles / Descriptions page', 'admin', 1536743833),
(324, 'Go to Templates Page', 'admin', 1536744319),
(325, 'Go to Templates Page', 'admin', 1536744329),
(326, 'Go to Templates Page', 'admin', 1536745100),
(327, 'Go to Templates Page', 'admin', 1536753164),
(328, 'Go to Templates Page', 'admin', 1536753207),
(329, 'Go to Templates Page', 'admin', 1536753234),
(330, 'Go to Templates Page', 'admin', 1536754809),
(331, 'Go to Templates Page', 'admin', 1536754816),
(332, 'Go to Titles / Descriptions page', 'admin', 1536762626),
(333, 'Go to Pages manage', 'admin', 1536762634),
(334, 'Go to languages', 'admin', 1536762637),
(335, 'Go to languages', 'admin', 1536762639),
(336, 'Go to languages', 'admin', 1536762696),
(337, 'Go to languages', 'admin', 1536766029),
(338, 'Go to languages', 'admin', 1536766105),
(339, 'Go to languages', 'admin', 1536771886),
(340, 'Go to languages', 'admin', 1536772624),
(341, 'Go to home page', 'admin', 1536772633),
(342, 'Go to languages', 'admin', 1536772642),
(343, 'Go to languages', 'admin', 1536772672),
(344, 'User admin logged in', NULL, 1536852862),
(345, 'Go to home page', 'admin', 1536852862),
(346, 'Go to Templates Page', 'admin', 1536852872),
(347, 'Go to Templates Page', 'admin', 1536852882),
(348, 'Go to Templates Page', 'admin', 1536853073),
(349, 'Go to languages', 'admin', 1536854451),
(350, 'Create language - ib', 'admin', 1536854478),
(351, 'Go to languages', 'admin', 1536854478),
(352, 'Go to languages', 'admin', 1536854633),
(353, 'Go to languages', 'admin', 1536854649),
(354, 'Go to publish product', 'admin', 1536854665),
(355, 'Go to products', 'admin', 1536854670),
(356, 'Go to publish product', 'admin', 1536854673),
(357, 'Go to languages', 'admin', 1536854700),
(358, 'Delete language id - 3', 'admin', 1536854705),
(359, 'Go to languages', 'admin', 1536854705),
(360, 'Go to languages', 'admin', 1536854708),
(361, 'User admin logged in', NULL, 1536923025),
(362, 'Go to home page', 'admin', 1536923025),
(363, 'Go to Templates Page', 'admin', 1536923030),
(364, 'Go to Templates Page', 'admin', 1536923039),
(365, 'Go to Templates Page', 'admin', 1536923211),
(366, 'Go to home page', 'admin', 1536928376),
(367, 'User admin logged in', NULL, 1536928384),
(368, 'Go to home page', 'admin', 1536928384),
(369, 'Search for product title - city', 'admin', 1536938974),
(370, 'Go to products', 'admin', 1536938974),
(371, 'Go to publish product', 'admin', 1536938979),
(372, 'Success updated product', 'admin', 1536939029),
(373, 'Search for product title - city', 'admin', 1536939029),
(374, 'Go to products', 'admin', 1536939029),
(375, 'Search for product title - food', 'admin', 1536939056),
(376, 'Go to products', 'admin', 1536939056),
(377, 'Go to publish product', 'admin', 1536939059),
(378, 'Success updated product', 'admin', 1536939076),
(379, 'Search for product title - food', 'admin', 1536939076),
(380, 'Go to products', 'admin', 1536939076),
(381, 'User admin logged in', NULL, 1536953092),
(382, 'Go to home page', 'admin', 1536953092),
(383, 'Go to products', 'admin', 1536953096),
(384, 'Go to publish product', 'admin', 1536953102),
(385, 'Success updated product', 'admin', 1536953138),
(386, 'Go to products', 'admin', 1536953138),
(387, 'User admin logged in', NULL, 1537004863),
(388, 'Go to home page', 'admin', 1537004863),
(389, 'Go to Pages manage', 'admin', 1537010429),
(390, 'Go to Titles / Descriptions page', 'admin', 1537010436),
(391, 'Go to Titles / Descriptions page', 'admin', 1537010573),
(392, 'Changed Titles / Descriptions', 'admin', 1537010592),
(393, 'Go to Titles / Descriptions page', 'admin', 1537010592),
(394, 'Changed Titles / Descriptions', 'admin', 1537010641),
(395, 'Go to Titles / Descriptions page', 'admin', 1537010641),
(396, 'Go to languages', 'admin', 1537025197),
(397, 'Go to languages', 'admin', 1537025199),
(398, 'Go to languages', 'admin', 1537025371),
(399, 'Go to languages', 'admin', 1537025384),
(400, 'Go to languages', 'admin', 1537025473),
(401, 'Go to languages', 'admin', 1537025550),
(402, 'Go to languages', 'admin', 1537025636),
(403, 'Go to Templates Page', 'admin', 1537025844),
(404, 'Go to Templates Page', 'admin', 1537025848),
(405, 'Go to Templates Page', 'admin', 1537025864),
(406, 'Go to Templates Page', 'admin', 1537025893),
(407, 'User admin logged in', NULL, 1537184730),
(408, 'Go to home page', 'admin', 1537184730),
(409, 'Go to languages', 'admin', 1537184733),
(410, 'Go to languages', 'admin', 1537184735),
(411, 'Go to languages', 'admin', 1537184794),
(412, 'Go to products', 'admin', 1537190661),
(413, 'Go to publish product', 'admin', 1537190678),
(414, 'Success updated product', 'admin', 1537190723),
(415, 'Go to products', 'admin', 1537190723),
(416, 'Go to discounts page', 'admin', 1537196211),
(417, 'Go to discounts page', 'admin', 1537196317),
(418, 'Go to discounts page', 'admin', 1537196323),
(419, 'Go to discounts page', 'admin', 1537196362),
(420, 'Go to discounts page', 'admin', 1537196369),
(421, 'Go to discounts page', 'admin', 1537197461),
(422, 'Go to discounts page', 'admin', 1537197466),
(423, 'Go to languages', 'admin', 1537197475),
(424, 'Go to languages', 'admin', 1537197478),
(425, 'Go to languages', 'admin', 1537197520),
(426, 'Go to Templates Page', 'admin', 1537199107),
(427, 'Go to Templates Page', 'admin', 1537199110),
(428, 'Go to Templates Page', 'admin', 1537199146),
(429, 'Go to languages', 'admin', 1537199746),
(430, 'Go to languages', 'admin', 1537199748),
(431, 'Go to languages', 'admin', 1537199779),
(432, 'Go to Blog', 'admin', 1537200356),
(433, 'Go to Blog Publish', 'admin', 1537200359),
(434, 'Go to Blog', 'admin', 1537200454),
(435, 'Go to Pages manage', 'admin', 1537202654),
(436, 'Go to Pages manage', 'admin', 1537202666),
(437, 'Go to languages', 'admin', 1537202677),
(438, 'Go to languages', 'admin', 1537202679),
(439, 'Go to languages', 'admin', 1537202699),
(440, 'Go to Pages manage', 'admin', 1537202710),
(441, 'Go to Settings Page', 'admin', 1537202719),
(442, 'Go to Templates Page', 'admin', 1537208762),
(443, 'Go to Templates Page', 'admin', 1537208770),
(444, 'User admin logged in', NULL, 1537253263),
(445, 'Go to home page', 'admin', 1537253263),
(446, 'Go to orders page', 'admin', 1537253268),
(447, 'Go to products', 'admin', 1537253273),
(448, 'Go to publish product', 'admin', 1537253294),
(449, 'Success updated product', 'admin', 1537259899),
(450, 'Go to products', 'admin', 1537259899),
(451, 'Go to Templates Page', 'admin', 1537260551),
(452, 'Go to Templates Page', 'admin', 1537260558),
(453, 'User admin logged in', NULL, 1537628362),
(454, 'Go to home page', 'admin', 1537628363),
(455, 'Go to Templates Page', 'admin', 1537628370),
(456, 'User admin logged in', NULL, 1537628429),
(457, 'Go to home page', 'admin', 1537628429),
(458, 'Go to Templates Page', 'admin', 1537628436),
(459, 'Go to Templates Page', 'admin', 1537628442),
(460, 'Go to Templates Page', 'admin', 1537631168),
(461, 'Go to Templates Page', 'admin', 1537631183),
(462, 'Go to Templates Page', 'admin', 1537631203),
(463, 'Go to Templates Page', 'admin', 1537635510),
(464, 'Go to Templates Page', 'admin', 1537638743),
(465, 'Go to Templates Page', 'admin', 1537638748),
(466, 'Go to products', 'admin', 1537642572),
(467, 'Go to publish product', 'admin', 1537642578),
(468, 'Success updated product', 'admin', 1537642631),
(469, 'Go to products', 'admin', 1537642632),
(470, 'Go to publish product', 'admin', 1537642640),
(471, 'Success updated product', 'admin', 1537642659),
(472, 'Go to products', 'admin', 1537642659),
(473, 'Go to publish product', 'admin', 1537642665),
(474, 'Success updated product', 'admin', 1537642682),
(475, 'Go to products', 'admin', 1537642682),
(476, 'Go to publish product', 'admin', 1537642688),
(477, 'Success updated product', 'admin', 1537642711),
(478, 'Go to products', 'admin', 1537642711),
(479, 'User admin logged in', NULL, 1537650826),
(480, 'Go to home page', 'admin', 1537650826),
(481, 'Go to Templates Page', 'admin', 1537650830),
(482, 'Go to Templates Page', 'admin', 1537650836),
(483, 'Go to Templates Page', 'admin', 1537651173),
(484, 'User admin logged in', NULL, 1537806825),
(485, 'Go to home page', 'admin', 1537806826),
(486, 'Go to home page', 'admin', 1537806870),
(487, 'Go to home page', 'admin', 1537807249),
(488, 'User admin logged in', NULL, 1538727509),
(489, 'Go to home page', 'admin', 1538727509),
(490, 'User admin logged in', NULL, 1539158473),
(491, 'Go to home page', 'admin', 1539158474),
(492, 'Go to orders page', 'admin', 1539158478),
(493, 'Go to Templates Page', 'admin', 1539158486),
(494, 'Go to Templates Page', 'admin', 1539158507);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `currencyKey` varchar(5) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `abbr`, `name`, `currency`, `currencyKey`, `flag`) VALUES
(2, 'en', 'english', 'N', 'NGN', 'en.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'point to public_users ID',
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'viewed status is change when change processed status',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_code` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `products`, `date`, `referrer`, `clean_referrer`, `payment_type`, `paypal_status`, `processed`, `viewed`, `confirmed`, `discount_code`) VALUES
(1, 1234, 2, 'a:1:{i:4;s:1:\"1\";}', 1535112812, 'http://localhost/shopit/login', 'localhost', 'cashOnDelivery', NULL, 1, 1, 0, 'wewewewewe'),
(2, 1235, 0, 'a:1:{i:6;s:1:\"1\";}', 1535531977, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 1, 1, 0, '6889778'),
(3, 1236, 0, 'a:3:{i:1;s:1:\"2\";i:3;s:1:\"1\";i:4;s:1:\"2\";}', 1535815031, 'http://localhost/shopit/admin/pages', 'localhost', 'Bank', NULL, 0, 0, 0, ''),
(4, 1237, 0, 'a:3:{i:4;s:2:\"21\";i:6;s:1:\"3\";i:8;s:2:\"10\";}', 1536769868, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(5, 1238, 0, 'a:1:{i:4;s:1:\"1\";}', 1536770837, 'http://localhost/shopit/', 'localhost', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(6, 1239, 0, 'a:1:{i:8;s:1:\"2\";}', 1536770939, 'http://localhost/shopit/', 'localhost', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(7, 1240, 0, 'a:1:{i:4;s:1:\"2\";}', 1536770992, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(8, 1241, 0, 'a:1:{i:8;s:1:\"1\";}', 1536771303, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(9, 1242, 0, 'a:1:{i:4;s:1:\"1\";}', 1536771450, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(10, 1243, 0, 'a:1:{i:4;s:1:\"1\";}', 1536771567, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(11, 1244, 0, 'a:1:{i:4;s:1:\"1\";}', 1536772711, 'http://localhost/shopit/', 'localhost', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(12, 1245, 0, 'a:1:{i:8;s:1:\"1\";}', 1536773021, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(13, 1246, 0, 'a:1:{i:8;s:1:\"1\";}', 1536773186, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(14, 1247, 0, 'a:1:{i:4;s:1:\"1\";}', 1536773874, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(15, 1248, 0, 'a:1:{i:4;s:1:\"1\";}', 1536774255, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(16, 1249, 0, 'a:1:{i:4;s:1:\"1\";}', 1536774456, 'http://localhost/shopit/', 'localhost', 'Bank', NULL, 0, 0, 0, NULL),
(17, 1250, 0, 'a:1:{i:1;s:1:\"1\";}', 1536774705, 'http://localhost/shopit/', 'localhost', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(18, 1251, 0, 'a:1:{i:1;s:1:\"1\";}', 1536774927, 'http://localhost/shopit/', 'localhost', 'cashOnDelivery', NULL, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_clients`
--

CREATE TABLE `orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_clients`
--

INSERT INTO `orders_clients` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `post_code`, `notes`, `for_id`) VALUES
(1, 'Tim', 'Chosen', 'timchosen@gmail.com', '08134942718', 'St James House, Ademola Adetokunbo Crescent', 'Wuse 2', '900288', '', 1),
(2, 'Apostle Othniel', 'chosen', 'tim@hotmail.com', '+3727122576', 'my house', 'Oslo', '12345e678', 'noting', 2),
(3, 'Tim', 'Chosen', 'timchosen@gmail.com', '08134942718', 'St James House, Ademola Adetokunbo Crescent', 'Wuse 2', '900288', '', 3),
(4, 'Iember', 'Assembly', 'timchosen@gmail.com', '+2348134942718', 'Agbk', 'Abuj', '234590', 'Hello', 4),
(5, 'Reith', 'Ikechukwu', 'timchosen@gmail.com', '080231311313', 'kl', 'm', '98', '09-9', 5),
(6, 'Tertsea', 'Setevens', 'reithsatns@gmail.com', '0802313113', ';klkll', 'klkl', 'oioio', 'jkljlk', 6),
(7, 'The Throne', 'Joy', 'timchosen@gmail.com', '08023188761', 'iok;ll', ';lkkkljkl', 'p[', 'klkl;kl', 7),
(8, 'Apostle Othniel', 'chosen', 'timchosen@gmail.com', '08034321', 'uiui', 'jhou', '8908908', '8098', 8),
(9, 'uuiiu', 'tyuyu', 'timteruz@gmail.com', '09089897', 'jjhkjhkjhk', 'm', 'mmm', 'jj', 9),
(10, 'uuiiu', 'lk', 'stino4win@gmail.com', '09089897', '789789', '6767', '9787', '78689', 10),
(11, 'Apostle Othniel', 'tyuyu', 'reithsatns@gmail.com', '080343211230', 'kh', 'hh', 'hhhh', 'hhhjh', 11),
(12, 'Uzua', 'chosen', 'timchosen@gmail.com', '0803432112hg', 'k', 'k', 'k', 'k', 12),
(13, 'l', 'l', 'reithsatns@gmail.com', '09089897', 'k', 'k', 'k', 'k', 13),
(14, 'k', 'k', 'uzuatimothy@gmail.c', '345678908976543', 'jjl', 'h', 'h', 'h', 14),
(15, 'Apostle Othniel', 'Assembly', 'reithsatns@gmail.com', '080343y655', 'k', 'k', 'k', 'k', 15),
(16, 'j', 'j', 'timchosen@gmail.com', '08052461631', 'k', 'l', 'k', 'k', 16),
(17, 'uuiiu', 'chosen', 'reithsatns@gmail.com', '08134942710', 'kl', 'k', 'k', 'k', 17),
(18, 'l', 'chosen', 'reithsatns@gmail.com', '08076235555555', 'sdkl;;dl', 'k', 'k', 'k', 18);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder` int(10) UNSIGNED DEFAULT NULL COMMENT 'folder with images',
  `image` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL COMMENT 'time created',
  `time_update` int(10) UNSIGNED NOT NULL COMMENT 'time updated',
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `shop_categorie` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `procurement` int(10) UNSIGNED NOT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL,
  `virtual_products` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `folder`, `image`, `time`, `time_update`, `visibility`, `shop_categorie`, `quantity`, `procurement`, `in_slider`, `url`, `virtual_products`, `brand_id`, `position`, `vendor_id`) VALUES
(1, 1534987848, 'slide-04.jpg', 1534987994, 1537642658, 1, 1, 7, 0, 1, 'Hot_Men_Suit_1', '', NULL, 1, 0),
(2, 1534988400, 'slide-03.jpg', 1534988647, 1537642710, 1, 3, 50, 0, 1, 'City_Scape_2', '', NULL, 3, 0),
(3, 1534988709, 'slide-02.jpg', 1534988816, 1537642682, 1, 3, 7, 0, 1, 'Food_Barbarque_3', '', NULL, 2, 0),
(4, 1534988985, 'design.jpg', 1534989043, 1535933119, 1, 1, 4, 1, 0, 'Shoes_for_men_4', '', NULL, 0, 0),
(5, 1535205750, 'musa.jpg', 1535205840, 1535205877, 1, 2, 12, 0, 0, 'Rice_Bolgne_5', 'https://go.me/shjs', NULL, 0, 0),
(6, 1535205889, 'slide-01.jpg', 1535205935, 1537642631, 1, 1, 31, 1, 1, 'Gas_Wings_6', '', NULL, 0, 0),
(7, 1535205944, 'messi_(1).jpg', 1535206022, 0, 1, 8, 312, 0, 0, 'Arewa_Swag_7', '', NULL, 0, 0),
(8, 1535206037, '348962-PAPPEY-332.jpg', 1535206119, 0, 1, 1, 333, 0, 0, 'Sag_Botumo_8', '', NULL, 0, 0),
(9, 1535814627, '339250-PAJEZ7-269.jpg', 1535814765, 0, 1, 5, 5, 0, 0, 'Sweat_Shirt_9', '', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_translations`
--

CREATE TABLE `products_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `basic_description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `old_price` varchar(20) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_translations`
--

INSERT INTO `products_translations` (`id`, `title`, `description`, `basic_description`, `price`, `old_price`, `abbr`, `for_id`) VALUES
(2, 'Hot Men Suit', '<p>Three piece suit that fits better than anything you can imagine</p>\r\n', '<p>The suit that real mean where</p>\r\n', '25000', '', 'en', 1),
(5, 'City Scape', '<p>Get this gorgeous picture of the city from the award winning artiste Caleb Chiboy</p>\r\n', '<p><span style=\"color:#F0FFFF;\">For the moment, the platform maintains orders from customers who are enrolled in the administration as well as in the vendors panel</span></p>\r\n', '34000.90', '45000', 'en', 2),
(8, 'Food Barbarque', '<p><span style=\"font-family:trebuchet ms,helvetica,sans-serif;\">You have not enjoyed a barbarque like this ever before. <span style=\"color: rgb(36, 41, 46); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">For the moment, the platform maintains orders from customers who are enrolled in the administration as well as in the vendors panel.</span></span></p>\r\n', '<p><span style=\"font-family:trebuchet ms,helvetica,sans-serif;\">You have not enjoyed a barbarque like this ever before</span></p>\r\n', '7800', '9000', 'en', 3),
(11, 'Shoes for men', '<p>Get the best shoe</p>\r\n', '', '12000', '15000', 'en', 4),
(14, 'Rice Bolgne', '<p>The best rice our there</p>\r\n', '', '300', '', 'en', 5),
(17, 'Gas Wings', '<p>Bootstrap naming conventions carry styles of their own, col-XS-1 refers to a column being 8.33% of the containing element wide</p>\r\n', '<p>Bootstrap naming conventions carry styles of their own, col-XS-1 refers to a column being 8.33% of the containing element wide</p>\r\n', '600', '', 'en', 6),
(20, 'Arewa Swag', '<p>Get the best Arewa Swag</p>\r\n', '', '6990', '7500', 'en', 7),
(23, 'Sag Botumo', '<p>Sag borutme from sawah Gajha. The origianl Sawah dynasty remains</p>\r\n', '', '5000', '7000', 'en', 8),
(25, 'Sweat Shirt', '<p>Making sense shirt</p>\r\n', '', '4500', '', 'en', 9);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `name`) VALUES
(1, 'home'),
(2, 'checkout'),
(3, 'contacts'),
(4, 'blog'),
(8, 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages_translations`
--

CREATE TABLE `seo_pages_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `page_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_pages_translations`
--

INSERT INTO `seo_pages_translations` (`id`, `title`, `description`, `abbr`, `page_type`) VALUES
(1, '', '', 'bg', 'home'),
(2, 'Mediva Coutoure', 'Affordable and Unique Women Clothing', 'en', 'home'),
(3, '', '', 'gr', 'home'),
(4, '', '', 'bg', 'checkout'),
(5, 'Checkout', '', 'en', 'checkout'),
(6, '', '', 'gr', 'checkout'),
(7, '', '', 'bg', 'contacts'),
(8, 'Contact Us', 'Contact us', 'en', 'contacts'),
(9, '', '', 'gr', 'contacts'),
(10, '', '', 'bg', 'blog'),
(11, 'Blog', 'News and Articles from our blog', 'en', 'blog'),
(12, '', '', 'gr', 'blog'),
(13, 'Shop Mediva Coutoure ', 'Shop From Mediva', 'en', 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `post_code`, `notes`) VALUES
(1, 1, 'Tim', 'Chosen', 'timchosen@gmail.com', '08134942718', 'St James House, Ademola Adetokunbo Crescent', 'Wuse 2', '900288', ''),
(2, 2, 'Apostle Othniel', 'chosen', 'tim@hotmail.com', '+3727122576', 'my house', 'Oslo', '12345e678', 'noting');

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_for` int(11) NOT NULL,
  `position` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `sub_for`, `position`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 3, 0),
(5, 3, 0),
(6, 4, 0),
(7, 6, 4),
(8, 5, 0),
(9, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories_translations`
--

CREATE TABLE `shop_categories_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories_translations`
--

INSERT INTO `shop_categories_translations` (`id`, `name`, `abbr`, `for_id`) VALUES
(2, 'Sport', 'en', 1),
(5, 'Bags', 'en', 2),
(8, 'Music', 'en', 3),
(11, 'Audio', 'en', 4),
(14, 'Video', 'en', 5),
(17, 'Promo', 'en', 6),
(20, 'Free Beats', 'en', 7),
(23, 'Movies', 'en', 8),
(24, 'Cars', 'en', 9);

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribed`
--

INSERT INTO `subscribed` (`id`, `email`, `browser`, `ip`, `time`) VALUES
(1, 'yahoo@tim.com', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '::1', '1534990286'),
(2, 'hello@hayoo.com', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/60.0', '127.0.0.1', '1535533683'),
(3, 'yahoo@tjm.com', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '::1', '1535803678'),
(4, 'agbo@hotmail.com', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/60.0', '127.0.0.1', '1536750379'),
(5, 'tim@yah.com', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/60.0', '127.0.0.1', '1537806861');

-- --------------------------------------------------------

--
-- Table structure for table `textual_pages_tanslations`
--

CREATE TABLE `textual_pages_tanslations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `textual_pages_tanslations`
--

INSERT INTO `textual_pages_tanslations` (`id`, `name`, `description`, `abbr`, `for_id`) VALUES
(2, 'Terms', '<ol>\r\n	<li>\r\n	<p>Every file name is for the page that will show.</p>\r\n	</li>\r\n	<li>\r\n	<p>Page urls are</p>\r\n	</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>/ - for home page (home.php)</li>\r\n	<li>/checkout - checkout page (checkout.php)</li>\r\n	<li>/shopping-cart - shopping cart page (shopping_cart.php)</li>\r\n	<li>/contacts - contacts page (contacts.php)</li>\r\n	<li>/page/pageName - every textual page added from administration (dynPage.php)</li>\r\n	<li>/blog - blog (blog.php)</li>\r\n	<li>/blog/myarticle_1 - blog articles preview (view_blog_post.php)</li>\r\n	<li>/myProduct_1 - online store product preview (view_product.php)</li>\r\n</ul>\r\n\r\n<ol start=\"4\">\r\n	<li><em>_parts/footer.php</em>&nbsp;and&nbsp;<em>_parts/header.php</em>&nbsp;are loaded in every of this pages</li>\r\n	<li>Url for load cssfile.css from your css folder is&nbsp;<em>base_url(\'templatecss/nameOfFile.css\')</em></li>\r\n	<li>Url for load jsfile.js from your js folder is&nbsp;<em>base_url(\'templatejs/nameOfFile.js\')</em></li>\r\n	<li>Comming variables from controllers to views you can see in each conroller (names of controllers are equal to views)</li>\r\n</ol>\r\n', 'en', 2),
(5, 'Privacy', '', 'en', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'notifications by email',
  `last_login` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `notify`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'your@email.com', 0, 1539158473);

-- --------------------------------------------------------

--
-- Table structure for table `users_public`
--

CREATE TABLE `users_public` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_public`
--

INSERT INTO `users_public` (`id`, `name`, `email`, `phone`, `password`, `created`) VALUES
(1, 'Uzua Tertsea Timothy', 'reithsatns@gmail.com', '07061097980', 'bbaf56aa0f6f5ff07a642541422784f2', '2018-08-23 01:52:34'),
(2, 'Tim Chosen', 'timchosen@gmail.com', '08134942718', 'bbaf56aa0f6f5ff07a642541422784f2', '2018-08-24 10:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `value_store`
--

CREATE TABLE `value_store` (
  `id` int(10) UNSIGNED NOT NULL,
  `thekey` varchar(50) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `value_store`
--

INSERT INTO `value_store` (`id`, `thekey`, `value`) VALUES
(1, 'sitelogo', 'mediva.png'),
(2, 'navitext', ''),
(3, 'footercopyright', 'Powered by Shop.Online ©  2015 - 2018 All right reserved. '),
(4, 'contactspage', 'Hello dear client'),
(5, 'footerContactAddr', 'Wuse 2, Abuja, FCT'),
(6, 'footerContactEmail', 'timchosen@gmail.com'),
(7, 'footerContactPhone', '08134942718'),
(8, 'googleMaps', ''),
(9, 'footerAboutUs', 'You know we are simply great. Yes We are a Good shop                                '),
(10, 'footerSocialFacebook', 'https://fb.me/cavewebs'),
(11, 'footerSocialTwitter', 'cavewebs'),
(12, 'footerSocialGooglePlus', 'cavewebs'),
(13, 'footerSocialPinterest', 'cavewebs'),
(14, 'footerSocialYoutube', 'cavewebs'),
(16, 'contactsEmailTo', 'contacts@shop.dev'),
(17, 'shippingOrder', '10000'),
(18, 'addJs', ''),
(19, 'publicQuantity', '0'),
(20, 'paypal_email', ''),
(21, 'paypal_sandbox', '0'),
(22, 'publicDateAdded', '0'),
(23, 'googleApi', ''),
(24, 'template', 'tembe'),
(25, 'cashondelivery_visibility', '1'),
(26, 'showBrands', '0'),
(27, 'showInSlider', '1'),
(28, 'codeDiscounts', '1'),
(29, 'virtualProducts', '1'),
(30, 'multiVendor', '0'),
(31, 'newStyle', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `url`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, NULL, '', 'timchosen@gmail.com', '$2y$10$1jshQ4psbpdEOrDWpI.g6e2.AXBBTEG296bm3ioDRF87zbTxi1OFW', '2018-08-25 18:40:54', '2018-08-25 18:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders`
--

CREATE TABLE `vendors_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_code` varchar(20) NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders_clients`
--

CREATE TABLE `vendors_orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_pages`
--
ALTER TABLE `active_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_links`
--
ALTER TABLE `confirm_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law`
--
ALTER TABLE `cookie_law`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`abbr`,`for_id`) USING BTREE;

--
-- Indexes for table `discount_codes`
--
ALTER TABLE `discount_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_clients`
--
ALTER TABLE `orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_translations`
--
ALTER TABLE `products_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_public`
--
ALTER TABLE `users_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_store`
--
ALTER TABLE `value_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key` (`thekey`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_pages`
--
ALTER TABLE `active_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confirm_links`
--
ALTER TABLE `confirm_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cookie_law`
--
ALTER TABLE `cookie_law`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discount_codes`
--
ALTER TABLE `discount_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders_clients`
--
ALTER TABLE `orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products_translations`
--
ALTER TABLE `products_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_public`
--
ALTER TABLE `users_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `value_store`
--
ALTER TABLE `value_store`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
