/*
Navicat MySQL Data Transfer

Source Server         : lp
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-04-11 10:22:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ts
-- ----------------------------
DROP TABLE IF EXISTS `ts`;
CREATE TABLE `ts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '用户名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ts
-- ----------------------------
INSERT INTO `ts` VALUES ('1', 'lp');
INSERT INTO `ts` VALUES ('2', 'ts');
INSERT INTO `ts` VALUES ('3', 'lip2');
INSERT INTO `ts` VALUES ('5', 'lip3');
INSERT INTO `ts` VALUES ('6', 'lip4');
INSERT INTO `ts` VALUES ('7', 'lip5');
INSERT INTO `ts` VALUES ('8', 'lip6');
INSERT INTO `ts` VALUES ('9', 'lip7');
INSERT INTO `ts` VALUES ('10', 'lip10');
INSERT INTO `ts` VALUES ('11', 'lip11');
