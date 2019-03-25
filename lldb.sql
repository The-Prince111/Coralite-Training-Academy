/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.1.41 : Database - ll_db
*********************************************************************
Server version : 5.1.41
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `ll_db`;

USE `ll_db`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `album_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `album_description` varchar(1000) DEFAULT NULL,
  `item_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `album` */

/*Table structure for table `albumsong` */

DROP TABLE IF EXISTS `albumsong`;

CREATE TABLE `albumsong` (
  `albumsong_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `album_id` int(10) DEFAULT NULL,
  `song_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`albumsong_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `albumsong` */

/*Table structure for table `artist` */

DROP TABLE IF EXISTS `artist`;

CREATE TABLE `artist` (
  `artist_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `artist_title` varchar(50) DEFAULT NULL,
  `artist_bio` varchar(1000) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `artist` */

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chat_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `chat_message` varchar(1000) DEFAULT NULL,
  `chat_date` datetime DEFAULT NULL,
  `chat_sender` int(10) DEFAULT NULL,
  `chat_reciepient` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `client_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `member_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `client` */

/*Table structure for table `feature` */

DROP TABLE IF EXISTS `feature`;

CREATE TABLE `feature` (
  `feature_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `song_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `feature` */

/*Table structure for table `featuredartist` */

DROP TABLE IF EXISTS `featuredartist`;

CREATE TABLE `featuredartist` (
  `featuredartist_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `feature_id` int(10) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`featuredartist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `featuredartist` */

/*Table structure for table `friend` */

DROP TABLE IF EXISTS `friend`;

CREATE TABLE `friend` (
  `friendship_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `friendship_date` datetime DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  `friend_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`friendship_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `friend` */

/*Table structure for table `group` */

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `group_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `group_creater` int(10) DEFAULT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `group_datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `group` */

/*Table structure for table `groupmember` */

DROP TABLE IF EXISTS `groupmember`;

CREATE TABLE `groupmember` (
  `groupmember_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `groupmember_role` varchar(50) DEFAULT NULL,
  `group_id` int(8) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`groupmember_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `groupmember` */

/*Table structure for table `individual` */

DROP TABLE IF EXISTS `individual`;

CREATE TABLE `individual` (
  `individual_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `friend_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`individual_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `individual` */

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `item_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `item_title` varchar(100) DEFAULT NULL,
  `item_theme` varchar(50) DEFAULT NULL,
  `item_releasedate` datetime DEFAULT NULL,
  `item_price` double(8,2) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `item` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `member_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `member_username` varchar(50) DEFAULT NULL,
  `member_password` varchar(50) DEFAULT NULL,
  `member_fullname` varchar(100) DEFAULT NULL,
  `member_idno` varchar(13) DEFAULT NULL,
  `member_email` varchar(100) DEFAULT NULL,
  `member_cell` varchar(10) DEFAULT NULL,
  `member_logo` varchar(100) DEFAULT NULL,
  `member_type` varchar(6) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `member_rate` int(3) DEFAULT NULL,
  `member_view` int(3) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `member` */

/*Table structure for table `playlist` */

DROP TABLE IF EXISTS `playlist`;

CREATE TABLE `playlist` (
  `playlist_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `playlist_name` varchar(50) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `playlist` */

/*Table structure for table `resource` */

DROP TABLE IF EXISTS `resource`;

CREATE TABLE `resource` (
  `resource_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `resource_name` varchar(100) DEFAULT NULL,
  `resource_description` varchar(1000) DEFAULT NULL,
  `resource_content` varchar(100) DEFAULT NULL,
  `resource_dateadded` datetime DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  `friend_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `resource` */

/*Table structure for table `single` */

DROP TABLE IF EXISTS `single`;

CREATE TABLE `single` (
  `single_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `song_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`single_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `single` */

/*Table structure for table `song` */

DROP TABLE IF EXISTS `song`;

CREATE TABLE `song` (
  `song_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `song_genre` varchar(50) DEFAULT NULL,
  `song_type` varchar(50) DEFAULT 'single',
  `release_type` varchar(50) DEFAULT 'single',
  `item_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `song` */

/*Table structure for table `userplaylist` */

DROP TABLE IF EXISTS `userplaylist`;

CREATE TABLE `userplaylist` (
  `userplaylist_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `playlist_id` int(10) DEFAULT NULL,
  `item_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`userplaylist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `userplaylist` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
