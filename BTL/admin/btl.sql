-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2022 lúc 01:22 PM
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
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `tk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`tk`, `pass`) VALUES
('Hai', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datphong`
--

CREATE TABLE `datphong` (
  `MaDat` int(11) UNSIGNED NOT NULL,
  `MaKH` int(11) UNSIGNED DEFAULT NULL,
  `MaKS` int(11) UNSIGNED DEFAULT NULL,
  `NgayDat` date DEFAULT NULL,
  `NgayTra` date DEFAULT NULL,
  `SL` int(11) DEFAULT NULL,
  `Tien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datphong`
--

INSERT INTO `datphong` (`MaDat`, `MaKH`, `MaKS`, `NgayDat`, `NgayTra`, `SL`, `Tien`) VALUES
(1, 11, 2, '2022-01-11', '2022-01-14', NULL, NULL),
(2, 15, 5, NULL, NULL, 1, NULL),
(3, 17, 7, NULL, NULL, 1, NULL),
(4, 13, 7, NULL, NULL, 2, NULL),
(5, 12, 3, NULL, NULL, 2, NULL),
(6, 17, 6, NULL, NULL, 2, NULL),
(7, 19, 9, NULL, NULL, 4, NULL),
(8, 14, 8, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `MaKS` int(11) UNSIGNED NOT NULL,
  `TenKS` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KhuVuc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MoTa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`MaKS`, `TenKS`, `DiaChi`, `KhuVuc`, `MoTa`, `Anh`) VALUES
(1, 'Hana Stay', 'Số 148 Phan Kế Bính, Cống Vị Quận Ba Đình, Hà Nội', 'Hà Nội', '', ''),
(2, 'HOMEY Hotel Apartment 2', '156A Ngõ 154 Đình Thôn. Mỹ Đình 1, Nam Từ Liêm', 'Hà Nội', '', ''),
(3, 'Little Anh House', '6A Ngõ 67 Lý Thường Kiệt, Trần Hưng Đạo Quận Hoàn Kiếm', 'Hà Nội', '', ''),
(4, 'Harmony Homestay', '152/21 Phan Thanh, Thạc Gián Quận Thanh Khê', 'Đà Nẵng', '', ''),
(5, 'Khách Sạn Maximilan Đà Nẵng', '222 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà', 'Đà Nẵng', '', ''),
(6, 'Roliva Hotel & Apartment Đà Nẵng', '13 Phạm Văn Đồng, An Hải Bắc, Sơn Trà', 'Đà Nẵng', '', ''),
(7, 'Aladdin Hotel & Apartment', '397 Huỳnh Văn Bánh, Quận Phú Nhuận', 'Hồ Chí Minh', '', ''),
(8, 'Saigon Cactus Apartment', '251/8 Nguyễn Văn Trỗi, Phường 10, Phú Nhuận', 'Hồ Chí Minh', '', ''),
(9, 'Tâm Sen Hotel', '57A Lê Văn Thịnh', 'Hồ Chí Minh', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan_loaiphong`
--

CREATE TABLE `khachsan_loaiphong` (
  `MaKS` int(11) UNSIGNED NOT NULL,
  `Loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan_loaiphong`
--

INSERT INTO `khachsan_loaiphong` (`MaKS`, `Loai`, `Gia`) VALUES
(1, 'Đôi', 1700000),
(1, 'Đơn', 1300000),
(2, 'Đôi', 1600000),
(2, 'Đơn', 1000000),
(3, 'Đôi', 1700000),
(3, 'Đơn', 1100000),
(4, 'Đôi', 1800000),
(4, 'Đơn', 13000000),
(5, 'Đôi', 1900000),
(5, 'Đơn', 1000000),
(6, 'Đôi', 1700000),
(6, 'Đơn', 1100000),
(7, 'Đôi', 2900000),
(7, 'Đơn', 2000000),
(8, 'Đôi', 2200000),
(8, 'Đơn', 1500000),
(9, 'Đôi', 2000000),
(9, 'Đơn', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `Loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`Loai`) VALUES
('Đôi'),
('Đơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaKH` int(10) UNSIGNED NOT NULL,
  `TenKH` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenDangNhap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sdt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaKH`, `TenKH`, `TenDangNhap`, `MatKhau`, `Sdt`) VALUES
(11, 'Trình Đức Hải', 'Hai123', '123', '1111111111'),
(12, 'Hoàng Minh Chiến', 'Chien123', '123', '22222222222'),
(13, 'Nguyễn Đình Ân', 'An123', '123', '333333333'),
(14, 'Nguyễn Hồng Phong', 'Phong123', '123', '44444444'),
(15, 'Lê Quý Hiếu', 'Hieu123', '123', '55555555'),
(16, 'Nguyễn Bá Dưỡng', 'Duong123', '123', '666666666'),
(17, 'Nguyễn Đăng Trường', 'Truong123', '123', '7777777777777'),
(18, 'Lưu Xuân Huệ', 'Hue123', '123', '8888888888'),
(19, 'Đoàn Tiến Đạt', 'Dat123', '123', '99999999999'),
(20, 'Đặng Văn Linh', 'Linh123', '123', '10000000000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`tk`);

--
-- Chỉ mục cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`MaDat`),
  ADD KEY `a` (`MaKH`),
  ADD KEY `b` (`MaKS`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`MaKS`);

--
-- Chỉ mục cho bảng `khachsan_loaiphong`
--
ALTER TABLE `khachsan_loaiphong`
  ADD PRIMARY KEY (`MaKS`,`Loai`),
  ADD KEY `c` (`Loai`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`Loai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`),
  ADD UNIQUE KEY `Sdt` (`Sdt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `datphong`
--
ALTER TABLE `datphong`
  MODIFY `MaDat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `MaKS` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD CONSTRAINT `a` FOREIGN KEY (`MaKH`) REFERENCES `nguoidung` (`MaKH`),
  ADD CONSTRAINT `b` FOREIGN KEY (`MaKS`) REFERENCES `khachsan` (`MaKS`);

--
-- Các ràng buộc cho bảng `khachsan_loaiphong`
--
ALTER TABLE `khachsan_loaiphong`
  ADD CONSTRAINT `c` FOREIGN KEY (`Loai`) REFERENCES `loaiphong` (`Loai`),
  ADD CONSTRAINT `d` FOREIGN KEY (`MaKS`) REFERENCES `khachsan` (`MaKS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
