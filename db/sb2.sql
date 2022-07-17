
CREATE TABLE IF NOT EXISTS `VTriggers` (
  `idVTriggers` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idVTriggers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`VSkills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `VSkills` (
  `idVSkills` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idVSkills`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Category` (
  `idCategory` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategory`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Moves`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Moves` (
  `idMoves` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `VTriggers_idVTriggers` INT NULL,
  `VSkills_idVSkills` INT NULL,
  `Category_idCategory` INT NOT NULL,
  `inputs` VARCHAR(45) NOT NULL,
  `comments` VARCHAR(255) NULL,
  PRIMARY KEY (`idMoves`),
  INDEX `fk_Movelist_VTriggers1_idx` (`VTriggers_idVTriggers` ASC),
  INDEX `fk_Movelist_VSkills1_idx` (`VSkills_idVSkills` ASC),
  INDEX `fk_Movelist_Category1_idx` (`Category_idCategory` ASC),
  CONSTRAINT `fk_Movelist_VTriggers1`
    FOREIGN KEY (`VTriggers_idVTriggers`)
    REFERENCES `VTriggers` (`idVTriggers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movelist_VSkills1`
    FOREIGN KEY (`VSkills_idVSkills`)
    REFERENCES `VSkills` (`idVSkills`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movelist_Category1`
    FOREIGN KEY (`Category_idCategory`)
    REFERENCES `Category` (`idCategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
