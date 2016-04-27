-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Vers�o do servidor:           5.6.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Vers�o:              9.2.0.4947
-- --------------------------------------------------------

-- Copiando estrutura do banco de dados para pdo
CREATE DATABASE IF NOT EXISTS `pdo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `pdo`;

-- Copiando estrutura para tabela pdo.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pdo.clientes: 26 rows
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
	(1, 'GABRIEL', 'gabriel@gabriel.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(2, 'ALINE B', 'aline@aline.com.br', 'Port�o', 'Port�o ou cancela autom�tica'),
	(3, 'ANDRE', 'andre@andre.com.br', 'Motor Port�o', 'Port�o ou cancela autom�tica'),
	(4, 'CLEUSA', 'cleusa@cleusa.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(5, 'RODRIGO', 'rodrigo@rodrigo.com.br', 'Cancelas', 'cancela�autom�tica '),
	(6, 'RAIANE', 'raiane@raiane.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(7, 'FERNANDO', 'fernando@fernando.com.br', 'Port�o', 'Port�o ou cancela autom�tica'),
	(8, 'JAMIE', 'jamie@jamie.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(9, 'JEFFERSON', 'jefferson@jefferson.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(10, 'OTAVIO', 'otavio@otavio.com.br', 'Cancelas', 'cancela�autom�tica '),
	(11, 'TALITA', 'talita@talita.com.br', 'Port�o', 'Port�o ou cancela autom�tica'),
	(12, 'MARIANGELA', 'mariangela@mariangela.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(13, 'GABRIEL', 'gabriel@gabriel.com.br', 'Motor Port�o', 'Port�o ou cancela autom�tica'),
	(14, 'VAULENE', 'vaulene@vaulene.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(15, 'JANETE', 'janete@janete.com.br', 'Cancelas', 'cancela�autom�tica '),
	(16, 'JEFERSON', 'jeferson@jeferson.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(17, 'THIAGO', 'thiago@thiago.com.br', 'Port�o', 'Port�o ou cancela autom�tica'),
	(18, 'DOUGLAS', 'douglas@douglas.com.br', 'Cancelas', 'Port�o ou cancela autom�tica'),
	(19, 'LEONARDO', 'leonardo@leonardo.com.br', 'Or�amento', 'cancela�autom�tica '),
	(20, 'BEATRIZ', 'beatriz@beatriz.com.br', 'Motor Port�o', 'Port�o ou cancela autom�tica'),
	(21, 'LUIZ', 'luiz@luiz.com.br', 'Port�o', 'Port�o ou cancela autom�tica'),
	(22, 'TALITA', 'talita@talita.com.br', 'Or�amento', 'Port�o ou cancela autom�tica'),
	(23, 'CARLA', 'carla@carla.com.br', 'Port�o', 'Port�o ou cancela autom�tica');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


-- Copiando estrutura para tabela pdo.conteudos
CREATE TABLE IF NOT EXISTS `conteudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8_unicode_ci NOT NULL,
  `pagina` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pdo.conteudos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `conteudos` DISABLE KEYS */;
INSERT INTO `conteudos` (`id`, `titulo`, `conteudo`, `pagina`) VALUES
	(2, 'Empresa', 'Ol�, seja bem vindo � nossa loja!\r\n\r\nVoc� chegou at� nosso site porque est� buscando facilidade, e encontrou! Conhe�a alguns de nossos produtos clicando aqui.\r\n\r\nFundado no ano de 2016, o Site possui o objetivo de facilitar a sua vida e aperfei�oar o seu tempo. Isso mesmo, oferecemos aqui solu��es objetivas, econ�micas e de qualidade para facilitar o que um dia, j� foi simples, o ato de entrar ou sair da casa ou empresa, sem ter que se preocupar com desagrad�veis abordagens.\r\n\r\nTrabalhamos com toda linha de equipamento de seguran�a eletr�nica residencial, comercial e industrial, desde c�meras com vis�o infravermelhas, motores para port�o at� itens de inova��o do dia a dia.\r\n\r\nPossu�mos estrutura f�sica com loja aberta para atendimento aos clientes, composto por um time fant�stico de vendedores e t�cnicos especializados. Por isso n�o hesite, fique a vontade em nos contatar.', 'empresa'),
	(3, 'Produto', 'KIT PORT�O DESLIZANTE CONDOM�NIO portao_1.jpg\r\nKIT PORT�O BASCULANTE CONDOM�NIO portao_2.jpg\r\nKIT PORT�O PIVOTANTE CONDOM�NIO portao_2.jpg\r\nFIOS E CABOS fios_e_cabos.jpg\r\nGRAVADOR TELEF�NICO gravador.jpg\r\nINTERFONE interfones.jpg\r\nALARMES alarmes.jpg\r\nC�MERAS PARA CFTV cameras.jpg\r\nCANCELA ELETR�NICA BAIXO FLUXO cancelas_1.jpg\r\nCANCELA ELETR�NICA ALTO FLUXO cancelas_2.jpg\r\n', 'produtos'),
	(4, 'Servi�os', 'PORT�O DESLIZANTE BASCULANTE PIVOTANTE CONDOM�NIO\r\nINSTALA��O INTERFONE ALARMES C�MERAS\r\nCANCELA ELETR�NICA BAIXO ALTO FLUXO\r\n', 'servicos');
/*!40000 ALTER TABLE `conteudos` ENABLE KEYS */;


-- Copiando estrutura para tabela pdo.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `imagem` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pdo.produtos: 10 rows
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `produto`, `descricao`, `imagem`) VALUES
	(1, 'KIT PORT�O', 'DESLIZANTE CONDOM�NIO', 'portao_1.jpg'),
	(2, 'KIT PORT�O', 'BASCULANTE CONDOM�NIO', 'portao_2.jpg'),
	(3, 'KIT PORT�O', 'PIVOTANTE CONDOM�NIO', 'portao_2.jpg'),
	(4, 'FIOS E CABOS', 'FIOS E CABOS', 'fios_e_cabos.jpg'),
	(5, 'GRAVADOR TELEF�NICO', 'GRAVADOR TELEF�NICO', 'gravador.jpg'),
	(6, 'INTERFONE', 'INTERFONE', 'interfones.jpg'),
	(7, 'ALARMES', 'ALARMES', 'alarmes.jpg'),
	(8, 'C�MERAS PARA CFTV', 'C�MERAS PARA CFTV', 'cameras.jpg'),
	(9, 'CANCELA ELETR�NICA', 'BAIXO FLUXO', 'cancelas_1.jpg'),
	(10, 'CANCELA ELETR�NICA', 'ALTO FLUXO', 'cancelas_2.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;


-- Copiando estrutura para tabela pdo.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pdo.servicos: 3 rows
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`id`, `produto`, `tipo`) VALUES
	(1, 'PORT�O', 'DESLIZANTE/BASCULANTE/PIVOTANTE CONDOM�NIO'),
	(2, 'INSTALA��O', 'INTERFONE/ALARMES/C�MERAS'),
	(3, 'CANCELA ELETR�NICA', 'BAIXO/ALTO FLUXO');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- Copiando estrutura para tabela pdo.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `u_senha` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_nome` (`u_nome`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
