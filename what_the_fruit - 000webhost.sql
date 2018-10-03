-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 04:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `what_the_fruit`
--
CREATE DATABASE IF NOT EXISTS `id4901846_whatthefruit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
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
(1, 'Apple', 'red', 3, 'apple_medium.png', 'apple_large.png'),
(2, 'Apricot', 'orange', NULL, 'apricot_medium.png', 'apricot_large.png'),
(3, 'Avocado', 'green', 4.5, 'avocado_medium.png', 'avocado_large.png'),
(4, 'Banana', 'yellow', NULL, 'banana_medium.png', 'banana_large.png'),
(5, 'Coconut', 'brown', NULL, 'coconut_medium.png', 'coconut_large.png'),
(6, 'Dragonfruit', 'red', NULL, 'dragonfruit_medium.png', 'dragonfruit_large.png'),
(7, 'Grapefruit', 'orange', NULL, 'grapefruit_medium.png', 'grapefruit_large.png'),
(8, 'Grapes', 'purple, red, green', 5, 'grapes_medium.png', 'grapes_large.png'),
(9, 'Kiwi', 'brown', NULL, 'kiwi_medium.png', 'kiwi_large.png'),
(10, 'Mango', 'yellow', NULL, 'mango_medium.png', 'mango_large.png'),
(11, 'Persimmon', 'orange', NULL, 'persimmon_medium.png', 'persimmon_large.png'),
(12, 'Pineapple', 'brown', NULL, 'pineapple_medium.png', 'pineapple_large.png'),
(13, 'Plum', 'purple', NULL, 'plum_medium.png', 'plum_large.png'),
(14, 'Pomegranate', 'red', NULL, 'pomegranate_medium.png', 'pomegranate_large.png'),
(15, 'Raspberry', 'red', NULL, 'raspberry_medium.png', 'raspberry_large.png'),
(16, 'Starfruit', 'yellow', NULL, 'starfruit_medium.png', 'starfruit_large.png'),
(17, 'Strawberry', 'red', 4, 'strawberry_medium.png', 'strawberry_large.png'),
(18, 'Watermelon', 'green', NULL, 'watermelon_medium.png', 'watermelon_large.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL COMMENT 'The ID of the review',
  `fruitID` int(11) NOT NULL COMMENT 'The matching fruit ID',
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The date the review was posted',
  `review` varchar(1000) NOT NULL COMMENT 'The review',
  `rating` tinyint(4) DEFAULT NULL COMMENT 'A rating of 0-5 stars',
  `name` varchar(255) DEFAULT NULL COMMENT 'The name of the reviewer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--
INSERT INTO `reviews` (`reviewID`, `fruitID`, `date`, `review`, `rating`, `name`) VALUES 
(1, 1, '2018-02-22 22:39:24', 'Apples are okay. Sometimes sweet, sometimes sour.', '3', 'Luke'), 
(2, 3, '2018-02-22 22:41:26', 'Isn&#39;t this a vegetable?', '5', 'Shoko'), 
(3, 1, '2018-02-23 20:45:28', 'Apples are so cliche. There&#39;s no point in even eating them.', '1', 'Frank Miller'), 
(4, 1, '2018-02-23 21:01:34', 'Sweet and tasty!', '4', 'Shoko'), 
(5, 3, '2018-02-23 21:05:04', 'Difficult to shop for since they ripen and spoil so quickly. But healthy and tasty!', '4', 'Luke'), 
(6, 17, '2018-02-23 21:06:04', 'Sweet and a good value as far as berries go. Good with bananas!', '4', 'Luke'), 
(7, 1, '2018-02-23 21:07:45', 'Apples? Apples never come with a leaf. This photo is fake news!', '3', 'Juanita'), 
(8, 8, '2018-02-23 21:12:21', 'Grapes are probably the best fruit! Sweet, easy to eat, and have a very satisfying crispness!', '5', 'Luke'), 
(9, 1, '2018-02-24 20:51:15', 'Crunchy and sweet', '4', 'David');


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
  `messageDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The date the review was posted',
  `comments` varchar(1000) NOT NULL COMMENT 'The comments'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`fruitID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `fruitID` (`fruitID`) USING BTREE;
  
--
-- Indexes for table `fruit`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruitID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the review';
COMMIT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the message';
COMMIT;

--
-- create the users and grant priveleges to those users
--
--
-- GRANT SELECT, INSERT, DELETE, UPDATE
-- ON id4901846_whatthefruit.*
-- TO farmer@localhost
-- IDENTIFIED BY 'gr33nthumb';
--

-- GRANT SELECT
-- ON id4901846_whatthefruit.fruit
-- TO consumer@localhost
-- IDENTIFIED BY '3at3r';

-- GRANT SELECT
-- ON id4901846_whatthefruit.reviews
-- TO consumer@localhost
-- IDENTIFIED BY '3at3r';


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
