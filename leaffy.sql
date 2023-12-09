-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Dez-2023 às 20:19
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
  `titulo1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `texto1` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagem1` text COLLATE utf8mb4_general_ci NOT NULL,
  `titulo2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `texto2` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagem2` text COLLATE utf8mb4_general_ci NOT NULL,
  `titulo3` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `texto3` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagem3` text COLLATE utf8mb4_general_ci NOT NULL,
  `titulo4` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `texto4` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagem4` text COLLATE utf8mb4_general_ci NOT NULL,
  `titulo5` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `texto5` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagem5` text COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `post_nome`, `post_desc`, `titulo1`, `texto1`, `imagem1`, `titulo2`, `texto2`, `imagem2`, `titulo3`, `texto3`, `imagem3`, `titulo4`, `texto4`, `imagem4`, `titulo5`, `texto5`, `imagem5`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Titulo do post', 'Evite acidentes. Faça de propósito.. Agora, mais do que nunca, é a hora..', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'post-primeiro', '2023-12-06 00:23:04', '2023-12-06 00:23:04'),
(10, 'Dicas Essenciais para o Cultivo de Plantas em Casa', 'Desvendando os Segredos da Jardinagem para Iniciantes e Entusiastas', 'Preparando o Solo para o Sucesso', 'Antes de começar sua jornada no mundo encantador da jardinagem, é fundamental preparar o solo de maneira adequada. Certifique-se de escolher um solo rico em nutrientes e com boa drenagem. Adicionar composto orgânico é uma prática valiosa, enriquecendo o solo e proporcionando um ambiente propício para o crescimento saudável das plantas.', 'https://img.freepik.com/fotos-premium/imagem-aproximada-de-uma-mulher-cultivando-uma-planta-no-jardim_9563-19898.jpg', '', 'Investir em ferramentas de qualidade também é crucial. Um solo bem preparado, combinado com ferramentas adequadas, estabelece as bases para um cultivo bem-sucedido. Pás, rastelos e regadores são essenciais para criar um ambiente propício para o florescimento de suas plantas.', '', '', 'A escolha das plantas certas para o seu espaço é um passo vital. Considere fatores como a luminosidade disponível, a umidade e a temperatura da sua região. Opte por plantas que se adaptem facilmente ao ambiente em que serão cultivadas, proporcionando não apenas um jardim bonito, mas também um ambiente mais sustentável e fácil de cuidar.', '', 'A Chave para Plantas Felizes', 'O sucesso na jardinagem requer comprometimento e atenção regular. Estabeleça uma rotina de cuidados diários, incluindo a rega adequada, controle de pragas e a remoção de folhas mortas. Conhecer as necessidades específicas de cada planta em relação à água e nutrientes garantirá um crescimento saudável e flores exuberantes.', '', '', 'Além dos cuidados básicos, reserve um tempo para observar suas plantas regularmente. Esteja atento a sinais de doenças, insetos indesejados ou quaisquer mudanças em sua aparência. A detecção precoce de problemas permite uma intervenção eficaz, mantendo seu jardim vibrante e livre de complicações.\r\n\r\nCultivar plantas pode ser uma experiência gratificante, proporcionando não apenas beleza estética, mas também uma conexão terapêutica com a natureza. Ao seguir essas dicas fundamentais, você estará no caminho certo para criar um jardim exuberante e saudável, transformando seu espaço em um refúgio verde cheio de vida e harmonia.\r\n\r\n\r\n\r\n\r\n\r\n', '', 'post-planta', '2023-12-07 21:30:17', '2023-12-07 21:30:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
