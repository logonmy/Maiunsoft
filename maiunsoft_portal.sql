/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - maiunsoft_portal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`maiunsoft_portal` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `maiunsoft_portal`;

/*Table structure for table `tbl_activity` */

DROP TABLE IF EXISTS `tbl_activity`;

CREATE TABLE `tbl_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `city` int(11) DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `contact_name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `contact_number` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `agenda` text COLLATE utf8_bin,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_activity` */

insert  into `tbl_activity`(`id`,`name`,`city`,`address`,`contact_name`,`contact_number`,`start_time`,`end_time`,`type`,`agenda`,`create_time`) values (1,'内容管理高峰论坛',3,'宝山区沪太路5018弄','李富强','15000818051','2017-02-01 00:00:00','2017-02-03 00:00:00',2,'发达双方的撒','2017-03-19 20:35:15'),(3,'2017校园宣讲西北师范大学站',4,'安宁区安宁东路','李富强','15000818051','2017-02-01 00:00:00','2017-02-03 00:00:00',1,'','2017-03-19 20:36:04');

/*Table structure for table `tbl_article` */

DROP TABLE IF EXISTS `tbl_article`;

CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `bref` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `content` text COLLATE utf8_bin,
  `image` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `reference` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `author` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_article` */

insert  into `tbl_article`(`id`,`title`,`bref`,`content`,`image`,`reference`,`group_id`,`create_time`,`author`,`keywords`) values (3,'《东京审判：中国的记忆与观点》英文版亮相法兰克福书展 ','长期精耕细作，在相关图书出版和数据库开发方面一直走在行业前列。与剑桥大学出版社合作可谓“强强联合”，必将对提升图书发行销售量、扩大项目全球影响力、促进中外文化交流，起到十分重要的作用。','10月19日，上海交通大学出版社、剑桥大学出版社在德国法兰克福书展上联合举办《东京审判：中国的记忆与观点》英文版全球首发式，纪念东京审判开庭70周年。\r\n\r\n　　国家出版基金规划管理办公室副主任颜永刚、英国剑桥大学出版社学术出版总监曼迪 希尔、上海交大出版社编辑委员会主任张天蔚出席并致辞，本书主编、上海交大东京审判研究中心主任程兆奇也发来视频。\r\n\r\n　　《东京审判：中国的记忆与观点》由上海交大出版社于2011年出版中文版，是第一本集中表达中国学者对东京审判的回忆以及学术研究观点的图书，代表着中国声音。该书英文版由上海交大出版社于2012年授权剑桥大学出版社，经过长达4年的翻译、编辑工作，于今年9月底出版，并收入“剑桥中国文库”。\r\n\r\n　　国家出版基金规划管理办公室副主任颜永刚在讲话中指出，东京审判是一次和平对战争、文明对野蛮、正义对邪恶的大审判。对于这次人类史上开庭时间最长、规模最大的审判，我们要有真实的记忆。上海交大出版社立足东京审判研究中心的专家资源优势，长期精耕细作，在相关图书出版和数据库开发方面一直走在行业前列。与剑桥大学出版社合作可谓“强强联合”，必将对提升图书发行销售量、扩大项目全球影响力、促进中外文化交流，起到十分重要的作用。\r\n\r\n　　本书主编、上海交大东京审判研究中心主任程兆奇教授指出，《东京审判：中国的记忆与观点》是特别重要的一本书，它反映了东京审判以后到2010年，中国关于东京审判的记忆和研究的精华。这本书可以说是2011年东京审判的大规模研究展开之前的一个前史，它本身也是一个很重要的记忆。所以，这本书能在剑桥大学出版社出版英文版，对于中国东京审判研究很有意义。\r\n\r\n　　上海交大出版社编辑委员会主任张天蔚在致辞中介绍，“东京审判出版工程”是上海交通大学出版社经典出版工程之一，填补了核心文献的空白。以《东京审判：中国的记忆与观点》为代表，交大社着力打造的东京审判系列图书都实现了版权输出。剑桥大学出版社的译介为本书走向世界提供了良好平台，必将引起全球读者重视，让中国学者的声音得到世界的倾听与回响。\r\n\r\n　　剑桥大学出版社学术出版总监曼迪 希尔在发言中说，“剑桥中国文库”的新书《东京审判：中国的记忆与观点》出自中国重要学者之手，并补充了代表中国参加诉讼的亲历者的珍贵回忆，还增加了著名学者卜正民的导言。这是第一次以英语译本的形式呈现了中国对东京审判的理解，及其现实重要性，必将引起西方读者的关注。本书的翻译出版，也将剑桥与上海交大出版社的合作推进到了一个新的阶段。\r\n\r\n　　据悉，《东京审判：中国的记忆与观点》英文版是国家新闻出版广电总局“经典中国国际出版工程”重要成果，上海交大出版社联合剑桥大学出版社这样有全球公信力和影响力的学术出版机构共同出版，充分显示了中国学者对于东京审判研究结论的正义性、严谨性，有助于促进国际社会更加重视中国作为二战中亚洲最大的战场和战胜国对于东京审判的核心观点，是对日本右翼有关言论最有力的驳斥。（记者 许多）\r\n\r\n','58cf22f46bda0.jpg','脉云',3,'2017-03-19 14:52:25','李富强','张,王，李，赵'),(8,'测试业务洞察','房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，房贷范德萨范德萨，',NULL,NULL,'付',4,'2017-03-23 12:25:57','',''),(9,'技术前沿测试','肥大是发达舒服的事肥大是发达双方的放大放大放大时',NULL,NULL,'',5,'2017-03-23 12:33:10','',''),(10,'公司动态测试','非打死发达双方的撒发达双方的撒放大时',NULL,NULL,'发生',6,'2017-03-23 12:33:29','',''),(11,'公司动态测试2','肥大是发达双方的撒',NULL,NULL,'',6,'2017-03-23 12:33:49','',''),(12,'内容管理解决方案','内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案',NULL,'58d3bc9456957.png','',7,'2017-03-23 12:45:59','',''),(13,'内容管理解决方案2','肥大是发达说内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案内容管理解决方案',NULL,'58d3bc858629f.png','',7,'2017-03-23 12:46:15','',''),(14,'业务流程解决方案','业务流程解决方案业务流程解决方案业务流程解决方案业务流程解决方案业务流程解决方案业务流程解决方案业务流程解决方案',NULL,NULL,'',8,'2017-03-23 12:46:36','',''),(15,'业务流程解决方案2','业务流程解决方案2业务流程解决方案2业务流程解决方案2业务流程解决方案2业务流程解决方案2业务流程解决方案2',NULL,NULL,'',8,'2017-03-23 12:46:54','',''),(16,'脉云为悉云定制问题跟踪平台','肥大是发达双方的撒放大时肥大是发达双方的撒放大时肥大是发达双方的撒放大时肥大是发达双方的撒放大时肥大是发达双方的撒放大时肥大是发达双方的撒放大时肥大是发达双方的撒放大时肥大是发达双方的撒放大时',NULL,NULL,'',12,'2017-03-23 15:59:23','','');

/*Table structure for table `tbl_group` */

DROP TABLE IF EXISTS `tbl_group`;

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `bref` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_group` */

insert  into `tbl_group`(`id`,`name`,`bref`,`type`,`image`) values (3,'行业风向','',1,'58d467c7a24f9.png'),(4,'业务洞察','',1,'58d467d628998.png'),(5,'技术前沿','',1,NULL),(6,'公司动态','',1,NULL),(7,'企业内容管理 ECM','',2,NULL),(8,'业务流程管理 BPM','',2,NULL),(9,'信息安全管理 ISM','',2,NULL),(10,'定制开发服务 PDS','',2,NULL),(11,'培训顾问服务 TCS','',2,NULL),(12,'建筑行业','',3,'58d467f418e41.png'),(13,'制造行业','',3,'58d4680cc32a6.png'),(14,'战略伙伴 SP','',4,NULL),(15,'市场伙伴 MP','',4,NULL),(16,'技术伙伴 TP','',4,NULL);

/*Table structure for table `tbl_job` */

DROP TABLE IF EXISTS `tbl_job`;

CREATE TABLE `tbl_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '岗位名称',
  `type` int(11) DEFAULT NULL COMMENT '工作类型',
  `work_city` int(11) DEFAULT NULL COMMENT '工作城市',
  `work_content` text COLLATE utf8_bin COMMENT '工作内容',
  `requirements` text COLLATE utf8_bin COMMENT '任职条件',
  `work_age` int(2) DEFAULT NULL COMMENT '工作年限',
  `update_time` datetime DEFAULT NULL,
  `urgency` int(1) DEFAULT NULL,
  `salary_scope` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_job` */

insert  into `tbl_job`(`id`,`name`,`type`,`work_city`,`work_content`,`requirements`,`work_age`,`update_time`,`urgency`,`salary_scope`) values (2,'Java工程师',2,3,'控件设置固定的提示其实不太好，有时候可能需要更详细的提示信息，比如空的时候提示为空、太长的时候提示太长、非数','控件设置固定的提示其实不太好，有时候可能需要更详细的提示信息，比如空的时候提示为空、太长的时候提示太长、非数',1,'2017-03-19 17:04:49',2,'8K'),(3,'商务经理',1,2,'fdasfdasfdasfdsa','fdasfdasfdasfdsa',0,'2017-03-19 17:21:21',2,'9K'),(4,'市场类实习生',1,1,'放大放大时','发生',2,'2017-03-19 17:23:49',1,'2K'),(6,'市场助理',1,1,'发生 ','',NULL,'2017-03-19 18:36:08',2,'3K');

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_bin NOT NULL,
  `bref` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`id`,`title`,`bref`,`image`,`type`,`url`,`create_time`) values (4,'范德萨放大时','范德萨放大时范德萨放大时范德萨放大时','58d3873b419f4.png',3,'发生','2017-03-23 16:28:53'),(6,'bannner-1','','58d38360e6ffc.png',1,'','2017-03-23 16:10:56'),(7,'幻灯片2','','58d383554d5a3.png',1,'','2017-03-23 16:11:08'),(8,'幻灯片3','','58d383405b847.png',1,'','2017-03-23 16:11:16'),(9,'轻松上云端','Mainun Connect 系列产品助您连接云端，探索洞察力，应对数据挑战。 拨打免费咨询热线：400-668-0529。','58d384992bb03.png',2,'','2017-03-23 16:16:42'),(10,'安全威胁日益增多？','通过将可靠的基础管控、智能报告和管理工具进行独特的组合，立即开启您的云端之旅。','58d3848f7febf.png',2,'','2017-03-23 16:17:04'),(11,'实现前所未有的突破','2017年 3月 11、 12日, 在紧张刺激的48小时中，实现区块链技术的 创新商业应用，谁与争锋？\r\n','58d384fee7bc8.png',2,'','2017-03-23 16:18:56'),(12,'范德萨放大时	','范德萨放大时	范德萨放大时	范德萨放大时	范德萨放大时	范德萨放大时	范德萨放大时	范德萨放大时	','58d387617e5ee.png',3,'','2017-03-23 16:29:12'),(13,'发生发放的萨法','分公司的公司发的高富帅的鬼斧神工方式的鬼斧神工方式','58d387d004ad3.png',3,'','2017-03-23 16:31:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
