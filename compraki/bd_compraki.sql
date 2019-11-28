-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2019 às 15:07
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compraki`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuario`
--

CREATE TABLE `cad_usuario` (
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `cel` int(10) DEFAULT NULL,
  `pwd` varchar(45) DEFAULT NULL,
  `tipuser_cd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`cpf`, `rg`, `nome`, `email`, `tel`, `cel`, `pwd`, `tipuser_cd`) VALUES
('32412', '34214', 'dfgsa', 'dsafas', 843, 928147, 'dasd', 1),
('821471', '3728', 'bruno', 'sklahj', 843, 928147, 'asd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `nome` varchar(150) CHARACTER SET utf8 NOT NULL,
  `sobrenome` varchar(150) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(150) CHARACTER SET utf8 NOT NULL,
  `numero` int(6) NOT NULL,
  `estado` varchar(2) CHARACTER SET utf8 NOT NULL,
  `bandeiraCartao` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `cvc` int(3) DEFAULT NULL,
  `mesVencimento` int(2) DEFAULT NULL,
  `anoVencimento` int(4) DEFAULT NULL,
  `formaPagamento` int(1) NOT NULL,
  `cd_cpf` varchar(11) NOT NULL,
  `horarioEntrega` varchar(5) NOT NULL,
  `numeroCartao` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`nome`, `sobrenome`, `endereco`, `numero`, `estado`, `bandeiraCartao`, `cvc`, `mesVencimento`, `anoVencimento`, `formaPagamento`, `cd_cpf`, `horarioEntrega`, `numeroCartao`) VALUES
('', '', '', 0, '', '', 0, 0, 0, 1, '', '', NULL),
('ufgui', 'uwhsf', 'rfhdfiugh', 83432, 'BA', 'vs', 123, 5, 1232, 1, '', '', NULL),
('bruno', 'Luiz', 'São Miguel', 123, 'PE', 'mc', 136, 1, 2022, 1, '', '', NULL),
('sfh', 'hjkhfsk', 'dsjkfgbsdkj1', 21312, 'RR', '', 0, 0, 0, 0, '12321321321', '12:21', 0),
('Bruno', 'Fhynbeen', 'Araquari, sao miguel', 123, 'CE', '', 0, 0, 0, 0, '12134754907', '15:45', 0),
('Bruno', 'Fhynbeen', 'Araquari, sao miguel', 123, 'CE', '', 0, 0, 0, 0, '12134754907', '15:45', 0),
('Feio', 'fdhkjh', 'djskgbjj', 1231, 'AL', '', 0, 0, 0, 1, '21321324', '12:32', 0),
('Feio', 'fdhkjh', 'djskgbjj', 1231, 'AL', '', 0, 0, 0, 1, '21321324', '12:32', 0),
('Bruno', 'Luiz', 'Araquari, Rua São Miguel', 347, 'SC', '', 0, 0, 0, 1, '12134754907', '12:55', 0),
('Bruno', 'Luiz', 'Araquari, Rua São Miguel', 347, 'SC', '', 0, 0, 0, 1, '12134754907', '12:55', 0),
('Brunoasd', 'Luizsa', 'Araquari, Rua São Miguelr', 3472, 'RO', '', 0, 0, 0, 1, '12134754903', '12:15', 0),
('Telvina', 'Fhynbeen', 'São Miguel, 347', 465, 'RJ', '', 0, 0, 0, 1, '1234135421', '12:54', 0),
('', '', '', 0, '', '', 0, 0, 0, 1, '123', '', 0),
('', '', '', 0, '', '', 0, 0, 0, 1, '123', '', 0),
('', '', '', 0, '', '', 0, 0, 0, 1, '123', '', 0),
('', '', '', 0, '', '', 0, 0, 0, 1, '123', '', 0),
('', '', '', 0, '', '', 0, 0, 0, 1, '123', '', 0),
('', '', '', 0, '', '', 0, 0, 0, 1, '123', '', 0),
('sfknk', 'kljsklfj12', 'jbjkb', 213, 'PE', '', 0, 0, 0, 1, '213123', '21:32', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `cod_pedido` int(3) NOT NULL,
  `cpf_usuario` varchar(11) NOT NULL,
  `endereco_entrega` varchar(150) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `nome_produto` varchar(11) NOT NULL,
  `horario_agendado` varchar(5) NOT NULL,
  `preco_produto` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(150) NOT NULL,
  `desc_prod` varchar(300) NOT NULL,
  `preco` varchar(8) NOT NULL,
  `cod_prod` int(5) NOT NULL,
  `qtd_emb` int(3) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `preco_unit` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `desc_prod`, `preco`, `cod_prod`, `qtd_emb`, `categoria`, `preco_unit`) VALUES
('AÇAFRÃO', 'AÇAFRÃO', '60.00', 1, 20, 'Frutaria', '3.00'),
('BICARBONATO DE SÓDIO', 'BICARBONATO DE SÓDIO', '120.00', 2, 30, 'Cozinha', '4.00'),
('', 'CAMOMILA', '40.00', 3, 20, 'Frutaria', '2.00'),
('CANELA EM PÓ', 'CANELA EM PÓ', '20.00', 4, 20, 'Frutaria', '1.00'),
('', 'CANELA EM CASCA', '60.00', 5, 20, 'Frutaria', '3.00'),
('', 'CHOCOLATE GRANULADO ESCURO', '90.00', 6, 30, 'Cozinha', '3.00'),
('COENTRO EM GRÃO', 'COENTRO EM GRÃO', '69.00', 7, 23, 'Frutaria', '3.00'),
('COENTRO EM PÓ', 'COENTRO EM PÓ', '86.70', 8, 34, 'Frutaria', '2.55'),
('COLORÍFICO', 'COLORÍFICO', '40.00', 9, 20, 'Cozinha', '2.00'),
('COMINHO EM PÓ', 'COMINHO EM PÓ', '20.00', 10, 20, 'Frutaria', '1.00'),
('CRAVO', 'CRAVO', '90.00', 11, 30, 'Frutaria', '3.00'),
('ERVA DOCE', 'ERVA DOCE', '92.00', 12, 46, 'Frutaria', '2.00'),
('LOURO EM FOLHA', 'LOURO EM FOLHA', '10.00', 13, 5, 'Frutaria', '2.00'),
('CHA MATE LEAO VARIOS SABORES', 'CHA MATE LEAO VARIOS SABORES', '28.00', 14, 14, 'Cozinha', '2.00'),
('SUCRILHO KELLHESS MUSLIX TRDICIONAL 350G', 'SUCRILHO KELLHESS MUSLIX TRDICIONAL 350G', '96.00', 15, 16, 'Cozinha', '6.00'),
('CATCHUP 200G KONSUMO', 'CATCHUP 200G KONSUMO', '0.00', 16, 14, 'Cozinha', '0.00'),
('CHA LEAO HORTELA 10G', 'CHA LEAO HORTELA 10G', '18.00', 17, 18, 'Cozinha', '1.00'),
('GELATINA DR.OETKER 45G', 'GELATINA DR.OETKER 45G', '0.00', 18, 4, 'Cozinha', '0.00'),
('MOUSSE DR.OETKER 70G', 'MOUSSE DR.OETKER 70G', '32.00', 19, 16, 'Cozinha', '2.00'),
('CHA MATE LEAO 200G', 'CHA MATE LEAO 200G', '54.00', 20, 18, 'Cozinha', '3.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `nome` (`nome`),
  ADD KEY `tipuser_cd` (`tipuser_cd`);

--
-- Indexes for table `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`cod_pedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entrega`
--
ALTER TABLE `entrega`
  MODIFY `cod_pedido` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod_prod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
