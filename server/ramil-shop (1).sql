-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 25 2020 г., 14:55
-- Версия сервера: 5.7.32-0ubuntu0.18.04.1
-- Версия PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ramil-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `total` int(30) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `phone`, `total`, `created_at`) VALUES
(1, '+7 (987) 133-0422', 210000, NULL),
(2, '+7 (987) 133-1212', 52600, NULL),
(3, '+7 (987) 133-0454', 49800, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_positions`
--

CREATE TABLE `orders_positions` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders_positions`
--

INSERT INTO `orders_positions` (`id`, `order_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 12),
(3, 2, 9),
(4, 2, 10),
(5, 2, 1),
(6, 3, 1),
(7, 3, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL,
  `description` text NOT NULL,
  `price` int(16) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Коммутатор Mikrotik CRS328-24P-4S+RM', 'Выпускается коммутатор Mikrotik CRS328-24P-4S+RM в прочном и надежном корпусе. В нем применяется система эффективного активного охлаждения, которая справляется с выводом образующегося тепла. Перегрев данного оборудования полностью исключен, даже при высоких нагрузках.', 30000, 'products/1.jpg'),
(9, 'Материнская плата ASUS TUF GAMING X570-PLUS (WI-FI)', 'Материнские платы серии TUF Gaming – это высоконадежные устройства, созданные и протестированные для работы в особо сложных условиях. Благодаря отборной элементной базе они обеспечат максимальную стабильность компьютера во время длительных игровых сессий.', 19800, 'products/2.jpg'),
(10, '120 ГБ SSD-накопитель AMD Radeon', 'SSD-накопитель AMD Radeon R5 Series с объемом памяти 120 ГБ способен здорово увеличить быстродействие компьютера. С использованием представленного SSD-накопителя также ваше компьютерное устройство получает 120 ГБ для хранения необходимой информации, будь то фильмы, игры или коллекция фотографий и видео из отпуска.', 2800, 'products/3.jpg'),
(11, 'Блок питания Corsair HXi 750W [CP-9020072-EU]', 'Блок питания Corsair HXi 750W [CP-9020072-EU] – компактный прибор с активным PFC. Для стабильного функционирования прибора необходимо напряжение в интервале 100-240 В. ', 18000, 'products/4.jpg'),
(12, 'Видеокарта MSI GeForce RTX 3090 VENTUS 3X OC [RTX 3090 VENTUS 3X 24G OC]', 'Видеокарта GeForce RTX 3090 демонстрирует колоссальную мощь во всех отношениях, обеспечивая высокий уровень производительности.', 180000, 'products/5.jpg'),
(13, 'Вентилятор DEEPCOOL XFAN 80L/B [0116614]', 'Вентилятор DEEPCOOL XFAN 80L/B – небольшой вентилятор с габаритами 80x80x25 мм. Этот корпусный вентилятор выполнен из прозрачного пластика, а также оснащен светодиодом. Благодаря этому создается необычный визуальный эффект при его использовании в темноте или в ночное время.', 200, 'products/6.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_positions`
--
ALTER TABLE `orders_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `orders_positions`
--
ALTER TABLE `orders_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
