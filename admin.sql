-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 08:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `depIDlogin` varchar(40) NOT NULL,
  `school` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `age` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(70) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `depIDlogin`, `school`, `gender`, `age`, `email`, `phone`, `password`, `image`, `time`) VALUES
(1, 'Mr_George', 'SCI/0021/09', 'Computing and Informatics', 'male', 67, '0', '123', '123', '1632156245_Maseno-University-Logo.png', 'Monday 20th of September 2021 08:17:58 PM'),
(2, 'School of computing', 'compAdmin', 'Computing and Informatics', 'Female', 40, '0', '07699768', 'adm', '1632158278_id-card.png', 'Monday 20th of September 2021 08:17:58 PM'),
(3, 'Kingston Kioko', 'SCI/0023/10', 'Computing and Informatics', 'male', 56, 'kingston1@gmail.com', '0737218221', '123', '1632161543_community.png', 'Monday 20th of September 2021 09:12:23 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
