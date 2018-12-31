-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 11:10 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky`
--

CREATE TABLE `dang_ky` (
  `id` int(11) NOT NULL,
  `maSV` varchar(9) DEFAULT NULL,
  `maDT` int(12) NOT NULL,
  `ngayDK` datetime DEFAULT NULL,
  `maNhom` varchar(30) DEFAULT NULL,
  `ttDK` int(11) DEFAULT NULL,
  `ngayTT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `de_tai`
--

CREATE TABLE `de_tai` (
  `id` int(11) NOT NULL,
  `maDT` char(12) NOT NULL,
  `tenDT` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaiDT` char(12) DEFAULT NULL,
  `moTa` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `maGV` int(11) DEFAULT NULL,
  `ngayBS` datetime DEFAULT NULL,
  `slNhom` int(11) DEFAULT NULL,
  `slSV` int(11) DEFAULT NULL,
  `ngayBD` datetime DEFAULT NULL,
  `ngayKT` date DEFAULT NULL,
  `dotDK` int(11) NOT NULL,
  `slDK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dot_dk`
--

CREATE TABLE `dot_dk` (
  `id` int(11) NOT NULL,
  `loaiDT` int(11) DEFAULT NULL,
  `tenDot` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `slNgay` date DEFAULT NULL,
  `ngayBD` datetime DEFAULT NULL,
  `ngayKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giang_vien`
--

CREATE TABLE `giang_vien` (
  `id` int(11) NOT NULL,
  `maGV` varchar(30) NOT NULL,
  `tenGV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `hocHam` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loai_detai`
--

CREATE TABLE `loai_detai` (
  `id` int(11) NOT NULL,
  `tenLoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `slNgay` date DEFAULT NULL,
  `slNhom` int(11) DEFAULT NULL,
  `slSV` int(11) DEFAULT NULL,
  `ngayBD` datetime DEFAULT NULL,
  `ngayKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nhom_dk`
--

CREATE TABLE `nhom_dk` (
  `maSV` varchar(9) NOT NULL,
  `maDot` int(11) NOT NULL,
  `slDK` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sinh_vien`
--

CREATE TABLE `sinh_vien` (
  `maSV` varchar(9) NOT NULL,
  `tenSV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `maLop` int(11) DEFAULT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinh_vien`
--

INSERT INTO `sinh_vien` (`maSV`, `tenSV`, `email`, `maLop`, `moTa`) VALUES
('pvhuy', NULL, 'pvhuy123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai`
--

CREATE TABLE `trang_thai` (
  `id` int(11) NOT NULL,
  `maTT` varchar(20) DEFAULT NULL,
  `tenTT` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dang_ky`
--
ALTER TABLE `dang_ky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `de_tai`
--
ALTER TABLE `de_tai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maDT` (`maDT`);

--
-- Indexes for table `dot_dk`
--
ALTER TABLE `dot_dk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maGV` (`maGV`);

--
-- Indexes for table `loai_detai`
--
ALTER TABLE `loai_detai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhom_dk`
--
ALTER TABLE `nhom_dk`
  ADD PRIMARY KEY (`maSV`,`maDot`);

--
-- Indexes for table `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD PRIMARY KEY (`maSV`);

--
-- Indexes for table `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maTT` (`maTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dang_ky`
--
ALTER TABLE `dang_ky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `de_tai`
--
ALTER TABLE `de_tai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dot_dk`
--
ALTER TABLE `dot_dk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai_detai`
--
ALTER TABLE `loai_detai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trang_thai`
--
ALTER TABLE `trang_thai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
