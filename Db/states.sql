-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2015 at 07:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orm`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `stateName` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `stateName`) VALUES
(2, 1, 'Alabama'),
(3, 1, 'Alaska'),
(4, 1, 'Arizona'),
(5, 1, 'Arkansas'),
(8, 1, 'California'),
(9, 1, 'Colorado'),
(10, 1, 'Connecticut'),
(11, 1, 'Delaware'),
(12, 1, 'Florida'),
(13, 1, 'Georgia'),
(14, 1, 'Hawaii'),
(15, 1, 'Idaho'),
(16, 1, 'Illinois'),
(17, 1, 'Indiana'),
(18, 1, 'Iowa'),
(19, 1, 'Kansas'),
(20, 1, 'Kentucky'),
(21, 1, 'Louisiana'),
(22, 1, 'Maine'),
(23, 1, 'Maryland'),
(24, 1, 'Massachusetts'),
(25, 1, 'Michigan'),
(26, 1, 'Minnesota'),
(27, 1, 'Mississippi'),
(28, 1, 'Missouri'),
(29, 1, 'Montana'),
(30, 1, 'Nebraska'),
(31, 1, 'Nevada'),
(32, 1, 'New Hampshire'),
(33, 1, 'New Jersey'),
(34, 1, 'New Mexico'),
(35, 1, 'New York'),
(36, 1, 'North Carolina'),
(37, 1, 'North Dakota'),
(38, 1, 'Ohio'),
(39, 1, 'Oklahoma'),
(40, 1, 'Oregon'),
(41, 1, 'Pennsylvania'),
(42, 1, 'Rhode Island'),
(43, 1, 'South Carolina'),
(44, 1, 'South Dakota'),
(45, 1, 'Tennessee'),
(46, 1, 'Texas'),
(47, 1, 'Utah'),
(48, 1, 'Vermont'),
(49, 1, 'Virginia'),
(50, 1, 'Washington'),
(51, 1, 'West Virginia'),
(52, 1, 'Wisconsin'),
(53, 1, 'Wyoming'),
(54, 2, 'Alberta\r\n'),
(55, 2, 'British Columbia\r\n'),
(56, 2, 'Manitoba\r\n'),
(57, 2, 'New Brunswick'),
(58, 2, 'Nova Scotia'),
(59, 2, 'Ontario'),
(60, 2, 'Prince Edward Island'),
(61, 2, 'Quebec'),
(62, 2, 'Saskatchewan'),
(63, 2, 'Yukon'),
(64, 1, 'District of Columbia'),
(65, 2, 'Newfoundland and Labrador'),
(66, 2, 'Northwest Territory'),
(67, 2, 'Nunavut Territory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `states`
--
ALTER TABLE `states`
ADD CONSTRAINT `fk_country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
