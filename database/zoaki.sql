-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 02:57 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`user_id`, `user_name`, `user_phone`, `user_email`, `post_date`) VALUES
(1, 'f', '', '', '2018-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `foundmiss`
--

CREATE TABLE `foundmiss` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `pet_status` varchar(256) NOT NULL,
  `pet_type` varchar(256) NOT NULL,
  `pet_sex` varchar(256) NOT NULL,
  `pet_age` int(255) NOT NULL,
  `pet_info` text NOT NULL,
  `post_date` date NOT NULL,
  `statu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foundmiss`
--

INSERT INTO `foundmiss` (`user_id`, `user_name`, `user_phone`, `user_img`, `pet_status`, `pet_type`, `pet_sex`, `pet_age`, `pet_info`, `post_date`, `statu`) VALUES
(18, 'king', '4043177698', 'cat12.jpeg', 'Found', 'hello world', 'Male', 12, 'sdf', '2009-10-18', 'approve'),
(20, 'troywu', '4043177698', '1.jpeg', 'Found', 'hello world', 'Male', 12, 'af', '2018-10-09', 'approve'),
(21, 'king', '14043177698', '2.jpeg', 'Miss', 'hello world', 'Female', 12, 'dsfasdf', '2018-10-09', 'approve'),
(22, 'king', '4043177698', '3.jpeg', 'Found', 'hello world', 'Male', 12, 'sdafas', '2018-10-09', 'approve'),
(23, 'king', '4043177698', '5.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(24, 'king', 'sdaf', '4.jpeg', 'Found', 'hello world', 'Male', 12, 'sdsdf', '2018-10-09', 'approve'),
(25, 'troywu', '14043177698', '6.jpeg', 'Miss', 'a', 'Female', 12, 'sadf', '2018-10-09', 'approve'),
(26, 'troywu', '4043177698', '7.jpeg', 'Found', 'hello world', 'Female', 12, 'sdafasdfa', '2018-10-09', 'approve'),
(27, 'troywu', 'sdaf', 'cat12.jpeg', 'Found', 'hello world', 'Male', 12, 'dsaf', '2018-10-09', 'approve'),
(28, 'kaka', '14043177698', 'pexels-photo-264206.jpeg', 'Found', 'hello world', 'Female', 12, 'dsfa', '2018-10-09', 'approve'),
(29, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(30, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(31, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(32, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(33, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(34, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(35, 'king', '4043177698', 'pexels-photo-235805.jpeg', 'Found', 'hello world', 'Male', 12, 'dsf', '2018-10-09', 'approve'),
(36, 'Micheal', '(915)726-3583', 'ca41pi6u52l11[1].jpg', 'Found/Missing', 'Boxer', 'Male', 5, '', '2018-10-15', 'approve'),
(37, 'William', '(816)358-8839', '26ut3ecqo6k11.jpg', 'Found/Missing', 'German Shepherd', 'Female', 3, '', '2018-10-15', 'approve'),
(38, 'Freja', '(918)879-2557', 'rcomn7vq5dq11.jpg', 'Found', 'Pit Bull Terrier', 'Female', 0, '', '2018-10-15', 'approve'),
(39, 'Alex', '(714)887-9714', 'xftiaq8aktp11.jpg', 'Miss', 'Labrador', 'Male', 4, '', '2018-10-15', 'approve'),
(40, 'Abigail', '(505)225-4212', '551b2qyaptp11.jpg', 'Miss', 'Pointer', 'Female', 0, '', '2018-10-15', 'approve'),
(41, 'Mel', '(717)730-0733', 'QnoYbzPKcpFGT25Boihu2wwWFuzi2rnpACqdO1Bbivk.jpg', 'Found', 'Labrador', 'Female', 0, '', '2018-10-15', 'approve'),
(42, 'Molly', '(770)526-0041', 'fz5f9u20xwn11.jpg', 'Found', 'Found', 'Female', 0, '', '2018-10-15', 'approve'),
(43, 'Duke', '(615)550-5318', '9pmi8keclsn11.jpg', 'Found', 'Yorkshire Terrier', 'Male', 1, '', '2018-10-15', 'approve'),
(44, 'Bailey', '(270)325-5325', 'n85nnq10emn11.jpg', 'Miss', 'Terrier Mix', 'Female', 2, '', '2018-10-15', 'approve'),
(45, 'Jerry', '(610)427-3292', '84993wfvb5s11.jpg', 'Miss', 'American Shorthair', 'Female', 2, '', '2018-10-15', 'approve'),
(46, 'Mikey', '(208)772-1749', 'yflbm52fa8s11.jpg', 'Found', 'Ragdoll', 'Male', 2, '', '2018-10-15', 'approve'),
(47, 'Elaine', '(320)233-9867', '3nrv79t5z5s11.jpg', 'Found', 'American Curl', 'Female', 7, '', '2018-10-15', 'approve'),
(48, 'Luna', '(724)335-3535', '0s6un4jvu8s11.jpg', 'Miss', 'Bombay Cat', 'Female', 1, '', '2018-10-15', 'approve'),
(49, 'Emma', '(609)704-7659', 'sdd9s8jcz7s11.jpg', 'Found', 'Siamese', 'Male', 3, '', '2018-10-15', 'approve'),
(50, 'Milo', '(318)419-2060', 'vxfavfbei7s11.jpg', 'Found/Missing', 'Belgian Blue', 'Male', 2, '', '2018-10-15', 'approve'),
(52, 'Lily', '(254)982-0784', '5zc18vzb18s11.jpg', 'Miss', 'Abyssian', 'Female', 2, '', '2018-10-15', 'approve'),
(53, 'Lola', '(256)841-1677', '0m5qt7jv89s11.jpg', 'Miss', 'Siamese', 'Female', 0, '', '2018-10-15', 'approve'),
(54, 'Cabbage', '(609)970-2831', 'jng8btw468s11.jpg', 'Miss', 'Shorthair', 'Male', 1, '', '2018-10-15', 'approve'),
(72, 'bhb', 'gfhg', '5zc18vzb18s11.jpg', 'Found', 'n', 'Female', 35, 'ghjm', '2018-10-25', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `foundmiss`
--
ALTER TABLE `foundmiss`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foundmiss`
--
ALTER TABLE `foundmiss`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
