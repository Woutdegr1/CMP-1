-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2016 at 09:34 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_boekenshop`
--
CREATE DATABASE IF NOT EXISTS `db_boekenshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_boekenshop`;

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

CREATE TABLE `auteur` (
  `auteur_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `familienaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `boeken`
--

CREATE TABLE `boeken` (
  `boek_id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `paginas` int(11) DEFAULT NULL,
  `auteur_id` int(11) NOT NULL,
  `uitgeverij_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uitgeverij`
--

CREATE TABLE `uitgeverij` (
  `uitgeverij_id` int(11) NOT NULL,
  `bedrijfsnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `winkelboek`
--

CREATE TABLE `winkelboek` (
  `winkelboek_id` int(11) NOT NULL,
  `winkel_id` int(11) NOT NULL,
  `boek_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `winkels`
--

CREATE TABLE `winkels` (
  `winkel_id` int(11) NOT NULL,
  `winkelnaam` varchar(255) NOT NULL,
  `stad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`auteur_id`);

--
-- Indexes for table `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`boek_id`),
  ADD KEY `auteur_id` (`auteur_id`),
  ADD KEY `uitgeverij_id` (`uitgeverij_id`);

--
-- Indexes for table `uitgeverij`
--
ALTER TABLE `uitgeverij`
  ADD PRIMARY KEY (`uitgeverij_id`);

--
-- Indexes for table `winkelboek`
--
ALTER TABLE `winkelboek`
  ADD PRIMARY KEY (`winkelboek_id`),
  ADD KEY `winkel_id` (`winkel_id`),
  ADD KEY `boek_id` (`boek_id`);

--
-- Indexes for table `winkels`
--
ALTER TABLE `winkels`
  ADD PRIMARY KEY (`winkel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `auteur_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boeken`
--
ALTER TABLE `boeken`
  MODIFY `boek_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uitgeverij`
--
ALTER TABLE `uitgeverij`
  MODIFY `uitgeverij_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `winkelboek`
--
ALTER TABLE `winkelboek`
  MODIFY `winkelboek_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `winkels`
--
ALTER TABLE `winkels`
  MODIFY `winkel_id` int(11) NOT NULL AUTO_INCREMENT;