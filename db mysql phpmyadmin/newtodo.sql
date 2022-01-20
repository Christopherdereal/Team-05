-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2022 at 06:34 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtodo`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `date`, `content`, `status`) VALUES
(1, '2022-01-01', 'New Year\'s Day', 1),
(2, '2022-02-01', 'Chinese New Year', 1),
(3, '2022-02-25', 'EDSA Anniversary', 1),
(4, '2022-04-09', 'Araw ng Kagitingan', 1),
(5, '2022-04-14', 'Maundy Thursday', 1),
(6, '2022-04-15', 'Good Friday', 1),
(7, '2022-04-16', 'Black Saturday', 1),
(8, '2022-05-01', 'Labor Day', 1),
(9, '2022-06-12', 'Independence Day', 1),
(10, '2022-08-21', 'Ninoy Aquino Day', 1),
(11, '2022-08-29', 'National Heroes Day', 1),
(12, '2022-11-01', 'All Saints\' Day', 1),
(13, '2022-11-30', 'Bonifacio Day', 1),
(14, '2022-12-08', 'Feast of the Immaculate', 1),
(15, '2022-12-25', 'Christmas Day', 1),
(16, '2022-12-30', 'Rizal Day', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS `lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(255) NOT NULL,
  `list_body` text NOT NULL,
  `list_user_id` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `list_name`, `list_body`, `list_user_id`, `create_date`) VALUES
(8, 'Quantitative Methods', 'Quiz #1\r\nQuiz #2\r\nQuiz #3\r\nQuiz #4\r\nQuiz #5\r\nQuiz #6\r\nQuiz #7\r\nQuiz #8\r\nMidterm Exam\r\nProject Simulation Excel', '4', '2021-12-30 02:58:37'),
(9, 'Information Assurance and Security 1', 'Assignment #1\r\nActivity #1\r\nActivity #2\r\nActivity #3\r\nAssignment #2\r\nAssignment #3\r\nPreliminary Exam\r\nActivity #3\r\nMidterm Exam', '4', '2021-12-30 03:26:53'),
(10, 'Systems Analysis and Design', 'Assignment #1\r\nAssignment #2\r\nWeek 1 Presentation', '4', '2021-12-30 03:37:58'),
(11, 'Science Tasks', 'Physics Activity\r\nChemistry Activity', '5', '2021-12-30 04:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL,
  `task_body` text NOT NULL,
  `list_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `task_body`, `list_id`, `due_date`, `create_date`, `is_complete`) VALUES
(27, 'Quiz #1', 'First Quiz', 8, '2021-09-28', '2021-12-30 02:59:45', 1),
(28, 'Quiz #2', 'Second Quiz', 8, '2021-10-06', '2021-12-30 03:00:27', 1),
(29, 'Quiz #3', 'Third Quiz', 8, '2021-10-12', '2021-12-30 03:01:05', 1),
(30, 'Quiz #4', 'Fourth Quiz', 8, '2021-10-19', '2021-12-30 03:02:12', 1),
(31, 'Quiz #5', 'Fifth Quiz', 8, '2021-10-26', '2021-12-30 03:02:37', 1),
(32, 'Quiz #6', 'Sixth Quiz', 8, '2021-11-02', '2021-12-30 03:03:04', 1),
(33, 'Quiz #7', 'Seventh Quiz', 8, '2021-11-09', '2021-12-30 03:03:39', 1),
(34, 'Quiz #8', 'Eighth Quiz', 8, '2021-11-23', '2021-12-30 03:04:03', 1),
(35, 'Midterm Exam', 'Mid year Exam', 8, '2021-12-14', '2021-12-30 03:04:29', 1),
(36, 'Project Excel Simulation', 'Finish the Loan Excel Simulation in Quantitative Methods to be Submitted before class semester  ends.', 8, '2022-02-01', '2021-12-30 03:05:33', 0),
(37, 'Assignment #1', 'Search about the concepts of Computer Security.', 9, '2021-12-06', '2021-12-30 03:28:37', 1),
(38, 'Activity #1', 'Write a program that can encrypt a password in a Login System', 9, '2021-12-13', '2021-12-30 03:29:30', 1),
(39, 'Activity #2', 'Analyze the different cryptographies.', 9, '2021-12-13', '2021-12-30 03:30:40', 1),
(40, 'Activity #3', 'Download Oracle VB Machine and install any operating system to it.', 9, '2021-12-13', '2021-12-30 03:31:37', 1),
(41, 'Assignment #2', 'Search and list the different malicious codes and viruses.', 9, '2021-12-13', '2021-12-30 03:32:25', 1),
(42, 'Assignment #3', 'Open your installed operating system and discover its privileges.', 9, '2021-12-13', '2021-12-30 03:33:14', 1),
(43, 'Preliminary Exam', 'Write a program that has a mechanism to protect a file.', 9, '2021-12-13', '2021-12-30 03:34:12', 1),
(44, 'Activity #3', 'Use your installed Oracle VB Machine to exploit an operating system.', 9, '2021-12-13', '2021-12-30 03:35:08', 1),
(45, 'Midterm Exam', 'Create 35 questions each from module 1 and module 2.', 9, '2022-01-03', '2021-12-30 03:35:46', 0),
(46, 'Assignment #1', 'Go to https://forms.office.com/r/cP7puNBgfV with the form entitled \'General Student Information\' and enter the requested information. Please don\'t forward the link to anybody not belonging to your group.\r\n\r\nCopy the project plan template located on Class team -> General -> Files Tab -> Student Materials to your preferred location. \r\n\r\nIf team members are already selected, create a team folder under this location, Class section -> General -> Files tab with this format: Team ## (example, 01, 02, 03 and so on) and place a copy of the project plan template. This will be your team folder until the end of the semester.', 10, '2021-09-29', '2021-12-30 03:39:03', 1),
(47, 'Assignment #2', 'Per team, kindly visit the link below and fill up the necessary information\r\nhttps://forms.office.com/r/c1eMLiL1mC (title: Student Project Proposals)\r\n\r\n\r\nPer individual, kindly visit the link below answer with all honesty\r\nhttps://forms.office.com/r/E7CaVSVMuD (title: Student Skill Assessment)', 10, '2021-10-03', '2021-12-30 03:39:40', 1),
(48, 'Week 1 Presentation', 'Present the achieved backlogs for week 1.', 10, '2022-01-03', '2021-12-30 03:40:23', 0),
(49, 'Physics Activity', 'Calculate the weight of an object whose Mass is 5kg. (Take g=10m/s^2)', 11, '2022-01-10', '2021-12-30 04:05:57', 0),
(50, 'Chemistry Activity', 'Calculate the mass of 3.00 moles of CF2Cl2', 11, '2021-12-28', '2021-12-30 04:06:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `register_date`) VALUES
(4, 'Christopher', 'De Real', 'christopher.dereal@tup.edu.ph', 'Christopher', '827ccb0eea8a706c4c34a16891f84e7b', '2021-12-29 09:58:10'),
(5, 'Renald', 'Fernandez', 'renald.fernandez@tup.edu.ph', 'Renald', 'a3590023df66ac92ae35e3316026d17d', '2021-12-30 04:03:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
