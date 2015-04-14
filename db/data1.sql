-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: registro_citas
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `clase`
--

DROP TABLE IF EXISTS `clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clase` (
  `clase_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_clase` varchar(100) NOT NULL,
  `descripcion_clase` varchar(200) NOT NULL,
  `fecha_clase` date NOT NULL,
  `hora_inicio_clase` time NOT NULL,
  `hora_fin_clase` time NOT NULL,
  `duracion_minuto_clase` tinyint(4) NOT NULL,
  `tipo_clase_id` int(10) unsigned NOT NULL,
  `salon_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`clase_id`),
  KEY `tipo_clase_id_idx` (`tipo_clase_id`),
  KEY `salon_id_idx` (`salon_id`),
  CONSTRAINT `tipo_clase_id` FOREIGN KEY (`tipo_clase_id`) REFERENCES `tipo_clase` (`tipo_clase_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `salon_id` FOREIGN KEY (`salon_id`) REFERENCES `salon` (`salon_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clase`
--

LOCK TABLES `clase` WRITE;
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `cliente_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(100) NOT NULL,
  `apellido_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `cedula_cliente` varchar(8) NOT NULL,
  `telefono_cliente` varchar(11) NOT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `cedula_cliente_UNIQUE` (`cedula_cliente`),
  UNIQUE KEY `email_cliente_UNIQUE` (`email_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'admin','admin','admin','admin','admin');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dia_feriado`
--

DROP TABLE IF EXISTS `dia_feriado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dia_feriado` (
  `dia_feriado_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_dia_feriado` date NOT NULL,
  `descripcion_dia_feriado` varchar(100) NOT NULL,
  PRIMARY KEY (`dia_feriado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dia_feriado`
--

LOCK TABLES `dia_feriado` WRITE;
/*!40000 ALTER TABLE `dia_feriado` DISABLE KEYS */;
/*!40000 ALTER TABLE `dia_feriado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor_clase`
--

DROP TABLE IF EXISTS `instructor_clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor_clase` (
  `instructor_clase_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `clase_id` int(10) unsigned NOT NULL,
  `rol_instructor_clase` int(11) NOT NULL,
  PRIMARY KEY (`instructor_clase_id`),
  KEY `usuario_id_idx` (`usuario_id`),
  KEY `clase_id_idx` (`clase_id`),
  CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `clase_id` FOREIGN KEY (`clase_id`) REFERENCES `clase` (`clase_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor_clase`
--

LOCK TABLES `instructor_clase` WRITE;
/*!40000 ALTER TABLE `instructor_clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `instructor_clase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salon`
--

DROP TABLE IF EXISTS `salon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salon` (
  `salon_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_salon` varchar(45) NOT NULL,
  `ubicacion_salon` varchar(200) NOT NULL,
  PRIMARY KEY (`salon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salon`
--

LOCK TABLES `salon` WRITE;
/*!40000 ALTER TABLE `salon` DISABLE KEYS */;
/*!40000 ALTER TABLE `salon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_clase`
--

DROP TABLE IF EXISTS `tipo_clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_clase` (
  `tipo_clase_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_clase` varchar(100) NOT NULL,
  PRIMARY KEY (`tipo_clase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_clase`
--

LOCK TABLES `tipo_clase` WRITE;
/*!40000 ALTER TABLE `tipo_clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_clase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `tipo_usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_usuario` varchar(45) NOT NULL,
  `activo` bit(1) DEFAULT b'1',
  PRIMARY KEY (`tipo_usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'Administrador','');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) NOT NULL,
  `clave_usuario` varchar(45) NOT NULL,
  `tipo_usuario_id` int(10) unsigned NOT NULL,
  `activo` bit(1) NOT NULL,
  `cliente_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `nombre_usuario_UNIQUE` (`nombre_usuario`),
  KEY `tipo_usuario_id_idx` (`tipo_usuario_id`),
  KEY `cliente_id_idx` (`cliente_id`),
  CONSTRAINT `tipo_usuario_id` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`tipo_usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','admin',1,'',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-14 10:23:54
