-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 13 août 2021 à 17:41
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbdarifood`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'soumia111sk@gmail.com', '$2y$10$jw4NA262mqaMKZ4e97e/fe1pwilQmmurBvjFP5oa9F0ee5b6pOjJ2', '2021-08-08 09:50:43', NULL, '2021-08-08 09:50:43', '2021-08-08 09:50:43');

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

CREATE TABLE `adresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'MARRAKECH',
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adresses`
--

INSERT INTO `adresses` (`id`, `created_at`, `updated_at`, `city`, `street`, `zipcode`, `adress`) VALUES
(1, '2021-08-05 18:50:04', '2021-08-07 08:36:37', 'MARRAKECH', 'hopital2', '202001', '12 rue al majd1'),
(2, '2021-08-05 18:52:01', '2021-08-05 18:52:01', 'MARRAKECH', 'majd', '20345', '12 majd cartier'),
(3, '2021-08-08 07:37:33', '2021-08-08 07:37:33', 'MARRAKECH', 'hopital', '25252', '12 cartier ahar'),
(4, '2021-08-08 07:41:23', '2021-08-08 07:41:23', 'MARRAKECH', 'rue', '234', 'ssrcde ertt'),
(5, '2021-08-08 07:43:40', '2021-08-08 07:43:40', 'MARRAKECH', 'rue', '234', 'ssrcde ertt'),
(6, '2021-08-08 07:45:04', '2021-08-08 07:45:04', 'MARRAKECH', 'zerr', '12332', '12 rue salim'),
(7, '2021-08-08 07:46:28', '2021-08-08 07:46:28', 'MARRAKECH', 'zerr', '12332', '12 rue salim'),
(8, '2021-08-08 07:47:35', '2021-08-08 07:47:35', 'MARRAKECH', 'zerr', '12332', '12 rue salim'),
(9, '2021-08-08 07:48:02', '2021-08-08 07:48:02', 'MARRAKECH', 'zerr', '12332', '12 rue salim'),
(10, '2021-08-08 07:50:44', '2021-08-08 07:50:44', 'MARRAKECH', 'zerr', '12332', '12 rue salim'),
(11, '2021-08-08 07:51:22', '2021-08-08 08:03:11', 'MARRAKECH', 'mohamed 5', '202000', '12 cartier salam'),
(12, '2021-08-08 15:46:14', '2021-08-08 15:46:14', 'MARRAKECH', 'mohamed 6', '40000', '22 cartier ww'),
(13, '2021-08-09 12:34:17', '2021-08-09 12:34:17', 'MARRAKECH', 'hopital3', '7777', 'dari ana wbas'),
(14, '2021-08-09 12:38:17', '2021-08-09 12:38:17', 'MARRAKECH', 'hopital4', '2', 'qsqqqqqqqqqq'),
(15, '2021-08-09 13:26:42', '2021-08-09 13:26:42', 'MARRAKECH', 'fkdkf', 'krrk', 'dkkdkkf'),
(16, '2021-08-10 06:01:51', '2021-08-10 06:01:51', 'MARRAKECH', 'Nakhil', '40000', '12 cartier zohor'),
(17, '2021-08-10 07:28:51', '2021-08-10 07:28:51', 'MARRAKECH', 'andalos', '40200', '777 zaytone'),
(18, '2021-08-10 08:09:52', '2021-08-10 08:09:52', 'MARRAKECH', 'matar', '34244', 'aicha@gmail.com'),
(19, '2021-08-10 11:14:11', '2021-08-10 11:14:11', 'MARRAKECH', 'rbat', '23456', '22 cartier al majd');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'traditionnel', '2021-08-06 13:10:51', '2021-08-08 15:12:02'),
(3, 'salade', '2021-08-06 13:10:51', '2021-08-06 13:10:51'),
(5, 'tajine', '2021-08-06 13:10:51', '2021-08-06 13:10:51'),
(6, 'pastila', '2021-08-06 13:10:51', '2021-08-06 13:10:51'),
(7, 'pâtisserie ', '2021-08-06 13:10:51', '2021-08-06 13:10:51'),
(8, 'soupe ', '2021-08-06 13:10:51', '2021-08-06 13:10:51'),
(9, 'fete', '2021-08-08 14:50:01', '2021-08-08 14:50:01');

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commands`
--

INSERT INTO `commands` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-06 19:33:43', '2021-08-06 19:33:43'),
(2, 1, '2021-08-06 19:39:12', '2021-08-06 19:39:12'),
(3, 3, '2021-08-08 08:16:53', '2021-08-08 08:16:53'),
(4, 4, '2021-08-08 15:48:32', '2021-08-08 15:48:32'),
(5, 4, '2021-08-08 16:47:44', '2021-08-08 16:47:44'),
(6, 4, '2021-08-08 16:48:15', '2021-08-08 16:48:15'),
(7, 4, '2021-08-08 16:49:45', '2021-08-08 16:49:45'),
(8, 4, '2021-08-08 17:13:03', '2021-08-08 17:13:03'),
(9, 1, '2021-08-09 08:37:18', '2021-08-09 08:37:18'),
(10, 1, '2021-08-09 08:41:03', '2021-08-09 08:41:03'),
(11, 1, '2021-08-09 08:43:01', '2021-08-09 08:43:01'),
(12, 1, '2021-08-09 11:17:14', '2021-08-09 11:17:14'),
(13, 1, '2021-08-09 11:30:26', '2021-08-09 11:30:26'),
(14, 1, '2021-08-09 11:31:20', '2021-08-09 11:31:20'),
(15, 1, '2021-08-09 11:50:00', '2021-08-09 11:50:00'),
(16, 1, '2021-08-09 11:50:39', '2021-08-09 11:50:39'),
(17, 1, '2021-08-09 11:53:43', '2021-08-09 11:53:43'),
(18, 1, '2021-08-09 11:59:28', '2021-08-09 11:59:28'),
(19, 1, '2021-08-09 12:00:03', '2021-08-09 12:00:03'),
(20, 1, '2021-08-09 12:00:49', '2021-08-09 12:00:49'),
(21, 1, '2021-08-09 12:03:41', '2021-08-09 12:03:41'),
(22, 1, '2021-08-09 12:04:39', '2021-08-09 12:04:39'),
(23, 1, '2021-08-09 12:12:37', '2021-08-09 12:12:37'),
(24, 1, '2021-08-09 12:12:51', '2021-08-09 12:12:51'),
(25, 1, '2021-08-09 12:13:39', '2021-08-09 12:13:39'),
(26, 1, '2021-08-09 12:14:05', '2021-08-09 12:14:05'),
(27, 1, '2021-08-09 12:15:49', '2021-08-09 12:15:49'),
(28, 1, '2021-08-09 12:16:05', '2021-08-09 12:16:05'),
(29, 1, '2021-08-09 12:19:13', '2021-08-09 12:19:13'),
(30, 1, '2021-08-09 12:19:41', '2021-08-09 12:19:41'),
(31, 1, '2021-08-09 12:30:10', '2021-08-09 12:30:10'),
(32, 1, '2021-08-09 12:34:17', '2021-08-09 12:34:17'),
(33, 1, '2021-08-09 12:38:18', '2021-08-09 12:38:18'),
(34, 1, '2021-08-09 13:21:35', '2021-08-09 13:21:35'),
(35, 1, '2021-08-09 13:21:57', '2021-08-09 13:21:57'),
(36, 1, '2021-08-09 13:22:25', '2021-08-09 13:22:25'),
(37, 1, '2021-08-09 13:24:20', '2021-08-09 13:24:20'),
(38, 1, '2021-08-09 13:26:42', '2021-08-09 13:26:42'),
(39, 1, '2021-08-09 13:33:18', '2021-08-09 13:33:18'),
(40, 1, '2021-08-09 14:38:00', '2021-08-09 14:38:00'),
(41, 1, '2021-08-09 14:38:52', '2021-08-09 14:38:52');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `plat_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `user_id`, `plat_id`, `comment`) VALUES
(1, '2021-08-07 14:31:02', '2021-08-07 14:31:02', 1, 1, 'delicieux'),
(2, '2021-08-07 14:41:22', '2021-08-07 14:41:22', 1, 1, 'hi can i ask you'),
(3, '2021-08-07 15:06:18', '2021-08-07 15:06:18', 1, 3, 'hi');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `tel`, `message`, `created_at`, `updated_at`) VALUES
(1, 'samya@gmail.com', '0638094162', 'salut stp bghit nswlk wach maghaykonoch des plats des fetes', '2021-08-08 12:58:57', '2021-08-08 12:58:57');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_27_145938_create_adresses_table', 1),
(4, '2021_07_28_000000_create_users_table', 1),
(5, '2021_07_28_144844_create_categories_table', 1),
(6, '2021_07_28_145740_create_plats_table', 1),
(7, '2021_07_28_150025_create_commands_table', 1),
(8, '2021_07_28_150046_create_comments_table', 1),
(9, '2021_07_28_150103_create_messages_table', 1),
(10, '2021_07_28_163542_create_orders_table', 1),
(11, '2021_07_30_114343_create_admins_table', 1),
(12, '2021_08_01_111608_create_carts_table', 1),
(13, '2021_08_02_123151_create_wishes_table', 1),
(14, '2021_08_05_173217_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `command_id` bigint(20) UNSIGNED NOT NULL,
  `plat_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `adress_id` bigint(20) UNSIGNED NOT NULL,
  `date_livraison` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `command_id`, `plat_id`, `quantity`, `user_id`, `status`, `adress_id`, `date_livraison`, `updated_at`, `created_at`) VALUES
(2, 2, 1, 1, 1, 2, 0, NULL, '2021-08-07 06:43:48', '2021-08-06 19:40:14'),
(3, 7, 3, 1, 1, 1, 1, NULL, '2021-08-10 14:05:14', '2021-08-08 16:50:37'),
(4, 8, 3, 1, 1, 2, 1, NULL, '2021-08-08 17:13:04', '2021-08-08 17:13:04'),
(5, 8, 4, 1, 1, 2, 1, NULL, '2021-08-10 13:33:55', '2021-08-08 17:13:04'),
(6, 12, 3, 1, 1, 0, 1, NULL, '2021-08-09 11:17:15', '2021-08-09 11:17:15'),
(7, 16, 4, 1, 1, 0, 1, NULL, '2021-08-09 11:50:39', '2021-08-09 11:50:39'),
(8, 17, 3, 1, 1, 0, 1, NULL, '2021-08-09 11:53:43', '2021-08-09 11:53:43'),
(9, 29, 1, 1, 1, 0, 1, NULL, '2021-08-09 12:19:13', '2021-08-09 12:19:13'),
(10, 30, 3, 1, 1, 0, 1, NULL, '2021-08-09 12:19:41', '2021-08-09 12:19:41'),
(11, 30, 1, 1, 1, 0, 1, NULL, '2021-08-09 12:19:41', '2021-08-09 12:19:41'),
(12, 31, 3, 1, 1, 0, 1, NULL, '2021-08-09 12:30:11', '2021-08-09 12:30:11'),
(13, 33, 4, 1, 1, 0, 14, NULL, '2021-08-09 12:38:18', '2021-08-09 12:38:18'),
(14, 37, 3, 1, 1, 0, 1, NULL, '2021-08-09 13:24:20', '2021-08-09 13:24:20'),
(15, 38, 4, 1, 1, 0, 15, '2021-08-15T15:25', '2021-08-09 13:26:42', '2021-08-09 13:26:42'),
(16, 39, 1, 1, 1, 0, 1, '2021-08-15T15:33', '2021-08-09 13:33:19', '2021-08-09 13:33:19'),
(17, 40, 3, 1, 1, 0, 1, '2021-08-15T19:37', '2021-08-09 14:38:00', '2021-08-09 14:38:00'),
(18, 41, 4, 1, 3, 0, 1, '2021-08-19T16:38', '2021-08-09 14:38:53', '2021-08-09 14:38:53');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kabrane.soumia@gmail.com', '$2y$10$a1mKf1pbnssHZo.lPKANTuiKGiVmFORxux6i1wjMxfMYHaTNrRw0K', '2021-08-13 07:35:42');

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_pers` int(11) NOT NULL,
  `imag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `name`, `price`, `description`, `nbr_pers`, `imag`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'couscous', 200.00, 'Probablement le plat le plus populaire avec le tajine, c’est en tout cas celui qui vient en premier à l’esprit lorsque l’on évoque la gastronomie marocaine. Traditionnellement servi le vendredi midi, après la prière de dhuhr, on le déguste aujourd’hui indifféremment tous les jours de la semaine. D’origine berbère, la version traditionnelle se compose de bœuf et de mouton, parfois de poulet, d’une multitude de légumes et légumineuses (courgettes, navets, fèves, lentilles, pois) et bien sûr, de semoule de blé. Les marocains le dégustent à même le plat, ou le servent dans des assiettes individuelles.', 5, 'images/2059844239.jpg', 1, 1, '2021-08-06 12:17:22', '2021-08-06 12:17:22'),
(3, 'Mrouzia', 200.00, 'Il s’agit là d’une recette très particulière de tajine marocain, traditionnellement servie lors de la fête de l’Aïd el-Kebir et préparée à base de collier d’agneau, d’amandes, de raisins secs, de miel et de cannelle, le tout étant subtilement équilibré par le mélange du Ras-El-Hanout. Le plat est préparé des jours avant la fête, la viande devant cuire de longues heures, pour se détacher sans effort. Dans la recette traditionnelle, de la graisse de rognon était ajoutée pour former un film protecteur, ce qui permettait de conserver le plat à une époque où il n’y avait pas de réfrigérateur.', 6, 'images/1469327392.jpg', 5, 1, '2021-08-06 13:00:03', '2021-08-06 13:00:03'),
(4, 'tajine de paulette et legumes', 40.00, 'tajine marocain contient du paulette et légumes préparer d une manière traditionnel avec des espèces  marocain pour un nombre de famille de 3 personne disponible pour le commander chaque jour de 11h du matin jusqu\'à 16h du soir.\r\nun plat délicieux n attend que d être commander', 3, 'images/645987287.jpg', 5, 3, '2021-08-08 08:09:39', '2021-08-08 08:09:39'),
(5, 'La Pastilla', 250.00, 'Normalement la pastilla se prépare avec du pigeon mais on peut le remplacer par du poulet. Ce plat se sert en entrée lors des fêtes mais il est assez copieux pour le manger en plat principal.\r\nFaites revenir les morceaux de poulet dans une cocotte avec un mélange beurre-huile, ajoutez l\'oignon haché menu, faites dorer. Ajoutez la coriandre, le miel, la cannelle et le ras el hanout, salez, verser 20 cl d\'eau couvrez et laissez mijoter 1 heure à petit feu. Au bout de ce temps, retirez la chair du poulet et coupez la. Réservez, retirez la coriandre, faites réduire le jus de cuisson. Dans un bol, battez les oeufs en omelette et versez les dans la cocotte, mélangez pour obtenir une crème d\'oeufs brouillés.\r\nDans une poêle, faites dorer les amandes effilées pour leur donner une jolie couleur dorée.\r\nBeurrez un moule à manqué posez une feuille de brick sur le fond, beurrez les feuilles de bricks et disposez les autour du moule en laissant déborder pour pouvoir recouvrir après. Étalez les amandes grillées, au fond puis posez le poulet en fins morceaux, recouvrez avec la sauce d\'oeufs. Posez une feuille puis rabattez les bords vers l\'intérieur. Recouvrez avec encore 2 feuilles. Faites rentrer les bords à l\'intérieur du moule. Badigeonnez la surface avec 30 g de beurre fondu. Saupoudrez légèrement de sucre glace et de cannelle en poudre. Faites cuire pendant 20 minutes à four moyen. 6/7. Dégustez tout chaud. Et au dessert quelques pâtisseries orientales !!\r\nSource: Recette de PASTILLA MAROCAIN (www.lesfoodies.com)', 4, 'images/1830367840.jpg', 6, 5, '2021-08-10 07:02:57', '2021-08-10 07:02:57'),
(6, 'La Harira', 20.00, 'La Harira est une soupe traditionnelle marocaine, pas toujours digeste et aux propriétés nutritionnelles contestables, mais néanmoins toujours appréciée des marocains pour rompre le jeûne du Ramadan. D’origine andalouse, elle se compose de tomates, de viande, d’oignons et de légumes secs. On la sert accompagnée d’œufs durs, de crêpes au miel ou de pâtisseries marocaines.', 6, 'images/362601125.jpg', 8, 5, '2021-08-10 07:08:26', '2021-08-10 07:08:26'),
(7, 'La Corne de gazelle', 200.00, 'En route à présent pour l’univers infini et coloré des pâtisseries marocaines! L’une des plus célèbres d’entre elles est sans doute la corne de gazelle. Confectionnée à partir d’amandes écrasées enrobées d’une fine pâte sablée parfumée à l’eau de fleur d’oranger, elle accompagne à merveille le rituel du thé à la menthe.', 20, 'images/1287796128.jpg', 7, 5, '2021-08-10 07:10:09', '2021-08-10 07:10:09'),
(8, 'La Chebakia', 60.00, 'La Chebakia est, avec le briouate aux amandes, la pâtisserie phare du Ramadan. La pâte, faite avec de la farine de blé, des œufs, de l’eau de fleur d’oranger, d’anis et d’amande, est frite dans l’huile végétale, puis recouverte de miel et de graines de sésame. Il s’agit également de l’un des gâteaux les moins chers et les plus répandus au Maroc.', 10, 'images/1907407106.jpg', 7, 5, '2021-08-10 07:11:17', '2021-08-10 07:11:17'),
(9, 'La Ghribia', 100.00, 'La Ghribia, ou ghoriba, est une pâtisserie traditionnelle marocaine dont la recette s’inspire du mantecados, un gâteau andalou fait à base de graisse de porc. La ghribia marocaine n’en comprend bien sûr pas, remplacé par de l’huile végétale, et c’est aujourd’hui un gâteau que l’on sert lors des fiançailles, des mariages ou des fêtes familiales.', 15, 'images/424874168.jpg', 7, 5, '2021-08-10 07:12:53', '2021-08-10 07:12:53'),
(10, 'Rfissa', 200.00, '​​​​​​​La Rfissa est un plat traditionnel marocain, Pour préparer la Rfissa, il faut cuisiner des trides qui sont comme des msemens fins, le poulet, carottes ... ne faut jamais boire de boisson fraîche après la dégustation de la Rfissa ! Recette de Rfissa.', 10, 'images/1153177863.png', 1, 6, '2021-08-10 07:39:02', '2021-08-10 07:39:02'),
(11, 'Tanjiya', 160.00, 'La Tanjia est un plat typique à Marrakech: s’y rendre sans goûter à ce plat emblématique serait une hérésie. Deux histoires se racontent au sujet de son origine. La plus populaire veut qu’elle ait été créée par des ouvriers qui, n’ayant pas le temps de rentrer chez eux pour manger, prenaient tous les ingrédients qu’ils trouvaient, viandes, épices, légumes, les mettaient dans une jarre qu’ils laissaient ensuite chauffer jusqu’au lendemain au hammam voisin. Aujourd’hui, il s’agit d’un plat de viandes et d’épices cuit de longues heures dans une jarre en terre cuite et servit dans de nombreux restaurants marrakchis.', 4, 'images/676651877.png', 1, 6, '2021-08-10 07:44:02', '2021-08-10 07:44:02'),
(12, 'Seffa', 140.00, '​​​​​​​La seffa est une spécialité marocaine qu\'on sert généralement dans les grande occasions entre le plat principal et le dessert ...Recette de Seffa.', 5, 'images/1760701837.png', 1, 6, '2021-08-10 07:51:03', '2021-08-10 07:51:03'),
(13, 'ALMaCHWI', 2000.00, 'Un méchoui d’agneau servi à l’occasion d’un mariage au Maroc Plat à base de viande, le méchoui désigne plus un mode de cuisson qu’une recette en particulier.', 20, 'images/1236750655.png', 9, 6, '2021-08-10 07:52:17', '2021-08-10 07:52:17'),
(14, 'Chlada', 70.00, 'une salade classique avec des concombres, des tomates et des oignons', 7, 'images/217430490.jpg', 3, 7, '2021-08-10 08:13:48', '2021-08-10 08:13:48'),
(15, 'Salade de betterave', 60.00, 'Salade de betterave  Une délicieuse association entre la betterave et l’oignon !', 7, 'images/1454794326.jpg', 3, 7, '2021-08-10 08:14:44', '2021-08-10 08:14:44'),
(16, 'Salade de pommes de terre', 30.00, 'Salade de pommes de terre : Une recette très facile à faire et vraiment vraiment très bonne !\r\nsalade-pomme-de-terre-2-683x1024 - Top 15 des salades marocaines', 10, 'images/1537906902.jpg', 3, 7, '2021-08-10 08:15:39', '2021-08-10 08:15:39'),
(17, 'Salade de poivrons à l’ail et au cumin', 40.00, 'Salade de poivrons à l’ail et au cumin : Si vous n’avez pas encore goûté à l’association poivrons/cumin, vous devez absolument tester cette salade. C’est un régal !', 5, 'images/477635312.jpg', 3, 7, '2021-08-10 08:17:12', '2021-08-10 08:17:12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isChef` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/user.jpg',
  `adress_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `tel`, `password`, `description`, `isChef`, `photo`, `adress_id`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Malika', 'majid', 'username1', 'user@gmail.com', '123334444', '$2y$10$jw4NA262mqaMKZ4e97e/fe1pwilQmmurBvjFP5oa9F0ee5b6pOjJ2', 'Femme marocaine ....', 1, 'images/user.jpg', 1, NULL, NULL, '2021-08-05 18:50:04', '2021-08-07 08:33:37'),
(3, 'fatima', 'ait ali', 'fatima', 'chef1@gmail.com', '0612896745', '$2y$10$69BD.E1zVEMRkINBbPjHl.Om/AMOKBH6cBjNhoIeRojAobMsR.9HG', 'kkhkuuu uuuuuuu uuuuuuu ffffff fffffffff fffff ffffffff ffffffffff ffffffffff fffffffffff fffffffff fffff fffffff ffffffffffffffyyy yyyy yyyyyyyyyy iiiiiiiii iiiiiiiii iiiiiiiii iiiiiiii \r\n iiiiiiii iiiiiiii iiiiiiiiiiiiiii iiiiiiiiiiiiiii iiiuu uuuuuuuuuuu uuuuuuuuuuu uuuuuuuuuuu uuuu', 1, 'images/1495580581.jpg', 11, NULL, NULL, '2021-08-08 07:51:22', '2021-08-08 08:03:11'),
(4, 'soumia', 'kab', 'soumia', 'kabrane.soumia@gmail.com', '0645678976', '$2y$10$zOt0PYsvv13V0CE7uq8NSO0kbR4odalNXND0vCxDa95KGOy6sbwfS', NULL, 0, 'images/user.jpg', 12, NULL, NULL, '2021-08-08 15:46:14', '2021-08-08 15:46:14'),
(5, 'hakima', 'Nassiri', 'hakima', 'hakima@gmail.com', '0645342245', '$2y$10$G4qn/i1IURoZvBZXz28M8e7uEWgm41yL1VSwOarCCAmBo6vhcKQP6', 'je suis un chef cuisinier de puis 20 ans j ai travailler dans les fêtes .\r\nactuellement je préfère de travailler de ma maison en préparant des plats pour mes clients fidèles .', 1, 'images/493691119.jpg', 16, NULL, NULL, '2021-08-10 06:01:52', '2021-08-10 06:01:52'),
(6, 'zhor', 'salmi', 'zhor', 'zhor@gmail.com', '0623738829', '$2y$10$6vd7aXUOEfINAfXg5NgmPeqq5FE/S2e.TjgZlQJYSLIAikuVhyqb6', 'zhor ager 56 ans chef cuisine  ,spécialiste des plats traditionnels .\r\nje travail dans les fêtes mais après confinement j ai commence a travailler avec des clients en prépareront les plats des petites fêtes et de chaque jour.', 1, 'images/2031045632.jpg', 17, NULL, NULL, '2021-08-10 07:28:52', '2021-08-10 07:28:52'),
(7, 'Aicha', 'ghali', 'aichaghali', 'aicha@gmail.com', '0635262818', '$2y$10$mBE/3Z7SHLjPjoi1r2d5n.dJdo4UcetzUsZaORoioMSuPPZuMSC9i', 'chef cuisinier , j ai déjà travailler dans les grands hôtels maintenant je veux travailler  pour moi meme', 1, 'images/1043906583.jpg', 18, NULL, NULL, '2021-08-10 08:09:52', '2021-08-10 08:09:52'),
(8, 'kenza', 'rafik', 'kanza', 'kenza@gmail.com', '0634256272', '$2y$10$5GM4YlrRFs4Sg5LxyLjIcO7TiWGhrBfaw690IMxsR17Cgo3pYZcY6', 'kenza femme marocaine plus de 10 ans dans la cuisine marocaine.\r\nje peux préparer toute les type des plats et avec des quantités importantes', 1, 'images/557040238.jpg', 19, NULL, NULL, '2021-08-10 11:14:11', '2021-08-10 11:14:11');

-- --------------------------------------------------------

--
-- Structure de la table `wishes`
--

CREATE TABLE `wishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plat_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wishes`
--

INSERT INTO `wishes` (`id`, `plat_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 1, 4, '2021-08-08 15:51:18', '2021-08-08 15:51:18'),
(12, 1, 1, '2021-08-09 08:56:07', '2021-08-09 08:56:07'),
(13, 3, 1, '2021-08-13 12:05:07', '2021-08-13 12:05:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commands_user_id_foreign` (`user_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_plat_id_foreign` (`plat_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_command_id_foreign` (`command_id`),
  ADD KEY `orders_plat_id_foreign` (`plat_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plats_category_id_foreign` (`category_id`),
  ADD KEY `plats_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_adress_id_foreign` (`adress_id`);

--
-- Index pour la table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishes_user_id_foreign` (`user_id`),
  ADD KEY `wishes_plat_id_foreign` (`plat_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commands`
--
ALTER TABLE `commands`
  ADD CONSTRAINT `commands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_plat_id_foreign` FOREIGN KEY (`plat_id`) REFERENCES `plats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_command_id_foreign` FOREIGN KEY (`command_id`) REFERENCES `commands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_plat_id_foreign` FOREIGN KEY (`plat_id`) REFERENCES `plats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_adress_id_foreign` FOREIGN KEY (`adress_id`) REFERENCES `adresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `wishes`
--
ALTER TABLE `wishes`
  ADD CONSTRAINT `wishes_plat_id_foreign` FOREIGN KEY (`plat_id`) REFERENCES `plats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
