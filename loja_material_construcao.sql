-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14-Jun-2023 às 22:52
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
-- Banco de dados: `loja_material_construcao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `imagem`, `telefone`, `email`, `updated_at`, `created_at`) VALUES
(3, 'Sodimac', 'https://cuponomia-a.akamaihd.net/img/stores/original/sodimac-637281857078626529.png', '14997988764', 'faleconosco@sodimac.com.br', '2023-06-07 23:55:08', '2023-06-07 23:55:08'),
(4, 'Bazar da Construção', 'https://media.licdn.com/dms/image/C4E0BAQEVg5D4ha53jg/company-logo_200_200/0/1611661854011?e=2147483647&v=beta&t=WIJoshL_tWyq5zjqULIyfigy30htYtOQFBHCSB-smrw', '(14) 3236-2424', 'racontab@terra.com.br', '2023-06-14 20:04:59', '2023-06-14 20:04:59'),
(5, 'Beto Materiais para Construção', 'https://castelo.betomateriais.com.br/img/beto.webp', '(14) 99129-0830', 'castelo@betomateriais.com.br', '2023-06-14 20:31:11', '2023-06-14 20:31:11'),
(7, 'Irmãos Coelho Acabamentos', 'https://irmaoscoelhoacabamentos.com.br/temas/default/img/logo/logo.png', '(28) 2102-9090', 'ecommerce@ircoelho.com.br', '2023-06-14 20:33:02', '2023-06-14 20:32:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nota` char(1) NOT NULL,
  `mensagem` varchar(5000) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `nome`, `nota`, `mensagem`, `updated_at`, `created_at`) VALUES
(2, 'Yuta', '5', 'materiais muito bons', '2023-06-13 20:32:46', '2023-06-13 20:32:46'),
(3, 'Jose', '4', 'Muito bons os materiais porém demora para entregar', '2023-06-14 20:02:48', '2023-06-14 20:02:48'),
(5, 'Gustavo', '4', 'Bom', '2023-06-14 20:03:14', '2023-06-14 20:03:14'),
(6, 'Rafael', '2', 'Ruim', '2023-06-14 20:03:30', '2023-06-14 20:03:30'),
(7, 'Antonio', '3', 'Muito bom a loja, irei recomendar', '2023-06-14 20:03:51', '2023-06-14 20:03:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `mensagem` varchar(5000) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `email`, `telefone`, `mensagem`, `updated_at`, `created_at`) VALUES
(5, 'yuta@gmail.com', '14998564782', 'Gostaria de entrar em contato. Teve um erro no produto', '2023-06-14 20:37:58', '2023-06-14 20:37:58'),
(6, 'rafa@hotmail.com', '1433268897', 'Quero que seja feito um reembolso da minha última compra', '2023-06-14 20:38:33', '2023-06-14 20:38:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `imagem1` varchar(1000) NOT NULL,
  `imagem2` varchar(1000) NOT NULL,
  `imagem3` varchar(1000) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `marca`, `preco`, `estoque`, `descricao`, `imagem1`, `imagem2`, `imagem3`, `updated_at`, `created_at`) VALUES
(1, 'Martelo', 'Wall', '20.00', 200, 'O Martelo de Unha com Cabo de Madeira da Tramontina tem 27mm pode ser utilizado para pregar ou remover pregos e componentes de madeira.   Tem dimensão 3,3cm de altura, 12cm de largura e 33,5cm de comprimento.   Fundada em 1911, a Tramontina é reconhecida como referência de qualidade em mais de 120 países. A marca se apoia na inovação, no design e na tecnologia, com produtos que vão da cozinha, como utensílios domésticos, à garagem e caixa de ferramentas, como ferramentas para jardinagem e ferramentas manuais de uso profissional e hobby. São produtos de alta qualidade e durabilidade, com designs inovadores e funcionais.', 'https://global.cdn.magazord.com.br/comercialquevedo/img/2021/09/produto/1567/martelo.jpg?ims=fit-in/635x865/filters:fill(white)', 'https://global.cdn.magazord.com.br/comercialquevedo/img/2021/09/produto/1565/martelo2.jpg?ims=fit-in/635x865/filters:fill(white)', 'https://global.cdn.magazord.com.br/comercialquevedo/img/2021/09/produto/1566/martelo1.jpg?ims=fit-in/635x865/filters:fill(white)', '2023-06-14 20:17:34', '2023-06-08 00:47:05'),
(2, 'Parafusadeira', 'Dewalt', '300.00', 10, 'Parafusadeira muito boa', 'https://static.ferramentaskennedy.com.br/storage/1000/furadeira-e-parafusadeira-bateria-1-2-dcd796d2-dewalt-127vfpiug.jpg', 'https://static.ferramentaskennedy.com.br/storage/1000/furadeira-e-parafusadeira-bateria-1-2-dcd796d2-dewalt-127v_5WeuR4.jpg', 'https://static.ferramentaskennedy.com.br/storage/1000/furadeira-e-parafusadeira-bateria-1-2-dcd796d2-dewalt-127v_2iIyw3.jpg', '2023-06-11 19:53:30', '2023-06-11 19:53:30'),
(3, 'Kit Ferramentas', 'Metropac', '34.99', 200, 'Contem vários produtos', 'https://cec-a.akamaihd.net/img-prod/images/large/kit-de-ferramentas-com-14-pecas-azul-e-preto-metropac-1386028-foto-20210831100935294_270033_A.png', 'https://cec-a.akamaihd.net/img-prod/images/large/kit-de-ferramentas-com-14-pecas-azul-e-preto-metropac-1386028-foto-20210831100937119_270033_B.png', 'https://cec-a.akamaihd.net/img-prod/images/large/kit-de-ferramentas-com-14-pecas-azul-e-preto-metropac-1386028-foto-20210831100939428_270033_C.png', '2023-06-12 03:04:18', '2023-06-12 03:04:18'),
(4, 'Alicate desencapeador de fios', 'Stamaco', '218.99', 100, 'Ferramenta precisa e útil', 'https://cec-a.akamaihd.net/img-prod/images/large/alicate-desencapador-de-fios-pro-amarelo-e-preto-stamaco-1177072-foto-20180802160922863_456640_A.png', 'https://cec-a.akamaihd.net/img-prod/images/large/alicate-desencapador-de-fios-pro-amarelo-e-preto-stamaco-1177072-foto-20180802160923783_456640_B.png', 'https://cec-a.akamaihd.net/img-prod/images/large/alicate-desencapador-de-fios-pro-amarelo-e-preto-stamaco-1177072-foto-20180802160924657_456640_C.png', '2023-06-13 20:46:44', '2023-06-13 20:46:44'),
(6, 'Inversora de Solda Twi 180 Bivolt Laranja', 'Terra', '669.99', 10, 'A Inversora de Solda Twi 180 Bivolt Laranja da Terra Equipamentos é ideal para soldar todos os metais, desde aço ligado e não ligado, aço inoxidável e ferro fundido. Oferece ótima estabilidade de arco com eletrodo revestido.  A Terra Equipamentos foi fundada no ano de 2011, produzindo máquinas e ferramentas de excelente qualidade. Possui uma linha de produtos diferenciados que oferece soluções em equipamentos para campo, jardim, elevação e solda.', 'https://cec-a.akamaihd.net/img-prod/images/large/inversora-de-solda-twi-180-bivolt-laranja-terra-1395806-foto-20230224193406333_111621_A.png', 'https://cec-a.akamaihd.net/img-prod/images/original/inversora-de-solda-twi-180-bivolt-laranja-terra-1395806-foto-20230224193407145_111621_B.png', 'https://cec-a.akamaihd.net/img-prod/images/original/inversora-de-solda-twi-180-bivolt-laranja-terra-1395806-foto-20230224193408208_111621_C.png', '2023-06-14 20:21:42', '2023-06-14 20:21:42'),
(7, 'Conjunto Grelha Retangular 20x100cm Alumínio', 'Costa Navaro', '408.99', 100, 'O Conjunto Grelha Retangular 20x100cm Alumínio da Costa Navarro é composto por grelha e porta-grelha, no acabamento escovado, ele é indicado para captação de águas pluviais. Esse modelo possui alta qualidade e durabilidade, além de ser muito fácil de limpar, garantindo a beleza do item por um longo período.   No mercado há 20 anos a Costa do Navarro tornou-se referência no mercado e conquistou credibilidade como fornecedora de soluções fabricando uma diversificada linha de produtos como grelhas, portas-grelhas, ralos, tampas, letras e algarismos residenciais, telhas de suporte de antenas e outros produtos em alumínio fundido, com elevado padrão de qualidade, nos acabamentos martelado, polido, escovado, cromado e coloridos com pintura eletrostática, cuidadosamente produzidos por uma equipe treinada e qualificada. Hoje é líder no segmento em que atua e é sinônimo de qualidade e confiabilidade em produtos para escoamento de água.', 'https://cec-a.akamaihd.net/img-prod/images/large/conjunto-grelha-retangular-20x100cm-aluminio-costa-navarro-1045931-foto-20191113181228311_457825_A.png', 'https://cec-a.akamaihd.net/img-prod/images/original/conjunto-grelha-retangular-20x100cm-aluminio-costa-navarro-1045931-foto-e2ec5472-4d00-4cc5-8c13-b87fdb6e0f0d.png', 'https://cec-a.akamaihd.net/img-prod/images/original/conjunto-grelha-retangular-20x100cm-aluminio-costa-navarro-1045931-foto-e2ec5472-4d00-4cc5-8c13-b87fdb6e0f0d.png', '2023-06-14 20:24:37', '2023-06-14 20:24:37'),
(8, 'Chuveiro Redondo sem Desviador R150 Eden Cromado', 'Docol', '259.90', 200, 'O Chuveiro Redondo sem Desviador Eden R150 Cromado da linha DocolEden é perfeito para um banho relaxante, com alta pressão e tecnologia Smartshower®, a água sai do chuveiro com muito mais força, tornando o banho mais confortável, mantendo a mesma intensidade de água durante todo o banho. O chuveiro Eden oferece maior durabilidade e garantia toda vida, visto que todos os produtos da nossa marca passam por banhos de croma, que garantem 40% a mais de duração. O produto acompanha um restritor de vazão opcional, que proporciona uma saída de 15 litros por minuto, com muito mais economia de água durante o banho, se você optar por instala-lo.   A Docol está no mercado desde 1956 e de lá para cá ela vem se aperfeiçoando cada vez mais em busca das melhores soluções em design, precisão, sustentabilidade, lucratividade e satisfação de seus clientes. Pioneira em soluções hidráulicas, a Docol se tornou uma das maiores exportadoras da América Latina. Investindo sempre em tecnologia e inovação, a Docol garante produtos de qualidade, alto desempenho e economia.', 'https://cec-a.akamaihd.net/img-prod/images/large/chuveiro-redondo-sem-desviador-r150-eden-cromado-docol-1377779-foto-20201029180928475_690061_A.png', 'https://cec-a.akamaihd.net/img-prod/images/original/chuveiro-redondo-sem-desviador-r150-eden-cromado-docol-1377779-foto-20201029180929224_690061_B.png', 'https://cec-a.akamaihd.net/img-prod/images/original/chuveiro-redondo-sem-desviador-r150-eden-cromado-docol-1377779-foto-20201029180929973_690061_C.png', '2023-06-14 20:27:47', '2023-06-14 20:27:47'),
(9, 'Ducha de Parede com Desviador E Ducha Manual Smart Cromada', 'Celite', '459.99', 100, 'A Ducha de Parede com Desviador e Ducha Manual Smart Cromada da Celite traz um design clean com um espalhador de 80mm de diâmetro, tanto na ducha, como na ducha manual, que garante um banho muito mais relaxante e confortável. Além disso, seu acabamento cromado proporciona um alto brilho e durabilidade ao produto.  A Celite foi fundada em 1941, com o nome de Porcelite, uma das primeiras indústria de louças sanitárias do Brasil. Seus fundadores foram dois engenheiros decididos a fabricar no Brasil as louças sanitárias vitrificadas, que, antes desta data, eram importadas. Atualmente a Celite tem soluções completas para seu banheiro, com linhas de louças, metais, acessórios, banheiras e móveis. Mais qualidade e segurança em seu banheiro.', 'https://cec-a.akamaihd.net/img-prod/images/large/ducha-de-parede-com-desviador-e-ducha-manual-smart-cromada-celite-1226125-foto-20180312171037203_961727_A.png', 'https://cec-a.akamaihd.net/img-prod/images/original/ducha-de-parede-com-desviador-e-ducha-manual-smart-cromada-celite-1226125-foto-20180312171038358_961727_B.png', 'https://cec-a.akamaihd.net/img-prod/images/original/ducha-de-parede-com-desviador-e-ducha-manual-smart-cromada-celite-1226125-foto-20180312171038358_961727_B.png', '2023-06-14 20:29:07', '2023-06-14 20:29:07'),
(10, 'Cimento Todas As Obras 50kg', 'Votorantim', '28.99', 100, 'O Cimento Todas as Obras 50kg da Votorantim é um Cimento  de alta qualidade, que atende aos requisitos técnicos das normas ABNT, sendo indicada para a preparação de diversos tipos de obras, reboco, concreto convencional, contra pisos e lajes.   O único com propriedades de Silicatos de cálcio, alumínio e ferro, trazendo maior resistência, aderência, elasticidade e economia.   A história da Votorantim Cimentos começou em 1936, no interior de São Paulo. De lá para cá, a marca se expandiu em negócios e mercados, cruzando fronteiras e hoje é uma das maiores empresas do setor de materiais de construção no mundo. Estando presente em 12 países: Argentina, Brasil, Bolívia, Canadá, Espanha, Estados Unidos, Índia, Marrocos, Peru, Tunísia, Turquia e Uruguai.', 'https://cec-a.akamaihd.net/img-prod/images/large/cimento-todas-as-obras-50kg-votorantim-1228972-foto-9a4fd48e-6fdd-4230-9551-2850a88845a2.png', 'https://cec-a.akamaihd.net/img-prod/images/original/cimento-todas-as-obras-50kg-votorantim-1228972-foto-49b5d453-6a73-4a9d-a024-6c5d03fe0dd3.png', 'https://cec-a.akamaihd.net/img-prod/images/original/cimento-todas-as-obras-50kg-votorantim-1228972-foto-49b5d453-6a73-4a9d-a024-6c5d03fe0dd3.png', '2023-06-14 20:30:06', '2023-06-14 20:30:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quem_somos`
--

CREATE TABLE `quem_somos` (
  `id` int(11) NOT NULL,
  `texto` mediumtext NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `quem_somos`
--

INSERT INTO `quem_somos` (`id`, `texto`, `updated_at`, `created_at`) VALUES
(5, 'Seja bem-vindo à nossa loja de materiais de construção, onde tornamos a construção e a renovação de projetos residenciais e comerciais uma experiência fácil e gratificante. Nosso compromisso é fornecer uma ampla variedade de materiais de alta qualidade, juntamente com um excelente atendimento ao cliente.  Na nossa loja, você encontrará tudo o que precisa para o seu projeto de construção. Temos uma extensa seleção de materiais, desde fundamentos até acabamentos, incluindo concreto, tijolos, madeira, cerâmica, azulejos, pisos, tintas, ferramentas e muito mais. Trabalhamos apenas com marcas confiáveis e fornecedores renomados, garantindo a durabilidade e a qualidade de nossos produtos.  Nossa equipe de profissionais experientes está sempre pronta para ajudar e aconselhar, desde a escolha dos materiais adequados até dicas de instalação. Com um atendimento personalizado, buscamos entender as necessidades únicas de cada cliente e fornecer soluções sob medida.  Além disso, valorizamos a agilidade e a praticidade. Oferecemos opções de entrega rápida para garantir que você receba os materiais no prazo desejado, facilitando o andamento do seu projeto.  Se você é um profissional da construção ou um cliente em busca de materiais para um projeto DIY, estamos aqui para ajudar. Navegue em nossa loja ou entre em contato conosco para obter mais informações. Estamos ansiosos para fazer parte do seu projeto de construção e ajudá-lo a transformar suas ideias em realidade.', '2023-06-14 20:16:19', '2023-06-01 01:49:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'yuta', 'y@gmail.com', NULL, '$2y$10$HOrd0QZF4u23uDi17WhQhOh..YN8tbcY261ho9OKFJW.azz2xKi0S', NULL, '2023-06-01 04:06:48', '2023-06-01 04:06:48'),
(4, 'Administrador', 'admin@hotmail.com', NULL, '$2y$10$h/TCaywv4Ey1FmsiJu8.aehW3rqHzOfpQbFxIQRiFDSjmn6NepW5S', NULL, '2023-06-14 23:39:41', '2023-06-14 23:39:41');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
