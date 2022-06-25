-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2022 às 17:00
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
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_memoria`
--

CREATE TABLE `jogo_memoria` (
  `usuario` varchar(50) NOT NULL,
  `pontuacao` int(11) NOT NULL DEFAULT 0,
  `minutos` int(11) NOT NULL DEFAULT 0,
  `segundos` int(11) NOT NULL DEFAULT 0,
  `partidas` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_memoria`
--

INSERT INTO `jogo_memoria` (`usuario`, `pontuacao`, `minutos`, `segundos`, `partidas`) VALUES
('felipe@gmail.com', 660, 0, 24, 6),
('eduardo@gmail.com', 0, 0, 0, 0),
('bielzinho@gmail.com', 0, 0, 0, 0),
('ezequiel@gmail.com', 0, 0, 0, 0),
('bielzinho@gmail.com', 0, 0, 0, 0),
('nikolas@gmail.com', 0, 0, 0, 0),
('teste@gmail.com', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_velha`
--

CREATE TABLE `jogo_velha` (
  `usuario` varchar(50) NOT NULL,
  `pontuacao` int(11) NOT NULL DEFAULT 0,
  `vitorias` int(11) NOT NULL DEFAULT 0,
  `derrotas` int(11) NOT NULL DEFAULT 0,
  `partidas` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_velha`
--

INSERT INTO `jogo_velha` (`usuario`, `pontuacao`, `vitorias`, `derrotas`, `partidas`) VALUES
('felipe@gmail.com', 550, 6, 1, 7),
('bielzinho@gmail.com', 0, 0, 0, 0),
('ezequiel@gmail.com', 0, 0, 0, 0),
('Nikolas@gmail.com', 0, 0, 0, 0),
('teste@gmail.com', 0, 0, 0, 0),
('eduardo@gmail.com', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ft_perfil` varchar(50) NOT NULL,
  `id_email` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `pontuacao` int(11) NOT NULL DEFAULT 0,
  `ultimo_jogo` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ft_perfil`, `id_email`, `senha`, `nome`, `nick`, `pontuacao`, `ultimo_jogo`) VALUES
('d7351263ef29b927c35aba78220745d5.jpg', 'felipe@gmail.com', 'sla123', 'Felipe Nocko', 'Felipe', 810, 'velha'),
('imgperfil.png', 'eduardo@gmail.com', 'sla123', 'Eduardo Fischer', 'Edu', 0, ''),
('imgperfil.png', 'bielzinho@gmail.com', 'sla123', 'Gabriel Perelló', 'Gabrel', 0, 'velha'),
('imgperfil.png', 'ezequiel@gmail.com', 'sla123', 'Ezequiel', 'Ezequiel', 0, ''),
('imgperfil.png', 'Nikolas@gmail.com', 'sla123', 'Nikolas', 'Nikolas', 0, ''),
('imgperfil.png', 'teste@gmail.com', 'sla123', 'sla', 'ninguem', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
