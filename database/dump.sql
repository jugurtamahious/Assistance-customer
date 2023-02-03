SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `BlablaMat` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `user_id` int(11) NOT NULL,
                             `eventdate` date NOT NULL,
                             `logiciels` varchar(255) DEFAULT NULL,
                             `travaux` varchar(255) DEFAULT NULL,
                             `filesname` varchar(255) DEFAULT NULL,
                             `size` int(11) DEFAULT NULL,
                             `filesnamedeux` varchar(255) DEFAULT NULL,
                             `sizedeux` int(11) DEFAULT NULL,
                             `filesnametrois` varchar(255) DEFAULT NULL,
                             `sizetrois` int(11) DEFAULT NULL,
                             `filesnamequatre` varchar(255) DEFAULT NULL,
                             `sizequatre` int(11) DEFAULT NULL,
                             `filesnamecinq` varchar(255) DEFAULT NULL,
                             `sizecinq` int(11) DEFAULT NULL,
                             `filesnamesix` varchar(255) DEFAULT NULL,
                             `sizesix` int(11) DEFAULT NULL,
                             `filesnamesept` varchar(255) DEFAULT NULL,
                             `sizesept` int(11) DEFAULT NULL,
                             `filesnamehuit` varchar(255) DEFAULT NULL,
                             `sizehuit` int(11) DEFAULT NULL,
                             `filesnameneuf` varchar(255) DEFAULT NULL,
                             `sizeneuf` int(11) DEFAULT NULL,
                             `filesnamedix` varchar(255) DEFAULT NULL,
                             `sizedix` int(11) DEFAULT NULL,
                             `responsedate` date DEFAULT NULL,
                             `demande` varchar(255) DEFAULT NULL,
                             `timespent` varchar(255) DEFAULT NULL,
                             `response` varchar(255) DEFAULT NULL,
                             `likes` int(11) DEFAULT NULL,
                             `dislikes` int(11) DEFAULT NULL,
                             `active` int(11) DEFAULT 0,
                             PRIMARY KEY (`id`)
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

