-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2015 at 02:54 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=318 ;

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
(30, '2015-05-25 07:51:05', '2015-05-25 07:51:05', '', NULL, NULL, NULL, NULL, 26, 3),
(31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'hh', '90', '2014', NULL, NULL, 1, 2),
(34, '2015-05-25 06:18:07', '2015-05-25 06:18:07', 'Anisa Suciningtyas D', NULL, NULL, NULL, NULL, 28, 1),
(35, '2015-05-25 06:18:07', '2015-05-25 06:18:07', '', NULL, NULL, NULL, NULL, 28, 2),
(36, '2015-05-25 06:18:07', '2015-05-25 06:18:07', '', NULL, NULL, NULL, NULL, 28, 3),
(40, '2015-05-25 17:13:38', '2015-05-25 17:13:38', 'Fadel Cuma Coba', NULL, NULL, NULL, NULL, 30, 1),
(41, '2015-05-25 17:13:38', '2015-05-25 17:13:38', '', NULL, NULL, NULL, NULL, 30, 2),
(42, '2015-05-25 17:13:38', '2015-05-25 17:13:38', '', NULL, NULL, NULL, NULL, 30, 3),
(43, '2015-05-26 09:13:33', '2015-06-16 02:21:27', 'Arif Rahman Hakim', '1314101171', '2013', '087871765339', 'assets/image/isco/sg/kp/5a5834039f51d24a9aa4d222920523985bb0774f.png', 31, 1),
(44, '2015-05-26 09:13:33', '2015-06-25 01:31:56', 'Fajar Anaba', '1314101218', '2013', '089638785827', 'assets/image/isco/sg/kp/60a993b7b856ac6ab14bcc5abcf5f10e786a8831.png', 31, 2),
(45, '2015-05-26 09:13:33', '2015-05-27 16:40:44', '', NULL, '2013', NULL, NULL, 31, 3),
(48, '2015-05-27 23:02:44', '2015-06-11 07:41:43', 'Asep Mochammad Syawaludin Fetriady', '9983129740', '2013', '089669841489', 'assets/image/isco/sg/kp/a3f4dc7d3b3001a1f0099f842bd790be0ccbbfcd.jpg', 33, 1),
(49, '2015-05-27 23:02:44', '2015-06-11 07:41:43', 'Galuh Indra Kesuma', '9998690619', '2014', '085222586554', 'assets/image/isco/sg/kp/a3f4dc7d3b3001a1f0099f842bd790be0ccbbfcd.jpg', 33, 2),
(50, '2015-05-31 09:50:37', '2015-05-31 09:53:42', 'Ahlan Jufri Abdullah', '12778', '2013', '085299388385', NULL, 34, 1),
(51, '2015-05-31 09:50:37', '2015-05-31 09:53:42', 'Muh. Rijal Rajab', NULL, '2014', NULL, NULL, 34, 2),
(52, '2015-05-31 20:41:41', '2015-05-31 20:41:41', 'Ajie Prasetyo', NULL, NULL, NULL, NULL, 35, 1),
(53, '2015-05-31 20:41:41', '2015-05-31 20:41:41', '', NULL, NULL, NULL, NULL, 35, 2),
(54, '2015-05-31 20:50:15', '2015-05-31 20:50:15', 'Ajie Prasetyo', NULL, NULL, NULL, NULL, 36, 1),
(55, '2015-05-31 20:50:15', '2015-05-31 20:50:15', '', NULL, NULL, NULL, NULL, 36, 2),
(56, '2015-06-01 04:52:39', '2015-06-01 05:02:40', 'Chike Kurnia Putri', '9993678533', '2014', '085728449078', 'assets/image/isco/sg/kp/207098ec769e20fb5bc863f85c516e234ad674b0.jpg', 37, 1),
(57, '2015-06-01 04:52:39', '2015-06-01 05:02:41', 'Chike Kurnia Putri', '9993678533', '2015', '085728449078', 'assets/image/isco/sg/kp/207098ec769e20fb5bc863f85c516e234ad674b0.jpg', 37, 2),
(58, '2015-06-02 00:56:40', '2015-06-03 07:20:43', 'Rachmi Auliani', '9980281345', '2013', '082244751200', 'assets/image/isco/sg/kp/365a590569ecc527fe1cc86e792572ca62065597.JPG', 38, 1),
(59, '2015-06-02 00:56:40', '2015-06-03 07:20:43', 'Regita Ayu Cahyani Zulaikhah', '9980062893', '2013', '081336639177', 'assets/image/isco/sg/kp/edf6dcb738d9b13ae045923c6123edd0cbe0dbbd.jpeg', 38, 2),
(60, '2015-06-02 02:38:19', '2015-06-04 04:56:48', 'NAVYKE NOVITASARI', '16067', '2014', '083857950287', 'assets/image/isco/sg/kp/0968024a82acae7dcb776130c49a195346f0258a.jpg', 39, 1),
(61, '2015-06-02 02:38:19', '2015-06-04 04:56:48', 'SEPTIANA ASMARAWATI', '16124', '2014', '085708506589', 'assets/image/isco/sg/kp/0968024a82acae7dcb776130c49a195346f0258a.jpg', 39, 2),
(62, '2015-06-02 08:10:41', '2015-06-17 07:47:30', 'YUDHA FATURAKHMAN HAKIM', '8782', '2014', '085853933414', 'assets/image/isco/sg/kp/c6f409f0b39261a56b4ea181cd7acad5eca6d952.jpg', 40, 1),
(63, '2015-06-02 08:10:41', '2015-06-17 07:47:30', 'OGI DAVID KURNIAWAN', '8695', '2014', '081357781817', 'assets/image/isco/sg/kp/c6f409f0b39261a56b4ea181cd7acad5eca6d952.jpg', 40, 2),
(64, '2015-06-02 18:00:39', '2015-06-21 00:58:57', 'FIRMAN WISNU KRISNAYANA', '9992542544', '2014', '085648811245', NULL, 44, 1),
(65, '2015-06-02 18:00:39', '2015-06-02 18:00:39', '', NULL, NULL, NULL, NULL, 44, 2),
(66, '2015-06-02 18:05:19', '2015-06-02 18:05:19', 'FIRMAN WISNU KRISNAYANA', NULL, NULL, NULL, NULL, 45, 1),
(67, '2015-06-02 18:05:19', '2015-06-02 18:05:19', '', NULL, NULL, NULL, NULL, 45, 2),
(68, '2015-06-02 23:15:55', '2015-07-11 01:30:22', 'Raden Muhamad Ilham Margana', '131410327', '2013', '088808902523', 'assets/image/isco/sg/kp/3ec80711c86576bee828c936d0cd430945a95770.png', 46, 1),
(69, '2015-06-02 23:15:55', '2015-07-11 01:30:22', 'Hasan Suhardiman', '131410153', '2013', '085782376301', 'assets/image/isco/sg/kp/39604d044ce345ed252488d65f5a80cc8f038018.jpg', 46, 2),
(70, '2015-06-03 06:26:27', '2015-06-03 06:35:57', 'Firinda Soniya', '138', '2013', '085769847997', NULL, 47, 1),
(71, '2015-06-03 06:26:27', '2015-06-03 06:35:57', 'Dian octaviana aziza', '13948', '2013', '08991769210', NULL, 47, 2),
(76, '2015-06-03 20:51:30', '2015-06-03 21:00:27', 'Panggalih Suminaring Murti', NULL, '2013', '087755107929', NULL, 50, 1),
(77, '2015-06-03 20:51:30', '2015-06-03 21:00:27', 'Putra Adi Wardana', '11125', '2013', '087798208117', NULL, 50, 2),
(78, '2015-06-05 06:29:00', '2015-06-05 06:29:00', 'Margareth Dwiyanti Simatupang', NULL, NULL, NULL, NULL, 51, 1),
(79, '2015-06-05 06:29:00', '2015-06-05 06:29:00', '', NULL, NULL, NULL, NULL, 51, 2),
(80, '2015-06-05 06:30:33', '2015-06-28 00:29:12', 'Margareth Dwiyanti Simatupang', '9995994519', '2014', '082156377047', 'assets/image/isco/sg/kp/701dfbd3c8be19c7685d593fccbfc777335bfe15.jpg', 52, 1),
(81, '2015-06-05 06:30:33', '2015-06-28 00:29:12', 'Roy  Saputra  Lomboe', '9990882948', '2014', '082362009988', 'assets/image/isco/sg/kp/701dfbd3c8be19c7685d593fccbfc777335bfe15.jpg', 52, 2),
(82, '2015-06-05 09:18:06', '2015-06-10 04:38:45', 'Maulana Malik Ibrahim', '13141112', '2013', '085714212460', 'assets/image/isco/sg/kp/665057a9c3412358357d3d6851e99d1083f8d9b4.jpg', 53, 1),
(83, '2015-06-05 09:18:06', '2015-06-08 13:56:23', 'Muhammad Dani Mulyawan', '13141114', '2013', '085883339556', 'assets/image/isco/sg/kp/665057a9c3412358357d3d6851e99d1083f8d9b4.jpg', 53, 2),
(84, '2015-06-06 04:13:44', '2015-06-06 04:46:22', 'Rahmah Hayyu Nurdini', '13365', '2014', '082332305265', NULL, 54, 1),
(85, '2015-06-06 04:13:44', '2015-06-06 04:46:22', 'Inayatul Fadilah', '13209', '2014', '081249669003', NULL, 54, 2),
(86, '2015-06-06 06:05:05', '2015-06-06 06:05:05', 'maysi dwi alfi fauziah', NULL, NULL, NULL, NULL, 55, 1),
(87, '2015-06-06 06:05:05', '2015-06-06 06:05:05', '', NULL, NULL, NULL, NULL, 55, 2),
(88, '2015-06-06 21:46:23', '2015-06-06 21:49:38', 'Aisyah Fadila', NULL, NULL, '085210265169', NULL, 56, 1),
(89, '2015-06-06 21:46:23', '2015-06-06 21:50:05', 'Zuffy Audhinna', NULL, NULL, NULL, NULL, 56, 2),
(90, '2015-06-07 06:32:54', '2015-06-07 06:32:54', 'Mirza Qonita', NULL, NULL, NULL, NULL, 57, 1),
(91, '2015-06-07 06:32:54', '2015-06-07 06:32:54', '', NULL, NULL, NULL, NULL, 57, 2),
(100, '2015-06-10 18:50:03', '2015-07-13 17:08:50', 'Rizky Eka Rachmatillah Ahmad', '9970', '2013', '085748905747', 'assets/image/isco/sg/kp/6961a16d8b59b94c2db51813f2b449a487cb532a.jpg', 63, 1),
(101, '2015-06-10 18:50:03', '2015-07-13 17:08:50', 'Nada Nibrassalbila Rosadi', '9926', '2013', '085739135621', 'assets/image/isco/sg/kp/6961a16d8b59b94c2db51813f2b449a487cb532a.jpg', 63, 2),
(102, '2015-06-11 05:45:02', '2015-06-11 05:45:02', 'Valeria Hagar Al Aviev', NULL, NULL, NULL, NULL, 64, 1),
(103, '2015-06-11 05:45:02', '2015-06-11 05:45:02', '', NULL, NULL, NULL, NULL, 64, 2),
(104, '2015-06-11 19:15:58', '2015-06-19 19:51:09', 'Dwi Putri Jeng Ivo N', '12661', '2013', '081331210247', 'assets/image/isco/sg/kp/4c459e80a5bc930b1fcda184e46e9b6eddb6c2b0.jpg', 65, 1),
(105, '2015-06-11 19:15:59', '2015-06-19 19:51:09', 'Ulin Maurita ', '12846', '2013', '082332571893', 'assets/image/isco/sg/kp/e2a9d23e938874f2a68839d893009fb04465c0b5.jpg', 65, 2),
(106, '2015-06-12 00:15:04', '2015-06-19 21:50:45', 'Ulin Maurita', '12846', '2013', '082332571893', 'assets/image/isco/sg/kp/87c693ff4f2596fa8ae83b0ad4fc8821177baea2.jpg', 66, 1),
(107, '2015-06-12 00:15:05', '2015-06-19 21:50:45', 'Dwi Putri Jeng ', '12661', '2013', '081331210247', 'assets/image/isco/sg/kp/87c693ff4f2596fa8ae83b0ad4fc8821177baea2.jpg', 66, 2),
(108, '2015-06-12 02:18:49', '2015-06-12 02:27:48', 'Evita Rosalinda Monangin', '201', '2014', '085338714333', 'assets/image/isco/sg/kp/488aeec32eeb5083556aa6941cf3d09d78dbc53c.jpg', 67, 1),
(109, '2015-06-12 02:18:49', '2015-06-12 03:08:50', 'Jennifer Alicia Setiawan', '205', '2014', '08970110168', 'assets/image/isco/sg/kp/3598773925f202e39031ffbc4985775ac246b301.jpg', 67, 2),
(110, '2015-06-13 09:04:23', '2015-07-12 08:07:17', 'Zenda Oka Briantiko', '15418', '2014', '082234232929', 'assets/image/isco/sg/kp/91bd283ed8968b1f788ae865615ecf5eda35b8c4.jpg', 68, 1),
(111, '2015-06-13 09:04:23', '2015-07-12 08:07:17', 'Cindy Ayu Dwikasari', '14841', '2013', '085204111725', 'assets/image/isco/sg/kp/91bd283ed8968b1f788ae865615ecf5eda35b8c4.jpg', 68, 2),
(112, '2015-06-13 15:32:40', '2015-07-04 00:52:56', 'Mohammad Febriyanto', '11395', '2014', '087850131771', 'assets/image/isco/sg/kp/93eba6a0070935dea464a32bada21430e771030e.JPG', 70, 1),
(113, '2015-06-13 15:32:40', '2015-07-04 00:28:33', 'Abd Latif', '11205', '2014', '087850100152', 'assets/image/isco/sg/kp/6070e929b21063f7af8cbd9e9cd790aa158f37bb.jpg', 70, 2),
(114, '2015-06-15 18:00:44', '2015-06-22 07:23:23', 'Andreas P. Panjaitan', '9996530282', '2014', '081263284092', 'assets/image/isco/sg/kp/a52e6acc840e6301f6e0ac8e67be4a7fca1dfbfb.jpg', 71, 1),
(115, '2015-06-15 18:00:44', '2015-06-28 20:32:57', 'Sashia T. Sitorus', '9996530433', '2014', '085262775004', 'assets/image/isco/sg/kp/dc423dbba884fec1b6c1a221c4dba86a3db07e54.jpg', 71, 2),
(118, '2015-06-16 03:00:01', '2015-06-16 03:05:34', 'DANI NATANAEL', '20243', NULL, '082220301946', NULL, 73, 1),
(119, '2015-06-16 03:00:07', '2015-06-16 03:08:46', 'ADI SANTIKO', '20238', NULL, '082220301946', NULL, 73, 2),
(120, '2015-06-16 05:43:22', '2015-06-16 05:43:22', 'Chike Kurnia Putri', NULL, NULL, NULL, NULL, 74, 1),
(121, '2015-06-16 05:43:22', '2015-06-16 05:43:22', '', NULL, NULL, NULL, NULL, 74, 2),
(122, '2015-06-16 22:43:30', '2015-06-23 09:04:24', 'Ulum Imami Fuji', '7503', '2013', '087853643296', 'assets/image/isco/sg/kp/fd8ee764ee61694c7f5f5a43a97c841fdcfbb92f.JPG', 75, 1),
(123, '2015-06-16 22:43:30', '2015-06-23 09:04:24', 'Setya Mega Yunita', '7485', '2013', '085733319298', 'assets/image/isco/sg/kp/fd8ee764ee61694c7f5f5a43a97c841fdcfbb92f.JPG', 75, 2),
(124, '2015-06-17 19:32:32', '2015-06-17 19:54:18', 'masitha luthfiya millatasyifa', '12464', '2013', '081390069394', NULL, 76, 1),
(125, '2015-06-17 19:32:32', '2015-06-17 19:32:32', '', NULL, NULL, NULL, NULL, 76, 2),
(126, '2015-06-17 21:06:09', '2015-06-22 21:27:23', 'Rusyda Savira', '12534', '2014', '087754401126', NULL, 77, 1),
(127, '2015-06-17 21:06:09', '2015-06-23 05:30:30', 'Desi Arsitawati', '12263', '2014', '089614996673', NULL, 77, 2),
(128, '2015-06-17 22:21:50', '2015-06-19 06:35:36', 'Ajie Prasetyo', '7191', '2013', '085258787044', 'assets/image/isco/sg/kp/40f816a4f2d00d7e3809c8a27ec9c14129bbc852.png', 78, 1),
(129, '2015-06-17 22:21:50', '2015-06-19 06:35:36', 'Alvin Nadiroh', '7198', '2013', '087703026319', 'assets/image/isco/sg/kp/f6b8ac81aba188ceee4228c4833c26376b655bde.jpg', 78, 2),
(130, '2015-06-19 17:30:44', '2015-06-20 19:37:49', 'Alfan Qodiri', '6894', '2013', '085784841370', 'assets/image/isco/sg/kp/a39274e21ceb11c04c5253db09413803bcaafcef.jpg', 79, 1),
(131, '2015-06-19 17:30:45', '2015-06-20 19:37:49', 'Novinda Nalaratih', '7383', '2014', '085730896941', 'assets/image/isco/sg/kp/a39274e21ceb11c04c5253db09413803bcaafcef.jpg', 79, 2),
(132, '2015-06-19 22:15:03', '2015-06-24 00:11:38', 'Nanda Rizky Anugerah Irdanin Putra', '12848', '2013', '085730982786', 'assets/image/isco/sg/kp/fb3e45399d05992e63fe9195a9ea232578239218.JPG', 80, 1),
(133, '2015-06-19 22:15:03', '2015-06-24 00:11:38', 'Haris Hariza Ekarinda', '12737', '2013', '089675711725', 'assets/image/isco/sg/kp/fb3e45399d05992e63fe9195a9ea232578239218.jpg', 80, 2),
(134, '2015-06-20 20:00:03', '2015-06-20 21:30:03', 'izzatul masruroh', '6940', '2013', '083854729759', 'assets/image/isco/sg/kp/d9e8ebc2e88596d57aec6a0de0b2e705744a162e.jpg', 81, 1),
(135, '2015-06-20 20:00:03', '2015-06-20 21:30:03', 'amaliatus solikhah', '6829', '2013', '085645035908', 'assets/image/isco/sg/kp/b4a9a1049974463f87ff5b572eaaddaccca6490a.jpg', 81, 2),
(138, '2015-06-21 18:16:53', '2015-06-22 07:13:03', 'Rifo Ahmad Genadi', '131410062', '2013', '081214422882', 'assets/image/isco/sg/kp/95f399e5047492f4c185625a1992c5b5d3dedb59.jpg', 83, 1),
(139, '2015-06-21 18:16:53', '2015-07-04 18:10:27', 'Dinan Fadhlurrafi Fauzi Anwari', '131410042', '2013', '085659109666', 'assets/image/isco/sg/kp/5486b4a45013d3794e137bc3e9ff44187f000e28.jpg', 83, 2),
(142, '2015-06-21 22:17:56', '2015-06-21 22:17:56', 'ACHMAD NOER MAULIDI', NULL, NULL, NULL, NULL, 85, 1),
(143, '2015-06-21 22:17:56', '2015-06-21 22:17:56', '', NULL, NULL, NULL, NULL, 85, 2),
(144, '2015-06-22 21:34:22', '2015-06-23 21:35:35', 'Abdul Halim', '13032762', '2013', '082382840322', 'assets/image/isco/sg/kp/b82bbdb6e57063ecfd8bc874fad36c39c50542bd.jpg', 86, 1),
(145, '2015-06-22 21:34:22', '2015-06-24 21:43:39', 'Nurmaulida Siregar', '13032819', '2013', '082172149115', 'assets/image/isco/sg/kp/d2b8392bb692550c9e58be3db25e7d513100e892.jpg', 86, 2),
(146, '2015-06-22 22:17:41', '2015-06-22 22:21:09', 'Ahmed Diaz Ravan', '130001', '2013', '087741211994', NULL, 87, 1),
(147, '2015-06-22 22:17:41', '2015-06-22 22:17:41', '', NULL, NULL, NULL, NULL, 87, 2),
(148, '2015-06-22 22:33:50', '2015-06-23 01:54:27', 'Elvira Risyeu Nur Annisa', '141511458', '2013', '087894178511', NULL, 88, 1),
(149, '2015-06-22 22:33:50', '2015-06-23 01:55:12', 'Mohammad Fahmi Hakim', '131410174', '2013', '087724955234', NULL, 88, 2),
(150, '2015-06-22 23:45:59', '2015-06-22 23:58:14', 'Andhika Dimas Purnomo', '13062', '2014', '082257028830', 'assets/image/isco/sg/kp/c2ccde8d030e33fcef641c449b007ee2376caa99.JPG', 89, 1),
(151, '2015-06-22 23:45:59', '2015-06-22 23:45:59', '', NULL, NULL, NULL, NULL, 89, 2),
(152, '2015-06-22 23:50:17', '2015-06-22 23:50:17', 'Andhika Dimas Purnomo', NULL, NULL, NULL, NULL, 90, 1),
(153, '2015-06-22 23:50:17', '2015-06-22 23:50:17', '', NULL, NULL, NULL, NULL, 90, 2),
(154, '2015-06-24 18:06:28', '2015-06-29 18:04:53', 'Evania Yulianti Suwanto', '131410085', '2013', '089652815324', 'assets/image/isco/sg/kp/0bd1971e28d2583259d1ef40494b0d31bcdd3a81.jpg', 91, 1),
(155, '2015-06-24 18:06:28', '2015-06-29 18:04:53', 'Rima Amira Darmawati', '131410099', '2013', '089682555222', 'assets/image/isco/sg/kp/9e086b3ad4aaa1c90c079cd5759f3738ba59c88f.jpg', 91, 2),
(156, '2015-06-25 01:05:49', '2015-07-06 08:14:10', 'Ratna Bintari', '1314101248', '2013', '08562954422', 'assets/image/isco/sg/kp/d61a4f8b88d3eb7a352c32681acef1537feecbf5.jpg', 92, 1),
(157, '2015-06-25 01:05:49', '2015-07-06 08:14:11', 'Margaret Tanjung', '1314101214', '2013', '087812211911', 'assets/image/isco/sg/kp/d61a4f8b88d3eb7a352c32681acef1537feecbf5.jpg', 92, 2),
(158, '2015-06-25 17:40:17', '2015-06-25 17:40:17', 'gajah', NULL, NULL, NULL, NULL, 93, 1),
(159, '2015-06-25 17:40:17', '2015-06-25 17:40:17', '', NULL, NULL, NULL, NULL, 93, 2),
(160, '2015-06-26 09:36:20', '2015-06-26 09:36:20', 'Lutvia Anggita Mayangsari', NULL, NULL, NULL, NULL, 94, 1),
(161, '2015-06-26 09:36:20', '2015-06-26 09:36:20', '', NULL, NULL, NULL, NULL, 94, 2),
(162, '2015-06-26 19:22:44', '2015-06-26 19:45:50', 'Ayu Novtia Sukma', '131410109', '2013', '085779356415', NULL, 95, 1),
(163, '2015-06-26 19:22:44', '2015-06-26 19:45:50', 'Siska Susilawati', '131410121', '2013', '085777163052', NULL, 95, 2),
(164, '2015-06-26 19:36:19', '2015-06-26 19:36:19', 'Ayu Novtia Sukma', NULL, NULL, NULL, NULL, 96, 1),
(165, '2015-06-26 19:36:19', '2015-06-26 19:36:19', '', NULL, NULL, NULL, NULL, 96, 2),
(166, '2015-06-26 19:58:09', '2015-06-26 20:02:46', 'Felly Halsa Fiana', NULL, NULL, '08997880244', NULL, 97, 1),
(167, '2015-06-26 19:58:09', '2015-06-26 19:58:09', '', NULL, NULL, NULL, NULL, 97, 2),
(168, '2015-06-28 00:37:01', '2015-06-28 00:44:45', 'Naufal ahsanul muhammad', '141046', '2014', '082370559280', NULL, 98, 1),
(169, '2015-06-28 00:37:01', '2015-06-28 00:51:39', 'T. Ade farhan ramadhana', '141055', '2014', '081235043634', NULL, 98, 2),
(170, '2015-06-29 21:19:34', '2015-06-29 21:35:06', 'Rahma Damayanti', '11081', '2013', '081325006919', NULL, 99, 1),
(171, '2015-06-29 21:19:34', '2015-06-29 21:35:06', 'Silvia Puji Paskawati', '11105', '2013', '085729008945', NULL, 99, 2),
(172, '2015-06-29 23:31:01', '2015-06-29 23:41:23', 'ERICK RAFLY KELIAT', '131410047', '2013', '082121154013', NULL, 100, 1),
(173, '2015-06-29 23:31:01', '2015-06-29 23:41:23', 'BRENDA IRENA', NULL, '2013', '081222919351', NULL, 100, 2),
(174, '2015-06-30 06:47:19', '2015-06-30 06:52:53', 'Akifa Andarini', '131410156', NULL, '0811117431', NULL, 101, 1),
(175, '2015-06-30 06:47:19', '2015-06-30 06:52:53', 'Gede Dharma Suputra', '131410168', NULL, '08568609257', NULL, 101, 2),
(176, '2015-06-30 17:30:47', '2015-06-30 17:30:47', 'RENALDI SATRIA HANDIKA', NULL, NULL, NULL, NULL, 102, 1),
(177, '2015-06-30 17:30:47', '2015-06-30 17:30:47', '', NULL, NULL, NULL, NULL, 102, 2),
(178, '2015-07-01 10:57:56', '2015-07-01 11:19:06', 'Aminatul Nur Afifah', '13797', '2013', '081946017077', 'assets/image/isco/sg/kp/3e8d4fe2c2cdcb3cfed873015a2c52c500b01a7b.jpg', 103, 1),
(179, '2015-07-01 10:57:56', '2015-07-01 11:19:06', 'Nadianna Nugrahayu Putri', '13966', '2013', '085736867588', 'assets/image/isco/sg/kp/3e8d4fe2c2cdcb3cfed873015a2c52c500b01a7b.jpg', 103, 2),
(180, '2015-07-02 15:05:56', '2015-07-02 15:51:27', 'Wildy Fachrizal', '7217', '2013', '087750243493', NULL, 104, 1),
(181, '2015-07-02 15:05:56', '2015-07-02 15:46:18', 'Nielda Alifah M', '7136', '2013', '085258415513', NULL, 104, 2),
(184, '2015-07-02 21:32:29', '2015-07-10 18:03:51', 'Ainun Rismandya', '13037', '2014', '085748463320', 'assets/image/isco/sg/kp/1cb5c9169c3e05d3bbead80b7f3453ac2b4a1752.jpg', 106, 1),
(185, '2015-07-02 21:32:29', '2015-07-03 19:00:22', 'Chadijah Ayu Mawarni', '13106', '2014', '082232173390', 'assets/image/isco/sg/kp/da3a05c009301f215e931dfd136095f1cb486ae8.jpg', 106, 2),
(186, '2015-07-03 20:06:09', '2015-07-03 20:17:59', 'Chamdan Aji', '7389', '2013', '083867643326', 'assets/image/isco/sg/kp/636b527c1a3eff1f63a7e260fbf1e81bdd650f01.jpg', 107, 1),
(187, '2015-07-03 20:06:09', '2015-07-03 20:17:59', 'Danang Tricahyono', '7393', '2013', '085729815081', 'assets/image/isco/sg/kp/636b527c1a3eff1f63a7e260fbf1e81bdd650f01.jpg', 107, 2),
(188, '2015-07-03 20:13:51', '2015-07-08 22:16:00', 'Kanita Shinta Wati', '7446', '2015', '089630706505', 'assets/image/isco/sg/kp/7e0d38d48e54991a30983b6c3824264794999a67.jpg', 108, 1),
(189, '2015-07-03 20:13:51', '2015-07-10 22:03:12', 'Erna Kumalasari', '7419', '2015', '087839838082', 'assets/image/isco/sg/kp/fc3654eba4b75c89184347988ff73f52ff87babc.jpg', 108, 2),
(190, '2015-07-03 20:32:25', '2015-07-03 20:32:25', 'Tika Laksita Nursila Dewi', NULL, NULL, NULL, NULL, 109, 1),
(191, '2015-07-03 20:32:25', '2015-07-03 20:32:25', '', NULL, NULL, NULL, NULL, 109, 2),
(192, '2015-07-04 02:20:40', '2015-07-09 16:39:55', 'M. Hamiduddin', '4081', '2013', '085655443230', 'assets/image/isco/sg/kp/a4a426093f711606507d72adcfcb42a219ba6ed3.jpg', 110, 1),
(193, '2015-07-04 02:20:41', '2015-07-09 16:39:56', 'Salman Ainun Wahab', '4183', '2013', '085791546746', 'assets/image/isco/sg/kp/a4a426093f711606507d72adcfcb42a219ba6ed3.jpg', 110, 2),
(194, '2015-07-05 05:49:02', '2015-07-05 06:02:27', 'Bini Arta Utama', '10964', '2013', '089613623996', 'assets/image/isco/sg/kp/18ddd6e581b6306600474b4cc83550f2e1cc388e.jpg', 111, 1),
(195, '2015-07-05 05:49:02', '2015-07-05 06:02:27', 'Nadya Fianny Ardita', '11057', '2013', '087738841498', 'assets/image/isco/sg/kp/7ae4690b414b731dd88e32cc8fd92c191e3592b4.jpg', 111, 2),
(196, '2015-07-05 21:53:41', '2015-07-05 22:09:13', 'Royyan Rijal Ramadhan', '12442', '2013', '081329722558', 'assets/image/isco/sg/kp/3e30f84d6eb0adfb2091e4827ba5cb7b6042274b.JPG', 112, 1),
(197, '2015-07-05 21:53:41', '2015-07-05 22:09:13', 'Dzikrur Rohmani', '12821', '2014', '081329722558', 'assets/image/isco/sg/kp/3813fe4069e6c57faf3d93292e01148030c043b2.jpg', 112, 2),
(198, '2015-07-05 22:01:33', '2015-07-05 22:15:39', 'Erwin Fernanda', '12823', '2014', '081329722558', 'assets/image/isco/sg/kp/de20b675a561e93e91cc3290467224e38158c13f.jpg', 113, 1),
(199, '2015-07-05 22:01:33', '2015-07-05 22:15:39', 'Khaulia Nur Sauma', '12431', '2013', '081329722558', 'assets/image/isco/sg/kp/de20b675a561e93e91cc3290467224e38158c13f.jpg', 113, 2),
(200, '2015-07-05 22:27:59', '2015-07-07 06:30:45', 'RIF''AN AMROZI', '12811', '2013', '082331991945', 'assets/image/isco/sg/kp/c01f9e4aca7d1b22c5acd2f000fa60c495d6d1a6.jpg', 114, 1),
(201, '2015-07-05 22:27:59', '2015-07-07 06:30:45', 'PRADAPTA KUMARA PINTAHILLAH', '12790', '2013', '085669567890', 'assets/image/isco/sg/kp/3dc748ce34b4d259ce3b12ed62709fb593dc4bc1.jpg', 114, 2),
(204, '2015-07-05 23:03:08', '2015-07-05 23:03:08', 'masitha luthfiya', NULL, NULL, NULL, NULL, 116, 1),
(205, '2015-07-05 23:03:08', '2015-07-05 23:03:08', '', NULL, NULL, NULL, NULL, 116, 2),
(208, '2015-07-06 19:51:56', '2015-07-06 19:51:56', 'MASHITA', NULL, NULL, NULL, NULL, 118, 1),
(209, '2015-07-06 19:51:56', '2015-07-06 19:51:56', '', NULL, NULL, NULL, NULL, 118, 2),
(210, '2015-07-06 20:15:36', '2015-07-06 20:15:36', 'LISA ROSYIDA', NULL, NULL, NULL, NULL, 119, 1),
(211, '2015-07-06 20:15:36', '2015-07-06 20:15:36', '', NULL, NULL, NULL, NULL, 119, 2),
(212, '2015-07-07 00:15:57', '2015-07-07 00:22:53', 'MOHAMAD IRFAN', NULL, '2012', '082320526625', NULL, 120, 1),
(213, '2015-07-07 00:15:57', '2015-07-07 00:22:58', 'SITI SHOLIHAH', NULL, '2012', NULL, NULL, 120, 2),
(214, '2015-07-07 17:18:22', '2015-07-07 17:18:22', 'ULFA INAS SAYEKTI', NULL, NULL, NULL, NULL, 121, 1),
(215, '2015-07-07 17:18:22', '2015-07-07 17:18:22', '', NULL, NULL, NULL, NULL, 121, 2),
(216, '2015-07-07 21:15:58', '2015-07-07 21:23:06', 'Ridha Sofana D.P', '8903', '2013', '085645078689', NULL, 122, 1),
(217, '2015-07-07 21:15:58', '2015-07-07 21:23:06', 'Nikmatun Nurul F', '8876', '2013', '085648768937', NULL, 122, 2),
(218, '2015-07-07 22:24:02', '2015-07-07 22:33:49', 'Nadea Fikrah Rasuli', '14021614', '2014', '081235012146', NULL, 123, 1),
(219, '2015-07-07 22:24:03', '2015-07-07 22:29:15', 'Nastiti Kuswardhani', NULL, '2014', '085730583663', NULL, 123, 2),
(220, '2015-07-08 02:04:14', '2015-07-08 02:04:14', 'sugeng budi ariga', NULL, NULL, NULL, NULL, 124, 1),
(221, '2015-07-08 02:04:14', '2015-07-08 02:04:14', '', NULL, NULL, NULL, NULL, 124, 2),
(222, '2015-07-08 02:55:51', '2015-07-14 18:45:19', 'Nugroho Maulana Majid', '020463', '2013', '085733904949', NULL, 125, 1),
(223, '2015-07-08 02:55:51', '2015-07-14 18:43:19', 'Lutfiana Wahyuni', '020396', '2013', '082230192544', NULL, 125, 2),
(224, '2015-07-08 03:17:10', '2015-07-08 03:24:22', 'ISLA GHEA PRADINA', '020377', '2013', '085755645230', NULL, 126, 1),
(225, '2015-07-08 03:17:10', '2015-07-08 03:24:22', 'ANNISA SALSABEE RAHMADIANI', '020256', '2013', '085735581636', NULL, 126, 2),
(226, '2015-07-08 22:35:45', '2015-07-08 22:35:45', 'Roosita Noor', NULL, NULL, NULL, NULL, 127, 1),
(227, '2015-07-08 22:35:45', '2015-07-08 22:35:45', '', NULL, NULL, NULL, NULL, 127, 2),
(228, '2015-07-08 23:19:06', '2015-07-08 23:19:06', 'Fahtia', NULL, NULL, NULL, NULL, 128, 1),
(229, '2015-07-08 23:19:06', '2015-07-08 23:19:06', '', NULL, NULL, NULL, NULL, 128, 2),
(230, '2015-07-09 03:06:03', '2015-07-11 03:20:40', 'Shafira Salsabila Suri', '19526', '2013', '082185179700', 'assets/image/isco/sg/kp/2d2a051725178b929472647664841888fb22df62.jpg', 129, 1),
(231, '2015-07-09 03:06:03', '2015-07-11 03:20:40', 'Feronia Elfrida', '19504', '2013', '081271285404', 'assets/image/isco/sg/kp/2d2a051725178b929472647664841888fb22df62.jpg', 129, 2),
(232, '2015-07-09 08:38:25', '2015-07-12 08:05:22', 'Untea Amalia Cahyani ', '146565', '2014', '082332102584', 'assets/image/isco/sg/kp/2caff019c10f3da1c45cc7ae887f864a06247354.jpg', 130, 1),
(233, '2015-07-09 08:38:25', '2015-07-12 08:05:22', 'Amanda Rosdiana Fitri', '146547', '2014', '085706011962', 'assets/image/isco/sg/kp/2caff019c10f3da1c45cc7ae887f864a06247354.jpg', 130, 2),
(234, '2015-07-09 08:45:52', '2015-07-09 08:49:33', 'Fauzan Rafif', '9988530909', '2013', '082168025233', NULL, 131, 1),
(235, '2015-07-09 08:45:52', '2015-07-09 08:49:33', 'Satrio Sulaksono', NULL, '2013', NULL, NULL, 131, 2),
(236, '2015-07-09 18:31:43', '2015-07-09 18:31:43', 'Meita Surya Saputri', NULL, NULL, NULL, NULL, 132, 1),
(237, '2015-07-09 18:31:43', '2015-07-09 18:31:43', '', NULL, NULL, NULL, NULL, 132, 2),
(238, '2015-07-09 20:15:36', '2015-07-12 02:07:03', 'Ardy Gamawanto', '131410227', '2013', '081288255352', 'assets/image/isco/sg/kp/7cb549c651d44d86e02b39c811909c493f641650.jpg', 133, 1),
(239, '2015-07-09 20:15:36', '2015-07-12 02:14:56', 'Rivan Pratama Yuda', '131410151', '2013', '085715947540', 'assets/image/isco/sg/kp/8c58cbde9f55886c05587c43a966fcb5523441ac.jpg', 133, 2),
(240, '2015-07-09 22:58:16', '2015-07-09 22:58:16', 'Yusril Nurhidayat', NULL, NULL, NULL, NULL, 134, 1),
(241, '2015-07-09 22:58:16', '2015-07-09 22:58:16', '', NULL, NULL, NULL, NULL, 134, 2),
(242, '2015-07-10 00:44:31', '2015-07-10 00:44:31', 'Fitriana kemala sari', NULL, NULL, NULL, NULL, 135, 1),
(243, '2015-07-10 00:44:31', '2015-07-10 00:44:31', '', NULL, NULL, NULL, NULL, 135, 2),
(244, '2015-07-10 05:56:02', '2015-07-12 06:36:15', 'Geby Debora', '13085', '2013', '085817056877', NULL, 136, 1),
(245, '2015-07-10 05:56:02', '2015-07-12 06:36:15', 'Nabilla Zulfa', '13042', '2013', '081284593803', NULL, 136, 2),
(246, '2015-07-10 10:00:18', '2015-07-15 08:53:36', 'Kurniadinur', '130373', '2013', '082304211455', NULL, 137, 1),
(247, '2015-07-10 10:00:18', '2015-07-15 08:53:36', 'Yofi Firmansyah', '130395', '2013', '082363855868', NULL, 137, 2),
(248, '2015-07-10 10:02:06', '2015-07-10 10:02:06', 'AFIFAH NAURAH ZAHRAN', NULL, NULL, NULL, NULL, 138, 1),
(249, '2015-07-10 10:02:06', '2015-07-10 10:02:06', '', NULL, NULL, NULL, NULL, 138, 2),
(250, '2015-07-11 00:54:19', '2015-07-11 01:39:21', 'Assa Anike Putri', '131410053', '2013', '088802154569', NULL, 139, 1),
(251, '2015-07-11 00:54:19', '2015-07-11 01:55:50', 'Anggita Fitri Oktavian', '131410037', '2013', '081932233642', NULL, 139, 2),
(252, '2015-07-11 01:23:27', '2015-07-11 01:23:27', 'Assa Anike Putri', NULL, NULL, NULL, NULL, 140, 1),
(253, '2015-07-11 01:23:27', '2015-07-11 01:23:27', '', NULL, NULL, NULL, NULL, 140, 2),
(254, '2015-07-11 01:38:57', '2015-07-11 01:38:57', 'Raden Muhamad Ilham Margana', NULL, NULL, NULL, NULL, 141, 1),
(255, '2015-07-11 01:38:57', '2015-07-11 01:38:57', '', NULL, NULL, NULL, NULL, 141, 2),
(256, '2015-07-11 03:06:41', '2015-07-11 03:06:41', 'Rajabandanu Subhi', NULL, NULL, NULL, NULL, 142, 1),
(257, '2015-07-11 03:06:41', '2015-07-11 03:06:41', '', NULL, NULL, NULL, NULL, 142, 2),
(258, '2015-07-11 04:35:42', '2015-07-11 07:01:33', 'Muhammad Faisal Akbar', '13141109', '2013', '085714993444', NULL, 143, 1),
(259, '2015-07-11 04:35:42', '2015-07-11 07:06:11', 'Rajabandanu Subhi', '13141155', '2013', '087886086679', 'assets/image/isco/sg/kp/c82804fb62a8be5249b23c297e50d8a1b660c027.jpg', 143, 2),
(260, '2015-07-11 06:17:36', '2015-07-12 16:36:39', 'CAHYA IDZNII IGAWATI', '13180', '2013', '085731406540', 'assets/image/isco/sg/kp/d8a71c6c1db4a7e289115d5f9ff3fe41b9bd68ce.jpg', 145, 1),
(261, '2015-07-11 06:17:36', '2015-07-12 16:37:42', 'PRISMA HILMI ROZANDIKA', '13363', '2013', '085735656653', 'assets/image/isco/sg/kp/d8a71c6c1db4a7e289115d5f9ff3fe41b9bd68ce.jpg', 145, 2),
(262, '2015-07-11 06:37:44', '2015-07-11 07:19:56', 'SHINTA AMALIA MUCHLIS PUTRI', '6126', '2013', '081330448497', 'assets/image/isco/sg/kp/cc28a4599b45b3f176d9950c941ee22190aedfdf.jpg', 146, 1),
(263, '2015-07-11 06:37:44', '2015-07-11 07:19:56', 'AGUSTIA TRI WIDAYANTI', NULL, '2013', '081234652065', NULL, 146, 2),
(264, '2015-07-11 17:57:18', '2015-07-11 18:27:16', 'Berta Kartika Chandra', '17193', '2013', '085649026764', 'assets/image/isco/sg/kp/501b87ae17fd4ef8eaf383a590e38be2e5a11454.jpg', 147, 1),
(265, '2015-07-11 17:57:18', '2015-07-11 18:27:16', 'Nanda Dwytasari', '17361', '2013', '085736621503', 'assets/image/isco/sg/kp/501b87ae17fd4ef8eaf383a590e38be2e5a11454.jpg', 147, 2),
(266, '2015-07-11 21:08:17', '2015-07-12 02:37:45', 'T.Fachrul Husaini', '3727', '2013', '082277160760', NULL, 148, 1),
(267, '2015-07-11 21:08:17', '2015-07-12 02:39:47', 'Bagus Mulyandar', '3544', '2013', '082276030152', 'assets/image/isco/sg/kp/a6f10dd95acf7351192c5a5ee405f977e01bbcb3.jpg', 148, 2),
(268, '2015-07-12 01:55:20', '2015-07-12 05:31:13', 'Febiola Vivita Kusumaningrum', '9998655524', '2014', '081315339336', NULL, 149, 1),
(269, '2015-07-12 01:55:20', '2015-07-12 05:31:13', 'Dinda Prameswari', NULL, '2014', NULL, NULL, 149, 2),
(270, '2015-07-12 03:38:12', '2015-07-12 03:38:12', 'FAUZI SEPTIAN WIJAYA', NULL, NULL, NULL, NULL, 150, 1),
(271, '2015-07-12 03:38:12', '2015-07-12 03:38:12', '', NULL, NULL, NULL, NULL, 150, 2),
(272, '2015-07-12 07:38:59', '2015-07-12 07:38:59', 'Ayu Aprilia', NULL, NULL, NULL, NULL, 151, 1),
(273, '2015-07-12 07:38:59', '2015-07-12 07:38:59', '', NULL, NULL, NULL, NULL, 151, 2),
(274, '2015-07-12 08:00:20', '2015-07-12 08:00:20', 'Ayu Aprilia', NULL, NULL, NULL, NULL, 152, 1),
(275, '2015-07-12 08:00:20', '2015-07-12 08:00:20', '', NULL, NULL, NULL, NULL, 152, 2),
(276, '2015-07-12 08:39:20', '2015-07-12 08:39:20', 'Hadi Mulya Anzhari', NULL, NULL, NULL, NULL, 153, 1),
(277, '2015-07-12 08:39:20', '2015-07-12 08:39:20', '', NULL, NULL, NULL, NULL, 153, 2),
(278, '2015-07-12 09:10:27', '2015-07-13 01:03:05', 'Ayu Aprilia', '8127', '2013', '085750667347', 'assets/image/isco/sg/kp/b6c0dc1920afc9d84c2cbe78712ecf8822e1e338.jpg', 154, 1),
(279, '2015-07-12 09:10:27', '2015-07-13 01:03:05', 'Reza Yusuf Maulana', '8209', '2013', '085787597847', 'assets/image/isco/sg/kp/b6c0dc1920afc9d84c2cbe78712ecf8822e1e338.jpg', 154, 2),
(280, '2015-07-12 09:16:44', '2015-07-12 09:23:15', 'Hadi Mulya Anzhari', '9986932750', '2013', '087841143309', 'assets/image/isco/sg/kp/e418f11d15518b72e1dbeb3cbc564e87ef4dc402.jpg', 155, 1),
(281, '2015-07-12 09:16:44', '2015-07-12 09:23:15', 'Nabila Rahmadani', NULL, '2013', NULL, NULL, 155, 2),
(282, '2015-07-12 21:48:12', '2015-07-13 19:10:24', 'Roosita Noor', '15075', '2014', '085655235697', 'assets/image/isco/sg/kp/31a0991db57c50f40382b588881b0cd86f59fe07.jpg', 156, 1),
(283, '2015-07-12 21:48:12', '2015-07-13 19:10:24', 'Murti Marinah', '15017', '2014', '085732631466', 'assets/image/isco/sg/kp/31a0991db57c50f40382b588881b0cd86f59fe07.jpg', 156, 2),
(284, '2015-07-13 00:57:25', '2015-07-13 01:01:27', 'FAUZI SEPTIAN WIJAYA', '12870', NULL, '085785763838', NULL, 157, 1),
(285, '2015-07-13 00:57:25', '2015-07-13 01:01:27', 'TAUFIQ TIRTAJIWANGGA', NULL, NULL, NULL, NULL, 157, 2),
(286, '2015-07-13 01:11:55', '2015-07-13 01:11:55', 'FAUZI SEPTIAN WIJAYA', NULL, NULL, NULL, NULL, 158, 1),
(287, '2015-07-13 01:11:55', '2015-07-13 01:11:55', '', NULL, NULL, NULL, NULL, 158, 2),
(288, '2015-07-13 03:42:14', '2015-07-13 03:42:14', 'Fikri Mulyadi', NULL, NULL, NULL, NULL, 159, 1),
(289, '2015-07-13 03:42:14', '2015-07-13 03:42:14', '', NULL, NULL, NULL, NULL, 159, 2),
(290, '2015-07-13 17:18:41', '2015-07-13 17:18:41', 'RIZKY EKA RACHMATILLAH AHMAD', NULL, NULL, NULL, NULL, 160, 1),
(291, '2015-07-13 17:18:41', '2015-07-13 17:18:41', '', NULL, NULL, NULL, NULL, 160, 2),
(292, '2015-07-13 17:21:36', '2015-07-13 17:21:36', 'RIZKY EKA RACHMATILLAH AHMAD', NULL, NULL, NULL, NULL, 161, 1),
(293, '2015-07-13 17:21:36', '2015-07-13 17:21:36', '', NULL, NULL, NULL, NULL, 161, 2),
(294, '2015-07-14 04:22:23', '2015-07-14 04:22:23', 'Arga Zaky Satria', NULL, NULL, NULL, NULL, 162, 1),
(295, '2015-07-14 04:22:23', '2015-07-14 04:22:23', '', NULL, NULL, NULL, NULL, 162, 2),
(296, '2015-07-14 18:40:02', '2015-07-14 18:46:25', 'Masagus Muhammad Riandi Ramadhan', NULL, '2014', '081220241493', NULL, 163, 1),
(297, '2015-07-14 18:40:03', '2015-07-14 18:46:25', '', NULL, '2014', NULL, NULL, 163, 2),
(298, '2015-07-15 02:42:54', '2015-07-15 05:03:06', 'fikry mulyadi', '1314100199', '2013', '089668122313', 'assets/image/isco/sg/kp/2e7f71674efa35c66283b58358d226f676c51333.jpg', 164, 1),
(299, '2015-07-15 02:42:54', '2015-07-15 05:03:06', 'Dewi Silviyani', '1314100009', '2013', '089690245753', 'assets/image/isco/sg/kp/2e7f71674efa35c66283b58358d226f676c51333.jpg', 164, 2),
(300, '2015-07-15 05:00:52', '2015-07-15 05:00:52', 'angga adhitya', NULL, NULL, NULL, NULL, 165, 1),
(301, '2015-07-15 05:00:52', '2015-07-15 05:00:52', '', NULL, NULL, NULL, NULL, 165, 2),
(302, '2015-07-15 06:58:23', '2015-07-16 00:20:30', 'GILBERT FEBIAN NAPITUPULU', '5040', '2014', '081264048339', 'assets/image/isco/sg/kp/b86d32344f2c569853930904cda7fe141ff054cc.jpg', 166, 1),
(303, '2015-07-15 06:58:23', '2015-07-16 00:20:31', 'CALVIN VICTOR JAYANTO PURBA', NULL, '2014', NULL, NULL, 166, 2),
(304, '2015-07-15 19:53:47', '2015-07-15 19:53:47', 'Said Mustaghfirin', NULL, NULL, NULL, NULL, 167, 1),
(305, '2015-07-15 19:53:47', '2015-07-15 19:53:47', '', NULL, NULL, NULL, NULL, 167, 2),
(306, '2015-07-15 20:24:23', '2015-07-15 20:24:23', 'Said Mustaghfirin', NULL, NULL, NULL, NULL, 168, 1),
(307, '2015-07-15 20:24:23', '2015-07-15 20:24:23', '', NULL, NULL, NULL, NULL, 168, 2),
(308, '2015-07-16 08:14:26', '2015-07-16 08:46:59', 'Geubrina Tari Puntia', '5251307', '2013', '081276063404', NULL, 169, 1),
(309, '2015-07-16 08:14:26', '2015-07-16 08:46:59', 'Sekar Arum  Ayuningtiyas', '6071407', '2013', '081276200242', NULL, 169, 2),
(310, '2015-07-16 08:33:23', '2015-07-16 08:56:04', 'Reinaldi Ferdian', '567 1307', '2013', '085315817000', NULL, 170, 1),
(311, '2015-07-16 08:33:23', '2015-07-16 08:56:04', 'M. Rifal Fan Putra', '544 1307', '2013', '081275308865', NULL, 170, 2),
(312, '2015-07-16 14:54:04', '2015-07-17 02:54:55', 'Nur sekti waskitha jati', NULL, '2015', '089608293430', NULL, 171, 1),
(313, '2015-07-16 14:54:04', '2015-07-16 14:54:04', '', NULL, NULL, NULL, NULL, 171, 2),
(314, '2015-07-16 19:39:54', '2015-07-16 19:39:54', 'Meliona', NULL, NULL, NULL, NULL, 172, 1),
(315, '2015-07-16 19:39:54', '2015-07-16 19:39:54', '', NULL, NULL, NULL, NULL, 172, 2),
(316, '2015-07-16 19:49:19', '2015-07-16 19:49:19', 'Dini Kartika Ansyari', NULL, NULL, NULL, NULL, 173, 1),
(317, '2015-07-16 19:49:19', '2015-07-16 19:49:19', '', NULL, NULL, NULL, NULL, 173, 2);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `urutan` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `deskripsi`, `question_id`, `created_at`, `updated_at`, `urutan`) VALUES
(1, 'Penyebut pada fungsi peluang yaitu total skor auxiliary information pada populasi.', 1, '2015-07-10 15:38:49', '2015-07-10 13:14:46', 1),
(2, 'Pada metode secara kumulatif, semakin besar range suatu observasi maka akan semakin besar kemungkinan untuk terpilih sebagai sampel', 1, '2015-07-10 15:38:54', '2015-07-10 13:09:09', 2),
(3, 'Pemilihan sampel dengan menggunakan prosedur PPS without replacement lebih sulit untuk dilakukan dibandingkan dengan PPS with replacement.', 1, '2015-07-10 15:38:58', '2015-07-10 13:03:32', 3),
(4, 'Pada PPD umumnya auxiliary information yang digunakan memiliki hubungan yang kuat dan positif dengan variabel yang diteliti.', 1, '2015-07-10 15:39:01', '2015-07-10 10:20:12', 4),
(5, 'PPS merupakan suatu design sampling.', 1, '2015-07-10 15:39:04', '2015-07-10 09:55:51', 5),
(6, '0,8932', 2, '2015-07-21 15:38:15', '2015-07-21 15:38:15', 1),
(7, '0,8855', 2, '2015-07-21 15:38:21', '2015-07-21 15:38:21', 2),
(8, '0,9163', 2, '2015-07-21 15:38:27', '2015-07-21 15:38:27', 3),
(9, '0,9012', 2, '2015-07-21 15:38:35', '2015-07-21 15:38:35', 4),
(10, '0,8622', 2, '2015-07-21 15:38:42', '2015-07-21 15:38:42', 5),
(11, '', 3, '2015-07-21 16:13:58', '2015-07-21 16:13:58', 1),
(12, '', 3, '2015-07-21 16:13:58', '2015-07-21 16:13:58', 2),
(13, '', 3, '2015-07-21 16:13:58', '2015-07-21 16:13:58', 3),
(14, '', 3, '2015-07-21 16:13:58', '2015-07-21 16:13:58', 4),
(15, '', 3, '2015-07-21 16:13:59', '2015-07-21 16:13:59', 5),
(16, '', 4, '2015-08-10 09:01:17', '2015-08-10 09:01:17', 1),
(17, '', 4, '2015-08-10 09:01:18', '2015-08-10 09:01:18', 2),
(18, '', 4, '2015-08-10 09:01:18', '2015-08-10 09:01:18', 3),
(19, '', 4, '2015-08-10 09:01:18', '2015-08-10 09:01:18', 4),
(20, '', 4, '2015-08-10 09:01:19', '2015-08-10 09:01:19', 5);

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
-- Table structure for table `kontes`
--

CREATE TABLE IF NOT EXISTS `kontes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `starttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kontes`
--

INSERT INTO `kontes` (`id`, `nama`, `starttime`, `endtime`, `created_at`, `updated_at`) VALUES
(1, 'Try Out', '2015-08-15 03:00:00', '2015-08-15 05:00:00', '2015-08-10 13:27:48', '2015-08-10 13:27:48'),
(2, 'Kontes 1', '2015-08-25 03:00:00', '2015-08-25 05:00:00', '2015-08-10 13:28:06', '2015-08-10 13:28:06'),
(3, 'Kontes 2', '2015-08-25 05:30:00', '2015-08-25 07:30:00', '2015-08-10 13:28:28', '2015-08-10 13:28:28'),
(4, 'Kontes 3', '2015-08-25 08:30:00', '2015-08-25 10:30:00', '2015-08-10 13:28:57', '2015-08-10 13:28:57'),
(5, 'Uji Coba', '2015-08-10 14:27:37', '2015-08-10 14:28:00', '2015-08-10 14:27:37', '2015-08-10 14:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `kontes_enrole`
--

CREATE TABLE IF NOT EXISTS `kontes_enrole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `kontes_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`kontes_id`),
  KEY `kontes_id` (`kontes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `kontes_enrole`
--

INSERT INTO `kontes_enrole` (`id`, `user_id`, `kontes_id`, `created_at`, `updated_at`) VALUES
(36, 28, 1, '2015-08-10 11:57:40', '2015-08-10 10:57:40'),
(37, 26, 1, '2015-08-10 10:57:40', '2015-08-10 10:57:40'),
(38, 1, 1, '2015-08-10 10:57:40', '2015-08-10 10:57:40'),
(40, 1, 5, '2015-08-10 14:21:44', '2015-08-10 14:21:44'),
(41, 26, 5, '2015-08-10 14:21:44', '2015-08-10 14:21:44');

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
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `score` varchar(10) NOT NULL,
  `answer_list` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kontes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `kontes_id` (`kontes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kodesoal` varchar(8) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `no` int(10) NOT NULL,
  `id_correct_answer` int(10) unsigned DEFAULT NULL,
  `id_kontes` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_user` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kodesoal` (`kodesoal`),
  KEY `id_correct_answer` (`id_correct_answer`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`),
  KEY `id_correct_answer_2` (`id_correct_answer`),
  KEY `id_kontes` (`id_kontes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `kodesoal`, `deskripsi`, `no`, `id_correct_answer`, `id_kontes`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 'SOAL1', '<p>Pernyataan berikut yang salah terkait metode proposional probability to siza (PPS) adalah :</p>\n', 1, 1, NULL, '2015-08-10 09:08:13', '2015-08-10 09:08:13', NULL),
(2, 'SOAL2', '<p>Dengan tingkat kepercayaan tertentu, rata-rata kejadian diare di setiap kelurahan di&nbsp;Kecamatan Jatinegara selama tiga bulan terkahir berada pada selang tertentu dengan batas bawah 1,48 kejadian diare. Dari hasil penarikan sampel untuk tiap-tiap&nbsp;kelurahan terpilih&nbsp;didapatkan&nbsp;rata-rata&nbsp;kejadian&nbsp;diare&nbsp;yaitu&nbsp;2,4&nbsp;kejadian&nbsp;dengan&nbsp;standar&nbsp;errornya&nbsp;sebesar&nbsp;0,77. Berapakah&nbsp;selisih antara nilai dugaan yang diperoleh dari sampel acak terhadap nilai&nbsp;parameter? Apa?</p>\n', 2, 8, NULL, '2015-08-10 09:08:13', '2015-08-10 09:08:13', NULL),
(3, 'SOAL3', '', 3, NULL, NULL, '2015-08-10 14:20:00', '2015-08-10 14:20:00', NULL),
(4, 'SOAL4', '', 4, 17, NULL, '2015-08-10 09:08:24', '2015-08-10 09:08:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soal_branch`
--

CREATE TABLE IF NOT EXISTS `soal_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soal_id` int(10) unsigned NOT NULL,
  `kontes_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `soal_id` (`soal_id`,`kontes_id`),
  KEY `kontes_id` (`kontes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `soal_branch`
--

INSERT INTO `soal_branch` (`id`, `soal_id`, `kontes_id`, `created_at`, `updated_at`) VALUES
(3, 2, 2, '2015-08-10 09:01:06', '2015-08-10 09:01:06'),
(10, 1, 1, '2015-08-10 10:47:03', '2015-08-10 10:47:03'),
(11, 3, 1, '2015-08-10 10:47:04', '2015-08-10 10:47:04'),
(12, 4, 1, '2015-08-10 10:47:04', '2015-08-10 10:47:04'),
(14, 1, 5, '2015-08-10 14:21:51', '2015-08-10 14:21:51'),
(15, 2, 5, '2015-08-10 14:21:51', '2015-08-10 14:21:51'),
(16, 3, 5, '2015-08-10 14:21:51', '2015-08-10 14:21:51'),
(17, 4, 5, '2015-08-10 14:21:51', '2015-08-10 14:21:51');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=174 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `created_at`, `updated_at`, `username`, `password`, `email`, `handphone`, `asal_sekolah`, `alamat_sekolah`, `status`, `kartu_pelajar`, `roles_id`, `remember_token`, `confirmed`, `confirmation_code`) VALUES
(1, '0000-00-00 00:00:00', '2015-08-10 14:21:55', 'adminganteng', '$2y$10$7h0mrlWcixb5STeLZJDzlOD768M7cTsrNikbJRX2NCGANp/PBL2WG', 'haha@isco.com', '087863969334', 'gak ada', 'sadasdas dasd asd as sd asdas dasd as', 1, 0, 1, 'DKNKGSwu07fcjJlmYCOT2LObYbuH1QP8XI5dUyB7DVl8neCyTH5OM2W6lrAt', 1, NULL),
(20, '2015-05-24 17:39:34', '2015-07-18 12:37:10', 'tes', '$2y$10$VUDVkB0gmZjhNHSBq2mlce8G2Xol5jff758Al.0wMB5sEO6YNzDq.', 'mandes95@gmail.com', '087863969334', 'SMAN 1 Sumbawa Besasr', 'sbw', 0, 0, 2, '6pUtDUwtZuB1IUgpcXYMhhKsed0QYIoIf3661Ym1BLulMMvNKYbgxvTfdKBd', 1, NULL),
(26, '2015-05-25 07:51:05', '2015-08-10 14:23:24', 'oji', '$2y$10$ZbGuq/gwR6F6hMAGxg42aOWkNSVAYEcX08NFzNMSUqnGWwPz4S9U6', '12.7012@stis.ac.id', '087863969334', 'SMAN 1 Sumbawa Besasr', 'sbw', 1, 0, 2, 'vYlQLZoZGfRjLRTJJZLKwfcNrm3thstLb67vpCF7LseGUCQ2oQ8bL7mOIv2O', 1, NULL),
(28, '2015-05-25 06:18:07', '2015-08-10 08:24:57', 'AA', '$2y$10$7A7wBmdRRMWnPXCtGC5TaO40eBjaFuCV71j.GZ9Eqx2pYgtEBsDNC', '12.7025@stis.ac.id', '081234567890', 'SMAN 1 Blitar', 'Blitar', 1, 0, 2, 'FlYbHxEGgDgfisLDWLHLbFzDaZglUxgGju4NtisHbGWhCKhxJyHB6FlTe0Zn', 1, NULL),
(30, '2015-05-25 17:13:38', '2015-06-05 05:45:42', 'cumacoba', '$2y$10$qsWzFanBtsqnh/MLiv4K9OgqumpNEmhPYae.uwb8DGvpTJyv5HQyO', 'fadelswebaddress@gmail.com', '089623066633', 'SMA Antah Berantah', 'Antah Berantah, Dunia Khayal', 0, 0, 2, 'bQFw0jj4kPmikhiyXBcGY8kR9NjYkcuVPZOR1jMPoiSZACnwWZDEo8lca8YE', 1, NULL),
(31, '2015-05-26 09:13:33', '2015-06-16 02:21:36', 'MVPAlliance', '$2y$10$ijQp0OJ.L8S5yBDJeJ27reldGx7wDw7693ACeZDfCn3gnmFN9f23a', 'new.arifrh199@gmail.com', '087871765339', 'SMA Negeri 1 Rangkasbitung', 'Jl RT Hardiwinangun No.24 Rangkasbitung-Lebak, Banten', 0, 0, 2, 'bDmzVaoVbCqQ2bF23OEFra6Yew6bY98X0AWFGrx04iiVyWswcYZMm5WUgPCZ', 1, NULL),
(33, '2015-05-27 23:02:44', '2015-05-28 04:48:34', 'M91A', '$2y$10$HJmuf270CvLWMJlELZO03ecJnZV5R.i3RkQflHhcMx24huAgjYkRC', 'asepmuh@gmail.com', '089669841489', 'SMAN 1 Garut', 'Jalan Merdeka 91 kecamatan tarogong kidul kabupaten Garut', 0, 0, 2, 'EtQRAhCsqrbsBNZLfboqRjKwAEvVEaK0pPbpa9gnQrsGsNlNs2XtT3aY22vl', 1, NULL),
(34, '2015-05-31 09:50:37', '2015-05-31 09:52:54', 'TheExpert&TheRamank', '$2y$10$QvzATazB06Ybss.oA2mUx.AUNRPAMLabRPEQtmnUsli9GSc2MSzsy', 'ahlanjufriabdullah@gmail.com', '085299388385', 'SMA Negeri 1 Takalar', 'JL. Tikola Dg. Leo', 0, 0, 2, '1EegZh1by1cWZQg10l1JIfwMYs1UVcKjPvguBqtpVRGHUR3kF6TXqD1xKz1M', 1, NULL),
(35, '2015-05-31 20:41:40', '2015-05-31 20:41:40', 'STATISKID', '$2y$10$B4tB5POvPLRw3sF473BOHuOZILk2le6hJWRO7xK.TIavWMOJpTRS6', 'alvinnadiroh@gmail.com', '085258787044', 'SMAN 1 Taman', 'Jl. Sawunggaling 2, Jemundo, Taman-Sidoarjo', 0, 0, 2, '', 0, 'ywRI6dq8UwwGXixYera3DeJI7FCYoS'),
(36, '2015-05-31 20:50:15', '2015-05-31 20:50:15', 'CLEVER', '$2y$10$/FQOBN0lFvBODN/JcPUal.BsaNOvA7A7Ps.iaifU5xdkpQgsDXm2e', 'pajie51@gmail.com', '085258787044', 'SMAN 1 Taman', 'Jl. Sawunggaling 2, Jemundo, Taman-Sidoarjo', 0, 0, 2, '', 0, 'qoyiCLDXcRrRprmfOqrve5dSdAEZvM'),
(37, '2015-06-01 04:52:38', '2015-06-01 05:07:05', 'chike', '$2y$10$JRLru9ZrbbXgxTvFHbWlAuIi/0D7DQVjTgHsiYRp5mWoA37KQqdRG', 'chikekurnia.16308@gmail.com', '085728449078', 'SMA 1 Kudus', 'Jl. Pramuka No. 41 Kudus', 0, 0, 2, 'WXcZm9BxltcGuT067am8gJUbhZIgLfi4ANaUUHJ8YbBdOjoQWamPQPFmEsqi', 1, NULL),
(38, '2015-06-02 00:56:40', '2015-06-05 04:05:00', 'Allah_Menangkanlah', '$2y$10$Tso8qLC50atEUtFOVhxV.eklPELzN4NLFwxjpw00euRNQmujuyBcm', 'rachmi.aulia14@gmail.com', '082244751200', 'SMA Negeri 1 Gresik', 'Jl. Arif Rahman Hakim no 1 Gresik', 0, 0, 2, 'nAfHD6mKPaDE774NDAo7nmsnM5quiKGhJPZTHOmQyzBalD2qer0IkotA4x5S', 1, NULL),
(39, '2015-06-02 02:38:19', '2015-07-09 11:15:32', 'AntiMainstream', '$2y$10$bQGJaYomqa7Cs/ZXGlonauNoaWhNEA0tDyKihyZaM.o3MPMpMJtvO', 'navykenovitasari@gmail.com', '083857950287', 'SMAN 1 MAGETAN', 'Jl. MONGONSIDI 24 MAGETAN 63313', 0, 0, 2, '3V6COta2m5f1pO0atBlIfcj3vUg9kWFuWvLwf75NCfCqqLhjqUrrz1cUoozN', 1, NULL),
(40, '2015-06-02 08:10:41', '2015-06-17 07:49:00', 'optimis', '$2y$10$7xZgDZ9WGk5ehU14yUA1SOSPD9RnIjR16L8PmuZXj1GB5.W9dFoAa', 'firdayudha@yahoo.co.id', '085853933414', 'SMAN NEGERI 1 KOTA MOJOKERTO', 'Jalan Irian Jaya no.1, Mojokerto, Jawa Timur, Indonesia', 0, 0, 2, 'ho8ab1d7lWEBZ8k0rEyLL1z1gJWQLjOPAwBqe6CvJTVFYx74Rc0CNPWARFeN', 1, NULL),
(44, '2015-06-02 18:00:39', '2015-06-21 00:59:48', 'BECOME_EINSTEIN', '$2y$10$u3BklzDwpmkVWzkBGmA6POFS.CD3CyepqLBh2BTTJmyaxPeMfUbf6', 'firmanwisnu00@gmail.com', '085648811245', 'SMAN 1 SOOKO', 'JALAN RA. BASUNI 361, SOOKO, MOJOKERTO', 0, 0, 2, 'v0frltElDVdCiM2tKFoa17j6c255KkW1z2X5WBlareNNUAfxxznA5OxHIIk7', 1, NULL),
(45, '2015-06-02 18:05:18', '2015-06-19 02:35:07', 'SOTO_BULAMAN', '$2y$10$uSMPtomLlpzoWJBwpm4BHuydo7QP6YERqmk4T2yp669GYmyi9jvU2', 'farah_thamrin@yahoo.co.id', '085648811245', 'SMAN 1 SOOKO', 'JALAN RA. BASUNI 361, SOOKO, MOJOKERTO', 0, 0, 2, '', 1, NULL),
(46, '2015-06-02 23:15:55', '2015-07-11 01:39:25', 'sigmapwk', '$2y$10$KxREm44PRIzQ7fsEP6/6X.W4Gl5yL7c5dMaa09FKuCBkcaKIN./3W', 'ilhammargana@gmail.com', '088808902523', 'sma negeri 1 purwakarta', 'jl.k.k. singawinata no.113 purwakarta', 0, 0, 2, 'AE96Z9DAzkFFGwNQ3XL0Bncirsm8apd4vrmCM2rxZGk8AD0diG7ZcyPKZ8KB', 1, NULL),
(47, '2015-06-03 06:26:26', '2015-06-03 06:28:33', 'B4', '$2y$10$p/DMlpeAtZnyH1naCFLPfO64WzbY4yf1k8OedA9cTi4UTTLcULsLe', 'dianoctavianaaziza@gmail.com', '085769847997', 'SMA Negeri 9 Bandar Lampung', 'Jl.Panglima Polem No.18 ,segala mider,tanjungkarang barat,bandar lampung,lampung', 0, 0, 2, 'YiK0N2jp0lGqeLWYvRAcI8ViFlg4KZetgVdoh1vw6IbUWOxbBPtBFx3ut13x', 1, NULL),
(50, '2015-06-03 20:51:29', '2015-06-03 21:01:42', 'XTREME', '$2y$10$1U3FjYR56K8POwJIp5Ixuu42wToxrgvn7PnnMtOPjpQ7aMy8TnT2e', 'putraadi664@gmail.com', '087755107929', 'SMA Negeri 1 Trenggalek', 'Jalan Soekarno-Hatta no. 13 Trenggalek', 0, 0, 2, 'Rtle2CrFlI8VQNzQD6UFGwFH5mrwXIxWxqWThsWzaHuT3f6Am77dC16MynSA', 1, NULL),
(51, '2015-06-05 06:29:00', '2015-06-05 06:29:00', 'Mar_Roy', '$2y$10$uAL.Axso1GQcL9w5qbPqd.UuTFcA6mFYzLtJ31VxkERryTSqSvZFG', 'margareth.dwiyanti@yahoo.com', '082156377047', 'SMAN 1 Medan', 'Jl.Cik Ditiro no.1', 0, 0, 2, '', 0, 'zPpFdK3RIf25Jw66A5seMQRor39ptx'),
(52, '2015-06-05 06:30:33', '2015-06-05 06:36:18', 'Mds_Roy', '$2y$10$ZdfjfHgQq7M4n8GLl7qzl.7IGPDn9m2fj43DyvYGYRTV21knMAFWm', 'margareth_1708@yahoo.com', '082156377047', 'SMAN 1 Medan', 'Jl.Cik Ditiro no.1', 0, 0, 2, 'nPdIbdUQILlg206h8HXfhGr21E8Y8VaFhGdeb8THLXYwpky7P0UW0IU69tnC', 1, NULL),
(53, '2015-06-05 09:18:06', '2015-06-20 15:18:36', 'ZEMITTER', '$2y$10$.XCKOhcVQY4k1jYJoMjgl.YSXRkS1KP4thZxL02k2sE5M/UXhBX4y', 'malikmulyawan@gmail.com', '085714212460', 'SMAN 1 KARAWANG', 'Jln.Jendral ahmad yani. karawang', 0, 0, 2, 'RIm2w1i1UqXQmVsIVb45p90btCLUVLZ95AusZ739A53Xzjhup98yMt3K6O4r', 1, NULL),
(54, '2015-06-06 04:13:44', '2015-06-06 05:11:50', '7class', '$2y$10$qGULOBqgFUFAMYounVoBJONJlI9YqGigxhQzSDdgcEl0wzB7scKkG', 'hayyuhyrhn@yahoo.co.id', '082332305265', 'SMAN 1 SOOKO', 'Jl. R. Akhmad Basuni 361 Mojokerto Jawa Timur', 0, 0, 2, 'G0ogXPwzpH3YB9BKvgr6yvu30Z01F9oAOWM9l1ro650mvQpbMntJsFnhn1XR', 1, NULL),
(55, '2015-06-06 06:05:04', '2015-06-06 07:07:58', 'mia eka novita', '$2y$10$2XoxasIk3.9nw.nMA05aQOFztIVi63M3ar/qxf7N4WXU7AGrBPhOC', 'Enovitam@gmail.com', '085606169080', 'sman 1 sooko ', 'jalan raya R.A  basuni 361 sooko mojokerto ', 0, 0, 2, '', 1, NULL),
(56, '2015-06-06 21:46:23', '2015-06-25 09:08:57', 'Mumtaz', '$2y$10$uq5Xso6sJpAC.t9Oo0hjj.Kz7/1g2MUHJn/ZpK4d80sn4HaW7jftC', 'aisyahfadila14@gmail.com', '085210265169', 'SMAN 1 SUMBAR', 'Jl. Solok Batuang Padang Panjang Timur', 0, 0, 2, 'U4Wq1ZCfj1kMhrCRxwDcEr1gqQ3ECiTiNMCguEm7sBFV8BY4yQmoo9dByX4f', 1, NULL),
(57, '2015-06-07 06:32:54', '2015-06-07 06:32:54', 'jomspres', '$2y$10$Wm/L1KnbOXeOHkT1uBuuSOdZG1WxgF.Jbex4XdZ6xc8unx0OrIcPW', 'faquatika@yahoo.com', '087752705933', 'SMAN 1 Waru', 'Jl. Brantas Barito Wisma Tropodo Waru Sidoarjo', 0, 0, 2, '', 0, 'mvgZumTEczjnNLYIO7UcvgGNKW3wbD'),
(63, '2015-06-10 18:50:02', '2015-07-13 17:19:43', 'Bojonegoro13', '$2y$10$rU8SlwxpyGdS0ylMjdEpXe0yJppals8gJFQVz0hWI4OH8sDYs2mhi', 'rizk.rzy@gmail.com', '085748905747', 'SMAN 1 Bojonegoro', 'Jl. Panglima Sudirman 28, Bojonegoro', 0, 0, 2, 'zwep918ptWTLpiXkkzADcwZAOSLtkari74JotcTM3WKMfAFx1YDztfy0NBGs', 1, NULL),
(64, '2015-06-11 05:45:01', '2015-06-11 06:25:20', 'douven', '$2y$10$P9LEb0i4x0SmbfwkjPwEEe32QM83pClPeceWa4cJjKwYr29dzypdq', 'valeriaviev@yahoo.com', '085920538828', 'SMAN 77 Jakarta', 'Jl. Cempaka Putih Tengah 17, Jakarta Pusat', 0, 0, 2, '', 1, NULL),
(65, '2015-06-11 19:15:58', '2015-06-12 08:48:19', 'Uvo', '$2y$10$oyxrfNzhkFs0IrrRa0vhIOhy.KS9V5BoamSM0Mrt9.t0j6EcD.dqi', 'dwinurunnisa@yahoo.com', '081331210247', 'SMA Negeri 1 Jember', 'Jl. Letjen Panjaitan no. 55, Jember, Jawa Timur ', 0, 0, 2, '', 1, NULL),
(66, '2015-06-12 00:15:02', '2015-06-12 00:20:52', 'nur', '$2y$10$9zhN9Gfa1iDflAhawAeCde8J5btrKejFvyGSPa1dnuZMknF1v4s7a', 'ulinmauritarachmi@ymail.com', '082332571893', 'SMA Negeri 1 Jember', 'Jl. Letjen Panjaitan no. 55 Jember, Jawa Timur', 0, 0, 2, '', 1, NULL),
(67, '2015-06-12 02:18:49', '2015-06-13 05:28:00', 'SEAT', '$2y$10$W1caSfrgrJ25B7tYF6LFP.c2RwfNtArtYRETN1fSXpisx3bAVeX16', 'monanginocha@gmail.com', '085338714333', 'SMA Tunas Daud', 'Jl. Kebo Iwa Utara 8', 0, 0, 2, 'InsavYSHjPiBYpaZzleTuMFxauakZgrtt30uQ231QG3T00WzZ3eTZ8OBw8KH', 1, NULL),
(68, '2015-06-13 09:04:22', '2015-06-13 09:08:09', 'Orchid', '$2y$10$9mJyW/UNS0epVzK8xV4.B.a9vrw5tw6aDWk0JyuaSUBuSpyeIKm4q', 'zendaoka@gmail.com', '082234232929', 'SMAN 1 Trenggalek', 'Jl. Soekarno - Hatta no. 13 Trenggalek', 0, 0, 2, '', 1, NULL),
(70, '2015-06-13 15:32:40', '2015-07-02 02:39:09', 'ghoviour', '$2y$10$BiWFz2u/g9a9hF0KRVEFiu5HXEXgaMgfBHEz7SZJG6bUWhziWCt7K', 'mohammadfebriyantoo@gmail.com', '087850131771', 'SMAN 1 PAMEKASAN', 'Jl. Pramuka No. 2', 0, 0, 2, 'DOy90k8OAnya2ONf2OQtCP8Bu9Qj6FHZRYFcsby0Q1d9dKsJC8SwqGkDyUlh', 1, NULL),
(71, '2015-06-15 18:00:44', '2015-06-28 20:34:24', 'Almamater', '$2y$10$oBzTHdGg/MVdlLhBpYqcC.JgvFVQ/YbvBYkkBZWLJxmX4wNUEpnjS', 'andreaspanjaitan123@ymail.com', '081263284092', 'SMAN 2 Balige', 'JL. KARTINI SOPOSURUNG BALIGE. Kode Pos, : 22312', 0, 0, 2, 't7pkfHZ3N2jfrujCzsz8Dot2MX6mUyPGmpFNxoT0X6Kjzi7t6FOXJ0FWNUSP', 1, NULL),
(73, '2015-06-16 02:59:59', '2015-06-16 03:03:03', 'statistiksmada', '$2y$10$XYWXP23S.Rp9ckAopLycdeB6IiL3HoVe7gH6yC7pssO0bME9MTB/i', 'dani_natanael46@yahoo.co.id', '082220301946', 'SMA NEGERI 2 PURWOKERTO', 'Jln. Jend. Gatot Soebroto, No. 69, Purwokerto', 0, 0, 2, 'V37vYkoJYtXfYG5gKIunYm2nwQo1r4J973vHMoOUC3IDzRYkKbpgUSvC3UrH', 1, NULL),
(74, '2015-06-16 05:43:21', '2015-06-16 05:43:49', 'Grande', '$2y$10$zVHQ0CPMp32aK9zcjMFxcuBel7gcymwlTkVETfcEJphuEen/zSPhK', 'biebergrandex@gmail.com', '085728449078', 'SMA 1 Kudus', 'Jl. Pramuka No. 41 Kudus', 0, 0, 2, '', 1, NULL),
(75, '2015-06-16 22:43:30', '2015-06-23 23:58:50', '1P4', '$2y$10$Gb5ynjbCRlHtHyyci6mDZeqN7K5DSItx.O1EUsQ3SEpJiqKVz9sIK', 'setyamegayunita@gmail.com', '085733319298', 'SMA Negeri 1 Taman', 'Jl. Sawunggaling No. 2 Jemundo-Taman, Sidoarjo, Jawa Timur.', 0, 0, 2, 'IXiWuikuCMp2o2ym2Uzx3tr3nN49MVSXQPcoTXAQTJo09zfoP6dLrQSa7qqp', 1, NULL),
(76, '2015-06-17 19:32:32', '2015-07-05 22:44:57', 'lisanurainirosyida', '$2y$10$Zb1M2KShwshs7JGJcdWy4Okru9IRYnTc7YraiYr0tgxNoTwK2nvjm', 'fairy_of_smile@yahoo.com', '081390069394', 'MAN 1 Surakarta', 'Surakarta', 0, 0, 2, 'HNPnIfMkJOCup98ytEUSG1fh7J6H5pbDBaXhpGPEdweONMljA2qyblSjyu5A', 1, NULL),
(77, '2015-06-17 21:06:09', '2015-06-23 05:37:43', 'RUDE', '$2y$10$J6FaoBwtzJJ8ATpQenkJ0OcPoHoynzhTtcgrmZ.aSLRhKph9UNDa2', 'desiiiarsitaaa@yahoo.com', '087754401126', 'SMAN 1 PANDAAN', 'Jalan Dr. Sutomo, Pandaan, Pasuruan, Jawa Timut', 0, 0, 2, 'MFIAPWWmH7YF9VSlfl7U7dmJTCGCZQc9ZL95Xp8Dzz1bwpWbTdwAyaQXa4Cv', 1, NULL),
(78, '2015-06-17 22:21:50', '2015-06-19 06:39:07', 'SMANITA', '$2y$10$TFiD0jMyUuv6zqzO7j1I0OCXsVtJzTK9mm8jnGKck.2i/ELv6aJbW', 'ajieprasetyo344@yahoo.co.id', '085258787044', 'SMAN 1 Taman', 'Jl. Sawunggaling 2, Jemundo, Taman-Sidoarjo', 0, 0, 2, 'tR6VjDze3TePynlZBpOs3V3PXbQ39cOJOr1IWGrikCeFyTXMVMScBZwySzCz', 1, NULL),
(79, '2015-06-19 17:30:44', '2015-06-28 18:04:36', 'Rafa', '$2y$10$h35dNOdO2/qW1/T.3aeh0e1L4.N.zirvyGJ77l3OyA8vShjfWM0gu', 'alfanqodiriey@gmail.com', '085784841370', 'MAN Purwoasri - Kab. Kediri', 'Jalan Pahlawan No. 66 Purwoasri Kediri', 0, 0, 2, 'GJ3zCtPceP8kfR0ImmaNFn7Vmr4VSlcubUwJbumwW0Awz2Yzakm0yV7Dx8nW', 1, NULL),
(80, '2015-06-19 22:15:03', '2015-06-19 22:23:44', 'ADIDAS', '$2y$10$OdNwmCf4xjCufq1sHeDBcecb/93RgLYTUOFM8rJ0tveRBmoVRZqDO', 'rizky_anugerah@rocketmail.com', '085730982786', 'SMAN 1 SOOKO', 'Jalan R.A Basuni 361 Sooko Kab.Mojokerto', 0, 0, 2, 'xH1uGmrLhzJT7YBeIccLqkKk2Dmgz7bOE6FXdufTPqhlg1m5FVCFeE5Es7YJ', 1, NULL),
(81, '2015-06-20 20:00:03', '2015-06-20 20:59:32', 'lucky', '$2y$10$PrfKYZvT4fcHsThIjzqhmeKU1vUgwung6tQGG7J.EXDVL3/QKiYHy', 'izzatulmasrurog@gmail.com', '083854729759', 'sma negeri 21 surabaya', 'jl. argopuro no. 11-15 surabaya', 0, 0, 2, '', 1, NULL),
(83, '2015-06-21 18:16:53', '2015-06-23 23:37:45', 'Pejuang_Subuh', '$2y$10$fMOdd9YYMB0ru922s83ikuShPF685lyvztw5p1HRNzK8LAQOyAKc.', 'rifoagenadi@gmail.com', '081214422882', 'SMAN 1 Garut', 'Jl. Merdeka no.91, Kab. Garut, Prov. Jawa Barat', 0, 0, 2, '55sxlRMPHS6ai2HYYMsLn33ndvAFoYVg553W4DGVM4CvbwrkulDl5FggYhHn', 1, NULL),
(85, '2015-06-21 22:17:56', '2015-06-21 22:20:25', 'STATISTIC''S', '$2y$10$462RSmfOBzbOAXEXUrz7muIc05XuIBkUt4h6krLG61iESFC2Nux8O', 'achnoermaulidi@gmail.com', '087701839151', 'SMAN 1 PAMEKASAN', 'JALAN PRAMUKA NO 2 PAMEKASAN', 0, 0, 2, 'veI83vyu4ogTNKadsg4FLpjXZBwcCfMqHQmHiEKMIeRPUXj0jbRGNoKX6tJw', 1, NULL),
(86, '2015-06-22 21:34:22', '2015-06-25 07:33:00', 'SILMA', '$2y$10$T/xFoUBXOeyiA36NzbH8xOu6zNVLhcw5J6iUOMn07qfDBGXAn6hEy', 'cobachar@gmail.com', '082382840322', 'SMAN 3 Batam', 'Jl.Rajawali Kelurahan Belian Kecamatan BatamKota Kota Batam Provinsi Kepulauan Riau', 0, 0, 2, 'CWBf4FfoaFPRUVbXSjORN1mIC5jYpYHr1g3vYPsiU6zCfAbpyeMZk7znprJ7', 1, NULL),
(87, '2015-06-22 22:17:39', '2015-06-22 22:18:30', 'Merakyat', '$2y$10$r7EIkuAjnHIz1s.trwgSBOorRDnZi910wISvG3nNdsrJn4YrizXSC', 'diazravan@gmail.com', '087741211994', 'SMA Sampoerna', 'Jalan Raya Sukabumi km.17 Kode pos 16730 Kinasih resort', 0, 0, 2, '', 1, NULL),
(88, '2015-06-22 22:33:49', '2015-06-22 22:36:42', 'merdeka91', '$2y$10$27zn/BK/tu4LB43pWWm03evhj4/buG151ftgs0vhWmCyKfAC/5ocy', 'elvira.risyeu@yahoo.com', '087894178511', 'SMAN 1 Garut ', 'Jln. Merdeka No.91', 0, 0, 2, '', 1, NULL),
(89, '2015-06-22 23:45:59', '2015-06-23 00:12:52', 'pastijuara', '$2y$10$LZGS.IfXBmG.TV5jJMJOoOvnYhqIuuWo6OGNJG8dSUceTBZJfo8.K', 'andikadimas93@gmail.com', '082257028830', 'SMAN 1 Sooko', 'JL. RA Basuni no 361, Sooko, Mojokerto', 0, 0, 2, 'PCM8UmLZl0SnIoZ0mzexlo54xDPT1gqco0nKz6DQPAt1GYUJcSBM73nBUnbA', 1, NULL),
(90, '2015-06-22 23:50:17', '2015-06-22 23:50:17', 'juara', '$2y$10$R.dDLsYXatLsHDA.V.ar6e6o4FR/wSsZ33zn4FMmXw1sVINIT6wDC', 'andikadimas93@yahoo.com', '082257028830', 'SMAN 1 Sooko', 'JL. RA Basuni no 361, Sooko, Mojokerto', 0, 0, 2, '', 0, 'glgOcHQmpq57k4VZt7vVb9QpANM4PB'),
(91, '2015-06-24 18:06:28', '2015-06-29 18:05:04', 'kombinatorik', '$2y$10$bCqtTBu4/tlqBoJ8ZtKqs.64fXzRsYvGYxEfPOhTeq1kV19MBeVKW', 'evania_ys@yahoo.co.id', '089682555222', 'SMAN 1 GARUT', 'Jl. Merdeka No. 91', 0, 0, 2, 'aQTqEy0QYuh7BzdCden64LcZtiPIr7s7rsTsReCFd5oSAIEqJlA6qyzth3Cz', 1, NULL),
(92, '2015-06-25 01:05:49', '2015-06-25 01:13:32', 'Kardess', '$2y$10$eqgnSngngiZlPJZJycF5NOt7g2O8BUj0aLizLedkYoiaHiMm8bU6C', 'margata.chan@gmail.com', '08562954422', 'SMA Semesta', 'Jl. Raya Gunungpati-Semarang km. 15, Semarang', 0, 0, 2, 'Sds6CecorLeImniypVf6pkHMlm2VrXG6bp87kcUyu2zIBDTmGz0fuF7pBJtA', 1, NULL),
(93, '2015-06-25 17:40:17', '2015-06-25 17:40:17', 'ganeshadewahindu', '$2y$10$RwVADxAAlnRsgG1rVA2RWedoIznLNzSaCG3l38IuxTPCcd.c.EpfK', 'myemailjkt48@gmail.com', '085715382164', 'sma dewa hindu', 'jl. jalan di alun-alun', 0, 0, 2, '', 0, 'm4TdkRiKPhbwaH2A74rZgC0PmExYgX'),
(94, '2015-06-26 09:36:19', '2015-06-26 09:38:47', 'Expose', '$2y$10$r1Nrd6oaQGDd9ctcfDlzJuKnoIPCzGNQJamiACnhugJjGW8DZVB2e', 'lutvia.a.m@gmail.com', '082299120248', 'SMA N 1 KLATEN', 'Jalan Merapi No. 13 Klaten', 0, 0, 2, 'IXIjirzM7kSopKxyjrkCuj2u9KZ96sNiK3CwRx4lr9r2YauUvCqmAtZaDBBP', 1, NULL),
(95, '2015-06-26 19:22:43', '2015-06-26 19:47:49', 'ThinkingOutLoud', '$2y$10$HEPRRAUo5Z.uyRq.H4UIFuJi0CUTTQXTwN2GOQk6Df.VPrjEqk1pO', 'ayu.novtia.sukma@gmail.com', '085779356415', 'SMAN 1 Kota Tangerang', 'Jl. Daan Mogot no.50 , Tangerang', 0, 0, 2, 'aJlShnWgdd0bWqNuFK7hM4wkITUNEIXSS78zKzEy01UauO3PNkF4sdPOs573', 1, NULL),
(96, '2015-06-26 19:36:17', '2015-06-26 19:36:17', 'Dreamer', '$2y$10$0c.onHm0TY.ljE35pF9MB.N8H81Ek99paCN2l01HSqR/uATnsrOWO', 'ayu_novtia.sukma@ymail.com', '085779356415', 'SMAN 1 Kota Tangerang', 'Jl. Daan Mogot no.50 , Tangerang', 0, 0, 2, '', 0, 'ePUccddTUZcUV4UcNUPfwbOF0VFjPa'),
(97, '2015-06-26 19:58:08', '2015-06-26 20:03:31', 'thebest', '$2y$10$M41ncYiNSXdoX20qHPXP2OqyVlccUTwBTHyf9WJDZIzwDtL4JLWXC', 'fellyfiana70@gmail.com', '08997880244', 'SMAN Arjasa', 'Jl. Sultan Agung 64 Arjasa Jember', 0, 0, 2, 'H1tNOUlxDfyIyI8WT2yHqz2IDG9cFjbRsO4yD1MCBYMI4SpVcqlETpqFo3in', 1, NULL),
(98, '2015-06-28 00:37:01', '2015-06-28 00:43:29', 'winner', '$2y$10$iXQhDHzMvP2QfybjlE0fN.a25g2qk1LyNfrYOnwkYwUz.ZZ1lixkW', 'naufalahsanul@gmail.com', '082370559280', 'SMAN 10 Fajar harapan', 'Ateuk jawo,Banda Aceh', 0, 0, 2, '', 1, NULL),
(99, '2015-06-29 21:19:33', '2015-06-29 21:35:40', 'Ekamas', '$2y$10$MxBacGRFF.dHfxEnnQCyVeMntzVxDY1vLxVyl24NDzScEfEjSa9Iu', 'rahmadama9@gmail.com', '081325006919', 'SMA Negeri 1 Wonosari', 'Jalan Brigjen Katamso Nomor 04 Wonosari, Gunungkidul', 0, 0, 2, 'lPpLeMALGJmlZtYJQ4ADyAEyeb6fxWerqNq31ZwyuPqeT3P6vLi8fDbofM0w', 1, NULL),
(100, '2015-06-29 23:31:01', '2015-07-13 18:15:31', 'BEQUANTUM', '$2y$10$BDWs9MpCMnmErtSMLcuu2uMuO7ltPfB7s4Oj.dCANJe1sckK0Jbda', 'bequantum12@gmail.com', '082121154013', 'SMA SANTA MARIA 1 BANDUNG', 'JALAN BENGAWAN 6, BANDUNG', 0, 0, 2, 'yhsHBtDkPNIQaOPxXFCp44qufoLzdjW2kERabbWhrGkhM8QAsuVRTKgdw74T', 1, NULL),
(101, '2015-06-30 06:47:19', '2015-06-30 06:53:01', 'MIUµ', '$2y$10$8p..lzYW3Rormfk276hK0OjENI..NO9RzLWyxLFKHvurWXRXHrAsG', 'andariniakifa@yahoo.com', '+62811117431', 'SMAN 3 Bogor', 'Jalan Pakuan 4 Bogor Timur', 0, 0, 2, '1tLGikeIWYnVWRtQIEaaoxW9dBt0BOmKiKFfpiuBm4vGvFvEJP0z6pyn9zpb', 1, NULL),
(102, '2015-06-30 17:30:46', '2015-06-30 17:30:46', 'SMANSA', '$2y$10$bJxc3oT5EeO.eLoEMhhNreN819HWVlzS9HzmEbbew044c82nkA9MG', 'asaptojati@yahoo.com', '082144612666', 'SMAN 1 LANGKE REMBONG', 'Jln. Harimau NO. 1 ruteng, manggarai NTT', 0, 0, 2, '', 0, '8OWlvO7QliiwGHkOmQ121oDYsPKe9B'),
(103, '2015-07-01 10:57:56', '2015-07-13 05:59:12', 'apinaa', '$2y$10$.rsh/g2Hp8LQBVAoathsl.q/BIpdixdWK1XrCVWl/USeKZHTxNciC', 'anafifah13797@yahoo.co.id', '081946017077', 'SMAN 2 NGAWI', 'Jl. A Yani Klitik Tromol  Pos 7 Ngawi', 0, 0, 2, 'iFTJPNiazKXpMwJhh81UxHnfU7rqlrB2bA8IbKNW1wuTEJYqo19XTVkjEGE7', 1, NULL),
(104, '2015-07-02 15:05:55', '2015-07-03 08:08:40', 'Vector-1', '$2y$10$2BiPB21H4nrg.Dxm8rutsuYOsCGzb3lJQTsbBRAEH.qtHpSJZmB/G', 'hamonokimiko@gmail.com', '085258415513', 'SMA Negeri 3 Pamekasan', 'Jl.Pintu Gerbang No.37 Pamekasan,Jawa Timur', 0, 0, 2, 'IB5s73zPCiyju2rHowM364GpHminWgkGAb8x91V1cpsnaRGcI6Ky9GODrl5I', 1, NULL),
(106, '2015-07-02 21:32:29', '2015-07-02 21:37:27', 'ChadijahAyuMawarni', '$2y$10$2T1TxvlEAFD3ER/ogb0vQOTu.xZMalYz.SgBbDkK8TjrVYfICd0Pq', 'ainun.rdya@gmail.com', '085748463320', 'SMAN 1 Sooko', 'Jl. RA Basuni no.361 Mojokerto', 0, 0, 2, '', 1, NULL),
(107, '2015-07-03 20:06:09', '2015-07-13 18:10:45', 'The_King01', '$2y$10$EEf1TnxLHDIHXZ32m9WHfODtC..rZaTFdLMbZzUP2mFKapeD1YNx2', 'ajy.chamdan@gmail.com', '083867643326', 'SMAN 2 Wonosari', 'Jalan Ki Ageng Giring No.03 Trimulyo II Kepek Wonosari Gunungkidul Yogyakarta 55813 Telp. (0274) 391158', 0, 0, 2, 'FK5HvpF9VQZAcuVGgSGWhRj2Aec03MVfY02IwSbUsEcTFisdlc0sj3bdfd5I', 1, NULL),
(108, '2015-07-03 20:13:50', '2015-07-03 20:20:18', 'The_Daisy', '$2y$10$qQ.XV403Y12p/l7.AYrKruhkFU94QlLmDqGOkanLPGE/ORXr1SZ.u', 'kanitashinta77@gmail.com', '089630706505', 'SMA N 2 Wonosari', 'Jalan Ki Ageng Giring No.03, Trimulyo II, Kepek, Wonosari, Gunungkidul, Yogyakarta 55813', 0, 0, 2, 'LClt08NsUHCCgyYywP3maJxWfR5oR5a5UfsALzwj226c0cgnHsnklgdgVVrZ', 1, NULL),
(109, '2015-07-03 20:32:23', '2015-07-03 21:18:50', 'gstis', '$2y$10$93aTZIBiRHQG8Et6RYDaO.5DqgrCvmj2qg8AA1qm61C7xRvzhMJLC', 'tikalaksita98@gmail.com', '085729421173', 'SMA N 2 Wonosari', 'Jalan Ki Ageng Giring No.03, Trimulyo II, Kepek, Wonosari, Gunungkidul, Yogyakarta 55813', 0, 0, 2, 'XPgTpWY9SfyP5yuwP86NVdYrSLtgXrawLrYs2ZCDn3tU34jnOfufWxeWOGgn', 1, NULL),
(110, '2015-07-04 02:20:39', '2015-07-09 16:31:57', 'manwira', '$2y$10$CnB/ghYFXTskLsDQGh1nCuikpd6UHyGfZovyJXaVLfI4WyQ/BtxVS', 'salman_awa@yahoo.co.id', '085791546746', 'MAN WLINGI', 'Jl PB Soedirman 01 Wlingi Blitar', 0, 0, 2, '9aVwHsbgY2Y2QDWMfHRCA66lTF42R0TxCGy2jnyEB1B4JIK8VKKRHZOBOWlv', 1, NULL),
(111, '2015-07-05 05:49:02', '2015-07-05 06:12:02', 'Puntadewa', '$2y$10$aKtoSv8cysrC/TDfNPXxtuJ9zF7qWbShoV5eN6wj3ZaGabrg8tItC', 'biniartau@gmail.com', '089613623996', 'SMA Negeri 1 Wonosari', 'Jalan Brigjen Katamso 04 Wonosari, Gunungkidul, DIY', 0, 0, 2, 'fgcUGtkoOuwhwsaIlq3kHNqDlEBnUfKLCANk0dwGqavqiotLdQUvJbtyDxW3', 1, NULL),
(112, '2015-07-05 21:53:40', '2015-07-05 22:10:01', 'TeamRoyyan', '$2y$10$cDjoo9KjBD7XGWygVRTGy.DzLN5qGfF87fSM/ua9k0HmsXghaVvOe', 'dzikrurrohmani@yahoo.co.id', '081329722558', 'MAN 1 SURAKARTA', 'Jl.Sumpah Pemuda, No. 25, Kadipiro, Banjarsari, Surakarta', 0, 0, 2, 'gAUFL62mQwGpzE0mjeTwzf3xiIeyiiIOSNTzJlJFcgMcZ2Ggw7dlVseTZCv1', 1, NULL),
(113, '2015-07-05 22:01:33', '2015-07-05 22:16:19', 'erwinsauma', '$2y$10$EOUCSwfP/Wg6sGmgYQTKaObQwAtQURnlw11nFJ6n190HJpwze9qku', 'erwinfernandabaru@yahoo.com', '081329722558', 'MAN 1 Surakarta', 'Jl.Sumpah Pemuda, No. 25, Kadipiro, Banjarsari, Surakarta', 0, 0, 2, 'CXj4TimgQhSOMnKFqmXnw9WUsVGw6KST0NcFIDpGRXabw24JSMBCc975UJVs', 1, NULL),
(114, '2015-07-05 22:27:59', '2015-07-09 08:30:23', 'Ninja99', '$2y$10$vxrG.24LiH9ydc3QB.WLr.mpJQ5obpbheTJJBdgA1RR.EKSPkSnFa', 'ozi.sule1@gmail.com', '082331991945', 'SMAN 1 Jember', 'Jl. Let.Jend. Panjaitan No. 55', 0, 0, 2, 'egbDAvAVrnEYvM6c8Rd3jq6S6FCjkEPVXrqmHGgp1VNvb9beSwKOebSuyHUr', 1, NULL),
(116, '2015-07-05 23:03:08', '2015-07-06 19:47:26', 'lisa', '$2y$10$Ypl2YvjE6vsh0s3UwQpmlutpZFAaZUConJPAbtWlFJs75FZxWo2B.', 'masitha.lisa@yahoo.co.id', '081329722558', 'MAN 1 SURAKARTA', 'Jl.Sumpah Pemuda, No. 25, Kadipiro, Banjarsari, Surakarta', 0, 0, 2, '0c4jR6vLnHnWPKnWKRLfHhUfOF5k1WByPKNzPLUI2zZsuylFWR8ZFaP0Tztv', 1, NULL),
(118, '2015-07-06 19:51:56', '2015-07-06 20:01:19', 'mashita234', '$2y$10$kZjgzck2ZiUA4AdClJCI1.LgN7RH15iJIP65NpBQMkaPJ3GsqlnXi', 'mashita234@gmail.com', '081329722558', 'MAN 1 SOLO', 'Jl.Sumpah Pemuda, No. 25, Kadipiro, Banjarsari, Surakarta', 0, 0, 2, 'es9omPxgdphgCGPhRe1nKidS6qWRco6yr41KAUBZis42G5RZVKWIZEaRZUIh', 1, NULL),
(119, '2015-07-06 20:15:33', '2015-07-06 20:19:19', 'ROSYI', '$2y$10$YsB5R/gECbGkDx59PclFjOo02EMFMTlxXBC9g2iDA25ffnih/lZW.', 'shitarosyi@gmail.com', '089689921358', 'MAN 1 SOLO', 'Jl.Sumpah Pemuda, No. 25, Kadipiro, Banjarsari, Solo', 0, 0, 2, '', 1, NULL),
(120, '2015-07-07 00:15:56', '2015-07-07 00:23:49', 'FASOL', '$2y$10$bdd4h49dAjbISdC3kD00IupwOCK5erbwHpbVq6w.gbnhoDJfWBJM6', 'irfankhairullah9@gmail.com', '082320526625', 'SMA DARUL FALAH ', 'JALAN RAYA CIHAMPELAS NO 45 KABUPATEN BANDUNG BARAT ', 0, 0, 2, 'DV9Nthjq5r3EVsFFB7CC0y35OOi2W2ev6PZ4DqNmz5otNvUxyWlOOfchYByi', 1, NULL),
(121, '2015-07-07 17:18:22', '2015-07-07 17:18:22', 'MATHLETES', '$2y$10$mOzMnf/RNi53NgOcn4U6m.w4Rl.7gN.B6Styg1QvbTpejRMExQ0HC', 'c_nucifera@yahoo.co.id', '082331040476', 'SMAN 1 KEDUNGWARU', 'JL.DR.WAHIDIN SUDIROHUSODO 12 TULUNGAGUNG', 0, 0, 2, '', 0, 'ccIEO4dlpF2ucozNVSG6JiLUDDNj4v'),
(122, '2015-07-07 21:15:57', '2015-07-07 21:17:08', 'Erfolg', '$2y$10$05jPv7BLTA134hEbUtJP2eyTFuNToKu94cMoHNTQe10HhmdEh8E4q', 'ridhasofana.rs@gmail.com', '085645078689', 'SMA N 1 JOMBANG', 'JL. Bupati RAA Soeroadiningrat No. 8 Jombang', 0, 0, 2, 'GBouoy0CBgAjbBhc23aqWvvLaTC21SbmsTpUcduvMN9c8Pi1GendQE25BGXv', 1, NULL),
(123, '2015-07-07 22:23:56', '2015-07-07 22:25:11', 'Maxila', '$2y$10$9zgCgy8TuPxCTACC3gu0vO7isnKVUSga7p/riO/GgdpXkpDxUXxxS', 'nadea06@gmail.com', '081235012146', 'SMa Negeri 2 Jombang', 'Jl. Dr. Wahidin Sudirohusodo No. 1 Jombang', 0, 0, 2, '', 1, NULL),
(124, '2015-07-08 02:04:13', '2015-07-09 07:40:25', 'ariga', '$2y$10$iJVWfhZs8EDq0jjsZVF86.LmSwSE1bDxbcgpOxaqpYrNUUB3hT3Oa', 'rigahadi51@gmail.com', '082370960935', 'sman seribu bukit', 'aceh', 0, 0, 2, '', 1, NULL),
(125, '2015-07-08 02:55:51', '2015-07-16 07:09:09', 'SATU', '$2y$10$qCDYAwwXyrzBRlbL6aW9Qe2R1.xlJn9eHRjOgMGL6slLbZwTFSkWy', 'nugrohomaulana27@yahoo.co.id', '085733904949', 'SMAN 1 KEDIRI', 'Jalan Veteran no.1', 0, 0, 2, '6O2yFFUxSE90qMqaIp4IogZh8sx8Hn90itOXcbXrABGuBfVtk1o40xTwtlMY', 1, NULL),
(126, '2015-07-08 03:17:10', '2015-07-08 03:27:22', 'TEMANNYASATU', '$2y$10$vv0MQYZbz6roxfkg2eGpzuwQYukhBXSpKdfY8p41Gqtr02RD4YU5O', 'gheapradina@yahoo.com', '085735581636', 'SMAN 1 KEDIRI', 'Jalan Veteran no.1', 0, 0, 2, 'dn91Cpqt30TmqeJhTO8k8qX5bJmSzHO8EOVukYgQAW0q8kOPIWFmc4lMVpMd', 1, NULL),
(127, '2015-07-08 22:35:44', '2015-07-08 22:35:44', 'bulubabi', '$2y$10$VKEXYGc9EDxHQMazNd8iE.D5j/yn/aUpRsoNPFKLV4AyD4fQMl7aS', 'roosita@indosat.blackberry.com', '085655235697', 'SMAN 2 JOMBANG ', 'Jl Wahidin Sudirohusodo', 0, 0, 2, '', 0, 'iLbLrdSpAMol2S8mrgtFNBMo2lZ9p3'),
(128, '2015-07-08 23:19:06', '2015-07-08 23:19:06', 'Serbuk', '$2y$10$9t84KN6QSnb/fWDICShILeUB7tGPkPpsm5AXtUxtNTzub0TRrzJqW', 'fahtia.tia28@gmail.com', '082274444484', 'SMAN Seribu Bukit', 'Aceh', 0, 0, 2, '', 0, 'Z8UlpwIOOYOcSI7ZhgLkqZWlx5LSTy'),
(129, '2015-07-09 03:06:03', '2015-07-11 03:21:20', 'STAT1STIC_ONE', '$2y$10$T9zksJ.7g1hoHIkm0fE7hu.nkFfygIAXDZ.KWqdSHQqCAUPOPEuwC', 'shafiraslsblaaa@gmail.com', '082185179700', 'SMA Negeri 1 Palembang', 'Jl Srijaya Negara Bukit Besar Bukit Lama Ilir Barat I Palembang', 0, 0, 2, '8lK76rFvSNB8boIxOZ6WsyXF7rmWXpacY7FLDQW1sNXB45fBNs0uS6iHA11V', 1, NULL),
(130, '2015-07-09 08:38:25', '2015-07-12 08:22:22', 'GreatSmaga', '$2y$10$DLAZkzPL.AS..u4rbJA9o.qmUl6bY6csppKuLmylhiVgCSm17kN6G', 'Unteaac@gmail.com', '082332102584', 'SMA Negeri 3 Jombang ', 'Jalan Dr. Sutomo No. 75, Jombang ', 0, 0, 2, 'VpkupAh0OD4wAcqJ2gdCwgXHsyMEIrjytOQD5VSl7Pcaif1MdU86qf1Cp9YN', 1, NULL),
(131, '2015-07-09 08:45:52', '2015-07-09 08:48:08', 'GATE', '$2y$10$QmJ98nn5tOzI5CsleP2.ZedbjxONv.QPvJkLRToY65/jcOMqplvjy', 'fauzanraf@gmail.com', '082168025233', 'SMAN 1 (Plus) Matauli Pandan', 'Jl. Ki Hajar Dewantara No. 1 Pandan, Tapanuli Tengah, Sumatera Utara', 0, 0, 2, 'yb5AwnUjKoRY3nIkcF57X904m2ybhMur6SBKHKZl53ChDxiwzcEzBqOO6Wse', 1, NULL),
(132, '2015-07-09 18:31:42', '2015-07-14 10:52:05', 'GPS', '$2y$10$2io41b16yU2KPje/bx/HOOn8vmm2A30/C64adDV2GrF7DGayh6hZS', 'meitasuryasaputri@gmail.com', '081331624542', 'SMA Semesta Semarang', '	Jl. Raya Semarang Gunung Pati KM. 15, Semarang, Jawa Tengah', 0, 0, 2, '', 1, NULL),
(133, '2015-07-09 20:15:35', '2015-07-15 06:20:24', 'Spiritodella', '$2y$10$jQN.s/NHY7weDQ.hj1jPFusCfeweUpdYfoKvy24ELwyCbZEmExnHW', 'gamawanto@yahoo.com', '081288255352', 'SMAN 5 Kota Bekasi', 'jl. gamprit', 0, 0, 2, '9z9xSW0vIBCYCQ3VAQuktQvXd14LmC25RG0jmH0XttZrPT2OfjM7jjRV92se', 1, NULL),
(134, '2015-07-09 22:58:16', '2015-07-09 22:58:16', 'Smairahbone', '$2y$10$0Jm2iTUS8hxnv4/oE//Hd.u/uMfntcv1VxSYgNI4mo2649DAo0hVi', 'yusrilnurhidayat@yahoo.co.id', '082190624058', 'Sma islam athirah boarding school bone', 'Jln.sungai musi kel.panyula kec.tanete riattang timur kab.bone sulawesi selatan', 0, 0, 2, '', 0, '8fobFZ1EHgarIYhJ7VS3IzBFongJbw'),
(135, '2015-07-10 00:44:30', '2015-07-10 00:44:30', 'Bukit', '$2y$10$DUe/JQImWNgAcZbC56MtyuM5U4m23trDKpxd9yjzH4sWszoMA.OTu', 'Mala34@gmail.com', '082216211727', 'SMAN SERIBU BUKIT', 'Jln cinta maju-blangpegayon', 0, 0, 2, '', 0, 'sF2rZaNUNHuWzw5dGHeRP9uMjeu2E7'),
(136, '2015-07-10 05:56:01', '2015-07-10 05:59:41', 'SA', '$2y$10$H4UML5f7.hhAAE6qNMkpvOLupT1UUZdIeScnNqQvRl0XsQewcaNVa', 'geby.debora22@gmail.com', '085817056877', 'SMA Sampoerna', 'Jalan Raya Sukabumi Km.17 Bogor 16730', 0, 0, 2, 'LCXFSSFdBDZK90mz0IxvTQ2X8CldiQnMrOC8n8Z5Sp6Nr7GTp6R5yRZxM0PJ', 1, NULL),
(137, '2015-07-10 10:00:17', '2015-07-15 09:00:04', 'Cloud', '$2y$10$l8RYx3a0bklHp9VDKSaGROgp3WPeyNXo86EemTcfUfOSQCnYlaLXe', 'ajadinur@gmail.com', '082304211455', 'SMA Negeri Unggul Aceh Timur', 'Jl.B.Aceh-Medan, Km  431', 0, 0, 2, 'K7uneGz4U5k4PJ8dEdm3QDdnKf8v9vYwxvWy1wjyYpQG8uKw7U2SaPfUb3s0', 1, NULL),
(138, '2015-07-10 10:02:06', '2015-07-10 10:19:52', 'Afifah_NZ', '$2y$10$0.lKK7mJE2F4uTX5dez1I.hNz47WL212wt/eMakBy8HltuANTC6Sy', 'zahran.afifah3@gmail.com', '081315485065', 'SMA NEGERI UNGGUL ACEH TIMUR', 'Jln Banda Aceh Medan KM 431 Birem Bayeun Aceh Timur Aceh', 0, 0, 2, '', 1, NULL),
(139, '2015-07-11 00:54:19', '2015-07-11 01:56:37', 'Ganesa', '$2y$10$aZjlqkHumlkQ.uEx3dU0QOnHiOhnfhvTTQnDFFv2P8pD0lqfNJ9kC', 'assaanike@gmail.com', '081932233642', 'SMAN 7 Tangerang Selatan', 'Villa Melati Mas Blok J, Serpong Utara', 0, 0, 2, 'TIH1IliGtOMmzmKTVhYzXa8d8uH1PV50ZAnoRDvqAxDxwRXX3jWBMHw3KqZl', 1, NULL),
(140, '2015-07-11 01:23:27', '2015-07-11 01:23:27', 'Ganesha', '$2y$10$OKnTVjXFg6Frq.bLV2dCZeSUoeBxm6o6lwHHHDmlxI7zMR7u3bM4u', 'anggitafitrioktavian@yahoo.com', '081932233642', 'SMAN 7 Tangerang Selatan', 'Villa Melati Mas Blok J, Serpong Utara', 0, 0, 2, '', 0, 'dpygW1OMrzkbLUGS3uiw1at54Emzb9'),
(141, '2015-07-11 01:38:57', '2015-07-11 01:40:36', 'sigmapurwakarta', '$2y$10$hUIJEORSXIIKF4c8SSsyoejHULKrfdqp.RPX5poAI.sIch077PM/O', 'marganailham@gmail.com', '088808902523', 'SMAN 1 Purwakarta', 'jalan kolonel kornel singawinata 113, purwakarta', 0, 0, 2, 'bfWdDL6ee55KCDYijxAUsTb1Lx1ELu0hTWNn8PGSmX5RkevOshCSeffL8cmn', 1, NULL),
(142, '2015-07-11 03:06:41', '2015-07-11 03:06:41', 'CJTEAM', '$2y$10$ragJC10Kx0m4qimhEIyD..PiidTGcePee96oLZ1n/unTlTLH4FUCG', 'rajabandanus@yahoo.com', '087886086679', 'SMAN 2 SERANG', 'Jl.Raya Pandeglang KM.5', 0, 0, 2, '', 0, '3I9aVzJ6aQIGHvO4E5MByBg05QaBdh'),
(143, '2015-07-11 04:35:42', '2015-07-11 04:58:29', 'SMANDASERANG', '$2y$10$qkv6vs.rnOvtDm7.S3yhUuOwZ6cV6u/jzQPXO.PX66hNh8Awe3xKm', 'mfaisalakbar4529@gmail.com', '085714993444', 'SMAN 2 Kota Serang', 'Jl.Raya pandeglang km 5 serang,Banten', 0, 0, 2, 'Ypo9gJISH3sXYUxyJ7M5MQspJEQumE51CTQ5SdD0YmguVRkOv0ua3qSWuEG5', 1, NULL),
(145, '2015-07-11 06:17:36', '2015-07-11 13:34:13', 'Express', '$2y$10$FlJvlDjrtvZigTXfamt/kOIuRkzTKLRT6b6Br7IAjVm8oiqMeBAru', 'cahyaidznii91@gmail.com', '085731406540', 'SMA NEGERI 2 NGANJUK', 'Jln. Anjuk Ladang no. 9 Nganjuk,Jawa Timur', 0, 0, 2, '0grR71e0XUpGyFM7Joqj5iwXPUj7GMW0iXhm00JqJCBNVy7msjnnhtJ1F3Oj', 1, NULL),
(146, '2015-07-11 06:37:44', '2015-07-11 07:25:44', 'MIA2', '$2y$10$/YE18cthmPmPHrQ4Xn6rb.kCX66prdfajVbBy3suVvj1dKlFnER7O', 'shintaamalia97@gmail.com', '081330448497', 'SMA NEGERI 2 SIDOARJO', 'Jl. Lingkar Barat Gading Fajar 2 Sidoarjo ', 0, 0, 2, '08SoWtikw9dnDzpNMPbhslZmn5T7Yro2HzWsNE1klEGHiiWxTuu8nvoWfDM2', 1, NULL),
(147, '2015-07-11 17:57:17', '2015-07-11 17:59:58', 'smada01', '$2y$10$z3g/x18ZK5hxyjY5mlOMw.I.5/HMwWaxfdFyUJoOD1XQumLz.wTbG', 'chandraberta@gmail.com', '085649026764', 'SMA Negeri 2 Kediri', 'Jalan Veteran nomor 7 Kota Kediri Kode Pos 64112', 0, 0, 2, '9mBJTISL5ZlganI6Agr4BQi7A5vBDIcw3ahbbnBLNHyOetalpvfrAMisJz89', 1, NULL),
(148, '2015-07-11 21:08:17', '2015-07-11 21:10:13', 'Binjai', '$2y$10$X6o0qBBEnU1OVANesndkB.pruin14qnBkgzIY0fABO0vy6Omdp3Ja', 'parolbuaya@gmail.com', '082277160760', 'SMA Negeri 5 Binjai', '  Jalan Jambi Nomor 2 Kelurahan Rambung Barat Kecamatan Binjai Selatan Kode Pos 20723 ', 0, 0, 2, '2itp8eN5oXgZFGI4D2QtHvb4aqGVdFsLLtUza6lslRTLgMp9ww5KIeKMQuQs', 1, NULL),
(149, '2015-07-12 01:55:20', '2015-07-12 05:34:51', 'N3TS', '$2y$10$o3sDVbJjxObfTPk9BGW8NOeWsU7X3IlsJE2SoGGgs.cWjC2LTilU.', 'febiolaavivitaa@gmail.com', '081315339336', 'SMA Negeri 3 Tangerang Selatan', 'Jl. Benda Timur 11, Pamulang 2', 0, 0, 2, 'WqUDjQL5OjfT8zeZXoe8Ns2WVP6Yz8OfiSvoa0I4ymkJ7fjiM8EL8K6443Pm', 1, NULL),
(150, '2015-07-12 03:38:12', '2015-07-12 03:38:12', 'SMABOY', '$2y$10$Jn7aj1pqqkBGFnUC3P3LVeBoP7FL3x2vpeyiiDZCwY2W0n6NovdHm', 'fauziseptianwijaya@yahoo.com', '085785763838', 'SMAN 1BOYOLANGU', 'Jl.Ki mangunsarkoro,beji,tulungagung', 0, 0, 2, '', 0, 'npU1IDCfiQiWfhmDbWXQZXoM3kgTZF'),
(151, '2015-07-12 07:38:59', '2015-07-12 07:38:59', 'Animasi', '$2y$10$EBvXMFQ4JPBKKdMpGuuOgOZjs9gadPno0DE8dJtSsOIpr0/NWi1TW', 'ayuaprilia97@ymail.com', '085750667347', 'SMA Negeri 1 Pangkalan Bun', 'Jl. Alipandi Sarjan No. 44 Kel. Raja, Pangkalan Bun, Kalimantan Tengah', 0, 0, 2, '', 0, 'JoQWPSkjvtEUI5ZUvcQb8fzVm5xm73'),
(152, '2015-07-12 08:00:20', '2015-07-12 08:00:20', 'animasismansa', '$2y$10$8UAHhLKPnRwI7nl8oEC7Tu09fL0Nwpnpjh.560QkdennU/JDYnuni', 'Reza.yusuf98@gmail.com', '085750667347', 'SMA Negeri 1 Pangkalan Bun', 'Jl. Alipandi Sarjan No. 44 Kel. Raja, Pangkalan Bun, Kalimantan Tengah', 0, 0, 2, '', 0, '4znpYqOww2dSPPt6Hr6nGgesF8gcOA'),
(153, '2015-07-12 08:39:20', '2015-07-12 08:39:20', 'YOLO', '$2y$10$SqfHmFrNrHQElvAl2O4x6.B4yGEdm92xhIXe8r1ucJaFETIhtMhxK', 'hadimulya@rocketmail.com', '087841143309', 'SMAN 17 Makassar', 'Jl. Sunu no. 11', 0, 0, 2, '', 0, 'LOsIix3HgHoPoStONuXbPJKnV2KCaL'),
(154, '2015-07-12 09:10:27', '2015-07-12 09:12:16', 'Goodjob', '$2y$10$D4KDyPasNJ1WfzX8AkJlweq373O6A9zQ.32LMZLhltAVjTYZrH4He', 'Ayuaprilia030@gmail.com', '085750667347', 'SMA Negeri 1 Pangkalan Bun', 'Jl. Alipandi Sarjan No. 44 Kel. Raja, Pangkalan Bun, Kalimantan Tengah', 0, 0, 2, 'uDndjCK4GfwIfbaghrfpnbrbbZpHibGL96uNLOpDEmczCDMiYOlqTPFJFM9F', 1, NULL),
(155, '2015-07-12 09:16:44', '2015-07-12 09:19:06', 'Gravity_Falls', '$2y$10$ZPqrFKGdvyLpeHyTB9pk3enwFoNMliXHxCPKBcoJrE71twWB0E5cO', 'hadianzhari@gmail.com', '087841143309', 'SMAN 17 Makassar', 'Jl. Sunu no. 11', 0, 0, 2, '', 1, NULL),
(156, '2015-07-12 21:48:12', '2015-07-12 21:50:40', 'First', '$2y$10$j51HDN2K232q5GKPfvsr8eC2HZfBqVKvoJofC3hZiZjAEi5bpC1jm', 'roosita.noor12@gmail.com', '085732631466', 'SMAN 2 JOMBANG', 'jalan Dr.Wahidin Sudiro Husodo', 0, 0, 2, 'kOkm9rZG93IMo0eeMDqzMwaA23Znc8zEozY2MBfCpdM6U9JEPkBWw1etKUH9', 1, NULL),
(157, '2015-07-13 00:57:25', '2015-07-13 01:06:31', 'ALPHA', '$2y$10$6sNojGn8kLUeYmtAUoRd.uC2zcxqmtN3cOK9Qi0KJmvn9Kz77Ttde', 'fauziseptianwijaya@gmail.com', '085785763838', 'SMAN 1BOYOLANGU', 'Jl.Ki mangunsarkoro,beji,tulungagung', 0, 0, 2, 'vIsgZF6hdUdeedrACWXbmoQTsFzsQhsvbjoeXjqbLKdczj6TFXCvUcL4XFdW', 1, NULL),
(158, '2015-07-13 01:11:55', '2015-07-13 01:12:17', 'CHAMPION', '$2y$10$0lVLW5i8umfO/RHCZXEYMeFsBfKVJEsdcjRm2Xms3X/LJEHhmc7DK', 'arjunawijaya41@gmail.com', '085785763838', 'SMAN 1 BOYOLANGU', 'Jl.Ki Mangunsarkoro Beji Tulungagung', 0, 0, 2, '', 1, NULL),
(159, '2015-07-13 03:42:13', '2015-07-13 03:45:37', 'smanscience', '$2y$10$ISJ0XXoTiH4nub1IN5GquOSmNu/rG/av8tTI0hBhQky4JQkc5eIdC', 'fikrymulyadi@gmail.com', '089690245753', 'SMAN 1 KRANGKENG', 'Jl.Raya Krangkeng No.1,Indramayu', 0, 0, 2, '', 1, NULL),
(160, '2015-07-13 17:18:40', '2015-07-13 17:18:40', 'Bojonegoro1', '$2y$10$IOpBPU08kOKPk554XDboHOnoEOo4YUkZO2lSiUnUhv.Iht8GwssjO', 'rizkekara@hotmail.com', '085748905747', 'SMAN 1 BOJONEGORO', 'JALAN PANGLIMA SUDIRMAN 28 BOJONEGORO', 0, 0, 2, '', 0, 'xqXmvYNqMliJi3KjDebpJQU8IbJ4aT'),
(161, '2015-07-13 17:21:36', '2015-07-13 17:23:39', 'bojonegoro', '$2y$10$.FOaBKO2UQ6RtUDE0DefAui8rFfjetbzYV3Ii6Vm0SUyvzm5V4jnK', 'rizkyekara@hotmail.com', '085748905747', 'SMAN 1 BOJONEGORO', 'JALAN PANGLIMA SUDIRMAN 28 BOJONEGORO', 0, 0, 2, 'soCIgMySucGjur5COXSyLTuBmInPG9aop0JCAnkTHlvpAnljulhes9b12m4t', 1, NULL),
(162, '2015-07-14 04:22:23', '2015-07-14 04:22:55', 'Menang', '$2y$10$I8mxjd/oNeHcteiC46nxZeBi6DtUoBl4xS/pK//jSzXebi8aaC7PO', 'argazakysatria@gmail.com', '082346234987', 'SMA Negeri 17 Makassar', 'Jalan Sunu Nomor 11, Makassar', 0, 0, 2, '', 1, NULL),
(163, '2015-07-14 18:40:01', '2015-07-14 18:42:05', 'smanss', '$2y$10$LsIuVz8SyUtmtku0Iv1KOev.dg5nN5u6pjZEBeYY.4vUL/LbStseK', 'izurbudianto@gmail.com', '081220241493', 'SMA Negeri Sumatera Selatan', 'Jl. Pangeran Ratu RT. 11 RW. 08 Kel. 8 Ulu Kec. Seberang Ulu 1 Palembang 30252', 0, 0, 2, '', 1, NULL),
(164, '2015-07-15 02:42:54', '2015-07-15 05:04:08', 'smansakra', '$2y$10$5v3TZHkut5pA47P9T7akou3XR8dNjYrYRWbm8qEOV14.LRNk3UT9K', 'dewisilviany192@gmail.com', '089690245753', 'SMAN 1 KRANGKENG', 'Jl.Raya Krangkeng o.1 Indramayu', 0, 0, 2, 'dJlznrbItyOyHtFhO2WmbbGUTW9Blba6KYLt8EpSDrPKD8qwz9P4sOaZh4ip', 1, NULL),
(165, '2015-07-15 05:00:52', '2015-07-15 05:00:52', 'saga', '$2y$10$U2ILQkjWowS.Bn/C/V81oOowCSgEo7KwudhzlxnkpFAih3A/cSLoe', 'angga.genius999@gmail.com', '085878999012', 'sman 1 purworejo', 'jl. tentara pelajar 55, purworejo', 0, 0, 2, '', 0, 'TCILsAi6D5HQ2HgIGH0zkRHT6chqmN'),
(166, '2015-07-15 06:58:23', '2015-07-16 00:38:59', 'CHAMPS', '$2y$10$a.zudiaFPuWmEXFgXpbnjuTfJVMHiMC8GxCkgW2KHAZmY7OxU.g6G', 'febiannapitupulu@gmail.com', '081264048339', 'SMA NEGERI 2 BALIGE', 'JL.KARTINI SOPOSURUNG BALIGE', 0, 0, 2, '0Zh1wmpr8G4zH0a6ptn1iDBkQNTbpsIyDzwzEKEdcs3nWHdtgA5noGG8SRSL', 1, NULL),
(167, '2015-07-15 19:53:44', '2015-07-15 19:53:44', 'EllaYolanda', '$2y$10$XLcgVQS8jyXjW/PSBRSjFeDd2upcqFSKDvtKV/AG/d2Xy6MKVUDZS', 'ellayolanda016@gmail.com', '081212061615', 'SMA NEGERI UNGGUL ACEH TIMUR', 'Jl.Banda Aceh-Medan KM 431,Birem Bayeun,Aceh Timur,Aceh', 0, 0, 2, '', 0, 'XOWS9OjR4xIKtpeP5S02nRlje51thF'),
(168, '2015-07-15 20:24:21', '2015-07-15 20:24:21', 'saidellayolanda', '$2y$10$JgCaXoaUYrsVpUlAbkia2u6JHNAEQr.zsPo0bQ4vrHpoZMh3CNMPG', 'saidmustaghfirin@yahoo.co.id', '081212061615', 'SMA NEGERI UNGGUL ACEH TIMUR', 'Jl.Banda Aceh-Medan KM 431,Birem Bayeun,Aceh Timur,Aceh,Indonesia', 0, 0, 2, '', 0, 'ta7F2pBlVRS2LvdjfAUurY2qbWSYHT'),
(169, '2015-07-16 08:14:26', '2015-07-16 08:52:08', 'smafa_1', '$2y$10$3G3HWwLeEIcz8KvjArr1velaTuR2zxMbh8.efzbqjdzw.u8SkUcVm', 'geubrinatari@gmail.com', '081276063404', 'SMA ISLAM AS-SHOFA', 'Jl. Nangka Ujung/As-shofa, Pekanbaru, Riau', 0, 0, 2, 'qtrhsgMBqww8NtartF9dGnZ79Fe4DQYjCVKpQjcz1yBnusSV7XHK2ZngYSH2', 1, NULL),
(170, '2015-07-16 08:33:23', '2015-07-16 09:03:46', 'smafa_2', '$2y$10$3aqE2DmZfNTXeWD5mohcs.rDykzOMbELcVfZhb3pgzLKIzppb01Ba', 'reinaldi610ferdian@gmail.com', '085315817000', 'SMA ISLAM AS-SHOFA', 'Jl. Nangka Ujung/As-shofa, Pekanbaru, Riau', 0, 0, 2, 'Agu7VzzMFOpJBzljJ9KZUYYTndxbZrq6bFK5DUhZxHP0zlncXyj34mio65ZP', 1, NULL),
(171, '2015-07-16 14:54:04', '2015-07-17 02:51:05', 'Smansaska', '$2y$10$RnmSZ1dYek3Y9OF1ZEyca.ulM1MM2jcfl1RCFsq1RsGB8qAvCDBkq', 'nursektiwaskithajati@gmail.com', '089608293430', 'Sma n 1 surakarta', 'Jalan monginsidi no. 40 surakarta', 0, 0, 2, '', 1, NULL),
(172, '2015-07-16 19:39:54', '2015-07-16 19:39:54', 'smafa_3', '$2y$10$nRRicCVuV5otlZUT2bp2Ge5iRfZks.23wdUpgtT3ZUNjNba8fZJxG', 'meliona99@yahoo.com', '085365812107', 'SMA ISLAM AS-SHOFA', 'Jl. Nangka Ujung/As-shofa, Pekanbaru, Riau', 0, 0, 2, '', 0, 'XTjhtiGeSlVV0tFNt28taWU7H7L45a'),
(173, '2015-07-16 19:49:18', '2015-07-17 03:22:39', 'smafa_4', '$2y$10$cL5sJvi5cblUNTdOP6UTsePgOX/.EapS6euEPGKK1SqxSAILZzkiS', 'dinikartika94@gmail.com', '085375892166', 'SMA ISLAM AS-SHOFA', 'Jl. Nangka Ujung/As-shofa, Pekanbaru, Riau', 0, 0, 2, '', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `soal` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kontes_enrole`
--
ALTER TABLE `kontes_enrole`
  ADD CONSTRAINT `kontes_enrole_ibfk_1` FOREIGN KEY (`kontes_id`) REFERENCES `kontes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontes_enrole_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paper_member`
--
ALTER TABLE `paper_member`
  ADD CONSTRAINT `paper_member_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `paper_team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`kontes_id`) REFERENCES `kontes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_correct_answer`) REFERENCES `answer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `soal_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `soal_ibfk_3` FOREIGN KEY (`id_kontes`) REFERENCES `kontes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `soal_branch`
--
ALTER TABLE `soal_branch`
  ADD CONSTRAINT `soal_branch_ibfk_1` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soal_branch_ibfk_2` FOREIGN KEY (`kontes_id`) REFERENCES `kontes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
