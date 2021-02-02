-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 10:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abey`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `Email` varchar(30) NOT NULL,
  `Password` int(6) NOT NULL,
  `login_session` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`Email`, `Password`, `login_session`) VALUES
('abey.george@xaviers.edu.in', 195220, '2020-10-10 20:46:36'),
('abey.george@xaviers.edu.in', 195220, '2020-10-10 20:46:36'),
('abey.george@xaviers.edu.in', 195220, '2020-10-10 20:46:36'),
('abey.george@xaviers.edu.in', 195220, '2020-10-10 20:46:36'),
('abey.george@xaviers.edu.in', 195220, '2020-10-10 20:47:47'),
('naveen.chandel@xaviers.edu.in', 195211, '2020-10-10 21:09:03'),
('raj.sharma@xaviers.edu.in', 195255, '2020-10-10 21:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `signupdata`
--

CREATE TABLE `signupdata` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupdata`
--

INSERT INTO `signupdata` (`Name`, `Email`, `Password`) VALUES
('Abey George', 'abey.george@xaviers.edu.in', 195220),
('Naveen Chandel', 'naveen.chandel@xaviers.edu.in', 195211),
('Raj Sharma', 'raj.sharma@xaviers.edu.in', 195255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindata`
--
ALTER TABLE `logindata`
  ADD KEY `x1` (`Email`,`Password`);

--
-- Indexes for table `signupdata`
--
ALTER TABLE `signupdata`
  ADD PRIMARY KEY (`Email`,`Password`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logindata`
--
ALTER TABLE `logindata`
  ADD CONSTRAINT `x1` FOREIGN KEY (`Email`,`Password`) REFERENCES `signupdata` (`Email`, `Password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
