-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2019 at 06:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tamch6k9_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` int(11) NOT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `available`, `price`, `room_number`) VALUES
(1101, 1, 20, 1100),
(1102, 1, 20, 1100),
(2101, 1, 30, 2100),
(2102, 1, 30, 2100),
(2201, 1, 30, 2200),
(2202, 1, 30, 2200),
(2301, 1, 30, 2300),
(2302, 1, 30, 2300),
(2401, 1, 30, 2400),
(2402, 1, 30, 2400),
(3101, 1, 10, 3100),
(3102, 1, 10, 3100),
(3103, 1, 10, 3100),
(3201, 1, 10, 3200),
(3202, 1, 10, 3200),
(3203, 1, 10, 3200),
(4101, 1, 10, 4100),
(4102, 1, 10, 4100),
(4103, 1, 10, 4100),
(4104, 1, 10, 4100),
(4201, 1, 10, 4200),
(4202, 1, 10, 4200),
(4203, 1, 10, 4200),
(4204, 1, 10, 4200);

-- --------------------------------------------------------

--
-- Table structure for table `beds_reserved`
--

CREATE TABLE `beds_reserved` (
  `id` int(11) NOT NULL,
  `beds_reserved_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_contact`
--

CREATE TABLE `group_contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_reservations`
--

CREATE TABLE `group_reservations` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(80) DEFAULT NULL,
  `event_purpose` varchar(80) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_guests` varchar(20) DEFAULT NULL,
  `event_message` text,
  `event_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `beds_reserved_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds_reserved`
--
ALTER TABLE `beds_reserved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bed_id` (`bed_id`);

--
-- Indexes for table `group_contact`
--
ALTER TABLE `group_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `group_reservations`
--
ALTER TABLE `group_reservations`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_contact` (`event_contact`) USING BTREE;

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guest_id` (`guest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beds_reserved`
--
ALTER TABLE `beds_reserved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `group_contact`
--
ALTER TABLE `group_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beds_reserved`
--
ALTER TABLE `beds_reserved`
  ADD CONSTRAINT `bed_id` FOREIGN KEY (`bed_id`) REFERENCES `beds` (`id`);

--
-- Constraints for table `group_reservations`
--
ALTER TABLE `group_reservations`
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`event_contact`) REFERENCES `group_contact` (`contact_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`);
