-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/10/2026 às 01:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_alunos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `nome_re`
--

CREATE TABLE `nome_re` (
  `NOME` text NOT NULL,
  `RE` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `nome_re`
--

INSERT INTO `nome_re` (`NOME`, `RE`) VALUES
('EDUARDO COSTA ALVES', 24010),
('GUSTAVO HENRIQUE ', 22222),
('LUIS FERNANDO', 33333),
('GABRIEL BARROS', 44444),
('HENRIQUE SILVA', 55555);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `NOME` varchar(100) NOT NULL,
  `RM` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`NOME`, `RM`) VALUES
('EDUARDO COSTA ', '24010'),
('Nicollie Tavarias', '11111'),
('Willie Quasi', '22222'),
('Fernando Canto', '33333'),
('Peter Parker', '44444'),
('Joao Silva', '00000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
