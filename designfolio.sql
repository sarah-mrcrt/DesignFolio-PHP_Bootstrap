-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 jan. 2023 à 11:01
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `designfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` mediumtext,
  `image` varchar(255) DEFAULT NULL,
  `idAuteur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `title`, `description`, `image`, `idAuteur`) VALUES
(108, 'Le désordre | Expo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum feugiat massa a tincidunt. Integer eget dolor dictum, sagittis elit nec, posuere neque. Integer aliquam elit ut nisi congue, sit amet dictum erat vulputate. Phasellus vitae venenatis enim. Suspendisse vel lacus vel nisi dapibus dapibus id et sapien. Fusce malesuada purus at dui', 'assets/images/uploads/Exposition-Le-desordre.jpg', 48),
(100, 'Intrasec | Expo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum feugiat massa a tincidunt. Integer eget dolor dictum, sagittis elit nec, posuere neque. Integer aliquam elit ut nisi congue, sit amet dictum erat vulputate. Phasellus vitae venenatis enim. Suspendisse vel lacus vel nisi dapibus dapibus id et sapien. Fusce malesuada purus at dui sollicitudin ultricies. Phasellus scelerisque, est ut eleifend pellentesque, nisl est feugiat sem, nec ultrices nibh justo et mi. Morbi id tincidunt tortor.', 'assets/images/uploads/EXPOSITION-oeuvre3.jpg', 48),
(99, 'Palais des beaux arts | Expo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum feugiat massa a tincidunt. Integer eget dolor dictum, sagittis elit nec, posuere neque. Integer aliquam elit ut nisi congue, sit amet dictum erat vulputate. Phasellus vitae venenatis enim. Suspendisse vel lacus vel nisi dapibus dapibus id et sapien. Fusce malesuada purus at dui sollicitudin ultricies. Phasellus scelerisque, est ut eleifend pellentesque, nisl est feugiat sem, nec ultrices nibh justo et mi. Morbi id tincidunt tortor.', 'assets/images/uploads/EXPOSITION-oeuvre2.jpg', 48),
(97, 'Chella Man | Couverture', 'Lors d’un cours d’esthétisme, j’ai dû réaliser la première et quatrième de couverture d’un livre monographique imaginaire d’un artiste. J’ai choisi Chella Man qui est une personnalité que j’aime beaucoup, car il est un symbole de bienveillance, d’ouverture d’esprit et de pouvoir. Il se caractérise en tant qu’artiste sourd, transgenre et juif pour faire passer des messages d’acceptation de soi et de l’autre.', 'assets/images/uploads/2018-Chella-Man.jpg', 47),
(98, 'Colors | Exposition', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum feugiat massa a tincidunt. Integer eget dolor dictum, sagittis elit nec, posuere neque. Integer aliquam elit ut nisi congue, sit amet dictum erat vulputate. Phasellus vitae venenatis enim. Suspendisse vel lacus vel nisi dapibus dapibus id et sapien. Fusce malesuada purus at dui sollicitudin ultricies. Phasellus scelerisque, est ut eleifend pellentesque, nisl est feugiat sem, nec ultrices nibh justo et mi. Morbi id tincidunt tortor.', 'assets/images/uploads/EXPOSITION-oeuvre1.jpg', 48),
(95, 'Grilles', 'Pour ce travail de composition sur une grille, 3 affiches ont été faites dont 1 figurative et 2 abstraites. Celle figurative utilise la grille pour réaliser un pixel art de la chaussure que je portais. Celles abstraites utilisent des formes géométriques de manière déstructurée.', 'assets/images/uploads/2021-Grilles.jpg', 47),
(96, 'Affiche Widmer', 'Dans la lignée de Widmer, ces affiches fictives d’une exposition 2022 au CCI mettent en avant des objets du quotidien.', 'assets/images/uploads/2021-Affiche-CCI-Widmer-1.jpg', 47),
(94, 'Photo Merguez', 'Je me suis challengé graphiquement en travaillant la merguez.', 'assets/images/uploads/2022-Mergazine.jpg', 47),
(93, 'Persona ', 'Comme dans le film d’Ingmar Bergman, cette affiche explore l’identité personnelle au travers de la dépersonnalisation, volonté de se différencier et de se ressembler. Difficilement discernable, on retrouve les deux protagonistes de l’histoire par une superposition de sept photographies. Les effets de dégradé et de négatif ajoutent un aspect fantomatique.', 'assets/images/uploads/MAURIAUCOURT_SARAH-Persona_MINIATURE.jpg', 47),
(109, 'Portrait | Photo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum feugiat massa a tincidunt. Integer eget dolor dictum, sagittis elit nec, posuere neque. Integer aliquam elit ut nisi congue, sit amet dictum erat vulputate. Phasellus vitae venenatis enim. Suspendisse vel lacus vel nisi dapibus dapibus id et sapien. Fusce malesuada purus at dui', 'assets/images/uploads/ARTISTE-Cesar-rincon.jpg', 53),
(110, 'Installation interactive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum feugiat massa a tincidunt. Integer eget dolor dictum, sagittis elit nec, posuere neque. Integer aliquam elit ut nisi congue, sit amet dictum erat vulputate. Phasellus vitae venenatis enim. Suspendisse vel lacus vel nisi dapibus dapibus id et sapien. Fusce malesuada purus at dui', 'assets/images/uploads/expo-image4.jpg', 54);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `email`, `avatar`) VALUES
(50, 'Lalex', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'alex.l@gmail.com', 'assets/images/avatar/ARTISTE-Midas-hofstra.jpg'),
(49, 'bob', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'spongeBob@gmail.com', 'assets/images/avatar/ARTISTE-tim-zankert.jpg'),
(48, 'Jojo', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'john.doe@gmail.com', 'assets/images/avatar/ARTISTE-Aurelien-thomas.jpg'),
(47, 'dotriocour', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'mauriaucourt.sarah@gmail.com', 'assets/images/avatar/vinicius-amnx-amano.jpg'),
(51, 'ines ', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'ines@hotmail.com', 'assets/images/avatar/ARTISTE-rever-mathylde.jpg'),
(52, 'kajol', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'kajol@gmail.com', 'assets/images/avatar/ARTISTE-rever-mathylde.jpg'),
(53, 'BoyWithUke', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'bwy@hotmail.fr', 'assets/images/avatar/ARTISTE-Noah-buscher.jpg'),
(54, 'Oliver Tree', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'oliver.tree@gmail.com', 'assets/images/avatar/ARTISTE-yuyeung-lau.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
