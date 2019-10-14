CREATE DATABASE `pokemons-dominikow-sebastian`;
CREATE TABLE `pokemons-dominikow-sebastian`.`pokemon` ( `id` INT NOT NULL AUTO_INCREMENT , `imagen` VARCHAR(100) NOT NULL , `nombre` VARCHAR(30) NOT NULL , `numero` INT(3) NOT NULL , `tipo` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `pokemons-dominikow-sebastian`.`usuario` ( `id` INT NOT NULL AUTO_INCREMENT , `nombreUsuario` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `usuario` (`id`, `nombreUsuario`, `password`) VALUES (NULL, 'admin', 'admin');

INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Bulbasaur.png', 'Bulbasaur', '1', 'Planta');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Ivysaur.png', 'Ivysaur', '2', 'Planta');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Venusaur.png', 'Venusaur', '3', 'Planta');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Charmander.png', 'Charmander', '4', 'Fuego');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Charmeleon.png', 'Charmeleon', '5', 'Fuego');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Charizard.png', 'Charizard', '6', 'Fuego');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Squirtle.png', 'Squirtle', '7', 'Agua');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Wartortle.png', 'Wartortle', '8', 'Agua');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Blastoise.png', 'Blastoise', '9', 'Agua');
INSERT INTO `pokemon` (`id`, `imagen`, `nombre`, `numero`, `tipo`) VALUES (NULL, 'img/Caterpie.png', 'Caterpie', '10', 'Insecto');
