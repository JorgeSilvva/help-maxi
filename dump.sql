CREATE DATABASE helpmaxi;

USE helpmaxi;

CREATE TABLE `helpmaxi`.`usuario`(
	`usuario_id` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(200) NOT NULL,
	`email` VARCHAR(200) NOT NULL, 
	`senha` VARCHAR(32) NOT NULL,
	`nivel` VARCHAR(10) NOT NULL DEFAULT 'cliente',
	`data_cadastro` DATETIME NOT NULL,
	PRIMARY KEY (`usuario_id`));
	
INSERT INTO `usuario` (`nome`, `email`, `senha`, `nivel`, `data_cadastro`) VALUES ('Admin Teste', 'admin@mail.com', '35d8e6d0561dd498e16b7eb84bcc231f', 'admin', NOW());
INSERT INTO `usuario` (`nome`, `email`, `senha`,`data_cadastro`) VALUES ('Usuario Teste', 'usuario@mail.com', '2c0acc9937ec60665fb71bbd9fa1e2e6', NOW());

CREATE TABLE `helpmaxi`.`ticket` (
	`ticket_id` INT NOT NULL AUTO_INCREMENT,
	`assunto` TEXT(50),
	`descricao` TEXT(255),
	`setor` VARCHAR(20) NOT NULL,
	`prioridade` VARCHAR(20) NOT NULL,
	`usuario_id` INT NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	`telefone` VARCHAR(20) NOT NULL,
	`situacao` VARCHAR(20) NOT NULL DEFAULT 'aberto',
 	`data_solicitacao` DATETIME NOT NULL,
	PRIMARY KEY (`ticket_id`),
	FOREIGN KEY (`usuario_id`) references `usuario`(`usuario_id`));

INSERT INTO `ticket` (`assunto`, `descricao`, `setor`, `prioridade`, `usuario_id`, `email`, `telefone`, `data_solicitacao`) 
VALUES ('Teste', 'Descrição teste', 'financeiro', 'normal', '1', 'admin@mail.com', '11999988877', NOW());

INSERT INTO `ticket` (`assunto`, `descricao`, `setor`, `prioridade`, `usuario_id`, `email`, `telefone`, `situacao`,`data_solicitacao`) 
VALUES ('Teste', 'Descrição teste', 'financeiro', 'normal', '2', 'usuario@mail.com', '13987654321', 'fechado', NOW());
