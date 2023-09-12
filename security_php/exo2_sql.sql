-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 sep. 2023 à 19:36
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
-- Base de données : `exo2_sql`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`) VALUES
(1, 'toto@gmail.com', 'totolehero'),
(2, 'roro@gmail.com', 'rorolehero'),
(3, 'bibi@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dWR6WHcwYy9GNzJoUmFneA$E9yGQpL'),
(5, '<script>alert(\'You have been Hacked!\')</script>', '$argon2i$v=19$m=65536,t=4,p=1$NkFHUS81TFpibTNER3JjRA$Vs6Y549'),
(9, 'roro', '$argon2i$v=19$m=65536,t=4,p=1$aTFxT0RwN240VGs5MXJ3YQ$EEWGqex'),
(11, 'rorogmail.com', '$argon2i$v=19$m=65536,t=4,p=1$b3hGMnh2UzYuMEpIWmFPbw$TuQfgpA'),
(12, 'titi@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$OVMyLzdjdkwuRXBnNmN6dA$32By1+Q'),
(13, 'abc@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RlFWL0RGTFlNVUpsdVI0aA$BIsNGSq'),
(14, 'azerty@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TmYvOGlkdXByMlI5VTkvUg$2f0p38gWSjIBIQSBf'),
(15, 'merde@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YmFOcExNNWhscG9zSjlSQQ$4mWBX7K6D9x0IL6Sb0HP66uhFMNkv67xpsK8nKTk1U8');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
