-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 nov. 2020 à 09:38
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webuniversite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`matricule`, `nom`, `prenom`, `email`) VALUES
(1, 'MAKOMBO', 'Polycarpe', 'polycarpemakombo@gmail.com'),
(2, 'MARK', 'Zuck', 'markzucfb@gmail.com'),
(3, 'JOBS', 'Steve', 'stevejobsapple@yahoo.fr'),
(4, 'LARRY', 'Page', 'larrypagegoogle@gmail.com'),
(5, 'TRUMP', 'Donald', 'trumpdonaldusa@hotmail.com'),
(6, 'BIDEN', 'Joe', 'bidenjoe2021usa@gmail.com'),
(7, 'PALMER', 'Paul', 'paulpalmer@yahoo.fr'),
(8, 'FATU', 'Thérèse', 'theresefatu2095@yahoo.fr'),
(9, 'BILL', 'Gate', 'billgate@hotmail.com'),
(10, 'APPOLINAIRE', 'MAK', 'appomak@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `facultes`
--

CREATE TABLE `facultes` (
  `codefaculte` int(11) NOT NULL,
  `faculte` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facultes`
--

INSERT INTO `facultes` (`codefaculte`, `faculte`) VALUES
(1, 'Médecine'),
(2, 'Lettre'),
(3, 'Droit'),
(4, 'Math Info'),
(5, 'Relation Internationale'),
(6, 'Sciences Administratives et Politiques'),
(7, 'Hôtellerie '),
(8, 'Informatique des Réseaux'),
(9, ''),
(10, ''),
(11, '');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `codeinscription` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `faculte` int(11) NOT NULL,
  `dateinscription` varchar(200) NOT NULL,
  `montantinscription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`codeinscription`, `matricule`, `faculte`, `dateinscription`, `montantinscription`) VALUES
(1, 1, 1, '20/11/2020', '350.000FC'),
(2, 6, 5, '20-11-2020', '450.000 CDF'),
(3, 3, 8, '22/11/2020', '500.000 FC'),
(4, 5, 5, '23-11-2020', '600.000 CDF'),
(6, 10, 3, '24/11/2020', '250.000 FC'),
(7, 2, 4, '24/11/2020', '400.000 CDF'),
(8, 4, 8, '25/11.2020', '300.000 FC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD KEY `matricule` (`matricule`);

--
-- Index pour la table `facultes`
--
ALTER TABLE `facultes`
  ADD KEY `codefaculte` (`codefaculte`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`codeinscription`),
  ADD KEY `inscription_ibfk_1` (`matricule`),
  ADD KEY `inscription_ibfk_2` (`faculte`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `facultes`
--
ALTER TABLE `facultes`
  MODIFY `codefaculte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `codeinscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiants` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`faculte`) REFERENCES `facultes` (`codefaculte`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
