-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 06:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

CREATE TABLE `car_brands` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `brand_country` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_brands`
--

INSERT INTO `car_brands` (`brand_id`, `name`, `status`, `brand_country`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'BMW', 1, 2, '1575554671.jpg', '2019-12-05 12:04:31', '2019-12-05 12:04:31'),
(2, 'BMW', 1, 1, NULL, '2019-12-08 10:12:46', '2019-12-08 10:12:46'),
(3, 'BMW', 1, 3, '1575807189.jpg', '2019-12-08 10:13:09', '2019-12-08 10:13:09'),
(4, 'BMW', 0, 4, '1575807215.png', '2019-12-08 10:13:35', '2019-12-08 10:13:35'),
(5, 'bmw', 0, 1, NULL, '2019-12-08 10:13:59', '2019-12-08 10:13:59'),
(8, 'ahmed', 1, 3, '1575815586.jpg', '2019-12-08 12:33:06', '2019-12-08 12:33:06'),
(9, 'marsedes', 0, 1, '1575820731.jpg', '2019-12-08 13:58:51', '2019-12-08 13:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE `car_models` (
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `model_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_brand` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_models`
--

INSERT INTO `car_models` (`model_id`, `model_name`, `year`, `model_image`, `model_brand`, `created_at`, `updated_at`) VALUES
(1, 'x3', 2010, '1575554725.png', 1, '2019-12-05 12:05:25', '2019-12-05 12:05:25'),
(2, 'x2', 1996, '1575727547.png', 1, '2019-12-07 12:05:47', '2019-12-07 12:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `car_owner`
--

CREATE TABLE `car_owner` (
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `distance` int(11) NOT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassis_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_model` bigint(20) UNSIGNED NOT NULL,
  `car_owner` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Egypt', '20', NULL, NULL),
(2, 'Germany', '30', NULL, NULL),
(3, 'USA', '44', NULL, NULL),
(4, 'KSA', '94', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_30_112152_create_countries_table', 1),
(5, '2019_11_30_113013_create_car_brands_table', 1),
(6, '2019_11_30_115528_create_car_model_table', 1),
(7, '2019_11_30_120049_create_car_owner_table', 1),
(8, '2019_12_02_113910_create_permission_tables', 1),
(9, '2019_12_05_102803_create_workshops_table', 1),
(10, '2019_12_05_111741_create_services_table', 1),
(11, '2019_12_05_112740_create_workshop_has_service_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2019-12-02 22:00:00', '2019-12-09 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `average_price` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `description`, `average_price`, `created_at`, `updated_at`) VALUES
(1, 'maintannace', 'askd;sadl', 0.00, '2019-12-02 22:00:00', '2019-12-01 22:00:00'),
(2, 'name', 'asdsafsaf', 0.00, '2019-12-05 14:22:44', '2019-12-05 14:22:44'),
(3, 'name eaweas', 'asdsaf', 0.00, '2019-12-05 14:25:30', '2019-12-05 14:25:30'),
(4, 'name eaweas', 'asdsadsad', 0.00, '2019-12-05 14:25:49', '2019-12-05 14:25:49'),
(5, 'asdsad', 'sadsad', 0.00, '2019-12-05 14:26:04', '2019-12-05 14:26:04'),
(6, 'name eaweas', 'uiuiyiyuitytyt', 0.00, '2019-12-08 10:14:54', '2019-12-08 10:14:54'),
(7, 'shaf3y', 'asdsa', 0.00, '2019-12-08 11:14:13', '2019-12-08 11:14:13'),
(8, 'asdsad', 'sadsadsad', 0.00, '2019-12-08 11:30:53', '2019-12-08 11:30:53'),
(10, 'hany', 'hkhiluyuihu', 0.00, '2019-12-08 11:47:13', '2019-12-08 11:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `city`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hany', 'elhakem', 1283484903, 'cairo', 'mehany333@gmail.com', NULL, '$2y$10$2XN1qMomOuDPCBjv3Z0TD.y43HWwXD01wKp8PKUs7fgQS6XEnTcaS', 0, NULL, '2019-12-05 11:05:36', '2019-12-05 11:05:36'),
(2, 'Hany', 'elhakem', 125488552, 'cairo', 'mehany33@gmail.com', NULL, '$2y$10$qnDWP0hQDWWco28UR69z6.yJxB9F3HDgZ./5X6jzxxl0nQiY17iXG', 0, NULL, '2019-12-05 11:08:18', '2019-12-05 11:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `workshop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees` int(11) NOT NULL DEFAULT 0,
  `waiting_spot` tinyint(1) NOT NULL DEFAULT 0,
  `request` tinyint(1) NOT NULL DEFAULT 0,
  `workshop_owner` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`workshop_id`, `workshop_name`, `shop_image`, `address`, `location`, `shop_phone`, `employees`, `waiting_spot`, `request`, `workshop_owner`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 0, 0, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(2, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 0, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(3, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 0, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(4, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(5, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 0, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(6, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(7, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(8, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(9, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(10, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 0, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(11, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(12, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(13, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(14, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00'),
(15, 'ahmed', 'logo', 'nasr city', 'cairo', '0125455455', 20, 1, 1, 1, '2019-11-30 22:00:00', '2019-12-29 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_has_service`
--

CREATE TABLE `workshop_has_service` (
  `shop_service_id` bigint(20) UNSIGNED NOT NULL,
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `id_workshop` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `car_brands_brand_country_foreign` (`brand_country`);

--
-- Indexes for table `car_models`
--
ALTER TABLE `car_models`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `car_models_model_brand_foreign` (`model_brand`);

--
-- Indexes for table `car_owner`
--
ALTER TABLE `car_owner`
  ADD PRIMARY KEY (`owner_id`),
  ADD KEY `car_owner_id_model_foreign` (`id_model`),
  ADD KEY `car_owner_car_owner_foreign` (`car_owner`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`workshop_id`),
  ADD KEY `workshops_workshop_owner_foreign` (`workshop_owner`);

--
-- Indexes for table `workshop_has_service`
--
ALTER TABLE `workshop_has_service`
  ADD PRIMARY KEY (`shop_service_id`),
  ADD KEY `workshop_has_service_id_service_foreign` (`id_service`),
  ADD KEY `workshop_has_service_id_workshop_foreign` (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_brands`
--
ALTER TABLE `car_brands`
  MODIFY `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `car_models`
--
ALTER TABLE `car_models`
  MODIFY `model_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_owner`
--
ALTER TABLE `car_owner`
  MODIFY `owner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `workshop_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `workshop_has_service`
--
ALTER TABLE `workshop_has_service`
  MODIFY `shop_service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_brands`
--
ALTER TABLE `car_brands`
  ADD CONSTRAINT `car_brands_brand_country_foreign` FOREIGN KEY (`brand_country`) REFERENCES `countries` (`country_id`) ON UPDATE CASCADE;

--
-- Constraints for table `car_models`
--
ALTER TABLE `car_models`
  ADD CONSTRAINT `car_models_model_brand_foreign` FOREIGN KEY (`model_brand`) REFERENCES `car_brands` (`brand_id`) ON UPDATE CASCADE;

--
-- Constraints for table `car_owner`
--
ALTER TABLE `car_owner`
  ADD CONSTRAINT `car_owner_car_owner_foreign` FOREIGN KEY (`car_owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_owner_id_model_foreign` FOREIGN KEY (`id_model`) REFERENCES `car_models` (`model_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workshops`
--
ALTER TABLE `workshops`
  ADD CONSTRAINT `workshops_workshop_owner_foreign` FOREIGN KEY (`workshop_owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workshop_has_service`
--
ALTER TABLE `workshop_has_service`
  ADD CONSTRAINT `workshop_has_service_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workshop_has_service_id_workshop_foreign` FOREIGN KEY (`id_workshop`) REFERENCES `workshops` (`workshop_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
