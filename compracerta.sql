-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2021 às 01:34
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `compracerta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `email`, `senha`) VALUES
(1, 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `email_usuario` varchar(50) NOT NULL,
  `nomeProduto` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` double NOT NULL,
  `situacao` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`email_usuario`, `nomeProduto`, `quantidade`, `valor`, `situacao`) VALUES
('', 'Batatas', 3, 0, 'aguardo'),
('', 'Batatas', 3, 26.97, 'aguardo'),
('', 'Batatas', 3, 26.97, 'aguardo'),
('', 'Batatas', 3, 26.97, 'aguardo'),
('', 'Batatas', 5, 44.95, 'aguardo'),
('', 'Batatas', 5, 44.95, 'aguardo'),
('teste@tst', 'Batatas', 6, 53.94, 'aguardo'),
('pedro@gmail.com', 'Pimentao', 1, 2.99, 'OK'),
('pedro@gmail.com', 'Bananas', 1, 4.99, 'OK'),
('pedro@gmail.com', 'Caqui', 1, 6.99, 'OK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nome`, `valor`, `quantidade`) VALUES
(1, 'Caqui Fuyu Orgânico', 6.99, 100),
(2, 'Laranja', 4.99, 100),
(3, 'Banana', 4.99, 100),
(4, 'Repolho', 3.99, 100),
(5, 'Tamarindo', 3.99, 100),
(6, 'Tomate', 4.99, 100),
(7, 'Batatas', 8.99, 100),
(8, 'Pimentão', 2.99, 100),
(9, 'Soja', 7.99, 100),
(10, 'Feijao', 9.99, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `cpf`, `email`, `senha`) VALUES
(1, '12121212123', 'pablo@gmail.com', '123456'),
(2, '12345678998', 'teste@tst', '123456'),
(3, '987654321', 'teste@t', '12345'),
(4, '1245', 'teste@tra', '9876'),
(5, '124578', 'teste@tst.com', '12345'),
(6, '32323232323', 'pedro@gmail.com', 'senha123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
