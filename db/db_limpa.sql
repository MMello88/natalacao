/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.10-MariaDB : Database - natalacao
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

insert  into `tbl_ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values ('070n8td1s0to8vntpu3t1rneov4mar1e','::1',1568076940,'__ci_last_regenerate|i:1568076922;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('10j1sr958q00u3b6sv26hbc6ca5jhcp4','::1',1566671330,'__ci_last_regenerate|i:1566671306;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('26f450r8fd7anu8qhu5ofpbuv77ikes8','::1',1567871487,'__ci_last_regenerate|i:1567871391;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('4fgii7l6q1h9td3m2pckoiuqnh2r1rhb','::1',1566672215,'__ci_last_regenerate|i:1566672180;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('99srqr6bi88b4mtd2al0om6gd37advv1','::1',1566672181,'__ci_last_regenerate|i:1566672180;'),('anou2udeip3ml6mq256h4nbvb0lin7sg','::1',1566738096,'__ci_last_regenerate|i:1566738083;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('cjt4bt2o9o5a2ebn4v75057i0ob1ktq9','::1',1567475633,'__ci_last_regenerate|i:1567475631;'),('co5jv30kfamflr0hs46rk44kkhlsi7h4','::1',1568167421,'__ci_last_regenerate|i:1568167421;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('d8oomgjd53tp4ckdoorl9ffc3a785eir','192.168.1.108',1567871741,'__ci_last_regenerate|i:1567871648;'),('dngehqk9jea52789041t0tg171h4cqle','127.0.0.1',1567029807,'__ci_last_regenerate|i:1567029802;'),('eebka5e78o6bhsi6odoha80gs3dgjdti','::1',1566867075,'__ci_last_regenerate|i:1566867070;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('fh3s5gnq558as4prmcareire2eskar5t','::1',1568073151,'__ci_last_regenerate|i:1568073149;'),('lbcmi0kanab0jk2198u0v6tpbuai2bt8','::1',1567871711,'__ci_last_regenerate|i:1567871583;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('mj2l3f2jmn6dd7i0vu4ejtmmf0mp2a5c','::1',1568164443,'__ci_last_regenerate|i:1568163272;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('nnhkpoad89gajue2vkb3lbrcs75vf95n','::1',1567563485,'__ci_last_regenerate|i:1567563483;'),('oolr0fhg4p6dklchlvp0f88rc1oaamq2','::1',1566867070,'__ci_last_regenerate|i:1566867070;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('paprpp6tjtoa6pspi53no7ero6nt1bbc','::1',1568168060,'session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"Matheus de Mello\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"8\";s:14:\"id_usuario_pai\";N;}__ci_last_regenerate|i:1568168060;'),('pnvdrbk9gb3mi9u0gjq25vt23md3qgl9','192.168.1.108',1566784066,'__ci_last_regenerate|i:1566783508;session_account|a:5:{s:5:\"email\";s:21:\"matheus.gnu@gmail.com\";s:4:\"nome\";s:16:\"MATHEUS DE MELLO\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"7\";s:14:\"id_usuario_pai\";s:1:\"7\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"2\";}'),('qdvet8q6bsvfhi8arot4gsbjq77e9f0v','::1',1567735189,'__ci_last_regenerate|i:1567735189;'),('r4p84gi8kqljt0qq6bedajr1orf3i1f1','::1',1566743191,'__ci_last_regenerate|i:1566743191;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('svin05qt5jcvrsgslh5ajigte8gf8qgq','::1',1566784187,'__ci_last_regenerate|i:1566784187;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}session_contrato|a:1:{s:10:\"id_projeto\";s:1:\"1\";}'),('u7irnjd8qtnc08p8evtap8kgbmm2od5i','192.168.1.108',1567871561,'__ci_last_regenerate|i:1567871561;'),('v2mmurh33e1idkim3c1225dd09m4aqtt','::1',1568163272,'__ci_last_regenerate|i:1568163272;session_account|a:5:{s:5:\"email\";s:20:\"admin@matilab.com.br\";s:4:\"nome\";s:13:\"Administrador\";s:16:\"CadastroCompleto\";s:1:\"1\";s:10:\"id_usuario\";s:1:\"1\";s:14:\"id_usuario_pai\";s:1:\"1\";}');

/*Table structure for table `tbl_coluna` */

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
