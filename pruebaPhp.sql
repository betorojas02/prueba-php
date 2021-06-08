-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para pruebaphp
CREATE DATABASE IF NOT EXISTS `pruebaphp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pruebaphp`;

-- Volcando estructura para tabla pruebaphp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `documento` bigint(50) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `pais` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pruebaphp.users: ~2 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nombre`, `documento`, `email`, `pais`, `password`) VALUES
	(6, 'beto', 10184778702, 'elcdbetorojas@gmail.com', 'colombia', '$2y$10$Upaui/SHPy9xUsp0oLh1r.BTddCExwzW81B6yL0km.hY3bx.IrbWe'),
	(7, 'andrea', 1017, 'andrea@gmail.com', 'colombia', '$2y$10$rQW1.TcY0lGeCE6m/gOgvuMDwyPpKRmk2IKDbD4ZeaZg2BaZifaku');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
