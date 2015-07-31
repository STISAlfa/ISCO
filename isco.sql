-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 12:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isco`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tahun_masuk` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handphone` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kartu_pelajar_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `urutan` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `created_at`, `updated_at`, `nama`, `nis`, `tahun_masuk`, `handphone`, `kartu_pelajar_dir`, `user_id`, `urutan`) VALUES
(1, '2015-04-30 01:32:47', '2015-04-30 01:32:47', 'tes', NULL, NULL, NULL, NULL, 1, 1),
(16, '2015-05-24 17:39:35', '2015-05-24 20:03:31', 'Amanda Pratama Putri', '1', '1234', '0873123412', 'assets/image/isco/sg/kp/6358a78806184f2fef84a4742130a3f99eed656b.jpg', 20, 1),
(17, '2015-05-24 17:39:35', '2015-05-24 20:10:08', '', NULL, NULL, NULL, 'assets/image/isco/sg/kp/ecdb2135d3734638779fe134f70b6b3c47dd20bf.jpg', 20, 2),
(18, '2015-05-24 17:39:35', '2015-05-24 17:39:35', '', NULL, NULL, NULL, NULL, 20, 3),
(28, '2015-05-25 07:51:05', '2015-05-25 07:51:05', 'Amanda Pratama Putra', NULL, NULL, NULL, NULL, 26, 1),
(29, '2015-05-25 07:51:05', '2015-05-25 07:51:05', '', NULL, NULL, NULL, NULL, 26, 2),
(30, '2015-05-25 07:51:05', '2015-05-25 07:51:05', '', NULL, NULL, NULL, NULL, 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(10) unsigned NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `essay`
--

CREATE TABLE IF NOT EXISTS `essay` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `universitas` varchar(100) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `nim` varchar(60) NOT NULL,
  `angkatan` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `handphone` varchar(60) NOT NULL,
  `ktm` varchar(255) NOT NULL,
  `judulessay` varchar(255) NOT NULL,
  `essay` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_30_050252_buat_tabel_user', 1),
('2015_04_30_050735_buat_tabel_anggota', 2),
('2015_04_30_051359_create_password_reminders_table', 3),
('2015_04_30_051852_buat_roles_table', 4),
('2015_04_30_051931_buat_users_roles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `paper_member`
--

CREATE TABLE IF NOT EXISTS `paper_member` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `team_id` int(10) unsigned zerofill NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sma` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `tahunmasuk` varchar(6) NOT NULL,
  `email` varchar(60) NOT NULL,
  `handphone` varchar(14) NOT NULL,
  `kartupelajar` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `paper_member`
--

INSERT INTO `paper_member` (`id`, `team_id`, `nama`, `sma`, `jurusan`, `nim`, `tahunmasuk`, `email`, `handphone`, `kartupelajar`, `jeniskelamin`, `created_at`, `updated_at`) VALUES
(0000000050, 0000000039, 'asdasd', 'asdas', 'adda', 'adas', '4', 'tes@gmail.com', 'aadsd', 'assets/image/isco/kp/asdasdb0262b6209e7505d23dae44b7b78a4336b979aa1.jpeg', 'perempuan', '2015-05-18 00:52:07', '2015-05-18 00:52:07'),
(0000000051, 0000000039, 'adee', 'asdas', 'aasdas', 'adasd', '-2', 'tes2@gmail.com', 'adasd', 'assets/image/isco/kp/adeeb0262b6209e7505d23dae44b7b78a4336b979aa1.jpg', 'laki-laki', '2015-05-18 00:52:07', '2015-05-18 00:52:07'),
(0000000052, 0000000039, 'asdasdas', 'adas', 'asdas', 'aasdas', '-2', 'asd@gmail.com', '123213', 'assets/image/isco/kp/asdasdasb0262b6209e7505d23dae44b7b78a4336b979aa1.jpg', 'perempuan', '2015-05-18 00:52:07', '2015-05-18 00:52:07'),
(0000000053, 0000000040, 'member1', 'sma1', 'ipa', '1212', '2014', '1@satu.com', '081863969334', 'assets/image/isco/kp/member16878632cdbd1c1ffccfd5f771e7c940d165be2a8.jpg', 'laki-laki', '2015-05-24 10:49:06', '2015-05-24 10:49:06'),
(0000000054, 0000000040, 'member2', 'sma1', 'ipa', '1212', '2015', '2@satu.com', '08782131241241', 'assets/image/isco/kp/member26878632cdbd1c1ffccfd5f771e7c940d165be2a8.jpg', 'laki-laki', '2015-05-24 10:49:06', '2015-05-24 10:49:06'),
(0000000055, 0000000040, 'member3', 'sma1', 'ipa', '1212', '2014', '3@satu.com', '09122831231234', 'assets/image/isco/kp/member36878632cdbd1c1ffccfd5f771e7c940d165be2a8.jpg', 'perempuan', '2015-05-24 10:49:06', '2015-05-24 10:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `paper_team`
--

CREATE TABLE IF NOT EXISTS `paper_team` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `judulpaper` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `paper_team`
--

INSERT INTO `paper_team` (`id`, `judulpaper`, `paper`, `created_at`, `updated_at`) VALUES
(0000000039, 'pengaruh budaya asing terhadap kualitas moral bangsa', 'assets/image/isco/paper/pengaruh budaya asing terhadap kualitas moral bangsab0262b6209e7505d23dae44b7b78a4336b979aa1.pdf', '2015-05-18 00:52:07', '2015-05-18 00:52:07'),
(0000000040, 'cinta damai', 'assets/image/isco/paper/cinta damai6878632cdbd1c1ffccfd5f771e7c940d165be2a8.pdf', '2015-05-24 10:49:05', '2015-05-24 10:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handphone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `kartu_pelajar` int(2) NOT NULL,
  `roles_id` int(1) unsigned NOT NULL DEFAULT '2',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` int(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `roles_id` (`roles_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `created_at`, `updated_at`, `username`, `password`, `email`, `handphone`, `asal_sekolah`, `alamat_sekolah`, `status`, `kartu_pelajar`, `roles_id`, `remember_token`, `confirmed`, `confirmation_code`) VALUES
(1, '0000-00-00 00:00:00', '2015-06-12 09:52:23', 'adminganteng', '$2y$10$7h0mrlWcixb5STeLZJDzlOD768M7cTsrNikbJRX2NCGANp/PBL2WG', 'haha@isco.com', '087863969334', 'gak ada', 'sadasdas dasd asd as sd asdas dasd as', 0, 0, 1, '3GkMQg0ZXzHknGzP4MJf56yCuuuvTIptiq7W1LtClkPCn2Rw5m2JpiYDLRJ1', 1, NULL),
(20, '2015-05-24 17:39:34', '2015-05-25 06:38:25', 'tes', '$2y$10$VUDVkB0gmZjhNHSBq2mlce8G2Xol5jff758Al.0wMB5sEO6YNzDq.', 'mandes95@gmail.com', '087863969334', 'SMAN 1 Sumbawa Besasr', 'sbw', 0, 0, 2, '6pUtDUwtZuB1IUgpcXYMhhKsed0QYIoIf3661Ym1BLulMMvNKYbgxvTfdKBd', 1, NULL),
(26, '2015-05-25 07:51:05', '2015-05-25 07:51:37', 'oji', '$2y$10$ZbGuq/gwR6F6hMAGxg42aOWkNSVAYEcX08NFzNMSUqnGWwPz4S9U6', '12.7012@stis.ac.id', '087863969334', 'SMAN 1 Sumbawa Besasr', 'sbw', 0, 0, 2, 'KvCKLikDdWAdC3AGp7B5inxJUOaG9zG0RuFePPf72R5ZdRo5ShJl3qnWd8Jl', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paper_member`
--
ALTER TABLE `paper_member`
  ADD CONSTRAINT `paper_member_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `paper_team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
