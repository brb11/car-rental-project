-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 سبتمبر 2023 الساعة 00:49
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rentall`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `img` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(7, 'TOYOYA', ''),
(10, 'TTTTTTTTTTTTT', ''),
(11, 'haway', '');

-- --------------------------------------------------------

--
-- بنية الجدول `rolres`
--

CREATE TABLE `rolres` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `rolres`
--

INSERT INTO `rolres` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- بنية الجدول `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(191) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `TupePyment` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `message`, `Status`, `PostingDate`, `TupePyment`) VALUES
(19, 'brhoombasha11@gmail.com', 15, 'ui', 1, '2023-03-11 18:41:37', 'Korimi'),
(20, 'brhoombasha11@gmail.com', 15, 'ui', 2, '2023-03-11 18:43:22', 'Korimi'),
(21, 'brhoombasha11@gmail.com', 15, 'ui', 2, '2023-03-11 18:44:05', 'Korimi'),
(22, 'brhoombasha11@gmail.com', 15, 'mmskjljpkp', 2, '2023-03-11 19:13:06', 'Korimi'),
(23, 'brhoombasha11@gmail.com', 16, 'uio', 1, '2023-03-11 20:00:24', 'Yemen Koait Bank'),
(24, 'brhoombasha11@gmail.com', 16, 'uio', 0, '2023-03-11 20:04:12', 'Yemen Koait Bank'),
(25, 'brhoombasha111@gmail.com', 16, 'hbhj', 1, '2023-03-12 11:07:43', 'Kridit Kard'),
(26, 'brhoombasha11@gmail.com', 16, 'UH', 0, '2023-09-07 21:15:58', 'Kridit Kard');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `active`, `role_id`) VALUES
(1, 'admin', 'brhoombasha111@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `vihical`
--

CREATE TABLE `vihical` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `model_year` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `state` tinyint(11) NOT NULL DEFAULT 1,
  `litter` int(11) NOT NULL,
  `horse_power` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `uer_id` int(11) DEFAULT NULL,
  `img1` varchar(191) NOT NULL,
  `img2` varchar(191) NOT NULL,
  `img3` varchar(191) NOT NULL,
  `img4` varchar(191) NOT NULL,
  `img5` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `vihical`
--

INSERT INTO `vihical` (`id`, `name`, `model_year`, `price`, `speed`, `state`, `litter`, `horse_power`, `cat_id`, `uer_id`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(15, 'brado', 2022, 5400, 200, 0, 5, 200, 7, NULL, 'blue-jeep-parking-public-zone.jpg', '1558697978_amaze.png', '1558698059_baleno.png', '1558698201_creta.png', '1558698293_eon.png'),
(16, 'wrft', 2022, 5400, 200, 0, 5, 200, 7, NULL, 'blue-sport-sedan-parked-yard.jpg', '1558700163_ford-aspire.png', '1558700745_scorpio.png', '1558700628_ritz2.png', '1558700964_tiago.png'),
(18, 'uuyu', 2019, -2000, 0, 0, 0, 0, 7, NULL, '1558700142_figo-trend.png', '1558700163_ford-aspire.png', '1558698201_creta.png', '20170523_145633.jpg', '20170523_145633.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolres`
--
ALTER TABLE `rolres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `VehicleId` (`VehicleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `vihical`
--
ALTER TABLE `vihical`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uer_id` (`uer_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rolres`
--
ALTER TABLE `rolres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vihical`
--
ALTER TABLE `vihical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `FK_vihical` FOREIGN KEY (`VehicleId`) REFERENCES `vihical` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- القيود للجدول `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `rolres` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- القيود للجدول `vihical`
--
ALTER TABLE `vihical`
  ADD CONSTRAINT `FK_cat` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`uer_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
