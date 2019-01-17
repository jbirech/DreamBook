-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 08:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(1, 'sweet image', 'captain_africa', 'captain_africa', '2018-10-10 22:24:39', 'no', 108),
(2, 'Now making millions eeh', 'jana_jana_1_2', 'jana_jana_1_2', '2018-10-14 23:52:52', 'no', 110),
(3, 'yeah', 'jana_jana_1_2', 'jana_jana_1_2', '2018-10-14 23:53:02', 'no', 110),
(4, 'yes', 'captain_africa', 'captain_africa', '2018-10-18 12:53:00', 'no', 106),
(5, 'shush!!!\r\n', 'captain_africa', 'captain_africa', '2018-12-08 22:18:43', 'no', 65),
(6, '', 'captain_africa', 'captain_africa', '2018-12-08 22:30:11', 'no', 123),
(7, 'j\'j\r\n', 'jana_jana_1_2', 'jana_jana_1_2', '2018-12-12 15:11:46', 'no', 37),
(8, 'ghfcuc', 'jana_jana_1_2', 'jana_jana_1_2', '2018-12-12 15:11:54', 'no', 37),
(9, 'iityftydftydty', 'jana_jana_1_2', 'jana_jana_1_2', '2018-12-12 15:11:59', 'no', 37);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(19, 'jana_jana_1_2', 0),
(32, 'jbirech', 0),
(33, 'jbirech', 0),
(39, 'jana_jana_1_2', 0),
(41, 'captain_africa', 0),
(42, 'captain_africa', 0),
(43, 'captain_africa', 0),
(44, 'captain_africa', 0),
(45, 'captain_africa', 0),
(46, 'captain_africa', 0),
(47, 'captain_africa', 0),
(48, 'captain_africa', 0),
(49, 'captain_africa', 0),
(50, 'captain_africa', 0),
(51, 'captain_africa', 0),
(52, 'captain_africa', 0),
(53, 'captain_africa', 0),
(54, 'captain_africa', 0),
(56, 'captain_africa', 80),
(63, 'captain_africa', 79),
(64, 'captain_africa', 78),
(66, 'captain_africa', 77),
(67, 'captain_africa', 81),
(69, 'captain_africa', 89),
(70, 'captain_africa', 104),
(71, 'captain_africa', 107),
(72, 'captain_africa', 101),
(73, 'captain_africa', 93),
(75, 'prince_joe', 79),
(79, 'captain_africa', 106),
(80, 'captain_africa', 66),
(81, 'captain_africa', 66),
(82, 'captain_africa', 57),
(83, 'captain_africa', 58),
(84, 'captain_africa', 58),
(85, 'jana_jana_1_2', 39),
(86, 'jana_jana_1_2', 37);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(1, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 17:46:29', 'yes', 'yes', 'no'),
(2, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:05:42', 'yes', 'yes', 'no'),
(3, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:07:13', 'yes', 'yes', 'no'),
(4, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:07:20', 'yes', 'yes', 'no'),
(5, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:07:22', 'yes', 'yes', 'no'),
(6, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:07:25', 'yes', 'yes', 'no'),
(7, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:07:27', 'yes', 'yes', 'no'),
(8, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:08:00', 'yes', 'yes', 'no'),
(9, 'jbirech', 'captain_africa', 'Wassup my dude', '2018-08-31 18:08:04', 'yes', 'yes', 'no'),
(10, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:08:17', 'yes', 'yes', 'no'),
(11, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:12:37', 'yes', 'yes', 'no'),
(12, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:12:40', 'yes', 'yes', 'no'),
(13, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:13:54', 'yes', 'yes', 'no'),
(14, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:13:57', 'yes', 'yes', 'no'),
(15, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:15:50', 'yes', 'yes', 'no'),
(16, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:15:54', 'yes', 'yes', 'no'),
(17, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:16:51', 'yes', 'yes', 'no'),
(18, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:22:34', 'yes', 'yes', 'no'),
(19, 'jbirech', 'captain_africa', 'my niger my niger ...', '2018-08-31 18:26:42', 'yes', 'yes', 'no'),
(20, 'jbirech', 'captain_africa', 'dude\r\n', '2018-08-31 18:27:09', 'yes', 'yes', 'no'),
(21, 'jbirech', 'captain_africa', 'what you upto now', '2018-09-01 02:41:47', 'yes', 'yes', 'no'),
(22, 'jbirech', 'captain_africa', 'what you upto now', '2018-09-01 02:41:52', 'yes', 'yes', 'no'),
(23, 'jbirech', 'captain_africa', 'what you upto now', '2018-09-01 02:49:05', 'yes', 'yes', 'no'),
(24, 'jbirech', 'captain_africa', 'what you upto now', '2018-09-01 03:00:48', 'yes', 'yes', 'no'),
(25, 'jbirech', 'captain_africa', 'what you upto now', '2018-09-01 03:26:42', 'yes', 'yes', 'no'),
(26, 'captain_africa', 'jbirech', 'what\'s all this?\r\n', '2018-09-01 22:23:28', 'yes', 'yes', 'no'),
(27, 'captain_africa', 'jbirech', 'this should show right here where are you at?', '2018-09-01 22:24:04', 'yes', 'yes', 'no'),
(28, 'captain_africa', 'captain_africa', 'yooh are you working now', '2018-09-02 13:35:22', 'yes', 'yes', 'no'),
(29, 'captain_africa', 'captain_africa', 'how about now?', '2018-09-02 13:35:43', 'yes', 'yes', 'no'),
(30, 'jbirech', 'captain_africa', 'aheem', '2018-09-02 13:36:38', 'yes', 'yes', 'no'),
(31, 'jana_jana_1_2', 'jana_jana_1_2', 'jana\r\n', '2018-09-03 14:15:27', 'yes', 'yes', 'no'),
(32, 'jbirech', 'prince_joe_1', 'Wassup dude\r\n', '2018-09-04 13:41:31', 'no', 'yes', 'no'),
(33, 'jana_jana_1_2_3', 'captain_africa', 'jana', '2018-09-07 22:30:24', 'no', 'no', 'no'),
(34, 'captain_africa', 'captain_africa', 'hihi', '2018-09-11 14:49:19', 'yes', 'yes', 'no'),
(35, 'captain_africa', 'jbirech', 'wha\'ts going on', '2018-09-12 16:13:45', 'yes', 'yes', 'no'),
(36, 'jbirech', 'captain_africa', 'j', '2018-09-12 16:18:37', 'no', 'no', 'no'),
(37, 'jbirech', 'captain_africa', 'j', '2018-09-12 16:22:04', 'no', 'no', 'no'),
(38, 'jbirech', 'captain_africa', 'j', '2018-09-12 16:22:06', 'no', 'no', 'no'),
(39, 'jbirech', 'captain_africa', 'j', '2018-09-12 16:22:08', 'no', 'no', 'no'),
(40, 'jbirech', 'captain_africa', 'j', '2018-09-12 16:28:32', 'no', 'no', 'no'),
(41, 'captain_africa', 'captain_africa', 'hello', '2018-09-12 16:32:31', 'yes', 'yes', 'no'),
(42, 'captain_africa', 'captain_africa', 'hello', '2018-09-12 16:32:36', 'yes', 'yes', 'no'),
(43, 'jbirech', 'captain_africa', 'what', '2018-09-12 16:39:50', 'no', 'no', 'no'),
(44, 'jbirech', 'captain_africa', 'what', '2018-09-12 16:46:16', 'no', 'no', 'no'),
(45, 'jbirech', 'captain_africa', 'what', '2018-09-12 16:47:12', 'no', 'no', 'no'),
(46, 'captain_africa', 'captain_africa', 'wha\'ts going on', '2018-09-12 16:49:04', 'yes', 'yes', 'no'),
(47, 'captain_africa', 'captain_africa', 'wha\'ts going on', '2018-09-12 16:49:09', 'yes', 'yes', 'no'),
(48, 'jbirech', 'captain_africa', 'what', '2018-09-12 16:49:25', 'no', 'no', 'no'),
(49, 'captain_africa', 'captain_africa', 'wha\'ts going on', '2018-09-12 17:34:26', 'yes', 'yes', 'no'),
(50, 'captain_africa', 'captain_africa', 'y', '2018-10-10 22:09:58', 'yes', 'yes', 'no'),
(51, 'captain_africa', 'captain_africa', 'tllt', '2018-10-10 22:10:04', 'yes', 'yes', 'no'),
(52, 'captain_africa', 'captain_africa', 'tllt', '2018-10-10 22:10:20', 'yes', 'yes', 'no'),
(53, 'jana_jana', 'captain_africa', 'hi', '2018-10-10 22:42:03', 'no', 'no', 'no'),
(54, 'jana_jana_1_2', 'jana_jana_1_2', 'y', '2018-10-10 22:43:18', 'yes', 'yes', 'no'),
(55, 'captain_africa', 'jana_jana_1_2', 'yoo cap', '2018-10-10 22:43:55', 'yes', 'yes', 'no'),
(56, 'captain_africa', 'jana_jana_1_2', 'wasgud yoo', '2018-10-10 22:44:25', 'yes', 'yes', 'no'),
(57, 'jana_jana_1_2', 'captain_africa', 'dasd', '2018-10-10 22:44:47', 'yes', 'yes', 'no'),
(58, 'captain_africa', 'captain_africa', 'yoo cap', '2018-10-10 22:44:54', 'yes', 'yes', 'no'),
(59, 'captain_africa', 'jana_jana_1_2', 'y\r\n', '2018-10-14 21:22:48', 'yes', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewd` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`, `opened`, `viewd`) VALUES
(1, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:42:15', 'no', 'no'),
(2, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:42:17', 'no', 'no'),
(3, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:42:19', 'no', 'no'),
(4, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:42:20', 'no', 'no'),
(5, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:42:21', 'no', 'no'),
(6, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:42:22', 'no', 'no'),
(7, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=79', '2018-09-07 22:42:24', 'no', 'no'),
(8, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=78', '2018-09-07 22:42:26', 'no', 'no'),
(9, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=77', '2018-09-07 22:42:29', 'no', 'no'),
(10, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=77', '2018-09-07 22:42:37', 'no', 'no'),
(11, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=81', '2018-09-07 22:52:07', 'no', 'no'),
(12, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=89', '2018-09-08 00:08:43', 'no', 'no'),
(13, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=89', '2018-09-08 00:08:46', 'no', 'no'),
(14, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=104', '2018-09-08 01:09:57', 'no', 'no'),
(15, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=107', '2018-09-10 17:58:40', 'no', 'no'),
(16, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=101', '2018-09-10 18:03:59', 'no', 'no'),
(17, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=93', '2018-09-11 14:17:40', 'no', 'no'),
(18, '', 'prince_joe', 'Prince Joeliked your post', 'post.php?id=79', '2018-09-11 20:41:10', 'no', 'no'),
(19, '', 'prince_joe', 'Prince Joeliked your post', 'post.php?id=79', '2018-09-11 20:45:35', 'no', 'no'),
(20, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=106', '2018-10-10 21:49:28', 'no', 'no'),
(21, '', 'captain_africa', 'Captain Africaliked your post', 'post.php?id=106', '2018-10-10 21:49:31', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`) VALUES
(1, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:39:48', '', 'no', 0, ''),
(3, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:39:55', '', 'no', 0, ''),
(4, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:39:59', '', 'no', 0, ''),
(5, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:40:06', '', 'no', 0, ''),
(6, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:40:10', '', 'no', 0, ''),
(7, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:40:14', '', 'no', 0, ''),
(8, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:40:19', '', 'no', 0, ''),
(9, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:41:02', 'no', 'no', 0, ''),
(10, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 15:41:07', 'no', 'no', 0, ''),
(11, 'hsJ', 'jana_jana_1_2', 'none', '2018-08-19 16:53:33', 'no', 'no', 0, ''),
(12, 'hello', 'jana_jana_1_2', 'none', '2018-08-19 16:53:42', 'no', 'no', 0, ''),
(13, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:55:54', 'no', 'no', 0, ''),
(14, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:58:32', 'no', 'no', 0, ''),
(15, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:58:36', 'no', 'no', 0, ''),
(16, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:58:40', 'no', 'no', 0, ''),
(17, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:59:21', 'no', 'no', 0, ''),
(18, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:59:26', 'no', 'no', 0, ''),
(19, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 16:59:43', 'no', 'no', 0, ''),
(20, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:02:02', 'no', 'no', 0, ''),
(21, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:02:06', 'no', 'no', 0, ''),
(22, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:02:10', 'no', 'no', 0, ''),
(23, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:02:25', 'no', 'no', 0, ''),
(24, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:02:28', 'no', 'no', 0, ''),
(25, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:02:31', 'no', 'no', 0, ''),
(26, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:03:53', 'no', 'no', 0, ''),
(27, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:04:00', 'no', 'no', 0, ''),
(28, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:04:22', 'no', 'no', 0, ''),
(29, 'My name is Joe Birech ', 'jana_jana_1_2', 'none', '2018-08-19 17:05:59', 'no', 'no', 0, ''),
(30, 'My name is Joe Birech ', '', 'none', '2018-08-19 17:06:09', 'no', 'no', 0, ''),
(31, 'hello', '', 'none', '2018-08-19 17:06:10', 'no', 'yes', 0, ''),
(32, 'wolalaâ€¦.. lalalaa\r\nwoaaaaa', 'jana_jana_1_2', 'none', '2018-08-19 22:38:35', 'no', 'no', 0, ''),
(33, 'not bad for a start eeh, no?', 'jana_jana_1_2', 'none', '2018-08-19 22:39:21', 'no', 'no', 0, ''),
(34, 'not bad for a start eeh, no?', 'jana_jana_1_2', 'none', '2018-08-19 22:39:49', 'no', 'no', 0, ''),
(35, 'not bad for a start eeh, no?', 'jana_jana_1_2', 'none', '2018-08-19 22:39:56', 'no', 'no', 0, ''),
(36, 'fjpafj', 'jana_jana_1_2', 'none', '2018-08-19 22:40:43', 'no', 'no', 0, ''),
(37, 'el matadoe', 'jana_jana_1_2', 'none', '2018-08-19 22:40:53', 'no', 'no', 1, ''),
(38, 'kik kim', 'jana_jana_1_2', 'none', '2018-08-19 22:41:00', 'no', 'yes', 0, ''),
(39, 'posy\r\n', 'jana_jana_1_2', 'none', '2018-08-19 22:41:21', 'no', 'no', 1, ''),
(40, 'load', 'jana_jana_1_2', 'none', '2018-08-19 22:41:26', 'no', 'no', 0, ''),
(41, 'load', 'jana_jana_1_2', 'none', '2018-08-19 22:44:11', 'no', 'no', 0, ''),
(42, 'waassss', 'jana_jana_1_2', 'none', '2018-08-20 12:41:47', 'no', 'no', 0, ''),
(43, 'habari gani', '', 'none', '2018-08-20 17:15:00', 'no', 'no', 0, ''),
(44, 'wassup mah man', 'prince_joe', 'none', '2018-08-20 17:16:54', 'no', 'no', 0, ''),
(45, 'wassup mah man', 'prince_joe', 'none', '2018-08-21 00:13:35', 'no', 'no', 0, ''),
(46, 'walalala', 'prince_joe', 'none', '2018-08-21 00:13:51', 'no', 'no', 0, ''),
(47, 'say something i\'m giving up on you', 'prince_joe', 'none', '2018-08-21 00:14:08', 'no', 'no', 0, ''),
(48, 'come by my place tommorrow', 'prince_joe', 'none', '2018-08-21 00:14:25', 'no', 'no', 0, ''),
(49, 'you winn \r\n', 'prince_joe', 'none', '2018-08-21 00:14:33', 'no', 'no', 0, ''),
(50, 'come slow ', 'prince_joe', 'none', '2018-08-21 00:14:40', 'no', 'no', 0, ''),
(51, 'why do you still have some glitches', 'prince_joe', 'none', '2018-08-21 00:15:15', 'no', 'no', 0, ''),
(52, 'captain Africa on the house people', 'captain_africa', 'none', '2018-08-21 00:16:46', 'no', 'no', 0, ''),
(53, 'why do you still have some glitches', '', 'none', '2018-08-21 00:17:13', 'no', 'yes', 0, ''),
(54, 'captain on the house people', 'captain_africa', 'none', '2018-08-21 22:16:39', 'no', 'no', 0, ''),
(55, 'captain on the house people', 'captain_africa', 'none', '2018-08-21 22:45:51', 'no', 'no', 0, ''),
(56, 'captain on the house people', 'captain_africa', 'none', '2018-08-21 22:46:00', 'no', 'no', 0, ''),
(57, 'captain on the house people', 'captain_africa', 'none', '2018-08-21 22:46:13', 'no', 'no', 1, ''),
(58, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-23 23:16:15', 'no', 'no', 2, ''),
(59, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-23 23:20:11', 'no', 'no', 0, ''),
(60, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-24 14:30:03', 'no', 'no', 0, ''),
(61, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-24 14:34:04', 'no', 'no', 0, ''),
(62, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-24 14:34:40', 'no', 'no', 0, ''),
(63, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-24 14:39:48', 'no', 'no', 0, ''),
(64, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-24 14:39:51', 'no', 'no', 0, ''),
(65, 'i\'m back people\r\ndeal with it!!!', 'captain_africa', 'none', '2018-08-24 14:39:53', 'no', 'no', 0, ''),
(66, 'b', 'captain_africa', 'none', '2018-08-24 14:40:05', 'no', 'no', 2, ''),
(67, 'b', 'captain_africa', 'none', '2018-08-24 14:40:08', 'no', 'no', 0, ''),
(68, 'Hello C', 'captain_africa', 'none', '2018-08-28 22:57:55', 'no', 'no', 0, ''),
(69, 'Hello C', 'captain_africa', 'none', '2018-08-28 22:58:06', 'no', 'no', 0, ''),
(70, 'waddup my people', 'jbirech', 'none', '2018-08-29 16:21:25', 'no', 'no', 0, ''),
(71, 'long long time\r\n', 'jbirech', 'none', '2018-08-29 16:21:40', 'no', 'no', 0, ''),
(72, 'wassup my dude', 'captain_africa', 'jana', '2018-08-30 22:28:34', 'no', 'no', 0, ''),
(73, 'Here I am.', 'captain_africa', 'jbirech', '2018-09-01 16:58:40', 'no', 'no', 0, ''),
(74, 'it\'s me\r\n', 'captain_africa', 'none', '2018-09-01 22:13:18', 'no', 'no', 0, ''),
(75, 'what\'chu say?', 'captain_africa', 'jbirech', '2018-09-01 22:16:47', 'no', 'no', 0, ''),
(76, 'bUGS BUGS BUGS bugs bugs bugs', 'captain_africa', 'none', '2018-09-04 09:35:08', 'no', 'no', 0, ''),
(77, 'Good morning ladies and Gentlemen', 'prince_joe_1', 'none', '2018-09-04 13:22:32', 'no', 'no', 1, ''),
(78, 'Good morning ladies and Gentlemen', 'prince_joe_1', 'none', '2018-09-04 13:40:26', 'no', 'no', 1, ''),
(79, 'Still some work to be done here ', 'prince_joe_1', 'none', '2018-09-04 13:41:07', 'no', 'no', 1, ''),
(80, 'got yuh bugy bugy ', 'captain_africa', 'none', '2018-09-07 14:07:17', 'no', 'no', 0, ''),
(81, 'Where you at Bug', 'captain_africa', 'none', '2018-09-07 14:07:35', 'no', 'no', 1, ''),
(82, 'If it\'s a Friday you know it\'s welcoming the <br><iframe width=\'420\' height=\'315\' src=\'Sabbath.\r\nhttps://www.youtube.com/embed/jsoAe1zVLj8\'></iframe><br>', 'captain_africa', 'none', '2018-09-07 23:49:38', 'no', 'yes', 0, ''),
(83, 'If it\'s a Friday you know it\'s welcoming the <br><iframe width=\'420\' height=\'315\' src=\'Sabbath.\r\nhttps://www.youtube.com/embed/jsoAe1zVLj8\'></iframe><br>', 'captain_africa', 'none', '2018-09-07 23:49:44', 'no', 'yes', 0, ''),
(84, 'If it\'s a Friday you know it\'s welcoming the <br><iframe width=\'420\' height=\'315\' src=\'Sabbath.\r\nhttps://www.youtube.com/embed/jsoAe1zVLj8\'></iframe><br>', 'captain_africa', 'none', '2018-09-07 23:49:49', 'no', 'yes', 0, ''),
(85, 'If it\'s a Friday you know it\'s welcoming the <br><iframe width=\'420\' height=\'315\' src=\'Sabbath.\r\nhttps://www.youtube.com/embed/jsoAe1zVLj8\'></iframe><br>', 'captain_africa', 'none', '2018-09-07 23:53:21', 'no', 'yes', 0, ''),
(86, 'here we go again', 'captain_africa', 'none', '2018-09-07 23:53:38', 'no', 'yes', 0, ''),
(87, 'here we go again', 'captain_africa', 'none', '2018-09-07 23:53:41', 'no', 'no', 0, ''),
(88, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/jsoAe1zVLj8\'></iframe><br>', 'captain_africa', 'none', '2018-09-08 00:00:12', 'no', 'yes', 0, ''),
(89, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/jsoAe1zVLj8\'></iframe><br>', 'captain_africa', 'none', '2018-09-08 00:06:45', 'no', 'yes', 1, ''),
(90, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 00:47:28', 'no', 'no', 0, ''),
(91, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 00:49:15', 'no', 'yes', 0, ''),
(92, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 00:49:18', 'no', 'yes', 0, ''),
(93, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 00:49:20', 'no', 'yes', 1, ''),
(94, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 00:49:28', 'no', 'yes', 0, ''),
(95, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 00:52:27', 'no', 'yes', 0, ''),
(96, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:02:46', 'no', 'yes', 0, ''),
(97, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:02:50', 'no', 'yes', 0, ''),
(98, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:02:52', 'no', 'yes', 0, ''),
(99, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:02:58', 'no', 'yes', 0, ''),
(100, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:04:46', 'no', 'yes', 0, ''),
(101, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:04:49', 'no', 'yes', 1, ''),
(102, 'What\'s trending today?', 'captain_africa', 'none', '2018-09-08 01:06:01', 'no', 'yes', 0, ''),
(103, 'The Law of Attraction perfect motivation from my mentor Jim <br><iframe width=\'420\' height=\'315\' src=\'Rohn\r\nhttps://www.youtube.com/embed/5zNxwAKAJLA\'></iframe><br>', 'captain_africa', 'none', '2018-09-08 01:09:35', 'no', 'yes', 0, ''),
(104, 'The Law of Attraction perfect motivation from my mentor Jim <br><iframe width=\'420\' height=\'315\' src=\'Rohn\r\nhttps://www.youtube.com/embed/5zNxwAKAJLA\'></iframe><br>', 'captain_africa', 'none', '2018-09-08 01:09:41', 'no', 'yes', 1, ''),
(105, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/2cOzUtD8pCg\'></iframe><br>', 'captain_africa', 'none', '2018-09-08 18:18:04', 'no', 'no', 0, ''),
(106, 'hello world', 'captain_africa', 'none', '2018-09-09 11:56:09', 'no', 'no', 1, ''),
(107, 'cover <br><iframe width=\'420\' height=\'315\' src=\'\r\nhttps://www.youtube.com/embed/h6vj8Ryu0LI\'></iframe><br>', 'captain_africa', 'none', '2018-09-09 13:32:07', 'no', 'yes', 1, ''),
(108, 'wgggbwsg', 'captain_africa', 'none', '2018-10-10 22:22:12', 'no', 'yes', 0, 'assets/images/posts/5bbede042a7b025158291_317728472077604_3383342965473687157_n.jpg'),
(109, 'https://techcrunch.com/2018/10/08/linkedin-acquires-employee-engagement-and-retention-platform-glint/<br /> <br /> wohooo', 'captain_africa', 'none', '2018-10-10 22:37:34', 'no', 'yes', 0, ''),
(110, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:52:15', 'no', 'no', 0, 'assets/images/posts/5bc4391f9bcc325158291_317728472077604_3383342965473687157_n.jpg'),
(111, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:53:17', 'no', 'no', 0, 'assets/images/posts/5bc4395dc67ca25158291_317728472077604_3383342965473687157_n.jpg'),
(112, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:53:26', 'no', 'yes', 0, 'assets/images/posts/5bc43966afd2225158291_317728472077604_3383342965473687157_n.jpg'),
(113, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:53:35', 'no', 'yes', 0, 'assets/images/posts/5bc4396fc666b25158291_317728472077604_3383342965473687157_n.jpg'),
(114, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:53:42', 'no', 'yes', 0, 'assets/images/posts/5bc439769b21b25158291_317728472077604_3383342965473687157_n.jpg'),
(115, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:53:53', 'no', 'yes', 0, 'assets/images/posts/5bc439813756625158291_317728472077604_3383342965473687157_n.jpg'),
(116, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:54:11', 'no', 'yes', 0, 'assets/images/posts/5bc439933501a25158291_317728472077604_3383342965473687157_n.jpg'),
(117, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:54:27', 'no', 'yes', 0, 'assets/images/posts/5bc439a36421125158291_317728472077604_3383342965473687157_n.jpg'),
(118, 'Aim global 2017', 'jana_jana_1_2', 'none', '2018-10-14 23:55:10', 'no', 'yes', 0, 'assets/images/posts/5bc439ce764c425158291_317728472077604_3383342965473687157_n.jpg'),
(119, 'How i walk into the exam room everytime.', 'captain_africa', 'none', '2018-11-30 12:59:27', 'no', 'no', 0, 'assets/images/posts/5c01a4af4dcb3image_from_ios.jpg'),
(120, 'How i walk into the exam room everytime.', 'captain_africa', 'none', '2018-11-30 13:04:20', 'no', 'yes', 0, 'assets/images/posts/5c01a5d4d95acimage_from_ios.jpg'),
(121, 'How i walk into the exam room everytime.', 'captain_africa', 'none', '2018-11-30 13:04:30', 'no', 'yes', 0, 'assets/images/posts/5c01a5deb132bimage_from_ios.jpg'),
(122, 'How i walk into the exam room everytime.', 'captain_africa', 'none', '2018-11-30 13:04:37', 'no', 'yes', 0, 'assets/images/posts/5c01a5e5ec40eimage_from_ios.jpg'),
(123, 'Work, Work, Work', 'captain_africa', 'none', '2018-12-08 21:39:57', 'no', 'no', 0, 'assets/images/posts/5c0caaad8579dFB_IMG_1514913626888.jpg'),
(124, 'Work, Work, Work', 'captain_africa', 'none', '2018-12-08 21:43:23', 'no', 'yes', 0, 'assets/images/posts/5c0cab7b25111FB_IMG_1514913626888.jpg'),
(125, 'Work, Work, Work', 'captain_africa', 'none', '2018-12-08 21:43:49', 'no', 'yes', 0, 'assets/images/posts/5c0cab9547b5cFB_IMG_1514913626888.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `title` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`title`, `hits`) VALUES
('Whats', 8),
('Trending', 8),
('Today', 8),
('Hello', 1),
('World', 1),
('Good', 3),
('And', 3),
('Bad', 3),
('Times', 3),
('Are', 3),
('Ahead', 3),
('Wgggbwsg', 1),
('Aim', 9),
('Global', 9),
('2017', 9),
('Walk', 4),
('Exam', 4),
('Everytime', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_arrary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_arrary`) VALUES
(2, 'Jana', 'Jana', 'jana_jana', 'Jana@gmail.com', 'bb61710601c4257d26169c6b0e690edc', '2018-08-17', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',jbirech,captain_Africa,prince_joe_1,'),
(3, 'Jana', 'Jana', 'jana_jana_1', 'Janaaa@gmail.com', '274883dcadb83028c76c3ccfadc7d9f4', '2018-08-17', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ','),
(4, 'Jana', 'Jana', 'jana_jana_1_2', 'Janna@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-08-17', 'assets/images/profile_pics/defaults/head_emerald.png', 76, 2, 'no', ',0,0,0,0,0,'),
(5, 'Jana', 'Jana', 'jana_jana_1_2_3', 'Jannaa@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-08-17', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ','),
(6, 'Prince', 'Joe', 'prince_joe', 'Joe@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-08-20', 'assets/images/profile_pics/prince_joe0fedca0beeab96202ffda1a96948a734n.jpeg', 9, 0, 'no', ',jbirech,captain_Africa,prince_joe_1,0,'),
(7, 'Captain', 'Africa', 'captain_africa', 'africa@af.ac', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-08-21', 'assets/images/profile_pics/captain_africa1312f375fd3680dd7bda162b4cb7c094n.jpeg', 69, 5, 'no', ',prince_joe,jbirech,prince_joe_1,0,0,0,0,0,0,0,0,'),
(8, 'Prince', 'Joe', 'prince_joe_1', 'Prince@prince.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-09-04', 'assets/images/profile_pics/prince_joe_12021eddd9497c13c9989d7213778f642n.jpeg', 3, 0, 'no', ',jbirech,captain_Africa,prince_joe_1,'),
(9, 'Joe', 'Birech', 'joe_birech', 'Joebir@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-09-12', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',0,'),
(10, 'Emily', 'Wang', 'emily_wang', 'Emily19941215@gmail.com', '58e3c83702c682150478a497d59fa31f', '2018-09-21', 'assets/images/profile_pics/defaults/head_deep_blue.png', 1, 0, 'no', ','),
(11, 'Bernard', 'Biwott', 'bernard_biwott', 'Lakiben@hotmail.com', '77efddd0ae7988e35955bd8589879907', '2018-12-09', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
