

-- -----------------------------------------------------
-- Table `tdf`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tdf`.`users` (
  `id` INT NOT NULL ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `email` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) ,
)
ENGINE = InnoDB;

