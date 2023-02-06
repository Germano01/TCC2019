-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.3.15-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para banco
CREATE DATABASE IF NOT EXISTS `banco` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `banco`;


-- Copiando estrutura para tabela banco.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(5000) DEFAULT NULL,
  `mensagem` varchar(50000) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco.contato: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;


-- Copiando estrutura para tabela banco.dados
CREATE TABLE IF NOT EXISTS `dados` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(1000) NOT NULL,
  `cidade` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `data` varchar(10) DEFAULT NULL,
  `nomeproduto` varchar(1000) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `obs` varchar(1000) NOT NULL,
  `quantidade` int(100) DEFAULT NULL,
  `imagem` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco.dados: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dados` DISABLE KEYS */;
REPLACE INTO `dados` (`codigo`, `nome`, `cidade`, `email`, `tel`, `data`, `nomeproduto`, `descricao`, `preco`, `obs`, `quantidade`, `imagem`) VALUES
	(11, 'Emilly Araujo', 'Sales Oliveira', 'emillyalmeidaaraujo@teleworm.us', '(16) 2654-6466', NULL, 'TÃªnis All Star Plataforma', 'Branco, usado apenas uma vez', '80', 'Novo', 1, './img/tenis.jpg'),
	(12, 'Brenda Santos', 'OrlÃ¢ndia', 'bsantos@hotmail.com', '(16) 3826-5620', NULL, 'Capinha para iPhone XR', 'Transparente, com detalhes de coraÃ§Ãµes rosa', '29', 'Motivo da Venda: Troquei de Celular', 1, './img/capinha.jpg'),
	(13, 'Guilherme Melo', 'OrlÃ¢ndia', 'meloguilherme2@outlook.com', '(16) 6071-4613', NULL, 'Mouse Gamer Logitech G203 Prodigy', '- RGB Lightsync\r\n\r\n- 6 BotÃµes\r\n\r\n- 8000 DPI\r\n\r\n', '96,50', 'Funciona muito bem\r\n\r\nMotivo da Venda: Comprei outro.', 1, './img/mouse.jpg');
/*!40000 ALTER TABLE `dados` ENABLE KEYS */;


-- Copiando estrutura para tabela banco.denuncias
CREATE TABLE IF NOT EXISTS `denuncias` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `nomeanunciante` varchar(500) DEFAULT NULL,
  `telanunciante` varchar(500) DEFAULT NULL,
  `nomeproduto` varchar(500) DEFAULT NULL,
  `motivo` varchar(1000) DEFAULT NULL,
  `ajuda` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco.denuncias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `denuncias` DISABLE KEYS */;
/*!40000 ALTER TABLE `denuncias` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
