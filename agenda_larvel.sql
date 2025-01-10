-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jan-2025 às 13:53
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda_larvel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacaos`
--

CREATE TABLE `anotacaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `anotacaos`
--

INSERT INTO `anotacaos` (`id`, `titulo`, `conteudo`, `dia`, `created_at`, `updated_at`) VALUES
(2, 'In reiciendis.', 'Eos laudantium consectetur sit odit est eos qui et quidem sunt aliquid.', '1991-12-26 18:13:24', '2024-12-16 08:22:28', '2024-12-16 08:22:28'),
(3, 'Perspiciatis fuga distinctio.', 'Vero at laborum maiores alias assumenda quia illo consequatur sit.', '1991-05-13 13:22:31', '2024-12-16 08:22:28', '2024-12-16 08:22:28'),
(4, 'Voluptatem ea.', 'Qui consequatur laboriosam aut aut est voluptatem.', '2000-05-04 22:14:09', '2024-12-16 08:22:28', '2024-12-16 08:22:28'),
(5, 'Voluptate dignissimos fugiat.', 'Tenetur impedit recusandae cupiditate modi nemo sunt ut vel eius praesentium.', '2000-05-11 16:47:30', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(6, 'Quia aspernatur.', 'Aut autem aperiam quibusdam eum autem sapiente possimus et dolores excepturi aut.', '1996-01-18 14:03:31', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(7, 'Minus molestiae enim.', 'Nihil id eius nam qui provident doloremque natus quas odio harum corporis ab.', '1973-02-10 01:49:33', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(8, 'Id aut.', 'Eveniet eum quas tempora dolores itaque et.', '1989-10-13 23:00:09', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(9, 'Incidunt eos eum.', 'Quam quis assumenda blanditiis blanditiis dolorum fugiat provident autem pariatur perferendis velit rerum nihil.', '1984-09-03 17:32:54', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(10, 'Quia et.', 'Sunt facere aut quis modi vero debitis consequuntur inventore reiciendis eum laboriosam sit incidunt.', '2021-10-15 08:36:49', '2024-12-16 08:22:29', '2024-12-16 08:22:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_13_133543_create_anotacaos_table', 1),
(6, '2024_12_13_133610_create_tarefas_table', 1),
(7, '2024_12_13_133621_create_tags_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tags`
--

INSERT INTO `tags` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(2, 'Et itaque. ownn', '2024-12-16 08:22:30', '2024-12-21 07:01:52'),
(3, 'Veniam.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(4, 'Recusandae omnis.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(5, 'Voluptas qui.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(6, 'Consequatur.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(7, 'Culpa ducimus.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(8, 'Rerum.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(9, 'Quis sed.', '2024-12-16 08:22:30', '2024-12-16 08:22:30'),
(10, 'Optio.', '2024-12-16 08:22:30', '2024-12-16 08:22:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `data`, `created_at`, `updated_at`) VALUES
(1, 'Natus odit architecto sed impedit harum occaecati omnis.', '2024-12-28 03:00:00', '2024-12-16 08:22:29', '2024-12-21 06:22:33'),
(2, 'Facere voluptatibus et sit ad quidem voluptate cumque qui fuga dolores ad.', '1990-05-04 05:04:09', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(3, 'Et sunt ipsam omnis iure aut et.', '2010-06-20 09:22:02', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(4, 'Voluptatum pariatur deleniti consectetur sit vero quos optio omnis amet et laboriosam magni deserunt ut.', '2000-03-16 13:16:07', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(5, 'Aperiam amet similique in soluta non fugit beatae doloribus.', '1971-07-05 21:16:53', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(6, 'Necessitatibus quia ipsam labore itaque qui enim placeat optio fugit voluptatem.', '2011-05-13 07:48:18', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(7, 'Non earum ea veniam sint est expedita.', '2005-09-07 02:35:46', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(8, 'Temporibus quo vitae omnis vel eum est ea enim.', '2022-03-05 18:24:02', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(9, 'Iste aut qui esse iusto cumque deserunt labore adipisci iste fuga corrupti sed impedit.', '2009-02-22 17:20:44', '2024-12-16 08:22:29', '2024-12-16 08:22:29'),
(10, 'Doloribus sed debitis necessitatibus porro ad est praesentium dolore.', '1999-10-10 16:56:43', '2024-12-16 08:22:29', '2024-12-16 08:22:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Beverly Jenkins I', 'myriam.heaney@example.com', '2024-12-16 08:22:30', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'vrege7Auo6', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(2, 'Jaquelin Kovacek PhD', 'lou46@example.net', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'ysBfqvhMvm', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(3, 'Prof. Amy Goldner DVM', 'cameron39@example.org', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', '2dDVGudR4j', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(4, 'Donald O\'Reilly', 'kautzer.winston@example.com', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'dJoddppIaO', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(5, 'Kelton Stamm', 'flehner@example.com', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'umzmnNGmZk', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(6, 'Derrick Mann', 'abbigail.herzog@example.net', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'ZP8TB2noAI', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(7, 'Marty Rutherford', 'homenick.luna@example.com', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'o7l3oOp9ys', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(8, 'Ewell Smitham I', 'inader@example.net', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', '4FC50L0g1v', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(9, 'Prof. Marilyne Funk Jr.', 'yasmeen.carter@example.org', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'K2nrQvH4hq', '2024-12-16 08:22:31', '2024-12-16 08:22:31'),
(10, 'Roosevelt Swift', 'smorar@example.com', '2024-12-16 08:22:31', '$2y$12$FnlONBjh/dITWNX6ILK3I.TxWy68Dg4hssKth4awhn2f/G1.tKgJ2', 'W8b925gKhj', '2024-12-16 08:22:31', '2024-12-16 08:22:31');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anotacaos`
--
ALTER TABLE `anotacaos`
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
-- Índices para tabela `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
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
-- AUTO_INCREMENT de tabela `anotacaos`
--
ALTER TABLE `anotacaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
