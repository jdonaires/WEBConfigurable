-- MySQL Script generated by MySQL Workbench
-- Sat Nov  3 12:26:18 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema PagAdmin
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PagAdmin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PagAdmin` DEFAULT CHARACTER SET utf8 ;
USE `PagAdmin` ;

-- -----------------------------------------------------
-- Table `PagAdmin`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`Usuario` (
  `IdUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombres` VARCHAR(45) NULL,
  `Apellidos` VARCHAR(45) NULL,
  `Correo` VARCHAR(45) NULL,
  `Contraseña` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`IdUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`Noticias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`Noticias` (
  `IdNoticias` INT NOT NULL AUTO_INCREMENT,
  `TituloNoticia` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Imagen` VARCHAR(45) NULL,
  `URL` VARCHAR(45) NULL,
  `Posicion` VARCHAR(45) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdNoticias`),
  INDEX `fk_Noticias_Usuario_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `fk_Noticias_Usuario`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`RedesSociales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`RedesSociales` (
  `IdRedesSociales` INT NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(45) NULL,
  `Imagen` VARCHAR(45) NULL,
  `LinkEnlace` VARCHAR(45) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdRedesSociales`),
  INDEX `fk_RedesSociales_Usuario1_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `fk_RedesSociales_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`Contacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`Contacto` (
  `IdContacto` INT NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(45) NULL,
  `Direccion` VARCHAR(45) NULL,
  `Imagen` VARCHAR(45) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdContacto`),
  INDEX `fk_Contacto_Usuario1_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `fk_Contacto_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`Permisos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`Permisos` (
  `IdPermisos` INT NOT NULL,
  `Permiso` VARCHAR(45) NULL,
  PRIMARY KEY (`IdPermisos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`UsuarioPermi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`UsuarioPermi` (
  `IdUsuarioPermiso` INT NOT NULL,
  `IdUsuario` INT NOT NULL,
  `IdPermisos` INT NOT NULL,
  PRIMARY KEY (`IdUsuarioPermiso`),
  INDEX `fk_UsuarioPermi_Usuario1_idx` (`IdUsuario` ASC) ,
  INDEX `fk_UsuarioPermi_Permisos1_idx` (`IdPermisos` ASC) ,
  CONSTRAINT `fk_UsuarioPermi_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_UsuarioPermi_Permisos1`
    FOREIGN KEY (`IdPermisos`)
    REFERENCES `PagAdmin`.`Permisos` (`IdPermisos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`InfoNosotros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`InfoNosotros` (
  `IdInfoNosotros` INT NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Image1` VARCHAR(45) NULL,
  `Image2` VARCHAR(45) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdInfoNosotros`),
  INDEX `fk_InfoNosotros_Usuario1_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `fk_InfoNosotros_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`Nosotros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`Nosotros` (
  `IdNosotros` INT NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(100) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdNosotros`),
  INDEX `fk_Nosotros_Usuario1_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `fk_Nosotros_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`ImagenNosotros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`ImagenNosotros` (
  `IdImagenNosotros` INT NOT NULL AUTO_INCREMENT,
  `Image` VARCHAR(45) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdImagenNosotros`),
  INDEX `fk_ImagenNosotros_Usuario1_idx` (`IdUsuario` ASC),
  CONSTRAINT `fk_ImagenNosotros_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PagAdmin`.`ConoceMas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PagAdmin`.`ConoceMas` (
  `IdConoceMas` INT NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(45) NULL,
  `URL` VARCHAR(45) NULL,
  `Image` VARCHAR(45) NULL,
  `IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdConoceMas`),
  INDEX `fk_ConoceMas_Usuario1_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `fk_ConoceMas_Usuario1`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `PagAdmin`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;