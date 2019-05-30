-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2010 at 09:15 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `department`
--
CREATE DATABASE `department` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `department`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL auto_increment,
  `sname` longtext NOT NULL,
  `designation` mediumtext NOT NULL,
  `qualification` mediumtext NOT NULL,
  `contact` int(11) NOT NULL,
  `addr` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `sname`, `designation`, `qualification`, `contact`, `addr`) VALUES
(148, 'Dr. Syed Faisal Ahmed Bukhari ', 'Chairman (computer Engineering)', 'Ph.D. Electrical & Electronics Engineering, (UMIST, UK), M.Sc. Systems Engineering (PIEAS) B.E. Computer Systems (NED)\r\n\r\n', 2147483647, 'Sirsyed University of Engineering and technology'),
(146, 'Prof. Dr. S. M. Makhdumi ', 'Dean, Faculty of Engineering', 'B.E. Civil Engg. (NED) M.Sc. Manchester (UK), Ph.D. Nottingham (UK) ', 2147483647, 'sirsyed University of Engineering and technology'),
(164, 'kiran Ashraf', 'chairman', 'bs from ssuet', 5754544, 'fgfdgdgdf'),
(150, 'Dr. Syed Faisal Ahmed Bukhari ', 'Chairman (computer Engineering)', 'Ph.D. Electrical & Electronics Engineering, (UMIST, UK), M.Sc. Systems Engineering (PIEAS) B.E. Computer Systems (NED)\r\n\r\n', 2147483647, 'Sirsyed University of Engineering and technology'),
(151, 'Mr. Muzammil Ahmed Khan ', 'Assistant Professor ', 'B.S. Computer Engineering (SSUET), M.S. Computer Engineering (SSUET) ', 554408484, 'sirsyed University of Engineering and technology'),
(152, 'Mr. Muhammad Khurram ', 'Assistant Professor ', 'B.E. Computer Systems (NED), M. Engineering (Computer Systems) (NED) ', 345656565, 'SirSyed University of Engineering and technology'),
(153, 'Mr. Osama Ahmed Siddiqui ', 'Assistant Professor / Dy. Manager Networks ', 'B.S. Computer Engineering (SSUET), M.S. Computer Engineering (SSUET) ', 845656565, 'Sirsyed University of Engineering and technology'),
(154, 'Mr. Muhammad Kamran Khan ', 'Assistant Professor ', 'M.S. Computer Engineering( SSUET), B.E. Electronic Engineering (NED)', 456464466, 'Sirsyed University of Engineering and technology'),
(155, 'Mr. Muhammad Kashif Shaikh ', 'Assistant Professor ', 'B.S. Computer Engineering (SSUET), M.S. Computer Engineering (SSUET) ', 123456789, 'Sirsyed University of Engineering and technology'),
(156, 'Mr. Shariq uz Zaman ', 'Assistant Professor ', 'B.S. Computer Engineering (SSUET), MBA (UK) ', 552554545, 'Sirsyed University of Engineering and technology'),
(157, 'Ms. Moona Kanwal ', 'Assistant Professor ', 'B.S. Computer Engineering (SSUET), M.S. Computer Engineering (SSUET)\r\n', 575642454, 'Sirsyed University of Engineering and technology'),
(158, 'Mr. Masood Hussain ', 'Assistant Professor ', 'M.S. Computer Science (USA), B.S. Computer Science (USA) ', 74598966, 'Sirsyed University of Engineering and technology'),
(159, 'Mrs. Saba Ahsan ', 'Assistant Professor', 'B.E. Computer Systems (NED), M.S. Computer Networks (Hamdard, Karachi) ', 44646966, 'Sirsyed University of Engineering and technology'),
(160, 'Syed Hasan Raza Naqvi ', 'Assistant Professor ', 'B.S. Electronic Engineering (SSUET), M.S. Electronic Engineering (Linkoping University, Sweden)\r\n', 42555555, 'Sirsyed University of Engineering and technology'),
(161, 'Mr. Muhammad Zeeshan Ahmed Karim ', 'Assistant Professor ', 'B.S. Computer Engineering (SSUET), M.S. Telecommunication (Hamdard) ', 545454545, 'Sirsyed University of Engineering and technology'),
(162, 'Ms. Shaista Ashraf Farooqi ', 'Assistant Professor ', 'M.E. Computer System (NED), B.E. Computer Systems (NED) ', 2147483647, 'Sirsyed University of Engineering and technology');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL auto_increment,
  `sname` longtext NOT NULL,
  `rollno` mediumtext NOT NULL,
  `regno` int(11) NOT NULL,
  `dname` longtext NOT NULL,
  `fname` longtext NOT NULL,
  `sec` char(1) NOT NULL,
  `contact` int(11) NOT NULL,
  `addr` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sname`, `rollno`, `regno`, `dname`, `fname`, `sec`, `contact`, `addr`) VALUES
(145, 'Madiha Zafar', 'CE-09-143', 123, 'Computer Engineering', 'Mr. Zafar', 'C', 0, 'xyz'),
(143, 'Nazia Mughal', 'CE-09-148', 123, 'Computer Engineering', 'Mr. Mughal', 'C', 0, 'xyz'),
(144, 'Rabia Jamal', 'CE-09-180', 123, 'Computer Engineering', 'Mr. Jamal', 'C', 0, 'xyz'),
(142, 'Kiran Ashraf', 'CE-09-284', 123, 'Computer Engineering', 'Muhammad Ashraf', 'C', 0, 'xyz'),
(146, 'Hassan Jamal', 'CE-09-128', 123, 'Computer Engineering', 'Mr. Jamal', 'C', 0, 'xyz'),
(147, 'Asalan Ata Khan', 'CE-09-124', 123, 'Computer Engineering', 'Mr. Khan', 'C', 0, 'xyz'),
(148, 'Mohsin Ali', 'CE-09-116', 123, 'Computer Engineering', 'Mr. Ali', 'C', 0, 'xyz'),
(149, 'Anam Kamil Warsi', 'CE-09-294', 123, 'Computer Engineering', 'Mr. Kamil', 'E', 0, 'xyz'),
(150, 'Nida Raees', 'CE-09-246', 123, 'Computer engineering', 'Mr. Raees', 'E', 0, 'xyz'),
(151, 'Sara Rasheed', 'CE-09-261', 123, 'Computer Engineering', 'Mr. Rasheed', 'E', 0, 'xyz');
