# Host: localhost  (Version: 5.5.53)
# Date: 2018-03-30 11:49:30
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "account"
#

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `accid` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `platid` varchar(255) DEFAULT NULL,
  `acctype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

#
# Data for table "account"
#

/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (5,'admin@routeryun.cn  ','123456','3','1'),(6,'15605111111','123456','3','2'),(16,'18344667089','123456','3','2'),(17,'admin@routeryun.cn  ','123456','4','1'),(18,'15605111111','123456','4','2'),(19,'18344667089','123456','4','2'),(20,'admin@routeryun.cn  ','123456','5','1'),(21,'15605111111','123456','5','2'),(22,'18344667089','123456','5','2'),(23,'admin@routeryun.cn  ','123456','6','1'),(24,'15605111111','123456','6','2'),(25,'18344667089','123456','6','2'),(26,'admin@routeryun.cn  ','123456','7','1'),(27,'15605111111','123456','7','2'),(28,'18344667089','123456','7','2'),(29,'15380774897','chenyu','8','1'),(30,'','','8','2'),(31,'','','9','1'),(32,'13512388963','111111','9','2'),(33,'admin@qdrbs.local','573176963e840','10','1'),(34,'15005188888','123456','10','2'),(35,'admin@qdrbs.local','573176963e840','11','1'),(36,'15005188888','123456','11','2'),(37,'13814526435','123456','10','2'),(38,'13814526435','123456','11','2'),(39,'admin@qdrbs.local','573176963e840','12','1'),(40,'15005188888','123456','12','2'),(41,'13814526435','123456','12','2'),(42,'admin@qdrbs.local','573176963e840','13','1'),(43,'15005188888','123456','13','2'),(44,'13814526435','123456','13','2'),(45,'','','14','1'),(46,'13773886062','xwzx~qidong','14','2'),(47,'admin@lwby.com','5959a0567f670','15','1'),(48,'13112345679','123456','15','2'),(49,'','','16','1'),(50,'','','16','2'),(51,'admin@sdsbrbs.local','562f0ec85f9f8','17','1'),(52,'18652032423','123456','17','2'),(53,'admin@lygrb.local','13905185214','18','1'),(54,'post1@lygrb.local','123456','18','2'),(55,'18961373092@189.cn','123456','18','2'),(56,'admin@gcrbs.local','5683774891069\r\n','19','1'),(57,'18344667055','123456','19','2'),(58,'admin@gcrbs.local','5683774891069','20','1'),(59,'18344667055','123456','20','2'),(60,'admin@gcrbs.local','5683774891069','21','1'),(61,'18344667055','123456','21','2'),(62,'admin@gaochun.local','574686bab1940','22','1'),(63,'15699999999','123456','22','2'),(64,'admin@sheyang.com','5a1e4d3a2fc74','23','1'),(65,'18589999900','123456','23','2'),(66,'admin@lsxw.com','5850df8a26b8b','24','1'),(67,'13822222222','123456','24','2'),(68,'admin@pdsb.local','55e41c8325030','25','1'),(69,'18344667087','123456','25','2'),(70,'admin@jrgd.local','57e08b69a6b4d','26','1'),(71,'15677777777','123456','26','2'),(72,'admin@gdms.local','5698a06d1ecc0','27','1'),(73,'18602504180','123456','27','2'),(74,'','','28','1'),(75,'15555555555','123456','28','2'),(76,'admin@tzrbs.local','5697433a22df1','29','1'),(77,'','','29','2'),(78,'admin@tzrbs.local','5697433a22df1','30','1'),(79,'','','30','2'),(80,'','','31','1'),(81,'13515226552','123456','31','2'),(82,'admin@www.ycw.com.cn','592f8923a1ea5','32','1'),(83,'18589040209','123456','32','2'),(84,'admin@xhrbs','564d9498d1696','33','1'),(85,'15651627744','123456','33','2'),(86,'admin@xhrbs','564d9498d1696','34','1'),(87,'15651627744','123456','34','2'),(88,'admin@dfrbs.local','565fd08316213','35','1'),(89,'post@dfrbs.local','123456','35','2'),(90,'','','36','1'),(91,'','','36','2'),(92,'','','37','1'),(93,'18168066611','66611','37','2'),(94,'admin@jnxwzhx.local','5833ee54733c0','38','1'),(95,'13277975235','123456','38','2'),(96,'admin@cfrb.local','5678bde85af44','39','1'),(97,'post@cfrb.local','123456','39','2'),(98,'','','40','1'),(99,'','','40','2'),(100,'admin@pygsl.local','5a3730f7d011b','41','1'),(101,'15605180000','123456','41','2'),(104,'15651758256','123456','1','2'),(105,'15605111111','123456','2','2'),(106,'18344667089','123456','2','2'),(112,'admin@routercn.cn','123456','1','1'),(113,'admin@routeryun.cn  ','123456','2','1'),(114,'18651882729','123456','19','2'),(115,'18651882729','123456','20','2'),(116,'18651882729','123456','21','2'),(117,'18588888888','123456','26','2'),(119,'admin','router123456','32','1'),(120,'15651627777','123456','33','2'),(121,'15388888888','123456','33','2'),(122,'15651627777','123456','34','2'),(123,'15388888888','123456','34','2'),(124,'18005113989','123456','35','2'),(125,'admin@pingyang.local','55ed247ee6030','44','1'),(126,'post@pingyang.local','123456','44','2'),(127,'admin@jrlx.com','59002e94532d7','45','1'),(128,'18005635087','123456','45','2'),(129,'15956290606','123456','45','2'),(130,'admin@jrlx.com','59002e94532d7','46','1'),(131,'18005635087','123456','46','2'),(132,'15956290606','123456','46','2'),(133,'admin@xsb.com','58fd690342fcc','47','1'),(134,'17715272003','123456','47','2'),(135,'admin@dongtai.local','5822bfc6877fb','48','1'),(136,'15666666666','123456','48','2'),(137,'asdasd','123456','49','1'),(138,'asd','123456','49','2'),(141,'admin@huaxidx.cn','5949cbad02bb6','51','1'),(142,'15888888888 ','123456','51','2'),(143,'13915315601','123456','51','2'),(144,'admin@jyrbs.local','559f5235e3b70','52','1'),(145,'18344667059','123456','52','2'),(146,'admin@ningjin.com','59913685d36d8','53','1'),(147,'15005180000','123456','53','2'),(148,'admin@langxi.local','58f6f2a0eccb5','54','1'),(149,'20000000001','123456','54','2'),(152,'admin@langxi.local','58f6f2a0eccb5','56','1'),(153,'20000000001','123456','56','2'),(154,'admin@lygrb.local','13905185214','57','1'),(155,'13805190971','123456','57','2');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

#
# Structure for table "platform"
#

DROP TABLE IF EXISTS `platform`;
CREATE TABLE `platform` (
  `platid` int(11) NOT NULL AUTO_INCREMENT,
  `platname` varchar(255) DEFAULT NULL,
  `typeid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`platid`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

#
# Data for table "platform"
#

/*!40000 ALTER TABLE `platform` DISABLE KEYS */;
INSERT INTO `platform` VALUES (1,'路特软件公司官网','2'),(2,'今日路特演示web','2'),(3,'今日路特演示H5','2'),(4,'路特云图web','2'),(5,'路特云图h5','2'),(6,'智慧掌媒app','2'),(7,'掌上融媒体app','2'),(8,'数字报 system','2'),(9,'数字报 测试报','2'),(10,'启东新闻网web','2'),(11,'启东新闻网h5','2'),(12,'启东云图web','2'),(13,'启东云图h5','2'),(14,'启东数字报pc','2'),(15,'莱芜新闻网','2'),(16,'莱芜发布APP','2'),(17,'速豹新闻App','2'),(18,'连云港发布App','2'),(19,'高淳新闻网web','2'),(20,'高淳新闻网h5','2'),(21,'掌上高淳','2'),(22,'双游村','2'),(23,'射阳新闻网','2'),(24,'涟水新闻网','2'),(25,'浦东小记者','2'),(26,'广德小记者','2'),(27,'广德热线app','2'),(28,'通州小记者','2'),(29,'南通州新闻网web','2'),(30,'南通州新闻网h5','2'),(31,'数字报pc','2'),(32,'少年网','2'),(33,'兴化新闻网web','2'),(34,'兴化新闻网h5','2'),(35,'大丰新闻网web','2'),(36,'大丰新闻网h5','2'),(37,'数字报pc','2'),(38,'无线江宁APP','2'),(39,'长丰新闻网web','2'),(40,'长丰新闻网h5','2'),(41,'平商网','2'),(44,'新平阳App','2'),(45,'郎溪新闻网web','2'),(46,'郎溪新闻网h5','2'),(47,'修水新闻网','2'),(48,'东台报业网','2'),(49,'asdasd','2'),(51,'华西干部学院','2'),(52,'秀江阴app','2'),(53,'宁津新闻网','2'),(54,'朗溪web','1'),(56,'朗溪h5','1'),(57,'连云港融媒体平台（正式 ) ','2');
/*!40000 ALTER TABLE `platform` ENABLE KEYS */;

#
# Structure for table "type"
#

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "type"
#

/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'http://mp.tmtsp.com/common/safe/login\r\n'),(2,'http://mp.rmt.test.routeryuncs.com/common/safe/login');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

#
# Structure for table "url"
#

DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `urlid` int(11) NOT NULL AUTO_INCREMENT,
  `platid` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `notice` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`urlid`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

#
# Data for table "url"
#

/*!40000 ALTER TABLE `url` DISABLE KEYS */;
INSERT INTO `url` VALUES (1,'1','http://www.routercn.cn/','web'),(2,'2','http://web.cms.test.routeryuncs.com/ ','web'),(3,'3','http://m.cms.test.routeryuncs.com/','h5'),(4,'4','http://w.yuntu.test.routeryuncs.com/','web'),(5,'5','http://m.yuntu.test.routeryuncs.com/','h5'),(6,'6','','app'),(7,'7','','app'),(8,'8','http://epaper.routeryun.com/System/Safe/login.html','数字报'),(9,'9','http://1e24cf708a14ce81.epaper.routeryun.com','数字报'),(10,'10','','web'),(11,'11','','h5'),(12,'12','http://www.sjqd0513.com/','web'),(13,'13','http://m.sjqd0513.com/','h5'),(14,'14','http://jrqd.qidongnews.com/home/page/index/mdid/16717.html','pc'),(15,'15','','web'),(16,'16','','app'),(17,'17','','app'),(18,'18','','app'),(19,'19','http://www.chunbao.net/   ','web'),(20,'20','http://m.chunbao.net/','h5'),(21,'21','','h5'),(22,'22','http://shuangyoucun.chunbao.net/','web'),(23,'23','http://www.sheyangnews.com/','web'),(24,'24','http://www.lsxw.net.cn/ ','web'),(25,'25','http://pudong.xjz365.com','web'),(26,'26','http://guangde.xjz365.com/','web'),(27,'27','','app'),(28,'28','http://tongzhou.xjz365.com/','web'),(29,'29','http://www.southtz.com/','web'),(30,'30','http://m.southtz.com/','h5'),(31,'31','http://epaper.routeryun.com/Home/Page/index/mdid/54188.html','数字报'),(32,'32','http://www.ycw.com.cn/','web'),(33,'33','http://www.xinghuanews.net/','web'),(34,'34','http://m.xinghuanews.net/','h5'),(35,'35','http://www.dafengnews.com.cn/','web'),(36,'36','http://m.dafengnews.com.cn/','h5'),(37,'37','http://epaper.routeryun.com/Home/Page/index/mdid/54159.html','pc'),(38,'38','','app'),(39,'39','http://www.ahcfnews.com/','web'),(40,'40','http://m.ahcfnews.com/','h5'),(41,'41','http://www.ccpy.org.cn/','web'),(44,'44','','app'),(45,'45','http://www.zglx.gov.cn/','web'),(46,'46','http://m.zglx.gov.cn/','h5'),(47,'47','http://www.xsnews.cc/','web'),(48,'48','http://www.dtxww.com/','web'),(49,'49','asd','web'),(51,'51','http://www.huaxidx.cn/','web'),(52,'52','','app'),(53,'53','','web'),(54,'54','http://192.168.1.193:86/','web'),(56,'56','http://192.168.1.193:85/','h5'),(57,'57','http://lyg.cms.test.routeryuncs.com/','web');
/*!40000 ALTER TABLE `url` ENABLE KEYS */;
