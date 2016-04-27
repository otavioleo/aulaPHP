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
	(23, 'CARLA', 'carla@carla.com.br', 'Port�o', 'Port�o ou cancela autom�tica');");
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
	(2, 'Empresa', 'Ol�, seja bem vindo � nossa loja!\r\n\r\nVoc� chegou at� nosso site porque est� buscando facilidade, e encontrou! Conhe�a alguns de nossos produtos clicando aqui.\r\n\r\nFundado no ano de 2016, o Site possui o objetivo de facilitar a sua vida e aperfei�oar o seu tempo. Isso mesmo, oferecemos aqui solu��es objetivas, econ�micas e de qualidade para facilitar o que um dia, j� foi simples, o ato de entrar ou sair da casa ou empresa, sem ter que se preocupar com desagrad�veis abordagens.\r\n\r\nTrabalhamos com toda linha de equipamento de seguran�a eletr�nica residencial, comercial e industrial, desde c�meras com vis�o infravermelhas, motores para port�o at� itens de inova��o do dia a dia.\r\n\r\nPossu�mos estrutura f�sica com loja aberta para atendimento aos clientes, composto por um time fant�stico de vendedores e t�cnicos especializados. Por isso n�o hesite, fique a vontade em nos contatar.', 'empresa'),
	(3, 'Produto', 'KIT PORT�O DESLIZANTE CONDOM�NIO portao_1.jpg\r\nKIT PORT�O BASCULANTE CONDOM�NIO portao_2.jpg\r\nKIT PORT�O PIVOTANTE CONDOM�NIO portao_2.jpg\r\nFIOS E CABOS fios_e_cabos.jpg\r\nGRAVADOR TELEF�NICO gravador.jpg\r\nINTERFONE interfones.jpg\r\nALARMES alarmes.jpg\r\nC�MERAS PARA CFTV cameras.jpg\r\nCANCELA ELETR�NICA BAIXO FLUXO cancelas_1.jpg\r\nCANCELA ELETR�NICA ALTO FLUXO cancelas_2.jpg\r\n', 'produtos'),
	(4, 'Servi�os', 'PORT�O DESLIZANTE BASCULANTE PIVOTANTE CONDOM�NIO\r\nINSTALA��O INTERFONE ALARMES C�MERAS\r\nCANCELA ELETR�NICA BAIXO ALTO FLUXO\r\n', 'servicos');");
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
	(1, 'KIT PORT�O', 'DESLIZANTE CONDOM�NIO', 'portao_1.jpg'),
	(2, 'KIT PORT�O', 'BASCULANTE CONDOM�NIO', 'portao_2.jpg'),
	(3, 'KIT PORT�O', 'PIVOTANTE CONDOM�NIO', 'portao_2.jpg'),
	(4, 'FIOS E CABOS', 'FIOS E CABOS', 'fios_e_cabos.jpg'),
	(5, 'GRAVADOR TELEF�NICO', 'GRAVADOR TELEF�NICO', 'gravador.jpg'),
	(6, 'INTERFONE', 'INTERFONE', 'interfones.jpg'),
	(7, 'ALARMES', 'ALARMES', 'alarmes.jpg'),
	(8, 'C�MERAS PARA CFTV', 'C�MERAS PARA CFTV', 'cameras.jpg'),
	(9, 'CANCELA ELETR�NICA', 'BAIXO FLUXO', 'cancelas_1.jpg'),
	(10, 'CANCELA ELETR�NICA', 'ALTO FLUXO', 'cancelas_2.jpg');");
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
	(1, 'PORT�O', 'DESLIZANTE/BASCULANTE/PIVOTANTE CONDOM�NIO'),
	(2, 'INSTALA��O', 'INTERFONE/ALARMES/C�MERAS'),
	(3, 'CANCELA ELETR�NICA', 'BAIXO/ALTO FLUXO');");
echo " - Ok<br>";

echo "#### Conclu�do ####<br>";
