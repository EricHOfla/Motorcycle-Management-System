-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 05:42 PM
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
-- Database: `mcms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `photo` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `pay` varchar(30) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` varchar(200) NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `customer_id`, `store_id`, `phone`, `photo`, `address`, `pay`, `dates`, `stat`) VALUES
(36, 6, 7, '0788854387', '12.jpg', 'kk', '75%', '2023-05-18 09:31:50', 'Dane'),
(37, 6, 3, '0788876207', 'HABUMUGISHA Eric.png', 'rwanda', 'Full', '2023-05-18 11:47:19', 'Dane');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `app_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `fname`, `lname`, `customername`, `email`, `telephone`, `address`, `gender`, `photo`, `password`, `status`, `dates`) VALUES
(1, 'HABUMUGISHA', 'HABUMUGISHA', 'Dad', 'dad@gmail.com', 7888, 'kigali', 'male', '', '1', 'Allowed', '2023-04-16 14:26:18'),
(2, 'Minani', 'Elvis', 'Omaly', 'om@gmail.com', 89989, 'cdghdwh', 'Male', '', '1234', 'Denied', '2023-05-30 15:07:00'),
(5, 'ishimwe', 'khevin', 'ishkhevin', 'gprine@example.com', 2147483647, 'kigali', 'Male', '0x0.jpg', '12345', 'Allowed', '2023-04-17 09:01:38'),
(6, 'Kabaka', 'mucyo', 'mucyo', 'mucyo@gmail.com', 788888800, 'Kigali', 'Male', 'Advanced level certificate of education.pdf', 'kaka', 'Allowed', '2023-05-17 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `i_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `pay_image` varchar(200) NOT NULL,
  `pay_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `customer_id`, `store_id`, `amount`, `payment_type`, `pay_image`, `pay_time`) VALUES
(11, 6, 7, 70000, 'MOMO', 'HABUMUGISHA Eric.png', '2023-05-18 09:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `photoe_store`
--

CREATE TABLE `photoe_store` (
  `ph_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `re_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `r_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `rname` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `s_id` int(11) NOT NULL,
  `mark` varchar(250) NOT NULL,
  `plate_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `requ` varchar(100) NOT NULL,
  `appr` int(11) NOT NULL,
  `datestored` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` varchar(200) NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`s_id`, `mark`, `plate_no`, `status`, `price`, `requ`, `appr`, `datestored`, `stat`) VALUES
(2, 'TEVES', 'RAD009U', 'NOT PAID', '2M', 'New', 0, '2023-05-30 14:42:12', 'Normal'),
(3, 'BAJAJ', 'RAE824P', 'NOT PAID', '6.5M', 'Approved', 0, '2023-05-28 10:49:52', 'Normal'),
(4, 'TEVES', 'RAF097', 'NOT PAID', '2M', '', 0, '2023-05-16 08:21:50', 'Normal'),
(5, 'BAJAJ', 'RAZ100B', 'NOT PAID', '1.5M', '', 0, '2023-05-16 08:21:55', 'Normal'),
(7, 'HOAJA', 'RAD49B', 'PAID', '2.5M', 'Approved', 0, '2023-05-18 11:08:35', 'Dane');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Username` text NOT NULL,
  `telephone` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `account_type` varchar(200) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Firstname`, `Lastname`, `Username`, `telephone`, `address`, `email`, `gender`, `position`, `Password`, `photo`, `account_type`, `dates`, `status`) VALUES
(1, 'HABUMUGISHA', 'Eric ', 'Eric H Ofla', '+250 788876207', 'Kigali, Rwanda', 'ericofla1@gmail.com', 'Male', 'Staff', '1', '', 'Admin', '2023-05-30 15:25:59', 'Allowed'),
(3, 'me', 'you', 'Helve', '', 'KK 502st, sonatube,kigali', 'ericofla1@gmail.com', 'Male', 'Staff', '333', '', 'Manager', '2023-05-18 11:16:00', 'Allowed'),
(4, 'UMUSANI', 'Kamari', 'Manzi', '07888888', 'KK', 'ericofla1@gmail.com', 'Male', 'Staff', '1', '', 'Cashier', '2023-05-18 11:16:10', 'Allowed'),
(5, 'HAB', 'Damascene', 'Dam', '0788888888', 'KK 502st, sonatube,kigali', 'dam@gmail.com', 'Male', 'Staff', '111', '', 'Cashier', '2023-05-18 11:16:23', 'Allowed'),
(6, 'BYISHIMO', 'Cedric', 'Cedro', '07899999', 'KK 502st, sonatube,kigali', 'cedro@gmail.com', 'Male', 'Staff', '123', '', 'Admin', '2023-05-18 11:16:38', 'Allowed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `photoe_store`
--
ALTER TABLE `photoe_store`
  ADD PRIMARY KEY (`ph_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `photoe_store`
--
ALTER TABLE `photoe_store`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `store` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `approved`
--
ALTER TABLE `approved`
  ADD CONSTRAINT `approved_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `application` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approved_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `store` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photoe_store`
--
ALTER TABLE `photoe_store`
  ADD CONSTRAINT `photoe_store_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `store` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
