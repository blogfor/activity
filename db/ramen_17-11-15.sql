-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table activity.at_authvalue
DROP TABLE IF EXISTS `at_authvalue`;
CREATE TABLE IF NOT EXISTS `at_authvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `value` float(11,2) NOT NULL,
  `membership_desc` text NOT NULL,
  `number_of_reg` int(3) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `membership_duration` int(5) DEFAULT NULL COMMENT 'Monthly',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_authvalue: ~2 rows (approximately)
/*!40000 ALTER TABLE `at_authvalue` DISABLE KEYS */;
INSERT INTO `at_authvalue` (`id`, `name`, `value`, `membership_desc`, `number_of_reg`, `is_active`, `membership_duration`) VALUES
	(1, 'Free', 0.00, 'Free membership', 0, 'Y', 1),
	(2, 'Paid', 10.00, 'Paid membership', 0, 'Y', 1);
/*!40000 ALTER TABLE `at_authvalue` ENABLE KEYS */;


-- Dumping structure for table activity.at_membership_info
DROP TABLE IF EXISTS `at_membership_info`;
CREATE TABLE IF NOT EXISTS `at_membership_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `payment_c_date` datetime NOT NULL,
  `todate` datetime NOT NULL,
  `fromdate` datetime NOT NULL,
  `membership_title` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership_note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `fromdate` (`fromdate`,`todate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_membership_info: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_membership_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_membership_info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
