-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 06:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campuschatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `art_image` varchar(200) NOT NULL,
  `title` varchar(400) NOT NULL,
  `art_content` varchar(1000) NOT NULL,
  `created` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`art_id`, `user_id`, `art_image`, `title`, `art_content`, `created`) VALUES
(2, 4, 'images/blogimgs/5c51137d74a44eb99c1009c37cfb687e.jpg', 'The world as we see it 🤣', 'Just another random story don\'t judge👨‍⚖️', '1642609001'),
(3, 3, 'images/blogimgs/400138500091_377796.jpg', 'Who is watching The world?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, iusto modi. Aliquam, deleniti aliquid incidunt officiis nemo, voluptatum impedit at quae tenetur est nesciunt! Nobis nam similique doloribus ducimus non?', '1642609076'),
(4, 3, 'images/blogimgs/400206700297_127418.jpg', 'what Does the Future hold for us All?', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, iusto modi. Aliquam, deleniti aliquid incidunt officiis nemo, voluptatum impedit at quae tenetur est nesciunt! Nobis nam similique doloribus ducimus non?\r\nLorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eaque eligendi illum reprehenderit, aperiam atque delectus quo animi totam et, quis cum alias ex minus magnam beatae voluptatum id officiis.', '1642609127');

-- --------------------------------------------------------

--
-- Table structure for table `article_likes`
--

CREATE TABLE `article_likes` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article_likes`
--

INSERT INTO `article_likes` (`id`, `article_id`, `auth_id`, `sender_id`) VALUES
(1, 1, 2, 2),
(2, 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `comment_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `comment_content`) VALUES
(3, '9', '3', 'Everything You know is a lie'),
(4, '11', '7', 'Really? 🤣🤣🤣'),
(5, '7', '7', '👍');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nameofevent` varchar(50) NOT NULL,
  `organisers` varchar(50) NOT NULL,
  `picofposter` varchar(200) NOT NULL,
  `postee` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `about` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `audience` varchar(50) NOT NULL DEFAULT 'Anyone can attend',
  `time` time NOT NULL,
  `startdate` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `nameofevent`, `organisers`, `picofposter`, `postee`, `venue`, `about`, `contact`, `audience`, `time`, `startdate`, `enddate`) VALUES
(1, 0, 'Elijah Noel', 'Accusamus proident ', 'icons/default/avatar.png', 'dopazyvi', 'Ipsa voluptatem al', 'Exercitationem occae', '+1 (417) 704-2691', 'Sed modi ea fugiat c', '11:19:00', '1973-04-28', '2014-01-10'),
(2, 0, 'Shafira Hendrix', 'Suscipit incid', 'images/profilepics/500091100989_296563.jpg', 'ladub', 'Voluptas ', 'Teaching you all the techniques', '+1 (176) 517-6539', 'Anyone interested', '11:39:00', '2013-02-06', '1989-10-20'),
(3, 0, 'Web Development for all', 'Nostrum earum proide', 'images/profilepics/500091100989_296563.jpg', 'ladub', 'Consequatur nostrud ', 'Voluptatem consequun', '+1 (533) 152-5295', 'Cillum iusto aut atq', '05:12:00', '2000-04-15', '2012-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`follow_id`, `sender_id`, `receiver_id`) VALUES
(1, 2, 2),
(2, 6, 6),
(3, 6, 6),
(4, 6, 6),
(5, 6, 3),
(6, 6, 5),
(7, 6, 3),
(8, 6, 3),
(9, 6, 3),
(10, 7, 7),
(11, 7, 7),
(12, 7, 7),
(13, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_desc` mediumtext NOT NULL,
  `post_image` varchar(1000) NOT NULL,
  `created` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_desc`, `post_image`, `created`) VALUES
(7, 2, '', 'images/425615319_183442.jpg', '1642606108'),
(8, 4, 'Beautiful Nature🌿🍃', 'images/2005961.jpg', '1642608847'),
(9, 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, iusto modi. Aliquam, deleniti aliquid incidunt officiis nemo, voluptatum impedit at quae tenetur est nesciunt! Nobis nam similique doloribus ducimus non?', 'images/500073400959_335874.jpg', '1642609167'),
(10, 5, 'The Web is progressing Are you? Read More on the blog', 'images/500106200511_123254.jpg', '1642609259'),
(11, 6, 'How to travel the world without actually travelling', 'images/500172900657_20935.jpg', '1642609452'),
(12, 7, 'Learn Graphic designing for free 🆓, checkout the events section for details, see you there ', 'images/10ab0971f06141ad8203a798cfa585a7.jpg', '1642610044');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`like_id`, `post_id`, `r_id`, `s_id`) VALUES
(1, 7, 2, 2),
(2, 8, 4, 4),
(3, 7, 2, 4),
(4, 11, 6, 6),
(5, 12, 7, 7),
(6, 12, 7, 7),
(7, 12, 7, 7),
(8, 12, 7, 7),
(9, 12, 7, 7),
(10, 12, 7, 7),
(11, 12, 7, 7),
(12, 12, 7, 7),
(13, 12, 7, 7),
(14, 12, 7, 7),
(15, 12, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `profile_image` varchar(150) NOT NULL DEFAULT 'icons/default/avatar.png',
  `description` text DEFAULT NULL,
  `level` int(3) NOT NULL DEFAULT 300,
  `department` varchar(150) DEFAULT NULL,
  `nicknames` varchar(150) DEFAULT NULL,
  `interests` varchar(150) DEFAULT NULL,
  `date_joined` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `fname`, `lname`, `profile_image`, `description`, `level`, `department`, `nicknames`, `interests`, `date_joined`) VALUES
(1, 'natepar', 'tofupugij@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'TaShya Rojas', 'Cora Rosa', 'icons/default/avatar.png', NULL, 300, NULL, NULL, NULL, '1642605841'),
(2, 'dopazyvi', 'viven@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Nero Sandoval', 'Kenneth Ramos', 'icons/default/avatar.png', NULL, 300, NULL, NULL, NULL, '1642605862'),
(3, 'mumaven', 'hijum@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '	Laura Wilcox', 'Hayes Wood', 'images/profilepics/400084400861_454405.jpg', '', 0, '', '', '', '1642607859'),
(4, 'Anime sky', 'ked@gmail.com', 'f7571f6e72d34243db493490888897e4', '	Linda', 'Maria ', 'images/profilepics/ab6761610000e5eb80cecb2a965799384033867f.jpeg.jpg', '', 0, '', '', '', '1642608798'),
(5, 'ladub', 'zaninere@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '	Sonia Stephens', 'Fitzgerald Maynard', 'images/profilepics/500091100989_296563.jpg', '', 0, '', '', '', '1642609217'),
(6, 'kawudo', 'fehin@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Gary Harvey', 'Dorothy Spears', 'icons/default/avatar.png', NULL, 300, NULL, NULL, NULL, '1642609419'),
(7, 'Godlove', 'ething215@gmail.com', 'f7571f6e72d34243db493490888897e4', '				Akale', 'Godlove', 'images/profilepics/Snapchat-1231631214.jpg', '', 400, 'Computer science 💻', 'Nagx', 'Programming', '1642609602');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `article_likes`
--
ALTER TABLE `article_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `article_likes`
--
ALTER TABLE `article_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
