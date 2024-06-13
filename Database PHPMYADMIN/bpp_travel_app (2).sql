-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 08:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpp_travel_app`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(2, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 07:44:44', 1),
(3, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 08:39:01', 1),
(4, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 08:39:26', 1),
(5, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 09:03:36', 1),
(6, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 09:17:53', 1),
(7, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 12:19:43', 1),
(8, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 20:08:09', 1),
(9, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 22:03:50', 1),
(10, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 22:06:50', 1),
(11, '::1', 'bppdprdgresik@gmail.com', 5, '2023-11-29 22:29:45', 1),
(12, '::1', 'bppdprdgresik@gmail.com', 5, '2023-12-01 19:26:38', 1),
(13, '::1', 'bppdprdgresik@gmail.com', NULL, '2023-12-01 19:49:57', 0),
(14, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-01 19:50:11', 1),
(15, '::1', 'bisrulh167@gmail.com', 7, '2023-12-01 20:09:15', 1),
(16, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-02 07:59:12', 1),
(17, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-02 22:11:18', 1),
(18, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-03 05:50:42', 1),
(19, '::1', 'bisrulh167@gmail.com', 7, '2023-12-03 05:57:37', 1),
(20, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-04 00:16:37', 1),
(21, '::1', 'bisrulh167@gmail.com', 7, '2023-12-04 00:28:56', 1),
(22, '::1', 'bisrulh167@gmail.com', 7, '2023-12-04 00:36:42', 1),
(23, '::1', 'bisrulh167@gmail.com', 7, '2023-12-04 06:00:30', 1),
(24, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-04 08:54:05', 1),
(25, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-06 14:02:44', 1),
(26, '::1', 'bisrulh167@gmail.com', 7, '2023-12-06 14:34:58', 1),
(27, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-06 14:39:40', 1),
(28, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-07 18:28:24', 1),
(29, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-07 20:41:28', 1),
(30, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-07 20:48:09', 1),
(31, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-08 14:06:34', 1),
(32, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-08 16:50:00', 1),
(33, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-09 07:19:47', 1),
(34, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-09 20:10:11', 1),
(35, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-10 07:11:49', 1),
(36, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-10 19:38:49', 1),
(37, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-11 02:34:55', 1),
(38, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-11 07:15:22', 1),
(39, '::1', 'wawan@gmail.com', 8, '2023-12-11 07:22:36', 1),
(40, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-11 07:22:52', 1),
(41, '::1', 'bppgresik@gmail.com', NULL, '2023-12-11 12:42:59', 0),
(42, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-11 12:50:16', 1),
(43, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-12 12:20:55', 1),
(44, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-12 17:51:03', 1),
(45, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-12 21:55:27', 1),
(46, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-13 09:46:42', 1),
(47, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-13 14:27:31', 1),
(48, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-13 17:30:30', 1),
(49, '::1', 'bisrulh167@gmail.com', 7, '2023-12-13 17:31:01', 1),
(50, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-15 10:52:53', 1),
(51, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-16 03:30:55', 1),
(52, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 12:50:54', 1),
(53, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 13:43:02', 1),
(54, '172.20.10.3', 'bppdprdgresik@gmail.com', NULL, '2023-12-21 13:44:33', 0),
(55, '172.20.10.3', 'bppdprdgresik@gmail.com', 6, '2023-12-21 13:44:47', 1),
(56, '172.20.10.3', 'bisrulh167@gmail.com', 7, '2023-12-21 13:49:47', 1),
(57, '172.20.10.3', 'wawan@gmail.com', NULL, '2023-12-21 13:56:38', 0),
(58, '172.20.10.3', 'wawan@gmail.com', 8, '2023-12-21 13:56:48', 1),
(59, '172.20.10.3', 'bppdprdgresik@gmail.com', 6, '2023-12-21 13:59:49', 1),
(60, '172.20.10.3', 'wawan@gmail.com', 8, '2023-12-21 14:00:46', 1),
(61, '172.20.10.3', 'bppdprdgresik@gmail.com', 6, '2023-12-21 15:03:25', 1),
(62, '172.20.10.3', 'bppdprdgresik@gmail.com', 6, '2023-12-21 15:07:55', 1),
(63, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 20:46:33', 1),
(64, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 20:53:20', 1),
(65, '::1', 'bppdprdgresik@gmail.com', NULL, '2023-12-21 21:00:22', 0),
(66, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 21:00:30', 1),
(67, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 21:20:10', 1),
(68, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 21:20:47', 1),
(69, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-21 21:24:05', 1),
(70, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-25 06:30:11', 1),
(71, '::1', 'wawan@gmail.com', 8, '2023-12-25 06:31:22', 1),
(72, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:16:53', 1),
(73, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:40:51', 1),
(74, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:41:34', 1),
(75, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:42:49', 1),
(76, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:46:10', 1),
(77, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:47:31', 1),
(78, '::1', 'wawan@gmail.com', 8, '2023-12-25 07:47:50', 1),
(79, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-25 08:42:00', 1),
(80, '::1', 'wawan@gmail.com', 8, '2023-12-25 09:46:24', 1),
(81, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-25 09:47:24', 1),
(82, '::1', 'wawan@gmail.com', 8, '2023-12-25 09:53:47', 1),
(83, '::1', 'wawan@gmail.com', 8, '2023-12-25 10:03:39', 1),
(84, '::1', 'bisrulh167@gmail.com', 7, '2023-12-25 10:07:27', 1),
(85, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-25 10:19:11', 1),
(86, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-26 04:20:41', 1),
(87, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-26 07:56:20', 1),
(88, '::1', 'wawan@gmail.com', 8, '2023-12-26 10:42:57', 1),
(89, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-26 10:46:21', 1),
(90, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-26 11:08:21', 1),
(91, '::1', 'wawan@gmail.com', 8, '2023-12-26 11:08:29', 1),
(92, '::1', 'bisrulh167@gmail.com', 7, '2023-12-26 11:21:52', 1),
(93, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-26 17:56:29', 1),
(94, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-27 20:11:26', 1),
(95, '::1', 'bisrulh167@gmail.com', 7, '2023-12-27 20:12:26', 1),
(96, '::1', 'bisrulh167@gmail.com', 7, '2023-12-28 03:11:57', 1),
(97, '::1', 'wawan@gmail.com', 8, '2023-12-28 05:13:29', 1),
(98, '::1', 'wawan@gmail.com', 8, '2023-12-28 05:48:08', 1),
(99, '::1', 'bisrulh167@gmail.com', 7, '2023-12-28 09:04:00', 1),
(100, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-28 09:54:19', 1),
(101, '::1', 'bisrulh167@gmail.com', 7, '2023-12-28 09:58:47', 1),
(102, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-28 19:11:45', 1),
(103, '::1', 'bisrulh167@gmail.com', 7, '2023-12-28 19:12:11', 1),
(104, '::1', 'bisrulh167@gmail.com', 7, '2023-12-28 19:34:14', 1),
(105, '::1', 'bppdprdgresik@gmail.com', 6, '2023-12-29 07:47:34', 1),
(106, '::1', 'bisrulh167@gmail.com', 7, '2023-12-29 08:12:47', 1),
(107, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-04 05:24:40', 1),
(108, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-04 07:25:31', 1),
(109, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-06 06:58:03', 1),
(110, '::1', 'bisrulh167@gmail.com', 7, '2024-01-06 06:58:18', 1),
(111, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-06 08:33:59', 1),
(112, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-06 08:42:06', 1),
(113, '::1', 'bisrulh167@gmail.com', 7, '2024-01-09 04:02:43', 1),
(114, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-10 04:07:21', 1),
(115, '::1', 'bisrulh167@gmail.com', 7, '2024-01-10 04:07:32', 1),
(116, '::1', 'bisrulh167@gmail.com', 7, '2024-01-12 15:08:57', 1),
(117, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-12 16:26:10', 1),
(118, '::1', 'bisrulh167@gmail.com', 7, '2024-01-12 16:28:58', 1),
(119, '::1', 'bppdprdgresik@gmail.com', NULL, '2024-01-16 10:56:47', 0),
(120, '::1', 'bppdprdgresik@gmail.com', NULL, '2024-01-16 10:57:02', 0),
(121, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-16 11:00:18', 1),
(122, '::1', 'bisrulh167@gmail.com', 7, '2024-01-16 11:01:59', 1),
(123, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-16 12:55:52', 1),
(124, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-17 04:12:43', 1),
(125, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-17 13:17:27', 1),
(126, '::1', 'bisrulh167@gmail.com', 7, '2024-01-17 13:46:09', 1),
(127, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-17 13:48:22', 1),
(128, '::1', 'bisrulh167@gmail.com', 7, '2024-01-17 13:49:14', 1),
(129, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-19 14:28:35', 1),
(130, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-21 13:15:56', 1),
(131, '::1', 'bisrulh167@gmail.com', 7, '2024-01-21 13:20:27', 1),
(132, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-21 13:21:31', 1),
(133, '::1', 'bisrulh167@gmail.com', NULL, '2024-01-21 14:41:57', 0),
(134, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-21 14:42:19', 1),
(135, '::1', 'bisrulh167@gmail.com', NULL, '2024-01-22 09:23:36', 0),
(136, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-22 09:23:43', 1),
(137, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-22 10:44:34', 1),
(138, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-22 11:39:20', 1),
(139, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-22 12:19:49', 1),
(140, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-22 12:26:39', 1),
(141, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-22 19:51:57', 1),
(142, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-23 06:52:41', 1),
(143, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-23 07:10:02', 1),
(144, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-24 04:36:12', 1),
(145, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-24 04:45:46', 1),
(146, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-28 13:34:42', 1),
(147, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-28 13:36:47', 1),
(148, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-28 14:37:23', 1),
(149, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-28 14:40:14', 1),
(150, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-28 14:51:25', 1),
(151, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-28 14:55:08', 1),
(152, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-28 15:02:03', 1),
(153, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-28 17:13:49', 1),
(154, '::1', 'bisrulh1678@gmail.com', 7, '2024-01-28 17:14:51', 1),
(155, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-28 19:23:06', 1),
(156, '::1', 'bppdprdgresik@gmail.com', 6, '2024-01-29 07:05:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-perdin', 'Manage Kegiatan Perdin');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bagian_dprd`
--

CREATE TABLE `bagian_dprd` (
  `id` int(11) NOT NULL,
  `nama_bagian` varchar(100) DEFAULT NULL,
  `nama_pembina` varchar(255) NOT NULL,
  `nip_pembina` varchar(255) NOT NULL,
  `nama_pembina_utama_muda` varchar(255) NOT NULL,
  `nip_pembina_utama_muda` varchar(255) NOT NULL,
  `nama_penata_muda` varchar(255) NOT NULL,
  `nip_penata_muda` varchar(255) NOT NULL,
  `nama_bendahara` varchar(255) NOT NULL,
  `nip_bendahara` varchar(255) NOT NULL,
  `sisa_anggaran` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbm`
--

CREATE TABLE `bbm` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `harga_bbm` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bbm`
--

INSERT INTO `bbm` (`id`, `provinsi`, `kota`, `harga_bbm`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Timur', 'Bangkalan', 175000.00, '2024-01-07 19:37:31', '2024-01-07 19:37:31'),
(2, 'Jawa Timur', 'Bojonegoro', 325000.00, '2024-01-07 19:37:58', '2024-01-07 19:37:58'),
(3, 'Jawa Timur', 'Blitar', 675000.00, '2024-01-07 19:39:27', '2024-01-07 19:39:27'),
(4, 'Jawa Timur', 'Bondowoso', 775000.00, '2024-01-07 19:40:48', '2024-01-07 19:40:48'),
(5, 'Jawa Timur', 'Banyuwangi', 999999.99, '2024-01-07 19:41:11', '2024-01-07 19:41:11'),
(6, 'Jawa Timur', 'Jember', 800000.00, '2024-01-07 19:41:30', '2024-01-07 19:41:30'),
(7, 'Jawa Timur', 'Jombang', 375000.00, '2024-01-07 19:41:51', '2024-01-07 19:41:51'),
(9, 'Jawa Timur', 'Kota Batu', 450000.00, '2024-01-07 19:45:42', '2024-01-07 19:45:42'),
(10, 'Jawa Timur', 'Kediri', 525000.00, '2024-01-07 19:46:00', '2024-01-07 19:46:00'),
(11, 'Jawa Timur', 'Lamongan', 100000.00, '2024-01-07 19:47:34', '2024-01-07 19:47:34'),
(12, 'Jawa Timur', 'Lumajang', 600000.00, '2024-01-07 19:47:52', '2024-01-07 19:47:52'),
(13, 'Jawa Timur', 'Malang', 400000.00, '2024-01-07 19:48:21', '2024-01-07 19:48:21'),
(14, 'Jawa Timur', 'Mojokerto', 250000.00, '2024-01-07 19:48:40', '2024-01-07 19:48:40'),
(15, 'Jawa Timur', 'Madiun', 700000.00, '2024-01-07 19:48:57', '2024-01-07 19:48:57'),
(16, 'Jawa Timur', 'Magetan', 800000.00, '2024-01-07 19:49:13', '2024-01-07 19:49:13'),
(17, 'Jawa Timur', 'Nganjuk', 525000.00, '2024-01-07 19:49:30', '2024-01-07 19:49:30'),
(18, 'Jawa Timur', 'Ngawi', 750000.00, '2024-01-07 19:50:00', '2024-01-07 19:50:00'),
(19, 'Jawa Timur', 'Pasuruan', 300000.00, '2024-01-07 19:50:22', '2024-01-07 19:50:22'),
(20, 'Jawa Timur', 'Probolinggo', 450000.00, '2024-01-07 19:50:47', '2024-01-07 19:50:47'),
(21, 'Jawa Timur', 'Pamekasan', 525000.00, '2024-01-07 19:51:11', '2024-01-07 19:51:11'),
(22, 'Jawa Timur', 'Ponorogo', 800000.00, '2024-01-07 19:52:02', '2024-01-07 19:52:02'),
(23, 'Jawa Timur', 'Pacitan', 999999.99, '2024-01-07 19:52:18', '2024-01-07 19:52:18'),
(24, 'Jawa Timur', 'Surabaya', 125000.00, '2024-01-07 19:52:34', '2024-01-07 19:52:34'),
(25, 'Jawa Timur', 'Sidoarjo', 150000.00, '2024-01-07 19:52:50', '2024-01-07 19:52:50'),
(26, 'Jawa Timur', 'Sampang', 400000.00, '2024-01-07 19:53:05', '2024-01-07 19:53:05'),
(27, 'Jawa Timur', 'Sumenep', 725000.00, '2024-01-07 19:53:20', '2024-01-07 19:53:20'),
(28, 'Jawa Timur', 'Situbondo', 800000.00, '2024-01-07 19:53:52', '2024-01-07 19:53:52'),
(29, 'Jawa Timur', 'Tuban', 375000.00, '2024-01-07 19:54:09', '2024-01-07 19:54:09'),
(30, 'Jawa Timur', 'Tulungagung', 650000.00, '2024-01-07 19:54:36', '2024-01-07 19:54:36'),
(31, 'Jawa Timur', 'Trenggalek', 775000.00, '2024-01-07 19:54:59', '2024-01-07 19:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `perdin_id` int(11) DEFAULT NULL,
  `bagian_dprd_id` int(11) DEFAULT NULL,
  `rekening_bank` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `debet` decimal(10,2) DEFAULT NULL,
  `kredit` decimal(10,2) DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_perjalanan_dinas`
--

CREATE TABLE `laporan_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `perdin_id` int(11) DEFAULT NULL,
  `sp` varchar(255) DEFAULT NULL,
  `sppd` varchar(255) DEFAULT NULL,
  `lp` varchar(255) DEFAULT NULL,
  `kwitansi` varchar(255) DEFAULT NULL,
  `laporan_pdf` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1701198507, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nama_pelaksana`
--

CREATE TABLE `nama_pelaksana` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `bagian_dprd_id` int(11) DEFAULT NULL,
  `nama_pelaksana` varchar(255) DEFAULT NULL,
  `nik_nip` bigint(20) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `status_pegawai` enum('pns','dewan','thl') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_uang`
--

CREATE TABLE `pengiriman_uang` (
  `id` int(11) NOT NULL,
  `kas_id` int(11) DEFAULT NULL,
  `bagian_dprd_id` int(11) DEFAULT NULL,
  `jumlah_uang` decimal(10,2) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan_dinas`
--

CREATE TABLE `perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `pelaksana_id` int(11) DEFAULT NULL,
  `bbm_id` int(11) DEFAULT NULL,
  `bagian_dprd_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `biaya` decimal(10,2) DEFAULT NULL,
  `anggota` varchar(255) DEFAULT NULL,
  `transportasi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `kode_rekening` varchar(255) DEFAULT NULL,
  `user_input` varchar(50) DEFAULT NULL,
  `user_edit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rincian_perdin`
--

CREATE TABLE `rincian_perdin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `perdin_id` int(11) DEFAULT NULL,
  `judul_rincian` varchar(255) DEFAULT NULL,
  `uang_harian` decimal(10,2) DEFAULT NULL,
  `uang_representasi` decimal(10,2) DEFAULT NULL,
  `akomodasi` decimal(10,2) DEFAULT NULL,
  `tol` decimal(10,2) DEFAULT NULL,
  `bbm` decimal(10,2) DEFAULT NULL,
  `rincian_biaya` decimal(10,0) NOT NULL,
  `jumlah_total` decimal(10,2) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `nama_pembina` varchar(255) NOT NULL,
  `nip_pembina` varchar(255) NOT NULL,
  `nama_pembina_utama_muda` varchar(255) NOT NULL,
  `nip_pembina_utama_muda` varchar(255) NOT NULL,
  `nama_penata_muda` varchar(255) NOT NULL,
  `nip_penata_muda` varchar(255) NOT NULL,
  `nama_bendahara` varchar(255) NOT NULL,
  `nip_bendahara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'bppdprdgresik@gmail.com', 'admin', '$2y$10$Gdj1KM16vrVkDsKy5rDeEeQNH2u72rCNIjfircoDWHcqaVerJOiOW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-01 19:50:08', '2023-12-01 19:50:08', NULL);

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
-- Indexes for table `bagian_dprd`
--
ALTER TABLE `bagian_dprd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbm`
--
ALTER TABLE `bbm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perdin_id` (`perdin_id`),
  ADD KEY `bagian_dprd_id` (`bagian_dprd_id`);

--
-- Indexes for table `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perdin_id` (`perdin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `bagian_dprd_id` (`bagian_dprd_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pengiriman_uang`
--
ALTER TABLE `pengiriman_uang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kas_id` (`kas_id`),
  ADD KEY `bagian_dprd_id` (`bagian_dprd_id`);

--
-- Indexes for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelaksana_id` (`pelaksana_id`),
  ADD KEY `bbm_id` (`bbm_id`),
  ADD KEY `bagian_dprd_id` (`bagian_dprd_id`);

--
-- Indexes for table `rincian_perdin`
--
ALTER TABLE `rincian_perdin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perdin_id` (`perdin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

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
-- AUTO_INCREMENT for table `bagian_dprd`
--
ALTER TABLE `bagian_dprd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bbm`
--
ALTER TABLE `bbm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengiriman_uang`
--
ALTER TABLE `pengiriman_uang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rincian_perdin`
--
ALTER TABLE `rincian_perdin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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

--
-- Constraints for table `kas`
--
ALTER TABLE `kas`
  ADD CONSTRAINT `kas_ibfk_1` FOREIGN KEY (`perdin_id`) REFERENCES `perjalanan_dinas` (`id`),
  ADD CONSTRAINT `kas_ibfk_2` FOREIGN KEY (`bagian_dprd_id`) REFERENCES `bagian_dprd` (`id`);

--
-- Constraints for table `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  ADD CONSTRAINT `laporan_perjalanan_dinas_ibfk_1` FOREIGN KEY (`perdin_id`) REFERENCES `perjalanan_dinas` (`id`);

--
-- Constraints for table `nama_pelaksana`
--
ALTER TABLE `nama_pelaksana`
  ADD CONSTRAINT `nama_pelaksana_ibfk_1` FOREIGN KEY (`bagian_dprd_id`) REFERENCES `bagian_dprd` (`id`),
  ADD CONSTRAINT `nama_pelaksana_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pengiriman_uang`
--
ALTER TABLE `pengiriman_uang`
  ADD CONSTRAINT `pengiriman_uang_ibfk_1` FOREIGN KEY (`kas_id`) REFERENCES `kas` (`id`),
  ADD CONSTRAINT `pengiriman_uang_ibfk_2` FOREIGN KEY (`bagian_dprd_id`) REFERENCES `bagian_dprd` (`id`);

--
-- Constraints for table `perjalanan_dinas`
--
ALTER TABLE `perjalanan_dinas`
  ADD CONSTRAINT `perjalanan_dinas_ibfk_1` FOREIGN KEY (`pelaksana_id`) REFERENCES `nama_pelaksana` (`id`),
  ADD CONSTRAINT `perjalanan_dinas_ibfk_2` FOREIGN KEY (`bbm_id`) REFERENCES `bbm` (`id`),
  ADD CONSTRAINT `perjalanan_dinas_ibfk_3` FOREIGN KEY (`bagian_dprd_id`) REFERENCES `bagian_dprd` (`id`);

--
-- Constraints for table `rincian_perdin`
--
ALTER TABLE `rincian_perdin`
  ADD CONSTRAINT `rincian_perdin_ibfk_1` FOREIGN KEY (`perdin_id`) REFERENCES `perjalanan_dinas` (`id`),
  ADD CONSTRAINT `rincian_perdin_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
