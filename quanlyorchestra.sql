-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2023 lúc 12:26 PM
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
('1', 'all'),
('2', 'Đừng khóc'),
('3', 'Hãy quên anh đi'),
('4', 'Mùa hạ'),
('5', 'Chia tay em nhé'),
('6', 'Mùa xuân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artist`
--

CREATE TABLE `artist` (
  `idArtist` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `artist`
--

INSERT INTO `artist` (`idArtist`, `name`, `image`, `des`) VALUES
('0', 'all', NULL, ''),
('1', 'Châu Khải Phong', '', 'Mô tả'),
('10', 'Soobin Hoàng Sơn', '', 'Mô tả'),
('2', 'Sơn Tùng M-TP', '', 'Mô tả'),
('3', 'Hiền Hồ', '', 'Mô tả'),
('4', 'Lê Bảo Bình', '', 'Mô tả'),
('5', 'Đức Phúc', '', 'Mô tả'),
('6', 'Erik', '', 'Mô tả'),
('7', 'Văn Mai Hương', '', 'Mô tả'),
('8', 'Hòa Minzy', '', 'Mô tả'),
('9', 'Hoàng Dũng', '', 'Mô tả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`email`, `name`, `phone`, `image`) VALUES
('Tien@gmail.com', 'Nguyễn Hửu Trọng', '0522383658', ''),
('trong123@gmail.com', 'Nguyễn Hửu Trọng', '0522383658', ''),
('Truong@gmail.com', 'Nguyễn Hửu Trọng', '0522383658', '');

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
('1', 'name'),
('10', 'Rap Việt'),
('11', 'Tiền Chiến'),
('12', 'Nhạc Trịnh'),
('13', 'Rock Việt'),
('14', 'Cách Mạng'),
('2', 'Nhạc Trẻ'),
('3', 'Nhạc Trữ Tình'),
('4', 'Nhạc Mới'),
('5', 'Nhạc best'),
('6', 'Nhạc Trung'),
('7', 'Nhạc Trẻ'),
('8', 'Trữ Tình'),
('9', 'Remix Việt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `des`) VALUES
(1, 'admin', 'Quản lý'),
(2, 'Khách hàng', 'Customer'),
(3, 'Khách hàng Vip', 'Customer1');

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
  `idGenreSong` varchar(10) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`idSong`, `name`, `image`, `idAlbum`, `idArtist`, `idGenreSong`, `link`) VALUES
('1', 'Ưng Quá Chừng', '', '1', '0', '2', ''),
('10', 'Điềm xui', 'img3.jpg', '1', '1', '1', 'sp3.mp3'),
('11', 'Giữ em thật lâu', 'img4.jpg', '1', '1', '1', 'sp4.mp3'),
('12', 'Có được không em', 'img5.jpg', '1', '1', '1', 'sp5.mp3'),
('13', 'Đừng bắt em phải quên', 'img6.jpg', '1', '1', '1', 'sp6.mp3'),
('14', 'Thất tình', 'img7.jpg', '1', '1', '1', 'sp7.mp3'),
('15', 'Gió', 'img8.jpg', '1', '1', '1', 'sp8.mp3'),
('16', 'Lý do là gì', 'img9.jpg', '1', '1', '1', 'sp9.mp3'),
('17', 'Bụi bay vào mắt', 'img10.jpg', '1', '1', '1', 'sp10.mp3'),
('18', 'Anh hứa anh không khóc', 'img11.jpg', '1', '1', '1', 'sp11.mp3'),
('19', 'Ơ vậy là yêu chưa', 'img12.jpg', '1', '1', '1', 'sp12.mp3'),
('2', 'Là anh', '', '1', '0', '1', ''),
('20', 'Tàn nhẫn', 'img13.jpg', '1', '1', '1', 'sp13.mp3'),
('21', 'Bỗng dưng muốn khóc', 'img14.jpg', '1', '1', '1', 'sp14.mp3'),
('22', 'Bức tranh phai màu', 'img15.jpg', '1', '1', '1', 'sp15.mp3'),
('23', 'Tìm', 'img16.jpg', '1', '1', '1', 'sp16.mp3'),
('24', 'Ừ thì thôi', 'img17.jpg', '1', '1', '1', 'sp17.mp3'),
('25', 'Em thật là ngốc', 'img18.jpg', '1', '1', '1', 'sp18.mp3'),
('26', 'Only', 'img19.jpg', '1', '1', '1', 'sp19.mp3'),
('27', 'Không yêu xin đừng nói ', 'img20.jpg', '1', '1', '1', 'sp20.mp3'),
('28', 'Trên đường yêu', 'img21.jpg', '1', '1', '1', 'sp21.mp3'),
('29', 'Ước hẹn tuyên quang', 'img22.jpg', '1', '1', '1', 'sp22.mp3'),
('3', 'Ngủ một mình', '', '1', '0', '1', ''),
('30', 'Tình yêu bolero', 'img23.jpg', '1', '1', '1', 'sp23.mp3'),
('31', 'Bèo dạt mây trôi', 'img24.jpg', '1', '1', '1', 'sp24.mp3'),
('32', 'Bài ca tết cho em', 'img25.jpg', '1', '1', '1', 'sp25.mp3'),
('33', 'Chiều đông kỉ niệm 2', 'img26.jpg', '1', '1', '1', 'sp26.mp3'),
('34', 'Quê hương mùa xuân', 'img27.jpg', '1', '1', '1', 'sp27.mp3'),
('35', 'Chiều lên bản thượng', 'img28.jpg', '1', '1', '1', 'sp28.mp3'),
('36', 'LK cánh thiệp đầu xuân', 'img29.jpg', '1', '1', '1', 'sp29.mp3'),
('37', 'Lk chào xuân', 'img30.jpg', '1', '1', '1', 'sp30.mp3'),
('38', 'Vô tư', 'img31.jpg', '1', '1', '1', 'sp31.mp3'),
('39', 'Rước nàng', 'img32.jpg', '1', '1', '1', 'sp32.mp3'),
('4', 'Đơn côi', '', '1', '0', '1', ''),
('40', 'Đừng lo nhé có anh đây', 'img33.jpg', '1', '1', '1', 'sp33.mp3'),
('41', 'Anh đã lạc vào', 'img34.jpg', '1', '1', '1', 'sp34.mp3'),
('42', 'Take off', 'img35.jpg', '1', '1', '1', 'sp35.mp3'),
('43', 'Vegeta', 'img36.jpg', '1', '1', '1', 'sp36.mp3'),
('44', 'Res', 'img37.jpg', '1', '1', '1', 'sp37.mp3'),
('45', 'Đừng nói lần 2', 'img38.jpg', '1', '1', '1', 'sp38.mp3'),
('46', 'Dont like', 'img39.jpg', '1', '1', '1', 'sp39.mp3'),
('47', 'Be like me', 'img40.jpg', '1', '1', '1', 'sp40.mp3'),
('48', 'Nụ cười xuân', 'img41.jpg', '1', '1', '1', 'sp41.mp3'),
('49', 'Sexy night', 'img42.jpg', '1', '1', '1', 'sp42.mp3'),
('5', 'Em đồng ý', '', '1', '0', '1', ''),
('50', 'wrong3me', 'img43.jpg', '1', '1', '1', 'sp43.mp3'),
('51', 'Là anh', 'img44.jpg', '1', '1', '1', 'sp44.mp3'),
('52', 'Yêu', 'img45.jpg', '1', '1', '1', 'sp45.mp3'),
('53', 'Mây phương nam', 'img46.jpg', '1', '1', '1', 'sp46.mp3'),
('54', 'Lụy tình', 'img47.jpg', '1', '1', '1', 'sp47.mp3'),
('55', 'Hoa cưới', 'img48.jpg', '1', '1', '1', 'sp48.mp3'),
('56', 'Người đáng thương', 'img49.jpg', '1', '1', '1', 'sp49.mp3'),
('57', 'Vị thần gọi gió', 'img50.jpg', '1', '1', '1', 'sp50.mp3'),
('6', 'Vì anh đâu biết', '', '1', '0', '1', ''),
('7', 'Chuyện đôi ta', '', '1', '0', '1', ''),
('8', 'Rê NDM', 'img1.jpg', '1', '1', '1', 'sp1.mp3'),
('9', 'Yêu Đi', 'img2.jpg', '1', '1', '1', 'sp2.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserName`, `Password`, `Role`) VALUES
('admin@gmail.com', '123', 1),
('Tien@gmail.com', '3211', 3),
('Trong123@gmail.com', '3211', 2),
('Truong@gmail.com', '3211', 3);

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
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `genresong`
--
ALTER TABLE `genresong`
  ADD PRIMARY KEY (`idGenreSong`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`idSong`),
  ADD KEY `fk_idAlbum` (`idAlbum`),
  ADD KEY `fk_idArtist` (`idArtist`),
  ADD KEY `fk_idGenreSong` (`idGenreSong`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `fk_key` (`Role`);

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

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_key` FOREIGN KEY (`Role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
