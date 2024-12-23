-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 12:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beaute`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--


-- --------------------------------------------------------

--
-- Table structure for table `clients`
--


--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `number`, `email`, `visit_count`, `last_visit`, `next_visit`, `occupation`, `marital_status`, `created_at`, `updated_at`) VALUES
(1, 'Test', '9991114034', 'alan@gmail.com', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

-- --------------------------------------------------------

--
-- Dumping data for table `migrations`
-- --------------------------------------------------------

--
-- Table structure for table `movimientos_stock`
--



--
-- Dumping data for table `movimientos_stock`
--

INSERT INTO `movimientos_stock` (`id`, `producto_id`, `cantidad`, `tipo_movimiento`, `status`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 'alta', NULL, NULL, '2024-10-07 07:10:43', '2024-10-07 07:10:43'),
(2, 11, 2, 'alta', NULL, NULL, '2024-10-07 07:15:58', '2024-10-07 07:15:58'),
(3, 11, 1, 'venta', NULL, NULL, '2024-10-07 09:51:08', '2024-10-07 09:51:08'),
(5, 2, 2, 'alta', NULL, NULL, '2024-10-08 07:13:42', '2024-10-08 07:13:42'),
(6, 2, 1, 'baja', 'pendiente', NULL, '2024-10-08 07:16:02', '2024-10-08 07:16:02'),
(7, 3, 1, 'alta', NULL, NULL, '2024-10-15 21:36:54', '2024-10-15 21:36:54'),
(8, 6, 4, 'alta', NULL, NULL, '2024-10-15 21:37:23', '2024-10-15 21:37:23'),
(9, 9, 1, 'alta', NULL, NULL, '2024-10-16 00:26:22', '2024-10-16 00:26:22'),
(10, 9, 1, 'venta', NULL, NULL, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(11, 2, 1, 'venta', NULL, NULL, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(12, 3, 1, 'venta', NULL, NULL, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(13, 6, 2, 'venta', NULL, NULL, '2024-10-16 00:35:24', '2024-10-16 00:35:24'),
(14, 8, 1, 'ajuste', NULL, NULL, '2024-10-16 00:44:57', '2024-10-16 00:44:57'),
(15, 9, 1, 'ajuste', NULL, NULL, '2024-10-16 00:45:07', '2024-10-16 00:45:07'),
(17, 8, 1, 'ajuste', NULL, NULL, '2024-10-16 00:45:23', '2024-10-16 00:45:23'),
(18, 4, 12, 'alta', NULL, NULL, '2024-10-16 00:48:30', '2024-10-16 00:48:30'),
(19, 4, 12, 'venta', NULL, NULL, '2024-10-16 00:48:50', '2024-10-16 00:48:50'),
(20, 4, 10, 'alta', NULL, NULL, '2024-10-16 00:49:15', '2024-10-16 00:49:15'),
(21, 2, 1, 'alta', NULL, NULL, '2024-10-16 00:53:47', '2024-10-16 00:53:47'),
(22, 3, 1, 'alta', NULL, NULL, '2024-10-16 00:53:51', '2024-10-16 00:53:51'),
(23, 7, 1, 'alta', NULL, NULL, '2024-10-16 00:53:56', '2024-10-16 00:53:56'),
(24, 2, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(25, 3, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(26, 6, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(27, 7, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(28, 8, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(29, 9, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(30, 11, 1, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(31, 4, 5, 'venta', NULL, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(32, 4, 2, 'venta', NULL, NULL, '2024-11-20 01:46:27', '2024-11-20 01:46:27');



--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `codigo_barras`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Crema Hidrante', 'descripcion edit', 50.00, '0293621545041', '2024-10-01 06:44:34', '2024-10-08 07:34:13', 4),
(3, 'Serum Facial', 'descripcion', 26.03, '7257103884249', '2024-10-01 06:45:14', '2024-10-01 06:45:14', 4),
(4, 'Shampoo Revitalizante', 'descripcion', 45.71, '5957365718161', '2024-10-01 06:46:50', '2024-10-01 06:46:50', 5),
(6, 'Shampoo Revitalizante', 'descripcion', 45.71, '5957365718162', '2024-10-01 08:37:01', '2024-10-01 08:37:01', 4),
(7, 'Shampoo Revitalizante', 'descripcion', 45.71, '5957365718166', '2024-10-01 08:40:02', '2024-10-01 08:40:02', 4),
(8, 'Shampoo Revitalizante', 'descripcion', 45.71, '5957365718167', '2024-10-01 09:04:49', '2024-10-01 09:04:49', 4),
(9, 'Shampoo para calvos', 'Producto', 15000.00, '1234567890123', '2024-10-07 07:09:53', '2024-10-16 00:45:07', 4),
(11, 'Shampoo para calvos', 'Producto', 15000.00, '12345678901234', '2024-10-07 07:10:43', '2024-10-07 07:10:43', 4);

-- --------------------------------------------------------
--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'doctor', NULL, NULL),
(2, 'asistente', NULL, NULL);

-- --------------------------------------------------------

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `producto_id`, `cantidad`, `estado`, `created_at`, `updated_at`) VALUES
(2, 11, 3, 'disponible', '2024-10-07 07:10:43', '2024-10-16 00:55:58'),
(3, 2, 0, 'disponible', '2024-10-08 07:13:42', '2024-10-16 00:55:58'),
(4, 3, 0, 'disponible', '2024-10-15 21:36:53', '2024-10-16 00:55:58'),
(5, 6, 1, 'disponible', '2024-10-15 21:37:23', '2024-10-16 00:55:58'),
(6, 9, 0, 'disponible', '2024-10-16 00:26:22', '2024-10-16 00:55:58'),
(7, 8, 0, 'disponible', '2024-10-16 00:44:57', '2024-10-16 00:55:58'),
(8, 4, 3, 'disponible', '2024-10-16 00:48:30', '2024-11-20 01:46:27'),
(9, 7, 0, 'disponible', '2024-10-16 00:53:56', '2024-10-16 00:55:58');

-- --------------------------------------------------------

--
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `fcm_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Doctor Uno', 'doctor1@test.com', NULL, '$2y$10$QokK7pWbU0rWAtLYzvWuRuiJ.DxB/KZq1wp9xHRSraKFb4b6juNRG', NULL, NULL, '2024-09-25 07:34:06', '2024-09-25 07:34:06'),
(2, 'Doctor Dos', 'doctor2@test.com', NULL, '$2y$10$XVAv67lZn1aRocHh6fmEDeYEnZwg41EabVgRZuPocrbi36t4PoBaK', NULL, NULL, '2024-09-25 07:34:06', '2024-09-25 07:34:06'),
(3, 'Dulce', 'dulce@test.com', NULL, '$2y$10$YdeqfFNsHmOqWo2ThRE7bOuUlg8nNdutIv9aO6SLmWaBPaIZFmFOK', NULL, NULL, '2024-09-25 07:34:06', '2024-09-25 07:34:06');

-- --------------------------------------------------------

-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `role_id`, `name`, `age`, `phone`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'test', 1, '123456789', 'M', '2024-04-04', '2024-09-25 07:34:06', '2024-09-25 07:34:06'),
(2, 2, 1, 'test 2', 1, '123456789', 'M', '2024-04-04', '2024-09-25 07:34:06', '2024-09-25 07:34:06'),
(3, 3, 2, 'Dulce', 1, '123456789', 'F', '2024-04-04', '2024-09-25 07:34:06', '2024-09-25 07:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--


--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id`, `cantidad`, `total`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 3, 15076.03, NULL, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(2, 1, 91.42, NULL, '2024-10-16 00:35:24', '2024-10-16 00:35:24'),
(3, 1, 548.52, NULL, '2024-10-16 00:48:50', '2024-10-16 00:48:50'),
(4, 8, 30441.71, NULL, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(5, 1, 91.42, NULL, '2024-11-20 01:46:27', '2024-11-20 01:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `venta_detalles`
--

--
-- Dumping data for table `venta_detalles`
--

INSERT INTO `venta_detalles` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 1, 15000.00, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(2, 1, 2, 1, 50.00, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(3, 1, 3, 1, 26.03, '2024-10-16 00:34:14', '2024-10-16 00:34:14'),
(4, 2, 6, 2, 45.71, '2024-10-16 00:35:24', '2024-10-16 00:35:24'),
(5, 3, 4, 12, 45.71, '2024-10-16 00:48:50', '2024-10-16 00:48:50'),
(6, 4, 2, 1, 50.00, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(7, 4, 3, 1, 26.03, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(8, 4, 6, 1, 45.71, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(9, 4, 7, 1, 45.71, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(10, 4, 8, 1, 45.71, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(11, 4, 9, 1, 15000.00, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(12, 4, 11, 1, 15000.00, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(13, 4, 4, 5, 45.71, '2024-10-16 00:55:58', '2024-10-16 00:55:58'),
(14, 5, 4, 2, 45.71, '2024-11-20 01:46:27', '2024-11-20 01:46:27');

--
