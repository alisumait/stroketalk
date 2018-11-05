-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2018 at 02:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3301451_stroketalkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `src` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `src`) VALUES
(1, '../audio/../audio/222.ogg'),
(2, '../audio/../audio/2.ogg'),
(3, '../audio/../audio/3.ogg'),
(4, '../audio/../audio/4.ogg'),
(5, '../audio/../audio/5.ogg'),
(6, '../audio/../audio/6.ogg'),
(7, '../audio/../audio/7.ogg'),
(8, '../audio/../audio/8.ogg'),
(9, '../audio/../audio/9.ogg'),
(10, '../audio/../audio/10.ogg'),
(11, '../audio/../audio/11.ogg'),
(12, '../audio/../audio/12.ogg'),
(13, '../audio/../audio/13.ogg'),
(14, '../audio/../audio/14.ogg'),
(15, '../audio/../audio/15.ogg'),
(16, '../audio/../audio/16.ogg'),
(17, '../audio/../audio/17.ogg'),
(18, '../audio/../audio/18.ogg'),
(19, '../audio/../audio/19.ogg'),
(20, '../audio/../audio/20.ogg'),
(21, '../audio/../audio/21.ogg'),
(22, '../audio/../audio/22.ogg'),
(23, '../audio/../audio/23.ogg'),
(24, '../audio/../audio/'),
(25, '../audio/../audio/'),
(26, '../audio/../audio/'),
(27, '../audio/../audio/'),
(28, '../audio/../audio/');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `text`) VALUES
(1, 'French Fries'),
(2, 'Chicken'),
(3, 'Nasi Lemak'),
(4, 'Salad'),
(5, 'Coffee'),
(6, 'Eggs'),
(7, 'Soup'),
(8, 'Yes'),
(9, 'No'),
(10, 'Move me from bed'),
(11, 'Change clothes'),
(12, 'Take a shower'),
(13, 'Play a game'),
(14, 'Call My family.'),
(15, 'Drink Water'),
(16, 'Go to Bathroom'),
(17, 'Feeling pain'),
(18, 'Go to Bed'),
(19, 'Call Nurse'),
(20, 'Go Outside'),
(21, 'Give me Medicine'),
(22, 'Play music'),
(23, 'Play a movie'),
(24, 'Edit'),
(25, 'Edit'),
(26, 'Edit'),
(27, 'Edit'),
(28, 'Edit'),
(29, 'Food'),
(30, 'Action'),
(31, 'Emergency'),
(32, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(35, 'Ali', '86318e52f5ed4801abe1d13d509443de', 'ali@gmail.com'),
(38, 'Alis', '86318e52f5ed4801abe1d13d509443de', 'aliassum55@gmail.com'),
(41, 'Alisa', '86318e52f5ed4801abe1d13d509443de', 'alisumaitdev@gmail.com'),
(42, 'Ascdslo', '2d1403ea5c2d55d78b1db73bc7236296', 'ub@g.com'),
(43, 'fvc;p', '6a6226f60f9000ed9395aa58f432e8b7', 'dfdc@gm.com'),
(44, 'dsx', '1154f8638c5d7e55644c1c5a1e4925c7', 'scds@fvfd.com'),
(45, 'vfcd', '88c09f6585b0447e9156c039ff005a07', 'ads@ga.com'),
(47, 'Ebrazax', '0db173e207132db816e8a732364a8cb5', 'xas@gmail.com'),
(48, 'alissa', '86318e52f5ed4801abe1d13d509443de', 'alxds@g.com'),
(49, 'ebra', '81dc9bdb52d04dc20036dbd8313ed055', 'ebra.malay2016@gamil.com'),
(51, 'Aliss', '5e80903ee372af5f659606414849647d', 'aliassum555@gmail.com'),
(52, 'Alissaa', '5e80903ee372af5f659606414849647d', 'crdsxwc@rfecd.ccds'),
(53, 'Alisscda', '86318e52f5ed4801abe1d13d509443de', 'axslox@fmodc.xc'),
(54, 'Alix', 'c47d0161b2496990ef5401a61be74552', 'alix@gd.com'),
(55, 'ahhh', 'e10adc3949ba59abbe56e057f20f883e', 'ahhh@gmail.com'),
(56, 'alisum', '81dc9bdb52d04dc20036dbd8313ed055', 'al@fg.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
