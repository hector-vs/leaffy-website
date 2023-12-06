-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Dez-2023 às 00:27
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `leaffy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_desc` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `post_text` text COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `post_nome`, `post_desc`, `post_text`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Titulo do post', 'Evite acidentes. Faça de propósito.. Agora, mais do que nunca, é a hora..', 'Evite acidentes. Faça de propósito.. Agora, mais do que nunca, é a hora.. Os últimos serão os primeiros e os do meio sempre serão os do meio.. Se barba fosse respeito, bode não tinha chifre.. Na vida tudo é passageiro, menos o motorista e o cobrador….', 'post-primeiro', '2023-12-06 00:23:04', '2023-12-06 00:23:04'),
(8, 'Luca poe', 'Post sobre Luca Poe. Olá, Luca Poe. Gratidão.', 'Luca Pucca Suca Loe', 'poe-poe', '2023-12-06 00:23:28', '2023-12-06 00:23:28'),
(7, 'Socorro', '', 'Como cuidar do seu macaco', 'help-me', '2023-11-24 00:00:14', '2023-11-24 00:00:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
