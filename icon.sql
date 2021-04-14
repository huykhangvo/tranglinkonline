-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 13, 2021 lúc 04:15 PM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `icon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `link`
--

INSERT INTO `link` (`id`, `icon`, `name`, `link`) VALUES
(7, 'https://imgur.com/rIGdzpG', 'Facebook', 'https://www.facebook.com/'),
(8, 'https://imgur.com/VOxHN7T', 'Youtube', 'https://www.youtube.com/'),
(9, 'https://imgur.com/DWlVqu9', 'Google Dịch', 'https://translate.google.com.vn/?hl=vi&tab=rT'),
(10, 'https://laz-img-cdn.alicdn.com/tfs/TB1PApewFT7gK0jSZFpXXaTkpXa-200-200', 'Lazada', 'https://www.lazada.vn/#'),
(11, 'http://qlkh.vlute.edu.vn/image/logo-vlute', 'TKB', 'https://ems.vlute.edu.vn/account/login'),
(12, 'https://imgur.com/Rsm4su8', 'elearning', 'http://elearning.vlute.edu.vn/login/index.php'),
(13, 'https://imgur.com/2s7Sh2G', 'Google Meet', 'https://meet.google.com/?hs=197&pli=1&authuser=1'),
(14, 'https://www.google.com/images/icons/product/keep-512', 'ghi chú', 'https://keep.google.com/u/0/'),
(17, 'https://imgur.com/3QMCF9j', 'Gmail', 'https://mail.google.com/mail/u/0/#inbox');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
