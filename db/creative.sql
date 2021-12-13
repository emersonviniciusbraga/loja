-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema creative
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema creative
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `creative` DEFAULT CHARACTER SET utf8 ;
USE `creative` ;

-- -----------------------------------------------------
-- Table `creative`.`adm`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative`.`adm` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `senha` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `creative`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative`.`produto` (
  `codigo` BIGINT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `descricao` TEXT NOT NULL,
  `categoria` TEXT NOT NULL,
  `status` TEXT NOT NULL,
  `img` VARCHAR(256) NULL,
  `idadm` BIGINT NOT NULL,
  PRIMARY KEY (`codigo`),
  INDEX `fk_produto_adm_idx` (`idadm` ASC) ,
  CONSTRAINT `fk_produto_adm`
    FOREIGN KEY (`idadm`)
    REFERENCES `creative`.`adm` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
