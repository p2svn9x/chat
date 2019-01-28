
-- +migrate Up
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `uid` varchar(250) NOT NULL,
  `type` int(11) DEFAULT '1',
  `token` varchar(250) NOT NULL,
  `token_forgot` varchar(250) DEFAULT NULL,
  `time_forgot` varchar(250) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `block` int(1) DEFAULT '0',
  `last_login` varchar(250) DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`email`,`uid`,`token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- +migrate Down
 DROP TABLE `users`;