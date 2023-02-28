-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 11:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcharityfin6`
--

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `id` int(11) NOT NULL,
  `caseid` varchar(3) NOT NULL,
  `employment` varchar(3) NOT NULL,
  `NoofMales` varchar(3) NOT NULL,
  `NoofFemales` varchar(3) NOT NULL,
  `NoofDependents` varchar(3) NOT NULL,
  `NoofPersonEarning` varchar(3) NOT NULL,
  `FamilyIncome` varchar(3) NOT NULL,
  `MonthlyRation` varchar(3) NOT NULL,
  `MonthlyHealthCare` varchar(3) NOT NULL,
  `MonthlyEducation` varchar(3) NOT NULL,
  `OtherExpenses` varchar(3) NOT NULL,
  `TotalExpenses` varchar(3) NOT NULL,
  `MonthlySirplusdeficit` varchar(3) NOT NULL,
  `CashBank` varchar(3) NOT NULL,
  `GoldSilver` varchar(3) NOT NULL,
  `ProvisionalFund` varchar(3) NOT NULL,
  `PaidCommittee` varchar(3) NOT NULL,
  `SecurityDeposit` varchar(3) NOT NULL,
  `LoanGiven` varchar(3) NOT NULL,
  `OtherCurrency` varchar(3) NOT NULL,
  `TradeAssets` varchar(3) NOT NULL,
  `UnnecessaryFlats` varchar(3) NOT NULL,
  `ExtraMobilePhones` varchar(3) NOT NULL,
  `ExtraVehicles` varchar(3) NOT NULL,
  `ExtraLivestocks` varchar(3) NOT NULL,
  `TotalCountableAssets` varchar(3) NOT NULL,
  `RentPayable` varchar(3) NOT NULL,
  `SecurityDepositPayable` varchar(3) NOT NULL,
  `PayableAmountCommittee` varchar(3) NOT NULL,
  `UtilityBillsPayable` varchar(3) NOT NULL,
  `LoanPayable` varchar(3) NOT NULL,
  `TtlDductLiabilities` varchar(3) NOT NULL,
  `TotalDeductableLiabiliities` varchar(3) NOT NULL,
  `NetCoutableAssets` varchar(3) NOT NULL,
  `CurrentZakatEvaluation` varchar(3) NOT NULL,
  `Muslim` varchar(3) NOT NULL,
  `Syed` varchar(3) NOT NULL,
  `AgaKani` varchar(3) NOT NULL,
  `ZakatEvaluation` varchar(3) NOT NULL,
  `AmountApplied` varchar(3) NOT NULL,
  `FOAmount` bigint(20) NOT NULL,
  `FORemarks2` varchar(200) NOT NULL,
  `ExecutiveRelationship` varchar(3) NOT NULL,
  `ReferenceName` varchar(3) NOT NULL,
  `RefferedBy` varchar(3) NOT NULL,
  `Intension` varchar(3) NOT NULL,
  `Experience` varchar(3) NOT NULL,
  `Capability` varchar(3) NOT NULL,
  `Training` varchar(3) NOT NULL,
  `OtherRemarks` varchar(3) NOT NULL,
  `CaseType` varchar(3) NOT NULL,
  `CaseDescription` varchar(3) NOT NULL,
  `Name` varchar(3) NOT NULL,
  `FathersName` varchar(3) NOT NULL,
  `Cnic` varchar(3) NOT NULL,
  `Contact` varchar(3) NOT NULL,
  `Email` varchar(3) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `PanelRemarks` varchar(3) NOT NULL,
  `PanelAmount` varchar(3) NOT NULL,
  `NetSalary` varchar(3) NOT NULL,
  `Address` varchar(3) NOT NULL,
  `Formid` varchar(3) NOT NULL,
  `FORemarks` varchar(3) NOT NULL,
  `NOB` varchar(3) NOT NULL,
  `NOBDesc` varchar(3) NOT NULL,
  `City` varchar(3) NOT NULL,
  `DOC` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checking`
--

INSERT INTO `checking` (`id`, `caseid`, `employment`, `NoofMales`, `NoofFemales`, `NoofDependents`, `NoofPersonEarning`, `FamilyIncome`, `MonthlyRation`, `MonthlyHealthCare`, `MonthlyEducation`, `OtherExpenses`, `TotalExpenses`, `MonthlySirplusdeficit`, `CashBank`, `GoldSilver`, `ProvisionalFund`, `PaidCommittee`, `SecurityDeposit`, `LoanGiven`, `OtherCurrency`, `TradeAssets`, `UnnecessaryFlats`, `ExtraMobilePhones`, `ExtraVehicles`, `ExtraLivestocks`, `TotalCountableAssets`, `RentPayable`, `SecurityDepositPayable`, `PayableAmountCommittee`, `UtilityBillsPayable`, `LoanPayable`, `TtlDductLiabilities`, `TotalDeductableLiabiliities`, `NetCoutableAssets`, `CurrentZakatEvaluation`, `Muslim`, `Syed`, `AgaKani`, `ZakatEvaluation`, `AmountApplied`, `FOAmount`, `FORemarks2`, `ExecutiveRelationship`, `ReferenceName`, `RefferedBy`, `Intension`, `Experience`, `Capability`, `Training`, `OtherRemarks`, `CaseType`, `CaseDescription`, `Name`, `FathersName`, `Cnic`, `Contact`, `Email`, `Status`, `PanelRemarks`, `PanelAmount`, `NetSalary`, `Address`, `Formid`, `FORemarks`, `NOB`, `NOBDesc`, `City`, `DOC`) VALUES
(1, '1', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', 60000, 'This is valid CAse', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'new', '', '', 'No', 'Yes', '', '', 'No', 'Yes', 'Yes', '2023-01-03 07:31:58'),
(2, '1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 66, '66', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Validated', '', '', 'No', 'No', '', '', 'No', 'No', 'No', '2023-01-03 07:17:22'),
(3, '1', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 0, '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Validated', '', '', 'No', 'No', '', '', 'No', 'No', 'No', '2023-01-03 07:17:42'),
(4, '1', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 0, '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Validated', '', '', 'No', 'No', '', '', 'No', 'No', 'No', '2023-01-03 07:17:54'),
(5, '1', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', 30000, 'Completed', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Validated', '', '', 'Yes', 'Yes', '', '', 'Yes', 'Yes', 'Yes', '2023-01-05 07:38:08'),
(6, '2', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 20000, 'DONE', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Validated', '', '', 'No', 'No', '', '', 'No', 'No', 'No', '2023-01-05 07:45:07'),
(7, '1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 0, '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Validated', '', '', 'No', 'No', '', '', 'No', 'No', 'No', '2023-01-05 12:12:23'),
(8, '4', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', '', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', '', 50000, 'I checked this case', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Validated', '', '', 'No', 'Yes', '', '', 'No', 'Yes', 'No', '2023-01-06 05:55:46'),
(9, '2', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 5000, 'testing', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Validated', '', '', 'No', 'No', '', '', 'No', 'No', 'No', '2023-01-16 10:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblcase`
--

CREATE TABLE `tblcase` (
  `CaseID` int(11) NOT NULL,
  `DOC` timestamp NULL DEFAULT NULL,
  `casetype` varchar(20) DEFAULT NULL,
  `caseDescription` varchar(250) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Fathersname` varchar(100) DEFAULT NULL,
  `cnic` varchar(100) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `panelremarks` longtext DEFAULT NULL,
  `panelamount` int(11) DEFAULT NULL,
  `netsalary` varchar(10) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `formid` int(11) DEFAULT NULL,
  `FOremarks` longtext DEFAULT NULL,
  `FOamount` int(11) DEFAULT NULL,
  `NOB` varchar(30) DEFAULT NULL,
  `NOBdesc` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `otp` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcase`
--

INSERT INTO `tblcase` (`CaseID`, `DOC`, `casetype`, `caseDescription`, `Name`, `Fathersname`, `cnic`, `contact`, `email`, `status`, `panelremarks`, `panelamount`, `netsalary`, `address`, `formid`, `FOremarks`, `FOamount`, `NOB`, `NOBdesc`, `city`, `otp`) VALUES
(19, '2022-10-25 00:16:06', 'Business', 'I just want some investor.', 'Salman agha', 'Agha Asfandyar Khan', '4220114810127', '03347360763', 'aghasalmankhan14@gmail.com', 'Panel', 'Approved from CEO', 50000, '50000', 'Banglow b-122, Architect society, Gulistan e johar block 8 karachi', 2, 'This Case is completely genuine, my advice is to give him the complete money', 50000, 'Others', 'I want to start an tyre workshop', 'Karachi', '4488'),
(20, '2022-10-27 01:22:51', 'Business', 'This is case description', 'Salman agha', 'Agha Asfandyar Khan', '4220114810126', '03347360763', 'aghasalmankhan14@gmail.com', 'Closed', 'This is final amount', 300000, '50000', 'This is Address Field', 3, 'Thsi si field officer', 100000, 'Others', 'I want to describe this other business', 'Karachi', '7107'),
(21, '2022-11-11 04:54:42', 'Business', 'asd', 'Salman', 'Agha Asfandyar Khan', '4220114810177', '03347360763', 'rabeet@gmail.com', 'Reimbursed', 'Done', 30000, '500000', 'Rabia City', 4, 'this case is valid', 20000, 'Others', 'asd', 'Karachi', '4896'),
(22, '2022-12-16 07:23:55', 'Business', 'I want to apply for charity xyz desc', 'Nasir Ahmed', 'Ahmed', '4220114812566', '03347360763', 'nasir@gmail.com', 'Approved', 'We approve this case', 50000, '20000', 'Malir Cantt', 5, 'This case is eligible', 50000, 'Others', 'This is dummy business', 'Karachi', NULL),
(23, '2022-12-20 00:47:17', 'Business', 'cssawqdxca', 'Rabeet Siddiqui', 'Rashid Siddiqui', '2312736187871', '03162278487', 'rabeet.siddiqui22@gmail.com', 'New', NULL, NULL, '200102', 'adsghjcsbakbs', NULL, NULL, NULL, 'Business2', '', 'Karachi', NULL),
(24, '2022-12-22 04:07:01', 'Business', 'ascafscacsa', 'Rabeet Siddiqui', 'Rashid Siddiqui', '4585455545416', '03471214606', 'rabeet@gmail.com', 'New', NULL, NULL, '1232', 'fasfczcsa', NULL, NULL, NULL, 'Business1', '', 'Karachi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfinance`
--

CREATE TABLE `tblfinance` (
  `id` int(11) NOT NULL,
  `ChequeNumber` varchar(50) DEFAULT NULL,
  `ChequeAmount` varchar(10) DEFAULT NULL,
  `ChequeRecName` varchar(100) DEFAULT NULL,
  `ChequeRecCnic` varchar(14) DEFAULT NULL,
  `CaseId` int(11) DEFAULT NULL,
  `StaffID` int(11) DEFAULT NULL,
  `DisbursedDate` timestamp NULL DEFAULT NULL,
  `bankname` varchar(100) DEFAULT NULL,
  `PaymentType` varchar(10) DEFAULT NULL,
  `CashAmount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfinance`
--

INSERT INTO `tblfinance` (`id`, `ChequeNumber`, `ChequeAmount`, `ChequeRecName`, `ChequeRecCnic`, `CaseId`, `StaffID`, `DisbursedDate`, `bankname`, `PaymentType`, `CashAmount`) VALUES
(8, '', '', '', '', 19, 1, '2022-10-25 00:28:47', '', 'Cash', 50000),
(9, '1212121212', '300000', 'Salman', '4220114810127', 20, 1, '2022-10-27 01:31:06', 'Bank Al Habib', 'Cheque', 0),
(10, '123', '12', 'sadsa', '4220114810127', 21, 1, '2022-11-11 04:57:31', 'Faysal Bank', 'Cheque', 0),
(11, '5555', '5', '555', '4220114810127', 1, 1, '2022-12-31 06:15:49', 'Bank Al Habib', 'Cheque', 0),
(12, '', '', '', '', 1, 1, '2022-12-31 06:16:56', '', 'Cash', 6),
(13, '', '', '', '', 1, 1, '2022-12-31 06:17:25', '', 'Cash', 6),
(14, '4524554551', '20000', 'Rabeet Siddiqui', '4524528545285', 2, 1, '2023-01-05 07:48:12', 'Bank Al Habib', 'Cheque', 0),
(15, '', '', '', '', 4, 1, '2023-01-06 05:56:53', 'Bank Al Habib', 'Cash', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblmainform`
--

CREATE TABLE `tblmainform` (
  `caseid` int(11) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `NoofMales` int(11) DEFAULT NULL,
  `NoofFemales` int(11) DEFAULT NULL,
  `NoofDependents` int(11) DEFAULT NULL,
  `NoofPersonEarning` int(11) DEFAULT NULL,
  `FamilyIncome` int(11) DEFAULT NULL,
  `MonthlyRation` int(11) DEFAULT NULL,
  `MonthlyHealthCare` int(11) DEFAULT NULL,
  `MonthlyEducation` int(11) DEFAULT NULL,
  `OtherExpenses` int(11) DEFAULT NULL,
  `TotalExpenses` int(11) DEFAULT NULL,
  `MonthlySirplusdeficit` int(11) DEFAULT NULL,
  `CashBank` int(11) DEFAULT NULL,
  `GoldSilver` int(11) DEFAULT NULL,
  `ProvisionalFund` int(11) DEFAULT NULL,
  `PaidCommittee` int(11) DEFAULT NULL,
  `SecurityDeposit` int(11) DEFAULT NULL,
  `LoanGiven` int(11) DEFAULT NULL,
  `OtherCurrency` int(11) DEFAULT NULL,
  `TradeAssets` int(11) DEFAULT NULL,
  `UnnecessaryFlats` int(11) DEFAULT NULL,
  `ExtraMobilePhones` int(11) DEFAULT NULL,
  `ExtraVehicles` int(11) DEFAULT NULL,
  `ExtraLivestocks` int(11) DEFAULT NULL,
  `TotalCountableAssets` int(11) DEFAULT NULL,
  `RentPayable` int(11) DEFAULT NULL,
  `SecurityDepositPayable` int(11) DEFAULT NULL,
  `PayableAmountCommittee` int(11) DEFAULT NULL,
  `UtilityBillsPayable` int(11) DEFAULT NULL,
  `LoanPayable` int(11) DEFAULT NULL,
  `TtlDductLiabilities` int(11) DEFAULT NULL,
  `TotalDeductableLiabiliities` int(11) DEFAULT NULL,
  `NetCoutableAssets` int(11) DEFAULT NULL,
  `CurrentZakatEvaluation` int(11) DEFAULT NULL,
  `Muslim` varchar(3) DEFAULT NULL,
  `Syed` varchar(3) DEFAULT NULL,
  `AgaKani` varchar(10) DEFAULT NULL,
  `ZakatEvaluation` varchar(10) DEFAULT NULL,
  `AmountApplied` int(11) DEFAULT NULL,
  `FOAmount` int(11) DEFAULT NULL,
  `FORemarks2` longtext DEFAULT NULL,
  `ExecutiveRelationship` varchar(3) DEFAULT NULL,
  `ReferenceName` varchar(50) DEFAULT NULL,
  `RefferedBy` varchar(50) DEFAULT NULL,
  `Intension` varchar(50) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `Capability` varchar(50) DEFAULT NULL,
  `Training` varchar(50) DEFAULT NULL,
  `OtherRemarks` longtext DEFAULT NULL,
  `DOC` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `casetype` varchar(20) NOT NULL,
  `caseDescription` varchar(250) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Fathersname` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `panelremarks` longtext NOT NULL,
  `panelamount` int(11) NOT NULL,
  `netsalary` varchar(10) NOT NULL,
  `address` longtext NOT NULL,
  `formid` int(11) NOT NULL,
  `FOremarks` longtext NOT NULL,
  `NOB` varchar(30) NOT NULL,
  `NOBdesc` longtext NOT NULL,
  `city` varchar(50) NOT NULL,
  `otp` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmainform`
--

INSERT INTO `tblmainform` (`caseid`, `employment`, `NoofMales`, `NoofFemales`, `NoofDependents`, `NoofPersonEarning`, `FamilyIncome`, `MonthlyRation`, `MonthlyHealthCare`, `MonthlyEducation`, `OtherExpenses`, `TotalExpenses`, `MonthlySirplusdeficit`, `CashBank`, `GoldSilver`, `ProvisionalFund`, `PaidCommittee`, `SecurityDeposit`, `LoanGiven`, `OtherCurrency`, `TradeAssets`, `UnnecessaryFlats`, `ExtraMobilePhones`, `ExtraVehicles`, `ExtraLivestocks`, `TotalCountableAssets`, `RentPayable`, `SecurityDepositPayable`, `PayableAmountCommittee`, `UtilityBillsPayable`, `LoanPayable`, `TtlDductLiabilities`, `TotalDeductableLiabiliities`, `NetCoutableAssets`, `CurrentZakatEvaluation`, `Muslim`, `Syed`, `AgaKani`, `ZakatEvaluation`, `AmountApplied`, `FOAmount`, `FORemarks2`, `ExecutiveRelationship`, `ReferenceName`, `RefferedBy`, `Intension`, `Experience`, `Capability`, `Training`, `OtherRemarks`, `DOC`, `casetype`, `caseDescription`, `Name`, `Fathersname`, `cnic`, `contact`, `email`, `status`, `panelremarks`, `panelamount`, `netsalary`, `address`, `formid`, `FOremarks`, `NOB`, `NOBdesc`, `city`, `otp`) VALUES
(1, 'UnEmployee', 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 12, 1, 1, 1, 1, 1, 5, 5, 1, 1, 'Yes', 'No', 'No', 'Eligible', 0, 99, '55', 'Yes', 'Sir Rabeet', 'Sir Rabeet', 'Will', 'Intermediate', 'Expert', 'Training', 'I need training too', '2023-01-05 12:12:23', 'Charity', 'I want to start business', 'Salman Agha', 'Agha Asfandyar Khan', '4220114810127', '03347360763', 'aghasalmankhan95@gmail.com', 'Panel', 'Done', 20000, '500000', 'Karachi', 0, '55', 'Others', 'Digital Agency', 'Karachi', ''),
(2, 'Employee', 1, 4, 4, 1, 300000, 10000, 5000, 10000, 45000, 70000, -230000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Yes', 'Yes', 'No', 'Not Eligib', 5000, 5000, 'testing', 'Yes', 'Salman Agha', 'Salman Agha', 'will', 'Expert', 'Beginner', 'Want to Train me', 'Good', '2023-01-16 10:14:44', 'Charity', 'I want to startup ', 'Rabeet Siddiqui', 'Rashid Siddiqui', '4585455545416', '03162278487', 'rabeet.siddiqui22@gmail.com', 'Panel', 'Done', 20000, '20000', 'H#222 Orangi Town Karachi', 0, '', 'Business1', '', 'Karachi', ''),
(3, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 12, 1, 1, 1, 1, 1, 5, 5, 5, 5, 'Yes', 'No', 'No', 'Eligible', 0, 0, '', 'Yes', 'Rabeet', 'Rabeet', 'Will', 'Expert', 'Expert', 'Training', 'Other Remarks', '2023-01-06 05:53:26', 'Charity', 'This is case Desciprtion', 'Salman Agha', 'Agha Asfandyar Khan', '4220114810127', '03347360763', 'aghasalmankhan95@gmail.com', 'New', '', 0, '500000', 'Johar', 0, '', 'Others', 'Testing', 'Karachi', ''),
(4, 'Employee', 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 12, 1, 1, 1, 1, 1, 5, 5, 5, 5, 'Yes', 'No', 'No', 'Eligible', 50000, 0, '', 'Yes', 'Rabeet', 'Rabeet', 'Will', 'Expert', 'Expert', 'Training', 'Other Remarks', '2023-01-06 05:56:53', 'Charity', 'This is case Desciprtion', 'Salman Agha', 'Agha Asfandyar Khan', '4220114810127', '03347360763', 'aghasalmankhan95@gmail.com', 'Reimbursed', 'This is panel remarks', 66, '500000', 'Johar', 0, '', 'Others', 'Testing', 'Karachi', ''),
(5, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 12, 1, 1, 1, 1, 1, 5, 5, 5, 5, 'Yes', 'No', 'No', 'Eligible', 0, 0, '', 'Yes', 'Rabeet', 'Rabeet', 'Will', 'Expert', 'Expert', 'Training', 'This is other veryfying remarks', '2023-01-06 05:59:25', 'Zakat', 'This is case desc', 'Saad', 'Agha', '4220114810127', '03347360763', 'syedmuhammadsaad@live.com', 'New', '', 0, '500000', 'Johar', 0, '', '', '', 'Karachi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `staffid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`staffid`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'Salman Agha', 'aghasalmankhan95@gmail.com', 'agha', 'Field Officer', 'Active'),
(2, 'Panel', 'panel@gmail.com', 'agha', 'Panel', 'Active'),
(3, 'Finance', 'Finance@gmail.com', 'agha', 'Finance', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcase`
--
ALTER TABLE `tblcase`
  ADD PRIMARY KEY (`CaseID`);

--
-- Indexes for table `tblfinance`
--
ALTER TABLE `tblfinance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmainform`
--
ALTER TABLE `tblmainform`
  ADD PRIMARY KEY (`caseid`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checking`
--
ALTER TABLE `checking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcase`
--
ALTER TABLE `tblcase`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblfinance`
--
ALTER TABLE `tblfinance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblmainform`
--
ALTER TABLE `tblmainform`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
