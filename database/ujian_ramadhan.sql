-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: ujian_ramadhan
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `daftar_artikel`
--

DROP TABLE IF EXISTS `daftar_artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daftar_artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titlePost` varchar(255) DEFAULT NULL,
  `authorPost` varchar(255) DEFAULT NULL,
  `editorPost` text,
  `categoryPost` varchar(255) DEFAULT NULL,
  `featureImage` varchar(255) DEFAULT NULL,
  `datePost` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_artikel`
--

LOCK TABLES `daftar_artikel` WRITE;
/*!40000 ALTER TABLE `daftar_artikel` DISABLE KEYS */;
INSERT INTO `daftar_artikel` VALUES (17,'pantai-parangtritis-cek','admin','<p data-block-key=\"5ku7c\">Pantai Parangtritis dikenal dengan larangan menggunakan baju berwarna hijau kalau berkunjung ke sini.</p>\r\n<p data-block-key=\"35h4k\">Masyarakat percaya bahwa warna hijau adalah warna favorit Nyi Roro Kidul selaku ratu penguasa pantai selatan.</p>\r\n<p data-block-key=\"2rk4s\">Mitosnya, ia akan menyeret siapapun yang memakai baju berwarna hijau ke tengah laut dengan ombak yang besar.</p>\r\n<p data-block-key=\"56k0m\">Tapi, hal ini hanyalah mitos belaka. Bahkan, Sultan Hamengkubuwono IX juga tidak memberikan keterangan lebih lanjut tentang hal ini.</p>\r\n<p data-block-key=\"3onca\">Menurutnya, semua itu terserah kepada yang bersangkutan untuk percaya atau tidak.</p>\r\n<div class=\"jsx-3943094059\">\r\n<div class=\"jsx-3943094059 inner-row my-8\">\r\n<div class=\"position-relative d-flex align-items-center justify-content-center flex-column\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"jsx-3943094059\">\r\n<div class=\"jsx-3943094059 content\">\r\n<p data-block-key=\"fmngh\">Sementara itu, kalau dilihat dari segi keamanannya, ada alasan logis tentang larangan memakai baju berwarna hijau di Pantai Parangtritis.</p>\r\n<p data-block-key=\"8dr\">Permukaan air pantai memang berwarna biru, tapi dasar laut berisi pasir, karang, rumput laut, dan lain-lain.</p>\r\n<p data-block-key=\"7u2qv\">Ketika terpapar cahaya matahari, warna air bisa berubah menjadi keruh sampai kehijauan.</p>\r\n<p data-block-key=\"4uc3o\">Jadi, kalau wisatawan memakai baju berwarna hijau, kemungkinan besar warna ini akan menyatu dengan warna laut sehingga menyulitkan pencarian.</p>\r\n<p data-block-key=\"6krs2\">Lain halnya kalau wisatawan menggunakan warna cerah lainnya seperti jingga atau merah yang lebih mencolok.</p>\r\n<p data-block-key=\"5v6cu\">Selain dilarang memakai baju warna hijau, wisatawan juga tidak diperbolehkan berenang sampai ke tengah laut.</p>\r\n<p data-block-key=\"9etkl\">Pasalnya, dikhawatirkan akan terjadi arus balik yang bisa menggerus pasir yang sedang dipijak wisatawan di bibir pantai.</p>\r\n</div>\r\n<div class=\"jsx-3943094059 inner-row my-8\">\r\n<div class=\"position-relative d-flex align-items-center justify-content-center flex-column\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"jsx-3943094059\">\r\n<div class=\"jsx-3943094059 content\">\r\n<p data-block-key=\"8uo10\">Hal ini dapat membuat wisatawan terseret hingga 100 m ke lepas pantai hanya dalam waktu 5 detik.</p>\r\n<p data-block-key=\"f0nkp\">Kondisi pantai yang seperti ini harus lebih diwaspadai sekitar bulan Juni karena musim angin tenggara mulai masuk ke daerah ini.</p>\r\n</div>\r\n</div>','pantai selatan','6433b483a781f.jpg','2023-05-11'),(18,'adsasdasdas','admin','<p>zxzxzxzxzxzxczxczxcxcz</p>','pantai','645f91d762bf6.jpg','2023-05-13'),(20,'ini-artikel-terbaru','admin','<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Suspendisse elit leo, tincidunt pharetra magna quis, molestie euismod est. Nam a velit at lorem elementum bibendum. Nam rhoncus nisl lobortis, vulputate lacus non, iaculis diam. Quisque tincidunt, velit at maximus volutpat, urna justo convallis ipsum, vitae tincidunt libero diam malesuada arcu. Mauris ut dapibus urna, non blandit sem. Nullam congue laoreet felis, non egestas erat volutpat scelerisque. Pellentesque ullamcorper, velit et gravida gravida, nulla quam faucibus nisl, id auctor mauris nulla nec ex. Sed sit amet diam ac velit ornare convallis eget vitae velit. Donec non egestas sem. Quisque lacinia vehicula porta.</p>\r\n<p>Morbi venenatis quam non dui cursus, sed lobortis elit blandit. Praesent pellentesque congue lacus a elementum. Nulla turpis justo, blandit vitae metus eget, laoreet viverra dui. Mauris ut sapien iaculis, maximus tortor at, condimentum eros. Nunc vel congue est. Ut id magna quis tortor pulvinar lobortis quis ac tellus. Mauris pretium justo pulvinar metus pulvinar eleifend. Maecenas finibus dapibus risus a consequat. Vestibulum ac est ante. In faucibus leo vitae mi pharetra sollicitudin. Etiam non tellus enim.</p>\r\n<p>In hac habitasse platea dictumst. Sed mollis placerat sapien vel accumsan. Ut feugiat felis nec ex ornare scelerisque. Mauris luctus et justo vel aliquam. Maecenas mattis consectetur elementum. Ut justo ante, lobortis eget tortor vel, consectetur feugiat felis. Proin dapibus dui porta nunc pellentesque, ac aliquet elit volutpat. Vivamus scelerisque mattis leo, vel pretium eros viverra vel. Nulla finibus turpis in tellus dignissim consectetur. Nullam ligula purus, consectetur sed lectus non, tincidunt elementum nisi. Suspendisse potenti. Nam tortor turpis, pharetra sed ullamcorper nec, laoreet varius mauris. Mauris maximus, nibh ut commodo euismod, felis tortor tempor diam, et scelerisque libero massa nec diam. Fusce placerat, nulla id hendrerit sodales, ligula lacus varius libero, quis blandit mauris justo sed ipsum.</p>\r\n<p>Curabitur a nisi dui. Nunc imperdiet lectus ac massa tristique placerat sed quis orci. Morbi ut volutpat lorem. Vestibulum nec condimentum tortor. Proin consectetur malesuada eros ac vulputate. Suspendisse ut elit nunc. Phasellus accumsan mi nec orci sagittis maximus. Ut id ex sit amet elit vestibulum molestie. Sed id tortor dapibus, placerat elit et, elementum dui. Curabitur imperdiet risus leo, in pharetra ex scelerisque ut. Integer viverra nisi in massa egestas finibus. Quisque eu est tempus, iaculis tellus ac, interdum tortor. Vivamus aliquam in nisi eget semper. Nunc dictum at nulla at suscipit. Nunc ut erat diam. Maecenas ullamcorper, nisl sit amet dignissim egestas, turpis erat dapibus mi, ut tristique felis massa luctus nisi.</p>\r\n<p>Cras vitae ullamcorper justo. Curabitur ut rhoncus nisi. Nam ante turpis, faucibus et malesuada ac, dignissim in neque. Phasellus et lectus ut augue ornare suscipit. Suspendisse malesuada cursus lacus, quis scelerisque leo sagittis finibus. In pulvinar, nunc vitae facilisis tincidunt, turpis purus ultricies ligula, ultrices tempor risus ante sit amet sapien. Phasellus sollicitudin nisl sit amet odio scelerisque facilisis. Duis sed dapibus nibh. Integer at vulputate ipsum. Duis lectus purus, facilisis in vehicula vitae, sodales nec quam.</p>\r\n<p>Integer euismod facilisis elementum. Fusce et nulla nec felis tristique finibus ac nec lacus. Ut placerat viverra nulla, nec rhoncus urna consequat ac. Proin aliquet, sapien non tempor commodo, lorem nibh scelerisque sem, nec blandit magna orci a leo. Curabitur nec semper nulla. Ut nec consequat quam, efficitur cursus sem. Pellentesque blandit metus justo, et viverra metus tincidunt ut. Quisque tempus eros urna, tristique tincidunt lorem blandit nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet ullamcorper nibh. Suspendisse bibendum, nunc ac pharetra efficitur, orci magna varius ligula, ut tempor tortor orci sed magna. Integer rutrum consectetur magna, ac sollicitudin erat suscipit vel. Sed sit amet nunc arcu. Morbi vitae ligula efficitur mi bibendum tristique non sit amet sem. Pellentesque nec neque quis urna ornare fringilla ut ac turpis. Morbi tincidunt diam eu ligula varius, sed ornare mauris fringilla.</p>\r\n<p>Praesent a odio luctus, malesuada eros ullamcorper, mollis lectus. Nulla sed mauris sapien. Duis vulputate elementum aliquet. Praesent sollicitudin ipsum lacus, ac fringilla mi sodales ut. Proin eu ipsum sed augue iaculis posuere. Maecenas congue augue eu nulla convallis mollis. Aliquam vulputate tempus felis sed tincidunt. In dictum pulvinar porta. Donec sapien risus, dictum quis nisi ac, commodo mattis leo. Quisque efficitur nulla sed rutrum iaculis. Quisque lacinia, diam vitae finibus bibendum, urna urna efficitur ex, porta condimentum tellus sapien interdum orci.</p>\r\n<p>Nunc sollicitudin tempus arcu non faucibus. Ut elementum ut lorem id rhoncus. Etiam lacinia nec lectus sed porttitor. Phasellus iaculis est risus, quis tristique erat aliquam eget. Fusce tincidunt lacus at metus viverra, non cursus justo placerat. Cras dapibus varius ante in pulvinar. Morbi aliquet in sem eu congue. Nulla venenatis elementum turpis, eu rhoncus enim volutpat quis. Curabitur dapibus, risus id euismod rhoncus, felis ipsum gravida metus, ac tempor lectus justo eget mauris. Etiam vel leo et dolor convallis pharetra in et metus. Nunc sodales nulla est, eget pellentesque purus semper vitae.</p>\r\n<p>Suspendisse feugiat odio et eros fringilla ultrices. Ut viverra odio eu maximus egestas. Suspendisse luctus augue id ipsum interdum, et eleifend velit dignissim. Maecenas vitae malesuada elit, quis consequat diam. Vestibulum sit amet mattis libero. Aliquam iaculis pharetra elementum. Donec eget diam eget lectus pharetra posuere.</p>','pantai','645f918921b42.jpg','2023-05-13'),(23,'fdsvdsaafads-casd-a','admin','<p>adasdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faesc asd faxasxas x</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfasdasce faesc asd fa xa sa xa&nbsp;</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faesc asd fasdasxxaw</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfaedasdafaesc asd f</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faasxaaadsxasxasxesc asd fasdasasxdxdasx</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faesc asxas xaadasxasasd faasasxdasxas</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faesc asd fas</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faesc asd f</p>\r\n<p>asdcasdfasdcasdfsafasdcsdfsdasdfa fasf ase fcasd cas dfae faesc asd f</p>','pantai','645cf526016d9.jpg','2023-05-12'),(24,'contoh-artikel','admin','<p>lorem ipsum dolor sit amet</p>','Random','6472916124b64.jpg','2023-05-28');
/*!40000 ALTER TABLE `daftar_artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_gambar`
--

DROP TABLE IF EXISTS `daftar_gambar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daftar_gambar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fileName` varchar(255) DEFAULT NULL,
  `uploader` varchar(255) DEFAULT NULL,
  `dateImage` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_gambar`
--

LOCK TABLES `daftar_gambar` WRITE;
/*!40000 ALTER TABLE `daftar_gambar` DISABLE KEYS */;
INSERT INTO `daftar_gambar` VALUES (87,'6433b483a781f.jpg','admin','2023-04-10 14:02:27'),(92,'6433bd9e62af7.jpg','admin','2023-04-10 14:41:18'),(93,'6433bd9e62afd.jpg','admin','2023-04-10 14:41:18'),(94,'6433c47b4e65b.jpg','admin','2023-04-10 15:10:35'),(95,'6433c47b4e661.jpg','admin','2023-04-10 15:10:35'),(96,'64341200c730f.jpg','admin','2023-04-10 20:41:20'),(97,'6434c058e646c.png','yuumuu','2023-04-11 09:05:12'),(105,'6457a3ce86fba.jpg','123tes','2023-05-07 20:12:46'),(110,'645cf526016d9.jpg','admin','2023-05-11 21:01:10'),(113,'645eff0f45677.jpg','admin','2023-05-13 10:07:59'),(116,'645f910cb7272.jpg','yuumuu','2023-05-13 20:30:52'),(117,'645f918921b42.jpg','admin','2023-05-13 20:32:57'),(118,'645f91d762bf6.jpg','admin','2023-05-13 20:34:15'),(122,'645f9f1b7006b.jpg','admin','2023-05-13 21:30:51'),(123,'647290da62c16.png','haidaryum','2023-05-28 06:23:06'),(124,'6472916124b64.jpg','admin','2023-05-28 06:25:21');
/*!40000 ALTER TABLE `daftar_gambar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_halaman`
--

DROP TABLE IF EXISTS `daftar_halaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daftar_halaman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titlePage` varchar(255) DEFAULT NULL,
  `authorPage` varchar(255) DEFAULT NULL,
  `editorPage` text,
  `featureImage` varchar(255) DEFAULT NULL,
  `bannerImage` varchar(255) DEFAULT NULL,
  `bannerDesc` text,
  `datePage` datetime DEFAULT NULL,
  `navbarId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_halaman`
--

LOCK TABLES `daftar_halaman` WRITE;
/*!40000 ALTER TABLE `daftar_halaman` DISABLE KEYS */;
INSERT INTO `daftar_halaman` VALUES (6,'home','admin','','','','','2023-04-04 10:05:24',1),(7,'about_us','admin','','','','','2023-04-04 10:05:24',2),(8,'blog','admin','','','','','2023-04-04 10:05:24',3),(9,'contact_us','admin','','','','','2023-04-04 10:05:24',4);
/*!40000 ALTER TABLE `daftar_halaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_kategori`
--

DROP TABLE IF EXISTS `daftar_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daftar_kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `parent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_kategori`
--

LOCK TABLES `daftar_kategori` WRITE;
/*!40000 ALTER TABLE `daftar_kategori` DISABLE KEYS */;
INSERT INTO `daftar_kategori` VALUES (12,'pantai','kategori yang digunakan untuk artikel bertemakan pantai',''),(13,'pantai selatan','untuk artikel berbau pantai daerah selatan jawa\r\n','pantai'),(14,'dicoba','asdadaasdasxasx',''),(15,'contoh','lorem ipsum','');
/*!40000 ALTER TABLE `daftar_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftar_user`
--

DROP TABLE IF EXISTS `daftar_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daftar_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photoProfileName` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `passwordRaw` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_user`
--

LOCK TABLES `daftar_user` WRITE;
/*!40000 ALTER TABLE `daftar_user` DISABLE KEYS */;
INSERT INTO `daftar_user` VALUES (22,'admin','utama','admin','admin@mail.com','$2y$10$wimUcZgKwla1DTvHjqvt1.e6/vBnHLRLxIwhvoUxWckwWkNIkFIMW','645eff0f45677.jpg','Admin','secret'),(23,'haidar','yahya','yuumuu','yuumuu@mail.com','$2y$10$wKcy3Cfp5MLdrtdZUPhuEeqYVz33og7Xdb/8B7F/LmYZHuW7a745y','645f9f1b7006b.jpg','Admin','secret'),(24,'haidar',' ','yuum','haidar@mail.com','$2y$10$LbHmJr9qIqJmCs89Bg5RWu3EjqQw/AUUEG91dY8asZKcs6n9zRD/q','6434c058e646c.png','Author','123123'),(28,'tes','tes','123tes','tes@mail.com','$2y$10$NaLFt5TvBfle2XBYlwxzdOz6nQtyNMAvAII.g46FZvhuZ297bT4ca','6457a3ce86fba.jpg','Author','123'),(29,'haidar','yahya','haidaryum','yuumuu92@mail.com','$2y$10$ig17apQnbB/1pzcgaNC6futxf1b9V7zlqigKi8lM.jTfbJ/.hHfhq','647290da62c16.png','Author','123');
/*!40000 ALTER TABLE `daftar_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (2,'tess','tes@mail.com','lorem ipsum dolor sit amet consectatur sddlksf a alksdf jaofjac alksd as cdalksf wefwelk asdlk jaweoifwa elkfna oifajw lorem ipsum dolor sit amet consectatur sddlksf a alksdf jaofjac alksd as cdalksf wefwelk asdlk jaweoifwa elkfna oifajw lorem ipsum dolor sit amet consectatur sddlksf a alksdf jaofjac alksd as cdalksf wefwelk asdlk jaweoifwa elkfna oifajwlorem ipsum dolor sit amet consectatur sddlksf a alksdf jaofjac alksd as cdalksf wefwelk asdlk jaweoifwa elkfna oifajwlorem ipsum dolor sit amet consectatur sddlksf a alksdf jaofjac alksd as cdalksf wefwelk asdlk jaweoifwa elkfna oifajw','2023-05-09 21:03:26'),(3,'dzaki','jeki@mail.com','lorem ipsum dolor sit amet','2023-05-09 21:04:24'),(4,'contoh','contoh@mail.com','lslaidf alsdflkawe fal;sdc','2023-05-09 21:57:26'),(5,'santri','santri@mail.com','lorem ipsum dolor sit amet','2023-05-28 06:29:45'),(6,'santri','santri@mail.com','lorem ipsum dolor sit amet','2023-05-31 16:52:50');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_about`
--

DROP TABLE IF EXISTS `set_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `featureImg` varchar(255) DEFAULT NULL,
  `featureDesc` text,
  `bannerImg` varchar(255) DEFAULT NULL,
  `bannerDesc` text,
  `dateSet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_about`
--

LOCK TABLES `set_about` WRITE;
/*!40000 ALTER TABLE `set_about` DISABLE KEYS */;
INSERT INTO `set_about` VALUES (1,'','6433bbf94862f.jpg','Curabitur scelerisque, arcu a pulvinar interdum, urna libero volutpat augue, tempor accumsan nunc sapien vel sem. Aliquam sagittis finibus eros. Suspendisse iaculis risus sollicitudin enim luctus aliquam. Mauris ut consectetur quam, eleifend rhoncus nibh. Duis dapibus, diam in lobortis molestie, quam ligula gravida risus, eu fermentum odio erat at eros. Donec euismod libero at erat.','6433bbf948637.jpg','<h1>NJOPLESIR</h1>\r\n<h3>Kesempurnaan Traveling</h3>\r\n<p>Kami mengutamakan kesempurnaan anda dalam bertraveling bersama Njotravel</p>\r\n\r\n<h3>Keamanan Traveling</h3>\r\n<p>Kami mengutamakan keamanan anda dalam bertraveling bersama Njotravel</p>','2023-04-10 14:34:17'),(2,'about us','6433bd9e62af7.jpg','Curabitur scelerisque, arcu a pulvinar interdum, urna libero volutpat augue, tempor accumsan nunc sapien vel sem. Aliquam sagittis finibus eros. Suspendisse iaculis risus sollicitudin enim luctus aliquam. Mauris ut consectetur quam, eleifend rhoncus nibh. Duis dapibus, diam in lobortis molestie, quam ligula gravida risus, eu fermentum odio erat at eros. Donec euismod libero at erat.','6433bd9e62afd.jpg','<h1>NJOPLESIR</h1>\r\n<h3>Kesempurnaan Traveling</h3>\r\n<p>Kami mengutamakan kesempurnaan anda dalam bertraveling bersama Njotravel</p>\r\n\r\n<h3>Keamanan Traveling</h3>\r\n<p>Kami mengutamakan keamanan anda dalam bertraveling bersama Njotravel</p>','2023-04-10 14:41:18');
/*!40000 ALTER TABLE `set_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_blog`
--

DROP TABLE IF EXISTS `set_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `featureImg` varchar(255) DEFAULT NULL,
  `bannerImg` varchar(255) DEFAULT NULL,
  `dateSet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_blog`
--

LOCK TABLES `set_blog` WRITE;
/*!40000 ALTER TABLE `set_blog` DISABLE KEYS */;
INSERT INTO `set_blog` VALUES (1,'OUR BLOG','6433c47b4e65b.jpg','6433c47b4e661.jpg','2023-04-10 15:10:35');
/*!40000 ALTER TABLE `set_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_contact`
--

DROP TABLE IF EXISTS `set_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `featureImg` varchar(255) DEFAULT NULL,
  `locCompany` text,
  `dateSet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_contact`
--

LOCK TABLES `set_contact` WRITE;
/*!40000 ALTER TABLE `set_contact` DISABLE KEYS */;
INSERT INTO `set_contact` VALUES (1,'contact us','64341200c730f.jpg','pptq ibnu abbas 2 klaten','2023-04-10 20:41:20'),(2,'contact us','645af5c00ed05.jpg','pondok informatika al-madinah jogja','2023-05-10 08:39:12'),(3,'contact us','645af5c3c07b1.jpg','pondok informatika al-madinah jogja','2023-05-10 08:39:15'),(4,'contact us','645af61613fea.jpg','pondok informatika al-madinah jogja','2023-05-10 08:40:38');
/*!40000 ALTER TABLE `set_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_home`
--

DROP TABLE IF EXISTS `set_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_home` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `featureImg` varchar(255) DEFAULT NULL,
  `featureDesc` text,
  `bannerImg` varchar(255) DEFAULT NULL,
  `bannerDesc` text,
  `dateSet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_home`
--

LOCK TABLES `set_home` WRITE;
/*!40000 ALTER TABLE `set_home` DISABLE KEYS */;
INSERT INTO `set_home` VALUES (2,'plesir dulu','bg-home-1.jpg','Plesir dulu menyediakan layanan paket tour dan travel yang pastinya wajib kamu coba nikmati.\r\n\r\n','bg-sec-3.jpg','NjoTravel menawarkan berbagai ekspedisi tur dan travel serta dengan pelayanan dan kualitas agen yang nyaman untuk nongki kamu bersama orang-orang terdekatmu.','2023-04-10 10:12:14');
/*!40000 ALTER TABLE `set_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_qna`
--

DROP TABLE IF EXISTS `set_qna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_qna` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL,
  `question` text,
  `answer` mediumtext,
  `dateSet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_qna`
--

LOCK TABLES `set_qna` WRITE;
/*!40000 ALTER TABLE `set_qna` DISABLE KEYS */;
INSERT INTO `set_qna` VALUES (1,'admin','TES?','Tes lagi ajahhh','2023-04-10 14:51:48'),(2,'admin','sdfasd','shdflasfald','2023-04-22 18:34:46'),(3,'admin','Contoh QnA','ini jawabannya','2023-05-28 06:28:48');
/*!40000 ALTER TABLE `set_qna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `description` text,
  `instagram_name` varchar(255) DEFAULT NULL,
  `instagram_url` text,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `whatsapp_url` text,
  `facebook_name` varchar(255) DEFAULT NULL,
  `facebook_url` text,
  `youtube_name` varchar(255) DEFAULT NULL,
  `youtube_url` text,
  `dateSet` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (4,'logo.png','NJOTRAVEL','NJOTRAVEL menyediakan layanan travel dengan menawarkan berbagai paket traveling yang menarik.','haidaryuum','https://www.instagram.com/haidaryuum','089609494411','','haidar-yahya','https://facebook.com/haidar-yahya','@ibaskatv','https://www.youtube.com/@ibaskatv','2023-04-10 14:11:47'),(5,'logo.png','NJOTRAVEL','NJOTRAVEL menyediakan layanan travel dengan menawarkan berbagai paket traveling yang menarik.','haidaryuum','https://www.instagram.com/haidaryuum','089608494411','','haidar-yahya','https://facebook.com/haidar-yahya','@ibaskatv','https://www.youtube.com/@ibaskatv','2023-04-10 21:45:35'),(6,'Logo-1-copy.png','NJOTRAVEL','NJOTRAVEL menyediakan layanan travel dengan menawarkan berbagai paket traveling yang menarik.','haidaryuum','https://www.instagram.com/haidaryuum','089608494411','','haidar-yahya','https://facebook.com/haidar-yahya','@ibaskatv','https://www.youtube.com/@ibaskatv','2023-05-07 20:45:17'),(7,'logo.png','NJOTRAVEL','NJOTRAVEL menyediakan layanan travel dengan menawarkan berbagai paket traveling yang menarik.','haidaryuum','https://www.instagram.com/haidaryuum','089608494411','','haidar-yahya','https://facebook.com/haidar-yahya','@ibaskatv','https://www.youtube.com/@ibaskatv','2023-05-07 20:46:17');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsorship`
--

DROP TABLE IF EXISTS `sponsorship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sponsorship` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sponsor_name` varchar(255) DEFAULT NULL,
  `sponsor_url` text,
  `sponsor_logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsorship`
--

LOCK TABLES `sponsorship` WRITE;
/*!40000 ALTER TABLE `sponsorship` DISABLE KEYS */;
INSERT INTO `sponsorship` VALUES (5,'garuda indonesia','https://www.garuda-indonesia.com/id/id/index','sponsor-1.png'),(6,'citilink','https://www.citilink.co.id/','sponsor-2.png'),(7,'lion air','https://www.lionair.co.id/','sponsor-3.png'),(8,'air asia','https://www.airasia.com/id/id','sponsor-4.png'),(9,'batik air','https://www.batikair.com/en/','sponsor-5.png'),(10,'mahir techno','https://mahirtechno.com/','Logo-1-copy.png');
/*!40000 ALTER TABLE `sponsorship` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-06 14:26:13
