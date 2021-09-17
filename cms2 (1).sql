-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 12:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_page`
--

CREATE TABLE `event_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `occurence` varchar(255) NOT NULL,
  `day_month_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_page`
--

INSERT INTO `event_page` (`id`, `title`, `start_date`, `end_date`, `occurence`, `day_month_year`) VALUES
(1, 'Best PHP Course Ever', '2021-09-09', '2021-09-17', 'every', 'day'),
(2, 'Best PHP Course Ever', '2021-09-09', '2021-09-17', 'every', 'day'),
(5, 'Tittle', '2021-09-09', '2021-09-18', 'every', 'day'),
(7, 'Javascript course', '2021-07-07', '2021-09-23', 'every', 'day'),
(8, 'Javascript1', '2021-09-01', '2021-09-08', 'every', 'day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_page`
--
ALTER TABLE `event_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_page`
--
ALTER TABLE `event_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
