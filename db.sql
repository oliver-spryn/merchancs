-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2014 at 03:32 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `merchancs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `cat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_Name` varchar(255) NOT NULL,
  `cat_Description` varchar(1024) NOT NULL,
  PRIMARY KEY (`cat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_ID`, `cat_Name`, `cat_Description`) VALUES
(1, 'New and Featured', 'What''s hot and what''s not'),
(2, 'Specialty Items', 'The best of the best'),
(3, 'Test Answers', 'Keep it secret, keep it safe'),
(4, 'Tech equipment', 'When the TLC lets you down'),
(5, 'Miscellaneous', 'The goods');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `pr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `pr_Name` varchar(1024) NOT NULL,
  `pr_Description` longtext NOT NULL,
  `pr_Price` decimal(10,2) NOT NULL,
  `pr_Image` varchar(1024) NOT NULL,
  `cat_ID` int(11) NOT NULL,
  PRIMARY KEY (`pr_ID`),
  KEY `products_reference_categories` (`cat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pr_ID`, `pr_Name`, `pr_Description`, `pr_Price`, `pr_Image`, `cat_ID`) VALUES
(1, 'Floppy Disks', '', '0.01', 'floppy-disks.jpg', 1),
(2, 'The Elements of Style', '', '4.95', 'strunk-and-white.jpg', 1),
(3, 'Autographed Photos', '', '0.89', 'CoryBoatright.jpg', 2),
(4, 'Dr. B''s Favorite Words (Uncensored)', '', '99.99', 'Dictionary.jpg', 2),
(5, 'Dr. B''s Apple Newton', '', '999.95', 'newton.jpg', 2),
(6, 'Dr. Yeager''s Comic Collection', '', '3999.95', 'calvin-and-hobbes.jpg', 2),
(7, 'All of them', '', '9999.99', 'test_answers.jpg', 3),
(8, 'Floppy Disks', '', '0.01', 'floppy-disks.jpg', 4),
(9, 'DVORAK keyboard', '', '13.95', 'dvorak.jpg', 4),
(10, 'Replacement Laptop', '', '999.99', 'laptop.jpg', 4),
(11, 'Eight track', '', '24.95', 'eight_track.jpg', 4),
(12, 'Advice', '', '0.05', 'Lucy.jpg', 5),
(13, 'Haircut', '', '8.99', 'haircut.jpg', 5),
(14, 'Coffee (10 lb)', '', '24.95', 'coffee_smile.jpg', 5),
(15, 'Directions to secret lair', '', '34.95', 'Evil_Fortress.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `usr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `usr_Name` varchar(512) NOT NULL,
  `usr_UName` varchar(64) NOT NULL,
  `usr_Pass` char(32) NOT NULL,
  `usr_Role` enum('administrator','user') NOT NULL,
  `usr_Theme` enum('apple','electric','lime','oak') NOT NULL,
  PRIMARY KEY (`usr_ID`),
  UNIQUE KEY `usr_UName` (`usr_UName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--
-- User passwords are both "root", as hashed by MD5()
--

INSERT INTO `tbl_users` (`usr_ID`, `usr_Name`, `usr_UName`, `usr_Pass`, `usr_Role`, `usr_Theme`) VALUES
(1, 'Super User', 'sudo', '63a9f0ea7bb98050796b649e85481845', 'administrator', 'electric'),
(2, 'Walter J. Evancost', 'wallst.', '63a9f0ea7bb98050796b649e85481845', 'user', 'lime');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`cat_ID`) REFERENCES `tbl_categories` (`cat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;