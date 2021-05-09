-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 09, 2021 at 03:26 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eduhub-sairam`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT '',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `profile_image` varchar(50) DEFAULT NULL,
  `cover_image` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `featured1` varchar(500) DEFAULT NULL,
  `featured2` varchar(500) DEFAULT NULL,
  `featured3` varchar(500) DEFAULT NULL,
  `featured4` varchar(500) DEFAULT NULL,
  `featured5` varchar(500) DEFAULT NULL,
  `project1` varchar(500) DEFAULT NULL,
  `project2` varchar(500) DEFAULT NULL,
  `project3` varchar(500) DEFAULT NULL,
  `project4` varchar(500) DEFAULT NULL,
  `project5` varchar(500) DEFAULT NULL,
  `project6` varchar(500) DEFAULT NULL,
  `project7` varchar(500) DEFAULT NULL,
  `project8` varchar(500) DEFAULT NULL,
  `project9` varchar(500) DEFAULT NULL,
  `project10` varchar(500) DEFAULT NULL,
  `skill1` varchar(100) DEFAULT NULL,
  `skill2` varchar(100) DEFAULT NULL,
  `skill3` varchar(100) DEFAULT NULL,
  `skill4` varchar(100) DEFAULT NULL,
  `skill5` varchar(100) DEFAULT NULL,
  `skill6` varchar(100) DEFAULT NULL,
  `skill7` varchar(100) DEFAULT NULL,
  `skill8` varchar(100) DEFAULT NULL,
  `skill9` varchar(100) DEFAULT NULL,
  `skill10` varchar(100) DEFAULT NULL,
  `certification1` varchar(500) DEFAULT NULL,
  `certification2` varchar(500) DEFAULT NULL,
  `certification3` varchar(500) DEFAULT NULL,
  `certification4` varchar(500) DEFAULT NULL,
  `certification5` varchar(500) DEFAULT NULL,
  `certification6` varchar(500) DEFAULT NULL,
  `certification7` varchar(500) DEFAULT NULL,
  `certification8` varchar(500) DEFAULT NULL,
  `certification9` varchar(500) DEFAULT NULL,
  `certification10` varchar(500) DEFAULT NULL,
  `accomplishment1` varchar(500) DEFAULT NULL,
  `accomplishment2` text,
  `accomplishment3` text,
  `accomplishment4` text,
  `accomplishment5` text,
  `accomplishment6` text,
  `accomplishment7` text,
  `accomplishment8` text,
  `accomplishment9` text,
  `accomplishment10` text,
  `accomplishment11` text,
  `accomplishment12` text,
  `accomplishment13` text,
  `accomplishment14` text,
  `accomplishment15` text,
  `accomplishment16` text,
  `accomplishment17` text,
  `accomplishment18` text,
  `accomplishment19` text,
  `accomplishment20` text,
  `accomplishment21` text,
  `accomplishment22` text,
  `accomplishment23` text,
  `accomplishment24` text,
  `accomplishment25` text,
  `gitHub` text,
  `linkedin` text,
  `edumate` text,
  `website` text,
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `first_name`, `last_name`, `profile_image`, `cover_image`, `gender`, `dept`, `dob`, `mobile`, `city`, `institution`, `title`, `bio`, `featured1`, `featured2`, `featured3`, `featured4`, `featured5`, `project1`, `project2`, `project3`, `project4`, `project5`, `project6`, `project7`, `project8`, `project9`, `project10`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `skill7`, `skill8`, `skill9`, `skill10`, `certification1`, `certification2`, `certification3`, `certification4`, `certification5`, `certification6`, `certification7`, `certification8`, `certification9`, `certification10`, `accomplishment1`, `accomplishment2`, `accomplishment3`, `accomplishment4`, `accomplishment5`, `accomplishment6`, `accomplishment7`, `accomplishment8`, `accomplishment9`, `accomplishment10`, `accomplishment11`, `accomplishment12`, `accomplishment13`, `accomplishment14`, `accomplishment15`, `accomplishment16`, `accomplishment17`, `accomplishment18`, `accomplishment19`, `accomplishment20`, `accomplishment21`, `accomplishment22`, `accomplishment23`, `accomplishment24`, `accomplishment25`, `gitHub`, `linkedin`, `edumate`, `website`, `last_seen`) VALUES
('e8ec088@sairamtap.edu.in', '123', 'Jayachandran', 'Ramadoss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 13:31:22'),
('jrjakiro2001@gmail.com', '123', 'J', 'R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 15:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
