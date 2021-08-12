-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/

-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 04:32 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database: `db_hor`


-- --------------------------------------------------------


-- Table structure for table `admin`


CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `admin`


INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin');

-- --------------------------------------------------------


-- Table structure for table `guest`


CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


-- Table structure for table `faci`


CREATE TABLE `faci` (
  `faci_id` int(11) NOT NULL,
  `faci_sport` varchar(50) NOT NULL,
  `faci_type` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `faci`


INSERT INTO `faci` (`faci_id`, `faci_sport`, `faci_type`, `photo`) VALUES
(1, 'Futsal Court (Male Sport Complex)', 'Indoor', '1futsal.jpg'),
(2, 'Tennis Court (Female Sport Complex)', 'Outdoor', '3tennis.jpg'),
(3, 'Swimming Pool (Male)', 'Indoor', '4swim.jpg'),
(4, 'Squash Court (Male Sport Complex)', 'Indoor', '5squash.jpg'),
(5, 'Football Field (Sayyidina Hamzah Stadium)', 'Outdoor', '6ball.jpg');

-- ----------------------------------------------------------------------


-- Table structure for table `booking`


CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `faci_id` int(11) NOT NULL,
  `faci_no` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_in` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 

-- Indexes for dumped tables



-- Indexes for table `admin`

ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);


-- Indexes for table `guest`

ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);


-- Indexes for table `faci`

ALTER TABLE `faci`
  ADD PRIMARY KEY (`faci_id`);


-- Indexes for table `booking`

ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);


-- AUTO_INCREMENT for dumped tables



-- AUTO_INCREMENT for table `admin`

ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- AUTO_INCREMENT for table `guest`

ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `faci`

ALTER TABLE `faci`
  MODIFY `faci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- AUTO_INCREMENT for table `transaction`

ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
