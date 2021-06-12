-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2021 at 01:17 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eduhub-sairam`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplishment`
--

CREATE TABLE `accomplishment` (
  `id` int(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accomplishment`
--

INSERT INTO `accomplishment` (`id`, `owner`, `title`, `description`, `image`, `url`, `time`) VALUES
(4, '123@gmail.com', 'Drawing in Insta', 'Drawing based on topic', 'IMG-60c48f10878657.29990756.webp', '', '2021-06-12 16:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `owner`, `title`, `provider`, `description`, `image`, `url`, `time`) VALUES
(4, '123@gmail.com', 'Python', '', 'Python certificate', 'IMG-60c4608da48122.43950227.jpg', '', '2021-06-12 12:51:49'),
(5, '123@gmail.com', 'jjjjj', '', 'jkkkk', 'IMG-60c461693df0e5.22190214.jpg', '', '2021-06-12 12:55:29'),
(6, '123@gmail.com', '', '', '', 'IMG-60c4619d7408e8.83340486.jpg', '', '2021-06-12 12:56:21'),
(7, '123@gmail.com', '', '', '', 'IMG-60c4621362b414.40262060.jpg', '', '2021-06-12 12:58:19'),
(8, '123@gmail.com', '', '', '', 'IMG-60c4626df1bba0.71713961.jpg', '', '2021-06-12 12:59:50'),
(9, '123@gmail.com', 'a', 'aa', 'aaaa', 'IMG-60c463054342b4.56961312.jpg', 'aaa', '2021-06-12 13:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(10) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `question`, `answer`, `time`) VALUES
(1, 'where is the Institution?', 'Chennai', '2021-05-14 15:02:16'),
(2, 'What is eduhub?', 'Online platform for Sairam', '2021-05-14 15:02:16');

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
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `provider` varchar(200) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `owner`, `title`, `provider`, `start`, `end`, `description`, `image`, `url`, `time`) VALUES
(10, '123@gmail.com', 'kl', 'pdf', '2021-06-01', '2021-06-08', 'ssss', 'IMG-60c46ac7ab38a0.78321261.jpg', 'aaaaa', '2021-06-12 13:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT 'eduhub-sairam',
  `subject` varchar(255) DEFAULT NULL,
  `sender_title` varchar(50) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `email`, `receiver`, `subject`, `sender_title`, `message`, `time`) VALUES
(1, 'jr', 'e8ec088@sairamtap.edu.in', 'eduhub-sairam', 'quarry', 'stud', 'yes it is', '2021-06-04 23:11:09'),
(42, '', '', 'eduhub-sairam', '', '', '', '2021-06-04 23:13:24'),
(43, '', '', 'eduhub-sairam', '', '', '', '2021-06-04 23:15:59'),
(44, 'JR', 'e8ec088@sairamtap.edu.in', 'eduhub-sairam', 'Rechecking of form', 'student', 'Yes it is working', '2021-06-04 23:16:45'),
(45, 'JR', 'e8ec088@sairamtap.edu.in', 'eduhub-sairam', 'Rechecking of form', 'student', 'Yes it is working', '2021-06-04 23:17:37'),
(46, 'JR', 'e8ec088@sairamtap.edu.in', 'eduhub-sairam', 'Rechecking of form', 'student', 'Yes it is working', '2021-06-04 23:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `title` text,
  `description` text,
  `meta` varchar(255) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `lastaccess` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `title`, `description`, `meta`, `url`, `lastaccess`) VALUES
(1, 'Welcome Page', 'WELCOME TO EDUHUB', 'welcome page landing page index page', 'a', 'index.php', '2021-05-10 03:57:00'),
(2, 'Home page', 'Home | Learn,Connect,Thrive', '', '', 'home.php', '2021-05-10 04:58:37'),
(3, 'Profile', 'Profile Page | Experience the Advancement', NULL, NULL, NULL, '2021-05-10 05:00:43'),
(4, 'Explore Page', 'Explore the Sairam and Innovations', NULL, NULL, NULL, '2021-05-10 05:00:43'),
(5, 'settings Page', 'Settings | Correct Your World', NULL, NULL, NULL, '2021-05-10 05:01:34'),
(6, 'about Page', 'About Us | Future of Innovation', NULL, NULL, NULL, '2021-05-10 05:02:15'),
(7, 'Login Page', 'Login to Make Wonders', NULL, NULL, NULL, '2021-05-10 05:04:00'),
(8, 'Signup Page', 'Signup For the World of Innovations', NULL, NULL, NULL, '2021-05-10 05:04:00'),
(9, 'Help Page', 'Contact Us | Love to Talk with you', NULL, NULL, NULL, '2021-05-12 09:49:31'),
(10, 'New Post Page', 'Create & Contribute !!!', 'Feed Your Innovation !', NULL, 'Newpost.php', '2021-06-12 08:19:10'),
(11, 'new_acc', 'Live to Achieve!!!', 'Add Your Achievement !', NULL, 'newacc.php', '2021-06-12 08:20:21'),
(12, 'new certi', 'Certifications for Excellence', 'Add Your Certification !', NULL, 'newcerti.php', '2021-06-12 08:20:29'),
(13, 'Experience Page', 'Learn From Experience', 'Add Your Experience !', NULL, 'newexperience.php', '2021-06-12 08:20:39'),
(14, 'projects', 'Try and Repeat', 'Add Your Projects !', NULL, 'new project.php', '2021-06-12 08:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `post_owner` varchar(100) NOT NULL,
  `post_title` varchar(200) DEFAULT NULL,
  `post_description` varchar(500) DEFAULT NULL,
  `tag1` varchar(50) DEFAULT NULL,
  `tag2` varchar(50) DEFAULT NULL,
  `mention` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `post_image` varchar(200) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_owner`, `post_title`, `post_description`, `tag1`, `tag2`, `mention`, `url`, `post_image`, `time`) VALUES
(3, '123@gmail.com', 'Launch of Eduhub', 'This is the most awaited platform in Sairam circle which plays most important role', '#Web', '#sairam', 'Jayachandran Ramadoss', '', 'IMG-60c3a1e3a719c7.97700247.png', '2021-06-12 11:26:34'),
(4, '123@gmail.com', 'My Achievement', 'It is about a website', '', '', '', '', 'IMG-60c44c3b78c717.93859312.jpg', '2021-06-12 11:26:34'),
(5, '123@gmail.com', 'jr', 'jr first', '', '', '', '', 'IMG-60c45d2b0438b2.78444803.jpg', '2021-06-12 12:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `members` varchar(250) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `owner`, `title`, `members`, `description`, `image`, `url`, `time`) VALUES
(10, '123@gmail.com', 'eduhub', 'sir ,jr,sssr', 'aaaa', 'IMG-60c467256ab3c3.80153569.jpg', 'aaaaa', '2021-06-12 13:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(100) NOT NULL,
  `skill_owner` varchar(200) NOT NULL,
  `skill_name` varchar(350) DEFAULT NULL,
  `skill_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_owner`, `skill_name`, `skill_type`) VALUES
(6, '123@gmail.com', 'COMPASSIONATE', 'personal'),
(7, '123@gmail.com', 'LEADERSHIP', 'personal'),
(8, '123@gmail.com', 'PYTHON', 'technical'),
(9, '123@gmail.com', 'NET', 'technical'),
(10, '123@gmail.com', 'EFFECTIVE COMMUNICATOR', 'personal'),
(11, '123@gmail.com', 'INSIGHTFUL', 'personal'),
(12, '123@gmail.com', 'JAVA', 'technical'),
(13, '123@gmail.com', 'LINUX', 'technical'),
(14, 'e8ec088@sairamtap.edu.in', 'EFFECTIVE COMMUNICATOR', 'personal'),
(15, 'e8ec088@sairamtap.edu.in', 'JAVA', 'technical'),
(16, '123@gmail.com', 'COMPASSIONATE', 'personal'),
(17, '123@gmail.com', 'EFFECTIVE COMMUNICATOR', 'personal'),
(18, '123@gmail.com', 'LEADERSHIP', 'personal'),
(19, '123@gmail.com', 'SQL', 'technical'),
(20, '123@gmail.com', 'JAVA', 'technical'),
(21, '123@gmail.com', 'LINUX', 'technical');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT '',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_image` varchar(50) DEFAULT NULL,
  `cover_image` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `featured1` varchar(500) DEFAULT NULL,
  `featured2` varchar(500) DEFAULT NULL,
  `featured3` varchar(500) DEFAULT NULL,
  `skill1` varchar(100) DEFAULT NULL,
  `skill2` varchar(100) DEFAULT NULL,
  `skill3` varchar(100) DEFAULT NULL,
  `github` text,
  `linkedin` text,
  `edumate` text,
  `recovery` varchar(255) DEFAULT NULL,
  `website` text,
  `two-fact-auth` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `first_name`, `last_name`, `status`, `last_seen`, `profile_image`, `cover_image`, `gender`, `dept`, `dob`, `mobile`, `city`, `institution`, `title`, `bio`, `featured1`, `featured2`, `featured3`, `skill1`, `skill2`, `skill3`, `github`, `linkedin`, `edumate`, `recovery`, `website`, `two-fact-auth`) VALUES
('1234@gmail.com', '123', 'j', 'r', 0, '2021-05-09 15:46:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('123@gmail.com', '123', 'Jayachandran', 'Ramadoss', 1, '2021-06-12 13:06:25', 'IMG-60c4b3661f4202.62513619.webp', NULL, NULL, 'ECE', '', '738482467', 'Chennai', 'Sri Sairam Engineering College', 'Student Intern at Zoho Corp', 'Web Developer', 'Web development', 'Summer Intern At Zoho', 'Smart India Hackathon Winner', 'Array', 'Array', 'volleyball , chess', NULL, NULL, NULL, '', NULL, NULL),
('1@gmail.com', '123', '1', '2', 1, '2021-05-10 05:26:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('e8ec088@sairamtap.edu.in', '123', 'Jayachandran', 'Ramadoss', 1, '2021-05-12 12:58:56', NULL, NULL, 'male', 'ECE', '03/08/2001', '758482464', 'Chennai', 'Sri Sairam engineering college ', 'student', 'wxwzedfcsdsc', 'Full Stack Developer', 'Smart India Hackathon Winner', 'won in volleyball championship', 'Array', 'Array', 'Volleyball, Cricket', 'https://github.com/jrjakiro', '', '', '123@gmail.com', '', NULL),
('jrjakiro2001@gmail.com', '123', 'J', 'R', 0, '2021-05-10 05:09:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomplishment`
--
ALTER TABLE `accomplishment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomplishment`
--
ALTER TABLE `accomplishment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
