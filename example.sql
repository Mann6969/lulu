-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 06:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `height` varchar(50) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `employed_in` varchar(100) DEFAULT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `grandfathername` varchar(255) DEFAULT NULL,
  `grandmothername` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `annualincome` varchar(255) DEFAULT NULL,
  `rashi` varchar(255) DEFAULT NULL,
  `nakshatra` varchar(255) DEFAULT NULL,
  `religion` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `gotra` varchar(255) NOT NULL,
  `manglik` tinyint(4) DEFAULT 0 COMMENT '1= Manglik,0=Non Manglik',
  `img` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(555) DEFAULT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `name`, `age`, `gender`, `height`, `city`, `state`, `employed_in`, `fathername`, `mothername`, `grandfathername`, `grandmothername`, `address`, `occupation`, `education`, `annualincome`, `rashi`, `nakshatra`, `religion`, `caste`, `gotra`, `manglik`, `img`, `dob`, `phone`, `created_at`, `updated_at`, `description`, `fid`) VALUES
(1, 'Tatiana Zimmerman', 0, '', NULL, '', '', NULL, 'Howard Mccoy', 'Devin Rivera', 'Chelsea Crawford', 'Shelley Good', 'Officia maiores eos', 'Et mollit enim omnis', 'Velit nesciunt ipsa', '320', 'Libra (Tula)', 'Punarvasu', 'Magnam quo est nulla', 'Others', 'Qui saepe obcaecati', 0, NULL, '2018-02-10', '6976584687', '2022-12-26 03:41:55', '2022-12-26 03:41:55', 'Quod consequuntur mi', 1),
(2, 'Brock Cochran', 0, '', NULL, '', '', NULL, 'Nita Graves', 'Jonah Holloway', 'Alvin Goodman', 'Marvin Sanders', 'Enim deserunt amet', 'Eum nostrum obcaecat', 'Laudantium deleniti', '953', 'Capricorn (Makar)', 'Swati', 'Officia hic modi sit', 'Digambar', 'Itaque veniam volup', 0, NULL, '2014-02-15', '5987963564', '2022-12-26 03:42:35', '2022-12-26 03:42:35', 'Officia nisi aut vol', 2),
(3, 'Hall Copeland', 0, '', NULL, '', '', NULL, 'Aubrey Kidd', 'Felicia Herrera', 'Jeanette Green', 'Martena Mcdaniel', 'Distinctio Sed expl', 'Sint reprehenderit', 'Autem dolorem aut co', '407', 'Virgo (Kanya)', 'Punarvasu', 'Mollitia dolores lab', 'Vania', 'Maxime recusandae N', 0, NULL, '2009-01-11', '6659875548', '2022-12-26 03:43:08', '2022-12-26 03:43:08', 'Ullam animi tempore', 3),
(4, 'Cain Vaughn', 0, '', NULL, '', '', NULL, 'Cain Wilkins', 'Katell Lester', 'Belle Luna', 'George Spencer', 'Voluptate dolor aute', 'Laboris magnam volup', 'Consequat Ratione e', '994', 'Sagittarius (Dhanu)', 'Dhanishta', 'At optio tempor aut', 'Porwal', 'Aut sint architecto', 0, NULL, '1974-12-03', '6151367993', '2022-12-26 03:43:40', '2022-12-26 03:43:40', 'Saepe expedita quis', 4),
(5, 'Jeanette Fitzgerald', 7, 'male', 'Ullam lorem iste nem', 'Aliquip quae ex sit', 'Odit voluptates eius', 'Government', 'Zena Gentry', 'Ivory Parks', 'Whoopi Andrews', 'Chastity Levy', 'Earum laborum Est l', 'Libero rem et esse', 'Odit excepturi ducim', '944', 'Leo (Simha)', 'Shravana', 'Jain', 'Others', 'Illum recusandae D', 0, NULL, '1973-12-07', '3653563452', '2022-12-26 05:16:54', '2022-12-26 05:16:54', 'Quos quia impedit i', 5),
(6, 'Shaeleigh Walter', 93, 'male', 'Et nisi facere dolor', 'Lorem beatae incidun', 'Sint autem sed fugia', 'Corporate', 'Lance Morrow', 'Isadora Norton', 'Lance Quinn', 'Harper Vaughan', 'Est eius quaerat cup', 'Laboriosam ipsa el', 'Sit deserunt sed ali', '890', 'Gemini (Mithuna)', 'Mrigashira', 'Jain', 'Vania', 'Qui inventore cumque', 0, '167205444769.jpg', '1994-12-16', '9489848949', '2022-12-26 06:04:07', '2022-12-26 06:04:07', 'Et ipsum similique f', 6);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filenames`, `status`, `created_at`, `updated_at`) VALUES
(1, '[\"167179804190.jpg\"]', 1, '2022-12-23 06:50:41', '2022-12-26 03:41:55'),
(2, '[\"167204053386.jpg\"]', 1, '2022-12-26 02:12:13', '2022-12-26 03:42:36'),
(3, '[\"167204054898.jpg\"]', 1, '2022-12-26 02:12:28', '2022-12-26 03:43:08'),
(4, '[\"167204055983.jpg\"]', 1, '2022-12-26 02:12:39', '2022-12-26 03:43:40'),
(5, '[\"167204058052.jpg\"]', 1, '2022-12-26 02:13:00', '2022-12-26 05:16:54'),
(6, '[\"167205109724.jpg\"]', 1, '2022-12-26 05:08:17', '2022-12-26 06:04:07'),
(7, '[\"167205525948.jpeg\"]', 0, '2022-12-26 06:17:39', '2022-12-26 06:17:39'),
(8, '[\"167205579570.jpeg\"]', 0, '2022-12-26 06:26:35', '2022-12-26 06:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_23_120456_create_files_tbl', 2),
(6, '2022_12_23_120657_create_promotion_table', 3),
(7, '2022_12_23_120756_create_biodata_table', 4),
(8, '2022_12_23_121840_create_files_table', 5),
(9, '2022_12_26_072612_add_foreignkey_to_biodatas_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'lavishjain2002@gmail.com', '2022-12-26 06:27:15', '2022-12-26 06:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$eToIfzKC5O2jMjckmqptIOcaf.bpOzQgl3yO1Ht45pp81nRs9pYsy', NULL, '2022-12-23 06:35:19', '2022-12-23 06:35:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodatas_fid_foreign` (`fid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
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
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD CONSTRAINT `biodatas_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `files` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
