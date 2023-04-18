-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about us', 'An insurance policy can protect you from the hazards of normal life, from floods and fires to car accidents and life-threatening illnesses. You can\'t stop disasters from happening, but a good insurance policy can provide financial coverage for these unexpected expenses. Protecting your most important assets is an important step in creating a solid personal financial plan, and the right insurance policies will go a long way toward helping you safeguard your earning power and your possessions. In this article, we discuss five policies you shouldn\'t do without.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appliedpolicies`
--

CREATE TABLE `appliedpolicies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idproof` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `policiid` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'applied',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appliedpolicies`
--

INSERT INTO `appliedpolicies` (`id`, `idproof`, `photo`, `userid`, `policiid`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'adhar1.pdf', 'user1.png', '1', '1', '2023-04-18 06:17:25', 'approved', NULL, '2023-04-18 00:48:20'),
(2, 'adhar2.pdf', 'user3.png', '1', '1', '2023-04-18 06:17:57', 'declined', NULL, '2023-04-18 00:48:24'),
(3, 'licence1.pdf', 'user3.png', '2', '1', '2023-04-18 06:33:23', 'approved', NULL, '2023-04-18 01:04:31'),
(4, 'adhar.pdf', 'user2.png', '2', '1', '2023-04-18 06:34:04', 'declined', NULL, '2023-04-18 01:04:37'),
(5, 'adhar.pdf', 'user1.png', '3', '1', '2023-04-18 06:39:33', 'approved', NULL, '2023-04-18 01:10:20'),
(6, 'licence1.pdf', 'user2.png', '3', '1', '2023-04-18 06:40:03', 'declined', NULL, '2023-04-18 01:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Life Insurance', NULL, NULL),
(2, 'Non Life Insurance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2023_03_07_113732_create_categories_table', 1),
(6, '2023_03_08_103339_create_subcategories_table', 1),
(7, '2023_03_09_092239_create_policies_table', 1),
(8, '2023_03_13_090705_create_abouts_table', 1),
(9, '2023_03_15_083753_create_registrates_table', 1),
(10, '2023_03_15_083948_create_contactus_table', 1),
(11, '2023_04_03_044128_create_tickets_table', 1),
(12, '2023_04_12_024714_create_admins_table', 1),
(13, '2023_04_14_052735_create_appliedpolicies_table', 1);

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
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `policyname` varchar(255) NOT NULL,
  `sumassured` varchar(255) NOT NULL,
  `premium` int(11) NOT NULL,
  `tenure` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `category`, `subcategory`, `policyname`, `sumassured`, `premium`, `tenure`, `created_at`, `updated_at`) VALUES
(1, '1', 'Term Life Insurance', 'Yearly Renewable Term', '1000000', 12345, 124, NULL, NULL),
(2, '1', 'Whole Life Insurance', 'Single Premium Whole Life Insurance', '2000000', 3456, 235, NULL, NULL),
(3, '1', 'Universal Life Insurance', 'Guaranteed Universal Life', '50000', 12456, 126, NULL, NULL),
(4, '1', 'Final Expense Insurance', 'Medically Underwritten Policy', '60000', 12456, 327, NULL, NULL),
(5, '2', 'Motor Insurance', 'Two Wheeler Insurance', '50000', 123456, 897, NULL, NULL),
(6, '2', 'Health Insurance', 'Individual Health Insurance', '1000000', 34567, 1256, NULL, NULL),
(7, '2', 'Home Insurance', 'Home Structure Insurance.', '40000', 125678, 2468, NULL, NULL),
(8, '2', 'Travel Insurance', 'Medical Travel Insurance', '2000000', 12468, 1357, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrates`
--

CREATE TABLE `registrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrates`
--

INSERT INTO `registrates` (`id`, `name`, `email`, `pwd`, `phno`, `created_at`, `updated_at`) VALUES
(1, 'Shipin', 'shipin22@gmail.com', 'asdfg', 8848546944, NULL, NULL),
(2, 'mohan', 'mohan22@gmail.com', 'qwert', 7994348084, NULL, NULL),
(3, 'Libin', 'libin12@gmail.com', 'libin5', 7980456732, NULL, NULL),
(4, 'Lijin', 'Lijin13@gmail.com', 'ertyu', 234567891, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategoryname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category`, `subcategoryname`, `created_at`, `updated_at`) VALUES
(1, '1', 'Term Life Insurance', NULL, NULL),
(2, '1', 'Whole Life Insurance', NULL, NULL),
(3, '1', 'Universal Life Insurance', NULL, NULL),
(4, '1', 'Final Expense Insurance', NULL, NULL),
(6, '2', 'Motor Insurance', NULL, NULL),
(7, '2', 'Health Insurance', NULL, NULL),
(8, '2', 'Home Insurance', NULL, NULL),
(9, '2', 'Travel Insurance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `userid` varchar(255) NOT NULL,
  `status` mediumtext NOT NULL DEFAULT 'no action',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `description`, `userid`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bite-Sized Tickets', 'A Bite-sized Insurance Policy covers specific needs for a comparatively shorter duration. Such policies are available at a lower premium and can often be purchased from online insurers using a smartphone without the need for documentation or tests.', '1', 'ticket closed', NULL, '2023-04-18 01:00:10'),
(3, 'First Class Tickets', 'First class is the most luxurious and most expensive travel class of seats and service on a train, passenger ship, airplane, bus, or other system of transport. Compared to business class and economy class, it offers the best service and most comfortable accommodation.', '2', 'ticket closed', NULL, '2023-04-18 01:08:05'),
(4, 'Economy Tickets', 'Economy is the standard, main cabin fare. Whether or not you get meal service depends entirely on the airline and your exact flight.', '3', 'ticket closed', NULL, '2023-04-18 01:14:59'),
(5, 'Business Ticket', 'means the business of online movie ticket and show ticket booking, together with the businesses directly related thereto, including but not limited to ticket membership card, VIP card, sale of box office products and film and show derivative products.', '4', 'ticket closed', NULL, '2023-04-18 01:33:00');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedpolicies`
--
ALTER TABLE `appliedpolicies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrates`
--
ALTER TABLE `registrates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appliedpolicies`
--
ALTER TABLE `appliedpolicies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registrates`
--
ALTER TABLE `registrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
