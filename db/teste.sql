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
-- Table `creative`.`administracao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative`.`administracao` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `creative`.`monitoramento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative`.`monitoramento` (
  `id_monitoramento` BIGINT NOT NULL AUTO_INCREMENT,
  `amonia` VARCHAR(10) NOT NULL,
  `temperatura` VARCHAR(10) NOT NULL,
  `humidade` VARCHAR(10) NOT NULL,
  `data_hora` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_monitoramento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `creative`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative`.`produto` (
  `idproduto` BIGINT NOT NULL AUTO_INCREMENT,
  `categoria` INT NOT NULL,
  `titulo_produto` VARCHAR(250) NOT NULL,
  `descricao` TEXT NOT NULL,
  `status` INT NULL,
  `img_produto` VARCHAR(300) NULL,
  `administracao_id` BIGINT NOT NULL,
  INDEX `fk_sistema_usuario_idx` (`administracao_id` ASC) VISIBLE,
  PRIMARY KEY (`idproduto`),
  CONSTRAINT `fk_sistema_usuario`
    FOREIGN KEY (`administracao_id`)
    REFERENCES `creative`.`administracao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `creative`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `creative`.`usuario` (
  `idusuario` BIGINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
