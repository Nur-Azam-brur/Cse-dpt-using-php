-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 10:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `nine`
--

CREATE TABLE `nine` (
  `Photo` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Id` int(10) NOT NULL,
  `Reg No` int(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nine`
--

INSERT INTO `nine` (`Photo`, `Name`, `Id`, `Reg No`, `Email`, `Phone No`) VALUES
('img/momin.jpg', 'momin', 1605027, 8669, 'momin@gmail.com', 1728613839),
('img/nur.jpg', 'Nur azam', 1605028, 8667, 'nurshonchoy@gmail.com', 1728613839),
('img/sumon faruk.jpg', 'sumon faruk', 1605029, 8667, 'sumonfaruk@gmail.com', 1728613838),
('img/fuad.jpg', 'fuad', 1605035, 8667, 'fuad@gmail.com', 1728613839);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nine`
--
ALTER TABLE `nine`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nine`
--
ALTER TABLE `nine`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1605036;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
