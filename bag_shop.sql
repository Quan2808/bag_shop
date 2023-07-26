-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 26, 2023 lúc 04:19 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bag_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_phone`, `admin_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@info.com', '21232f297a57a5a743894a0e4a801fc3', '0867742507', 'Nguyen Trung Quan', '2023-06-30 17:42:53', '2023-06-30 17:42:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(10) UNSIGNED NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_thumbnails` varchar(255) DEFAULT NULL,
  `categories_status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_thumbnails`, `categories_status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop Bag', 'images/products/Laptop Bag/1__9__e7c7b3b04917463c88794fd30cd95fb3.webp', 'active', '2023-07-03 06:17:49', '2023-07-09 19:16:07'),
(3, 'Crossbody Bag', 'images/products/Crossbody Bag/banner_tui_deo_cheo_80bada14b7844e1da2e84959b1c01704.jpg', 'active', '2023-07-09 19:15:23', '2023-07-09 19:15:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Quân', 'vjp@gmaol.com', '123123123', 'vjp', '2023-07-14 05:50:56', '2023-07-14 05:50:56'),
(6, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:37:29', '2023-07-14 07:37:29'),
(7, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:39:31', '2023-07-14 07:39:31'),
(8, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:39:37', '2023-07-14 07:39:37'),
(9, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:39:45', '2023-07-14 07:39:45'),
(10, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:40:01', '2023-07-14 07:40:01'),
(11, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:40:04', '2023-07-14 07:40:04'),
(12, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:40:05', '2023-07-14 07:40:05'),
(13, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:40:10', '2023-07-14 07:40:10'),
(15, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:42:07', '2023-07-14 07:42:07'),
(16, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:42:11', '2023-07-14 07:42:11'),
(17, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:43:37', '2023-07-14 07:43:37'),
(18, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:45:07', '2023-07-14 07:45:07'),
(19, 'John Doe', 'john@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:45:16', '2023-07-14 07:45:16'),
(20, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:31', '2023-07-14 07:48:31'),
(21, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:39', '2023-07-14 07:48:39'),
(22, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:50', '2023-07-14 07:48:50'),
(23, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:52', '2023-07-14 07:48:52'),
(24, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:53', '2023-07-14 07:48:53'),
(25, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:53', '2023-07-14 07:48:53'),
(26, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:55', '2023-07-14 07:48:55'),
(27, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:56', '2023-07-14 07:48:56'),
(28, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:57', '2023-07-14 07:48:57'),
(29, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:48:58', '2023-07-14 07:48:58'),
(30, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:49:43', '2023-07-14 07:49:43'),
(31, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:51:01', '2023-07-14 07:51:01'),
(32, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:52:53', '2023-07-14 07:52:53'),
(33, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:54:18', '2023-07-14 07:54:18'),
(34, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:47', '2023-07-14 07:55:47'),
(35, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:48', '2023-07-14 07:55:48'),
(36, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:49', '2023-07-14 07:55:49'),
(37, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:50', '2023-07-14 07:55:50'),
(38, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:50', '2023-07-14 07:55:50'),
(39, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:51', '2023-07-14 07:55:51'),
(40, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:52', '2023-07-14 07:55:52'),
(41, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:53', '2023-07-14 07:55:53'),
(42, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:55:53', '2023-07-14 07:55:53'),
(43, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:05', '2023-07-14 07:59:05'),
(44, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:19', '2023-07-14 07:59:19'),
(45, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:21', '2023-07-14 07:59:21'),
(46, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:22', '2023-07-14 07:59:22'),
(47, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:22', '2023-07-14 07:59:22'),
(48, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:23', '2023-07-14 07:59:23'),
(49, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:24', '2023-07-14 07:59:24'),
(50, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:25', '2023-07-14 07:59:25'),
(51, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:25', '2023-07-14 07:59:25'),
(52, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:26', '2023-07-14 07:59:26'),
(53, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:27', '2023-07-14 07:59:27'),
(54, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:27', '2023-07-14 07:59:27'),
(55, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:28', '2023-07-14 07:59:28'),
(56, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:29', '2023-07-14 07:59:29'),
(57, 'Trung Quan', 'test@example.com', '0123456789', 'Xin chào, đây là nội dung textarea', '2023-07-14 07:59:29', '2023-07-14 07:59:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(10) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Nguyen Trung Quan', 'validatedData@gmail.com', '0867742502', '$2y$10$yIAblBG/imaiMfmD7.NICOnIioe7eV4L6I.G5JAVFMRfkPX948XJW', '2EV2eoaEHmQMbnvR', NULL, '2023-07-18 01:33:24'),
(5, 'Trung Quan', 'tq@gmail.com', '1233333333', '$2y$10$WOradF4EfseCIYptQygtX.Jq.kl95XHBuXK8hL1/dAKI1Ztjzf9v6', NULL, '2023-07-10 22:55:22', '2023-07-10 22:55:22'),
(6, 'test', 'test@gmail.com', '0867742507', '$2y$10$0NDhgn8ZUZdXA0k6rvb6huN/Bi.AY6LVDxEgMYI8kavluzvoLm8qa', NULL, '2023-07-11 19:12:49', '2023-07-11 19:12:49'),
(8, 'hello', 'hello@gmail.com', '1231231231', '$2y$10$zeI21PvHBHlGkyCBXr9.yuhB094hkj2CyeSqVYxKfqbCLaEUU4ABa', NULL, '2023-07-17 23:47:27', '2023-07-17 23:47:44'),
(10, 'Trung Quan', 'tquan@gmail.com', '0867742509', '$2y$10$IufNK2UGeoLRY2t3WtCFPeQacYUZESIdoTnVKYPEmZKM74xR5ptsK', NULL, '2023-07-18 02:33:11', '2023-07-18 02:33:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_30_173749_create_admin_table', 1),
(25, '2023_07_01_174211_create_categories_table', 2),
(30, '2023_07_03_112652_create_products_table', 3),
(31, '2023_07_04_181930_create_customers_table', 4),
(35, '2023_07_04_193718_create_shipping_details_table', 5),
(59, '2023_07_06_163632_create_payments_table', 6),
(60, '2023_07_06_163748_create_orders_table', 6),
(61, '2023_07_06_180319_create_order_details_table', 6),
(62, '2023_07_14_124432_create_contacts_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `order_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `order_status`, `shipping_id`, `payment_id`, `customer_id`, `order_total`, `created_at`, `updated_at`) VALUES
(15, 'active', 19, '20', '3', 1186000, '2023-07-10 23:43:11', '2023-07-10 23:43:11'),
(16, 'inactive', 20, '21', '3', 3360000, '2023-07-10 23:46:28', '2023-07-10 23:46:28'),
(18, 'inactive', 22, '23', '3', 3294000, '2023-07-11 01:05:17', '2023-07-11 01:05:17'),
(20, 'inactive', 22, '25', '3', 1290000, '2023-07-11 01:42:54', '2023-07-11 01:42:54'),
(21, 'inactive', 22, '26', '3', 1290000, '2023-07-11 01:42:57', '2023-07-11 01:42:57'),
(22, 'inactive', 23, '27', '3', 2372000, '2023-07-11 01:43:27', '2023-07-11 01:43:27'),
(23, 'inactive', 24, '28', '3', 672000, '2023-07-11 18:42:15', '2023-07-11 18:42:15'),
(24, 'inactive', 25, '29', '3', 672000, '2023-07-11 18:50:52', '2023-07-11 18:50:52'),
(25, 'inactive', 26, '30', '6', 1800000, '2023-07-11 19:13:23', '2023-07-11 19:13:23'),
(26, 'inactive', 27, '31', '3', 2928000, '2023-07-11 21:28:10', '2023-07-11 21:28:10'),
(27, 'inactive', 28, '32', '3', 1876000, '2023-07-11 21:37:36', '2023-07-11 21:37:36'),
(28, 'inactive', 29, '33', '3', 580000, '2023-07-11 21:40:36', '2023-07-11 21:40:36'),
(31, 'active', 32, '36', NULL, 1610000, '2023-07-14 11:32:41', '2023-07-14 11:32:41'),
(32, 'active', 33, '37', NULL, 2282000, '2023-07-14 11:55:03', '2023-07-14 11:55:03'),
(33, 'inactive', 34, '38', '3', 938000, '2023-07-15 22:16:00', '2023-07-15 22:16:00'),
(34, 'active', 35, '39', '10', 2284000, '2023-07-18 02:36:16', '2023-07-18 02:36:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_model` varchar(255) NOT NULL,
  `products_price` int(11) NOT NULL,
  `products_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `products_id`, `products_model`, `products_price`, `products_quantity`, `created_at`, `updated_at`) VALUES
(15, 15, 2, 'Zelos', 1186000, 1, '2023-07-10 23:43:11', '2023-07-10 23:43:11'),
(16, 16, 11, 'Marcus', 1290000, 2, '2023-07-10 23:46:28', '2023-07-10 23:46:28'),
(17, 16, 16, 'Julius I', 780000, 1, '2023-07-10 23:46:28', '2023-07-10 23:46:28'),
(20, 18, 2, 'Zelos', 1186000, 1, '2023-07-11 01:05:17', '2023-07-11 01:05:17'),
(21, 18, 8, 'Kratos', 980000, 1, '2023-07-11 01:05:17', '2023-07-11 01:05:17'),
(22, 18, 7, 'Apollo', 1128000, 1, '2023-07-11 01:05:17', '2023-07-11 01:05:17'),
(23, 20, 11, 'Marcus', 1290000, 1, '2023-07-11 01:42:54', '2023-07-11 01:42:54'),
(24, 21, 11, 'Marcus', 1290000, 1, '2023-07-11 01:42:57', '2023-07-11 01:42:57'),
(25, 22, 2, 'Zelos', 1186000, 2, '2023-07-11 01:43:27', '2023-07-11 01:43:27'),
(26, 23, 14, 'Ori', 672000, 1, '2023-07-11 18:42:15', '2023-07-11 18:42:15'),
(27, 24, 14, 'Ori', 672000, 1, '2023-07-11 18:50:52', '2023-07-11 18:50:52'),
(28, 25, 14, 'Ori', 672000, 1, '2023-07-11 19:13:23', '2023-07-11 19:13:23'),
(29, 25, 6, 'Horizon', 1128000, 1, '2023-07-11 19:13:23', '2023-07-11 19:13:23'),
(30, 26, 6, 'Horizon', 1128000, 2, '2023-07-11 21:28:10', '2023-07-11 21:28:10'),
(31, 26, 14, 'Ori', 672000, 1, '2023-07-11 21:28:10', '2023-07-11 21:28:10'),
(32, 27, 1, 'Ready', 938000, 2, '2023-07-11 21:37:36', '2023-07-11 21:37:36'),
(33, 28, 13, 'Bamboo', 580000, 1, '2023-07-11 21:40:36', '2023-07-11 21:40:36'),
(36, 31, 14, 'Ori', 672000, 1, '2023-07-14 11:32:41', '2023-07-14 11:32:41'),
(37, 31, 1, 'Ready', 938000, 1, '2023-07-14 11:32:41', '2023-07-14 11:32:41'),
(38, 32, 14, 'Ori', 672000, 2, '2023-07-14 11:55:03', '2023-07-14 11:55:03'),
(39, 32, 1, 'Ready', 938000, 1, '2023-07-14 11:55:03', '2023-07-14 11:55:03'),
(40, 33, 1, 'Ready', 938000, 1, '2023-07-15 22:16:00', '2023-07-15 22:16:00'),
(41, 34, 7, 'Apollo', 1128000, 1, '2023-07-18 02:36:16', '2023-07-18 02:36:16'),
(42, 34, 15, 'Torino', 428000, 1, '2023-07-18 02:36:16', '2023-07-18 02:36:16'),
(43, 34, 10, 'Victor', 728000, 1, '2023-07-18 02:36:16', '2023-07-18 02:36:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(20, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(21, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(22, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(23, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(24, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(25, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(26, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(27, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(28, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(29, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(30, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(31, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(32, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(33, 'Cash on delivery (COD)', 'inactive', NULL, NULL),
(34, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(35, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(36, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(37, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(38, 'Credit/Debit Card Payment', 'inactive', NULL, NULL),
(39, 'Credit/Debit Card Payment', 'inactive', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `products_id` int(10) UNSIGNED NOT NULL,
  `products_model` varchar(255) NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `products_price` varchar(255) NOT NULL,
  `products_material` varchar(255) NOT NULL,
  `products_size` varchar(255) NOT NULL,
  `products_style` varchar(255) NOT NULL,
  `products_maxload` varchar(255) NOT NULL,
  `products_thumbnails` text DEFAULT NULL,
  `products_gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`products_gallery`)),
  `products_status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`products_id`, `products_model`, `categories_id`, `products_price`, `products_material`, `products_size`, `products_style`, `products_maxload`, `products_thumbnails`, `products_gallery`, `products_status`, `created_at`, `updated_at`) VALUES
(1, 'Ready', 1, '938000', 'Oxford + 210 Polyester', '44 x 30 x 12 cm', 'Backpack for 14-inch laptops', '5', 'images/products/Laptop Bag/Ready/balo_laptop_kingbag_ready__1__149b49c13e5847929274836b5dc413e1_master.webp', '[\"images\\/products\\/Laptop Bag\\/Ready\\/balo_laptop_kingbag_ready__4__504068d6f8da4b729d22aa79bbe4f1a6_master.webp\",\"images\\/products\\/Laptop Bag\\/Ready\\/balo_laptop_kingbag_ready__5__6da06260ac8548c980758d56681be243_master.webp\",\"images\\/products\\/Laptop Bag\\/Ready\\/balo_laptop_kingbag_ready__6__5a7101411d6745c2a4ec4cba3423760d_master.webp\",\"images\\/products\\/Laptop Bag\\/Ready\\/balo_laptop_kingbag_ready__7__0fbb912aa1c74d38ac9e96af4b81a581_master.webp\"]', 'active', '2023-07-03 07:39:20', '2023-07-04 09:06:59'),
(2, 'Zelos', 1, '1186000', 'Oxford + PU', '47 x 33 x 17 cm', 'Backpack for 15.6-inch laptops', '5', 'images/products/Laptop Bag/Zelos/balo_laptop_kingbag_zelos__1__0c7e12c623cb401e893fe35cf33bb572_master.webp', '[\"images\\/products\\/Laptop Bag\\/Zelos\\/balo_laptop_kingbag_zelos__2__-_copy_70ae535a3a574e0c81d622021d37aac1_master.webp\",\"images\\/products\\/Laptop Bag\\/Zelos\\/balo_laptop_kingbag_zelos__3__23fdab4b293c43b8a584c117e7bf1f0c_master.webp\",\"images\\/products\\/Laptop Bag\\/Zelos\\/balo_laptop_kingbag_zelos__5__b0c09aa1f5e54c4ba6800dd5da92f4f6_master.webp\",\"images\\/products\\/Laptop Bag\\/Zelos\\/balo_laptop_kingbag_zelos__9__-_copy_bbbe1b924ba24b14a0094c4f215e34bb_master.webp\",\"images\\/products\\/Laptop Bag\\/Zelos\\/balo_laptop_kingbag_zelos__10__2329c7d97c1a4d30b4ff7c846c5d5a84_master.webp\"]', 'active', '2023-07-03 08:32:21', '2023-07-09 18:24:16'),
(6, 'Horizon', 1, '1128000', '1680 PU', '48 x 30 x 17 cm', 'Backpack for 17 inch laptops', '5', 'images/products/Laptop Bag/Horizon/1__2__efe74c38f02a4c82ae5fe6fbe4b808c4_master.jpg', '[\"images\\/products\\/Laptop Bag\\/Horizon\\/1__1__e7455f9a4317445197b9629dfb3d78ab_master.webp\",\"images\\/products\\/Laptop Bag\\/Horizon\\/1__3__2c71ad3b22d7415aa049b03171c93668_master.webp\",\"images\\/products\\/Laptop Bag\\/Horizon\\/1__4__683c96cdd3af4293af14ee036138eca6_master.webp\",\"images\\/products\\/Laptop Bag\\/Horizon\\/1__5__d840ae403f954812a624414109ef4869_master.webp\",\"images\\/products\\/Laptop Bag\\/Horizon\\/1__6__f451596096b34491a2b1fd7193792f56_master.webp\",\"images\\/products\\/Laptop Bag\\/Horizon\\/1__7__17c4171d84a442ecaffbcf6305ec74b2_master.webp\",\"images\\/products\\/Laptop Bag\\/Horizon\\/1__8__13548bb09ce941b39a0a19f713e4d2db_master.webp\"]', 'active', '2023-07-03 12:30:57', '2023-07-03 12:30:57'),
(7, 'Apollo', 1, '1128000', 'Oxford + PU', '42 x 30 x 13 cm', 'Backpack for 15.6-inch laptops', '5', 'images/products/Laptop Bag/Apollo/1__1__1243b83034f14c26847938b7895eb11d_master.webp', '[\"images\\/products\\/Laptop Bag\\/Apollo\\/1__2__60c515680e1045ff87bb31f03662cb4f_master.webp\",\"images\\/products\\/Laptop Bag\\/Apollo\\/1__3__09e3fc4d7f354c648b1bc1e300f902bd_master.webp\",\"images\\/products\\/Laptop Bag\\/Apollo\\/1__4__20c635a409c140fd83b18e8ee5ca3555_master.webp\",\"images\\/products\\/Laptop Bag\\/Apollo\\/1__5__4789a666655941c987f7c64dfc241b77_master.webp\",\"images\\/products\\/Laptop Bag\\/Apollo\\/1__6__9124df555cf84b0981638a924401d5be_master.webp\",\"images\\/products\\/Laptop Bag\\/Apollo\\/1__7__427a1ab6d56d40128b9163e4c40093f2_master.webp\",\"images\\/products\\/Laptop Bag\\/Apollo\\/1__8__400e91ac6c534063beddf14133e6837f_master.webp\"]', 'active', '2023-07-09 18:44:26', '2023-07-09 18:44:37'),
(8, 'Kratos', 1, '980000', 'Polyester', '45 x 33 x 14 cm', 'Backpack for 15.6-inch laptops', '5', 'images/products/Laptop Bag/Kratos/balo_laptop_sang_trong_kingbag_kratos_2591ea8ee4c348ad801cffbb54ca4af3_master.jpg', '[\"images\\/products\\/Laptop Bag\\/Kratos\\/balo_laptop_cao_cap_kingbag_kratos_8cce49286d0f4920bd6f5a4a0933ba4f_master.jpg\",\"images\\/products\\/Laptop Bag\\/Kratos\\/balo_laptop_kingbag_kratos_0debc1558c304522b467807139afbe5c_master.webp\",\"images\\/products\\/Laptop Bag\\/Kratos\\/balo_laptop_sang_trong_kingbag_kratos_-_15_6_67d7777e8e5449569e3f744f9ec9c8a4_master.webp\",\"images\\/products\\/Laptop Bag\\/Kratos\\/balo_laptop_sang_trong_kingbag_kratos_-_15_6_inch_0b45433537dd484185fec3d2dfc013a0_master.webp\"]', 'active', '2023-07-09 18:51:16', '2023-07-09 18:51:20'),
(9, 'Eric', 1, '700000', 'Polyester', '42 x 31 x 13 cm', 'Backpack for 14-inch laptops', '5', 'images/products/Laptop Bag/Eric/1__3__5a06163f44244f708ffc5b8621792d53_master.webp', '[\"images\\/products\\/Laptop Bag\\/Eric\\/1__1__7247d9454189488497de947b28539732_master.webp\",\"images\\/products\\/Laptop Bag\\/Eric\\/1__2__c0382c9b2b89480fb94e77178e43e422_master.jpg\",\"images\\/products\\/Laptop Bag\\/Eric\\/1__4__a9268d8eb7d645c7b1eccee237c5fa21_master.jpg\",\"images\\/products\\/Laptop Bag\\/Eric\\/1__5__447fbdd879124aff8c77f9f1efeae32d_master.webp\",\"images\\/products\\/Laptop Bag\\/Eric\\/1__6__1b2efc6110ec4c79b4fb3131778c9174_master.webp\",\"images\\/products\\/Laptop Bag\\/Eric\\/1__7__5216ece7d4a94c08b54495b25e4eb5d4_master.webp\"]', 'active', '2023-07-09 18:56:53', '2023-07-09 18:56:53'),
(10, 'Victor', 1, '728000', 'Polyester', '43 x 28 x 8 cm', 'Backpack for 14-inch laptops', '5', 'images/products/Laptop Bag/Victor/1__8__c174dae7ac324972ad12930841ed7c03_master.jpg', '[\"images\\/products\\/Laptop Bag\\/Victor\\/1__9__acded1bbc40b4d2099daff042869d3b1_master.jpg\",\"images\\/products\\/Laptop Bag\\/Victor\\/1__10__f69d17b83f8f459f98181196e5932c60_master.jpg\",\"images\\/products\\/Laptop Bag\\/Victor\\/1__11__2a6d126f2f9f48da818dee4f98ed9094_master.jpg\",\"images\\/products\\/Laptop Bag\\/Victor\\/1__12__09ab1cea7fbb4f28a9698c448db760c8_master.jpg\",\"images\\/products\\/Laptop Bag\\/Victor\\/1__13__84e9e3754d8a4fb2a951a2b4d3b58a5a_master.webp\"]', 'active', '2023-07-09 19:06:05', '2023-07-09 19:06:57'),
(11, 'Marcus', 1, '1290000', 'Polyester', '30 x 42 x 12 cm', 'Backpack for 15.6-inch laptops', '5', 'images/products/Laptop Bag/Marcus/1__1__b28db84f7d294e8d979e68acd933564d_master.jpg', '[\"images\\/products\\/Laptop Bag\\/Marcus\\/1__2__de20a9e894c34ca991c57f83c47fee75_master.jpg\",\"images\\/products\\/Laptop Bag\\/Marcus\\/1__3__b5f12fd1110d4a89ab30d7c5d95a6b1f_master.jpg\",\"images\\/products\\/Laptop Bag\\/Marcus\\/1__4__b69881fae0e9441ea6ea3cbceb471068_master.jpg\",\"images\\/products\\/Laptop Bag\\/Marcus\\/1__5__51e932f8c6d34e6cb6bf8fcdf7f9cda4_master.jpg\",\"images\\/products\\/Laptop Bag\\/Marcus\\/1__6__dafb3c67fe5a49b2b6f5e43deaffbb87_master.webp\",\"images\\/products\\/Laptop Bag\\/Marcus\\/1__7__511031cc01d045e8b459e0b0e5a85819_master.webp\"]', 'active', '2023-07-09 19:10:38', '2023-07-09 19:10:50'),
(12, 'Hormes', 1, '828000', 'Polyester', '43 x 31 x 25 cm', 'Ngăn laptop 15.6 inch', '5', 'images/products/Laptop Bag/Hormes/1__2__e1c12f5a37164dfeb02ad9433bca8d5c_master.jpg', '[\"images\\/products\\/Laptop Bag\\/Hormes\\/1__1__e21383c031a04edead266728779523af_master.jpg\",\"images\\/products\\/Laptop Bag\\/Hormes\\/1__3__91fe525b7e40490aa85fc287a9684f3f_master.jpg\",\"images\\/products\\/Laptop Bag\\/Hormes\\/1__4__a773e967bd2c494b822e624b6ab24846_master.jpg\",\"images\\/products\\/Laptop Bag\\/Hormes\\/1__5__436b6b05232e4e26aff91076b595020e_master.webp\"]', 'active', '2023-07-09 19:13:43', '2023-07-09 20:05:02'),
(13, 'Bamboo', 3, '580000', '1680 Polyester', '27 x 17 x 7 cm', 'Crossbody Bag', '1', 'images/products/Crossbody Bag/Bamboo/1__1__ad268eed35d84589ab5a64f038996d13_master.webp', '[\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__2__1675e80d9eca47fabad7d105a86f7bfc_master.webp\",\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__3__3c908d14407f4b6494f82d3a3397e789_master.webp\",\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__4__6731bebf36fb4afcbd4e939162b1a7f8_master.webp\",\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__5__1b0ac444612d405fad1b1d9c766b1f48_master.webp\",\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__6__ef3f5cb96c1e4cb980cad1a8549d44aa_large.jpg\",\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__7__6d4a419754a94bc6ae581c1a13c9d37b_master.webp\",\"images\\/products\\/Crossbody Bag\\/Bamboo\\/1__8__70cd3bd278bc45dc99e810ac9518884c_master.webp\"]', 'active', '2023-07-09 19:20:05', '2023-07-09 20:04:51'),
(14, 'Ori', 3, '672000', '1680 PU', '31 x 21 x 9 cm', 'Crossbody Bag', '1', 'images/products/Crossbody Bag/Ori/1__1__ff528d899ac347839cd5c31e3a82fd8a_large.webp', '[\"images\\/products\\/Crossbody Bag\\/Ori\\/1__2__ea9a640cc19e413e99a020aab2c2924e_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Ori\\/1__3__472c283c48d44ccb9f4ccc625bdbe028_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Ori\\/1__4__a0c4f1a05bea4033be0cccb1e9684837_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Ori\\/1__5__ef0ff777967f4b50ad08fa4d3328f0f2_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Ori\\/1__6__624b884f43014640ab6a9700b8180d2d_master.jpg\"]', 'active', '2023-07-09 19:56:10', '2023-07-09 20:04:57'),
(15, 'Torino', 3, '428000', '210 Polyester', '12 x 26 x 7 cm', 'Crossbody Bag', '1', 'images/products/Crossbody Bag/Torino/1__1__3fce9d462fbf4d0dad2a845f860d7268_master.webp', '[\"images\\/products\\/Crossbody Bag\\/Torino\\/1__2__7f732ec8fb2a4098a29dd0efdd714685_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Torino\\/1__3__304f6a450a314876b18b5c1728bb2d8c_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Torino\\/1__4__b1f4cef12a3c4955af70ab682f217c72_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Torino\\/1__5__349673fe7c5941fcafc73ee32eeabefb_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Torino\\/1__6__c8d06083e6be4bf2b54eadad2af241ea_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Torino\\/1__7__2aeb87dbcd0f469784b385978eb0941f_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Torino\\/1__8__7b21791886d640f4a2492a0fffb4e0e1_master.jpg\"]', 'active', '2023-07-09 20:08:11', '2023-07-09 20:08:16'),
(16, 'Julius I', 3, '780000', 'Polyester', '32 x 22 x 9 cm', 'Crossbody Bag', '1', 'images/products/Crossbody Bag/Julius I/1__1__298a6cabc69943318235e40bfbced192_master.webp', '[\"images\\/products\\/Crossbody Bag\\/Julius I\\/1__2__1802258bdaf542a9a96b5457d501ab16_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Julius I\\/1__4__b5c26e6dcfe346c8bf05847218a63423_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Julius I\\/1__5__05000d5787014f9a99c9bd1993da18dd_master.jpg\"]', 'active', '2023-07-09 20:16:49', '2023-07-09 20:16:49'),
(17, 'Julius II', 3, '780000', 'Polyester', '32 x 22 x 9 cm', 'Crossbody Bag', '1', 'images/products/Crossbody Bag/Julius II/1__1__25dbe46d476a410d87d36a7c6a92567e_master.jpg', '[\"images\\/products\\/Crossbody Bag\\/Julius II\\/1__2__9084e91550ab4691a42cc691c5b6b478_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Julius II\\/1__3__3d823ebf112d4c44b6f7d0c452a539fd_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Julius II\\/1__4__092fccf4084541648e5170023372e4e5_master.jpg\",\"images\\/products\\/Crossbody Bag\\/Julius II\\/1__5__94936c1cbd2f43b1a16f187a0701792e_master.webp\",\"images\\/products\\/Crossbody Bag\\/Julius II\\/1__6__ff941bc2b0cc4ef985f829e1ba4f3e5c_master.webp\"]', 'active', '2023-07-09 20:19:15', '2023-07-09 20:19:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping_details`
--

CREATE TABLE `shipping_details` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_full_name` varchar(255) NOT NULL,
  `shipping_email` varchar(255) NOT NULL,
  `shipping_phone_number` varchar(10) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_province` varchar(255) NOT NULL,
  `shipping_district` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping_details`
--

INSERT INTO `shipping_details` (`shipping_id`, `shipping_full_name`, `shipping_email`, `shipping_phone_number`, `shipping_address`, `shipping_province`, `shipping_district`, `created_at`, `updated_at`) VALUES
(19, 'trung quan', 'test@gmail.com', '0867742507', 'CMT 8', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-10 23:43:08', '2023-07-10 23:43:08'),
(20, 'Trung Quan', 'nhotecfa@gmail.com', '0867754277', 'CMT 8', 'Hà Nội', 'Ba Đình', '2023-07-10 23:46:26', '2023-07-10 23:46:26'),
(21, 'ád', 'd@d.com', '1111111111', 'asd', 'Hồ Chí Minh', 'Quận Nhà Bè', '2023-07-11 00:18:41', '2023-07-11 00:18:41'),
(22, 'validatedData', 'validatedData@gmail.com', '1231231231', 'abc', 'Hà Nội', 'Tây Hồ', '2023-07-11 01:04:45', '2023-07-11 01:04:45'),
(23, 'validatedData', 'validatedData@gmail.com', '1231231231', 'qwe', 'Hà Nội', 'Nam Từ Liêm', '2023-07-11 01:43:25', '2023-07-11 01:43:25'),
(24, 'validatedData', 'validatedData@gmail.com', '1231231231', 'asd', 'Hà Nội', 'Nam Từ Liêm', '2023-07-11 18:40:55', '2023-07-11 18:40:55'),
(25, 'validatedData', 'validatedData@gmail.com', '1231231231', 'CMT 8', 'Hồ Chí Minh', 'Quận 3', '2023-07-11 18:50:04', '2023-07-11 18:50:04'),
(26, 'Trung Quan', 'test@gmail.com', '0867742507', 'cmt 8', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-11 19:13:21', '2023-07-11 19:13:21'),
(27, 'validatedData', 'validatedData@gmail.com', '1231231231', 'CMT 7', 'Hà Nội', 'Tây Hồ', '2023-07-11 21:28:07', '2023-07-11 21:28:07'),
(28, 'validatedData', 'validatedData@gmail.com', '1231231231', 'CMT 8', 'Hồ Chí Minh', 'Quận Gò Vấp', '2023-07-11 21:37:24', '2023-07-11 21:37:24'),
(29, 'validatedData', 'validatedData@gmail.com', '1231231231', 'asd', 'Hồ Chí Minh', 'Quận Hóc Môn', '2023-07-11 21:40:33', '2023-07-11 21:40:33'),
(30, 'Cặc', 'womev54908@meogl.com', '1231231555', 'cmt 2', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-14 03:30:50', '2023-07-14 03:30:50'),
(31, '7/14', 'vjppro@gmail.com', '0765281111', 'CMT 8', 'Hà Nội', 'Long Biên', '2023-07-14 03:44:05', '2023-07-14 03:44:05'),
(32, 'Thiet ICT', 'kieuvanthiet@gmail.com', '0867896789', 'CMT 8', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-14 11:32:36', '2023-07-14 11:32:36'),
(33, 'Trung Quan', 'test@gmail.com', '0867742507', 'CMT 7', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-14 11:54:50', '2023-07-14 11:54:50'),
(34, 'Nguyen Trung Quan', 'validatedData@gmail.com', '0867742502', 'CMT 8', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-15 22:15:41', '2023-07-15 22:15:41'),
(35, 'Trung Quan', 'tquan@gmail.com', '0867742509', 'Cmt 8', 'Hồ Chí Minh', 'Quận Tân Bình', '2023-07-18 02:36:08', '2023-07-18 02:36:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customers_customer_email_unique` (`customer_email`),
  ADD UNIQUE KEY `customers_customer_phone_unique` (`customer_phone`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `products_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
