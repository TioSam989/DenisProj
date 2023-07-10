-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jul-2023 às 13:56
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `calinsalajanbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avaliacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nome`, `email`, `avaliacao`) VALUES
(16, 'TESTE AVALIACOES', '45c8153e28f062d3baf18d9a46a5469d', 'TESTE AVALIACOES'),
(22, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadsadasdwaasd'),
(23, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'teste'),
(24, 'Denis Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadasd'),
(25, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadasdad'),
(26, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadasdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `canalizador`
--

CREATE TABLE `canalizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `experiência` text NOT NULL,
  `motivação` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `canalizador`
--

INSERT INTO `canalizador` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(7, 'Denis Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carpinteiro`
--

CREATE TABLE `carpinteiro` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `experiência` text NOT NULL,
  `motivação` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carpinteiro`
--

INSERT INTO `carpinteiro` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(5, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `nome`, `email`, `telemovel`, `mensagem`) VALUES
(6, 'TESTE CONTACTE', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'TESTE CONTACTE'),
(7, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'alex'),
(8, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'davi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eletricista`
--

CREATE TABLE `eletricista` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `experiência` text NOT NULL,
  `motivação` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `eletricista`
--

INSERT INTO `eletricista` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(3, 'TESTE ELETRICISTA', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'TESTE ELETRICISTA', 'TESTE ELETRICISTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pintor`
--

CREATE TABLE `pintor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `experiência` text NOT NULL,
  `motivação` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pintor`
--

INSERT INTO `pintor` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(6, 'TESTE PINTOR', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'TESTE PINTOR', 'TESTE PINTOR'),
(7, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'teste', 'teste'),
(8, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'teste', 'davi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `canalizador`
--
ALTER TABLE `canalizador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carpinteiro`
--
ALTER TABLE `carpinteiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eletricista`
--
ALTER TABLE `eletricista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pintor`
--
ALTER TABLE `pintor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `canalizador`
--
ALTER TABLE `canalizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `carpinteiro`
--
ALTER TABLE `carpinteiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `eletricista`
--
ALTER TABLE `eletricista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pintor`
--
ALTER TABLE `pintor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
