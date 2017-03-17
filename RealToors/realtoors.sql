-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 12:10 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realtoors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user`, `password`) VALUES
('Andrew', 'ARod1'),
('jerm', 'bigsexy'),
('kms', 'sUnil');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(7) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Date` date NOT NULL,
  `Start Time` time NOT NULL,
  `End Time` time NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Pending',
  `host email` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Name`, `Date`, `Start Time`, `End Time`, `Description`, `Status`, `host email`) VALUES
(1, 'Tour of Drexel University', '2017-04-08', '12:00:00', '01:15:00', 'Join us for a tour of Drexel Univerisity! All individuals, families and groups ages 10+ are welc', 'Approved', ''),
(2, 'Seniors stroll the Schuylkill', '2017-04-29', '11:00:00', '01:00:00', 'A friendly event for senior citizens around the area to ride and socialize around the Schuylkill River Trail. Any people 62+ and any family of their family or friends welcome', 'Approved', ''),
(3, 'Family Fun Day at the Art Museum', '2017-05-13', '02:00:00', '05:00:00', 'Ride around the Philadelphia Zoo and say hello to all our animal friends. Food, fun and and games included.', 'Approved', ''),
(4, 'Philly Homes for Sale Series(NE)', '2017-06-03', '12:00:00', '02:00:00', 'One of our monthly rides through Philly neighborhoods for prospective home buyers to look whats on the market', 'Approved', ''),
(5, 'Pending Test A', '2017-03-31', '00:00:00', '00:00:00', '', 'Denied', ''),
(6, 'Pending Test B', '2017-03-31', '00:00:00', '00:00:00', '', 'Denied', ''),
(7, 'Test A', '2018-12-12', '12:00:00', '14:00:00', 'test', 'Denied', 'TEST@TEST.ORG'),
(9, 'Test B', '2017-12-13', '00:12:00', '23:11:00', 'test', 'Pending', 'TEST@TEST.ORG'),
(10, 'INFO 154 Biking Event', '2017-03-25', '12:00:00', '13:30:00', 'info 154, baby', 'Approved', 'fake@fake.com'),
(16, 'Last Test', '2018-01-10', '14:00:00', '16:00:00', 'last test', 'Denied', 'test@test.org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
