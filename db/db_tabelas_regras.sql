CREATE TABLE `natalacao`.`tbl_entidade`(  
  `id_entidade` INT NOT NULL AUTO_INCREMENT,
  `nome_entidade` VARCHAR(150) NOT NULL,
  `nome_fantasia` VARCHAR(250) NOT NULL,
  `endereco` VARCHAR(250) NOT NULL,
  `numero` VARCHAR(10) NOT NULL,
  `telefone` VARCHAR(12) NOT NULL,
  `complemento` VARCHAR(100),
  `ativo` ENUM('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id_entidade`)
) ENGINE=INNODB CHARSET=utf8;


CREATE TABLE `natalacao`.`tbl_beneficiado`(  
  `id_beneficiado` INT NOT NULL AUTO_INCREMENT,
  `id_entidade` INT NOT NULL,
  `nome_benef` VARCHAR(250) NOT NULL,
  `nr_rg_cpf` VARCHAR(14) NOT NULL,
  `endereco` VARCHAR(250) NOT NULL,
  `numero` VARCHAR(10) NOT NULL,
  `telefone` VARCHAR(12) NOT NULL,
  `complemento` VARCHAR(100),
  `ativo` ENUM('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  `caracteristicas` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id_beneficiado`),
  CONSTRAINT `fk_entidade_benef` FOREIGN KEY (`id_entidade`) REFERENCES `natalacao`.`tbl_entidade`(`id_entidade`)
) ENGINE=INNODB CHARSET=utf8;

CREATE TABLE `natalacao`.`tbl_doador`(  
  `id_doador` INT NOT NULL AUTO_INCREMENT,
  `nome_doador` VARCHAR(250) NOT NULL,
  `nr_rg_cpf` VARCHAR(14) NOT NULL,
  `telefone` VARCHAR(12) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_doador`),
  UNIQUE INDEX `EMAIL_UNICO` (`email`)
) ENGINE=INNODB CHARSET=utf8;

CREATE TABLE `natalacao`.`tbl_movimento`(  
  `id_movimento` INT NOT NULL AUTO_INCREMENT,
  `id_entidade` INT NOT NULL,
  `id_beneficiado` INT NOT NULL,
  `dt_periodo` DATETIME NOT NULL,
  PRIMARY KEY (`id_movimento`),
  CONSTRAINT `fk_mov_entidade` FOREIGN KEY (`id_entidade`) REFERENCES `natalacao`.`tbl_entidade`(`id_entidade`),
  CONSTRAINT `fk_mov_benef` FOREIGN KEY (`id_beneficiado`) REFERENCES `natalacao`.`tbl_beneficiado`(`id_beneficiado`)
) ENGINE=INNODB CHARSET=utf8;

CREATE TABLE `natalacao`.`tbl_movimento_item`(  
  `id_movimento_item` INT NOT NULL AUTO_INCREMENT,
  `id_movimento` INT NOT NULL,
  `tipo_doacao` VARCHAR(100) NOT NULL,
  `id_doador` INT NOT NULL,
  PRIMARY KEY (`id_movimento_item`),
  CONSTRAINT `fk_movitem_mov` FOREIGN KEY (`id_movimento`) REFERENCES `natalacao`.`tbl_movimento`(`id_movimento`),
  CONSTRAINT `fk_movitem_doador` FOREIGN KEY (`id_doador`) REFERENCES `natalacao`.`tbl_doador`(`id_doador`)
) ENGINE=INNODB CHARSET=utf8;