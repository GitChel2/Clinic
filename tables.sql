-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 15 2023 г., 17:51
-- Версия сервера: 5.7.27-30-log
-- Версия PHP: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vtutin12gm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `for__whom` varchar(15) NOT NULL,
  `li__1` varchar(56) NOT NULL,
  `li__2` varchar(56) NOT NULL,
  `li__3` varchar(56) NOT NULL,
  `li__4` varchar(56) NOT NULL,
  `new` varchar(10) NOT NULL,
  `old` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `card`
--

INSERT INTO `card` (`id`, `title`, `for__whom`, `li__1`, `li__2`, `li__3`, `li__4`, `new`, `old`, `img`) VALUES
(1, 'CHECK - UP', 'для мужчин', 'Гормональный скриптинг', 'Тестостерон', 'Свободный тестостерон', 'Глобулин, связывающий половые органы', '2800', '3500', ''),
(2, 'CHECK - UP', 'для мужчин', 'Гормональный скриптинг', 'Тестостерон', 'Свободный тестостерон', 'Глобулин, связывающий половые органы', '2900', '3600', ''),
(3, 'CHECK - UP', 'для мужчин', 'Гормональный скриптинг', 'Тестостерон', 'Свободный тестостерон', 'Глобулин, связывающий половые органы', '3000', '3700', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
