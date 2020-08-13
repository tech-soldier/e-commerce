-- MySQL dump 10.13  Distrib 8.0.21, for macos10.15 (x86_64)
--
-- Host: localhost    Database: watches
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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'pseudo-class@gmail.com','mypass','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'smart','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(2,'luxury','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(3,'mechanical','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(4,'digital','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(5,'quartz','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `customer_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customers_email_address_unique` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Milad','Dirani','1411 Ashburn st.','Winnipeg','Manitoba','Canada','r4t2b8','milad-dirani@shaw.net','204-786-9007','mypass','2020-08-04 19:40:49','2020-08-04 19:40:49',NULL),(2,'Dawn','Baker','88 Hargrave Bay','Regina','Saskatchewan','Canada','r5y6u8','dawn-baker@bellmts.com','309-446-9007','mypass','2020-08-04 19:40:49','2020-08-04 19:40:49',NULL),(3,'Inna','Soldatkina','12 Abbots Cresent','Victoria','British Columbia','Canada','r5y6u7','inna-solda@gmail.com','604-146-9007','mypass','2020-08-04 19:40:49','2020-08-04 19:40:49',NULL),(4,'Alexandr','Pasko','43 Inkster st','Calgary','Alberta','Canada','35y6u7','alex-the-great@gmail.com','825-146-9007','mypass','2020-08-04 19:40:49','2020-08-04 19:40:49',NULL),(5,'Rahwa','Mehreteab','11 Hudson Street','Toronto','Ontario','Canada','e5y6u7','rahwa@mts.net','226-146-9107','mypass','2020-08-04 19:40:49','2020-08-04 19:40:49',NULL),(6,'Akash','Bakshi','330 Nortmount Av','Windsor','Ontario','Canada','e5y8u7','aCash-money@mts.net','226-146-9107','mypass','2020-08-04 19:40:49','2020-08-04 19:40:49',NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1509 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (786,'2020_07_30_170441_create_customers_table',1),(1348,'2020_07_30_172543_create_order_watches_table',2),(1499,'2014_10_12_000000_create_users_table',3),(1500,'2014_10_12_100000_create_password_resets_table',3),(1501,'2019_08_19_000000_create_failed_jobs_table',3),(1502,'2020_07_30_164840_create_watches_table',3),(1503,'2020_07_30_165750_create_admins_table',3),(1504,'2020_07_30_171314_create_categories_table',3),(1505,'2020_07_30_171519_create_transactions_table',3),(1506,'2020_07_30_171819_create_taxes_table',3),(1507,'2020_07_30_172214_create_orders_table',3),(1508,'2020_07_30_172543_create_order_watch_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_watch`
--

DROP TABLE IF EXISTS `order_watch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_watch` (
  `watch_id` int unsigned NOT NULL,
  `order_id` int unsigned NOT NULL,
  `watch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(14,2) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_watch`
--

LOCK TABLES `order_watch` WRITE;
/*!40000 ALTER TABLE `order_watch` DISABLE KEYS */;
INSERT INTO `order_watch` VALUES (1,1,'Bamity',1399.99,1,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(2,1,'Vagram',1699.99,2,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(2,3,'Vagram',1699.99,1,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(3,4,'Quo Lux',599.99,1,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(4,5,'Alphazap',199.99,1,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(4,6,'Alphazap',199.99,1,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL);
/*!40000 ALTER TABLE `order_watch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_watches`
--

DROP TABLE IF EXISTS `order_watches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_watches` (
  `watch_id` int unsigned NOT NULL,
  `order_id` int unsigned NOT NULL,
  `tax_id` int unsigned NOT NULL,
  `watch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(14,2) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_watches`
--

LOCK TABLES `order_watches` WRITE;
/*!40000 ALTER TABLE `order_watches` DISABLE KEYS */;
INSERT INTO `order_watches` VALUES (1,1,1,'Bamity',1399.99,1,'2020-08-09 20:57:44','2020-08-09 20:57:44',NULL),(2,1,1,'Vagram',1699.99,2,'2020-08-09 20:57:44','2020-08-09 20:57:44',NULL),(2,3,3,'Vagram',1699.99,1,'2020-08-09 20:57:44','2020-08-09 20:57:44',NULL),(3,4,5,'Quo Lux',599.99,1,'2020-08-09 20:57:44','2020-08-09 20:57:44',NULL),(4,5,5,'Alphazap',199.99,1,'2020-08-09 20:57:44','2020-08-09 20:57:44',NULL),(4,6,4,'Alphazap',199.99,1,'2020-08-09 20:57:44','2020-08-09 20:57:44',NULL);
/*!40000 ALTER TABLE `order_watches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` decimal(14,2) NOT NULL,
  `GST` decimal(10,2) DEFAULT NULL,
  `PST` decimal(10,2) DEFAULT NULL,
  `HST` decimal(10,2) DEFAULT NULL,
  `shipping` decimal(14,2) NOT NULL,
  `transaction_status` tinyint(1) NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) NOT NULL DEFAULT '0',
  `total` decimal(14,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'Milad','milad-dirani@shaw.net','1411 Ashburn st.','1411 Ashburn st.',1399.99,0.05,0.07,NULL,11.99,0,0,1567.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(2,2,'Milad','techwatch7@gmail.com','141187 Ashburn st.','141187 Ashburn st.',1699.99,0.05,0.07,NULL,11.99,1,0,1903.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(3,3,'Dawn','dawn-baker@bellmts.com','88 Hargrave Bay','88 Hargrave Bay',1699.99,0.05,0.06,NULL,9.99,1,0,1886.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(4,4,'Inna','inna-solda@gmail.com','12 Abbots Cresent','12 Abbots Cresent',599.99,0.05,0.07,NULL,11.99,1,1,671.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(5,4,'Inna','inna-solda@gmail.com','12 Abbots Cresent','12 Abbots Cresent',199.99,0.05,0.07,NULL,11.99,1,1,223.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(6,5,'Alexandr','alex-the-great@gmail.com','43 Inkster st','43 Inkster st',199.99,0.05,0.00,NULL,11.99,1,1,209.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(7,8,'Aina Ramos','ainaramos14@gmail.com','187 Banning','187 Banning',199.99,NULL,NULL,0.15,11.99,1,1,209.99,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxes`
--

DROP TABLE IF EXISTS `taxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GST` decimal(10,2) DEFAULT NULL,
  `PST` decimal(10,2) DEFAULT NULL,
  `HST` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxes`
--

LOCK TABLES `taxes` WRITE;
/*!40000 ALTER TABLE `taxes` DISABLE KEYS */;
INSERT INTO `taxes` VALUES (1,'Manitoba',0.05,0.07,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(2,'Ontario',0.00,0.00,0.13,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(3,'Saskatchewan',0.05,0.06,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(4,'Alberta',0.05,0.00,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(5,'British Columbia',0.05,0.07,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(6,'New Brunswick',0.00,0.00,0.15,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(7,'Newfoundland and Labrador',0.00,0.00,0.15,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(8,'Prince Edward Island',0.00,0.00,0.15,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(9,'Quebec',0.05,0.10,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(10,'Yukon',0.05,0.00,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(11,'Nunavut',0.05,0.00,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(12,'Nova Scotia',0.00,0.00,0.15,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(13,'Northwest Territories',0.05,0.00,0.00,'2020-08-13 00:15:46','2020-08-13 00:15:46',NULL);
/*!40000 ALTER TABLE `taxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `transaction_status` tinyint(1) NOT NULL DEFAULT '0',
  `response_code` int NOT NULL,
  `auth_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,1,112233,'2011-01','mock_date','2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(2,2,1,112663,'9990-01','mock_data','2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(3,3,1,109633,'3010-01','mock_data','2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(4,4,1,112199,'2881-01','mock_data','2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(5,5,1,112009,'2090-01','mock_data','2020-08-13 00:15:46','2020-08-13 00:15:46',NULL),(6,6,1,112000,'2020-11','mock_data','2020-08-13 00:15:46','2020-08-13 00:15:46',NULL);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'milad-dirani@shaw.net',NULL,'$2y$10$bgVNxJANPiq.qBlH.NaQnu0xfQ5F4CTwS9Brv/pvJsBvymyNWxcbG',NULL,'2020-08-13 00:15:44','2020-08-13 00:15:44','Milad','Dirani','1411 Ashburn st.','Winnipeg','Manitoba','Canada','r4t2b8','204-786-9007','linkedin_milad.jpg',NULL,0),(2,'techwatch7@gmail.com',NULL,'$2y$10$rYqG.2ExSoXJR/rZJGsvu.RPpNX1peyWPbgjmfrBBBBln8rrTltUi',NULL,'2020-08-13 00:15:45','2020-08-13 00:15:45','Milad','Darani','141187 Ashburn st.','Winnipeg','Manitoba','Canada','r4t2b8','204-786-9007',NULL,NULL,1),(3,'dawn-baker@bellmts.com',NULL,'$2y$10$9AXQPcNaVonNiy0ndJKe2ebqStFijw0riMeOrcYzFb57neNEqUlj.',NULL,'2020-08-13 00:15:45','2020-08-13 00:15:45','Dawn','Baker','88 Hargrave Bay','Regina','Saskatchewan','Canada','r5y6u8','309-446-9007','linkedin_dawn.jpg',NULL,1),(4,'inna-solda@gmail.com',NULL,'$2y$10$3k.MxzV5jnphDGAVtrANIum5tujbaICw7cB7TH1OcD98rkLltqr7W',NULL,'2020-08-13 00:15:45','2020-08-13 00:15:45','Inna','Soldatkina','12 Abbots Cresent','Victoria','British Columbia','Canada','r5y6u7','604-146-9007','linkedin_inna.jpg',NULL,0),(5,'alex-the-great@gmail.com',NULL,'$2y$10$E6FyrOGqGDZ7lASwp.4YMuu9JnkH/jpqhFP9Ni2HfO0VSKRzeQijy',NULL,'2020-08-13 00:15:45','2020-08-13 00:15:45','Alexandr','Pasko','43 Inkster st','Calgary','Alberta','Canada','35y6u7','825-146-9007','linkedin_alexandr.jpg',NULL,0),(6,'rahwa3netsereab@gmail.com',NULL,'$2y$10$Da7Uq4u0BVhIVFsJSRndgOWkM8Y5LOoHWjTfAbFvMvvmoeHW2WRgO',NULL,'2020-08-13 00:15:46','2020-08-13 00:15:46','Rahwa','Mehreteab','11 Hudson Street','Toronto','Ontario','Canada','e5y6u7','226-146-9107','linkedin_rahwa.jpg',NULL,1),(7,'aCash-money@mts.net',NULL,'$2y$10$Ayc6.rjJY9aBf8hKIRyCoO/pMs9RuRJCjby8p0Y.BQgzQP7Yt99wW',NULL,'2020-08-13 00:15:46','2020-08-13 00:15:46','Akash','Bakshi','330 Nortmount Av','Windsor','Ontario','Canada','e5y8u7','226-146-9107','linkedin_aakash.jpg',NULL,1),(8,'ainaramos14@gmail.com',NULL,'$2y$10$bieQma9mT8334Smb1AQDBeg3..jfyZIajyS/JXcDGr2CP85eiGl1O',NULL,'2020-08-13 00:15:46','2020-08-13 00:15:46','Aina','Ramos','187 Banning','Charlotte Town','Prince Edward Island','Canada','e5n8u7','226-146-9107','linkedin_aina.jpg',NULL,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `watches`
--

DROP TABLE IF EXISTS `watches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `watches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `SKU` int NOT NULL,
  `watch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_stock` tinyint NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(14,2) NOT NULL,
  `cost` decimal(14,2) NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int unsigned NOT NULL,
  `diameter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strap_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strap_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_resistant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watches`
--

LOCK TABLES `watches` WRITE;
/*!40000 ALTER TABLE `watches` DISABLE KEYS */;
INSERT INTO `watches` VALUES (1,22567959,'AIR-KING',1,26,1799.99,1399.99,'gold','silver','quartz','male',2,'33','18mm','184mm','122g','3 atm','AIR_KING.jpg','The Oyster Perpetual Air-King pays tribute to the pioneers of flight and the Oyster’s roles in the epic story of aviation.','With its 40 mm case in Oystersteel, solid-link Oyster bracelet with Oysterclasp, and distinctive Black dial, the Air-King perpetuates the aeronautical heritage of the original Rolex Oyster.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(2,22567950,'BLUE-DWELLER',1,89,2100.99,1699.99,'titanium','silver','quartz','male',5,'29','21mm','180mm','132g','10 atm','BLUE_DWELLER.jpg','Yellow Rolesor with a Blue Cerachrom bezel and a blue dial with large luminescent hour markers.','It features a unidirectional rotatable bezel with Cerachrom insert and solid-link Oyster bracelet. The latest generation Submariner and Submariner Date remain faithful to the original model launched in 1953. In watchmaking, the Submariner represented a historic turning point; it set the standard for divers’ watches.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(3,22567900,'CELLINI',1,12,999.99,599.99,'stainless steel','black','quartz','male',2,'29','23mm','182mm','92g','3 atm','CELLINI.jpg','The Cellini collection celebrates the eternal elegance of traditional timepieces with a contemporary touch; the name was inspired by the Italian Renaissance artist, Benvenuto Cellini.','This collection combines the best of Rolex know-how and its high standards of perfection with an approach that heightens watchmaking heritage in its most timeless form. The lines of the Cellini models are sober and refined, the materials noble, the finishings luxurious: every detail respects the codes of the art of watchmaking.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(4,22567100,'DATEJUST',1,20,2989.99,1999.99,'carbon fibre','silver','quartz','male',3,'33','20mm','182mm','45g','3 atm','DATEJUST.jpg','The Oyster Perpetual Datejust is the epitome of the classic Rolex watch. ','Created in 1945, the Datejust was the first self-winding waterproof chronometer wristwatch to display the date in a window at 3 o’clock on the dial – hence its name. With its timeless aesthetics, functions and rich history, the Datejust is a watchmaking icon and one of the brand’s most recognizable watches.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(5,22567900,'DAY-DATE',1,20,2989.99,1999.99,'rosegold','rosegold','quartz','female',1,'27','25mm','165mm','95g','13 atm','DAY_DATE.jpg','Launched in 1956, the Day-Date made its debut as the first waterproof and self-winding chronometer wristwatch.','The exceptional precision, reliability, legibility and presence of this prestigious model has made it the ultimate status watch. It is offer a modern calendar with an instantaneous day display, spelt out in full in a window on the dial, in addition to the date.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(6,22567980,'EXPLORER',1,20,2989.99,1999.99,'gold','gold','mechanical','female',3,'27','19mm','160mm','99g','5 atm','EXPLORER.jpg','The Oyster Perpetual Explorer and Oyster Perpetual Explorer II evolved from Rolex’s deep involvement with exploration. They go where few people venture.','The brand was able to test these watches in real life by equipping polar, mountaineering and caving expeditions over many years. Some of the world’s most intrepid explorers, mountaineers and scientists took Explorer and Explorer II watches to places that tested their reliability in the toughest conditions.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(7,22567980,'GMT-MASTER',1,21,1211.99,678.99,'stainless steel','silver','quartz','female',5,'27','11mm','150mm','111g','10 atm','GMT_MASTER_II.jpg','Designed to show the time in two different time zones simultaneously, the GMT-Master, launched in 1955, was originally developed as a navigation instrument for professionals criss-crossing the globe.','Heir to the original model, the GMT-Master II was unveiled in 1982, with a new movement ensuring ease of use. Its combination of peerless functionality, robustness and instantly recognizable aesthetics has attracted a wider audience of world travellers.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(8,22561980,'LADY-DATEJUST',1,201,1811.99,1299.99,'titanium','silver','mechanical','female',3,'31','24mm','179mm','129g','0 atm','LADY_DATEJUST.jpg','With its refined glamour, Rolex’s classic women’s watch, the Lady-Datejust, stands for style and technical performance.','The women’s version of the emblematic Datejust, created in 1945, was unveiled in 1957. With all its timeless elegance and functionality, it is today offered in a petite 28 mm size.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(9,22561980,'MILGAUSS',1,201,4811.99,2299.99,'gold','gold','quartz','female',2,'29','25mm','175mm','145g','2 atm','MILGAUUSS.jpg','The Oyster Perpetual Milgauss is a pioneering anti-magnetic watch designed to meet the demands of engineers and scientists.','Created in 1956, it can withstand magnetic fields of up to 1,000 gauss. Hence its name, “mille”, which is French for one thousand. The first watch of its kind, the Milgauss combines unique aesthetics and scientific heritage.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(10,23561980,'MILGAUUSS',1,1222,411.99,219.99,'silicone rubber','blue','automatic','male',1,'28','25mm','195mm','15g','19 atm','MILGAUSS.jpg','The Oyster Perpetual Milgauuss is a pioneering anti-magnetic watch designed to meet the demands of engineers and scientists.','Created in 1958, it can withstand magnetic fields of up to 1,400 gauss. Hence its name, “mille”, which is French for one thousand. The first watch of its kind, the Milgauuss combines unique aesthetics and scientific heritage.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(11,20361980,'OYSTER PERPETUAL',1,92,421.99,211.99,'silicone rubber','white','automatic','male',1,'28','24mm','185mm','16g','19 atm','OYSTER_PERPETUAL.jpg','The Oyster Perpetual is the purest expression of the Oyster concept, providing a clear and accurate time display.','This watch is the direct descendant of the original Oyster launched in 1926, the first waterproof wristwatch in the world and the foundation on which Rolex has built its reputation.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(12,20001980,'PEARLMASTER',1,9,449.99,249.99,'silicone rubber','black','mechanical','female',1,'25','20mm','165mm','19g','22 atm','PEARLMASTER.jpg','The Oyster Perpetual Pearlmaster holds a special place in the Oyster collection','It represents the height of exquisiteness, with precious metals and gemstones. As a watchmaking jewel expressing refinement and elegance.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(13,20001985,'SEA-DWELLER',1,9,1449.99,1249.99,'silicone rubber','pink','mechanical','female',1,'25','21mm','165mm','29g','30 atm','SEA_DWELLER.jpg','The Sea-Dweller and Rolex Deepsea are ultra-resistant divers’ watches engineered by Rolex for deep-sea exploration.','Waterproof to a depth of 4,000 feet (1,220 metres) for the Rolex Sea-Dweller, launched in 1967, and 12,800 feet (3,900 metres) for the Rolex Deepsea unveiled in 2008, they are the ultimate manifestation of Rolex’s leadership in divers’ watches and the result of decades of collaboration with diving professionals. In 2014 Rolex released a special version of the model, the Rolex Deepsea with a D-blue dial, to commemorate James Cameron’s historic solo dive to the bottom of the Mariana Trench, some 11,000 metres deep. From twilight blue to bottomless black, its two-colour gradient dial celebrates one man’s journey to the deepest place on Earth.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(14,20001911,'SKY-DWELLER',1,771,449.99,299.99,'silicone rubber','white','automatic','male',1,'25','25mm','199mm','29g','30 atm','SKY_DWELLER.jpg','The Oyster Perpetual Sky-Dweller is a timepiece with a unique design that blends technological sophistication and ease of use.','It features an innovative annual calendar called Saros and a dual time zone display, making it the ideal watch for world travellers.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(15,20001911,'SUBMARINER',1,755,449.99,299.99,'silver','black','automatic','male',1,'25','25mm','180mm','129g','3 atm','SUBMARINER.jpg','The Oyster Perpetual Submariner is a reference among divers’ watches; it is the watch that unlocked the deep.','Launched in 1953, the Submariner was the first divers’ wristwatch waterproof to a depth of 100 metres (330 feet). This was the second great breakthrough in the technical mastery of waterproofness, following the invention of the Oyster, the world’s first waterproof wristwatch, in 1926. In watchmaking, the Submariner represented a historic turning point; it set the standard for divers’ watches.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(16,20071911,'SWISS ARMY',1,55,2449.99,2199.99,'silver','silver','quartz','male',1,'29','25mm','180mm','149g','3 atm','SWISS_ARMY.jpg','The Oyster Perpetual Rolex Deepsea in Oystersteel with a black ceramic bezel and an Oyster bracelet.','It features a black dial and large luminescent hour markers. Waterproof to a depth of 12,800 feet (3,900 metres) with a unidirectional 60-minute rotatable bezel, the Rolex Deepsea is amongst the ultra-resistant divers’ watches engineered by Rolex for deep-sea exploration. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(17,29301911,'SWISS QUARTZ',1,55,3449.99,3199.99,'silver','gold','quartz','male',1,'33','25mm','186mm','149g','3 atm','SWISS_QUARTZ.jpg','This is one of the more affordable variants of the Maverick watch, but not necessarily the best one.','But if you’re not in the mood to spend more than $250 on a watch, then this is just the right model to look at. And that’s Amazon’s priceing – at Victorinox, you’ll have to pay twice that. So, bear that in mind.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(18,29344911,'YACHT-MASTER II',1,55,3449.99,3199.99,'silver','grey','quartz','male',2,'32','24mm','177mm','168g','3 atm','YACHT_MASTER_II.jpg','The Rolex Yacht-Master and Yacht-Master II models embody the spirit of the sailor.','Inspired by the rich heritage that has bound Rolex to the world of sailing since the 1950s, the Yacht-Master blends function and style, while the Yacht-Master II brings together the finest in Rolex technology to create a regatta chronograph built for yachting competition.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(19,89344911,'YATCH-MASTER',1,300,16449.99,14199.99,'gold','gold','quartz','female',2,'32','24mm','160mm','368g','0 atm','YATCH_MASTER.jpg','The Rolex Yacht-Master and Yacht-Master models embody the spirit of the sailor.','Inspired by the rich heritage that has bound Rolex to the world of sailing since the 1960s, the Yacht-Master blends function and style, while the Yacht-Master brings together the finest in Rolex technology to create a regatta chronograph built for yachting competition.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(20,79344611,'OYSTER PERRPETUAL',1,880,16449.99,14199.99,'gold','white-gold','quartz','male',2,'30','24mm','180mm','398g','0 atm','OYSTER_PERRPETUAL.jpg','The Oyster Perrpetual is the purest expression of the Oyster concept, providing a clear and accurate time display.','This watch is the direct descendant of the original Oyster launched in 1926, the first waterproof wristwatch in the world and the foundation on which Rolex has built its reputation.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(21,79344611,'ATLAS WALNUT',1,80,16449.99,15999.99,'gold','black','mechanical','female',2,'28','24mm','160mm','188g','0 atm','Atlas_Walnut_Blue_Marble.jpg','Travel through time with the Atlas Collection - Treehut’s first automatic watch - a combination of elegant style and pure form mechanics for the man who appreciates timeless designs with intelligence and grace.','Featuring a real marble dial with a small window revealing the movement, adorned with wood bezel on a vintage inspired barrel-shaped stainless steel case, creating the minimal and versatile everyday watch for the profound well-traveled man.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(22,66344611,'CARTIER TANK',1,879,22449.99,20999.99,'gold','black','automatic','male',4,'28','26mm','190mm','198g','1 atm','Cartier_Tank_Solo_XL.jpg','Cartier Tank Solo XL Automatic Stainless Steel Mens Watch W5200028','The Tank has been a collectors icon since the 1920s. It was designed in 1917 by Louis Cartier and everyone from Cary Grant to Andy Warhol has worn one. You should too. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(23,66302611,'PATEK PHILIPPE',1,879,22449.99,20999.99,'gold','silver','automatic','male',4,'28','23mm','177mm','178g','1 atm','Patek_Philippe_Grand.jpg','Patek Philippe Grand Complications 41mm, 18K Rose Gold and Alligator','This manually-wound watch features day, month, leap year and day or night indicators as well as a seconds subdial.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(24,24598763,'BLANCPAIN',1,97,279.99,249.99,'carbon fibre','black','automatic','male',1,'28','24mm','192mm','124g','3 atm','Blancpain_Fifty_Fathoms.jpg','Blancpain Fifty Fathoms Meteor Automatic 43mm','For a luxury watch you can wear every day, this watch offers a sport stainless steel case, black ceramic bezel, and a strap made from sturdy sail canvas. Inside, you will find a Blancpain calibre 1315 automatic movement with an 120-hour power reserve. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(25,29344911,'CHANEL MONSIEUR',1,60,139.99,119.99,'stainless steel','rosegold','automatic','female',1,'34','20mm','168mm','132g','3 atm','Chanel_Monsieur_Watch.jpg','Chanel Monsieur Watch 40mm','For a sophisticated, minimalist look, this Chanel watch with an opaline dial, 18k beige gold case, and alligator strap is just what you need. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(26,89765411,'BLANCPAIN FIFTY',1,300,179.99,149.99,'stainless steel','black','automatic','mail',1,'28','20mm','190mm','146g','2 atm','Blancpain_Fifty_Fathoms_Automatic.jpg','Blancpain Fifty Fathoms Automatic 45mm','Blancpain introduced the first Fifty Fathoms watch in 1953 as the first modern divers watch and this iconic version, water-resistant at up to 1000 feet offers an update on the classic with an added date marker and luminescent hands. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(27,20234876,'BULGARI',1,23,3795.99,3395.99,'titanium','black','mechanical','male',2,'46','24mm','196mm','148g','6 atm','Bulgari_Octo.jpg','Bulgari Octo 41mm, 18K Rose Gold and Alligator','Inspired by ancient Roman architecture, this octagonal watch features a sleek black lacquered dial to pair with the integrated black alligator leather strap, accented by a warm, 18k rose gold casing that screams Italian luxury.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(28,20598356,'ROLEX EXPLORER II',1,13,25999.99,23999.99,'stainless steel','silver','mechanical','male',2,'38','22mm','192mm','168g','9 atm','Rolex_Explorer_II.jpg','Rolex Explorer II Automatic 42mm, Stainless Steel Oyster Bracelet','For the on-the-go guy, this Rolex, equipped with a calibre 3187 self-winding mechanical movement, also comes equipped with a separate 24-hour hand that lets you keep track of the hours in another time zone. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(29,45982567,'BELL & ROSS',1,67,1939.99,1799.99,'carbon fibre','white','automatic','female',2,'28','20mm','174mm','116g','8 atm','Bell_and_Ross_Vintage.jpg','Bell and Ross Vintage V2-93 Automatic 41mm','The black rubber strap of this stainless steel watch provides a sporty feel while the Calibre BR-CAL.303 automatic movement and bi-directional bezel help you keep track of time no matter where your travels take you.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(30,89398743,'IWC PORTUGUESE',1,53,8999.99,8199.99,'stainless steel','silver','automatic','femail',2,'26','20mm','176mm','153g','12 atm','IWC_Portuguese_Automatic.jpg','IWC Portuguese Automatic Chronograph Silver Dial 40.9 mm Mens Watch IW371480','Based on the original 1930s design, this updated classic is the most coveted of the line for a reason: its effortlessly elegant style and the precision of its 79350 calibre self-winding movement with 31 jewels.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(31,66301278,'CHRONOGRAPH',1,89,249.99,209.99,'silver','silver','automatic','male',4,'28','24mm','187mm','128g','3 atm','Chronograph_42_MM.jpg','Chronograph 42 MM. The completion of a corporate celebration is typically marked with purchasing the 2020 favourite digital Chronograph watch.','While the crisp white dial of this 18k rose gold watch may be a departure from the classic Tiffany & Co. shade, the alligator band and gold poudré numerals still boast the timeless stylishness that made the brand an icon.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(32,66302611,'LONGINES',1,119,299.99,199.99,'silver','black','quartz','male',4,'28','23mm','170mm','121g','3 atm','Longines_Master_Collection.jpg','Longines Master Collection GMT Moonphase 40mm','The blue steel hands of this stainless steel and alligator chronograph offers a modern edge to the classic styling of its versatile dial which features sub-dials for the moon phase, date, and a 24 hour indicator.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(33,66304411,'ROLEX DAYTONA',1,119,1299.99,1189.99,'titanium','white','quartz','female',4,'28','23mm','160mm','111g','3 atm','Rolex_Daytona.jpg','Rolex Daytona 45mm. There’s something magical about a chiming cultured wristwatch, doubly so if its made by TechWatch, whose family of dress watches may be unparalleled.','Blue dials have enjoyed a resurgence lately, but green, especially on a staple like a Rolex Daytona, is equally wearable and much more unique.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(34,69302611,'HUEBOLT',1,119,1299.99,1189.99,'carbon fibre','brown','quartz','male',4,'28','23mm','160mm','122g','3 atm','huebolt.jpg','Following its 2018 FIFA World Cup smartwatch, Hueblot has produced a second watch running Wear OS.','The Big Bang e comes in two versions: carbon fibre, with  and black ceramic. Both feature a 42mm OLED high-definition touchscreen covered with quartz crystal, and 8GB of storage. In addition to the ‘time only’ analogue function, the Huebolt features interpretations of traditional watch complications, including one that tracks the lunar.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(35,61122611,'EI PRIMERO',1,119,1299.99,1189.99,'carbon fibre','brown','quartz','male',4,'28','23mm','160mm','122g','3 atm','El_Primero_Chronomaster.jpg','El Primero Chronomaster Automatic Silver Dial Mens Watch','Designed from the original 1969 case, this 31 jewel timepiece features twelve hour, thirty minute, and sixty second subdials along with a stainless steel case and alligator leather strap.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(36,81155511,'GRIP',1,119,1299.99,1189.99,'carbon fibre','brown','quartz','male',5,'28','23mm','160mm','122g','3 atm','Grip_35mm_watch.jpg','Grip 35mm watch. Rair continues to surpise and not dissapoint.','Named for the skateboard terminology for the way sneakers \"grip\" the skateboard tape, Guccis unusual watch features three indicator dials.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(37,81155001,'PARMIGIANI FLEURIER',1,119,1219.99,1119.99,'stainless steel','silver','quartz','male',5,'28','24mm','156mm','122g','26 atm','Parmigiani_Fleurier_Toric.jpg','Parmigiani Fleurier Toric Hemispheres Retrograde 42.8mm','The bi-coastal will appreciate that among this watchs plethora of options comes an independently controlled subdial for another time zone. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(38,10955531,'CARTIER',1,32,219.99,119.99,'stainless steel','black','quartz','female',5,'28','18mm','156mm','112g','6 atm','Cartier_Drive_de_Cartier.jpg','Cartier Drive de Cartier 40mm, Stainless Steel & Alligator','Neither square nor circular, Cartier refers to the shape of their self-winding, steel-cased watch as \"cushion-shaped.\" It utilizes their in-house caliber 1904-PS movement with blued steel hands and a small seconds counter.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(39,10955531,'LAUREATO',1,32,2219.99,1319.99,'gold','gold','quartz','male',5,'28','18mm','156mm','42g','26 atm','Laureato_Hand_Wind_Mens.jpg','Laureato Hand Wind Mens WatchOne of the nicest-looking chronographs and arguably the classic TechWatches dress watch now comes with a self-winding in-house movement that significantly lowers its entry cost.','An updated version of the classic 1975 style, this hand-winding movement features a skeleton dial with a 54 hour power reserve and a black ceramic casing and strap.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(40,19955666,'BRACELET',1,561,3219.99,2319.99,'gold','gold','quartz','male',5,'28','18mm','156mm','42g','3 atm','Bracelet_Watch.jpg','Bracelet Watch, 40mm first release of 2020 is a new version of its Automatic, which debuted in 2017.','For the ultra-minimalist, this all black dial features a Museum dot at 12 o clock.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(41,66302641,'GEN 5 SMARTWATCH GARRETT',1,379,22444.99,20994.99,'silver','black','mechanical','male',3,'28','22mm','185mm','172g','1 atm','Gen_5_Smartwatch_Garrett.jpeg','Gen 5 Smartwatch Garrett HR Stainless Steel','Smartwatches powered with Wear OS by Google are compatible with iPhone® and Android™ phones. Wear OS by Google and other related marks are trademarks of Google LLC. Touchscreen smartwatches powered with Wear OS by Google require a phone running Android OS 6.0+ (excluding Go edition) or iOS 10+. Supported features may vary between platforms.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(42,66302651,'GEN 5 SMARTWATCH JULIANNA',1,479,22445.99,20995.99,'rosegold ','silver','mechanical','female',3,'28','21mm','175mm','162g','1 atm','Gen_5_Smartwatch_Julianna.jpeg','Gen 5 Smartwatch Julianna HR Rose Gold-Tone Stainless Steel Mesh','Activity Tracker, Control Your Music, Google Pay™, GPS, Heart Rate Tracking, Interchangeable Watch Band, Notifications, Personalise Your Dial, Swimproof','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(43,22567000,'COSMOGRAPH DAYTONA',1,200,299.99,199.99,'silver','silver','mechanical','male',1,'30','20mm','182mm','45g','3 atm','COSMOGRAPH_DAYTONA.jpg','The Oyster Perpetual Cosmograph Daytona is the ultimate tool watch for those with a passion for driving and speed.','Introduced in 1963, the Cosmograph Daytona was designed to meet the demands of professional racing drivers. It is an icon forever joined in name and function to the high-performance world of motor sport. More than 50 years after its creation, the Cosmograph Daytona remains in a class of its own among sport chronographs and continues to transcend time.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(44,66302661,'GEN5 SMARTWATCH JULIANNA',1,579,22446.99,20996.99,'carbon fibre','black','mechanical','male',3,'28','24mm','190mm','172g','1 atm','Gen5_Smartwatch_Julianna.jpeg','Gen 5 Smartwatch Julianna HR Smoke Stainless Steel','BTo avoid damage to your watch, only use with included charger. Do not use a USB hub, USB splitter, USB y-cable, battery pack or other peripheral device to charge. Product should be kept more than 20 cm away from implanted medical devices to minimise potential for RF interference. See product insert for full details.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(45,66302661,'GOLD CHRONOGRAPH',1,579,22446.99,20996.99,'carbon fibre','black','mechanical','male',3,'28','24mm','190mm','172g','1 atm','GOLD_CHRONOGRAPH.jpg','GOLD CHRONOGRAPH Stainless Steel','Each Benjamin Banneker watch incorporates wood in some way. For the Crossover, African Red Sandalwood is layered over a steel-lated case. ','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(46,24598763,'VACHERON CONSTANTIN',1,17,6999.99,6299.99,'stainless steel','black','automatic','male',2,'32','24mm','190mm','194g','12 atm','Vacheron_Constantin.jpg','Vacheron Constantin Overseas Automatic 42.5mm','With 54 jewels, this transparent-backed stainless steel chronograph features a caliber 5200 movement with a 52 hour power reserve.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(47,66302621,'TOM FORD',1,179,22442.99,20992.99,'silicone rubber ','wodden','mechanical','female',3,'28','18mm','161mm','152g','1 atm','Tom_Ford_Watch.jpg','Tom Ford Watch Automatic Stainless Steel Mens Watch W5200028','Leave it Tom Ford, the master of subtle sex appeal, to design a slim, everyday watch that makes a bold statement.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(48,20073498,'OMEGA SPEEDMASTER',1,76,419.99,369.99,'titanium','black','automatic','male',1,'40','24mm','188mm','86g','3 atm','Omega_Speedmaster_Racing.jpg','Omega Speedmaster Racing Automatic Chronograph 40mm, Stainless Steel','60 second, 30 minute, and 12 hour subdials give you all the equipment you need for pin-point precise timing, while the stainless steel case and rubber strap add a sporty edge.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(49,20496720,'ROLEX COSMOGRAPH',1,69,149.99,129.99,'stainless steel','pink','automatic','female',1,'24','20mm','172mm','112g','3 atm','Rolex_Cosmograph_Daytona.jpg','Rolex Cosmograph Daytona 40mm, Stainless Steel Oyster Bracelet','First introduced in 1963, the Daytona, true to its name, was designed to meet the needs for pro race drivers with a self-winding calibre 4130 movement and a larger than usual mainspring to enhance its reserve power.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(50,66302631,'ELMINGTON',1,279,22443.99,20993.99,'stainless steel','silver','mechanical','male',3,'28','20mm','181mm','152g','1 atm','Elmington_Emerald.jpg','Elmington Emerald Green Watch x Gold - 44mm','An oversized Emerald green dial recalls 1960s style with a sleek updated silhouette.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL),(51,66002631,'TEST WATCH',1,279,22443.99,20993.99,'stainless steel','silver','mechanical','male',3,'28','20mm','181mm','152g','1 atm','Elmington_Emerald.jpg','TEST Emerald Green Watch x Gold - 44mm','An TEST Emerald green dial recalls 1960s style with a sleek updated silhouette.','2020-08-13 00:15:44','2020-08-13 00:15:44',NULL);
/*!40000 ALTER TABLE `watches` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-13 13:52:02
