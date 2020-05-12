-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 04:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregisters`
--

CREATE TABLE `adminregisters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminregisters`
--

INSERT INTO `adminregisters` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 'Ferdous Hassan', 'ferdous@gmail.com', 'ferdous7191', '2019-11-20 23:42:41', '2019-11-20 23:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationststus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `designation`, `number`, `address`, `gender`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Jahan Ani', 'ani@gmail.com', 'Doctor', '01793828191', 'dottopara', 'female', 'ani', '2019-11-13 05:34:04', '2019-11-25 11:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inhomes`
--

CREATE TABLE `inhomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inhomes`
--

INSERT INTO `inhomes` (`id`, `catagory`, `doctor_name`, `time`, `date`, `patient_name`, `age`, `gender`, `address`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Medicine Specialist', 'Rahim', '07am - 08am', '2019-11-23', 'Ani', 23, 'female', 'dottopara', '01793828191', '2019-11-22 10:49:55', '2019-11-22 10:49:55'),
(2, 'Gastroenterologist', 'Karim', '12pm - 01pm', '2019-11-27', 'mahfuj', 22, 'male', 'dhaka', '01793828191', '2019-11-25 10:28:08', '2019-11-25 10:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `inhospitals`
--

CREATE TABLE `inhospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inhospitals`
--

INSERT INTO `inhospitals` (`id`, `patient_name`, `date`, `doctor_name`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Nahid Hassan', '04/11/2019', 'dr. john doe', '02.00pm-04.00pm', '2019-11-02 09:57:49', '2019-11-02 09:57:49'),
(2, 'ani', '05/11/2019', 'dr. john doe', '02.00pm-04.00pm', '2019-11-03 01:02:12', '2019-11-03 01:02:12'),
(3, 'raju', '04/11/2019', 'dr. john doe', '02.00pm-04.00pm', '2019-11-03 02:00:15', '2019-11-03 02:00:15'),
(4, 'Masum', '27/10/2019', 'dr. john doe', '02.00pm-04.00pm', '2019-11-05 23:52:37', '2019-11-05 23:52:37'),
(5, 'masum', '27/10/2019', 'dr. john doe', '02.00pm-04.00pm', '2019-11-25 10:27:17', '2019-11-25 10:27:17');

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
(4, '2019_10_16_114014_create_catagories_table', 1),
(5, '2019_10_26_171513_create_inhospitals_table', 1),
(6, '2019_10_28_154946_create_inhomes_table', 1),
(7, '2019_10_28_181325_create_relatives_table', 1),
(8, '2019_10_29_032737_create_petentbeds_table', 1),
(9, '2019_10_29_182414_create_pathologihospitals_table', 1),
(10, '2019_10_29_192434_create_pathologihomes_table', 1),
(11, '2019_11_07_061452_create_adminregisters_table', 2),
(12, '2019_11_13_070243_create_doctors_table', 3),
(13, '2019_12_06_154459_create_prescriptions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pathologihomes`
--

CREATE TABLE `pathologihomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pathology_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pathologihomes`
--

INSERT INTO `pathologihomes` (`id`, `catagory`, `pathology_name`, `time`, `date`, `patient_name`, `age`, `gender`, `address`, `number`, `created_at`, `updated_at`) VALUES
(1, 'blood_test', 'Hasan', '12pm - 01pm', '2019-11-23', 'asad', 24, 'male', 'dhaka', '01793828191`', '2019-11-22 10:53:19', '2019-11-22 10:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `pathologihospitals`
--

CREATE TABLE `pathologihospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pathologist_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pathologihospitals`
--

INSERT INTO `pathologihospitals` (`id`, `patient_name`, `date`, `pathologist_name`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Ani', '04/11/2019', 'Shamim', '06.00pm-08.00pm', '2019-11-22 10:52:15', '2019-11-22 10:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `petentbeds`
--

CREATE TABLE `petentbeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beds` int(11) NOT NULL,
  `indate` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petentbeds`
--

INSERT INTO `petentbeds` (`id`, `name`, `email`, `number`, `beds`, `indate`, `created_at`, `updated_at`) VALUES
(1, 'ani', 'ani@gmail.com', '01793828191', 2, '2019-11-05', '2019-11-03 01:04:14', '2019-11-03 01:04:14'),
(2, 'Sohag', 'sohag@gmail.com', '01793828191', 2, '2019-11-26', '2019-11-25 10:28:48', '2019-11-25 10:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instraction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relatives`
--

CREATE TABLE `relatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `indate` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outdate` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relatives`
--

INSERT INTO `relatives` (`id`, `name`, `email`, `number`, `room`, `beds`, `indate`, `outdate`, `created_at`, `updated_at`) VALUES
(1, 'Masum', 'masum@gmail.com', '01793828191', 1, 3, '2019-11-23', '2019-11-24', '2019-11-22 10:56:18', '2019-11-22 10:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `email_verified_at`, `blood_group`, `gender`, `age`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Md Ferdous Hassan', 'nageswari', 'ferdous@gmail.com', NULL, 'A+', 'Male', '24', '$2y$10$UxGoP9kBc1iTM8jZQWTxveURvo3QjzeTuFO5L1HsGJmoPVaXiEWDO', NULL, '2019-11-02 04:07:45', '2019-11-10 13:41:35'),
(3, 'Ani', 'mymansing', 'ani@gmail.com', NULL, 'Select Blood Group', 'Select Gender', '25', '$2y$10$PR.N9NbEwcLFqss6rxELHeP9.ZRcIe/Sb3hpSRS/ArVg05qDiGKW.', NULL, '2019-11-12 22:00:58', '2019-11-25 10:31:08'),
(4, 'Momotaz Jahan', 'noyakali', 'jahan@gmail.com', NULL, 'Select Blood Group', 'Select Gender', '35', '$2y$10$IkRPJl2xoNo7u3wYnToQx.bbgHxcLRg80xS4wq5pVOUrBxOYVr63i', NULL, '2019-11-25 11:35:13', '2019-11-25 11:35:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregisters`
--
ALTER TABLE `adminregisters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inhomes`
--
ALTER TABLE `inhomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inhospitals`
--
ALTER TABLE `inhospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pathologihomes`
--
ALTER TABLE `pathologihomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pathologihospitals`
--
ALTER TABLE `pathologihospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petentbeds`
--
ALTER TABLE `petentbeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relatives`
--
ALTER TABLE `relatives`
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
-- AUTO_INCREMENT for table `adminregisters`
--
ALTER TABLE `adminregisters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inhomes`
--
ALTER TABLE `inhomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inhospitals`
--
ALTER TABLE `inhospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pathologihomes`
--
ALTER TABLE `pathologihomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pathologihospitals`
--
ALTER TABLE `pathologihospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petentbeds`
--
ALTER TABLE `petentbeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relatives`
--
ALTER TABLE `relatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
