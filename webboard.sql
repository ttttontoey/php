-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 05:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'เรื่องทั่วไป'),
(2, 'เรื่องเรียน'),
(3, 'กีฬา'),
(7, 'สายมู');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `post_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `post_date`, `user_id`, `post_id`) VALUES
(4, 'เสร่อ', '2024-10-15 09:23:52', 2, 4),
(5, 'regงับเตง', '2024-10-15 10:00:47', 3, 1),
(6, 'ลุยเลอ', '2024-10-15 10:00:50', 3, 1),
(7, 'ละค*ยไร', '2024-10-15 10:01:04', 3, 4),
(8, 'มึงก็ไม่มีอย่ามาพาล', '2024-10-15 10:01:13', 3, 4),
(9, 'นี่ไง เพราะงี้ไงเลยไม่มีเมีย สมน้ำหน้ามึง', '2024-10-15 10:01:55', 2, 4),
(10, 'ยังโสดนะคะ', '2024-10-15 10:05:06', 5, 4),
(11, 'กูไม่ได้ถาม ขอบคุณครับ', '2024-10-15 10:05:21', 2, 4),
(12, 'กูก็ไม่ได้ตอบมึงค้าา กูบอกเจ้าของกระทู้เนาะ อย่าสำคัญตัว', '2024-10-15 10:06:10', 5, 4),
(13, 'นี่แหละที่ต้องการ สินสอดเท่าไหร่ครับ', '2024-10-15 10:06:51', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `post_date` datetime NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `post_date`, `cat_id`, `user_id`) VALUES
(1, 'ดรอปยังไง', 'เรียนไม่ไหวแล้วตื่นเช้าเกิน', '2024-10-08 09:50:37', 2, 2),
(4, 'ทำไงให้มีแฟนครับ', 'อยากมีเมีย', '2024-10-15 09:23:42', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(32) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `gender`, `email`, `role`) VALUES
(1, 'mem', '356a192b7913b04c54574d18c28d46e6395428ab', 'mama', 'M', '0928934814b@email.com', 'm'),
(2, '1', '356a192b7913b04c54574d18c28d46e6395428ab', '1', 'M', 'bgfd@email.com', 'm'),
(3, 'll', '110c8a30c16070bf2813480d9492a1a170a7d80a', 'll', 'M', '123@email.com', 'a'),
(4, 'ji', '356a192b7913b04c54574d18c28d46e6395428ab', 'j', 'M', 'j@email.com', 'm'),
(5, 'jj', '7323a5431d1c31072983a6a5bf23745b655ddf59', 'jj', 'M', 'jj@email.com', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
