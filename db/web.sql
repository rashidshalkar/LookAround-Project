-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 04:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `year` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `manufacturer`, `year`) VALUES
(24, 'Camry', 'Toyota', 1997),
(25, 'Camry', 'Toyota', 2005);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `price`) VALUES
(1, 'Jeep', '30 000$'),
(2, 'Lexus', '40 000$'),
(3, 'BMW X', '19 000$'),
(4, 'Porsche', '45 000$');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `star` float NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `star`, `modified`) VALUES
(64, 'GRACE BAY', 'Unbelievably clear, clean water with hundreds of shades of blues and greens and white sugar sand beaches', '$600', 'img/top/1.jpg', 5, '2016-05-13 19:04:03'),
(65, 'BAIA DO SANCHO', 'As you walk through a small trail, you can''t imagine what awaits you. The heavenly view seems like a mirage.', '$550', 'img/top/2.jpg', 4.5, '2016-05-13 19:10:13'),
(66, 'PLAYA PARASIO', 'Picture perfect in every way. Gorgeous beach and the bluest water ever!', '$500\r\n', 'img/top/3.jpg', 4, '2016-05-14 06:33:05'),
(67, 'ANSE LAZIO\r\n', 'Picture perfect, with crystal clear, warm waters, shade, sun and powder white sand', '$600\r\n', 'img/top/4.jpg', 5, '2016-05-14 06:36:14'),
(68, 'FLAMENCO BEACH\r\n', 'The water was so clear and blue and gorgeous against the backdrop of the mountains. You can''t take a bad picture here.', '$500\r\n', 'img/top/5.jpg', 4.5, '2016-05-14 06:38:30'),
(69, 'WHITEHAVEN BEACH\r\n', 'The whole beach is untouched. No stores, no restaurants, just the beauty of nature at its best.', '$500\r\n', 'img/top/6.jpg', 4, '2016-05-14 06:39:41'),
(81, 'yelaman', 'jbf', 'bfs', 'img/top/lh0eIqTSeSU.jpg', 5, '2016-05-17 18:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(13, '4567', '123@mail.ru', '123'),
(2, 'Shalkar5', 'abc@mail.ru', 'a123'),
(18, 'ABC', 'abcd@mail.ru', '123456'),
(1, 'Shalkar Rashid', 'admin@gmail.com', 'admin'),
(5, 'Aidar', 'aidar@mail.ru', 'a123'),
(12, 'asdfsadfsawefw', 'asdf@mail.ru', 'as'),
(17, 'xdry xdy cfth', 'asdfas@mail.ru', '123456'),
(16, 'Askhat', 'askhat@mail.ru', 'a12345'),
(9, 'Bekzoood2', 'bekzod2@mail.ru', 'a123'),
(7, 'Bekzoood', 'bekzod@mail.ru', 'a123'),
(10, 'Damira', 'damira@mail.ru', 'd123'),
(19, 'ssadf', 'efdds@mail.ru', '123456'),
(15, 'ghjk', 'ghjk@mail.ru', 'ghjk'),
(11, 'eqwe qweq ', 'qrwrqw@qeqwe.qwe', 'qweqweqwe'),
(20, 'Shynggyskhan', 'shynggyskhan08@gmail.com', 'quick1'),
(21, 'Yelaman', 'yelaman@gmail.com', 'yelaman'),
(6, 'Zhasik', 'zhasik@mail.ru', 'a123'),
(14, 'zxcv', 'zxxcv@mail.ru', 'zxcv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users2`
--

CREATE TABLE `tbl_users2` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_id` (`user_id`,`user_email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `tbl_users2`
--
ALTER TABLE `tbl_users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_users2`
--
ALTER TABLE `tbl_users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
