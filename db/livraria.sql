-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2023 às 22:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `capas`
--

CREATE TABLE `capas` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `sobrenome`, `email`, `senha`, `admin`) VALUES
(1, 'Mario', 'Henrique', 'mario@hrllo.com', '5d41402abc4b2a76b9719d911017c592', 0),
(2, 'as', 'asa', 'asasa@sasa.com', 'a2e63ee01401aaeca78be023dfbb8c59', 0),
(3, 'lo', 'lo', 'lo@lo', '9cdfb439c7876e703e307864c9167a15', 0),
(4, 'Mario', 'Pelissari', 'mario@henrique.com.br', 'b21afc54fb48d153c19101658f4a2a48', 0),
(5, 'Rosane ', 'Pelissari', 'rose@gmail.com', '54b1d109dc7156ef46816a9527a861bc', 0),
(6, 'Lucas', 'Barbosa', 'Figma@gmail.com', 'a2e63ee01401aaeca78be023dfbb8c59', 0),
(7, 'Paolo', 'asa', 'Pal@gmail.com', '12', 0),
(8, 'Luana', 'Risk', 'lu@gmail.com', '654e4dc5b90b7478671fe6448cab3f32', 0),
(9, 'Helo', 'pop', 'hello@gmail.com', 'a2e63ee01401aaeca78be023dfbb8c59', 0),
(10, 'Yuri', 'lico', 'yuri@gmail.com', '9491876179d7a80bb5c86f15dbe31422', 0),
(11, 'Maro', 'poli', 'maro@gmail.com', 'senha', 0),
(12, 'lucas', 'Querry', 'luca@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 0),
(13, 'dudu', 'camarco', '123@123', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `genero` varchar(200) NOT NULL,
  `editora` varchar(200) NOT NULL,
  `ano_publi` varchar(4) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `nome`, `genero`, `editora`, `ano_publi`, `imagem`) VALUES
(3, 'Paranormal', 'terror', 'darkside', '2022', ''),
(5, 'Power', 'comedia', '21', '2013', ''),
(6, 'lop', 'pol', 'ase', '456', 'data:;base64,');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `capas`
--
ALTER TABLE `capas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `capas`
--
ALTER TABLE `capas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
