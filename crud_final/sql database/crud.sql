-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 08:41 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `svoters` varchar(10) NOT NULL,
  `sprecinct` varchar(10) NOT NULL,
  `slastname` varchar(30) NOT NULL,
  `sfirstname` varchar(30) NOT NULL,
  `smiddlename` varchar(30) NOT NULL,
  `sstreet` varchar(100) NOT NULL,
  `sbarangay` varchar(100) NOT NULL,
  `smunicipality` varchar(100) NOT NULL,
  `scity` varchar(100) NOT NULL,
  `sregion` int(100) NOT NULL,
  `szipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `svoters`, `sprecinct`, `slastname`, `sfirstname`, `smiddlename`, `sstreet`, `sbarangay`, `smunicipality`, `scity`, `sregion`, `szipcode`) VALUES
(1, '111', '123', 'Palma', 'Japhet', 'Pagmanoja', 'Baclayan', 'Madarag', 'San Enrique', 'Iloilo', 1, '5036'),
(2, '222', '456', 'Test', 'Test', 'Test', '#34 sdfdsfsdf', 'Another Barangay', 'Another Municipality', 'Another City', 1, '67890');




CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(5, 'Krisha', '$2y$10$O5tsiWoyNG27YtPo416T/uDIVBjEJQw7oAQqX/hUhxnPDQMxyzIKW', '2023-10-18 13:40:48'),
(6, 'Myra_E', '$2y$10$c66GGxDIZgSVDR7iwUcRgOGITak22D0ob87O.ONdX3NupVYHCc8li', '2023-10-18 13:51:05'),
(7, 'admin', '$2y$10$aD2kAyU0w/e3g6VMyeB9UewrLMVE5T6XzP8ArpSaOLlwt6uy0MIIK', '2023-10-14 19:52:47'),
(8, 'Darlyn', '$2y$10$im54YqmHa0sUr3GMnZfjfu9pIhjAQ/IJPrv.czJOnLsFJTkBBB5we', '2023-10-31 16:53:07');



CREATE TABLE `studentclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentclass`
--

INSERT INTO `studentclass` (`cid`, `cname`) VALUES
(1, 'Region VI'),
(2, 'Region VII'),
(3, 'Region I'),
(4, 'Region II');

--
-- Indexes for dumped tables
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);



ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentclass`
--
ALTER TABLE `studentclass`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `studentclass`
--
ALTER TABLE `studentclass`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
