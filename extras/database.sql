-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema mercurius
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mercurius` ;

-- -----------------------------------------------------
-- Schema mercurius
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mercurius` DEFAULT CHARACTER SET latin1 ;
USE `mercurius` ;

-- -----------------------------------------------------
-- Table `mercurius`.`NOTICIA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mercurius`.`NOTICIA` ;

CREATE TABLE IF NOT EXISTS `mercurius`.`NOTICIA` (
  `ID_NOTICIA` INT(11) NOT NULL AUTO_INCREMENT,
  `TITULO` TEXT NOT NULL,
  `AUTOR` VARCHAR(45) NULL DEFAULT NULL,
  `FECHA` DATETIME NOT NULL,
  `CONTENIDO` LONGTEXT NULL DEFAULT NULL,
  `ETIQUETA` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID_NOTICIA`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mercurius`.`USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mercurius`.`USUARIO` ;

CREATE TABLE IF NOT EXISTS `mercurius`.`USUARIO` (
  `ID_USUARIO` INT(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NULL DEFAULT NULL,
  `APELLIDOS` VARCHAR(45) NULL DEFAULT NULL,
  `ROL` VARCHAR(12) NULL DEFAULT NULL,
  `EMAIL` VARCHAR(45) NULL DEFAULT NULL,
  `PASSWORD` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
