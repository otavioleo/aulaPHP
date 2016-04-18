-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela pdo.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pdo.clientes: 26 rows
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
	(1, 'ALINE', 'ALINE@ALINE.com.br', NULL, NULL),
	(2, 'ALINE B', 'ALINE@ALINE.com.br', NULL, NULL),
	(3, 'ANDRE', 'ANDRE@ANDRE.com.br', NULL, NULL),
	(4, 'CLEUSA', 'CLEUSA@CLEUSA.com.br', NULL, NULL),
	(5, 'RODRIGO', 'RODRIGO@RODRIGO.com.br', NULL, NULL),
	(6, 'RAIANE', 'RAIANE@RAIANE.com.br', NULL, NULL),
	(7, 'FERNANDO', 'FERNANDO@FERNANDO.com.br', NULL, NULL),
	(8, 'JAMIE', 'JAMIE@JAMIE.com.br', NULL, NULL),
	(9, 'JEFFERSON', 'JEFFERSON@JEFFERSON.com.br', NULL, NULL),
	(10, 'OTAVIO', 'OTAVIO@OTAVIO.com.br', NULL, NULL),
	(11, 'TALITA', 'TALITA@TALITA.com.br', NULL, NULL),
	(12, 'MARIANGELA', 'MARIANGELA@MARIANGELA.com.br', NULL, NULL),
	(13, 'GABRIEL', 'GABRIEL@GABRIEL.com.br', NULL, NULL),
	(14, 'VAULENE', 'VAULENE@VAULENE.com.br', NULL, NULL),
	(15, 'JANETE', 'JANETE@JANETE.com.br', NULL, NULL),
	(16, 'JEFERSON', 'JEFERSON@JEFERSON.com.br', NULL, NULL),
	(17, 'THIAGO', 'THIAGO@THIAGO.com.br', NULL, NULL),
	(18, 'DOUGLAS', 'DOUGLAS@DOUGLAS.com.br', NULL, NULL),
	(19, 'LEONARDO', 'LEONARDO@LEONARDO.com.br', NULL, NULL),
	(20, 'BEATRIZ', 'BEATRIZ@BEATRIZ.com.br', NULL, NULL),
	(21, 'LUIZ', 'LUIZ@LUIZ.com.br', NULL, NULL),
	(22, 'TALITA', 'TALITA@TALITA.com.br', NULL, NULL),
	(23, 'GABRIEL', 'GABRIEL@GABRIEL.com.br', NULL, NULL),
	(24, 'CARLA', 'CARLA@CARLA.com.br', NULL, NULL),
	(25, 'teste', 'email@email', 'assunto', 'n?o tem mensagem'),
	(26, 'teste', 'email@email', 'assunto', 'n?o tem mensagem');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


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
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
