-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/08/2023 às 21:39
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `senha`, `cpf`) VALUES
(1, 'ryan@alenda.com', 'ryan', 'rayn123', '1234567'),
(6, 'ramon@gmail.com', 'Ramon', 'ramon123', '265.662.840-79'),
(7, 'luisalenda2217@gmail.com', 'Luis Beckman', 'luis2217', '575.420.470-19'),
(8, 'rogerprad@gmail.com', 'Rogerio Prado', 'roger123', '575.420.470-19'),
(9, 'donasebastiana@gmail.com', 'Sebastiana', 'sebastiana123', '215.009.120-85'),
(10, 'cassia@hotmail.com', 'Cassiana', 'cassia2217', '091.583.080-91'),
(11, 'vigia15@outlook.com', 'Victor Hugo', 'vigia12', '574.345.210-58'),
(12, 'thmz@gmail.com', 'Thomaz Pires', 'thmz123', '289.760.980-05'),
(13, 'bira@gmail.com', 'Birinha', 'birinha', '183.552.450-83'),
(14, 'dudufufu@gmail.com', 'Dudu', 'dudu123', '183.552.450-83'),
(15, 'xela123@gmail.com', 'Alex Camargo', 'alex123', '726.600.590-63'),
(16, 'naruto15@gmail.com', 'Naruto', 'naruto', '249.946.930-72'),
(17, 'gokusaiajeans@gmail.com', 'Goku', 'goku1722', '249.946.930-72');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
