-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 07, 2026 lúc 03:51 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_s5thud2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lop-`
--

DROP TABLE IF EXISTS `tb_lop-`;
CREATE TABLE IF NOT EXISTS `tb_lop-` (
  `MaLop` varchar(7) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `TenLop` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `SiSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_lop-`
--

INSERT INTO `tb_lop-` (`MaLop`, `TenLop`, `SiSo`) VALUES
('TACDR', 'Tieng Anh Chuan Dau Ra', 63),
('THUD', 'Tin học ứng dụng', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sv`
--

DROP TABLE IF EXISTS `tb_sv`;
CREATE TABLE IF NOT EXISTS `tb_sv` (
  `MaSV` int(11) NOT NULL,
  `TenSV` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `MaLop` varchar(5) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  KEY `rb_sv` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sv`
--

INSERT INTO `tb_sv` (`MaSV`, `TenSV`, `NgaySinh`, `MaLop`) VALUES
(3663, 'Ok', '2015-12-01', 'THUD'),
(6336, 'Ng Manh Cuong', '2026-01-01', 'TACDR');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_sv`
--
ALTER TABLE `tb_sv`
  ADD CONSTRAINT `rb_sv` FOREIGN KEY (`MaLop`) REFERENCES `tb_lop-` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
