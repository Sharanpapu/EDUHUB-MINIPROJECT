-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 09, 2021 at 05:52 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eduhub-sairam`
--

-- --------------------------------------------------------

--
-- Table structure for table `cproject`
--

CREATE TABLE `cproject` (
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `requirement1` text NOT NULL,
  `requirement2` text NOT NULL,
  `requirement3` text NOT NULL,
  `requirement4` text NOT NULL,
  `requirement5` text NOT NULL,
  `requirement6` text NOT NULL,
  `requirement7` text NOT NULL,
  `requirement8` text NOT NULL,
  `requirement9` text NOT NULL,
  `requirement10` text NOT NULL,
  `member1` text NOT NULL,
  `member2` text NOT NULL,
  `member3` text NOT NULL,
  `member4` text NOT NULL,
  `member5` text NOT NULL,
  `member6` text NOT NULL,
  `member7` text NOT NULL,
  `member8` text NOT NULL,
  `member9` text NOT NULL,
  `member10` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `meta` varchar(255) NOT NULL,
  `url` varchar(100) NOT NULL,
  `lastaccess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `file1` varchar(50) NOT NULL,
  `fil2` varchar(50) NOT NULL,
  `file3` varchar(50) NOT NULL,
  `file4` varchar(50) NOT NULL,
  `file5` varchar(50) NOT NULL,
  `hashtags` varchar(200) NOT NULL,
  `mention1` varchar(100) NOT NULL,
  `mention2` varchar(100) NOT NULL,
  `mention3` varchar(100) NOT NULL,
  `mention4` varchar(100) NOT NULL,
  `mention5` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_image` varchar(50) NOT NULL,
  `cover_image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `featured1` varchar(500) NOT NULL,
  `featured2` varchar(500) NOT NULL,
  `featured3` varchar(500) NOT NULL,
  `featured4` varchar(500) NOT NULL,
  `featured5` varchar(500) NOT NULL,
  `project1` varchar(500) NOT NULL,
  `project2` varchar(500) NOT NULL,
  `project3` varchar(500) NOT NULL,
  `project4` varchar(500) NOT NULL,
  `project5` varchar(500) NOT NULL,
  `project6` varchar(500) NOT NULL,
  `project7` varchar(500) NOT NULL,
  `project8` varchar(500) NOT NULL,
  `project9` varchar(500) NOT NULL,
  `project10` varchar(500) NOT NULL,
  `skill1` varchar(100) NOT NULL,
  `skill2` varchar(100) NOT NULL,
  `skill3` varchar(100) NOT NULL,
  `skill4` varchar(100) NOT NULL,
  `skill5` varchar(100) NOT NULL,
  `skill6` varchar(100) NOT NULL,
  `skill7` varchar(100) NOT NULL,
  `skill8` varchar(100) NOT NULL,
  `skill9` varchar(100) NOT NULL,
  `skill10` varchar(100) NOT NULL,
  `certification1` varchar(500) NOT NULL,
  `certification2` varchar(500) NOT NULL,
  `certification3` varchar(500) NOT NULL,
  `certification4` varchar(500) NOT NULL,
  `certification5` varchar(500) NOT NULL,
  `certification6` varchar(500) NOT NULL,
  `certification7` varchar(500) NOT NULL,
  `certification8` varchar(500) NOT NULL,
  `certification9` varchar(500) NOT NULL,
  `certification10` varchar(500) NOT NULL,
  `accomplishment1` varchar(500) NOT NULL,
  `accomplishment2` text NOT NULL,
  `accomplishment3` text NOT NULL,
  `accomplishment4` text NOT NULL,
  `accomplishment5` text NOT NULL,
  `accomplishment6` text NOT NULL,
  `accomplishment7` text NOT NULL,
  `accomplishment8` text NOT NULL,
  `accomplishment9` text NOT NULL,
  `accomplishment10` text NOT NULL,
  `accomplishment11` text NOT NULL,
  `accomplishment12` text NOT NULL,
  `accomplishment13` text NOT NULL,
  `accomplishment14` text NOT NULL,
  `accomplishment15` text NOT NULL,
  `accomplishment16` text NOT NULL,
  `accomplishment17` text NOT NULL,
  `accomplishment18` text NOT NULL,
  `accomplishment19` text NOT NULL,
  `accomplishment20` text NOT NULL,
  `accomplishment21` text NOT NULL,
  `accomplishment22` text NOT NULL,
  `accomplishment23` text NOT NULL,
  `accomplishment24` text NOT NULL,
  `accomplishment25` text NOT NULL,
  `gitHub` text NOT NULL,
  `linkedin` text NOT NULL,
  `edumate` text NOT NULL,
  `website` text NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);