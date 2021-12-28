-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 12:50 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoomot_mark1_elahe`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_addon_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email_address`, `password`, `account_addon_date`) VALUES
(1, 'towfiqueelahe6@gmail.com', 'loveyoumaa', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, 'abcd@gmail.com', 'ahdsfkhsadf', ''),
(8, 'email@gmail.com', '12345', ''),
(9, 'asdfsad@gmail.com', 'asdfjsaldfj', ''),
(10, 'elahe@gmail.com', '123456', 'Wed 25-08-2021'),
(11, 'fardeen@gmail.com', 'asdhfjkshfsad', 'Thu 26-08-2021'),
(12, 'towfiqueelahe6@gmail.com', 'loveyoumaa', 'Wed 15-09-2021'),
(13, 'elahe@mygsuite.co', 'sLCaK7xfvz64Bf5', 'Mon 22-11-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
