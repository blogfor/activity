-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-11-02 22:03:51
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table activity.at_activity
CREATE TABLE IF NOT EXISTS `at_activity` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) DEFAULT NULL,
  `activity_description` text,
  `activity_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_activity: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_activity` DISABLE KEYS */;
INSERT INTO `at_activity` (`id`, `activity_name`, `activity_description`, `activity_image`, `created`, `modified`) VALUES
	(2, 'STUDY', 'Enrichment classes for school subjects, right brain training ', '', '2015-11-01 08:40:54', '2015-11-01 08:40:54');
/*!40000 ALTER TABLE `at_activity` ENABLE KEYS */;


-- Dumping structure for table activity.at_banner
CREATE TABLE IF NOT EXISTS `at_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_description` text,
  `banner_link` text,
  `banner_order` int(11) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_banner: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_banner` ENABLE KEYS */;


-- Dumping structure for table activity.at_daily_logs
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
CREATE TABLE IF NOT EXISTS `at_how_it_works` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hwt_name` varchar(255) DEFAULT NULL,
  `hwt_description` text,
  `hwt_image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_how_it_works: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_how_it_works` DISABLE KEYS */;
INSERT INTO `at_how_it_works` (`id`, `hwt_name`, `hwt_description`, `hwt_image`, `created`, `modified`) VALUES
	(2, 'STUDY', 'Enrichment classes for school subjects, right brain training ', '', '2015-11-01 08:40:54', '2015-11-01 08:40:54');
/*!40000 ALTER TABLE `at_how_it_works` ENABLE KEYS */;


-- Dumping structure for table activity.at_mail_content
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
CREATE TABLE IF NOT EXISTS `at_pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `page_description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_slug` (`page_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_pages: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_pages` ENABLE KEYS */;


-- Dumping structure for table activity.at_payment
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
