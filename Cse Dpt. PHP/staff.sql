-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 12:16 PM
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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Photo` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Titulary` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone No.` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Photo`, `Name`, `Titulary`, `Email`, `Phone No.`) VALUES
('img/staff (1).jpg', 'Ersad', 'assistant', 'Ersad@gmail.com', 1728613839),
('img/staff (2).jpg', 'Nur alom', 'assistant', 'nur@gmail.com', 1728613839),
('img/staff(6).jpg', 'Salek Mia', 'assistant', 'salek@gmail.com', 1728613839),
('img/staff (5).jpg', 'Momin', 'assistant', 'momin@gmail.com', 1728613839);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
