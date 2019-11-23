-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5169
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gab
CREATE DATABASE IF NOT EXISTS `gab` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gab`;

-- Dumping structure for table gab.absence
CREATE TABLE IF NOT EXISTS `absence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_etudiant` int(11) NOT NULL,
  `crn_horaire` varchar(255) NOT NULL,
  `type_absence` varchar(255) NOT NULL,
  `is_old` tinyint(1) NOT NULL DEFAULT '0',
  `module` varchar(255) DEFAULT NULL,
  `professeur` int(11) DEFAULT NULL,
  `date_absence` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_etudiant` (`id_etudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Dumping data for table gab.absence: ~18 rows (approximately)
/*!40000 ALTER TABLE `absence` DISABLE KEYS */;
INSERT IGNORE INTO `absence` (`id`, `id_etudiant`, `crn_horaire`, `type_absence`, `is_old`, `module`, `professeur`, `date_absence`) VALUES
	(1, 1, '8-10', 'Absence justifiée', 1, 'programmation en c avancée', 7, NULL),
	(3, 1, '8-10', 'Absence justifiée', 1, 'programmation en c avancée', 7, '2017-05-19'),
	(4, 1, '8-10', 'Absence justifiée', 1, 'programmation en c avancée', 7, '2017-05-19'),
	(5, 1, '8-10', 'Absence non-justifiée', 1, 'programmation web', 7, '2017-05-15'),
	(6, 1, '8-10', 'Absence non-justifiée', 1, 'programmation web', 7, '2017-05-15'),
	(11, 1, '8-10', 'Absence non-justifiée', 1, 'programmation web', 7, '2017-05-15'),
	(12, 1, '8-10', 'Absence non-justifiée', 1, 'programmation web', 7, '2017-05-15'),
	(13, 1, '8-10', 'Absence non-justifiée', 1, 'programmation web', 7, '2017-05-15'),
	(14, 1, '8-10', 'Absence non-justifiée', 1, 'programmation web', 7, '2017-05-15'),
	(15, 1, '8-10', 'Absence justifiée', 1, 'programmation en c avancée', 1, '2017-05-16'),
	(16, 1, '8-10', 'Absence justifiée', 1, 'programmation en c avancée', 7, '0000-00-00'),
	(17, 2, '8-10', 'Absence non-justifiée', 0, 'programmation en c avancée', 7, '0000-00-00'),
	(18, 2, '8-10', 'Absence justifiée', 0, 'programmation en c avancée', 7, '0000-00-00'),
	(19, 2, '8-10', 'Absence non-justifiée', 0, 'programmation en c avancée', 7, '0000-00-00'),
	(20, 2, '8-10', 'Absence non-justifiée', 0, 'programmation en c avancée', 1, '0000-00-00'),
	(21, 2, '8-10', 'Absence non-justifiée', 0, 'programmation en c avancée', 1, '0000-00-00'),
	(22, 1, '13-15', 'Absence non-justifiée', 0, 'architectures des ordinateurs et  assembleur ', 7, '0000-00-00'),
	(23, 1, '8-10', 'Absence non-justifiée', 0, 'programmation en c avancée', 7, '2017-05-14');
/*!40000 ALTER TABLE `absence` ENABLE KEYS */;

-- Dumping structure for table gab.element_module
CREATE TABLE IF NOT EXISTS `element_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `proportion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `module` (`module`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table gab.element_module: ~1 rows (approximately)
/*!40000 ALTER TABLE `element_module` DISABLE KEYS */;
INSERT IGNORE INTO `element_module` (`id`, `module`, `intitule`, `proportion`) VALUES
	(1, 1, 'Algèbre', '');
/*!40000 ALTER TABLE `element_module` ENABLE KEYS */;

-- Dumping structure for table gab.etudiant
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cne` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` text NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table gab.etudiant: ~4 rows (approximately)
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` (`id`, `id_user`, `cin`, `nom`, `cne`, `prenom`, `date_naissance`, `adresse`, `lieu_naissance`, `telephone`, `email`) VALUES
  (1, 8, 'LE20225', 'Ahmed', '1122558899', 'Saleh', '1996-02-11', 'Martil', 'Martil', '06666666', 'ahmedsaleh@gmail.com'),
  (2, 9, 'BJ430880', 'ADIB', '2222222', 'Houssam', '2017-05-25', 'Hello World', 'Casablanca', '+212655552785', 'adibhousam@gmail.com'),
  (3, 10, '123456789', 'Leila', '222222222', 'Benis', '2017-05-17', 'adress rue appart', 'lieu de naissance', '0655555555', 'Leila@gmai.com'),
  (4, 11, 'ss', 'professeur', 'ss', 'ss', '2018-02-02', 'ss', 'ss', 'ss', 'ss@ss');
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;

-- Dumping structure for table gab.module
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_module` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table gab.module: ~5 rows (approximately)
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT IGNORE INTO `module` (`id`, `nom_module`, `nature`) VALUES
	(2, 'programmation en c avancée', 'Module scientifique et technique'),
	(3, 'programmation web', 'Module scientifique et technique'),
	(4, 'architectures des ordinateurs et  assembleur ', 'Module scientifique et technique'),
	(5, 'compilation et théorie des langages', 'Module scientifique et technique'),
	(6, 'système d\'exploitation', 'Module scientifique et technique');
/*!40000 ALTER TABLE `module` ENABLE KEYS */;

-- Dumping structure for table gab.professeur
CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `som` int(7) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table gab.professeur: ~1 rows (approximately)
/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;
INSERT IGNORE INTO `professeur` (`id`, `id_user`, `som`, `nom`, `prenom`, `email`, `telephone`) VALUES
	(1, 7, 7777777, 'Yacine', 'Lyounssi', 'yacine@gmail.com', '0666552288');
/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;

-- Dumping structure for table gab.utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT 'etudiant',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table gab.utilisateur: ~6 rows (approximately)
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT IGNORE INTO `utilisateur` (`id`, `login`, `password`, `type`) VALUES
	(1, 'admin', 'password', 'admin'),
	(7, 'professeur', 'password', 'professeur'),
	(8, 'etudiant', 'password', 'etudiant'),
	(9, 'mehdiaarab', 'password', 'etudiant'),
	(10, 'adib', '123456', 'etudiant'),
	(11, 'professeur', 'ss', 'etudiant');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
