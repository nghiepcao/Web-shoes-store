-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2020 lúc 09:35 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
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
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutusp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `hinhanh`, `gia`, `mota`, `id_loaisp`, `thutusp`) VALUES
(13, 'Boot nữ 1', 'bootnu1.jpg', 100000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 55, 1),
(14, 'Boot nữ 2', 'bootnu2.jpg', 120000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 55, 2),
(15, 'Boot nữ 3', 'bootnu3.jpg', 130000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 55, 3),
(16, 'boot nam 1', 'bootnam1.jfif', 150000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 54, 4),
(17, 'boot nam 2', 'bootnam2.jfif', 150000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 54, 5),
(18, 'boot nam 3', 'bootnam3.png', 150000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 54, 6),
(19, 'Dép nữ 1', 'deppnu1.jpg', 50000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 53, 7),
(21, 'dép nữa 2', 'depnu2.jpg', 50000, '', 53, 8),
(22, 'Dép nữ 3', 'depnu3.jfif', 50000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 53, 9),
(23, 'dép nam 1', 'depnam1.jpg', 60000, '', 52, 10),
(24, 'dép nam 2', 'depnam2.jfif', 60000, '<p>z&acirc;ccac</p>', 52, 12),
(25, 'dép nam 3', 'depnam3.jpg', 60000, '<p>cxzasd</p>', 52, 13),
(26, 'Sandal nữ 1', 'sandalnu1.jpg', 120000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 51, 14),
(27, 'Sandal nữ 2', 'sandalnu2.jfif', 120000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 51, 15),
(28, 'Sandal nữ 3', 'sandalnu3.jpg', 120000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 51, 16),
(29, 'Sandal nam 1', 'sandalnam1.jpg', 125000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 50, 21),
(30, 'Sandal nam 2', 'sandalnam2.webp', 125000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 50, 22),
(31, 'Sandal nam 3', 'sandalnam3.jpg', 125000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 50, 23),
(32, 'Giày nữ 1', 'giaynu1.jpg', 210000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 49, 24),
(33, 'Giày nữ 2', 'giaynu2.jpg', 210000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 49, 25),
(34, 'giày nữ 3', 'giaynu3.jpg', 210000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 49, 26),
(35, 'Giày nam 1', 'giaynam1.jpg', 220000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 48, 31),
(36, 'Giày nam 2', 'giaynam2.jpg', 220000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 48, 32),
(37, 'Giày nam 3', 'giaynam3.jpg', 220000, '<p>Gi&agrave;y xinh gi&aacute; rẻ</p>', 48, 33),
(38, 'a', 'MG_2427-600x600.jpg', 120000, '', 48, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachikh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cachthanhtoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motadonhang` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `tenkh`, `sdtkh`, `diachikh`, `emailkh`, `cachthanhtoan`, `motadonhang`) VALUES
(16, 'cao', '05555555', '12344444', 'kkkkk', 'shipcode', '                                            Tên sản phẩm: Boot nữ 1                                Số lượng: 2                                Đơn giá: 100000                                Tổng tiền: 200000                                                            Tên sản phẩm: dép nữa 2                                Số lượng: 1                                Đơn giá: 50000                                Tổng tiền: 50000                            Thành tiền = 250000                ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangdaxacnhan`
--

CREATE TABLE `donhangdaxacnhan` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachikh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motadonhang` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cachthanhtoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangdaxacnhan`
--

INSERT INTO `donhangdaxacnhan` (`id`, `tenkh`, `sdtkh`, `diachikh`, `motadonhang`, `cachthanhtoan`, `emailkh`) VALUES
(34, 'nghiep2', '05555555', 'tyninh', '                                            Tên sản phẩm: Boot nữ 1                                Số lượng: 3                                Đơn giá: 100000                                Tổng tiền: 300000                                                            Tên sản phẩm: Giày nữ 2                                Số lượng: 2                                Đơn giá: 210000                                Tổng tiền: 420000                                                            Tên sản phẩm: Giày nữ 1                                Số lượng: 4                                Đơn giá: 210000                                Tổng tiền: 840000                                                            Tên sản phẩm: Giày nam 1                                Số lượng: 1                                Đơn giá: 220000                                Tổng tiền: 220000                                                            Tên sản phẩm: Giày nam 2                                Số lượng: 1                                Đơn giá: 220000                                Tổng tiền: 220000                                                            Tên sản phẩm: giày nữ 3                                Số lượng: 1                                Đơn giá: 210000                                Tổng tiền: 210000                            Thành tiền = 2210000                ', 'shipcode', 'cudenne'),
(35, 'nghiep', '05555555', 'tyninh', '                                            Tên sản phẩm: Boot nữ 1                                Số lượng: 1                                Đơn giá: 100000                                Tổng tiền: 100000                            Thành tiền = 100000                ', 'shipcode', 'nghiep975@gmai;.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(48, 'Giày nam', 1),
(49, 'Giày nữ', 2),
(50, 'Sandal nam', 3),
(51, 'Sandal nữ', 4),
(52, 'Dép nam', 5),
(53, 'Dép nữ', 6),
(54, 'Boot nam', 7),
(55, 'Boot nữ', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `email`, `pass`, `sdt`, `addre`, `tenkh`) VALUES
(1, 'nghiep@gmail.com', '123123123', 'nghiep', 'long an', 'nghiep'),
(2, 'nghiep123@gmail.com', '123', 'nghiep', 'tqay', 'nghiep'),
(3, 'nnn', '1', 'nhie', 'tayninh', 'nhie');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhangdaxacnhan`
--
ALTER TABLE `donhangdaxacnhan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `donhangdaxacnhan`
--
ALTER TABLE `donhangdaxacnhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
