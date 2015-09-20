CREATE TABLE mitbi DEFAULT CHARSET=utf8;

CREATE TABLE `barangays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position_id` int(11) NOT NULL,
  `contact_no` varchar(20),
  `profile_image_path` varchar(1000),
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `delflg` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `residents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100),
  `suffix` varchar(100),
  `address_line_1` varchar(200),
  `address_line_2` varchar(200),
  `address_line_3` varchar(200),
  `address_line_4` varchar(200),
  `address_line_5` varchar(200),
  `gender_id` int(11) NOT NULL,
  `birth_date` date,
  `martial_status_id` int(11) NOT NULL,
  `citizenship` varchar(100),
  `contact_number` varchar(20),
  `delflg` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `martial_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
