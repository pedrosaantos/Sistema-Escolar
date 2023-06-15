-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2023 às 02:22
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

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
  `cpf` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(70) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `genero` char(1) NOT NULL,
  `turma_id` int(8) NOT NULL,
  `matricula` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id`, `nomeAluno`, `dataNasc`, `cpf`, `email`, `tel`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `genero`, `turma_id`, `matricula`) VALUES
(1, 'Pedro', '2003-08-11', '43698499845', 'pedro@email.com', '19991577560', '13974664', 'Rua das Ameixas', '99', 'Loteamento de Chácaras de Recreio Jardim Planalto', 'Itapira', 'SP', '', 10, 1),
(3, 'Cleber', '1994-12-15', '99999999900', 'cleber@email.com', '1940029822', '13970430', 'Rua José Pereira', '126', 'Vila Pereira', 'Itapira', 'SP', '', 10, 1),
(6, 'Pedro dos Santos', '2003-08-11', '11111111101', 'pedro@email.com', '19991577560', '13974664', 'Rua das Ameixas', '99', 'Loteamento de Chácaras de Recreio Jardim Planalto', 'Itapira', 'SP', '', 10, 1),
(8, 'Casimiro', '1994-05-13', 'casimiro@email', '44444444444', '11111111111', '13974391', 'Rua 24 de Outubro', '222', 'Santa Cruz', 'Itapira', 'SP', '1', 13, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alunos2`
--

CREATE TABLE `tb_alunos2` (
  `id` int(8) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turma_id` int(8) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_alunos2`
--

INSERT INTO `tb_alunos2` (`id`, `nome`, `turma_id`, `foto`) VALUES
(1, 'pedro', 10, ''),
(2, 'Cleber', 12, ''),
(3, 'Otávio', 11, ''),
(4, 'carlos', 11, 'aea207f79f2b412ab28e3d1d1d0e3894.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas`
--

CREATE TABLE `tb_disciplinas` (
  `id` int(8) NOT NULL,
  `nomeDisc` varchar(50) NOT NULL,
  `professor` varchar(50) NOT NULL,
  `cargaHora` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_disciplinas`
--

INSERT INTO `tb_disciplinas` (`id`, `nomeDisc`, `professor`, `cargaHora`) VALUES
(1, 'Engenharia de Software I', 'Professor Tiago', '80'),
(2, 'Design Digital', 'Professor Júnior', '60'),
(3, 'Modelagem de Banco de Dados', 'Professor Mateus', '80'),
(4, 'Desenvolvimento Web I', 'Professor Tiago', '60'),
(5, 'Banco de Dados Relacional', 'Professor Mateus', '60'),
(6, 'Algoritmo e Lógica de Programação', 'Professor Júnior', '80'),
(7, 'Engenharia de Software II', 'Professora Ana Célia', '60'),
(8, 'Desenvolvimento Web II', 'Professor Júnior', '80'),
(9, 'Técnica de Programação II', 'Professor Júnior', '60');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas3`
--

CREATE TABLE `tb_disciplinas3` (
  `id` int(8) NOT NULL,
  `nomeDisciplina` varchar(40) NOT NULL,
  `cargaHora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_disciplinas3`
--

INSERT INTO `tb_disciplinas3` (`id`, `nomeDisciplina`, `cargaHora`) VALUES
(6, 'Matemática', '120'),
(8, 'Inglês', '120'),
(9, 'Educação Física', '80');

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
(10, '1DSM', '2022'),
(11, '2DSM', '2023'),
(13, 'GTI-1', '2021'),
(14, 'GTI-4', '2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(8) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `datacad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`, `datacad`) VALUES
(1, 'junior', '123', ''),
(5, 'admin', 'admin', ''),
(7, 'Pedro', 'ee5cd7d5d96c8874117891b2c92a036f96918e66c102bc698ae77542c186f981', '15-06-2023'),
(8, 'Maria', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '15-06-2023');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_alunos2`
--
ALTER TABLE `tb_alunos2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_disciplinas3`
--
ALTER TABLE `tb_disciplinas3`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_alunos2`
--
ALTER TABLE `tb_alunos2`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_disciplinas3`
--
ALTER TABLE `tb_disciplinas3`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
