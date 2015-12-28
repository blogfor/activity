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

-- Dumping structure for table activity.activities_import
DROP TABLE IF EXISTS `activities_import`;
CREATE TABLE IF NOT EXISTS `activities_import` (
  `ID` int(11) DEFAULT NULL,
  `PartnerName` varchar(255) DEFAULT NULL,
  `ActivityCategory` varchar(255) DEFAULT NULL,
  `Activity` varchar(255) DEFAULT NULL,
  `AgeRange` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Paid` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `SlotsAvailable` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table activity.activities_import: ~75 rows (approximately)
/*!40000 ALTER TABLE `activities_import` DISABLE KEYS */;
INSERT INTO `activities_import` (`ID`, `PartnerName`, `ActivityCategory`, `Activity`, `AgeRange`, `Address`, `Date`, `Time`, `Paid`, `Price`, `SlotsAvailable`) VALUES
	(1, 'Read a Loud', 'Study', 'English, Maths', '6 to 8', 'same as partner details', '12/3/2015', '1000-1130', 'Paid', '', '5'),
	(2, 'Read a Loud', 'Study', 'English, Maths', '6 to 8', 'same as partner details', '12/4/2015', '1000-1130', 'Paid', '', '5'),
	(3, 'Read a Loud', 'Study', 'English, Maths', '4 to 8', 'same as partner details', '12/5/2015', '1000-1130', 'Paid', '', '5'),
	(4, 'Mega Maths', 'Study', 'Maths', '5 to 7', 'same as partner details', '12/4/2015', '0900-1100', 'Paid', '', '5'),
	(5, 'Huayu Tuition ', 'Study', 'Chinese', '3 to 5', 'same as partner details', '12/5/2015', '1400-1530', 'Paid', '', '4'),
	(6, 'Huayu Tuition ', 'Study', 'Chinese', '6 to 8', 'same as partner details', '12/5/2015', '1500-1600', 'Paid', '', '4'),
	(7, 'Huayu Tuition ', 'Study', 'Chinese', '3 to 5', 'same as partner details', '12/7/2015', '1400-1530', 'Paid', '', '4'),
	(8, 'Super Method Training', 'Study', 'Brain Training', '4 to 6', 'same as partner details', '12/6/2015', '0900-1100', 'Free', '', '5'),
	(9, 'Super Brain', 'Study', 'Brain Training', '6 to 8', 'same as partner details', '12/7/2015', '1400-1530', 'Free', '', '5'),
	(10, 'Swim Faster', 'Sports', 'Swimming', '4 to 8', 'same as partner details', '12/7/2015', '0900-1100', 'Paid', '', '5'),
	(11, 'Swim Faster', 'Sports', 'Swimming', '4 to 8', 'same as partner details', '12/8/2015', '0900-1100', 'Paid', '', '5'),
	(12, 'Swim Faster', 'Sports', 'Swimming', '4 to 8', 'same as partner details', '12/9/2015', '0900-1100', 'Paid', '', '5'),
	(13, 'Garden Skating', 'Sports', 'Inline Skating', '4 to 8', 'Bishan Park, Ang Mo Kio Ave 1, 569981', '12/9/2015', '1600-1730', 'Free', '', '5'),
	(14, 'Tennis R Us', 'Sports', 'Tennis', '4 to 8', '100 Tyrwhitt Road #04-02', '12/3/2015', '1400-1530', 'Paid', '', '5'),
	(15, 'Tennis R Us', 'Sports', 'Tennis', '4 to 8', '100 Tyrwhitt Road #04-02', '12/4/2015', '1400-1530', 'Paid', '', '5'),
	(16, 'Tennis R Us', 'Sports', 'Tennis', '4 to 8', '100 Tyrwhitt Road #04-02', '12/5/2015', '1400-1530', 'Paid', '', '5'),
	(17, 'SG Floorball', 'Sports', 'Floorball', '4 to 8', 'same as partner details', '12/4/2015', '1600-1730', 'Free', '', '4'),
	(18, 'SG Floorball', 'Sports', 'Floorball', '4 to 8', 'same as partner details', '12/5/2015', '1600-1730', 'Free', '', '4'),
	(19, 'SG Floorball', 'Sports', 'Floorball', '4 to 8', 'same as partner details', '12/6/2015', '1600-1730', 'Free', '', '4'),
	(20, 'SG Floorball', 'Sports', 'Floorball', '4 to 8', 'same as partner details', '12/7/2015', '1600-1730', 'Free', '', '4'),
	(21, 'Putt Putt Golf', 'Sports', 'Mini Golf', '4 to 12', 'same as partner details', '12/5/2015', '1000-1130', 'Free', '', '5'),
	(22, 'Tiny Golf', 'Sports', 'Golf', '4 to 12', 'same as partner details', '12/6/2015', '1600-1730', 'Free', '', '5'),
	(23, 'Tots Music School', 'Music', 'Music and Movement', '2 to 3', 'same as partner details', '12/7/2015', '1500-1600', 'Paid', '', '5'),
	(24, 'My Piano School', 'Music', 'Piano', '4 to 8', 'same as partner details', '12/8/2015', '1400-1530', 'Paid', '', '5'),
	(25, 'Music is Fun', 'Music', 'Music and Movement', '4 to 6', 'same as partner details', '12/9/2015', '1500-1600', 'Paid', '', '5'),
	(26, 'SG Music School', 'Music', 'Guitar, Piano, Drums', '4 to 6', 'same as partner details', '12/3/2015', '1500-1600', 'Paid', '', '5'),
	(27, 'My Art School', 'Art', 'Art', '4 to 8', 'same as partner details', '12/4/2015', '0900-1100', 'Free', '', '5'),
	(28, 'My Art School', 'Art', 'Art', '4 to 8', 'same as partner details', '12/5/2015', '0900-1100', 'Free', '', '5'),
	(29, 'My Art School', 'Art', 'Art', '4 to 8', 'same as partner details', '12/4/2015', '1100-1200', 'Free', '', '5'),
	(30, 'Hua Art House', 'Art', 'Chinese Art', '6 to 12', 'same as partner details', '12/5/2015', '1100-1200', 'Paid', '', '5'),
	(31, 'Draw It', 'Art', 'Cartoon Drawing', '6 to 12', 'same as partner details', '12/5/2015', '1400-1530', 'Paid', '', '5'),
	(32, 'Draw It', 'Art', 'Cartoon Drawing', '6 to 12', 'same as partner details', '12/6/2015', '1400-1530', 'Paid', '', '5'),
	(33, 'Draw It', 'Art', 'Cartoon Drawing', '6 to 12', 'same as partner details', '12/7/2015', '1400-1530', 'Paid', '', '5'),
	(34, 'SG Art School', 'Art', 'Painting', '3 to 5', 'same as partner details', '12/7/2015', '1100-1200', 'Paid', '', '5'),
	(35, 'Ballet Academy', 'Dance', 'Ballet, modern dance', '3 to 5', 'same as partner details', '12/8/2015', '1000-1130', 'Free', '', '5'),
	(36, 'Ballet Academy', 'Dance', 'Ballet, modern dance', '3 to 5', 'same as partner details', '12/9/2015', '1000-1130', 'Free', '', '5'),
	(37, 'Ballet Academy', 'Dance', 'Ballet, modern dance', '6 to 8', 'same as partner details', '12/4/2015', '1000-1130', 'Free', '', '5'),
	(38, 'My Ballet School', 'Dance', 'Ballet', '6 to 8', 'same as partner details', '12/9/2015', '1100-1200', 'Free', '', '5'),
	(39, 'Big Band dance', 'Dance', 'Kpop Dance', '6 to 12', 'same as partner details', '12/3/2015', '1400-1530', 'Free', '', '5'),
	(40, 'Big Band dance', 'Dance', 'Kpop Dance', '6 to 12', 'same as partner details', '12/4/2015', '1400-1530', 'Free', '', '5'),
	(41, 'Big Band dance', 'Dance', 'Kpop Dance', '6 to 12', 'same as partner details', '12/5/2015', '1400-1530', 'Free', '', '5'),
	(42, 'SG Ballet School', 'Dance', 'Ballet', '3 to 5', 'same as partner details', '12/4/2015', '1400-1530', 'Free', '', '5'),
	(43, 'Speak and Learn', 'Drama', 'Speech', '3 to 5', 'same as partner details', '12/5/2015', '1600-1730', 'Paid', '', '5'),
	(44, 'Schoolhouse English', 'Drama', 'Drama', '3 to 5', 'same as partner details', '12/6/2015', '1100-1200', 'Free', '', '5'),
	(45, 'The Drama School', 'Drama', 'Drama', '4 to 8', 'same as partner details', '12/7/2015', '1100-1200', 'Free', '', '5'),
	(46, 'Play for Fun', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/4/2015', 'All day', 'Paid', '', '5'),
	(47, 'Play for Fun', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/5/2015', 'All day', 'Paid', '', '5'),
	(48, 'Play for Fun', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/6/2015', 'All day', 'Paid', '', '5'),
	(49, 'Play for Fun', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/7/2015', 'All day', 'Paid', '', '5'),
	(50, 'Indoor Activity House', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/4/2015', 'All day', 'Paid', '', '10'),
	(51, 'Indoor Activity House', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/5/2015', 'All day', 'Paid', '', '10'),
	(52, 'Indoor Activity House', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/6/2015', 'All day', 'Paid', '', '10'),
	(53, 'Indoor Activity House', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/7/2015', 'All day', 'Paid', '', '10'),
	(54, 'Indoor Activity House', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/8/2015', 'All day', 'Paid', '', '10'),
	(55, 'Baby Seal Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/3/2015', 'All day', 'Paid', '', '5'),
	(56, 'Baby Seal Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/4/2015', 'All day', 'Paid', '', '5'),
	(57, 'Kids Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/4/2015', '1000-1200', 'Paid', '', '5'),
	(58, 'Kids Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/5/2015', '1000-1200', 'Paid', '', '5'),
	(59, 'Snow City', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/5/2015', '1100-1300', 'Free', '', '5'),
	(60, 'Atomic Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/4/2015', 'All day', 'Paid', '', '10'),
	(61, 'Atomic Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/5/2015', 'All day', 'Paid', '', '10'),
	(62, 'Atomic Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/6/2015', 'All day', 'Paid', '', '10'),
	(63, 'Atomic Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/7/2015', 'All day', 'Paid', '', '10'),
	(64, 'Atomic Land', 'Play', 'Playground', '1 to 12', 'same as partner details', '12/8/2015', 'All day', 'Paid', '', '10'),
	(65, '101 Cooking School', 'Others', 'Cooking', '5 to 12', 'same as partner details', '12/7/2015', '1000-1130', 'Paid', '', '5'),
	(66, 'My Bake School', 'Others', 'Cooking', '5 to 12', 'same as partner details', '12/7/2015', '1000-1130', 'Paid', '', '5'),
	(67, 'My Bake School', 'Others', 'Cooking', '5 to 12', 'same as partner details', '12/8/2015', '1000-1130', 'Paid', '', '5'),
	(68, 'My Bake School', 'Others', 'Cooking', '5 to 12', 'same as partner details', '12/9/2015', '1000-1130', 'Paid', '', '5'),
	(69, 'Script Kiddiez', 'Others', 'Computer Coding', '7 to 12', 'same as partner details', '12/9/2015', '0900-1100', 'Paid', '', '5'),
	(70, 'Script Kiddiez', 'Others', 'Computer Coding', '7 to 12', 'same as partner details', '12/9/2015', '1200-1400', 'Paid', '', '5'),
	(71, 'Script Kiddiez', 'Others', 'Computer Coding', '7 to 12', 'same as partner details', '12/9/2015', '1500-1700', 'Paid', '', '5'),
	(72, 'Let it Go Lego ', 'Others', 'Lego', '5 to 12', 'same as partner details', '12/3/2015', '1100-1200', 'Free', '', '2'),
	(73, 'Let it Go Lego ', 'Others', 'Lego', '5 to 12', 'same as partner details', '12/4/2015', '1100-1200', 'Free', '', '2'),
	(74, 'Let it Go Lego ', 'Others', 'Lego', '5 to 12', 'same as partner details', '12/5/2015', '1100-1200', 'Free', '', '2'),
	(75, 'Let it Go Lego ', 'Others', 'Lego', '5 to 12', 'same as partner details', '12/6/2015', '1100-1200', 'Free', '', '2');
/*!40000 ALTER TABLE `activities_import` ENABLE KEYS */;


-- Dumping structure for table activity.activity_booking
DROP TABLE IF EXISTS `activity_booking`;
CREATE TABLE IF NOT EXISTS `activity_booking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `partner_activity_id` int(10) NOT NULL,
  `booked_by` int(10) NOT NULL COMMENT 'user id ',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table activity.activity_booking: ~2 rows (approximately)
/*!40000 ALTER TABLE `activity_booking` DISABLE KEYS */;
INSERT INTO `activity_booking` (`id`, `partner_activity_id`, `booked_by`, `created`) VALUES
	(1, 1, 1, '2015-11-28 15:12:42'),
	(2, 58, 26, '2015-11-28 15:15:25');
/*!40000 ALTER TABLE `activity_booking` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_activity: ~8 rows (approximately)
/*!40000 ALTER TABLE `at_activity` DISABLE KEYS */;
INSERT INTO `at_activity` (`id`, `activity_name`, `activity_description`, `activity_image`, `created`, `modified`) VALUES
	(2, 'STUDY', 'Enrichment classes for school subjects, right brain training ', '8443-Study resized.jpg', '2015-11-01 08:40:54', '2015-11-09 09:18:41'),
	(3, 'SPORTS', 'Swimming, rock climbing, soccer', '5608-Sports.jpg', '2015-11-09 09:19:23', '2015-11-09 09:19:23'),
	(4, 'MUSIC', 'Piano, music and movement and classes for many other musical instruments', '1205-Music.jpg', '2015-11-09 09:19:54', '2015-11-09 09:19:54'),
	(5, 'ART', 'Painting, drawing and handicraft', '2926-Art.jpg', '2015-11-09 09:20:25', '2015-11-09 09:20:25'),
	(6, 'DANCE', 'Ballet, hip-hop dancing, classic dancing', '377-Dance.jpg', '2015-11-09 09:21:02', '2015-11-09 09:21:02'),
	(7, 'DRAMA', 'Drama, speech and acting', '4022-Drama.jpg', '2015-11-09 09:21:41', '2015-11-09 09:21:41'),
	(8, 'PLAY', 'Indoor playgrounds, theme parks and other play areas', '3495-Play.jpg', '2015-11-09 09:22:12', '2015-11-09 09:22:12'),
	(9, 'OTHERS', 'Computer coding, cooking, and all other activities', '7906-Others.jpg', '2015-11-09 09:22:44', '2015-11-09 09:22:44');
/*!40000 ALTER TABLE `at_activity` ENABLE KEYS */;


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


-- Dumping structure for table activity.at_authvalue_child
DROP TABLE IF EXISTS `at_authvalue_child`;
CREATE TABLE IF NOT EXISTS `at_authvalue_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `value` float(11,2) NOT NULL,
  `classes` int(11) NOT NULL,
  `membership_desc` text NOT NULL,
  `number_of_reg` int(3) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `membership_duration` int(5) DEFAULT NULL COMMENT 'Monthly',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_authvalue_child: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_authvalue_child` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_authvalue_child` ENABLE KEYS */;


-- Dumping structure for table activity.at_banner
DROP TABLE IF EXISTS `at_banner`;
CREATE TABLE IF NOT EXISTS `at_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_description` text,
  `banner_link` text,
  `banner_link_text` varchar(255) DEFAULT NULL,
  `banner_order` int(11) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_banner: ~3 rows (approximately)
/*!40000 ALTER TABLE `at_banner` DISABLE KEYS */;
INSERT INTO `at_banner` (`id`, `banner_title`, `banner_image`, `banner_description`, `banner_link`, `banner_link_text`, `banner_order`, `status`, `added`, `modified`) VALUES
	(1, 'Find something new for your child to do today.', '40-Intro 1.jpg', 'Activityhere is a platform which gives you access to enrichment classes, sports, activities and fun for your children, allowing them to try and discover new activities every day.\r\n', 'site/index/#howtowork', 'HOW IT WORKS', NULL, 'Y', '2015-11-09 08:10:31', '2015-11-26 20:56:06'),
	(2, 'GET STARTED NOW', '8592-s2.jpg', 'Let your child discover a new skill\r\n\r\nJoin us to discover new interests for your children and let them learn new skills. Access a diverse network of schools and activities. Registration is free. Reserve classes and activities with just one click.\r\n', 'atUsers/registration', 'GET STARTED NOW', NULL, 'Y', '2015-11-09 08:52:56', '2015-11-23 19:43:36'),
	(3, 'JOIN US AS A PARTNER', '8083-s1.jpg', 'Reach out to parents who are looking for new learning experiences for their children\r\n\r\nActivityhere is simple reservation platform for your children classes and activities. We bring you new clients, marketing and brand awareness. Join us as a partner today.\r\n', 'atUsers/partnerregistration', 'JOIN US AS A PARTNER', NULL, 'Y', '2015-11-09 08:54:13', '2015-11-23 19:44:44');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_how_it_works: ~4 rows (approximately)
/*!40000 ALTER TABLE `at_how_it_works` DISABLE KEYS */;
INSERT INTO `at_how_it_works` (`id`, `hwt_name`, `hwt_description`, `hwt_image`, `created`, `modified`) VALUES
	(4, 'Find Activity', 'Search for a specific activity for your child or browse and discover new activities.', '8116-How1.png', '2015-11-03 00:00:31', '2015-11-03 00:00:31'),
	(5, 'Select Activity', 'Select the activity for the available date and time. Review the details of the activity.', '1682-How2.png', '2015-11-03 00:09:09', '2015-11-03 00:09:09'),
	(6, 'Confirm Activity', 'Confirm the selected activity instantly. Registration is free.Free trial activities are free for all registered users and paying users can also access paid activities.', '3872-How3.png', '2015-11-03 00:11:10', '2015-11-03 00:11:10'),
	(7, 'Email Confirmation ', 'An email confirmation will be sent to your registered email and users can also review confirmed registrations on our site. ', '6715-How4.png', '2015-11-03 00:11:48', '2015-11-03 00:11:48');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_kids_activities: ~4 rows (approximately)
/*!40000 ALTER TABLE `at_kids_activities` DISABLE KEYS */;
INSERT INTO `at_kids_activities` (`id`, `kids_name`, `kids_description`, `kids_image`, `created`, `modified`) VALUES
	(1, 'No 1', 'Access a diverse network of schools offering multiple activities', '2751-Discover1.png', '2015-11-09 07:15:07', '2015-11-09 07:15:07'),
	(2, 'No 2', 'Let children discover new interests and learn new skills', '7885-Discover2.png', '2015-11-09 07:16:12', '2015-11-09 07:16:12'),
	(3, 'No 3', 'Find the right school and instructor that suits the child', '4994-Discover3.png', '2015-11-09 07:17:42', '2015-11-09 07:17:42'),
	(4, 'No 4', 'Arrange activities for children based on your location and schedule', '9939-Discover4.png', '2015-11-09 07:18:02', '2015-11-09 07:18:02');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table activity.at_mail_content: ~5 rows (approximately)
/*!40000 ALTER TABLE `at_mail_content` DISABLE KEYS */;
INSERT INTO `at_mail_content` (`id`, `module_name`, `mail_subject`, `mail_content`, `cdate`, `mail_footer`, `mail_exclude`, `mail_include`, `instant`, `include_external_emails`, `notification_on`, `send_admin`) VALUES
	(1, 'Activation Link ( Activity)!!', 'Activation Link ( Activity)', 'Please click the following link to activate your account.\r\nLink : [LINK]\r\nUser Name : [EMAIL]\r\nPassword :[PASSWORD]\r\n', '2015-11-11 23:34:56', 'Thanks very much and keep up the great work', '', '', 'Y', '', 'Yes', 'Yes'),
	(2, 'Forgot Password ( Activity)!!', 'Forgot Password ( Activity)', 'Here is your new password . Please change it after login .\r\nUser Name : [EMAIL]\r\nPassword :[PASSWORD]\r\n', '2015-11-11 23:34:56', 'Thanks very much and keep up the great work', NULL, NULL, 'Y', NULL, 'Yes', 'Yes'),
	(3, 'Partner Inquiry Form ( Activity)!!', 'Partner Inquiry Form  ( Activity)', 'Here is one partner interested to join.\r\nCompany Name:[COMPANY]\r\nWebsite/facebook:[WEBSITE]\r\nName:[NAME]\r\nEmail :[EMAIL]\r\nPhone:[PHONE]\r\nComments:[COMMENTS]\r\n\r\n', '2015-11-11 23:34:56', 'Thanks very much and keep up the great work', NULL, NULL, 'Y', NULL, 'Yes', 'Yes'),
	(4, 'Partner Registered ( Activity)!!', 'Partner Registered ( Activity)!!', 'A new partner has been registerd . Please login in Administration Area for review and active.', '2015-11-11 23:34:56', 'Thanks very much and keep up the great work', NULL, NULL, 'Y', NULL, 'Yes', 'Yes'),
	(5, 'Quick email to user ', 'Message from activity admin ', '[MESSAGE]', '2015-11-15 01:48:45', 'Thanks very much and keep up the great work', NULL, NULL, 'Y', NULL, 'Yes', 'Yes');
/*!40000 ALTER TABLE `at_mail_content` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_membership_info: ~6 rows (approximately)
/*!40000 ALTER TABLE `at_membership_info` DISABLE KEYS */;
INSERT INTO `at_membership_info` (`id`, `payment_c_date`, `todate`, `fromdate`, `membership_title`, `user_id`, `membership_note`) VALUES
	(1, '2015-11-17 22:35:17', '2015-11-17 22:35:17', '2015-11-17 22:35:17', 'Paid', 16, 'Note'),
	(2, '2015-11-28 11:32:00', '2015-12-28 00:00:00', '2015-11-28 11:32:00', 'Free', 55, 'Free basic while registration'),
	(3, '2015-11-28 11:45:51', '2015-12-28 00:00:00', '2015-11-28 11:45:51', 'Free', 56, 'Free basic while registration'),
	(4, '2015-11-28 11:49:22', '2015-12-28 00:00:00', '2015-11-28 11:49:22', 'Free', 57, 'Free basic while registration'),
	(5, '2015-11-28 11:54:31', '2015-12-28 00:00:00', '2015-11-28 11:54:31', 'Free', 58, 'Free basic while registration'),
	(6, '2015-12-18 22:19:21', '2016-01-18 00:00:00', '2015-12-18 22:19:21', 'Free', 59, 'Free basic while registration');
/*!40000 ALTER TABLE `at_membership_info` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_pages: ~19 rows (approximately)
/*!40000 ALTER TABLE `at_pages` DISABLE KEYS */;
INSERT INTO `at_pages` (`id`, `page_name`, `page_slug`, `page_description`, `created`, `modified`) VALUES
	(5, 'About Us', 'about_us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, risus non luctus malesuada, mauris odio aliquet neque, nec egestas arcu lorem volutpat purus. Aenean ac urna vel leo consequat sagittis vitae sed velit. Aliquam consectetur, dui quis venenatis molestie, ipsum eros vulputate enim, nec molestie nisl quam quis justo. Nam libero lacus, porttitor et felis ac, faucibus malesuada massa. Donec vel nisl in sapien molestie consectetur quis convallis lorem. Pellentesque id nisi vitae risus suscipit tempus. Vestibulum nisl enim, luctus eget ornare in, tristique at lacus.</p>\r\n\r\n<p>Nullam placerat ante ac commodo pharetra. Praesent feugiat, diam vestibulum volutpat facilisis, quam odio elementum ligula, nec maximus elit urna vitae velit. Morbi dictum, arcu in egestas tempus, mi lectus tempus ante, sed blandit nulla risus sed purus. Cras faucibus eleifend aliquet. Aliquam eget finibus lorem, eget pulvinar dolor. Praesent vehicula imperdiet massa in tempor. Suspendisse potenti. Fusce feugiat dictum sapien, id luctus neque dictum quis. In aliquet in leo in varius. Nulla egestas condimentum justo a hendrerit. Donec lacinia tristique massa eu lobortis. Donec maximus vel dolor ut sollicitudin. Aliquam erat volutpat. Suspendisse eu vehicula magna.</p>\r\n\r\n<p>Aliquam sollicitudin vulputate bibendum. Quisque tellus massa, commodo sit amet lacus vel, porttitor tristique magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, erat a placerat auctor, mauris lorem mollis elit, eget vehicula quam arcu tempor arcu. Aliquam sed pulvinar dolor. Nunc sollicitudin efficitur luctus. Praesent arcu nunc, lobortis eu purus in, auctor pulvinar mi. In sed purus nec ipsum molestie vehicula. Phasellus eros lectus, ullamcorper in tincidunt sit amet, elementum quis leo. Phasellus ac sem hendrerit, volutpat lorem sed, pulvinar nisi. Morbi eu augue sagittis, tristique ligula vel, interdum metus. Cras a consequat ligula, a venenatis dui.</p>\r\n\r\n<p>Suspendisse et mauris eleifend, sollicitudin est a, finibus nisi. In in mauris eget metus venenatis pellentesque. Donec metus dui, lacinia porta lobortis ut, varius at lectus. Sed id purus gravida, aliquam leo non, tempus elit. Nunc egestas malesuada nibh faucibus porttitor. Proin mollis magna at justo aliquet vehicula. In eleifend metus ex, nec volutpat enim sagittis vel. Phasellus convallis non tellus vitae maximus. Donec congue sem dolor, in ullamcorper quam sodales at. Nullam pharetra vestibulum felis, sit amet ornare nisi. Ut leo tortor, rhoncus in condimentum vitae, porttitor at leo. Aliquam a consequat velit.</p>\r\n', '2015-11-05 09:33:48', '2015-11-05 09:33:48'),
	(6, 'Press', 'press', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, risus non luctus malesuada, mauris odio aliquet neque, nec egestas arcu lorem volutpat purus. Aenean ac urna vel leo consequat sagittis vitae sed velit. Aliquam consectetur, dui quis venenatis molestie, ipsum eros vulputate enim, nec molestie nisl quam quis justo. Nam libero lacus, porttitor et felis ac, faucibus malesuada massa. Donec vel nisl in sapien molestie consectetur quis convallis lorem. Pellentesque id nisi vitae risus suscipit tempus. Vestibulum nisl enim, luctus eget ornare in, tristique at lacus.</p>\r\n\r\n<p>Nullam placerat ante ac commodo pharetra. Praesent feugiat, diam vestibulum volutpat facilisis, quam odio elementum ligula, nec maximus elit urna vitae velit. Morbi dictum, arcu in egestas tempus, mi lectus tempus ante, sed blandit nulla risus sed purus. Cras faucibus eleifend aliquet. Aliquam eget finibus lorem, eget pulvinar dolor. Praesent vehicula imperdiet massa in tempor. Suspendisse potenti. Fusce feugiat dictum sapien, id luctus neque dictum quis. In aliquet in leo in varius. Nulla egestas condimentum justo a hendrerit. Donec lacinia tristique massa eu lobortis. Donec maximus vel dolor ut sollicitudin. Aliquam erat volutpat. Suspendisse eu vehicula magna.</p>\r\n\r\n<p>Aliquam sollicitudin vulputate bibendum. Quisque tellus massa, commodo sit amet lacus vel, porttitor tristique magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, erat a placerat auctor, mauris lorem mollis elit, eget vehicula quam arcu tempor arcu. Aliquam sed pulvinar dolor. Nunc sollicitudin efficitur luctus. Praesent arcu nunc, lobortis eu purus in, auctor pulvinar mi. In sed purus nec ipsum molestie vehicula. Phasellus eros lectus, ullamcorper in tincidunt sit amet, elementum quis leo. Phasellus ac sem hendrerit, volutpat lorem sed, pulvinar nisi. Morbi eu augue sagittis, tristique ligula vel, interdum metus. Cras a consequat ligula, a venenatis dui.</p>\r\n\r\n<p>Suspendisse et mauris eleifend, sollicitudin est a, finibus nisi. In in mauris eget metus venenatis pellentesque. Donec metus dui, lacinia porta lobortis ut, varius at lectus. Sed id purus gravida, aliquam leo non, tempus elit. Nunc egestas malesuada nibh faucibus porttitor. Proin mollis magna at justo aliquet vehicula. In eleifend metus ex, nec volutpat enim sagittis vel. Phasellus convallis non tellus vitae maximus. Donec congue sem dolor, in ullamcorper quam sodales at. Nullam pharetra vestibulum felis, sit amet ornare nisi. Ut leo tortor, rhoncus in condimentum vitae, porttitor at leo. Aliquam a consequat velit.</p>\r\n', '2015-11-05 09:34:20', '2015-11-05 09:34:20'),
	(7, 'FAQ', 'faq', '<p><strong>Frequently Asked Questions</strong></p>\r\n\r\n<p><strong>What is activityhere?</strong></p>\r\n\r\n<p>We are a platform which gives you one-stop access to children enrichment classes, dance, sports and many other fun activities for your kids, allowing them to discover new skills every day. We believe in allowing our kids to try as many activities as possible to let them explore their passions and learn new skills.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What do I get by registering as a member with activityhere?</strong></p>\r\n\r\n<p>Membership is free and you get to register for as many free trial classes and activities organized by various schools and trainers. Paid members get access to all the listed free and paid activities happening daily. Browse through the schedule and activities and discover something new for your child to learn every day. The schedule is constantly updated with new classes and activities and reservations are on a first come first serve basis for activities with limited slots.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What activities and classes are available?</strong></p>\r\n\r\n<p>We will work with partners to constantly provide new class schedules and activities to add to the list. Paid members will have access to all listed activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How do I join activityhere?</strong></p>\r\n\r\n<p>To become a member of activityhere, all you need to do is register via our registration page [link to registration page] and you can start booking classes for your children immediately with just a few clicks.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>When does my membership start if I am a paying customer?</strong></p>\r\n\r\n<p>Your membership is active immediately upon payment so you can start booking classes right away.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Do I have to reserve my classes in advance?</strong></p>\r\n\r\n<p>You have to reserve the activities and classes in advance. Some of the activities have limited slots so reservation is on a first come first serve basis.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How do I reserve an activity?</strong></p>\r\n\r\n<p>You can reserve an activity by searching or browsing through the list of activities listed on the activity page. If you find an activity that is interesting that suits your schedule, you can click on the activity to find out more details of the activity and click on the reserve button to confirm. Bring along a copy of the reservation confirmation email or show the activity confirmation page. If you are not a paying member, paid classes will be available immediately upon joining.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The activity that was listed earlier is not available anymore, what should I do?</strong></p>\r\n\r\n<p>Certain activities have limited slots so if demand is high, reservations would close on a first come first serve basis. Some activities are listed with multiple time slots, so do check if you are available for another slot. You can also contact us at hello@activityhere.com to let us know if you missed an activity so that we can work with our partners to introduce more slots for the activity in future.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What should I do if I need to cancel a reserved activity?</strong></p>\r\n\r\n<p>Each activity has different cancellation policies so do check your reservation email for the deadlines to cancel the activities. The standard cancellation policy is 4 hours prior to the class for cancellation. Some classes have different cancellation policies but these will be disclosed upon when you book the class. Kindly make sure that you cancel before the deadlines to avoid the late cancellation as a late cancellation will still be counted as completed activity. The cancellation policy is required as our partners require advanced notice to manage their class schedules.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To cancel your reservation</p>\r\n\r\n<ol>\r\n	<li>Go to your membership section [link to Dashboard]</li>\r\n	<li>Click on activities tab</li>\r\n	<li>Click on cancel reservation for the selected activity</li>\r\n	<li>Confirm that you want the reservation cancelled</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How much does a membership cost?</strong></p>\r\n\r\n<p style="margin-left:36.0pt">Registration is free for all users to get access to all free trial classes. This allows the member to experience as many different trial activities as possible and decide on activities that interest their children.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For paid classes and activities, the cost of membership is S$79 for 4 activities a month S$179 for 10 activities a month. Paying members also have access to all free trial classes and premium activities listed. Membership is automatically renewed on a monthly basis and as long as you remain a paying member, the unutilized activities can be carried forward to the next month.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What is the billing cycle for paying members?</strong></p>\r\n\r\n<p>A paying membership last for 30 days and will only be renewed on the same day each month. For example if you join as a paying member on November 10, your membership will be renewed on December 10.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How many classes can I reserve for my child with the membership?</strong></p>\r\n\r\n<p>Depending on the membership type and the type of activities attended, you can attend as many activities. Most classes would count as 1 activity per session but certain classes may count for more than 1 activity per session.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Do I get a receipt for my membership with activityhere?</strong></p>\r\n\r\n<p>Yes, you can view your monthly payment receipt in your membership section. [link to Dashboard]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Can I book an activity for more than 1 child?</strong></p>\r\n\r\n<p>Yes, you may book any activity for more than 1 child as long as you register the child under your membership. Registration of an activity for each child would count as one single activity booking.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How do I know what to bring to each activity for my child?</strong></p>\r\n\r\n<p>If there are any requirements to bring equipment or supplies for any activity, the detailed description of the activity will list out the requirements. For example, indoor playgrounds typically require usage of socks so a listing would indicate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Can I cancel my activityhere membership?</strong></p>\r\n\r\n<p>Yes, you can cancel your paying membership at any time and will be downgraded to a non-paying member immediately. You will not be charged but can only book free trial classes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Which schools offer classes on activityhere?</strong></p>\r\n\r\n<p>Activityhere constantly updates the schools and activities available on the list. You can view a list of the partners and activities here. [link to partner location page] We hope to add more partners on a frequent basis. If you like a school or play area that is currently not available, do let us know at hello@activityhere.com.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Is there an app for activityhere?</strong></p>\r\n\r\n<p>Activityhere is currently only available on the web but we plan on launching apps for both iOS and Android.&nbsp;</p>\r\n', '2015-11-05 09:38:21', '2015-11-24 01:19:33'),
	(8, 'Terms', 'terms', '<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Please read these Terms of Use carefully (including our Security &amp; Privacy Policy (http://www.activityhere.com/privacy) before using our website www.activityhere.com (&ldquo;<strong><span style="font-family:arial,sans-serif">Site</span></strong>&rdquo;), and/or our Services (defined below), so that you are aware of your legal rights and obligations with respect to Activityhere (&ldquo;<strong><span style="font-family:arial,sans-serif">Activityhere</span></strong>&rdquo;, &ldquo;<strong><span style="font-family:arial,sans-serif">we</span></strong>&rdquo;, &ldquo;&nbsp;<strong><span style="font-family:arial,sans-serif">our</span></strong>&rdquo; or &ldquo;<strong><span style="font-family:arial,sans-serif">us</span></strong>&rdquo;).</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">By accessing this Site and/or using the Services, you hereby agree:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">(i) that you have read and agree to be legally bound by these Terms of Use (including our Security &amp; Privacy Policy (http://www.activityhere.com/privacy); and</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">(ii) that you are the user of the Site and/or Services and are 18 years or above.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">If you do not accept these Terms of Use, please leave the Site and/or discontinue use of the Services immediately.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Activityhere may at any time vary or amend these Terms of Use by posting the amended Terms of Use on the Site. Any use of the Site or Services after the amendment of these Terms of Use is deemed acceptance of the amended Terms of Use by you. If you do not agree to the amended Terms of Use, you have the right to stop using the Site and Services.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">1 Site and Services</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.1 The Site is owned and maintained by Activityhere.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.2 Activityhere is a monthly subscription service that gives our members one-stop access to children enrichment classes, dance, sports and many other fun activities for their children, which offers one or more of the following features and services (each a &ldquo;Service&rdquo; and collectively the &ldquo;Services&rdquo;) through the Site:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.2.1 access to a collection of information, products, services, data, text, listings, pricing, graphics, images, videos, audio files and other types of works;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.2.2 search engines or tools;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.2.3 blogs, message boards, communication tools;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.2.4 email or message alerts; and</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.2.5 any other services, features, content or applications that Activityhere may offer through the Site from time to time in our sole and absolute discretion.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">1.3 Activityhere reserves the right to change, modify, suspend or discontinue the whole or any portion of the Services or Site at any time. We may also impose limits on certain features or restrict your access to parts or the entire Services or Site without notice or liability.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">2 Licence</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.1 Activityhere hereby grants you a personal, non-exclusive and non-transferable licence to use the Site, and access and use the Services available via the Site, subject to the terms set out in these Terms of Use.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.2 You agree not to reproduce, copy, modify, adapt, translate, publish, display, communicate, transmit, broadcast, distribute, sell, trade, exploit or use for any commercial or other purposes, any portion of, or any access to:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.2.1 any Service;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.2.2 the Site;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.2.3 any materials, information, news, advertisements, listings, pricing, data, input, text, songs, audio, video, pictures, graphics, software, blogs, forums, message boards, broadcasts, comments, suggestions, ideas and other content, that is made available on or via the Site or Services (collectively, &ldquo;Content&rdquo;),</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">except, to the extent permitted, with the prior written consent of Activityhere or unless expressly permitted in these Terms of Use.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.3 Without prejudice to the generality of Clause 2.1, you agree not to reproduce, display or otherwise provide access to the Site, Services or Content, for example through framing, mirroring, linking, spidering, scraping or any other technological means (including any technology available in the future), without the prior written permission of Activityhere.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.4 The Site, App and all Content are the copyrighted work of Activityhere or our content or software providers, and Activityhere reserves and retains all rights in the Site, App and Content.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.5 You may not decompile, reverse engineer or otherwise attempt to discover the source code of the App or any Content, except under the specific circumstances expressly permitted by law or Activityhere in writing.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">2.6 You may not hack into, interfere with, disrupt, disable, over-burden or otherwise impair the proper working of the Site, App, Services or our servers, which shall include but is not limited to denial-of-service attacks, spoof attacks, session hacking, sniffing, tampering, spamming, reverse engineering or reprogramming.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">3 Account Information</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.1 To access certain parts of the Site or Services, you will be required to sign-up for an account with Activityhere (&ldquo;Account&rdquo;) and select a user name (&quot;User Name&quot;) and password (&quot;Password&quot;).</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.2 You are solely responsible for safeguarding and maintaining the confidentiality of your User Name and Password. You agree not to:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.2.1 share or permit others to use your Account or Password; or</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.2.2 assign or transfer your Account to any other person or entity.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.3 You shall be bound by and responsible for all communications and online activity transmitted or conducted through the use of your Account. Activityhere shall have no responsibility or liability for any loss, damage, cost, expenses, or liabilities arising as a result of or in connection with the wrongful or fraudulent use of your Account. If you are aware of any actual or suspected unauthorised use(s) of your Account, or loss, theft, or unauthorised disclosure of your Password, please promptly notify us at:&nbsp;hello@activityhere.com.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.4 Each individual may only register one (1) Account.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.5 Please provide accurate, complete, and up-to-date information required for your Account. You may at any time change or update your Account information by clicking on the &ldquo;My Account&rdquo; icon in the top right corner after logging in.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.6 Where an individual is associated with multiple Account(s) without our written authorisation, or fraudulent or wrongful use of an Account is detected or suspected, we reserve the right at our sole discretion and without liability, and without prejudice to our other rights and remedies under this Agreement or at law, to immediately:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.6.1 cancel any activity reserved through such Account(s);</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.6.2 cancel or invalidate any credits or discount vouchers, coupons or codes awarded to or used by such Account(s);</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.6.3 prohibit such Account(s) or persons from participating in any promotions, contests or surveys of Activityhere; and/or</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">3.6.4 merge, suspend and/or terminate Account(s).</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">4 Membership, Payment, Billing and Other Fees (Applies for Activityhere members)</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.1 Membership</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Members receive classes per membership cycle (&ldquo;Eligible Classes&rdquo;) to be used to visit any school of their choice available on our platform during each such membership cycle, provided however that some schools allow a different number of maximum visits during a membership cycle (&ldquo;Class Limit&rdquo;). The Class Limit shall be assumed to be 3 times unless disclosed otherwise on a school-by-school basis within the Site. Members cannot transfer or gift classes to third parties, including other Activityhere members. Activityhere reserves the right to increase from time to time in its sole discretion the number of Eligible Classes a member can take in a given cycle (such as pursuant to certain promotions that we may offer from time to time). The most classes a member can take at any 1 school in a cycle is the Class Limit. Please note that if a school has more than 1 branch, members can go up to the Class Limit across all of its locations, and not up to the Class Limit per branch. Activityhere makes no guarantee on the availability of classes as access to classes is on a space-available basis.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.2 Membership Cycle</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Your Activityhere membership starts on the date that you sign up for a subscription and submit payment via a valid Payment Method. Each Activityhere cycle is one month in length, and will automatically renew each month. For example, if you purchase your Activityhere on 20</span><sup><span style="font-family:arial,sans-serif; font-size:8pt">th</span></sup><span style="font-family:arial,sans-serif; font-size:10.5pt">&nbsp;</span><span style="font-family:arial,sans-serif; font-size:10.5pt">November, your membership will automatically renew on 20</span><sup><span style="font-family:arial,sans-serif; font-size:8pt">th</span></sup><span style="font-family:arial,sans-serif; font-size:10.5pt"> December (see &ldquo;Billing Cycles,&rdquo; below). Once your new month starts, you will receive your full number of Eligible Classes for such new monthly cycle. Please note that any Eligible Classes not used during a monthly membership cycle are carried forward as long as the paying membership is valid.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.3 Payment</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.3.1 You must provide us with a current, valid, accepted method of payment (as such may be updated from time to time, &ldquo;Payment Method&rdquo;) to use Activityhere. We automatically will bill the monthly membership fee to your Payment Method each month until your Activityhere is cancelled or terminated</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.3.2 Payment shall be made in Singapore dollars.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.3.3 We accept payment for orders by PayPal only. Kindly note that PayPal currently accepts MasterCard, Visa, American Express and Discover cards, and the credit/debit cards and payment methods accepted by PayPal is subject to change.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.3.4 By joining our membership program, you authorise us to transmit information or to obtain information about you from third parties from time to time and this may include verification checks involving your debit or credit card number or credit reports in order to authenticate your identity, to validate your credit card, to obtain an initial credit card authorisation, to protect you and us from fraud, and to enable us to arrange delivery of your order to your nominated delivery address.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.4 Billing</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.4.1 Recurring Billing. By starting your Activityhere membership, you authorise us to charge you a monthly membership fee at the then current rate.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.4.2 Billing Cycle. When you sign up and purchase your Activityhere membership, your first subscription cycle will be billed immediately. Your subscription will auto-renew and you will be billed on the same date each month. We reserve the right to change the timing of our billing, in particular, as indicated below, if your Payment Method has not successfully settled. In the event your paying membership began on a day not contained in a given month, we may bill your Payment Method on a day in the applicable month or such other day as we deem appropriate. For example, if you started your Activityhere membership or became a paying member on 31</span><sup><span style="font-family:arial,sans-serif; font-size:8pt">st</span></sup><span style="font-family:arial,sans-serif; font-size:10.5pt">January, your next payment date is likely to be 28</span><sup><span style="font-family:arial,sans-serif; font-size:8pt">th</span></sup><span style="font-family:arial,sans-serif; font-size:10.5pt">&nbsp;</span><span style="font-family:arial,sans-serif; font-size:10.5pt">February, and your Payment Method would be billed on that date. Your renewal date may change due to changes in your Membership.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.4.3 No Refunds. PAYMENTS ARE NONREFUNDABLE AND THERE ARE NO REFUNDS OR CREDITS FOR PARTIALLY USED PERIODS. Following any cancellation, however, you will continue to have access to the service through the end of your current billing period. At any time, and for any reason, we may provide a refund, discount, or other consideration to some or all of our members (&ldquo;credits&rdquo;). The amount and form of such credits, and the decision to provide them, are at our sole and absolute discretion. The provision of credits in one instance does not entitle you to credits in the future for similar instances, nor does it obligate us to provide credits in the future, under any circumstance.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.4.4 Payment Methods. You may edit your Payment Method information by logging into your Activityhere account and using the Edit Payment Method feature, or by emailing us at&nbsp;hello@activityhere.com. If a payment is not successfully settled, due to expiration, insufficient funds, or otherwise, and you do not edit your Payment Method information or cancel your account (see, &ldquo;Cancellation&rdquo; below), you remain responsible for any uncollected amounts and authorize us to continue billing the Payment Method, as it may be updated. This may result in a change to your payment billing dates.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.4.5 Cancellation. You may terminate your monthly subscription at any time by logging into your Activityhere account online and using the Cancel feature, or by emailing us at&nbsp;hello@activityhere.com. However, your first month cannot be cancelled and is non-refundable.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.5.1 Late Cancellation</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">We will deduct one activity for cancellations of class bookings within 12 hours of the class start time (&ldquo;Default Cancellation Fee&rdquo;), provided that certain schools may have a different cancellation policies and/or window, which shall be disclosed on the class booking page.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.5.2 No Show</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">We will deduct one activity for no show of a booked class (&ldquo;Default No Show Fee&rdquo;), provided that certain studios may have a different no show policies, which shall be disclosed on the class booking page.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">4.5.3 Other Fees</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Your Activityhere membership covers your access to classes. Some of the schools may also charge equipment or other amenity fees. The Activityhere membership only gives you access to the class for which you signed up. The venue may have additional fees for use of additional classes or spaces. Please read the description of each school carefully before reserving your activity.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">5 Promotions, Voucher Codes and Other Privileges and Programmes</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.1 From time to time Activityhere may run promotions, contests, surveys, privileges and other programmes, subject to additional terms and conditions which can be found on the Site and are hereby incorporated by reference into these Terms of Use.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.2 Promotions, contests, privileges and programmes are only valid for the time period specified by Activityhere.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3 The following terms shall apply to the use of credits, vouchers, coupons and codes (&ldquo;Voucher Codes&rdquo;):</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.1 Each Voucher Code is only eligible for a single use and is only valid for the time period specified by Activityhere.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.2 The Voucher Codes may only be redeemed by purchasing certain products from Activityhere during the applicable validity period.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.3 Use of any Voucher Code must be indicated at the time of checkout, and all information required by Activityhere must be provided. No retroactive use of the Voucher Code is permitted.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.4 Voucher Codes cannot be used in conjunction with any other promotion, voucher, coupon, code or offer, including but not limited to discounted sale items, unless otherwise stated.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.5 A minimum spend may be required before use of the Voucher Code is permitted.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.6 Voucher Codes cannot be refunded, redeemed or exchanged for cash.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.7 Resale, transfer and sharing of Voucher Codes are strictly prohibited. In spite of the above, gift vouchers, if offered by Activityhere, may be purchased by you and given to others.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.8 No reproduction, alteration, adaptation, tampering, distribution, publication, broadcast or other communication or dissemination of Voucher Codes is allowed.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.9 Voucher Codes are non-replaceable if lost, stolen, destroyed, duplicated, tampered with or otherwise misappropriated or fraudulently used.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.10 Activityhere reserves the right to verify the validity of any Voucher Code and to declare null and void, any Voucher Code which in our opinion has been stolen, duplicated, tampered with, or which is suspected to have been misappropriated or fraudulently obtained or used.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.3.11 Activityhere reserves the right to vary or impose such other terms and conditions as we deem appropriate from time to time by posting the varied terms and conditions on the Site.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.4 Where any free gift is offered as part of a promotion, the free gift is offered on a &ldquo;first come first serve&rdquo; basis and while stocks last basis. No cash will be offered in lieu of the gift.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.5 Where you are permitted to return any product to Activityhere for a refund and such product was originally purchased under a promotion or discount, you will only be refunded the amount that you originally paid for such product. Where the promotion or discount had applied to the entire order, we will refund you the selling price of the returned product less the promotion or discount applied to the returned product on a pro-rata basis. Further, any free promotional gift given with an order must also be returned if you are returning the product(s) to which the gift related.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.6 Activityhere&#39;s decision on all matters relating to promotions, discounts, Voucher Codes and other privileges is final and binding.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">5.7 Activityhere reserves the right to discontinue any promotion, discount, Voucher Code programme, contest, privileges or programme at any time without notice or liability.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">6 Prohibited Conduct</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1 By using the Site, you promise not to:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.1 Harass, threaten, or defraud Site users;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.2 Make unsolicited offers, advertisements, proposals, or send junk mail to users;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.3 Impersonate another person or access another user&rsquo;s account without that person&rsquo;s permission;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.4 Share Activityhere issued passwords with any third party or encourage any other user to do so;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.5 Permit third parties to use any classes booked under your own membership, including other members;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.6 Misrepresent the source, identity, or content of information transmitted via the Site, including deleting the copyright or other proprietary rights;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.7 Upload material (e.g. virus) that is damaging to computer systems or data of Activityhere or users of the Site;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.8 Upload copyrighted material that is not your own or that you do not have the legal right to distribute, display, and otherwise make available to others; or</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">6.1.9 Upload or send to Site users pornographic, threatening, embarrassing, hateful, racially or ethnically insulting, libelous, or otherwise inappropriate content.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">7 Intellectual Property</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">7.1 The copyright, patents, trademarks, registered designs and all intellectual property rights in the Services, the Site, and all Content shall vest in and remain with Activityhere and its licensors.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">7.2 The trademarks, logos and service marks (&quot;Marks&quot;) displayed on this Site or App are the property of Activityhere and other third parties, and all rights to the Marks are expressly reserved by Activityhere and relevant third parties. You are not permitted to use the name of Activityhere or any Marks, including in any advertising or publicity or as a hyperlink, without the prior written consent of Activityhere or such third party.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">7.3 The domain name on which the Site is hosted on is the sole property of Activityhere and you may not use or otherwise adopt a similar name for your own use.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">8 Comments, Feedback and Other Information</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">8.1 You may provide or submit comments, feedback, suggestions and other content or information (collectively, &ldquo;Comments&rdquo;) so long as the content is not illegal, criminal, immoral, inappropriate, hateful, obscene, defamatory, offensive, violent, abusive, political, religious, infringing or disrespectful in nature, and does not consist of or contain software viruses, solicitation or any form of &quot;spam.&quot; You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of a Comment. Activityhere reserves the right (but not the obligation) to review, remove or edit such content.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">8.2 You hereby grant Activityhere a non-exclusive, royalty-free, perpetual, irrevocable and sub-licensable licence to use, reproduce, modify, adapt, translate, publish, display, communicate, transmit, broadcast, distribute and exploit any Comments that you provide or publish through or in relation to the Site, for any purpose as Activityhere may require at its sole discretion. You further agree that Activityhere may use and publish your name in connection with such Comments.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">8.3 If you have any questions or concerns about these Terms of Use or any issues raised in these Terms of Use or on the Site, please contact us at&nbsp;hello@activityhere.com.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">9 Disclaimers &amp; Limitations</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.1 Classes, activities, and any other services offered via the site are offered and provided by third parties, not Activityhere. You agree that attendance at or use of any such classes, activities, or other services is solely at your own risk. In no event shall Activityhere be liable for any injury, loss, claim, damage or any special, exemplary, punitive, incidental or consequential damages of any kind, whether based in contract, tort or otherwise, which arises out of or is any way connected with a user&rsquo;s attendance or participation in a class, service or appointment made through the site, or the performance or non-performance of any provider in connection with the services. In addition, all users specifically understand and agree that any third party directing users to the site by referral, link or any other means is not liable to the user for any reason whatsoever, including but not limited to damages or loss associated with the use of the services, the site or any content on the site. Activityhere is neither an agent of nor is connected with any provider with which a user has made a reservation, other than as the providers of the services provided on the site. Without limiting anything herein, Activityhere disclaims all warranties, whether statutory, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose, related to any classes, activities, or other services offered via the site.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.2 While we make every effort to ensure that the Site, Services and all Content is accurate and complete, we provide the Site, Services and Content on an &lsquo;as is&rsquo;, &lsquo;as available&rsquo; basis only without warranties of any kind either express or implied. To the fullest extent permissible pursuant to applicable law, Activityhere, its suppliers and partners disclaims all warranties, express or implied, including, but not limited to, implied warranties of satisfactory quality, merchantability or fitness for a particular purpose, compliance with description, or the warranty of non-infringement. Without limiting the foregoing, Activityhere does not warrant that the functions contained in or access to the Site, Services, Content or other content will be timely, uninterrupted or error-free or without omission, that defects will be corrected, or that the Site, Services, or Content are free of viruses or other harmful components, or that the download, installation or use of the App or any Content in or with any device will not affect the functionality or performance of the device. Activityhere, its suppliers and partners does not warrant or make any representations regarding the use or the results of the use of the Content, the Services or the Site in terms of their correctness, accuracy, completeness, reliability, or otherwise.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.3 You agree that:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.3.1 Activityhere shall be entitled at any time, at its sole and absolute discretion and without prior notice, to add to, vary, terminate, withdraw or suspend the operation of the whole or any part or feature of the Site or Services without assigning any reason; and</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.3.2 Access to or the operation of the Site and/or the Services may from time to time be interrupted or encounter technical or other problems and may not necessarily continue uninterrupted or without technical or other errors, and in any such event, Activityhere shall not be liable for any loss, liability or damage which may be incurred as a result.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.4 In no event shall Activityhere be liable to you for any damages, losses, expenses, liabilities under any causes of action (whether in contract or tort including, but not limited to negligence, or otherwise) caused through the use of, or the inability to use, the Services, the Site, Content or any other website or device. In the event that Activityhere is liable for damages despite the foregoing provision, you agree that Activityhere&rsquo;s aggregate liability to you for any and all causes of action in relation to:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.4.1 any order, sale or delivery of any product or service by Activityhere under these Terms of Use shall not exceed the price of the product or service giving rise to such claims; and</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.4.2 in all other cases (including any use of the Site or Services), shall not exceed S$1.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.5 In no event shall Activityhere be liable for any indirect, special, consequential, or incidental damages that result from the Services, Site or Content, or your use of, or the inability to use, the Services, Site, Content or any other website or device, even if Activityhere or a Activityhere authorised representative has been advised of, or should have foreseen, the possibility of such damages.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">9.6 You agree that the above exclusions and limitations of liability enable the Services and the Content to be provided by Activityhere at either reasonable costs or no costs to you.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">10 Linked Sites</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">10.1 Activityhere may provide links, plug-ins, widgets or other connections to other sites (&quot;Linked Sites&quot;) that may be of relevance and interest to users. Activityhere has no control over, and is not responsible for the content on or obtained through the Linked Sites or for any damage you may incur from the Linked Sites (including any virus, spyware, malware, worms, errors or damaging material contained in the Linked Sites) or the availability, accuracy or reliability of any of the Linked Sites. You hereby agree to assume all risk arising from the use of the Linked Sites and hereby irrevocably waive any claim against us with respect to the Linked Sites. Activityhere does not endorse, recommend or guarantee any of the Linked Sites, and Activityhere expressly disclaims all liabilities and responsibilities arising in relation to any Linked Sites.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">11 Security &amp; Privacy</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">11.1 Activityhere recognises the importance of keeping your personal information and data secure and private. To understand our security and privacy policies and practices, please read our Security &amp; Privacy Policy (http://www.activityhere.com/privacy).</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">11.2 Please do not submit any personal information or data without first reading our Security &amp; Privacy Policy (http://www.activityhere.com/privacy) which explains our data use and privacy practices in detail.</span></p>\r\n\r\n<p><strong><span style="font-family:arial,sans-serif; font-size:10.5pt">12 Suspension &amp; Termination</span></strong></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">12.1 You agree that Activityhere has the right in its sole and absolute discretion and without notice or liability to:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">12.1.1 restrict, suspend, or terminate your access to all or any part of the Site or Services; and/or</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">12.1.2 terminate, deactivate or suspend your Account, delete your Account and all related information and files in your Account,</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">without assigning any reason.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">12.2 Without prejudice to the generality of the above, Activityhere reserves the right to deactivate your Account if it has been inactive for a period of 10 years or more, or if you are in breach of any of our Terms of Use.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">13 Notification of Infringement</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">13.1 Activityhere reserves the right to investigate notices of copyright, trademark and other intellectual property infringement (&ldquo;Infringement&rdquo;) in respect of the Site, Services or Content (&ldquo;Infringing Material&rdquo;) and take appropriate action. If you believe that your work has been used or copied in a way that constitutes copyright infringement and such infringement is occurring on the Site or Services, please notify Activityhere in writing immediately in the form and containing the information prescribed by the Singapore Copyright Act (Cap. 63) (&ldquo;Infringement Notice&rdquo;).</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">13.2 All Infringement Notices shall be sent to Activityhere addressed as follows:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Email address:&nbsp;hello@activityhere.com</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">Attention: Activityhere Team</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">13.3 Activityhere will duly consider all Infringement Notices submitted in the above manner. In return, you agree that you shall not take any legal action or exercise any legal remedy you may have against Activityhere in respect of any Infringing Material, unless you have first given Activityhere the Infringement Notice and sufficient opportunity to remove the Infringing Material, and thereafter Activityhere refuses or fails to remove the Infringing Material within a reasonable time. Where Activityhere removes the Infringing Material in response to your Infringement Notice, you agree not to exercise and you hereby waive, any right of action against Activityhere under applicable law which you may have in respect of any Infringing Material appearing on the Site prior to such removal by Activityhere.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">13.4 You acknowledge and agree that Activityhere has no control and cannot undertake responsibility or liability in respect of Infringing Material appearing on or through Linked Sites or other third party sites.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">14 Jurisdictional Issues</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">14.1 The Site and Services are meant for use by residents of Singapore only. Activityhere makes no representation that the Services and Contents of the Site are appropriate or available for use in your location. Those who choose to access this Site from any location do so on their own initiative and are responsible for compliance with local laws, if and to the extent local laws are applicable.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15 Indemnity</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15.1 You agree to indemnify and hold Activityhere, and its officers, agents, partners, and employees, harmless from all claims, demands, actions, proceedings, liabilities (including statutory liability and liability to third parties), penalties, and costs (including without limitation, legal costs on a full indemnity basis), awards, losses and/or expenses, due to or arising out of:</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15.1.1 any use of the Site or any Service;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15.1.2 your connection to the Site;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15.1.3 your breach of any terms and conditions of these Terms of Use;</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15.1.4 your violation of any rights of another person or entity; or</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">15.1.5 your breach of any statutory requirement, duty or law.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">16 Severability</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">16.1 If any provision of these Terms of Use is found to be illegal, void or unenforceable under any law that is applicable hereto or if any court of competent jurisdiction in a final decision so determines, these Terms of Use shall continue in force save that such provision shall be deemed to be deleted.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">17 Relationship of Parties</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">17.1 Nothing in these Terms of Use shall constitute or be deemed to constitute an agency, partnership or joint venture between Activityhere and you and neither party shall have any authority to bind the other in any way.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">18 Waiver</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">18.1 No waiver of any rights or remedies by Activityhere shall be effective unless made in writing and signed by an authorised representative of Activityhere.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">18.2 A failure by Activityhere to exercise or enforce any rights conferred upon us by these Terms of Use shall not be deemed to be a waiver or variation of any such rights or operate so as to bar the exercise or enforcement thereof at any subsequent time or times.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">19 Force Majeure</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">19.1 No party shall be liable for any failure to perform its obligations under these Terms of Use if the failure results from a Force Majeure Event (defined below), provided always that whenever possible, the affected party will resume that obligation as soon as the Force Majeure Event occasioning the failure ceases or abates.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">19.2 For purposes of these Terms of Use, a &ldquo;Force Majeure Event&rdquo; is an event which is a circumstance or event beyond the reasonable control of a party, and which results in the party being unable to observe or perform on time an obligation under these Terms of Use. Such circumstance or event shall include strikes, lockouts, industrial action or labour disputes, riots, civil unrest, war or threat of war, criminal or terrorist acts, government action or regulation, telecommunication or utility failures, power outages, fire, explosion, storm, flood, natural physical disasters, epidemic, quarantine restrictions, disruption to supply lines, and general failure or impossibility of the use of aircraft, shipping, aircraft, motor transport or other means of public or private transport, or political interference with the normal operations of any party.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">20 Governing Law &amp; Jurisdiction</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">20.1 These Terms of Use and all matters relating to your access to, or use of, the Site and the Services shall be governed by and construed in accordance with the laws of Singapore including without limitation the provisions of the Singapore Evidence Act (Chapter 97) and the Electronic Transactions Act (Cap. 88), without giving effect to any principles of conflicts of law.</span></p>\r\n\r\n<p><span style="font-family:arial,sans-serif; font-size:10.5pt">20.2 You hereby agree to submit to the non-exclusive jurisdiction of the Singapore courts.</span></p>\r\n', '2015-11-06 19:41:48', '2015-11-24 01:02:06'),
	(9, 'Privacy and Security', 'privacy_and_security', '<p><strong>Security &amp; Privacy Policy</strong></p>\r\n\r\n<p>We at&nbsp;<strong>Activityhere</strong>&nbsp;(&ldquo;<strong>Activityhere</strong>&rdquo; &ldquo;<strong>we</strong>,&rdquo; &ldquo;<strong>us</strong>,&rdquo; &ldquo;<strong>our</strong>&rdquo;) know that our users and customers (&ldquo;<strong>you</strong>,&rdquo; &ldquo;<strong>your</strong>&rdquo;) care about how your personal information is collected, used and shared, and we take your privacy seriously. Please read this Security &amp; Privacy Policy (&ldquo;<strong>Policy</strong>&rdquo;) to understand how Activityhere may collect, use and disclose your personal data, whether through the Activityhere website at http://www.activityhere.com (&ldquo;<strong>Site</strong>&rdquo;), or otherwise in the course of our normal business operations.</p>\r\n\r\n<p><strong>1. Consent</strong></p>\r\n\r\n<p>By accessing the Site and/or providing personal data to Activityhere, you hereby acknowledge that you have read this Policy and that you consent to the collection, use and disclosure of your personal data by Activityhere in accordance with this Policy. If you do not consent to the terms of this Policy, please do not access the Site or provide your personal data to Activityhere.</p>\r\n\r\n<p><strong>2. What is Personal Data?</strong></p>\r\n\r\n<p>&ldquo;Personal data&rdquo; means data about a person who can be identified (i) from that data, or (ii) from that data and other information to which Activityhere has or is likely to have access.</p>\r\n\r\n<p><strong>3. What personal data does </strong><strong>Activityhere collect?</strong></p>\r\n\r\n<p>We gather various types of personal data of our users and customers, as explained more fully below.</p>\r\n\r\n<p><strong><em>Data that is voluntarily provided.</em></strong>&nbsp;Activityhere collects personal data that you voluntarily provide to us, whether through the Site or other platforms or channels (such as through email, telephone and other forms of communication). At various places on the Site, or in the course of obtaining the services provided by Activityhere, you may be required to provide certain personal data such as your full name, email address, address, country of residence, telephone number and other personal information, in order to access or use certain features or services of the Site, or to otherwise obtain our services. For example, personal data may be collected when you register an Account, join our membership program, enter a contest, promotion or survey, fill up a form, provide comments, suggestions or feedback, or when you contact our customer service or helpdesk via email, phone or other channels. You can always choose not to provide your personal data, but you may not be able to access or use certain features or services of the Site, or to obtain certain services from us.</p>\r\n\r\n<p><strong><em>Data that is sent automatically.</em></strong>&nbsp;In addition, Activityhere collects data that is sent automatically by your web browser, computer, mobile or tablet device. This may include your IP address, the address of the web page you were visiting when you accessed our Site, date and time of your visit, information about the device you are using and other information. Please check the settings of your browser and/or device if you want to know what data is automatically sent or if you wish to change your settings. Please also refer to the section on &ldquo;Use of Cookies&rdquo; below.</p>\r\n\r\n<p><strong>4. How do we use your data?</strong></p>\r\n\r\n<p>Generally, we collect personal data in order to provide our products and services to you, and to personalize and improve our services and your user and customer experience with Activityhere. Personal data collected by Activityhere may be used:</p>\r\n\r\n<p>4.1 to provide you with service information, and news;</p>\r\n\r\n<p>4.2 to support the services offered on the Site;</p>\r\n\r\n<p>4.3 to contact you for feedback about our services;</p>\r\n\r\n<p>4.4 to conduct research about Activityhere&rsquo;s customer base or services;</p>\r\n\r\n<p>4.5 to fulfil your reservation and purchase requests;</p>\r\n\r\n<p>4.6 to inform you of promotions, offers, surveys, events, products and services, which may be of interest to you;</p>\r\n\r\n<p>4.7 to process your payments including credit checks and collection;</p>\r\n\r\n<p>4.8 to customise your online experience according to your chosen interests and preferences and enhance your current and future visits to the Site, and customer experience with us;</p>\r\n\r\n<p>4.9 to notify you of technical updates or changes in policy;</p>\r\n\r\n<p>4.10 to update and back-up our records;</p>\r\n\r\n<p>4.11 to reduce credit risk, detect and protect us against error, fraud and other criminal activity;</p>\r\n\r\n<p>4.12 to comply with law, the requests of law enforcement and regulatory officials, or orders of court;</p>\r\n\r\n<p>4.13 to enforce our legal rights and remedies; or</p>\r\n\r\n<p>4.14 for such other purposes notified to you on or before collection or use of the data.</p>\r\n\r\n<p><strong>5. Who do we disclose your data to?</strong></p>\r\n\r\n<p>We do not rent, trade or sell your personal data. Your personal data will not be disclosed by Activityhere to any third party, except:</p>\r\n\r\n<p>5.1 to:</p>\r\n\r\n<p>5.1.1 any affiliate, subsidiary or partner of Activityhere;</p>\r\n\r\n<p>5.1.2 our technology, marketing and logistics service providers;</p>\r\n\r\n<p>5.1.3 credit card and payment processing companies;</p>\r\n\r\n<p>5.1.4 lawyers, auditors, professional advisors and investors of Activityhere; or</p>\r\n\r\n<p>5.1.5 any other agents, service providers or subcontractors acting for or on behalf of Activityhere,</p>\r\n\r\n<p>to the extent required to carry out the purposes set out in Section 4, or to do anything at your request; or</p>\r\n\r\n<p>5.2 where you expressly consent to such disclosure; or</p>\r\n\r\n<p>5.3 where such disclosure is required or permitted by applicable law, statute, stock exchange regulation or by-law, regulatory or governmental order or court order.</p>\r\n\r\n<p>From time to time, we may collaborate with other third parties to organise joint marketing and promotional campaigns, offers or contests, and may require disclosure of your information to such third parties. For example, where a promotion or Voucher Code is specially offered to customers of our third party partner, we may share your information with that partner to the extent relevant to such promotional campaign. In some cases, you may not be able to enjoy the promotion, offer or participate in the contest, unless you consent to disclosure to our partner of your information. &ldquo;Voucher Code&rdquo; refers to any credits, vouchers, coupons or codes offered by Activityhere for use in the purchase of goods from Activityhere.</p>\r\n\r\n<p>Recipients of your personal data may be located outside Singapore. You agree that we may transfer your personal data to our affiliates, subsidiaries and/or other third parties located outside of Singapore, as long as the personal data is handled in accordance with this Policy and all applicable laws. Activityhere will ensure recipients of your personal data are legally bound to provide a standard of protection for your personal data comparable to the protection afforded under the Personal Data Protection Act 2012 (No. 26 of 2012).</p>\r\n\r\n<p><strong>6. How long do we retain your data?</strong></p>\r\n\r\n<p>Personal data provided by you will be retained as long as the purpose for which the data was collected continues. Thereafter, Activityhere will destroy or delete the information, or remove the means by which the data can be associated with you, unless its retention is required to satisfy legal, regulatory, accounting or other business requirements or to protect Activityhere&rsquo;s interests.</p>\r\n\r\n<p><strong>7. Is your data secure?</strong></p>\r\n\r\n<p>7.1 As your Account is protected by a password for your privacy and security, we ask that you take steps to protect against unauthorised access or use of your Account. Please select and protect your password appropriately and limit access to your device and browser by signing off after you have finished accessing your Account. You are responsible for any loss, theft and compromise of your password and Account Information, and any activity on your Account that takes place through unauthorised password use.</p>\r\n\r\n<p>7.2 Activityhere understands the importance of keeping your personal data private and secure. We therefore put in place security arrangements to protect your privacy and personal data, in a manner that we believe is reasonably appropriate to prevent unauthorised access, collection, use, disclosure, copying, modification, disposal or similar risks. Please be informed that despite our best efforts, no security measures are impenetrable. Unauthorised entry or use, hardware or software failure, and other factors, may compromise the security of your personal data. Activityhere does not warrant or guarantee in any way that your personal information or private communications will always remain private and/or safe. Activityhere hereby disclaims any responsibility or liability directly or indirectly arising out of or in connection with, any loss, theft, or unauthorised access, collection, use, disclosure, copying, modification, disposal or similar actions with regard to any personal data held or maintained by us, except to the extent caused by our fault or negligence.</p>\r\n\r\n<p><strong>8. Linked Sites</strong></p>\r\n\r\n<p>Activityhere may provide links to other sites (&quot;Linked Sites&quot;) that may be of relevance and interest to you. Activityhere has no control over, and are not responsible for the privacy practices or the content of such Linked Sites, and you hereby waive any claim against us with respect to the Linked Sites.</p>\r\n\r\n<p><strong>9. Use of Cookies</strong></p>\r\n\r\n<p>In order to improve our products and services, we collect data by way of &ldquo;cookies&rdquo;. Cookies help us measure the number of visits, average time spent, page views and other statistics relating to your access to the Site. This information allows us to better administer the Site, and provide a more tailored and user-friendly service to our Site visitors. Cookies also enable you to use or access certain features or services of our Site, including the shopping cart and check-out features. For example, cookies help us store preferences or retrieve products in your shopping cart between visits, from our servers. Cookies are small data files that are sent to your browser from our Site and are stored on your computer&rsquo;s or device&rsquo;s hard drive. Each time you visit our Site from the same computer or device, the cookie will be retrieved from your computer or device, enabling our Site to recognise your computer or device as having previously visited our Site and thereby increase the functionality of our Site on your computer or device. Our cookies cannot be used to get data from your hard drive, to get your email address or any other data that can be traced to you personally. Most web browsers and devices can be set to notify you when you receive a cookie or to prevent cookies from being sent; if you use these features, you may limit the functionality we can provide you when you visit our Site.</p>\r\n\r\n<p><strong>10. How to access and correct your data?</strong></p>\r\n\r\n<p>If you wish to access, correct or update your personal data, you may do so at any time by accessing your Account settings through the Site. Alternatively, you may contact us at&nbsp;hello@activityhere.com. You are responsible for providing us with correct and updated information.</p>\r\n\r\n<p><strong>11. What choices do you have?</strong></p>\r\n\r\n<p>11.1 Keep in mind that the information we gather is in an effort to offer you a superior online shopping experience that is customized. You may be able to access, correct or update certain information as explained in Section 10 above. When you update information, however, we may maintain a copy of the unrevised information in our records.</p>\r\n\r\n<p>11.2 You may request deletion of your account by sending an email to&nbsp;hello@activityhere.com. Please note that some information may remain in our private records after deletion of your account. We may use any aggregated data derived from or incorporating your personal data after you delete your account, but not in a manner that would identify you personally unless permitted by law.</p>\r\n\r\n<p>11.3 If you do not wish to receive email or other communications from us, you can unsubscribe from our mailing list by using the unsubscribe facility that may be provided with such email or communication, or contact us at&nbsp;hello@acitivityhere.com.</p>\r\n\r\n<p><strong>12. Questions or Concerns</strong></p>\r\n\r\n<p>Please direct any questions or concerns that you may have regarding our handling of your personal data to:</p>\r\n\r\n<p>Attn: The Data Protection Executive</p>\r\n\r\n<p>Email:&nbsp;hello@activityhere.com</p>\r\n\r\n<p>Please provide your name, contact number, email address and all relevant details along with your question or concern, so that we can review and respond to your question or concern in an efficient and effective manner.</p>\r\n\r\n<p><strong>13. Right to Amend Policy</strong></p>\r\n\r\n<p>Activityhere reserves the right to amend the prevailing Security &amp; Privacy Policy at any time and will place any such amendments on this Site.</p>\r\n\r\n<p><strong>14. Governing Law</strong></p>\r\n\r\n<p>This Policy is governed by and shall be construed in accordance with Singapore law including without limitation the provisions of the Evidence Act (Chapter 97), Electronic Transactions Act (Cap. 88) and the PDPA, without giving effect to any principles of conflicts of law. You agree to submit to the non-exclusive jurisdiction of the Singapore courts.</p>\r\n', '2015-11-06 19:42:26', '2015-11-24 01:03:29'),
	(10, 'Interested in                             Partnership', 'interested_in_____________________________partnership', '<p><strong>Lorem Ipsum</strong><span style="font-family:arial,helvetica,sans; font-size:11px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2015-11-06 19:42:48', '2015-11-06 19:42:48'),
	(11, 'How it Works', 'how_it_works', '<p><strong>Lorem Ipsum</strong><span style="font-family:arial,helvetica,sans; font-size:11px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2015-11-06 19:43:50', '2015-11-06 19:43:50');
/*!40000 ALTER TABLE `at_pages` ENABLE KEYS */;


-- Dumping structure for table activity.at_partner_activity
DROP TABLE IF EXISTS `at_partner_activity`;
CREATE TABLE IF NOT EXISTS `at_partner_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `activity_type_id` int(11) NOT NULL DEFAULT '0',
  `age_range` varchar(50) NOT NULL DEFAULT '0',
  `activity_date` date DEFAULT NULL,
  `activity_time` varchar(50) NOT NULL DEFAULT '0',
  `is_paid` enum('Y','N') NOT NULL DEFAULT 'N',
  `price` float NOT NULL DEFAULT '0',
  `address` text,
  `slots` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL COMMENT 'Create At',
  `createdby` int(11) NOT NULL DEFAULT '0' COMMENT 'Created By',
  `modifiedby` int(11) NOT NULL DEFAULT '0' COMMENT 'Modified By',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_partner_activity: ~76 rows (approximately)
/*!40000 ALTER TABLE `at_partner_activity` DISABLE KEYS */;
INSERT INTO `at_partner_activity` (`id`, `user_id`, `activity_type_id`, `age_range`, `activity_date`, `activity_time`, `is_paid`, `price`, `address`, `slots`, `created`, `createdby`, `modifiedby`) VALUES
	(1, 16, 4, '20-30', '2015-11-19', '10AM', 'N', 10, 'Kolkata', 5, '2015-11-18 10:10:10', 16, 0),
	(2, 19, 2, '6 to 8', '2015-12-03', '1000-1130', 'Y', 0, '81 Clemenceau Avenue, #02-11 UE Square Mall, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(3, 19, 2, '6 to 8', '2015-12-04', '1000-1130', 'Y', 0, '81 Clemenceau Avenue, #02-11 UE Square Mall, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(4, 19, 2, '4 to 8', '2015-12-05', '1000-1130', 'Y', 0, '81 Clemenceau Avenue, #02-11 UE Square Mall, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(5, 20, 2, '5 to 7', '2015-12-04', '0900-1100', 'Y', 0, '87 Marine Parade Central #02-500B, Singapore 44008', 5, '2015-11-28 07:49:12', 1, 1),
	(6, 21, 2, '3 to 5', '2015-12-05', '1400-1530', 'Y', 0, '35 Rochester Drive, #03-01 Rochester Mall, Singapo', 5, '2015-11-28 07:49:12', 1, 1),
	(7, 21, 2, '6 to 8', '2015-12-05', '1500-1600', 'Y', 0, '35 Rochester Drive, #03-01 Rochester Mall, Singapo', 5, '2015-11-28 07:49:12', 1, 1),
	(8, 21, 2, '3 to 5', '2015-12-07', '1400-1530', 'Y', 0, '35 Rochester Drive, #03-01 Rochester Mall, Singapo', 5, '2015-11-28 07:49:12', 1, 1),
	(9, 22, 2, '4 to 6', '2015-12-06', '0900-1100', 'N', 0, '180 Kitchener Road #B2-02 Singapore 208539', 5, '2015-11-28 07:49:12', 1, 1),
	(10, 23, 2, '6 to 8', '2015-12-07', '1400-1530', 'N', 0, '101 Thomson Road #01-20/27, Singapore 307591', 5, '2015-11-28 07:49:12', 1, 1),
	(11, 24, 3, '4 to 8', '2015-12-07', '0900-1100', 'Y', 0, '1771 Ang Mo Kio Ave 1 Singapore 569978', 5, '2015-11-28 07:49:12', 1, 1),
	(12, 24, 3, '4 to 8', '2015-12-08', '0900-1100', 'Y', 0, '1771 Ang Mo Kio Ave 1 Singapore 569978', 5, '2015-11-28 07:49:12', 1, 1),
	(13, 24, 3, '4 to 8', '2015-12-09', '0900-1100', 'Y', 0, '1771 Ang Mo Kio Ave 1 Singapore 569978', 5, '2015-11-28 07:49:12', 1, 1),
	(14, 25, 3, '4 to 8', '2015-12-09', '1600-1730', 'N', 0, ' 338 Ang Mo Kio Ave 1, 560338', 5, '2015-11-28 07:49:12', 1, 1),
	(15, 26, 3, '4 to 8', '2015-12-03', '1400-1530', 'Y', 0, '220 Turf Club Rd, 288001', 5, '2015-11-28 07:49:12', 1, 1),
	(16, 26, 3, '4 to 8', '2015-12-04', '1400-1530', 'Y', 0, '220 Turf Club Rd, 288001', 5, '2015-11-28 07:49:12', 1, 1),
	(17, 26, 3, '4 to 8', '2015-12-05', '1400-1530', 'Y', 0, '220 Turf Club Rd, 288001', 5, '2015-11-28 07:49:12', 1, 1),
	(18, 27, 3, '4 to 8', '2015-12-04', '1600-1730', 'N', 0, 'SAFRA JURONG CLUB, 333 Boon Lay Way, #3C-01, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(19, 27, 3, '4 to 8', '2015-12-05', '1600-1730', 'N', 0, 'SAFRA JURONG CLUB, 333 Boon Lay Way, #3C-01, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(20, 27, 3, '4 to 8', '2015-12-06', '1600-1730', 'N', 0, 'SAFRA JURONG CLUB, 333 Boon Lay Way, #3C-01, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(21, 27, 3, '4 to 8', '2015-12-07', '1600-1730', 'N', 0, 'SAFRA JURONG CLUB, 333 Boon Lay Way, #3C-01, Singa', 5, '2015-11-28 07:49:12', 1, 1),
	(22, 28, 3, '4 to 12', '2015-12-05', '1000-1130', 'N', 0, '220 Turf Club Rd, 288001', 5, '2015-11-28 07:49:12', 1, 1),
	(23, 29, 3, '4 to 12', '2015-12-06', '1600-1730', 'N', 0, 'Bukit Batok Swimming Complex No. 2 Bukit Batok St.', 5, '2015-11-28 07:49:12', 1, 1),
	(24, 30, 4, '2 to 3', '2015-12-07', '1500-1600', 'Y', 0, '1 Fusionopolis Way Connexis, #02-03, Singapore 138', 5, '2015-11-28 07:49:12', 1, 1),
	(25, 31, 4, '4 to 8', '2015-12-08', '1400-1530', 'Y', 0, '391B Orchard Road, Ngee Ann City Tower B, #13-03, ', 5, '2015-11-28 07:49:12', 1, 1),
	(26, 32, 4, '4 to 6', '2015-12-09', '1500-1600', 'Y', 0, '528 Ang Mo Kio Ave 10 #02-2387 Singapore 560528 ', 5, '2015-11-28 07:49:12', 1, 1),
	(27, 33, 4, '4 to 6', '2015-12-03', '1500-1600', 'Y', 0, '180 Kitchener Road #01-02 Singapore 208539', 5, '2015-11-28 07:49:12', 1, 1),
	(28, 34, 5, '4 to 8', '2015-12-04', '0900-1100', 'N', 0, '391B Orchard Road, Ngee Ann City Tower B, #13-03, ', 5, '2015-11-28 07:49:12', 1, 1),
	(29, 34, 5, '4 to 8', '2015-12-05', '0900-1100', 'N', 0, '391B Orchard Road, Ngee Ann City Tower B, #13-03, ', 5, '2015-11-28 07:49:12', 1, 1),
	(30, 34, 5, '4 to 8', '2015-12-04', '1100-1200', 'N', 0, '391B Orchard Road, Ngee Ann City Tower B, #13-03, ', 5, '2015-11-28 07:49:12', 1, 1),
	(31, 35, 5, '6 to 12', '2015-12-05', '1100-1200', 'Y', 0, '460 Alexandra Road, #03-03 Alexandra Retail Centre', 5, '2015-11-28 07:49:12', 1, 1),
	(32, 36, 5, '6 to 12', '2015-12-05', '1400-1530', 'Y', 0, '1 Gold Hill Plaza Podium Bock, #03-27, Novena, Sin', 5, '2015-11-28 07:49:12', 1, 1),
	(33, 36, 5, '6 to 12', '2015-12-06', '1400-1530', 'Y', 0, '1 Gold Hill Plaza Podium Bock, #03-27, Novena, Sin', 5, '2015-11-28 07:49:12', 1, 1),
	(34, 36, 5, '6 to 12', '2015-12-07', '1400-1530', 'Y', 0, '1 Gold Hill Plaza Podium Bock, #03-27, Novena, Sin', 5, '2015-11-28 07:49:12', 1, 1),
	(35, 37, 5, '3 to 5', '2015-12-07', '1100-1200', 'Y', 0, ' 87-A Serangoon Garden Way, Serangoon Garden Estat', 5, '2015-11-28 07:49:12', 1, 1),
	(36, 38, 6, '3 to 5', '2015-12-08', '1000-1130', 'N', 0, '101 Thomson Road #01-30, Singapore 307591', 5, '2015-11-28 07:49:12', 1, 1),
	(37, 38, 6, '3 to 5', '2015-12-09', '1000-1130', 'N', 0, '101 Thomson Road #01-30, Singapore 307591', 5, '2015-11-28 07:49:12', 1, 1),
	(38, 38, 6, '6 to 8', '2015-12-04', '1000-1130', 'N', 0, '101 Thomson Road #01-30, Singapore 307591', 5, '2015-11-28 07:49:12', 1, 1),
	(39, 39, 6, '6 to 8', '2015-12-09', '1100-1200', 'N', 0, '391B Orchard Road, Ngee Ann City Tower B, #13-03, ', 5, '2015-11-28 07:49:12', 1, 1),
	(40, 40, 6, '6 to 12', '2015-12-03', '1400-1530', 'N', 0, 'City Square Mall, 180 Kitchener Road, #06-01, Sing', 5, '2015-11-28 07:49:12', 1, 1),
	(41, 40, 6, '6 to 12', '2015-12-04', '1400-1530', 'N', 0, 'City Square Mall, 180 Kitchener Road, #06-01, Sing', 5, '2015-11-28 07:49:12', 1, 1),
	(42, 40, 6, '6 to 12', '2015-12-05', '1400-1530', 'N', 0, 'City Square Mall, 180 Kitchener Road, #06-01, Sing', 5, '2015-11-28 07:49:12', 1, 1),
	(43, 41, 6, '3 to 5', '2015-12-04', '1400-1530', 'N', 0, '#04-00 Forum 583 Orchard Road Singapore 238884', 5, '2015-11-28 07:49:12', 1, 1),
	(44, 42, 7, '3 to 5', '2015-12-05', '1600-1730', 'Y', 0, '10 Sengkang Central, Singapore 545061', 5, '2015-11-28 07:49:12', 1, 1),
	(45, 43, 7, '3 to 5', '2015-12-06', '1100-1200', 'N', 0, ' 167, Tanglin Road, Tanglin Mall, #03-11B, Singapo', 5, '2015-11-28 07:49:12', 1, 1),
	(46, 44, 7, '4 to 8', '2015-12-07', '1100-1200', 'N', 0, '1 Maritime Square #03-12, Harbourfront Centre, Sin', 5, '2015-11-28 07:49:12', 1, 1),
	(47, 45, 8, '1 to 12', '2015-12-04', 'All day', 'Y', 0, '1 Maritime Square #03-09/10, Harbourfront Centre, ', 5, '2015-11-28 07:49:12', 1, 1),
	(48, 45, 8, '1 to 12', '2015-12-05', 'All day', 'Y', 0, '1 Maritime Square #03-09/10, Harbourfront Centre, ', 5, '2015-11-28 07:49:12', 1, 1),
	(49, 45, 8, '1 to 12', '2015-12-06', 'All day', 'Y', 0, '1 Maritime Square #03-09/10, Harbourfront Centre, ', 5, '2015-11-28 07:49:12', 1, 1),
	(50, 45, 8, '1 to 12', '2015-12-07', 'All day', 'Y', 0, '1 Maritime Square #03-09/10, Harbourfront Centre, ', 5, '2015-11-28 07:49:12', 1, 1),
	(51, 46, 8, '1 to 12', '2015-12-04', 'All day', 'Y', 0, '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(0', 5, '2015-11-28 07:49:12', 1, 1),
	(52, 46, 8, '1 to 12', '2015-12-05', 'All day', 'Y', 0, '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(0', 5, '2015-11-28 07:49:12', 1, 1),
	(53, 46, 8, '1 to 12', '2015-12-06', 'All day', 'Y', 0, '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(0', 5, '2015-11-28 07:49:12', 1, 1),
	(54, 46, 8, '1 to 12', '2015-12-07', 'All day', 'Y', 0, '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(0', 5, '2015-11-28 07:49:12', 1, 1),
	(55, 46, 8, '1 to 12', '2015-12-08', 'All day', 'Y', 0, '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(0', 5, '2015-11-28 07:49:12', 1, 1),
	(56, 47, 8, '1 to 12', '2015-12-03', 'All day', 'Y', 0, '1 Harbourfront Walk, VivoCity, 098585', 5, '2015-11-28 07:49:12', 1, 1),
	(57, 47, 8, '1 to 12', '2015-12-04', 'All day', 'Y', 0, '1 Harbourfront Walk, VivoCity, 098585', 5, '2015-11-28 07:49:12', 1, 1),
	(58, 48, 8, '1 to 12', '2015-12-04', '1000-1200', 'Y', 0, '200 Turf Club Road, #02-04 Turf City, Singapore 28', 5, '2015-11-28 07:49:12', 1, 1),
	(59, 48, 8, '1 to 12', '2015-12-05', '1000-1200', 'Y', 0, '200 Turf Club Road, #02-04 Turf City, Singapore 28', 5, '2015-11-28 07:49:12', 1, 1),
	(60, 49, 8, '1 to 12', '2015-12-05', '1100-1300', 'N', 0, ' 21 Jurong Town Hall Rd, 609433', 5, '2015-11-28 07:49:12', 1, 1),
	(61, 50, 8, '1 to 12', '2015-12-04', 'All day', 'Y', 0, 'Ang Mo Kio Ave 3, AMK Hub, Singapore 569933', 5, '2015-11-28 07:49:12', 1, 1),
	(62, 50, 8, '1 to 12', '2015-12-05', 'All day', 'Y', 0, 'Ang Mo Kio Ave 3, AMK Hub, Singapore 569933', 5, '2015-11-28 07:49:12', 1, 1),
	(63, 50, 8, '1 to 12', '2015-12-06', 'All day', 'Y', 0, 'Ang Mo Kio Ave 3, AMK Hub, Singapore 569933', 5, '2015-11-28 07:49:12', 1, 1),
	(64, 50, 8, '1 to 12', '2015-12-07', 'All day', 'Y', 0, 'Ang Mo Kio Ave 3, AMK Hub, Singapore 569933', 5, '2015-11-28 07:49:12', 1, 1),
	(65, 50, 8, '1 to 12', '2015-12-08', 'All day', 'Y', 0, 'Ang Mo Kio Ave 3, AMK Hub, Singapore 569933', 5, '2015-11-28 07:49:12', 1, 1),
	(66, 51, 9, '5 to 12', '2015-12-07', '1000-1130', 'Y', 0, '116 Changi Road, WIS @ Changi, #02-08 , Singapore ', 5, '2015-11-28 07:49:12', 1, 1),
	(67, 52, 9, '5 to 12', '2015-12-07', '1000-1130', 'Y', 0, '#03-03/04 OneKM Shopping Mall, 11 Tanjong Katong R', 5, '2015-11-28 07:49:12', 1, 1),
	(68, 52, 9, '5 to 12', '2015-12-08', '1000-1130', 'Y', 0, '#03-03/04 OneKM Shopping Mall, 11 Tanjong Katong R', 5, '2015-11-28 07:49:12', 1, 1),
	(69, 52, 9, '5 to 12', '2015-12-09', '1000-1130', 'Y', 0, '#03-03/04 OneKM Shopping Mall, 11 Tanjong Katong R', 5, '2015-11-28 07:49:12', 1, 1),
	(70, 53, 9, '7 to 12', '2015-12-09', '0900-1100', 'Y', 0, '2 Tampines Central 6 , NTUC Income Tampines Point,', 5, '2015-11-28 07:49:12', 1, 1),
	(71, 53, 9, '7 to 12', '2015-12-09', '1200-1400', 'Y', 0, '2 Tampines Central 6 , NTUC Income Tampines Point,', 5, '2015-11-28 07:49:12', 1, 1),
	(72, 53, 9, '7 to 12', '2015-12-09', '1500-1700', 'Y', 0, '2 Tampines Central 6 , NTUC Income Tampines Point,', 5, '2015-11-28 07:49:12', 1, 1),
	(73, 54, 9, '5 to 12', '2015-12-03', '1100-1200', 'N', 0, '81 Clemenceau Avenue, #02-12 UE Square, Singapore ', 5, '2015-11-28 07:49:12', 1, 1),
	(74, 54, 9, '5 to 12', '2015-12-04', '1100-1200', 'N', 0, '81 Clemenceau Avenue, #02-12 UE Square, Singapore ', 5, '2015-11-28 07:49:12', 1, 1),
	(75, 54, 9, '5 to 12', '2015-12-05', '1100-1200', 'N', 0, '81 Clemenceau Avenue, #02-12 UE Square, Singapore ', 5, '2015-11-28 07:49:12', 1, 1),
	(76, 54, 9, '5 to 12', '2015-12-06', '1100-1200', 'N', 0, '81 Clemenceau Avenue, #02-12 UE Square, Singapore ', 5, '2015-11-28 07:49:12', 1, 1);
/*!40000 ALTER TABLE `at_partner_activity` ENABLE KEYS */;


-- Dumping structure for table activity.at_partner_details
DROP TABLE IF EXISTS `at_partner_details`;
CREATE TABLE IF NOT EXISTS `at_partner_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_ids` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- Dumping data for table activity.at_partner_details: ~37 rows (approximately)
/*!40000 ALTER TABLE `at_partner_details` DISABLE KEYS */;
INSERT INTO `at_partner_details` (`id`, `user_id`, `activity_ids`, `logo`) VALUES
	(1, 16, '4,5', NULL),
	(65, 19, '2', NULL),
	(66, 20, '2', NULL),
	(67, 21, '2', NULL),
	(68, 22, '2', NULL),
	(69, 23, '2', NULL),
	(70, 24, '3', NULL),
	(71, 25, '3', NULL),
	(72, 26, '3', NULL),
	(73, 27, '3', NULL),
	(74, 28, '3', NULL),
	(75, 29, '3', NULL),
	(76, 30, '4', NULL),
	(77, 31, '4', NULL),
	(78, 32, '4', NULL),
	(79, 33, '4', NULL),
	(80, 34, '5', NULL),
	(81, 35, '5', NULL),
	(82, 36, '5', NULL),
	(83, 37, '5', NULL),
	(84, 38, '6', NULL),
	(85, 39, '6', NULL),
	(86, 40, '6', NULL),
	(87, 41, '6', NULL),
	(88, 42, '7', NULL),
	(89, 43, '7', NULL),
	(90, 44, '7', NULL),
	(91, 45, '8', NULL),
	(92, 46, '8', NULL),
	(93, 47, '8', NULL),
	(94, 48, '8', NULL),
	(95, 49, '8', NULL),
	(96, 50, '8', NULL),
	(97, 51, '9', NULL),
	(98, 52, '9', NULL),
	(99, 53, '9', NULL),
	(100, 54, '9', NULL);
/*!40000 ALTER TABLE `at_partner_details` ENABLE KEYS */;


-- Dumping structure for table activity.at_partner_images
DROP TABLE IF EXISTS `at_partner_images`;
CREATE TABLE IF NOT EXISTS `at_partner_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_partner_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_partner_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_partner_images` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table activity.at_payment: ~5 rows (approximately)
/*!40000 ALTER TABLE `at_payment` DISABLE KEYS */;
INSERT INTO `at_payment` (`id`, `cdate`, `membership_id`, `final_amount`, `payment_process`, `payment_status`, `Payment_method_detail`, `payment_by`, `bank_name`, `check_no`, `pay_by_fname`, `pay_by_lname`, `pay_by_address`, `pay_by_phone`, `pay_by_mobile`, `pay_by_fax`, `pay_by_email`, `pay_note`, `refund`, `refund_note`, `refund_by`, `refund_time`, `response_text`, `online_pay_mode`) VALUES
	(1, '2015-11-28 11:32:01', 2, 0.00, 2, 'SUCCESSFUL', '', 55, '', '', 'TEST', 'Dey', '', '', '', '', '', '', 0.00, '', 0, '0000-00-00 00:00:00', NULL, 'AUTHORIZE'),
	(2, '2015-11-28 11:45:51', 3, 0.00, 2, 'SUCCESSFUL', '', 56, '', '', 'swati ', 'Dey', '', '', '', '', '', '', 0.00, '', 0, '0000-00-00 00:00:00', NULL, 'AUTHORIZE'),
	(3, '2015-11-28 11:49:22', 4, 0.00, 2, 'SUCCESSFUL', '', 57, '', '', 'swati ', 'Dey', '', '', '', '', '', '', 0.00, '', 0, '0000-00-00 00:00:00', NULL, 'AUTHORIZE'),
	(4, '2015-11-28 11:54:31', 5, 0.00, 2, 'SUCCESSFUL', '', 58, '', '', 'swati ', 'Dey', '', '', '', '', '', '', 0.00, '', 0, '0000-00-00 00:00:00', NULL, 'AUTHORIZE'),
	(5, '2015-12-18 22:19:22', 6, 0.00, 2, 'SUCCESSFUL', '', 59, '', '', 'Ramen', 'Dey', '', '', '', '', '', '', 0.00, '', 0, '0000-00-00 00:00:00', NULL, 'AUTHORIZE');
/*!40000 ALTER TABLE `at_payment` ENABLE KEYS */;


-- Dumping structure for table activity.at_site_settings
DROP TABLE IF EXISTS `at_site_settings`;
CREATE TABLE IF NOT EXISTS `at_site_settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `site_address` text,
  `site_phone` varchar(15) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_email_from` varchar(255) DEFAULT NULL,
  `site_fb` varchar(255) DEFAULT NULL,
  `site_gplus` varchar(255) DEFAULT NULL,
  `site_twitter` varchar(255) DEFAULT NULL,
  `paypal_pro_user_name` varchar(255) DEFAULT NULL,
  `paypal_pro_password` varchar(255) DEFAULT NULL,
  `paypal_pro_api_signature` varchar(255) DEFAULT NULL,
  `site_partner_inquiry_email` varchar(255) DEFAULT NULL,
  `site_registration_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table activity.at_site_settings: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_site_settings` DISABLE KEYS */;
INSERT INTO `at_site_settings` (`id`, `site_address`, `site_phone`, `site_email`, `site_email_from`, `site_fb`, `site_gplus`, `site_twitter`, `paypal_pro_user_name`, `paypal_pro_password`, `paypal_pro_api_signature`, `site_partner_inquiry_email`, `site_registration_email`) VALUES
	(1, 'Test address', '', 'hello@activityhere.com', NULL, '', '', '', 'yesbkp-facilitator_api1.gail.com', '2YEXT82BF6T9CYMY', 'An5ns1Kso7MWUdW4ErQKJJJ4qi4-AJqj6RLae4n.SxsS.ZAdwkcohEtu', NULL, NULL);
/*!40000 ALTER TABLE `at_site_settings` ENABLE KEYS */;


-- Dumping structure for table activity.at_users
DROP TABLE IF EXISTS `at_users`;
CREATE TABLE IF NOT EXISTS `at_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(256) NOT NULL COMMENT 'User Name',
  `password` varchar(256) NOT NULL COMMENT 'Password',
  `email` varchar(256) NOT NULL COMMENT 'Email',
  `profilepic` varchar(256) NOT NULL COMMENT 'Email',
  `firstname` varchar(256) NOT NULL DEFAULT '' COMMENT 'First Name',
  `lastname` varchar(256) NOT NULL DEFAULT '' COMMENT 'Last Name',
  `address1` text NOT NULL COMMENT 'Address',
  `sex` enum('M','F') NOT NULL DEFAULT 'M' COMMENT 'Sex',
  `user_type` enum('Partner','Customer') NOT NULL DEFAULT 'Customer' COMMENT 'Sex',
  `office_phone` varchar(100) NOT NULL DEFAULT '' COMMENT 'Office Phone',
  `home_phone` varchar(100) NOT NULL DEFAULT '' COMMENT 'Home Phone',
  `zipcode` int(10) NOT NULL COMMENT 'Zip Code',
  `create_at` datetime NOT NULL COMMENT 'Create At',
  `lastvisit_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Last Visit At',
  `superuser` int(1) NOT NULL DEFAULT '0' COMMENT 'Super User',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'Status - 1 - Active , 2- In-Active, 0-Verification Required',
  `verification` mediumtext,
  `createdby` int(11) NOT NULL DEFAULT '0' COMMENT 'Created By',
  `modifiedby` int(11) NOT NULL DEFAULT '0' COMMENT 'Modified By',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_users: ~41 rows (approximately)
/*!40000 ALTER TABLE `at_users` DISABLE KEYS */;
INSERT INTO `at_users` (`id`, `username`, `password`, `email`, `profilepic`, `firstname`, `lastname`, `address1`, `sex`, `user_type`, `office_phone`, `home_phone`, `zipcode`, `create_at`, `lastvisit_at`, `superuser`, `status`, `verification`, `createdby`, `modifiedby`) VALUES
	(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', '', '', '', 'Kolkata', 'M', 'Customer', '', '', 712233, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, NULL, 0, 0),
	(16, 'ramen488@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ramen488@gmail.com', '', 'Ramen', 'Dey', '', 'M', 'Customer', '', '88888', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 'UmFtZW4kcmFtZW40ODhAZ21haWwuY29t', 0, 0),
	(17, 'terencecsn@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'terencecsn@hotmail.com', '', 'Terence', 'Chan', 'Blk 321 Serangoon Ave 2 #06-370', 'M', 'Customer', '97814013', '', 550321, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, NULL, 0, 0),
	(19, 'hello@readaloud.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@readaloud.sg', '', 'Read', 'a Loud', '81 Clemenceau Avenue, #02-11 UE Square Mall, Singapore 239917', 'M', 'Partner', '68584123', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '3ca7570c09b7d970a8e3ba83c2ed31d3', 1, 1),
	(20, 'hello@megamaths.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@megamaths.sg', '', 'Mega', 'Mega Maths', '87 Marine Parade Central #02-500B, Singapore 440087', 'M', 'Partner', '68585124', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '9ef64de225a59f5db1ba3f28437f31ef', 1, 1),
	(21, 'hello@huayu.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@huayu.sg', '', 'Huayu', 'Tuition ', '35 Rochester Drive, #03-01 Rochester Mall, Singapore 138639', 'M', 'Partner', '68586125', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '7e83153b53b8af1a94afbb3dc513b967', 1, 1),
	(22, 'hello@supermethod.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@supermethod.sg', '', 'Super', 'Method Training', '180 Kitchener Road #B2-02 Singapore 208539', 'M', 'Partner', '68587126', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'b14b06e1fbdcc79016754012e251e780', 1, 1),
	(23, 'hello@superbrain.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@superbrain.sg', '', 'Super', 'Super Brain', '101 Thomson Road #01-20/27, Singapore 307591', 'M', 'Partner', '68588127', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '4dd45332d0edacd8896550b02591bb16', 1, 1),
	(24, 'hello@swimfaster.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@swimfaster.sg', '', 'Swim', 'Swim Faster', '1771 Ang Mo Kio Ave 1 Singapore 569978', 'M', 'Partner', '68589128', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '6b8a16c083c815a0266c09e6af62a46d', 1, 1),
	(25, 'hello@gardenskating.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@gardenskating.sg', '', 'Garden', 'Garden Skating', ' 338 Ang Mo Kio Ave 1, 560338', 'M', 'Partner', '68590129', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'af3d6ba9bf6b873cd41ddf7330c6fd38', 1, 1),
	(26, 'hello@tennisrus.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@tennisrus.sg', '', 'Tennis', 'R Us', '220 Turf Club Rd, 288001', 'M', 'Partner', '68591130', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'fa1406f55436f7bf9bb6fc893805ad20', 1, 1),
	(27, 'hello@sgfloorball.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@sgfloorball.sg', '', 'SG', 'SG Floorball', 'SAFRA JURONG CLUB, 333 Boon Lay Way, #3C-01, Singapore 649848', 'M', 'Partner', '68592131', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '1b60b69f2027b68e598a9e04ecb38886', 1, 1),
	(28, 'hello@puttputt.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@puttputt.sg', '', 'Putt', 'Putt Golf', '220 Turf Club Rd, 288001', 'M', 'Partner', '68593132', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'df6bcbb1095138d21a35523bbf4cc4a2', 1, 1),
	(29, 'hello@tinygolf.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@tinygolf.sg', '', 'Tiny', 'Tiny Golf', 'Bukit Batok Swimming Complex No. 2 Bukit Batok St.22 Singapore 659581', 'M', 'Partner', '68594133', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '8585d7e7953126843c6b162a73d7f042', 1, 1),
	(30, 'hello@totsmusic.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@totsmusic.sg', '', 'Tots', 'Music School', '1 Fusionopolis Way Connexis, #02-03, Singapore 138632', 'M', 'Partner', '68595134', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '80943781334d0197fbdeb7d2c1c80e3e', 1, 1),
	(31, 'hello@myschool.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@myschool.sg', '', 'My', 'Piano School', '391B Orchard Road, Ngee Ann City Tower B, #13-03, Singapore 238874', 'M', 'Partner', '68596135', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'd86ae6080f1bf9c02318981da7ff227a', 1, 1),
	(32, 'hello@musicisfun.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@musicisfun.sg', '', 'Music', 'is Fun', '528 Ang Mo Kio Ave 10 #02-2387 Singapore 560528 ', 'M', 'Partner', '68597136', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '26438b36adab4ed8333f43c13216d245', 1, 1),
	(33, 'hello@music.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@music.sg', '', 'SG', 'Music School', '180 Kitchener Road #01-02 Singapore 208539', 'M', 'Partner', '68598137', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '485a82c583d61440328cc0509e317e29', 1, 1),
	(34, 'hello@myschool.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@myschool.sg', '', 'My', 'Art School', '391B Orchard Road, Ngee Ann City Tower B, #13-03, Singapore 238874', 'M', 'Partner', '68599138', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'd86ae6080f1bf9c02318981da7ff227a', 1, 1),
	(35, 'hello@huaart.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@huaart.sg', '', 'Hua', 'Art House', '460 Alexandra Road, #03-03 Alexandra Retail Centre Singapore 119963', 'M', 'Partner', '68600139', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '85b7bee7e23cc55a9a0c250486ccf9a4', 1, 1),
	(36, 'hello@drawit.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@drawit.sg', '', 'Draw', 'Draw It', '1 Gold Hill Plaza Podium Bock, #03-27, Novena, Singapore-308899', 'M', 'Partner', '68601140', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '3955e7086a738eca7031bdda486b4177', 1, 1),
	(37, 'hello@art.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@art.sg', '', 'SG', 'Art School', ' 87-A Serangoon Garden Way, Serangoon Garden Estate, Singapore 555983', 'M', 'Partner', '68602141', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '8be08c3a86a181b334472c50569ed6e8', 1, 1),
	(38, 'hello@balletacademy.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@balletacademy.sg', '', 'Ballet', 'Ballet Academy', '101 Thomson Road #01-30, Singapore 307591', 'M', 'Partner', '68603142', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '5c3da14c0818f638b34f1549b5b15fa3', 1, 1),
	(39, 'hello@myschool.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@myschool.sg', '', 'My', 'Ballet School', '391B Orchard Road, Ngee Ann City Tower B, #13-03, Singapore 238874', 'M', 'Partner', '68604143', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'd86ae6080f1bf9c02318981da7ff227a', 1, 1),
	(40, 'hello@bigband.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@bigband.sg', '', 'Big', 'Band dance', 'City Square Mall, 180 Kitchener Road, #06-01, Singapore 208539', 'M', 'Partner', '68605144', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '13584b50213da2d1162d1a81d03a0800', 1, 1),
	(41, 'hello@sgballet.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@sgballet.sg', '', 'SG', 'Ballet School', '#04-00 Forum 583 Orchard Road Singapore 238884', 'M', 'Partner', '68606145', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '34409e43e67f8eb43b5c621045447e26', 1, 1),
	(42, 'hello@speakandlearn.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@speakandlearn.sg', '', 'Speak', 'and Learn', '10 Sengkang Central, Singapore 545061', 'M', 'Partner', '68607146', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '6a0a4c9324da079a37cd4ba4b6b97b4f', 1, 1),
	(43, 'hello@schoolhouse.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@schoolhouse.sg', '', 'Schoolhouse', 'Schoolhouse English', ' 167, Tanglin Road, Tanglin Mall, #03-11B, Singapore 247933', 'M', 'Partner', '68608147', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '1542dc14ff008a1028844e4af9a52dda', 1, 1),
	(44, 'hello@thedramaschool.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@thedramaschool.sg', '', 'The', 'Drama School', '1 Maritime Square #03-12, Harbourfront Centre, Singapore 099253', 'M', 'Partner', '68609148', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '14af7dc8b87696cd49b1eb0e5a1f806e', 1, 1),
	(45, 'hello@playforfun.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@playforfun.sg', '', 'Play', 'for Fun', '1 Maritime Square #03-09/10, Harbourfront Centre, Singapore 099253', 'M', 'Partner', '68610149', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '159800a143f11beaf75ed090fc4e693d', 1, 1),
	(46, 'hello@indooractivityhouse.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@indooractivityhouse.sg', '', 'Indoor', 'Activity House', '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(039596)', 'M', 'Partner', '68611150', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '607dafb93fb99347ae759d381c6b8029', 1, 1),
	(47, 'hello@babyseal.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@babyseal.sg', '', 'Baby', 'Seal Land', '1 Harbourfront Walk, VivoCity, 098585', 'M', 'Partner', '68612151', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'e5f3c60ddd2b22adc960f870a23c5df5', 1, 1),
	(48, 'hello@kidsland.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@kidsland.sg', '', 'Kids', 'Kids Land', '200 Turf Club Road, #02-04 Turf City, Singapore 287994', 'M', 'Partner', '68613152', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '4c40573906f25b454acd7cab55c93f77', 1, 1),
	(49, 'hello@snowcity.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@snowcity.sg', '', 'Snow', 'Snow City', ' 21 Jurong Town Hall Rd, 609433', 'M', 'Partner', '68614153', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '68783a9aab6867c2b6483942f6ecfb0b', 1, 1),
	(50, 'hello@atomicland.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@atomicland.sg', '', 'Atomic', 'Atomic Land', 'Ang Mo Kio Ave 3, AMK Hub, Singapore 569933', 'M', 'Partner', '68615154', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '1402d07bcca485934618009278abc840', 1, 1),
	(51, 'hello@101cookingschool.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@101cookingschool.sg', '', '101', 'Cooking School', '116 Changi Road, WIS @ Changi, #02-08 , Singapore 419718', 'M', 'Partner', '68616155', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '5caee8f0bfb4ee562f149394c8e8d37b', 1, 1),
	(52, 'hello@mybake.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@mybake.sg', '', 'My', 'Bake School', '#03-03/04 OneKM Shopping Mall, 11 Tanjong Katong Road, S(437157)', 'M', 'Partner', '68617156', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, 'e188ee34f356b5362455697e2c10dfe9', 1, 1),
	(53, 'hello@scriptkiddiez.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@scriptkiddiez.sg', '', 'Script', 'Script Kiddiez', '2 Tampines Central 6 , NTUC Income Tampines Point, #06-02, Singapore 529483', 'M', 'Partner', '68618157', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '4b67e60bda7e98a7d6eeef8676ae8c13', 1, 1),
	(54, 'hello@letitgo.sg', 'e10adc3949ba59abbe56e057f20f883e', 'hello@letitgo.sg', '', 'Let', 'Lego ', '81 Clemenceau Avenue, #02-12 UE Square, Singapore 239917', 'M', 'Partner', '68619158', '', 0, '2015-11-28 06:45:20', '0000-00-00 00:00:00', 0, 1, '92849f39f5eb9b7c532ece61e64c1f20', 1, 1),
	(58, 'anibaryachetona@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'anibaryachetona@gmail.com', '5269-12232808_1650393118543449_1177906952355104707_o.jpg', 'swati ', 'Dey', 'Kolkata', 'M', 'Customer', '8981895909', '8697488102', 55555, '2015-11-28 11:54:31', '0000-00-00 00:00:00', 0, 1, 'c3dhdGkgJGFuaWJhcnlhY2hldG9uYUBnbWFpbC5jb20=', 0, 0),
	(59, 'ramen48822@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'ramen48822@gmail.com', '', 'Ramen', 'Dey', '', 'M', 'Customer', '', '777777777', 0, '2015-12-18 22:19:21', '0000-00-00 00:00:00', 0, 0, 'UmFtZW4kcmFtZW40ODgyMkBnbWFpbC5jb20=', 0, 0);
/*!40000 ALTER TABLE `at_users` ENABLE KEYS */;


-- Dumping structure for table activity.at_users_child
DROP TABLE IF EXISTS `at_users_child`;
CREATE TABLE IF NOT EXISTS `at_users_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ID',
  `child_name` varchar(255) DEFAULT NULL COMMENT 'ID',
  `child_age` varchar(255) DEFAULT NULL COMMENT 'ID',
  `added` datetime DEFAULT NULL COMMENT 'ID',
  `modified` datetime DEFAULT NULL COMMENT 'ID',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_users_child: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_users_child` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_users_child` ENABLE KEYS */;


-- Dumping structure for table activity.partner_import
DROP TABLE IF EXISTS `partner_import`;
CREATE TABLE IF NOT EXISTS `partner_import` (
  `Id` int(11) NOT NULL,
  `PartnerName` varchar(255) NOT NULL DEFAULT '0',
  `Address` varchar(255) NOT NULL DEFAULT '0',
  `Email` varchar(255) NOT NULL DEFAULT '0',
  `Phone` varchar(255) NOT NULL DEFAULT '0',
  `ActivitiesCategory` varchar(255) NOT NULL DEFAULT '0',
  `Activity` varchar(255) NOT NULL DEFAULT '0',
  `Description` varchar(255) NOT NULL DEFAULT '0',
  `Logo` varchar(255) NOT NULL DEFAULT '0',
  `gId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`gId`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- Dumping data for table activity.partner_import: ~36 rows (approximately)
/*!40000 ALTER TABLE `partner_import` DISABLE KEYS */;
INSERT INTO `partner_import` (`Id`, `PartnerName`, `Address`, `Email`, `Phone`, `ActivitiesCategory`, `Activity`, `Description`, `Logo`, `gId`) VALUES
	(1, 'Read a Loud', '81 Clemenceau Avenue||| #02-11 UE Square Mall||| Singapore 239917', 'hello@readaloud.sg', '68584123', 'Study', 'English||| Maths', 'Enrichment centre for children for all subjects', '', 19),
	(2, 'Mega Maths', '87 Marine Parade Central #02-500B||| Singapore 440087', 'hello@megamaths.sg', '68585124', 'Study', 'Maths', 'Maths enrichment centre', '', 20),
	(3, 'Huayu Tuition ', '35 Rochester Drive||| #03-01 Rochester Mall||| Singapore 138639', 'hello@huayu.sg', '68586125', 'Study', 'Chinese', 'The top Chinese tuition centre in Singapore', '', 21),
	(4, 'Super Method Training', '180 Kitchener Road #B2-02 Singapore 208539', 'hello@supermethod.sg', '68587126', 'Study', 'Brain Training', 'Right brain training for kids of all ages', '', 22),
	(5, 'Super Brain', '101 Thomson Road #01-20/27||| Singapore 307591', 'hello@superbrain.sg', '68588127', 'Study', 'Brain Training', 'Train your brain and improve your grades', '', 23),
	(6, 'Swim Faster', '1771 Ang Mo Kio Ave 1 Singapore 569978', 'hello@swimfaster.sg', '68589128', 'Sports', 'Swimming', 'Swimming classes for all ages', '', 24),
	(7, 'Garden Skating', ' 338 Ang Mo Kio Ave 1||| 560338', 'hello@gardenskating.sg', '68590129', 'Sports', 'Inline Skating', 'Inline skating in the park for beginners to advanced skaters', '', 25),
	(8, 'Tennis R Us', '220 Turf Club Rd||| 288001', 'hello@tennisrus.sg', '68591130', 'Sports', 'Tennis', 'Tennis school for children', '', 26),
	(9, 'SG Floorball', 'SAFRA JURONG CLUB||| 333 Boon Lay Way||| #3C-01||| Singapore 649848', 'hello@sgfloorball.sg', '68592131', 'Sports', 'Floorball', 'Singapore floorball association classes', '', 27),
	(10, 'Putt Putt Golf', '220 Turf Club Rd||| 288001', 'hello@puttputt.sg', '68593132', 'Sports', 'Mini Golf', 'Minature golf for all ages', '', 28),
	(11, 'Tiny Golf', 'Bukit Batok Swimming Complex No. 2 Bukit Batok St.22 Singapore 659581', 'hello@tinygolf.sg', '68594133', 'Sports', 'Golf', 'Kids golf lessons', '', 29),
	(12, 'Tots Music School', '1 Fusionopolis Way Connexis||| #02-03||| Singapore 138632', 'hello@totsmusic.sg', '68595134', 'Music', 'Music and Movement', 'Music and movement classes for children', '', 30),
	(13, 'My Piano School', '391B Orchard Road||| Ngee Ann City Tower B||| #13-03||| Singapore 238874', 'hello@myschool.sg', '68596135', 'Music', 'Piano', 'Learn to play the piano ', '', 31),
	(14, 'Music is Fun', '528 Ang Mo Kio Ave 10 #02-2387 Singapore 560528 ', 'hello@musicisfun.sg', '68597136', 'Music', 'Music and Movement', 'Music for all', '', 32),
	(15, 'SG Music School', '180 Kitchener Road #01-02 Singapore 208539', 'hello@music.sg', '68598137', 'Music', 'Guitar||| Piano||| Drums', 'Classes for all music instruments for children', '', 33),
	(16, 'My Art School', '391B Orchard Road||| Ngee Ann City Tower B||| #13-03||| Singapore 238874', 'hello@myschool.sg', '68599138', 'Art', 'Art', 'We are the specialist in art for children ', '', 34),
	(17, 'Hua Art House', '460 Alexandra Road||| #03-03 Alexandra Retail Centre Singapore 119963', 'hello@huaart.sg', '68600139', 'Art', 'Chinese Art', 'Learn chinese art and calligraphy', '', 35),
	(18, 'Draw It', '1 Gold Hill Plaza Podium Bock||| #03-27||| Novena||| Singapore-308899', 'hello@drawit.sg', '68601140', 'Art', 'Cartoon Drawing', 'Cartoon drawing techniques for children', '', 36),
	(19, 'SG Art School', ' 87-A Serangoon Garden Way||| Serangoon Garden Estate||| Singapore 555983', 'hello@art.sg', '68602141', 'Art', 'Painting', 'Art for all', '', 37),
	(20, 'Ballet Academy', '101 Thomson Road #01-30||| Singapore 307591', 'hello@balletacademy.sg', '68603142', 'Dance', 'Ballet||| modern dance', 'Ballet and other dance classes for children', '', 38),
	(21, 'My Ballet School', '391B Orchard Road||| Ngee Ann City Tower B||| #13-03||| Singapore 238874', 'hello@myschool.sg', '68604143', 'Dance', 'Ballet', 'The ballet specialist with professional trainers', '', 39),
	(22, 'Big Band dance', 'City Square Mall||| 180 Kitchener Road||| #06-01||| Singapore 208539', 'hello@bigband.sg', '68605144', 'Dance', 'Kpop Dance', 'Oppa Gangnam style', '', 40),
	(23, 'SG Ballet School', '#04-00 Forum 583 Orchard Road Singapore 238884', 'hello@sgballet.sg', '68606145', 'Dance', 'Ballet', 'Ballet dancing lessons', '', 41),
	(24, 'Speak and Learn', '10 Sengkang Central||| Singapore 545061', 'hello@speakandlearn.sg', '68607146', 'Drama', 'Speech', 'Learn to speak in english', '', 42),
	(25, 'Schoolhouse English', ' 167||| Tanglin Road||| Tanglin Mall||| #03-11B||| Singapore 247933', 'hello@schoolhouse.sg', '68608147', 'Drama', 'Drama', 'Learn english through drama lessons for children', '', 43),
	(26, 'The Drama School', '1 Maritime Square #03-12||| Harbourfront Centre||| Singapore 099253', 'hello@thedramaschool.sg', '68609148', 'Drama', 'Drama', 'Act and learn', '', 44),
	(27, 'Play for Fun', '1 Maritime Square #03-09/10||| Harbourfront Centre||| Singapore 099253', 'hello@playforfun.sg', '68610149', 'Play', 'Playground', 'The largest indoor playground in Singapore', '', 45),
	(28, 'Indoor Activity House', '9 Raffles Boulevard #02-26/27/28 Millenia Walk S(039596)', 'hello@indooractivityhouse.sg', '68611150', 'Play', 'Playground', 'Indoor playground and activities for children', '', 46),
	(29, 'Baby Seal Land', '1 Harbourfront Walk||| VivoCity||| 098585', 'hello@babyseal.sg', '68612151', 'Play', 'Playground', 'The only arctic playground in Singapore', '', 47),
	(30, 'Kids Land', '200 Turf Club Road||| #02-04 Turf City||| Singapore 287994', 'hello@kidsland.sg', '68613152', 'Play', 'Playground', 'Kidsland adventure park!', '', 48),
	(31, 'Snow City', ' 21 Jurong Town Hall Rd||| 609433', 'hello@snowcity.sg', '68614153', 'Play', 'Playground', 'Snow city is the only place in Singapore wth snow!', '', 49),
	(32, 'Atomic Land', 'Ang Mo Kio Ave 3||| AMK Hub||| Singapore 569933', 'hello@atomicland.sg', '68615154', 'Play', 'Playground', 'Have fun and games at atomic land', '', 50),
	(33, '101 Cooking School', '116 Changi Road||| WIS @ Changi||| #02-08 ||| Singapore 419718', 'hello@101cookingschool.sg', '68616155', 'Others', 'Cooking', 'Learn to cook ', '', 51),
	(34, 'My Bake School', '#03-03/04 OneKM Shopping Mall||| 11 Tanjong Katong Road||| S(437157)', 'hello@mybake.sg', '68617156', 'Others', 'Cooking', 'Cooking and baking classes for kids and parents', '', 52),
	(35, 'Script Kiddiez', '2 Tampines Central 6 ||| NTUC Income Tampines Point||| #06-02||| Singapore 529483', 'hello@scriptkiddiez.sg', '68618157', 'Others', 'Computer Coding', 'Learn to code the next facebook', '', 53),
	(36, 'Let it Go Lego ', '81 Clemenceau Avenue||| #02-12 UE Square||| Singapore 239917', 'hello@letitgo.sg', '68619158', 'Others', 'Lego', 'Lego building activities for children', '', 54);
/*!40000 ALTER TABLE `partner_import` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
