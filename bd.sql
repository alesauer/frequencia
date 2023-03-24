-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.32-0ubuntu0.20.04.2 - (Ubuntu)
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para freq
CREATE DATABASE IF NOT EXISTS `freq` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `freq`;

-- Copiando estrutura para tabela freq.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `matricula` varchar(50) COLLATE utf16_bin NOT NULL,
  `nome` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- Copiando dados para a tabela freq.alunos: ~83 rows (aproximadamente)
INSERT INTO `alunos` (`matricula`, `nome`) VALUES
	('72200022', 'CARLOS MAGNO NOBRE DA SILVA'),
	('72200863', 'DANIEL RODRIGO FINS DE OLIVEIRA SANTOS'),
	('72200545', 'EUGENIO VIANA FERREIRA'),
	('72201436', 'GABRIEL GONCALVES OLIVEIRA'),
	('72200030', 'GABRIEL VITOR DITTZ ZAMPIER'),
	('72100192', 'GUILHERME CESAR DE ARAUJO RIBEIRO'),
	('72101350', 'LEONARDO DECLIE PINTO COELHO'),
	('72200898', 'LEONARDO HENRIQUE FINS DE OLIVEIRA SANTOS'),
	('72200650', 'LUCAS GONCALVES GONTIJO'),
	('72200774', 'MARCELO FELIX ALEXANDRE JUNIOR'),
	('71901345', 'MARCILIO ALVES PRADO JUNIOR'),
	('72200529', 'MARCO TULIO SANTOS LESSA'),
	('72200138', 'MATHEUS GUIMARAES PEREIRA'),
	('71901337', 'RENATO CABRAL RODRIGUES DE SOUZA'),
	('72100770', 'SERGIO JUNIO LEAL'),
	('72201398', 'THIAGO PRATES DE PAULA'),
	('72101326', 'GUILHERME PINHEIRO VALADARES'),
	('71800093', 'ANDRE AMORIM LOPES DE SOUZA'),
	('72100222', 'ARTHUR DOS SANTOS MOREIRA'),
	('72000996', 'ATOS PEDRO FERREIRA ROCHA'),
	('72001259', 'BERNARDO MENDES REIS'),
	('72001283', 'BRENO JOSE BARBOSA SILVA'),
	('72100303', 'DAVI AUGUSTO FREITAS DE AZEVEDO'),
	('72100109', 'DIOGO ESTEVAO FERREIRA'),
	('72100176', 'EDUARDO RODRIGUES FERNANDES DE SENE'),
	('72100079', 'GABRIEL FRANCISCO DE OLIVEIRA FERREIRA'),
	('72100354', 'GUILHERME DA SILVA TRISTAO'),
	('72100516', 'HIAGO DE ANDRADE ARAUJO'),
	('72100184', 'JOAO MARCOS PRIMO ZACARIAS'),
	('71901159', 'LEONARDO LAMAS FERREIRA'),
	('71800760', 'LIBERIO ALBINO DE SOUSA JUNIOR'),
	('72100087', 'LUCAS JOSE CASTRO CARVALHO'),
	('72100052', 'LUCAS MENDONCA ANDRADE MEDEIROS'),
	('72001275', 'LUCAS RODRIGUES SANTOS'),
	('71901353', 'LUCCAS MANOEL VALE BAUMGRATZ SIMMER'),
	('72100117', 'RYAN DE ASSIS LEITE'),
	('72100010', 'TALES HENRIQUE DE OLIVEIRA REIS'),
	('72100028', 'TIAGO DAVI DE ARAUJO'),
	('72100346', 'TIAGO MOREL LEMOS DE PINHO'),
	('72100575', 'DAVI LUCAS ANDRADE SILVA'),
	('72000880', 'MARCELLE NICOLE CAMPOS DO CARMO'),
	('72100206', 'VITOR LUIZ NAZARETH'),
	('72100958', 'ALAN JOHNY SOUZA CARVALHO');

-- Copiando estrutura para tabela freq.conf
CREATE TABLE IF NOT EXISTS `conf` (
  `situacaoFreq` int DEFAULT NULL COMMENT '1 - Aberta; 0 - Fechada',
  `dataF` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- Copiando dados para a tabela freq.conf: ~1 rows (aproximadamente)
INSERT INTO `conf` (`situacaoFreq`, `dataF`) VALUES
	(1, '2023-03-24');

-- Copiando estrutura para tabela freq.freq
CREATE TABLE IF NOT EXISTS `freq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `matricula` varchar(50) COLLATE utf16_bin NOT NULL DEFAULT '0',
  `dataP` date NOT NULL,
  `ip` varchar(50) COLLATE utf16_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- Copiando dados para a tabela freq.freq: ~2 rows (aproximadamente)

-- Copiando estrutura para tabela freq.palavrachave
CREATE TABLE IF NOT EXISTS `palavrachave` (
  `palavrachave` varchar(255) COLLATE utf16_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- Copiando dados para a tabela freq.palavrachave: ~1 rows (aproximadamente)
INSERT INTO `palavrachave` (`palavrachave`) VALUES
	('galo');

-- Copiando estrutura para tabela freq.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `ConstraintUnicos` (`login`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela freq.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`cod`, `login`, `senha`, `email`) VALUES
	(1, 'admin', 'b4e92763cc3e18d33c92bd7343367a88', 'alesauer@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
