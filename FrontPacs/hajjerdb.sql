-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 01:36 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hajjerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `haijer`
--

CREATE TABLE `haijer` (
  `Name` varchar(255) NOT NULL,
  `RFID` varchar(255) NOT NULL,
  `Balance` float NOT NULL,
  `HaijerID` int(11) NOT NULL,
  `Haijer_Deps` int(11) DEFAULT NULL,
  `Nnationality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `haijer`
--

INSERT INTO `haijer` (`Name`, `RFID`, `Balance`, `HaijerID`, `Haijer_Deps`, `Nnationality`) VALUES
('Kareem Salah', '6156161', 4300, 55479255, NULL, 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `regiment`
--

CREATE TABLE `regiment` (
  `Reg_Num` int(11) NOT NULL,
  `Reg_Status` int(11) NOT NULL,
  `Last_Gate_Entered` int(11) NOT NULL,
  `Date_Latest_Entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `POSID` varchar(255) NOT NULL,
  `BanckAccount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TransactionID` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `StoreID` int(11) NOT NULL,
  `HajjerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haijer`
--
ALTER TABLE `haijer`
  ADD PRIMARY KEY (`HaijerID`),
  ADD KEY `haijer_ibfk_1` (`Haijer_Deps`);

--
-- Indexes for table `regiment`
--
ALTER TABLE `regiment`
  ADD PRIMARY KEY (`Reg_Num`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `StoreID` (`StoreID`),
  ADD KEY `HajjerID` (`HajjerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `haijer`
--
ALTER TABLE `haijer`
  MODIFY `HaijerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regiment`
--
ALTER TABLE `regiment`
  MODIFY `Reg_Num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `haijer`
--
ALTER TABLE `haijer`
  ADD CONSTRAINT `haijer_ibfk_1` FOREIGN KEY (`Haijer_Deps`) REFERENCES `haijer` (`HaijerID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`StoreID`) REFERENCES `store` (`ID`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`HajjerID`) REFERENCES `haijer` (`HaijerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
