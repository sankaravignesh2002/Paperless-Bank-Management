-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 04:11 PM
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
-- Database: `paperless_bank_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Name` varchar(30) NOT NULL,
  `Branch Name` varchar(30) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `IFSC` varchar(10) NOT NULL,
  `Acc_number` bigint(10) NOT NULL,
  `PAN Number` varchar(10) NOT NULL,
  `balance` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Name`, `Branch Name`, `Phone`, `Address`, `IFSC`, `Acc_number`, `PAN Number`, `balance`, `date`) VALUES
('', '', 0, '', '', 1234567, '', 0, '2022-09-04'),
('rajesh', 'Madurai', 6345521009, 'Rakesh palace,Munichalai,Madurai-16.', 'UBIN0098', 2078100000, 'UBIN0098', 278, '2022-09-04'),
('Saravana Kumar', 'Madurai', 9345539151, 'Venkatachalpuram, T.kallupatti, Virudhunagar dt.', 'UBIN0098', 2078220782, 'UBX290124', 987, '2022-09-04'),
('Ramalingam', 'Madurai', 123, 'madurai keelavasal', 'UBIN0093', 2078728111, 'UBIX88900', 200, '2022-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `Interest_Rate` text NOT NULL,
  `Loan_Amount` text NOT NULL,
  `Repayment` text NOT NULL,
  `Collateral` text NOT NULL,
  `loan_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`Interest_Rate`, `Loan_Amount`, `Repayment`, `Collateral`, `loan_name`) VALUES
('7', 'For 1st year – Based on cultivation cost, farm maintenance expenses, and post-harvest expenses After that, 5-year loan is sanctioned based on the scale of finance', 'Fixed, based on the harvesting and marketing period of crops', 'For KCC limit of up to Rs.1 lakh – Nil\r\nSanctioned KCC limit is considered when fixing collateral requirement', 'AGRICULTURE'),
('Up to Rs.3 lakh – 7% p.a. More than Rs.3 lakh – 9.95% p.a.', 'As per the Loan To Value Ratio fixed by the bank', 'For Demand Loan – 12 months after loan disbursal For Overdraft/Cash Credit – Limit is reviewed annually and is valid for 3 years', 'Pledge of gold ornaments', 'GOLD'),
('8.05% p.a. – 11.85% p.a.', 'Based on eligibility\r\n\r\n', '12 years after loan disbursal', 'Nil', 'HOUSE'),
('7.00% p.a. onwards', 'Corresponding to the vehicle cost', '1 year to 8 years', 'Nil', 'VEHICLE'),
('9.60% p.a. onwards', 'Up to Rs.20 lakh', 'up to 7 years', 'Nil', 'PERSONAL'),
('7.95', 'Corresponding to the Fee', 'upto 7 years', 'Nil', 'EDUCATION');

-- --------------------------------------------------------

--
-- Table structure for table `locker`
--

CREATE TABLE `locker` (
  `size` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `charge` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locker`
--

INSERT INTO `locker` (`size`, `type`, `charge`) VALUES
('Size A:125 x 175 x 4', 'SMALL ', 1500),
('Size:C:125X352X492 ', 'MEDIUM', 3000),
('Size:F:278X352X492 ', 'LARGE', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `loan_id` bigint(20) NOT NULL,
  `cust_id` bigint(20) NOT NULL,
  `amt` float NOT NULL,
  `mail` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `mat_date` date NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`loan_id`, `cust_id`, `amt`, `mail`, `type`, `mat_date`, `Name`) VALUES
(20857575, 1000, 40000, 'saravanakumart@student.tce.edu', 'AGRI', '2022-11-01', 'Saravana Kumar T'),
(20857576, 1001, 700000, 'rakeshs@student.tce.edu', 'PERSONAL', '2022-11-01', 'Rakesh S'),
(20857577, 1003, 100000, 'sankaravignesh@student.tce.edu', 'EDUCATION', '2022-11-01', 'Sankara Vignesh S');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `cust_id` int(11) NOT NULL,
  `item` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`cust_id`, `item`) VALUES
(1001, 'ATM CARD'),
(1002, 'CHEQUE BOOK'),
(1006, 'CHEQUE BOOK'),
(1009, 'CHEQUE BOOK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Acc_number`,`PAN Number`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
