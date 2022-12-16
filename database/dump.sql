SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `3f` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `responsedate` date DEFAULT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloades` int(11) DEFAULT NULL,
  `responsedate` date DEFAULT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `response` varchar(255) NOT NULL,
  `timespent` varchar(255) NOT NULL,
  KEY `user_id` (`user_id`),
  CONSTRAINT `challenges_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `diagnostic` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `downloades` int(11) NOT NULL,
  `responsedate` date NOT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL,
  KEY `user_id` (`user_id`),
  CONSTRAINT `diagnostic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `geobloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `responsedate` date DEFAULT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


CREATE TABLE `innovidees` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `responsedate` date DEFAULT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL,
  KEY `user_id` (`user_id`),
  CONSTRAINT `innovidees_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `interv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `responsedate` date DEFAULT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `travaux` varchar(255) DEFAULT NULL,
  `filesname` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `responsedate` date DEFAULT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `response` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `name_encode` varchar(50) DEFAULT NULL,
  `usertype` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
