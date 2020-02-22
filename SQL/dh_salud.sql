-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dh_salud
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dh_salud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dh_salud` DEFAULT CHARACTER SET utf8 ;
USE `dh_salud` ;

-- -----------------------------------------------------
-- Table `dh_salud`.`Turno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`Turno` (
  `id` INT UNSIGNED NULL AUTO_INCREMENT,
  `Fecha` DATETIME NOT NULL,
  `Profesional` VARCHAR(45) NOT NULL,
  `Paciente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`ObraSocial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`ObraSocial` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`Paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`Paciente` (
  `id` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Documento` VARCHAR(45) NOT NULL,
  `Obra social` VARCHAR(45) NOT NULL,
  `Beneficiario` TINYINT NOT NULL,
  `SocioN` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(45) NOT NULL,
  `Localidad` VARCHAR(45) NOT NULL,
  `Provincia` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `ObraSocial_id` INT NOT NULL,
  PRIMARY KEY (`id`, `ObraSocial_id`),
  INDEX `fk_Paciente_ObraSocial1_idx` (`ObraSocial_id` ASC) VISIBLE,
  CONSTRAINT `fk_Paciente_ObraSocial1`
    FOREIGN KEY (`ObraSocial_id`)
    REFERENCES `dh_salud`.`ObraSocial` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`Especialidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`Especialidades` (
  `id` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`Profesionales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`Profesionales` (
  `id` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Matricula` VARCHAR(45) NULL,
  `Documento` VARCHAR(45) NULL,
  `Especialidades_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Especialidades_id`),
  INDEX `fk_Profesionales_Especialidades_idx` (`Especialidades_id` ASC) VISIBLE,
  CONSTRAINT `fk_Profesionales_Especialidades`
    FOREIGN KEY (`Especialidades_id`)
    REFERENCES `dh_salud`.`Especialidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`Administrador` (
  `id` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `usuario` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `contrasenia` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `documento` VARCHAR(45) NOT NULL,
  `administrador` TINYINT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`administradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`administradores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_administradores_usuarios1_idx` (`usuarios_id` ASC) VISIBLE,
  CONSTRAINT `fk_administradores_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `dh_salud`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`especialidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`especialidades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`profesionales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`profesionales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `matricula` VARCHAR(45) NOT NULL,
  `especialidades_id` INT NOT NULL,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_profesionales_especialidades1_idx` (`especialidades_id` ASC) VISIBLE,
  INDEX `fk_profesionales_usuarios1_idx` (`usuarios_id` ASC) VISIBLE,
  CONSTRAINT `fk_profesionales_especialidades1`
    FOREIGN KEY (`especialidades_id`)
    REFERENCES `dh_salud`.`especialidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesionales_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `dh_salud`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`obras_sociales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`obras_sociales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`pacientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `obras_sociales_id` INT NOT NULL,
  `titular` TINYINT NOT NULL,
  `numero_socio` INT NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `provincia` VARCHAR(45) NULL,
  `telefono` INT NULL,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pacientes_obras_sociales1_idx` (`obras_sociales_id` ASC) VISIBLE,
  INDEX `fk_pacientes_usuarios1_idx` (`usuarios_id` ASC) VISIBLE,
  CONSTRAINT `fk_pacientes_obras_sociales1`
    FOREIGN KEY (`obras_sociales_id`)
    REFERENCES `dh_salud`.`obras_sociales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pacientes_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `dh_salud`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`turnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`turnos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NOT NULL,
  `profesionales_id` INT NOT NULL,
  `pacientes_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_turnos_profesionales1_idx` (`profesionales_id` ASC) VISIBLE,
  INDEX `fk_turnos_pacientes1_idx` (`pacientes_id` ASC) INVISIBLE,
  CONSTRAINT `fk_turnos_profesionales1`
    FOREIGN KEY (`profesionales_id`)
    REFERENCES `dh_salud`.`profesionales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turnos_pacientes1`
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `dh_salud`.`pacientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dh_salud`.`beneficiarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dh_salud`.`beneficiarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pacientes_id` INT NOT NULL,
  `pacientes_id1` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_beneficiarios_pacientes1_idx` (`pacientes_id` ASC) VISIBLE,
  INDEX `fk_beneficiarios_pacientes2_idx` (`pacientes_id1` ASC) VISIBLE,
  CONSTRAINT `fk_beneficiarios_pacientes1`
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `dh_salud`.`pacientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_beneficiarios_pacientes2`
    FOREIGN KEY (`pacientes_id1`)
    REFERENCES `dh_salud`.`pacientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
