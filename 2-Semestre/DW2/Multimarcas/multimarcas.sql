-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Abr-2023 às 00:09
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `multimarcas`
--
CREATE DATABASE IF NOT EXISTS `multimarcas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `multimarcas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo`
--

CREATE TABLE IF NOT EXISTS `tb_veiculo` (
  `Renavam` varchar(11) NOT NULL,
  `Descricao_veiculo` varchar(100) DEFAULT NULL,
  `Montadora` varchar(20) DEFAULT NULL,
  `Ano` int(11) DEFAULT NULL,
  `Placa` varchar(20) DEFAULT NULL,
  `Valor` double DEFAULT NULL,
  `IPVA` double NOT NULL,
  PRIMARY KEY (`Renavam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
