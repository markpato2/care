# care
Teste Care

1.- Criar Banco com o nome care

CREATE DATABASE `care` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

2.- Criar Tabela com o nome notas e campos 

CREATE TABLE `notas` (
  `idNotas` int(11) NOT NULL AUTO_INCREMENT,
  `numeroNota` varchar(100) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `destinatario` varchar(550) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `endereco` varchar(550) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idNotas`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

3.- Pasta inicial do Projeto
view/index.php

Exemplo para iniciar projeto:
http://localhost/care/view/index.php
