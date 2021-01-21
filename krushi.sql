-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 06:56 PM
-- Server version: 10.5.5-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `bio`, `password`) VALUES
(3, 'Vinesh Majethiya', 'vineshmajethiya0@gmail.com', 'Backend Devloper', '$2y$10$iFDXNW9PnECVdCKK0LE8H.xRbbnk5bE9Lpca88AWGVpX1rYGGUQWW'),
(16, 'Paresh', 'digitalparesh@google.com', 'Hey, I\'m a full stack developer from Gujarat, India. I can help you build your next product.I design, build, operate & sometimes rescue full-stack web applications. I specialize in creating sites for individuals and small businesses.', '$2y$10$6dfVzJDd0GswDZ8FNOyfXu7yQr8XF/m4PA7ijA9QE6e2tKGF28Bii');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `phone`, `message`) VALUES
(11, 'suresh', 'Mahesh', 'na@na.com', '7894561230', 'Test TEst'),
(14, 'Sagar', 'Ahir', 'sagarahir@gmail.com', '995624106', 'Hello All'),
(16, 'Vinesh', 'Majethiya', 'vineshmajethiya0@gmail.com', '7990477496', 'Vinesh'),
(17, 'Test', 'Test', 'na@nananare.com', '1234567890', 'What is Price of This'),
(18, 'Test', 'Test', 'na@nananare.com', '1234567890', 'What is Price of This'),
(19, 'Test', 'Test', 'na@nananare.com', '1234567890', 'What is Price of This'),
(20, 'Test', 'Test', 'na@nananare.com', '1234567890', 'What is Price of This'),
(21, 'dscsd', 'jhkh', 'kjhkjh@khjkjh.com', '7894561230', 'dmfldskfdskmflds'),
(22, 'edwed', 'lkjlk', 'jlkjlk@LJlkjl.coms', 'sd', 'ijoij');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
