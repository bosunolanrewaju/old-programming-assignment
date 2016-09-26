CREATE TABLE `olddb`.`users` ( 
  `uid` INT NOT NULL AUTO_INCREMENT , 
  `username` VARCHAR(25) NOT NULL , 
  `password` VARCHAR(60) NOT NULL , 
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
  PRIMARY KEY (`uid`) 
) 
ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `olddb`.`users` (
  `uid`, 
  `username`, 
  `password`, 
  `date_created`
) 
VALUES (
  NULL, 
  'admin', 
  'admin', 
  CURRENT_TIMESTAMP
);

CREATE TABLE `olddb`.`order` ( 
  `order_id` INT NOT NULL AUTO_INCREMENT , 
  `cname` TEXT NOT NULL , 
  `food` TEXT NOT NULL , 
  `drink` TEXT NOT NULL , 
  `qty` TINYTEXT NOT NULL , 
  `order_status` TINYINT NOT NULL DEFAULT 0 , 
  PRIMARY KEY (`order_id`) 
) 
ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci

CREATE TABLE `olddb`.`food` ( 
  `food_id` INT NOT NULL AUTO_INCREMENT , 
  `food_name` VARCHAR(250) NOT NULL , 
  `type` TINYTEXT NOT NULL , 
  `price` TEXT NOT NULL , 
  PRIMARY KEY (`food_id`) 
) 
ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci
