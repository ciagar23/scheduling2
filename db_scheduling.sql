# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2017-06-23 20:54:53
# Generator: MySQL-Front 6.0  (Build 1.194)


#
# Structure for table "area_head"
#

DROP TABLE IF EXISTS `area_head`;
CREATE TABLE `area_head` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "area_head"
#

INSERT INTO `area_head` VALUES (1,'a11111','BSIT'),(2,'a11111','BSIT');

#
# Structure for table "denied_reason"
#

DROP TABLE IF EXISTS `denied_reason`;
CREATE TABLE `denied_reason` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `reason` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "denied_reason"
#


#
# Structure for table "exam"
#

DROP TABLE IF EXISTS `exam`;
CREATE TABLE `exam` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `proctor` varchar(255) DEFAULT NULL,
  `mentor` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `sy` varchar(255) DEFAULT NULL,
  `sem` varchar(255) DEFAULT NULL,
  `term` varchar(255) DEFAULT NULL,
  `is_approved` int(1) DEFAULT '0',
  `is_general` int(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

#
# Data for table "exam"
#

INSERT INTO `exam` VALUES (1,'ITS 101','2018-05-10','07:30:00','09:30:00','c2-1','f11111','f33333','BSIT1-A','2018-2017','Summer class','Midterm',1,0),(2,'ITS 102','2018-05-11','07:30:00','09:30:00','c2-2','f22222','f33333','BSIT1-B','2018-2017','Summer class','Midterm',-1,0),(3,'ITS 103','2018-05-12','07:30:00','09:30:00','c2-3','f33333','f22222','BSIT1-C','2018-2017','Summer class','Midterm',0,0),(4,'ITS 104','2018-05-13','07:30:00','09:30:00','c3-1','f22222','f11111','BSIT4-A','2018-2017','Summer class','Midterm',0,0),(5,'ITS 105','2018-05-14','07:30:00','09:30:00','c3-2','f33333','f33333','BSIT5-A','2018-2017','Summer class','Midterm',0,0),(6,'ITS 106','2018-05-15','07:30:00','09:30:00','c3-3','f22222','f22222','BSIT6-A','2018-2017','Summer class','Midterm',0,0),(7,'ITS 107','2018-05-16','07:30:00','09:30:00','c3-4','f22222','f33333','BSIT7-A','2018-2017','Summer class','Midterm',0,0),(8,'ITS 108','2018-05-17','07:30:00','09:30:00','c3-5','f11111','f33333','BSIT8-A','2018-2017','Summer class','Midterm',0,0),(9,'ITS 109','2018-05-18','07:30:00','09:30:00','c3-6','f11111','f11111','BSIT9-A','2018-2017','Summer class','Midterm',0,0),(10,'eng101','2017-05-10','07:30:00','09:30:00','c2-1','f11111','f33333','BSIT1-A','2018-2017','Summer class','Midterm',1,1),(11,'eng101','2017-05-10','07:30:00','09:30:00','c2-2','f22222','f33333','BSIT1-B','2018-2017','Summer class','Midterm',1,1),(12,'eng101','2017-05-10','07:30:00','09:30:00','c2-3','f33333','f22222','BSIT1-C','2018-2017','Summer class','Midterm',1,1),(13,'eng102','2017-05-13','07:30:00','09:30:00','c3-1','f22222','f11111','BSIT4-A','2018-2017','Summer class','Midterm',1,1),(14,'eng103','2017-05-14','07:30:00','09:30:00','c3-2','f33333','f33333','BSIT5-A','2018-2017','Summer class','Midterm',1,1),(15,'eng104','2017-05-15','07:30:00','09:30:00','c3-3','f22222','f22222','BSIT6-A','2018-2017','Summer class','Midterm',1,1),(16,'eng105','2017-05-16','07:30:00','09:30:00','c3-4','f22222','f33333','BSIT7-A','2018-2017','Summer class','Midterm',1,1),(17,'eng106','2017-05-17','07:30:00','09:30:00','c3-5','f11111','f33333','BSIT8-A','2018-2017','Summer class','Midterm',1,1),(18,'eng107','2017-05-18','07:30:00','09:30:00','c3-6','f11111','f11111','BSIT9-A','2018-2017','Summer class','Midterm',1,1),(19,'Math','2017-05-19','07:30:00','09:30:00','c2-3','f33333','f22222','BSIT1-C','2018-2017','Summer class','Midterm',1,1);

#
# Structure for table "exam_tmp"
#

DROP TABLE IF EXISTS `exam_tmp`;
CREATE TABLE `exam_tmp` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `proctor` varchar(255) DEFAULT NULL,
  `mentor` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `sy` varchar(255) DEFAULT NULL,
  `sem` varchar(255) DEFAULT NULL,
  `term` varchar(255) DEFAULT NULL,
  `is_approved` int(1) DEFAULT '0',
  `is_general` int(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "exam_tmp"
#


#
# Structure for table "my_subjects"
#

DROP TABLE IF EXISTS `my_subjects`;
CREATE TABLE `my_subjects` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(100) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "my_subjects"
#

INSERT INTO `my_subjects` VALUES (3,'s11111','eng104'),(4,'s11111','eng106');

#
# Structure for table "room"
#

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `room` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "room"
#

INSERT INTO `room` VALUES (1,'c2-1'),(2,'c2-2'),(3,'c2-3'),(4,'c3-1'),(5,'c3-2'),(6,'c3-3'),(7,'c3-4'),(8,'c3-5'),(9,'c3-6');

#
# Structure for table "settings"
#

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` varchar(255) DEFAULT NULL,
  `sem` varchar(255) DEFAULT NULL,
  `term` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "settings"
#

INSERT INTO `settings` VALUES (1,'2016-2017','First Semester','Prelim');

#
# Structure for table "student"
#

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "student"
#

INSERT INTO `student` VALUES (1,'s11111','BSIT','1','A');

#
# Structure for table "subject"
#

DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "subject"
#

INSERT INTO `subject` VALUES (1,'eng101','English 1'),(2,'eng102','English 2'),(3,'eng103','English 3'),(4,'eng104','English 4'),(5,'eng105','English 5'),(6,'eng106','English 6'),(7,'eng107','English 7');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','admin','Digong','Duterte','Admin'),(2,'f11111','12345','Mark','Zuckerberg','Faculty'),(3,'f22222','temppassword','Arvin','Regalado','Faculty'),(4,'f33333','temppassword','Jude','Bayer','Faculty'),(5,'v11111','12345','Vicky','Bello','VPAA'),(6,'a11111','12345','Alden','Richards','Area Head'),(7,'s11111','12345','Sharon','Cuneta','Student'),(8,'a11111','12345','arvin','regalado','Area Head');
