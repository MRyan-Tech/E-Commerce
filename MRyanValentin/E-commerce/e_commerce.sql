-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2025 at 02:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint UNSIGNED NOT NULL,
  `judul_website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `atas_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul_website`, `logo`, `deskripsi`, `alamat`, `email`, `telepon`, `created_at`, `updated_at`, `atas_nama`, `no_rekening`) VALUES
(1, 'E- Commerce', '16733466071.png', 'Selamat datang di Gadget Store, destinasi utama bagi para pecinta teknologi! Kami hadir untuk memenuhi kebutuhan gadget dan aksesoris berkualitas dengan harga terbaik. Dari smartphone terbaru, laptop canggih, hingga aksesoris inovatif kami menyediakan berbagai pilihan untuk mendukung gaya hidup digital Anda.', 'Jl. Agung utara 3D Jakarta Utara .', 'm.ryanbagusv@gmail.com', '081290470663', NULL, '2025-03-24 02:30:31', 'M Ryan Bagus', '1234-1234-1234-1234');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `id_member` int NOT NULL,
  `id_barang` int NOT NULL,
  `jumlah` int NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `is_checkout` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `id_member`, `id_barang`, `jumlah`, `size`, `color`, `total`, `is_checkout`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 2, 'S', 'Hitam', 5186, 1, '2023-01-14 03:19:40', '2023-01-17 04:41:29'),
(2, 2, 5, 1, 'S', 'Hitam', 25597, 1, '2023-01-14 03:27:39', '2023-01-17 04:41:29'),
(4, 3, 7, 1, 'S', 'Hitam', 21844, 1, '2025-03-24 04:28:52', '2025-03-25 06:29:22'),
(5, 3, 2, 1, '-', 'Black', 9699000, 1, '2025-03-24 07:43:23', '2025-03-25 06:29:22'),
(6, 3, 2, 1, '-', 'Black', 9699000, 1, '2025-03-25 04:56:25', '2025-03-25 06:29:22'),
(8, 3, 1, 1, '-', 'Black', 16999000, 1, '2025-03-25 06:28:30', '2025-03-25 06:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'Modern, fast, practical, advanced', '17428186217.png', '2023-01-10 02:57:01', '2025-03-24 08:06:09'),
(2, 'Apple', 'Powerful, lightweight, flexible, efficient', '17428290364.jpg', '2023-01-10 02:57:24', '2025-03-24 08:10:36'),
(3, 'ASUS', 'Stylish, smart, functional, durable', '17428293873.png', '2023-01-10 02:57:41', '2025-03-24 08:16:27'),
(4, 'Xiaomi', 'ini produk xiaomi', '17428302983.jpg', '2025-03-24 08:31:38', '2025-03-24 08:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_member` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama_member`, `no_hp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Asep', '08312312332', 'asep@gmail.com', '$2y$10$6Onep3VFDbVhXRsjlPiEKeXN935BeVxf0vIfWJjANhRI3rnLkAiMG', '2023-01-14 02:35:26', '2023-01-14 02:35:26'),
(3, 'M Ryan', '081290470663', 'm.ryanbagusv@gmail.com', '$2y$12$C5BKyQxXf1FMce4yyPse3.fzoPUdXzdORvFgOpEdoMFA.3H2BsGHy', '2025-03-23 20:41:48', '2025-03-23 20:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_30_084750_create_categories_table', 1),
(6, '2022_10_01_103505_create_subcategories_table', 1),
(7, '2022_10_05_084331_create_sliders_table', 1),
(8, '2022_10_05_090431_create_products_table', 1),
(9, '2022_10_05_092646_create_members_table', 1),
(10, '2022_10_05_093334_create_testimonis_table', 1),
(11, '2022_10_05_093744_create_reviews_table', 1),
(12, '2022_10_05_100248_create_orders_table', 1),
(13, '2022_10_05_100705_add_status_to_orders_table', 1),
(14, '2022_10_15_105217_modify_order_details_table', 1),
(15, '2022_10_25_100740_create_payments_table', 1),
(16, '2023_01_05_074910_create_about_table', 1),
(17, '2023_01_14_091405_add_rekening_to_about', 2),
(18, '2023_01_14_092329_drop_column_in_members', 3),
(20, '2023_01_14_094938_create_carts_table', 4),
(21, '2023_01_17_113902_add_id_member_to_payments', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `id_member` int NOT NULL,
  `invoice` int NOT NULL,
  `grand_total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_member`, `invoice`, `grand_total`, `created_at`, `updated_at`, `status`) VALUES
(2, 2, 23011729, 40783, '2023-01-17 04:41:29', '2023-01-17 04:51:22', 'Selesai'),
(3, 3, 25032432, 71844, '2025-03-24 04:29:32', '2025-03-25 06:32:51', 'Selesai'),
(4, 3, 25032433, 71844, '2025-03-24 04:29:33', '2025-03-25 06:32:54', 'Selesai'),
(5, 3, 25032433, 71844, '2025-03-24 04:29:33', '2025-03-25 06:32:02', 'Dikirim'),
(6, 3, 25032434, 71844, '2025-03-24 04:29:34', NULL, 'Baru'),
(7, 3, 25032435, 71844, '2025-03-24 04:29:35', NULL, 'Baru'),
(8, 3, 25032446, 9749000, '2025-03-24 07:44:46', NULL, 'Baru'),
(9, 3, 25032549, 9774000, '2025-03-25 04:56:49', '2025-03-25 06:32:03', 'Dikirim'),
(10, 3, 25032522, 17049000, '2025-03-25 06:29:22', NULL, 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `id_order` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL,
  `size` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_produk`, `jumlah`, `size`, `color`, `total`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 2, 'S', 'Hitam', 5186, '2023-01-17 11:52:28', NULL),
(4, 2, 5, 1, 'S', 'Hitam', 25597, '2023-01-16 17:00:00', NULL),
(5, 3, 7, 1, 'S', 'Hitam', 21844, '2025-03-24 04:29:32', NULL),
(6, 4, 7, 1, 'S', 'Hitam', 21844, '2025-03-24 04:29:33', NULL),
(7, 5, 7, 1, 'S', 'Hitam', 21844, '2025-03-24 04:29:33', NULL),
(8, 6, 7, 1, 'S', 'Hitam', 21844, '2025-03-24 04:29:34', NULL),
(9, 7, 7, 1, 'S', 'Hitam', 21844, '2025-03-24 04:29:35', NULL),
(10, 8, 2, 1, '-', 'Black', 9699000, '2025-03-24 07:44:46', NULL),
(11, 9, 2, 1, '-', 'Black', 9699000, '2025-03-25 04:56:50', NULL),
(12, 10, 1, 1, '-', 'Black', 16999000, '2025-03-25 06:29:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `id_order` int NOT NULL,
  `jumlah` int NOT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_member` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_order`, `jumlah`, `provinsi`, `kabupaten`, `kecamatan`, `detail_alamat`, `status`, `no_rekening`, `atas_nama`, `created_at`, `updated_at`, `id_member`) VALUES
(2, 2, 40783, '6', '152', '', 'Ut modi sed eligendi', 'DITERIMA', '1234-1234-1234-1234', 'Kang Kasep', '2023-01-17 04:41:49', '2023-01-17 04:45:58', 2),
(3, 3, 65000, '9', '126', '', 'AFAIHFBHASICN', 'MENUNGGU', '89787472874', 'M Ryan Bagus', '2025-03-25 04:57:14', '2025-03-25 04:57:14', 3),
(4, 3, 71844, '9', '22', '', 'AFAIHFBHASICN', 'MENUNGGU', '89787472874', 'M Ryan Bagus', '2025-03-25 06:30:14', '2025-03-25 06:30:14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `id_kategori` int NOT NULL,
  `id_subkategori` int NOT NULL,
  `nama_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `diskon` int NOT NULL,
  `bahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_kategori`, `id_subkategori`, `nama_barang`, `gambar`, `deskripsi`, `harga`, `diskon`, `bahan`, `tags`, `sku`, `ukuran`, `warna`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'SAMSUNG GALAXY NOTE 20 ULTRA 5G 12/256GB', '17428224038.jpeg', 'Lorem Ipsum Dolor Sit Amet', 16999000, 0, '-', '-', '-', '-', 'Black, RED', '2023-01-10 03:05:55', '2025-03-24 06:20:03'),
(2, 3, 6, 'HP ASUS ROG II RAM 8GB ROM 128GB', '17428228934.jpg', 'Lorem Ipsum Dolor Sit Amet', 9699000, 0, '-', '-', '-', '-', 'Black, Red, Navy', '2023-01-10 03:05:55', '2025-03-24 06:28:13'),
(3, 1, 2, 'Samsung Galaxy A35 256 GB 12 GB', '17428235974.jpg', 'Lorem Ipsum Dolor Sit Amet', 4000000, -2, '-', '-', '-', '-', 'Silver , Red , Blue , Black', '2023-01-10 03:05:55', '2025-03-24 06:39:57'),
(4, 3, 4, 'Apple Watch 8 Series New', '17428244752.webp', 'Lorem Ipsum Dolor Sit Amet', 7999999, 0, '-', '-', '-', '-', 'Silver , Red , Blue , Black', '2023-01-10 03:05:55', '2025-03-24 06:54:35'),
(5, 1, 1, 'Samsung Galaxy I Watch 3', '17428246692.webp', 'Lorem Ipsum Dolor Sit Amet', 3999999, 0, '-', '-', '-', '-', 'Silver , Red , Blue , Black', '2023-01-10 03:05:55', '2025-03-24 06:57:49'),
(6, 4, 7, 'Xiaomi 14 Pro Max', '17428254559.jpg', 'Lorem Ipsum Dolor Sit Amet', 79999999, 0, '-', '-', '-', '-', 'Red, Black', '2023-01-10 03:05:55', '2025-03-24 07:10:55'),
(7, 3, 6, 'ROG Series 9 512 / 12GB', '17428256827.jpg', 'Lorem Ipsum Dolor Sit Amet', 12000000, 0, '-', '-', '-', '-', 'Silver , Red , Blue , Black', '2023-01-10 03:05:55', '2025-03-24 07:14:42'),
(8, 4, 7, 'Xiaomi 13 Series new pro', '17428257585.png', 'Lorem Ipsum Dolor Sit Amet', 8000000, 0, '-', '-', '-', '-', 'Black, Red, Navy', '2023-01-10 03:05:55', '2025-03-24 07:15:58'),
(9, 3, 3, 'LAPTOP ASUS ROG II RAM 8GB ROM 128GB', '17428284891.jpg', 'Lorem Ipsum Dolor Sit Amet', 12000000, 0, '-', '-', '-', '-', 'Black, RED', '2023-01-10 03:05:55', '2025-03-24 08:01:29'),
(10, 3, 3, 'LAPTOP ASUS INTEL core i3 256 GB 12 GB', '17428285926.jpg', 'Lorem Ipsum Dolor Sit Amet', 9000000, 0, '-', '-', '-', '-', 'Red, Black', '2023-01-10 03:05:55', '2025-03-24 08:03:12'),
(21, 2, 5, 'IPHONE 14 Pro Max 156GB', '17428310841.jpeg', '-', 17000000, 0, '-', '-', '-', '-', 'Silver , Red , Blue , Black', '2025-03-24 08:44:44', '2025-03-24 08:44:44'),
(22, 4, 8, 'Mi lite Smart watch', '17428312187.webp', '-', 500000, 0, '-', '-', '-', '-', 'Black, RED', '2025-03-24 08:46:58', '2025-03-24 08:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `id_member` int NOT NULL,
  `id_produk` int NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `nama_slider`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Great Gadget 2025', 'New Arrivals Collection', '17428076389.avif', '2023-01-10 02:55:31', '2025-03-24 02:13:58'),
(2, 'Exclusive Products', 'Get awesome items only in Gadget Zone Store', '17428067631.jpg', '2023-01-10 02:55:48', '2025-03-24 06:02:32'),
(3, 'Enjoy Online Shopping', 'Gadget Zone is perfectly responsive theme', '17428067755.jpg', '2023-01-10 02:56:05', '2025-03-24 06:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_subkategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `id_kategori`, `nama_subkategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Samsung Smart Watch', 'Lorem ipsum dolor sit amet', '16733446943.jpg', '2023-01-10 02:58:14', '2025-03-24 08:18:09'),
(2, 1, 'Android Samsung', 'Lorem ipsum dolor sit amet', '16733447133.jpg', '2023-01-10 02:58:33', '2025-03-24 08:18:33'),
(3, 3, 'Lapto Asus', 'Lorem ipsum dolor sit amet', '16733447264.jpg', '2023-01-10 02:58:46', '2025-03-24 08:19:47'),
(4, 2, 'I Watch Apple', 'Lorem ipsum dolor sit amet', '16733447424.jpg', '2023-01-10 02:59:02', '2025-03-24 08:19:27'),
(5, 2, 'Iphone', 'Iphone produk dari apple', '17428296421.jpeg', '2025-03-24 08:20:42', '2025-03-24 08:20:42'),
(6, 3, 'Handphone ASUS', 'Ini produk hp dari asus', '17428300523.webp', '2025-03-24 08:27:32', '2025-03-24 08:27:32'),
(7, 4, 'Handphone Xiaomi', 'ini handphone xiaomi', '17428304798.jpg', '2025-03-24 08:34:39', '2025-03-24 08:34:39'),
(8, 4, 'Smartwatch Xiaomi', 'Ini Smartwatch xiaomi', '17428305232.jpg', '2025-03-24 08:35:23', '2025-03-24 08:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_testimoni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama_testimoni`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Maria Pitta Fransisca', '\"I\'m truly impressed! This smartphone has everything I need—sleek design, powerful performance, and a long-lasting battery. The camera quality is outstanding, capturing every detail perfectly. Highly recommended!\"', '17428259511.jpeg', '2023-01-10 02:59:52', '2025-03-24 07:19:11'),
(2, 'Budiman Bapak Budi', '\"This laptop exceeded my expectations. It\'s fast, lightweight, and perfect for both work and entertainment. The display is stunning, and the battery life keeps me productive all day. A must-have for professionals!\"', '17428260807.jpg', '2023-01-10 03:00:06', '2025-03-24 07:21:20'),
(3, 'Alexandre Puki', '\"This smartwatch is a game-changer! It tracks my workouts, monitors my heart rate, and even keeps me connected without needing my phone all the time. Stylish and functional—absolutely love it!\"', '17428260394.jpg', '2023-01-10 03:00:19', '2025-03-24 07:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '2023-01-10 02:53:50', '$2y$10$8dlHuafx9tbAsh8CKJeTuuhjxwVexscJMaC85UZBmnlP79iAY1xH6', NULL, '2023-01-10 02:53:50', '2023-01-10 02:53:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
