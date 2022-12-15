-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2022 lúc 10:56 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuchanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Trọ Thường'),
(2, 'Trọ Cao Cấp'),
(3, 'Chung Cư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districks`
--

CREATE TABLE `districks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `districks`
--

INSERT INTO `districks` (`id`, `name`) VALUES
(1, 'tp Vinh'),
(2, 'Hà Nội'),
(3, 'Lào cai'),
(4, 'Yên bái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motel`
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
-- Đang đổ dữ liệu cho bảng `motel`
--

INSERT INTO `motel` (`motel_id`, `title`, `description`, `price`, `area`, `count_view`, `address`, `latlng`, `images`, `user_id`, `category_id`, `district_id`, `utilities`, `created_at`, `phone`, `approve`, `status`) VALUES
(12, 'Trọ cao cấp', 'Sạch sẽ, thoáng mát', 200000, 123, 30, '123', '123', 'anhturong.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-12-03 00:37:23', '0123345678', 0, 0),
(13, 'Trọ bà tám', 'Xịn xò, đáng ở', 200000, 567, 13, '567', '567', 'Nhà cao cấp mini.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-12-03 05:59:55', '567576576', 1, 0),
(14, 'Trọ thường ông năm', 'Đáng để thuê', 500000, 1000, 4, 'Thôn hưng thắng', '567', 'trothuong.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-12-02 15:46:44', '0123345678', 1, 2),
(18, 'Chung cư cho thuê', 'Thoáng mát, điều hòa ok, sạch nhất ok', 200000, 12321, 7, '123212', '132', 'trocaocap.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-12-02 15:48:43', '0123345678', 1, 1),
(19, 'Trọ nhỏ', 'Một người ở, bảo vệ 24/24', 200000, 1111, 2, 'Thôn hưng thắng', '111', 'tro_xin.jpg', 3, 1, 1, 'wiffi, điều hòa, ....', '2022-12-02 15:02:06', '0123345678', 1, 0),
(20, 'bà năm', 'ổn', 200000, 123123, 1, 'dâdad', '213123', '7ee4ca9f3dd76f2177a5d4c51f0391e5.jpeg', 3, 1, 1, 'ok', '2022-12-02 15:02:41', '123132132', 1, NULL),
(21, 'manh trương', 'ổn', 200012, 2323, 0, '', '', 'tro_xin.jpg', 3, 1, 1, '', '2022-12-02 15:02:52', '', 1, NULL),
(22, 'ông tư', 'sạch sẽ', 305, 145, 0, 'Vinh', 'ok', '../uploads/b716ace909132163373f4cca158d1f16.jpg', 11, 1, 1, 'không', '2022-12-03 07:05:45', '2133213213', 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `phone`, `avatar`, `email`) VALUES
(11, 'Mạnh', 'manh', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '48403437_961512380701378_4749854570878861312_n.jpg', ''),
(15, 'huy mạnh', 'manh123', '04564feaddd8ad98267cb7a3156f1bd7', 0, '12345679', '55451648_1017989321720350_1936962265458671616_n.jpg', 'm@gmail.com'),
(18, 'okok', 'manh23', 'b3220ededc4d8d2db907d56ee2d6cf04', 0, '1123212', '6CIi1Lz.jpg', 'e@gmail.com'),
(19, 'okok', 'manh4', '36551a894fdb78e547873fb8add3f889', 0, '23123232', '55692983_2313203112290856_1963953059717447680_n.jpg', 'd@gmail.com'),
(20, 'okok', 'manh5', 'd41d8cd98f00b204e9800998ecf8427e', 0, '13123123', '5580.jpg_wh860.jpg', 'k@gmail.com'),
(21, 'manh6', 'manh6', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2312312312', '6CIi1Lz.jpg', 'kiki@gmail.com'),
(22, '1231', 'manhk', 'd41d8cd98f00b204e9800998ecf8427e', 0, '132132132', '5580.jpg_wh860.jpg', 'e@gmail.com'),
(23, 'kkkk', 'manh7', 'e10adc3949ba59abbe56e057f20f883e', 0, '123123123', '5580.jpg_wh860.jpg', 'k@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `districks`
--
ALTER TABLE `districks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`motel_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `districks`
--
ALTER TABLE `districks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `motel`
--
ALTER TABLE `motel`
  MODIFY `motel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
