-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:00 AM
-- Server version: 5.6.36
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_blog`
--

CREATE TABLE `personal_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `artikel` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_blog`
--

INSERT INTO `personal_blog` (`id`, `title`, `author`, `artikel`, `gambar`, `tanggal`) VALUES
(1, 'Tentang Blog', 'Admin', 'Assalamualaikum Wr.Wb\r\nBlog ini saya buat untuk menyelesaikan tugas website, saya membuat web ini menggunakan Framework Code Igniter,\r\nApa itu Framework ? Framework adalah suatu alat yang berguna untuk memudahkan pekerjaan Programmer dalam membangun Website, dalam blog ini saya akan membahas tentang Bagaimana kita dapat membuat website yang inovatif', 'a_ride_on_phoenix.jpg', '2018-04-08'),
(2, 'Kontak', 'Fahmiko', 'Kontak Person : \r\nNama : Fahmiko Purnama Putra<br>\r\nWA : 081945721260<br>\r\nEmail : pp.fahmiko@gmail.com<br>\r\nSteam : zxcluck', 'profile.jpg', '2018-04-03'),
(5, 'Horizon Zero Dawn', 'User', 'Horizon Zero dawn merupakan game yang dirilis tahun 2017<br>\r\nGame ini hanya dirilis untuk platform PS4 saja<br>\r\nUntuk versi PC belum tersedia', 'Horizon.jpg', '2018-04-07'),
(6, 'Emas', 'User', 'Emas adalah logam mulia yang nilainya terbilang sangat tinggi<br>\r\nEmas saat ini tidak hanya untuk perhiasan saja tetapi juga untuk investasi<br>\r\n', 'Christmas-Gold-Background-Wallpaper.jpg', '2018-04-07'),
(7, 'Perfect Timing', 'User', '<p>Dalam dunia fotografi, menangkap momen adalah salah satu hal penting selain teknik memotret itu sendiri. <br>\r\nTerkadang momen tertangkap dengan sendirinya oleh kamera tanpa disengaja. Ada juga momen yang memang sengaja diambil<br> pada saat yang tepat, tapi tentunya ini membutuhkan keahlian fotografi dan juga kecepatan yang sempurna!</p>', 'perfectly-timed-photos-01.jpg', '2018-04-07'),
(8, 'Code Igniter', 'Fahmiko', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.', 'Screenshot_4.jpg', '2018-04-08'),
(9, 'Assassin\'s Creed Syndicate', 'Fahmiko - Gamming', 'Assassins creed syndicate is fantastic anction game<br>\r\nDeveloper Assasins\'s creed syndicate is Ubisoft Montreal.<br>\r\nThis game give you experience how to live assassin\'s, the place of AC Syndicate id Londong 1870<br>\r\nyou have two character, this character is Jacob and Evie<br>\r\nThe brother and sister in Frie Family.', 'Assassins_Creed_Syndicate_25.jpg', '2018-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_blog`
--
ALTER TABLE `personal_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_blog`
--
ALTER TABLE `personal_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
