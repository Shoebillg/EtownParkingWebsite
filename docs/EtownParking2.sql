-- MySQL Script generated by MySQL Workbench
-- Tue Oct 24 19:32:27 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema etownparking
-- -----------------------------------------------------
DROP DATABASE `etownparking`;
CREATE DATABASE `etownparking`;
USE `etownparking` ;

-- -----------------------------------------------------
-- Table `etownparking`.`badgeTypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `etownparking`.`badgeTypes` ;

CREATE TABLE IF NOT EXISTS `etownparking`.`badgeTypes` (
  `typeID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
PRIMARY KEY (`typeID`));


-- -----------------------------------------------------
-- Table `etownparking`.`parkingLots`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `etownparking`.`parkingLots` ;

CREATE TABLE IF NOT EXISTS `etownparking`.`parkingLots` (
  `lotID` INT NOT NULL AUTO_INCREMENT,
  `lotName` VARCHAR(45) NULL,
  `image` VARCHAR(45) NULL,
  `side` VARCHAR(45) NULL,
  `top` VARCHAR(45) NULL,
PRIMARY KEY (`lotID`));


-- -----------------------------------------------------
-- Table `etownparking`.`parkingTimes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `etownparking`.`parkingTimes` ;

CREATE TABLE IF NOT EXISTS `etownparking`.`parkingTimes` (
  `timeID` INT NOT NULL AUTO_INCREMENT,
  `startTime` TIME NULL,
  `endTime` TIME NULL,
PRIMARY KEY (`timeID`));


-- -----------------------------------------------------
-- Table `etownparking`.`Parking Rules`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `etownparking`.`parkingRules` ;

CREATE TABLE IF NOT EXISTS `etownparking`.`parkingRules` (
  `ruleID` INT NULL AUTO_INCREMENT,
  `typeID` INT NOT NULL,
  `lotID` INT NOT NULL,
  `timeID` INT NOT NULL,
  `day` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`ruleID`),
  CONSTRAINT `typeID`
    FOREIGN KEY (`typeID`)
    REFERENCES `etownparking`.`badgeTypes` (`typeID`),
  CONSTRAINT `lotID`
    FOREIGN KEY (`lotID`)
    REFERENCES `etownparking`.`parkingLots` (`lotID`),
  CONSTRAINT `timeID`
    FOREIGN KEY (`timeID`)
    REFERENCES `etownparking`.`parkingTimes` (`timeID`)
  );
