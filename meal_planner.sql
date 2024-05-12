-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 12 2024 г., 23:16
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `meal_planner`
--

-- --------------------------------------------------------

--
-- Структура таблицы `meal_time`
--

CREATE TABLE `meal_time` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PFC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prot_per_100_grams` int(11) NOT NULL,
  `fats_per_100_grams` int(11) NOT NULL,
  `carb_per_100_grams` int(11) NOT NULL,
  `call_per_100_grams` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `meal_time`
--

INSERT INTO `meal_time` (`id`, `name`, `img`, `diet`, `PFC`, `prot_per_100_grams`, `fats_per_100_grams`, `carb_per_100_grams`, `call_per_100_grams`) VALUES
(1, 'Творожная запеканка с ягодами', '[1].jpg', 'Балансированное', '23:37:40', 7, 5, 12, 321),
(2, 'Омлет с сыром и хлебом', '[2].jpg', 'Балансированное', '20:34:46', 6, 5, 12, 323),
(3, 'Мюсли с йогуртом и фруктами', '[3].jpg', 'Балансированное', '21:15:64', 6, 2, 11, 304),
(4, 'Сырники с ягодами и чаем', '[4].jpg', 'Балансированное', '25:28:47', 8, 4, 17, 331),
(5, 'Блинчики с творогом и медом', '[5].jpg', 'Балансированное', '17:35:48', 6, 5, 15, 329),
(6, 'Лосось с рисом и салатом из свежик\r\nовощей', '[0].png', 'Балансированное', '20:21:35', 5, 5, 9, 307),
(7, 'Куриная грудка с картофельным пюре и овощным рагу', '[0].png', 'Балансированное', '32:18:50', 3, 4, 11, 300),
(8, 'Индейка стыквенным супом и хлебом', '[0].png', 'Балансированное', '35:16:49', 9, 2, 14, 300),
(9, 'Фасоль с мясом и зеленым салатом', '[0].png', 'Балансированное', '28:24:48', 7, 5, 11, 297),
(10, 'Паста с тунцом и помидорами', '[0].png', 'Балансированное', '31:14:55', 8, 12, 11, 299),
(39, '12', '663cbd5caf59a.jpeg', 'Балансированное', '25:56:19', 4, 4, 3, 64),
(41, 'Rbhbkk', '663cbfde232b3.webp', 'Балансированное', '26:57:17', 3, 3, 2, 47);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nickname`, `access`, `email`, `password`) VALUES
(1, '5', 'admin', '5', 'e4da3b7fbbce2345d7772b0674a318d5'),
(3, '11', NULL, '1@1', '6512bd43d9caa6e02c990b0a82652dca'),
(4, '22', NULL, '2@2', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(5, '33', NULL, '3@2', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(6, '77', NULL, '7@7', '28dd2c7955ce926456240b2ff0100bde'),
(7, '88', NULL, '8@8', '2a38a4a9316c49e5a833517c45d31070'),
(8, '99', NULL, '9@9', 'ac627ab1ccbdb62ec96e702f07f6425b'),
(9, '111', NULL, '111@1', '6512bd43d9caa6e02c990b0a82652dca'),
(10, '55', NULL, '55@1', 'b53b3a3d6ab90ce0268229151c9bde11'),
(24, 'kirshet2000', NULL, 'kirshet2000@gmail.com', '$2y$10$LOoQkdQD9CyV2ZncgiLqVeyuusD0erKSaEq8XGhHEj.bVJU0CA1/C');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `meal_time`
--
ALTER TABLE `meal_time`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `meal_time`
--
ALTER TABLE `meal_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
