-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               5.5.27 - MySQL Community Server (GPL)
-- Server Betriebssystem:        Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Datenbank Struktur für bank_codes
CREATE DATABASE IF NOT EXISTS `bank_codes` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bank_codes`;


-- Exportiere Struktur von Tabelle bank_codes.bankcodes
CREATE TABLE IF NOT EXISTS `bankcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `bank_code` varchar(20) NOT NULL DEFAULT '0',
  `bic` varchar(16) NOT NULL DEFAULT '0',
  `location` varchar(60) NOT NULL DEFAULT '0',
  `zip_code` varchar(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `bank_code` (`bank_code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Exportiere Daten aus Tabelle bank_codes.bankcodes: ~9 rows (ungefähr)
/*!40000 ALTER TABLE `bankcodes` DISABLE KEYS */;
INSERT INTO `bankcodes` (`id`, `name`, `bank_code`, `bic`, `location`, `zip_code`) VALUES
	(1, 'Bankhaus Dr. Masel', '10110300', 'MACODEB1XXX', 'Berlin', '14004'),
	(2, 'Isbank Fil Berlin', '10130600', 'ISBKDEFXBER', 'Berlin', '13303'),
	(3, 'BIW Bank', '10130800', 'BIWBDE33XXX', 'Willich', '47877'),
	(4, 'Commerzbank', '37040044', 'COBADEFF370', 'Köln', '50447'),
	(5, 'Kreissparkasse Kölln', '37050299', 'COKSDE33XXX', 'Köln', '50461'),
	(6, 'Sparda-Bank West', '37060590', 'GENODED1SPK', 'Köln', '50471'),
	(7, 'Pax-Bank', '37060193', 'GENODED1PAX', 'Köln', '50467'),
	(8, 'Bensberger Bank', '37062124', 'GENODED1BGL', 'Bergisch Gladbach', '51401'),
	(9, 'Raiffeisenbank Frechen-Hürth', '37062365', 'GENODED1FHH', 'Hürth, Rheinl', '50354'),
	(10, 'Volksbank Odenwald', '50863513', 'GENODE51MIC', 'Michelstadt', '64720');
/*!40000 ALTER TABLE `bankcodes` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
