CREATE DATABASE IF NOT EXISTS `test` COLLATE 'utf8_general_ci';

USE `test`;

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` VARCHAR(190) NOT NULL COMMENT '用户名',
  `password` VARCHAR(255) NOT NULL COMMENT '密码',
  `name` VARCHAR(50) NOT NULL COMMENT '姓名',
  PRIMARY KEY (`id`),
  UNIQUE (`username`)
) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_general_ci;