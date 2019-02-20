
-- +migrate Up
CREATE TABLE `attributes` (
  `id` INT (11) UNSIGNED NOT NULL AUTO_INCREMENT,
   `user_id` INT(11) DEFAULT NULL,
  `category_id` INT (11),
  `type` INT (11),
  `data` TEXT,
  `sort` INT(11) DEFAULT '1',
  `status` int(1) DEFAULT '1',
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) CHARSET = utf8 COLLATE = utf8_general_ci ;

-- +migrate Down
 DROP TABLE `attributes`;