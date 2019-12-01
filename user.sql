-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 05:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `suuid` int(4) NOT NULL,
  `sugender` varchar(6) COLLATE utf8_thai_520_w2 NOT NULL,
  `suname` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL,
  `suage` int(3) NOT NULL,
  `subloodgroup` char(2) COLLATE utf8_thai_520_w2 NOT NULL,
  `sumedicalrights` varchar(100) COLLATE utf8_thai_520_w2 NOT NULL,
  `sunumber` char(13) COLLATE utf8_thai_520_w2 NOT NULL,
  `sumobilenumber` char(10) COLLATE utf8_thai_520_w2 NOT NULL,
  `suintro` text COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`suuid`, `sugender`, `suname`, `suage`, `subloodgroup`, `sumedicalrights`, `sunumber`, `sumobilenumber`, `suintro`) VALUES
(29, 'male', 'คทาวุธ สมฤทธิ์', 31, 'B', 'CGD', '1559900122252', '0888868980', 'มีไข้'),
(30, 'male', 'คทาวุธ สมฤทธิ์', 31, 'B', 'CGD', '1559900122252', '0888868980', 'มีไข้'),
(31, 'female', 'สมพร บุญหล้า', 56, 'A', 'Cash', '2553322455578', '0253512456', 'ท้องเสีย'),
(32, 'female', 'นพ พรชำนิ', 46, 'AB', 'insurance', '2458754658745', '2548545874', 'ปวดหัว'),
(33, 'female', 'อิกิโคะ โอเดย่า', 23, 'O', 'National Health Security', '8454521252452', '0857854875', 'เจ็บตา'),
(34, 'female', 'นพ พรชำนิ', 31, 'A', 'Cash', '456454545', '454545', 'ปวดหัว'),
(35, 'female', 'กมลศักดิ์ สมฤทธิ์', 54, 'AB', 'Cash', '35599874568', '0254854742', 'ปวดขา'),
(36, 'female', 'วาสนา นาน่วม', 71, 'A', 'Cash', '7584562254585', '0254587456', 'ปวดท้อง'),
(37, 'female', 'อิกิโคะ โอเดย่า', 23, 'O', 'Cash', '87456622656', '456456456', 'เมื่อย'),
(39, 'male', 'สมหมาย สบายจัง', 34, 'AB', 'insurance', '1664499522254', '0875845896', 'มะเร็ง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`suuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `suuid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
