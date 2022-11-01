-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 05:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_wing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `business_name` varchar(150) NOT NULL,
  `business_type` varchar(80) NOT NULL,
  `region` varchar(80) NOT NULL,
  `business_start_date` date NOT NULL,
  `assistant_type` varchar(80) NOT NULL,
  `plan` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `business_name`, `business_type`, `region`, `business_start_date`, `assistant_type`, `plan`, `created_at`, `updated_at`) VALUES
(1, 'Houzeo Corp', 'Real State agency', 'India', '2022-01-04', 'VA', '966', '2022-11-01 16:26:34', '2022-11-01 21:29:30'),
(2, 'Wing AI', 'Electric & hardware', 'India', '2022-11-01', 'VA', '600', '2022-11-01 16:26:34', '2022-11-01 21:25:29'),
(3, 'Schbang Digital', 'Social Media Agency', 'India', '2022-11-01', 'FL', '5999', '2022-11-01 16:26:34', '2022-11-01 21:21:26'),
(4, 'Utopian Media PVT LTD', 'Social Media Agency', 'India', '2022-11-01', 'MH', '4333', '2022-11-01 16:26:34', '2022-11-01 21:25:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
