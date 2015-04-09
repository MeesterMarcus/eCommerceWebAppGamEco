-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2014 at 07:27 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Mydb6`
--

-- --------------------------------------------------------

--
-- Table structure for table `empty`
--

CREATE TABLE IF NOT EXISTS `empty` (
  `emptycheck` int(2) DEFAULT NULL,
  `id` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empty`
--

INSERT INTO `empty` (`emptycheck`, `id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gameK`
--

CREATE TABLE IF NOT EXISTS `gameK` (
  `item_ids` int(10) unsigned NOT NULL,
  `gameKey` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gameK`
--

INSERT INTO `gameK` (`item_ids`, `gameKey`) VALUES
(7, 'n1'),
(7, 'n2'),
(7, 'n3'),
(8, 'nn1'),
(8, 'nn2'),
(8, 'nn3'),
(2, 'p1'),
(2, 'p2'),
(1, 'pc1'),
(1, 'pc2'),
(1, 'pc3'),
(5, 'ps1'),
(5, 'ps2'),
(5, 'ps3'),
(6, 'pss1'),
(6, 'pss2'),
(6, 'pss3'),
(3, 'x1'),
(3, 'x2'),
(3, 'x3'),
(4, 'xb1'),
(4, 'xb2'),
(4, 'xb3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total`, `order_date`) VALUES
(1, 125, '49.98', '2014-12-03 10:17:09'),
(2, 1, '29.99', '2014-12-03 10:17:34'),
(3, 1, '29.99', '2014-12-03 19:50:14'),
(4, 1, '29.99', '2014-12-03 19:54:25'),
(5, 1, '29.99', '2014-12-03 19:54:57'),
(6, 1, '29.99', '2014-12-03 19:55:16'),
(7, 1, '59.98', '2014-12-03 20:15:09'),
(8, 1, '29.99', '2014-12-03 20:15:24'),
(9, 1, '59.98', '2014-12-03 20:15:37'),
(10, 1, '29.99', '2014-12-03 20:15:44'),
(11, 1, '29.99', '2014-12-03 20:18:32'),
(12, 1, '29.99', '2014-12-03 20:18:39'),
(13, 1, '29.99', '2014-12-03 20:18:44'),
(14, 1, '29.99', '2014-12-03 20:19:17'),
(15, 1, '29.99', '2014-12-03 20:24:18'),
(16, 1, '29.99', '2014-12-03 20:24:29'),
(17, 1, '29.99', '2014-12-03 20:24:36'),
(18, 1, '29.99', '2014-12-03 20:24:51'),
(19, 1, '29.99', '2014-12-03 20:26:48'),
(20, 1, '29.99', '2014-12-03 20:29:57'),
(21, 1, '29.99', '2014-12-03 20:30:07'),
(22, 1, '29.99', '2014-12-03 20:30:16'),
(23, 1, '29.99', '2014-12-03 20:30:26'),
(24, 1, '29.99', '2014-12-03 20:30:39'),
(25, 1, '29.99', '2014-12-03 20:38:27'),
(26, 1, '89.97', '2014-12-03 20:39:22'),
(27, 1, '29.99', '2014-12-03 20:40:54'),
(28, 1, '29.99', '2014-12-03 20:41:00'),
(29, 1, '29.99', '2014-12-03 20:41:10'),
(30, 1, '29.99', '2014-12-03 20:41:17'),
(31, 1, '29.99', '2014-12-03 20:41:25'),
(32, 1, '29.99', '2014-12-03 20:49:33'),
(33, 1, '29.99', '2014-12-03 20:49:40'),
(34, 1, '29.99', '2014-12-03 20:49:48'),
(35, 1, '29.99', '2014-12-03 20:49:56'),
(36, 1, '29.99', '2014-12-03 20:54:40'),
(37, 1, '29.99', '2014-12-03 20:55:41'),
(38, 1, '29.99', '2014-12-03 20:55:49'),
(39, 1, '29.99', '2014-12-03 20:55:54'),
(40, 1, '29.99', '2014-12-03 20:56:30'),
(41, 1, '29.99', '2014-12-03 20:56:45'),
(42, 1, '29.99', '2014-12-03 20:56:53'),
(43, 1, '29.99', '2014-12-03 20:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE IF NOT EXISTS `order_contents` (
`content_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL DEFAULT '1',
  `price` decimal(4,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`content_id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 1, 1, 1, '29.99'),
(2, 1, 2, 1, '19.99'),
(3, 2, 1, 1, '29.99'),
(4, 3, 1, 1, '29.99'),
(5, 4, 1, 1, '29.99'),
(6, 5, 1, 1, '29.99'),
(7, 6, 1, 1, '29.99'),
(8, 7, 1, 2, '29.99'),
(9, 8, 1, 1, '29.99'),
(10, 9, 1, 2, '29.99'),
(11, 10, 1, 1, '29.99'),
(12, 11, 1, 1, '29.99'),
(13, 12, 1, 1, '29.99'),
(14, 13, 1, 1, '29.99'),
(15, 14, 1, 1, '29.99'),
(16, 15, 1, 1, '29.99'),
(17, 16, 1, 1, '29.99'),
(18, 17, 1, 1, '29.99'),
(19, 18, 1, 1, '29.99'),
(20, 19, 1, 1, '29.99'),
(21, 20, 1, 1, '29.99'),
(22, 21, 1, 1, '29.99'),
(23, 22, 1, 1, '29.99'),
(24, 23, 1, 1, '29.99'),
(25, 24, 1, 1, '29.99'),
(26, 25, 1, 1, '29.99'),
(27, 26, 1, 3, '29.99'),
(28, 27, 1, 1, '29.99'),
(29, 28, 1, 1, '29.99'),
(30, 29, 1, 1, '29.99'),
(31, 30, 1, 1, '29.99'),
(32, 31, 1, 1, '29.99'),
(33, 32, 1, 1, '29.99'),
(34, 33, 1, 1, '29.99'),
(35, 34, 1, 1, '29.99'),
(36, 35, 1, 1, '29.99'),
(37, 36, 1, 1, '29.99'),
(38, 37, 1, 1, '29.99'),
(39, 38, 1, 1, '29.99'),
(40, 39, 1, 1, '29.99'),
(41, 40, 1, 1, '29.99'),
(42, 41, 1, 1, '29.99'),
(43, 42, 1, 1, '29.99'),
(44, 43, 1, 1, '29.99');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
`item_id` int(10) unsigned NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `item_img` varchar(200) NOT NULL,
  `item_price` decimal(4,2) NOT NULL,
  `item_key` varchar(20) NOT NULL,
  `developer` varchar(20) NOT NULL,
  `platform` varchar(20) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`item_id`, `item_name`, `item_desc`, `item_img`, `item_price`, `item_key`, `developer`, `platform`, `available`) VALUES
(1, 'Counter Strike: Global Offensive', 'Description of Game1.', 'pics/pc/csgo.jpg', '29.99', 'pc-001', 'Valve', 'PC', 0),
(2, 'Diablo III', 'Description of Diablo.', 'pics/pc/diablo3.jpg', '19.99', 'pc-002', 'Blizzard', 'PC', 2),
(3, 'Battlefield 4', 'Description of Battlefield 4.', 'pics/xbox/bf4.jpg', '9.99', 'xbx-001', 'DICE', 'Xbox', 3),
(4, 'Destiny', 'Description of Destiny.', 'pics/xbox/destiny.jpg', '19.99', 'xbx-002', 'Bungie', 'Xbox', 5),
(5, 'Assassin''s Creed IV: Black Flag', 'Description of ACIV.', 'pics/ps4/aciv.jpg', '39.09', 'ps4-001', 'Ubisoft', 'PS4', 6),
(6, 'Alien Isolation', 'Description of Alien.', 'pics/ps4/alienisolation.jpg', '27.00', 'ps4-002', 'Creative Assembly', 'PS4', 7),
(7, 'Batman Arkham Origins', 'Description of Batman.', 'pics/nintendo/batmanao.jpg', '35.00', 'ntd-001', 'Warner Bros.', 'Nintendo', 8),
(8, 'Hyrule Warriors', 'Description of HW.', 'pics/nintendo/hyrule.jpg', '88.00', 'ntd-002', 'Team Ninja', 'Nintendo', 9);

--
-- Triggers `shop`
--
DELIMITER //
CREATE TRIGGER `empty_trigger` AFTER UPDATE ON `shop`
 FOR EACH ROW begin
   if new.available = '0' then
    update empty set emptycheck = '1' where id = 1;
    elseif new.available != '0' then
	update empty set emptycheck = '0' where id = 1;
    end if;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` char(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `City` varchar(45) NOT NULL,
  `Zip` int(11) NOT NULL,
  `Street` varchar(45) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `reg_date`, `City`, `Zip`, `Street`, `DOB`) VALUES
(1, 'kitty', 'kitty', 'kitty@yahoo.com', '95d79f53b52da1408cc79d83f445224a58355b13', '2014-11-29 22:21:29', '123', 78216, '123', NULL),
(124, 'manager', 'manager', 'manager@yahoo.com', '1a8565a9dc72048ba03b4156be3e569f22771f23', '2014-12-02 00:09:58', 'san antonio', 78216, 'street 123', NULL),
(125, 'marcos', 'gonzales', 'marcos@yahoo.com', 'dfadc855249b015fd2bb015c0b099b2189c58748', '2014-12-03 00:48:02', '123', 78216, '123', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v1`
--
CREATE TABLE IF NOT EXISTS `v1` (
`first_name` varchar(20)
,`order_id` int(10) unsigned
,`order_date` datetime
,`oder_id2` int(10) unsigned
);
-- --------------------------------------------------------

--
-- Structure for view `v1`
--
DROP TABLE IF EXISTS `v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mydb6`.`v1` AS select `mydb6`.`users`.`first_name` AS `first_name`,`o`.`order_id` AS `order_id`,`o`.`order_date` AS `order_date`,`x`.`order_id` AS `oder_id2` from ((`mydb6`.`users` join `mydb6`.`orders` `o`) join `mydb6`.`order_contents` `x`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gameK`
--
ALTER TABLE `gameK`
 ADD PRIMARY KEY (`gameKey`), ADD UNIQUE KEY `gameKey` (`gameKey`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_contents`
--
ALTER TABLE `order_contents`
 ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `order_contents`
--
ALTER TABLE `order_contents`
MODIFY `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
MODIFY `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
