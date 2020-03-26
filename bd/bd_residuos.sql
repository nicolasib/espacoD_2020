-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Set-2019 às 02:04
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
-- Banco de dados: `bd_residuos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `combinacoes`
--

CREATE TABLE `combinacoes` (
  `idcima` int(11) NOT NULL,
  `idbaixo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `combinacoes`
--

INSERT INTO `combinacoes` (`idcima`, `idbaixo`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE `cores` (
  `idCores` int(11) NOT NULL,
  `cor` varchar(45) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `cores`
--

INSERT INTO `cores` (`idCores`, `cor`) VALUES
(1, 'amarelo'),
(2, 'preto'),
(3, 'branco'),
(4, 'azul'),
(5, 'verde'),
(6, 'vermelho'),
(7, 'marrom'),
(8, 'rosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fitness`
--

CREATE TABLE `fitness` (
  `idFit` int(11) NOT NULL,
  `idProdCima` int(11) DEFAULT NULL,
  `idProdBaixo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inverno`
--

CREATE TABLE `inverno` (
  `idInv` int(11) NOT NULL,
  `idProdCima` int(11) DEFAULT NULL,
  `idProdBaixo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estrutura da tabela `novidades`
--

CREATE TABLE `novidades` (
  `idNov` int(50) NOT NULL,
  `idProdCima` int(50) DEFAULT NULL,
  `idProdBaixo` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `novidades`
--

INSERT INTO `novidades` (`idNov`, `idProdCima`, `idProdBaixo`) VALUES
(1, 1, NULL),
(2, 4, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `idPecas` int(11) NOT NULL,
  `descricao` varchar(300) COLLATE latin1_general_cs NOT NULL,
  `preco` decimal(20,2) NOT NULL,
  `tipo` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `posicao` int(3) NOT NULL,
  `marca` varchar(45) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`idPecas`, `descricao`, `preco`, `tipo`, `posicao`, `marca`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '49.90', 'Blusa', 0, 'Yellow'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '59.90', 'Short', 1, 'Rosa Chiclete'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '89.90', 'Calça', 1, 'Contatos'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '59.90', 'Calça', 1, 'Stratégia'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '39.90', 'Saia', 1, 'Luma Ville'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.00', 'Blusa', 0, 'Território Nacional'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.00', 'Calça', 1, 'Patogê'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '59.90', 'Calça', 1, 'Stratégia'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '89.90', 'Saia', 1, 'Luma Ville'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '60.00', 'Blusa', 0, 'Grafitte'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '89.90', 'Calça', 1, 'Patogê'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '49.90', 'Short', 1, 'Cheia de Graça'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '29.90', 'Saia', 1, 'Lia Bella'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '39.90', 'Saia', 1, 'Silvânia Mares');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodbaixo`
--

CREATE TABLE `prodbaixo` (
  `id` int(11) NOT NULL,
  `idCor` int(11) NOT NULL,
  `idTam` int(11) NOT NULL,
  `idPeca` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `srcImgTras` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `srcImgFrente` varchar(200) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `prodbaixo`
--

INSERT INTO `prodbaixo` (`id`, `idCor`, `idTam`, `idPeca`, `quantidade`, `srcImgTras`, `srcImgFrente`) VALUES
(1, 3, 2, 2, 20, 'stringQualquer', './imgs/baixo/1.jpg'),
(2, 2, 2, 3, 20, 'stringQualquer', './imgs/baixo/2.jpg'),
(3, 6, 2, 4, 20, 'stringQualquer', './imgs/baixo/3.jpg'),
(4, 2, 2, 5, 20, 'stringQualquer', './imgs/baixo/4.jpg'),
(5, 8, 3, 7, 20, 'stringqualquer', './imgs/baixo/5.jpg'),
(6, 2, 3, 8, 20, 'stringqualquer', './imgs/baixo/6.jpg'),
(7, 2, 3, 9, 20, 'stringqualquer', './imgs/baixo/7.jpg'),
(8, 2, 3, 13, 20, 'stringQualquer', './imgs/baixo/8.jpg'),
(9, 8, 3, 14, 20, 'stringQualquer', './imgs/baixo/9.jpg'),
(10, 8, 3, 12, 20, 'stringQualquer', './imgs/baixo/10.jpg'),
(11, 4, 3, 11, 20, 'stringQualquer', './imgs/baixo/11.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodcima`
--

CREATE TABLE `prodcima` (
  `id` int(11) NOT NULL,
  `idCor` int(11) NOT NULL,
  `idTam` int(11) NOT NULL,
  `idPeca` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `srcImgTras` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `srcImgFrente` varchar(200) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `prodcima`
--

INSERT INTO `prodcima` (`id`, `idCor`, `idTam`, `idPeca`, `quantidade`, `srcImgTras`, `srcImgFrente`) VALUES
(1, 7, 3, 1, 20, 'stringqualquer', './imgs/cima/1_7.jpg'),
(2, 5, 3, 6, 30, 'stringqualquer', './imgs/cima/6_5.jpg'),
(3, 3, 3, 10, 20, 'stringQualquer', './imgs/cima/10_3.jpg'),
(4, 1, 2, 1, 20, 'teste', './imgs/cima/1_1.jpg'),
(5, 6, 2, 6, 20, 'teste', './imgs/cima/6_6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sale`
--

CREATE TABLE `sale` (
  `idSale` int(11) NOT NULL,
  `idProdCima` int(11) DEFAULT NULL,
  `idProdBaixo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanhos`
--

CREATE TABLE `tamanhos` (
  `idTam` int(11) NOT NULL,
  `tamanho` varchar(3) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `tamanhos`
--

INSERT INTO `tamanhos` (`idTam`, `tamanho`) VALUES
(1, 'PP'),
(2, 'P'),
(3, 'M'),
(4, 'G'),
(5, 'GG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `verao`
--

CREATE TABLE `verao` (
  `idVer` int(11) NOT NULL,
  `idProdCima` int(11) DEFAULT NULL,
  `idProdBaixo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `combinacoes`
--
ALTER TABLE `combinacoes`
  ADD PRIMARY KEY (`idcima`,`idbaixo`),
  ADD KEY `combaixoFK` (`idbaixo`);

--
-- Índices para tabela `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`idCores`);

--
-- Índices para tabela `fitness`
--
ALTER TABLE `fitness`
  ADD PRIMARY KEY (`idFit`),
  ADD KEY `fkProdCimaFit` (`idProdCima`),
  ADD KEY `fkProdBaixoFit` (`idProdBaixo`);

--
-- Índices para tabela `inverno`
--
ALTER TABLE `inverno`
  ADD PRIMARY KEY (`idInv`),
  ADD KEY `fkProdCimaInv` (`idProdCima`),
  ADD KEY `fkProdBaixoInv` (`idProdBaixo`);

--
-- Índices para tabela `novidades`
--
ALTER TABLE `novidades`
  ADD PRIMARY KEY (`idNov`),
  ADD KEY `FK_ProdCima` (`idProdCima`),
  ADD KEY `FK_ProdBaixo` (`idProdBaixo`);

--
-- Índices para tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`idPecas`);

--
-- Índices para tabela `prodbaixo`
--
ALTER TABLE `prodbaixo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corFK` (`idCor`),
  ADD KEY `tamFK` (`idTam`),
  ADD KEY `pecaFK` (`idPeca`);

--
-- Índices para tabela `prodcima`
--
ALTER TABLE `prodcima`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corCimaFK` (`idCor`),
  ADD KEY `tamCimaFK` (`idTam`),
  ADD KEY `pecaCimaFK` (`idPeca`);

--
-- Índices para tabela `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`idSale`),
  ADD KEY `fkProdCimaSale` (`idProdCima`),
  ADD KEY `fkProdBaixoSale` (`idProdBaixo`);

--
-- Índices para tabela `tamanhos`
--
ALTER TABLE `tamanhos`
  ADD PRIMARY KEY (`idTam`);

--
-- Índices para tabela `verao`
--
ALTER TABLE `verao`
  ADD PRIMARY KEY (`idVer`),
  ADD KEY `fkProdCimaVer` (`idProdCima`),
  ADD KEY `fkProdBaixoVer` (`idProdBaixo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cores`
--
ALTER TABLE `cores`
  MODIFY `idCores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `fitness`
--
ALTER TABLE `fitness`
  MODIFY `idFit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `inverno`
--
ALTER TABLE `inverno`
  MODIFY `idInv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `novidades`
--
ALTER TABLE `novidades`
  MODIFY `idNov` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `idPecas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `prodbaixo`
--
ALTER TABLE `prodbaixo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `prodcima`
--
ALTER TABLE `prodcima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sale`
--
ALTER TABLE `sale`
  MODIFY `idSale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tamanhos`
--
ALTER TABLE `tamanhos`
  MODIFY `idTam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `verao`
--
ALTER TABLE `verao`
  MODIFY `idVer` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `combinacoes`
--
ALTER TABLE `combinacoes`
  ADD CONSTRAINT `combaixoFK` FOREIGN KEY (`idbaixo`) REFERENCES `prodbaixo` (`id`),
  ADD CONSTRAINT `combcimaFK` FOREIGN KEY (`idcima`) REFERENCES `prodcima` (`id`);

--
-- Limitadores para a tabela `fitness`
--
ALTER TABLE `fitness`
  ADD CONSTRAINT `fkProdBaixoFit` FOREIGN KEY (`idProdBaixo`) REFERENCES `prodbaixo` (`id`),
  ADD CONSTRAINT `fkProdCimaFit` FOREIGN KEY (`idProdCima`) REFERENCES `prodcima` (`id`);

--
-- Limitadores para a tabela `inverno`
--
ALTER TABLE `inverno`
  ADD CONSTRAINT `fkProdBaixoInv` FOREIGN KEY (`idProdBaixo`) REFERENCES `prodbaixo` (`id`),
  ADD CONSTRAINT `fkProdCimaInv` FOREIGN KEY (`idProdCima`) REFERENCES `prodcima` (`id`);

--
-- Limitadores para a tabela `novidades`
--
ALTER TABLE `novidades`
  ADD CONSTRAINT `FK_ProdBaixo` FOREIGN KEY (`idProdBaixo`) REFERENCES `prodbaixo` (`id`),
  ADD CONSTRAINT `FK_ProdCima` FOREIGN KEY (`idProdCima`) REFERENCES `prodcima` (`id`);

--
-- Limitadores para a tabela `prodbaixo`
--
ALTER TABLE `prodbaixo`
  ADD CONSTRAINT `corFK` FOREIGN KEY (`idCor`) REFERENCES `cores` (`idCores`),
  ADD CONSTRAINT `pecaFK` FOREIGN KEY (`idPeca`) REFERENCES `pecas` (`idPecas`),
  ADD CONSTRAINT `tamFK` FOREIGN KEY (`idTam`) REFERENCES `tamanhos` (`idTam`);

--
-- Limitadores para a tabela `prodcima`
--
ALTER TABLE `prodcima`
  ADD CONSTRAINT `corCimaFK` FOREIGN KEY (`idCor`) REFERENCES `cores` (`idCores`),
  ADD CONSTRAINT `pecaCimaFK` FOREIGN KEY (`idPeca`) REFERENCES `pecas` (`idPecas`),
  ADD CONSTRAINT `tamCimaFK` FOREIGN KEY (`idTam`) REFERENCES `tamanhos` (`idTam`);

--
-- Limitadores para a tabela `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `fkProdBaixoSale` FOREIGN KEY (`idProdBaixo`) REFERENCES `prodbaixo` (`id`),
  ADD CONSTRAINT `fkProdCimaSale` FOREIGN KEY (`idProdCima`) REFERENCES `prodcima` (`id`);

--
-- Limitadores para a tabela `verao`
--
ALTER TABLE `verao`
  ADD CONSTRAINT `fkProdBaixoVer` FOREIGN KEY (`idProdBaixo`) REFERENCES `prodbaixo` (`id`),
  ADD CONSTRAINT `fkProdCimaVer` FOREIGN KEY (`idProdCima`) REFERENCES `prodcima` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
