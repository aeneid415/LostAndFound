-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 09:14 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osa_itemmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `activation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `user_name`, `password`, `first_name`, `last_name`, `email_address`, `type`, `activation`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'John', 'Doe', 'aeneid.adversalo@gmail.com', 'Admin', 1),
(4, 'gracielle26', 'abe54cc8d0711f64236c9baed23d858c', 'Gracielle', 'Yano', 'aeneid415@hotmail.com', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `found_items`
--

CREATE TABLE `found_items` (
  `record_id` int(11) NOT NULL,
  `finder_name` varchar(45) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `course_year_dep` varchar(45) NOT NULL,
  `item` varchar(200) NOT NULL,
  `original_owner` varchar(45) DEFAULT NULL,
  `location` varchar(200) NOT NULL,
  `date_found` date NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `found_items`
--

INSERT INTO `found_items` (`record_id`, `finder_name`, `contact_no`, `course_year_dep`, `item`, `original_owner`, `location`, `date_found`, `date_issued`) VALUES
(2, 'Rhea Lizette Casuba', '09752583852', 'BEED SPED', 'Wallet (Black) w/ Cards, 500 - 1, 200 -2', 'Emma Sebastian', 'Student Affairs Office', '2018-01-11', '2018-07-10'),
(4, 'Dean\'s Office', 'N/A', 'SEA', 'Enrollment Forms', 'Ramasoc, Jerick', 'Not given', '2018-01-15', '2018-07-10'),
(6, 'Sampaga, Justin Randal B.', '09353332492', 'BS Arch 3', 'Wallet', NULL, 'H705 (8:30 - 9:30 AM)', '2018-01-15', '2018-07-10'),
(10, 'Mira, Jonard John E.', '09078727144', 'BSCE-3', 'T-Square', NULL, 'H404', '2018-01-22', '2018-07-10'),
(11, 'Peralta, Jastine Kay N.', '09952931673', 'BEED SPED 3', 'Money (P1000)', NULL, 'near rotonda beside SLU Baguio', '2017-01-23', '2018-07-10'),
(14, 'Annie Jucar', '09088155941', 'Hospital', 'Pouch (gray)', NULL, 'N/A', '2018-01-26', '2018-07-10'),
(17, 'Bobby Estacio', 'N/A', 'Janitorial Department ', 'Samsung J2', NULL, 'N/A', '2018-01-31', '2018-07-10'),
(18, 'Audrey Cawis', '09359816886', 'BA Com 4', 'Samsung Phone battery + charger', NULL, 'P706', '2018-02-08', '2018-07-10'),
(19, 'Ma\'am Richel Lamadrid', 'N/A', 'SABM Faculty', 'Watch', NULL, 'S306', '2018-02-08', '2018-07-10'),
(20, 'Keith Russel E. Soriano', '09267136293', 'BSCE 5', 'Money (P1000)', NULL, 'In the front of the Administrative Office', '2018-02-15', '2018-07-10'),
(24, 'Vennard Cabading', '09985785981', 'BA Pol Sc 3', 'Black Umbrella', NULL, '5th floor lobby Perfecto (~3:30 PM)', '2018-03-26', '2018-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `lost_items`
--

CREATE TABLE `lost_items` (
  `record_id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `reported_name` varchar(45) NOT NULL,
  `cellphone_number` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `course_year_dept` varchar(45) NOT NULL,
  `loss_location` varchar(200) DEFAULT NULL,
  `loss_time` varchar(200) DEFAULT NULL,
  `date_lost` date NOT NULL,
  `date_issued` date NOT NULL,
  `attending_personnel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_items`
--

INSERT INTO `lost_items` (`record_id`, `item`, `reported_name`, `cellphone_number`, `type`, `course_year_dept`, `loss_location`, `loss_time`, `date_lost`, `date_issued`, `attending_personnel`) VALUES
(1, 'Bluetooth Earphones (Samsung Level Active)', 'Christopher Crisostomo', 'N/A', 'Owner', 'N/A', 'Main Campus, maybe Perfecto Building, Main Gate', 'Wednesday, January 31, 2018 @ ~6 pm - 8:30 pm', '2018-01-31', '2018-07-10', 'John Doe'),
(2, 'Gray pouch wallet w/ strap and gold white syringe keychain (includes ATM and flashdrive)', 'Abrigo, Diana Cleo A.', '09080844770', 'Owner', 'BMLS 3', 'Around Adenauer building/Otto Hahn building (2nd floor). ', 'February 07, 2018, round 5:30 PM', '2018-02-08', '2018-07-10', 'John Doe'),
(3, 'iPhone 5S Space Gray (w/ Rubber casing doodle design)', 'Parinas, John Ezro S.', '09275426753', 'Owner', 'N/A', 'A101/102 or Adenauer 1st Floor to Perfecto', 'February 12, 2017, 7:00 PM', '2018-02-13', '2018-07-10', 'John Doe'),
(4, 'Wallet (purple)', 'Alleah Gwen Monique B. Sacpa', '09125585019', 'Owner', 'BA Com 3 ', 'P407', 'After Class', '2018-04-30', '2018-07-11', 'Gracielle Yano');

-- --------------------------------------------------------

--
-- Table structure for table `retrieved_items`
--

CREATE TABLE `retrieved_items` (
  `retrieved_id` int(11) NOT NULL,
  `retrieved_by_name` varchar(45) NOT NULL,
  `add_cyear` varchar(45) NOT NULL,
  `item_status` varchar(45) NOT NULL,
  `missing_items` varchar(45) DEFAULT NULL,
  `date_claimed` varchar(45) NOT NULL,
  `loss_record_id` int(11) DEFAULT NULL,
  `found_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `found_items`
--
ALTER TABLE `found_items`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `lost_items`
--
ALTER TABLE `lost_items`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `retrieved_items`
--
ALTER TABLE `retrieved_items`
  ADD PRIMARY KEY (`retrieved_id`),
  ADD KEY `loss_id_idx` (`loss_record_id`),
  ADD KEY `found_id_idx` (`found_record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `found_items`
--
ALTER TABLE `found_items`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lost_items`
--
ALTER TABLE `lost_items`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `retrieved_items`
--
ALTER TABLE `retrieved_items`
  MODIFY `retrieved_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `retrieved_items`
--
ALTER TABLE `retrieved_items`
  ADD CONSTRAINT `found_id` FOREIGN KEY (`found_record_id`) REFERENCES `found_items` (`record_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `loss_id` FOREIGN KEY (`loss_record_id`) REFERENCES `lost_items` (`record_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
