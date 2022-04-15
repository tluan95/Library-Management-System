-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2020 at 09:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

DROP TABLE IF EXISTS `add_books`;
CREATE TABLE IF NOT EXISTS `add_books` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `books_title` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author` varchar(50) NOT NULL,
  `books_id` varchar(50) NOT NULL,
  `books_category` varchar(50) NOT NULL,
  `books_year` varchar(50) NOT NULL,
  `books_describe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `books_title`, `books_image`, `books_author`, `books_id`, `books_category`, `books_year`, `books_describe`) VALUES
(4, 'Luffy', 'books_image/c1396c5b7f7e7e2c0f1c2bbc1545ecbcone_piece.jpg', 'Eiichiro Oda', '10001', 'comic', '2000', 'One piece Luffy'),
(7, 'Beginning of PHP', 'books_image/2b41d73a47cc609aead597f5914a1bcd410HLrIyOlL._SX403_BO1,204,203,200_.jpg', 'Packt', '10003', 'Web Development', '2012', 'Master the features of PHP'),
(6, 'Zoro', 'books_image/8d008d74bc4550c8261c6e0b30885191one_piece-001.jpg', 'Eiichiro Oda', '10002', 'comic', '2000', 'One piece Zoro'),
(8, 'Pro Git', 'books_image/fd7503a9ea07b44bb4e0378137afc0468924164.jpg', 'Scott Chacon', '10004', 'Software', '2009', 'Git is the version control system developed by Linus Torvalds for Linux kernel development. ');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

DROP TABLE IF EXISTS `librarian_registration`;
CREATE TABLE IF NOT EXISTS `librarian_registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
CREATE TABLE IF NOT EXISTS `student_registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollment`) VALUES
(1, 'Wong', 'Ted Luan', 'ted', 'ted', 'ted', '0165777707', '3', 'student'),
(2, 'o33', 'o33', 'o33', 'o33', 'o33', '033', '3', '033');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
