CREATE TABLE `isw`.`usr_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nick` varchar(250) NOT NULL,
  `pass` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `isw`.`usr_details` (
  `usr_id` int NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `usr_id` (`usr_id`),
  CONSTRAINT usr_details_ibfk_1 
  FOREIGN KEY (usr_id) REFERENCES usr_users (id) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
