-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2021 lúc 09:24 AM
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
  `MaDat` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaPhong` int(11) NOT NULL,
  `NgayDat` date NOT NULL,
  `NgayTra` date NOT NULL,
  `TrangThai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `MaKS` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Khuvuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SLdat` int(11) NOT NULL,
  `Anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`MaKS`, `TenKS`, `Diachi`, `Khuvuc`, `SLdat`, `Anh`) VALUES
('DN01', 'Harmony Homestay', '152/21 Phan Thanh, Thạc Gián Quận Thanh Khê', 'Đà Nẵng', 0, 'Images/Hana.jpg'),
('DN02', 'Khách Sạn Maximilan Đà Nẵng', '222 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà', 'Đà Nẵng', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('DN03', 'Roliva Hotel & Apartment Đà Nẵng', '13 Phạm Văn Đồng, An Hải Bắc, Sơn Trà', 'Đà Nẵng', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('HCM01', 'Aladdin Hotel & Apartment', '397 Huỳnh Văn Bánh, Quận Phú Nhuận, Hồ Chí Minh', 'Hồ Chí Minh', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('HCM02', 'Saigon Cactus Apartment', '251/8 Nguyễn Văn Trỗi, Phường 10, Phú Nhuận', 'Hồ Chí Minh', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('HCM03', 'Tâm Sen Hotel', '57A Lê Văn Thịnh', 'Hồ Chí Minh', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('HN01', 'Hana stay', 'Số 148 Phan Kế Bính, Cống Vị Quận Ba Đình', 'Hà Nội', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('HN02', 'HOMEY Hotel Apartment 2', '156A ngõ 154 Đình Thôn. Mỹ Đình 1, Nam Từ Liêm', 'Hà Nội', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
('HN03', 'Little Anh House', '6A Ngõ 67 Lý Thường Kiệt, Trần Hưng Đạo Quận Hoàn Kiếm', 'Hà Nội', 0, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sdt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenDangNhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaKH`, `TenKH`, `Sdt`, `TenDangNhap`, `MatKhau`) VALUES
(1, 'Chiến', '', 'Chien', '123'),
(2, 'Ân', '', 'An', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaPhong` int(11) NOT NULL,
  `MaKS` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Gia` float NOT NULL,
  `Loai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaPhong`, `MaKS`, `TrangThai`, `Gia`, `Loai`) VALUES
(1, 'HN01', '0', 1300000, 'Don'),
(2, 'HN01', '0', 1500000, 'Doi'),
(3, 'HN01', '0', 1300000, 'Don'),
(4, 'HN01', '0', 1500000, 'Doi'),
(5, 'HN02', '0', 1000000, 'Don'),
(6, 'HN02', '0', 1000000, 'Don'),
(7, 'HN02', '0', 1400000, 'Doi'),
(8, 'HN02', '0', 1400000, 'Doi'),
(9, 'HN03', '0', 1100000, 'Don'),
(10, 'HN03', '0', 1100000, 'Don'),
(11, 'DN01', '0', 1300000, 'Don'),
(12, 'DN01', '0', 1700000, 'Doi'),
(13, 'DN01', '0', 1300000, 'Don'),
(14, 'DN02', '0', 1000000, 'Don'),
(15, 'DN02', '0', 1000000, 'Don'),
(16, 'DN03', '0', 1100000, 'Don'),
(17, 'DN03', '0', 1100000, 'Don'),
(18, 'DN03', '0', 1400000, 'Doi'),
(19, 'HCM01', '0', 2000000, 'Don'),
(20, 'HCM01', '0', 2000000, 'Don'),
(21, 'HCM01', '0', 2400000, 'Doi'),
(22, 'HCM02', '0', 1500000, 'Don'),
(23, 'HCM02', '0', 1500000, 'Don'),
(24, 'HCM03', '0', 1300000, 'Don'),
(25, 'HCM03', '0', 1300000, 'Don'),
(26, 'HCM03', '0', 200000, 'Doi'),
(27, 'HCM03', '0', 2000000, 'Doi');

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
  ADD KEY `b` (`MaPhong`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`MaKS`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`),
  ADD KEY `x` (`MaKS`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `datphong`
--
ALTER TABLE `datphong`
  MODIFY `MaDat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `MaPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD CONSTRAINT `a` FOREIGN KEY (`MaKH`) REFERENCES `nguoidung` (`MaKH`),
  ADD CONSTRAINT `b` FOREIGN KEY (`MaPhong`) REFERENCES `phong` (`MaPhong`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `x` FOREIGN KEY (`MaKS`) REFERENCES `khachsan` (`MaKS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
