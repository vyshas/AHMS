-- MySQL dump 10.11
--
-- Host: localhost    Database: student
-- ------------------------------------------------------
-- Server version	5.0.67

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
-- Table structure for table `ackn`
--

DROP TABLE IF EXISTS `ackn`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `ackn` (
  `jobid` varchar(20) default NULL,
  `uid` varchar(20) default NULL,
  `euid` varchar(25) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ackn`
--

LOCK TABLES `ackn` WRITE;
/*!40000 ALTER TABLE `ackn` DISABLE KEYS */;
/*!40000 ALTER TABLE `ackn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `approval`
--

DROP TABLE IF EXISTS `approval`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `approval` (
  `eventdate` date default NULL,
  `subject` varchar(30) default NULL,
  `details` varchar(60) default NULL,
  `uid` varchar(40) default NULL,
  `numb` int(11) default NULL,
  `jobid` varchar(20) default NULL,
  `status` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `approval`
--

LOCK TABLES `approval` WRITE;
/*!40000 ALTER TABLE `approval` DISABLE KEYS */;
INSERT INTO `approval` VALUES ('0000-00-00','dummy','dummy','dummy',1,'','1');
/*!40000 ALTER TABLE `approval` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bonafide`
--

DROP TABLE IF EXISTS `bonafide`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `bonafide` (
  `uid` varchar(60) default NULL,
  `date` date default NULL,
  `purpose` varchar(500) default NULL,
  `numb` int(11) default NULL,
  `status` varchar(20) default NULL,
  `jobid` varchar(20) default NULL,
  `dday` int(11) default NULL,
  `bstatus` varchar(25) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `bonafide`
--

LOCK TABLES `bonafide` WRITE;
/*!40000 ALTER TABLE `bonafide` DISABLE KEYS */;
INSERT INTO `bonafide` VALUES ('dummy','0000-00-00','0',48,'Failed','8',10,NULL);
/*!40000 ALTER TABLE `bonafide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collaboration`
--

DROP TABLE IF EXISTS `collaboration`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `collaboration` (
  `name` varchar(20) default NULL,
  `specialization` varchar(20) default NULL,
  `Email` varchar(25) default NULL,
  `phone` varchar(20) default NULL,
  `address` varchar(60) default NULL,
  `website` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `collaboration`
--

LOCK TABLES `collaboration` WRITE;
/*!40000 ALTER TABLE `collaboration` DISABLE KEYS */;
/*!40000 ALTER TABLE `collaboration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `employees` (
  `name` varchar(20) default NULL,
  `dob` date default NULL,
  `address` varchar(50) default NULL,
  `phone` varchar(20) default NULL,
  `uid` varchar(20) default NULL,
  `psswd` varchar(20) default NULL,
  `role` varchar(60) default NULL,
  `class` varchar(60) default NULL,
  `tbname` varchar(60) default NULL,
  `avleaves` int(11) default NULL,
  `managerof` varchar(30) default NULL,
  `managedby` varchar(30) default NULL,
  `email` varchar(45) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES ('Sachin','1965-04-21','near samplige tree,gulbarga','9986306637','sachin21','infotech','STUDY CERTIFICATE ISSUER','Class 3','study_certificate',15,NULL,'dinesh12','sachin44@gmail.com'),('Manish','1986-05-11','\r\n11,pulikesi road,delhi\r\n','01125679876','manish11','saptech','NO-DUE CERTIFICATE ISSUER','Class 3',NULL,15,NULL,'dinesh12','manish12@yahoo.com'),('Rahul','1987-08-01','\r\n2,banagar road,bangalore\r\n','08024534698','rahul1','sycosis','BONAFIDE CERTIFICATE ISSUER','Class 3','bonafide',15,NULL,'dinesh12','rahul007@hotmail.com'),('Vijay','1988-10-25','\r\n34,belur road,chikmagakur\r\n','08024534234','vijay25','kumar','EXTERNAL SERVICE MANAGER','Class 2',NULL,15,NULL,NULL,'vijay220@yahoo.co.in'),('Deepika','1986-01-12','\r\n14,hosur road,bangalore\r\n','08024523456','deepika12','infosys','CLASS CO-ORDINATOR A','Class 3','',15,'A','girish9','deepika22@gmail.com'),('Dinesh','1970-10-20','\r\nbanaras street mumbai\r\n','7655654325','dinesh12','tcs','DOCUMENTATION MANAGER','Class 2','',15,NULL,'bigb19','dinesh@gmail.com'),('Krupal','1980-01-20','\r\n hamara house koppa  \r\n','9986753554','krupal20','google','CLASS CO-ORDINATOR B','Class 3','',15,'B','girish9','krupal224@gmail.com'),('Girish','1980-05-09','\r\n11,namma angadi,mysore\r\n','345678123','girish9','sap','HOD','Class 2','',8,'','bigb19','girish2000@rediffmail.com'),('Big B','1980-05-19','\r\n\r\n11,my home ,mysore\r\n\r\n','3444654','bigb19','landt','PRINCIPAL','Class 1','',15,'','','biggestb@gmail.com'),('Sathish','1988-06-25','\r\n205,ait boys hostel\r\n','9739866972','sathish20','xpcdkey','HELPDESK MANAGER','Class 2','',15,'','bigb19','saty@gmail.com'),('samanth','1978-12-12','\r\n31,basavanagar mysore\r\n','456788765','samanth12','satyam','STUDY CERTIFICATE ISSUER BACKUP','Class 3','study_certificate',15,'','dinesh12','samanth@gmail.com'),('Suresh','1960-05-21','\r\n12,your home,madikeri\r\n','420345675432','suresh21','works','BONAFIDE CERTIFICATE ISSUER BACKUP','Class 3','bonafide',15,'','dinesh12','suresh101@gmail.com');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employment`
--

DROP TABLE IF EXISTS `employment`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `employment` (
  `name` varchar(20) default NULL,
  `dob` date default NULL,
  `sex` varchar(4) default NULL,
  `category` varchar(20) default NULL,
  `Email` varchar(25) default NULL,
  `phone` varchar(20) default NULL,
  `address` varchar(60) default NULL,
  `qualification` varchar(31) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `employment`
--

LOCK TABLES `employment` WRITE;
/*!40000 ALTER TABLE `employment` DISABLE KEYS */;
/*!40000 ALTER TABLE `employment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `feedback` (
  `name` varchar(30) default NULL,
  `email` varchar(30) default NULL,
  `phone` varchar(30) default NULL,
  `q1` varchar(5) default NULL,
  `q2` varchar(5) default NULL,
  `q3` varchar(20) default NULL,
  `q4` varchar(20) default NULL,
  `q5` varchar(20) default NULL,
  `q6` varchar(20) default NULL,
  `q7` varchar(20) default NULL,
  `q8` varchar(100) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES ('anil','ani@gmail.com','111111111','Yes','No','Friend','Average','Excellent','Poor','No','ready'),('12','wad@','234','No','No','Friend','Excellent','Excellent','Excellent','Yes','hh'),('as','ers@','32','No','No','Friend','Excellent','Excellent','Excellent','Yes','j'),('gagab','sd@','32874','Yes','Yes','Friend','Excellent','Excellent','Excellent','Yes','f'),('Tanvir','tavi@gmail.com','9098765421','Yes','No','Yes','Yes','Yes','Yes','Yes','sad');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `helpdesk`
--

DROP TABLE IF EXISTS `helpdesk`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `helpdesk` (
  `subject` varchar(20) default NULL,
  `comment` varchar(60) default NULL,
  `uid` varchar(20) default NULL,
  `name` varchar(50) default NULL,
  `status` varchar(20) default NULL,
  `jobid` varchar(5) default NULL,
  `numb` int(11) default NULL,
  `date` date default NULL,
  `dday` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `helpdesk`
--

LOCK TABLES `helpdesk` WRITE;
/*!40000 ALTER TABLE `helpdesk` DISABLE KEYS */;
INSERT INTO `helpdesk` VALUES ('dummy','','dummy','','','',44,'0000-00-00',10);
/*!40000 ALTER TABLE `helpdesk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `helpdesk_ans`
--

DROP TABLE IF EXISTS `helpdesk_ans`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `helpdesk_ans` (
  `uid` varchar(20) default NULL,
  `subject` varchar(50) default NULL,
  `comment` varchar(1000) default NULL,
  `jobid` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `helpdesk_ans`
--

LOCK TABLES `helpdesk_ans` WRITE;
/*!40000 ALTER TABLE `helpdesk_ans` DISABLE KEYS */;
/*!40000 ALTER TABLE `helpdesk_ans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `history` (
  `uid` varchar(20) default NULL,
  `requesttype` varchar(50) default NULL,
  `date` date default NULL,
  `time` varchar(50) default NULL,
  `jobid` varchar(20) default NULL,
  `status` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_emp`
--

DROP TABLE IF EXISTS `history_emp`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `history_emp` (
  `uid` varchar(20) default NULL,
  `requesttype` varchar(50) default NULL,
  `date` date default NULL,
  `time` varchar(50) default NULL,
  `jobid` varchar(20) default NULL,
  `status` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `history_emp`
--

LOCK TABLES `history_emp` WRITE;
/*!40000 ALTER TABLE `history_emp` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_emp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `internship` (
  `name` varchar(25) default NULL,
  `institution` varchar(50) default NULL,
  `qualification` varchar(60) default NULL,
  `Email` varchar(30) default NULL,
  `phone` int(11) default NULL,
  `address` varchar(90) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `internship`
--

LOCK TABLES `internship` WRITE;
/*!40000 ALTER TABLE `internship` DISABLE KEYS */;
/*!40000 ALTER TABLE `internship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lms`
--

DROP TABLE IF EXISTS `lms`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `lms` (
  `datefrom` date default NULL,
  `dateto` date default NULL,
  `reason` varchar(50) default NULL,
  `uid` varchar(20) default NULL,
  `numb` int(11) default NULL,
  `jobid` varchar(20) default NULL,
  `status` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `lms`
--

LOCK TABLES `lms` WRITE;
/*!40000 ALTER TABLE `lms` DISABLE KEYS */;
INSERT INTO `lms` VALUES ('0000-00-00','0000-00-00','dummy','dummy',0,'','1');
/*!40000 ALTER TABLE `lms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lms_emp`
--

DROP TABLE IF EXISTS `lms_emp`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `lms_emp` (
  `datefrom` date default NULL,
  `dateto` date default NULL,
  `reason` varchar(60) default NULL,
  `uid` varchar(20) default NULL,
  `numb` int(11) default NULL,
  `jobid` varchar(20) default NULL,
  `status` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `lms_emp`
--

LOCK TABLES `lms_emp` WRITE;
/*!40000 ALTER TABLE `lms_emp` DISABLE KEYS */;
INSERT INTO `lms_emp` VALUES ('0000-00-00','0000-00-00','dummy','dummy',69,'','1');
/*!40000 ALTER TABLE `lms_emp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logged`
--

DROP TABLE IF EXISTS `logged`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `logged` (
  `name` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `logged`
--

LOCK TABLES `logged` WRITE;
/*!40000 ALTER TABLE `logged` DISABLE KEYS */;
INSERT INTO `logged` VALUES ('Dinesh');
/*!40000 ALTER TABLE `logged` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `mail` (
  `sender` varchar(50) default NULL,
  `receiver` varchar(50) default NULL,
  `subject` varchar(50) default NULL,
  `mesg` varchar(1000) default NULL,
  `date` date default NULL,
  `time` varchar(20) default NULL,
  `status` varchar(20) default NULL,
  `mid` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `mail`
--

LOCK TABLES `mail` WRITE;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;
/*!40000 ALTER TABLE `mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nodues`
--

DROP TABLE IF EXISTS `nodues`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `nodues` (
  `usn` varchar(10) default NULL,
  `misc` int(11) default NULL,
  `total` int(11) default NULL,
  `status` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `nodues`
--

LOCK TABLES `nodues` WRITE;
/*!40000 ALTER TABLE `nodues` DISABLE KEYS */;
INSERT INTO `nodues` VALUES ('4ai05cs087',0,320,'n'),('4ai05cs077',0,320,'n'),('4ai05me067',0,231,'n'),('4ai07ec100',0,140,'n'),('4ai07ip012',0,318,'n'),('4ai07me076',0,231,'n'),('4ai05cv086',0,1121,'n'),('4ai05me086',0,0,'n'),('4ai05ec007',0,140,'n'),('4ai07ec026',0,140,'n'),('4ai08cs048',0,320,'n'),('4ai05ip076',0,318,'n'),('4ai05me076',0,231,'n'),('4ai08ev056',0,240,'n'),('4ai04is009',0,241,'n'),('4ai05ec079',0,140,'n'),('4ai05is033',0,241,'n'),('4ai05is057',0,241,'n'),('4ai05me060',0,231,'n'),('4ai05cs034',0,320,'n'),('123',0,0,'n'),('19909',0,0,'n'),('4ai05cs001',0,320,'n');
/*!40000 ALTER TABLE `nodues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nodues_branch`
--

DROP TABLE IF EXISTS `nodues_branch`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `nodues_branch` (
  `branch` varchar(30) default NULL,
  `amnt` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `nodues_branch`
--

LOCK TABLES `nodues_branch` WRITE;
/*!40000 ALTER TABLE `nodues_branch` DISABLE KEYS */;
INSERT INTO `nodues_branch` VALUES ('Industrial Production',198),('Administration',100),('Library',20),('Civil',1001),('Computer Science',200),('Electrical',160),('Electronics',200),('Environmental',120),('Information Science',121),('Mechanical',111);
/*!40000 ALTER TABLE `nodues_branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `report` (
  `uid` varchar(27) default NULL,
  `date` date default NULL,
  `numb` int(11) default NULL,
  `status` varchar(30) default NULL,
  `jobid` varchar(29) default NULL,
  `mday` int(11) default NULL,
  `mstatus` varchar(24) default NULL,
  `bstatus` varchar(38) default NULL,
  `dday` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studinfo`
--

DROP TABLE IF EXISTS `studinfo`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `studinfo` (
  `name` varchar(20) default NULL,
  `usn` varchar(20) default NULL,
  `sem` int(11) default NULL,
  `phone` varchar(20) default NULL,
  `dob` date default NULL,
  `addr` varchar(60) default NULL,
  `uid` varchar(20) default NULL,
  `psswd` varchar(20) default NULL,
  `sex` varchar(3) default NULL,
  `branch` varchar(30) default NULL,
  `managedby` varchar(30) default NULL,
  `email` varchar(40) default NULL,
  `section` varchar(2) default NULL,
  `secretkey` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `studinfo`
--

LOCK TABLES `studinfo` WRITE;
/*!40000 ALTER TABLE `studinfo` DISABLE KEYS */;
INSERT INTO `studinfo` VALUES ('Azad','4ai05cs087',8,'08024534234','1986-08-01','near mallya hospital,bangalore','azad.05.cs','dog','m','COMPUTER SCIENCE','krupal20','azad121@gmail.com','B','1242127482'),('Hareesh','4ai05cs001',6,'9900813833','1972-03-06','qwerty','hareesh.05.cs','hary','m','COMPUTER SCIENCE','deepika12','hary@gmail.com','A','1242045204');
/*!40000 ALTER TABLE `studinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `study_certificate`
--

DROP TABLE IF EXISTS `study_certificate`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `study_certificate` (
  `uid` varchar(20) default NULL,
  `date` date default NULL,
  `numb` int(11) default NULL,
  `status` varchar(20) default NULL,
  `jobid` varchar(20) default NULL,
  `dday` int(11) default NULL,
  `bstatus` varchar(25) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `study_certificate`
--

LOCK TABLES `study_certificate` WRITE;
/*!40000 ALTER TABLE `study_certificate` DISABLE KEYS */;
INSERT INTO `study_certificate` VALUES ('dummy','0000-00-00',70,'Failed','0',10,NULL);
/*!40000 ALTER TABLE `study_certificate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-05-27 21:01:44
