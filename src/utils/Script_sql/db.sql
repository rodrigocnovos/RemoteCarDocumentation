create database WirelessCar
  DEFAULT CHARACTER SET latin1
  DEFAULT COLLATE latin1_general_ci;

use WirelessCar;


CREATE TABLE `usuarios` (
  `idUsuarios` int(10) unsigned NOT NULL auto_increment,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(65) NOT NULL,
  `nome` varchar(50)  NOT NULL,
  `sobrenome` varchar(50) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `idGrupo` int(10) unsigned NOT NULL,
  `criado` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `modificado` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  CONSTRAINT FK_grupo FOREIGN KEY(idGrupo) REFERENCES grupos(idGrupo),
  PRIMARY KEY  (`idUsuarios`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB;

create table `geoLocalizacao` (
	`idGeoLocalizacao` int(10) unsigned NOT NULL auto_increment,
	`dataEntrada` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `lat` DECIMAL(18,15)  NOT NULL,
	`long` DECIMAL(18,15)  NOT NULL,
    `idTrajeto` int(10) unsigned NOT NULL,
    `idOperador` int(10) unsigned NOT NULL,
    CONSTRAINT FK_trajeto FOREIGN KEY(idTrajeto) REFERENCES trajeto(idtrajeto),
    CONSTRAINT FK_Usuarios_Operadores FOREIGN KEY(idOperador) REFERENCES usuarios(idUsuarios),
    PRIMARY KEY  (`idGeoLocalizacao`)
) ENGINE=InnoDB;

CREATE TABLE `grupos` (
    `idGrupo` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `nomeGrupo` VARCHAR(50) NOT NULL,
    `PermControlar` BOOLEAN NOT NULL,
    `PermVisualizar` BOOLEAN NOT NULL,
    `PermMetricas` BOOLEAN NOT NULL,
    PRIMARY KEY (`idGrupo`)
)  ENGINE=INNODB;


create table `trajeto` (
	`idtrajeto` int(10) unsigned NOT NULL auto_increment,
	`NomeTrajeto` varchar(50)  NOT NULL,
    PRIMARY KEY  (`idtrajeto`)
) ENGINE=InnoDB;