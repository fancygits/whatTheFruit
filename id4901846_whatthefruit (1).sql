-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2018 at 03:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4901846_whatthefruit`
--
CREATE DATABASE IF NOT EXISTS `id4901846_whatthefruit` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id4901846_whatthefruit`;

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

DROP TABLE IF EXISTS `fruit`;
CREATE TABLE `fruit` (
  `fruitID` int(11) NOT NULL COMMENT 'The ID',
  `name` varchar(255) NOT NULL COMMENT 'The name of the fruit',
  `color` varchar(255) NOT NULL COMMENT 'The colors of the fruit',
  `rating` decimal(10,1) DEFAULT NULL COMMENT 'The average rating of the fruit',
  `mediumImage` varchar(255) DEFAULT NULL COMMENT 'The filename of a medium sized image of the fruit',
  `largeImage` varchar(255) DEFAULT NULL COMMENT 'The filename of a large sized image of the fruit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`fruitID`, `name`, `color`, `rating`, `mediumImage`, `largeImage`) VALUES
(1, 'Apple', 'red', 2.9, 'apple_medium.png', 'apple_large.png'),
(2, 'Apricot', 'orange', 3.0, 'apricot_medium.png', 'apricot_large.png'),
(3, 'Avocado', 'green', 2.6, 'avocado_medium.png', 'avocado_large.png'),
(4, 'Banana', 'yellow', 3.5, 'banana_medium.png', 'banana_large.png'),
(5, 'Coconut', 'brown', 3.0, 'coconut_medium.png', 'coconut_large.png'),
(6, 'Dragonfruit', 'red', 3.8, 'dragonfruit_medium.png', 'dragonfruit_large.png'),
(7, 'Grapefruit', 'orange', 3.6, 'grapefruit_medium.png', 'grapefruit_large.png'),
(8, 'Grapes', 'purple, red, green', 3.6, 'grapes_medium.png', 'grapes_large.png'),
(9, 'Kiwi', 'brown', 3.1, 'kiwi_medium.png', 'kiwi_large.png'),
(10, 'Mango', 'yellow', 3.2, 'mango_medium.png', 'mango_large.png'),
(11, 'Persimmon', 'orange', 2.0, 'persimmon_medium.png', 'persimmon_large.png'),
(12, 'Pineapple', 'brown', 4.3, 'pineapple_medium.png', 'pineapple_large.png'),
(13, 'Plum', 'purple', 3.3, 'plum_medium.png', 'plum_large.png'),
(14, 'Pomegranate', 'red', 2.8, 'pomegranate_medium.png', 'pomegranate_large.png'),
(15, 'Raspberry', 'red', 5.0, 'raspberry_medium.png', 'raspberry_large.png'),
(16, 'Starfruit', 'yellow', 2.5, 'starfruit_medium.png', 'starfruit_large.png'),
(17, 'Strawberry', 'red', 4.3, 'strawberry_medium.png', 'strawberry_large.png'),
(18, 'Watermelon', 'green', 3.4, 'watermelon_medium.png', 'watermelon_large.png'),
(19, 'Blueberry', 'blue', NULL, NULL, NULL),
(20, 'Blackberry', 'black', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `messageID` int(11) NOT NULL COMMENT 'The ID of the message',
  `name` varchar(255) NOT NULL COMMENT 'The name of the commenter',
  `email` varchar(256) NOT NULL COMMENT 'The email of the commenter',
  `phone` varchar(14) DEFAULT NULL COMMENT 'The phone number of the commenter',
  `messageDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The date the review was posted',
  `comments` varchar(1000) NOT NULL COMMENT 'The comments'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `name`, `email`, `phone`, `messageDate`, `comments`) VALUES
(1, 'Luke', 'jjohn144@my.westga.edu', '', '2018-03-01 00:00:00', 'Great site! I like the color scheme. Thank your wife for the suggestions!');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL COMMENT 'The ID of the review',
  `fruitID` int(11) NOT NULL COMMENT 'The matching fruit ID',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The date the review was posted',
  `review` varchar(1000) NOT NULL COMMENT 'The review',
  `rating` tinyint(4) DEFAULT NULL COMMENT 'A rating of 0-5 stars',
  `name` varchar(255) DEFAULT NULL COMMENT 'The name of the reviewer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewID`, `fruitID`, `date`, `review`, `rating`, `name`) VALUES
(1, 1, '2018-02-22 22:39:24', 'Apples are okay. Sometimes sweet, sometimes sour.', 3, 'Luke'),
(2, 3, '2018-02-22 22:41:26', 'Isn&#39;t this a vegetable?', 5, 'Shoko'),
(3, 1, '2018-02-23 20:45:28', 'Apples are so cliche. There&#39;s no point in even eating them.', 1, 'Frank Miller'),
(4, 1, '2018-02-23 21:01:34', 'Sweet and tasty!', 4, 'Shoko'),
(5, 3, '2018-02-23 21:05:04', 'Difficult to shop for since they ripen and spoil so quickly. But healthy and tasty!', 4, 'Luke'),
(6, 17, '2018-02-23 21:06:04', 'Sweet and a good value as far as berries go. Good with bananas!', 4, 'Luke'),
(7, 1, '2018-02-23 21:07:45', 'Apples? Apples never come with a leaf. This photo is fake news!', 3, 'Juanita'),
(8, 8, '2018-02-23 21:12:21', 'Grapes are probably the best fruit! Sweet, easy to eat, and have a very satisfying crispness!', 5, 'Luke'),
(9, 1, '2018-02-24 20:51:15', 'Crunchy and sweet', 4, 'David'),
(10, 4, '2018-02-28 22:24:12', 'i think the bannana is relly goog ', 5, 'emily'),
(11, 10, '2018-02-28 22:24:13', 'is the best fruit', 5, 'daniel'),
(12, 14, '2018-02-28 22:24:27', 'They are messy but delicius and sweet ', 5, 'Elizabeth'),
(13, 3, '2018-02-28 22:25:29', 'I DONT LIKE AVOCADOS ', 1, 'Elizabeth'),
(15, 4, '2018-02-28 22:25:52', 'banana smell bad', 1, 'alexander'),
(18, 17, '2018-02-28 22:26:39', 'This fruit is sweet and awesome.', 5, 'Felipe'),
(19, 1, '2018-02-28 22:26:42', 'it ok #soso', 3, 'emily '),
(20, 18, '2018-02-28 22:27:06', 'WATERMELON are awesome and red also sweet', 5, 'Elizabeth'),
(21, 10, '2018-02-28 22:27:13', 'it look&#39;s and is good', 5, 'alexander'),
(22, 8, '2018-02-28 22:27:47', 'the are bad', 1, 'alexander'),
(23, 10, '2018-02-28 22:28:01', 'Mangos are sticky and sweet', 5, 'Elizabeth'),
(24, 18, '2018-02-28 22:28:14', 'i love it', 5, 'emily'),
(25, 7, '2018-02-28 22:28:43', 'Sour and difficult to peel. I prefer it in juice-form.', 3, 'Luke'),
(26, 2, '2018-02-28 22:28:59', 'it&#39;s good and it is good', 5, 'alexander'),
(27, 7, '2018-02-28 22:29:24', 'It very sour ', 4, 'Elizabeth'),
(28, 1, '2018-02-28 22:29:29', 'Its healthy and sweet but i dont  love much the fruit.', 3, 'Felipe'),
(29, 17, '2018-02-28 22:30:28', 'it is sweet', 3, 'emily '),
(30, 9, '2018-02-28 22:30:51', 'it&#39;s sweet', 5, 'juan'),
(31, 4, '2018-02-28 22:30:54', 'They leave Banana peels so you have to throw them away', 4, 'Elizabeth'),
(32, 5, '2018-02-28 22:32:07', 'it good\r\n', 5, 'Angel'),
(35, 5, '2018-02-28 22:32:45', 'The shell is very hard so it hard to cut open', 4, 'Elizabeth'),
(36, 5, '2018-02-28 22:33:21', 'relly good', 5, 'emily'),
(37, 13, '2018-02-28 22:33:30', 'it the best\r\n', 5, 'Angel'),
(38, 5, '2018-02-28 22:33:54', 'i don&#39;t like it', 1, 'alex'),
(40, 9, '2018-02-28 22:34:39', 'Not my fav.', 1, 'Felipe'),
(41, 9, '2018-02-28 22:35:31', 'it&#39;s good', 5, 'alex '),
(42, 13, '2018-02-28 22:36:18', 'Not cool.', NULL, 'Felipe'),
(43, 8, '2018-02-28 22:36:31', 'the best\r\n', 5, 'angel'),
(44, 10, '2018-02-28 22:36:54', 'Not cool.', 1, 'Felipe'),
(45, 16, '2018-02-28 22:37:03', 'I like the name but never tried it', 4, 'Elizabeth'),
(46, 14, '2018-02-28 22:37:50', 'it&#39;s good', 5, 'alex '),
(47, 14, '2018-02-28 22:37:56', 'It&#39;s too hard to eat. It takes forever to get to the good stuff. No thanks. I&#39;ll just drink some juice. #boring', 1, 'Luke'),
(48, 16, '2018-02-28 22:38:27', 'Not awesome.', 1, 'Felipe'),
(49, 18, '2018-02-28 22:38:36', 'its bad', 1, 'Angel'),
(50, 14, '2018-02-28 22:38:38', '#DELICIUS', 5, 'Elizabeth'),
(51, 14, '2018-02-28 22:38:39', 'it&#39;s good and mesy but good', 5, 'alex '),
(54, 14, '2018-02-28 22:39:30', 'Not fun.', 1, 'Felipe'),
(55, 18, '2018-02-28 22:39:46', 'Watermelon its so good espeasiacly summer.\r\n', NULL, 'George'),
(57, 8, '2018-02-28 22:40:07', 'it the best', 5, 'Angel'),
(58, 8, '2018-02-28 22:40:14', 'Sweet but i like seedless grape better', 3, 'Elizabeth'),
(59, 9, '2018-02-28 22:40:27', 'its so sour and amazing', 5, 'George'),
(61, 9, '2018-02-28 22:40:42', 'IT TOO SOUR', 1, 'Elizabeth'),
(62, 9, '2018-02-28 22:40:45', 'ti is bad !', NULL, 'alozo'),
(63, 4, '2018-02-28 22:40:57', 'man you have to peel it and i don&#39;t like banana', 1, 'alex '),
(64, 8, '2018-02-28 22:41:02', 'its the best fruit\r\n', 5, 'Angel'),
(68, 3, '2018-02-28 22:44:03', 'angel thinks it bad', 1, 'angel'),
(70, 7, '2018-02-28 22:45:41', 'it sweet', 1, 'Angel'),
(71, 1, '2018-02-28 22:47:05', 'Aplles it bad', NULL, 'Angel'),
(72, 17, '2018-02-28 23:29:08', 'it&#39;s good', 5, 'alex '),
(73, 17, '2018-03-01 23:12:20', 'Sweet and Good the Strawberry', 5, 'Santiago'),
(74, 1, '2018-03-01 23:12:20', '#Apples = good/best #Apples are the god of fruits', 5, 'Angel.M'),
(75, 17, '2018-03-01 23:12:46', 'Yes because it have a lot of juice and is tasty.', 4, 'Victor'),
(76, 5, '2018-03-01 23:13:12', 'I don&#39;t like it a lot', 2, 'Santiago'),
(77, 12, '2018-03-01 23:13:32', 'the pineapple is very rich and its color is a very nice yellowish shade is also interesting as they come out because they leave the ground of a plant and are not hawaii so I do not know why the pineapple with pineapple is called Hawaiian', 5, 'Luis'),
(78, 7, '2018-03-01 23:13:51', 'This is my favorite fruit and is sweet.', 5, 'Luke'),
(79, 9, '2018-03-01 23:13:52', 'Its so good', 5, 'Santiago'),
(80, 6, '2018-03-01 23:14:41', 'This Fruit looks Very good', 5, 'Santiago'),
(81, 18, '2018-03-01 23:14:42', 'Watermelon is a good fruit ', 5, 'luisipisi'),
(82, 12, '2018-03-01 23:15:21', 'Is sweet but it make a lot of mess.', 3, 'Luis'),
(83, 6, '2018-03-01 23:15:24', 'emm no thanks it looks weird and disgusting better like pineapple', 3, 'luisillo'),
(84, 10, '2018-03-01 23:15:36', 'One of my favorites', NULL, 'Santiago'),
(85, 3, '2018-03-01 23:15:52', 'Me no likey', 1, 'Angel.M'),
(86, 7, '2018-03-01 23:16:16', 'this fruit is so tasty is very good', 5, 'Lalo'),
(87, 18, '2018-03-01 23:16:28', 'Watermelon is good', 4, 'Santiago'),
(88, 6, '2018-03-01 23:17:03', 'Didn&#39;t even know it existed!Looks cool', 5, 'Angel.M'),
(89, 11, '2018-03-01 23:17:14', 'what the hell is that looks like a tomato', 2, 'luisisisisi'),
(90, 12, '2018-03-01 23:17:16', 'Good color and it taste good', 5, 'Santiago'),
(91, 18, '2018-03-01 23:17:32', 'Is so tasty but it make a lot of mess.', 4, 'Cruz'),
(92, 3, '2018-03-01 23:18:01', 'It tastes bad ami I do not like it', 1, 'loso'),
(93, 8, '2018-03-01 23:18:05', 'Grapes are the best', NULL, 'Santiago'),
(94, 4, '2018-03-01 23:18:32', 'I really like the banana tastes delicious', 5, 'luiso'),
(95, 4, '2018-03-01 23:18:38', 'its very good', 5, 'Santiago'),
(96, 5, '2018-03-01 23:19:10', 'Is too gross no gross #Gross', 1, 'Victor P'),
(97, 15, '2018-03-01 23:20:06', 'This is so good and tasty', 5, 'Nose'),
(98, 6, '2018-03-01 23:22:40', 'I don&#39;t like that fruit', 2, 'LOL'),
(99, 8, '2018-03-01 23:23:45', 'It&#39;s my favorite fruit of all!!!! ', 5, 'Jose'),
(100, 3, '2018-03-01 23:26:20', 'This is my favorite food because is from Mexico.', 5, 'Juan Carlos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`fruitID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `fruitID` (`fruitID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruitID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the message', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the review', AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
