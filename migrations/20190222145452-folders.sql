
-- +migrate Up
CREATE TABLE ` folders`( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, `user_id` INT(11), `name` VARCHAR(250),, `name_folder` VARCHAR(250), `parent` INT(11), `created_at` DATETIME, `updated_at` DATETIME, PRIMARY KEY (`id`) ) CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- +migrate Down
DROP TABLE `folders`;