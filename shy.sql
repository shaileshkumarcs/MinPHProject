CREATE TABLE `mynewproject`.`users` 
( `UID` SMALLINT NOT NULL , `FullName` VARCHAR(200) NOT NULL ,
 `EmailId` VARCHAR(200) NOT NULL , 
 `Password` VARCHAR(100) NOT NULL ,
  `Created_at` DATETIME NOT NULL ,
   `Updated_at` TIMESTAMP NOT NULL , 
   `is_confirmed` INT NOT NULL DEFAULT '0' ,
    `is_deleted` INT NOT NULL DEFAULT '0' ,
     `Phone` VARCHAR NULL ) ENGINE = InnoDB;

