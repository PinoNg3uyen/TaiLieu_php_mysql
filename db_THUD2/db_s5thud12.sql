-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 08, 2026 lúc 12:26 AM
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
-- Cơ sở dữ liệu: `db_s5thud12`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lop`
--

DROP TABLE IF EXISTS `tb_lop`;
CREATE TABLE IF NOT EXISTS `tb_lop` (
  `MaLop` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSLop` tinyint NOT NULL,
  PRIMARY KEY (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_lop`
--

INSERT INTO `tb_lop` (`MaLop`, `TenLop`, `SSLop`) VALUES
('S5THUD1', 'Lớp Tin ứng dụng 1', 0),
('S5THUD2', 'Lớp tin học ứng dung 2', 35),
('S5THUD3', 'Lớp tin học ứng dung 3', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sv`
--

DROP TABLE IF EXISTS `tb_sv`;
CREATE TABLE IF NOT EXISTS `tb_sv` (
  `MaSV` int NOT NULL AUTO_INCREMENT,
  `HoSV` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSV` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySInh` date NOT NULL,
  `GT` bit(1) NOT NULL,
  `MaLop` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaSV`),
  KEY `rb_SV_Lop` (`MaLop`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sv`
--

INSERT INTO `tb_sv` (`MaSV`, `HoSV`, `TenSV`, `NgaySInh`, `GT`, `MaLop`) VALUES
(1, 'Trần Văn', 'Hiếu', '2026-01-05', b'1', 'S5THUD1'),
(2, 'Nguyễn Ngọc', 'Đức', '2026-01-11', b'1', 'S5THUD1'),
(3, 'Huỳnh Chí', 'Nguyên', '2026-01-23', b'0', 'S5THUD2'),
(4, 'Trần Văn', 'Hiếu', '2026-01-05', b'1', 'S5THUD1'),
(5, 'Nguyễn Ngọc', 'Đức', '2026-01-11', b'1', 'S5THUD1'),
(6, 'Huỳnh Chí', 'Nguyên', '2026-01-23', b'0', 'S5THUD2');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_sv`
--
ALTER TABLE `tb_sv`
  ADD CONSTRAINT `rb_SV_Lop` FOREIGN KEY (`MaLop`) REFERENCES `tb_lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
