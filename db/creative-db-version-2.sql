-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema creative-db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema creative-db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `creative-db` DEFAULT CHARACTER SET utf8 ;
USE `creative-db` ;

-- -----------------------------------------------------
-- Table `creative-db`.`administracao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative-db`.`administracao` (
  `idadministrador` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idadministrador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `creative-db`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative-db`.`produto` (
  `idproduto` INT NOT NULL AUTO_INCREMENT,
  `categoria` INT NOT NULL,
  `titulo_produto` VARCHAR(200) NOT NULL,
  `descricao` TEXT NULL,
  `status` INT NULL,
  `img_produto` VARCHAR(256) NULL,
  `administracao_idadministrador` INT NOT NULL,
  PRIMARY KEY (`idproduto`),
  INDEX `fk_produto_administracao_idx` (`administracao_idadministrador` ASC) ,
  CONSTRAINT `fk_produto_administracao`
    FOREIGN KEY (`administracao_idadministrador`)
    REFERENCES `creative-db`.`administracao` (`idadministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `creative-db`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative-db`.`usuario` (
  `idusuario` BIGINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `produto_idproduto` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_produto1_idx` (`produto_idproduto` ASC) ,
  CONSTRAINT `fk_usuario_produto1`
    FOREIGN KEY (`produto_idproduto`)
    REFERENCES `creative-db`.`produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
