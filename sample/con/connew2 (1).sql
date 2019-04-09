-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 01:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connew2`
--

-- --------------------------------------------------------

--
-- Table structure for table `connew_registration`
--

CREATE TABLE `connew_registration` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `location` longtext NOT NULL,
  `edu` text NOT NULL,
  `year_graduate` varchar(250) NOT NULL,
  `joining_period` varchar(250) NOT NULL,
  `refer` varchar(250) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connew_registration`
--

INSERT INTO `connew_registration` (`reg_id`, `name`, `email`, `mob`, `location`, `edu`, `year_graduate`, `joining_period`, `refer`, `registration_date`) VALUES
(1, 'Sudipto Das', 'sudiptodas666@gmail.com', '9062022587', 'sdfsdfs', 'sdfsdf', '2004', 'Within one week', 'asdfdsf', '2018-12-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connew_registration`
--
ALTER TABLE `connew_registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connew_registration`
--
ALTER TABLE `connew_registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
