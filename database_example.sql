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