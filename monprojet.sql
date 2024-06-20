-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 19 juin 2024 à 04:18
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 'Stylos', NULL, NULL, NULL),
(9, 'Cahiers', NULL, NULL, NULL),
(10, 'classeurs', NULL, NULL, NULL),
(11, 'Calculatrices', NULL, NULL, NULL),
(12, 'Agenda', NULL, NULL, NULL),
(13, 'microscopes', NULL, NULL, NULL),
(14, 'télescopes', NULL, NULL, NULL),
(15, 'pinceaux', NULL, NULL, NULL),
(16, 'Sac à Dos', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_15_105305_create_categories_table', 1),
(5, '2024_05_15_105353_create_produits_table', 1),
(6, '2024_05_15_105440_create_clients_table', 1),
(7, '2024_05_24_232255_add_updated_by_to_produits_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` decimal(8,2) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT 0,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `name`, `image`, `description`, `prix`, `quantite`, `categories_id`, `deleted_at`, `created_at`, `updated_at`, `updated_by`) VALUES
(2, 'Cachier blanc', 'produits/wz1q0PFs70GvpQbzKp4GDK0MIy1OfbG6cLteIeL3.jpg', 'bon Qualité', 4.00, 100, 9, '2024-05-22 00:29:03', '2024-05-22 00:26:03', '2024-05-22 00:29:03', NULL),
(3, 'Agenda', 'produits/fB7bVHNGl7uiuO0cPPvTkEEN08HppwMmmKDpEgsI.jpg', 'Agenda blanc de 2022', 11.00, 100, 12, NULL, '2024-05-22 00:27:00', '2024-06-09 14:03:13', 19),
(4, 'Cachier blanc', 'produits/3IqnA2vs0xA0VsR2ZZM8WRxysSx6OAWBlrP1lqDL.jpg', 'bon Qualité', 4.00, 100, 9, '2024-05-22 21:07:48', '2024-05-22 00:28:03', '2024-05-22 21:07:48', NULL),
(5, 'Cachier blanc', 'produits/lm38WS7iUfMhYIXVQsMrCZlwZzGFHQyVoGmcICfo.jpg', 'bon Qualité', 4.00, 100, 9, '2024-05-27 18:28:41', '2024-05-22 00:28:05', '2024-05-27 18:28:41', 18),
(6, 'Cachier blanc', 'produits/FiIiIIUa1vOBIgTvF2LS5YzyV8NDSQaqWBLFAuDC.jpg', 'bon Qualité', 4.00, 100, 9, '2024-05-22 14:47:07', '2024-05-22 00:28:15', '2024-05-22 14:47:07', NULL),
(7, 'Cachier blanc', 'produits/C6jCZcbt806t29OwfyBveDeQ9H8FowSmS6KL1Umr.jpg', 'bon Qualité', 4.00, 100, 9, '2024-05-27 18:10:50', '2024-05-22 00:28:46', '2024-05-27 18:10:50', NULL),
(8, 'Cachier blanc', 'produits/GDYR3q9kxSNo1aXZNXXpw95M1gN4wb7TMjUqB2Ks.jpg', 'bon Qualité', 4.00, 100, 9, '2024-05-22 08:43:10', '2024-05-22 00:28:58', '2024-05-22 08:43:10', NULL),
(9, 'Sac à Dos', 'produits/sxZBpfZ3mvak6Fs2yYcZWV3R63Xoa9GN1cHWspy6.jpg', 'Sac à Dos blue', 45.00, 190, 16, NULL, '2024-05-24 07:41:07', '2024-06-19 01:01:23', 18),
(10, 'Cachier', 'produits/J1cvGqwhT4Hn91qc6g3HAQFPHYhdJfTESYlo3p1o.png', '200 pages petit format', 33.00, 115, 9, '2024-06-01 12:32:28', '2024-05-24 19:13:30', '2024-06-01 12:32:28', 18),
(11, 'Calculatrice', 'produits/JWRedaA0ZQtYDJpkRWvOEGIJblvLwMeJeOmiTe4x.jpg', 'Model 202', 65.00, 5, 11, NULL, '2024-05-25 21:18:03', '2024-05-29 07:15:14', 19),
(12, 'Cachier', 'produits/0INSIXBvDUDAOuPmNmS8QJoY1hlFksaQMwGAp0d2.jpg', '400 pages petit format', 6.00, 120, 9, '2024-05-27 18:37:23', '2024-05-27 18:30:34', '2024-05-27 18:37:23', 19),
(13, 'Khalil', 'produits/Egc26PIi4UyvRhB5riNkPFJdKanEW3krkLxvvChG.png', 'ibrahim', 100.00, 5, 13, '2024-05-29 07:16:38', '2024-05-29 07:16:31', '2024-05-29 07:16:38', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KbX72tmgXR9vVfjpGF6Oc3LFGXZJBbdwv2DqPSGR', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfdG9rZW4iO3M6NDA6Ik1NMDJUNU9wRHFFVnE5N1h2REdaSlNOV1FMd0VWQUhQNTNjc1RyRFoiO3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2Vycy9kZWNvbm5lY3RlciI7fX0=', 1718762568);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `Date_Début_travail` date NOT NULL,
  `salaries` decimal(8,2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `cin`, `Date_Début_travail`, `salaries`, `email`, `email_verified_at`, `password`, `isAdmin`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Zouhair Moutaraji', 'users/K5AnFewaTG5qWvE65QMBy0f1p8a7JKp0WTG1vh0E.jpg', 'ET230', '2024-05-16', 4.00, 'zohair@gmail.com', NULL, '$2y$12$efUw4R8ag0iy9HNz9SgJqufKgxrTKxfNXbG45E.CGl0/0GBTYnkl6', 0, NULL, NULL, '2024-05-15 16:53:38', '2024-05-29 08:00:31'),
(15, 'Meta Toro', 'users/qly78So8b0AYVfLdZZldpWfrN728Vfz8vUzLHQIw.jpg', 'AZ342', '2024-05-10', 10.00, 'toro@gmail.com', NULL, '$2y$12$4swCrLeQI7IVCe60gp3d9uy0erMeCg0SKFSD2inwJacwHPxkHSBl6', 0, NULL, NULL, '2024-05-15 17:05:19', '2024-05-22 08:29:50'),
(16, 'Naru Komai', 'users/0ftOtp3X1pEUc0q46bRYKYGPZPdbhPAtvUyp4MJN.png', 'ER23521', '2024-05-30', 22.00, 'naru@gmail.com', NULL, '$2y$12$zLoHGUTU8Kz65lKW9d/WIO0jv5YIJhec51y7VFGL0KY50.nzY4JMK', 0, NULL, NULL, '2024-05-15 22:35:15', '2024-05-16 07:56:23'),
(17, 'Aymane El Hassouni', 'users/AP0brhRpkGsrz9Ic8LH0Oi2hwuMafxLYSTO1J1de.jpg', 'BW3451', '2015-11-13', 10.00, 'ayman@gmail.com', NULL, '$2y$12$qAqWwapf2erpfZ/Tztx.z.YHPShBtmooG.fweQz1jnnIW0KAqPTwy', 0, NULL, NULL, '2024-05-16 07:57:39', '2024-05-16 07:57:39'),
(18, 'Kloop', 'users/he0c8s2gqfiOtyMH4Zgaiph25i8f5rFiWSaQDpKv.jpg', 'TZ233', '2024-05-24', 1.00, 'klop@gmail.com', NULL, '$2y$12$UfyI.tfgjXdlGxrB9Ye4TOiemdeeJdlzF1yyzPNp0/88UEBRgOFz2', 0, NULL, NULL, '2024-05-20 19:50:45', '2024-05-27 22:01:26'),
(19, 'Akram Mouhlal', 'users/9cnE4n9zAb74wav8NByoHpukaxc6bzFkihZYTMNr.jpg', 'BW48706', '2019-05-24', 7.00, 'akramemouhlal@gmail.com', NULL, '$2y$12$ob.lNOuXL6WUvT5y6iYqdeN7FhznEwXra4nNqVnC1jI8iiNs7keSW', 1, NULL, NULL, '2024-05-22 08:00:46', '2024-05-22 10:44:08'),
(20, 'Rachid', 'users/DIjdktJ3oiZiVVEvhwFqHN97pp8SpfkO3nAA96e5.png', 'BW72390', '2024-05-18', 5.00, 'rachid@gmail.com', NULL, '$2y$12$xIEUmkYE6c9jzzrFnkKQTuraZLq5NVFg7IWw1b1RrQyh7D1oJQokm', 0, '2024-05-29 08:02:46', NULL, '2024-05-22 10:32:04', '2024-05-29 08:02:46'),
(21, 'Achraf Mahdi', 'users/Ase66DWvb3zoT4pU0jhv8qoBr23qqpH6f6plvn00.png', 'BW80934', '2022-11-18', 500.00, 'achrafmahdi@gmail.com', NULL, '$2y$12$.uOUiAr.RYKOODCtjRNYJe9S9bzCw0ErsuUGtSF4vlA0uGsY1X3WC', 0, '2024-06-19 01:02:29', NULL, '2024-05-27 07:45:07', '2024-06-19 01:02:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_categories_id_foreign` (`categories_id`),
  ADD KEY `produits_updated_by_foreign` (`updated_by`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `produits_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
