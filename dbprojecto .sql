-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2022 às 02:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbprojecto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmgs`
--

CREATE TABLE `tbmgs` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `mgs` varchar(500) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmgs`
--

INSERT INTO `tbmgs` (`id`, `nome`, `mgs`, `data`) VALUES
(1, 'De Deus', 'Ola mundo tudo bem', '2022-01-31 21:46:08'),
(2, 'Adilson', 'Oi', '2022-01-31 21:47:08'),
(3, 'Marcos', 'ola', '2022-01-31 23:13:30'),
(6, 'Ola familia', 'Ola familia', '2022-01-31 23:17:24'),
(7, 'Ola familia', 'Ola familia', '2022-01-31 23:18:42'),
(14, 'Ola', 'Ola', '2022-01-31 23:59:30'),
(17, 'Ola mundo Este e o meu nome. Obrigada.', 'Ola mundo Este e o meu nome. Obrigada.', '2022-02-01 00:04:18'),
(18, 'Ola mundo Este e o meu nome. Obrigada.', 'Ola mundo Este e o meu nome. Obrigada.', '2022-02-01 00:06:09'),
(23, 'Como e que pessoal', 'Como e que pessoal', '2022-02-01 00:24:55'),
(24, 'aa', 'aa', '2022-02-01 01:32:41');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbmgs`
--
ALTER TABLE `tbmgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbmgs`
--
ALTER TABLE `tbmgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
