-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2023 lúc 05:54 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyorchestra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `idAlbum` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`idAlbum`, `name`) VALUES
('AL01', 'không có album'),
('AL02', 'FLower'),
('AL03', 'LALISA'),
('AL04', 'On The Ground'),
('AL05', 'What Makes You Beautiful'),
('AL06', 'Shut Down'),
('AL07', 'Set Me Free'),
('AL08', 'Tam Thốn Thiên Đường'),
('AL09', 'Người Lạ Thoáng Qua'),
('AL10', 'Cuộc Vui Cô Đơn'),
('AL11', 'Lạc Trôi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artist`
--

CREATE TABLE `artist` (
  `idArtist` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `artist`
--

INSERT INTO `artist` (`idArtist`, `name`, `image`) VALUES
('AT01', 'Sơn Tùng MTP', ''),
('AT02', 'Jisoo', ''),
('AT03', 'Lisa', ''),
('AT04', 'Blackpink', ''),
('AT05', 'Twice', ''),
('AT06', 'Đinh Tùng Huy', ''),
('AT07', 'Rosé', ''),
('AT08', 'Quân AP', ''),
('AT09', 'Hoài Lâm', ''),
('AT10', 'Lê Bảo Bình', ''),
('AT11', 'One Deriction', ''),
('AT12', 'Dick x Tofu  x PC', ''),
('AT13', 'Đức Phúc', ''),
('AT14', 'Nghiêm Nghệ Đan', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genresong`
--

CREATE TABLE `genresong` (
  `idGenreSong` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `genresong`
--

INSERT INTO `genresong` (`idGenreSong`, `name`) VALUES
('GS01', 'Vpop'),
('GS02', 'Kpop'),
('GS03', 'US-UK'),
('GS04', 'Nhạc thiếu nhi'),
('GS05', 'Nhạc trẻ'),
('GS06', 'Nhạc trữ tình'),
('GS07', 'Nhạc Trung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `idSong` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `idAlbum` varchar(10) NOT NULL,
  `idArtist` varchar(10) NOT NULL,
  `idGenreSong` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`idSong`, `name`, `image`, `idAlbum`, `idArtist`, `idGenreSong`) VALUES
('S01', 'Lạc trôi', '', 'AL11', 'AT01', 'GS01'),
('S02', 'Flower', '', 'AL02', 'AT02', 'GS02'),
('S03', 'LALISA', '', 'AL03', 'AT03', 'GS02'),
('S04', 'On The Ground', '', 'AL04', 'AT07', 'GS02'),
('S05', 'What Make You Beautiful', '', 'AL05', 'AT11', 'GS03'),
('S06', 'Shut Down', '', 'AL06', 'AT04', 'GS02'),
('S07', 'Set Me Free', '', 'AL07', 'AT05', 'GS02'),
('S08', 'Tam Thốn Thiên Đường', '', 'AL08', 'AT14', 'GS07'),
('S09', 'Người Lạ Thoáng Qua', '', 'AL09', 'AT06', 'GS01'),
('S10', 'Cuộc Vui Cô Đơn', '', 'AL10', 'AT10', 'GS01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userorchestra`
--

CREATE TABLE `userorchestra` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `userorchestra`
--

INSERT INTO `userorchestra` (`userName`, `password`, `email`, `phone`) VALUES
('tien123', '1234', 'tien12@gmail.com', '0912763871'),
('trong123', '1234', 'trong12@gmail.com', '0987636598'),
('truong123', '1234', 'truong12@gmail.com', '0522369854');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idAlbum`);

--
-- Chỉ mục cho bảng `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`idArtist`);

--
-- Chỉ mục cho bảng `genresong`
--
ALTER TABLE `genresong`
  ADD PRIMARY KEY (`idGenreSong`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`idSong`),
  ADD KEY `fk_idArtist` (`idArtist`),
  ADD KEY `fk_idGenreSong` (`idGenreSong`),
  ADD KEY `fk_idAlbum` (`idAlbum`);

--
-- Chỉ mục cho bảng `userorchestra`
--
ALTER TABLE `userorchestra`
  ADD PRIMARY KEY (`userName`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `fk_idAlbum` FOREIGN KEY (`idAlbum`) REFERENCES `album` (`idAlbum`),
  ADD CONSTRAINT `fk_idArtist` FOREIGN KEY (`idArtist`) REFERENCES `artist` (`idArtist`),
  ADD CONSTRAINT `fk_idGenreSong` FOREIGN KEY (`idGenreSong`) REFERENCES `genresong` (`idGenreSong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
