-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 06:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `das`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_no` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `dcontact` varchar(20) NOT NULL,
  `specialist` varchar(30) NOT NULL,
  `fees` varchar(20) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `booking_process_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_no`, `dname`, `userid`, `dcontact`, `specialist`, `fees`, `pname`, `phone`, `email`, `date`, `time`, `payment`, `booking_process_time`) VALUES
(9, 'Dr. Mukesh Manna', 'DOC001', '+919361392450', 'Cardiologist', '1200', 'test test', '+919361392333', 'test@gmail.com', '2023-10-31', '03.00pm', 'Paytm', '2023-10-21 06:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `specialist` varchar(30) NOT NULL,
  `fees` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pic` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `address`, `contact`, `email`, `specialist`, `fees`, `user_id`, `password`, `pic`) VALUES
(1, 'Dr. Mukesh Manna', 'Teynampet', '+919361392450', 'mukesh@gmail.com', 'Cardiologist', '1200', 'DOC001', '123', 'mukesh.jpg'),
(2, 'Dr. Bhuvaneshwaran', 'Medavakkam', '+917869054682', 'bhuvanesh@gmail.com', 'Gynecologist', '1000', 'DOC002', '123', 'bhuvanesh.jpeg'),
(3, 'Dr. Ayesha Banu', 'T. Nagar', '+919000299903', 'banu@gmail.com', 'Neurologist', '930', 'DOC003', '123', 'doctor3.jpg'),
(4, 'Dr. Nithya Priya ', 'Tambaram', '+918738384684', 'nithya@gmail.com', 'Cardiologist', '1100', 'DOC004', '123', 'nithya.jpeg'),
(5, 'Dr. Nandini', 'Pallikaranai', '+917833354682', 'nandini@gmail.com', 'Bone', '1499', 'DOC005', '123', 'nadini.jpeg'),
(6, 'Dr. Pavithra', 'Velachery', '+919000299903', 'pavithra@gmail.com', 'Neurologist', '1300', 'DOC006', '123', 'pavithra.jpeg'),
(7, 'Dr. Karan', 'Vyasarpadi', '+919361392400', 'karan@gmail.com', 'Bone', '800', 'DOC007', '123', 'karan.jpg'),
(8, 'Dr. Shouvik Sharkar', 'Potheri', '+919876543210', 'Shouvik@gmail.com', 'Plastic Surgery', '1600', 'DOC008', '123', 'shouvik.jpeg'),
(9, 'Dr. kirthika ', 'Mylapore', '+917869503452', 'Kirthika@gmail.com', 'General ', '800', 'DOC009', '123', 'kirthika.jpeg'),
(10, 'Dr. Hari Prasad', 'Kilpauk', '+91936130000', 'Hari@gmail.com', 'Gynecologist', '1000', 'DOC010', '123', 'hari.jpeg'),
(11, 'Dr. keerthana', 'Chrompet', '+91900029999', 'Keerthana@gmail.com', 'General ', '950', 'DOC011', '123', 'no_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `name`, `age`, `phone`, `bloodgrp`, `email`, `password`, `Reg_date`) VALUES
(1001, 'test', 22, '+919361392333', 'B+', 'test@gmail.com', '123', '2023-10-01 11:24:13'),
(1002, 'test', 23, '+919361392333', 'O+', 'test1@gmail.com', '123', '2023-10-01 11:32:20'),
(1003, 'Kamal Haasan', 44, '+919361392333', 'O+', 'kamal@gmail.com', '123', '2023-10-01 12:14:30'),
(1005, 'Rajini Kanth', 40, '+919361356577', 'AB+', 'raj@gmail.com', '123', '2023-10-05 13:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_no`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
