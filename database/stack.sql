-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 03:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `stack`
--

CREATE TABLE `stack` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `amount` int(100) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `location1` varchar(500) NOT NULL,
  `date_purchase` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stack`
--

INSERT INTO `stack` (`id`, `first_name`, `last_name`, `email`, `phone`, `product_name`, `amount`, `reference`, `location1`, `date_purchase`) VALUES
(1, 'tope', 'aluko', 'damilotunaluko@gmail.com', '07067196287', 'PHP Savvy E-book', 111500, 'Payment complete! Reference: TD240968765', '', '2020-11-18 12:33:24'),
(2, 'tope', 'dani', 'dami@gmail.com', '-098765', 'PHP Savvy E-book', 111500, 'Payment complete! Reference: TD466150312', '', '2020-11-19 15:39:12'),
(3, 'tope', 'dami@gmail.com', 'dami@gmail.com', '123456', 'PHP Savvy E-book', 5000, 'Payment complete! Reference: TD177806960', '', '2020-11-19 16:03:55'),
(4, 'tope', 'dami', 'dami@gmail.com', '9876543', 'PHP Savvy E-book', 2000, 'Payment complete! Reference: TD939837532', 'lkjkhjghfdftghyj', '2020-11-19 17:25:18'),
(5, 'oiuytr', 'lkjhgfd', 'dami@gmail.con', '09876543', 'PHP Savvy E-book', 2000, 'Payment complete! Reference: TD427031165', ';lkjhgfdfghjlk;l', '2020-11-19 22:54:26'),
(6, 'tope', 'aluko', 'damilotunaluko1@gmail.com', '098765', 'PHP Savvy E-book', 2000, 'Payment complete! Reference: TD805553596', 'ytwhbxhui', '2020-11-21 20:41:34'),
(7, 'tope', 'aluko', 'damilotun@gmail.com', '876543', 'PHP Savvy E-book', 2000, 'Payment complete! Reference: TD2422683', 'dfgdfghj', '2020-11-21 21:02:17'),
(8, 'tope', 'aluko', 'damilotun@gmail.com', '23452', 'PHP Savvy E-book', 2000, 'Payment complete! Reference: TD416783563', '23456', '2020-11-21 21:27:57'),
(9, 'tope', 'sdfg', 'dsfdg@gmail.com', '2345675', 'PHP Savvy E-book', 7000, 'Payment complete! Reference: TD228729827', 'cxcvbnjmkjlk;', '2020-11-21 21:35:31'),
(10, 'tope', ';loiuy', 'dami@gmail.com', '098765', 'PHP Savvy E-book', 2000, 'Payment complete! Reference: TD533010316', 'oikujytrftgdgfhjk', '2020-11-21 21:46:09'),
(11, 'tope', 'ksdn', 'dami@gmail.com', '8765434567', 'PHP Savvy E-book', 2000, ' TD303431884', 'asdfgfhjkjl', '2020-11-21 22:06:33'),
(12, 'tope', 'aluko', 'damilotunaluko@gmail.com', '08111828434', 'PHP Savvy E-book', 2000, ' TD60700074', 'no 1. micheal alade street', '2020-11-21 22:10:56'),
(13, 'tope', 'aluko', 'dami@gmail.com', '765456785', 'PHP Savvy E-book', 2000, ' TD576218482', 'dfghgjm,.', '2020-11-21 22:14:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stack`
--
ALTER TABLE `stack`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stack`
--
ALTER TABLE `stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
