-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2023 at 10:51 AM
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
-- Database: `tubes_pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `gambar`, `user_id`, `question_id`, `created_at`, `updated_at`) VALUES
(2, 'Ullam ipsa vitae dolore sed inventore voluptates.', 'fadc843a8ba4230649362467b1b3f5c0.png', 4, 19, '2002-11-20 23:34:13', '1998-07-07 22:24:46'),
(3, 'Minus aut sed molestiae dolore et expedita.', '1116c6eb967b7153d238dbfe3422f84d.png', 1, 16, '2000-07-27 15:09:43', '2008-01-01 03:34:08'),
(4, 'Esse consequatur in molestiae atque temporibus alias minima.', '54bc0003c327b3b8a6ea9be10b2e61ac.png', 7, 15, '2019-01-03 19:37:06', '1985-07-03 23:43:27'),
(5, 'Cupiditate qui sed impedit est at vel.', '153f2b4dabe5d346cc104cd5c0ffb687.png', 1, 3, '2014-09-20 12:29:35', '2003-07-19 01:15:37'),
(6, 'Nemo quibusdam animi possimus autem quaerat consequatur provident.', '8a6417515b8479a70c4eb84760c5d0fa.png', 5, 15, '2017-05-26 17:31:52', '1973-08-05 11:35:24'),
(7, 'Similique in reiciendis at harum fuga necessitatibus ratione.', 'f51c00d4f56f716ca02297f2d281524e.png', 7, 12, '2018-06-02 00:29:21', '2015-11-17 01:37:42'),
(9, 'Sint accusamus ea sed in laudantium aperiam et.', '72cabbeb4aa215ed646322161d9705da.png', 4, 5, '1975-10-24 20:02:40', '1980-03-16 07:44:09'),
(10, 'Aliquam fugit deserunt maxime doloremque accusamus cum asperiores officiis.', 'e6888951db909852abd973a4bb38daa6.png', 6, 4, '1999-05-29 19:46:40', '1975-01-23 16:04:24'),
(12, '<p>Wow saya terkesan</p>', NULL, 1, 17, '2023-06-05 17:43:09', '2023-06-05 17:43:09'),
(13, '<p>hehe boy</p>', NULL, 1, 17, '2023-06-05 23:01:23', '2023-06-05 23:01:23'),
(16, '<p><strong>Jawaban :</strong></p>\r\n<p>Manfaat dari pajak adalah membantu pembangunan infrastruktur negara</p>', NULL, 5, 23, '2023-06-06 05:41:38', '2023-06-06 05:41:38'),
(17, '<p>Manfaat kunyit buat blablab</p>', NULL, 5, 24, '2023-06-06 19:21:09', '2023-06-06 19:21:09'),
(18, '<p>ini jawabannya</p>', 'SBD_ERD.drawio (5).png', 5, 24, '2023-06-06 19:21:44', '2023-06-06 19:21:44'),
(19, '<p>yayaya</p>', NULL, 1, 25, '2023-06-07 02:20:39', '2023-06-07 02:20:39'),
(20, '<p>yayaya</p>', NULL, 1, 25, '2023-06-07 02:23:11', '2023-06-07 02:23:11'),
(21, '<p>test</p>', NULL, 1, 25, '2023-06-07 02:24:46', '2023-06-07 02:24:46'),
(22, '<p>waduh bang</p>', NULL, 1, 25, '2023-06-07 02:27:52', '2023-06-07 02:27:52'),
(23, '<p>waduhh</p>', NULL, 1, 25, '2023-06-07 02:28:29', '2023-06-07 02:28:29'),
(24, '<p>Yang datang beri harapan, lalu pergi dan menghilang</p>', NULL, 4, 29, '2023-06-07 03:04:53', '2023-06-07 03:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `answer_replies`
--

CREATE TABLE `answer_replies` (
  `id` bigint UNSIGNED NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `answer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_replies`
--

INSERT INTO `answer_replies` (`id`, `reply`, `user_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(9, 'apa iya?', 1, 17, '2023-06-07 02:36:09', '2023-06-07 02:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followings`
--

CREATE TABLE `followings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `follower_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`id`, `user_id`, `follower_id`, `created_at`, `updated_at`) VALUES
(6, 5, 1, '2023-06-06 19:22:46', '2023-06-06 19:22:46'),
(9, 1, 6, '2023-06-06 20:13:13', '2023-06-06 20:13:13'),
(10, 4, 1, '2023-06-06 20:14:05', '2023-06-06 20:14:05'),
(11, 1, 4, '2023-06-06 22:03:27', '2023-06-06 22:03:27'),
(12, 1, 7, '2023-06-06 22:07:25', '2023-06-06 22:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `answer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(13, 5, 16, '2023-06-06 10:33:45', '2023-06-06 10:33:45'),
(14, 1, 2, '2023-06-06 17:48:31', '2023-06-06 17:48:31'),
(15, 1, 17, '2023-06-06 19:23:31', '2023-06-06 19:23:31'),
(16, 1, 24, '2023-06-07 03:05:21', '2023-06-07 03:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2023_05_31_121214_add_position_to_users_table', 1),
(38, '2014_10_12_000000_create_users_table', 2),
(39, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(40, '2019_08_19_000000_create_failed_jobs_table', 2),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(42, '2023_06_05_035407_create_questions_table', 2),
(44, '2023_06_05_070153_create_subjects_table', 3),
(47, '2023_06_05_075203_create_questions_table', 4),
(48, '2023_06_05_123816_create_answers_table', 4),
(49, '2023_06_05_222609_create_question_comments_table', 4),
(51, '2023_06_06_023129_create_answer_replies_table', 5),
(53, '2023_06_06_072216_create_likes_table', 6),
(54, '2023_06_06_231036_create_followings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subject_id` bigint UNSIGNED NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `user_id`, `subject_id`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Tempore consequuntur in voluptas est voluptate odio delectus.', 5, 1, 'e3f76f4aab01ec34498f211a75e54858.png', '1985-09-30 07:57:34', '1984-06-06 22:57:44'),
(3, 'Vel ex labore repellat voluptatum ea magni libero.', 4, 2, 'd2e5bde67eb6941df0a0278ac8a2d26e.png', '1980-02-04 18:42:01', '1974-01-05 12:12:24'),
(4, 'Sunt perspiciatis aut fugiat placeat.', 5, 4, '81a20b7e15f5eecaa11743fb1243bee9.png', '1978-07-06 16:17:26', '1996-04-12 04:24:39'),
(5, 'Ratione soluta laboriosam ut qui cupiditate consequatur amet esse.', 7, 8, '5c0a8fa22ab88471402e5bdc7291e8d7.png', '2012-03-21 16:34:43', '1979-11-26 07:04:00'),
(6, 'Et numquam maiores laborum id tenetur ratione.', 1, 6, 'dafa699e86d04aad54172ef739d80f21.png', '1977-11-18 04:15:14', '2013-10-15 14:46:35'),
(7, 'Magnam eum unde voluptatem.', 4, 1, 'de7651d49fe24679035f87808df847e9.png', '1999-03-18 06:19:43', '2015-12-22 02:19:42'),
(8, 'Omnis officia facilis tempora vero.', 4, 8, 'b086cb56bac9d2e58f3aa799e9d2b2e1.png', '1985-04-08 02:57:35', '2001-09-13 17:50:33'),
(9, 'Dicta omnis rerum nemo temporibus aut rerum.', 7, 3, '6a9cbbfa860ca890529a23dcc657cc2d.png', '2001-10-29 18:07:15', '1979-05-31 22:57:09'),
(10, 'Vel dolor quae atque omnis cupiditate cum.', 1, 4, '853ce3115dbb58db20460122cd1e790a.png', '1988-07-05 18:32:15', '2010-07-13 09:01:20'),
(11, 'Asperiores a quidem et quam sunt quo.', 5, 8, 'f5b4e58b86b7214ae9951f5686605f1b.png', '1971-10-20 08:04:41', '2002-09-08 11:11:11'),
(12, 'Temporibus dolores itaque delectus qui qui veniam.', 4, 1, 'e8b0ca0ebe144b887e505e2d5bc22b86.png', '1996-01-13 08:05:54', '1988-12-05 11:00:09'),
(13, 'Sapiente cupiditate veritatis eum consectetur dolorem ea.', 4, 7, 'a1dc9b59a28b30d005b6c0e9f922db06.png', '1987-09-20 01:46:28', '1979-08-29 18:52:17'),
(14, 'Et occaecati temporibus veritatis expedita unde incidunt ad.', 4, 1, '6b3342255a036c59f2e537a60532910c.png', '1998-08-28 03:19:51', '2000-08-22 07:11:22'),
(15, 'Autem reiciendis qui a aut.', 4, 6, '3cd91b91eb71856c267e97bd4a47fb34.png', '1991-09-29 02:37:44', '1973-06-09 14:52:28'),
(16, 'Expedita optio recusandae quo adipisci.', 1, 6, '82605b1612396b4f731b04bf977c05b7.png', '1974-10-12 15:17:49', '1997-10-26 05:34:27'),
(17, 'Perferendis nobis et consequatur in nihil consequuntur quo.', 1, 8, '411d004ebfe12541b6c321a8f2cdb4cb.png', '2019-08-07 20:38:12', '1988-01-03 12:23:09'),
(18, 'Quaerat sed quam porro et deserunt cupiditate sit sit.', 6, 9, '3932a728b78cc6e501ec9c2cbc1aa790.png', '2011-05-24 22:25:25', '1970-07-18 04:55:00'),
(19, 'Et asperiores facilis et officia qui est.', 4, 7, '941fc45414bf3b5b27325060d911a952.png', '2014-09-23 13:21:53', '2015-03-14 12:40:09'),
(20, 'Consectetur at et sequi omnis ex.', 4, 6, 'b89764ce678a86b4e963b0cc51b819b8.png', '2014-08-25 08:31:23', '2017-03-16 03:41:34'),
(23, '<p>Apakah manfaat dari pajak?</p>', 1, 3, NULL, '2023-06-06 05:38:56', '2023-06-06 05:38:56'),
(24, '<p>Apa manfaat kunyit?</p>', 1, 4, NULL, '2023-06-06 19:20:36', '2023-06-06 19:20:36'),
(25, '<p>blablba</p>', 5, 10, 'Untitled (3).png', '2023-06-06 19:22:05', '2023-06-06 19:22:05'),
(26, '<p>Bagaimana cara tumbuhan itu tumbuh?</p>', 1, 4, NULL, '2023-06-07 02:16:14', '2023-06-07 02:16:14'),
(27, '<p>Apakah bisa?</p>', 1, 10, NULL, '2023-06-07 02:18:24', '2023-06-07 02:18:24'),
(28, '<p>test 1</p>', 1, 10, NULL, '2023-06-07 02:29:36', '2023-06-07 02:29:36'),
(29, '<p>Bagaimana dengan aku, terlanjur mencintaimu?</p>', 1, 10, NULL, '2023-06-07 03:00:39', '2023-06-07 03:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `question_comments`
--

CREATE TABLE `question_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_comments`
--

INSERT INTO `question_comments` (`id`, `comment`, `user_id`, `question_id`, `created_at`, `updated_at`) VALUES
(9, 'test 1', 1, 17, '2023-06-05 23:00:58', '2023-06-05 23:00:58'),
(10, 'test 2', 1, 17, '2023-06-05 23:01:04', '2023-06-05 23:01:04'),
(11, 'Apakah bisa lebih spesifik?', 5, 23, '2023-06-06 05:40:53', '2023-06-06 05:40:53'),
(12, 'maksudnya?', 5, 24, '2023-06-06 19:21:17', '2023-06-06 19:21:17'),
(13, 'gak papa', 1, 24, '2023-06-06 21:04:46', '2023-06-06 21:04:46'),
(14, 'tumbuh bagaimana?', 1, 26, '2023-06-07 02:34:55', '2023-06-07 02:34:55'),
(15, 'Nanyi ya bang?', 5, 29, '2023-06-07 03:13:00', '2023-06-07 03:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', NULL, NULL),
(2, 'B. Indonesia', NULL, NULL),
(3, 'PPKn', NULL, NULL),
(4, 'Biologi', NULL, NULL),
(5, 'Fisika', NULL, NULL),
(6, 'Kimia', NULL, NULL),
(7, 'B. Inggris', NULL, NULL),
(8, 'IPS', NULL, NULL),
(9, 'IT', NULL, NULL),
(10, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutme` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pria',
  `photo_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'profile.jpeg',
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `aboutme`, `gender`, `photo_profil`, `jenjang`, `user_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'andysaragih', 'andyseptiawansaragih@gmail.com', NULL, '$2y$10$s9JlsWdWfYOWv8ee7lxFf.zRrDCBZ.pV5i3CGnab1YRTc7dMHVPAu', 'andysaragih', 'Baik hati dan tidak sombong hiyahh', 'Pria', 'すずめの戸締り.jpeg', 'Sekolah Menengah Atas', 'user', 'ftaONRSo0BYZFaKyi9m5iSWBVubdCWCzxSlAOVNfqTT0gUV4WerrJqbL4y4u', '2023-06-05 00:17:54', '2023-06-07 02:41:03'),
(2, 'Admin', 'andy39saragih@gmail.com', '2023-06-06 23:22:49', '$2y$10$Ts8RW1tR.doG9CtsHiTeWOBuv1MaHShgmWOQTKROe3OYHHiUwZf/K', 'admin', NULL, 'Pria', 'profile.jpeg', NULL, 'admin', NULL, '2023-06-05 00:19:47', '2023-06-06 23:22:49'),
(4, 'Sakifa Indira Putri', 'sakifaindira@gmail.com', NULL, '$2y$10$2kUZKYHR7JI2cJ3/8bjfXekBaAkJ15hWBr6cawyRNzGkVu1ZkN2LC', 'sakifaindira', 'cantik dan gemesin', 'Wanita', 'Ayumi (41).png', 'Pilih tingkat pendidikan', 'user', NULL, '2023-06-05 00:26:03', '2023-06-06 23:17:50'),
(5, 'Ahsanul Kholiqin', 'ahsankholiqinlub@gmail.com', NULL, '$2y$10$gYKKQsdEPWfgyZoG5iOOw.Zlzg3nTIRCdA8sYkCJ16c8T1hSp7Jrq', 'ahsankholiqin', 'Ganteng maksimal kali', 'Pria', 'Ayumi (36).png', 'Sekolah Menengah Atas', 'user', NULL, '2023-06-05 00:37:42', '2023-06-06 19:22:31'),
(6, 'denicematthewz', 'denicematthew@gmail.com', NULL, '$2y$10$Pppt86WuAL4t8R6.tI7VROfDYqzXFAGxzoARk.u4x6LETX6eex5d6', 'denicematthewz', 'diam diam makin diam', 'Pria', 'Ayumi (8).png', 'Sekolah Menengah Atas', 'user', NULL, '2023-06-05 08:08:53', '2023-06-07 01:08:51'),
(7, 'Marcho Prayogi', 'marchoprayogi@gmail.com', NULL, '$2y$10$afc5sDjVV0bwCkyPb7foqenWsiMRIktwzORPOuvMwuEEnALSmO3Yq', 'marchoprayogi', NULL, 'Pria', 'profile.jpeg', NULL, 'user', NULL, '2023-06-05 08:11:01', '2023-06-05 08:11:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_user_id_foreign` (`user_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `answer_replies`
--
ALTER TABLE `answer_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_replies_user_id_foreign` (`user_id`),
  ADD KEY `answer_replies_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `followings`
--
ALTER TABLE `followings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followings_user_id_foreign` (`user_id`),
  ADD KEY `followings_follower_id_foreign` (`follower_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`),
  ADD KEY `questions_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `question_comments`
--
ALTER TABLE `question_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_comments_user_id_foreign` (`user_id`),
  ADD KEY `question_comments_question_id_foreign` (`question_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `answer_replies`
--
ALTER TABLE `answer_replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followings`
--
ALTER TABLE `followings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `question_comments`
--
ALTER TABLE `question_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answer_replies`
--
ALTER TABLE `answer_replies`
  ADD CONSTRAINT `answer_replies_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `followings`
--
ALTER TABLE `followings`
  ADD CONSTRAINT `followings_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_comments`
--
ALTER TABLE `question_comments`
  ADD CONSTRAINT `question_comments_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
