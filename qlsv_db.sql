-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 09:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `MaSV` char(3) NOT NULL,
  `MaMH` char(2) NOT NULL,
  `Diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`MaSV`, `MaMH`, `Diem`) VALUES
('A01', '01', 8),
('A01', '02', 8),
('A03', '01', 10),
('A03', '02', 4.5),
('A03', '03', 3),
('A10', '10', 8),
('A10', '11', 4.5),
('A12', '07', 9),
('A12', '08', 8.5),
('A13', '03', 6.5),
('A13', '06', 10),
('A14', '05', 8.5),
('A14', '09', 8),
('A14', '11', 10),
('D09', '01', 4),
('D09', '03', 0),
('D09', '05', 10),
('K04', '01', 5.5),
('K04', '02', 6),
('K04', '03', 7.5),
('S06', '04', 0),
('T07', '05', 3),
('T07', '10', 2),
('T07', '11', 5),
('V05', '01', 0),
('V05', '04', 8);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKH` char(2) NOT NULL,
  `TenKH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKH`, `TenKH`) VALUES
('AV', 'Anh Vă'),
('HH', 'Hóa Học'),
('KT', 'Kinh Tế Học'),
('OT', 'Cơ Khí'),
('SV', 'Sinh Vật Học'),
('TH', 'Tin Học'),
('VL', 'Vật Lý');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` char(2) NOT NULL,
  `TenMH` varchar(255) NOT NULL,
  `SoTiet` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTiet`) VALUES
('01', 'Triết Học Đông Phương', 30),
('02', 'Toán Cao Cấp 1', 60),
('03', 'Toán Cao Cấp 2', 60),
('04', 'Vật Lý Đại Cương', 25),
('05', 'Cơ Sở Dữ Liệu', 45),
('06', 'Lập Trình Hệ Thống', 60),
('07', 'Tiếng Pháp', 30),
('08', 'Tiếng Hoa', 30),
('09', 'Phân Tích Hệ Thống', 35),
('10', 'Tiếng Anh', 30),
('11', 'Lập Trình Hướng Đối Tượng', 35);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` char(3) NOT NULL,
  `HoSV` varchar(50) NOT NULL,
  `TenSV` varchar(20) NOT NULL,
  `Phai` tinyint(1) NOT NULL DEFAULT 1,
  `NgaySinh` date NOT NULL,
  `NoiSinh` varchar(255) NOT NULL,
  `HocBong` double NOT NULL,
  `MaKH` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoSV`, `TenSV`, `Phai`, `NgaySinh`, `NoiSinh`, `HocBong`, `MaKH`) VALUES
('A01', 'Nguyễn Ngoa', 'Cường', 1, '1972-05-06', 'Hà Nội', 20000, 'AV'),
('A02', 'Lý Anh', 'Huy', 1, '1975-01-01', 'TP.HCM', 50000, 'AV'),
('A03', 'Lê Khắc', 'Dung', 0, '1974-08-12', 'Binh Định', 45000, 'TH'),
('A10', 'Đinh Hữu', 'Chính', 1, '1977-05-25', 'Cà Mau', 50000, 'AV'),
('A11', 'Văn Thành', 'Nho', 1, '1971-07-05', 'Cần Giờ', 50000, 'AV'),
('A12', 'Nguyễn Vă', 'Chính', 1, '1974-01-23', 'Mỹ Tho', 45000, 'AV'),
('A13', 'Trần Thị Yế', 'Nhi', 0, '1975-11-23', 'Cần Thơ', 50000, 'TH'),
('A14', 'Nguyễn Thành', 'Khiêm', 1, '1975-04-30', 'TP.HCM', 30000, 'TH'),
('D09', 'Đoàn Kiều', 'Giang', 0, '1975-01-01', 'Cần Thơ', 50000, 'SV'),
('H08', 'Bùi Quốc', 'Cường', 1, '1976-04-18', 'Tiền Giang', 35000, 'HH'),
('K04', 'Tạ Vă', 'Minh', 1, '1974-12-26', 'Hà Nội', 40000, 'KT'),
('S06', 'Đoàn Thanh', 'Mai', 0, '1976-09-25', 'An Giang', 50000, 'SV'),
('T07', 'Lê Ngọc Diễm', 'Lệ', 0, '1975-01-26', 'TP.HCM', 50000, 'TH'),
('V05', 'Nguyễn Khắc', 'Định', 1, '1976-04-12', 'Tây Ninh', 50000, 'VL'),
('V09', 'Mai Vă', 'Dũng', 1, '1977-01-12', 'Sa Đéc', 50000, 'VL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaSV`,`MaMH`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `FK_SV_KH` (`MaKH`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `FK_SV_KH` FOREIGN KEY (`MaKH`) REFERENCES `khoa` (`MaKH`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
