-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Maio-2023 às 22:34
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
-- Banco de dados: `sis-escolar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `id` int(11) NOT NULL,
  `nomeAluno` varchar(150) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(70) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `genero` char(1) NOT NULL,
  `turma` char(1) NOT NULL,
  `matricula` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id`, `nomeAluno`, `dataNasc`, `email`, `tel`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `genero`, `turma`, `matricula`) VALUES
(1, 'Pedro', '2003-08-11', 'pedro@email.com', '19991577560', '13974664', 'Rua das Ameixas', '99', 'Loteamento de Chácaras de Recreio Jardim Planalto', 'Itapira', 'SP', '1', '2', 1),
(3, 'Cleber', '1994-12-15', 'cleber@email.com', '1940029822', '13970430', 'Rua José Pereira', '126', 'Vila Pereira', 'Itapira', 'SP', '1', '2', 1),
(8, 'João Henrique', '1998-09-08', 'jao@email.com', '19991522569', '13973020', 'Avenida Cristina Correa Job', '720', 'Parque Fortaleza', 'Itapira', 'SP', '1', '1', 1),
(12, 'Marcia', '1969-12-27', 'marcia@email.com', '19995996999', '13970-430', 'Rua José Pereira', '99', 'Vila Pereira', 'Itapira', 'SP', '2', '1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas`
--

CREATE TABLE `tb_disciplinas` (
  `id` int(8) NOT NULL,
  `nomeDisciplina` varchar(40) NOT NULL,
  `cargaHora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_disciplinas`
--

INSERT INTO `tb_disciplinas` (`id`, `nomeDisciplina`, `cargaHora`) VALUES
(6, 'Matemática', '120'),
(7, 'Inglês', '80'),
(8, 'Quimica', '150');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turmas`
--

CREATE TABLE `tb_turmas` (
  `id` int(8) NOT NULL,
  `descTurma` varchar(20) NOT NULL,
  `ano` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_turmas`
--

INSERT INTO `tb_turmas` (`id`, `descTurma`, `ano`) VALUES
(1, '12', '2012'),
(2, '13', '2013'),
(3, 'Tchurma', '2005'),
(9, 'GTI-4', '2015');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
