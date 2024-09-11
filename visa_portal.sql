-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 01:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visa_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cnic` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pob` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `poi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contract_period` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `salary` decimal(13,2) NOT NULL,
  `salary_unit` enum('Monthly','Daily','Wages') COLLATE utf8_unicode_ci NOT NULL,
  `permission_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `employer_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `employer_city_id` int(10) UNSIGNED NOT NULL,
  `nomination_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nomination_cnic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kd_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emp_date` date NOT NULL,
  `husband` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name` text COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Private','Public') COLLATE utf8_unicode_ci NOT NULL,
  `visa_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `issue_date` text COLLATE utf8_unicode_ci NOT NULL,
  `id_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_details`
--

CREATE TABLE `employment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_visa` int(11) NOT NULL,
  `salary` decimal(13,2) NOT NULL,
  `salary_unit` enum('Monthly','Daily','Wages') COLLATE utf8_unicode_ci NOT NULL,
  `commision` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `commision_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overtime` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `overtime_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contract_period` text COLLATE utf8_unicode_ci NOT NULL,
  `free_accommodation` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `free_accommodation_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `free_food` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `free_food_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `working_place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duty_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_benefits` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `other_benefits_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `free_tickets` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `free_tickets_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medical_insurance` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `medical_insurance_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transportaion` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL,
  `transportaion_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_details`
--

CREATE TABLE `file_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `status_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_statuses`
--

CREATE TABLE `file_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_05_090322_create_users_table', 1),
(2, '2020_10_06_081348_create_file_details_table', 1),
(3, '2020_10_07_103611_create_employer_details_table', 1),
(4, '2020_10_10_102121_create_countries_table', 1),
(5, '2020_10_10_102214_create_cities_table', 1),
(6, '2020_10_10_102816_create_categories_table', 1),
(7, '2020_10_17_042734_create_employment_details_table', 1),
(8, '2020_10_17_042810_create_sender_details_table', 1),
(9, '2020_10_17_050545_create_employee_details_table', 1),
(10, '2020_10_26_090229_create_file_statuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sender_details`
--

CREATE TABLE `sender_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `type` enum('Processing','Recruitment') COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(13,2) NOT NULL,
  `other_expense` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_details` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permission_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2a$04$YeaJnDMe25tPJ8AkylwF0O2gONT/SJlu4lZvUWiEMH54IPobmQFEq', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer_details_file_id_foreign` (`file_id`);

--
-- Indexes for table `employment_details`
--
ALTER TABLE `employment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_details`
--
ALTER TABLE `file_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_statuses`
--
ALTER TABLE `file_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender_details`
--
ALTER TABLE `sender_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employment_details`
--
ALTER TABLE `employment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_details`
--
ALTER TABLE `file_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_statuses`
--
ALTER TABLE `file_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sender_details`
--
ALTER TABLE `sender_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD CONSTRAINT `employer_details_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `file_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
