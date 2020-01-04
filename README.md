# User Control Panel for all GTA5 Roleplay Projects

// ************************************************************************************//
// * User Control Panel ( UCP )
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.0
// * 
// * Copyright (c) 2020 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//

This project is intended for every GTA 5 Roleplay project which does not have the possibility to develop a UCP yourself.

UCP requirements:

1. Webserver
2. php7.3 or higher
3. MySQL or Mariadb Server

Database requirements:

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(63) DEFAULT NULL,
  `email` varchar(127) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `socialClub` varchar(63) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;  
  
Have fun !