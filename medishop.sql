-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 08:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `uname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `uname`, `passwd`) VALUES
(0, 'root', 'root'),
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `username`, `password`) VALUES
(36, 'a', '0cc175b9c0f1b6a831c399e269772661'),
(37, 'b', '92eb5ffee6ae2fec3ad71c777531578f'),
(38, 'c', '4a8a08f09d37b73795649038408b5f33'),
(48, 'selamat', '457391c9c82bfdcbb4947278c0401e41'),
(49, 'fff', '343d9040a671c45832ee5381860e2996'),
(50, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sku` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `paypal` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES
(101, 'Produk 1 ', 'img/shoes/sepatu_1.jpg', '18.00', 'XEHR4B75YERX6'),
(102, 'Produk 2 ', 'img/shoes/sepatu_2.jpg', '18.00', 'XEHR4B75YERX6'),
(103, 'Produk 3 ', 'img/shoes/sepatu_3.jpg', '18.00', 'XEHR4B75YERX6'),
(104, 'Produk 4 ', 'img/shoes/sepatu_4.jpg', '18.00', 'XEHR4B75YERX6'),
(105, 'Produk 5', 'img/shoes/sepatu_5.jpg', '18.00', 'XEHR4B75YERX6'),
(106, 'Produk 6 ', 'img/shoes/sepatu_6.jpg', '18.00', 'XEHR4B75YERX6'),
(107, 'Produk 7 ', 'img/shoes/sepatu_7.jpg', '18.00', 'XEHR4B75YERX6'),
(108, 'Produk 8', 'img/shoes/sepatu_8.jpg', '18.00', 'XEHR4B75YERX6'),
(109, 'Produk 9 ', 'img/shoes/sepatu_9.jpg', '18.00', 'XEHR4B75YERX6'),
(110, 'Produk 10 ', 'img/shoes/sepatu_10.jpg', '18.00', 'XEHR4B75YERX6'),
(111, 'Produk 11 ', 'img/shoes/sepatu_11.jpg', '18.00', 'XEHR4B75YERX6'),
(112, 'Produk 12 ', 'img/shoes/sepatu_12.jpg', '18.00', 'XEHR4B75YERX6'),
(113, 'Produk 13 ', 'img/shoes/sepatu_13.jpg', '18.00', 'XEHR4B75YERX6'),
(114, 'Produk 14 ', 'img/shoes/sepatu_14.jpg', '18.00', 'XEHR4B75YERX6'),
(115, 'Produk 15 ', 'img/shoes/sepatu_15.jpg', '18.00', 'XEHR4B75YERX6'),
(116, 'Produk 16 ', 'img/shoes/sepatu_16.jpg', '18.00', 'XEHR4B75YERX6'),
(117, 'Produk 17 ', 'img/shoes/sepatu_17.jpg', '18.00', 'XEHR4B75YERX6'),
(118, 'Produk 18 ', 'img/shoes/sepatu_18.jpg', '18.00', 'XEHR4B75YERX6'),
(120, 'Produk 20 ', 'img/shoes/sepatu_20.jpg', '18.00', 'XEHR4B75YERX6'),
(119, 'Produk 19 ', 'img/shoes/sepatu_19.jpg', '18.00', 'XEHR4B75YERX6'),
(121, 'Produk 21 ', 'img/shoes/sepatu_21.jpg', '18.00', 'XEHR4B75YERX6'),
(122, 'Produk 22 ', 'img/shoes/sepatu_22.jpg', '18.00', 'XEHR4B75YERX6'),
(123, 'Produk 23 ', 'img/shoes/sepatu_23.jpg', '18.00', 'XEHR4B75YERX6'),
(124, 'Produk 24 ', 'img/shoes/sepatu_24.jpg', '18.00', 'XEHR4B75YERX6'),
(125, 'Produk 25 ', 'img/shoes/sepatu_25.jpg', '18.00', 'XEHR4B75YERX6'),
(126, 'Produk 26 ', 'img/shoes/sepatu_26.jpg', '18.00', 'XEHR4B75YERX6'),
(127, 'Produk 27 ', 'img/shoes/sepatu_27.jpg', '18.00', 'XEHR4B75YERX6'),
(128, 'Produk 28 ', 'img/shoes/sepatu_28.jpg', '18.00', 'XEHR4B75YERX6'),
(129, 'Produk 29 ', 'img/shoes/sepatu_29.jpg', '18.00', 'XEHR4B75YERX6'),
(130, 'Produk 30 ', 'img/shoes/sepatu_30.jpg', '18.00', 'XEHR4B75YERX6'),
(131, 'Produk 31 ', 'img/shoes/sepatu_31.jpg', '18.00', 'XEHR4B75YERX6'),
(132, 'Produk 32 ', 'img/shoes/sepatu_32.jpg', '18.00', 'XEHR4B75YERX6');

-- --------------------------------------------------------

--
-- Table structure for table `products_sizes`
--

CREATE TABLE `products_sizes` (
  `product_sku` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_sizes`
--

INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES
(101, 1),
(101, 2),
(101, 3),
(101, 4),
(102, 1),
(102, 2),
(102, 3),
(102, 4),
(103, 1),
(103, 2),
(103, 3),
(103, 4),
(104, 1),
(104, 2),
(104, 3),
(104, 4),
(105, 1),
(105, 2),
(105, 3),
(105, 4),
(106, 1),
(106, 2),
(106, 3),
(106, 4),
(107, 1),
(107, 2),
(107, 3),
(107, 4),
(108, 1),
(108, 2),
(108, 3),
(108, 4),
(109, 1),
(109, 2),
(109, 3),
(109, 4),
(110, 1),
(110, 2),
(110, 3),
(110, 4),
(111, 1),
(111, 2),
(111, 3),
(111, 4),
(112, 1),
(112, 2),
(112, 3),
(112, 4),
(113, 1),
(113, 2),
(113, 3),
(113, 4),
(114, 1),
(114, 2),
(114, 3),
(114, 4),
(115, 1),
(115, 2),
(115, 3),
(115, 4),
(116, 1),
(116, 2),
(116, 3),
(116, 4),
(117, 1),
(117, 2),
(117, 3),
(117, 4),
(118, 1),
(118, 2),
(118, 3),
(118, 4),
(119, 1),
(119, 2),
(119, 3),
(119, 4),
(120, 1),
(120, 2),
(120, 3),
(120, 4),
(121, 1),
(121, 2),
(121, 3),
(121, 4),
(122, 1),
(122, 2),
(122, 3),
(122, 4),
(123, 1),
(123, 2),
(123, 3),
(123, 4),
(124, 1),
(124, 2),
(124, 3),
(124, 4),
(125, 1),
(125, 2),
(125, 3),
(125, 4),
(126, 1),
(126, 2),
(126, 3),
(126, 4),
(127, 1),
(127, 2),
(127, 3),
(127, 4),
(128, 1),
(128, 2),
(128, 3),
(128, 4),
(129, 1),
(129, 2),
(129, 3),
(129, 4),
(130, 1),
(130, 2),
(130, 3),
(130, 4),
(131, 1),
(131, 2),
(131, 3),
(131, 4),
(132, 1),
(132, 2),
(132, 3),
(132, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `order`) VALUES
(1, 'Empat Puluh', 40),
(2, 'Emmpat Puluh Satu', 41),
(3, 'Empat Puluh Dua', 42),
(4, 'Empat Puluh Tiga', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
