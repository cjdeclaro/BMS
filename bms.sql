-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 01:22 AM
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
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blotters`
--

CREATE TABLE `blotters` (
  `id` int(11) NOT NULL,
  `blotter_entry_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criminal_records`
--

CREATE TABLE `criminal_records` (
  `id` int(11) NOT NULL,
  `suspect_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `narrations`
--

CREATE TABLE `narrations` (
  `id` int(11) NOT NULL,
  `blotter_entry_no` varchar(50) NOT NULL,
  `incident_type` varchar(100) NOT NULL,
  `incident_place` varchar(100) NOT NULL,
  `narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `police_personnels`
--

CREATE TABLE `police_personnels` (
  `id` int(11) NOT NULL,
  `suspect_id` int(11) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `unit_assignment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reporting_persons`
--

CREATE TABLE `reporting_persons` (
  `id` int(11) NOT NULL,
  `blotter_entry_no` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `civil_status` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `qualifier` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `home_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `education` text NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `id_presented` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suspects`
--

CREATE TABLE `suspects` (
  `id` int(11) NOT NULL,
  `blotter_entry_no` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `qualifier` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `home_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `education` text NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `id_presented` varchar(50) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `eyes_color` varchar(50) NOT NULL,
  `hair_color` varchar(50) NOT NULL,
  `influence_of` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lastname`, `firstname`, `middlename`, `address`, `email`, `phone`, `role`) VALUES
(1, 'Administrator', 'password', 'Lumagui', 'Harley', 'Ferrer', 'Labasan, Bongabong, Oriental Mindoro', 'lumagui.harl0723@gmail.com', '09156309799', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotters`
--
ALTER TABLE `blotters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal_records`
--
ALTER TABLE `criminal_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narrations`
--
ALTER TABLE `narrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_personnels`
--
ALTER TABLE `police_personnels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reporting_persons`
--
ALTER TABLE `reporting_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
