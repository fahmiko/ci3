-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 03:55 PM
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `deskripsi`) VALUES
(1, 'Entertaiment', 'Hiburan'),
(2, 'Gaming', 'Tentang Game'),
(3, 'Lain Lain', 'Deskripsi lainya'),
(4, 'Ramadhan', 'Tentang bulan ramadhan');

-- --------------------------------------------------------

--
-- Table structure for table `personal_blog`
--

CREATE TABLE `personal_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `artikel` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_blog`
--

INSERT INTO `personal_blog` (`id`, `title`, `id_kategori`, `author`, `artikel`, `gambar`, `tanggal`) VALUES
(1, 'Tentang Blog', 1, 'Admin', 'Assalamualaikum Wr.Wb\r\nBlog ini saya buat untuk menyelesaikan tugas website, saya membuat web ini menggunakan Framework Code Igniter,\r\nApa itu Framework ? Framework adalah suatu alat yang berguna untuk memudahkan pekerjaan Programmer dalam membangun Website, dalam blog ini saya akan membahas tentang Bagaimana kita dapat membuat website yang inovatif', 'a_ride_on_phoenix.jpg', '2018-04-17'),
(2, 'Kontak', 2, 'Fahmiko', 'Kontak Person : \r\nNama : Fahmiko Purnama Putra<br>\r\nWA : 081945721260<br>\r\nEmail : pp.fahmiko@gmail.com<br>\r\nSteam : zxcluck', 'profile.jpg', '2018-04-03'),
(5, 'Horizon Zero Dawn', 2, 'User', 'Horizon Zero dawn merupakan game yang dirilis tahun 2017<br>\r\nGame ini hanya dirilis untuk platform PS4 saja<br>\r\nUntuk versi PC belum tersedia', 'Horizon.jpg', '2018-04-07'),
(6, 'Emas', 1, 'User', 'Emas adalah logam mulia yang nilainya terbilang sangat tinggi<br>\r\nEmas saat ini tidak hanya untuk perhiasan saja tetapi juga untuk investasi<br>\r\n', 'Christmas-Gold-Background-Wallpaper.jpg', '2018-04-07'),
(7, 'Perfect Timing', 1, 'User', '<p>Dalam dunia fotografi, menangkap momen adalah salah satu hal penting selain teknik memotret itu sendiri. <br>\r\nTerkadang momen tertangkap dengan sendirinya oleh kamera tanpa disengaja. Ada juga momen yang memang sengaja diambil<br> pada saat yang tepat, tapi tentunya ini membutuhkan keahlian fotografi dan juga kecepatan yang sempurna!</p>', 'perfectly-timed-photos-01.jpg', '2018-04-07'),
(8, 'Code Igniter', 1, 'Fahmiko', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.', 'Screenshot_4.jpg', '2018-04-08'),
(9, 'Assassin\'s Creed Syndicate', 1, 'Fahmiko - Gamming', 'Assassins creed syndicate is fantastic anction game<br>\r\nDeveloper Assasins\'s creed syndicate is Ubisoft Montreal.<br>\r\nThis game give you experience how to live assassin\'s, the place of AC Syndicate id Londong 1870<br>\r\nyou have two character, this character is Jacob and Evie<br>\r\nThe brother and sister in Frie Family.', 'Assassins_Creed_Syndicate_25.jpg', '2018-04-08'),
(11, 'Dark Souls Series', 3, 'Fahmiko - Gamming', 'The Souls series (??????? S?ru shir?zu) is a series of action role-playing video games created and developed by FromSoftware. The series began with the release of Demon\'s Souls for the PlayStation 3 in 2009. It was followed by Dark Souls in 2011, and its sequels, Dark Souls II and Dark Souls III, in 2014 and 2016, respectively. The series\' creator was Hidetaka Miyazaki, who directed all of them with the exception of Dark Souls II.\r\n\r\nThe Souls games are played in a third-person perspective, and focus on weapon and magic-based combat with monsters, and exploration. Players battle bosses, interact with the strange non-playable characters, and journey through the medieval-like, interconnected environments in order to progress through the story. The series is notable for its difficulty, a common point of both praise and criticism.[1][2][3] The series is considered a spiritual successor to King\'s Field. Another FromSoftware developed game, Bloodborne, shares many concepts and gameplay mechanics with the Souls series.', '678480.jpg', '2018-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `email`, `kode_pos`, `tanggal`, `level`) VALUES
(1, 'fahmiko', '3af73c3481c33430c92200785eb1643d', 'Fahmiko Purnama Putra', 'pp.fahmiko@gmail.com', '65164', '2018-05-28 08:24:41', 0),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Fahmiko Purnama Putra', 'pp.fahmiko@gmail.com', '65164', '2018-05-28 08:24:41', 2),
(3, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'Zammico', 'admin@gmail.com', '6284', '2018-05-28 08:25:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_level`, `nama_level`) VALUES
(0, 'admin'),
(1, 'operator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `personal_blog`
--
ALTER TABLE `personal_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_level` (`level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `personal_blog`
--
ALTER TABLE `personal_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_blog`
--
ALTER TABLE `personal_blog`
  ADD CONSTRAINT `personal_blog_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level`) REFERENCES `user_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
