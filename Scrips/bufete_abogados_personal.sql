-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bufete_abogados
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal` (
  `ID_Personal` int NOT NULL AUTO_INCREMENT,
  `id_departamento` int NOT NULL,
  `id_puesto` int NOT NULL,
  `id_bufete` int NOT NULL,
  `Nombre` varchar(10) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_Personal`),
  KEY `id_departamento` (`id_departamento`),
  KEY `id_puesto` (`id_puesto`),
  KEY `id_bufete` (`id_bufete`),
  CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `puesto` (`ID_Puesto`),
  CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`id_puesto`) REFERENCES `departamento` (`ID_Departamento`),
  CONSTRAINT `personal_ibfk_3` FOREIGN KEY (`id_bufete`) REFERENCES `bufete_abogado` (`ID_Bufete`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (8,342,7,1099,'ANTHONY','SIBAJA',534662131,'ANTONYEMAIL','SANVITO'),(12,342,7,1099,'NICOLAS','MAQUIAVELO',57489453,'NICOLASEMAIL','GOLFITO'),(17,230,90,1099,'DIEGO','REYES',98789721,'DIEMOEMAIL','CIVIL PUEBLO');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-17 22:04:05
