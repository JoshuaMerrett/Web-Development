DROP DATABASE IF EXISTS `multi_login`;
CREATE DATABASE `multi_login`;
USE `multi_login`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `username` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `user_type` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL
) engine=innodb;

/* Password = Pass123 */
INSERT INTO `users` VALUES (NULL, 'JoshuaM', 'joshuamerrett207@hotmail.co.uk', 'admin', '2f23fa3579f3f75175793649115c1b25');
/*Password = Fiat500 */
INSERT INTO `users` VALUES (NULL, 'BritneyD', 'itsbritney@hotmail.com', 'user', 'aa6ab3c5e6a2d3387017aba5636aebe1');

CREATE TABLE IF NOT EXISTS `error_log` (
    `id` INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `date` DATE NOT NULL,
    `time` TIME NOT NULL,
    `error` LONGTEXT NOT NULL
) engine=innodb;

CREATE TABLE IF NOT EXISTS `login_log` (
    `id` INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `username` VARCHAR(100) NOT NULL,
    `user_type` VARCHAR(100) NOT NULL,
    `date` DATE NOT NULL,
    `time` TIME NOT NULL,
    `ip` VARCHAR(100) NOT NULL,
    `browser` VARCHAR(100) NOT NULL,
    `os` VARCHAR(100) NOT NULL
) engine=innodb;