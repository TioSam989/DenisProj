-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 01:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calinsalajanbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avaliacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nome`, `email`, `avaliacao`) VALUES
(16, 'TESTE AVALIACOES', '45c8153e28f062d3baf18d9a46a5469d', 'TESTE AVALIACOES'),
(22, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadsadasdwaasd'),
(23, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'teste'),
(24, 'Denis Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadasd'),
(25, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadasdad'),
(26, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'dwadasdasd'),
(28, 'dwsada', 'ee930ad6bba7ba59f4042fa612bf940e', 'mui bom'),
(29, 'Davi ', '4f64c9f81bb0d4ee969aaf7b4a5a6f40', 'mui bom');

-- --------------------------------------------------------

--
-- Table structure for table `canalizador`
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
-- Dumping data for table `canalizador`
--

INSERT INTO `canalizador` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(7, 'Denis Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'teste', 'teste'),
(8, 'davi', 'b79aca0daf806be914c2631e8ec741bd', '0f03c83f99f9a84c2a28', 'mais q vc', 'toda');

-- --------------------------------------------------------

--
-- Table structure for table `carpinteiro`
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
-- Dumping data for table `carpinteiro`
--

INSERT INTO `carpinteiro` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(5, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'teste', 'teste'),
(8, 'david', '1f37a7617646c52f047d1196dea76c71', '734034c6d0fcd8eb40cd', 'nenhuma ainda', 'dinheiro');

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrinho`
--

INSERT INTO `carrinho` (`id`, `quantidade`, `user_id`, `product_id`) VALUES
(22, 5, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `nome`, `email`, `telemovel`, `mensagem`) VALUES
(6, 'TESTE CONTACTE', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'TESTE CONTACTE'),
(7, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'alex'),
(8, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'davi'),
(9, 'Davi Neves', 'ce3d9d517e6b781a261dbf1a40f4b0a6', '734034c6d0fcd8eb40cd', 'quero ser contratrado pra parte de RH');

-- --------------------------------------------------------

--
-- Table structure for table `eletricista`
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
-- Dumping data for table `eletricista`
--

INSERT INTO `eletricista` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(3, 'TESTE ELETRICISTA', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'TESTE ELETRICISTA', 'TESTE ELETRICISTA'),
(8, 'davi', 'davi@mail.com', '936350279', 'negativa', 'positiva');

-- --------------------------------------------------------

--
-- Table structure for table `pintor`
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
-- Dumping data for table `pintor`
--

INSERT INTO `pintor` (`id`, `nome`, `email`, `telemovel`, `experiência`, `motivação`) VALUES
(6, 'TESTE PINTOR', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'TESTE PINTOR', 'TESTE PINTOR'),
(7, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', '4162075801482ea374dd', 'teste', 'teste'),
(8, 'Denis Ricardo Salajan', '45c8153e28f062d3baf18d9a46a5469d', 'd8da1f674a704403f301', 'teste', 'davi'),
(9, 'dwsadsa', '13573a955b3462232d605cd11255a24d', '734034c6d0fcd8eb40cd', 'oito anos na area', 'ficar longe dos filhos');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `img` varchar(100) NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `img`, `preco`) VALUES
(1, 'Caneta Calin Salajan', 'PINTOR.webp', 3),
(2, 'Tshirt Calin Salajan', 'PINTOR.webp', 25);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telemovel` int(11) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nome`, `Email`, `Telemovel`, `Password`) VALUES
(1, 'dnsaudbuhew', 'davi@mail.com', 936382468, '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canalizador`
--
ALTER TABLE `canalizador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carpinteiro`
--
ALTER TABLE `carpinteiro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eletricista`
--
ALTER TABLE `eletricista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pintor`
--
ALTER TABLE `pintor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `canalizador`
--
ALTER TABLE `canalizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carpinteiro`
--
ALTER TABLE `carpinteiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eletricista`
--
ALTER TABLE `eletricista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pintor`
--
ALTER TABLE `pintor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
