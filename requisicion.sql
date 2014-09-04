/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : requisicion

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-08-11 19:32:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `profiles`
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', 'Admin', 'Administrator');
INSERT INTO `profiles` VALUES ('2', 'Demo', 'Demo');
INSERT INTO `profiles` VALUES ('7', 'Rueda', 'Jorge');
INSERT INTO `profiles` VALUES ('10', 'Rueda', 'Jorge');

-- ----------------------------
-- Table structure for `profiles_fields`
-- ----------------------------
DROP TABLE IF EXISTS `profiles_fields`;
CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profiles_fields
-- ----------------------------
INSERT INTO `profiles_fields` VALUES ('1', 'lastname', 'Last Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', '1', '3');
INSERT INTO `profiles_fields` VALUES ('2', 'firstname', 'First Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', '0', '3');

-- ----------------------------
-- Table structure for `shop_address`
-- ----------------------------
DROP TABLE IF EXISTS `shop_address`;
CREATE TABLE `shop_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_address
-- ----------------------------
INSERT INTO `shop_address` VALUES ('1', 'Jorge', 'Rueda', '1', '1', '1', '1');
INSERT INTO `shop_address` VALUES ('2', 'Jorge', 'Rueda', '1', '1', '1', '1');
INSERT INTO `shop_address` VALUES ('3', 'Jorge', 'Rueda', '1', '1', '1', '1');
INSERT INTO `shop_address` VALUES ('4', 'Jorge', 'Rueda', '1', '1', '1', '1');
INSERT INTO `shop_address` VALUES ('5', 'Jorge', 'Rueda', 'Popular', 'Cúcuta', '540003', 'Colombia');
INSERT INTO `shop_address` VALUES ('6', 'Jorge', 'Rueda', 'Popular', 'Cúcuta', '540003', 'Colombia');
INSERT INTO `shop_address` VALUES ('7', 'Jorge', 'Rueda', 'Popular', 'Cúcuta', '540003', 'Colombia');
INSERT INTO `shop_address` VALUES ('8', 'Antonio', 'Rueda', 'popular', 'cucuta', '2014', 'Colombia');
INSERT INTO `shop_address` VALUES ('9', 'Antonio', 'Rueda', 'Desarrollo de software', 'Cúcuta', '201', 'Colombia');
INSERT INTO `shop_address` VALUES ('10', 'Jorge', 'Antonio', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('11', 'Jorge', 'Antonio', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('12', 'Jorge', 'Antonio', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('13', 'Linda', 'Rueda', 'Popular', '54003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('14', 'Linda', 'Rueda', 'Popular', '54003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('15', 'Linda', 'Rueda', 'Popular', '54003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('16', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Cp');
INSERT INTO `shop_address` VALUES ('17', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Cp');
INSERT INTO `shop_address` VALUES ('18', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Cp');
INSERT INTO `shop_address` VALUES ('19', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('20', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('21', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('22', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('23', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('24', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('25', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('26', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('27', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('28', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('29', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('30', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('31', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('32', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('33', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('34', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('35', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('36', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('37', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('38', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('39', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('40', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('41', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('42', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('43', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('44', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('45', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('46', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('47', 'Jorge', 'Rueda', 'Software', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('48', 'Jorge', 'Rueda', 'Popular', '54564', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('49', 'Jorge', 'Rueda', 'Popular', '54564', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('50', 'Jorge', 'Rueda', 'Popular', '54564', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('51', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('52', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('53', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('54', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('55', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('56', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('57', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('58', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('59', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('60', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('61', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('62', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('63', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');
INSERT INTO `shop_address` VALUES ('64', 'Jorge', 'Rueda', 'Popular', '540003', 'Cúcuta', 'Colombia');

-- ----------------------------
-- Table structure for `shop_category`
-- ----------------------------
DROP TABLE IF EXISTS `shop_category`;
CREATE TABLE `shop_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `language` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of shop_category
-- ----------------------------
INSERT INTO `shop_category` VALUES ('1', '0', 'Electrodomesticos', '', '');
INSERT INTO `shop_category` VALUES ('2', '0', 'Secondary Articles', null, null);
INSERT INTO `shop_category` VALUES ('3', '1', 'Red Primary Articles', null, null);
INSERT INTO `shop_category` VALUES ('4', '1', 'Green Primary Articles', null, null);
INSERT INTO `shop_category` VALUES ('5', '2', 'Red Secondary Articles', null, null);
INSERT INTO `shop_category` VALUES ('6', '0', 'Muebles', '', '');

-- ----------------------------
-- Table structure for `shop_customer`
-- ----------------------------
DROP TABLE IF EXISTS `shop_customer`;
CREATE TABLE `shop_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of shop_customer
-- ----------------------------
INSERT INTO `shop_customer` VALUES ('1', '1', '0', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('2', '0', '2', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('3', '0', '5', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('4', '0', '9', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('5', '0', '0', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('6', '0', '10', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('7', '0', '13', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('8', '0', '16', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('9', '0', '19', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('10', '0', '48', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('11', '0', '0', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('12', '0', '51', '0', '0', 'ja_mumi@hotmail.com');
INSERT INTO `shop_customer` VALUES ('13', '0', '54', '0', '0', 'ja_mumi@hotmail.com');

-- ----------------------------
-- Table structure for `shop_image`
-- ----------------------------
DROP TABLE IF EXISTS `shop_image`;
CREATE TABLE `shop_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `filename` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Image_Products` (`product_id`),
  CONSTRAINT `fk_Image_Products` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of shop_image
-- ----------------------------
INSERT INTO `shop_image` VALUES ('1', 'de', 'Desert.jpg', '5');

-- ----------------------------
-- Table structure for `shop_order`
-- ----------------------------
DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE `shop_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) DEFAULT NULL,
  `ordering_confirmed` tinyint(1) DEFAULT NULL,
  `payment_method` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `comment` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`order_id`),
  KEY `fk_order_customer` (`customer_id`),
  CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of shop_order
-- ----------------------------
INSERT INTO `shop_order` VALUES ('1', '2', '3', '4', '1404869843', null, null, '5', '1', '');
INSERT INTO `shop_order` VALUES ('2', '3', '6', '7', '1404869978', null, null, '1', '1', '');
INSERT INTO `shop_order` VALUES ('3', '6', '11', '12', '1405027681', null, null, '1', '1', 'Hello');
INSERT INTO `shop_order` VALUES ('4', '7', '14', '15', '1405027835', null, null, '1', '1', 'Hola');
INSERT INTO `shop_order` VALUES ('5', '8', '17', '18', '1405029316', null, null, '1', '1', 'HAi');
INSERT INTO `shop_order` VALUES ('6', '9', '20', '21', '1405035094', null, null, '1', '1', 'Hola');
INSERT INTO `shop_order` VALUES ('7', '9', '24', '25', '1405035297', null, null, '1', '1', 'Hola');
INSERT INTO `shop_order` VALUES ('8', '9', '28', '29', '1405035406', null, null, '1', '1', 'Hola');
INSERT INTO `shop_order` VALUES ('9', '9', '32', '33', '1405035449', null, null, '1', '1', 'Hola');
INSERT INTO `shop_order` VALUES ('10', '9', '34', '35', '1405035817', null, null, '1', '1', '');
INSERT INTO `shop_order` VALUES ('11', '9', '38', '39', '1405035880', null, null, '1', '1', 'holo');
INSERT INTO `shop_order` VALUES ('12', '9', '42', '43', '1405035977', null, null, '1', '1', 'holo');
INSERT INTO `shop_order` VALUES ('13', '9', '44', '45', '1405036529', null, null, '1', '1', '');
INSERT INTO `shop_order` VALUES ('14', '9', '46', '47', '1405037174', null, null, '1', '1', '');
INSERT INTO `shop_order` VALUES ('15', '10', '49', '50', '1405037468', null, null, '1', '1', 'aa');
INSERT INTO `shop_order` VALUES ('16', '12', '52', '53', '1405037769', null, null, '1', '1', 'aaa');
INSERT INTO `shop_order` VALUES ('17', '13', '55', '56', '1405038000', null, null, '1', '1', 'hoolo\r\n');
INSERT INTO `shop_order` VALUES ('18', '13', '57', '58', '1405038320', null, null, '1', '1', 'oooo');
INSERT INTO `shop_order` VALUES ('19', '13', '59', '60', '1405038362', null, null, '1', '1', 'aaa');
INSERT INTO `shop_order` VALUES ('20', '13', '61', '62', '1405038683', null, null, '1', '1', 'aaaa');
INSERT INTO `shop_order` VALUES ('21', '13', '63', '64', '1405039385', null, null, '1', '1', 'fafafafa');

-- ----------------------------
-- Table structure for `shop_order_position`
-- ----------------------------
DROP TABLE IF EXISTS `shop_order_position`;
CREATE TABLE `shop_order_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `specifications` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_order_position
-- ----------------------------
INSERT INTO `shop_order_position` VALUES ('1', '1', '1', '1', '{\"5\":[\"1\"],\"1\":[\"1\"]}');
INSERT INTO `shop_order_position` VALUES ('2', '2', '3', '3', 'null');
INSERT INTO `shop_order_position` VALUES ('3', '3', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('4', '4', '2', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('5', '5', '4', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('6', '6', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('7', '7', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('8', '8', '4', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('9', '9', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('10', '10', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('11', '11', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('12', '12', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('13', '13', '4', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('14', '14', '4', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('15', '15', '5', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('16', '16', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('17', '17', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('18', '18', '5', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('19', '19', '5', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('20', '20', '3', '1', 'null');
INSERT INTO `shop_order_position` VALUES ('21', '21', '5', '1', 'null');

-- ----------------------------
-- Table structure for `shop_payment_method`
-- ----------------------------
DROP TABLE IF EXISTS `shop_payment_method`;
CREATE TABLE `shop_payment_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_payment_method
-- ----------------------------
INSERT INTO `shop_payment_method` VALUES ('1', 'cash', 'You pay cash', '1', '0');
INSERT INTO `shop_payment_method` VALUES ('2', 'advance Payment', 'You pay in advance, we deliver', '1', '0');
INSERT INTO `shop_payment_method` VALUES ('3', 'cash on delivery', 'You pay when we deliver', '1', '0');
INSERT INTO `shop_payment_method` VALUES ('4', 'invoice', 'We deliver and send a invoice', '1', '0');
INSERT INTO `shop_payment_method` VALUES ('5', 'paypal', 'You pay by paypal', '1', '0');

-- ----------------------------
-- Table structure for `shop_products`
-- ----------------------------
DROP TABLE IF EXISTS `shop_products`;
CREATE TABLE `shop_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `price` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `language` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `specifications` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`product_id`),
  KEY `fk_products_category` (`category_id`),
  CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of shop_products
-- ----------------------------
INSERT INTO `shop_products` VALUES ('1', '1', '1', 'Demonstration of Article with variations', 'Hello, World!', '19.99', null, null);
INSERT INTO `shop_products` VALUES ('2', '1', '2', 'Another Demo Article with less Tax', '!!', '29.99', null, null);
INSERT INTO `shop_products` VALUES ('3', '2', '1', 'Demo3', '', '', null, null);
INSERT INTO `shop_products` VALUES ('4', '4', '1', 'Demo4', '', '7, 55', null, null);
INSERT INTO `shop_products` VALUES ('5', '1', '0', 'Monitor', '', '200000', null, '{\"Size\":\"21 pulgadas\",\"Color\":\"\",\"Some random attribute\":\"\",\"Material\":\"\",\"Specific number\":\"\"}');

-- ----------------------------
-- Table structure for `shop_product_specification`
-- ----------------------------
DROP TABLE IF EXISTS `shop_product_specification`;
CREATE TABLE `shop_product_specification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `is_user_input` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_product_specification
-- ----------------------------
INSERT INTO `shop_product_specification` VALUES ('1', 'Size', '0', '1');
INSERT INTO `shop_product_specification` VALUES ('2', 'Color', '0', '0');
INSERT INTO `shop_product_specification` VALUES ('3', 'Some random attribute', '0', '0');
INSERT INTO `shop_product_specification` VALUES ('4', 'Material', '0', '1');
INSERT INTO `shop_product_specification` VALUES ('5', 'Specific number', '1', '1');

-- ----------------------------
-- Table structure for `shop_product_variation`
-- ----------------------------
DROP TABLE IF EXISTS `shop_product_variation`;
CREATE TABLE `shop_product_variation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price_adjustion` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_product_variation
-- ----------------------------
INSERT INTO `shop_product_variation` VALUES ('1', '1', '1', '2', 'variation1', '3');
INSERT INTO `shop_product_variation` VALUES ('2', '1', '1', '3', 'variation2', '6');
INSERT INTO `shop_product_variation` VALUES ('3', '1', '2', '4', 'variation3', '9');
INSERT INTO `shop_product_variation` VALUES ('4', '1', '5', '1', 'please enter a number here', '0');

-- ----------------------------
-- Table structure for `shop_shipping_method`
-- ----------------------------
DROP TABLE IF EXISTS `shop_shipping_method`;
CREATE TABLE `shop_shipping_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_shipping_method
-- ----------------------------
INSERT INTO `shop_shipping_method` VALUES ('1', 'Delivery by postal Service', 'We deliver by Postal Service. 2.99 units of money are charged for that', '1', '2.99');

-- ----------------------------
-- Table structure for `shop_tax`
-- ----------------------------
DROP TABLE IF EXISTS `shop_tax`;
CREATE TABLE `shop_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop_tax
-- ----------------------------
INSERT INTO `shop_tax` VALUES ('1', '19%', '19');
INSERT INTO `shop_tax` VALUES ('2', '7%', '7');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2014-07-08 20:26:08', '2014-08-01 19:22:17', '1', '1');
INSERT INTO `users` VALUES ('2', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2014-07-08 20:26:08', '2014-08-12 00:29:13', '0', '1');
INSERT INTO `users` VALUES ('7', 'jorge', 'c8da4a1a803d2d0ce965ad88c93a0af7', 'ja_mumi@hotmail.com', '6aea1c1f99e3525ba90f96638278f67e', '2014-07-10 16:47:46', '0000-00-00 00:00:00', '0', '0');
INSERT INTO `users` VALUES ('10', 'JRSOFT', 'c8da4a1a803d2d0ce965ad88c93a0af7', 'jrsoft.jorge@gmail.com', 'c0b730bf636e43a4f925d69d2d9fa659', '2014-07-10 18:30:10', '0000-00-00 00:00:00', '0', '0');
