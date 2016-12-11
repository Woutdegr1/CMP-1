-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 11, 2016 at 05:07 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_catbook`
--
CREATE DATABASE IF NOT EXISTS `db_catbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_catbook`;

-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE `auteurs` (
  `auteur_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `familienaam` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auteurs`
--

INSERT INTO `auteurs` (`auteur_id`, `voornaam`, `familienaam`) VALUES
(1, 'Marc', 'Mombaerts'),
(2, 'David', 'Dabner');

-- --------------------------------------------------------

--
-- Table structure for table `boeken`
--

CREATE TABLE `boeken` (
  `boek_id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `uitgave_jaar` varchar(255) NOT NULL,
  `boekomslag` varchar(255) DEFAULT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `uitgeverij_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boeken`
--

INSERT INTO `boeken` (`boek_id`, `titel`, `uitgave_jaar`, `boekomslag`, `auteur_id`, `uitgeverij_id`) VALUES
(1, 'GVD', '2013', 'gvd_omslag.jpg', 1, 1),
(2, 'Grafisch ontwerpen', '2015', 'grafischontwerp_omslag.jpg', 2, NULL),
(11, 'Even uw aandacht', '2012', 'evenuwaandacht_omslag_1481468951.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uitgeverij`
--

CREATE TABLE `uitgeverij` (
  `uitgeverij_id` int(11) NOT NULL,
  `bedrijfsnaam` varchar(255) NOT NULL,
  `stad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uitgeverij`
--

INSERT INTO `uitgeverij` (`uitgeverij_id`, `bedrijfsnaam`, `stad`) VALUES
(1, ' Academia', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`auteur_id`);

--
-- Indexes for table `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`boek_id`),
  ADD KEY `auteur_id` (`auteur_id`,`uitgeverij_id`),
  ADD KEY `boeken_ibfk_2` (`uitgeverij_id`);

--
-- Indexes for table `uitgeverij`
--
ALTER TABLE `uitgeverij`
  ADD PRIMARY KEY (`uitgeverij_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `auteur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `boeken`
--
ALTER TABLE `boeken`
  MODIFY `boek_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `uitgeverij`
--
ALTER TABLE `uitgeverij`
  MODIFY `uitgeverij_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `boeken`
--
ALTER TABLE `boeken`
  ADD CONSTRAINT `boeken_ibfk_1` FOREIGN KEY (`auteur_id`) REFERENCES `auteurs` (`auteur_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boeken_ibfk_2` FOREIGN KEY (`uitgeverij_id`) REFERENCES `uitgeverij` (`uitgeverij_id`) ON DELETE SET NULL ON UPDATE SET NULL;
