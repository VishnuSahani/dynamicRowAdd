-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 04:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpf`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrier_info`
--

CREATE TABLE `arrier_info` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `arrier_type` varchar(30) NOT NULL,
  `other_arrier` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arrier_info`
--

INSERT INTO `arrier_info` (`id`, `emp_id`, `amount`, `year`, `month`, `arrier_type`, `other_arrier`) VALUES
(1, 'TCS01', '100', '2002', 'April', 'DA Arrier', ''),
(2, 'TCS01', '900', '2002', 'May', 'Bonus', ''),
(3, 'TCS02', '0', '2002', 'May', 'Bonus', ''),
(4, 'TCS01', '700', '2002', 'June', 'Other', ''),
(5, 'TCS02', '0', '2002', 'June', 'Other', ''),
(6, 'TCS01', '300', '2002', 'July', 'ACP', ''),
(7, 'TCS02', '0', '2002', 'July', 'ACP', '');

-- --------------------------------------------------------

--
-- Table structure for table `challan_info`
--

CREATE TABLE `challan_info` (
  `id` int(11) NOT NULL,
  `year` varchar(33) NOT NULL,
  `month` varchar(33) NOT NULL,
  `challan_amount` varchar(33) NOT NULL,
  `challan_no` varchar(50) NOT NULL,
  `challan_date` date DEFAULT NULL,
  `rate` varchar(33) NOT NULL,
  `emp_id_list` varchar(1000) NOT NULL,
  `create_date_time` datetime NOT NULL,
  `update_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challan_info`
--

INSERT INTO `challan_info` (`id`, `year`, `month`, `challan_amount`, `challan_no`, `challan_date`, `rate`, `emp_id_list`, `create_date_time`, `update_date_time`) VALUES
(1, '2002', 'April', '3500', 'nill', '2022-08-10', '7.9', 'TCS01', '2022-07-31 20:00:47', '2022-08-20 15:42:12'),
(2, '2002', 'May', '7000', '123CHALL', '2022-08-18', '7.9', 'TCS01,TCS02', '2022-07-31 20:01:13', '2022-08-20 13:24:59'),
(3, '2002', 'June', '3500', '123s', NULL, '7.9', 'TCS01,TCS02', '2022-07-31 20:01:47', '2022-08-02 23:05:32'),
(4, '2002', 'July', '4000', '123asd', NULL, '7.8', 'TCS01,TCS02', '2022-07-31 20:02:09', '2022-08-02 23:05:43'),
(5, '2002', 'August', '4000', '1234s', NULL, '7.8', 'TCS01,TCS02', '2022-07-31 20:02:35', '2022-08-02 23:05:51'),
(6, '2002', 'September', '3500', '012w', NULL, '7.8', 'TCS01,TCS02', '2022-07-31 20:02:54', '2022-08-02 23:05:58'),
(7, '2002', 'October', '4000', 'lkj', NULL, '7.8', 'TCS01,TCS02', '2022-07-31 20:03:16', '2022-08-02 23:04:18'),
(8, '2002', 'November', '5000', 'asd321', NULL, '7.8', 'TCS01,TCS02', '2022-07-31 20:03:39', '2022-08-02 23:06:17'),
(9, '2002', 'December', '3500', 'jhuy', NULL, '7.8', 'TCS01,TCS02', '2022-07-31 20:04:02', '2022-08-02 23:06:38'),
(10, '2003', 'January', '3800', 'jhyt', NULL, '7.6', 'TCS01,TCS02', '2022-07-31 20:04:39', '2022-08-02 23:06:55'),
(11, '2003', 'February', '3500', 'chall_098', NULL, '7.6', 'TCS01,TCS02', '2022-07-31 20:04:53', '2022-08-02 23:07:15'),
(12, '2003', 'March', '13223', 'hjkuy', '2022-08-24', '7.6', 'TCS01,TCS02', '2022-07-31 20:05:15', '2022-08-20 18:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(33) NOT NULL,
  `employeeName` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `openingBalance` varchar(50) NOT NULL,
  `joiningDate` date NOT NULL,
  `create_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `emp_id`, `employeeName`, `designation`, `openingBalance`, `joiningDate`, `create_date_time`) VALUES
(1, 'TCS01', 'RAM', 'TEACHER', '166642', '2002-04-30', '2022-07-31 19:54:22'),
(2, 'TCS02', 'SHYAM', 'TEACHER', '0', '2002-05-09', '2022-07-31 19:59:55'),
(3, 'TCS03', 'SHYAM 2', 'teacher', '19999', '2019-05-13', '2022-08-14 15:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `gpf_cal_info`
--

CREATE TABLE `gpf_cal_info` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `gpf_year` varchar(20) NOT NULL,
  `total_sub` varchar(20) NOT NULL,
  `total_bonus` varchar(20) NOT NULL,
  `total_acp` varchar(20) NOT NULL,
  `total_other` varchar(20) NOT NULL,
  `total_arrier` varchar(20) NOT NULL,
  `total_deduction` varchar(20) NOT NULL,
  `previous_amount` varchar(20) NOT NULL,
  `total_amount` varchar(20) NOT NULL,
  `total_avg_rate` varchar(20) NOT NULL,
  `payable_amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpf_cal_info`
--

INSERT INTO `gpf_cal_info` (`id`, `emp_id`, `gpf_year`, `total_sub`, `total_bonus`, `total_acp`, `total_other`, `total_arrier`, `total_deduction`, `previous_amount`, `total_amount`, `total_avg_rate`, `payable_amount`) VALUES
(1, 'TCS01', '2002-2003', '55223', '900', '300', '700', '100', '0', '166642', '223865', '15158', '239023'),
(2, 'TCS02', '2002-2003', '3300', '1100', '', '', '0', '0', '0', '4400', '177', '4577');

-- --------------------------------------------------------

--
-- Table structure for table `gpf_info`
--

CREATE TABLE `gpf_info` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(33) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `rate_per` varchar(11) NOT NULL,
  `subscription` varchar(11) NOT NULL,
  `arrier` varchar(11) NOT NULL,
  `bonus` varchar(11) NOT NULL,
  `acp` varchar(20) NOT NULL,
  `other` varchar(20) NOT NULL,
  `deduction` varchar(11) NOT NULL,
  `monthly_total` varchar(11) NOT NULL,
  `previous_value` varchar(11) NOT NULL,
  `capital_total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpf_info`
--

INSERT INTO `gpf_info` (`id`, `emp_id`, `month`, `year`, `rate_per`, `subscription`, `arrier`, `bonus`, `acp`, `other`, `deduction`, `monthly_total`, `previous_value`, `capital_total`) VALUES
(1, 'TCS01', 'April', '2002', '7.9', '3500', '100', '0', '0', '0', '0', '3600', '166642', '170242'),
(2, 'TCS01', 'May', '2002', '7.9', '7000', '0', '900', '0', '0', '0', '7900', '170242', '178142'),
(3, 'TCS01', 'June', '2002', '7.9', '3500', '0', '0', '0', '700', '0', '4200', '178142', '182342'),
(4, 'TCS01', 'July', '2002', '7.8', '3500', '0', '0', '300', '0', '0', '3800', '182342', '186142'),
(5, 'TCS01', 'August', '2002', '7.8', '3500', '0', '0', '0', '0', '0', '3500', '186142', '189642'),
(6, 'TCS01', 'September', '2002', '7.8', '3500', '0', '0', '0', '0', '0', '3500', '189642', '193142'),
(7, 'TCS01', 'October', '2002', '7.8', '3500', '0', '0', '0', '0', '0', '3500', '193142', '196642'),
(8, 'TCS01', 'November', '2002', '7.8', '3500', '0', '0', '0', '0', '0', '3500', '196642', '200142'),
(9, 'TCS01', 'December', '2002', '7.8', '3500', '0', '0', '0', '0', '0', '3500', '200142', '203642'),
(10, 'TCS01', 'January', '2003', '7.6', '3500', '0', '0', '0', '0', '0', '3500', '203642', '207142'),
(11, 'TCS01', 'February', '2003', '7.6', '3500', '0', '0', '0', '0', '0', '3500', '207142', '210642'),
(12, 'TCS01', 'March', '2003', '7.6', '13223', '0', '0', '0', '0', '0', '13223', '210642', '223865'),
(13, 'TCS02', 'April', '2002', '7.9', '0', '0', '100', '', '', '0', '100', '0', '100'),
(14, 'TCS02', 'May', '2002', '7.9', '0', '0', '100', '', '', '0', '100', '100', '200'),
(15, 'TCS02', 'June', '2002', '7.9', '0', '0', '100', '', '', '0', '100', '200', '300'),
(16, 'TCS02', 'July', '2002', '7.8', '500', '0', '100', '', '', '0', '600', '300', '900'),
(17, 'TCS02', 'August', '2002', '7.8', '500', '0', '100', '', '', '0', '600', '900', '1500'),
(18, 'TCS02', 'September', '2002', '7.8', '0', '0', '100', '', '', '0', '100', '1500', '1600'),
(19, 'TCS02', 'October', '2002', '7.8', '500', '0', '100', '', '', '0', '600', '1600', '2200'),
(20, 'TCS02', 'November', '2002', '7.8', '1500', '0', '100', '', '', '0', '1600', '2200', '3800'),
(21, 'TCS02', 'December', '2002', '7.8', '0', '0', '100', '', '', '0', '100', '3800', '3900'),
(22, 'TCS02', 'January', '2003', '7.6', '300', '0', '100', '', '', '0', '400', '3900', '4300'),
(23, 'TCS02', 'February', '2003', '7.6', '0', '0', '100', '', '', '0', '100', '4300', '4400'),
(24, 'TCS02', 'March', '2003', '7.6', '0', '0', '0', '', '', '0', '0', '4400', '4400');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_info`
--

CREATE TABLE `subscription_info` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(33) NOT NULL,
  `subscription` varchar(33) NOT NULL,
  `year` varchar(33) NOT NULL,
  `month` varchar(33) NOT NULL,
  `rate` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription_info`
--

INSERT INTO `subscription_info` (`id`, `emp_id`, `subscription`, `year`, `month`, `rate`) VALUES
(1, 'TCS01', '3500', '2002', 'April', '7.9'),
(2, 'TCS02', '0', '2002', 'April', '7.9'),
(3, 'TCS01', '7000', '2002', 'May', '7.9'),
(4, 'TCS02', '0', '2002', 'May', '7.9'),
(5, 'TCS01', '3500', '2002', 'June', '7.9'),
(6, 'TCS02', '0', '2002', 'June', '7.9'),
(7, 'TCS01', '3500', '2002', 'July', '7.8'),
(8, 'TCS02', '500', '2002', 'July', '7.8'),
(9, 'TCS01', '3500', '2002', 'August', '7.8'),
(10, 'TCS02', '500', '2002', 'August', '7.8'),
(11, 'TCS01', '3500', '2002', 'September', '7.8'),
(12, 'TCS02', '0', '2002', 'September', '7.8'),
(13, 'TCS01', '3500', '2002', 'October', '7.8'),
(14, 'TCS02', '500', '2002', 'October', '7.8'),
(15, 'TCS01', '3500', '2002', 'November', '7.8'),
(16, 'TCS02', '1500', '2002', 'November', '7.8'),
(17, 'TCS01', '3500', '2002', 'December', '7.8'),
(18, 'TCS02', '0', '2002', 'December', '7.8'),
(19, 'TCS01', '3500', '2003', 'January', '7.6'),
(20, 'TCS02', '300', '2003', 'January', '7.6'),
(21, 'TCS01', '3500', '2003', 'February', '7.6'),
(22, 'TCS02', '0', '2003', 'February', '7.6'),
(23, 'TCS01', '13223', '2003', 'March', '7.6'),
(24, 'TCS02', '0', '2003', 'March', '7.6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrier_info`
--
ALTER TABLE `arrier_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challan_info`
--
ALTER TABLE `challan_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpf_cal_info`
--
ALTER TABLE `gpf_cal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpf_info`
--
ALTER TABLE `gpf_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_info`
--
ALTER TABLE `subscription_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrier_info`
--
ALTER TABLE `arrier_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `challan_info`
--
ALTER TABLE `challan_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gpf_cal_info`
--
ALTER TABLE `gpf_cal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gpf_info`
--
ALTER TABLE `gpf_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subscription_info`
--
ALTER TABLE `subscription_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
