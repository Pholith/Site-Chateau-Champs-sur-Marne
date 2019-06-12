-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 02 juin 2019 à 15:04
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `champs_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet_photos`
--

DROP TABLE IF EXISTS `projet_photos`;
CREATE TABLE IF NOT EXISTS `projet_photos` (
  `name` varchar(60) NOT NULL,
  `path` varchar(50) NOT NULL,
  `tags` set('interieur','habits','personnalites','tableaux','exterieur','statues') NOT NULL,
  PRIMARY KEY (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet_photos`
--

INSERT INTO `projet_photos` (`name`, `path`, `tags`) VALUES
('Chambre d\'honneur', 'chambreHonneur.jpg', 'interieur,habits'),
('Salon rouge', 'salonRouge.JPG', 'interieur'),
('Portail', 'sans_credit/batiment2.jpg', 'exterieur'),
('Tableau de la salle à manger', 'tableauSalleAManger.jpg', 'interieur,tableaux'),
('Entrée du château', 'sans_credit/chateau3.jpg', 'exterieur'),
('Salle à manger', 'salleAManger4.JPG', 'interieur,habits'),
('Salon chinois', 'salonChinois2.jpg', 'interieur,tableaux'),
('Salon chinois', 'SalonChinoisRobeMarquisePompadour.jpg', 'interieur,habits,tableaux'),
('Salon de musique', 'salonMusique2.JPG', 'interieur'),
('Peinture du salon chinois', 'salonChinoisPeinture2.jpg', 'interieur,tableaux'),
('Peinture du salon chinois', 'salonChinoisPeinture4.jpg', 'interieur,tableaux'),
('Salon de musique', 'salonMusique3.jpg', 'interieur'),
('Salon de musique', 'salonMusique.JPG', 'interieur'),
('Chambre de Monsieur et Madame', 'chambreMonsieurMadame2.jpg', 'interieur'),
('Escalier d\'honneur', 'escalierHonneur.jpg', 'interieur'),
('Vestibule', 'vestibule.jpg', 'interieur'),
('Grand salon', 'grandSalon2.jpg', 'interieur,habits'),
('Grand salon', 'grandSalon.jpg', 'interieur'),
('Vue aérienne du dommaine', 'VueAerienneChamps_Moyen.jpg', 'exterieur'),
('Bassin de Scylla et château', 'BassinScyllaChateauNeige2_Grand.jpg', 'exterieur'),
('Les chevaux d\'Apollon', 'statueChavauxApollon.jpg', 'exterieur'),
('Château vu de la cour', 'sans_credit/chateau2.jpg', 'exterieur'),
('Statue d\'Apollon', 'StatueApollon.jpg', 'exterieur,statues'),
('Zoom sur un cheval d\'Apollo,', 'ApollonChampsZoomCheval_Grand.jpg', 'exterieur,statues'),
('Grande Prairie', 'GrandePrairie2_Grande.jpg', 'exterieur'),
('Potager', 'potager3.jpg', 'exterieur'),
('Potager', 'PotagerSerre.jpg', 'exterieur'),
('Achille Duchene', 'AchilleDuchene.jpg', 'personnalites'),
('Alphonse XIII d\'Espagne', 'AlfonseXIIIEspagne.jpg', 'personnalites'),
('Pierre Bullet de Chamblain', 'PierreChamblain.jpg', 'personnalites,tableaux'),
('Bossuet', 'PortraitBossuet_Moyen.jpg', 'personnalites,tableaux'),
('Charles Le Brun', 'PortraitCharlesLeBrun(Gauche)_Moyen.jpg', 'personnalites,tableaux'),
('Batîment', 'sans_credit/batiment1.jpg', 'exterieur'),
('Charles De Gaulle', 'CharlesDeGaulle.jpg', 'personnalites'),
('Walter André Destailleur', 'WalterAndréDestailleur.jpg', 'personnalites'),
('Louis César La Baume Le Blanc', 'LouisCesarLaBaumeLeBlanc.GIF', 'personnalites'),
('Madame de Pompadour', 'MadameDePompadour.jpg', 'personnalites,tableaux'),
('Vue des fenêtres sur le jardin', 'vueDesFenetres.jpg', 'exterieur'),
('Esquisse originale de Chamblain', 'DessinBulletChamblaunPourPoissonBourvallais.jpg', 'tableaux'),
('Cour du château', 'CourChateau_Grand.jpg', 'exterieur'),
('Comparaison Elysée / Champs-sur-Marne', 'chateauChampsVSElysee.jpg', 'exterieur'),
('Statue de Scylla', 'ChateauScylla_Moyen.JPG', 'exterieur,statues'),
('Château vu du jardin', 'sans_credit/chateau1.jpg', 'exterieur'),
('Façade du château', 'ChateauVegétal.jpg', 'exterieur'),
('Façade du château', 'header2.jpg', 'exterieur'),
('Façade du château', 'header3.jpg', 'exterieur'),
('Le billard', 'sans_credit/billard.jpg', 'interieur,habits'),
('Les bordures du jardin de l\'entrée', 'sans_credit/bordure.jpg', 'exterieur'),
('La façade', 'sans_credit/entree.jpg', 'exterieur'),
('Les escaliers', 'sans_credit/escalier.jpg', 'interieur'),
('La perspective de l\'entrée', 'sans_credit/facade.jpg', 'exterieur'),
('le bassin de Scylla ', 'sans_credit/fontaine1.jpg', 'exterieur'),
('le bassin de Scylla vue de devant', 'sans_credit/fontaine2.jpg', 'exterieur'),
('Le 2ème bassin', 'sans_credit/fontaine3.jpg', 'exterieur'),
('La rafraichissoir', 'sans_credit/glace.JPG', 'interieur'),
('Le jardin verdoyant', 'sans_credit/jardin.jpg', 'exterieur'),
('La perspective du jardin', 'sans_credit/jardin1.jpg', 'exterieur'),
('Les chevaux d’Apollon', 'sans_credit/jardin10.jpg', 'exterieur,statues'),
('Les plaines', 'sans_credit/jardin11.jpg', 'exterieur'),
('Une statue du jardin', 'sans_credit/jardin12.jpg', 'exterieur,statues'),
('Le jardin vu du château', 'sans_credit/jardin13.jpg', 'exterieur'),
('Le jardin vu du château', 'sans_credit/jardin15.jpg', 'exterieur'),
('Les décorations du jardin', 'sans_credit/jardin2.jpg', 'exterieur'),
('L\'alignement des arbres', 'sans_credit/jardin3.jpg', 'exterieur'),
('Un autre bassin', 'sans_credit/jardin4.jpg', 'exterieur,statues'),
('Un vase', 'sans_credit/jardin5.jpg', 'exterieur,statues'),
('Une statue ', 'sans_credit/jardin6.jpg', 'exterieur,statues'),
('La vue depuis le vase', 'sans_credit/jardin7.jpg', 'exterieur'),
('Le vase', 'sans_credit/jardin8.JPG', 'exterieur,statues'),
('La grande prairie', 'sans_credit/jardin9.jpg', 'exterieur'),
('La chambre bleue', 'sans_credit/salle1.jpg', 'interieur,habits'),
('La salle à manger', 'sans_credit/salle10.jpg', 'interieur,habits'),
('chambre de Gilbert Cahen d\'Anvers', 'sans_credit/salle11.jpg', 'interieur,habits'),
('La salle à manger des enfants', 'sans_credit/salle12.JPG', 'interieur,tableaux'),
('Le salon de musique ', 'sans_credit/salle14.jpg', 'interieur,habits,tableaux'),
('La chambre bleue', 'sans_credit/salle15.jpg', 'interieur'),
('La robe de Mme Pompadour', 'sans_credit/salle16.jpg', 'interieur,habits'),
('La chambre d\'honneur ', 'sans_credit/salle17.jpg', 'interieur,habits'),
('Le meuble de madame', 'sans_credit/salle18.jpg', 'interieur'),
('Le salon de musique', 'sans_credit/salle19.jpg', 'interieur,habits,tableaux'),
('Le salon rouge', 'sans_credit/salle2.jpg', 'interieur,habits,tableaux'),
('Le boudoir de Madame', 'sans_credit/salle21.jpg', 'interieur,habits'),
('La salle de bain de la chambre d\'honneur', 'sans_credit/salle22.jpg', 'interieur'),
('La salle de bain de la chambre d\'honneur', 'sans_credit/salle23.jpg', 'interieur'),
('la salle de bains de Madame', 'sans_credit/salle24.jpg', 'interieur'),
('L\'étage des domestiques', 'sans_credit/salle25.jpg.JPG', 'interieur'),
('Madame de Pompadour', 'sans_credit/salle3.jpg', 'interieur,personnalites,tableaux'),
('Le salon chinois', 'sans_credit/salle4.jpg', 'interieur,habits'),
('Une chinoiserie', 'sans_credit/salle5.jpg', 'interieur,tableaux'),
('Une chinoiserie', 'sans_credit/salle6.jpg', 'interieur,tableaux'),
('Le salon chinois', 'sans_credit/salle7.jpg', 'interieur,habits'),
('Le fumoir', 'sans_credit/salle8.jpg', 'interieur,habits'),
('Une statue du jardin', 'sans_credit/statue.jpg', 'exterieur,statues'),
('La statue de Dianne chasseresse', 'sans_credit/statue1.jpg', 'exterieur,statues'),
('Le plafond du salon Chinois qui a été réparé', 'sans_credit/plafond.jpg', 'interieur'),
('La chambre grise et ses boiseries du XVIIIe siècle\r\n', 'sans_credit/salle13.jpg', 'interieur,habits,tableaux'),
('La chambre de Monsieur Charles Cahen d\'Anvers', 'sans_credit/salle20.jpg', 'interieur,habits'),
('Le grand salon avec le paravent de Coromandel', 'sans_credit/salle9.jpg', 'interieur,habits'),
('La statue de Bacchus', 'sans_credit/statue2.jpg', 'exterieur,statues'),
('La statue du sphinx', 'sans_credit/statueSphinx.jpg', 'exterieur,statues'),
('La statue du sphinx', 'sans_credit/statueSphinx2.jpg', 'exterieur,statues'),
('Le tableaux de la salle à manger', 'sans_credit/tableau1.jpg', 'interieur,tableaux'),
('Tableau de Louis XIV', 'sans_credit/tableau2.jpg', 'interieur,personnalites,tableaux'),
('La tableau de la salle à manger des enfants', 'sans_credit/tableau12.jpg', 'interieur,tableaux'),
('Tableau de Gilbert Cahen d\'Anvers', 'sans_credit/tableau4.jpg', 'interieur,tableaux'),
('Tableau de Louis Cahen d\'Anvers', 'sans_credit/tableau5.jpg', 'interieur,personnalites,tableaux'),
('Tableau de Louise Cahen d\'Anvers', 'sans_credit/tableau6.jpg', 'interieur,personnalites,tableaux'),
('Le château vu de côté', 'sans_credit/vueDeCote.jpg', 'exterieur'),
('Entrée du château', 'sans_credit/chateau4.jpg', 'exterieur'),
('Entrée du château', 'sans_credit/entree3.jpg', 'exterieur'),
('Entrée du château', 'sans_credit/entree4.jpg', 'exterieur'),
('Un habit', 'sans_credit/habit1.jpg', 'interieur,habits'),
('Le jardin', 'sans_credit/jardin16.jpg', 'exterieur'),
('Les arbres délimitant le jardin', 'sans_credit/jardin17.jpg', 'exterieur'),
('Le château vu du bassin', 'sans_credit/jardin18.jpg', 'exterieur'),
('Le grand bassin', 'sans_credit/jardin19.jpg', 'exterieur'),
('Un vase', 'sans_credit/jardin20.jpg', 'exterieur,statues'),
('Le potager', 'sans_credit/jardin21.jpg', 'exterieur'),
('Le jardin', 'sans_credit/jardin22.jpg', 'exterieur'),
('Un vase', 'sans_credit/jardin23.jpg', 'exterieur'),
('Le jardin', 'sans_credit/jardin24.jpg', 'exterieur'),
('Le jardin vu du château', 'sans_credit/jardin26.jpg', 'exterieur'),
('La grande perspective', 'sans_credit/jardin27.jpg', 'exterieur'),
('La grande perspective', 'sans_credit/jardin28.jpg', 'exterieur'),
('Une robe', 'sans_credit/robe.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/robe1.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/robe2.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/robe3.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/robe4.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/robe5.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/robe6.jpg', 'interieur,habits'),
('La décoration du aslon chinois', 'sans_credit/salle26.jpg', 'interieur'),
('La décoration du salon chinois', 'sans_credit/salle27.jpg', 'interieur'),
('Les murs du salon chinois', 'sans_credit/salle28.jpg', 'interieur'),
('Une chinoiserie', 'sans_credit/salle29.jpg', 'interieur,tableaux'),
('Une salle', 'sans_credit/salle30.jpg', 'interieur'),
('Des robes', 'sans_credit/salle31.jpg', 'interieur,habits'),
('Une robe', 'sans_credit/salle32.jpg', 'interieur,habits'),
('Une chinoiserie', 'sans_credit/salle33.jpg', 'interieur'),
('La salle à manger', 'sans_credit/salle34.jpg', 'interieur'),
('Des décorations', 'sans_credit/salle35.jpg', 'interieur'),
('La table de la salle à manger', 'sans_credit/salle36.jpg', 'interieur'),
('La salle à manger des enfants', 'sans_credit/salle37.jpg', 'interieur'),
('Un buste', 'sans_credit/salle38.jpg', 'interieur,personnalites,statues'),
('Des statues', 'sans_credit/salle39.jpg', 'interieur,statues'),
('Des décorations', 'sans_credit/salle40.jpg', 'interieur,statues'),
('Le salon de musique', 'sans_credit/salle41.jpg', 'interieur,habits'),
('Des décorations', 'sans_credit/salle42.jpg', 'interieur'),
('Des décorations du salon de musique', 'sans_credit/salle43.jpg', 'interieur'),
('La chambre grise', 'sans_credit/salle44.jpg', 'interieur,tableaux'),
('Le mur du salon chinois', 'sans_credit/salle45.jpg', 'interieur'),
('Apollon du Belvédère ', 'sans_credit/statue3.jpg', 'exterieur,statues'),
('Une statue', 'sans_credit/statue4.jpg', 'exterieur,statues'),
('Une peinture', 'sans_credit/tableau10.jpg', 'interieur,tableaux'),
('Une décoration dans le salon chinois', 'sans_credit/tableau14.jpg', 'interieur,tableaux'),
('Un tableau', 'sans_credit/tableau8.jpg', 'interieur,tableaux'),
('Un tableau', 'sans_credit/tableau9.jpg', 'interieur,tableaux');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
