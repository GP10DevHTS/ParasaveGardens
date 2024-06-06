-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 12:46 PM
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
-- Database: `inter-connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sellable` tinyint(1) NOT NULL DEFAULT 0,
  `is_buyable` tinyint(1) NOT NULL DEFAULT 1,
  `is_manufacturable` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `product_category_id`, `deleted_at`, `created_at`, `updated_at`, `is_sellable`, `is_buyable`, `is_manufacturable`) VALUES
(1, 'Hot Milk', NULL, 1, NULL, '2024-06-04 09:26:29', '2024-06-04 09:26:29', 1, 0, 1),
(2, 'hot Chocolate', NULL, 1, NULL, '2024-06-04 09:26:48', '2024-06-04 09:26:48', 1, 0, 1),
(3, 'Hot Coffee', NULL, 1, NULL, '2024-06-04 09:27:01', '2024-06-04 09:27:01', 1, 0, 1),
(4, 'Black tea', NULL, 1, NULL, '2024-06-04 09:27:30', '2024-06-04 09:27:30', 1, 0, 1),
(5, 'Hot water', NULL, 1, NULL, '2024-06-04 09:27:49', '2024-06-04 09:27:49', 1, 0, 1),
(6, 'Spanish Omlette', 'with fresh bread', 2, NULL, '2024-06-04 09:28:20', '2024-06-04 09:28:20', 1, 0, 1),
(7, 'Tomato Omlette', 'with fresh bread', 2, NULL, '2024-06-04 09:28:42', '2024-06-04 09:28:42', 1, 0, 1),
(8, 'plain Omlette', 'with fresh bread', 2, NULL, '2024-06-04 09:29:10', '2024-06-04 09:29:10', 1, 0, 1),
(9, 'Vegetable Sumbusa', NULL, 2, NULL, '2024-06-04 09:30:05', '2024-06-04 09:30:05', 1, 0, 1),
(10, 'beef sumbusa', NULL, 2, NULL, '2024-06-04 09:32:41', '2024-06-04 09:32:41', 1, 0, 1),
(11, 'Plain Omlette', 'with French fries', 2, NULL, '2024-06-04 09:34:57', '2024-06-04 09:34:57', 1, 0, 1),
(12, 'boiled eggs', 'with kachumbari', 2, NULL, '2024-06-04 09:36:42', '2024-06-04 09:36:42', 1, 0, 1),
(13, 'chappatti ', 'with scrambled eggs', 2, NULL, '2024-06-04 09:37:55', '2024-06-04 09:37:55', 1, 0, 1),
(14, 'eggs', NULL, 11, NULL, '2024-06-04 09:40:22', '2024-06-04 09:40:22', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
