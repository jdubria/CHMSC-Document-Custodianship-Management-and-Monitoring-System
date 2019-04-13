-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for itdcstts
CREATE DATABASE IF NOT EXISTS `itdcstts` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `itdcstts`;

-- Dumping structure for table itdcstts.course
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.course: ~2 rows (approximately)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`course_id`, `course_name`, `major`, `active`) VALUES
	(1, 'Bachelor of Science in Information Technology', 'N/A', 1),
	(2, 'Bachelor of Science in Industrial Technology', 'Computer Technology', 1);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;

-- Dumping structure for table itdcstts.course_year
CREATE TABLE IF NOT EXISTS `course_year` (
  `course_year_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`course_year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.course_year: ~14 rows (approximately)
/*!40000 ALTER TABLE `course_year` DISABLE KEYS */;
INSERT INTO `course_year` (`course_year_id`, `course_id`, `year_id`, `section`, `active`) VALUES
	(1, 1, 1, 1, 1),
	(2, 1, 1, 2, 1),
	(3, 1, 2, 1, 1),
	(4, 1, 2, 2, 1),
	(5, 1, 3, 1, 1),
	(6, 1, 3, 2, 1),
	(7, 1, 4, 1, 1),
	(8, 1, 4, 2, 1),
	(9, 2, 1, 1, 1),
	(10, 2, 1, 2, 1),
	(11, 2, 2, 1, 1),
	(12, 2, 2, 2, 1),
	(13, 2, 3, 1, 1),
	(14, 2, 3, 2, 1),
	(15, 2, 4, 1, 1),
	(16, 2, 4, 2, 1);
/*!40000 ALTER TABLE `course_year` ENABLE KEYS */;

-- Dumping structure for table itdcstts.day
CREATE TABLE IF NOT EXISTS `day` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(50) NOT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.day: ~5 rows (approximately)
/*!40000 ALTER TABLE `day` DISABLE KEYS */;
INSERT INTO `day` (`day_id`, `day`) VALUES
	(1, 'Monday'),
	(2, 'Tuesday'),
	(3, 'Wednesday'),
	(4, 'Thursday'),
	(5, 'Friday');
/*!40000 ALTER TABLE `day` ENABLE KEYS */;

-- Dumping structure for table itdcstts.default
CREATE TABLE IF NOT EXISTS `default` (
  `default_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_id` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  PRIMARY KEY (`default_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.default: ~0 rows (approximately)
/*!40000 ALTER TABLE `default` DISABLE KEYS */;
INSERT INTO `default` (`default_id`, `sem_id`, `sy_id`) VALUES
	(1, 1, 1);
/*!40000 ALTER TABLE `default` ENABLE KEYS */;

-- Dumping structure for table itdcstts.faculty
CREATE TABLE IF NOT EXISTS `faculty` (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `facode_id` varchar(50) NOT NULL,
  `fac_name` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.faculty: ~3 rows (approximately)
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` (`fac_id`, `facode_id`, `fac_name`, `active`) VALUES
	(1, 'MJA12011100', 'Maningo Jr., Jose Armin G.', 1),
	(2, 'VJE12011101', 'Villanueva, Joken E.', 1),
	(3, 'CAG12011102', 'Calvez, Arque G. ', 1),
	(4, 'TRP12011104', 'Tanate, Romeo P.', 1);
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;

-- Dumping structure for table itdcstts.room
CREATE TABLE IF NOT EXISTS `room` (
  `roomid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_course` varchar(50) NOT NULL,
  `occupied` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`roomid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.room: ~7 rows (approximately)
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` (`roomid`, `name`, `room_type`, `room_course`, `occupied`, `active`) VALUES
	(1, 'Lab 1', 'Laboratory Room', '', 0, 1),
	(2, 'Lab 2', 'Laboratory Room', '', 0, 1),
	(3, 'Lab 3', 'Laboratory Room', '', 0, 1),
	(4, 'Room 1', 'Lecture Room', '', 0, 1),
	(5, 'Room 2', 'Lecture Room', '', 0, 1),
	(6, 'Room 3', 'Lecture Room', '', 0, 1),
	(7, 'Room 5', 'Lecture Room', '', 0, 1);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;

-- Dumping structure for table itdcstts.room_day_time
CREATE TABLE IF NOT EXISTS `room_day_time` (
  `rdt_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`rdt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.room_day_time: ~26 rows (approximately)
/*!40000 ALTER TABLE `room_day_time` DISABLE KEYS */;
INSERT INTO `room_day_time` (`rdt_id`, `room_id`, `sem_id`, `sy_id`, `day_id`, `start_time`, `end_time`) VALUES
	(1, 1, 1, 1, 1, '07:30:00', '08:30:00'),
	(2, 1, 1, 1, 2, '07:30:00', '08:30:00'),
	(3, 1, 1, 1, 3, '07:30:00', '08:30:00'),
	(4, 4, 1, 1, 1, '08:30:00', '09:30:00'),
	(5, 4, 1, 1, 2, '08:30:00', '09:30:00'),
	(6, 1, 1, 1, 1, '09:30:00', '10:30:00'),
	(7, 1, 1, 1, 2, '09:30:00', '10:30:00'),
	(8, 1, 1, 1, 3, '08:30:00', '09:30:00'),
	(9, 4, 1, 1, 1, '10:30:00', '11:30:00'),
	(10, 4, 1, 1, 2, '10:30:00', '11:30:00'),
	(11, 1, 1, 1, 1, '10:30:00', '11:30:00'),
	(12, 1, 1, 1, 2, '10:30:00', '11:30:00'),
	(13, 1, 1, 1, 3, '09:30:00', '10:30:00'),
	(14, 4, 1, 1, 1, '11:30:00', '13:30:00'),
	(15, 1, 1, 2, 1, '07:30:00', '08:30:00'),
	(16, 1, 1, 2, 2, '07:30:00', '08:30:00'),
	(17, 1, 1, 2, 3, '07:30:00', '08:30:00'),
	(18, 4, 1, 2, 1, '08:30:00', '09:30:00'),
	(19, 4, 1, 2, 2, '08:30:00', '09:30:00'),
	(20, 4, 1, 1, 1, '13:30:00', '14:30:00'),
	(21, 4, 1, 1, 2, '11:30:00', '12:30:00'),
	(22, 4, 1, 1, 3, '07:30:00', '08:30:00'),
	(23, 1, 1, 1, 1, '11:30:00', '12:30:00'),
	(24, 1, 1, 1, 2, '11:30:00', '12:30:00'),
	(25, 1, 1, 1, 3, '10:30:00', '11:30:00'),
	(26, 4, 1, 1, 1, '14:30:00', '16:30:00');
/*!40000 ALTER TABLE `room_day_time` ENABLE KEYS */;

-- Dumping structure for table itdcstts.room_occupied_sem
CREATE TABLE IF NOT EXISTS `room_occupied_sem` (
  `ros_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_id` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `occupied` int(1) NOT NULL,
  PRIMARY KEY (`ros_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.room_occupied_sem: ~0 rows (approximately)
/*!40000 ALTER TABLE `room_occupied_sem` DISABLE KEYS */;
/*!40000 ALTER TABLE `room_occupied_sem` ENABLE KEYS */;

-- Dumping structure for table itdcstts.room_occupied_week
CREATE TABLE IF NOT EXISTS `room_occupied_week` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_id` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `occuppied` int(1) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.room_occupied_week: ~0 rows (approximately)
/*!40000 ALTER TABLE `room_occupied_week` DISABLE KEYS */;
/*!40000 ALTER TABLE `room_occupied_week` ENABLE KEYS */;

-- Dumping structure for table itdcstts.room_sched
CREATE TABLE IF NOT EXISTS `room_sched` (
  `room_sched_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedid` int(11) NOT NULL,
  `rdt_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  PRIMARY KEY (`room_sched_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.room_sched: ~26 rows (approximately)
/*!40000 ALTER TABLE `room_sched` DISABLE KEYS */;
INSERT INTO `room_sched` (`room_sched_id`, `schedid`, `rdt_id`, `sem_id`, `sy_id`) VALUES
	(1, 1, 1, 1, 1),
	(2, 1, 2, 1, 1),
	(3, 1, 3, 1, 1),
	(4, 1, 4, 1, 1),
	(5, 1, 5, 1, 1),
	(6, 2, 6, 1, 1),
	(7, 2, 7, 1, 1),
	(8, 2, 8, 1, 1),
	(9, 2, 9, 1, 1),
	(10, 2, 10, 1, 1),
	(11, 3, 11, 1, 1),
	(12, 3, 12, 1, 1),
	(13, 3, 13, 1, 1),
	(14, 3, 14, 1, 1),
	(15, 4, 15, 1, 2),
	(16, 4, 16, 1, 2),
	(17, 4, 17, 1, 2),
	(18, 4, 18, 1, 2),
	(19, 4, 19, 1, 2),
	(20, 5, 20, 1, 1),
	(21, 5, 21, 1, 1),
	(22, 5, 22, 1, 1),
	(23, 6, 23, 1, 1),
	(24, 6, 24, 1, 1),
	(25, 6, 25, 1, 1),
	(26, 6, 26, 1, 1);
/*!40000 ALTER TABLE `room_sched` ENABLE KEYS */;

-- Dumping structure for table itdcstts.schedule
CREATE TABLE IF NOT EXISTS `schedule` (
  `sched_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_year_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `sy_id` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.schedule: ~4 rows (approximately)
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` (`sched_id`, `course_year_id`, `sub_id`, `fac_id`, `sem_id`, `sy_id`, `active`) VALUES
	(1, 1, 2, 1, 1, 1, 1),
	(2, 2, 2, 1, 1, 1, 1),
	(3, 3, 10, 2, 1, 1, 1),
	(4, 4, 10, 2, 1, 2, 1),
	(5, 5, 18, 3, 1, 1, 1),
	(6, 3, 9, 1, 1, 1, 1);
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;

-- Dumping structure for table itdcstts.school_year
CREATE TABLE IF NOT EXISTS `school_year` (
  `sy_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`sy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.school_year: ~3 rows (approximately)
/*!40000 ALTER TABLE `school_year` DISABLE KEYS */;
INSERT INTO `school_year` (`sy_id`, `sy`, `active`) VALUES
	(1, '2018-2019', 1),
	(2, '2019-2020', 1),
	(3, '2020-2021', 1);
/*!40000 ALTER TABLE `school_year` ENABLE KEYS */;

-- Dumping structure for table itdcstts.semester
CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.semester: ~3 rows (approximately)
/*!40000 ALTER TABLE `semester` DISABLE KEYS */;
INSERT INTO `semester` (`sem_id`, `semester`, `active`) VALUES
	(1, 'First Semester', 1),
	(2, 'Second Semester', 1),
	(3, 'Summer', 1);
/*!40000 ALTER TABLE `semester` ENABLE KEYS */;

-- Dumping structure for table itdcstts.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `units` float NOT NULL,
  `lec` float NOT NULL,
  `lab` float NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.subjects: ~38 rows (approximately)
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`subid`, `course_id`, `sem_id`, `year_id`, `code`, `title`, `units`, `lec`, `lab`, `active`) VALUES
	(1, 1, 1, 1, 'IT INTECH', 'Introduction to Information Technology', 3, 2, 3, 1),
	(3, 1, 1, 1, 'IT MULSYS', 'Foundation of Multimedia', 3, 2, 3, 1),
	(4, 1, 2, 1, 'IT ORPROG', 'Object-Oriented Programming', 3, 2, 2, 1),
	(5, 1, 2, 1, 'IT WEBFUN', 'Internet and Web Fundamentals', 3, 2, 3, 1),
	(6, 1, 2, 1, 'IT NETWOR', 'Introduction to Networking', 3, 2, 3, 1),
	(7, 1, 2, 1, 'IT PCHASO', 'PC Hardware and Software Installation', 3, 2, 3, 1),
	(8, 1, 1, 2, 'IT DTACOM', 'Data Communication', 3, 3, 0, 1),
	(9, 1, 1, 2, 'IT COMPROG', 'Computer Programming II', 3, 2, 3, 1),
	(10, 1, 1, 2, 'IT DABASE I', 'Database Management System', 3, 2, 3, 1),
	(11, 1, 1, 2, 'IT DSTRUC', 'Discrete Structures', 3, 3, 0, 1),
	(12, 1, 1, 2, 'IT LOGCKT', 'Logic Circuit and Switching Theory ', 3, 2, 3, 1),
	(13, 1, 2, 2, 'IT OPESYS', 'Operating System Application', 3, 3, 0, 1),
	(14, 1, 2, 2, 'IT DABASE II', 'Database Management System II', 3, 2, 3, 1),
	(15, 1, 2, 2, 'IT CSORGA', 'Computer System Organization and Assembly Language', 3, 2, 3, 1),
	(16, 1, 2, 2, 'IT ADVNET', 'Advance Networking', 3, 2, 3, 1),
	(17, 1, 1, 3, 'IT SANDES', 'System Analysis and Design', 3, 2, 3, 1),
	(18, 1, 1, 3, 'IT PROFET', 'IT Professional Ethics', 3, 3, 0, 1),
	(19, 1, 1, 3, 'IT DSTALG', 'Data Structure and Algorithm', 3, 2, 3, 1),
	(20, 1, 1, 3, 'IT ELEC I', 'IT Elective I', 3, 2, 3, 1),
	(21, 1, 1, 3, 'IT ELEC II', 'IT Elective 2', 3, 2, 3, 1),
	(22, 1, 2, 3, 'IT SOFENG', 'Introduction to Software Engineering', 3, 2, 3, 1),
	(23, 1, 2, 3, 'IT ELEC III', 'IT Elective 3', 3, 2, 3, 1),
	(24, 1, 2, 3, 'IT ELEC 4', 'IT Elective 4', 3, 2, 3, 1),
	(25, 1, 2, 3, 'FREE ELEC 1', 'Free Elective 1', 3, 3, 0, 1),
	(26, 1, 1, 4, 'FREE ELEC 2', 'Free Elective 2', 3, 2, 3, 1),
	(27, 1, 1, 4, 'FREE ELEC 3', 'Free Elective 3', 3, 2, 3, 1),
	(28, 1, 1, 4, 'IT MNGTIT', 'Management in Information Technology', 3, 3, 0, 1),
	(29, 1, 1, 4, 'IT SYSPRO 2', 'Senior System Project 2', 3, 3, 0, 1),
	(30, 2, 1, 1, 'TECHNO I', 'Basic Electronics', 7, 3, 12, 1),
	(31, 2, 1, 1, 'DRAW I', 'Fund for Tech Sketching & BP Rdng', 1.5, 1, 2, 1),
	(32, 2, 2, 1, 'TECHNO 2', 'Digital Electronics', 7, 3, 12, 1),
	(33, 2, 2, 1, 'DRAW 2', 'Adv Tech Sketching & BP Reading', 1.5, 1, 12, 1),
	(34, 2, 1, 2, 'TECHNO 3', 'Logic Circuits and Software Installation', 7, 3, 12, 1),
	(35, 2, 2, 2, 'TECHNO 4', 'PC Troubleshooting Maintenance and Repair I', 7, 3, 12, 1),
	(36, 2, 1, 3, 'TECHNO 5', 'PC Troubleshooting Maintenance and Repair II', 7, 3, 12, 1),
	(37, 2, 2, 3, 'TECHNO 6', 'Basic Programming and Networking', 7, 3, 12, 1),
	(38, 2, 2, 3, 'IND TECH 4', 'Personnel Administration', 3, 3, 0, 1),
	(39, 2, 2, 3, 'IND TECH 5', 'Entrepreneurship w/ Fund of Cooperatives', 3, 3, 0, 1),
	(40, 2, 2, 3, 'IND TECH 6', 'Operations and Production Management', 3, 3, 0, 1),
	(41, 2, 2, 3, 'IND TECH 7', 'Quality Control Management', 3, 3, 0, 1),
	(42, 1, 1, 1, 'IT PROLOG', 'Programming Logic and Methods', 3, 2, 3, 1);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;

-- Dumping structure for table itdcstts.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `password`) VALUES
	('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table itdcstts.year
CREATE TABLE IF NOT EXISTS `year` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `year_name` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table itdcstts.year: ~4 rows (approximately)
/*!40000 ALTER TABLE `year` DISABLE KEYS */;
INSERT INTO `year` (`year_id`, `year_name`, `active`) VALUES
	(1, 'First Year', 1),
	(2, 'Second Year', 1),
	(3, 'Third Year', 1),
	(4, 'Fourth Year', 1);
/*!40000 ALTER TABLE `year` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
