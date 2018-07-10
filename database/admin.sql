-- MySQL dump 10.13  Distrib 8.0.11, for macos10.13 (x86_64)
--
-- Host: localhost    Database: easy-lotus
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `easy_admin_menu`
--

LOCK TABLES `easy_admin_menu` WRITE;
/*!40000 ALTER TABLE `easy_admin_menu` DISABLE KEYS */;
INSERT INTO `easy_admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2018-07-10 04:48:11'),(2,0,6,'系统管理','fa-tasks',NULL,NULL,'2018-07-10 04:58:07'),(3,2,7,'管理员','fa-users','auth/users',NULL,'2018-07-10 04:58:07'),(4,2,8,'角色','fa-user','auth/roles',NULL,'2018-07-10 04:58:07'),(5,2,9,'权限','fa-ban','auth/permissions',NULL,'2018-07-10 04:58:07'),(6,2,10,'菜单','fa-bars','auth/menu',NULL,'2018-07-10 04:58:07'),(7,2,11,'操作日志','fa-history','auth/logs',NULL,'2018-07-10 04:58:07'),(8,0,2,'用户管理','fa-users','/users','2018-07-10 04:55:04','2018-07-10 04:55:12'),(9,0,3,'商品管理','fa-shopping-bag','/products','2018-07-10 04:56:49','2018-07-10 04:58:07'),(10,0,4,'订单管理','fa-shopping-cart','/orders','2018-07-10 04:57:31','2018-07-10 04:58:07'),(11,0,5,'优惠券管理','fa-ticket','/coupon_codes','2018-07-10 04:58:00','2018-07-10 04:58:07');
/*!40000 ALTER TABLE `easy_admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_permissions`
--

LOCK TABLES `easy_admin_permissions` WRITE;
/*!40000 ALTER TABLE `easy_admin_permissions` DISABLE KEYS */;
INSERT INTO `easy_admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2018-07-10 05:01:23','2018-07-10 05:01:23'),(7,'商品管理','products','','/products*','2018-07-10 05:01:59','2018-07-10 05:01:59'),(8,'订单管理','orders','','/orders*','2018-07-10 05:02:24','2018-07-10 05:02:24'),(9,'优惠券管理','coupon_codes','','/coupon_codes*','2018-07-10 05:02:55','2018-07-10 05:02:55');
/*!40000 ALTER TABLE `easy_admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_role_menu`
--

LOCK TABLES `easy_admin_role_menu` WRITE;
/*!40000 ALTER TABLE `easy_admin_role_menu` DISABLE KEYS */;
INSERT INTO `easy_admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `easy_admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_role_permissions`
--

LOCK TABLES `easy_admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `easy_admin_role_permissions` DISABLE KEYS */;
INSERT INTO `easy_admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `easy_admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_role_users`
--

LOCK TABLES `easy_admin_role_users` WRITE;
/*!40000 ALTER TABLE `easy_admin_role_users` DISABLE KEYS */;
INSERT INTO `easy_admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `easy_admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_roles`
--

LOCK TABLES `easy_admin_roles` WRITE;
/*!40000 ALTER TABLE `easy_admin_roles` DISABLE KEYS */;
INSERT INTO `easy_admin_roles` VALUES (1,'Administrator','administrator','2018-07-10 04:44:50','2018-07-10 04:44:50'),(2,'运营','operator','2018-07-10 04:59:56','2018-07-10 04:59:56');
/*!40000 ALTER TABLE `easy_admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_user_permissions`
--

LOCK TABLES `easy_admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `easy_admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `easy_admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `easy_admin_users`
--

LOCK TABLES `easy_admin_users` WRITE;
/*!40000 ALTER TABLE `easy_admin_users` DISABLE KEYS */;
INSERT INTO `easy_admin_users` VALUES (1,'admin','$2y$10$RC7RutpMK5qEZmLpUiPCYutBfXCFUHHyldqRCDOgxgjCpOAUqgCAK','Administrator','','YRsa27jLymCwRq5CAlbnb5p8l0sxaxTkD7MVuFiyWPtMOAc4f8i6Fi4fgIN0','2018-07-10 04:44:50','2018-07-10 05:22:44'),(2,'operator','$2y$10$c8h4.7GA/3WHAkq5SvEWkedJmP/IL/BJmP4wKmrM.VJA1bMzpw1U2','运营',NULL,'IeIqxl2Ao6kElw2Puyc2fiLXZogWeWN1Xnx6qABJK5SA5G9DDh8OFYYjVRvF','2018-07-10 05:19:38','2018-07-10 05:19:38');
/*!40000 ALTER TABLE `easy_admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-10 13:33:17
