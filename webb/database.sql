-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 09:36 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `Form` varchar(255) NOT NULL,
  `To` varchar(255) NOT NULL,
  `dep` date NOT NULL,
  `Seat` int(11) NOT NULL,
  `Class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `Form`, `To`, `dep`, `Seat`, `Class`) VALUES
(1, 'KTM', 'PKR', '2019-07-31', 2, 'Business'),
(2, 'SEA', 'PKR', '2019-07-21', 12, 'Economic'),
(3, 'SEA', 'PKR', '2019-07-21', 12, 'Economic'),
(4, 'KTM', 'baglung', '2019-07-30', 3, 'Economic'),
(5, 'KTM', 'baglung', '2019-07-30', 3, 'Economic'),
(6, 'SEA', 'SEA', '2019-07-19', 55, 'Economic'),
(7, 'Kushma', 'Pokhara', '2019-08-10', 100, 'Business'),
(8, 'Kushma', 'Kathmandu', '2019-08-01', 12, 'Business'),
(9, 'Baglung', 'kushma', '2019-09-30', 4, 'Business'),
(10, 'LAX', 'kkk', '2019-09-27', 12, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Bikal poudel', 'rabinsubedi008@gmail.com', 'hello'),
(5, 'Bikal poudel', 'anupk@123gmail.com', 'we need more feature on this page. '),
(6, 'Anupam', 'admin@gmail.com', 'jajhjhdajhaj'),
(7, 'Rabin subedi', 'rabinsubedi008@gmail.com', 'jjajjajajh');

-- --------------------------------------------------------

--
-- Table structure for table `lg`
--

CREATE TABLE `lg` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg`
--

INSERT INTO `lg` (`id`, `password`, `username`) VALUES
(1, '1234', 'user@gmail.co]'),
(3, '74672625', 'rabinsubedi789@gmail.com'),
(4, '74672625', 'ramu@gmail.com'),
(5, '12345', 'ramu@gmail.com'),
(6, '1234', 'rabinsubedi789@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `address`, `contact`, `email`, `gender`) VALUES
(51, 'Ramu subedi ', 'rabinsubedi', '9867826013', 'admin@gmail.com', 'Female'),
(52, 'Rabin Subedi ', 'Pokhara', '9867826013', 'robinsubedi009@gmail.com', 'Female'),
(53, 'Bikal poudel', 'rabinsubedi', '999', 'anupk@123gmail.com', 'Female'),
(54, 'Ramu subedi ', 'Pokhara', '88888', 'rabinsubedi008@gmail.com', 'Male'),
(55, 'Rabin subedi', 'Kushma', '9867826013', 'rabinsubedi008@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '1234'),
(2, 'rabinsubedi.com', 'subedi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lg`
--
ALTER TABLE `lg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lg`
--
ALTER TABLE `lg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
