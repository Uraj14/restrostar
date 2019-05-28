-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 07:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restrostar`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restId` int(11) NOT NULL,
  `restName` varchar(30) NOT NULL,
  `restMobile` bigint(11) NOT NULL,
  `restEmail` varchar(30) NOT NULL,
  `restPlace` varchar(50) NOT NULL,
  `restCity` varchar(20) NOT NULL,
  `restState` varchar(20) NOT NULL,
  `restPincode` bigint(7) NOT NULL,
  `restCuisine` varchar(30) NOT NULL,
  `restPass` varchar(10) NOT NULL,
  `restImage` varchar(100) NOT NULL,
  `restDesc` text NOT NULL,
  `restStar` int(5) NOT NULL,
  `restNoOfReviews` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restId`, `restName`, `restMobile`, `restEmail`, `restPlace`, `restCity`, `restState`, `restPincode`, `restCuisine`, `restPass`, `restImage`, `restDesc`, `restStar`, `restNoOfReviews`) VALUES
(1, 'Saffron', 7829613663, 'saffron@gmail.com', '2nd Gate', 'Belgaum', 'Karnataka', 59006, 'north', '5a00f9efc8', 'restImages\\download.jpg', 'Family Restaurant!...Delicious Food', 14, 3),
(2, 'Ajanta', 7812345678, 'ajanta@gmail.com', 'RPD', 'Belgaum', 'Karnataka', 586101, 'north', '973b46724d', 'restImages/down2.jpg', 'Awesome Food....with Best Service! Family Time!!', 11, 3),
(3, 'Paratha Corner', 7823123456, 'parathacorner@gmail.com', 'Tilakwadi', 'Belgaum', 'Karnataka', 585101, 'south', 'a861e0d7e4', 'restImages\\down3.jpg', 'Hot Punjabi Parathas are ready for you to gulp!...Come taste the best!', 23, 5),
(4, 'Master Chef', 7867453423, 'masterchef@gmail.com', '1st Gate', 'Belagaum', 'Karnataka', 672435, 'south', 'fc71b647f0', 'restImages\\down4.jpg', 'Shawarma fan? Get the best here and many more delicious stuff.', 4, 1),
(5, 'Native', 7867457665, 'native@gmail.com', '3rd Gate', 'Belagaum', 'Karnataka', 671435, 'north', '8e5f3adee3', 'restImages\\down5.jpg', 'Let\'s refresh your taste buds.\r\nPure Veg with great ambience', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restreciept`
--

CREATE TABLE `restreciept` (
  `restId` int(11) NOT NULL,
  `recieptNo` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restreciept`
--

INSERT INTO `restreciept` (`restId`, `recieptNo`) VALUES
(1, 1009),
(1, 1026),
(1, 1047),
(1, 1081),
(1, 1091),
(2, 2003),
(2, 2012),
(2, 2013),
(2, 2018),
(2, 2086),
(3, 3018),
(3, 3019),
(3, 3021),
(3, 3033),
(3, 3053),
(3, 3067),
(4, 4007),
(4, 4071),
(4, 4081),
(5, 5025),
(5, 5067),
(5, 5098);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `revId` int(50) NOT NULL,
  `restId` int(50) NOT NULL,
  `cid` int(50) NOT NULL,
  `rating` int(5) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `recieptNo` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`revId`, `restId`, `cid`, `rating`, `comment`, `recieptNo`) VALUES
(1, 2, 1, 4, 'best it is ', 2003),
(2, 2, 3, 5, 'i m loving it.', 2012),
(3, 1, 4, 5, 'great food', 1047),
(4, 1, 1, 5, 'delicious', 1091),
(5, 4, 4, 4, 'not that bad', 4007),
(6, 5, 5, 5, 'great experience', 5098),
(7, 3, 4, 5, 'ahmmmmm', 3018),
(8, 3, 1, 4, 'wow', 3019),
(10, 3, 5, 4, 'i cant explain', 3021),
(17, 2, 3, 2, 'hi', 2018),
(28, 3, 3, 5, 'Catering was Very Nice.', 3053),
(29, 1, 3, 4, 'Awesome Experience', 1081),
(32, 3, 3, 5, 'yes yes yes', 3067);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `cid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phno` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` bigint(7) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`cid`, `fname`, `lastname`, `phno`, `email`, `address`, `city`, `state`, `pincode`, `password`) VALUES
(1, 'roopali', 'ejhf', 76468, 'roopalinarahari@gmail.com', 'mc m,', 'khfk', 'knkb', 246, '7010506167'),
(2, 'dhfbkjbf', 'ejhhfj', 76468, 'roops@gmail.com', 'mc m,', 'khfk', 'knkb', 246, 'fb04eeb545'),
(3, 'ujjawal', 'raj', 9693355797, 'ujjawalraj14@gmail.com', 'GIT Udyambag', 'Belagavi', 'Karnataka', 590008, '9693355797'),
(4, 'vaibhavi', 'balekundri', 8123677290, 'balekundrivaibhavi@gmail.com', 'Mahantesh Nagar', 'Belagavi', 'Karnatak', 59002, '8123677290'),
(5, 'ayush', 'singh', 8452147521, 'aaa@gmail.com', 'Udyambag', 'Belagavi', 'Karnataka', 590006, '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restId`);

--
-- Indexes for table `restreciept`
--
ALTER TABLE `restreciept`
  ADD PRIMARY KEY (`recieptNo`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`revId`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `revId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
