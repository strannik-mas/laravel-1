-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2018 г., 09:18
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel-1`
--
CREATE DATABASE IF NOT EXISTS `laravel-1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `laravel-1`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'alias',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `name`, `text`, `img`, `created_at`, `updated_at`, `alias`, `deleted_at`, `user_id`) VALUES
(7, 'test2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente.', 'test2.jpg', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(8, 'test3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente.', 'test3.jpg', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(9, 'test4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente.rereasdfasdfsadaaaa', 'test4.jpg444', NULL, '2018-02-10 18:30:28', 'alias', NULL, 9),
(10, 'test5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente.', 'test5.jpg', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(11, 'test5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, sapiente. труляля', 'test5.jpg', NULL, '2018-02-10 16:37:25', 'alias', NULL, 9),
(12, 'Blog post', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex fugiat beatae officia sit maxime blanditiis deserunt cupiditate eligendi eveniet.</p>', 'https://givotniymir.ru/wp-content/uploads/2016/03/chernaya-pantera-obraz-zhizni-i-sreda-obitaniya-chernoj-pantery-2.jpg', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(13, 'second blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, aperiam, mollitia, delectus, earum quis incidunt velit fugiat voluptas repudiandae veniam eveniet commodi esse laudantium. Rem eum molestias sed dicta cumque!', 'pic2.jpg', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(14, 'Sample blog post 2', '<p class=\'blog-post-meta\'>January 1, 2014 by <a href=\'#\'>Mark</a></p>\n\n					            <p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\n					            <hr>\n					            <p>Cum sociis natoque penatibus et magnis <a href=\'#\'>dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\n					            <blockquote>\n					              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\n					            </blockquote>\n					            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\n					            <h2>Heading</h2>\n					            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\n					            <h3>Sub-heading</h3>\n					            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n					            <pre><code>Example code block</code></pre>\n					            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\n					            <h3>Sub-heading</h3>\n					            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\n					            <ul>\n					              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\n					              <li>Donec id elit non mi porta gravida at eget metus.</li>\n					              <li>Nulla vitae elit libero, a pharetra augue.</li>\n					            </ul>\n					            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\n					            <ol>\n					              <li>Vestibulum id ligula porta felis euismod semper.</li>\n					              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\n					              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\n					            </ol>\n					            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'pic3.jpg', NULL, NULL, 'alias', NULL, 2),
(15, 'second blog2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iusto laboriosam necessitatibus repellendus quam enim excepturi dicta modi! Itaque, iure.', 'pic4.jpg', '2018-01-08 23:24:49', '2018-01-21 11:40:28', 'alias', NULL, 2),
(16, 'Test2', 'hello', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(17, 'Test3', 'hello world', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(18, 'Test2', 'hello', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(19, 'Test3', 'hello world', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(20, 'Test2', 'hello', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(22, 'abracadabra', 'hellu', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(23, 'new name2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, natus.', '', NULL, '2018-01-21 11:40:28', 'alias', NULL, 2),
(24, 'new text', '{\"key\":1,\"key2\":2}', '', '2018-01-20 22:26:55', '2018-01-21 12:42:20', 'alias', NULL, 2),
(25, 'new article23-2', 'Lorem ipsum dolor sit amet.', '', '2018-01-20 22:29:41', '2018-01-21 11:40:28', 'alias', NULL, 2),
(26, 'new article23-4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, quisquam, accusamus, quos, cumque rem ipsa architecto ullam assumenda reprehenderit commodi obcaecati quo quidem porro labore natus incidunt minima? Natus, amet, a, optio, soluta harum pariatur possimus molestiae assumenda dicta eius recusandae culpa consectetur facilis temporibus illo sunt ratione beatae eum ex commodi aspernatur voluptatibus mollitia ut magnam deserunt odit aliquid praesentium? Laborum, iste, molestias impedit sint iusto minus aliquam culpa reprehenderit similique atque dolores autem rerum obcaecati. Maiores, rem, qui, atque tempora eos repudiandae consectetur possimus ullam sit culpa earum distinctio sint magnam commodi fugit quibusdam quod ratione quisquam dolore.', '', '2018-01-20 22:32:05', '2018-01-21 11:40:28', 'alias', NULL, 2),
(27, 'new article23-3', 'Lorem ipsum dolor sit amet.', '', '2018-01-20 22:32:05', '2018-01-21 11:40:28', 'alias', NULL, 2),
(28, 'asdfasdf', '\"asfdasdfasfddsafdfd\"', '', '2018-02-10 13:06:42', '2018-02-10 13:06:42', 'alias', NULL, 9),
(29, 'test3', 'asdfasfjsa;lfjsa;lfkjas;lkfjas;lkjf;aslkjfa;lsk', '', '2018-02-10 17:55:22', '2018-02-10 17:55:22', 'alias', NULL, 9),
(30, 'test4', 'test4 test4test4test4test4test4test4test4test4test4test4test4test4test4test4test4', 'test4.png', '2018-02-10 17:57:58', '2018-02-10 18:03:57', 'alias', NULL, 9),
(31, 'test5', 'test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5 test5', 'test4.png', '2018-02-10 17:58:56', '2018-02-10 17:58:56', 'alias', NULL, 9),
(32, 'test6', '`atrafsafasdf', 'trew', '2018-02-10 18:13:32', '2018-02-10 18:13:32', 'alias', NULL, 9),
(33, 'asfsadf', 'asdfsadfsadf', 'img234', '2018-02-13 20:15:20', '2018-02-13 20:15:20', 'alias', NULL, 9),
(34, 'article2', 'adf;lajf;laksjf;laskjdf;l', 'img2.png', '2018-02-13 20:18:04', '2018-02-13 20:18:04', 'alias', NULL, 9),
(35, 'article3', 'adlfaflasjf;lksadj', 'adfasf', '2018-02-13 20:40:06', '2018-02-13 20:40:06', 'alias', NULL, 9),
(36, 'article5', 'asdfsadfsadfasd', 'adf', '2018-02-13 20:46:32', '2018-02-13 20:46:32', 'alias', NULL, 9),
(37, 'new article', 'adsfsadfsadfasdfasdfasdf', '', '2018-02-26 20:54:43', '2018-02-26 20:54:43', 'alias', NULL, 9),
(38, 'new article2', 'adf;aslfjka;slfkjsa;ldfkjl;sakdfj', '', '2018-02-26 21:34:37', '2018-02-26 21:34:37', 'alias', NULL, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '7',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ukraine', 2, NULL, '2018-01-21 11:01:42');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_01_08_004155_create_articles_table', 1),
(9, '2018_01_08_011325_change_articles_table', 2),
(10, '2018_01_08_013919_change_articles_table2', 3),
(11, '2018_01_08_234211_create_pages_table', 4),
(12, '2018_01_18_234912_change_article_table_soft', 5),
(13, '2018_01_20_175821_create_counties_table', 6),
(14, '2016_03_19_185508_add_articles_user_table', 7),
(15, '2018_01_20_222736_create_roles_table', 8),
(16, '2018_01_20_222815_create_role_user_table', 8),
(17, '2018_02_12_210639_create_sessions_table', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'document',
  `contentType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text/html',
  `pagetitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `type`, `contentType`, `pagetitle`, `longtitle`, `content`, `template`, `created_at`, `updated_at`) VALUES
(3, 'document', 'text/html', 'О нас', 'О компании', '                                    <p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n                                    <hr>\r\n                                    <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n                                    <blockquote>\r\n                                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n                                    </blockquote>\r\n                                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n                                    <h2>Heading</h2>\r\n                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n                                    <h3>Sub-heading</h3>\r\n                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n                                    <pre><code>Example code block</code></pre>\r\n                                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n                                    <h3>Sub-heading</h3>\r\n                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n                                    <ul>\r\n                                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n                                        <li>Donec id elit non mi porta gravida at eget metus.</li>\r\n                                        <li>Nulla vitae elit libero, a pharetra augue.</li>\r\n                                    </ul>\r\n                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n                                    <ol>\r\n                                        <li>Vestibulum id ligula porta felis euismod semper.</li>\r\n                                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n                                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n                                    </ol>\r\n                                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'default.about', NULL, '2018-01-09 08:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'moderator', NULL, NULL),
(3, 'guest', '2018-01-20 22:38:01', '2018-01-20 22:38:01');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 9, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5aVaUtIb0EoJUyAvXa89sJoMtZ1A4QYv2iyrkDob', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWmd0TDA3ajhuR0FZaEN0WWp1Q1p1TjJ0ZUQxcEFZY1NwVmFsdVZNQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sYXJhdmVsLTEvY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjQ6Imh0dHA6Ly9sYXJhdmVsLTEvY29udGFjdCI7fX0=', 1518462891);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alex', 's211211@ukr.net', '', 'qwerty', '', NULL, NULL),
(2, 'user2', 'user2@mail.ru', '', 'qwerty', NULL, NULL, NULL),
(3, 'Alex', 'strannik.mas@gmail.com', '', '$2y$10$KI9tQu7crPa1ZlrBx/R1su8lAT3EoQ1xlWiIRRSKUbVe5HZ2dtnuG', 'jrK7zk3oaa0fjI5yFOg9bDbm93zkrFCXKmApCHuMCyK6ZOh8eKxoVlk6KrbA', '2018-02-05 21:42:10', '2018-02-05 21:42:10'),
(9, 'user4', 'uu@uu.uu', 'User4', '$2y$10$YjD.iAyNsl5apreapc3iY.nBYhAMrUgDz/Yb.abODIpC7QoBHndge', 'mNf0gMVnaJmExzkdcIbBCg4bqtdTjLXskqJzi2jlSfV5iu2inZxzj5R3i9uf', '2018-02-08 19:36:25', '2018-02-08 19:36:25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
