-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: ict151
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_aut_fnc`
--

DROP TABLE IF EXISTS `t_aut_fnc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_aut_fnc` (
  `id_aut` int(10) unsigned NOT NULL,
  `id_fnc` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_aut`,`id_fnc`),
  UNIQUE KEY `id_aut` (`id_aut`,`id_fnc`),
  KEY `id_fnc` (`id_fnc`),
  CONSTRAINT `t_aut_fnc_ibfk_1` FOREIGN KEY (`id_aut`) REFERENCES `t_autorisations` (`id_aut`),
  CONSTRAINT `t_aut_fnc_ibfk_2` FOREIGN KEY (`id_fnc`) REFERENCES `t_fonctions` (`id_fnc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_aut_fnc`
--

LOCK TABLES `t_aut_fnc` WRITE;
/*!40000 ALTER TABLE `t_aut_fnc` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_aut_fnc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_autorisations`
--

DROP TABLE IF EXISTS `t_autorisations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_autorisations` (
  `id_aut` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_aut` varchar(100) NOT NULL,
  `code_aut` varchar(10) NOT NULL,
  `desc_aut` text NOT NULL,
  PRIMARY KEY (`id_aut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_autorisations`
--

LOCK TABLES `t_autorisations` WRITE;
/*!40000 ALTER TABLE `t_autorisations` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_autorisations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_fnc_per`
--

DROP TABLE IF EXISTS `t_fnc_per`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_fnc_per` (
  `id_fnc` int(10) unsigned NOT NULL,
  `id_per` int(10) unsigned NOT NULL,
  UNIQUE KEY `id_fnc_2` (`id_fnc`,`id_per`),
  KEY `id_fnc` (`id_fnc`),
  KEY `id_per` (`id_per`),
  CONSTRAINT `t_fnc_per_fk_per` FOREIGN KEY (`id_per`) REFERENCES `t_personnes` (`id_per`),
  CONSTRAINT `t_fnc_per_ibfk_1` FOREIGN KEY (`id_fnc`) REFERENCES `t_fonctions` (`id_fnc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_fnc_per`
--

LOCK TABLES `t_fnc_per` WRITE;
/*!40000 ALTER TABLE `t_fnc_per` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_fnc_per` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_fonctions`
--

DROP TABLE IF EXISTS `t_fonctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_fonctions` (
  `id_fnc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_fnc` varchar(100) NOT NULL,
  `abr_fnc` varchar(10) NOT NULL,
  `desc_fnc` text NOT NULL,
  PRIMARY KEY (`id_fnc`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_fonctions`
--

LOCK TABLES `t_fonctions` WRITE;
/*!40000 ALTER TABLE `t_fonctions` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_fonctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_personnes`
--

DROP TABLE IF EXISTS `t_personnes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_personnes` (
  `id_per` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_per` varchar(30) NOT NULL,
  `prenom_per` varchar(30) NOT NULL,
  `email_per` tinytext NOT NULL,
  `password_per` varchar(255) NOT NULL,
  `news_letter_per` int(11) NOT NULL,
  PRIMARY KEY (`id_per`),
  KEY `id_per` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_personnes`
--

LOCK TABLES `t_personnes` WRITE;
/*!40000 ALTER TABLE `t_personnes` DISABLE KEYS */;
INSERT INTO `t_personnes` VALUES (1,'Raoult','Didier','didier.raoult@gouv.fr','$2y$10$40VTPNUU0SpcHGsrcDQYXufBS8nFwImK9UeiI9.hOrpoEfG9Q/.xq',1),(26,'aa','aa','aa@aa.aa','$2y$10$ezZMg1QqsO1MEtT1cK4na.qBlwYbxem5umAzbIWbpmhbv9bFVQA4G',1),(27,'aa','aa','aa@aa.aa1','$2y$10$a2zn18UO93Dw2TpQ19VW5uMe8mMfFrczuEtynyYJbYBIxul4ebNR2',1);
/*!40000 ALTER TABLE `t_personnes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-25 13:02:50
