-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Abr-2021 às 13:17
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdcurso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcli`
--

CREATE TABLE `cadcli` (
  `nome` int(200) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `cel` varchar(10) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `uf` int(5) NOT NULL,
  `cidade` int(100) NOT NULL,
  `rua` int(100) NOT NULL,
  `estado` int(100) NOT NULL,
  `bairro` int(100) NOT NULL,
  `tel` int(10) NOT NULL,
  `login` int(10) NOT NULL,
  `senha` int(100) NOT NULL,
  `datanasc` date NOT NULL,
  `estacivil` int(10) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadprod`
--

CREATE TABLE `cadprod` (
  `id` varchar(100) NOT NULL,
  `modelo` int(100) NOT NULL,
  `fabricante` int(100) NOT NULL,
  `qtd` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbllogin`
--

CREATE TABLE `tbllogin` (
  `idlogin` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dtcad` date NOT NULL,
  `dtalteracao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblprod`
--

CREATE TABLE `tblprod` (
  `id` int(100) NOT NULL,
  `nome` int(100) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `descricao` int(200) NOT NULL,
  `qtd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadprod`
--
ALTER TABLE `cadprod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indexes for table `tblprod`
--
ALTER TABLE `tblprod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
