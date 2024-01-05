-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 10:38 AM
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
-- Database: `construction_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `architecture`
--

CREATE TABLE `architecture` (
  `architecture_id` int(11) NOT NULL,
  `a_name` varchar(1000) NOT NULL,
  `a_email` varchar(1000) NOT NULL,
  `a_phone` varchar(1000) NOT NULL,
  `a_password` varchar(1000) NOT NULL,
  `a_addres` varchar(1000) NOT NULL,
  `fee_amount` varchar(200) NOT NULL,
  `architecture_image` varchar(1000) NOT NULL,
  `a_experience` varchar(1000) NOT NULL,
  `a_experience_certificate` varchar(1000) NOT NULL,
  `architecture_type` varchar(100) NOT NULL,
  `architecture_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `architecture`
--

INSERT INTO `architecture` (`architecture_id`, `a_name`, `a_email`, `a_phone`, `a_password`, `a_addres`, `fee_amount`, `architecture_image`, `a_experience`, `a_experience_certificate`, `architecture_type`, `architecture_status`) VALUES
(1, 'ANISHA T ', 'anisha@gmail.com', '9876542587', 'anisha123', 'ANISHA T ', '5000', '1703846145.jpg', '8', '1703842079.pdf', 'Architecture', 'Approved'),
(2, 'Alna Joshy', 'alna@gmail.com', '7418529635', 'alna123', 'ollur Thrissur 680306', '12000', '1703842456.jpg', '12', '1703842456.pdf', 'Architecture', 'Approved'),
(3, 'DILJITH DINESAN', 'diljith@gmail.com', '+91 98468-84770', 'diljith123', 'qwe House,thrissur ollur,680306', '5000', '1703842607.jpg', '5', '1703842607.pdf', 'Architecture', 'Approved'),
(4, 'anu', 'anu@gmail.com', '9876543210', 'anu123', 'Thrissur, pin code 123456', '50000', '1704186983.jpg', '12', '1704186983.pdf', 'Architecture', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `architecture_booking`
--

CREATE TABLE `architecture_booking` (
  `architecture_booking_id` int(11) NOT NULL,
  `ab_customer_id` int(11) NOT NULL,
  `ab_customer_email` varchar(1000) NOT NULL,
  `ab_architecture_id` int(11) NOT NULL,
  `ad_architecture_email` varchar(2000) NOT NULL,
  `ab_house_description` varchar(1000) NOT NULL,
  `ab_booking_status` varchar(1000) NOT NULL,
  `ab_payment_status` varchar(1000) NOT NULL,
  `house_plan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `architecture_payment`
--

CREATE TABLE `architecture_payment` (
  `architecture_payment_id` int(11) NOT NULL,
  `architecture_booking_id` varchar(300) NOT NULL,
  `customer_id` varchar(300) NOT NULL,
  `customer_email` varchar(1000) NOT NULL,
  `architecture_id` varchar(500) NOT NULL,
  `ad_architecture_email` varchar(500) NOT NULL,
  `card_name` varchar(500) NOT NULL,
  `card_number` varchar(500) NOT NULL,
  `expiry_date` varchar(1000) NOT NULL,
  `cvc` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `architecture_review`
--

CREATE TABLE `architecture_review` (
  `architecture_review_id` int(11) NOT NULL,
  `architecture_id` int(11) NOT NULL,
  `architecture_email` varchar(500) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rating` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `contractor_id` int(11) NOT NULL,
  `c_name` varchar(1000) NOT NULL,
  `c_email` varchar(1000) NOT NULL,
  `c_phone` varchar(1000) NOT NULL,
  `c_password` varchar(1000) NOT NULL,
  `c_address` varchar(1000) NOT NULL,
  `fee_amount` varchar(100) NOT NULL,
  `c_image` varchar(1000) NOT NULL,
  `c_experience` varchar(1000) NOT NULL,
  `c_experience_certificate` varchar(1000) NOT NULL,
  `contractor_type` varchar(1000) NOT NULL,
  `contractor_status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`contractor_id`, `c_name`, `c_email`, `c_phone`, `c_password`, `c_address`, `fee_amount`, `c_image`, `c_experience`, `c_experience_certificate`, `contractor_type`, `contractor_status`) VALUES
(1, 'AJITHA C ', 'ajitha@gmail.com', '74646541114', 'ajitha123', 'qwe House,thrissur ollur,680306', '6000', '1703846746.jpg', '12', '1703844026.pdf', 'Contractor', 'Approved'),
(2, 'Anish Q', 'anish@gmail.com', '+91 98468-84770', 'anish123', 'xyz House, Kanippayoor PO Kunnamkulam Thrissur.680306', '6000', '1703844640.jpg', '8', '1703844640.pdf', 'Contractor', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_booking`
--

CREATE TABLE `contractor_booking` (
  `contractor_booking_id` int(11) NOT NULL,
  `cb_customer_id` int(11) NOT NULL,
  `cb_customer_email` varchar(300) NOT NULL,
  `cb_contractor_id` int(11) NOT NULL,
  `cb_contractor_email` varchar(500) NOT NULL,
  `cb_house_description` varchar(500) NOT NULL,
  `cb_house_plan` varchar(500) NOT NULL,
  `cb_house_3d` varchar(500) NOT NULL,
  `cb_contractor_description` varchar(1000) NOT NULL,
  `cb_booking_status` varchar(1000) NOT NULL,
  `cb_payment_status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contractor_payment`
--

CREATE TABLE `contractor_payment` (
  `contractor_payment_id` int(11) NOT NULL,
  `contractor_id` int(11) NOT NULL,
  `contractor_email` varchar(500) NOT NULL,
  `contractor_booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `card_name` varchar(500) NOT NULL,
  `card_number` varchar(500) NOT NULL,
  `cvc` varchar(500) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contractor_review`
--

CREATE TABLE `contractor_review` (
  `contractor_review_id` int(11) NOT NULL,
  `contractor_id` int(11) NOT NULL,
  `contractor_email` varchar(500) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `rating` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(1000) NOT NULL,
  `customer_email` varchar(1000) NOT NULL,
  `customer_phone` varchar(1000) NOT NULL,
  `customer_address` varchar(1000) NOT NULL,
  `customer_password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_password`) VALUES
(1, 'Arun M S', 'arun@gmail.com', '9513578524', 'qwe House,thrissur ollur,680306', '123'),
(2, 'majitha', 'majitha@gmail.com', '987456321', 'chavakkad', '123');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `designer_id` int(11) NOT NULL,
  `d_name` varchar(300) NOT NULL,
  `d_email` varchar(300) NOT NULL,
  `d_phone` varchar(300) NOT NULL,
  `d_password` varchar(500) NOT NULL,
  `d_address` varchar(500) NOT NULL,
  `d_fee_amount` varchar(2000) NOT NULL,
  `d_image` varchar(100) NOT NULL,
  `d_experience` varchar(500) NOT NULL,
  `d_experience_certificate` varchar(2000) NOT NULL,
  `designer_type` varchar(100) NOT NULL,
  `designer_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`designer_id`, `d_name`, `d_email`, `d_phone`, `d_password`, `d_address`, `d_fee_amount`, `d_image`, `d_experience`, `d_experience_certificate`, `designer_type`, `designer_status`) VALUES
(1, 'Clinto C K', 'clinto@gmail.com', '9496720040', 'clinto123', 'xyz House, south ernakulamPO ernakulam .680306', '5000', '1703846481.jpg', '3', '1703843560.pdf', 'Designer', 'Approved'),
(2, 'EBIN C P', 'ebin@gmail.com', '+91 98468-84770', 'ebin123', 'uyt House, Kanippayoor PO Kunnamkulam Thrissur.680306', '7000', '1703843770.jpg', '12', '1703843770.pdf', 'Designer', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `designer_booking`
--

CREATE TABLE `designer_booking` (
  `db_designer_bookingid` int(11) NOT NULL,
  `db_designer_id` int(11) NOT NULL,
  `db_designer_email` varchar(1000) NOT NULL,
  `db_customer_id` int(11) NOT NULL,
  `db_customer_email` varchar(500) NOT NULL,
  `db_house_plan` varchar(500) NOT NULL,
  `db_booking_status` varchar(500) NOT NULL,
  `db_payment_status` varchar(500) NOT NULL,
  `db_3d_plan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designer_payment`
--

CREATE TABLE `designer_payment` (
  `designer_payment_id` int(11) NOT NULL,
  `designer_booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `designer_id` int(11) NOT NULL,
  `designer_email` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `expiry_date` varchar(100) NOT NULL,
  `cvc` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designer_review`
--

CREATE TABLE `designer_review` (
  `designer_review_id` int(11) NOT NULL,
  `designer_id` int(11) NOT NULL,
  `designer_email` varchar(500) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `rating` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `architecture`
--
ALTER TABLE `architecture`
  ADD PRIMARY KEY (`architecture_id`);

--
-- Indexes for table `architecture_booking`
--
ALTER TABLE `architecture_booking`
  ADD PRIMARY KEY (`architecture_booking_id`);

--
-- Indexes for table `architecture_payment`
--
ALTER TABLE `architecture_payment`
  ADD PRIMARY KEY (`architecture_payment_id`);

--
-- Indexes for table `architecture_review`
--
ALTER TABLE `architecture_review`
  ADD PRIMARY KEY (`architecture_review_id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`contractor_id`);

--
-- Indexes for table `contractor_booking`
--
ALTER TABLE `contractor_booking`
  ADD PRIMARY KEY (`contractor_booking_id`);

--
-- Indexes for table `contractor_payment`
--
ALTER TABLE `contractor_payment`
  ADD PRIMARY KEY (`contractor_payment_id`);

--
-- Indexes for table `contractor_review`
--
ALTER TABLE `contractor_review`
  ADD PRIMARY KEY (`contractor_review_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`designer_id`);

--
-- Indexes for table `designer_booking`
--
ALTER TABLE `designer_booking`
  ADD PRIMARY KEY (`db_designer_bookingid`);

--
-- Indexes for table `designer_payment`
--
ALTER TABLE `designer_payment`
  ADD PRIMARY KEY (`designer_payment_id`);

--
-- Indexes for table `designer_review`
--
ALTER TABLE `designer_review`
  ADD PRIMARY KEY (`designer_review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `architecture`
--
ALTER TABLE `architecture`
  MODIFY `architecture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `architecture_booking`
--
ALTER TABLE `architecture_booking`
  MODIFY `architecture_booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `architecture_payment`
--
ALTER TABLE `architecture_payment`
  MODIFY `architecture_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `architecture_review`
--
ALTER TABLE `architecture_review`
  MODIFY `architecture_review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `contractor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contractor_booking`
--
ALTER TABLE `contractor_booking`
  MODIFY `contractor_booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contractor_payment`
--
ALTER TABLE `contractor_payment`
  MODIFY `contractor_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contractor_review`
--
ALTER TABLE `contractor_review`
  MODIFY `contractor_review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `designer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designer_booking`
--
ALTER TABLE `designer_booking`
  MODIFY `db_designer_bookingid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designer_payment`
--
ALTER TABLE `designer_payment`
  MODIFY `designer_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designer_review`
--
ALTER TABLE `designer_review`
  MODIFY `designer_review_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
