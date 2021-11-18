-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gosafer
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Ngăn chặn, xử lý hơn 200 “quái xế” bốc đầu xe máy, lạng lách, đánh võng.','<p><b>Chiều tối ngày 17/10, Phòng Cảnh sát giao thông chủ trì phối hợp với các phòng chức năng Công an tỉnh và Công an huyện Tam Đảo tổ chức bắt giữ, xử lý hàng trăm thanh thiếu niên điều khiển xe mô tô, xe gắn máy không gương chiếu hậu, không mũ bảo hiểm, tổ chức bốc đầu xe, lạng lách, đánh võng trên tuyến Quốc lộ 2B đoạn từ thị trấn Hợp Châu lên thị trấn Tam Đảo, huyện Tam Đảo, tỉnh Vĩnh Phúc.</b></p>\r\n            <p>Theo đó, chiều 17/10, lợi dụng việc tỉnh Vĩnh Phúc nới lỏng một số biện pháp giãn cách và thay đổi một số quy định phòng chống dịch hàng trăm thanh thiếu niên có độ tuổi từ 16 đến 23 ở các huyện trong và ngoài tỉnh đã tụ tập tại địa bàn huyện Tam Đảo, tỉnh Vĩnh Phúc. Nhóm đối tượng này tổ chức điều khiển xe máy bốc đầu, lạng lách, đánh võng, chạy tốc độ cao trên tuyến đường Quốc lộ 2B đoạn từ thị trấn Hợp Châu đi thị trấn Tam Đảo gây nguy hiểm cho người và phương tiện tham gia giao thông</p>\r\n            <p class=\"text-center\"><img alt=\"\" height=\"472\" src=\"/img/news1.jpg\" width=\"628\"></p>\r\n            <p>Ngay sau khi nắm được tình hình, Phòng Cảnh sát giao thông Công an tỉnh Vĩnh Phúc đã báo cáo đề xuất Ban giám đốc Công an tỉnh cho phối hợp với Phòng Cảnh sát Cơ động, Phòng Cảnh sát Phòng cháy chữa cháy và Công an huyện Tam Đảo đã tập trung các biện pháp nghiệp vụ vây bắt các đối tượng.</p>\r\n            <p>Quá trình vây bắt nhiều đối tượng không chấp hành hiệu lệnh của Cảnh sát giao thông, cố tình quay đầu xe và tăng ga bỏ chạy gây nguy hiểm cho cán bộ tham gia vây bắt, đặc biệt nhiều đối tượng còn vào trong rừng lần trốn. Đến 19h giờ cùng ngày, lực lượng Phòng Cảnh sát giao thông phối hợp với các phòng chức năng Công an tỉnh và Công an huyện Tam Đảo đã bắt giữ được 206 trường hợp điều khiển trên 103 phương tiện.</p>\r\n            <p class=\"text-center\"><img alt=\"\" height=\"472\" src=\"/img/news1.jpg\" width=\"628\"></p>\r\n            <p>Đây là những hành vi gây rối ANTT, gây nguy hiểm cho người và phương tiện tham gia giao thông. Điều đáng nói là các trường hợp trên đều nhận thức rõ hành vi vi phạm của mình nhưng vẫn cố tình tụ tập lên thị trấn Tam Đảo để thực hiện các hành vi nguy hiểm này.Từ đầu năm 2021 đến nay, Lãnh đạo Phòng Cảnh sát giao thông Công an tỉnh luôn quan tâm, chỉ đạo xây dựng các kế hoạch, ra quân, vây bắt, xử lý 8 vụ với 241 đối tượng có hành vi tụ tập bốc đầu xe, lạng lách, đánh võng gây mất ANTT trên địa bàn. Để tiếp tục ngăn chặn không để tình trạng này xuất hiện trên địa bàn, Phòng Cảnh sát giao thông Công an tỉnh sẽ tiếp tục phối hợp với các phòng chức năng Công an tỉnh và Công an các huyện, thành phố trên địa bàn ra quân tổng kiểm tra, truy bắt, kiên quyết xử lý nghiêm các trường hợp vi phạm. Bên cạnh đó, lực Công an cũng rất cần sự vào cuộc của các gia đình, nhà trường và chính quyền địa phương trong công tác quản lý, giáo dục, nâng cao nhận thức, ý thức tham gia giao thông của các thanh thiếu niên. Hiện, Phòng Cảnh sát giao thông Công an tỉnh cùng Công an huyện Tam Đảo đang tiếp tục củng cố hồ sơ, xử lý nghiêm đối với các trường hợp vi phạm theo quy định của pháp luật.</p>','2021-11-18'),(2,'CSGT Hà Nội đưa cụ già 87 tuổi đi lạc trên đường về nhà an toàn','<div class=\"detail_content\"><p>Theo đó, &nbsp;ngày 10/11 Thượng úy Nguyễn Đức Sơn đang làm nhiệm vụ trực ban tại đơn vị (Đội CSGT số 10, Phòng CSGT Công an TP Hà Nội) thì có một người dân dẫn theo một cụ già có biểu hiện đi lạc đường vào trình báo.</p>\r\n\r\n<p>Sau khi tiếp nhận, thấy cụ ông có vẻ mệt mỏi, Thượng úy Nguyễn Đức Sơn đã mua nước và bánh mì cho cụ ăn, chờ cụ ổn định tinh thần, từ các các thông tin ít ỏi cụ nhớ được Thượng úy Sơn đã tìm cách xác minh về địa chỉ nơi ở và liên lạc được với gia đình cụ tại thôn Hạ Đồng, xã Thụy Sơn, huyện Thái Thụy, tỉnh Thái Bình.</p>\r\n\r\n<div style=\"text-align:center\">\r\n<figure class=\"image\" style=\"display:inline-block\"><img alt=\"\" height=\"495\" src=\"/img/news1.jpg\" width=\"660\">\r\n<figcaption><em>Thượng úy Nguyễn Đức Sơn giúp cụ ông ổn định lại tinh thần và sức khỏe tại đơn vị.</em></figcaption>\r\n</figure>\r\n</div>\r\n\r\n<p>Đến khoảng 20h cùng ngày, Thượng úy Sơn đã cùng các đồng chí trong đơn vị đưa cụ ra bến xe và mua vé và gửi nhà xe đưa đến địa chỉ nơi con gái cụ đang chờ đón.</p>\r\n\r\n<p>Hiện tại cụ đã về nhà an toàn, con gái cụ cho biết cụ tên là Lê Thanh Xuân sinh năm 1934, cụ lên Hà Nội để thăm bạn bè đồng ngũ là những người cựu chiến binh. Tuy nhiên do tuổi cao trí nhớ kém cụ đã đi lạc. May mắn đã được người dân và các chiến sĩ CSGT đội 10 phát hiện giúp đỡ.</p>\r\n\r\n<p>Cảm kích và xúc động trước việc làm của các chiến sĩ CSGT, gia đình cụ Xuân đã gửi bức thư cảm ơn tới Thượng úy Sơn nói riêng và toàn thể Đội CSGT số 10 và lực lượng CSGT nói chung đã luôn nêu cao tinh thần trách nhiệm giúp đỡ người dân trong mọi hoàn cảnh.</p>\r\n\r\n<p style=\"text-align:right\"><strong>Hùng Nguyễn, Duy Hoàng</strong></p>\r\n</div>','2021-10-07');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `code` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `record_makers` text NOT NULL,
  `recorded` text NOT NULL,
  `title` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reports_UN` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_UN` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'admin','admin@gosafer.xyz','binhphan2k',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-18 21:40:37
