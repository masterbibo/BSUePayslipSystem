-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 09:00 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsuepayslip`
--

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `id` int(10) NOT NULL,
  `deductionname` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `amount` decimal(20,0) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `modifieddate` datetime(6) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `departmentname` varchar(100) NOT NULL,
  `departmentdescription` varchar(250) DEFAULT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `modifieddate` datetime(6) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(10) NOT NULL,
  `departmentname` varchar(50) NOT NULL,
  `departmentdescription` varchar(250) DEFAULT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `modifieddate` datetime(6) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `roleid` int(10) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `departmentid` int(10) NOT NULL,
  `positionid` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contactnumber` varchar(30) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `modifieddate` datetime(6) DEFAULT NULL,
  `isactive` bit(10) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_deduction_config`
--

CREATE TABLE `user_deduction_config` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `deductionid` int(10) NOT NULL,
  `deductionname` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `amount` decimal(10,0) NOT NULL,
  `deductiondatestart` date NOT NULL,
  `deductiondateend` date NOT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `modifieddate` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) NOT NULL,
  `rolename` varchar(20) NOT NULL,
  `roledescription` int(250) DEFAULT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `modifiedby` varchar(50) DEFAULT NULL,
  `modifieddate` datetime(6) DEFAULT NULL,
  `isactive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_salary_config`
--

CREATE TABLE `user_salary_config` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `basicsalary` decimal(20,2) NOT NULL,
  `totalsalarydeduction` decimal(20,2) NOT NULL,
  `netsalary` decimal(20,2) NOT NULL,
  `salarycutoffstartdate` date NOT NULL,
  `salarycutoffenddate` date NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `createddate` datetime(6) NOT NULL,
  `verifiedby` varchar(50) DEFAULT NULL,
  `verifieddate` datetime(6) DEFAULT NULL,
  `releasedby` varchar(50) DEFAULT NULL,
  `releaseddate` datetime(6) DEFAULT NULL,
  `isverified` bit(1) NOT NULL DEFAULT b'0',
  `isreleased` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_deduction_config`
--
ALTER TABLE `user_deduction_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_salary_config`
--
ALTER TABLE `user_salary_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_deduction_config`
--
ALTER TABLE `user_deduction_config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_salary_config`
--
ALTER TABLE `user_salary_config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
