
-- +migrate Up
CREATE TABLE `categorys`( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, `name` VARCHAR(250), `icon` VARCHAR(250), `parent` INT(11) DEFAULT 0, `sort` INT(11) DEFAULT 100, `status` INT(11) DEFAULT 1, PRIMARY KEY (`id`) ) CHARSET=utf8 COLLATE=utf8_general_ci;
-- +migrate Down
DROP TABLE `categorys`;