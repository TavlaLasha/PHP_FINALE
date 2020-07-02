-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 10:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `idn` int(11) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `idn`, `date`, `password`) VALUES
(1, 'lasha', 2147483647, '2004-10-22', 'lasha'),
(2, 'jlKLnoHedW', 2147483647, '2019-03-23', '38081'),
(3, 'jlKLnoHedW', 2147483647, '2019-03-23', '38081'),
(4, 'jlKLnoHedW', 2147483647, '2019-03-23', '38081'),
(5, 'MuYyYHXx', 150948715, '2017-05-15', '0wwvu'),
(6, 'ityuRyub', 2147483647, '1991-03-06', '43kx5'),
(7, 'qbNkKWztrXI', 2147483647, '1977-09-01', '25d6j'),
(8, 'SreENIik', 2147483647, '2019-10-12', '0h2z9'),
(9, 'BOOkpIM', 2147483647, '2008-08-18', '5509i'),
(10, 'PMnhYSJidiv', 872835201, '1991-08-23', 's3mcy'),
(11, 'ueIbWYJS', 412732020, '2007-10-22', 'z9s81'),
(12, 'obbuGD', 225532324, '1990-10-25', 'sqke8'),
(13, 'SQaphafP', 574946168, '1993-05-16', '97x94'),
(14, 'jlhCTG', 704197007, '1991-01-28', 'kn52q'),
(15, 'NiWuTK', 898117302, '1970-09-03', 'tbepb'),
(16, 'FcZPLi', 90464043, '1975-09-11', 'z77ge'),
(17, 'jjHavr', 438663411, '2012-08-01', '04v4k');

-- --------------------------------------------------------

--
-- Table structure for table `vacations`
--

CREATE TABLE `vacations` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacations`
--

INSERT INTO `vacations` (`id`, `title`, `description`, `date`) VALUES
(1, 'jQuery ', 'ssdssasaSDASF', '2020-07-14'),
(4, 'Lasha\'s Vacation', 'lashas vacation-i', '2020-07-02'),
(5, 'Lasha\'s Vacation №2', 'lashac vacation-i N2', '2020-07-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacations`
--
ALTER TABLE `vacations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vacations`
--
ALTER TABLE `vacations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
