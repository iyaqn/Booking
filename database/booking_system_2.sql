-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 06:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `AddonID` int(11) NOT NULL,
  `AddonName` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AdminID`, `Username`, `Password`, `FullName`) VALUES
(1, 'admin', '123', 'Admin Admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL,
  `GuestID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `feedback`, `timestamp`, `GuestID`) VALUES
(4, 'eee', '2024-04-13 04:26:17', 1),
(5, 'eeeeeeeeeee', '2024-04-26 17:08:27', 2),
(6, 'wawdewa', '2024-04-26 17:16:51', 7),
(7, 'aeddfd', '2024-04-26 17:16:51', 7),
(8, 'dfgdf', '2024-04-26 17:17:11', 6),
(9, 'fgdc', '2024-04-26 17:17:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `GuestID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`GuestID`, `FirstName`, `LastName`, `Email`, `Phone`, `Address`, `password`, `token`) VALUES
(1, 'Rommel', 'Maningas', 'admin@gmail.com', '123132131', 'Purok 6', '123123', ''),
(2, 'Rendel', 'Maningas', 'johnrendel87@gmail.com', '123132131', 'Purok 6', '123', ''),
(5, 'Mary', 'Malagayo', 'maryjulia.malagayo.cics@ust.edu.ph', '09990366218', 'Wangsheng Funeral Parlor', 'Sharina1', ''),
(6, 'aaa aa', 'aaaa aa', 'jmalagayo4@gmail.com', '09123456789', 'Wangsheng Funeral Parlor', 'Pass1111', ''),
(7, 'Mary', 'Malagayo', 'kittycatjulie35@gmail.com', '09099903662', 'Wangsheng Funeral Parlor', '1111QQQQ', '');

-- --------------------------------------------------------

--
-- Table structure for table `inclusions`
--

CREATE TABLE `inclusions` (
  `inclusion_id` int(11) NOT NULL,
  `inclusion` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `PackageID` int(11) NOT NULL,
  `PackageName` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `type` enum('standard','custom') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`PackageID`, `PackageName`, `Description`, `Price`, `type`) VALUES
(1, 'Package 1', 'Day Stay', '15000.00', 'standard'),
(2, 'Package 2', 'Night Stay', '18000.00', 'standard'),
(3, 'Package 3', 'Overnight Stay', '25000.00', 'standard'),
(4, 'Custom Package 1', 'Custom 1', '10000.00', 'custom'),
(5, 'Custom Package 2', 'Custom', '1000.00', 'custom');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `ReservationID` int(11) DEFAULT NULL,
  `AmountPaid` decimal(10,2) DEFAULT NULL,
  `PaymentDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `PaymentProof` varchar(255) DEFAULT NULL,
  `sender` varchar(255) NOT NULL,
  `ReferenceNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `ReservationID`, `AmountPaid`, `PaymentDate`, `PaymentProof`, `sender`, `ReferenceNumber`) VALUES
(1, 16, '15000.00', '2024-03-17 01:41:55', 'bedroom1_2.jpg', '', '123'),
(2, 17, '16000.00', '2024-03-17 05:17:20', 'bball.jpg', '', '123123'),
(28, 43, '0.00', '2024-03-27 06:05:04', 'wordanalytics_2.png', '', '31'),
(29, 44, '10000.00', '2024-03-27 06:09:07', 'T1 Gumayosi-ggez-1.jpeg', '', '4441131'),
(36, 51, '1000.00', '2024-03-28 05:15:11', 'RobloxScreenShot20230524_083550084_2.png', '', '1'),
(37, 52, '1000.00', '2024-04-08 08:50:50', 'RobloxScreenShot20230602_150222706_1.png', '', '0901823781792'),
(38, 53, '25000.00', '2024-04-08 20:17:57', 'RobloxScreenShot20230524_083550084_3.png', '', '123'),
(39, 54, '15000.00', '2024-04-08 20:43:34', 'RobloxScreenShot20230710_175557328_2.png', '', '12311'),
(40, 63, '7500.00', '2024-04-10 06:55:57', 'RobloxScreenShot20230602_150222706_3.png', 'Rendel', '53534534'),
(41, 64, '12500.00', '2024-04-12 12:56:34', 'bball_1.jpg', 'Julia Malagayo', '1223123'),
(42, 65, '9000.00', '2024-04-12 13:52:20', 'bball_2.jpg', 'aaaa aa', '12345678'),
(43, 66, '7500.00', '2024-04-12 13:57:30', 'g7.jpg', 'Julia Malagayo', '1223123'),
(44, 67, '12500.00', '2024-04-26 07:17:27', 'Screenshot 2024-01-03 142716.png', 'sdgy', 'sdfgh'),
(45, 68, '9000.00', '2024-04-26 09:07:34', 'Screenshot (127).png', 'aaaa', '1223123'),
(46, 69, '9000.00', '2024-04-26 10:05:33', 'Screenshot (248).png', 'aaaa', '`123'),
(47, 70, '7500.00', '2024-04-26 10:22:47', 'Screenshot (275).png', 'aaaa', '1223123');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ReservationID` int(11) NOT NULL,
  `GuestID` int(11) DEFAULT NULL,
  `PackageID` int(11) DEFAULT NULL,
  `CheckInDate` date DEFAULT NULL,
  `CheckOutDate` date DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `status` enum('approved','declined','pending','cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ReservationID`, `GuestID`, `PackageID`, `CheckInDate`, `CheckOutDate`, `TotalAmount`, `status`) VALUES
(3, 1, 3, '2024-03-30', '2024-03-30', '25800.00', 'approved'),
(15, 1, 1, '2024-03-29', '2024-03-29', '15000.00', 'approved'),
(16, 1, 1, '2024-03-23', '2024-03-23', '15000.00', 'cancelled'),
(17, 1, 1, '2024-03-20', '2024-03-20', '16000.00', 'declined'),
(43, 1, 4, '2024-03-28', '2024-03-28', '0.00', 'cancelled'),
(44, 1, 4, '2024-04-04', '2024-04-04', '10000.00', 'cancelled'),
(51, 1, 5, '2024-04-13', '2024-04-13', '1000.00', 'cancelled'),
(52, 2, 5, '2024-04-12', '2024-04-12', '1000.00', 'cancelled'),
(53, 1, 3, '2024-04-17', '2024-04-17', '25000.00', 'approved'),
(54, 2, 1, '2024-04-18', '2024-04-18', '15000.00', 'approved'),
(55, 1, 3, '2024-04-19', '2024-04-19', '25000.00', 'declined'),
(56, 1, 2, '2024-04-20', '2024-04-20', '18000.00', 'approved'),
(57, 1, 2, '2024-04-27', '2024-04-27', '18000.00', ''),
(58, 1, 1, '2024-04-22', '2024-04-22', '15000.00', 'pending'),
(59, 1, 2, '2024-04-19', '2024-04-19', '18000.00', 'declined'),
(60, 1, 2, '2024-04-19', '2024-04-19', '18000.00', 'approved'),
(61, 1, 3, '2024-04-27', '2024-04-27', '25000.00', 'pending'),
(62, 1, 3, '2024-04-19', '2024-04-19', '25000.00', 'declined'),
(63, 1, 1, '2024-04-27', '2024-04-27', '15000.00', ''),
(64, 5, 3, '2024-04-19', '2024-04-19', '25000.00', 'cancelled'),
(65, 6, 2, '2024-04-19', '2024-04-19', '18000.00', 'declined'),
(66, 6, 1, '2024-04-21', '2024-04-21', '15000.00', 'pending'),
(67, 1, 3, '2024-04-26', '2024-04-26', '25000.00', 'approved'),
(68, 1, 2, '2024-04-26', '2024-04-26', '18000.00', 'declined'),
(69, 1, 2, '2024-04-27', '2024-04-27', '18000.00', ''),
(70, 1, 1, '2024-04-28', '2024-04-28', '15000.00', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_addons`
--

CREATE TABLE `reservation_addons` (
  `ReservationID` int(11) NOT NULL,
  `AddonID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email_address`, `contact_no`, `password`, `token`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '123', '202cb962ac59075b964b07152d234b70', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`AddonID`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `GuestID` (`GuestID`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`GuestID`);

--
-- Indexes for table `inclusions`
--
ALTER TABLE `inclusions`
  ADD PRIMARY KEY (`inclusion_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `ReservationID` (`ReservationID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `GuestID` (`GuestID`),
  ADD KEY `PackageID` (`PackageID`);

--
-- Indexes for table `reservation_addons`
--
ALTER TABLE `reservation_addons`
  ADD PRIMARY KEY (`ReservationID`,`AddonID`),
  ADD KEY `AddonID` (`AddonID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `AddonID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `GuestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inclusions`
--
ALTER TABLE `inclusions`
  MODIFY `inclusion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `PackageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`GuestID`) REFERENCES `guests` (`GuestID`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`ReservationID`) REFERENCES `reservations` (`ReservationID`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`GuestID`) REFERENCES `guests` (`GuestID`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`PackageID`) REFERENCES `packages` (`PackageID`);

--
-- Constraints for table `reservation_addons`
--
ALTER TABLE `reservation_addons`
  ADD CONSTRAINT `reservation_addons_ibfk_1` FOREIGN KEY (`ReservationID`) REFERENCES `reservations` (`ReservationID`),
  ADD CONSTRAINT `reservation_addons_ibfk_2` FOREIGN KEY (`AddonID`) REFERENCES `addons` (`AddonID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
