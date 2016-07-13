-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 13 2016 г., 21:05
-- Версия сервера: 5.7.12-0ubuntu1
-- Версия PHP: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) DEFAULT '-',
  `index` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id`, `order_id`, `full_name`, `email`, `phone`, `index`, `address`) VALUES
(1, 78720222, 'Чмыхало Никита', 'Garcy999@yandex.ru', '89385060546', 353670, 'dom 71'),
(2, 6437807, 'Чмыхало Денис', 'Garcy999@yandex.ru', '3454354353', 353670, 'dom 23'),
(3, 16770144, 'Чмыхало Денис', 'Garcy111@gmail.com', '', 353670, 'Краснодарский край, г. Ейск, ул. Шевченко д.71'),
(4, 20699150, 'Чмыхало Денис', 'Garcy111@gmail.com', '', 353670, 'Краснодарский край, г. Ейск, ул. Шевченко д.71'),
(5, 46258702, 'sdc', 'sdc', 'csd', 23, 'csdc'),
(6, 31839845, 'Никита', 'Garcy999@yandex.ru', '89385060546', 353670, 'Краснодарский край, г.Ейск ул.Ленина д.71 '),
(7, 15060198, 'Аня', 'Garcy111@gmail.com', '89385032576', 354232, 'Краснодарский край, г. Ейск, ул. Шевченко д.71'),
(8, 37019199, 'Никита Олегович', 'Garcy111@gmail.com', '89385032576', 45645, 'Краснодарский край, г. Ейск, ул. Шевченко д.65'),
(9, 4395848, 'Никита Олегович', 'Garcy111@gmail.com', '89385032576', 45645, 'Краснодарский край, г. Ейск, ул. Шевченко д.65'),
(10, 11830370, 'Никита Олегович', 'Garcy111@gmail.com', '89385032576', 45645, 'Краснодарский край, г. Ейск, ул. Шевченко д.65'),
(11, 40336540, 'Вася', 'Garcy111@gmail.com', '89385032576', 354232, 'Краснодарский край, г. Ейск, ул. Шевченко д.71'),
(13, 36411903, 'Вася', 'Garcy111@gmail.com', '89385032576', 354232, 'Краснодарский край, г. Ейск, ул. Шевченко д.71'),
(14, 65458557, 'Rob', 'Hsa@cdsd.cd', '546456908', 124932, 'jklvjdfbvdfb'),
(15, 87821039, 'Вася', 'Garcy111@gmail.com', '89385032576', 354232, 'Краснодарский край, г. Ейск, ул. Шевченко д.71');

-- --------------------------------------------------------

--
-- Структура таблицы `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute`
--

INSERT INTO `attribute` (`id`, `name`) VALUES
(1, 'Размер'),
(2, 'Цвет'),
(3, 'Диагональ');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cart_id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Uploaded images from admin panel for ImageManager';

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(16, '20419150.jpg'),
(17, '30503210.jpg'),
(18, '14127079.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `url`) VALUES
(1, 'Блог', '', '/'),
(3, 'Контакты', 'contacts', ''),
(4, 'Форум', '', 'https://yandex.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1459359735),
('m160411_101008_create_product_category_table', 1460388553),
('m160411_112424_create_products_table', 1460388642),
('m160411_153444_create_attribute_tables', 1460389457),
('m160414_153133_create_cart_table', 1460719742),
('m160503_085013_create_tags_tables', 1462293536),
('m160602_100502_create_notification_table', 1464862185);

-- --------------------------------------------------------

--
-- Структура таблицы `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notification`
--

INSERT INTO `notification` (`id`, `name`, `link`, `active`, `date`) VALUES
(3, 'Новый пользователь: Soble', '/admin/users/view/?id=5', 0, '15/06/2016, 08:24'),
(4, 'Новый пользователь: dsd', '/admin/users/view/?id=6', 0, '16/06/2016, 03:11'),
(5, 'Новый пользователь: hjfdf', '/admin/users/view/?id=8', 0, '16/06/2016, 17:07'),
(6, 'Новый заказ: 87821039', '/admin/orders/view/?id=5', 0, '16/06/2016, 06:51');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products` text NOT NULL,
  `quantity` text NOT NULL,
  `total` int(11) NOT NULL,
  `shipping` int(11) DEFAULT '0',
  `active` int(11) DEFAULT '0',
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `products`, `quantity`, `total`, `shipping`, `active`, `date`) VALUES
(3, 15060198, 1, 'a:1:{i:0;i:3;}', 'a:1:{i:0;i:1;}', 210250, 250, 1, 1460878742),
(4, 40336540, 1, 'a:2:{i:0;i:3;i:1;i:1;}', 'a:2:{i:0;i:1;i:1;i:1;}', 252250, 250, 1, 1489191202);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `content` text,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `link`, `content`, `updated_at`) VALUES
(3, 'Контакты', 'contacts', '<p>Email: Garcy999@yandex.ru</p>', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_index` text,
  `miniature` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `date` int(11) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `link`, `title`, `title_index`, `miniature`, `description`, `content`, `likes`, `comments`, `views`, `date`, `meta_desc`, `meta_keywords`) VALUES
(5, 12, 'religiya.html', 'Религия', '{"range":1,"words":[{"source":"CONSEQUATUR","count":1,"range":1,"weight":1,"basic":false},{"source":"IURE","count":1,"range":1,"weight":1,"basic":false}]}', '/uploads/20419150.jpg', 'Если в наше время кто-то еще проповедует рели&shy;гию, то вовсе не потому, что религиозные представления продолжают нас убеждать; нет, в основе всего скрывается желание утихомирить народ, простых людей. Спокойными людьми легче управлять, чем неспокойными и недовольными. Их и легче использовать или эксплуа&shy;тировать. Религия &mdash; это род опиума, который дают народу, чтобы убаюкать его ...', '<p>Если в наше время кто-то еще проповедует рели&shy;гию, то вовсе не потому, что религиозные представления продолжают нас убеждать; нет, в основе всего скрывается желание утихомирить народ, простых людей. Спокойными людьми легче управлять, чем неспокойными и недовольными. Их и легче использовать или эксплуа&shy;тировать. Религия &mdash; это род опиума, который дают народу, чтобы убаюкать его сладкими фантазиями, утешив таким образом насчет гнетущих его несправедливостей. Недаром всегда так быстро возни&shy;кает альянс двух важнейших политических сил, государства и церкви. Обе эти силы заинтересованы в сохранении иллюзии, будто добрый боженька если не на земле, то на небе вознаградит тех, кто не возмущался против несправедливостей, а спокойно и терпеливо вы&shy;полнял свой долг. Вот почему честная констатация того, что этот бог есть просто создание человеческой фантазии, считается худшим смертным грехом&raquo;.<br />- Поль Дирак</p>', 10, 0, 21, 1468052998, '', ''),
(7, 16, 'page1.html', 'Заголовок', NULL, '/uploads/14127079.jpg', 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград? Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. ', '<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?</p>\r\n<blockquote>\r\n<p>Тут цитата</p>\r\n</blockquote>\r\n<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?&nbsp;Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?&nbsp;Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</p>\r\n<h1>Заголовок 1</h1>\r\n<h2>Заголовок 2</h2>\r\n<h3>Заголовок 3</h3>\r\n<p>Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?</p>\r\n<p>Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?</p>\r\n<h2 style="text-align: center;">Заголовок по центру</h2>\r\n<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?</p>\r\n<ol>\r\n<li>один</li>\r\n<li>два</li>\r\n<li>три</li>\r\n</ol>\r\n<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут хрыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/uploads/30503210.jpg" alt="" width="670" height="538" /></p>\r\n<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Силуэт диких заглавных первую предупреждал дал, подзаголовок составитель речью. Эта журчит буквенных не всемогущая даже сих послушавшись города выйти буквоград?</p>\r\n<p>а это ссылка на&nbsp;<a href="https://yandex.ru">яндекс</a></p>', 1, 0, 90, 1468073966, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post_category`
--

INSERT INTO `post_category` (`id`, `name`, `updated_at`) VALUES
(1, 'Технологии', NULL),
(3, 'Искусство', NULL),
(12, 'Цитаты', NULL),
(16, 'Магия', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `description` text,
  `price` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `photo`, `description`, `price`, `active`) VALUES
(1, 2, 'iPhone 6', '/uploads/8776585.jpg', 'desc', 42000, 1),
(2, 3, 'Sumsung Galaxy s7', '/uploads/6239571.png', 'Desc', 32000, 1),
(3, 4, 'iMac 5k retina', '/uploads/45577211.jpg', 'asd', 210000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `parent_id`) VALUES
(1, 'Телефоны', NULL),
(2, 'Apple', 1),
(3, 'Sumsung', 1),
(4, 'Ноутбуки', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `updated_at`) VALUES
(3, 'Религия', 0),
(4, 'Web', 1467475350),
(5, 'Yii', 1467475832);

-- --------------------------------------------------------

--
-- Структура таблицы `tag_post`
--

CREATE TABLE `tag_post` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tag_post`
--

INSERT INTO `tag_post` (`post_id`, `tag_id`) VALUES
(5, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `authKey` varchar(32) NOT NULL,
  `recovery` varchar(60) DEFAULT NULL COMMENT 'Временный пароль при восстановлении',
  `activation` varchar(32) DEFAULT NULL,
  `soc` varchar(100) DEFAULT NULL,
  `access` int(11) DEFAULT '0' COMMENT '0 - ожидает подтверждения, 1 - доступ открыт, 2 - доступ закрыт',
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `authKey`, `recovery`, `activation`, `soc`, `access`, `date`) VALUES
(1, 'Admin', '$2y$13$1TBZ1wubM7G5rX8vwRoKQ.x8W.Q61uFM.iN9P/fYDCqjBo9dwmBG6', 'Garcy999@yandex.ru', '/uploads/avatar/MvnCePR7kLU.jpg', 'VfXlNEbMCZGZ1ChSNtXuy038d6zjDoNH', NULL, NULL, NULL, 2, 1460988211),
(2, 'Garcy', '$2y$13$0WkjutDQ3yDywJMullL0QOCHwutoEhwhnsrLBYCsOXWhEGRGtJHDK', 'guitar@gmail.com', '/uploads/avatar/asd.jpg', 'RnOnWzS03ZjQkPem0Dq2nOCGIsHMYTab', NULL, NULL, NULL, 1, 1461000977);

-- --------------------------------------------------------

--
-- Структура таблицы `value`
--

CREATE TABLE `value` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `value`
--

INSERT INTO `value` (`product_id`, `attribute_id`, `value`) VALUES
(1, 1, '500 г.'),
(1, 2, 'Золотой'),
(1, 3, '5'),
(2, 3, '7'),
(3, 2, 'sliver'),
(3, 3, '21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-cart-product_id` (`product_id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-products-category_id` (`category_id`),
  ADD KEY `idx-products-active` (`active`);

--
-- Индексы таблицы `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product_category-parent_id` (`parent_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tag_post`
--
ALTER TABLE `tag_post`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `fk-tag_post-tag_id` (`tag_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `value`
--
ALTER TABLE `value`
  ADD PRIMARY KEY (`product_id`,`attribute_id`),
  ADD KEY `idx-value-product_id` (`product_id`),
  ADD KEY `idx-value-attribute_id` (`attribute_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk-cart-product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `fk-product_category-parent` FOREIGN KEY (`parent_id`) REFERENCES `product_category` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `tag_post`
--
ALTER TABLE `tag_post`
  ADD CONSTRAINT `fk-tag_post-post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-tag_post-tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `value`
--
ALTER TABLE `value`
  ADD CONSTRAINT `fk-value-attribute` FOREIGN KEY (`attribute_id`) REFERENCES `attribute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-value-products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
