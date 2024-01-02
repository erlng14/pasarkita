-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 05:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4project`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(3, 'admin', 'Site Administator'),
(4, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(3, 1),
(3, 13),
(3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 1, '2023-10-12 14:30:55', 0),
(2, '::1', 'admin@gmail.com', 1, '2023-10-12 14:32:49', 0),
(3, '::1', 'admin@gmail.com', 1, '2023-10-12 14:33:34', 0),
(4, '::1', 'admin@gmail.com', 1, '2023-10-12 14:52:08', 0),
(5, '::1', 'awen@gmail.com', 2, '2023-10-12 14:52:49', 1),
(6, '::1', 'awen@gmail.com', 2, '2023-10-12 14:57:41', 1),
(7, '::1', 'awen@gmail.com', 2, '2023-10-12 14:59:05', 1),
(8, '::1', 'admin@gmail.com', NULL, '2023-10-16 01:30:00', 0),
(9, '::1', 'admin@gmail.com', NULL, '2023-10-16 01:30:36', 0),
(10, '::1', 'awen@gmail.com', NULL, '2023-10-16 01:32:45', 0),
(11, '::1', 'admin@gmail.com', 3, '2023-10-16 01:33:30', 1),
(12, '::1', 'admin@gmail.com', 3, '2023-10-16 01:49:03', 1),
(13, '::1', 'admin@gmail.com', 3, '2023-10-16 02:07:34', 1),
(14, '::1', 'admin@gmail.com', 3, '2023-10-16 02:10:31', 1),
(15, '::1', 'admin@gmail.com', NULL, '2023-10-16 02:11:38', 0),
(16, '::1', 'admin@gmail.com', 3, '2023-10-16 02:11:45', 1),
(17, '::1', 'admin@gmail.com', 3, '2023-10-16 02:12:07', 1),
(18, '::1', 'admin@gmail.com', 3, '2023-10-16 02:12:35', 1),
(19, '::1', 'admin@gmail.com', 3, '2023-10-16 02:20:52', 1),
(20, '::1', 'admin@gmail.com', 3, '2023-10-16 02:25:15', 1),
(21, '::1', 'admin@gmail.com', 3, '2023-10-16 02:34:19', 1),
(22, '::1', 'admin@gmail.com', NULL, '2023-10-16 02:44:26', 0),
(23, '::1', 'admin@gmail.com', 3, '2023-10-16 02:53:45', 1),
(24, '::1', 'admin@gmail.com', 3, '2023-10-16 02:57:15', 1),
(25, '::1', 'admin@gmail.com', 3, '2023-10-16 03:25:20', 1),
(26, '::1', 'admin@gmail.com', 3, '2023-10-16 03:39:36', 1),
(27, '::1', 'admin@gmail.com', 3, '2023-10-16 06:07:43', 1),
(28, '::1', 'admin@gmail.com', NULL, '2023-10-16 06:08:31', 0),
(29, '::1', 'admin@gmail.com', 3, '2023-10-16 06:10:00', 1),
(30, '::1', 'valent@gmail.com', 4, '2023-10-16 06:12:07', 1),
(31, '::1', 'admin@gmail.com', 3, '2023-10-16 06:14:06', 1),
(32, '::1', 'admin@gmail.com', NULL, '2023-10-16 06:17:44', 0),
(33, '::1', 'admin@gmail.com', 3, '2023-10-16 06:18:01', 1),
(34, '::1', 'valent@gmail.com', 4, '2023-10-16 06:39:47', 1),
(35, '::1', 'admin@gmail.com', 3, '2023-10-16 06:50:37', 1),
(36, '::1', 'admin@gmail.com', 3, '2023-10-16 07:07:11', 1),
(37, '::1', 'admin@gmail.com', 3, '2023-10-16 07:07:46', 1),
(38, '::1', 'admin@gmail.com', NULL, '2023-10-16 07:59:28', 0),
(39, '::1', 'tes123@gmail.com', NULL, '2023-10-16 07:59:42', 0),
(40, '::1', 'admin@gmail.com', 3, '2023-10-16 07:59:54', 1),
(41, '::1', 'valent@gmail.com', 4, '2023-10-16 08:02:47', 1),
(42, '::1', 'admin@gmail.com', 3, '2023-10-16 08:37:05', 1),
(43, '::1', 'admin@gmail.com', 3, '2023-10-16 08:55:31', 1),
(44, '::1', 'valent@gmail.com', 4, '2023-10-16 09:00:00', 1),
(45, '::1', 'admin@gmail.com', 3, '2023-10-16 09:01:48', 1),
(46, '::1', 'valent@gmail.com', 4, '2023-10-16 09:02:44', 1),
(47, '::1', 'test123@gmail.com', 6, '2023-10-16 09:16:32', 1),
(48, '::1', 'admin@gmail.com', 1, '2023-10-16 09:43:51', 1),
(49, '::1', 'admin@gmail.com', 1, '2023-10-16 09:48:17', 1),
(50, '::1', 'valent@gmail.com', 2, '2023-10-16 09:55:39', 1),
(51, '::1', 'admin@gmail.com', 1, '2023-10-16 09:59:15', 1),
(52, '::1', 'valent@gmail.com', 2, '2023-10-16 10:01:13', 1),
(53, '::1', 'admin@gmail.com', 1, '2023-10-16 10:06:30', 1),
(54, '::1', 'valent@gmail.com', 2, '2023-10-16 10:06:50', 1),
(55, '::1', 'admin@gmail.com', 1, '2023-10-16 10:07:42', 1),
(56, '::1', 'admin@gmail.com', 1, '2023-10-17 01:22:16', 1),
(57, '::1', 'valent@gmail.com', 2, '2023-10-17 01:34:18', 1),
(58, '::1', 'valent@gmail.com', 2, '2023-10-17 01:35:59', 1),
(59, '::1', 'admin', NULL, '2023-10-17 01:42:20', 0),
(60, '::1', 'asmin', NULL, '2023-10-17 01:42:31', 0),
(61, '::1', 'admin@gmail.com', 1, '2023-10-17 01:42:55', 1),
(62, '::1', 'valent@gmail.com', 2, '2023-10-17 01:56:20', 1),
(63, '::1', 'test123@gmail.com', 6, '2023-10-17 01:56:51', 1),
(64, '::1', 'admin@gmail.com', 1, '2023-10-17 02:00:39', 1),
(65, '::1', 'valent@gmail.com', 2, '2023-10-17 02:43:01', 1),
(66, '::1', 'admin@gmail.com', 1, '2023-10-17 02:43:53', 1),
(67, '::1', 'admin@gmail.com', 1, '2023-10-17 02:47:23', 1),
(68, '::1', 'admin@gmail.com', 1, '2023-10-17 02:49:24', 1),
(69, '::1', 'admin@gmail.com', 1, '2023-10-17 03:15:01', 1),
(70, '::1', 'coba@gmail.com', 10, '2023-10-17 06:18:02', 1),
(71, '::1', 'admin@gmail.com', NULL, '2023-10-17 06:44:31', 0),
(72, '::1', 'admin@gmail.com', 1, '2023-10-17 06:44:38', 1),
(73, '::1', 'admin@gmail.com', 1, '2023-10-17 06:47:17', 1),
(74, '::1', 'admin@gmail.com', 1, '2023-10-17 06:55:44', 1),
(75, '::1', 'admin@gmail.com', 1, '2023-10-17 07:06:54', 1),
(76, '::1', 'admin@gmail.com', 1, '2023-10-17 07:09:33', 1),
(77, '::1', 'admin@gmail.com', 1, '2023-10-17 07:11:07', 1),
(78, '::1', 'admin@gmail.com', 1, '2023-10-17 07:15:28', 1),
(79, '::1', 'admin@gmail.com', 1, '2023-10-17 07:30:23', 1),
(80, '::1', 'admin@gmail.com', 1, '2023-10-17 07:31:25', 1),
(81, '::1', 'admin@gmail.com', 1, '2023-10-17 07:39:03', 1),
(82, '::1', 'admin@gmail.com', 1, '2023-10-17 07:42:02', 1),
(83, '::1', 'admin@gmail.com', 1, '2023-10-17 07:46:06', 1),
(84, '::1', 'admin@gmail.com', 1, '2023-10-17 07:48:24', 1),
(85, '::1', 'admin@gmail.com', 1, '2023-10-17 07:50:21', 1),
(86, '::1', 'admin@gmail.com', 1, '2023-10-17 07:52:26', 1),
(87, '::1', 'admin@gmail.com', NULL, '2023-10-17 07:53:05', 0),
(88, '::1', 'admin@gmail.com', 1, '2023-10-17 07:53:14', 1),
(89, '::1', 'admin@gmail.com', 1, '2023-10-17 07:59:16', 1),
(90, '::1', 'admin@gmail.com', 1, '2023-10-17 07:59:52', 1),
(91, '::1', 'admin@gmail.com', 1, '2023-10-17 08:06:04', 1),
(92, '::1', 'admin@gmail.com', 1, '2023-10-17 08:06:38', 1),
(93, '::1', 'admin@gmail.com', 1, '2023-10-17 08:14:40', 1),
(94, '::1', 'admin@gmail.com', 1, '2023-10-17 08:15:54', 1),
(95, '::1', 'admin@gmail.com', 1, '2023-10-17 08:16:46', 1),
(96, '::1', 'admin@gmail.com', 1, '2023-10-17 08:17:32', 1),
(97, '::1', 'valent@gmail.com', 2, '2023-10-17 08:19:53', 1),
(98, '::1', 'admin@gmail.com', 1, '2023-10-17 08:25:05', 1),
(99, '::1', 'admin@gmail.com', 1, '2023-10-17 08:32:16', 1),
(100, '::1', 'admin@gmail.com', 1, '2023-10-17 08:36:42', 1),
(101, '::1', 'admin@gmail.com', 1, '2023-10-17 08:37:08', 1),
(102, '::1', 'admin@gmail.com', 1, '2023-10-17 08:38:19', 1),
(103, '::1', 'admin@gmail.com', 1, '2023-10-17 08:42:16', 1),
(104, '::1', 'admin@gmail.com', 1, '2023-10-18 01:33:25', 1),
(105, '::1', 'admin@gmail.com', 1, '2023-10-18 01:39:08', 1),
(106, '::1', 'coba@gmail.com', NULL, '2023-10-18 01:54:11', 0),
(107, '::1', 'coba@gmail.com', NULL, '2023-10-18 01:54:47', 0),
(108, '::1', 'erlng@gmail.com', NULL, '2023-10-18 01:55:04', 0),
(109, '::1', 'admin@gmail.com', 1, '2023-10-18 01:55:15', 1),
(110, '::1', 'coba@gmail.com', NULL, '2023-10-18 01:55:58', 0),
(111, '::1', 'erlng@gmail.com', NULL, '2023-10-18 01:56:07', 0),
(112, '::1', 'coba coba', NULL, '2023-10-18 01:56:21', 0),
(113, '::1', 'erlng@gmail.com', 11, '2023-10-18 01:56:30', 1),
(114, '::1', 'admin@gmail.com', 1, '2023-10-18 02:02:19', 1),
(115, '::1', 'admin@gmail.com', 1, '2023-10-18 05:21:23', 1),
(116, '::1', 'erlng@gmail.com', 11, '2023-10-18 07:51:49', 1),
(117, '::1', 'admin@gmail.com', 1, '2023-10-18 07:52:14', 1),
(118, '::1', 'admin@gmail.com', 1, '2023-10-22 06:31:18', 1),
(119, '::1', 'admin@gmail.com', 1, '2023-10-22 10:24:07', 1),
(120, '::1', 'admin', NULL, '2023-10-22 10:30:56', 0),
(121, '::1', 'admin@gmail.com', 1, '2023-10-22 10:31:05', 1),
(122, '::1', 'admin@gmail.com', 1, '2023-10-22 10:33:41', 1),
(123, '::1', 'admin@gmail.com', 1, '2023-10-22 10:43:45', 1),
(124, '::1', 'admin@gmail.com', 1, '2023-10-22 11:18:51', 1),
(125, '::1', 'admin@gmail.com', 1, '2023-10-23 02:08:58', 1),
(126, '::1', 'admin@gmail.com', 1, '2023-10-23 03:18:25', 1),
(127, '::1', 'admin@gmail.com', 1, '2023-10-23 03:53:13', 1),
(128, '::1', 'admin@gmail.com', 1, '2023-10-23 03:53:14', 1),
(129, '::1', 'admin@gmail.com', 1, '2023-10-23 04:02:12', 1),
(130, '::1', 'admin@gmail.com', 1, '2023-10-23 04:02:13', 1),
(131, '::1', 'admin@gmail.com', 1, '2023-10-23 04:03:56', 1),
(132, '::1', 'admin@gmail.com', 1, '2023-10-23 04:14:32', 1),
(133, '::1', 'admin@gmail.com', 1, '2023-10-23 04:14:39', 1),
(134, '::1', 'admin@gmail.com', 1, '2023-10-23 04:14:41', 1),
(135, '::1', 'admin@gmail.com', 1, '2023-10-23 04:14:42', 1),
(136, '::1', 'admin@gmail.com', 1, '2023-10-23 04:14:43', 1),
(137, '::1', 'admin@gmail.com', 1, '2023-10-23 04:58:56', 1),
(138, '::1', 'admin@gmail.com', 1, '2023-10-23 05:00:43', 1),
(139, '::1', 'admin@gmail.com', 1, '2023-10-23 05:05:07', 1),
(140, '::1', 'admin@gmail.com', 1, '2023-10-24 02:10:02', 1),
(141, '::1', 'admin@gmail.com', 1, '2023-10-25 01:48:55', 1),
(142, '::1', 'admin@gmail.com', 1, '2023-10-25 06:52:28', 1),
(143, '::1', 'admin@gmail.com', 1, '2023-10-30 01:49:39', 1),
(144, '::1', 'admin', NULL, '2023-10-30 02:03:29', 0),
(145, '::1', 'admin@gmail.com', 1, '2023-10-30 02:03:44', 1),
(146, '::1', 'admin@gmail.com', 1, '2023-10-30 02:09:16', 1),
(147, '::1', 'admin@gmail.com', 1, '2023-10-31 01:28:32', 1),
(148, '::1', 'valent@gmail.com', 13, '2023-10-31 04:16:47', 1),
(149, '::1', 'admin@gmail.com', 1, '2023-11-01 01:54:08', 1),
(150, '::1', 'admin@gmail.com', 1, '2023-11-06 01:39:47', 1),
(151, '::1', 'admin@gmail.com', 1, '2023-11-06 06:29:43', 1),
(152, '::1', 'admin@gmail.com', 1, '2023-11-07 01:24:13', 1),
(153, '::1', 'admin@gmail.com', 1, '2023-11-07 08:10:07', 1),
(154, '::1', 'admin@gmail.com', 1, '2023-11-07 08:44:29', 1),
(155, '::1', 'admin@gmail.com', 1, '2023-11-07 09:19:41', 1),
(156, '::1', 'admin@gmail.com', 1, '2023-11-08 01:23:26', 1),
(157, '::1', 'admin@gmail.com', 1, '2023-11-08 04:28:25', 1),
(158, '::1', 'admin@gmail.com', 1, '2023-11-08 08:11:11', 1),
(159, '::1', 'admin@gmail.com', 1, '2023-11-08 08:44:30', 1),
(160, '::1', 'admin@gmail.com', 1, '2023-11-08 09:25:02', 1),
(161, '::1', 'admin@gmail.com', 1, '2023-11-13 01:27:14', 1),
(162, '::1', 'admin@gmail.com', 1, '2023-11-13 12:01:19', 1),
(163, '::1', 'admin@gmail.com', 1, '2023-11-14 00:58:06', 1),
(164, '::1', 'admin@gmail.com', 1, '2023-11-15 01:26:40', 1),
(165, '::1', 'valenterlangga14@gmail.com', NULL, '2023-11-15 11:49:28', 0),
(166, '::1', 'valent', NULL, '2023-11-15 11:49:41', 0),
(167, '::1', 'valent@gmail.com', NULL, '2023-11-15 11:50:08', 0),
(168, '::1', 'admin@gmail.com', 1, '2023-11-15 11:50:18', 1),
(169, '::1', 'admin@gmail.com', 1, '2023-11-20 03:32:21', 1),
(170, '::1', 'admin@gmail.com', 1, '2023-11-20 06:28:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1697118452, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(99) NOT NULL,
  `visi` longtext NOT NULL,
  `foto` varchar(99) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `visi`, `foto`, `deskripsi`, `status`) VALUES
(3, 'Visi kami adalah menjadi marketplace pilihan utama yang memenuhi semua kebutuhan belanja Anda. Kami percaya bahwa semua orang harus memiliki akses ke produk berkualitas dari berbagai kategori, mulai dari fashion, elektronik, hingga barang-barang rumah tangga. Dengan berlandaskan pada prinsip keadilan, kepercayaan, dan inovasi, kami bertujuan untuk:', 'OIP.jfif', 'Memungkinkan Kesuksesan Penjual: Kami ingin menjadi platform yang mendukung penjual dari berbagai latar belakang untuk berkembang dan sukses dalam bisnis online mereka. Kami menyediakan alat dan sumber daya yang diperlukan untuk mengoptimalkan penjualan mereka.  Pengalaman Belanja yang Luar Biasa: Kami berkomitmen untuk memberikan pengalaman belanja yang aman, nyaman, dan memuaskan bagi pembeli. Kami terus meningkatkan layanan kami dan menawarkan berbagai fitur yang mempermudah pembelian online.  Komitmen terhadap Kualitas: Kami hanya bekerja dengan penjual yang menjual produk berkualitas tinggi. Kami memeriksa setiap produk yang ditawarkan di platform kami untuk memastikan kepuasan pelanggan.  Inovasi Berkelanjutan: Kami selalu berusaha untuk menghadirkan fitur-fitur dan teknologi terbaru untuk meningkatkan pengalaman berbelanja. Kami ingin memimpin dalam inovasi e-commerce.  Keberlanjutan Lingkungan: Kami peduli terhadap lingkungan dan berusaha untuk mengurangi dampak lingkungan melalui kebijakan dan praktik yang berkelanjutan.  Kami percaya bahwa dengan mewujudkan visi ini, Pasar Kita dapat menjadi mitra terpercaya dalam perjalanan belanja online Anda. Kami berterima kasih atas kepercayaan Anda dan siap untuk memberikan pengalaman belanja yang unik dan bermakna. Terima kasih telah memilih kami sebagai destinasi belanja Anda.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_acara`
--

CREATE TABLE `tb_acara` (
  `id` int(99) NOT NULL,
  `judul` varchar(99) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(99) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_acara`
--

INSERT INTO `tb_acara` (`id`, `judul`, `tanggal`, `foto`, `deskripsi`, `status`, `slug`) VALUES
(47, 'Acara 1', '2023-11-15', '600-x-600-HOps-UK.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facilisis. Cras ultrices, sapien id venenatis bibendum, tortor nunc varius orci, eget scelerisque lectus arcu non arcu. In non augue vitae purus varius convallis. Fusce eget bibendum mauris. In nec finibus lectus. Sed eu mi bibendum, ultrices ex non, fringilla tortor. Phasellus nec lacinia odio. Vestibulum scelerisque sit amet erat et facilisis. Curabitur bibendum semper mauris. Suspendisse potenti. Donec auctor, nisi eget ullamcorper consectetur, est sapien tincidunt lectus, nec vestibulum mauris risus quis orci. Vivamus malesuada orci ac libero venenatis, vel sagittis libero vulputate.', 1, 'acara-1'),
(48, 'Acara 2', '2023-11-20', 'OIP.jfif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facilisis. Cras ultrices, sapien id venenatis bibendum, tortor nunc varius orci, eget scelerisque lectus arcu non arcu. In non augue vitae purus varius convallis. Fusce eget bibendum mauris. In nec finibus lectus. Sed eu mi bibendum, ultrices ex non, fringilla tortor. Phasellus nec lacinia odio. Vestibulum scelerisque sit amet erat et facilisis. Curabitur bibendum semper mauris. Suspendisse potenti. Donec auctor, nisi eget ullamcorper consectetur, est sapien tincidunt lectus, nec vestibulum mauris risus quis orci. Vivamus malesuada orci ac libero venenatis, vel sagittis libero vulputate.', 1, 'acara-2'),
(49, 'Acara Slug 3', '2023-11-15', 'pasar-kita.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facilisis. Cras ultrices, sapien id venenatis bibendum, tortor nunc varius orci, eget scelerisque lectus arcu non arcu. In non augue vitae purus varius convallis. Fusce eget bibendum mauris. In nec finibus lectus. Sed eu mi bibendum, ultrices ex non, fringilla tortor. Phasellus nec lacinia odio. Vestibulum scelerisque sit amet erat et facilisis. Curabitur bibendum semper mauris. Suspendisse potenti. Donec auctor, nisi eget ullamcorper consectetur, est sapien tincidunt lectus, nec vestibulum mauris risus quis orci. Vivamus malesuada orci ac libero venenatis, vel sagittis libero vulputate.', 1, 'acara-slug-3'),
(50, 'Acara Slug 4', '2023-11-15', 'person.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facilisis. Cras ultrices, sapien id venenatis bibendum, tortor nunc varius orci, eget scelerisque lectus arcu non arcu. In non augue vitae purus varius convallis. Fusce eget bibendum mauris. In nec finibus lectus. Sed eu mi bibendum, ultrices ex non, fringilla tortor. Phasellus nec lacinia odio. Vestibulum scelerisque sit amet erat et facilisis. Curabitur bibendum semper mauris. Suspendisse potenti. Donec auctor, nisi eget ullamcorper consectetur, est sapien tincidunt lectus, nec vestibulum mauris risus quis orci. Vivamus malesuada orci ac libero venenatis, vel sagittis libero vulputate.', 1, 'acara-slug-4'),
(52, 'contoh slug', '2023-11-20', '4781827_ecommerce_home_market_mart_shop_icon.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facilisis. Cras ultrices, sapien id venenatis bibendum, tortor nunc varius orci, eget scelerisque lectus arcu non arcu. In non augue vitae purus varius convallis. Fusce eget bibendum mauris. In nec finibus lectus. Sed eu mi bibendum, ultrices ex non, fringilla tortor. Phasellus nec lacinia odio. Vestibulum scelerisque sit amet erat et facilisis. Curabitur bibendum semper mauris. Suspendisse potenti. Donec auctor, nisi eget ullamcorper consectetur, est sapien tincidunt lectus, nec vestibulum mauris risus quis orci. Vivamus malesuada orci ac libero venenatis, vel sagittis libero vulputate.', 1, 'contoh-slug'),
(53, 'Test Slug', '2023-11-20', 'conference.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facilisis. Cras ultrices, sapien id venenatis bibendum, tortor nunc varius orci, eget scelerisque lectus arcu non arcu. In non augue vitae purus varius convallis. Fusce eget bibendum mauris. In nec finibus lectus. Sed eu mi bibendum, ultrices ex non, fringilla tortor. Phasellus nec lacinia odio. Vestibulum scelerisque sit amet erat et facilisis. Curabitur bibendum semper mauris. Suspendisse potenti. Donec auctor, nisi eget ullamcorper consectetur, est sapien tincidunt lectus, nec vestibulum mauris risus quis orci. Vivamus malesuada orci ac libero venenatis, vel sagittis libero vulputate.', 1, 'test-slug');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `subjek` varchar(99) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(13, 'test', 'testing@gmail.com', 'contoh', 'coba coba'),
(14, 'Erlangga', 'erlng@gmail.com', 'contoh subjek', 'contoh pesan kontak'),
(15, 'valent', 'testing@gmail.com', 'test', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cta`
--

CREATE TABLE `tb_cta` (
  `id` int(99) NOT NULL,
  `judul` varchar(99) NOT NULL,
  `deskripsi` varchar(99) NOT NULL,
  `link` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cta`
--

INSERT INTO `tb_cta` (`id`, `judul`, `deskripsi`, `link`, `status`, `click`) VALUES
(6, 'Temukan Lokasi Kami', 'Temukan kami di peta dan kunjungi kami sekarang', 'https://www.google.com/maps/dir//Pasar+kita,+Jl.+Pajajaran+No.1,+West+Pamulang,+Pamulang,+South+Tangerang+City,+Banten+15417/@-6.2425205,106.7313557,12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2e69ef9d1c84acfb:0x1180157d68e10ab8!2m2!1d106.7376364!2d-6.3407311!3e9?entry=ttu', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_homepage`
--

CREATE TABLE `tb_homepage` (
  `id` int(99) NOT NULL,
  `judul` varchar(99) NOT NULL,
  `tagline` varchar(99) NOT NULL,
  `background` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_homepage`
--

INSERT INTO `tb_homepage` (`id`, `judul`, `tagline`, `background`, `status`) VALUES
(5, 'Gedung', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facili', 'cta-bg1.jpg', 1),
(6, 'Pasar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facili', 'cta-bg_1.jpg', 0),
(8, 'Coba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus in odio elementum facili', 'hero-bg2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_leasing`
--

CREATE TABLE `tb_leasing` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `nohp` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_leasing`
--

INSERT INTO `tb_leasing` (`id`, `nama`, `nohp`, `email`) VALUES
(2, 'Valent Erlangga', '1223334444', 'valenterlangga14@gmail.com'),
(19, 'erlangga', '085156127543', 'valenterlangga14@gmail.com'),
(23, 'valent', '085156127543', 'valent@gmail.com'),
(24, 'test', '12345678', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@gmail.com', 'Admin', '$2y$10$RrsL.vTn2IChEpAXQv9RHOabyNrqmC8d0.1Fpd4f68HFbJ2x9OxBq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-16 01:33:21', '2023-10-16 01:33:21', NULL),
(13, 'valent@gmail.com', 'Valent', '$2y$10$7XJ8v6czdFgtmNQ7E0l5RuFxZQOg11pYqxebFKvnDMrVofgBYr4qG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-23 02:29:45', '2023-10-23 02:29:45', NULL),
(17, 'contoh@gmail.com', 'contoh', '$2y$10$Rbc85CLIGUQpYjsH6H5Bvup3bfC7gmpi3BQi82uxIeuBmXcWfa4uC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-13 12:02:55', '2023-11-13 12:02:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_acara`
--
ALTER TABLE `tb_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cta`
--
ALTER TABLE `tb_cta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_homepage`
--
ALTER TABLE `tb_homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_leasing`
--
ALTER TABLE `tb_leasing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_acara`
--
ALTER TABLE `tb_acara`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_cta`
--
ALTER TABLE `tb_cta`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_homepage`
--
ALTER TABLE `tb_homepage`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_leasing`
--
ALTER TABLE `tb_leasing`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
