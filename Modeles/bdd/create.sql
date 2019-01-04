-- MySQL Script generated by MySQL Workbench
-- Fri Jan  4 16:05:53 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Eval_fin
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Eval_fin` ;

-- -----------------------------------------------------
-- Schema Eval_fin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Eval_fin` DEFAULT CHARACTER SET utf8 ;
USE `Eval_fin` ;




-- -----------------------------------------------------
-- Table `Eval_fin`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Eval_fin`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `profession` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eval_fin`.`responsable`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Eval_fin`.`responsable` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `code_postal` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `mail` VARCHAR(45) NULL,
  `date_de_naissance` VARCHAR(45) NULL,
  `age` VARCHAR(45) NULL,
  `telephone` VARCHAR(45) NULL,
  `sexe` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eval_fin`.`patient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Eval_fin`.`patient` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `code_postal` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `mail` VARCHAR(45) NULL,
  `date_de_naissance` VARCHAR(45) NULL,
  `age` VARCHAR(45) NULL,
  `telephone` VARCHAR(45) NULL,
  `sexe` VARCHAR(45) NULL,
  `mode_de_vie` LONGTEXT NULL,
  `alimentation` LONGTEXT NULL,
  `type` ENUM('Adulte', 'Enfant', 'Animal') NULL,
  `patientcol` VARCHAR(45) NULL,
  `responsable_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_patient_responsable1_idx` (`responsable_id` ASC) ,
  CONSTRAINT `fk_patient_responsable1`
    FOREIGN KEY (`responsable_id`)
    REFERENCES `Eval_fin`.`responsable` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eval_fin`.`fiche_consulation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Eval_fin`.`fiche_consulation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type_consultation` VARCHAR(255) NULL,
  `type_pathologie` VARCHAR(255) NULL,
  `lieu_consulation` LONGTEXT NULL,
  `protocole_utilise` VARCHAR(255) NULL,
  `resultat_obtenu` LONGTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eval_fin`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Eval_fin`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `date` DATETIME NOT NULL,
  `date_fin` TIME NOT NULL,
  `date_debut` TIME NOT NULL,
  `description` MEDIUMTEXT NULL,
  `vacance` ENUM('Oui', 'Non') NOT NULL,
  `fiche_consulation_id` INT NULL,
  `patient_id` INT NULL,
  `user_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_events_fiche_consulation1_idx` (`fiche_consulation_id` ASC) ,
  INDEX `fk_events_patient1_idx` (`patient_id` ASC) ,
  INDEX `fk_events_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_events_fiche_consulation1`
    FOREIGN KEY (`fiche_consulation_id`)
    REFERENCES `Eval_fin`.`fiche_consulation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_patient1`
    FOREIGN KEY (`patient_id`)
    REFERENCES `Eval_fin`.`patient` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Eval_fin`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Eval_fin`.`photo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Eval_fin`.`photo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `photo` LONGTEXT NOT NULL,
  `fiche_consulation_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_photo_fiche_consulation1_idx` (`fiche_consulation_id` ASC) ,
  CONSTRAINT `fk_photo_fiche_consulation1`
    FOREIGN KEY (`fiche_consulation_id`)
    REFERENCES `Eval_fin`.`fiche_consulation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
