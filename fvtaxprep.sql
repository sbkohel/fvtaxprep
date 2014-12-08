-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2014 at 08:49 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fvtaxprep`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--
drop table if exists `Appointments`;
CREATE TABLE IF NOT EXISTS `Appointments` (
  `appointment_id` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`appointment_id`),
  UNIQUE KEY `appointment_id` (`appointment_id`),
  KEY `username` (`username`)
);

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE IF NOT EXISTS `Customers` (
  `username` varchar(40) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `cell` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`username`, `f_name`, `l_name`, `address`, `phone`, `cell`, `email`) VALUES
('smithj', 'James', 'Smith', '669 1st Ave. Oshkosh WI 54956', '920-998-1122', '920-774-2233', 'james.smith@gmail.com'),
('brownJ', 'Jerry', 'Brown', '456 Pine St. Oshkosh WI 54956', '920-433-9999', '920-888-3775', 'jerry.brown@gmail.com'),
('kurts', 'Samantha', 'Kurt', '123 Main St. Oshkosh WI 54956', '920-123-6656', '920-999-3425', 'samantha.kurt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE IF NOT EXISTS `Employees` (
  `employee_id` varchar(40) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `employee_id` (`employee_id`)
) ;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employee_id`, `f_name`, `l_name`, `phone`) VALUES
('26466', 'Justin', 'Bright', '920-333-3214'),
('46432', 'Denise', 'Finch', '920-322-2134');

-- --------------------------------------------------------

--
-- Table structure for table `Forms`
--

CREATE TABLE IF NOT EXISTS `Forms` (
  `form_no` varchar(40) NOT NULL,
  `form_name` varchar(40) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`form_no`),
  UNIQUE KEY `form_no` (`form_no`)
) ;

--
-- Dumping data for table `Forms`
--

INSERT INTO `Forms` (`form_no`, `form_name`, `price`) VALUES
('1000', 'W-2', 5.00),
('1010', 'H-EZ Rent Certificate', 25.00),
('1020', 'Additional Schedules', 20.00),
('1040', '1040 with 2 W-2s & State Return', 99.00);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`username`, `password`, `role`) VALUES
('brightj', 'password2', 'admin'),
('finchd', 'password1', 'superadmin'),
('smithj', 'password3', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `Returns`
--

CREATE TABLE IF NOT EXISTS `Returns` (
  `return_id` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `employee_id` varchar(40) NOT NULL,
  `form_no` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`return_id`),
  KEY `username` (`username`),
  KEY `employee_id` (`employee_id`),
  KEY `form_no` (`form_no`)
) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `Appointments_ibfk_1` FOREIGN KEY (`username`) REFERENCES `Customers` (`username`);

--
-- Constraints for table `Returns`
--
ALTER TABLE `Returns`
  ADD CONSTRAINT `Returns_ibfk_1` FOREIGN KEY (`username`) REFERENCES `Customers` (`username`),
  ADD CONSTRAINT `Returns_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `Employees` (`employee_id`),
  ADD CONSTRAINT `Returns_ibfk_3` FOREIGN KEY (`form_no`) REFERENCES `Forms` (`form_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
