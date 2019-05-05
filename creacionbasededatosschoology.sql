CREATE SCHEMA `schoology` ;
USE  `schoology` ;

CREATE TABLE `schoology`.`usuario` (
  `codusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre1` VARCHAR(450) NULL,
  `nombre2` VARCHAR(450) NULL,
  `apellido` VARCHAR(450) NULL,
  `correo` VARCHAR(450) NULL,
  `contrasena` VARCHAR(45) NULL,
  `imagen` BLOB NULL,
  PRIMARY KEY (`codusuario`),
  UNIQUE INDEX `idusuario_UNIQUE` (`codusuario` ASC));
/*Select * from usuario;*/
CREATE TABLE `schoology`.`escuela` (
  `codescuela` INT NOT NULL AUTO_INCREMENT,
  `nombreescuela` VARCHAR(450) NOT NULL,
  `website` VARCHAR(450) NULL,
  `direccion` VARCHAR(450) NULL,
  PRIMARY KEY (`codescuela`),
  UNIQUE INDEX `codescuela_UNIQUE` (`codescuela` ASC));

CREATE TABLE `schoology`.`instructores` (
  `codusuario` INT NOT NULL,
  `codescuela` INT NOT NULL,
  PRIMARY KEY (`codusuario`, `codescuela`),
  INDEX `fkInstructirCodEscuela_idx` (`codescuela` ASC),
  CONSTRAINT `fkInstructorCodUsuario`
    FOREIGN KEY (`codusuario`)
    REFERENCES `schoology`.`usuario` (`codusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkInstructirCodEscuela`
    FOREIGN KEY (`codescuela`)
    REFERENCES `schoology`.`escuela` (`codescuela`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    CREATE TABLE `schoology`.`curso` (
  `codcurso` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(450) NOT NULL,
  `seccion` VARCHAR(45) NOT NULL,
  `area` VARCHAR(45) NOT NULL,
  `nivel` VARCHAR(45) NOT NULL,
  `codinstructor` INT NULL,
  PRIMARY KEY (`codcurso`),
  UNIQUE INDEX `codcurso_UNIQUE` (`codcurso` ASC),
  INDEX `fkcursoinstructor_idx` (`codinstructor` ASC),
  CONSTRAINT `fkcursoinstructor`
    FOREIGN KEY (`codinstructor`)
    REFERENCES `schoology`.`instructores` (`codusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    CREATE TABLE `schoology`.`alumnado` (
  `codusuario` INT NOT NULL,
  `codcurso` INT NOT NULL,
  PRIMARY KEY (`codusuario`, `codcurso`),
  INDEX `fkalumnadocurso_idx` (`codcurso` ASC),
  CONSTRAINT `fkalumnadousuario`
    FOREIGN KEY (`codusuario`)
    REFERENCES `schoology`.`usuario` (`codusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkalumnadocurso`
    FOREIGN KEY (`codcurso`)
    REFERENCES `schoology`.`curso` (`codcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    CREATE TABLE `schoology`.`blog` (
  `codcurso` INT NOT NULL,
  `codusuario` INT NOT NULL,
  `codmensage` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NOT NULL,
  `mensage` VARCHAR(450) NOT NULL,
  PRIMARY KEY (`codmensage`),
  INDEX `fkblogusuario_idx` (`codusuario` ASC),
  INDEX `fkblogcurso_idx` (`codcurso` ASC),
  CONSTRAINT `fkblogusuario`
    FOREIGN KEY (`codusuario`)
    REFERENCES `schoology`.`usuario` (`codusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkblogcurso`
    FOREIGN KEY (`codcurso`)
    REFERENCES `schoology`.`curso` (`codcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    
