-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mai 2023 à 18:27
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
  `type` varchar(255) DEFAULT NULL,
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
(71, 'Qui Somme-nous', '[\"blocks\\/71\\/1681904803_gHOS1VrEdI.png\"]', NULL, '<h2><span style=\"background-color: rgb(255, 255, 0); color: rgb(255, 0, 0);\">This one is type 1 left text</span><br><br></h2>', 'type1', 3, 28, '2023-04-19 11:12:34', '2023-05-22 14:20:25'),
(72, 'Les prix', '[\"blocks\\/72\\/1681914679_TV2ixEsuBU.png\"]', NULL, '<h2><span style=\"background-color: rgb(255, 255, 0); color: rgb(255, 0, 0);\">this one is image left</span></h2>\r\n<h2>&nbsp;</h2>', 'type2', 1, 28, '2023-04-19 11:12:42', '2023-05-22 14:20:23'),
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
(133, 'Caroussel', '[\"blocks\\/133\\/1683029437_SnJRpVQONi.jpg\",\"blocks\\/133\\/1683029437_siTR2vWBWL.jpg\",\"blocks\\/133\\/1683029437_N7czLDQlD8.jpg\"]', NULL, NULL, 'caroussel', 0, 28, '2023-05-02 11:10:12', '2023-05-22 14:20:21'),
(135, 'faq', NULL, NULL, '[{\"text\":\"zdadzad\",\"q\":\"azdzadza\"},{\"text\":\"zdadazadz\",\"q\":\"zdaazd\"},{\"text\":\"asas\",\"q\":\"asas\"},{\"text\":\"asasa\",\"q\":\"asasas\"}]', 'faq', 2, 28, '2023-05-02 11:14:27', '2023-05-30 12:53:12'),
(136, 'adzdza', '[\"blocks\\/136\\/1683214907_QI1xYL6jGS.jpg\"]', NULL, '<h2 class=\"h3\">We always welcome keen to learn folks to our team</h2>\r\n<p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>\r\n<p>Now that your brand is all dressed up and ready to party, it\'s time to release it to the world. By the way, let\'s celebrate already.</p>', 'type1', 1, 40, '2023-05-02 11:23:14', '2023-05-15 08:13:00'),
(138, 'ww', '[\"blocks\\/138\\/1683034283_3lpb71FdrL.jpg\",\"blocks\\/138\\/1683034283_jaRuymhAB0.jpg\"]', NULL, NULL, 'caroussel', 3, 40, '2023-05-02 12:24:15', '2023-05-02 12:31:23'),
(153, 'type1', '[\"blocks\\/153\\/1683536676_G2xBBg3gr6.jpg\"]', NULL, '<p>,zkef,ezfkl,zef,kl</p>', 'type1', 1, 41, '2023-05-08 08:04:23', '2023-05-08 08:04:36'),
(154, 'faq', NULL, NULL, '[{\"text\":\"check\",\"q\":\"check what?\"},{\"text\":\"Checking\",\"q\":\"checking what....\"},{\"text\":\"what ?\",\"q\":\"yes checking?\"}]', 'faq', 5, 40, '2023-05-08 08:07:37', '2023-05-08 08:08:01'),
(167, 'qsf', NULL, NULL, NULL, 'faq', 27, 1, '2023-05-09 09:43:38', '2023-05-09 09:43:38'),
(169, 'vzevze', '[\"blocks\\/169\\/1683632376_qWOl80rmrO.png\",\"blocks\\/169\\/1683632376_GddjAyuetP.png\",\"blocks\\/169\\/1683632376_LIWtcjgjBT.jpg\"]', NULL, NULL, 'caroussel', 1, 15, '2023-05-09 10:39:28', '2023-05-09 10:39:39'),
(170, 'faq', NULL, NULL, '[{\"text\":\"allo\",\"q\":\"oui\"},{\"text\":\"oui\",\"q\":\"alo\"}]', 'faq', 2, 15, '2023-05-09 10:43:17', '2023-05-09 10:43:27'),
(175, 'as', '[\"trusticons\\/175\\/1683640659_DKxwAasrnC.png\",\"trusticons\\/175\\/1683640659_I0MJOwDmza.png\",\"trusticons\\/175\\/1683640659_Xmxuomguw0.png\",\"trusticons\\/175\\/1683640659_KOIWwlLM5D.png\",\"trusticons\\/175\\/1683640659_dtpPS5RnyU.png\",\"trusticons\\/175\\/1683640659_LxSPKtxivA.png\"]', NULL, 'Trusted by the world\'s best companies', 'trust', 15, 40, '2023-05-09 12:57:16', '2023-05-09 12:57:39'),
(177, 'q', NULL, NULL, NULL, 'reviews', 1, 8, '2023-05-09 13:52:13', '2023-05-09 13:52:13'),
(178, 'aef', NULL, NULL, '[{\"text\":\"zad\",\"q\":\"zad\",\"img\":\"iconplustext\\/178\\/1683645114_CVhWCL8xJ2.png\"},{\"text\":\"zad\",\"q\":\"zad\",\"img\":\"iconplustext\\/178\\/1683645114_W5Lj11y7nB.png\"},{\"text\":\"zda\",\"q\":\"zda\",\"img\":\"iconplustext\\/178\\/1683645114_Vbjs64VlFY.png\"}]', 'iconplustext', 3, 15, '2023-05-09 14:11:20', '2023-05-09 14:11:54'),
(180, 'xa', NULL, NULL, '[{\"text\":\"scq\",\"q\":\"scq\"},{\"text\":\"zad\",\"q\":\"daz\"},{\"text\":\"dza\",\"q\":\"dza\"}]', 'faq', 18, 40, '2023-05-09 14:14:45', '2023-05-09 14:35:12'),
(181, 'cza', NULL, NULL, NULL, 'iconplustext', 19, 40, '2023-05-09 14:27:03', '2023-05-09 14:27:03'),
(184, 'daz', NULL, NULL, '[{\"text\":\"I love Space! I love the ease of use, I love the fact that I have total creative freedom. The template is really nice and offers quite a large set of options. It\'s beautiful and the coding is done quickly and seamlessly.\",\"q\":\"Maria Muzynska\",\"img\":\"reviews\\/184\\/1683668505_aswCvoKoL1.jpg\"},{\"text\":\"We are incredibly impressed with Space and how well it supports its customers with amazing products and services. One simple subscription gives you access to all our tools, plus so much more.\",\"q\":\"Mark McManus\",\"img\":\"reviews\\/184\\/1683668505_3e0UcI44az.jpg\"},{\"text\":\"One simple subscription gives you access to all our tools, plus so much more. Space brings so many benefits to any team that does anything following a process.\",\"q\":\"Alex Pottorf\",\"img\":\"reviews\\/184\\/1683668558_o7MDKxQHvo.jpg\"}]', 'reviews', 20, 40, '2023-05-09 20:35:45', '2023-05-09 20:43:30'),
(185, 'Checking', NULL, NULL, '[{\"headline\":\"Si vous \\u00e9tes interess\\u00e9(e)\",\"button\":\"Acheter Maintenant\"}]', 'form', 21, 40, '2023-05-11 11:04:06', '2023-05-15 08:07:25'),
(187, 'da', NULL, NULL, '[{\"headline\":\"dza\",\"button\":\"daz\"}]', 'form', 1, 45, '2023-05-12 21:40:47', '2023-05-12 21:40:52'),
(188, 'azda', NULL, NULL, '[{\"headline\":\"ALLO\",\"button\":\"BUY NOW\"}]', 'form', 1, 49, '2023-05-13 14:15:48', '2023-05-13 14:15:59'),
(190, 'BLoc1', NULL, NULL, NULL, 'type1', 1, 51, '2023-05-14 14:07:03', '2023-05-14 14:07:03'),
(191, 'Calculatrice', NULL, NULL, NULL, 'caroussel', 2, 51, '2023-05-14 14:07:39', '2023-05-14 14:07:39'),
(194, 'type1', '[\"blocks\\/194\\/1684168639_laiZ3FlsHY.jpg\"]', NULL, '<h2 class=\"h3\"><strong><span style=\"color: rgb(53, 152, 219);\">We always welcome keen to learn folks to our team</span></strong></h2>\r\n<p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>\r\n<p>Now that your brand is all dressed up and ready to party, it\'s time to release it to the world. By the way, let\'s celebrate already.</p>', 'type1', 2, 53, '2023-05-15 15:33:35', '2023-05-27 20:07:45'),
(195, 'type2', '[\"blocks\\/195\\/1684186971_u57Lzp5gPh.jpg\"]', NULL, '<h2 class=\"h3\">We always welcome keen to learn folks to our team</h2>\r\n<p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>\r\n<p>Now that your brand is all dressed up and ready to party, it\'s time to release it to the world. By the way, let\'s celebrate already.</p>', 'type2', 4, 53, '2023-05-15 20:42:26', '2023-05-29 08:51:04'),
(196, 'icon + text', NULL, NULL, '[{\"text\":\"Unlimited Power\",\"q\":\"Find what you need in one template and combine features at will.\",\"img\":\"iconplustext\\/196\\/1684187135_j2Dul63Jtx.png\"},{\"text\":\"Super-Light\",\"q\":\"Manage document assembly with sophisticated yet super-light templates.\",\"img\":\"iconplustext\\/196\\/1684187135_uyNMdGMUqu.png\"},{\"text\":\"Professional Design\",\"q\":\"Achieve virtually any look and layout from within the one template.\",\"img\":\"iconplustext\\/196\\/1684187135_SGdIZHKLlq.png\"}]', 'iconplustext', 5, 53, '2023-05-15 20:44:22', '2023-05-29 08:51:01'),
(197, 'Caroussel', '[\"blocks\\/197\\/1684187224_xzNMlBjbZH.jpg\",\"blocks\\/197\\/1684187234_dMgBDcbk7N.jpg\"]', NULL, NULL, 'caroussel', 4, 53, '2023-05-15 20:46:43', '2023-05-15 20:47:14'),
(198, 'faq', NULL, NULL, '[{\"text\":\"What methods of payments are supported?\",\"q\":\"You can purchase the themes on Bootstrap Themes via any major credit\\/debit card (via Stripe) or with your Paypal account. We don\'t support cryptocurrencies or invoicing at this time.\"},{\"text\":\"Can I cancel at anytime?\",\"q\":\"If you\'d like a refund please reach out to us at themes@getbootstrap.com. If you need technical help with the theme before a refund please reach out to the seller first and they can get in touch with us if they\'re unable to resolve the issue.\"},{\"text\":\"How do I get a receipt for my purchase?\",\"q\":\"You\'ll receive an email from Bootstrap themes once your purchase is complete.\"},{\"text\":\"Which license do I need?\",\"q\":\"There are three license types - Standard, Multisite, and Extended. We\'ve provided the table below for a quick look at the difference between the them, as well as a few examples of ways each license could be used. If you\'d like more of the nitty-gritty details you can find them below and always feel free to reach out with any questions you have at themes@getbootstrap.com.\"}]', 'faq', 5, 53, '2023-05-15 20:49:45', '2023-05-15 21:01:40'),
(199, 'ytb', NULL, NULL, '[{\"text\":\"What is Space?\",\"q\":\"Build for everyone and provides enjoyable usage\",\"link\":\"https:\\/\\/www.youtube.com\\/watch?v=Fv_GgcK6pZ0&pp=ygUMbGFyYXZlbCBkb2Nz\"}]', 'video', 6, 53, '2023-05-15 21:04:52', '2023-05-15 21:06:53'),
(200, 'prices', NULL, NULL, '[{\"titre\":\"Standard\",\"text\":\"99 MAD\",\"q\":\"<ul class=\\\"list-unstyled mb-4\\\">\\r\\n<li class=\\\"font-size-14 py-2\\\">Community support<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">400+ pages<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">100+ header variations<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">20+ home page options<\\/li>\\r\\n<\\/ul>\"},{\"titre\":\"Recommand\\u00e9\",\"text\":\"179 MAD\",\"q\":\"<ul class=\\\"list-unstyled mb-4\\\">\\r\\n<li class=\\\"font-size-14 py-2\\\">Community support<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">400+ pages<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">100+ header variations<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">20+ home page options<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">Priority Support<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">More features<\\/li>\\r\\n<\\/ul>\"},{\"titre\":\"VIP\",\"text\":\"399 MAD\",\"q\":\"<ul class=\\\"list-unstyled mb-4\\\">\\r\\n<li class=\\\"font-size-14 py-2\\\">ALL THE PREVIOUS FEAUTURES<\\/li>\\r\\n<li class=\\\"font-size-14 py-2\\\">VIP SUPPORT ONE TO ONE<\\/li>\\r\\n<\\/ul>\"}]', 'pack', 7, 53, '2023-05-15 21:07:35', '2023-05-15 21:12:33'),
(201, 'worked with', '[\"trusticons\\/201\\/1684188808_HrNqEwMACA.png\",\"trusticons\\/201\\/1684188808_eoSzkMdiGZ.png\",\"trusticons\\/201\\/1684188808_NX0SoLinZn.png\",\"trusticons\\/201\\/1684188808_3Fs2G7YuXy.png\",\"trusticons\\/201\\/1684188809_TzpWj0clv9.png\",\"trusticons\\/201\\/1684188809_GrlT5WsH7U.png\"]', NULL, 'Trusted by the world\'s best companies', 'trust', 8, 53, '2023-05-15 21:12:56', '2023-05-15 21:13:29'),
(202, 'reviews', NULL, NULL, '[{\"text\":\"I love Space! I love the ease of use, I love the fact that I have total creative freedom. The template is really nice and offers quite a large set of options. It\'s beautiful and the coding is done quickly and seamlessly.\",\"q\":\"Maria Muzynska\",\"img\":\"reviews\\/202\\/1684188997_763FCEb1cI.jpg\"},{\"text\":\"We are incredibly impressed with Space and how well it supports its customers with amazing products and services. One simple subscription gives you access to all our tools, plus so much more.\",\"q\":\"Mark McManus\",\"img\":\"reviews\\/202\\/1684188997_9zoJNE11vu.jpg\"},{\"text\":\"One simple subscription gives you access to all our tools, plus so much more. Space brings so many benefits to any team that does anything following a process.\",\"q\":\"Alex Pottorf\",\"img\":\"reviews\\/202\\/1684188997_sWziNohukQ.jpg\"}]', 'reviews', 9, 53, '2023-05-15 21:13:44', '2023-05-22 19:58:03'),
(203, 'form', NULL, NULL, '[{\"headline\":\"Are You Interested\",\"button\":\"Contact Us Now\"}]', 'form', 10, 53, '2023-05-15 21:18:18', '2023-05-15 21:18:43'),
(207, 'nav', NULL, NULL, '[{\"header1\":\"A proposs\",\"header2\":\"Pages\",\"header3\":\"Blog\",\"header4\":\"Docs\",\"idheader1\":\"231\",\"idheader2\":\"196\",\"idheader3\":\"203\",\"idheader4\":\"232\",\"img\":\"iconplustext\\/207\\/1684747910_OjTOq0rjnH.svg\"}]', 'navbar', 1, 53, '2023-05-22 08:06:06', '2023-05-29 09:35:46'),
(211, 'iconplustext', NULL, NULL, NULL, 'iconplustext', 11, 53, '2023-05-22 13:33:55', '2023-05-22 13:33:55'),
(212, 'dzarje3 lwl', '[\"blocks\\/212\\/1684769268_pBgXas4q68.png\"]', NULL, '<p>2</p>', 'type1', 2, 52, '2023-05-22 14:23:40', '2023-05-23 08:02:59'),
(213, 'dza', '[\"blocks\\/213\\/1684769285_sJYbBfmGnd.png\"]', NULL, '<p>3</p>', 'type2', 2, 52, '2023-05-22 14:23:45', '2023-05-23 08:03:10'),
(218, 'dza', NULL, NULL, NULL, NULL, 2, NULL, '2023-05-22 15:42:34', '2023-05-22 15:42:34'),
(219, 'dza', NULL, NULL, NULL, NULL, 2, NULL, '2023-05-22 15:42:43', '2023-05-22 15:42:43'),
(220, 'dza', NULL, NULL, NULL, NULL, 2, NULL, '2023-05-22 15:43:17', '2023-05-22 15:43:17'),
(221, 'dza', NULL, NULL, NULL, NULL, 1, NULL, '2023-05-22 15:43:58', '2023-05-22 15:43:58'),
(222, 'dza', NULL, NULL, NULL, NULL, 2, NULL, '2023-05-22 15:45:34', '2023-05-22 15:45:34'),
(223, 'dza', NULL, NULL, NULL, NULL, 2, NULL, '2023-05-22 15:45:46', '2023-05-22 15:45:46'),
(224, 'dzazaeae', NULL, NULL, NULL, NULL, 3, NULL, '2023-05-22 15:45:57', '2023-05-22 15:45:57'),
(225, 'dza', NULL, NULL, NULL, NULL, 3, NULL, '2023-05-22 15:46:45', '2023-05-22 15:46:45'),
(226, 'az', NULL, NULL, '[{\"header1\":\"A propos\",\"header2\":\"Check\",\"header3\":\"C\",\"header4\":\"T\",\"idheader1\":\"213\",\"idheader2\":\"212\",\"idheader3\":\"226\",\"idheader4\":\"212\",\"img\":\"iconplustext\\/226\\/1684850637_dRuOUjZbPB.svg\"}]', 'navbar', 0, 52, '2023-05-23 08:02:36', '2023-05-23 13:03:57'),
(227, 'Te', '[\"blocks\\/227\\/1685005944_k6lHiC5PRb.png\"]', NULL, '<p>check</p>', 'type1', 0, 50, '2023-05-25 08:10:09', '2023-05-25 08:12:24'),
(228, 'cxw', NULL, NULL, '[{\"headline\":\"Interess\\u00e9?\",\"button\":\"Acheter Maintenant\"}]', 'form', 1, 50, '2023-05-25 08:11:54', '2023-05-25 08:12:39'),
(229, 'csq', '[\"blocks\\/229\\/1685009260_Oev2KfVgBb.svg\"]', NULL, '<p>qsd</p>', 'type2', 1, 9, '2023-05-25 09:07:30', '2023-05-25 09:07:40'),
(230, 'hero', NULL, NULL, '[{\"text\":\"sqccsq\",\"q\":\"csqscq\",\"img\":\"iconplustext\\/230\\/1685221200_zSV6n1DHsL.jpg\"},{\"text\":\"cssqccqs\",\"q\":\"scqcsq\",\"img\":\"iconplustext\\/230\\/1685221200_Llvw72SQQH.jpg\"},{\"text\":\"qsccscsq\",\"q\":\"scqcqs\",\"img\":\"iconplustext\\/230\\/1685221200_kQ041Nl1ea.jpg\"}]', 'hero', 1, 54, '2023-05-27 19:59:35', '2023-05-27 20:00:00'),
(231, 'hero', NULL, NULL, '[{\"text\":\"dza\",\"q\":\"dza\",\"img\":\"iconplustext\\/231\\/1685222545_tPkp9Xcazz.jpg\"},{\"text\":\"adzdaz\",\"q\":\"adzdaz\",\"img\":\"iconplustext\\/231\\/1685221685_afFnJCNd9p.jpg\"},{\"text\":\"dazadz\",\"q\":\"dazdza\",\"img\":\"iconplustext\\/231\\/1685221685_FI0xzg0LoD.jpg\"}]', 'hero', 1, 53, '2023-05-27 20:07:11', '2023-05-27 20:22:25'),
(232, 'cta', NULL, NULL, '[{\"text\":\"Hello We have this serive\",\"q\":\"Contact Us Now\",\"img\":\"iconplustext\\/232\\/1685353218_Ns2PvNaTQb.jpg\",\"idform\":\"203\"}]', 'cta', 3, 53, '2023-05-29 08:36:58', '2023-05-29 09:36:32'),
(233, 'nav', NULL, NULL, '[{\"header1\":\"sqd\",\"header2\":\"qsd\",\"header3\":\"sqd\",\"header4\":\"qsd\",\"idheader1\":\"196\",\"idheader2\":\"199\",\"idheader3\":\"233\",\"idheader4\":\"231\",\"img\":null}]', 'navbar', 12, 53, '2023-05-29 09:26:56', '2023-05-29 09:27:14'),
(234, 'fqs', NULL, NULL, '[{\"text\":\"wxcw\",\"q\":\"xwcxwc\",\"img\":\"\",\"idform\":\"231\"}]', 'cta', 13, 53, '2023-05-29 09:32:04', '2023-05-29 09:35:18'),
(235, 'zdazad', NULL, NULL, NULL, 'cta', 1, 55, '2023-05-30 10:49:25', '2023-05-30 10:49:32'),
(236, 'here', NULL, NULL, '[{\"text\":\"as\",\"q\":\"as\",\"img\":\"iconplustext\\/236\\/1685454837_xRa8kRthk4.jpg\"},{\"text\":\"asa\",\"q\":\"s\",\"img\":\"iconplustext\\/236\\/1685454837_Nol9wziLju.jpg\"},{\"text\":\"asa\",\"q\":\"as\",\"img\":\"iconplustext\\/236\\/1685454837_aPO4K9UcKB.jpg\"}]', 'hero', 4, 28, '2023-05-30 12:53:35', '2023-05-30 12:53:57');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'dzadidzdsq', 'zad', 'daz', 'zda', 'zda', 5, '2023-05-18 08:36:38', '2023-05-25 09:15:12'),
(9, 'dzadistas', 'zad', 'daz', 'zda', 'zda', 5, '2023-05-18 08:37:08', '2023-05-25 09:04:29'),
(10, 'Yassine', 'zad', 'daz', 'zda', 'zda', 2, '2023-05-18 08:37:15', '2023-05-18 08:37:15'),
(11, 'adda', 'adda', 'zaid.y.fst@uhp.ac.ma', '43242', 'DFSQ', 2, '2023-05-18 09:38:17', '2023-05-18 09:38:17'),
(12, 'addaz', 'adda', 'zaid.y.fst@uhp.ac.ma', '43242', 'CAPO', 5, '2023-05-18 09:38:22', '2023-05-25 09:12:59'),
(13, 'My Check', 'My Check', 'zaid.y.fszt@uhp.ac.ma', '0607999888', 'CAPGEMINI', 2, '2023-05-18 09:38:52', '2023-05-18 09:38:52'),
(14, 'ANa', 'ANa', 'zaid.y.fst@uhp.ac.ma', '09218491', 'KAZFKJLZA', 5, '2023-05-18 19:42:56', '2023-05-18 19:42:56'),
(15, 'sALUDASD', 'sALUDASD', 'zaid.y.fszt@uhp.ac.mac', '14123', 'dza', 4, '2023-05-25 08:13:38', '2023-05-25 08:13:38'),
(16, 'Yassine Zaid', 'Yassine Zaid', 'zaid.y.fst@uhp.ac.ma', '2930982', 'azd', 5, '2023-05-25 09:08:35', '2023-05-25 09:08:35');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pack_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `pack_id`, `user_id`, `quantity`, `price`, `total`, `ref`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 22:13:02', '2023-05-29 22:13:02'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 22:15:18', '2023-05-29 22:15:18'),
(3, 1, 52, NULL, NULL, NULL, NULL, '2023-05-29 22:18:31', '2023-05-29 22:18:31'),
(4, 1, 54, 1, NULL, '0.00', NULL, '2023-05-29 22:41:57', '2023-05-29 22:41:57'),
(5, 1, 55, 1, '90.00', '90.00', NULL, '2023-05-29 22:44:24', '2023-05-29 22:44:24'),
(6, 1, 56, 1, '90.00', '90.00', NULL, '2023-05-30 07:59:50', '2023-05-30 07:59:50'),
(7, 1, 57, 1, '90.00', '90.00', NULL, '2023-05-30 08:12:32', '2023-05-30 08:12:32'),
(8, 1, 58, 1, '90.00', '90.00', NULL, '2023-05-30 10:03:24', '2023-05-30 10:03:24'),
(9, 1, 64, 1, '90.00', '90.00', NULL, '2023-05-30 10:54:40', '2023-05-30 10:54:40'),
(10, 1, 65, 1, '90.00', '90.00', NULL, '2023-05-30 10:59:15', '2023-05-30 10:59:15'),
(11, 1, 66, 1, '90.00', '90.00', NULL, '2023-05-30 12:52:15', '2023-05-30 12:52:15'),
(12, 1, 68, 1, '90.00', '90.00', NULL, '2023-05-30 13:02:01', '2023-05-30 13:02:01'),
(13, 1, 70, 1, '90.00', '90.00', NULL, '2023-05-30 13:14:37', '2023-05-30 13:14:37'),
(14, 1, 71, 1, '90.00', '90.00', NULL, '2023-05-30 13:15:39', '2023-05-30 13:15:39'),
(15, 1, 72, 1, '90.00', '90.00', NULL, '2023-05-30 13:19:59', '2023-05-30 13:19:59'),
(16, 1, 73, 1, '90.00', '90.00', NULL, '2023-05-30 13:25:49', '2023-05-30 13:25:49'),
(17, 1, 74, 1, '90.00', '90.00', NULL, '2023-05-30 15:06:14', '2023-05-30 15:06:14'),
(18, 1, 76, 1, '90.00', '90.00', NULL, '2023-05-30 15:10:57', '2023-05-30 15:10:57'),
(19, 1, 77, 1, '90.00', '90.00', NULL, '2023-05-30 15:14:07', '2023-05-30 15:14:07'),
(20, 1, 78, 1, '90.00', '90.00', NULL, '2023-05-30 15:15:18', '2023-05-30 15:15:18'),
(21, 1, 79, 1, '90.00', '90.00', NULL, '2023-05-30 15:20:37', '2023-05-30 15:20:37'),
(22, 1, 79, 1, '90.00', '90.00', NULL, '2023-05-30 15:21:14', '2023-05-30 15:21:14'),
(23, 1, 80, 1, '90.00', '90.00', NULL, '2023-05-30 15:23:02', '2023-05-30 15:23:02'),
(24, 1, 81, 1, '90.00', '90.00', NULL, '2023-05-30 15:25:36', '2023-05-30 15:25:36');

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
-- Structure de la table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `landing_page_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` varchar(25) DEFAULT 'En cours de traitement',
  `company` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `montant` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `forms`
--

INSERT INTO `forms` (`id`, `landing_page_id`, `fullname`, `email`, `phone`, `state`, `company`, `adress`, `notes`, `montant`, `created_at`, `updated_at`) VALUES
(1, 40, 'My Check', 'zaid.y.fszt@uhp.ac.ma', '0607999888', NULL, 'CAPGEMINI', 'HADSOUALEM', 'PLEASE I WANT TO BUY 3', 0, '2023-05-11 14:40:05', '2023-05-11 14:40:05'),
(2, 40, 'Ms. Chaya Wisozk', 'zaid.yz.fst@uhp.ac.ma', '6767567', NULL, NULL, NULL, NULL, 0, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(3, 45, 'Yassine Zaid', 'zaid.y.fst@uhp.ac.ma', '2930982', NULL, 'azd', 'azd', 'dza', 0, '2023-05-12 21:41:08', '2023-05-25 09:08:22'),
(7, 50, 'yaya', 'zaid.y.fst@uhp.ac.ma', '312123', NULL, 'afz', 'zfafaa', 'fza', 0, '2023-05-13 17:11:42', '2023-05-13 17:11:42'),
(8, 40, 'dzadza', 'zaid.y.fszt@uhp.ac.mac', '21312', NULL, '2131', 'adzdza', 'azddza', 0, '2023-05-13 17:33:55', '2023-05-13 17:33:55'),
(9, 40, 'dza', 'zaid.y.fszt@uhp.ac.mac', '241', NULL, 'azd', 'zad', 'zda', 0, '2023-05-13 20:34:24', '2023-05-13 20:34:24'),
(10, 50, 'azf', 'zaid.y.fst@uhp.ac.ma', '214', NULL, 'azffa', 'fza', 'fza', 0, '2023-05-14 12:46:07', '2023-05-14 12:46:07'),
(11, 40, 'adda', 'zaid.y.fst@uhp.ac.ma', '43242', NULL, 'DFSQ', 'ffaz', 'QSF', 0, '2023-05-14 12:55:13', '2023-05-14 12:55:13'),
(12, 40, 'Yassine Zaidi', 'zaid.y.fst@uhp.ac.ma', '0643634634', NULL, 'dazzad', 'zaddz', 'adazd', 0, '2023-05-14 14:09:28', '2023-05-18 19:26:35'),
(13, 53, 'zaid.y.fst@uhp.ac.ma', 'zaid.y.fszt@uhp.ac.mac', '9201289312', NULL, 'cc', 'cc', 'cc', 0, '2023-05-16 09:48:10', '2023-05-16 09:48:10'),
(14, 53, 'ANa', 'zaid.y.fst@uhp.ac.ma', '09218491', NULL, 'KAZFKJLZA', 'test', 'ALKJDFA', 0, '2023-05-18 19:42:29', '2023-05-18 19:42:29'),
(15, 50, 'sALUDASD', 'zaid.y.fszt@uhp.ac.mac', '14123', NULL, 'dza', 'qsc', 'dza', 0, '2023-05-25 08:12:55', '2023-05-25 08:13:31'),
(16, 53, 'zaid.y.fst@uhp.ac.ma', 'zaid.y.fszt@uhp.ac.mac', '2930982', 'En cours de traitement', 'daz', 'zaddz', 'qdsds', 0, '2023-05-27 18:34:03', '2023-05-27 18:56:15'),
(17, 53, 'dza', 'zaid.y.fszt@uhp.ac.mac', '123123', 'En cours de traitement', 'zad', 'zda', 'zad', 0, '2023-05-29 13:30:16', '2023-05-29 13:30:16'),
(18, 40, 'dzazda', 'zaid.y.fszt@uhp.ac.mac', '3123123', 'En cours de traitement', 'DZA', 'zadeza', 'DZA', NULL, '2023-05-30 10:44:30', '2023-05-30 10:44:30'),
(19, 40, 'azd', 'zaid.y.fszt@uhp.ac.mac', '231', 'En cours de traitement', 'zad', 'dza', 'dza', NULL, '2023-05-30 15:01:01', '2023-05-30 15:01:01');

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
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `landingpages`
--

INSERT INTO `landingpages` (`id`, `titre`, `description`, `state`, `slug`, `visitors`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'efzfze', 'ezfzef', NULL, NULL, NULL, NULL, '2023-04-12 14:03:40', '2023-04-12 14:03:40'),
(3, 'adzdzazd', 'dzaazd', NULL, '/hello-slug', NULL, NULL, '2023-04-12 14:07:05', '2023-04-12 14:07:05'),
(4, 'fzafz', 'afzfza', 'Active', 'afzzaf', NULL, NULL, '2023-04-12 14:15:58', '2023-04-12 14:15:58'),
(5, 'dazd', 'zdazda', 'Active', 'dzazad', NULL, NULL, '2023-04-12 14:24:43', '2023-04-12 14:24:43'),
(6, 'zdazda', 'dzzad', 'Active', 'dazdza', NULL, NULL, '2023-04-12 14:24:50', '2023-04-12 14:24:50'),
(7, 'dzaadz', 'zdazdazda', 'Active', 'dzadzazda', NULL, NULL, '2023-04-12 14:26:10', '2023-04-12 14:26:10'),
(8, 'rzarza', 'rzazra', 'inactive', 'rzaarz', NULL, NULL, '2023-04-12 14:27:31', '2023-04-12 14:27:31'),
(9, 'zfazfa', 'fzafa', 'Active', 'zfafza', '8', NULL, '2023-04-12 14:27:40', '2023-05-25 09:07:49'),
(15, 'dzazddza', 'dzazdazadzd', 'Active', 'zdadzazad', '1', NULL, '2023-04-12 14:34:41', '2023-05-25 09:06:40'),
(20, 'dazdzadz', 'zadzddzazd', 'Active', 'zdazdazdazd', NULL, NULL, '2023-04-13 10:13:46', '2023-04-13 10:13:46'),
(22, 'souris', 'cette land', 'Inactive', '/souris-test', NULL, NULL, '2023-04-13 12:49:58', '2023-04-13 12:50:14'),
(23, 'adzdza', 'dzadza', 'Active', 'dzadz', NULL, NULL, '2023-04-13 14:04:38', '2023-04-13 14:04:38'),
(24, 'Calculatrice', 'landnig page pour ma calulatrice', 'Active', '/calcul', '2', NULL, '2023-04-14 17:36:00', '2023-05-12 21:07:38'),
(25, 'segzze', 'gezgzezeg', 'Active', '/reh', NULL, NULL, '2023-04-16 14:20:25', '2023-04-16 14:20:25'),
(26, 'ezfze', 'ezffez', 'Active', 'ezffze', NULL, NULL, '2023-04-16 17:45:59', '2023-04-16 17:45:59'),
(28, 'NewlyNew', 'ABTESTINGa', 'Active', 'ABTESTING', '21', 2, '2023-04-19 11:12:19', '2023-05-30 12:54:20'),
(29, 'PCC', 'PCC', 'Active', 'PCC', NULL, NULL, '2023-04-20 09:51:28', '2023-04-20 09:51:28'),
(30, 'test', 'tetet', 'Inactive', 'etet', NULL, NULL, '2023-04-20 10:08:12', '2023-04-20 10:08:12'),
(31, 'adzzazdda', 'tezez', 'Active', 'tezet', NULL, NULL, '2023-04-20 14:11:53', '2023-04-20 14:11:53'),
(32, 'new test', 'testing', 'Active', 'slugging', NULL, NULL, '2023-04-20 14:46:48', '2023-04-27 10:17:51'),
(34, 'Hello', 'Wach', 'Active', 'slugging', NULL, NULL, '2023-04-25 07:56:56', '2023-04-25 07:56:56'),
(36, 'wwwwww', 'www', 'Active', 'wwww', NULL, NULL, '2023-04-27 10:43:30', '2023-04-27 10:43:30'),
(37, 'fzefeefzfezefz', 'efzefzefefz', 'Active', 'efzefzfezezff', NULL, NULL, '2023-04-27 12:52:35', '2023-04-27 12:52:35'),
(38, 'gre', 'gegrgeg', 'Active', 'gre', NULL, NULL, '2023-04-27 12:56:29', '2023-04-27 12:56:29'),
(39, 'Holla', 'testing faq', 'Active', 'faqs', NULL, NULL, '2023-05-01 20:09:00', '2023-05-01 20:09:00'),
(40, 'PreviewTest', 'PreviewTestcheck', 'Active', 'PreviewTest', '42', 2, '2023-05-02 11:16:56', '2023-05-30 15:00:52'),
(41, 'Calculatrice', 'cet Calculatrice .....', 'Active', '/test', '1', NULL, '2023-05-08 08:03:48', '2023-05-12 21:15:22'),
(42, 'Calc', 'Check', 'Active', '/slugging', NULL, NULL, '2023-05-12 21:12:02', '2023-05-12 21:12:02'),
(43, 'cal', 'check', 'Active', 'czak', NULL, NULL, '2023-05-12 21:14:03', '2023-05-12 21:14:03'),
(44, 'New Product', 'Checkign', 'Active', '/checking', '7', NULL, '2023-05-12 21:15:45', '2023-05-12 21:21:19'),
(45, 'dzadaz', 'dazdza', 'Active', 'zad', '5', NULL, '2023-05-12 21:40:39', '2023-05-12 21:43:55'),
(46, 'adzdza', 'dazdaz', 'Active', 'dzazda', NULL, NULL, '2023-05-13 13:11:35', '2023-05-13 13:11:35'),
(47, 'dzazda', 'zadzadzdzdadza111', 'Active', 'check', NULL, NULL, '2023-05-13 13:18:10', '2023-05-13 13:18:10'),
(48, 'dza', 'zdadza', 'Active', 'dza', NULL, NULL, '2023-05-13 13:24:37', '2023-05-13 13:24:37'),
(49, 'dzadza', 'adzdza', 'Active', 'dzadzadzadz', '4', 2, '2023-05-13 13:28:48', '2023-05-13 16:51:59'),
(50, 'Salam', 'Texture', 'Active', '/texture', '16', 4, '2023-05-13 17:10:40', '2023-05-25 08:13:01'),
(51, 'PC', 'PC', 'Active', '/PC', '2', 2, '2023-05-14 14:06:09', '2023-05-23 13:03:15'),
(52, 'zd', 'zad', 'Active', 'zad', '11', 5, '2023-05-15 08:15:02', '2023-05-23 14:29:31'),
(53, 'Service', 'The Page that is offering our services', 'Active', 'services', '184', 5, '2023-05-15 15:32:37', '2023-05-29 19:09:03'),
(54, 'fz', 'zf', 'Active', 'fz', '13', 5, '2023-05-27 19:59:26', '2023-05-29 13:28:53'),
(55, 'zad', 'zaddz', 'Active', 'azddza', '4', 5, '2023-05-29 13:47:43', '2023-05-29 14:19:00'),
(56, 'dadazd', 'zadazd', 'Active', 'zadazd', '5', 2, '2023-05-30 11:25:09', '2023-05-30 14:55:59'),
(57, 'test', 'test', 'Active', 'test', NULL, 2, '2023-05-30 15:06:33', '2023-05-30 15:06:33'),
(58, 'allo', 'allo', 'Active', 'allo', NULL, 2, '2023-05-30 15:06:52', '2023-05-30 15:06:52'),
(59, 'zaddz', 'zaddz', 'Active', 'zaddz', NULL, 5, '2023-05-30 15:07:23', '2023-05-30 15:07:23'),
(60, 'dazad', 'dzadaz', 'Active', 'dzadazd', NULL, 57, '2023-05-30 15:08:36', '2023-05-30 15:08:36'),
(61, 'zadzdazdazd', 'azdazdazd', 'Active', 'azdzadazd', NULL, 74, '2023-05-30 15:10:15', '2023-05-30 15:10:15'),
(62, 'zadazd', 'zadazdzadazd', 'Active', 'zadazdzadazdzadazd', NULL, 74, '2023-05-30 15:11:14', '2023-05-30 15:11:14'),
(63, 'zadazdaz', 'dzadazd', 'Active', 'azdazdazd', NULL, 76, '2023-05-30 15:11:37', '2023-05-30 15:11:37'),
(64, 'dsqdqs', 'dqsdqsd', 'Inactive', 'qsd', '1', 78, '2023-05-30 15:18:34', '2023-05-30 15:18:43'),
(65, 'zadazd', 'azdzadaz', 'Active', 'dazdazd', NULL, 78, '2023-05-30 15:23:11', '2023-05-30 15:23:11'),
(66, 'azdzadaz', 'dazdadza', 'Active', 'zadazdad', NULL, 78, '2023-05-30 15:23:34', '2023-05-30 15:23:34'),
(67, 'dzaaaaaaaaaaa', 'dzaaaaaaaaaaa', 'Active', 'dzaaaaaaaaaaa', NULL, 78, '2023-05-30 15:23:45', '2023-05-30 15:23:45'),
(68, 'qsdqsd', 'qsdqsd', 'Active', 'qsdqsd', NULL, 81, '2023-05-30 15:25:51', '2023-05-30 15:25:51');

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
(8, 2, 'dzadzdazdaz', '2023-05-13 12:23:29', '2023-05-13 12:23:29'),
(12, 2, 'zdaadz', '2023-05-14 20:04:54', '2023-05-14 20:04:54'),
(13, 4, 'wech ele blem?', '2023-05-14 20:11:16', '2023-05-14 20:11:16'),
(14, 4, 'wech ele blem?', '2023-05-14 20:12:37', '2023-05-14 20:12:37'),
(15, 4, 'wech ele blem?', '2023-05-14 20:12:48', '2023-05-14 20:12:48'),
(16, 4, 'wech ele blem?', '2023-05-14 20:13:02', '2023-05-14 20:13:02'),
(17, 4, 'wech ele blem?', '2023-05-14 20:13:07', '2023-05-14 20:13:07'),
(18, 4, 'wech ele blem?', '2023-05-14 20:13:27', '2023-05-14 20:13:27'),
(19, 4, 'wech ele blem?', '2023-05-14 20:14:47', '2023-05-14 20:14:47'),
(20, 4, 'wech ele blem?', '2023-05-14 20:16:21', '2023-05-14 20:16:21'),
(21, 4, 'wech ele blem?', '2023-05-14 20:16:42', '2023-05-14 20:16:42'),
(22, 4, 'wech ele blem?', '2023-05-14 20:17:58', '2023-05-14 20:17:58'),
(23, 4, 'wech ele blem?', '2023-05-14 20:18:18', '2023-05-14 20:18:18'),
(24, 4, 'wech ele blem?', '2023-05-14 20:18:26', '2023-05-14 20:18:26'),
(25, 4, 'wech ele blem?', '2023-05-14 20:18:33', '2023-05-14 20:18:33'),
(26, 2, 'dqsdqs', '2023-05-14 20:27:08', '2023-05-14 20:27:08'),
(27, 2, 'dqsdqs', '2023-05-14 20:27:12', '2023-05-14 20:27:12'),
(28, 2, 'hola', '2023-05-14 20:27:24', '2023-05-14 20:27:24'),
(29, 2, 'hola', '2023-05-14 20:27:26', '2023-05-14 20:27:26'),
(30, 2, 'ok', '2023-05-14 20:28:22', '2023-05-14 20:28:22'),
(31, 2, 'ok', '2023-05-14 20:28:32', '2023-05-14 20:28:32'),
(32, 2, 'http://127.0.0.1:8000/support/ajouter', '2023-05-14 20:28:54', '2023-05-14 20:28:54'),
(33, 2, 'http://127.0.0.1:8000/support/ajouter', '2023-05-14 20:29:29', '2023-05-14 20:29:29'),
(34, 2, 'http://127.0.0.1:8000/support/ajouter', '2023-05-14 20:30:42', '2023-05-14 20:30:42'),
(35, 2, 'hola', '2023-05-14 20:30:48', '2023-05-14 20:30:48'),
(37, 5, 'gj', '2023-05-25 09:41:40', '2023-05-25 09:41:40'),
(38, 81, 'hello', '2023-05-30 15:26:01', '2023-05-30 15:26:01');

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
(74, '2023_05_13_130350_create_messages_table', 20),
(75, '2023_05_13_220042_add_soft_deletes_to_users_table', 21),
(76, '2023_05_16_112943_create_table_name', 22),
(77, '2023_05_16_131602_create_table_name', 23),
(78, '2023_05_29_163508_create_user_packs_table', 24),
(79, '2023_05_29_184539_create_packs_table', 25),
(80, '2023_05_29_185034_create_user_packs_table', 26),
(81, '2023_05_29_185203_create_user_packs_table', 27),
(82, '2023_05_29_185251_create_user_packs_table', 28),
(83, '2023_05_29_190202_create_commandes_table', 29),
(84, '2023_05_29_223630_create_user_pack_table', 30),
(86, '2023_05_29_225159_create_user_packing_table', 31);

-- --------------------------------------------------------

--
-- Structure de la table `packs`
--

CREATE TABLE `packs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `packs`
--

INSERT INTO `packs` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Basique', 90.00, NULL, NULL),
(2, 'Premium', 190.00, NULL, NULL),
(3, 'Avancé', 300.00, NULL, NULL);

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
  `role` varchar(199) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dzzad', 'aeze', 'zeazae', 'zaid.y.fst@uhp.ac.ma', NULL, '$2y$10$RIOEtIQt4a4zS.BTkJiU1eo5CyxXQESWcXm07oOXNHBfQQRBURI3S', '0', NULL, '2023-04-12 14:00:14', '2023-05-13 21:08:27', '2023-05-13 21:08:27'),
(2, 'Jack', 'Jack', 'dzaazd', 'zaid.y.fszt@uhp.ac.mac', NULL, '$2y$10$FwrIhBgwq7NI8eecVBExZuNy9Ir.YhLUspoHGZL4JjORrBvJZ.i6q', '0', NULL, '2023-04-13 12:22:49', '2023-04-13 12:22:49', NULL),
(3, 'administos', 'dzadza', 'dza', 'zaid.y.fszt@uhp.ac.ma', NULL, '$2y$10$4V8Dil8b2szCzKYNRabUHuCeMxQtyG7EL0s72UjizdlZvldV27PPy', '0', NULL, '2023-05-12 10:20:28', '2023-05-12 10:20:28', NULL),
(4, 'yasseneze', 'Zed', 'Yaya', 'yassinezaid668@gmail.com', NULL, '$2y$10$CArJIfUWSByeHT.L75.CR.zluyL.vorWN5/LEBrQIgJT3jJhWA60C', '0', NULL, '2023-05-13 17:10:05', '2023-05-13 17:10:05', NULL),
(5, 'admin', 'adminos', 'admin', 'admin@admin.com', '2023-05-13 21:10:47', '$2y$10$WkFZrdqW8N07d6sMHDvb9O0KusJUJ37mwOCfMLK9NVbUatz5X9Vqe', 'admin', NULL, '2023-05-13 20:10:17', '2023-05-15 11:19:55', NULL),
(6, 'testify', 'Checking', 'Chekos', 'testify@admin.com', NULL, '$2y$10$ANyy8M11Yxp5Ye9iHgvwguicvpSRuDh0Qct676uRH76JA9p841ajW', NULL, NULL, '2023-05-14 12:52:16', '2023-05-14 12:52:16', NULL),
(7, 'stipr', 'Stripr', 'Admin', 'stripe@stripe.com', NULL, '$2y$10$89RZRM07Iy3eVJM/lQrM.enDVoWOwULW1mcR3bKtBY41AWEpPgTUy', NULL, NULL, '2023-05-29 19:13:44', '2023-05-29 19:13:44', NULL),
(8, 'Striping', 'Striping', 'Admin', 'stripee@stripe.com', NULL, '$2y$10$KH50tWYzVDgGBetuTNHfFuVZiG40cngnfBOo79M2HKPZPOrJIpcBe', NULL, NULL, '2023-05-29 19:17:04', '2023-05-29 19:17:04', NULL),
(9, 'Stripings', 'Striping', 'Admin', 'stripee@stripe.comm', NULL, '$2y$10$neNMpSbewjye3cHTwvmy/uQKT6srbBwfP4oeLroYr0sns0Kxb.4fi', NULL, NULL, '2023-05-29 19:19:36', '2023-05-29 19:19:36', NULL),
(10, 'zdazdazdazda', 'administas', 'administas', 'zaid.y.fszt@uhp.ac.maq', NULL, '$2y$10$xTD6l.Sb6b0R.QcYFmM3O.f1UyPqCNKAJtYFJLSCaWVQBRGQCD11a', NULL, NULL, '2023-05-29 19:26:21', '2023-05-29 19:26:21', NULL),
(11, 'dzazda', 'zdazda', 'zdazda', 'zaid.y.fszt@uhp.ac.mazz', NULL, '$2y$10$a.ox91h7sdZjI74RcXeYAeUMe0mt6um1xPDe0z8RYDBaL0S3cIlUW', NULL, NULL, '2023-05-29 19:32:29', '2023-05-29 19:32:29', NULL),
(12, 'dzazdasd', 'zdazda', 'zdazda', 'zaid.y.fszt@duhp.ac.mazz', NULL, '$2y$10$n7wDDQypEzpCoZNsmtzrU.9Z2HUKHk5J4rIlbPDBrPtD2SsJJoaTq', NULL, NULL, '2023-05-29 19:42:46', '2023-05-29 19:42:46', NULL),
(13, 'ZAZADAZDAZ', 'administas', 'zeazaeD', 'adzdmin@admin.com', NULL, '$2y$10$va5S3MbOnl9r.4CXO8/PL.USRlFSrc2p.LEE5HrqG8Y01yXkCsGzW', NULL, NULL, '2023-05-29 20:02:32', '2023-05-29 20:02:32', NULL),
(14, 'ZAZADAZDAZzd', 'administas', 'zeazaeD', 'adzdmin@admin.comqsq', NULL, '$2y$10$XCZ5jkdxXQS60XczbVbdku3vuFRSJRNnGbBP1/A8vIYSB0GKCL7WK', NULL, NULL, '2023-05-29 20:03:53', '2023-05-29 20:03:53', NULL),
(15, 'azdazd', 'zdadazd', 'azdazd', 'admin@admizzzn.com', NULL, '$2y$10$G5OH7hk5optHValLR0Proef8721HoNopgxMZ1ZhyszVwQq94QG7Sa', NULL, NULL, '2023-05-29 20:09:24', '2023-05-29 20:09:24', NULL),
(16, 'azdazdazdzda', 'zdadazdzd', 'azdazdazd', 'admin@adzadadmizzzn.com', NULL, '$2y$10$s1UgsNmN00/AUsFFFASfVuBKUNaarofwuso0HJUHfhtNDGViOlNIG', NULL, NULL, '2023-05-29 20:09:55', '2023-05-29 20:09:55', NULL),
(17, 'zaddzad', 'azdzad', 'zaddzazd', 'adzdzadmin@admin.comqsq', NULL, '$2y$10$QaU6lj7nSpGBC01B3Oi2xuurZF0igKBp61mlhKsS2YTkKXViFnNPe', NULL, NULL, '2023-05-29 20:11:48', '2023-05-29 20:11:48', NULL),
(18, 'ZAZADAZDAZdaz', 'administasdazazd', 'zeazaeDzadazd', 'adzdmin@admzazdin.com', NULL, '$2y$10$H7Jk4/LVR200EzhYJy5/ROaN76rS9nt7ukhwliMSsLgL64eyHNrYW', NULL, NULL, '2023-05-29 20:23:31', '2023-05-29 20:23:31', NULL),
(19, 'ZAZADAZDAZdazzda', 'administasdazazd', 'zeazaeDzadazdzad', 'adzdmin@admzazdin.comzad', NULL, '$2y$10$oqT6PxBA0YZVzkNen4mS/OiF.3MUexS/VM.V4Pn8ZwRYloSM7lzz.', NULL, NULL, '2023-05-29 20:25:16', '2023-05-29 20:25:16', NULL),
(20, 'administass', 'administas', 'administas', 'zaid.y.fsszt@uhp.ac.mac', NULL, '$2y$10$16rAx2LapWuZAXdKvq0twOrstrJRbNlwy/4bbZoa3NiQ8QscntfH.', NULL, NULL, '2023-05-29 20:25:59', '2023-05-29 20:25:59', NULL),
(21, 'zadazdazd', 'zdadzaadz', 'dzadad', 'zaid.y.fst@uhp.ac.mazda', NULL, '$2y$10$BnKAaQ3X2vRdUrl3TKDuIOdrKvExX8XjIREpI32GHNGuHGoUfcHfS', NULL, NULL, '2023-05-29 20:36:51', '2023-05-29 20:36:51', NULL),
(22, 'azdazdzdaazd', 'dazdazaz', 'dazdazd', 'yassiazdaznezaid668@gmail.com', NULL, '$2y$10$ufNsr.hIauvCkfBjL7ueRezxKHiuQGRB3IrD87s4/WpqWAVz/ICbG', NULL, NULL, '2023-05-29 20:37:32', '2023-05-29 20:37:32', NULL),
(23, 'azdazdzdaazdazdazd', 'dazdazazzadazd', 'dazdazdazdazd', 'yassiazdaznezqsdaid668@gmail.com', NULL, '$2y$10$hFp9l/OMBUY/qy47fBu8UuDh3UuWNffiy4N7y4ixofbTYSUKOh0ZC', NULL, NULL, '2023-05-29 20:39:19', '2023-05-29 20:39:19', NULL),
(24, 'azdazdzdaazdazdazdzadazd', 'dazdazazzadazd', 'dazdazdazdazd', 'yassiazdaznezqsdzadazdaid668@gmail.com', NULL, '$2y$10$wdqBJN/lQjcjbQdm1qclOuCP/2YVDiTmb4vQdnSrCWXQ0KRjpBF0K', NULL, NULL, '2023-05-29 20:41:51', '2023-05-29 20:41:51', NULL),
(25, 'dazdazdazdza', 'zadazd', 'azdazdazd', 'zaid.y.azdazdfst@uhp.ac.maz', NULL, '$2y$10$y6wXi3p4B5ll0E7MrmYlBefktveoleMzcGXZ1pCfuqFy08LMROm66', NULL, NULL, '2023-05-29 20:45:25', '2023-05-29 20:45:25', NULL),
(26, 'zadazdazdazdazd', 'azdazdazd', 'azdazdazd', 'zasqdqsid.y.fst@uhp.ac.ma', NULL, '$2y$10$BxN8An93sOarys8gh7fUMe/at3vFwJdrYBvCNWGOHk3.cSrka0bOe', NULL, NULL, '2023-05-29 20:47:59', '2023-05-29 20:47:59', NULL),
(27, 'azdazdadazd', 'zdazdazd', 'azdazdazd', 'yassinezaiqscsqd668@gmail.com', NULL, '$2y$10$puAK2gFIZV1VSgj4CCWz9eT6RD2NbHVXaD3Is1Om8pXwPJNJUTrAq', NULL, NULL, '2023-05-29 21:01:36', '2023-05-29 21:01:36', NULL),
(28, 'qcsqscqscqscqs', 'qscqscqsc', 'qscqscqsc', 'adqscqsmin@aqscqsdmin.com', NULL, '$2y$10$uZ1lyCp7FZL8OVB14WOC0OFPGwv1HQeK76ZPwnAV8MsxLuu83ZB/W', NULL, NULL, '2023-05-29 21:03:33', '2023-05-29 21:03:33', NULL),
(29, 'adminossqdqsdqsd', 'dsqqsdqsdqsd', 'qsdqsdqsdqsd', 'zaid.y.fszt@QSqsuhp.ac.ma', NULL, '$2y$10$sdX.RPi/DGblKaKQ0R2pLeaxnu2gicv4lSf3CEaGzLKguYvT0/QZS', NULL, NULL, '2023-05-29 21:04:03', '2023-05-29 21:04:03', NULL),
(30, 'adminossqdqsdqsdzdaazd', 'dsqqsdqsdqsdazdad', 'qsdqsdqsdqsdazdazd', 'zaid.y.fszt@QSqsuhp.ac.mazazaeae', NULL, '$2y$10$UMWtbcKvZbGD/3r9jAg9zO7CnqzJmUlBVXlZqs5LoLAJk9B2wqxG2', NULL, NULL, '2023-05-29 21:08:16', '2023-05-29 21:08:16', NULL),
(31, 'azdazdazdazd', 'azdazdazdazd', 'dzadazdazdad', 'yassinezaidqsqsd668@gmail.com', NULL, '$2y$10$g6xvZ6Xcs050J0FFcTP1n.U.Ucnppfmb0Mx5YpQAPe25MPM0VHbQq', NULL, NULL, '2023-05-29 21:10:14', '2023-05-29 21:10:14', NULL),
(32, 'azdazdazdazdazd', 'azdazdazdazdzad', 'dzadazdazdadzad', 'yassinezaidqsqsd6azd68@gmail.com', NULL, '$2y$10$rfc4w5RRnQCba2y.VGMgZuSHW/qDYspnZGmCweyBUsLsSbIYjGslW', NULL, NULL, '2023-05-29 21:11:46', '2023-05-29 21:11:46', NULL),
(33, 'azdazdazdazdazdzadza', 'azdazdazdazdzadazdaz', 'dzadazdazdadzadzad', 'yassinezaidqsqsddzad6azd68@gmail.com', NULL, '$2y$10$.jag/669UHOWHdNzvrpUw.KBncNpeZ1IZXASAxNLQdoScQus2NIMa', NULL, NULL, '2023-05-29 21:13:36', '2023-05-29 21:13:36', NULL),
(34, 'azdazdazd', 'zadazda', 'dazdazd', 'azdazdazd.y.fszt@uhp.ac.mac', NULL, '$2y$10$PV2B6YdudwBpb5x5ggM0Ve1715CGbDllee4CDxzthpWx6bXZj7/0W', NULL, NULL, '2023-05-29 21:14:13', '2023-05-29 21:14:13', NULL),
(35, 'azdazdazddazdazd', 'zadazdazadd', 'dazdazddzadza', 'azdazdazd.y.fszt@uhp.ac.maazdc', NULL, '$2y$10$znrlYH/HJ2nA0ae5dr0cSO27eZ1v2Bg.Oc61Fber5kRVXTzZ6BNRm', NULL, NULL, '2023-05-29 21:15:06', '2023-05-29 21:15:06', NULL),
(36, 'azdazdazzadazd', 'zadazdazadazd', 'dazdazddazdza', 'azdazzaddazd.y.fszt@uhp.ac.mac', NULL, '$2y$10$z.aPt/OPDde0EapId1xTte2DPt.4a7SDinSvVRAO0JsQpWqGGndJ.', NULL, NULL, '2023-05-29 21:16:51', '2023-05-29 21:16:51', NULL),
(37, 'azdazdzda', 'dazazda', 'zdazd', 'zaid.y.fsqdszt@uhp.ac.mac', NULL, '$2y$10$bayU2O2McQ.0zUTueLHK6uACjBpPA9RICGLTec1XjZMXj0uvvT5Iu', NULL, NULL, '2023-05-29 21:17:19', '2023-05-29 21:17:19', NULL),
(38, 'azdazdzdaza', 'dazazda', 'zdazd', 'zaid.y.fsqdszt@uhp.ac.macazd', NULL, '$2y$10$NQzhhKT4ER1kj.5d8K9I9eRRcJalWQpgWThGAi461SwO0on3Xfr3.', NULL, NULL, '2023-05-29 21:17:53', '2023-05-29 21:17:53', NULL),
(39, 'azdazdzdazadz', 'dazazdaazdazd', 'zdazd', 'zaid.y.fsqdszt@uhp.ac.macazdzad', NULL, '$2y$10$QFIKX49pQmiFTxFqqbg6suliaYxhX6ExsxGxSWOPx3wnyNRfLCNwm', NULL, NULL, '2023-05-29 21:18:41', '2023-05-29 21:18:41', NULL),
(40, 'azdazdzdazadsqdsqdz', 'dazazdaazdazd', 'zdazd', 'zaid.y.fsqdszt@uhp.aqsc.macazdzad', NULL, '$2y$10$cgmYkr7hezm14WnXFVZtVurXyY9rp0F9cI4zv/9hIKI2aluR9Q.J2', NULL, NULL, '2023-05-29 21:19:22', '2023-05-29 21:19:22', NULL),
(41, 'zad', 'dza', 'adz', 'zaizadd.y.fszt@uhp.ac.mac', NULL, '$2y$10$Ysb2fdGmqBgJd6W85MI2lug4/re/PcM3zem3lw5QV.YQR1HbsjLua', NULL, NULL, '2023-05-29 21:23:43', '2023-05-29 21:23:43', NULL),
(42, 'zaddzadaz', 'dza', 'adz', 'zaizasdd.y.fszt@uhp.ac.macazdza', NULL, '$2y$10$Uz9tKSP5oVZYyTOsWCgGauQnjR6CbNZ3eXDKE2Bfiid9epEDUFz26', NULL, NULL, '2023-05-29 21:23:59', '2023-05-29 21:23:59', NULL),
(43, 'zaddzadzadaz', 'dzazad', 'adz', 'zaizadzasdd.y.fszt@uhp.ac.macazdza', NULL, '$2y$10$wGxZiWZq2T.L2wtAs/aau.EwQs1.cqWSRJjM..fBrJ3G6NSUDt3MW', NULL, NULL, '2023-05-29 21:24:12', '2023-05-29 21:24:12', NULL),
(44, 'zaddzadzdazadaz', 'dzazad', 'adzazd', 'zaddzadzdazadaz.y.fszt@uhp.ac.macazdza', NULL, '$2y$10$QAKuWPSV8D4umdYoscKF9.2FpcCetcblCTw3q.s0NKBUaALbku5vm', NULL, NULL, '2023-05-29 21:24:54', '2023-05-29 21:24:54', NULL),
(45, 'aezeaeze', 'aeze', 'aeze', 'zaid.y.fsztc@uhp.ac.mac', NULL, '$2y$10$Qt08cSW.zfLnfEHdAbfbMuJ7janESdh9uEnGaWkYWjvln4cwRvbae', NULL, NULL, '2023-05-29 21:32:51', '2023-05-29 21:32:51', NULL),
(46, 'azdazdazadazzd', 'dazadazd', 'azdadzazd', 'zaid.y.fssqdqdt@uhp.ac.ma', NULL, '$2y$10$qL7HeQqThlrrqRjII.v5Le5n7nPynLGeuvkuaEzjE0uZ8oNY3L63e', NULL, NULL, '2023-05-29 21:43:48', '2023-05-29 21:43:48', NULL),
(47, 'azdazdzadaazd', 'azdazdazd', 'azdazdazd', 'azdazdzadaazd@gmail.com', NULL, '$2y$10$.7CkpZtqjQN2A75Yu3as8ubOeEw.VyBKIJEfB864q/Zzkrq0/o9l.', NULL, NULL, '2023-05-29 21:53:11', '2023-05-29 21:53:11', NULL),
(48, 'azdazdazdsqdqs', 'azdazda', 'zdazdazd', 'zaid.y.azdazdazdsqdqs@uhp.ac.mac', NULL, '$2y$10$thbujtu2WOuaT1XrilK/y.Iy4KlVSxIR.ETSdeIO.uyF5B/CbnzsO', NULL, NULL, '2023-05-29 21:59:20', '2023-05-29 21:59:20', NULL),
(49, 'azdazdzadazdsqdqs', 'azdazdaadz', 'zdazdazd', 'zaid.y.azdazdzadazdsqdqs@uhp.ac.mac', NULL, '$2y$10$GQbEVLJnsHSFXFUIViaqZe03s1u.E8m2nPTrIjnTPWUZ/IL6gND02', NULL, NULL, '2023-05-29 22:04:12', '2023-05-29 22:04:12', NULL),
(50, 'zdazdzadazd', 'azdazdaazdaz', 'zdazdzadazd', 'zdazdzadazd.y.fszsqdqst@uhp.ac.mac', NULL, '$2y$10$VLfpoeE/tlCos0WLpZ9M4uHEXSHCug3HA5KtXoR7HqpRNGM7/kx2i', NULL, NULL, '2023-05-29 22:11:44', '2023-05-29 22:11:44', NULL),
(51, 'azdazdaazdazAZD', 'azdazdaazdazAZD', 'azdazdaazdazAZD', 'azdazdaazdazAZD.y.fszsqdqst@uhp.ac.mac', NULL, '$2y$10$rZTaihdWdOP8vsG7oWlodOQhFqrz5/H0zcTbslCvzg/HdLVWgAine', NULL, NULL, '2023-05-29 22:13:37', '2023-05-29 22:13:37', NULL),
(52, 'zeazaezeazae', 'administas', 'zeazae', 'zaid.sddy.fszt@uhp.ac.mac', NULL, '$2y$10$tZJ5.MvLDqiibHe1gdQwb.JZhfbXRRK5stN6Fl2Usx1Tr5WtuP5HC', NULL, NULL, '2023-05-29 22:17:21', '2023-05-29 22:17:21', NULL),
(53, 'administas', 'administas', 'administas', 'administas@administas.com', NULL, '$2y$10$q.gpSCWDXsr2UMQIimrSheCX4PjA4W9hU70QPrzMPnklC5UUkksju', NULL, NULL, '2023-05-29 22:39:33', '2023-05-29 22:39:33', NULL),
(54, 'admini', 'administas', 'administas', 'admini@admini.com', NULL, '$2y$10$uG29/R5jJEg9B2rFqA3zyOqMY.ZNHBAZMaPvxigINkDSYZ3fCjs8W', NULL, NULL, '2023-05-29 22:40:12', '2023-05-29 22:40:12', NULL),
(55, 'admzdainistas', 'administas', 'administas', 'admsinistas@administas.com', NULL, '$2y$10$7MYupRvqRvIJKnQJhiJFM.U/so30c.9MWqVyXWO5z8Bwef9.zVeDu', NULL, NULL, '2023-05-29 22:42:42', '2023-05-29 22:42:42', NULL),
(56, 'qdssqdqsdsqdq', 'administasdsqdqs', 'qdssqdqsdsqdq', 'qdssqdqsdsqdq.y.fszt@uhp.ac.mac', NULL, '$2y$10$9MOYF/GsVV/tU3ec.SEaletExmSInMyHswtOLRXhw9jUqk32oadUa', NULL, NULL, '2023-05-30 07:59:30', '2023-05-30 07:59:30', NULL),
(57, 'yassinos', 'yassinos', 'yassinos', 'yassinos@yassinos.com', NULL, '$2y$10$ixo7OI31aRbx9qxuuncooO8xF8Sp.3Ypg1JwhUuhS338JAd.0V.vC', NULL, NULL, '2023-05-30 08:12:16', '2023-05-30 08:12:16', NULL),
(58, 'administasqb', 'administas', 'administas', 'admfqinistas@administas.com', NULL, '$2y$10$vOiQcdI9Ra4OpfUCDnT96.S6DYlVtZSByttbHZbkqS1YClimYObvi', NULL, NULL, '2023-05-30 10:02:51', '2023-05-30 10:02:51', NULL),
(59, 'rfrfrfrgthyun', 'administas', 'sdfsd', 'dddd.y.fst@uhp.ac.ma', NULL, '$2y$10$Pg4SffcI0eIu6HrhE5d3Fe2Z0k.hCW2oDBGQ6WOmv.8Lmr5wly1we', NULL, NULL, '2023-05-30 10:10:42', '2023-05-30 10:10:42', NULL),
(60, '3DFsdf23', 'administas', 'azdazdazd', 'zaid.y.dsf@uhp.ac.mac', NULL, '$2y$10$tRsT.b95Uf.GZRmeM0eHH.taojuogokbAdf5IVM/juwuyfbyxpM2C', NULL, NULL, '2023-05-30 10:13:09', '2023-05-30 10:13:09', NULL),
(61, '19012279sdfsd', 'administas', 'zeazae', 'zaid.y.fszt@uhp.sdfs.mac', NULL, '$2y$10$0YNmGanIuuj6vY1Gu3PR5unGdwt8kc8P2YMWroSsjxvgUwFDyuMeC', NULL, NULL, '2023-05-30 10:16:31', '2023-05-30 10:16:31', NULL),
(62, 'sfsqdfsdfsq', 'aezesf', 'administas', 'sfdqsd.y.fst@uhp.ac.ma', NULL, '$2y$10$PeEqpsKhcIn5aeX.Voee6uRrT7P1Da8ld8oA.ZJ/BNp0zi11iVF2a', NULL, NULL, '2023-05-30 10:19:28', '2023-05-30 10:19:28', NULL),
(63, 'dzzaddfss', 'aeze', 'administas', 'zaid.y.fst@uhpsdf.ma', NULL, '$2y$10$BhnqN3YwU9tOVryy.hFrGOdbdS03EKweY1PhKv4iXncwb3NWxVq5i', NULL, NULL, '2023-05-30 10:25:59', '2023-05-30 10:25:59', NULL),
(64, 'zdadzdad', 'administas', 'zdad', 'zaid.y.fszt@uhpss.ac.mac', NULL, '$2y$10$0IEiqb440B0zpyTgV4DSoenjeRT25md6UCdiX/w1nxDmmnHs7En.2', NULL, NULL, '2023-05-30 10:54:17', '2023-05-30 10:54:17', NULL),
(65, 'zaeazeae', 'zaeazeae', 'zaeazeae', 'zaid.y.fzaeazeaeszt@uhp.ac.mac', NULL, '$2y$10$crqDljpIyZMDR4DQm6lpzeOnSRWOkugbu2ASG.8NlmLBYXHmH9sF6', NULL, NULL, '2023-05-30 10:58:56', '2023-05-30 10:58:56', NULL),
(66, 'dzzaddazd', 'checking', 'Chekos', 'zaid.y.fszt@zzuhp.ac.mac', NULL, '$2y$10$IBo/eEN7VcKxq5FB9S9JJeKcqbSme6Ow/58AdL.DCVlkk53jMrjG6', NULL, NULL, '2023-05-30 12:51:54', '2023-05-30 12:51:54', NULL),
(67, 'admisasnistass', 'administas', 'administasadministas', 'administass.zdy.fszt@uhp.ac.mac', NULL, '$2y$10$cY6SvX.EE1uqdSVuUjEZ8uZ9UVoTaKWGOOa2bhKj4iobfyScfEvOW', NULL, NULL, '2023-05-30 12:55:01', '2023-05-30 12:55:01', NULL),
(68, 'yassenzed12', 'Yassine', 'Zaid', 'yassinezaid668@gmail.comm', NULL, '$2y$10$lPFe7nZxgow1R2TORBWeau8yWp8otWgwoCFdq4GpGS2mcSoRIow1O', NULL, NULL, '2023-05-30 13:01:47', '2023-05-30 13:01:47', NULL),
(69, 'backadmin.dashboard', 'administasazd', 'backadmin.dashboard', 'zaid.y.fst@uhp.ac.mazc', NULL, '$2y$10$TEm.v6bewm5iw57aLOqLR.OtagL1aBrl6BulbFQ/poGstEmC2hOk.', NULL, NULL, '2023-05-30 13:13:38', '2023-05-30 13:13:38', NULL),
(70, 'backadmin.dashboardasas', 'administasazd', 'backadmin.dashboard', 'zaid.y.fst@uhp.ac.mazca', NULL, '$2y$10$3I2nVZuPB9QneBTJyHJmtOKDrjtX.21bvTJeaVmz3JOoPLcKG5nfm', NULL, NULL, '2023-05-30 13:14:02', '2023-05-30 13:14:02', NULL),
(71, 'yayayayayayayayayaya', 'yayayayaya', 'yayayayaya', 'yayayayaya@yayayayaya.yayayayaya', NULL, '$2y$10$eGGD9hKxLkH8k14I2POAJu9dW8KhRHBQUSmS.oz.U911qLUF.9OXa', NULL, NULL, '2023-05-30 13:15:27', '2023-05-30 13:15:27', NULL),
(72, 'adzadzadazdaz', 'adzadzada', 'adzadzada', 'zaid.y.fszt@uhp.ac.macazaz', NULL, '$2y$10$ol9NlklauPkzKw1ZTLfMM.1nNmHcMp5980Ei.yJEYqj2icqFPrPJS', NULL, NULL, '2023-05-30 13:19:47', '2023-05-30 13:19:47', NULL),
(73, 'Mahmoud', 'Mahmoud', 'Mahmoud', 'Mahmoud.y.fszt@uhp.ac.mac', NULL, '$2y$10$sIieBFhGNaBpgjfjRBnKguW0zJn4hZvvzlem/S5wc1Ja3lutUgzuu', NULL, NULL, '2023-05-30 13:25:36', '2023-05-30 13:25:36', NULL),
(74, 'administaszdadzazad', 'administaszdadzazad', 'administaszdadzazad', 'administaszdadzazad@administaszdadzazad.com', NULL, '$2y$10$OiC8XRbQyvDt6jBZPpHOFel.H3sKFRD79/90PCEo/k.NZkrXgi.lu', NULL, NULL, '2023-05-30 15:06:00', '2023-05-30 15:06:00', NULL),
(75, 'azdzadazdaz', 'azdzadazdaz', 'azdzadazdaz', 'zaid.y.fsscqzt@uhp.ac.mac', NULL, '$2y$10$5x26HyeYWwR5HotT4QxE6ugtrjP0mwvNBgTE4JKZ6o.djqBbXmH8y', NULL, NULL, '2023-05-30 15:07:49', '2023-05-30 15:07:49', NULL),
(76, 'mamamam', 'mama', 'mamamam', 'zaid.y.fszt@uhp.ac.macscs', NULL, '$2y$10$mCfpjl6seoHbFTo0MNZBbeMQbGtF51clfY.ujMoRSPEpq31iCsIvO', NULL, NULL, '2023-05-30 15:10:42', '2023-05-30 15:10:42', NULL),
(77, '19012279', 'administas', 'zeazae', 'azddza@dzadzad.com', NULL, '$2y$10$Q.ncWJNMTYdbzoQg.YSY/ePn/PmIvqNbOuPufsL316yCvDvXGhq4.', NULL, NULL, '2023-05-30 15:13:51', '2023-05-30 15:13:51', NULL),
(78, 'liultyu', 'liultyu', 'liultyu', 'liultyu@liultyu.com', NULL, '$2y$10$7/U7fiFG3LlvY4PPcLqTI.4V3KaYQPgNsPo/dKL82i1XBCSMe3Dqa', NULL, NULL, '2023-05-30 15:15:01', '2023-05-30 15:15:01', NULL),
(79, 'dqsdqsd', 'sqdqsd', 'qsdqsdqs', 'zaid.y.fszt@uhp.ac.macsqd', NULL, '$2y$10$276f8R8J3v3GM5iLyxg9f.4g3WtOZOvjaL7C/6VAq2HNlEQDJxccu', NULL, NULL, '2023-05-30 15:20:22', '2023-05-30 15:20:22', NULL),
(80, 'dqsdqsdrtj', 'dqsdqsdrtj', 'dqsdqsdrtj', 'dqsdqsdrtj@dqsdqsdrtj.com', NULL, '$2y$10$kafVEksIlOuDNI66AsCsEe8kKNpI4wIneLRRAM0CTaGrgCUvLvV.e', NULL, NULL, '2023-05-30 15:22:45', '2023-05-30 15:22:45', NULL),
(81, 'azdazdazdazdaz', 'azdazdazd', 'azdazdazd', 'azdazdazd@azdazdazd.com', NULL, '$2y$10$ECV7CnlQ8wT3WQkUd.5Mre1i88nKs7STg0vG2cF6ZpMtO9GhEPaEG', NULL, NULL, '2023-05-30 15:25:21', '2023-05-30 15:25:21', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_packing`
--

CREATE TABLE `user_packing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pack_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_packing`
--

INSERT INTO `user_packing` (`id`, `active`, `user_id`, `pack_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 1, 58, 1, '2023-05-30', '2023-06-30', '2023-05-30 10:03:24', '2023-05-30 10:03:24'),
(2, 1, 64, 1, '2023-05-30', '2023-06-30', '2023-05-30 10:54:40', '2023-05-30 10:54:40'),
(3, 1, 65, 1, '2023-05-30', '2023-06-30', '2023-05-30 10:59:15', '2023-05-30 10:59:15'),
(4, 1, 66, 1, '2023-05-30', '2023-06-30', '2023-05-30 12:52:15', '2023-05-30 12:52:15'),
(5, 1, 68, 1, '2023-05-30', '2023-06-30', '2023-05-30 13:02:01', '2023-05-30 13:02:01'),
(6, 1, 70, 1, '2023-05-30', '2023-06-30', '2023-05-30 13:14:37', '2023-05-30 13:14:37'),
(7, 1, 71, 1, '2023-05-30', '2023-06-30', '2023-05-30 13:15:38', '2023-05-30 13:15:38'),
(8, 1, 72, 1, '2023-05-30', '2023-06-30', '2023-05-30 13:19:59', '2023-05-30 13:19:59'),
(9, 1, 73, 1, '2023-05-30', '2023-06-30', '2023-05-30 13:25:49', '2023-05-30 13:25:49'),
(10, 1, 74, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:06:14', '2023-05-30 15:06:14'),
(11, 1, 76, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:10:57', '2023-05-30 15:10:57'),
(12, 1, 77, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:14:07', '2023-05-30 15:14:07'),
(13, 1, 78, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:15:18', '2023-05-30 15:15:18'),
(14, 1, 79, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:20:37', '2023-05-30 15:20:37'),
(15, 1, 79, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:21:14', '2023-05-30 15:21:14'),
(16, 1, 80, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:23:02', '2023-05-30 15:23:02'),
(17, 1, 81, 1, '2023-05-30', '2023-06-30', '2023-05-30 15:25:36', '2023-05-30 15:25:36');

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
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_pack_id_foreign` (`pack_id`),
  ADD KEY `commandes_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `normal_form_landing_page_id_foreign` (`landing_page_id`);

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
-- Index pour la table `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `user_packing`
--
ALTER TABLE `user_packing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_packing_user_id_foreign` (`user_id`),
  ADD KEY `user_packing_pack_id_foreign` (`pack_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `landingpages`
--
ALTER TABLE `landingpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `packs`
--
ALTER TABLE `packs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `user_packing`
--
ALTER TABLE `user_packing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_landingpage_id_foreign` FOREIGN KEY (`landingpage_id`) REFERENCES `landingpages` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_pack_id_foreign` FOREIGN KEY (`pack_id`) REFERENCES `packs` (`id`),
  ADD CONSTRAINT `commandes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `normal_form_landing_page_id_foreign` FOREIGN KEY (`landing_page_id`) REFERENCES `landingpages` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `user_packing`
--
ALTER TABLE `user_packing`
  ADD CONSTRAINT `user_packing_pack_id_foreign` FOREIGN KEY (`pack_id`) REFERENCES `packs` (`id`),
  ADD CONSTRAINT `user_packing_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
