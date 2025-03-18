-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2014 at 02:00 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Mersedes'),
(2, 'Volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name_menu` varchar(255) NOT NULL,
  `text_menu` text NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `text_menu`) VALUES
(1, 'За нас', 'Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie Tekstovo opisanie '),
(2, 'Регистрация', 'Тук можете да направите регистрация в сайта :)'),
(3, 'Логване', 'Здравейте тук можете да влезете в система ');

-- --------------------------------------------------------

--
-- Table structure for table `statii`
--

CREATE TABLE IF NOT EXISTS `statii` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `date_add` datetime NOT NULL,
  `cat` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `full_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `statii`
--

INSERT INTO `statii` (`id`, `title`, `discription`, `date_add`, `cat`, `img`, `full_text`) VALUES
(1, 'Mersedes Benz', 'Кратко описание на кола Кратко описание на кола Кратко описание на кола Кратко описание на кола Кратко описание на кола Кратко описание на кола', '2014-03-14 00:00:00', 1, 'files/main.png', 'Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла Пълно описание подробности бла бла '),
(2, 'volkswagen', 'opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie opisanie   ', '2014-03-14 00:00:00', 2, 'files/article_1.png', 'Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание Пълно описание ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Yor, 'yordan', '3administrator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
