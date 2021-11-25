-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2021 às 20:40
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `users`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `useradm`
--

CREATE TABLE `useradm` (
  `idUserAdm` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `useradm`
--

INSERT INTO `useradm` (`idUserAdm`, `nome`, `email`, `senha`) VALUES
(8, 'Ricardo Rosa', 'ricardo@santacasa.com', '25d55ad283aa400af464c76d713c07ad'),
(9, 'bruno', 'bruno@uniasselvi.com', '25d55ad283aa400af464c76d713c07ad'),
(10, 'kaiane', 'kaiane@uniasselvi.com', '25f9e794323b453885f5181f1b624d0b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `useradm`
--
ALTER TABLE `useradm`
  ADD PRIMARY KEY (`idUserAdm`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `useradm`
--
ALTER TABLE `useradm`
  MODIFY `idUserAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
