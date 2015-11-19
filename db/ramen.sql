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

-- Dumping structure for table activity.at_activity
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


-- Dumping structure for table activity.at_banner
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
	(1, 'HOW IT WORKS', '7927-Intro 1.jpg', 'Find something new for your child to do today.\r\nActivityhere is a platform which gives you access to enrichment classes, sports, activities and fun for your children, allowing them to try and discover new activities every day.\r\n', '', NULL, NULL, 'Y', '2015-11-09 08:10:31', '2015-11-09 09:15:36'),
	(2, 'GET STARTED NOW', '1881-Intro 2.jpg', 'Let your child discover a new skill\r\n\r\nJoin us to discover new interests for your children and let them learn new skills. Access a diverse network of schools and activities. Registration is free. Reserve classes and activities with just one click.\r\n', '', NULL, NULL, 'Y', '2015-11-09 08:52:56', '2015-11-09 09:16:09'),
	(3, 'JOIN US AS A PARTNER', '2249-Intro 3.jpg', 'Reach out to parents who are looking for new learning experiences for their children\r\n\r\nActivityhere is simple reservation platform for your children classes and activities. We bring you new clients, marketing and brand awareness. Join us as a partner today.\r\n', '', NULL, NULL, 'Y', '2015-11-09 08:54:13', '2015-11-09 09:16:52');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_membership_info: ~1 rows (approximately)
/*!40000 ALTER TABLE `at_membership_info` DISABLE KEYS */;
INSERT INTO `at_membership_info` (`id`, `payment_c_date`, `todate`, `fromdate`, `membership_title`, `user_id`, `membership_note`) VALUES
	(1, '2015-11-17 22:35:17', '2015-11-17 22:35:17', '2015-11-17 22:35:17', 'Paid', 16, 'Note');
/*!40000 ALTER TABLE `at_membership_info` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_pages: ~7 rows (approximately)
/*!40000 ALTER TABLE `at_pages` DISABLE KEYS */;
INSERT INTO `at_pages` (`id`, `page_name`, `page_slug`, `page_description`, `created`, `modified`) VALUES
	(5, 'About Us', 'about_us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, risus non luctus malesuada, mauris odio aliquet neque, nec egestas arcu lorem volutpat purus. Aenean ac urna vel leo consequat sagittis vitae sed velit. Aliquam consectetur, dui quis venenatis molestie, ipsum eros vulputate enim, nec molestie nisl quam quis justo. Nam libero lacus, porttitor et felis ac, faucibus malesuada massa. Donec vel nisl in sapien molestie consectetur quis convallis lorem. Pellentesque id nisi vitae risus suscipit tempus. Vestibulum nisl enim, luctus eget ornare in, tristique at lacus.</p>\r\n\r\n<p>Nullam placerat ante ac commodo pharetra. Praesent feugiat, diam vestibulum volutpat facilisis, quam odio elementum ligula, nec maximus elit urna vitae velit. Morbi dictum, arcu in egestas tempus, mi lectus tempus ante, sed blandit nulla risus sed purus. Cras faucibus eleifend aliquet. Aliquam eget finibus lorem, eget pulvinar dolor. Praesent vehicula imperdiet massa in tempor. Suspendisse potenti. Fusce feugiat dictum sapien, id luctus neque dictum quis. In aliquet in leo in varius. Nulla egestas condimentum justo a hendrerit. Donec lacinia tristique massa eu lobortis. Donec maximus vel dolor ut sollicitudin. Aliquam erat volutpat. Suspendisse eu vehicula magna.</p>\r\n\r\n<p>Aliquam sollicitudin vulputate bibendum. Quisque tellus massa, commodo sit amet lacus vel, porttitor tristique magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, erat a placerat auctor, mauris lorem mollis elit, eget vehicula quam arcu tempor arcu. Aliquam sed pulvinar dolor. Nunc sollicitudin efficitur luctus. Praesent arcu nunc, lobortis eu purus in, auctor pulvinar mi. In sed purus nec ipsum molestie vehicula. Phasellus eros lectus, ullamcorper in tincidunt sit amet, elementum quis leo. Phasellus ac sem hendrerit, volutpat lorem sed, pulvinar nisi. Morbi eu augue sagittis, tristique ligula vel, interdum metus. Cras a consequat ligula, a venenatis dui.</p>\r\n\r\n<p>Suspendisse et mauris eleifend, sollicitudin est a, finibus nisi. In in mauris eget metus venenatis pellentesque. Donec metus dui, lacinia porta lobortis ut, varius at lectus. Sed id purus gravida, aliquam leo non, tempus elit. Nunc egestas malesuada nibh faucibus porttitor. Proin mollis magna at justo aliquet vehicula. In eleifend metus ex, nec volutpat enim sagittis vel. Phasellus convallis non tellus vitae maximus. Donec congue sem dolor, in ullamcorper quam sodales at. Nullam pharetra vestibulum felis, sit amet ornare nisi. Ut leo tortor, rhoncus in condimentum vitae, porttitor at leo. Aliquam a consequat velit.</p>\r\n', '2015-11-05 09:33:48', '2015-11-05 09:33:48'),
	(6, 'Press', 'press', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, risus non luctus malesuada, mauris odio aliquet neque, nec egestas arcu lorem volutpat purus. Aenean ac urna vel leo consequat sagittis vitae sed velit. Aliquam consectetur, dui quis venenatis molestie, ipsum eros vulputate enim, nec molestie nisl quam quis justo. Nam libero lacus, porttitor et felis ac, faucibus malesuada massa. Donec vel nisl in sapien molestie consectetur quis convallis lorem. Pellentesque id nisi vitae risus suscipit tempus. Vestibulum nisl enim, luctus eget ornare in, tristique at lacus.</p>\r\n\r\n<p>Nullam placerat ante ac commodo pharetra. Praesent feugiat, diam vestibulum volutpat facilisis, quam odio elementum ligula, nec maximus elit urna vitae velit. Morbi dictum, arcu in egestas tempus, mi lectus tempus ante, sed blandit nulla risus sed purus. Cras faucibus eleifend aliquet. Aliquam eget finibus lorem, eget pulvinar dolor. Praesent vehicula imperdiet massa in tempor. Suspendisse potenti. Fusce feugiat dictum sapien, id luctus neque dictum quis. In aliquet in leo in varius. Nulla egestas condimentum justo a hendrerit. Donec lacinia tristique massa eu lobortis. Donec maximus vel dolor ut sollicitudin. Aliquam erat volutpat. Suspendisse eu vehicula magna.</p>\r\n\r\n<p>Aliquam sollicitudin vulputate bibendum. Quisque tellus massa, commodo sit amet lacus vel, porttitor tristique magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, erat a placerat auctor, mauris lorem mollis elit, eget vehicula quam arcu tempor arcu. Aliquam sed pulvinar dolor. Nunc sollicitudin efficitur luctus. Praesent arcu nunc, lobortis eu purus in, auctor pulvinar mi. In sed purus nec ipsum molestie vehicula. Phasellus eros lectus, ullamcorper in tincidunt sit amet, elementum quis leo. Phasellus ac sem hendrerit, volutpat lorem sed, pulvinar nisi. Morbi eu augue sagittis, tristique ligula vel, interdum metus. Cras a consequat ligula, a venenatis dui.</p>\r\n\r\n<p>Suspendisse et mauris eleifend, sollicitudin est a, finibus nisi. In in mauris eget metus venenatis pellentesque. Donec metus dui, lacinia porta lobortis ut, varius at lectus. Sed id purus gravida, aliquam leo non, tempus elit. Nunc egestas malesuada nibh faucibus porttitor. Proin mollis magna at justo aliquet vehicula. In eleifend metus ex, nec volutpat enim sagittis vel. Phasellus convallis non tellus vitae maximus. Donec congue sem dolor, in ullamcorper quam sodales at. Nullam pharetra vestibulum felis, sit amet ornare nisi. Ut leo tortor, rhoncus in condimentum vitae, porttitor at leo. Aliquam a consequat velit.</p>\r\n', '2015-11-05 09:34:20', '2015-11-05 09:34:20'),
	(7, 'FAQ', 'faq', '<p><strong>What is activityhere?</strong></p>\r\n\r\n<p>We are a platform which gives you one-stop access to children enrichment classes, dance, sports and many other fun activities for your kids, allowing them to discover new skills every day. We believe in allowing our kids to try as many activities as possible to let them explore their passions and learn new skills.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What do I get by registering as a member with activityhere?</strong></p>\r\n\r\n<p>Membership is free and you get to register for as many free trial classes and activities organized by various schools and trainers. Paid members get access to all the listed free and paid activities happening daily. Browse through the schedule and activities and discover something new for your child to learn every day. The schedule is constantly updated with new classes and activities and reservations are on a first come first serve basis for activities with limited slots.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What activities and classes are available?</strong></p>\r\n\r\n<p>We will work with partners to constantly provide new class schedules and activities to add to the list. Paid members will have access to all listed activities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How do I join activityhere?</strong></p>\r\n\r\n<p>To become a member of activityhere, all you need to do is register via our registration page [link to registration page] and you can start booking classes for your children immediately with just a few clicks.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>When does my membership start if I am a paying customer?</strong></p>\r\n\r\n<p>Your membership is active immediately upon payment so you can start booking classes right away.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Do I have to reserve my classes in advance?</strong></p>\r\n\r\n<p>You have to reserve the activities and classes in advance. Some of the activities have limited slots so reservation is on a first come first serve basis.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How do I reserve an activity?</strong></p>\r\n\r\n<p>You can reserve an activity by searching or browsing through the list of activities listed on the activity page. If you find an activity that is interesting that suits your schedule, you can click on the activity to find out more details of the activity and click on the reserve button to confirm. Bring along a copy of the reservation confirmation email or show the activity confirmation page. If you are not a paying member, paid classes will be available immediately upon joining.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The activity that was listed earlier is not available anymore, what should I do?</strong></p>\r\n\r\n<p>Certain activities have limited slots so if demand is high, reservations would close on a first come first serve basis. Some activities are listed with multiple time slots, so do check if you are available for another slot. You can also contact us at hello@activityhere.com to let us know if you missed an activity so that we can work with our partners to introduce more slots for the activity in future.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What should I do if I need to cancel a reserved activity?</strong></p>\r\n\r\n<p>Each activity has different cancellation policies so do check your reservation email for the deadlines to cancel the activities. The standard cancellation policy is 4 hours prior to the class for cancellation. Some classes have different cancellation policies but these will be disclosed upon when you book the class. Kindly make sure that you cancel before the deadlines to avoid the late cancellation as a late cancellation will still be counted as completed activity. The cancellation policy is required as our partners require advanced notice to manage their class schedules.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To cancel your reservation</p>\r\n\r\n<ol>\r\n	<li>Go to your membership section[link to Dashboard]</li>\r\n	<li>Click on activities tab</li>\r\n	<li>Click on cancel reservation for the selected activity</li>\r\n	<li>Confirm that you want the reservation cancelled</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How much does a membership cost?</strong></p>\r\n\r\n<p>Registration is free for all users to get access to all free trial classes. This allows the member to experience as many different trial activities as possible and decide on activities that interest their children.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For paid classes and activities, the cost of membership is S$79 for 4 activities a month S$179 for 10 activities a month. Paying members also have access to all free trial classes and premium activities listed. Membership is automatically renewed on a monthly basis and as long as you remain a paying member, the unutilized activities can be carried forward to the next month.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What is the billing cycle for paying members?</strong></p>\r\n\r\n<p>A paying membership last for 30 days and will only be renewed on the same day each month. For example if you join as a paying member on November 10, your membership will be renewed on December 10.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How many classes can I reserve for my child with the membership?</strong></p>\r\n\r\n<p>Depending on the membership type and the type of activities attended, you can attend as many activities. Most classes would count as 1 activity per session but certain classes may count for more than 1 activity per session.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Do I get a receipt for my membership with activityhere?</strong></p>\r\n\r\n<p>Yes, you can view your monthly payment receipt in your membership section.[link to Dashboard]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Can I book an activity for more than 1 child?</strong></p>\r\n\r\n<p>Yes, you may book any activity for more than 1 child as long as you register the child under your membership. Registration of an activity for each child would count as one single activity booking.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>How do I know what to bring to each activity for my child?</strong></p>\r\n\r\n<p>If there are any requirements to bring equipment or supplies for any activity, the detailed description of the activity will list out the requirements. For example, indoor playgrounds typically require usage of socks so a listing would indicate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Can I cancel my activityhere membership?</strong></p>\r\n\r\n<p>Yes, you can cancel your paying membership at any time and will be downgraded to a non-paying member immediately. You will not be charged but can only book free trial classes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Which schools offer classes on activityhere?</strong></p>\r\n\r\n<p>Activityhere constantly updates the schools and activities available on the list. You can view a list of the partners and activities here. [link to partner location page] We hope to add more partners on a frequent basis. If you like a school or play area that is currently not available, do let us know at hello@activityhere.com.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Is there an app for activityhere?</strong></p>\r\n\r\n<p>Activityhere is currently only available on the web but we plan on launching apps for both iOS and Android.&nbsp;</p>\r\n', '2015-11-05 09:38:21', '2015-11-11 04:36:55'),
	(8, 'Terms', 'terms', '<p><strong>Lorem Ipsum</strong><span style="font-family:arial,helvetica,sans; font-size:11px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2015-11-06 19:41:48', '2015-11-06 19:41:48'),
	(9, 'Privacy and Security', 'privacy_and_security', '<p><strong>Lorem Ipsum</strong><span style="font-family:arial,helvetica,sans; font-size:11px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2015-11-06 19:42:26', '2015-11-06 19:42:26'),
	(10, 'Interested in                             Partnership', 'interested_in_____________________________partnership', '<p><strong>Lorem Ipsum</strong><span style="font-family:arial,helvetica,sans; font-size:11px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2015-11-06 19:42:48', '2015-11-06 19:42:48'),
	(11, 'How it Works', 'how_it_works', '<p><strong>Lorem Ipsum</strong><span style="font-family:arial,helvetica,sans; font-size:11px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2015-11-06 19:43:50', '2015-11-06 19:43:50');
/*!40000 ALTER TABLE `at_pages` ENABLE KEYS */;


-- Dumping structure for table activity.at_partner_activity
CREATE TABLE IF NOT EXISTS `at_partner_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `activity_type_id` int(11) NOT NULL DEFAULT '0',
  `age_range` varchar(50) NOT NULL DEFAULT '0',
  `activity_date` date DEFAULT NULL,
  `activity_time` varchar(50) NOT NULL DEFAULT '0',
  `is_paid` enum('Y','N') NOT NULL DEFAULT 'N',
  `price` float NOT NULL DEFAULT '0',
  `address` float NOT NULL DEFAULT '0',
  `created` datetime NOT NULL COMMENT 'Create At',
  `createdby` int(11) NOT NULL DEFAULT '0' COMMENT 'Created By',
  `modifiedby` int(11) NOT NULL DEFAULT '0' COMMENT 'Modified By',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_partner_activity: ~0 rows (approximately)
/*!40000 ALTER TABLE `at_partner_activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_partner_activity` ENABLE KEYS */;


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
  `site_email_from` varchar(255) DEFAULT NULL,
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
INSERT INTO `at_site_settings` (`id`, `site_address`, `site_phone`, `site_email`, `site_email_from`, `site_fb`, `site_gplus`, `site_twitter`, `site_paypal_business_email`, `site_paypal_secrect`, `site_paypal_authid`) VALUES
	(1, 'Test address', '', 'hello@activityhere.com', NULL, '', '', '', '', '', '');
/*!40000 ALTER TABLE `at_site_settings` ENABLE KEYS */;


-- Dumping structure for table activity.at_users
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table activity.at_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `at_users` DISABLE KEYS */;
INSERT INTO `at_users` (`id`, `username`, `password`, `email`, `profilepic`, `firstname`, `lastname`, `address1`, `sex`, `user_type`, `office_phone`, `home_phone`, `zipcode`, `create_at`, `lastvisit_at`, `superuser`, `status`, `verification`, `createdby`, `modifiedby`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '', '', '', 'Kolkata', 'M', 'Customer', '', '', 712233, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, NULL, 0, 0),
	(16, 'ramen488@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ramen488@gmail.com', '', 'Ramen', 'Dey', '', 'M', 'Customer', '', '88888', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 'UmFtZW4kcmFtZW40ODhAZ21haWwuY29t', 0, 0);
/*!40000 ALTER TABLE `at_users` ENABLE KEYS */;


-- Dumping structure for table activity.at_users_child
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
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
