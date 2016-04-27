-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.2.0.4947
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
	(1, 'GABRIEL', 'gabriel@gabriel.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(2, 'ALINE B', 'aline@aline.com.br', 'Portão', 'Portão ou cancela automática'),
	(3, 'ANDRE', 'andre@andre.com.br', 'Motor Portão', 'Portão ou cancela automática'),
	(4, 'CLEUSA', 'cleusa@cleusa.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(5, 'RODRIGO', 'rodrigo@rodrigo.com.br', 'Cancelas', 'cancela automática '),
	(6, 'RAIANE', 'raiane@raiane.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(7, 'FERNANDO', 'fernando@fernando.com.br', 'Portão', 'Portão ou cancela automática'),
	(8, 'JAMIE', 'jamie@jamie.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(9, 'JEFFERSON', 'jefferson@jefferson.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(10, 'OTAVIO', 'otavio@otavio.com.br', 'Cancelas', 'cancela automática '),
	(11, 'TALITA', 'talita@talita.com.br', 'Portão', 'Portão ou cancela automática'),
	(12, 'MARIANGELA', 'mariangela@mariangela.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(13, 'GABRIEL', 'gabriel@gabriel.com.br', 'Motor Portão', 'Portão ou cancela automática'),
	(14, 'VAULENE', 'vaulene@vaulene.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(15, 'JANETE', 'janete@janete.com.br', 'Cancelas', 'cancela automática '),
	(16, 'JEFERSON', 'jeferson@jeferson.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(17, 'THIAGO', 'thiago@thiago.com.br', 'Portão', 'Portão ou cancela automática'),
	(18, 'DOUGLAS', 'douglas@douglas.com.br', 'Cancelas', 'Portão ou cancela automática'),
	(19, 'LEONARDO', 'leonardo@leonardo.com.br', 'Orçamento', 'cancela automática '),
	(20, 'BEATRIZ', 'beatriz@beatriz.com.br', 'Motor Portão', 'Portão ou cancela automática'),
	(21, 'LUIZ', 'luiz@luiz.com.br', 'Portão', 'Portão ou cancela automática'),
	(22, 'TALITA', 'talita@talita.com.br', 'Orçamento', 'Portão ou cancela automática'),
	(23, 'CARLA', 'carla@carla.com.br', 'Portão', 'Portão ou cancela automática');
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
	(2, 'Empresa', 'Olá, seja bem vindo à nossa loja!\r\n\r\nVocê chegou até nosso site porque está buscando facilidade, e encontrou! Conheça alguns de nossos produtos clicando aqui.\r\n\r\nFundado no ano de 2016, o Site possui o objetivo de facilitar a sua vida e aperfeiçoar o seu tempo. Isso mesmo, oferecemos aqui soluções objetivas, econômicas e de qualidade para facilitar o que um dia, já foi simples, o ato de entrar ou sair da casa ou empresa, sem ter que se preocupar com desagradáveis abordagens.\r\n\r\nTrabalhamos com toda linha de equipamento de segurança eletrônica residencial, comercial e industrial, desde câmeras com visão infravermelhas, motores para portão até itens de inovação do dia a dia.\r\n\r\nPossuímos estrutura física com loja aberta para atendimento aos clientes, composto por um time fantástico de vendedores e técnicos especializados. Por isso não hesite, fique a vontade em nos contatar.', 'empresa'),
	(3, 'Produto', 'KIT PORTÃO DESLIZANTE CONDOMÍNIO portao_1.jpg\r\nKIT PORTÃO BASCULANTE CONDOMÍNIO portao_2.jpg\r\nKIT PORTÃO PIVOTANTE CONDOMÍNIO portao_2.jpg\r\nFIOS E CABOS fios_e_cabos.jpg\r\nGRAVADOR TELEFÔNICO gravador.jpg\r\nINTERFONE interfones.jpg\r\nALARMES alarmes.jpg\r\nCÂMERAS PARA CFTV cameras.jpg\r\nCANCELA ELETRÔNICA BAIXO FLUXO cancelas_1.jpg\r\nCANCELA ELETRÔNICA ALTO FLUXO cancelas_2.jpg\r\n', 'produtos'),
	(4, 'Serviços', 'PORTÃO DESLIZANTE BASCULANTE PIVOTANTE CONDOMÍNIO\r\nINSTALAÇÃO INTERFONE ALARMES CÂMERAS\r\nCANCELA ELETRÔNICA BAIXO ALTO FLUXO\r\n', 'servicos');
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
	(1, 'KIT PORTÃO', 'DESLIZANTE CONDOMÍNIO', 'portao_1.jpg'),
	(2, 'KIT PORTÃO', 'BASCULANTE CONDOMÍNIO', 'portao_2.jpg'),
	(3, 'KIT PORTÃO', 'PIVOTANTE CONDOMÍNIO', 'portao_2.jpg'),
	(4, 'FIOS E CABOS', 'FIOS E CABOS', 'fios_e_cabos.jpg'),
	(5, 'GRAVADOR TELEFÔNICO', 'GRAVADOR TELEFÔNICO', 'gravador.jpg'),
	(6, 'INTERFONE', 'INTERFONE', 'interfones.jpg'),
	(7, 'ALARMES', 'ALARMES', 'alarmes.jpg'),
	(8, 'CÂMERAS PARA CFTV', 'CÂMERAS PARA CFTV', 'cameras.jpg'),
	(9, 'CANCELA ELETRÔNICA', 'BAIXO FLUXO', 'cancelas_1.jpg'),
	(10, 'CANCELA ELETRÔNICA', 'ALTO FLUXO', 'cancelas_2.jpg');
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
	(1, 'PORTÃO', 'DESLIZANTE/BASCULANTE/PIVOTANTE CONDOMÍNIO'),
	(2, 'INSTALAÇÃO', 'INTERFONE/ALARMES/CÂMERAS'),
	(3, 'CANCELA ELETRÔNICA', 'BAIXO/ALTO FLUXO');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

-- Copiando estrutura para tabela pdo.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `u_senha` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_nome` (`u_nome`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
