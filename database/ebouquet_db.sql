-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  sqletud.u-pem.fr
-- Généré le :  Jeu 06 Juin 2019 à 22:10
-- Version du serveur :  5.5.62-0+deb8u1-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ebouquet_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `QUESTION`
--

CREATE TABLE `QUESTION` (
  `idQ` int(11) NOT NULL,
  `intituleQ` varchar(75) NOT NULL,
  `intituleEnQ` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `QUESTION`
--

INSERT INTO `QUESTION` (`idQ`, `intituleQ`, `intituleEnQ`) VALUES
(0, 'Quelle est la superficie du parc ?', 'How large is the park?'),
(1, 'A quelle époque le château a-t\'il été créé ?', 'When was the castle built?'),
(2, 'Quelle personnalité célèbre a confié un rôle politique au château ?', 'Which famous personality assigned the castle to a political role?'),
(3, 'Quelle est la pièce phare du château ?', 'What is the main room of the castle?');

-- --------------------------------------------------------

--
-- Structure de la table `REPONSE`
--

CREATE TABLE `REPONSE` (
  `idR` int(11) NOT NULL,
  `idQ` int(11) NOT NULL,
  `intituleR` varchar(75) NOT NULL,
  `intituleEnR` varchar(75) NOT NULL,
  `bonneReponse` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `REPONSE`
--

INSERT INTO `REPONSE` (`idR`, `idQ`, `intituleR`, `intituleEnR`, `bonneReponse`) VALUES
(0, 0, '25 hectares', '25 ha', 0),
(1, 0, '45 hectares', '45 ha', 0),
(2, 0, '65 hectares', '65 ha', 0),
(3, 0, '85 hectares', '85 ha', 1),
(4, 1, 'Au XVIème siècle', 'In the XVIth century', 0),
(5, 1, 'Au XVIIème siècle', 'In the XVIIth century', 1),
(6, 1, 'Au XVIIème siècle', 'In the XVIIth century', 0),
(7, 1, 'Au XIXème siècle', 'In the XIXth century', 0),
(8, 2, 'François Pompidou', 'François Pompidou', 0),
(9, 2, 'Le général De Gaulle', 'General De Gaulle', 1),
(10, 2, 'Jean Cahen d\'Anvers', 'Jean Cahen d\'Anvers', 0),
(11, 2, 'La marquise de Pompadour', 'Marchioness de Pompadour', 0),
(12, 3, 'Le salon rouge', 'The Red Lounge', 0),
(13, 3, 'La salle à manger', 'The dining room', 0),
(14, 3, 'Le salon chinois', 'The Chinese lounge', 1),
(15, 3, 'Le salon de musique', 'The music room', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `QUESTION`
--
ALTER TABLE `QUESTION`
  ADD PRIMARY KEY (`idQ`);

--
-- Index pour la table `REPONSE`
--
ALTER TABLE `REPONSE`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `idQ` (`idQ`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `QUESTION`
--
ALTER TABLE `QUESTION`
  MODIFY `idQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `REPONSE`
--
ALTER TABLE `REPONSE`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `REPONSE`
--
ALTER TABLE `REPONSE`
  ADD CONSTRAINT `REPONSE_ibfk_1` FOREIGN KEY (`idQ`) REFERENCES `QUESTION` (`idQ`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
