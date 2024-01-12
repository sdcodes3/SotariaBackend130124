-- Adminer 4.8.1 MySQL 8.0.34-0ubuntu0.20.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_no` bigint DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `mobile_no`, `gender`, `national_id`) VALUES
(1,	'Admin User',	'admin@admin.com',	'$2y$10$uHtWf1S6oGDUa8Lp.BQmpenjmI6U9E33v.ELGEkMkdaRgaDUELGiC',	'2023-08-13 01:44:33',	'2023-08-13 01:44:33',	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `agent`;
CREATE TABLE `agent` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `agent_full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_mobile_no` bigint DEFAULT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationalidpassport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agentcommision_no_general` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agentcommision_no_life` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supervisor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `agent` (`id`, `agent_full_name`, `agent_email`, `agent_mobile_no`, `gender`, `joining_date`, `nationalidpassport`, `agentcommision_no_general`, `agentcommision_no_life`, `deleted_at`, `created_at`, `updated_at`, `supervisor_name`) VALUES
(1,	'HIren',	'dodu@mag.com',	8200920208,	'Male',	'2024-05-24',	'ABC123',	'ABC123',	'ABC123',	'2023-08-15 07:40:30',	'2023-08-11 23:59:29',	'2023-08-15 07:40:30',	NULL),
(2,	'Dodiya',	'dodiya@xyzcom',	1234567489,	'Male',	'2023-08-26',	'525626532',	'5265265',	'6526542',	NULL,	'2023-08-15 06:44:44',	'2023-08-17 07:02:12',	's'),
(3,	'Dodiya Hiren',	'dodiya@m.com',	1234567489,	'Male',	'2023-08-26',	'525626532',	'5265265',	'6526542',	NULL,	'2023-08-17 06:53:17',	'2023-08-17 06:53:17',	's'),
(4,	'Dodiya Hiren Magecomp',	'dodiya@m.com',	1234567489,	'Male',	'2023-08-26',	'525626532',	'5265265',	'6526542',	NULL,	'2023-08-17 06:59:45',	'2023-08-17 07:02:30',	's');

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `housenoandbuildingname` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stamp_of_company` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `customers` (`id`, `full_name`, `email`, `occupation`, `mobile_no`, `gender`, `address`, `dob`, `housenoandbuildingname`, `street`, `country`, `city`, `state`, `district`, `stamp_of_company`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Hiren',	'dodiyahiren34@gmail.com',	'2',	'8200920208',	'Male',	NULL,	'2023-08-11',	'c-3073',	'New Bhagwati',	'1',	'2',	NULL,	'3',	'EasyBCD Backup (2023-03-17).bcd',	'2023-08-15 07:23:16',	'2023-08-11 05:08:12',	'2023-08-15 07:23:16'),
(2,	'dodiya Magecomp',	'dodiya@m.com',	'2',	'52945985292',	'Female',	NULL,	'2023-08-17',	'54252952',	'Kaliyabid',	'india',	'bhavnagar',	NULL,	'dist1',	NULL,	NULL,	'2023-08-15 07:20:28',	'2023-08-20 04:27:42'),
(3,	'dodiya Hiren',	'asdas@gm.com',	'IT Engineer',	'529562',	'Male',	NULL,	'2023-08-25',	'95263',	'115263',	'india',	'bhavnagar',	NULL,	'dist1',	NULL,	NULL,	'2023-08-15 07:28:01',	'2023-08-15 07:28:01'),
(4,	NULL,	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-15 07:28:33',	'2023-08-15 07:28:25',	'2023-08-15 07:28:33'),
(5,	'File',	'file@gmai.com',	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	'testing.txt',	'2023-08-20 07:15:56',	'2023-08-19 01:22:27',	'2023-08-20 07:15:56'),
(6,	'test2',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	'testing.txt',	'2023-08-20 06:39:54',	'2023-08-19 01:23:04',	'2023-08-20 06:39:54'),
(7,	'Test 3',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 06:39:57',	'2023-08-19 02:27:12',	'2023-08-20 06:39:57'),
(8,	'Tesrt4',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 07:16:01',	'2023-08-19 02:30:25',	'2023-08-20 07:16:01'),
(9,	'Lenovo',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	NULL,	'2023-08-19 02:53:22',	'2023-08-19 02:53:22'),
(10,	'fcgvhbjn',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 07:16:05',	'2023-08-19 06:49:43',	'2023-08-20 07:16:05'),
(11,	'Hiren',	'hiren@mail.com',	NULL,	'9876543210',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-08-20 06:39:49',	'2023-08-20 04:50:14',	'2023-08-20 06:39:49'),
(12,	'Hiren',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-08-20 06:39:41',	'2023-08-20 05:05:15',	'2023-08-20 06:39:41'),
(13,	'Hiren',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-08-20 06:39:44',	'2023-08-20 05:12:18',	'2023-08-20 06:39:44'),
(14,	'Hiren Dodiya',	'admin@admin.com',	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 06:43:54',	'2023-08-20 06:40:25',	'2023-08-20 06:43:54'),
(15,	'Hiren Dodiy',	'admin@admin.com',	NULL,	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	NULL,	'2023-08-20 06:44:15',	'2023-08-20 06:48:11'),
(16,	'Testong',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 07:16:10',	'2023-08-20 06:49:33',	'2023-08-20 07:16:10'),
(17,	'testing 2',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	NULL,	'2023-08-20 06:51:19',	'2023-08-20 06:51:19'),
(18,	'testing 2',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 06:59:46',	'2023-08-20 06:59:37',	'2023-08-20 06:59:46'),
(19,	'Tws',	'admin@admin.com',	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	'2023-08-20 21:22:50',	'2023-08-20 07:00:06',	'2023-08-20 21:22:50'),
(20,	'Test FIle Demo',	'admin@admin.com',	'IT Engineer',	'123456789',	'Male',	NULL,	'2023-08-07',	'c-3073',	'Kaliyabid',	'india',	'bhavnagar',	NULL,	'dist1',	NULL,	NULL,	'2023-08-20 21:25:40',	'2023-08-20 21:25:40'),
(21,	'sdf',	NULL,	's',	NULL,	's',	NULL,	NULL,	NULL,	NULL,	'--Select--',	'--Select--',	NULL,	'--Select--',	NULL,	NULL,	'2023-08-21 11:59:32',	'2023-08-21 11:59:32'),
(22,	'name',	'mail@gmail.com',	NULL,	'123456789',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-06 04:19:31',	'2023-09-06 04:19:31'),
(23,	'name',	'mail@gmail.com',	NULL,	'123456789',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-06 04:25:33',	'2023-09-06 04:25:33');

DROP TABLE IF EXISTS `discount`;
CREATE TABLE `discount` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `coupan_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_percentage` bigint DEFAULT NULL,
  `discount_description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `discount` (`id`, `coupan_code`, `insurance_type`, `discount_percentage`, `discount_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	NULL,	'1',	545,	'irhjfmskdhfihfihifhirehfiuhiufhsjdhfhfdihdfihiuhiukfhrejf',	NULL,	'2023-08-12 04:37:10',	'2023-08-12 04:37:10');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `home_insurance_plans`;
CREATE TABLE `home_insurance_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` bigint DEFAULT NULL,
  `coverage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizeofvilla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nooffloors` bigint DEFAULT NULL,
  `noofrooms` bigint DEFAULT NULL,
  `homecategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `effectivedate` date DEFAULT NULL,
  `expirydate` date DEFAULT NULL,
  `limit` bigint DEFAULT NULL,
  `BuildingNo` bigint DEFAULT NULL,
  `BlockNo` bigint DEFAULT NULL,
  `PlaateNo` bigint DEFAULT NULL,
  `PlotNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoResident` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `individual_plan`;
CREATE TABLE `individual_plan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `individual_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` bigint DEFAULT NULL,
  `family_data` text COLLATE utf8mb4_unicode_ci,
  `policy_holder` bigint DEFAULT NULL,
  `national_id` bigint DEFAULT NULL,
  `id_no` bigint DEFAULT NULL,
  `previouse_medical_case` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `individual_plan` (`id`, `user_id`, `individual_type`, `age`, `family_data`, `policy_holder`, `national_id`, `id_no`, `previouse_medical_case`, `medical_details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	23,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-06 04:38:51',	'2023-09-06 04:38:51');

DROP TABLE IF EXISTS `insurance`;
CREATE TABLE `insurance` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_number` bigint DEFAULT NULL,
  `post_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bussiness_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stamp_company` text COLLATE utf8mb4_unicode_ci,
  `signature` text COLLATE utf8mb4_unicode_ci,
  `letter_head` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `insurance` (`id`, `full_name`, `license_number`, `address`, `telephone_number`, `post_address`, `bussiness_line`, `tax_id`, `fax_number`, `stamp_company`, `signature`, `letter_head`, `deleted_at`, `created_at`, `updated_at`) VALUES
(12,	'Lic',	'123',	'km',	45464,	'564',	'1',	'56',	'546',	NULL,	'/tmp/phpxr2eJY',	'/tmp/phpRged5Z',	NULL,	'2023-08-31 03:00:42',	'2023-08-31 03:00:42'),
(13,	'Lic',	'1234',	'bhv',	2486,	'88562',	'1',	'234',	'324',	NULL,	'/tmp/phpko8j7X',	'/tmp/phpys67XZ',	NULL,	'2023-08-31 03:03:43',	'2023-08-31 03:03:43');

DROP TABLE IF EXISTS `insurance_plans`;
CREATE TABLE `insurance_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lineofbussines` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit` bigint DEFAULT NULL,
  `plan_fee` bigint DEFAULT NULL,
  `sales_tax` bigint DEFAULT NULL,
  `net_premium` bigint DEFAULT NULL,
  `gross_premium` bigint DEFAULT NULL,
  `commission` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stamp_fee` bigint DEFAULT NULL,
  `commission_percent` bigint DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `insurance_plans` (`id`, `company_name`, `lineofbussines`, `plan_name`, `limit`, `plan_fee`, `sales_tax`, `net_premium`, `gross_premium`, `commission`, `stamp_fee`, `commission_percent`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Aditya Birla',	'Line B',	'Life Time Term',	10,	15000,	15,	15,	158,	'5',	250,	1,	NULL,	'2023-08-22 13:22:49',	'2023-08-22 13:22:49');

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint unsigned NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`),
  CONSTRAINT `media_chk_1` CHECK (json_valid(`manipulations`)),
  CONSTRAINT `media_chk_2` CHECK (json_valid(`custom_properties`)),
  CONSTRAINT `media_chk_3` CHECK (json_valid(`generated_conversions`)),
  CONSTRAINT `media_chk_4` CHECK (json_valid(`responsive_images`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2,	'App\\Models\\CustomerModel',	2,	'9c435744-4533-4201-a643-aadf3346d42f',	'customer-files',	'teatinf2',	'teatinf2.txt',	'text/plain',	'public',	'public',	12,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-20 04:27:42',	'2023-08-20 04:27:42'),
(3,	'App\\Models\\CustomerModel',	15,	'd384d056-09e1-4186-b64a-cc3ab1f88084',	'customer-files',	'testing',	'testing.txt',	'text/plain',	'public',	'public',	11,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-20 06:48:11',	'2023-08-20 06:48:11'),
(4,	'App\\Models\\CustomerModel',	18,	'1d6348ba-9e38-4df6-adbd-e811f954c95f',	'customer-files',	'testing',	'testing.txt',	'text/plain',	'public',	'public',	11,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-20 06:59:37',	'2023-08-20 06:59:37'),
(5,	'App\\Models\\CustomerModel',	19,	'516c5867-1ca0-4423-9455-99f0d2dd4a78',	'customer-files',	'teatinf2',	'teatinf2.txt',	'text/plain',	'public',	'public',	12,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-20 07:00:06',	'2023-08-20 07:00:06'),
(10,	'App\\Models\\CustomerModel',	21,	'f5ce0959-c65d-4ebf-932b-43e892b933f9',	'customer-files',	'testing',	'testing.txt',	'text/plain',	'public',	'public',	11,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-21 11:59:32',	'2023-08-21 11:59:32'),
(14,	'App\\Models\\InsuranceModel',	8,	'2189c3a8-4618-4456-9717-e04b9034f3ff',	'insurance-files',	'teatinf2 (2)',	'teatinf2-(2).txt',	'text/plain',	'public',	'public',	12,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-21 13:08:41',	'2023-08-21 13:08:41'),
(15,	'App\\Models\\InsuranceModel',	8,	'34890ea5-1271-476d-93ab-facbd4c2cf7c',	'insurance-files',	'testing',	'testing.txt',	'text/plain',	'public',	'public',	11,	'[]',	'[]',	'[]',	'[]',	2,	'2023-08-21 13:08:41',	'2023-08-21 13:08:41'),
(16,	'App\\Models\\InsuranceModel',	8,	'697c7b0a-928d-4884-8509-9d2d0dad1c74',	'insurance-files',	'teatinf2',	'teatinf2.txt',	'text/plain',	'public',	'public',	12,	'[]',	'[]',	'[]',	'[]',	3,	'2023-08-21 13:08:41',	'2023-08-21 13:08:41'),
(17,	'App\\Models\\InsuranceModel',	9,	'9fab1814-1edc-4987-a2ef-a5113b6ef03a',	'insurance-files',	'in1',	'in1.txt',	'application/x-empty',	'public',	'public',	0,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-22 12:16:20',	'2023-08-22 12:16:20'),
(18,	'App\\Models\\InsuranceModel',	9,	'a8343b9f-7304-40a6-94b5-6f9d7f5cfcaf',	'insurance-files',	'in2',	'in2.txt',	'application/x-empty',	'public',	'public',	0,	'[]',	'[]',	'[]',	'[]',	2,	'2023-08-22 12:16:21',	'2023-08-22 12:16:21'),
(19,	'App\\Models\\InsuranceModel',	9,	'43cd6256-2fc0-4fac-bd0a-66884fde679d',	'insurance-files',	'in3',	'in3.txt',	'application/x-empty',	'public',	'public',	0,	'[]',	'[]',	'[]',	'[]',	3,	'2023-08-22 12:16:21',	'2023-08-22 12:16:21'),
(20,	'App\\Models\\InsuranceModel',	10,	'9faf3bdd-415d-4857-864a-d3a82f975a46',	'insurance-files',	'TEst-Code',	'TEst-Code.odt',	'application/vnd.oasis.opendocument.text',	'public',	'public',	13726,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-23 03:44:59',	'2023-08-23 03:44:59'),
(21,	'App\\Models\\InsuranceModel',	10,	'dac869de-ba49-4743-b873-5cbc894c5554',	'insurance-files',	'Shopify-App-Requirments',	'Shopify-App-Requirments.odt',	'application/vnd.oasis.opendocument.text',	'public',	'public',	15282,	'[]',	'[]',	'[]',	'[]',	2,	'2023-08-23 03:44:59',	'2023-08-23 03:44:59'),
(22,	'App\\Models\\InsuranceModel',	10,	'9e912f17-3840-466c-a0a3-213afc356d8a',	'insurance-files',	'Shopify App Requirments',	'Shopify-App-Requirments.odt',	'application/vnd.oasis.opendocument.text',	'public',	'public',	15282,	'[]',	'[]',	'[]',	'[]',	3,	'2023-08-23 03:44:59',	'2023-08-23 03:44:59'),
(24,	'App\\Models\\InsuranceModel',	11,	'0ee0ca34-9258-4ee2-8a2d-a7e36ce4ff04',	'signature',	'Screen-1',	'Screen-1.png',	'image/png',	'public',	'public',	30291,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-25 06:50:35',	'2023-08-25 06:50:35'),
(25,	'App\\Models\\InsuranceModel',	11,	'29594a57-36d3-448b-be11-7d566983de3d',	'letter_head',	'Screen-2',	'Screen-2.png',	'image/png',	'public',	'public',	30087,	'[]',	'[]',	'[]',	'[]',	2,	'2023-08-25 06:50:35',	'2023-08-25 06:50:35'),
(26,	'App\\Models\\InsuranceModel',	12,	'668fad49-9b51-4924-91f7-0d0d311d9847',	'insurance_stamp_company',	'temple',	'temple.png',	'image/png',	'public',	'public',	11317,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-31 03:00:42',	'2023-08-31 03:00:42'),
(27,	'App\\Models\\InsuranceModel',	12,	'80c4f67f-1221-439c-b226-f70583ffe4dc',	'signature',	'somnath2 (3)',	'somnath2-(3).jpg',	'image/jpeg',	'public',	'public',	29187,	'[]',	'[]',	'[]',	'[]',	2,	'2023-08-31 03:00:43',	'2023-08-31 03:00:43'),
(28,	'App\\Models\\InsuranceModel',	12,	'f8af1e59-a89c-4eaf-830c-141338f0fca5',	'letter_head',	'somnath2',	'somnath2.jpg',	'image/jpeg',	'public',	'public',	29187,	'[]',	'[]',	'[]',	'[]',	3,	'2023-08-31 03:00:43',	'2023-08-31 03:00:43'),
(29,	'App\\Models\\InsuranceModel',	13,	'7d34745a-3be4-4060-8426-3ca94c0571e3',	'insurance_stamp_company',	'lic',	'lic.jpg',	'image/jpeg',	'public',	'public',	75130,	'[]',	'[]',	'[]',	'[]',	1,	'2023-08-31 03:03:43',	'2023-08-31 03:03:43'),
(30,	'App\\Models\\InsuranceModel',	13,	'bf03a182-db6d-429c-8f66-fa543bc0842a',	'signature',	'temple',	'temple.png',	'image/png',	'public',	'public',	11317,	'[]',	'[]',	'[]',	'[]',	2,	'2023-08-31 03:03:43',	'2023-08-31 03:03:43'),
(31,	'App\\Models\\InsuranceModel',	13,	'da2ae8bb-3d91-4e8a-a797-d536ba30e9eb',	'letter_head',	'temple',	'temple.ico',	'image/vnd.microsoft.icon',	'public',	'public',	4286,	'[]',	'[]',	'[]',	'[]',	3,	'2023-08-31 03:03:43',	'2023-08-31 03:03:43');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2023_08_11_100531_create_customers_table',	2),
(6,	'2023_08_11_124400_create_insurance_table',	3),
(7,	'2023_08_12_050546_create_agent_table',	4),
(8,	'2023_08_12_052735_add_supervisor_name_to_agent_table',	5),
(9,	'2023_08_12_095931_create_discount_table',	6),
(10,	'2023_08_12_102051_create_supervisor_table',	7),
(11,	'2023_08_12_110643_create_subadmin_table',	8),
(12,	'2023_08_13_054937_create_privacy_table',	9),
(13,	'2023_08_13_065658_create_admins_table',	10),
(14,	'2023_08_19_062013_create_media_table',	11),
(15,	'2023_08_20_104003_add_expire_at_collumn_to_personal_access_token',	12),
(16,	'2023_08_22_184141_create_insurance_plans_table',	13),
(17,	'2023_08_22_175356_create_home_insurance_plans_table',	14),
(18,	'2023_08_25_163359_add_new_column_to_admins_table',	14),
(19,	'2023_09_06_085808_create_individual_plan_table',	15),
(20,	'2023_09_06_100803_create_individual_plan_table',	16);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `expires_at`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1,	'App\\Models\\CustomerModel',	13,	'api_token',	'71a558cf377da69eb7d0d9569b38ed834248f2f262c65d8a9ff315be86d1e5a8',	'2023-08-20 10:42:18',	'[\"*\"]',	NULL,	'2023-08-20 05:12:18',	'2023-08-20 05:12:18'),
(2,	'App\\Models\\CustomerModel',	23,	'api_token',	'a322c887bdeb053dc71f9a04bbfdf8576f18e36528780f5f9f64dabb92a99dec',	'2023-09-06 10:08:51',	'[\"*\"]',	'2023-09-06 04:38:51',	'2023-09-06 04:25:33',	'2023-09-06 04:38:51');

DROP TABLE IF EXISTS `privacy`;
CREATE TABLE `privacy` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_of_bussiness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy_content` text COLLATE utf8mb4_unicode_ci,
  `policy_file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `privacy` (`id`, `company_name`, `line_of_bussiness`, `privacy_policy_content`, `policy_file`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	NULL,	NULL,	'Write your privacy policy Details here....',	'C:\\xampp\\tmp\\phpF060.tmp',	NULL,	'2023-08-13 00:29:08',	'2023-08-13 00:29:08');

DROP TABLE IF EXISTS `subadmin`;
CREATE TABLE `subadmin` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` bigint DEFAULT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `subadmin` (`id`, `full_name`, `mobile_no`, `admin_id`, `password`, `gender`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Hiren Dodiya',	8200920208,	'sdfsd3424',	'sdffdcxvfcv',	'Male',	NULL,	'2023-08-12 05:46:10',	'2023-08-12 05:46:10');

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE `supervisor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `svname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `svemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `svmobile_no` bigint DEFAULT NULL,
  `sv_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationalandpassportno` bigint DEFAULT NULL,
  `agent_commission` bigint DEFAULT NULL,
  `override_commission` bigint DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `supervisor` (`id`, `svname`, `svemail`, `svmobile_no`, `sv_gender`, `joining_date`, `nationalandpassportno`, `agent_commission`, `override_commission`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Hiren',	'Hiren@gmail.com',	8200920208,	'Male',	'2023-08-12',	2129426,	45245245,	562645265,	NULL,	'2023-08-12 05:01:50',	'2023-08-12 05:01:50');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-09-06 10:16:22
