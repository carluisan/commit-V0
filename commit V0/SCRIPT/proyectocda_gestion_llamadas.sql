CREATE DATABASE  IF NOT EXISTS `proyectocda` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `proyectocda`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectocda
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gestion_llamadas`
--

DROP TABLE IF EXISTS `gestion_llamadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gestion_llamadas` (
  `id_llamada` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(20) DEFAULT NULL,
  `id_vehiculo_placa` varchar(20) DEFAULT NULL,
  `fecha_hora_g` datetime DEFAULT NULL,
  `notas` text DEFAULT NULL,
  PRIMARY KEY (`id_llamada`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_vehiculo_placa` (`id_vehiculo_placa`),
  CONSTRAINT `gestion_llamadas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `gestion_llamadas_ibfk_2` FOREIGN KEY (`id_vehiculo_placa`) REFERENCES `vehiculo` (`id_vehiculo_placa`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestion_llamadas`
--

LOCK TABLES `gestion_llamadas` WRITE;
/*!40000 ALTER TABLE `gestion_llamadas` DISABLE KEYS */;
INSERT INTO `gestion_llamadas` VALUES (1,'80030149','MPX163','2024-05-12 11:00:00','En esta llamada, el señor Luis Sandoval, manifiesta que le enviemos cotización 2024-05-14 14:00:00');
/*!40000 ALTER TABLE `gestion_llamadas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-21  0:33:23
