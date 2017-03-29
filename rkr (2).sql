-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Mar-2017 às 14:00
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rkr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `painel`
--

CREATE TABLE `painel` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `endereco` text,
  `foto` text,
  `data_exp_inicio` date DEFAULT NULL,
  `data_exp_fim` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `painel`
--

INSERT INTO `painel` (`id`, `nome_completo`, `login`, `cpf`, `senha`, `data_nascimento`, `data_admissao`, `endereco`, `foto`, `data_exp_inicio`, `data_exp_fim`) VALUES
(24, 'Luis Fernando', 'luis', '099.395.256-99', '', '2000-11-03', '2000-11-03', 'Belo Horizonte', 'AlT0YEcN0_4PxrW5t8Ym1RjI49OtPgmoyptQLoflfebH.jpg', '2000-11-03', '2000-11-03'),
(26, 'Jose Joaquim', 'teste', '499.857.221-08', '123', '1990-12-08', '2101-10-10', 'centro', 'AlT0YEcN0_4PxrW5t8Ym1RjI49OtPgmoyptQLoflfebH.jpg', '2013-11-10', '2017-04-11'),
(25, 'Taciana D\'Ange', '', '099.395.256-99', '', '1990-04-03', '1990-04-03', 'Rua: Renato Ferreira Porto', '', '1990-04-03', '1990-04-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `nome_completo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `nome_completo`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `painel`
--
ALTER TABLE `painel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `painel`
--
ALTER TABLE `painel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
