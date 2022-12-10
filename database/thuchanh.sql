-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 07:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuchanh`
--
CREATE DATABASE IF NOT EXISTS `thuchanh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thuchanh`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Trọ Thường'),
(2, 'Trọ Cao Cấp'),
(3, 'Chung Cư');

-- --------------------------------------------------------

--
-- Table structure for table `districks`
--

CREATE TABLE `districks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districks`
--

INSERT INTO `districks` (`id`, `name`) VALUES
(1, 'tp Vinh'),
(2, 'Hà Nội'),
(3, 'Lào cai'),
(4, 'Yên bái');

-- --------------------------------------------------------

--
-- Table structure for table `motel`
--

CREATE TABLE `motel` (
  `motel_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `count_view` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `latlng` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `utilities` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `approve` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0-Chưa duyệt, 1-Đã kiểm duyệt, 2-Sai nội dung'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motel`
--

INSERT INTO `motel` (`motel_id`, `title`, `description`, `price`, `area`, `count_view`, `address`, `latlng`, `images`, `user_id`, `category_id`, `district_id`, `utilities`, `created_at`, `phone`, `approve`,`status`) VALUES
(12, 'Trọ cao cấp', 'Sạch sẽ, thoáng mát', 200000, 123, 26, '123', '123', '../uploads/Nhà cao cấp.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-11-17 14:42:40', '0123345678', 1,1),
(13, 'Trọ bà tám', 'Xịn xò, đáng ở', 200000, 567, 8, '567', '567', '../uploads/Nhà cao cấp mini.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-11-15 15:44:42', '567576576', 1,0),
(14, 'Trọ thường ông năm', 'Đáng để thuê', 500000, 1000, 3, 'Thôn hưng thắng', '567', '../uploads/trothuong.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-11-17 14:09:48', '0123345678', 1,2),
(18, 'Chung cư cho thuê', 'Thoáng mát, điều hòa ok, sạch nhất ok', 200000, 12321, 4, '123212', '132', '../uploads/trocaocap.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-11-17 14:09:51', '0123345678', 1,1),
(19, 'Trọ nhỏ', 'Một người ở, bảo vệ 24/24', 200000, 1111, 2, 'Thôn hưng thắng', '111', '../uploads/tro_xin.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-11-17 14:14:34', '0123345678', 1,0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `role` int(11) NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `phone`, `avatar`, `email`) VALUES
(3, 'Mạnh Trương', 'admin@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '0388580624', 'user/logo.jpg', 'admin@gmail.com'),
(4, '123', '123123', '4297f44b13955235245b2497399d7a93', 0, '0388580624', 'user/hinh-nen.jpg', '123@gmail.com'),
(8, 'Sơn Huy', 'son', '4297f44b13955235245b2497399d7a93', 0, '0388580624', 'user/anh.gif', 'sonchat2k@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districks`
--
ALTER TABLE `districks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`motel_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districks`
--
ALTER TABLE `districks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motel`
--
ALTER TABLE `motel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
