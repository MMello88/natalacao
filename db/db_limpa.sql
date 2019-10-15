/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.10-MariaDB : Database - natalacao
*********************************************************************
*/
DROP DATABASE `natalacao`;
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`natalacao` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `natalacao`;

/*Table structure for table `tbl_beneficiado` */

DROP TABLE IF EXISTS `tbl_beneficiado`;

CREATE TABLE `tbl_beneficiado` (
  `id_beneficiado` int(11) NOT NULL AUTO_INCREMENT,
  `id_entidade` int(11) NOT NULL,
  `nome_benef` varchar(250) NOT NULL,
  `nr_rg_cpf` varchar(14) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `ativo` enum('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  `caracteristicas` varchar(150) NOT NULL,
  PRIMARY KEY (`id_beneficiado`),
  KEY `fk_entidade_benef` (`id_entidade`),
  CONSTRAINT `fk_entidade_benef` FOREIGN KEY (`id_entidade`) REFERENCES `tbl_entidade` (`id_entidade`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_beneficiado` */

insert  into `tbl_beneficiado`(`id_beneficiado`,`id_entidade`,`nome_benef`,`nr_rg_cpf`,`endereco`,`numero`,`telefone`,`complemento`,`ativo`,`caracteristicas`) values (6,1,'Matheus de Mello','78788333333333','Av. Nove de Julho, 125','12','16991838523',NULL,'Ativo','Camiseta G, Calçado 42, Calça 38'),(7,1,'Jeff Machine Young','1234567','4092 Furth Circle','400','2125557413',NULL,'Ativo','Camiseta G, Calçado 42, Calça 38'),(8,1,'Sergio','98777777','Rua Alvares Cabral','123','16991838523',NULL,'Ativo','Camiseta G, Calçado 42, Calça 38');

/*Table structure for table `tbl_ci_sessions` */

DROP TABLE IF EXISTS `tbl_ci_sessions`;

CREATE TABLE `tbl_ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_ci_sessions` */

insert  into `tbl_ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values ('5s0upt73qqmq3vb51elsnmn8qjjof5ui','::1',1571104879,'__ci_last_regenerate|i:1571104879;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('7ke2h1vq24p7mtpps84oq8buo5v6bjt5','::1',1571104985,'__ci_last_regenerate|i:1571104879;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('b0re0r8fd00b5sch007ejhdnfnmjun2k','::1',1570918666,'__ci_last_regenerate|i:1570918666;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"1\";s:7:\"projeto\";s:18:\"Configuração Web\";s:5:\"ativo\";s:5:\"Ativo\";}'),('heq84pfmu7brsuhjes19vpm6qbiskahe','::1',1570814104,'__ci_last_regenerate|i:1570814104;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('i7u7hnpci48725nvr05jlq9vs9q9nh3b','::1',1570929645,'__ci_last_regenerate|i:1570929330;'),('ktjs528vc21v4gqu8ibgf6t6bing44m6','::1',1570905720,'__ci_last_regenerate|i:1570905720;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('mac9rn2rjn06hhmpfsospb8tucrdn271','::1',1570816864,'__ci_last_regenerate|i:1570814103;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('ntnsembuhqie6jo0t9e4bq2hs5hm2vc5','::1',1570926800,'__ci_last_regenerate|i:1570926800;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('pikjtacuiamrlai2i1p66h25b5uop7mg','::1',1570813016,'__ci_last_regenerate|i:1570810211;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"3\";s:7:\"projeto\";s:15:\"Natal em Ação\";s:5:\"ativo\";s:5:\"Ativo\";}'),('t344gel8qplfmut6vf18miugtrba9ato','::1',1570914701,'__ci_last_regenerate|i:1570914701;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"1\";s:7:\"projeto\";s:18:\"Configuração Web\";s:5:\"ativo\";s:5:\"Ativo\";}');

/*Table structure for table `tbl_doador` */

DROP TABLE IF EXISTS `tbl_doador`;

CREATE TABLE `tbl_doador` (
  `id_doador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_doador` varchar(250) NOT NULL,
  `nr_rg_cpf` varchar(14) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_doador`),
  UNIQUE KEY `EMAIL_UNICO` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_doador` */

/*Table structure for table `tbl_entidade` */

DROP TABLE IF EXISTS `tbl_entidade`;

CREATE TABLE `tbl_entidade` (
  `id_entidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_entidade` varchar(150) NOT NULL,
  `nome_fantasia` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `ativo` enum('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id_entidade`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_entidade` */

insert  into `tbl_entidade`(`id_entidade`,`nome_entidade`,`nome_fantasia`,`endereco`,`numero`,`telefone`,`complemento`,`ativo`) values (1,'Paroquia São Benedito','Paroquia São Benedito','Av. Nove de Julho','125','16991838523',NULL,'Ativo');

/*Table structure for table `tbl_movimento` */

DROP TABLE IF EXISTS `tbl_movimento`;

CREATE TABLE `tbl_movimento` (
  `id_movimento` int(11) NOT NULL AUTO_INCREMENT,
  `id_entidade` int(11) NOT NULL,
  `id_beneficiado` int(11) NOT NULL,
  `dt_periodo` date NOT NULL,
  PRIMARY KEY (`id_movimento`),
  KEY `fk_mov_entidade` (`id_entidade`),
  KEY `fk_mov_benef` (`id_beneficiado`),
  CONSTRAINT `fk_mov_benef` FOREIGN KEY (`id_beneficiado`) REFERENCES `tbl_beneficiado` (`id_beneficiado`),
  CONSTRAINT `fk_mov_entidade` FOREIGN KEY (`id_entidade`) REFERENCES `tbl_entidade` (`id_entidade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_movimento` */

insert  into `tbl_movimento`(`id_movimento`,`id_entidade`,`id_beneficiado`,`dt_periodo`) values (1,1,6,'2019-12-25'),(2,1,7,'2019-12-25'),(3,1,8,'2019-12-25');

/*Table structure for table `tbl_movimento_item` */

DROP TABLE IF EXISTS `tbl_movimento_item`;

CREATE TABLE `tbl_movimento_item` (
  `id_movimento_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_movimento` int(11) NOT NULL,
  `tipo_doacao` enum('Presente','Cesta Basica','Cesta Material Limpesa') NOT NULL,
  `id_doador` int(11) NOT NULL,
  PRIMARY KEY (`id_movimento_item`),
  KEY `fk_movitem_mov` (`id_movimento`),
  KEY `fk_movitem_doador` (`id_doador`),
  CONSTRAINT `fk_movitem_doador` FOREIGN KEY (`id_doador`) REFERENCES `tbl_doador` (`id_doador`),
  CONSTRAINT `fk_movitem_mov` FOREIGN KEY (`id_movimento`) REFERENCES `tbl_movimento` (`id_movimento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_movimento_item` */

/*Table structure for table `tbl_pagina` */

DROP TABLE IF EXISTS `tbl_pagina`;

CREATE TABLE `tbl_pagina` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `principal` enum('Não','Sim') NOT NULL DEFAULT 'Não',
  `configuracao` enum('Não','Sim') NOT NULL DEFAULT 'Não',
  `ativo` enum('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  `ordem` int(3) NOT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pagina` */

insert  into `tbl_pagina`(`id_pagina`,`pagina`,`url`,`principal`,`configuracao`,`ativo`,`ordem`) values (1,'Home','#home','Sim','Não','Ativo',1),(2,'Sobre','#sobre','Não','Não','Ativo',4),(3,'Contato','#contato','Não','Não','Ativo',5),(4,'cabeçalho','cabecalho','Não','Sim','Ativo',98),(5,'rodape','rodape','Não','Sim','Ativo',99),(6,'Doação','#doacao','Não','Não','Ativo',2),(7,'Fazer Doação','doacao/doar','Não','Não','Ativo',3);

/*Table structure for table `tbl_pagina_valor` */

DROP TABLE IF EXISTS `tbl_pagina_valor`;

CREATE TABLE `tbl_pagina_valor` (
  `id_pagina_valor` int(11) NOT NULL AUTO_INCREMENT,
  `id_pagina` int(11) NOT NULL,
  `campo` varchar(150) NOT NULL,
  `valor` varchar(2000) NOT NULL,
  `ativo` enum('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id_pagina_valor`),
  KEY `fk_pg_pg_valor` (`id_pagina`),
  CONSTRAINT `fk_pg_pg_valor` FOREIGN KEY (`id_pagina`) REFERENCES `tbl_pagina` (`id_pagina`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pagina_valor` */

insert  into `tbl_pagina_valor`(`id_pagina_valor`,`id_pagina`,`campo`,`valor`,`ativo`) values (2,2,'titulo','Sobre nós','Ativo'),(3,4,'author','Matheus de Mello','Ativo'),(4,4,'description','Natal em Açao Ribeirão Preto. Relizada pela Paroquia.','Ativo'),(5,4,'keywords','Natal; Açao; Ribeirão Preto; Doaçao;','Ativo'),(6,4,'title','Natal em Açao RP','Ativo'),(7,4,'url','www.natalemacaorp.com.br','Ativo'),(8,4,'site_name','Natal em Ação RP','Ativo'),(9,4,'image','criancas.jpg','Ativo'),(10,4,'type','website','Ativo'),(11,5,'facebook','https://www.facebook.com/Matheus.Melllo','Ativo'),(12,5,'instagram','https://www.instagram.com/mmello088/','Ativo'),(13,5,'twitter','https://twitter.com/m0rena0','Ativo'),(14,5,'endereco','Av. Nove de Julho','Ativo'),(15,5,'email','matheus.gnu@gmail.com','Ativo'),(16,5,'telefone','(016) 99184-8523','Ativo'),(17,5,'horario','08:00 à 18:00','Ativo'),(18,2,'item_imagem','sobre1.jpg','Ativo'),(19,2,'item_titulo','Margaret E.','Ativo'),(20,2,'item_descricao','\"This is fantastic! Thanks so much guys!\"','Ativo'),(21,2,'item_imagem1','sobre2.jpg','Ativo'),(22,2,'item_titulo1','Fred S.','Ativo'),(23,2,'item_descricao1','\"Bootstrap is amazing. I\'ve been using it to create lots of super nice landing pages.\"','Ativo'),(24,2,'item_imagem2','sobre3.jpg','Ativo'),(25,2,'item_titulo2','Sarah W.','Ativo'),(26,2,'item_descricao2','\"Thanks so much for making these free resources available to us!\"','Ativo'),(27,1,'titulo','Contribui com nossa paróquia','Ativo'),(28,1,'descricao','Sua doação pode mudar vidas. Doe e acompanhe nossos trabalhos estamos trazendo esperanças a nossa juventude.','Ativo'),(29,6,'titulo','Como realizar doação','Ativo'),(30,6,'doacao_icon','icon-screen-desktop','Ativo'),(31,6,'doacao_titulo','Fully Responsive','Ativo'),(32,6,'doacao_descricao','This theme will look great on any device, no matter the size!','Ativo'),(33,6,'doacao_icon1','icon-layers','Ativo'),(34,6,'doacao_titulo1','Bootstrap 4 Ready','Ativo'),(35,6,'doacao_descricao1','Featuring the latest build of the new Bootstrap 4 framework!','Ativo'),(36,6,'doacao_icon2','icon-badge','Ativo'),(37,6,'doacao_titulo2','Easy to Use','Ativo'),(38,6,'doacao_descricao2','Ready to use with your own content, or customize the source files!','Ativo');

/*Table structure for table `tbl_projeto` */

DROP TABLE IF EXISTS `tbl_projeto`;

CREATE TABLE `tbl_projeto` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `projeto` varchar(150) NOT NULL,
  `ativo` enum('Ativo','Desativado') NOT NULL,
  PRIMARY KEY (`id_projeto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_projeto` */

insert  into `tbl_projeto`(`id_projeto`,`projeto`,`ativo`) values (1,'Configuração Web','Ativo'),(2,'Administrador','Ativo'),(3,'Natal em Ação','Ativo');

/*Table structure for table `tbl_projeto_menu` */

DROP TABLE IF EXISTS `tbl_projeto_menu`;

CREATE TABLE `tbl_projeto_menu` (
  `id_projeto_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_projeto` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `ativo` enum('Ativo','Desativado') NOT NULL,
  `ordem` int(10) NOT NULL,
  `id_projeto_pai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_projeto_menu`),
  KEY `fk_pro_pro_menu` (`id_projeto`),
  KEY `fk_pro_pro_menu_pai` (`id_projeto_pai`),
  CONSTRAINT `fk_pro_pro_menu` FOREIGN KEY (`id_projeto`) REFERENCES `tbl_projeto` (`id_projeto`),
  CONSTRAINT `fk_pro_pro_menu_pai` FOREIGN KEY (`id_projeto_pai`) REFERENCES `tbl_projeto_menu` (`id_projeto_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_projeto_menu` */

insert  into `tbl_projeto_menu`(`id_projeto_menu`,`id_projeto`,`menu`,`url`,`ativo`,`ordem`,`id_projeto_pai`) values (1,1,'Paginas','admin/paginas','Ativo',1,7),(2,1,'Objeto da Pagina','admin/configuracao','Ativo',2,7),(3,2,'Configurações do Projeto','proj','Ativo',0,NULL),(4,2,'Menu','admin/menu','Ativo',2,3),(6,2,'Projetos','admin/projeto','Ativo',1,3),(7,1,'Configurações de Paginas','cfg','Ativo',0,NULL),(8,3,'Movimentações','movimento','Ativo',0,NULL),(9,3,'Movimentação','admin/movimento','Ativo',1,8),(10,3,'Itens da Movimentação','admin/movItem','Ativo',2,8),(11,3,'Entidade','admin/entidade','Ativo',3,8),(12,3,'Befeneficiado','admin/beneficiado','Ativo',4,8),(13,3,'Doador','admin/doador','Ativo',5,8);

/*Table structure for table `tbl_usuario` */

DROP TABLE IF EXISTS `tbl_usuario`;

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `dt_nascimento` datetime DEFAULT NULL,
  `celular` char(15) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `super_usuario` char(100) DEFAULT NULL,
  `biografia` varchar(300) DEFAULT NULL,
  `compania` varchar(150) DEFAULT NULL,
  `contratacao` char(1) DEFAULT NULL,
  `imagem_perfil` varchar(100) DEFAULT NULL,
  `url_linkedin` varchar(150) DEFAULT NULL,
  `url_facebook` varchar(150) DEFAULT NULL,
  `url_twitter` varchar(150) DEFAULT NULL,
  `url_github` varchar(150) DEFAULT NULL,
  `ativo` enum('Ativo','Desativo') NOT NULL DEFAULT 'Ativo',
  `cadastro_completo` char(1) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `dt_hash_exp` datetime DEFAULT NULL,
  `code_cookie_hash` varchar(150) DEFAULT NULL,
  `hash_email` varchar(250) DEFAULT NULL,
  `email_valid` char(1) DEFAULT NULL,
  `ver_cad_usuario` char(1) DEFAULT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_usuario_pai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `Uk_Email` (`email`),
  UNIQUE KEY `Uk_Super_usuario` (`super_usuario`),
  UNIQUE KEY `Uk_Code_Cookie` (`code_cookie_hash`),
  KEY `fk_tipo_usuario` (`id_tipo_usuario`),
  KEY `fk_usuario_conv` (`id_usuario_pai`),
  CONSTRAINT `fk_usuario_conv` FOREIGN KEY (`id_usuario_pai`) REFERENCES `tbl_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_usuario` */

insert  into `tbl_usuario`(`id_usuario`,`nome`,`email`,`senha`,`dt_nascimento`,`celular`,`sexo`,`super_usuario`,`biografia`,`compania`,`contratacao`,`imagem_perfil`,`url_linkedin`,`url_facebook`,`url_twitter`,`url_github`,`ativo`,`cadastro_completo`,`dt_cadastro`,`hash`,`dt_hash_exp`,`code_cookie_hash`,`hash_email`,`email_valid`,`ver_cad_usuario`,`id_tipo_usuario`,`id_usuario_pai`) values (1,'Administrador','admin@matilab.com.br','45339359513f09155110f63f7ca91c3e','1988-04-18 00:00:00','016991838523','m','@root','Dev Goods','Matilab','0','unknown-profile.jpg','','mello','@m0rena0','','Ativo','1','2019-05-01 23:24:15','','0000-00-00 00:00:00','4m6oc6q1fbhds6u728a3sh0tddae5r3h','','1','1',1,1),(8,'Matheus de Mello','matheus.gnu@gmail.com','45339359513f09155110f63f7ca91c3e','1988-04-18 00:00:00','016991838523','m','@matheus',NULL,NULL,NULL,'unknown-profile.jpg',NULL,NULL,NULL,NULL,'Ativo','1','2019-09-11 03:45:51','','0000-00-00 00:00:00',NULL,'','1','1',0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
