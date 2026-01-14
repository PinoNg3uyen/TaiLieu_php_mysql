-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 27, 2025 lúc 06:34 AM
-- Phiên bản máy phục vụ: 8.2.0
-- Phiên bản PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlhs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lop`
--

DROP TABLE IF EXISTS `tbl_lop`;
CREATE TABLE IF NOT EXISTS `tbl_lop` (
  `MaLop` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSLop` tinyint NOT NULL,
  PRIMARY KEY (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lop`
--

INSERT INTO `tbl_lop` (`MaLop`, `TenLop`, `SSLop`) VALUES
('L00001', 'Lop 01', 30),
('L00002', 'Lớp 02', 50),
('L00003', 'Lop 03', 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sv`
--

DROP TABLE IF EXISTS `tbl_sv`;
CREATE TABLE IF NOT EXISTS `tbl_sv` (
  `MaSV` int NOT NULL AUTO_INCREMENT,
  `TenSV` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `MaLop` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaSV`),
  KEY `rb_SV_Lop` (`MaLop`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sv`
--

INSERT INTO `tbl_sv` (`MaSV`, `TenSV`, `NgaySinh`, `MaLop`) VALUES
(1, 'Trần Văn Tèo', '2025-12-01', 'L00001'),
(5, 'Trần Đại Ngu', '2025-12-03', 'L00001'),
(7, 'Trần Đại Dũng', '2025-12-08', 'L00001');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sv`
--
ALTER TABLE `tbl_sv`
  ADD CONSTRAINT `rb_SV_Lop` FOREIGN KEY (`MaLop`) REFERENCES `tbl_lop` (`MaLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
