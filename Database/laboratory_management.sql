-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2021 at 01:03 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laboratory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(10) NOT NULL auto_increment,
  `patient_id` int(10) NOT NULL,
  `test_service_id` int(10) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `description` varchar(500) NOT NULL,
  `appointment_status` varchar(200) NOT NULL,
  `technician_id` int(10) NOT NULL,
  PRIMARY KEY  (`appointment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_id`, `test_service_id`, `appointment_date`, `appointment_time`, `description`, `appointment_status`, `technician_id`) VALUES
(1, 1, 1, '2020-02-02', '12:12:12', 'zjbvzjvgj', 's.amkdasd', 2),
(3, 2, 1, '2020-01-01', '10:00:00', 'sugar patient', 'pending', 0),
(5, 0, 0, '0000-00-00', '00:00:00', '', '', 0),
(7, 1, 4, '2020-01-01', '10:00:00', 'blood test successful', 'success', 0),
(8, 1, 1, '2020-02-03', '12:12:12', 'blood test', 'success', 0),
(9, 1, 2, '2020-02-03', '11:00:00', 'sugar test successful', 'success', 0),
(10, 1, 2, '2020-02-03', '12:12:12', 'sugar test', 'success', 0),
(11, 1, 2, '2020-02-03', '12:12:12', 'sugar test', 'success', 0),
(12, 1, 2, '2020-02-03', '12:12:12', 'sugar test', 'success', 0),
(13, 2, 2, '2020-01-01', '10:00:00', 'bbbbaaaa', 'success', 0),
(14, 2, 1, '2020-01-01', '10:00:00', 'bbbbaaaa', 'success', 0),
(15, 2, 2, '2020-01-01', '10:00:00', 'bbbbaaaa', 'success', 0),
(19, 2, 3, '2020-02-03', '11:00:00', 'active', 'success', 8),
(20, 2, 4, '2020-01-01', '12:12:11', 'jdbckfsdbk', 'pending', 10);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(10) NOT NULL auto_increment,
  `doctor_name` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `specialization_id` int(10) NOT NULL,
  `test_service_id` int(10) NOT NULL,
  PRIMARY KEY  (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `age`, `qualification`, `contact_no`, `email_id`, `specialization_id`, `test_service_id`) VALUES
(2, 'manjunath', '27', 'mbbs', '7975554771', 'manjunathhongal@gmail.com', 2, 1),
(3, 'manoj', '27', 'mbbs', '9173456371', 'manoj123@gmail.com', 2, 3),
(5, '', '', '', '', '', 0, 0),
(7, 'vinod', '27', 'bams', '682636234', 'vinod@gmail.com', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(10) NOT NULL auto_increment,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  `hint_question` varchar(500) NOT NULL,
  `hint_answer` varchar(500) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL auto_increment,
  `patient_name` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `patient_gender` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `patient_number` int(10) NOT NULL,
  `patient_photo` varchar(200) NOT NULL,
  PRIMARY KEY  (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `date_of_birth`, `patient_gender`, `address`, `mobile_no`, `email_id`, `patient_number`, `patient_photo`) VALUES
(1, 'eshwar', '1990-01-12', '', 'dharwad', '9913245666', 'eshwar123@gmail.com', 3, ''),
(2, 'devaraj', '1989-02-10', '', 'dharwad', '9453322423', 'devaraj123@gmail.com', 2, ''),
(3, 'manoj', '1990-01-10', '', 'hafybfkhk', '9913245666', 'gjfjk,mbslxyjb', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL auto_increment,
  `test_report_master_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_staus` varchar(100) NOT NULL,
  PRIMARY KEY  (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `test_report_master_id`, `amount`, `payment_type`, `payment_date`, `payment_time`, `payment_staus`) VALUES
(1, 1, 400, 'cash on delivery', '2020-01-01', '10:00:00', 'success'),
(2, 2, 200, 'cash on delivery', '2020-01-02', '11:00:00', 'hh'),
(3, 1, 100, 'cash on delivery', '2020-01-01', '10:00:00', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `specialization_id` int(10) NOT NULL auto_increment,
  `specialization_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY  (`specialization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`specialization_id`, `specialization_name`, `description`) VALUES
(1, 'Medical', 'md'),
(2, 'medical', 'Dentist');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `technician_id` int(10) NOT NULL auto_increment,
  `test_service_id` int(10) NOT NULL,
  `technician_name` varchar(100) NOT NULL,
  `specialization_id` int(10) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY  (`technician_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`technician_id`, `test_service_id`, `technician_name`, `specialization_id`, `email_id`, `contact_no`, `address`) VALUES
(1, 2, 'manoj', 0, 'manoj111@gmail.com', '9954636233', 'hubli'),
(2, 1, 'manju', 0, 'manju111@gmail.com', '9983442555', 'hubli'),
(3, 0, '', 0, '', '', ''),
(4, 1, 'manoj', 0, 'manoj@gmail.com\r\n', '7975554771', 'dharwad'),
(5, 1, 'manoj', 0, 'manoj@gmail.com\r\n', '7975554771', 'dharwad'),
(6, 1, 'manoj', 0, 'manoj@gmail.com\r\n', '7975554771', 'dharwad'),
(7, 1, 'manoj', 0, 'manoj@gmail.com\r\n', '7975554771', 'dharwad'),
(8, 1, 'manoj', 0, 'manoj@gmail.com\r\n', '7975554771', 'dharwad'),
(9, 1, 'manoj', 0, 'manoj@gmail.com\r\n', '7975554771', 'dharwad'),
(10, 1, 'manoj', 1, 'manoj123@gmail.com', '7975554771', 'dharwad');

-- --------------------------------------------------------

--
-- Table structure for table `test_category`
--

CREATE TABLE `test_category` (
  `test_category_id` int(10) NOT NULL auto_increment,
  `test_category_name` varchar(100) NOT NULL,
  `test_category_description` varchar(500) NOT NULL,
  PRIMARY KEY  (`test_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test_category`
--

INSERT INTO `test_category` (`test_category_id`, `test_category_name`, `test_category_description`) VALUES
(2, 'mbbs', 'md');

-- --------------------------------------------------------

--
-- Table structure for table `test_report_details`
--

CREATE TABLE `test_report_details` (
  `test_report_details_id` int(10) NOT NULL auto_increment,
  `test_report_master_id` int(10) NOT NULL,
  `test_service_id` int(10) NOT NULL,
  `charges` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `attachment_details` varchar(500) NOT NULL,
  PRIMARY KEY  (`test_report_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `test_report_details`
--

INSERT INTO `test_report_details` (`test_report_details_id`, `test_report_master_id`, `test_service_id`, `charges`, `discount`, `attachment_details`) VALUES
(1, 1, 1, 100, 25, ''),
(4, 0, 1, 500, 50, 'blood test successful'),
(5, 1, 2, 200, 50, '');

-- --------------------------------------------------------

--
-- Table structure for table `test_report_master`
--

CREATE TABLE `test_report_master` (
  `test_report_master_id` int(10) NOT NULL auto_increment,
  `patient_id` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`test_report_master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `test_report_master`
--

INSERT INTO `test_report_master` (`test_report_master_id`, `patient_id`, `date`) VALUES
(1, 2, '2020-01-02'),
(2, 2, '2020-01-02'),
(3, 1, '2020-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `test_service`
--

CREATE TABLE `test_service` (
  `test_service_id` int(10) NOT NULL auto_increment,
  `test_category_id` int(10) NOT NULL,
  `test_service_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY  (`test_service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `test_service`
--

INSERT INTO `test_service` (`test_service_id`, `test_category_id`, `test_service_name`, `description`, `amount`) VALUES
(2, 1, 'sugar test', 'normal', 200),
(3, 1, 'Blood test', 'successful', 200),
(4, 1, 'Blood test', 'successful', 200),
(5, 2, 'Blood test', 'blood test successful', 200),
(6, 2, 'sugar test', 'sugaer test', 500);
