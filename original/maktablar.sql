-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2020 г., 21:16
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `maktablar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', '123456', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `fan`
--

CREATE TABLE `fan` (
  `sinf` varchar(1000) NOT NULL,
  `nomi` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fan`
--

INSERT INTO `fan` (`sinf`, `nomi`, `id`) VALUES
('9-sinf', 'onatili', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `oqituvchi`
--

CREATE TABLE `oqituvchi` (
  `ism` varchar(1000) NOT NULL,
  `familiya` varchar(1000) NOT NULL,
  `malumot` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reja`
--

CREATE TABLE `reja` (
  `malumot` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reja`
--

INSERT INTO `reja` (`malumot`) VALUES
('dsaklkjdsa'),
('');

-- --------------------------------------------------------

--
-- Структура таблицы `yangiliklar`
--

CREATE TABLE `yangiliklar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(1000) NOT NULL,
  `mazmuni` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fan`
--
ALTER TABLE `fan`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oqituvchi`
--
ALTER TABLE `oqituvchi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yangiliklar`
--
ALTER TABLE `yangiliklar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `fan`
--
ALTER TABLE `fan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `oqituvchi`
--
ALTER TABLE `oqituvchi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `yangiliklar`
--
ALTER TABLE `yangiliklar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
