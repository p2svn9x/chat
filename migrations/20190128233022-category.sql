
-- +migrate Up
CREATE TABLE `categorys` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) DEFAULT NULL,
  `name` VARCHAR(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` INT(11) DEFAULT NULL,
  `status` INT(11) DEFAULT NULL,
  `sort` INT(11) DEFAULT NULL,
  `icon` VARCHAR(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` VARCHAR(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` INT(11) DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- +migrate Down
DROP TABLE `categorys`;