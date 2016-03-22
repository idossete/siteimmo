-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 12 Avril 2014 à 00:24
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `siteinternet`
--
CREATE DATABASE IF NOT EXISTS `siteinternet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `siteinternet`;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `idlocation` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `budget` int(50) NOT NULL,
  `photoprofil` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `descript` varchar(1000) NOT NULL,
  `lien` varchar(45) NOT NULL,
  PRIMARY KEY (`idlocation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`idlocation`, `type`, `lieu`, `budget`, `photoprofil`, `titre`, `descript`, `lien`) VALUES
(1, 'Appartement', 'Brazzaville', 2000000, 'imgSlide3/appartement3.jpg', 'Appartement au coeur de Brazzaville', 'L’Immeuble Otawa est fier de vous accueillir dans ses 8 appartements entièrement équipés. Situé en plein centre-ville de Brazzaville, sis au camp Clérant, derrière l’école militaire [...]', 'louerappartement.php'),
(2, 'Voiture', 'Pointe-Noire', 45000000, 'imgSlide3/voiture11.jpg', 'Toyota Land Cruiser', 'Marque : Toyota Land Cruiser\r\nPuissance : 282 ch\r\nCarburant : Diesel\r\nBoîte de vitesse : Automatique\r\nCylindré : 4,4l/3,8l\r\nCouleur :Rouge/Grise\r\nNbre de Places : 4/5\r\nIntérieur :Cuir beige/Cuir gris\r\nMontant :450000\r\n', 'louervoiture1.php'),
(3, 'Voiture', 'Pointe-Noire', 50000000, 'imgSlide3/voiture21.jpg', 'BMW X6 50i', 'Marque : BMW X6 50i\r\nPuissance : 407 ch\r\nCarburant : Essence\r\nBoîte de vitesse : Automatique\r\nCylindré : 4,4l\r\nCouleur :Rouge\r\nNbre de Places : 4/5\r\nIntérieur :Cuir beige\r\nMontant :600000\r\n', 'louervoiture2.php'),
(4, 'Maison', 'Yaounde', 5000000, 'imgMini/SAM_0215.jpg', 'Louer Palais d Odza situ&eacute &acirc Yaoundé ', 'Maison d’un hectar situé à Odza, petit village à 1 heure de Yaoundé. Cette Villa de 8 chambres, 3 salles de bain,séjours et une grande cuisine française est là pour vous accueillir vous et votre famille, nombreuse ou pas. Le calme et la tranquillité qui y règnent, l’air frais de ce petit village vous fera sentir libre. [...]', 'louermaison.php');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `privilege` int(1) DEFAULT NULL,
  `civilite` varchar(4) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `codepostal` int(5) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `pays` varchar(45) NOT NULL,
  `telephone` int(13) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dateinscript` date NOT NULL,
  `lastconnex` date NOT NULL,
  `panier` varchar(1000) NOT NULL,
  `poste` varchar(45) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `photoprofil` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `privilege`, `civilite`, `nom`, `prenom`, `adresse`, `codepostal`, `ville`, `pays`, `telephone`, `email`, `dateinscript`, `lastconnex`, `panier`, `poste`, `motdepasse`, `photoprofil`) VALUES
(1, 1, 'M', 'SalÃ©', 'Charles Jr', '14, Rue de l Arcade', 94220, 'Charenton Le Pont', 'France', 627532039, 'salecharlesjr@gmail.com', '2014-04-08', '0000-00-00', '', 'Etudiant', 'charles', 'PP_du_20140411105403.jpg'),
(2, 1, 'M', 'Innocent', 'Ossete', 'Rue de lArcade', 94220, 'Charenton Le Pont', 'Congo', 650163519, 'inno1234@hotmail.fr', '2014-04-08', '0000-00-00', '', 'Etudiant', '0650163519', 'innocentPP.jpg'),
(3, 0, 'Mlle', 'Mansouri', 'Chaima', '1 ter rue de denouval', 78570, 'Chanteloup les vignes', 'France', 619674866, 'mansouri.chaima@hotmail.fr', '2014-04-09', '0000-00-00', '', '', '619674866', 'PP_du_20140411105449.jpg'),
(4, NULL, 'M', 'Richard ', 'Louis', '4, Villa FranÃ§oise', 92600, 'AsniÃ¨res', 'France', 621251666, 'louloux.richard@free.fr', '2014-04-11', '0000-00-00', '', '', '621251666', 'LouisPP.jpg'),
(5, NULL, 'M', 'Ihsan', 'Said', '59, rue de l Aigle', 92250, 'La Garenne Colombes', 'France', 770489943, 'ishan.said@devinci.fr', '2014-04-11', '0000-00-00', '', 'Etudiant', '770489943', 'ishanPP.jpg'),
(6, NULL, 'Mlle', 'KAFIA', 'Asmaa', '26 rue de la marliere', 95200, 'SARCELLES VILLAGE', 'France', 606060606, 'nour.kafia@gmail.com', '2014-04-11', '0000-00-00', '', '', '606060606', 'PP_du_20140411104531.jpg'),
(7, NULL, 'Mlle', 'Du', 'Alice', '30 rue Salvador Allende', 92000, 'Nanterre', 'France', 689923990, 'aliice@live.cn', '2014-04-11', '0000-00-00', '', '', '689923990', 'PP_du_20140411105252.jpg'),
(12, NULL, 'Mlle', 'brahimi', 'meriem', '5 allÃ©e des augustins', 92390, 'villeneuve la garenne ', 'France', 665750626, 'meriem.brahimi@laposte.net', '2014-04-11', '0000-00-00', '', '', '665750626', 'PP_du_20140411125118.jpg'),
(13, NULL, 'Mlle', 'Nadarajan', 'Jenani', '39, rue des flammes', 77700, 'Bailly', 'France', 505, 'nadarajan.jenani@gmail.com', '2014-04-11', '0000-00-00', '', '', '505', 'PP_du_20140411170938.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nouscontacter`
--

CREATE TABLE IF NOT EXISTS `nouscontacter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomc` varchar(45) NOT NULL,
  `emailc` varchar(45) NOT NULL,
  `telephonec` int(16) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `nouscontacter`
--

INSERT INTO `nouscontacter` (`id`, `nomc`, `emailc`, `telephonec`, `objet`, `message`) VALUES
(1, 'Gerard Lanvin', 'gerardjugnot@gmail.com', 627533546, 'Plainte', 'Monsieur Innocent OssÃ©tÃ© est un escroc. Il a bouffÃ© l argent de la construction de mon immeuble. Je vais contacter la police.'),
(2, 'Brice', 'jules@devinci.fr', 627532039, 'DÃ©mission', 'Je n ai pas assez d argent pour acheter votre maison.'),
(3, 'Chaima Mansouri', 'mansouri.chaima@hotmail.fr', 619674866, 'Extreme Joie, merveilleux sÃ©jour dans vos appartements. ', 'Je suis trÃ¨s satisfaite de votre appartement. Ca fait dÃ©jÃ  deux mois que je loue votre appartement situÃ© au coeur de Brazzavile, et je suis trÃ¨s trÃ¨s trÃ¨s contente et joyeuse !!!! \r\nMerci pour tout ! Merci Charles !!!');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) NOT NULL,
  `idpersonne` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id`, `titre`, `idpersonne`) VALUES
(1, 'Immeuble situÃ© Ã  Pointe-Noire', 1),
(4, 'Immeuble situÃ© Ã  Pointe-Noire', 1),
(5, 'Immeuble situÃ© Ã  Brazzaville', 3);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE IF NOT EXISTS `vente` (
  `idVente` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) CHARACTER SET utf8 NOT NULL,
  `lieu` varchar(45) CHARACTER SET utf8 NOT NULL,
  `budget` double DEFAULT NULL,
  `photoprofil` varchar(45) CHARACTER SET utf8 NOT NULL,
  `titre` varchar(100) NOT NULL,
  `descript` text CHARACTER SET utf8 NOT NULL,
  `lien` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idVente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `vente`
--

INSERT INTO `vente` (`idVente`, `type`, `lieu`, `budget`, `photoprofil`, `titre`, `descript`, `lien`) VALUES
(1, 'Maison', 'Brazzaville', 40000000, 'imgSlide3/maison11.jpg', 'Maison située &agrave; Pointe-Noire sur 400000 m&sup2;', 'La résidence Haïma est une villa située à Brazzaville, juste à côté de l’immeuble Otawa. Cette magnifique Maison de deux niveaux fait partie de ce qui se fait de mieux au Congo en terme de résidence immobilière. En effet son séjour dont le plafond donne au deuxième niveau vous offre une vue éblouissante d’une très belle toile baptisé « L’entrée du paradis »  [...]', 'achetermaison1.php'),
(2, 'Maison', 'Yaounde', 1000000000, 'imgMini/SAM_0215.jpg', 'Palais d Odza situ&eacute &acirc Yaoundé sur 1 Ha', 'Maison d’un hectar situé à Odza, petit village à 1 heure de Yaoundé. Cette Villa de 8 chambres, 3 salles de bain,séjours et une grande cuisine française est là pour vous accueillir vous et votre famille, nombreuse ou pas. Le calme et la tranquillité qui y règnent, l’air frais de ce petit village vous fera sentir libre. [...]', 'achetermaison2.php'),
(3, 'Immeuble', 'Brazzaville', 25000000000, 'imgMini/DSC_0541.jpg', 'Immeuble situé &agrave; Pointe-Noire', 'L’Immeuble Otawa est fier de vous accueillir dans ses 8 appartements entièrement équipés. Situé en plein centre-ville de Brazzaville,sis au camp Clérant, derrière l’école militaire, cet immeuble vous propose une grande cours, et des appartements identiques par niveau : chaque niveau vous accueil avec des appartements différents selon les niveaux.', 'acheterimmeuble1.php'),
(4, 'Immeuble', 'Yaounde ', 15000000000, 'imgSlide3\\immeuble21.jpg', '', 'L''immeuble Um Nyobe est un immeuble de 4 niveaux de 3 appartements par niveaux, tous identiques afin de pouvoir loger chaque propriétaire de la même manière.', 'acheterimmeuble2.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
