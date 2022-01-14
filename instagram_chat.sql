-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2022 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `instagram_chat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(43, '73', '1086310227', 'pt12112005', 'Ão xinh qua gÃ¡i Æ¡i ðŸ˜', '', '1641845240'),
(44, '73', '1086310227', 'pt12112005', 'BÃ¡o giÃ¡ chá»‹ nhaaaaa', '', '1641845389'),
(45, '73', '1086310227', 'pt12112005', 'cute quÃ¡', '', '1642166657'),
(46, '73', '1086310227', 'pt12112005', 'hihi', '', '1642166674'),
(47, '73', '1086310227', 'pt12112005', 'bis bis', '', '1642168618'),
(48, '75', '876062917', 'minh_tuan_0210', 'wow', '', '1642168765'),
(49, '73', '876062917', 'minh_tuan_0210', 'hay quÃ¡', '', '1642170870');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(3, 140117065, 1086310227, 'sss'),
(4, 140117065, 876062917, 'hello');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `photos`
--

INSERT INTO `photos` (`photo_id`, `location`, `user_id`, `date_added`) VALUES
(69, 'upload/4-co-nang-so-huu-luot-follow-khung-tren-instagram-nho-mac-dep-dien-sau_20160114083038938.png', '1496456761', '2022-01-10 17:04:32'),
(70, 'upload/bat-mi-cach-chup-anh-tren-instagram-dep-nhieu-luot-like (14).jpg', '1086310227', '2022-01-10 17:05:46'),
(71, 'upload/cach-chinh-anh-tren-instagram-14.jpg', '1086310227', '2022-01-10 17:07:16'),
(73, 'upload/cach-chup-anh-ngoai-canh-dep-2.jpg', '1496456761', '2022-01-10 17:08:51'),
(76, 'upload/elle-viet-nam-ung-dung-chinh-anh-cong-thuc-mau.jpg', '876062917', '2022-01-14 21:34:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(69, '1496456761', 'upload/4-co-nang-so-huu-luot-follow-khung-tren-instagram-nho-mac-dep-dien-sau_20160114083038938.png', 'Thanh xuÃ¢n tuá»•i 20', '1641809072'),
(70, '1086310227', 'upload/bat-mi-cach-chup-anh-tren-instagram-dep-nhieu-luot-like (14).jpg', 'TÆ°Æ¡i khÃ´ng cáº§n tÆ°á»›i', '1641809146'),
(71, '1086310227', 'upload/cach-chinh-anh-tren-instagram-14.jpg', 'ÄÃ´ng kiáº¿m anh', '1641809236'),
(73, '1496456761', 'upload/cach-chup-anh-ngoai-canh-dep-2.jpg', 'Láº¡nh rá»“i nhá»› máº·c áº¥m', '1641809331'),
(76, '876062917', 'upload/elle-viet-nam-ung-dung-chinh-anh-cong-thuc-mau.jpg', 'hi\r\n', '1642170895');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fullname`, `username`, `email`, `password`, `img`, `status`) VALUES
(6, 140117065, '123', '123', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '1641536399264976397_916561605919398_7054130404782229717_n.jpg', 'Active now'),
(7, 876062917, 'TrÆ°Æ¡ng Minh Tuáº¥n', 'minh_tuan_0210', '345@gmail.com', '202cb962ac59075b964b07152d234b70', '1641552325267931510_288048523372605_6201764978376640926_n.jpg', 'Offline now'),
(8, 1086310227, 'TrÆ°Æ¡ng Minh PhÆ°Æ¡ng Tháº£o', 'pt12112005', 'luonyeuvo2001@gmail.com', '202cb962ac59075b964b07152d234b70', '1641791896user10.jpg', 'Offline now'),
(9, 1496456761, 'Nguyá»…n Thá»‹ Diá»‡u Huyá»n', 'Huyen_1978', 'luonyeuvo2005@gmail.com', '202cb962ac59075b964b07152d234b70', '1641792693cach-chinh-anh-tren-instagram-14.jpg', 'Active now'),
(10, 705942758, 'Pháº¡m Quá»‘c Trá»‹', 'quoc_tri_2001', '456@gmail.com', '202cb962ac59075b964b07152d234b70', '1642170988images.jpg', 'Offline now');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Chỉ mục cho bảng `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
