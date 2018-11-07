-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 06:53 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berkeleydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Information technologies', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', NULL, NULL),
(2, 'Finances', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', NULL, NULL),
(3, 'Telecomunnications', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `profile_id`, `program_id`, `exam_id`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 3, 1, NULL, NULL),
(2, 4, 5, 3, 2, NULL, NULL),
(3, 5, 6, 3, 1, NULL, NULL),
(4, 6, 2, 1, 3, NULL, NULL),
(5, 7, 1, 1, 4, NULL, NULL),
(6, 7, 2, 2, 7, NULL, NULL),
(7, 4, 4, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Math', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', NULL, NULL),
(2, 'Physics', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', NULL, NULL),
(3, 'English', '', NULL, NULL),
(4, 'Geography', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_06_045325_create_roles_table', 1),
(4, '2018_11_06_050138_create_departments_table', 1),
(5, '2018_11_06_050508_add_roles_and_approval_to_users_table', 1),
(6, '2018_11_06_051434_create_profiles_table', 1),
(7, '2018_11_06_051910_create_programs_table', 1),
(8, '2018_11_06_052900_create_exams_table', 1),
(9, '2018_11_06_052912_create_sessions_table', 1),
(10, '2018_11_06_054235_create_programexams_table', 1),
(11, '2018_11_06_055036_create_scores_table', 1),
(12, '2018_11_06_055401_create_enrollments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `family`, `photo`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'borislav', 'krastev', 'http://127.0.0.1/1.png', 'sdfsdfsadfs fsadfsdaf', 1, NULL, NULL),
(2, 'plamen', 'valchev', 'http://127.0.0.1/1.png', 'sfafsafasfsa fasfasffsa ', 2, NULL, NULL),
(3, 'tsvetelint', 'tsvetkov', 'http://127.0.0.1/1.png', 'safsfasfa dfasfsfasf ', 5, NULL, NULL),
(4, 'gosho', 'goshoov', 'http://127.0.0.1/1.png', 'sfafsasfa fasffasasf', 3, NULL, NULL),
(5, 'maria', 'petrova', 'http://127.0.0.1/1.png', 'FSDSFA AFSFF', 6, NULL, NULL),
(6, 'Moni', 'Monov', 'http://127.0.0.1/1.png', 'asfsfasf fasafas', 7, NULL, NULL),
(7, 'Petar ', 'Petrov', 'http://127.0.0.1/1.png', 'sfafas fasfsasfafa ', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programexams`
--

CREATE TABLE `programexams` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programexams`
--

INSERT INTO `programexams` (`id`, `created_at`, `updated_at`, `program_id`, `exam_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 2, 1),
(3, NULL, NULL, 2, 2),
(4, NULL, NULL, 5, 3),
(5, NULL, NULL, 5, 4),
(6, NULL, NULL, 6, 4),
(7, NULL, NULL, 6, 3),
(8, NULL, NULL, 3, 1),
(9, NULL, NULL, 3, 2),
(10, NULL, NULL, 4, 1),
(11, NULL, NULL, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `duration` double(3,1) NOT NULL,
  `quota` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `description`, `duration`, `quota`, `created_at`, `updated_at`, `department_id`) VALUES
(1, 'Software Engineering', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', 5.0, 60, NULL, NULL, 1),
(2, 'Hardware engineering', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', 5.0, 50, NULL, NULL, 1),
(3, 'Satellite communications', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', 5.5, 50, NULL, NULL, 3),
(4, 'Terrestrial communications ', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', 5.0, 50, NULL, NULL, 3),
(5, 'Finances and Accounting', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', 5.0, 50, NULL, NULL, 2),
(6, 'Marketing', 'Turducken ham turkey strip steak corned beef cupim salami tongue bresaola flank. Jerky jowl t-bone alcatra corned beef filet mignon. Short loin leberkas fatback turducken short ribs corned beef jowl flank meatloaf tri-tip alcatra.', 4.5, 55, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'administrator', NULL, NULL),
(2, 'editor', NULL, NULL),
(3, 'candidate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `score` double(3,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `session_id`, `profile_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 5.5, NULL, NULL),
(2, 2, 4, 6.0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `kind`, `datetime`, `duration`, `exam_id`, `created_at`, `updated_at`) VALUES
(1, 'first', '2019-02-01 09:00:00', 120, 3, NULL, NULL),
(2, 'second', '2019-02-02 09:00:00', 120, 3, NULL, NULL),
(3, 'first', '2019-02-03 09:00:00', 120, 1, NULL, NULL),
(4, 'second', '2019-02-04 09:00:00', 120, 1, NULL, NULL),
(5, 'first', '2019-02-05 09:00:00', 120, 4, NULL, NULL),
(6, 'second', '2019-02-07 09:00:00', 120, 4, NULL, NULL),
(7, 'first', '2019-02-10 09:00:00', 180, 2, NULL, NULL),
(8, 'second', '2019-02-16 09:00:00', 180, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `approved`, `role_id`) VALUES
(1, 'borislav', 'bp.krastev@gmail.com', NULL, 'bbbb', NULL, NULL, NULL, 1, 1),
(2, 'plamen', 'pvalchev1@yahoo.com', NULL, 'pppp', NULL, NULL, NULL, 1, 1),
(3, 'gosho', 'gosho@gmail.com', NULL, 'gggg', NULL, NULL, NULL, 1, 3),
(4, 'pesho', 'pesho@abv.bg', NULL, 'ppppp', NULL, NULL, NULL, 1, 3),
(5, 'ceko', 'ceko@abv.bg', NULL, 'cccc', NULL, NULL, NULL, 1, 3),
(6, 'maria', 'maria@abv.bg', NULL, 'mmmm', NULL, NULL, NULL, 1, 3),
(7, 'moni', 'moni@abv.bg', NULL, 'mmmm', NULL, NULL, NULL, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollments_profile_id_foreign` (`profile_id`),
  ADD KEY `enrollments_program_id_foreign` (`program_id`),
  ADD KEY `enrollments_exam_id_foreign` (`exam_id`),
  ADD KEY `enrollments_session_id_foreign` (`session_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `programexams`
--
ALTER TABLE `programexams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programexams_program_id_foreign` (`program_id`),
  ADD KEY `programexams_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_department_id_foreign` (`department_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scores_session_id_foreign` (`session_id`),
  ADD KEY `scores_profile_id_foreign` (`profile_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `programexams`
--
ALTER TABLE `programexams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollments_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollments_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollments_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programexams`
--
ALTER TABLE `programexams`
  ADD CONSTRAINT `programexams_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programexams_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scores_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
