-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 11:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(4) NOT NULL,
  `PRN_no` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL,
  `room` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `PRN_no`, `name`, `message`, `room`, `date`) VALUES
(1, '1', 'Abhishek', 'Hello Everyone Welcome To PHP Chat-Room!!', 'PHP', '2021-05-13 14:49:02'),
(2, '1', 'Abhishek', 'Hello Everyone Welcome To Java Chat-Room!!', 'Java', '2021-05-13 14:49:25'),
(3, '1', 'Abhishek', 'Hello Everyone Welcome To Mysql Chat-Room!!', 'Mysql', '2021-05-13 14:49:46'),
(4, '1', 'Abhishek', 'Hello Everyone Welcome To HTML/CSS Chat-Room!!', 'HTML/CSS', '2021-05-13 14:50:06'),
(5, '2', 'bhavesh', 'hello sir ', 'PHP', '2021-05-13 14:51:04'),
(6, '2', 'bhavesh', 'Good Afternoon Sir ', 'Mysql', '2021-05-13 14:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Abhishek', 'abhi@gmail.com', '$2y$10$R0p99B5CuZeaWPfaO.Oc5e5uLtWDiOobeMY4KDy1gDHEPPqFeKIRu'),
(2, 'bhavesh', 'bhavesh@gmail.com', '$2y$10$DcCGeUviv7tF.ahi6IMpoebxelclN9vOsM4xowEAL/wMusF5OWp9K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
