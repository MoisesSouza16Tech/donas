-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2023 às 01:56
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
-- Banco de dados: `bddonas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbanuncio`
--

CREATE TABLE `tbanuncio` (
  `idAnuncio` int(11) NOT NULL,
  `nomeAnuncio` varchar(100) DEFAULT NULL,
  `descricaoAnuncio` varchar(240) DEFAULT NULL,
  `valorAnuncio` double DEFAULT NULL,
  `precoCustoAnuncio` double NOT NULL,
  `estrelasAnuncio` int(11) DEFAULT NULL,
  `imagemPrincipalAnuncio` varchar(100) DEFAULT NULL,
  `tipoAnuncio` int(11) DEFAULT NULL,
  `qtdProduto` int(11) DEFAULT NULL,
  `idVendedora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbanuncio`
--

INSERT INTO `tbanuncio` (`idAnuncio`, `nomeAnuncio`, `descricaoAnuncio`, `valorAnuncio`, `precoCustoAnuncio`, `estrelasAnuncio`, `imagemPrincipalAnuncio`, `tipoAnuncio`, `qtdProduto`, `idVendedora`) VALUES
(1, 'Bolo Brigadeirão', 'Bolo Brigadeirão delicioso!!', 25.5, 20, 3, 'assets/media/products-services/1.png', 2, 15, 1),
(2, 'Trufas de Maracujá', 'Trufas de maracujá deliciosas!!', 3, 2, 4, 'assets/media/products-services/2.png', 2, 33, 1),
(3, 'Blusa de Moletóm', 'Blusas de Moletóm de diversas cores e tamanhos!!', 55, 45, 0, 'assets/media/products-services/3.png', 2, 35, 2),
(4, 'Vestido Jeans', 'Vestido Jeans', 65, 55, 0, 'assets/media/products-services/4.png', 2, 45, 2),
(5, 'Costura de Vestidos', 'Costura de Vestidos rasgados e ajuste de tamanho.', 35, 30, 0, 'assets/media/products-services/5.png', 1, 0, 2),
(6, 'Bolsa de Crochê', 'Bolsa clássica noite Bohemia.\r\nAdequada para uma festa secular, um encontro, ir ao teatro e como complemento do guarda-roupa no trabalho no escritório.', 10, 8, 0, 'assets/media/products-services/6.png', 2, 40, 3),
(7, 'Bolo Salgado', 'Surpreenda-se com nosso bolo gelado de frango!', 6, 4, 4, 'assets/media/products-services/7.png', 2, 1, 1),
(8, 'Colar de brilhantes', 'Colar dourado, com pedras de brilhante, ótimo para ocasiões formais ', 35, 24, 0, 'assets/media/products-services/8.png', 2, 22, 5),
(9, 'Anel', 'Anel dourado para eventos casuais e formais ', 250, 200, 0, 'assets/media/products-services/9.png', 2, 15, 5),
(10, 'Brinco de Perolas', 'Brinco Pérola Base Esferas Cravejadas Folheado Ouro Semi Joia Fina', 40, 28, 0, 'assets/media/products-services/10.png', 2, 18, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbanunciosubcategoria`
--

CREATE TABLE `tbanunciosubcategoria` (
  `idAnuncioSubCategoria` int(11) NOT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idSubCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbanunciosubcategoria`
--

INSERT INTO `tbanunciosubcategoria` (`idAnuncioSubCategoria`, `idAnuncio`, `idSubCategoria`) VALUES
(4, 2, 1),
(5, 2, 3),
(6, 3, 7),
(7, 4, 6),
(8, 4, 9),
(11, 7, 2),
(12, 7, 2),
(13, 11, 1),
(14, 11, 2),
(18, 2, 1),
(19, 2, 3),
(20, 2, 1),
(21, 2, 3),
(22, 2, 1),
(23, 2, 3),
(24, 2, 1),
(25, 2, 3),
(26, 2, 1),
(27, 2, 3),
(28, 2, 1),
(29, 2, 3),
(30, 2, 1),
(31, 2, 3),
(32, 2, 1),
(33, 2, 3),
(34, 7, 2),
(35, 7, 14),
(36, 8, 21),
(37, 8, 21),
(38, 9, 20),
(39, 10, 23),
(40, 1, 1),
(41, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbavaliacao`
--

CREATE TABLE `tbavaliacao` (
  `idAvaliacao` int(11) NOT NULL,
  `conteudoAvaliacao` varchar(140) DEFAULT NULL,
  `estrelasAvaliacao` int(11) NOT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbavaliacao`
--

INSERT INTO `tbavaliacao` (`idAvaliacao`, `conteudoAvaliacao`, `estrelasAvaliacao`, `idAnuncio`, `idCliente`) VALUES
(1, 'Suas Trufas são deliciosas!! Parabens!!', 5, 2, 1),
(3, 'As trufas são uma delicia!', 5, 2, 10),
(4, 'Poderia ser mais suave, mas a casquinha é incrível.\r\n', 4, 2, 2),
(5, 'Uma experiência única\r\n\r\n', 4, 2, 3),
(6, 'Textura estranha, sabor pouco intenso', 2, 2, 5),
(7, 'Trufas perfeitas, equilíbrio ideal de doce e azedo', 5, 2, 4),
(8, 'Incrivelmente macio e a combinação perfeita de chocolate e brigadeiro.', 5, 1, 10),
(9, 'Desapontador, muito doce e sem equilíbrio', 1, 1, 3),
(10, 'Bom, mas esperava mais intensidade de sabor.', 4, 1, 4),
(11, 'Aceitável, mas faltou tempero.\r\n', 3, 7, 4),
(12, 'Delicioso! Frango suculento e bem temperado.', 5, 7, 10),
(13, 'Ótima opção salgada, sabor marcante', 5, 7, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(50) DEFAULT NULL,
  `fotoCategoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nomeCategoria`, `fotoCategoria`) VALUES
(1, 'Artesanatos', 'assets/media/categories/1.png'),
(2, 'Beleza', 'assets/media/categories/2.png'),
(3, 'Culinária', 'assets/media/categories/3.png'),
(4, 'Joias', 'assets/media/categories/4.png'),
(5, 'Livros', 'assets/media/categories/5.png'),
(6, 'Moda', 'assets/media/categories/6.png'),
(7, 'Tecnologia', 'assets/media/categories/7.png'),
(8, 'Decoração', 'assets/media/categories/8.png'),
(9, 'Esportes', 'assets/media/categories/9.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) DEFAULT NULL,
  `nomeUsuarioCliente` varchar(50) DEFAULT NULL,
  `emailCliente` varchar(100) DEFAULT NULL,
  `senhaCliente` varchar(256) DEFAULT NULL,
  `dtNascCliente` date DEFAULT NULL,
  `fotoCliente` varchar(100) DEFAULT NULL,
  `cidadeCliente` varchar(100) DEFAULT NULL,
  `estadoCliente` char(2) DEFAULT NULL,
  `logradouroCliente` varchar(100) DEFAULT NULL,
  `bairroCliente` varchar(100) DEFAULT NULL,
  `numeroCliente` int(11) DEFAULT NULL,
  `complementoCliente` varchar(100) DEFAULT NULL,
  `cepCliente` char(8) DEFAULT NULL,
  `cpfCliente` char(11) DEFAULT NULL,
  `dataCadastro` date NOT NULL DEFAULT current_timestamp(),
  `statusConta` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `nomeUsuarioCliente`, `emailCliente`, `senhaCliente`, `dtNascCliente`, `fotoCliente`, `cidadeCliente`, `estadoCliente`, `logradouroCliente`, `bairroCliente`, `numeroCliente`, `complementoCliente`, `cepCliente`, `cpfCliente`, `dataCadastro`, `statusConta`) VALUES
(1, 'Vitoria Dantez', 'VickDantz', 'VickDantz@gmail.com', '$2y$10$EU6mPEBIrJFk./r1T9blL.tZNtQ2T3DC7KruPamUpZaAsy.gbnidm', '1989-01-15', 'assets/media/users/clientes/1.png', 'São Paulo', 'SP', 'Travessa Seringais', 'Vila Princesa Isabel', 23, '', '08410010', '34471556711', '2023-02-27', '1'),
(2, 'Ana Clara', 'Aninha', 'ana@gmail.com', '$2y$10$DgsT2ikVnJKFdusqqWDjxuguxGaOT9IuPOqoooXTUKt0JvX5ICweq', '2005-03-07', 'assets/media/users/clientes/2.png', 'São Paulo', 'SP', 'Rua Mondaí', 'Vila Princesa Isabel', 34, '', '08410220', '11669397661', '2023-03-27', '1'),
(3, 'Lucas Silva', 'Luquinhas', 'lucas@gmail.com', '$2y$10$AW3R1qQL8xrMKdGqA12NWODzlgYtnHzjDjXpoitps50KCIgiL9RQK', '2000-02-28', 'assets/media/users/clientes/3.png', 'São Paulo', 'SP', 'Rua Cordislândia', 'Vila Buenos Aires', 50, 'Casa', '08410430', '33796132073', '2023-03-27', '1'),
(4, 'Isabela Souza', 'IsaSouza', 'isabela@gmail.com', '$2y$10$4G0KsHDRzRMyzzix2YLCpu1Ws7BeYMbDcYEetknoB3H9siwYY5Rj6', '1999-12-31', 'assets/media/users/clientes/4.png', 'São Paulo', 'SP', 'Rua Doutor Orlando de Paiva Martins', 'Vila Princesa Isabel', 58, '', '08410330', '05101578746', '2023-05-27', '1'),
(5, 'Joana Ferraz', 'JoFerraz', 'joana@gmail.com', '$2y$10$S6nodEatXXBu6jYazlPIAeLND9CQ28358esvYn369Md3gaoVDYxSO', '1989-10-16', 'assets/media/users/clientes/5.png', 'São Paulo', 'SP', 'Rua Doutor Orlando de Paiva Martins', 'Vila Princesa Isabel', 50, 'Casa', '08410330', '46988006508', '2023-06-27', '1'),
(6, 'José Pereira', 'zePereira', 'jose@gmail.com', '$2y$10$vSoOK6nveQWsh/jIF0BXjeMA7CiTof1XILHFVikwfUIDaS6rMjlpq', '1970-03-07', 'assets/media/users/clientes/6.png', 'Limeira', 'SP', 'Rua Antônio Paes Barbosa', 'Parque Nossa Senhora das Dores', 46, 'Casa', '13483032', '73492603424', '0000-00-00', '1'),
(7, 'Aline', 'Aline', 'aline@gmail.com', '$2y$10$DYrwPnFRIj2weVxM5tgls.g/WDhkU/WMOaCz2ns9r8cGBvLilJzRa', '1990-05-07', 'assets/media/users/clientes/7.png', 'São Paulo', 'SP', 'Rua Feliciano de Mendonça', 'Jardim São Paulo(Zona Leste)', 290, '', '08460365', '27294865850', '2023-11-27', '1'),
(8, 'Julia', 'julia', 'julia@gmail.com', '$2y$10$LgNCOm6ee5HsGqiL4nB6f.Sj1VfBby8.I6x0IUq/1z/hKbGlYboiK', '2006-01-21', 'assets/media/users/clientes/8.png', 'São Paulo', 'SP', 'Rua Correia Ribeiro', 'Jardim Soares', 123, '', '08460260', '53205838858', '2023-12-05', '1'),
(9, 'Eduardo', 'edu', 'edu@gmail.com', '$2y$10$U6TR17dl74HEgFNxjyi1oO32N917dnKuNEZjD7T01qQfCuEfqRaBK', '2005-02-12', 'assets/media/users/clientes/9.png', 'São Paulo', 'SP', 'Rua Correia Ribeiro', 'Jardim Soares', 290, '', '08460260', '11144477735', '2023-12-05', '1'),
(10, 'Vera Yasmin Assunção', 'veraYa', 'veraassuncao@gmail.com', '$2y$10$lZLXt4rye7bbUbk/SnI8E.7/KtCYuSHZ2l.wjsRe76xgfpSgw1hey', '1970-06-24', 'assets/media/users/clientes/10.png', 'Barreiras', 'BA', 'Rua do Antigo Aeroporto', 'São Pedro', 12, '', '47810894', '47973028870', '2023-12-06', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenuncia`
--

CREATE TABLE `tbdenuncia` (
  `idDenuncia` int(11) NOT NULL,
  `motivoDenuncia` varchar(100) DEFAULT NULL,
  `descricaoDenuncia` varchar(100) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idVendedora` int(11) DEFAULT NULL,
  `dataDenuncia` date NOT NULL DEFAULT current_timestamp(),
  `visualizadoDenuncia` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdenuncia`
--

INSERT INTO `tbdenuncia` (`idDenuncia`, `motivoDenuncia`, `descricaoDenuncia`, `idCliente`, `idVendedora`, `dataDenuncia`, `visualizadoDenuncia`) VALUES
(1, '6', 'Fui no dia da costura e vi que era um homem!!', 1, 2, '2023-11-27', '1'),
(2, '1', 'Produto anunciado como trufa, ao chegar não é trufado.', 4, 1, '2023-11-27', '1'),
(3, '1', 'Comprei uma jaqueta para minha filha, e notamos que o produto é de má qualidade rasgou no terceiro u', 6, 2, '2023-11-27', '1'),
(4, '1', 'Fiz uma encomenda, realizei o pagamento e minha encomenda foi cancelada.', 7, 1, '2023-11-27', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbentradaproduto`
--

CREATE TABLE `tbentradaproduto` (
  `idEntradaProduto` int(11) NOT NULL,
  `dataEntradaProduto` datetime DEFAULT NULL,
  `qtdEntradaProduto` int(11) DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbentradaproduto`
--

INSERT INTO `tbentradaproduto` (`idEntradaProduto`, `dataEntradaProduto`, `qtdEntradaProduto`, `idAnuncio`) VALUES
(1, '2023-12-06 23:59:53', 2, 1),
(2, '2023-12-05 17:30:28', 5, 2),
(3, '2023-12-07 00:21:05', 4, 8),
(4, '2023-12-07 00:21:40', 3, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbimagemanuncio`
--

CREATE TABLE `tbimagemanuncio` (
  `idImagemAnuncio` int(11) NOT NULL,
  `enderecoImagem` varchar(100) DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmensagem`
--

CREATE TABLE `tbmensagem` (
  `idMensagem` int(11) NOT NULL,
  `conteudoMensagem` varchar(512) DEFAULT NULL,
  `arquivoMensagem` varchar(100) DEFAULT NULL,
  `horaMensagem` time DEFAULT current_timestamp(),
  `lidoEmMensagem` int(11) DEFAULT 0,
  `origemMensagem` int(11) DEFAULT NULL,
  `nomeArquivoMensagem` varchar(255) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idVendedora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbmensagem`
--

INSERT INTO `tbmensagem` (`idMensagem`, `conteudoMensagem`, `arquivoMensagem`, `horaMensagem`, `lidoEmMensagem`, `origemMensagem`, `nomeArquivoMensagem`, `idCliente`, `idVendedora`) VALUES
(1, 'Olá, Bom dia!!', NULL, '08:33:09', 0, 0, '', 1, 1),
(2, 'Bom dia, obrigada pela compra!!', NULL, '08:34:51', 0, 1, '', 1, 1),
(3, 'Bom dia, possui Vestido Jeans tamanho M??', NULL, '08:49:24', 0, 0, '', 1, 2),
(4, 'Bom dia, temos sim!!', NULL, '08:50:01', 0, 1, '', 1, 2),
(5, 'Oi!', NULL, '11:54:54', 0, 0, '', 9, 1),
(6, '', 'assets/media/messages/6.mp3', '11:55:09', 0, 0, '', 9, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnotifccliente`
--

CREATE TABLE `tbnotifccliente` (
  `idNotifcCliente` int(11) NOT NULL,
  `idDenuncia` int(11) DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idPedidoProduto` int(11) DEFAULT NULL,
  `idPedidoServico` int(11) DEFAULT NULL,
  `tipoNotificacao` int(11) DEFAULT NULL,
  `statusNotificacao` int(11) DEFAULT NULL,
  `dataNotificacao` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbnotifccliente`
--

INSERT INTO `tbnotifccliente` (`idNotifcCliente`, `idDenuncia`, `idAnuncio`, `idCliente`, `idPedidoProduto`, `idPedidoServico`, `tipoNotificacao`, `statusNotificacao`, `dataNotificacao`) VALUES
(1, NULL, NULL, 1, 0, 0, 0, 1, NULL),
(2, NULL, 2, 1, 0, 0, 3, 1, NULL),
(3, NULL, 2, 1, 0, 0, 5, 1, NULL),
(4, NULL, 4, 1, 0, 0, 3, 1, NULL),
(5, NULL, 5, 1, 0, 0, 8, 1, NULL),
(6, NULL, 4, 1, 0, 0, 4, 1, NULL),
(7, 1, NULL, 1, 0, 0, 1, 0, NULL),
(8, NULL, NULL, 2, 0, 0, 0, 1, NULL),
(9, NULL, NULL, 3, 0, 0, 0, 1, NULL),
(10, NULL, NULL, 4, 0, 0, 0, 1, NULL),
(11, NULL, NULL, 5, 0, 0, 0, 0, NULL),
(12, NULL, NULL, 6, 0, 0, 0, 1, NULL),
(13, 2, NULL, 4, 0, 0, 1, 1, NULL),
(14, 3, NULL, 6, 0, 0, 1, 0, NULL),
(15, NULL, NULL, 7, 0, 0, 0, 1, NULL),
(16, NULL, 7, 7, 0, 0, 3, 1, NULL),
(17, NULL, 7, 7, 0, 0, 4, 1, NULL),
(18, 4, NULL, 7, 0, 0, 1, 0, NULL),
(19, NULL, NULL, 8, 0, 0, 0, 1, NULL),
(20, NULL, NULL, 9, 0, 0, 0, 1, NULL),
(21, NULL, 1, 1, 0, 0, 3, 0, NULL),
(22, NULL, 1, 6, 0, 0, 4, 0, NULL),
(23, NULL, 1, 1, 0, 0, 6, 0, NULL),
(24, NULL, 2, 9, 0, 0, 3, 1, NULL),
(25, NULL, 1, 9, 0, 0, 4, 1, NULL),
(26, NULL, 2, 9, 0, 0, 6, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnotifcvendedora`
--

CREATE TABLE `tbnotifcvendedora` (
  `idNotifcVendedora` int(11) NOT NULL,
  `idVendedora` int(11) DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `tipoNotificacao` int(11) DEFAULT NULL,
  `statusNotificacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbnotifcvendedora`
--

INSERT INTO `tbnotifcvendedora` (`idNotifcVendedora`, `idVendedora`, `idAnuncio`, `idCliente`, `tipoNotificacao`, `statusNotificacao`) VALUES
(1, 1, 2, 9, 2, 1),
(2, 1, 1, 9, 2, 1),
(3, 1, 2, 9, 2, 1),
(4, 1, NULL, 9, 1, 1),
(5, 3, 6, 10, 2, 1),
(6, 1, 2, 10, 2, 1),
(7, 5, 8, 10, 2, 1),
(8, 5, 8, 10, 4, 1),
(9, 1, 2, 2, 2, 1),
(10, 1, 2, 3, 2, 1),
(11, 1, 2, 5, 2, 1),
(12, 1, 2, 4, 2, 1),
(13, 1, 1, NULL, 2, 1),
(14, 1, 1, 10, 2, 1),
(15, 1, 1, 3, 2, 1),
(16, 1, 1, 4, 2, 1),
(17, 1, 7, 4, 2, 1),
(18, 1, 7, 10, 2, 0),
(19, 1, 7, 2, 2, 0),
(20, 1, 2, 2, 2, 0),
(21, 1, 7, 2, 2, 0),
(22, 2, 5, 2, 3, 0),
(23, 2, 5, 2, 3, 0),
(24, 2, 5, 2, 5, 0),
(25, 5, 8, 2, 2, 0),
(26, 5, 9, 3, 2, 0),
(27, 1, 1, 3, 2, 0),
(28, 2, 3, 3, 2, 0),
(29, 3, 6, 4, 2, 0),
(30, 5, 8, 4, 2, 0),
(31, 5, 10, 5, 2, 0),
(32, 1, 2, 5, 2, 0),
(33, 2, 4, 5, 2, 0),
(34, 2, 5, 6, 3, 0),
(35, 3, 6, 6, 2, 0),
(36, 2, 3, 6, 2, 0),
(37, 5, 8, 6, 2, 0),
(38, 1, 1, 7, 2, 0),
(39, 2, 3, 7, 2, 0),
(40, 5, 10, 7, 2, 0),
(41, 1, 7, 8, 2, 0),
(42, 5, 8, 8, 2, 0),
(43, 1, 2, 8, 2, 0),
(44, 5, 9, 8, 2, 0),
(45, 3, 6, 8, 2, 0),
(46, 1, 1, 9, 2, 0),
(47, 5, 8, 9, 2, 0),
(48, 1, 2, 9, 2, 0),
(49, 2, 3, 10, 2, 0),
(50, 1, 7, 10, 2, 0),
(51, 1, 1, 2, 2, 0),
(52, 2, 5, 2, 3, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpedidoproduto`
--

CREATE TABLE `tbpedidoproduto` (
  `idPedidoProduto` int(11) NOT NULL,
  `valorTotal` double DEFAULT NULL,
  `qtdProdutoPedido` int(11) DEFAULT NULL,
  `dataPedidoFeito` datetime DEFAULT NULL,
  `dataPedidoEntregue` date DEFAULT NULL,
  `statusPedidoProduto` int(11) DEFAULT NULL,
  `motivoCancelamento` varchar(255) NOT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpedidoproduto`
--

INSERT INTO `tbpedidoproduto` (`idPedidoProduto`, `valorTotal`, `qtdProdutoPedido`, `dataPedidoFeito`, `dataPedidoEntregue`, `statusPedidoProduto`, `motivoCancelamento`, `idAnuncio`, `idCliente`) VALUES
(1, 18, 6, '2023-12-01 12:34:07', '2023-11-28', 4, '', 2, 1),
(2, 25, 1, '2023-11-27 12:37:22', '2023-11-28', 4, '', 1, 1),
(3, 130, 2, '2023-11-27 12:48:44', '2023-11-28', 2, '', 4, 1),
(4, 10, 1, '2023-11-27 15:12:43', '2023-11-28', 2, '', 6, 4),
(5, 25, 1, '2023-11-27 15:17:09', '2023-11-28', 2, '', 1, 6),
(6, 55, 1, '2023-11-27 15:18:01', '2023-11-28', 2, '', 3, 6),
(7, 6, 1, '2023-11-27 16:15:34', '2023-11-26', 2, '', 7, 7),
(8, 9, 3, '2023-12-05 15:52:03', '2023-12-07', 4, '', 2, 9),
(9, 25, 1, '2023-12-05 15:52:22', '2023-12-08', 2, '', 1, 9),
(10, 3, 1, '2023-12-05 15:53:57', '2023-12-07', 2, '', 2, 9),
(11, 10, 1, '2023-12-06 12:11:49', '2023-12-07', 2, 'Falta de material', 6, 10),
(12, 21, 7, '2023-12-06 12:12:08', '2023-12-07', 4, '', 2, 10),
(13, 35, 1, '2023-12-06 12:12:49', '2023-12-14', 2, '', 8, 10),
(14, 9, 3, '2023-12-06 12:59:21', '2023-12-07', 4, '', 2, 2),
(15, 3, 1, '2023-12-06 13:01:40', '2023-12-07', 4, '', 2, 3),
(16, 3, 1, '2023-12-06 13:03:29', '2023-12-07', 4, '', 2, 5),
(17, 3, 1, '2023-12-06 13:04:38', '2023-12-07', 4, '', 2, 4),
(18, 25, 1, '2023-12-06 13:14:02', '2023-12-07', 1, '', 1, NULL),
(19, 50, 2, '2023-12-06 13:14:30', '2023-12-07', 4, '', 1, 10),
(20, 25, 1, '2023-12-06 13:15:26', '2023-12-07', 4, '', 1, 3),
(21, 75, 3, '2023-12-06 13:16:38', '2023-12-07', 4, '', 1, 4),
(22, 6, 1, '2023-12-06 13:18:21', '2023-12-07', 4, '', 7, 4),
(23, 6, 1, '2023-12-06 13:22:31', '2023-12-07', 4, '', 7, 10),
(24, 6, 1, '2023-12-06 13:23:28', '2023-12-07', 4, '', 7, 2),
(25, 15, 5, '2023-12-06 13:57:19', '2023-12-07', 2, '', 2, 2),
(26, 12, 2, '2023-12-06 13:58:39', '2023-12-07', 2, '', 7, 2),
(27, 35, 1, '2023-12-06 13:59:52', '2023-12-07', 2, '', 8, 2),
(28, 250, 1, '2023-12-06 14:00:44', '2023-12-07', 1, '', 9, 3),
(29, 50, 2, '2023-12-06 14:00:57', '2023-12-07', 3, '', 1, 3),
(30, 55, 1, '2023-12-06 14:01:10', '2023-12-07', 2, '', 3, 3),
(31, 10, 1, '2023-12-06 14:01:39', '2023-12-07', 1, '', 6, 4),
(32, 35, 1, '2023-12-06 14:02:04', '2023-12-07', 3, '', 8, 4),
(33, 80, 2, '2023-12-06 14:03:37', '2023-12-07', 1, '', 10, 5),
(34, 18, 6, '2023-12-06 14:03:50', '2023-12-07', 3, '', 2, 5),
(35, 130, 2, '2023-12-06 14:04:03', '2023-12-07', 1, '', 4, 5),
(36, 20, 2, '2023-12-06 14:05:32', '2023-12-07', 3, '', 6, 6),
(37, 165, 3, '2023-12-06 14:05:44', '2023-12-07', 1, '', 3, 6),
(38, 35, 1, '2023-12-06 14:05:56', '2023-12-07', 1, '', 8, 6),
(39, 25, 1, '2023-12-06 14:06:51', '2023-12-07', 3, '', 1, 7),
(40, 110, 2, '2023-12-06 14:07:01', '2023-12-07', 1, '', 3, 7),
(41, 80, 2, '2023-12-06 14:07:18', '2023-12-07', 3, '', 10, 7),
(42, 12, 2, '2023-12-06 14:07:56', '2023-12-07', 1, '', 7, 8),
(43, 35, 1, '2023-12-06 14:09:31', '2023-12-07', 1, '', 8, 8),
(44, 21, 7, '2023-12-06 14:10:13', '2023-12-07', 1, '', 2, 8),
(45, 500, 2, '2023-12-06 14:10:29', '2023-12-07', 1, '', 9, 8),
(46, 40, 4, '2023-12-06 14:10:45', '2023-12-07', 1, '', 6, 8),
(47, 25, 1, '2023-12-06 14:11:22', '2023-12-07', 1, '', 1, 9),
(48, 35, 1, '2023-12-06 14:11:31', '2023-12-07', 1, '', 8, 9),
(49, 21, 7, '2023-12-06 14:11:43', '2023-12-07', 1, '', 2, 9),
(50, 165, 3, '2023-12-06 14:12:38', '2023-12-07', 3, '', 3, 10),
(51, 12, 2, '2023-12-06 14:12:52', '2023-12-07', 2, '', 7, 10),
(52, 25.5, 1, '2023-12-07 10:41:43', '2023-12-07', 4, '', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpedidoservico`
--

CREATE TABLE `tbpedidoservico` (
  `idPedidoServico` int(11) NOT NULL,
  `valorTotal` double DEFAULT NULL,
  `statusPedidoServico` int(11) NOT NULL,
  `motivoCancelamento` varchar(255) NOT NULL,
  `dataServicoContratado` datetime DEFAULT NULL,
  `dataServicoMarcado` datetime DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpedidoservico`
--

INSERT INTO `tbpedidoservico` (`idPedidoServico`, `valorTotal`, `statusPedidoServico`, `motivoCancelamento`, `dataServicoContratado`, `dataServicoMarcado`, `idAnuncio`, `idCliente`) VALUES
(1, 35, 2, '', '2023-11-27 12:56:38', '2023-12-07 11:00:00', 5, 1),
(2, 35, 2, '', '2023-12-06 13:58:54', '2023-12-07 09:58:00', 5, 2),
(3, 35, 3, '', '2023-12-06 13:59:27', '2023-12-07 09:58:00', 5, 2),
(4, 35, 1, '', '2023-12-06 14:05:21', '2023-12-07 10:05:00', 5, 6),
(5, 35, 1, '', '2023-12-07 10:43:17', '2023-12-08 10:42:00', 5, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpreferencias`
--

CREATE TABLE `tbpreferencias` (
  `idPreferencias` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpreferencias`
--

INSERT INTO `tbpreferencias` (`idPreferencias`, `idCliente`, `idCategoria`) VALUES
(1, 1, 3),
(2, 1, 6),
(3, 2, 2),
(4, 2, 3),
(5, 2, 6),
(6, 3, 4),
(7, 3, 5),
(8, 3, 6),
(9, 4, 1),
(10, 4, 5),
(11, 5, 1),
(12, 5, 3),
(13, 6, 1),
(14, 6, 5),
(15, 7, 3),
(16, 7, 5),
(17, 8, 2),
(18, 8, 4),
(19, 8, 5),
(20, 9, 3),
(21, 9, 4),
(22, 9, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbsaidaproduto`
--

CREATE TABLE `tbsaidaproduto` (
  `idSaidaProduto` int(11) NOT NULL,
  `dataSaidaProduto` datetime DEFAULT NULL,
  `qtdSaidaProduto` int(11) DEFAULT NULL,
  `idAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbsaidaproduto`
--

INSERT INTO `tbsaidaproduto` (`idSaidaProduto`, `dataSaidaProduto`, `qtdSaidaProduto`, `idAnuncio`) VALUES
(1, '2023-11-27 12:37:22', 1, 1),
(2, '2023-12-06 13:14:30', 2, 1),
(3, '2023-12-06 13:15:26', 1, 1),
(4, '2023-12-06 13:16:38', 3, 1),
(5, '2023-12-01 12:34:07', 6, 2),
(6, '2023-12-05 15:52:03', 3, 2),
(7, '2023-12-06 12:12:08', 7, 2),
(8, '2023-12-06 12:59:21', 3, 2),
(9, '2023-12-06 13:01:40', 1, 2),
(10, '2023-12-06 13:03:29', 1, 2),
(11, '2023-12-06 13:04:38', 1, 2),
(12, '2023-12-06 13:18:21', 1, 7),
(13, '2023-12-06 13:22:31', 1, 7),
(14, '2023-12-06 13:23:28', 1, 7),
(15, '2023-12-07 00:21:13', 2, 8),
(16, '2023-12-07 00:21:29', 5, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbseguidor`
--

CREATE TABLE `tbseguidor` (
  `idSeguidor` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idVendedora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbseguidor`
--

INSERT INTO `tbseguidor` (`idSeguidor`, `idCliente`, `idVendedora`) VALUES
(1, 1, 1),
(2, 6, 2),
(3, 9, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbsubcategoria`
--

CREATE TABLE `tbsubcategoria` (
  `idSubCategoria` int(11) NOT NULL,
  `nomeSubCategoria` varchar(50) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbsubcategoria`
--

INSERT INTO `tbsubcategoria` (`idSubCategoria`, `nomeSubCategoria`, `idCategoria`) VALUES
(1, 'Doces', 3),
(2, 'Bolos', 3),
(3, 'Chocolates', 3),
(4, 'Camisas', 6),
(5, 'Sapatos', 6),
(6, 'Vestidos', 6),
(7, 'Blusas', 6),
(8, 'Calças', 6),
(9, 'Jeans', 6),
(10, 'Chapéus', 6),
(11, 'Infantíl', 6),
(12, 'Costura', 6),
(13, 'Bolsa Feminina', 6),
(14, 'Salgados', 3),
(15, 'Tortas', 3),
(16, 'Ficção', 5),
(17, 'Não Ficção', 5),
(18, 'Poesia', 5),
(19, 'Livros Infantis', 5),
(20, 'Anéis', 4),
(21, 'Colares', 4),
(22, 'Pulseiras', 4),
(23, 'Brincos', 4),
(24, 'Maquiagem', 2),
(25, 'Cuidados com a Pele', 2),
(26, 'Perfumes', 2),
(27, 'Produtos para Cabelo', 2),
(28, 'Fotografia', 1),
(29, 'Pinturas e Quadros', 1),
(30, 'Esculturas', 1),
(31, 'Eletrônicos', 7),
(32, 'Gadgets', 7),
(33, 'Acessórios Tecnológicos', 7),
(34, 'Jogos e Consoles', 7),
(35, 'Smartwatches', 7),
(36, 'Móveis', 8),
(37, 'Decoração de Parede', 8),
(38, 'Iluminação', 8),
(39, 'Equipamentos de Exercício', 9),
(40, 'Suplementos Nutricionais', 9),
(41, 'Acessórios para Esportes', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvendedora`
--

CREATE TABLE `tbvendedora` (
  `idVendedora` int(11) NOT NULL,
  `nomeVendedora` varchar(100) DEFAULT NULL,
  `emailVendedora` varchar(100) DEFAULT NULL,
  `senhaVendedora` varchar(256) DEFAULT NULL,
  `fotoVendedora` varchar(100) DEFAULT NULL,
  `statusVendedora` int(11) DEFAULT NULL,
  `dtNascVendedora` date DEFAULT NULL,
  `nomeNegocioVendedora` varchar(100) DEFAULT NULL,
  `nomeUsuarioNegocioVendedora` varchar(50) DEFAULT NULL,
  `fotoNegocioVendedora` varchar(100) DEFAULT NULL,
  `bioNegocioVendedora` varchar(255) NOT NULL,
  `logNegocioVendedora` varchar(100) DEFAULT NULL,
  `cidadeNegocioVendedora` varchar(100) DEFAULT NULL,
  `estadoNegocioVendedora` char(2) DEFAULT NULL,
  `bairroNegocioVendedora` varchar(100) DEFAULT NULL,
  `numNegocioVendedora` int(11) DEFAULT NULL,
  `compNegocioVendedora` varchar(100) DEFAULT NULL,
  `cepNegocioVendedora` char(8) DEFAULT NULL,
  `cnpjNegocioVendedora` char(14) DEFAULT NULL,
  `nivelNegocioVendedora` int(11) DEFAULT NULL,
  `telefoneNegocioVendedora` varchar(11) NOT NULL,
  `chavePixVendedora` varchar(255) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `dataCadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbvendedora`
--

INSERT INTO `tbvendedora` (`idVendedora`, `nomeVendedora`, `emailVendedora`, `senhaVendedora`, `fotoVendedora`, `statusVendedora`, `dtNascVendedora`, `nomeNegocioVendedora`, `nomeUsuarioNegocioVendedora`, `fotoNegocioVendedora`, `bioNegocioVendedora`, `logNegocioVendedora`, `cidadeNegocioVendedora`, `estadoNegocioVendedora`, `bairroNegocioVendedora`, `numNegocioVendedora`, `compNegocioVendedora`, `cepNegocioVendedora`, `cnpjNegocioVendedora`, `nivelNegocioVendedora`, `telefoneNegocioVendedora`, `chavePixVendedora`, `idCategoria`, `dataCadastro`) VALUES
(1, 'Olivia Farias de Souza', 'OliFarias@gmail.com', '$2y$10$n33S8uc1zDvwhAz/ch8f4O/uDi/wvp9lLIVLrWka1DBtkQ1B4ayHa', 'assets/media/users/donas/1.png', 1, '1985-06-12', 'Açúcar e Canela', 'acucarecanela', 'assets/media/users/negocios/1.png', '', 'Travessa Seringais', 'São Paulo', 'SP', 'Vila Princesa Isabel', 35, '', '08410010', '22222222222222', 1, '11971626876', '43192502819', 3, '2023-11-27'),
(2, 'Priscilla Menesez Paiva', 'Priscilla@gmail.com', '$2y$10$Z3eam.6NPdowCW2KnTkNjOCaJvTAalS.FYsvb1ar730P1/MxxAKYm', 'assets/media/users/donas/2.png', 1, '1999-10-28', 'Grife do Coração', 'grifedocoracao', 'assets/media/users/negocios/2.png', '', 'Travessa Seringais', 'São Paulo', 'SP', 'Vila Princesa Isabel', 222, '', '08410010', '33333333333333', 1, '11986636223', '43192502819', 6, '2023-11-27'),
(3, 'Francisca Lucena', 'francisca@gmail.com', '$2y$10$cbOXPZQ0V6//7kvsijBVmOt9/ncBG/kXm8XVxKkJWtbRCAGvNOqOm', 'assets/media/users/donas/3.png', 1, '1983-07-31', 'Cantinho Artesanal', 'cantoArtesanal', 'assets/media/users/negocios/3.png', '', 'Rua Amélia Duarte', 'São Paulo', 'SP', 'Vila Princesa Isabel', 35, '', '08410420', '44545354665655', 1, '11984654754', '43192502819', 1, '2023-11-27'),
(4, 'Rosangela Freire', 'ro@gmail.com', '$2y$10$h0rsieGSUtk8Mzi3Dn6mC.ZgBPu8airw39yU7lSIEBeH8/eRb6VB2', 'assets/media/users/donas/4.png', 1, '2000-01-01', 'Ro Trufas', 'RoTrufas', 'assets/media/users/negocios/4.png', '', 'Rua Doutor Orlando de Paiva Martins', 'São Paulo', 'SP', 'Vila Princesa Isabel', 21, '', '08410330', '62823257011801', 0, '11999999999', 'ro@gmail.com', 3, '2023-11-27'),
(5, 'Marcela', 'marcela@gmail.com', '$2y$10$/lerNTbQK3sV46j66ma1nup84VO08zHWHDFZ7axIdP5oYheEGR9m6', 'assets/media/users/donas/5.png', 1, '1998-02-19', 'Montini', 'montini', 'assets/media/users/negocios/5.png', '', 'Rua Jaime Ovale', 'São Paulo', 'SP', 'Jardim Pérola I', 290, '', '08474390', '16418317000182', 1, '11941185028', '+11941185028', 4, '2023-12-05');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  ADD PRIMARY KEY (`idAnuncio`),
  ADD KEY `idVendedora` (`idVendedora`);

--
-- Índices de tabela `tbanunciosubcategoria`
--
ALTER TABLE `tbanunciosubcategoria`
  ADD PRIMARY KEY (`idAnuncioSubCategoria`),
  ADD KEY `idAnuncio` (`idAnuncio`),
  ADD KEY `idSubCategoria` (`idSubCategoria`);

--
-- Índices de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD PRIMARY KEY (`idAvaliacao`),
  ADD KEY `idAnuncio` (`idAnuncio`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idVendedora` (`idVendedora`);

--
-- Índices de tabela `tbentradaproduto`
--
ALTER TABLE `tbentradaproduto`
  ADD PRIMARY KEY (`idEntradaProduto`),
  ADD KEY `idAnuncio` (`idAnuncio`);

--
-- Índices de tabela `tbimagemanuncio`
--
ALTER TABLE `tbimagemanuncio`
  ADD PRIMARY KEY (`idImagemAnuncio`),
  ADD KEY `idAnuncio` (`idAnuncio`);

--
-- Índices de tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD PRIMARY KEY (`idMensagem`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idVendedora` (`idVendedora`);

--
-- Índices de tabela `tbnotifccliente`
--
ALTER TABLE `tbnotifccliente`
  ADD PRIMARY KEY (`idNotifcCliente`),
  ADD KEY `idDenuncia` (`idDenuncia`),
  ADD KEY `idAnuncio` (`idAnuncio`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idPedidoProduto` (`idPedidoProduto`),
  ADD KEY `idPedidoServico` (`idPedidoServico`);

--
-- Índices de tabela `tbnotifcvendedora`
--
ALTER TABLE `tbnotifcvendedora`
  ADD PRIMARY KEY (`idNotifcVendedora`),
  ADD KEY `idVendedora` (`idVendedora`),
  ADD KEY `idAnuncio` (`idAnuncio`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbpedidoproduto`
--
ALTER TABLE `tbpedidoproduto`
  ADD PRIMARY KEY (`idPedidoProduto`),
  ADD KEY `idAnuncio` (`idAnuncio`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbpedidoservico`
--
ALTER TABLE `tbpedidoservico`
  ADD PRIMARY KEY (`idPedidoServico`),
  ADD KEY `idAnuncio` (`idAnuncio`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbpreferencias`
--
ALTER TABLE `tbpreferencias`
  ADD PRIMARY KEY (`idPreferencias`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índices de tabela `tbsaidaproduto`
--
ALTER TABLE `tbsaidaproduto`
  ADD PRIMARY KEY (`idSaidaProduto`),
  ADD KEY `idAnuncio` (`idAnuncio`);

--
-- Índices de tabela `tbseguidor`
--
ALTER TABLE `tbseguidor`
  ADD PRIMARY KEY (`idSeguidor`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idVendedora` (`idVendedora`);

--
-- Índices de tabela `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  ADD PRIMARY KEY (`idSubCategoria`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índices de tabela `tbvendedora`
--
ALTER TABLE `tbvendedora`
  ADD PRIMARY KEY (`idVendedora`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbanuncio`
--
ALTER TABLE `tbanuncio`
  MODIFY `idAnuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbanunciosubcategoria`
--
ALTER TABLE `tbanunciosubcategoria`
  MODIFY `idAnuncioSubCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  MODIFY `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbentradaproduto`
--
ALTER TABLE `tbentradaproduto`
  MODIFY `idEntradaProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbimagemanuncio`
--
ALTER TABLE `tbimagemanuncio`
  MODIFY `idImagemAnuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  MODIFY `idMensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbnotifccliente`
--
ALTER TABLE `tbnotifccliente`
  MODIFY `idNotifcCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tbnotifcvendedora`
--
ALTER TABLE `tbnotifcvendedora`
  MODIFY `idNotifcVendedora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `tbpedidoproduto`
--
ALTER TABLE `tbpedidoproduto`
  MODIFY `idPedidoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `tbpedidoservico`
--
ALTER TABLE `tbpedidoservico`
  MODIFY `idPedidoServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbpreferencias`
--
ALTER TABLE `tbpreferencias`
  MODIFY `idPreferencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tbsaidaproduto`
--
ALTER TABLE `tbsaidaproduto`
  MODIFY `idSaidaProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbseguidor`
--
ALTER TABLE `tbseguidor`
  MODIFY `idSeguidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  MODIFY `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `tbvendedora`
--
ALTER TABLE `tbvendedora`
  MODIFY `idVendedora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbanuncio`
--
ALTER TABLE `tbanuncio`
  ADD CONSTRAINT `tbanuncio_ibfk_1` FOREIGN KEY (`idVendedora`) REFERENCES `tbvendedora` (`idVendedora`);

--
-- Restrições para tabelas `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD CONSTRAINT `tbavaliacao_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`),
  ADD CONSTRAINT `tbavaliacao_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Restrições para tabelas `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD CONSTRAINT `tbdenuncia_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `tbdenuncia_ibfk_2` FOREIGN KEY (`idVendedora`) REFERENCES `tbvendedora` (`idVendedora`);

--
-- Restrições para tabelas `tbentradaproduto`
--
ALTER TABLE `tbentradaproduto`
  ADD CONSTRAINT `tbentradaproduto_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`);

--
-- Restrições para tabelas `tbimagemanuncio`
--
ALTER TABLE `tbimagemanuncio`
  ADD CONSTRAINT `tbimagemanuncio_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`);

--
-- Restrições para tabelas `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD CONSTRAINT `tbmensagem_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `tbmensagem_ibfk_2` FOREIGN KEY (`idVendedora`) REFERENCES `tbvendedora` (`idVendedora`);

--
-- Restrições para tabelas `tbnotifccliente`
--
ALTER TABLE `tbnotifccliente`
  ADD CONSTRAINT `tbnotifccliente_ibfk_1` FOREIGN KEY (`idDenuncia`) REFERENCES `tbdenuncia` (`idDenuncia`),
  ADD CONSTRAINT `tbnotifccliente_ibfk_2` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`),
  ADD CONSTRAINT `tbnotifccliente_ibfk_3` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Restrições para tabelas `tbnotifcvendedora`
--
ALTER TABLE `tbnotifcvendedora`
  ADD CONSTRAINT `tbnotifcvendedora_ibfk_1` FOREIGN KEY (`idVendedora`) REFERENCES `tbvendedora` (`idVendedora`),
  ADD CONSTRAINT `tbnotifcvendedora_ibfk_2` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`),
  ADD CONSTRAINT `tbnotifcvendedora_ibfk_3` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Restrições para tabelas `tbpedidoproduto`
--
ALTER TABLE `tbpedidoproduto`
  ADD CONSTRAINT `tbpedidoproduto_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`),
  ADD CONSTRAINT `tbpedidoproduto_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Restrições para tabelas `tbpedidoservico`
--
ALTER TABLE `tbpedidoservico`
  ADD CONSTRAINT `tbpedidoservico_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`),
  ADD CONSTRAINT `tbpedidoservico_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Restrições para tabelas `tbpreferencias`
--
ALTER TABLE `tbpreferencias`
  ADD CONSTRAINT `tbpreferencias_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `tbpreferencias_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);

--
-- Restrições para tabelas `tbsaidaproduto`
--
ALTER TABLE `tbsaidaproduto`
  ADD CONSTRAINT `tbsaidaproduto_ibfk_1` FOREIGN KEY (`idAnuncio`) REFERENCES `tbanuncio` (`idAnuncio`);

--
-- Restrições para tabelas `tbseguidor`
--
ALTER TABLE `tbseguidor`
  ADD CONSTRAINT `tbseguidor_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `tbseguidor_ibfk_2` FOREIGN KEY (`idVendedora`) REFERENCES `tbvendedora` (`idVendedora`);

--
-- Restrições para tabelas `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  ADD CONSTRAINT `tbsubcategoria_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);

--
-- Restrições para tabelas `tbvendedora`
--
ALTER TABLE `tbvendedora`
  ADD CONSTRAINT `tbvendedora_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
