/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.9-MariaDB-log : Database - natalacao
*********************************************************************
*/

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_beneficiado` */

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

insert  into `tbl_ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values ('070n8td1s0to8vntpu3t1rneov4mar1e','::1',1568076940,'__ci_last_regenerate|i:1568076922;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('10j1sr958q00u3b6sv26hbc6ca5jhcp4','::1',1566671330,'__ci_last_regenerate|i:1566671306;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('19v19o9v16cdkt9egl2q3ps0ke3rd936','::1',1570051260,'__ci_last_regenerate|i:1570049841;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}'),('1ft2evj69s1o4uedjohmph97usoipvr2','::1',1570122836,'__ci_last_regenerate|i:1570119284;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}|N;projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"1\";s:7:\"projeto\";s:18:\"Configuração Web\";s:5:\"ativo\";s:5:\"Ativo\";}'),('26f450r8fd7anu8qhu5ofpbuv77ikes8','::1',1567871487,'__ci_last_regenerate|i:1567871391;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('4fgii7l6q1h9td3m2pckoiuqnh2r1rhb','::1',1566672215,'__ci_last_regenerate|i:1566672180;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('99srqr6bi88b4mtd2al0om6gd37advv1','::1',1566672181,'__ci_last_regenerate|i:1566672180;'),('anou2udeip3ml6mq256h4nbvb0lin7sg','::1',1566738096,'__ci_last_regenerate|i:1566738083;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('cjt4bt2o9o5a2ebn4v75057i0ob1ktq9','::1',1567475633,'__ci_last_regenerate|i:1567475631;'),('co5jv30kfamflr0hs46rk44kkhlsi7h4','::1',1568167421,'__ci_last_regenerate|i:1568167421;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('d8oomgjd53tp4ckdoorl9ffc3a785eir','192.168.1.108',1567871741,'__ci_last_regenerate|i:1567871648;'),('dngehqk9jea52789041t0tg171h4cqle','127.0.0.1',1567029807,'__ci_last_regenerate|i:1567029802;'),('eebka5e78o6bhsi6odoha80gs3dgjdti','::1',1566867075,'__ci_last_regenerate|i:1566867070;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('fh3s5gnq558as4prmcareire2eskar5t','::1',1568073151,'__ci_last_regenerate|i:1568073149;'),('gb8kb2qifm5d8gajd7jabcuapo5701i4','::1',1570036452,'__ci_last_regenerate|i:1570035650;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}'),('lbcmi0kanab0jk2198u0v6tpbuai2bt8','::1',1567871711,'__ci_last_regenerate|i:1567871583;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('mj2l3f2jmn6dd7i0vu4ejtmmf0mp2a5c','::1',1568164443,'__ci_last_regenerate|i:1568163272;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('mkf93qm6pqisv81jfj1n1u4n23cda5an','::1',1569949689,'__ci_last_regenerate|i:1569949013;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}'),('nnhkpoad89gajue2vkb3lbrcs75vf95n','::1',1567563485,'__ci_last_regenerate|i:1567563483;'),('ognuvc79mmktcjm1722m1osftu6aqrlt','::1',1570129443,'__ci_last_regenerate|i:1570129427;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"1\";s:7:\"projeto\";s:18:\"Configuração Web\";s:5:\"ativo\";s:5:\"Ativo\";}'),('oolr0fhg4p6dklchlvp0f88rc1oaamq2','::1',1566867070,'__ci_last_regenerate|i:1566867070;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('paprpp6tjtoa6pspi53no7ero6nt1bbc','::1',1568168060,'session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}__ci_last_regenerate|i:1568168060;'),('pnvdrbk9gb3mi9u0gjq25vt23md3qgl9','192.168.1.108',1566784066,'__ci_last_regenerate|i:1566783508;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('q6umbthgkb4lpuub6r1qobdic5so5h33','::1',1569948987,'__ci_last_regenerate|i:1569945404;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}'),('qdvet8q6bsvfhi8arot4gsbjq77e9f0v','::1',1567735189,'__ci_last_regenerate|i:1567735189;'),('r4p84gi8kqljt0qq6bedajr1orf3i1f1','::1',1566743191,'__ci_last_regenerate|i:1566743191;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('shagmpq8o6sggc5jeglidp0vptqi6g4r','::1',1570046385,'__ci_last_regenerate|i:1570045607;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}'),('svin05qt5jcvrsgslh5ajigte8gf8qgq','::1',1566784187,'__ci_last_regenerate|i:1566784187;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('u783niq71gsbu5f2mnq0meqf33mfr1df','::1',1570016130,'__ci_last_regenerate|i:1570015235;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}'),('u7irnjd8qtnc08p8evtap8kgbmm2od5i','192.168.1.108',1567871561,'__ci_last_regenerate|i:1567871561;'),('v2mmurh33e1idkim3c1225dd09m4aqtt','::1',1568163272,'__ci_last_regenerate|i:1568163272;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}'),('v6j8b0km6tn4f39376v02nhqv85f9fpd','::1',1570127156,'__ci_last_regenerate|i:1570125049;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}projeto|O:8:\"stdClass\":3:{s:10:\"id_projeto\";s:1:\"1\";s:7:\"projeto\";s:18:\"Configuração Web\";s:5:\"ativo\";s:5:\"Ativo\";}');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_entidade` */

/*Table structure for table `tbl_movimento` */

DROP TABLE IF EXISTS `tbl_movimento`;

CREATE TABLE `tbl_movimento` (
  `id_movimento` int(11) NOT NULL AUTO_INCREMENT,
  `id_entidade` int(11) NOT NULL,
  `id_beneficiado` int(11) NOT NULL,
  `dt_periodo` datetime NOT NULL,
  PRIMARY KEY (`id_movimento`),
  KEY `fk_mov_entidade` (`id_entidade`),
  KEY `fk_mov_benef` (`id_beneficiado`),
  CONSTRAINT `fk_mov_benef` FOREIGN KEY (`id_beneficiado`) REFERENCES `tbl_beneficiado` (`id_beneficiado`),
  CONSTRAINT `fk_mov_entidade` FOREIGN KEY (`id_entidade`) REFERENCES `tbl_entidade` (`id_entidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_movimento` */

/*Table structure for table `tbl_movimento_item` */

DROP TABLE IF EXISTS `tbl_movimento_item`;

CREATE TABLE `tbl_movimento_item` (
  `id_movimento_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_movimento` int(11) NOT NULL,
  `tipo_doacao` varchar(100) NOT NULL,
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
  `ativo` enum('Ativo','Desativado') NOT NULL DEFAULT 'Ativo',
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pagina` */

insert  into `tbl_pagina`(`id_pagina`,`pagina`,`url`,`principal`,`ativo`) values (1,'principal','principal','Sim','Ativo'),(2,'sobre','sobre','Não','Ativo'),(3,'contato','contato','Não','Ativo');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pagina_valor` */

insert  into `tbl_pagina_valor`(`id_pagina_valor`,`id_pagina`,`campo`,`valor`,`ativo`) values (1,1,'facebook','www.facebook.com/matheus','Ativo'),(2,2,'nome','matheus de mello','Ativo');

/*Table structure for table `tbl_projeto` */

DROP TABLE IF EXISTS `tbl_projeto`;

CREATE TABLE `tbl_projeto` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `projeto` varchar(150) NOT NULL,
  `ativo` enum('Ativo','Desativado') NOT NULL,
  PRIMARY KEY (`id_projeto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`id_projeto_menu`),
  KEY `fk_pro_pro_menu` (`id_projeto`),
  CONSTRAINT `fk_pro_pro_menu` FOREIGN KEY (`id_projeto`) REFERENCES `tbl_projeto` (`id_projeto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_projeto_menu` */

insert  into `tbl_projeto_menu`(`id_projeto_menu`,`id_projeto`,`menu`,`url`,`ativo`,`ordem`) values (1,1,'Paginas','admin/paginas','Ativo',1),(2,1,'Configuração da Pagina','admin/configuracao','Ativo',2),(3,2,'Projetos','admin/projeto','Ativo',1),(4,2,'Menu','admin/menu','Ativo',2);

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
