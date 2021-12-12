-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table carrental.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table carrental.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
	(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '2021-09-27 09:41:33'),
	(2, 'loc', 'ce04bd8105c135f89b0dfd5d9c1e8c5d', '2021-09-29 15:14:12');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table carrental.tblbooking
CREATE TABLE IF NOT EXISTS `tblbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ToDate` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `message` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table carrental.tblbooking: ~19 rows (approximately)
/*!40000 ALTER TABLE `tblbooking` DISABLE KEYS */;
REPLACE INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
	(3, 'test@gmail.com', 4, '02/07/2017', '07/07/2017', 'adbfdngfgmim', 1, '2017-06-27 04:10:06'),
	(4, 'test@gmail.com', 5, '14/2/2020', '16/2/2020', 'abc', 1, '2021-09-15 09:43:33'),
	(5, 'loc@gmail.com', 2, '14/2/2020', '16/2/2020', 'abcdef', 2, '2021-09-15 09:44:58'),
	(6, 'loc@gmail.com', 6, '14/2/2020', '16/2/2020', 'loc ne', 1, '2021-09-17 08:53:12'),
	(7, 'loc@gmail.com', 4, '2021-09-17', '16/2/2020', 'abc', 1, '2021-09-17 09:30:16'),
	(8, 'loc@gmail.com', 4, '2021-09-17', '16/2/2020', 'abc', 1, '2021-09-17 09:33:25'),
	(9, 'loc@gmail.com', 4, '2021-09-17', '16/2/2020', 'abc', 2, '2021-09-17 10:04:58'),
	(10, 'loc@gmail.com', 2, '2021-09-27', '2021-09-28', 'abc', 0, '2021-09-27 08:34:56'),
	(11, 'loc@gmail.com', 3, '2021-09-21', '2021-09-28', 'abc', 1, '2021-09-27 09:26:22'),
	(12, 'loc@gmail.com', 3, '2021-09-21', '2021-09-28', 'abc', 0, '2021-09-27 09:26:51'),
	(13, 'loc@gmail.com', 3, '2021-09-28', '2021-09-29', 'abcde', 0, '2021-09-27 09:27:05'),
	(14, 'loc@gmail.com', 3, '2021-09-21', '2021-09-28', 'abc', 0, '2021-09-27 09:27:22'),
	(15, NULL, 3, '2021-09-21', '2021-09-28', 'abc', 0, '2021-09-27 09:32:19'),
	(16, 'loc@gmail.com', 3, '2021-09-28', '2021-09-29', 'ádsfsdvdsbfs', 0, '2021-09-27 09:33:08'),
	(17, 'loc@gmail.com', 2, '2021-10-07', '2021-10-30', 'abc', 0, '2021-10-03 10:02:10'),
	(18, 'loc@gmail.com', 2, '2021-10-04', '2021-10-07', 'l?c nè', 0, '2021-10-04 10:56:29'),
	(19, 'loc@gmail.com', 3, '2021-10-05', '2021-10-08', 'L?C nè', 0, '2021-10-04 10:59:20'),
	(20, 'loc@gmail.com', 3, '2021-10-05', '2021-10-08', 'L?C nè', 0, '2021-10-04 11:02:20'),
	(21, 'loc@gmail.com', 7, '2021-09-28', '2021-10-07', 'abc', 0, '2021-10-05 10:05:23'),
	(22, 'loc@gmail.com', 2, '2021-10-05', '2021-10-06', 'l?c nè', 0, '2021-10-05 10:42:57');
/*!40000 ALTER TABLE `tblbooking` ENABLE KEYS */;

-- Dumping structure for table carrental.tblbrands
CREATE TABLE IF NOT EXISTS `tblbrands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table carrental.tblbrands: ~6 rows (approximately)
/*!40000 ALTER TABLE `tblbrands` DISABLE KEYS */;
REPLACE INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
	(1, 'Maruti', '2017-06-18 23:24:34', '2017-06-19 13:42:23'),
	(2, 'BMW', '2017-06-18 23:24:50', NULL),
	(3, 'Audi', '2017-06-18 23:25:03', NULL),
	(4, 'Nissan', '2017-06-18 23:25:13', NULL),
	(5, 'Toyota', '2017-06-18 23:25:24', NULL),
	(7, 'Marutiu', '2017-06-19 13:22:13', NULL);
/*!40000 ALTER TABLE `tblbrands` ENABLE KEYS */;

-- Dumping structure for table carrental.tblcontactusinfo
CREATE TABLE IF NOT EXISTS `tblcontactusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table carrental.tblcontactusinfo: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblcontactusinfo` DISABLE KEYS */;
REPLACE INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
	(1, 'Test Demo test demo																									', 'test@test.com', '8585233222');
/*!40000 ALTER TABLE `tblcontactusinfo` ENABLE KEYS */;

-- Dumping structure for table carrental.tblcontactusquery
CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table carrental.tblcontactusquery: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblcontactusquery` DISABLE KEYS */;
REPLACE INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
	(1, 'Harry Den', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 17:03:07', 1);
/*!40000 ALTER TABLE `tblcontactusquery` ENABLE KEYS */;

-- Dumping structure for table carrental.tblpages
CREATE TABLE IF NOT EXISTS `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table carrental.tblpages: 4 rows
/*!40000 ALTER TABLE `tblpages` DISABLE KEYS */;
REPLACE INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
	(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo", "we" or "us" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service ("TOS"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href="http://in.docs.yahoo.com/info/terms/">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo", "we" or "us" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service ("TOS"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href="http://in.docs.yahoo.com/info/terms/"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo", "we" or "us" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service ("TOS"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href="http://in.docs.yahoo.com/info/terms/"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
	(2, 'Privacy Policy', 'privacy', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
	(3, 'About Us ', 'aboutus', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
	(11, 'FAQs', 'faqs', '																														<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Address------Test &nbsp; &nbsp;dsfdsfds</span>');
/*!40000 ALTER TABLE `tblpages` ENABLE KEYS */;

-- Dumping structure for table carrental.tblsubscribers
CREATE TABLE IF NOT EXISTS `tblsubscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table carrental.tblsubscribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `tblsubscribers` DISABLE KEYS */;
REPLACE INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
	(1, 'anuj.lpu1@gmail.com', '2017-06-22 23:35:32');
/*!40000 ALTER TABLE `tblsubscribers` ENABLE KEYS */;

-- Dumping structure for table carrental.tbltestimonial
CREATE TABLE IF NOT EXISTS `tbltestimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table carrental.tbltestimonial: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbltestimonial` DISABLE KEYS */;
REPLACE INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
	(1, 'test@gmail.com', 'Test Test', '2017-06-18 14:44:31', 1),
	(2, 'test@gmail.com', '\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilis', '2017-06-18 14:46:05', 0);
/*!40000 ALTER TABLE `tbltestimonial` ENABLE KEYS */;

-- Dumping structure for table carrental.tblusers
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `EmailId` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ContactNo` char(11) CHARACTER SET latin1 DEFAULT NULL,
  `dob` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `City` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Country` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table carrental.tblusers: ~4 rows (approximately)
/*!40000 ALTER TABLE `tblusers` DISABLE KEYS */;
REPLACE INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
	(1, 'Harry Den', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2147483647', NULL, NULL, NULL, NULL, '2017-06-18 02:59:27', '2017-06-27 04:02:58'),
	(2, 'AK', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '8285703354', NULL, NULL, NULL, NULL, '2017-06-18 03:00:49', '2017-06-27 04:03:09'),
	(3, 'Mark K', 'webhostingamigo@gmail.com', 'f09df7868d52e12bba658982dbd79821', '09999857868', '03/02/1990', 'PKL', 'PKL', 'PKL', '2017-06-18 03:01:43', '2017-06-18 04:07:41'),
	(4, 'Tom K', 'test@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '9999857868', '', 'PKL', 'XYZ', 'XYZ', '2017-06-18 03:03:36', '2017-06-27 02:18:14'),
	(5, 'Nguy?n L?c', 'loc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0772125457', '', 'Nhà Tr? Thanh Tâm C?nh ??i h?c C?n Th? Hòa An Ph?ng Hi?p\r\n', 'H?u Giang', 'H?u Giang', '2021-09-15 09:44:20', '2021-10-03 11:14:04'),
	(6, 'loc', 'locn@gmail.com', '202cb962ac59075b964b07152d234b70', '0771231234', NULL, NULL, NULL, NULL, '2021-09-17 08:55:44', NULL),
	(7, 'loc 2', 'loc2@gmail.com', '202cb962ac59075b964b07152d234b70', '0772125457', NULL, NULL, NULL, NULL, '2021-10-03 10:16:01', NULL);
/*!40000 ALTER TABLE `tblusers` ENABLE KEYS */;

-- Dumping structure for table carrental.tblvehicles
CREATE TABLE IF NOT EXISTS `tblvehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VehiclesTitle` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext CHARACTER SET latin1 DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage2` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage3` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage4` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage5` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id-chuxe` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Chuxe-xe` (`id-chuxe`),
  CONSTRAINT `Chuxe-xe` FOREIGN KEY (`id-chuxe`) REFERENCES `chuxe` (`id_chuxe`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table carrental.tblvehicles: ~8 rows (approximately)
/*!40000 ALTER TABLE `tblvehicles` DISABLE KEYS */;
REPLACE INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`, `id-chuxe`) VALUES
	(1, 'ytb rvtr', 2, 'vtretrvet', 345345, 'Diesel', 3453, 7, 'knowledge_base_bg.jpg', 'Sedona.jpg', 'tag1.jpg', 'mazda3.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-19 18:46:23', '2021-09-29 16:11:33', 0),
	(2, 'Test Demoy', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam vitae nisl. In dignissim lacus ut ante. Cras elit lectus, bibendum a, adipiscing vitae, commodo et, dui. Ut tincidunt tortor. Donec nonummy, enim in lacinia pulvinar, velit tellus scelerisque augue, ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretium, lectus nec venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam. Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas facilisis elit sed justo. Quisque volutpat malesuada velit. ', 859, 'CNG', 2015, 4, 'car_755x430.png', 'looking-used-car.png', 'banner-image.jpg', 'about_services_faq_bg.jpg', '', 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, '2017-06-19 23:16:17', '2021-09-29 16:26:45', 1),
	(3, 'Lorem ipsum', 4, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 563, 'CNG', 2012, 5, 'featured-img-3.jpg', 'dealer-logo.jpg', 'img_390x390.jpg', 'listing_img3.jpg', '', 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2017-06-19 23:18:20', '2017-06-21 01:40:11', 0),
	(4, 'Lorem ipsum', 1, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 5636, 'CNG', 2012, 5, 'featured-img-3.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, '2017-06-19 23:18:43', '2017-06-21 01:44:12', 0),
	(5, 'Aventador', 1, 'áv', 12345, 'Diesel', 2013, 8, 'car_755x430.png', 'pajero.jpg', 'tag3.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-21 00:57:09', '2021-09-22 09:49:41', 0),
	(6, 'camry', 5, 'dep lam', 500, 'D?u', 2015, 5, 'camry.jpg', 'tag1.jpg', 'pajero.jpg', 'mazda6.jpg', 'mazda3.jpg', 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-15 09:49:15', '2021-09-24 10:11:15', 0),
	(7, 'camry', 5, 'dep lam', 500, 'Diesel', 2015, 5, 'camry.jpg', 'tag1.jpg', 'pajero.jpg', 'mazda6.jpg', 'mazda3.jpg', 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-15 10:12:26', NULL, 0),
	(8, 'Xe Bán T?i', 4, 'Xe dap', 500000, 'Petrol', 2015, 5, 'santafe.jpg', 'pajero.jpg', 'mazda3.jpg', 'mazda6.jpg', '', 1, 1, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, NULL, '2021-09-24 10:13:27', NULL, 0);
/*!40000 ALTER TABLE `tblvehicles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
