-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 11:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id_sp` varchar(20) NOT NULL,
  `id_hd` varchar(20) NOT NULL,
  `don_gia` varchar(20) NOT NULL,
  `so_luong` varchar(20) NOT NULL,
  `hoa_don_id_hd` varchar(20) NOT NULL,
  `san_pham_id_sp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` varchar(20) NOT NULL,
  `ten_hd` varchar(20) NOT NULL,
  `date_lap` varchar(20) NOT NULL,
  `khach_hang_id_kh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `ten_hd`, `date_lap`, `khach_hang_id_kh`) VALUES
('d1', 'thanh toan', '10/10/2010', '1'),
('d2', 'thanh toan', '11/11/2011', '2');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` varchar(20) NOT NULL,
  `ten_kh` varchar(20) NOT NULL,
  `dia_chi` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `ten_kh`, `dia_chi`, `mail`, `sdt`) VALUES
('1', 'Tran Cuong Tien', 'Ho Chi Minh', 'a@gmail.com', '09999999'),
('2', 'Nguyen Bao Lam', 'Ha Noi', 'L@gmail.com', '0989999999'),
('3', 'Nguyen Ngoc Hung', 'Binh Dinh', 'c@gmail.com', '098998929'),
('4', 'Hoang Thai', 'Ha Noi', 'd@gmail.com', '090989982');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id_lsp` varchar(20) NOT NULL,
  `loai_sp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id_lsp`, `loai_sp`) VALUES
('lsp1', 'do dien tu'),
('lsp2', 'do gia dung'),
('lsp3', 'do the thao');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` varchar(20) NOT NULL,
  `ten_sp` varchar(20) NOT NULL,
  `soluong` varchar(20) NOT NULL,
  `id_lsp` varchar(20) NOT NULL,
  `loai_san_pham_id_lsp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `soluong`, `id_lsp`, `loai_san_pham_id_lsp`) VALUES
('1', 'Tu Lanh', '10', 'lsp2', 'lsp2'),
('sp1', 'Tivi', '10', 'lsp1', 'lsp1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id_sp`,`id_hd`),
  ADD KEY `chi_tiet_hoa_don_hoa_don` (`hoa_don_id_hd`),
  ADD KEY `chi_tiet_hoa_don_san_pham` (`san_pham_id_sp`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `hoa_don_khach_hang` (`khach_hang_id_kh`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id_lsp`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `san_pham_loai_san_pham` (`loai_san_pham_id_lsp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_hoa_don` FOREIGN KEY (`hoa_don_id_hd`) REFERENCES `hoa_don` (`id_hd`),
  ADD CONSTRAINT `chi_tiet_hoa_don_san_pham` FOREIGN KEY (`san_pham_id_sp`) REFERENCES `san_pham` (`id_sp`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_khach_hang` FOREIGN KEY (`khach_hang_id_kh`) REFERENCES `khach_hang` (`id_kh`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_loai_san_pham` FOREIGN KEY (`loai_san_pham_id_lsp`) REFERENCES `loai_san_pham` (`id_lsp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
