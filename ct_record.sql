-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 10:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `At_id` int(4) NOT NULL,
  `roll` int(6) NOT NULL,
  `attenmark` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`At_id`, `roll`, `attenmark`) VALUES
(1, 150113, 10),
(2, 150126, 10),
(3, 150130, 10),
(4, 150135, 10),
(5, 150140, 10),
(6, 150148, 10),
(7, 150149, 10),
(8, 150153, 10),
(9, 150155, 10),
(10, 150156, 10);

-- --------------------------------------------------------

--
-- Table structure for table `ct_mark`
--

CREATE TABLE `ct_mark` (
  `id` int(6) NOT NULL,
  `roll` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ct1` int(2) NOT NULL,
  `ct2` int(2) NOT NULL,
  `ct3` int(2) NOT NULL,
  `department` varchar(30) NOT NULL,
  `session` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_mark`
--

INSERT INTO `ct_mark` (`id`, `roll`, `name`, `ct1`, `ct2`, `ct3`, `department`, `session`) VALUES
(1, 150148, 'Md. Nazmul Hossain', 0, 9, 8, 'CSE', '2014-2015'),
(2, 150149, 'Md Jahir Hossain', 4, 5, 6, 'CSE', '2014-2015'),
(3, 150153, 'Md. Ashraful Alam', 6, 7, 5, 'CSE', '2014-2015'),
(4, 150140, 'habibullah', 4, 7, 6, 'CSE', '2014-2015'),
(5, 150130, 'Md. Ashraful islam', 6, 5, 8, 'CSE', '2014-2015'),
(6, 150135, 'Rashed Hasan', 6, 7, 6, 'CSE', '2014-2015'),
(7, 150126, 'Arafat Islam', 8, 7, 8, 'CSE', '2014-2015'),
(8, 150113, 'Md. Jakaria Hossain', 5, 6, 7, 'CSE', '2014-2015'),
(9, 150156, 'Md.Deloar Hossain', 7, 6, 6, 'CSE', '2014-2015'),
(10, 150155, 'Mis Aishi', 6, 5, 7, 'CSE', '2014-2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`At_id`);

--
-- Indexes for table `ct_mark`
--
ALTER TABLE `ct_mark`
  ADD PRIMARY KEY (`id`,`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct_mark`
--
ALTER TABLE `ct_mark`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
