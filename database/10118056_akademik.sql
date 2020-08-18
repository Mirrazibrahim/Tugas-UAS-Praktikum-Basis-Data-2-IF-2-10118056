-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: 10118056_akademik
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dosen` (
  `id_dosen` int NOT NULL AUTO_INCREMENT,
  `nip` int NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_mk` int NOT NULL,
  PRIMARY KEY (`id_dosen`),
  KEY `id_mk` (`id_mk`),
  CONSTRAINT `fk_mk_dosen` FOREIGN KEY (`id_mk`) REFERENCES `matakuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosen`
--

LOCK TABLES `dosen` WRITE;
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` VALUES (1,101010,'Andri Heryandi, MT.','AndriHeryandi@gmail.com',10),(2,101011,'Alif Finandhita, S.Kom,M.T','aliffinandhita@gmail.com',5),(3,101012,'Maya Hermawati, S.Kom., M.Kom.','mayahermawati@gmail.com',7),(4,101013,'Angga Setiyadi, M.Kom.','anggasetiyadi@gmail.com',8),(5,101014,'Chrismikha Haryanto, M.Kom.','chrismikhaharyanto@gmail.com',2),(6,101014,'Rani Susanto, S.Kom., M.Kom.','ranisusanto@gmail.com',1),(7,101015,'Dedeng Hirawan, S.Kom.,M.Kom.','dedeng hirawan@gmail.com',9);
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mahasiswa` (
  `id_mhs` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nim` int NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (1,'Mirraz Ibrahim',10118056,'Serang'),(3,'Muhammad Rakha Firdaus',10118059,'Tanggerang'),(8,'Steven Danesswaralay',10118078,'Serang'),(10,'Fikri Maulana Amir',10118074,'Bandung');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matakuliah` (
  `id_mk` int NOT NULL AUTO_INCREMENT,
  `matakuliah` varchar(30) NOT NULL,
  `sks` int NOT NULL,
  PRIMARY KEY (`id_mk`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matakuliah`
--

LOCK TABLES `matakuliah` WRITE;
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` VALUES (1,'Sistem Informasi',3),(2,'Rekayasa Perangkat Lunak',3),(5,'Basis Data2',4),(7,'Metode Numerik',3),(8,'Program Visual GUI',3),(9,'Sistem Operasi',3),(10,'Aplikasi Teknologi Online',3);
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai`
--

DROP TABLE IF EXISTS `nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nilai` (
  `id_nilai` int NOT NULL AUTO_INCREMENT,
  `id_mhs` int NOT NULL,
  `id_mk` int NOT NULL,
  `absen` int NOT NULL,
  `tugas` int NOT NULL,
  `uts` int NOT NULL,
  `uas` int NOT NULL,
  `na` int NOT NULL,
  `index` char(1) NOT NULL,
  `keterangan` varchar(11) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `fk_mhs_nilai` (`id_mhs`),
  KEY `fk_mk_nilai` (`id_mk`),
  CONSTRAINT `fk_mhs_nilai` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mk_nilai` FOREIGN KEY (`id_mk`) REFERENCES `matakuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai`
--

LOCK TABLES `nilai` WRITE;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` VALUES (4,1,9,90,89,87,80,85,'A','LULUS'),(5,3,9,80,76,89,79,82,'A','LULUS'),(7,8,9,70,89,78,66,75,'B','LULUS'),(8,10,9,78,68,77,65,71,'B','LULUS'),(9,1,5,100,89,79,77,82,'A','LULUS'),(10,3,5,96,86,79,77,81,'A','LULUS'),(11,8,5,89,68,77,69,73,'B','LULUS');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-18 20:47:12
