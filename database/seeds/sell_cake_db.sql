-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 29, 2020 lúc 05:10 PM
-- Phiên bản máy phục vụ: 5.7.30-log-cll-lve
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuitxyz_laravel_sell`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--
--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `quyen` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_city` int(11) DEFAULT NULL,
  `id_district` int(11) DEFAULT NULL,
  `id_ward` int(11) DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `quyen`, `email`, `email_verified_at`, `password`, `name`, `id_city`, `id_district`, `id_ward`, `address`, `gender`, `phone_number`, `note`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 0, '1018503444@gmail.com', NULL, '$2y$10$laK0Zmdn7IQS9yfLXrHSquujix7MlrBqeX0biqVqdqtLnmG1rKX06', '91331093', NULL, NULL, NULL, NULL, 3, '1171828024', NULL, NULL, NULL, NULL),
(4, 0, '1457996678@gmail.com', NULL, '$2y$10$oCxmWbzeR1sNjRosmy.Ih.MOJubHK0EPMiaOs0HXtrtvo1D3uVyK2', '1750849550', NULL, NULL, NULL, NULL, 2, '741384174', NULL, NULL, NULL, NULL),
(6, 1, 'admin123@gmail.com', NULL, '$2y$10$uIt7/jloBHaK9D16jhxizOAcBWB2XNKixrpkq6xpqGNfzT4BymKT2', 'admin', 10, 89, 3070, '786786876', 1, '1967522122', NULL, NULL, NULL, '2020-06-16 09:48:00'),
(9, 0, 'heu123@gmail.com', NULL, '$2y$10$jdezl/8NU/ax6UEpnqCx1.Mzf8MI5lj6jdDBlyI3WwuHPki/ei4hy', 'minhthu', 2, 26, 754, '1231313', 1, '313212', '12313213', NULL, '2020-06-04 04:05:31', '2020-06-04 06:13:21'),
(10, 0, '123132131@aaarqr', NULL, '$2y$10$u0usBLKl9M129zeTXqJgRe.sH3tzLSaGsnJ2QDwq2Z.dhig94M3yG', '13132', NULL, NULL, NULL, '13213', 1, '12313132', NULL, NULL, '2020-06-04 08:00:06', '2020-06-04 08:00:06'),
(11, 0, 'minhthu512586@gmail.com', NULL, '$2y$10$O8dM6JMnKfDnSXuZLmRfb.WzG0coQ5rslOzj6PE2hz2D1PhirBqOy', 'Minh Thư', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-04 08:01:22', '2020-06-04 08:01:22'),
(13, 0, '17521103@gm.uit.edu.vn', NULL, '$2y$10$fq7GX1sSXnd3A88kVohAyOSkec3Q6uLrN5oZL3yOOKWXiE69qFA0O', 'THư lê', 6, 66, 2161, 'ádadada', 1, '1231313', NULL, NULL, '2020-06-16 09:32:44', '2020-06-16 09:57:50'),
(14, 0, '17520247@gm.uit.edu.vn', NULL, '$2y$10$X0v7tA4JBMs49WxhS2gGheFRMwlCmnXua95C3Ae3uhtnp97pZ2vc6', 'Nguyen Ha', 79, 787, 27667, '62, Đường 1', 2, '0908616039', NULL, NULL, '2020-06-20 23:23:06', '2020-06-21 00:54:08'),
(15, 0, 'nguyenngoctran93@yahoo.com.vn', NULL, '$2y$10$1TkOlTpCLrGO1cYkHO.CkOV4hHHXx.2o4yxXShVSNK31DTPxapDAO', 'Nguyễn Ngọc Trân', 79, NULL, NULL, 'KTX KHU A', 1, '123456789', NULL, NULL, '2020-07-08 15:23:58', '2020-07-08 15:23:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward`
--
--

CREATE TABLE `dashboard` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
