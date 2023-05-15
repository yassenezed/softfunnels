-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 mai 2023 à 20:00
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `softfunnel`
--

-- --------------------------------------------------------

--
-- Structure de la table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `images` longtext DEFAULT NULL,
  `settings` longtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `ordre` int(11) NOT NULL,
  `landingpage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blocks`
--

INSERT INTO `blocks` (`id`, `titre`, `images`, `settings`, `details`, `type`, `ordre`, `landingpage_id`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL, NULL, 'bloque-2', 0, NULL, '2023-04-13 14:42:13', '2023-04-13 14:42:13'),
(2, '', NULL, NULL, NULL, 'bloque-2', 0, NULL, '2023-04-13 14:43:20', '2023-04-13 14:43:20'),
(3, '', NULL, NULL, NULL, 'bloque-2', 0, NULL, '2023-04-13 14:47:48', '2023-04-13 14:47:48'),
(4, '', NULL, NULL, NULL, 'bloque-4', 0, 4, '2023-04-13 14:48:47', '2023-04-13 14:48:47'),
(5, '', NULL, NULL, NULL, 'bloque-2', 0, 1, '2023-04-13 14:51:55', '2023-04-13 14:51:55'),
(6, '', NULL, NULL, NULL, 'bloque-2', 0, 1, '2023-04-13 14:52:53', '2023-04-13 14:52:53'),
(8, '', NULL, NULL, NULL, 'bloque-2', 0, 1, '2023-04-13 14:57:37', '2023-04-13 14:57:37'),
(9, '', NULL, NULL, NULL, 'bloque-2', 0, 1, '2023-04-13 15:01:18', '2023-04-13 15:01:18'),
(10, '', NULL, NULL, NULL, 'bloque-1', 0, 23, '2023-04-13 15:14:53', '2023-04-13 15:14:53'),
(11, '', NULL, NULL, NULL, 'bloque-1', 0, 23, '2023-04-13 15:15:13', '2023-04-13 15:15:13'),
(12, '', NULL, NULL, NULL, 'bloque-2', 0, 23, '2023-04-13 15:21:40', '2023-04-13 15:21:40'),
(14, '', NULL, NULL, NULL, 'bloque-1', 0, 1, '2023-04-13 15:39:43', '2023-04-13 15:39:43'),
(16, '', NULL, NULL, NULL, 'bloque-1', 0, 1, '2023-04-14 11:19:48', '2023-04-14 11:19:48'),
(20, '', NULL, NULL, NULL, 'bloque-2', 0, 1, '2023-04-14 11:47:42', '2023-04-14 11:47:42'),
(21, '', '[\"blocks\\/21\\/1681827797_80m538Wku2.png\"]', NULL, '<p>nn</p>', 'type1', 0, 1, '2023-04-14 14:32:47', '2023-04-18 14:23:17'),
(22, '', '[\"blocks\\/22\\/1681827811_bHMULqeSz1.png\"]', NULL, '<p>n,,n</p>', 'type1', 0, 1, '2023-04-14 14:37:11', '2023-04-18 14:23:31'),
(23, '', NULL, NULL, NULL, 'type1', 0, 1, '2023-04-14 14:40:05', '2023-04-14 14:40:05'),
(24, '', NULL, NULL, NULL, 'type1', 0, 1, '2023-04-14 14:41:32', '2023-04-14 14:41:32'),
(25, '', NULL, NULL, NULL, 'type2', 0, 1, '2023-04-14 14:41:48', '2023-04-14 14:41:48'),
(26, '', NULL, NULL, NULL, 'type2', 0, 7, '2023-04-14 14:42:26', '2023-04-14 14:42:26'),
(27, '', NULL, NULL, NULL, 'type1', 0, 7, '2023-04-14 14:42:31', '2023-04-14 14:42:31'),
(28, '', NULL, NULL, NULL, 'type1', 0, 7, '2023-04-14 14:47:28', '2023-04-14 14:47:28'),
(29, '', NULL, NULL, NULL, 'type1', 0, 1, '2023-04-14 15:47:35', '2023-04-14 15:47:35'),
(30, '', NULL, NULL, NULL, 'type1', 0, 1, '2023-04-14 15:47:40', '2023-04-14 15:47:40'),
(31, '', NULL, NULL, NULL, 'type2', 0, 1, '2023-04-14 15:47:47', '2023-04-14 15:47:47'),
(33, '', NULL, NULL, NULL, 'type1', 0, 24, '2023-04-14 17:36:12', '2023-04-14 17:36:12'),
(37, '', NULL, NULL, NULL, 'type1', 0, 11, '2023-04-15 13:18:04', '2023-04-15 13:18:04'),
(38, '', NULL, NULL, NULL, 'type2', 0, 11, '2023-04-15 13:18:08', '2023-04-15 13:18:08'),
(39, '', NULL, NULL, NULL, 'type1', 0, 11, '2023-04-15 13:18:12', '2023-04-15 13:18:12'),
(41, '', NULL, NULL, NULL, 'type2', 0, 11, '2023-04-15 13:18:20', '2023-04-15 13:18:20'),
(42, '', NULL, NULL, NULL, 'type1', 0, 11, '2023-04-15 13:18:36', '2023-04-15 13:18:36'),
(43, '', NULL, NULL, NULL, 'type1', 0, 11, '2023-04-15 13:18:49', '2023-04-15 13:18:49'),
(44, '', NULL, NULL, NULL, 'type2', 0, 11, '2023-04-15 13:18:54', '2023-04-15 13:18:54'),
(45, '', NULL, NULL, NULL, 'type2', 0, 11, '2023-04-15 13:18:59', '2023-04-15 13:18:59'),
(46, '', NULL, NULL, NULL, 'type1', 0, 1, '2023-04-15 13:19:53', '2023-04-15 13:19:53'),
(47, '', NULL, NULL, NULL, 'type2', 0, 1, '2023-04-15 13:21:09', '2023-04-15 13:21:09'),
(48, '', NULL, NULL, NULL, 'type1', 0, 1, '2023-04-15 13:21:20', '2023-04-15 13:21:20'),
(49, '', NULL, NULL, NULL, 'type2', 0, 1, '2023-04-15 13:23:48', '2023-04-15 13:23:48'),
(50, '', NULL, NULL, NULL, 'type1', 0, 5, '2023-04-15 13:24:35', '2023-04-15 13:24:35'),
(51, '', '[\"blocks\\/51\\/1681744328_vWGK8CsIc3.png\",\"blocks\\/51\\/1681744328_8vzYmhvx8I.png\"]', NULL, '<p>daz</p>', 'type1', 0, 1, '2023-04-15 13:25:10', '2023-04-17 15:12:08'),
(52, '', NULL, NULL, NULL, 'type2', 0, 1, '2023-04-15 13:29:24', '2023-04-15 13:29:24'),
(53, '', NULL, NULL, NULL, 'type2', 0, 1, '2023-04-15 13:29:31', '2023-04-15 13:29:31'),
(59, '', NULL, NULL, NULL, 'type1', 0, 25, '2023-04-16 14:20:40', '2023-04-16 14:20:40'),
(60, '', NULL, NULL, NULL, 'type1', 0, 26, '2023-04-16 17:46:10', '2023-04-16 17:46:10'),
(61, '', NULL, NULL, NULL, 'type1', 0, 26, '2023-04-17 10:37:05', '2023-04-17 10:37:05'),
(62, '', NULL, NULL, NULL, 'type1', 0, 26, '2023-04-17 10:37:21', '2023-04-17 10:37:21'),
(65, 'Qui Somme-nous', NULL, NULL, NULL, 'type1', 1, 3, '2023-04-19 10:10:52', '2023-04-19 10:10:52'),
(66, 'Nos Packs', NULL, NULL, NULL, 'type2', 2, 3, '2023-04-19 10:11:05', '2023-04-19 10:11:05'),
(67, 'adzdza', NULL, NULL, NULL, 'type1', 23, 1, '2023-04-19 10:11:28', '2023-04-19 10:11:28'),
(68, 'PC', NULL, NULL, NULL, 'type1', 24, 1, '2023-04-19 10:23:30', '2023-04-19 10:23:30'),
(69, 'adzzda', NULL, NULL, NULL, 'type1', 25, 1, '2023-04-19 10:24:30', '2023-04-19 10:24:30'),
(70, 'testazd', NULL, NULL, NULL, 'type2', 26, 1, '2023-04-19 10:59:24', '2023-04-19 10:59:24'),
(71, 'Qui Somme-nous', '[\"blocks\\/71\\/1681904803_gHOS1VrEdI.png\"]', NULL, '<h2><span style=\"background-color: rgb(255, 255, 0); color: rgb(255, 0, 0);\">This one is type 1 left text</span><br><br></h2>', 'type1', 1, 28, '2023-04-19 11:12:34', '2023-04-19 11:46:43'),
(72, 'Les prix', '[\"blocks\\/72\\/1681914679_TV2ixEsuBU.png\"]', NULL, '<h2><span style=\"background-color: rgb(255, 255, 0); color: rgb(255, 0, 0);\">this one is image left</span></h2>\r\n<h2>&nbsp;</h2>', 'type2', 2, 28, '2023-04-19 11:12:42', '2023-04-19 14:31:19'),
(75, 'pack', '[\"blocks\\/75\\/1681984336_cju8LfHrpJ.png\",\"blocks\\/75\\/1681984342_jkZSR7lkkj.png\"]', NULL, '<p>azza</p>', 'type1', 1, 29, '2023-04-20 09:51:39', '2023-04-20 09:52:22'),
(77, 'dza', '[\"blocks\\/77\\/1681997753_aF1c3pNEOT.png\",\"blocks\\/77\\/1681997757_aM5XGYi8jk.png\",\"blocks\\/77\\/1681999574_vlk42uCTF6.png\",\"blocks\\/77\\/1681999574_KTTki3kjIF.png\"]', NULL, '<p>az</p>', 'type1', 1, 30, '2023-04-20 10:25:13', '2023-04-20 14:06:14'),
(78, 'adzdza', '[\"blocks\\/78\\/1682000681_uCdU3LBoUQ.png\"]', NULL, NULL, 'caroussel', 1, 31, '2023-04-20 14:18:14', '2023-04-20 14:39:33'),
(79, 'caroussel', '[\"blocks\\/79\\/1682002040_iK0lz9SCDR.png\",\"blocks\\/79\\/1682002040_xoboNzFreh.png\",\"blocks\\/79\\/1682002993_N9s8vtB3Uh.png\",\"blocks\\/79\\/1682002993_sq43kidGCG.png\"]', NULL, NULL, 'caroussel', 1, 32, '2023-04-20 14:47:03', '2023-04-20 15:03:13'),
(80, 'dazdaz', NULL, NULL, NULL, 'type1', 2, 32, '2023-04-20 15:02:55', '2023-04-20 15:02:55'),
(81, 'dza', '[\"blocks\\/81\\/1682003430_sXgVxkPJGl.png\",\"blocks\\/81\\/1682003430_mXvzzaa7xg.png\",\"blocks\\/81\\/1682003472_TriJZmUrOS.png\",\"blocks\\/81\\/1682003472_7x2pZSq1jH.png\"]', NULL, NULL, 'type2', 2, 31, '2023-04-20 15:10:15', '2023-04-20 15:11:12'),
(92, 'hey', NULL, NULL, '{\"1\":{\"text\":\"dddddddd\",\"q\":\"ddd\"}}', 'faq', 1, 34, '2023-04-27 08:43:19', '2023-04-27 08:52:40'),
(106, 'www', NULL, NULL, '[{\"text\":\"alo\",\"q\":\"alo\"},{\"text\":\"ww\",\"q\":\"ww\"}]', 'faq', 1, 36, '2023-04-27 10:43:38', '2023-04-27 10:44:03'),
(107, 'wii', NULL, NULL, '[{\"text\":\"e\",\"q\":\"e\"}]', 'faq', 2, 36, '2023-04-27 10:44:24', '2023-04-27 10:44:53'),
(109, 'adz', NULL, NULL, '[{\"text\":\"Ecrivez votre question ici ss\",\"q\":\"Ecrivez votre reponse ici ss\"}]', 'faq', 3, 36, '2023-04-27 10:48:52', '2023-04-27 10:49:02'),
(114, 'zadddddddddd', NULL, NULL, '{\"1\":{\"text\":\"daddazd\",\"q\":\"dadzdza\"}}', 'faq', 4, 36, '2023-04-27 10:59:19', '2023-04-27 11:00:39'),
(127, 'reg', NULL, NULL, '[{\"text\":null,\"q\":null}]', 'faq', 1, 38, '2023-04-27 12:56:38', '2023-04-27 12:56:51'),
(128, 'adzdzadz', NULL, NULL, NULL, 'faq', 2, 38, '2023-04-27 12:58:39', '2023-04-27 13:13:00'),
(129, 'faq', NULL, NULL, '[{\"text\":\"hello\",\"q\":\"oui\"},{\"text\":\"hello\",\"q\":\"oui\"},{\"text\":\"hello\",\"q\":\"ouais\"}]', 'faq', 1, 39, '2023-05-01 20:09:11', '2023-05-01 20:09:27'),
(130, 'Yow', '[\"blocks\\/130\\/1682977126_2kksPt75Ur.jpg\"]', NULL, '<div class=\"faq\">\r\n<div class=\"faq-item\">\r\n<h3 class=\"faq-question\">addad</h3>\r\n</div>\r\n</div>', 'type1', 2, 39, '2023-05-01 20:38:20', '2023-05-01 20:38:46'),
(131, 'xw', '[\"blocks\\/131\\/1682977322_uMJgINg2jA.jpg\"]', NULL, '<p>oyowvdsvsdvs</p>', 'type2', 3, 39, '2023-05-01 20:40:25', '2023-05-01 20:42:14'),
(133, 'Caroussel', '[\"blocks\\/133\\/1683029437_SnJRpVQONi.jpg\",\"blocks\\/133\\/1683029437_siTR2vWBWL.jpg\",\"blocks\\/133\\/1683029437_N7czLDQlD8.jpg\"]', NULL, NULL, 'caroussel', 4, 28, '2023-05-02 11:10:12', '2023-05-02 11:10:37'),
(135, 'faq', NULL, NULL, '[{\"text\":\"zdadzad\",\"q\":\"azdzadza\"},{\"text\":\"zdadazadz\",\"q\":\"zdaazd\"}]', 'faq', 6, 28, '2023-05-02 11:14:27', '2023-05-02 11:16:21'),
(136, 'adzdza', '[\"blocks\\/136\\/1683214907_QI1xYL6jGS.jpg\"]', NULL, '<h2 class=\"h3\">We always welcome keen to learn folks to our team</h2>\r\n<p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>\r\n<p>Now that your brand is all dressed up and ready to party, it\'s time to release it to the world. By the way, let\'s celebrate already.</p>', 'type1', 1, 40, '2023-05-02 11:23:14', '2023-05-04 14:41:47'),
(138, 'ww', '[\"blocks\\/138\\/1683034283_3lpb71FdrL.jpg\",\"blocks\\/138\\/1683034283_jaRuymhAB0.jpg\"]', NULL, NULL, 'caroussel', 3, 40, '2023-05-02 12:24:15', '2023-05-02 12:31:23'),
(153, 'type1', '[\"blocks\\/153\\/1683536676_G2xBBg3gr6.jpg\"]', NULL, '<p>,zkef,ezfkl,zef,kl</p>', 'type1', 1, 41, '2023-05-08 08:04:23', '2023-05-08 08:04:36'),
(154, 'faq', NULL, NULL, '[{\"text\":\"check\",\"q\":\"check what?\"},{\"text\":\"Checking\",\"q\":\"checking what....\"},{\"text\":\"what ?\",\"q\":\"yes checking?\"}]', 'faq', 5, 40, '2023-05-08 08:07:37', '2023-05-08 08:08:01'),
(167, 'qsf', NULL, NULL, NULL, 'faq', 27, 1, '2023-05-09 09:43:38', '2023-05-09 09:43:38'),
(169, 'vzevze', '[\"blocks\\/169\\/1683632376_qWOl80rmrO.png\",\"blocks\\/169\\/1683632376_GddjAyuetP.png\",\"blocks\\/169\\/1683632376_LIWtcjgjBT.jpg\"]', NULL, NULL, 'caroussel', 1, 15, '2023-05-09 10:39:28', '2023-05-09 10:39:39'),
(170, 'faq', NULL, NULL, '[{\"text\":\"allo\",\"q\":\"oui\"},{\"text\":\"oui\",\"q\":\"alo\"}]', 'faq', 2, 15, '2023-05-09 10:43:17', '2023-05-09 10:43:27'),
(175, 'as', '[\"trusticons\\/175\\/1683640659_DKxwAasrnC.png\",\"trusticons\\/175\\/1683640659_I0MJOwDmza.png\",\"trusticons\\/175\\/1683640659_Xmxuomguw0.png\",\"trusticons\\/175\\/1683640659_KOIWwlLM5D.png\",\"trusticons\\/175\\/1683640659_dtpPS5RnyU.png\",\"trusticons\\/175\\/1683640659_LxSPKtxivA.png\"]', NULL, 'Trusted by the world\'s best companies', 'trust', 15, 40, '2023-05-09 12:57:16', '2023-05-09 12:57:39'),
(176, 're', NULL, NULL, NULL, 'review', 16, 40, '2023-05-09 13:18:13', '2023-05-09 13:18:13'),
(177, 'q', NULL, NULL, NULL, 'reviews', 1, 8, '2023-05-09 13:52:13', '2023-05-09 13:52:13'),
(178, 'aef', NULL, NULL, '[{\"text\":\"zad\",\"q\":\"zad\",\"img\":\"iconplustext\\/178\\/1683645114_CVhWCL8xJ2.png\"},{\"text\":\"zad\",\"q\":\"zad\",\"img\":\"iconplustext\\/178\\/1683645114_W5Lj11y7nB.png\"},{\"text\":\"zda\",\"q\":\"zda\",\"img\":\"iconplustext\\/178\\/1683645114_Vbjs64VlFY.png\"}]', 'iconplustext', 3, 15, '2023-05-09 14:11:20', '2023-05-09 14:11:54'),
(179, 'dza', NULL, NULL, '[{\"text\":\"cz\",\"q\":\"zac\",\"img\":\"\"}]', 'reviews', 17, 40, '2023-05-09 14:12:12', '2023-05-09 14:28:30'),
(180, 'xa', NULL, NULL, '[{\"text\":\"scq\",\"q\":\"scq\"},{\"text\":\"zad\",\"q\":\"daz\"},{\"text\":\"dza\",\"q\":\"dza\"}]', 'faq', 18, 40, '2023-05-09 14:14:45', '2023-05-09 14:35:12'),
(181, 'cza', NULL, NULL, NULL, 'iconplustext', 19, 40, '2023-05-09 14:27:03', '2023-05-09 14:27:03'),
(184, 'daz', NULL, NULL, '[{\"text\":\"I love Space! I love the ease of use, I love the fact that I have total creative freedom. The template is really nice and offers quite a large set of options. It\'s beautiful and the coding is done quickly and seamlessly.\",\"q\":\"Maria Muzynska\",\"img\":\"reviews\\/184\\/1683668505_aswCvoKoL1.jpg\"},{\"text\":\"We are incredibly impressed with Space and how well it supports its customers with amazing products and services. One simple subscription gives you access to all our tools, plus so much more.\",\"q\":\"Mark McManus\",\"img\":\"reviews\\/184\\/1683668505_3e0UcI44az.jpg\"},{\"text\":\"One simple subscription gives you access to all our tools, plus so much more. Space brings so many benefits to any team that does anything following a process.\",\"q\":\"Alex Pottorf\",\"img\":\"reviews\\/184\\/1683668558_o7MDKxQHvo.jpg\"}]', 'reviews', 20, 40, '2023-05-09 20:35:45', '2023-05-09 20:43:30'),
(185, 'Checking', NULL, NULL, '[{\"headline\":\"dzadza\",\"button\":\"azddza\"}]', 'form', 21, 40, '2023-05-11 11:04:06', '2023-05-12 21:28:00'),
(186, 'cazcz', NULL, NULL, '[{\"headline\":\"zadadz\",\"button\":\"dzadaz\"}]', 'form', 22, 40, '2023-05-12 21:38:59', '2023-05-12 21:39:09'),
(187, 'da', NULL, NULL, '[{\"headline\":\"dza\",\"button\":\"daz\"}]', 'form', 1, 45, '2023-05-12 21:40:47', '2023-05-12 21:40:52'),
(188, 'azda', NULL, NULL, '[{\"headline\":\"ALLO\",\"button\":\"BUY NOW\"}]', 'form', 1, 49, '2023-05-13 14:15:48', '2023-05-13 14:15:59');

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
-- Structure de la table `landingpages`
--

CREATE TABLE `landingpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `state` varchar(255) DEFAULT 'Active',
  `slug` varchar(255) DEFAULT NULL,
  `visitors` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `landingpages`
--

INSERT INTO `landingpages` (`id`, `titre`, `description`, `state`, `slug`, `visitors`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'efzfze', 'ezfzef', NULL, NULL, NULL, 0, NULL, '2023-04-12 14:03:40', '2023-04-12 14:03:40'),
(3, 'adzdzazd', 'dzaazd', NULL, '/hello-slug', NULL, 0, NULL, '2023-04-12 14:07:05', '2023-04-12 14:07:05'),
(4, 'fzafz', 'afzfza', 'Active', 'afzzaf', NULL, 0, NULL, '2023-04-12 14:15:58', '2023-04-12 14:15:58'),
(5, 'dazd', 'zdazda', 'Active', 'dzazad', NULL, 0, NULL, '2023-04-12 14:24:43', '2023-04-12 14:24:43'),
(6, 'zdazda', 'dzzad', 'Active', 'dazdza', NULL, 0, NULL, '2023-04-12 14:24:50', '2023-04-12 14:24:50'),
(7, 'dzaadz', 'zdazdazda', 'Active', 'dzadzazda', NULL, 0, NULL, '2023-04-12 14:26:10', '2023-04-12 14:26:10'),
(8, 'rzarza', 'rzazra', 'inactive', 'rzaarz', NULL, 0, NULL, '2023-04-12 14:27:31', '2023-04-12 14:27:31'),
(9, 'zfazfa', 'fzafa', 'inactive', 'zfafza', NULL, 0, NULL, '2023-04-12 14:27:40', '2023-04-12 14:27:40'),
(11, 'zdadzscqqq', 'csqqqqqqqq', 'Active', 'scqqqqqqqqqq', NULL, 0, NULL, '2023-04-12 14:30:07', '2023-04-13 10:03:12'),
(15, 'dzazddza', 'dzazdazadzd', 'Active', 'zdadzazad', NULL, 0, NULL, '2023-04-12 14:34:41', '2023-04-12 14:34:41'),
(20, 'dazdzadz', 'zadzddzazd', 'Active', 'zdazdazdazd', NULL, 0, NULL, '2023-04-13 10:13:46', '2023-04-13 10:13:46'),
(22, 'souris', 'cette land', 'Inactive', '/souris-test', NULL, 0, NULL, '2023-04-13 12:49:58', '2023-04-13 12:50:14'),
(23, 'adzdza', 'dzadza', 'Active', 'dzadz', NULL, 0, NULL, '2023-04-13 14:04:38', '2023-04-13 14:04:38'),
(24, 'Calculatrice', 'landnig page pour ma calulatrice', 'Active', '/calcul', '2', 0, NULL, '2023-04-14 17:36:00', '2023-05-12 21:07:38'),
(25, 'segzze', 'gezgzezeg', 'Active', '/reh', NULL, 0, NULL, '2023-04-16 14:20:25', '2023-04-16 14:20:25'),
(26, 'ezfze', 'ezffez', 'Active', 'ezffze', NULL, 0, NULL, '2023-04-16 17:45:59', '2023-04-16 17:45:59'),
(28, 'NewlyNew', 'ABTESTING', 'Active', '/ABTESTING', '7', 122, 2, '2023-04-19 11:12:19', '2023-05-13 16:51:58'),
(29, 'PCC', 'PCC', 'Active', 'PCC', NULL, 0, NULL, '2023-04-20 09:51:28', '2023-04-20 09:51:28'),
(30, 'test', 'tetet', 'Inactive', 'etet', NULL, 0, NULL, '2023-04-20 10:08:12', '2023-04-20 10:08:12'),
(31, 'adzzazdda', 'tezez', 'Active', 'tezet', NULL, 0, NULL, '2023-04-20 14:11:53', '2023-04-20 14:11:53'),
(32, 'new test', 'testing', 'Active', 'slugging', NULL, 0, NULL, '2023-04-20 14:46:48', '2023-04-27 10:17:51'),
(33, 'dz', 'dzdz', 'Active', 'dzdz', NULL, 0, NULL, '2023-04-24 20:40:58', '2023-04-24 20:40:58'),
(34, 'Hello', 'Wach', 'Active', 'slugging', NULL, 0, NULL, '2023-04-25 07:56:56', '2023-04-25 07:56:56'),
(35, 'zda', 'dza', 'Active', 'adz', NULL, 0, NULL, '2023-04-27 08:26:04', '2023-04-27 08:26:04'),
(36, 'wwwwww', 'www', 'Active', 'wwww', NULL, 0, NULL, '2023-04-27 10:43:30', '2023-04-27 10:43:30'),
(37, 'fzefeefzfezefz', 'efzefzefefz', 'Active', 'efzefzfezezff', NULL, 0, NULL, '2023-04-27 12:52:35', '2023-04-27 12:52:35'),
(38, 'gre', 'gegrgeg', 'Active', 'gre', NULL, 0, NULL, '2023-04-27 12:56:29', '2023-04-27 12:56:29'),
(39, 'Holla', 'testing faq', 'Active', 'faqs', NULL, 0, NULL, '2023-05-01 20:09:00', '2023-05-01 20:09:00'),
(40, 'PreviewTest', 'PreviewTest', 'Active', 'PreviewTest', '11', 120, 2, '2023-05-02 11:16:56', '2023-05-13 16:51:58'),
(41, 'Calculatrice', 'cet Calculatrice .....', 'Active', '/test', '1', 0, NULL, '2023-05-08 08:03:48', '2023-05-12 21:15:22'),
(42, 'Calc', 'Check', 'Active', '/slugging', NULL, 120, NULL, '2023-05-12 21:12:02', '2023-05-12 21:12:02'),
(43, 'cal', 'check', 'Active', 'czak', NULL, 120, NULL, '2023-05-12 21:14:03', '2023-05-12 21:14:03'),
(44, 'New Product', 'Checkign', 'Active', '/checking', '7', 130, NULL, '2023-05-12 21:15:45', '2023-05-12 21:21:19'),
(45, 'dzadaz', 'dazdza', 'Active', 'zad', '5', 111, NULL, '2023-05-12 21:40:39', '2023-05-12 21:43:55'),
(46, 'adzdza', 'dazdaz', 'Active', 'dzazda', NULL, 123, NULL, '2023-05-13 13:11:35', '2023-05-13 13:11:35'),
(47, 'dzazda', 'zadzadzdzdadza111', 'Active', 'check', NULL, 111, NULL, '2023-05-13 13:18:10', '2023-05-13 13:18:10'),
(48, 'dza', 'zdadza', 'Active', 'dza', NULL, 11, NULL, '2023-05-13 13:24:37', '2023-05-13 13:24:37'),
(49, 'dzadza', 'adzdza', 'Active', 'dzadzadzadz', '4', 11, 2, '2023-05-13 13:28:48', '2023-05-13 16:51:59');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 'dzadzdazdaz', '2023-05-13 12:07:04', '2023-05-13 12:07:04'),
(2, 2, 'dzadzdazdaz', '2023-05-13 12:07:08', '2023-05-13 12:07:08'),
(3, 2, 'dzadzdazdaz', '2023-05-13 12:07:53', '2023-05-13 12:07:53'),
(4, 2, 'dzadzdazdaz', '2023-05-13 12:09:32', '2023-05-13 12:09:32'),
(5, 2, 'dzadzdazdaz', '2023-05-13 12:09:52', '2023-05-13 12:09:52'),
(6, 2, 'dzadzdazdaz', '2023-05-13 12:18:45', '2023-05-13 12:18:45'),
(7, 2, 'dzadzdazdaz', '2023-05-13 12:19:19', '2023-05-13 12:19:19'),
(8, 2, 'dzadzdazdaz', '2023-05-13 12:23:29', '2023-05-13 12:23:29');

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
(5, '2023_04_11_124144_add_username_to_users_table', 1),
(36, '2023_04_12_114629_create_lp_table', 5),
(37, '2023_04_12_115533_create_lp_table', 6),
(38, '2023_04_12_115755_add_description_to_lp_table', 7),
(47, '2023_04_12_130907_create_lp_table', 9),
(54, '2023_04_12_115820_add_description_to_lp_table', 10),
(55, '2014_10_12_000000_create_users_table', 11),
(56, '2014_10_12_100000_create_password_reset_tokens_table', 11),
(57, '2019_08_19_000000_create_failed_jobs_table', 11),
(58, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(59, '2023_04_11_143400_drop_name_from_users_table', 11),
(60, '2023_04_11_144021_add_somefields_to_users_table', 11),
(61, '2023_04_12_135855_create_lp_table', 11),
(62, '2023_04_12_140100_add_time_to_lp_table', 12),
(64, '2023_04_13_104430_create_blocks_table', 13),
(65, '2023_04_13_115542_add_ordre_to_table', 14),
(69, '2023_04_13_115832_add_ordre_to_table', 15),
(70, '2023_04_19_095331_add_titre_to_blocks_table', 16),
(71, '2023_05_11_114945_create_form_tables', 17),
(72, '2023_05_11_120047_add_details_to_form_configs_table', 18),
(73, '2023_05_13_111147_create_messages_table', 19),
(74, '2023_05_13_130350_create_messages_table', 20);

-- --------------------------------------------------------

--
-- Structure de la table `normal_form`
--

CREATE TABLE `normal_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `landing_page_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `normal_form`
--

INSERT INTO `normal_form` (`id`, `landing_page_id`, `fullname`, `email`, `phone`, `company`, `adress`, `notes`, `created_at`, `updated_at`) VALUES
(1, 40, 'My Check', 'zaid.y.fszt@uhp.ac.ma', '0607999888', 'CAPGEMINI', 'HADSOUALEM', 'PLEASE I WANT TO BUY 3', '2023-05-11 14:40:05', '2023-05-11 14:40:05'),
(2, 40, 'Ms. Chaya Wisozk', 'zaid.yz.fst@uhp.ac.ma', '6767567', NULL, NULL, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(3, 45, 'Yassine Zaid', 'zaid.y.fst@uhp.ac.ma', '12412', 'azd', 'azd', 'dza', '2023-05-12 21:41:08', '2023-05-12 21:41:08'),
(4, 40, 'adz', 'adz@gmail.com', '1312212', 'daz', 'adz', 'daz', '2023-05-13 13:53:11', '2023-05-13 13:53:11'),
(5, 49, 'dza', 'adz@gmail.com', '2131231', 'dazdz', 'adz', 'adz', '2023-05-13 14:16:23', '2023-05-13 14:16:23'),
(6, 40, 'zaffz', 'zaid.y.fszt@uhp.ac.mac', '31231', NULL, 'fazzf', 'azd', '2023-05-13 16:19:41', '2023-05-13 16:19:41');

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
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dzzad', 'aeze', 'zeazae', 'zaid.y.fst@uhp.ac.ma', NULL, '$2y$10$RIOEtIQt4a4zS.BTkJiU1eo5CyxXQESWcXm07oOXNHBfQQRBURI3S', NULL, '2023-04-12 14:00:14', '2023-04-12 14:00:14'),
(2, 'Jack', 'Jack', 'dzaazd', 'zaid.y.fszt@uhp.ac.mac', NULL, '$2y$10$FwrIhBgwq7NI8eecVBExZuNy9Ir.YhLUspoHGZL4JjORrBvJZ.i6q', NULL, '2023-04-13 12:22:49', '2023-04-13 12:22:49'),
(3, 'administos', 'dzadza', 'dza', 'zaid.y.fszt@uhp.ac.ma', NULL, '$2y$10$4V8Dil8b2szCzKYNRabUHuCeMxQtyG7EL0s72UjizdlZvldV27PPy', NULL, '2023-05-12 10:20:28', '2023-05-12 10:20:28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocks_landingpage_id_foreign` (`landingpage_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `landingpages`
--
ALTER TABLE `landingpages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `landingpages_user_id_foreign` (`user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `normal_form`
--
ALTER TABLE `normal_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `normal_form_landing_page_id_foreign` (`landing_page_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT pour la table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `landingpages`
--
ALTER TABLE `landingpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `normal_form`
--
ALTER TABLE `normal_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_landingpage_id_foreign` FOREIGN KEY (`landingpage_id`) REFERENCES `landingpages` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `landingpages`
--
ALTER TABLE `landingpages`
  ADD CONSTRAINT `landingpages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `normal_form`
--
ALTER TABLE `normal_form`
  ADD CONSTRAINT `normal_form_landing_page_id_foreign` FOREIGN KEY (`landing_page_id`) REFERENCES `landingpages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
