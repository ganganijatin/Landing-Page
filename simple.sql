-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 02:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contno` int(18) NOT NULL,
  `age` int(20) NOT NULL,
  `weight` float NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `whatyourgoal` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`id`, `name`, `contno`, `age`, `weight`, `email`, `gender`, `whatyourgoal`, `date`) VALUES
(1, 'niraj', 989898989, 32, 88.9, 'nirajdulani195@', 'male', 'weightloss', '2023-12-30'),
(2, 'niraj', 66666, 32, 88.9, 'kj@gmail.com', 'female', 'weightloss', '2023-12-30'),
(3, 'Dulani JyotiBen', 2147483647, 26, 99, 'svm.nirajdulani2@gma', 'Female', 'Weight Gain', '0000-00-00'),
(4, 'nnn', 2147483647, 23, 99, 'svm.nirajdulani2@gma', 'Male', 'Weight Loss', '0000-00-00'),
(5, 'Dulani JyotiBen', 2147483647, 26, 99, 'svm.nirajdulani2@gma', 'Other', 'Weight Gain', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
