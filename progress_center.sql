-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 août 2025 à 22:14
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `progress_center`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `formation` varchar(150) NOT NULL,
  `comments` text DEFAULT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id`, `fullname`, `age`, `email`, `formation`, `comments`, `date_inscription`) VALUES
(1, 'w', 12, 'W.Khaoua@aui.ma', 'excel', '', '2025-08-17 10:32:33');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `statut` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sujet` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `nom`, `email`, `sujet`, `message`, `created_at`) VALUES
(1, 'Wijdane', 'progresscenter467@gmail.com', 'formation', 'je veuxsavoir plus a propos de la formation estheique', '2025-08-28 19:56:12');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(150) NOT NULL,
  `localisation` varchar(150) NOT NULL,
  `formation_souhaitee` varchar(150) NOT NULL,
  `type_formation` enum('présentiel','en ligne','mixte') NOT NULL,
  `contact` varchar(190) NOT NULL,
  `date_soumission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_complet` varchar(150) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `parcours_scolaire` text NOT NULL,
  `formation_enseigner` varchar(150) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_allemand`
--

CREATE TABLE `inscriptions_allemand` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `option_formation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_bb_lips`
--

CREATE TABLE `inscriptions_bb_lips` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_browlift`
--

CREATE TABLE `inscriptions_browlift` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(120) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_coiffure`
--

CREATE TABLE `inscriptions_coiffure` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `formation` varchar(50) NOT NULL,
  `type` enum('continue','acceleree') NOT NULL DEFAULT 'continue',
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_coiffures_evenementielles`
--

CREATE TABLE `inscriptions_coiffures_evenementielles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(100) NOT NULL,
  `formation` varchar(150) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_coloration_homme`
--

CREATE TABLE `inscriptions_coloration_homme` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(100) NOT NULL,
  `formation` varchar(150) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_coloration_meches`
--

CREATE TABLE `inscriptions_coloration_meches` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(150) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_coupe`
--

CREATE TABLE `inscriptions_coupe` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `formule` varchar(100) NOT NULL,
  `formation` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions_coupe`
--

INSERT INTO `inscriptions_coupe` (`id`, `nom`, `age`, `email`, `formule`, `formation`, `created_at`) VALUES
(1, 'Wijdane', 12, 'w.khaoua@aui.ma', 'intensive', 'Coupe Classique & Moderne', '2025-08-25 16:10:31');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_coupe_brushing`
--

CREATE TABLE `inscriptions_coupe_brushing` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(150) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_couture_accelere`
--

CREATE TABLE `inscriptions_couture_accelere` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `formation` varchar(50) NOT NULL,
  `type` varchar(20) DEFAULT 'accelere',
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_couture_continue`
--

CREATE TABLE `inscriptions_couture_continue` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `formation` varchar(50) NOT NULL,
  `type` varchar(20) DEFAULT 'continue',
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_espagnol`
--

CREATE TABLE `inscriptions_espagnol` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `option_formation` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_esthetique`
--

CREATE TABLE `inscriptions_esthetique` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `formation` varchar(50) NOT NULL,
  `type` enum('continue','acceleree') NOT NULL DEFAULT 'continue',
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions_esthetique`
--

INSERT INTO `inscriptions_esthetique` (`id`, `nom`, `prenom`, `email`, `tel`, `formation`, `type`, `date_inscription`) VALUES
(1, 'khaoua', 'wijdane', 'w.khaoua@aui.ma', '22855074', '3 mois', 'continue', '2025-08-28 17:17:22');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_francais`
--

CREATE TABLE `inscriptions_francais` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `option_formation` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_hanna`
--

CREATE TABLE `inscriptions_hanna` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_hydrafacial`
--

CREATE TABLE `inscriptions_hydrafacial` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_infographiedesign`
--

CREATE TABLE `inscriptions_infographiedesign` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_italien`
--

CREATE TABLE `inscriptions_italien` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_lashlift`
--

CREATE TABLE `inscriptions_lashlift` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `parcours` varchar(150) NOT NULL,
  `option_choisie` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_manicure`
--

CREATE TABLE `inscriptions_manicure` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `contact` varchar(150) NOT NULL,
  `formule` varchar(50) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_maquillage`
--

CREATE TABLE `inscriptions_maquillage` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `contact` varchar(150) NOT NULL,
  `formule` varchar(50) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_microblading`
--

CREATE TABLE `inscriptions_microblading` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(100) NOT NULL,
  `formation` varchar(100) NOT NULL DEFAULT 'Microblading',
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_microneedling`
--

CREATE TABLE `inscriptions_microneedling` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_soinpieds`
--

CREATE TABLE `inscriptions_soinpieds` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_soin_visage`
--

CREATE TABLE `inscriptions_soin_visage` (
  `id` int(10) UNSIGNED NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions_soin_visage`
--

INSERT INTO `inscriptions_soin_visage` (`id`, `prenom`, `nom`, `telephone`, `age`, `email`, `option_formation`, `formation`, `date_inscription`) VALUES
(1, '', 'Wijdane', '', 21, 'W.Khaoua@aui.ma', 'accelerée', '', '2025-08-17 10:13:14'),
(2, '', 'Wijdane', '', 21, 'W.Khaoua@aui.ma', 'accelerée', '', '2025-08-17 10:18:35'),
(3, '', 'Wijdane', '', 21, 'W.Khaoua@aui.ma', 'accelerée', 'Soin du visage', '2025-08-17 10:24:39'),
(4, '', 'Wijdane', '', 21, 'W.Khaoua@aui.ma', 'accelerée', 'Soin du visage', '2025-08-17 19:14:48'),
(5, '', 'Wijdane', '', 21, 'W.Khaoua@aui.ma', 'continue', 'Soin du visage', '2025-08-17 19:18:11'),
(6, '', 'Wijdane', '', 21, 'W.Khaoua@aui.ma', 'accelerée', 'Soin du visage', '2025-08-18 15:29:53');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_taille_entretien_barbe`
--

CREATE TABLE `inscriptions_taille_entretien_barbe` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(150) NOT NULL,
  `formule` varchar(150) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading1`
--

CREATE TABLE `inscriptions_trading1` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `formule` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading2`
--

CREATE TABLE `inscriptions_trading2` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `formule` varchar(50) NOT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading3`
--

CREATE TABLE `inscriptions_trading3` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `formule` varchar(50) NOT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading4`
--

CREATE TABLE `inscriptions_trading4` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `formule` varchar(255) NOT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading5`
--

CREATE TABLE `inscriptions_trading5` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `formule` varchar(100) NOT NULL,
  `date_inscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading6`
--

CREATE TABLE `inscriptions_trading6` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `formule` varchar(100) NOT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading7`
--

CREATE TABLE `inscriptions_trading7` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `formule` varchar(100) DEFAULT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading8`
--

CREATE TABLE `inscriptions_trading8` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `formule` varchar(100) DEFAULT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_trading9`
--

CREATE TABLE `inscriptions_trading9` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `contact` varchar(100) NOT NULL,
  `formule` varchar(50) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_visagiste`
--

CREATE TABLE `inscriptions_visagiste` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `option_formation` varchar(50) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `preinscriptions_anglais`
--

CREATE TABLE `preinscriptions_anglais` (
  `id` int(11) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', NULL, '$2y$10$DmHlQFMvtiz/KmlKj7A1iO5GIrPZws27Hmp.XzxRtgy78potkDnlK', 'user', '2025-08-26 16:44:17'),
(2, 'wijdane', 'wijdane@aui.ma', '$2y$10$AyWG0guAPQdVgnrrvvTGx.ttm2ilw1xzVkGerZALDqbNkvJFozlCW', 'user', '2025-08-26 16:50:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_allemand`
--
ALTER TABLE `inscriptions_allemand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_bb_lips`
--
ALTER TABLE `inscriptions_bb_lips`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_browlift`
--
ALTER TABLE `inscriptions_browlift`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_coiffure`
--
ALTER TABLE `inscriptions_coiffure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_coiffures_evenementielles`
--
ALTER TABLE `inscriptions_coiffures_evenementielles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_coloration_homme`
--
ALTER TABLE `inscriptions_coloration_homme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_coloration_meches`
--
ALTER TABLE `inscriptions_coloration_meches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_coupe`
--
ALTER TABLE `inscriptions_coupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_coupe_brushing`
--
ALTER TABLE `inscriptions_coupe_brushing`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_couture_accelere`
--
ALTER TABLE `inscriptions_couture_accelere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_couture_continue`
--
ALTER TABLE `inscriptions_couture_continue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_espagnol`
--
ALTER TABLE `inscriptions_espagnol`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_esthetique`
--
ALTER TABLE `inscriptions_esthetique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_francais`
--
ALTER TABLE `inscriptions_francais`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_hanna`
--
ALTER TABLE `inscriptions_hanna`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_hydrafacial`
--
ALTER TABLE `inscriptions_hydrafacial`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_infographiedesign`
--
ALTER TABLE `inscriptions_infographiedesign`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_italien`
--
ALTER TABLE `inscriptions_italien`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_lashlift`
--
ALTER TABLE `inscriptions_lashlift`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_manicure`
--
ALTER TABLE `inscriptions_manicure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_maquillage`
--
ALTER TABLE `inscriptions_maquillage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_microblading`
--
ALTER TABLE `inscriptions_microblading`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_microneedling`
--
ALTER TABLE `inscriptions_microneedling`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_soinpieds`
--
ALTER TABLE `inscriptions_soinpieds`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_soin_visage`
--
ALTER TABLE `inscriptions_soin_visage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_taille_entretien_barbe`
--
ALTER TABLE `inscriptions_taille_entretien_barbe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading1`
--
ALTER TABLE `inscriptions_trading1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading2`
--
ALTER TABLE `inscriptions_trading2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading3`
--
ALTER TABLE `inscriptions_trading3`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading4`
--
ALTER TABLE `inscriptions_trading4`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading5`
--
ALTER TABLE `inscriptions_trading5`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading6`
--
ALTER TABLE `inscriptions_trading6`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading7`
--
ALTER TABLE `inscriptions_trading7`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading8`
--
ALTER TABLE `inscriptions_trading8`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_trading9`
--
ALTER TABLE `inscriptions_trading9`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions_visagiste`
--
ALTER TABLE `inscriptions_visagiste`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `preinscriptions_anglais`
--
ALTER TABLE `preinscriptions_anglais`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_allemand`
--
ALTER TABLE `inscriptions_allemand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_bb_lips`
--
ALTER TABLE `inscriptions_bb_lips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_browlift`
--
ALTER TABLE `inscriptions_browlift`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_coiffure`
--
ALTER TABLE `inscriptions_coiffure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_coiffures_evenementielles`
--
ALTER TABLE `inscriptions_coiffures_evenementielles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_coloration_homme`
--
ALTER TABLE `inscriptions_coloration_homme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_coloration_meches`
--
ALTER TABLE `inscriptions_coloration_meches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_coupe`
--
ALTER TABLE `inscriptions_coupe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inscriptions_coupe_brushing`
--
ALTER TABLE `inscriptions_coupe_brushing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_couture_accelere`
--
ALTER TABLE `inscriptions_couture_accelere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_couture_continue`
--
ALTER TABLE `inscriptions_couture_continue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_espagnol`
--
ALTER TABLE `inscriptions_espagnol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_esthetique`
--
ALTER TABLE `inscriptions_esthetique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inscriptions_francais`
--
ALTER TABLE `inscriptions_francais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_hanna`
--
ALTER TABLE `inscriptions_hanna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_hydrafacial`
--
ALTER TABLE `inscriptions_hydrafacial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_infographiedesign`
--
ALTER TABLE `inscriptions_infographiedesign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_italien`
--
ALTER TABLE `inscriptions_italien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_lashlift`
--
ALTER TABLE `inscriptions_lashlift`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_manicure`
--
ALTER TABLE `inscriptions_manicure`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_maquillage`
--
ALTER TABLE `inscriptions_maquillage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_microblading`
--
ALTER TABLE `inscriptions_microblading`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_microneedling`
--
ALTER TABLE `inscriptions_microneedling`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_soinpieds`
--
ALTER TABLE `inscriptions_soinpieds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_soin_visage`
--
ALTER TABLE `inscriptions_soin_visage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `inscriptions_taille_entretien_barbe`
--
ALTER TABLE `inscriptions_taille_entretien_barbe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading1`
--
ALTER TABLE `inscriptions_trading1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading2`
--
ALTER TABLE `inscriptions_trading2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading3`
--
ALTER TABLE `inscriptions_trading3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading4`
--
ALTER TABLE `inscriptions_trading4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading5`
--
ALTER TABLE `inscriptions_trading5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading6`
--
ALTER TABLE `inscriptions_trading6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading7`
--
ALTER TABLE `inscriptions_trading7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading8`
--
ALTER TABLE `inscriptions_trading8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_trading9`
--
ALTER TABLE `inscriptions_trading9`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions_visagiste`
--
ALTER TABLE `inscriptions_visagiste`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `preinscriptions_anglais`
--
ALTER TABLE `preinscriptions_anglais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
