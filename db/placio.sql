-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-06-26 10:23:53
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table placio.tbl_places
CREATE TABLE IF NOT EXISTS `tbl_places` (
  `place_id` int(10) NOT NULL AUTO_INCREMENT,
  `place` varchar(160) NOT NULL,
  `description` varchar(200) NOT NULL,
  `lat` float(15,11) NOT NULL,
  `lng` float(15,11) NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table placio.tbl_places: ~37 rows (approximately)
/*!40000 ALTER TABLE `tbl_places` DISABLE KEYS */;
INSERT INTO `tbl_places` (`place_id`, `place`, `description`, `lat`, `lng`) VALUES
	(1, 'Don Flores Street', 'Our House', 16.61079597473, 120.31364440918),
	(2, 'La Union National HighSchool', 'School', 16.61190605164, 120.31490325928),
	(3, 'Lorma Colleges', 'Campus', 16.63255119324, 120.31827545166),
	(4, 'Mabini Street', 'Cool', 0.00000000000, 0.00000000000),
	(5, 'Azumi', 'Gifts', 16.61169052124, 120.31639099121),
	(6, 'Philippine National Library', 'Lib', 14.58141899109, 120.97879028320),
	(7, 'Resort de Marea', 'Resort', 0.00000000000, 0.00000000000),
	(8, 'Aparri Park', 'Park', 0.00000000000, 0.00000000000),
	(9, 'Aparri Gift Shop', 'Giffy', 18.35522270203, 121.64112091064),
	(10, 'ner', 'ndd', 16.60992050171, 120.31733703613),
	(11, 'nerd', 'ndde', 16.60992050171, 120.31733703613),
	(12, 'LTO', 'BOOM', 16.60935592651, 120.31853485107),
	(13, 'Mabini', 'Street', 16.60958290100, 120.31026458740),
	(14, 'Gifted Learning Center', 'Elementary', 16.61443519592, 120.31420135498),
	(15, '', '', 18.35827827454, 121.63744354248),
	(16, '', '', 18.35827827454, 121.63744354248),
	(17, '', '', 18.35827827454, 121.63744354248),
	(18, '', '', 18.35827827454, 121.63744354248),
	(19, '', '', 18.35827827454, 121.63744354248),
	(20, 'DEPED', 'Decs', 16.61068916321, 120.31460571289),
	(21, 'DMMMSU-MLUC', 'High', 16.60743331909, 120.31509399414),
	(22, 'Saint Jude Parish', 'Parish', 16.60577774048, 120.30677032471),
	(23, 'BSP', 'Banko', 16.61124801636, 120.31763458252),
	(24, 'LTO', 'LOL', 16.60936737061, 120.31843566895),
	(25, 'McDo', 'Sarap', 16.60984992981, 120.31668090820),
	(26, 'NEDA', 'A', 16.61197853088, 120.31755828857),
	(27, 'Hero Hill', 'bam', 16.61228561401, 120.31758117676),
	(28, 'Ice Cream House', 'Oyeah', 16.60902786255, 120.31671142578),
	(29, 'STI', 'Yeah', 16.60865783691, 120.31843566895),
	(30, 'Metro Water', 'District', 16.61062049866, 120.31732940674),
	(31, 'Gualberto', 'Street', 16.61171150208, 120.31303405762),
	(32, 'Aparri Park', 'I was playing here when I was a kid', 0.00000000000, 18.35738563538),
	(33, 'Aparri Park', 'I was playing here when I was a kid', 0.00000000000, 18.35718154907),
	(34, 'mabini ilocos', 'boom', 0.00000000000, 16.06972312927),
	(35, 'PPC', 'Post Office', 0.00000000000, 16.61108398438),
	(36, 'Aparri Park', 'I was playing here when I was a kid', 18.35738563538, 121.63749694824),
	(37, 'DMMMSU IT', 'Awesome', 16.60680580139, 120.31716156006);
/*!40000 ALTER TABLE `tbl_places` ENABLE KEYS */;


-- Dumping structure for table placio.tbl_userplaces
CREATE TABLE IF NOT EXISTS `tbl_userplaces` (
  `userplace_id` int(10) NOT NULL AUTO_INCREMENT,
  `place_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`userplace_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table placio.tbl_userplaces: ~37 rows (approximately)
/*!40000 ALTER TABLE `tbl_userplaces` DISABLE KEYS */;
INSERT INTO `tbl_userplaces` (`userplace_id`, `place_id`, `user_id`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1),
	(6, 6, 1),
	(7, 7, 1),
	(8, 8, 1),
	(9, 9, 1),
	(10, 10, 1),
	(11, 11, 1),
	(12, 12, 1),
	(13, 13, 1),
	(14, 14, 1),
	(15, 15, 1),
	(16, 16, 1),
	(17, 17, 1),
	(18, 18, 1),
	(19, 19, 1),
	(20, 20, 1),
	(21, 21, 1),
	(22, 22, 1),
	(23, 23, 1),
	(24, 24, 1),
	(25, 25, 1),
	(26, 26, 1),
	(27, 27, 1),
	(28, 28, 1),
	(29, 29, 1),
	(30, 30, 1),
	(31, 31, 1),
	(32, 32, 1),
	(33, 33, 1),
	(34, 34, 1),
	(35, 35, 1),
	(36, 36, 1),
	(37, 37, 1);
/*!40000 ALTER TABLE `tbl_userplaces` ENABLE KEYS */;


-- Dumping structure for table placio.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `hashed_password` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table placio.tbl_users: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`user_id`, `email`, `hashed_password`) VALUES
	(1, 'vbdotnetnrew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
