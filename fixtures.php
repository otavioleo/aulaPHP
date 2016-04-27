<?php

require_once 'RedBeanPHP\rb.php';
require_once 'RedBeanPHP\conecta.php';

echo "#### Executando fixtures ####<br>";

echo "Copiando estrutura do banco de dados para DataFixtures";
$tabela = $conexao->exec("DROP DATABASE IF EXISTS `DataFixtures`");
$tabela = $conexao->exec("CREATE DATABASE IF NOT EXISTS `DataFixtures` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */");
$tabela = $conexao->exec("USE `DataFixtures`");
echo " - Ok<br>";

echo "Criando a tabela clientes";
$tabela = $conexao->exec("CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `assunto` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `mensagem` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;");
echo " - Ok<br>";

echo "Inserindo dados na tabela clientes";
$tabela = $conexao->exec("INSERT INTO `clientes` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
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
	(23, 'CARLA', 'carla@carla.com.br', 'Portão', 'Portão ou cancela automática');");
echo " - Ok<br>";

echo "Criando a tabela conteudos";
$tabela = $conexao->exec("CREATE TABLE IF NOT EXISTS `conteudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) CHARACTER SET utf8 NOT NULL,
  `conteudo` text CHARACTER SET utf8 NOT NULL,
  `pagina` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;");
echo " - Ok<br>";

echo "Inserindo dados na tabela conteudos";
$tabela = $conexao->exec("INSERT INTO `conteudos` (`id`, `titulo`, `conteudo`, `pagina`) VALUES
	(2, 'Empresa', 'Olá, seja bem vindo à nossa loja!\r\n\r\nVocê chegou até nosso site porque está buscando facilidade, e encontrou! Conheça alguns de nossos produtos clicando aqui.\r\n\r\nFundado no ano de 2016, o Site possui o objetivo de facilitar a sua vida e aperfeiçoar o seu tempo. Isso mesmo, oferecemos aqui soluções objetivas, econômicas e de qualidade para facilitar o que um dia, já foi simples, o ato de entrar ou sair da casa ou empresa, sem ter que se preocupar com desagradáveis abordagens.\r\n\r\nTrabalhamos com toda linha de equipamento de segurança eletrônica residencial, comercial e industrial, desde câmeras com visão infravermelhas, motores para portão até itens de inovação do dia a dia.\r\n\r\nPossuímos estrutura física com loja aberta para atendimento aos clientes, composto por um time fantástico de vendedores e técnicos especializados. Por isso não hesite, fique a vontade em nos contatar.', 'empresa'),
	(3, 'Produto', 'KIT PORTÃO DESLIZANTE CONDOMÍNIO portao_1.jpg\r\nKIT PORTÃO BASCULANTE CONDOMÍNIO portao_2.jpg\r\nKIT PORTÃO PIVOTANTE CONDOMÍNIO portao_2.jpg\r\nFIOS E CABOS fios_e_cabos.jpg\r\nGRAVADOR TELEFÔNICO gravador.jpg\r\nINTERFONE interfones.jpg\r\nALARMES alarmes.jpg\r\nCÂMERAS PARA CFTV cameras.jpg\r\nCANCELA ELETRÔNICA BAIXO FLUXO cancelas_1.jpg\r\nCANCELA ELETRÔNICA ALTO FLUXO cancelas_2.jpg\r\n', 'produtos'),
	(4, 'Serviços', 'PORTÃO DESLIZANTE BASCULANTE PIVOTANTE CONDOMÍNIO\r\nINSTALAÇÃO INTERFONE ALARMES CÂMERAS\r\nCANCELA ELETRÔNICA BAIXO ALTO FLUXO\r\n', 'servicos');");
echo " - Ok<br>";

echo "Criando a tabela produtos";
$tabela = $conexao->exec("CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `descricao` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `imagem` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;");
echo " - Ok<br>";

echo "Inserindo dados na tabela produtos";
$tabela = $conexao->exec("INSERT INTO `produtos` (`id`, `produto`, `descricao`, `imagem`) VALUES
	(1, 'KIT PORTÃO', 'DESLIZANTE CONDOMÍNIO', 'portao_1.jpg'),
	(2, 'KIT PORTÃO', 'BASCULANTE CONDOMÍNIO', 'portao_2.jpg'),
	(3, 'KIT PORTÃO', 'PIVOTANTE CONDOMÍNIO', 'portao_2.jpg'),
	(4, 'FIOS E CABOS', 'FIOS E CABOS', 'fios_e_cabos.jpg'),
	(5, 'GRAVADOR TELEFÔNICO', 'GRAVADOR TELEFÔNICO', 'gravador.jpg'),
	(6, 'INTERFONE', 'INTERFONE', 'interfones.jpg'),
	(7, 'ALARMES', 'ALARMES', 'alarmes.jpg'),
	(8, 'CÂMERAS PARA CFTV', 'CÂMERAS PARA CFTV', 'cameras.jpg'),
	(9, 'CANCELA ELETRÔNICA', 'BAIXO FLUXO', 'cancelas_1.jpg'),
	(10, 'CANCELA ELETRÔNICA', 'ALTO FLUXO', 'cancelas_2.jpg');");
echo " - Ok<br>";

echo "Criando a tabela servicos";
$tabela = $conexao->exec("CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tipo` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;");
echo " - Ok<br>";

echo "Inserindo dados na tabela servicos";
$tabela = $conexao->exec("INSERT INTO `servicos` (`id`, `produto`, `tipo`) VALUES
	(1, 'PORTÃO', 'DESLIZANTE/BASCULANTE/PIVOTANTE CONDOMÍNIO'),
	(2, 'INSTALAÇÃO', 'INTERFONE/ALARMES/CÂMERAS'),
	(3, 'CANCELA ELETRÔNICA', 'BAIXO/ALTO FLUXO');");
echo " - Ok<br>";

echo "#### Concluído ####<br>";
