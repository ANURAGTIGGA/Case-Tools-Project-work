-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2013 at 09:30 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buhari`
--

CREATE TABLE IF NOT EXISTS `buhari` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `available` varchar(3) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `buhari`
--

INSERT INTO `buhari` (`prod_id`, `name`, `price`, `available`) VALUES
(1, 'idli', 4, 'yes'),
(2, 'vada', 4, 'yes'),
(3, 'dosa', 15, 'yes'),
(4, 'poori', 15, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feed` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feed`) VALUES
(1, 'good'),
(2, 'ok'),
(3, 'disappoint'),
(4, 'good'),
(5, 'good'),
(6, 'good'),
(7, 'good'),
(8, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE IF NOT EXISTS `grocery` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  `available` varchar(3) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`prod_id`, `name`, `price`, `available`) VALUES
(1, 'Soaps', 25, 'yes'),
(2, 'Shampoo', 55, 'yes'),
(3, 'Colddrinks', 30, 'yes'),
(4, 'Chips', 10, 'yes'),
(5, 'Toothbrush', 15, 'yes'),
(6, 'Toothpaste', 18, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `juicy`
--

CREATE TABLE IF NOT EXISTS `juicy` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  `available` varchar(3) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `juicy`
--

INSERT INTO `juicy` (`prod_id`, `name`, `price`, `available`) VALUES
(1, 'Apple', 17, 'yes'),
(2, 'Banana', 12, 'yes'),
(3, 'Orange', 15, 'yes'),
(4, 'Pineapple', 20, 'yes'),
(5, 'Grape', 13, 'yes'),
(6, 'Watermelon', 16, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `price` int(5) NOT NULL,
  `available` varchar(3) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`prod_id`, `name`, `price`, `available`) VALUES
(1, 'copy', 15, 'yes'),
(2, 'pens', 10, 'yes'),
(3, 'pencil', 5, 'yes'),
(4, 'eraser', 3, 'yes'),
(5, 'sharpner', 4, 'yes'),
(6, 'Diary', 50, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `roll` int(9) NOT NULL,
  `hostel` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `roll`, `hostel`, `mail`, `mobile`, `password`) VALUES
(1, 'Anurag Aro', 205112074, 'Aquamarine A', '205112074@nitt.edu', 2147483647, 'pass'),
(2, 'Sanjay Ora', 205112048, 'Aquamarine A', '205112048@nitt.edu', 2147483647, 'pass'),
(3, 'Hemanshu S', 205112089, 'Aquamarine A', '205112089@nitt.edu', 2147483647, 'pass'),
(4, 'Nirpesh Pi', 205112051, 'Aquamarine A', '205112051@nitt.edu', 2147483647, 'pass'),
(5, 'abc', 205112058, 'Aquamarine A', 'WEBMAIL', 9856666, 'pass');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
