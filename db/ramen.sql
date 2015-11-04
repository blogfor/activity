-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-11-04 21:48:07
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table activity.at_activity
DROP TABLE IF EXISTS `at_activity`;
CREATE TABLE IF NOT EXISTS `at_activity` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) DEFAULT NULL,
  `activity_description` text,
  `activity_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_activity: ~2 rows (approximately)
/*!40000 ALTER TABLE `at_activity` DISABLE KEYS */;
INSERT INTO `at_activity` (`id`, `activity_name`, `activity_description`, `activity_image`, `created`, `modified`) VALUES
	(2, 'STUDY', 'Enrichment classes for school subjects, right brain training ', '', '2015-11-01 08:40:54', '2015-11-01 08:40:54'),
	(3, 'STUDY', 'Enrichment classes for school subjects, right brain training.', '3876-Dance.jpg', '2015-11-03 02:21:47', '2015-11-03 02:21:47');
/*!40000 ALTER TABLE `at_activity` ENABLE KEYS */;


-- Dumping structure for table activity.at_banner
DROP TABLE IF EXISTS `at_banner`;
CREATE TABLE IF NOT EXISTS `at_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_description` text,
  `banner_link` text,
  `banner_order` int(11) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_banner: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_banner` DISABLE KEYS */;
INSERT INTO `at_banner` (`id`, `banner_title`, `banner_image`, `banner_description`, `banner_link`, `banner_order`, `status`, `added`, `modified`) VALUES
	(1, 'HOW IT WORKS', '6910-Coming Soon.jpg', 'Find something new for your child to do today\r\n\r\nActivityhere is a platform which gives you access to enrichment classes, sports, activities and fun for your children, allowing them to try and discover new activities every day. \r\n', '', NULL, 'Y', '2015-11-03 01:42:45', '2015-11-03 01:42:45');
/*!40000 ALTER TABLE `at_banner` ENABLE KEYS */;


-- Dumping structure for table activity.at_daily_logs
DROP TABLE IF EXISTS `at_daily_logs`;
CREATE TABLE IF NOT EXISTS `at_daily_logs` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `platform` text,
  `browser` text,
  `ip_address` varchar(25) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`user_id`,`date`,`time`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table activity.at_daily_logs: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_daily_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_daily_logs` ENABLE KEYS */;


-- Dumping structure for table activity.at_how_it_works
DROP TABLE IF EXISTS `at_how_it_works`;
CREATE TABLE IF NOT EXISTS `at_how_it_works` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hwt_name` varchar(255) DEFAULT NULL,
  `hwt_description` text,
  `hwt_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_how_it_works: ~5 rows (approximately)
/*!40000 ALTER TABLE `at_how_it_works` DISABLE KEYS */;
INSERT INTO `at_how_it_works` (`id`, `hwt_name`, `hwt_description`, `hwt_image`, `created`, `modified`) VALUES
	(2, 'STUDY', 'Enrichment classes for school subjects, right brain training ', '', '2015-11-01 08:40:54', '2015-11-01 08:40:54'),
	(3, 'TEST', 'test', '4411-Penguins.jpg', NULL, NULL),
	(4, 'cvcvc', 'cvcv', '6476-Hydrangeas.jpg', NULL, NULL),
	(5, 'cvcvc', 'cvcv', '7675-Tulips.jpg', NULL, NULL),
	(6, 'dhdh', 'dhdfh', '427-Koala.jpg', NULL, NULL);
/*!40000 ALTER TABLE `at_how_it_works` ENABLE KEYS */;


-- Dumping structure for table activity.at_kids_activities
DROP TABLE IF EXISTS `at_kids_activities`;
CREATE TABLE IF NOT EXISTS `at_kids_activities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kids_name` varchar(255) DEFAULT NULL,
  `kids_description` text,
  `kids_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_kids_activities: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_kids_activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_kids_activities` ENABLE KEYS */;


-- Dumping structure for table activity.at_mail_content
DROP TABLE IF EXISTS `at_mail_content`;
CREATE TABLE IF NOT EXISTS `at_mail_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `mail_content` text NOT NULL,
  `cdate` datetime NOT NULL,
  `mail_footer` varchar(255) NOT NULL,
  `mail_exclude` text,
  `mail_include` text,
  `instant` enum('Y','N') NOT NULL DEFAULT 'Y',
  `include_external_emails` text,
  `notification_on` enum('Yes','No') NOT NULL,
  `send_admin` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table activity.at_mail_content: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_mail_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_mail_content` ENABLE KEYS */;


-- Dumping structure for table activity.at_pages
DROP TABLE IF EXISTS `at_pages`;
CREATE TABLE IF NOT EXISTS `at_pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `page_description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_slug` (`page_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_pages: ~2 rows (approximately)
/*!40000 ALTER TABLE `at_pages` DISABLE KEYS */;
INSERT INTO `at_pages` (`id`, `page_name`, `page_slug`, `page_description`, `created`, `modified`) VALUES
	(2, 'About Us', 'about_us', '<p><strong>Lorem Ipsum is simply dummy text of the printing </strong>and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and<strong> scrambled it to make a type </strong>specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2015-11-02 17:38:04', '2015-11-02 09:51:29'),
	(4, 'page name', 'page_name', '<p>dvzv</p>\r\n', '2015-11-02 17:46:53', '2015-11-02 17:46:53');
/*!40000 ALTER TABLE `at_pages` ENABLE KEYS */;


-- Dumping structure for table activity.at_payment
DROP TABLE IF EXISTS `at_payment`;
CREATE TABLE IF NOT EXISTS `at_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cdate` datetime NOT NULL,
  `membership_id` int(11) NOT NULL,
  `final_amount` float(11,2) NOT NULL,
  `payment_process` int(2) NOT NULL,
  `payment_status` enum('PENDING','SUCCESSFUL','UNSUCCESSFUL','CANCELLED') NOT NULL,
  `Payment_method_detail` varchar(255) NOT NULL,
  `payment_by` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `check_no` varchar(255) NOT NULL,
  `pay_by_fname` varchar(255) NOT NULL,
  `pay_by_lname` varchar(255) NOT NULL,
  `pay_by_address` varchar(255) NOT NULL,
  `pay_by_phone` varchar(20) NOT NULL,
  `pay_by_mobile` varchar(20) NOT NULL,
  `pay_by_fax` varchar(20) NOT NULL,
  `pay_by_email` varchar(100) NOT NULL,
  `pay_note` varchar(255) NOT NULL,
  `refund` decimal(11,2) NOT NULL,
  `refund_note` varchar(255) NOT NULL,
  `refund_by` int(11) NOT NULL,
  `refund_time` datetime NOT NULL,
  `response_text` longtext,
  `online_pay_mode` enum('AUTHORIZE','PAYPAL','PAYPALPRO') NOT NULL DEFAULT 'AUTHORIZE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table activity.at_payment: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_payment` ENABLE KEYS */;


-- Dumping structure for table activity.at_site_settings
DROP TABLE IF EXISTS `at_site_settings`;
CREATE TABLE IF NOT EXISTS `at_site_settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `site_address` text,
  `site_phone` varchar(15) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_fb` varchar(255) DEFAULT NULL,
  `site_gplus` varchar(255) DEFAULT NULL,
  `site_twitter` varchar(255) DEFAULT NULL,
  `site_paypal_business_email` varchar(255) DEFAULT NULL,
  `site_paypal_secrect` varchar(255) DEFAULT NULL,
  `site_paypal_authid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_site_settings: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_site_settings` DISABLE KEYS */;
INSERT INTO `at_site_settings` (`id`, `site_address`, `site_phone`, `site_email`, `site_fb`, `site_gplus`, `site_twitter`, `site_paypal_business_email`, `site_paypal_secrect`, `site_paypal_authid`) VALUES
	(1, 'Test address', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `at_site_settings` ENABLE KEYS */;


-- Dumping structure for table activity.at_users
DROP TABLE IF EXISTS `at_users`;
CREATE TABLE IF NOT EXISTS `at_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(256) NOT NULL COMMENT 'User Name',
  `password` varchar(256) NOT NULL COMMENT 'Password',
  `email` varchar(256) NOT NULL COMMENT 'Email',
  `firstname` varchar(256) NOT NULL DEFAULT '' COMMENT 'First Name',
  `lastname` varchar(256) NOT NULL DEFAULT '' COMMENT 'Last Name',
  `address1` text NOT NULL COMMENT 'Address',
  `sex` enum('M','F') NOT NULL DEFAULT 'M' COMMENT 'Sex',
  `office_phone` varchar(100) NOT NULL DEFAULT '' COMMENT 'Office Phone',
  `home_phone` varchar(100) NOT NULL DEFAULT '' COMMENT 'Home Phone',
  `zipcode` int(10) NOT NULL COMMENT 'Zip Code',
  `create_at` datetime NOT NULL COMMENT 'Create At',
  `lastvisit_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Last Visit At',
  `superuser` int(1) NOT NULL DEFAULT '0' COMMENT 'Super User',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'Status',
  `createdby` int(11) NOT NULL DEFAULT '0' COMMENT 'Created By',
  `modifiedby` int(11) NOT NULL DEFAULT '0' COMMENT 'Modified By',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_users: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_users` DISABLE KEYS */;
INSERT INTO `at_users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `address1`, `sex`, `office_phone`, `home_phone`, `zipcode`, `create_at`, `lastvisit_at`, `superuser`, `status`, `createdby`, `modifiedby`) VALUES
	(1, 'admin', 'admin', 'admin@gmail.com', '', '', 'Kolkata', 'M', '', '', 712233, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0);
/*!40000 ALTER TABLE `at_users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
