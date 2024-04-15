-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/04/2024 às 03:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `app`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `called`
--

CREATE TABLE `called` (
  `id_called` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `Status` varchar(15) NOT NULL,
  `requester` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `called`
--

INSERT INTO `called` (`id_called`, `title`, `category`, `description`, `Status`, `requester`) VALUES
(8, 'teste', 'Impressora', 'aaa', 'open', 'teste@teste.com'),
(9, 'TEsteee 2', 'Rede', 'atet', 'open', 'teste@vengadev.com'),
(10, '222', 'Hardware', '22222', 'open', 'teste@vengadev.com'),
(11, '33333333333333', 'Impressora', '333333', 'open', 'teste@vengadev.com'),
(12, 'teste2', 'Hardware', 'teste2', 'open', 'teste@teste.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `user` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `office` varchar(15) NOT NULL,
  `op` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user`, `email`, `password`, `office`, `op`) VALUES
(1, 'User', 'Testes', 'userteste', 'teste@vengadev.com', '$2y$10$Alp1/5aKbS9bzdxB7srzEOaHrjyJhxgPVZaaPYe8QIdLOkMk3hYJ6', 'member', 1),
(2, 'teste', 'teste', 'teste', 'teste@teste.com', '$2y$10$Alp1/5aKbS9bzdxB7srzEOaHrjyJhxgPVZaaPYe8QIdLOkMk3hYJ6', '', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `called`
--
ALTER TABLE `called`
  ADD PRIMARY KEY (`id_called`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `called`
--
ALTER TABLE `called`
  MODIFY `id_called` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
