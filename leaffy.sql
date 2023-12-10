-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/12/2023 às 20:28
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `leaffy81_leaffy`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `admins`
--

INSERT INTO `admins` (`id`, `email`, `senha`) VALUES
(1, 'leaffyadmin@gmail.com', 'LEAFFYtcc2023!'),
(2, 'admin@teste', '123321');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_nome` varchar(255) NOT NULL,
  `post_desc` varchar(500) NOT NULL,
  `titulo1` varchar(255) NOT NULL,
  `texto1` text NOT NULL,
  `imagem1` text NOT NULL,
  `titulo2` varchar(255) NOT NULL,
  `texto2` text NOT NULL,
  `imagem2` text NOT NULL,
  `titulo3` varchar(255) NOT NULL,
  `texto3` text NOT NULL,
  `imagem3` text NOT NULL,
  `titulo4` varchar(255) NOT NULL,
  `texto4` text NOT NULL,
  `imagem4` text NOT NULL,
  `titulo5` varchar(255) NOT NULL,
  `texto5` text NOT NULL,
  `imagem5` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `post_nome`, `post_desc`, `titulo1`, `texto1`, `imagem1`, `titulo2`, `texto2`, `imagem2`, `titulo3`, `texto3`, `imagem3`, `titulo4`, `texto4`, `imagem4`, `titulo5`, `texto5`, `imagem5`, `slug`, `created_at`, `updated_at`) VALUES
(11, 'A Importância Vital da Educação Ambiental', 'Construindo um Futuro Sustentável Através do Conhecimento e Comprometimento', 'A Necessidade Urgente de Educação Ambiental', 'Em um mundo cada vez mais interconectado e impactado por questões ambientais, a importância da educação ambiental torna-se crucial. Este campo de estudo transcende a mera transmissão de conhecimento, buscando conscientizar as pessoas sobre a interdependência entre seres humanos e o ambiente que os cerca. A educação ambiental não é apenas uma disciplina acadêmica, mas uma ferramenta poderosa para inspirar ações positivas em prol do nosso planeta.', '', '', 'Ao proporcionar conhecimentos sólidos sobre as complexidades do meio ambiente, a educação ambiental capacita indivíduos a compreenderem as consequências de suas ações. Desde as mudanças climáticas até a perda de biodiversidade, os participantes são equipados com as ferramentas necessárias para tomar decisões informadas e promover mudanças positivas em suas comunidades.', 'https://static.todamateria.com.br/upload/ed/uc/educaa_a_o_ambiental_1.jpg', 'Formando Cidadãos Ambientalmente Conscientes', 'A educação ambiental não se limita às salas de aula; ela estende-se às práticas cotidianas. Ao integrar princípios de sustentabilidade em diversos aspectos da vida, as pessoas desenvolvem uma consciência mais profunda sobre a influência de suas escolhas no meio ambiente. Isso se reflete em comportamentos mais responsáveis, como a redução do consumo de recursos naturais, a reciclagem e a adoção de estilos de vida mais ecoamigáveis.', '', '', 'A verdadeira importância da educação ambiental é percebida quando seus princípios são disseminados globalmente, catalisando ações coletivas para enfrentar desafios ambientais prementes. Ao compreender a interconexão de ecossistemas e as ramificações de atividades humanas, as comunidades podem unir esforços em busca de soluções inovadoras. A educação ambiental não apenas preserva o planeta para as gerações futuras, mas também fortalece a capacidade da sociedade de enfrentar os desafios ambientais de maneira colaborativa e sustentável.', '', '', '', '', 'educacao-ambiental', '2023-12-09 01:01:35', '0000-00-00 00:00:00'),
(10, 'Dicas Essenciais para o Cultivo de Plantas em Casa', 'Desvendando os Segredos da Jardinagem para Iniciantes e Entusiastas', 'Preparando o Solo para o Sucesso', 'Antes de começar sua jornada no mundo encantador da jardinagem, é fundamental preparar o solo de maneira adequada. Certifique-se de escolher um solo rico em nutrientes e com boa drenagem. Adicionar composto orgânico é uma prática valiosa, enriquecendo o solo e proporcionando um ambiente propício para o crescimento saudável das plantas.', 'https://img.freepik.com/fotos-premium/imagem-aproximada-de-uma-mulher-cultivando-uma-planta-no-jardim_9563-19898.jpg', '', 'Investir em ferramentas de qualidade também é crucial. Um solo bem preparado, combinado com ferramentas adequadas, estabelece as bases para um cultivo bem-sucedido. Pás, rastelos e regadores são essenciais para criar um ambiente propício para o florescimento de suas plantas.', '', '', 'A escolha das plantas certas para o seu espaço é um passo vital. Considere fatores como a luminosidade disponível, a umidade e a temperatura da sua região. Opte por plantas que se adaptem facilmente ao ambiente em que serão cultivadas, proporcionando não apenas um jardim bonito, mas também um ambiente mais sustentável e fácil de cuidar.', '', 'A Chave para Plantas Felizes', 'O sucesso na jardinagem requer comprometimento e atenção regular. Estabeleça uma rotina de cuidados diários, incluindo a rega adequada, controle de pragas e a remoção de folhas mortas. Conhecer as necessidades específicas de cada planta em relação à água e nutrientes garantirá um crescimento saudável e flores exuberantes.', '', '', 'Além dos cuidados básicos, reserve um tempo para observar suas plantas regularmente. Esteja atento a sinais de doenças, insetos indesejados ou quaisquer mudanças em sua aparência. A detecção precoce de problemas permite uma intervenção eficaz, mantendo seu jardim vibrante e livre de complicações.\r\n\r\nCultivar plantas pode ser uma experiência gratificante, proporcionando não apenas beleza estética, mas também uma conexão terapêutica com a natureza. Ao seguir essas dicas fundamentais, você estará no caminho certo para criar um jardim exuberante e saudável, transformando seu espaço em um refúgio verde cheio de vida e harmonia.\r\n\r\n\r\n\r\n\r\n\r\n', '', 'post-planta', '2023-12-07 21:30:17', '2023-12-07 21:30:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
