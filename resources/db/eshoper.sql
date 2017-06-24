-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2017 lúc 10:37 PM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshoper`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Acne'),
(2, 'Albiro'),
(3, 'Ronhill'),
(4, 'OddMolly'),
(5, 'BOUDESTIJN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Sportswear'),
(2, 'Mens'),
(3, 'Womens'),
(4, 'Kids'),
(5, 'Fashion'),
(6, 'Households'),
(7, 'Clothing'),
(8, 'Bags'),
(9, 'Shoes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `availability` varchar(255) NOT NULL DEFAULT 'In Stock',
  `condition` varchar(255) NOT NULL DEFAULT 'New',
  `image` varchar(255) NOT NULL,
  `release_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `availability`, `condition`, `image`, `release_date`, `brand_id`, `category_id`) VALUES
(1, 'Anne Klein Sleeveless Colorblock Scuba', 59, 'In Stock', 'New', 'product7.jpg', '2017-06-24 14:00:27', 1, 1),
(2, 'Easy Polo Black Edition', 100, 'In Stock', '', 'product1.jpg', '2017-06-24 14:00:26', 2, 3),
(3, 'Easy Polo Black Edition', 200, 'In Stock', 'Sale', 'product8.jpg', '2017-06-24 14:00:28', 2, 4),
(4, 'Easy Polo Black Edition', 100, 'In Stock', '', 'product2.jpg', '2017-06-24 14:00:59', 2, 4),
(5, 'Easy Polo Black Edition', 100, 'In Stock', 'Sale', 'product8.jpg', '2017-06-24 14:00:25', 2, 3),
(6, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product5.jpg', '2017-06-24 14:00:26', 2, 4),
(7, 'Easy Polo Black Edition', 100, 'In Stock', 'Sale', 'product4.jpg', '2017-06-24 14:00:26', 2, 4),
(8, 'Anne Klein Sleeveless Colorblock Scuba', 59, 'In Stock', '', 'product6.jpg', '2017-06-24 14:00:26', 1, 1),
(9, 'Easy Polo Black Edition', 100, 'In Stock', '', 'product8.jpg', '2017-06-24 14:00:26', 2, 3),
(10, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product9.jpg', '2017-06-24 14:00:26', 2, 4),
(11, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product10.jpg', '2017-06-24 14:00:26', 2, 4),
(12, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product11.jpg', '2017-06-24 14:00:26', 2, 3),
(13, 'Easy Polo Black Edition', 100, 'In Stock', 'Sale', 'product12.jpg', '2017-06-24 14:00:28', 2, 4),
(14, 'Easy Polo Black Edition', 100, 'In Stock', 'Sale', 'product6.jpg', '2017-06-24 14:00:26', 2, 4),
(15, 'Anne Klein Sleeveless Colorblock Scuba', 59, 'In Stock', 'New', 'product1.jpg', '2017-06-24 14:00:26', 1, 1),
(16, 'Easy Polo Black Edition', 100, 'In Stock', '', 'product2.jpg', '2017-06-24 14:00:26', 2, 3),
(17, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product3.jpg', '2017-06-24 14:00:26', 2, 4),
(18, 'Easy Polo Black Edition', 100, 'In Stock', '', 'product4.jpg', '2017-06-24 14:00:26', 2, 4),
(19, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product5.jpg', '2017-06-24 14:00:26', 2, 3),
(20, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product6.jpg', '2017-06-24 14:00:26', 2, 4),
(21, 'Easy Polo Black Edition', 100, 'In Stock', 'Sale', 'product7.jpg', '2017-06-24 14:00:26', 2, 4),
(22, 'Anne Klein Sleeveless Colorblock Scuba', 59, 'In Stock', 'Sale', 'product8.jpg', '2017-06-24 14:00:26', 1, 1),
(23, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product9.jpg', '2017-06-24 14:00:26', 2, 3),
(24, 'Easy Polo Black Edition', 100, 'In Stock', '', 'product10.jpg', '2017-06-24 14:00:26', 2, 4),
(25, 'Easy Polo Black Edition', 100, 'In Stock', 'Sale', 'product12.jpg', '2017-06-24 14:00:26', 2, 4),
(26, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product8.jpg', '2017-06-24 14:00:26', 2, 3),
(27, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product8.jpg', '2017-06-24 14:00:26', 2, 4),
(28, 'Easy Polo Black Edition', 100, 'In Stock', 'New', 'product8.jpg', '2017-06-24 14:00:26', 2, 4),
(29, 'Easy Polo Black Edition', 500, 'In Stock', 'Sale', 'product12.jpg', '2017-06-26 14:00:26', 3, 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
