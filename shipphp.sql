-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.36-MariaDB
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
-- Database: `shipphp`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `inf_dec`
--

CREATE TABLE `inf_dec` (
  `code` tinyint(10) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `code_product` varchar(6) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `inf_dec`
--

INSERT INTO `inf_dec` (`code`, `date_in`, `date_out`, `code_product`, `amount`) VALUES
(2, '0000-00-00', '2000-05-11', '10', 20),
(3, '0000-00-00', '0000-00-00', '11', 12),
(4, '0000-00-00', '0000-00-00', '13', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inf_dec`
--
ALTER TABLE `inf_dec`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inf_dec`
--
ALTER TABLE `inf_dec`
  MODIFY `code` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
