-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 03:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE `faculity` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `salery` int(10) NOT NULL,
  `shift` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`id`, `name`, `email`, `mobile`, `gender`, `address`, `salery`, `shift`) VALUES
(5, 'vaibhav jain', 'vaibhavjain14798@gmail.com', 2147483647, 'male', 'gali jagjot no 9', 25000, 'morning'),
(6, 'vaisali chuchan', 'tsirtx1@gmail.com', 2147483647, 'female', 'gali jagjot no 9', 25000, 'evening'),
(7, 'shrutika khanak', 'www.matiography.com@gmail.com', 2147483647, 'female', 'gali jagjot no 9', 25000, 'evening');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculity`
--
ALTER TABLE `faculity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculity`
--
ALTER TABLE `faculity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
