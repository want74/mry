-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2019 г., 17:22
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Game`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lkTable`
--

CREATE TABLE `lkTable` (
  `FullName` varchar(355) NOT NULL,
  `logicFirst` varchar(355) NOT NULL,
  `knowledgeFirst` varchar(355) NOT NULL,
  `logicSecond` varchar(355) NOT NULL,
  `knowledgeSecond` varchar(355) NOT NULL,
  `time` varchar(355) NOT NULL COMMENT 'это промежуток между 1 и второй игрой'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `question` varchar(355) NOT NULL,
  `user_id` int(10) NOT NULL,
  `answer` varchar(355) NOT NULL,
  `rOrC` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`question`, `user_id`, `answer`, `rOrC`, `id`) VALUES
('Я крутой?', 5, 'Да', 0, 10),
('Вопрос', 0, 'ОТвет', 1, 11),
('quest', 0, 'ans', 0, 12),
('quest1', 0, 'ans1', 0, 13),
('quest2', 0, 'ans2', 0, 14),
('quest3', 0, 'ans3', 0, 15),
('question1', 0, 'answer1', 1, 16),
('question2', 0, 'answer2', 1, 17),
('Где код', 5, 'тут', 0, 18),
('wladals,d', 5, 'asdksadl', 0, 19),
('asdasd', 5, 'ssssss', 1, 20),
('Я крут?', 5, 'YES', 1, 21),
('Кто я?', 7, 'Энди', 0, 22),
('Где код', 8, 'Да', 0, 23),
('Я крутой?', 8, 'Да', 1, 24),
('Где код', 8, 'ОТвет', 0, 25);

-- --------------------------------------------------------

--
-- Структура таблицы `RegTable`
--

CREATE TABLE `RegTable` (
  `FullName` varchar(355) NOT NULL,
  `age` varchar(355) NOT NULL,
  `positionOrClass` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `uniqueNick` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `RegTable`
--

INSERT INTO `RegTable` (`FullName`, `age`, `positionOrClass`, `password`, `uniqueNick`, `id`) VALUES
('Андрей Кычкин', '13', '7', 'Parol12', 'BulochkaEd', 5),
('fio', '13', '7', 'Parol12', 'nick', 6),
('Андрей Кычкин', '13', '7', 'Parol12', 'keker', 7),
('Андрей Кычкин', '13', '7', 'Parol12', 'lol', 8),
('Андрей Кычкин', '13', '7', 'Parol12', 'lol', 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `RegTable`
--
ALTER TABLE `RegTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `RegTable`
--
ALTER TABLE `RegTable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
