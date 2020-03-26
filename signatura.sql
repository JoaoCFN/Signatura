-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jan-2020 às 16:07
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `signatura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `login`, `senha`, `email`) VALUES
(1, 'Léo', 'Leo', 'filho123', 'leo@leofilho.com'),
(2, 'Jonas', 'jonas', 'amarsempre', 'jonas@jonaslee.dev');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatoc`
--

CREATE TABLE `contatoc` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `objetivo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(1, 'teste', 'dasdas@dsdasdas.com', '75999999999', 'sadas'),
(2, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(3, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(4, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(5, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(6, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(7, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(8, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(9, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(10, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(11, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(12, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(13, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(14, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(15, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(16, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(17, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(18, 'HERBETI JONAS LIMA CERQUEIRA', 'jonasearth@hotmail.com', '75999884738', 'fasfasfasfasf'),
(19, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(20, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(21, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(22, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(23, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(24, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(25, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(26, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(27, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(28, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(29, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(30, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(31, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(32, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(33, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(34, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(35, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(36, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(37, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(38, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(39, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(40, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(41, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(42, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(43, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(44, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(45, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(46, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(47, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(48, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(49, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(50, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(51, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(52, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(53, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(54, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(55, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(56, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(57, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(58, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(59, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(60, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(61, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(62, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj'),
(63, 'asdasd', 'asdasdasd@asdasdas.dasd', '75999884738', 'asdjashjdhjkasdhjasdhj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `desc_tumb` longtext NOT NULL,
  `nome` longtext NOT NULL,
  `classf` longtext NOT NULL,
  `destaque` int(111) NOT NULL,
  `tipo` longtext NOT NULL,
  `ano` longtext NOT NULL,
  `tags` longtext NOT NULL,
  `titulo_top` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `descricao_mid` longtext NOT NULL,
  `titulo_bot` longtext NOT NULL,
  `descricao_bot` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `desc_tumb`, `nome`, `classf`, `destaque`, `tipo`, `ano`, `tags`, `titulo_top`, `descricao`, `descricao_mid`, `titulo_bot`, `descricao_bot`) VALUES
(1, 'asdasdasd', '1', 'web', 0, '', '', '', '', '', '', '', ''),
(2, 'asdasdasd', '2', 'web', 0, '', '', '', '', '', '', '', ''),
(3, 'asdasdasd', '3', 'mobile', 424, '', '', '', '', '', '', '', ''),
(4, 'asdasdasd', '4', 'ecommerce', 0, '', '', '', '', '', '', '', ''),
(5, 'asdasdasd', '5', 'mobile', 66, '', '', '', '', '', '', '', ''),
(6, 'asdasdasd', '6', 'mobile', 55, '', '', '', '', '', '', '', ''),
(7, 'asdasdasd', '7', 'mobile', 22, '', '', '', '', '', '', '', ''),
(8, 'asdasdasd', '8', 'ecommerce', 11, '', '', '', '', '', '', '', ''),
(9, 'asdasdasd', '9', 'web', 0, '', '', '', '', '', '', '', ''),
(10, 'asdasdasd', '10', 'mobile', 777, '', '', '', '', '', '', '', ''),
(11, 'asdasdasd', '11', 'web', 888, '', '', '', '', '', '', '', ''),
(12, 'asasdasdasdasdasdas', '12', 'ecommerce', 999, '', '', '', '', '', '', '', ''),
(13, 'asasdasdasdasdasdas', '13', 'web', 0, '', '', '', '', '', '', '', ''),
(14, 'asasdasdasdasdasdas', '14', 'web', 0, '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatoc`
--
ALTER TABLE `contatoc`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contatoc`
--
ALTER TABLE `contatoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
