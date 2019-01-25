-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: BCC
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `groupA`
--

DROP TABLE IF EXISTS `groupA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groupA` (
  `teamID` varchar(10) NOT NULL,
  `teamName` varchar(30) NOT NULL,
  `matches` int(2) NOT NULL,
  `won` int(2) NOT NULL,
  `lost` int(2) DEFAULT NULL,
  `tied` int(2) NOT NULL,
  `points` int(2) NOT NULL,
  `NRR` int(4) NOT NULL,
  PRIMARY KEY (`teamID`),
  UNIQUE KEY `teamName` (`teamName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groupA`
--

LOCK TABLES `groupA` WRITE;
/*!40000 ALTER TABLE `groupA` DISABLE KEYS */;
INSERT INTO `groupA` VALUES ('csk','Chennai Super Kings',3,3,3,3,3,333),('dd','Delhi Daredvils',1,1,1,1,2,222),('kkr','Kolkata Knight Riders',1,1,1,1,1,1),('kxip','Kings XI punjab',1,1,1,1,1,1),('mi','Mumbai Indians',6,5,1,0,10,245),('rcb','Royal Challengers Banglore',5,5,5,5,5,5),('rr','Rajasthan Royals',1,1,1,1,1,1),('srh','Sunrisers Hydrabad',0,0,0,0,0,0);
/*!40000 ALTER TABLE `groupA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('Rizzu1023','1892623114');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule2018`
--

DROP TABLE IF EXISTS `schedule2018`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule2018` (
  `matchID` int(7) NOT NULL,
  `team1ID` varchar(6) NOT NULL,
  `team1Name` varchar(30) NOT NULL,
  `team2ID` varchar(6) NOT NULL,
  `team2Name` varchar(30) NOT NULL,
  `groupName` varchar(7) DEFAULT NULL,
  `days` varchar(10) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  PRIMARY KEY (`matchID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule2018`
--

LOCK TABLES `schedule2018` WRITE;
/*!40000 ALTER TABLE `schedule2018` DISABLE KEYS */;
INSERT INTO `schedule2018` VALUES (3,'rcb','Royel Challengers Banglore','mi','Mumbai Indains','groupA','Friday','2019-12-12','12:00:00'),(4,'dd','Delhi Daredvils','srh','Sunrisers Hydrabad','GroupA','Friday','2018-11-11','12:00:00'),(6,'rr','Rajasthan Royals','dd','Delhi Darelvils','GroupB','Friday','2018-11-11','11:00:00');
/*!40000 ALTER TABLE `schedule2018` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-17 22:05:59
