-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2022 às 04:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitejogo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `num_cadastro` int(6) NOT NULL,
  `id_email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `pontuação` int(100) NOT NULL DEFAULT 0,
  `vitórias` int(30) NOT NULL DEFAULT 0,
  `derrotas` int(30) NOT NULL DEFAULT 0,
  `num_partidas` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`num_cadastro`, `id_email`, `nome`, `nick`, `senha`, `pontuação`, `vitórias`, `derrotas`, `num_partidas`) VALUES
(1, 'felipenocko17@gmail.com', 'Felipe', 'felipe', 'sla123', 750, 9, 3, 13),
(2, 'pedrolucas.portelafreitas@gmail.com', 'Pedro Lucas Portela', 'pedropf', 'pedro321', 300, 5, 4, 18),
(3, 'misterioso@teste.com', '???', 'Eu', 'teste', 200, 3, 2, 7),
(4, 'Yan@Martins.com', 'Yan', 'Yan2000', 'yan231', 350, 4, 1, 5),
(5, 'dsfsda@dfd.com', 'Felipe', 'ijsdjoiasj', 'dasda', 0, 0, 0, 0),
(6, 'fulano@gmail.com', 'dokidasd', 'dsad', 'sal', 200, 2, 0, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`num_cadastro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `num_cadastro` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
