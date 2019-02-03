-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 03, 2019 at 06:03 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MonsterLeague`
--

-- --------------------------------------------------------

--
-- Table structure for table `Monsters`
--

CREATE TABLE `Monsters` (
  `name` varchar(100) NOT NULL,
  `age` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `strength` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Monsters`
--

INSERT INTO `Monsters` (`name`, `age`, `weight`, `bio`, `strength`) VALUES
('Infernaltree', 10, 150, 'un arbre magique', 80),
('Toxinscream', 18, 112, 'un monstre toxique', 80),
('Acidpaw', 29, 65, 'un monstre acide', 87),
('Barbling', 40, 225, 'un barbling', 109);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
