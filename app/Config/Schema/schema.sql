
-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `email` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `places`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `places` ;

CREATE  TABLE IF NOT EXISTS `places` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `parent_id` INT NULL ,
  `lft` INTEGER(10) DEFAULT NULL,
  `rght` INTEGER(10) DEFAULT NULL,
  `name` VARCHAR(100) NULL ,
  `description` TEXT ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `paths`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `paths` ;

CREATE  TABLE IF NOT EXISTS `paths` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `from_place_id` INT NOT NULL ,
  `to_place_id` INT NOT NULL ,
  `distance` FLOAT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trips`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `trips` ;

CREATE  TABLE IF NOT EXISTS `trips` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_id` INT NOT NULL ,
  `from_place_id` INT NOT NULL ,
  `to_place_id` INT NOT NULL ,
  `started` DATETIME NULL ,
  `ended` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;
