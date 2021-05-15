-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 01:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'dwdw', 'dwdw', '', '$2y$10$DvJKXYCjgpLPfB88Psi6a.WAaFjWwerFVU4I6tVkEcmsbbVv5q43u'),
(2, 'wd', 'dw', '', '$2y$10$AqSzjuR3Rj78m3iyDTwy1OYOktJSr1OWbTT3PtB8h6NXDw9hXtaD2'),
(3, 'dwadwa', 'adwad', '', '$2y$10$hOhgTdQgTbHvXUTl2pc.p.l1e.8s5JTATxnDc6WaC3IONtb6yqF.a'),
(4, 'Rizki ', 'rizkyaryaputra', 'rizky@email.com', '12345'),
(5, 'Arya', 'Putra', 'Putra@email.com', 'smadaalibaba'),
(6, 'aaaa', 'acscscs', 'aa@wwww.com', '$2y$10$lab.n10bfpC7TfRy840FLOlPm8ixnmsFS0pTkqDeO1OJmPhIcITBC'),
(7, 'Aryaputra', 'rizkyrans', 'rizky@gmail.com', '$2y$10$29C.cRkGJS0fWSF0n8TT9uE1Fp0nAQ/u3PmyiQ2uiLlwr6hRlGu26'),
(8, 'wda', 'awdad', '', '$2y$10$lc5XNC1aceunE29irDg.oOG7gnPCGA5xvQ5qMjsxn3TsCtEV4FxWO'),
(10, 'wada', 'ada', 'adwad@dww', 'wdd'),
(11, 'awdads', 'sdad', 'wdaW@dwd', 'Wdwd'),
(12, 'adadwad', 'awdda', 'ssss@dsd', 'dssdsds'),
(13, 'Rizki ', 'Rizkirans', 'rizki@email.com', '12345'),
(14, 'awda', 'adss', 'dsad@wdwd', 'adwadsd'),
(15, 'wadad', 'sdas', 'dwad@dd', ''),
(16, 'WDA', 'ADSA', 'SDS@DWDW', '$2y$10$Oxi7chBEXqWV.5/ycI1Yb.5BAKZqUqOTIjbzsgZW3vbr/M5t0INOy'),
(17, 'Rizki ', 'rizki', 'rizki@email.com', '$2y$10$ZFAAY9/1ql0Jey/s61dEFO8iOjdUaZmCWKabW29hc44RNu9tOt.hW'),
(18, 'ad', 'sasd', 'dasda@dd', '$2y$10$vRrt4CNtiwU1t67Gc0ieV.pSPoWZtH2Bsq6.HMh5z3YhbbYZ3dzuS'),
(19, 'smada', 'jember', 'w@w', '$2y$10$KwFV1iIMdiIiqR6642VUKeKSwYjpRGANkC52.GIizw34BN4AYcnf.'),
(20, 'awda', 'wdad', 'dada@dwawd', '$2y$10$FwcdHNHoN4FidBOMxoXJ9.Z0SmQNGsrE9pobFgD69d/5Ucu4Mc18q'),
(21, 'wdawd', 'awdawd', 'awd@dw', '$2y$10$dAKXvOLDOFR0GKClyOVGXewp0iqcotzlghyeo.5nFWnM.hbQRJoG2'),
(22, 'ass', 'cscz', 'xx2dd@dd', '$2y$10$xsE66WZNM0s11RF/ectYduIXY6wQ1LJ5RGApR86YG5dIlhB0TQaXK'),
(23, '', 'awd', '', '$2y$10$iCbaRrrUJF0UIMjh7qk1Re98mEhHyZCjCOwosGtRePFKrxz.NAjqm'),
(24, '', 'as', '', '$2y$10$PmYDl4gAdSgdNw5YHlScuehBaJ6ubABJD0R04u.DuKkHpQOijgNGC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
