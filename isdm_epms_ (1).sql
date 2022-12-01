-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2021 at 06:03 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isdm(epms)`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
CREATE TABLE IF NOT EXISTS `applicant` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_FName` varchar(30) NOT NULL,
  `user_LName` varchar(30) NOT NULL,
  `user_Add` varchar(30) NOT NULL,
  `user_Mail` varchar(30) NOT NULL,
  `user_DoB` varchar(12) NOT NULL,
  `user_Pno` int(10) NOT NULL,
  `user_Pwd` varchar(10) NOT NULL,
  `user_Experience` varchar(10) NOT NULL,
  `user_Description` varchar(255) NOT NULL,
  `user_NoEvents` int(11) NOT NULL,
  `user_Model` varchar(15) NOT NULL,
  `user_Arial` varchar(20) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`user_ID`, `user_FName`, `user_LName`, `user_Add`, `user_Mail`, `user_DoB`, `user_Pno`, `user_Pwd`, `user_Experience`, `user_Description`, `user_NoEvents`, `user_Model`, `user_Arial`) VALUES
(1, 'L', 'Kahandagamage', '113/A Muththetuwa Road', 'hello@gmail.com', '2021-10-13', 776794657, '1234', 'Portrait', 'hewqdwd', 100, 'hello', '10');

-- --------------------------------------------------------

--
-- Table structure for table `credentials_customer`
--

DROP TABLE IF EXISTS `credentials_customer`;
CREATE TABLE IF NOT EXISTS `credentials_customer` (
  `cust_ID` char(6) NOT NULL,
  `cust_mail` varchar(35) DEFAULT NULL,
  `cust_pass` char(50) DEFAULT NULL,
  PRIMARY KEY (`cust_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials_customer`
--

INSERT INTO `credentials_customer` (`cust_ID`, `cust_mail`, `cust_pass`) VALUES
('C11111', 'dimuthu@gmail.com', '0413@D'),
('C11112', 'nalin@gmail.com', '1345@N'),
('C11113', 'januka@gmail.com', '1657@J'),
('C11114', 'dilki@gmail.com', '2456@D'),
('C11115', 'vishwa@gmail.com', '0210@V'),
('C11144', 'test02@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('C11165', 'kasun@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('C11120', 'methum@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
('C11121', 'rasikak@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('C11125', 'viha51@gmail.com', '4e4dfd107140321f7a7f6dfcc9fb24df'),
('C11164', 'test0055@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('C11166', 'samiru@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('C11150', 'nath@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('C11167', 'test00005@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `credentials_employee`
--

DROP TABLE IF EXISTS `credentials_employee`;
CREATE TABLE IF NOT EXISTS `credentials_employee` (
  `emp_ID` char(6) NOT NULL,
  `emp_mail` varchar(35) DEFAULT NULL,
  `emp_pass` char(100) DEFAULT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials_employee`
--

INSERT INTO `credentials_employee` (`emp_ID`, `emp_mail`, `emp_pass`) VALUES
('E00001', 'saman@gmail.com', '9611A'),
('E00002', 'malith@gmail.com', '4fea61c8d0c58387fb3b705cc625e033'),
('E00003', 'pooja@gmail.com', 'b22334f2d245674e73e5588ac11e950d'),
('E00004', 'nuwan@gmail.com', 'ce77647778aa1a67fbaf31a75ae029ad'),
('E00005', 'thamali@gmail.com', '2007516490446ced5619c779ec6bb30f');

-- --------------------------------------------------------

--
-- Table structure for table `customer_mobile`
--

DROP TABLE IF EXISTS `customer_mobile`;
CREATE TABLE IF NOT EXISTS `customer_mobile` (
  `cust_ID` char(6) NOT NULL,
  `Cust_pnum` char(10) DEFAULT NULL,
  PRIMARY KEY (`cust_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_mobile`
--

INSERT INTO `customer_mobile` (`cust_ID`, `Cust_pnum`) VALUES
('C11111', '0766941017'),
('C11112', '0717492127'),
('C11113', '0741192643'),
('C11114', '0766693459'),
('C11115', '0716814345'),
('C11118', '0772132521'),
('C11119', '0778541258'),
('C11120', '0774512368'),
('C11121', '0774521365'),
('C11122', '0778541251'),
('C11123', '0774521365'),
('C11166', '0774521452'),
('C11167', '0774521452'),
('C11128', '0774521524'),
('C11129', '0774521524'),
('C11136', '0774521524'),
('C11137', '0774521452'),
('C11138', '0774521452'),
('C11139', '0774521452'),
('C11140', '0778521452'),
('C11141', '0778541236'),
('C11142', '0774521524'),
('C11143', '0774521452'),
('C11144', '0122101254'),
('C11145', '0214521452'),
('C11147', '0774521452'),
('C11148', '0774521452'),
('C11149', '0778541236'),
('C11150', '0778541236'),
('C11151', '0774521452'),
('C11152', '0774521452'),
('C11153', '0778541236'),
('C11154', '0774521524'),
('C11155', '0778541236'),
('C11156', '0774521452'),
('C11157', '0774521452'),
('C11158', '0774521524'),
('C11159', '0774521524'),
('C11160', ''),
('C11161', '0122101254'),
('C11162', '0778541236'),
('C11163', '0774521352'),
('C11164', '0774125142'),
('C11165', '0774521365');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_ID` char(6) NOT NULL,
  `emp_fname` varchar(25) DEFAULT NULL,
  `emp_lname` varchar(25) DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `emp_bdate` date DEFAULT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_ID`, `emp_fname`, `emp_lname`, `emp_address`, `emp_bdate`) VALUES
('E00001', 'Saman', 'Rathnayake', 'No12, Lake road, Boralesgamuwa', '1996-11-11'),
('E00002', 'Malith', 'Silva', 'No15, New kandy road, Kaduwella', '1998-09-07'),
('E00003', 'Pooja', 'Gamage', 'No120, 1st street, Maharagama', '1998-02-15'),
('E00004', 'Nuwan', 'Sampath', 'No23, Temple road, Matara', '1994-05-02'),
('E00005', 'Thamali', 'Alwis', 'No04, New street, Kurunegala', '1999-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_mobile`
--

DROP TABLE IF EXISTS `employee_mobile`;
CREATE TABLE IF NOT EXISTS `employee_mobile` (
  `emp_ID` char(6) NOT NULL,
  `emp_pnum` char(10) DEFAULT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_mobile`
--

INSERT INTO `employee_mobile` (`emp_ID`, `emp_pnum`) VALUES
('E00001', '0719091530'),
('E00002', '0712646236'),
('E00003', '0766803726'),
('E00004', '0748243408'),
('E00005', '0766475658');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_FName` varchar(30) NOT NULL,
  `user_LName` varchar(30) NOT NULL,
  `user_Phone` char(10) NOT NULL,
  `user_eMail` varchar(30) NOT NULL,
  `user_Des` varchar(256) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_ID`, `user_FName`, `user_LName`, `user_Phone`, `user_eMail`, `user_Des`) VALUES
(1, 'sasf', 'asfsaf', '0778541254', 'test@gmail.com', 'What do you want to say\r\n	sfsafsaf	    ');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(18, 'IMG-61626be4b312a9.92359920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `mang_ID` char(6) NOT NULL,
  `mang_name` varchar(40) DEFAULT NULL,
  `mang_bdate` date DEFAULT NULL,
  `mang_mail` varchar(35) DEFAULT NULL,
  `mang_pass` char(20) DEFAULT NULL,
  PRIMARY KEY (`mang_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mang_ID`, `mang_name`, `mang_bdate`, `mang_mail`, `mang_pass`) VALUES
('M00001', 'Yasith Gunasinghe', '1992-01-15', 'yasith@gmail.com', 'yasith&123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_ID` char(5) NOT NULL,
  `cust_ID` char(6) DEFAULT NULL,
  `reserv_ID` char(8) DEFAULT NULL,
  `pay_method` varchar(10) DEFAULT NULL,
  `card_number` char(13) DEFAULT NULL,
  `pay_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`pay_ID`),
  KEY `FK_Payment01` (`cust_ID`),
  KEY `FK_Payment0` (`reserv_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_ID`, `cust_ID`, `reserv_ID`, `pay_method`, `card_number`, `pay_amount`) VALUES
('P1113', 'C11111', 'R0000001', 'Visa', NULL, 350000),
('P1114', 'C11112', 'R0000002', 'Visa', NULL, 175000),
('P1115', 'C11113', 'R0000003', 'Master', NULL, 250000),
('P1116', 'C11150', 'R0000002', NULL, NULL, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `pay_dates`
--

DROP TABLE IF EXISTS `pay_dates`;
CREATE TABLE IF NOT EXISTS `pay_dates` (
  `pay_date` date NOT NULL,
  `reserv_ID` char(8) NOT NULL,
  `pay_ID` char(5) DEFAULT NULL,
  PRIMARY KEY (`pay_date`,`reserv_ID`),
  KEY `FK_Pay_date0` (`reserv_ID`),
  KEY `FK_Pay_date1` (`pay_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_dates`
--

INSERT INTO `pay_dates` (`pay_date`, `reserv_ID`, `pay_ID`) VALUES
('2021-10-19', 'R0000001', 'P1113'),
('2021-10-20', 'R0000002', 'P1116'),
('2021-10-20', 'R0000003', 'P1119'),
('2021-10-19', 'R0000002', 'P1118');

-- --------------------------------------------------------

--
-- Table structure for table `registered_customer`
--

DROP TABLE IF EXISTS `registered_customer`;
CREATE TABLE IF NOT EXISTS `registered_customer` (
  `cust_ID` char(6) NOT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cust_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_customer`
--

INSERT INTO `registered_customer` (`cust_ID`, `cust_name`) VALUES
('C11111', 'Dimuthu Lakshitha'),
('C11112', 'Nalin Perera'),
('C11113', 'Januka Silva'),
('C11114', 'Dilki Senanayake'),
('C11115', 'Vishwa Peiris'),
('C11116', 'sheran'),
('C11118', 'chathila'),
('C11119', 'Dunil'),
('C11120', 'Methum'),
('C11121', 'Rasika'),
('C11122', 'Nethmi'),
('C11124', 'Induwara'),
('C11125', 'vihanga'),
('C11166', 'test'),
('C11128', 'Thilina'),
('C11129', 'Neluka'),
('C11135', 'Miyuru'),
('C11136', 'miyuru'),
('C11137', 'Nethmi'),
('C11138', 'vihanga'),
('C11139', 'tinuka'),
('C11140', 'samiru'),
('C11167', 'test'),
('C11148', 'test'),
('C11149', 'Prathila Kahandagamage'),
('C11150', 'Prathila Kahandagamage'),
('C11151', 'Prathila Kahandagamage'),
('C11152', 'svsa'),
('C11153', 'sfsafsaf'),
('C11154', 'ssafs'),
('C11155', 'prathila'),
('C11156', 'Prathila Kahandagamage'),
('C11157', 'Prathila Kahandagamage'),
('C11158', 'Prathila Kahandagamage'),
('C11159', 'fdsgd'),
('C11160', ''),
('C11161', 'Prathila Kahandagamage'),
('C11162', 'Prathila Kahandagamage'),
('C11163', 'prathila'),
('C11164', 'test00055'),
('C11165', 'kasun');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

DROP TABLE IF EXISTS `reservation_details`;
CREATE TABLE IF NOT EXISTS `reservation_details` (
  `reserv_ID` char(8) NOT NULL,
  `cust_ID` char(6) DEFAULT NULL,
  `reserv_type` varchar(15) DEFAULT NULL,
  `reserv_date` date DEFAULT NULL,
  `reserv_hours` varchar(50) DEFAULT NULL,
  `reserv_location` varchar(200) DEFAULT NULL,
  `reserv_notes` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reserv_ID`),
  KEY `FK_Reservation_Details01` (`cust_ID`),
  KEY `FK_Reservation_Details02` (`reserv_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`reserv_ID`, `cust_ID`, `reserv_type`, `reserv_date`, `reserv_hours`, `reserv_location`, `reserv_notes`) VALUES
('R0000001', 'c11111', 'weddings', '2022-01-05', '5', 'colombo', 'Need Photographer On time');

-- --------------------------------------------------------

--
-- Table structure for table `serve_packages`
--

DROP TABLE IF EXISTS `serve_packages`;
CREATE TABLE IF NOT EXISTS `serve_packages` (
  `reserv_type` varchar(15) NOT NULL,
  `hourly_rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`reserv_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serve_packages`
--

INSERT INTO `serve_packages` (`reserv_type`, `hourly_rate`) VALUES
('weddings', 4000),
('cooperate', 4500),
('family', 2000),
('other', 3000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
