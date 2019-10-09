CREATE TABLE menu (
id INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR (30) NOT NULL,
lastname VARCHAR (30) NOT NULL,
email VARCHAR (50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


ALTER TABLE `testdb`.`menu` 
CHANGE COLUMN `firstname` `name` VARCHAR(30) NOT NULL ,
CHANGE COLUMN `lastname` `about` VARCHAR(30) NOT NULL ,
CHANGE COLUMN `email` `info` VARCHAR(50) NULL DEFAULT NULL ;


INSERT INTO `testdb`.`menu` (`id`, `name`, `about`, `info`) VALUES ('1', 'Manu', 'information', 'history');
INSERT INTO `testdb`.`menu` (`id`, `name`, `about`, `info`) VALUES ('2', 'About us', 'information', 'history');
INSERT INTO `testdb`.`menu` (`id`, `name`, `about`, `info`) VALUES ('3', 'Contact', 'information', 'history');
INSERT INTO `testdb`.`menu` (`id`, `name`, `about`, `info`) VALUES ('4', 'Gallery', 'information', 'history');


ALTER TABLE `testdb`.`menu` 
ADD COLUMN `name` VARCHAR(45) NOT NULL AFTER `idmenu`,
ADD COLUMN `about` VARCHAR(45) NOT NULL AFTER `name`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`idmenu`, `name`, `about`);


INSERT INTO `testdb`.`menu` (`idmenu`, `name`, `about`) VALUES ('1', 'menu', 'about');
INSERT INTO `testdb`.`menu` (`idmenu`, `name`, `about`) VALUES ('2', 'about us', 'about');
INSERT INTO `testdb`.`menu` (`idmenu`, `name`, `about`) VALUES ('3', 'contact', 'about');
