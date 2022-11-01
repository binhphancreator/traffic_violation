-- MariaDB dump 10.19  Distrib 10.9.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gosafer
-- ------------------------------------------------------
-- Server version	10.9.3-MariaDB-1:10.9.3+maria~ubu2204

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES
(9,'dădawd','635fdf71d400c.docx','');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES
(6,'Cô gái trẻ liên tục gọi điện sau vụ tai nạn xe Ferrari không phải người cầm lái\n','<div class=\"maincontent \" id=\"maincontent\">\n <!-- Normal -->\n                            <div>\n                                <p>Liên quan đến vụ tai nạn giữa xe Ferrari và xe máy làm người điều khiển xe máy tử vong trên đường Lê Quang Đạo (Nam Từ Liêm, Hà Nội), hiện Công an TP Hà Nội đang tiếp tục điều tra làm rõ.</p>\n<p>Bước đầu, tài xế lái xe ô tô được xác định là anh V. (trú tại phường Mỹ Đình 2, Nam Từ Liêm, Hà Nội).</p>\n<p>Tuy nhiên, sau khi tai nạn xảy ra,&nbsp; trên mạng xã hội lan truyền bức ảnh cô gái trẻ mặc váy ngồi trên ghế lái. Những hình ảnh khác lại cho thấy cô gái trẻ liên tục gọi điện thoại ở phía sau xe.</p>\n<figure class=\"image vnn-content-image\"><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/z3842319670243-41f41856fb60c4b68e4430d71540cd4f-542.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/z3842319670243-41f41856fb60c4b68e4430d71540cd4f-542.jpg?width=200\" data-lg-id=\"ed2cc2d2-e01e-4b7d-84fc-594c6e60874d\">\n<figcaption>Hiện trường vụ tai nạn</figcaption>\n</figure>\n<table class=\"ck-photo-collage vnn-template-noneditable\">\n<tbody>\n<tr>\n<td><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/313046420-1118311415739661-3949635336412260996-n-543.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/313046420-1118311415739661-3949635336412260996-n-543.jpg?width=200\" data-lg-id=\"34f89384-4e9f-430a-803d-5243072dd6c6\"></td>\n<td><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/313367961-1473489423138786-4700291387282327900-n-544.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/313367961-1473489423138786-4700291387282327900-n-544.jpg?width=200\" data-lg-id=\"91093ecc-5f7c-4f34-87d3-3d8ca174097d\"></td>\n</tr>\n</tbody>\n</table>\n<figure class=\"image vnn-content-image\"><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/312923441-655456865965821-4803184170875258739-n-545.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/312923441-655456865965821-4803184170875258739-n-545.jpg?width=200\" data-lg-id=\"95619f1a-fdab-41bf-a2a5-20beb3c90eb9\">\n<figcaption>Cô gái trẻ liên tục đi quanh chiếc xe (Ảnh: H.M)</figcaption>\n</figure>\n<p>Lực lượng chức năng cho biết, khi CSGT tới hiện trường, cô gái này cho biết tài xế thời điểm xảy ra tai nạn là anh V. và mình là người đi cùng xe.</p>\n<p>Sau khi xảy ra tai nạn, anh V. đã rời khỏi hiện trường, cô gái ở lại giải quyết vụ việc.</p>\n<p>Cũng theo đại diện Đội CSGT đường bộ số 6, Phòng CSGT, Công an Hà Nội, từ những lời khai ban đầu cho thấy, thông tin người phụ nữ lái xe trong vụ tai nạn giao thông này là không chính xác.&nbsp;</p>\n<p>Vị này cũng cho biết, nguyên nhân vụ tai nạn đang được lực lượng CSGT phối hợp với Đội 2, Phòng Cảnh sát hình sự, Công an thành phố Hà Nội tiếp tục làm rõ.</p>\n<p>“Dữ liệu để điều tra được lấy từ camera quanh khu vực”, vị đại diện Đội CSGT đường bộ số 6 nói.&nbsp;</p>\n<table class=\"ck-photo-collage vnn-template-noneditable\">\n<tbody>\n<tr>\n<td><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09134-546.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09134-546.jpg?width=200\" data-lg-id=\"2c8da418-10cc-48d7-b1d9-e56ff819b185\"></td>\n<td><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09110-547.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09110-547.jpg?width=200\" data-lg-id=\"bc1272c1-8a82-4f9e-b305-6cecf96338aa\"></td>\n</tr>\n</tbody>\n</table>\n<p></p>\n<p>Vụ tai nạn khiến người điều khiển xe máy là ông Lê Đình Hới (SN 1964, trú tại Phú Lương, Hà Đông, Hà Nội) tử vong tại chỗ. Hai phương tiện cùng bị hư hỏng.</p>\n\n                            </div>\n                </div>',NULL),
(7,'Trích xuất camera khu vực Mỹ Đình điều tra tai nạn xe Ferrari khiến 1 người chết\n','<div class=\"maincontent \" id=\"maincontent\">\n <!-- Normal -->\n                            <div>\n                                <p>Hiện Phòng Cảnh sát Hình sự, Công an Hà Nội phối hợp với lực lượng CSGT thực hiện trích xuất camera quanh khu vực sân vận động Mỹ Đình (quận Nam Từ Liêm) để làm rõ nguyên nhân vụ tai nạn giữa xe Ferrari và xe máy khiến 1 người chết, sáng 31/10.</p>\n<p>“Dữ liệu để điều tra được lấy từ camera quanh khu vực”, lực lượng chức năng cho biết.</p>\n<p>Về lý do chuyển hồ sơ vụ việc cho Phòng Cảnh sát hình sự, Công an thành phố&nbsp; Hà Nội thụ lý, lực lượng chức năng cho biết là do chiếc xe có yếu tố nước ngoài.&nbsp;</p>\n<p>Toàn bộ hồ sơ, phương tiện đã được bàn giao.</p>\n<figure class=\"image vnn-content-image\"><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/z3842319670243-41f41856fb60c4b68e4430d71540cd4f-487.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/z3842319670243-41f41856fb60c4b68e4430d71540cd4f-487.jpg?width=200\" data-lg-id=\"7ed9d113-64c8-4d73-9d62-2eae546b03b6\">\n<figcaption>Hiện trường vụ tai nạn</figcaption>\n</figure>\n<table class=\"ck-photo-collage vnn-template-noneditable\">\n<tbody>\n<tr>\n<td><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09134-488.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09134-488.jpg?width=200\" data-lg-id=\"63b4d4c8-9e0b-4417-aec9-b06cc9ea2e9f\"></td>\n<td><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09110-489.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/chc09110-489.jpg?width=200\" data-lg-id=\"05470722-675d-4ec6-a58f-8f67c9488c5d\"></td>\n</tr>\n</tbody>\n</table>\n<figure class=\"image vnn-content-image\"><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/z3842319682464-d90867f891bb0ed96b6116715c89c860-490.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/z3842319682464-d90867f891bb0ed96b6116715c89c860-490.jpg?width=200\" data-lg-id=\"3d13e771-df82-49ec-b878-5ca4c532344e\">\n<figcaption>Chiếc xe máy do ông Hới điều khiển bị hư hỏng nặng</figcaption>\n</figure>\n<p>Qua xác minh ban đầu, xe Ferrari mang biển số ngoại giao. Phương tiện do một nhân viên đại sứ quán tại Việt Nam đăng ký. Người điều khiển xe là V. (SN 1997), hiện &nbsp;người này chưa làm việc với cơ quan công an.</p>\n<p>Về hình ảnh cô gái trẻ xuất hiện tại ghế lái chiếc xe, lực lượng chức năng cũng cho biết, qua khai thác lời khai ban đầu từ cô gái, người này chỉ đi cùng xe. Người cầm lái rời khỏi hiện trường sau khi vụ tai nạn xảy ra.</p>\n<figure class=\"image vnn-content-image\"><img src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/313367961-1473489423138786-4700291387282327900-n-491.jpg\" data-thumb-src=\"https://static-images.vnncdn.net/files/publish/2022/10/31/313367961-1473489423138786-4700291387282327900-n-491.jpg?width=200\" data-lg-id=\"20854ae9-5402-4afe-a352-8b7afc972567\">\n<figcaption>Cô gái trẻ liên tục gọi điện thoại sau khi vụ tai nạn xảy ra (Ảnh: H.M)</figcaption>\n</figure>\n<p>Trước đó, khoảng 3h45 ngày 31/10, tại đường Lê Quang Đạo (trước cổng Liên đoàn Bóng đá Việt Nam) xảy ra vụ tai nạn giữa ô tô và xe máy.</p>\n<p>Thời điểm trên, ô tô nhãn hiệu Ferrari mang BKS 80-3xx-NG-xx do anh V. điều khiển bất ngờ va chạm với xe máy mang biển số 29T1- 337.xx đang đi phía trước, cùng chiều đường.</p>\n<p>Vụ tai nạn khiến người điều khiển xe máy là ông Lê Đình Hới (SN 1964, trú tại Phú Lương, Hà Đông, Hà Nội) tử vong tại chỗ. Hai phương tiện cùng bị hư hỏng.</p>\n\n                            </div>\n                </div>',NULL);
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
  `license_plate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reports_UN` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` VALUES
(2,'Bienban','BB1','2022-10-27','Đại Úy Nguyễn Văn Dùng','Phan Văn Bình','Vi phạm hành chính','90B293438'),
(3,'dắd','TT123','2022-02-12','dă','đă','đaw','B123');
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
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_UN` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(11,'admin','admin@gosafer.com','$2y$10$J3JzN4ZgOUyWfoi6dgYqMe9DzczGROPiW3I9wq1JY8YjEaqaZTr0u',NULL);
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

-- Dump completed on 2022-11-01  2:02:21
