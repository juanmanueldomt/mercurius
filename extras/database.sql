-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Boletin_Upiicsa
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Boletin_Upiicsa` ;

-- -----------------------------------------------------
-- Schema Boletin_Upiicsa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Boletin_Upiicsa` DEFAULT CHARACTER SET latin1 ;
USE `Boletin_Upiicsa` ;

-- -----------------------------------------------------
-- Table `Boletin_Upiicsa`.`NOTICIA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Boletin_Upiicsa`.`NOTICIA` ;

CREATE TABLE IF NOT EXISTS `Boletin_Upiicsa`.`NOTICIA` (
  `ID_NOTICIA` INT(11) NOT NULL,
  `TITULO` TEXT NOT NULL,
  `AUTOR` VARCHAR(45) NULL DEFAULT NULL,
  `CONTENIDO` LONGTEXT NULL DEFAULT NULL,
  `ETIQUETA` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID_NOTICIA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `Boletin_Upiicsa`.`USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Boletin_Upiicsa`.`USUARIO` ;

CREATE TABLE IF NOT EXISTS `Boletin_Upiicsa`.`USUARIO` (
  `ID_USUARIO` INT(11) NOT NULL,
  `NOMBRE` VARCHAR(45) NULL DEFAULT NULL,
  `APELLIDOS` VARCHAR(45) NULL DEFAULT NULL,
  `ROL` VARCHAR(12) NULL DEFAULT NULL,
  `EMAIL` VARCHAR(45) NULL DEFAULT NULL,
  `PASSWORD` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `Boletin_Upiicsa`.`new_table`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Boletin_Upiicsa`.`new_table` ;

CREATE TABLE IF NOT EXISTS `Boletin_Upiicsa`.`new_table` (
  `ID` INT(11) NOT NULL,
  `ETIQUETA` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
