-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Фев 03 2015 г., 22:52
-- Версия сервера: 5.5.38
-- Версия PHP: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bvctrans_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contragents`
--

CREATE TABLE `contragents` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `adress` varchar(1000) NOT NULL,
  `kpp` varchar(20) NOT NULL,
  `inn` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `contragents`
--

INSERT INTO `contragents` (`id`, `name`, `full_name`, `adress`, `kpp`, `inn`) VALUES
(1, 'ООО "ГруппСТ"', 'Общество с ограниченной ответственностью "Групп СТ"', '142030, Московская область, г. Домодедово, территория  "КЕС"-"Ям", стр. 1', '500301001', '7710415228'),
(2, 'ООО "Баргузин-Транс"', 'Общество с ограниченной ответственностью "Баргузин-Транс"', '664024, г. Иркутск, ул. Трактовая, д. 18, офис 8', '381001001', '3810322107'),
(3, 'ООО "Экспресс-Сервис"', 'Общество с ограниченной ответственностью "Экспресс-Сервис"', '127276, г. Москва, ул. Ботаническая, д. 14, офис 21', '771501001', '7715792445'),
(4, 'ООО "ТК "Топаз-империал"', 'Общество с ограниченной ответственностью "ТК "Топаз-империал"', '107143, г. Москва, 2-й Иртышский проезд, дом 4Б, строение 1', '771801001', '7720699219'),
(5, 'ООО "ЕвроХолдинг"', 'Общество с ограниченной ответственностью "ЕвроХолдинг"', '115516, г. Москва, ул. Веселая, дом 33, корпус 2, пом. 15', '772401001', '7726656300'),
(6, 'ООО "Евроокно-Гарант"', 'Общество с ограниченной ответственностью "Евроокно-Гарант"', '644507, Омская область, Омский район, село Дружино, ул. Советская 13', '552801001', '5528025884'),
(7, 'ЗАО "ПО РуАЗ"', 'Закрытое  акционерное общество "Производственное объединение Руссинский  автосборочный завод"', '117105, г.Москва, Нагорный проезд, д 10А.', '772601001 ', '5071000535'),
(11, 'ООО "Пятый Фасад"', 'Общество с ограниченной ответственностью "Пятый Фасад"', '350053, г. Краснодар, ул. Троицкая, д.137', '231101001', '2311146503'),
(12, 'ООО ТД "Глобал Ингредиент"', 'Общество с ограниченной ответственностью Торговый Дом  "Глобал Ингредиент"', '630126, г. Новосибирск, ул. Пролетарская, д. 360, корп. 2, а/я 107', '540501001', '5405452967'),
(9, 'ООО "Т-Транс"', 'Общество с ограниченной ответственностью "Т-Транс"', '105120, г. Москва, ул. Нижняя Сыромятническая, д. 5/7, стр. 4, оф. 403.', '770901001', '7709772698'),
(10, 'ООО "ХОУМ МАСТЕР"', 'Общество с ограниченной ответственностью "ХОУМ МАСТЕР"', '675000, Амурская область, г. Благовещенск, ул. Зейская, дом 173', '280101001', '2801012273'),
(13, 'ООО "ОТК "Альянс"', 'Общество с ограниченной ответственностью "Оконная торговая компания "Альянс" ', '680509, Хабаровский край, Хабаровский район, с.Ильинка, ул. Совхозная, д.31Л', '272001001', '2720048120'),
(14, 'ИП Лабузов С. А.', 'Индивидуальный предприниматель Лабузов Сергей Анатольевич', '672018, г.Чита, ул.Звездная 9, кв.40', '', '753700004575'),
(15, 'ИП  Грудин А. И. ', 'Индивидуальный предприниматель Грудин Александр Иванович', '692900 Приморский край г. Находка ул. Владивостокская 13-9', '', '250800701860'),
(16, 'ООО  "Сибирский комфорт"', 'Общество с ограниченной ответственностью "Сибирский комфорт"', '630534, . Новосибирская обл., дп.Мочище, ул. Шоссейная,21', '543301001', '5433186410'),
(17, 'ООО "Грейнрус"', 'Общество с ограниченной ответственностью "Грейнрус"', '119021, г. Москва, ул. Россолимо, д.17, стр. 2', '770401001', '7705742540'),
(18, 'ООО "Зенит"', 'Общество с ограниченной ответственностью "Зенит"', '664037, г. Иркутск,  ст. Батарейная, строение 1', '381001001', '3810052323'),
(19, 'ООО "СЛАТА"', 'Общество с ограниченной ответственностью "СЛАТА"', '664007, г. Иркутск, ул. Поленова 18 а, офис 210', '384901001', '3809019836'),
(20, 'ООО "Инком энтерпрайз"', 'Общество с ограниченной ответственностью "Инком энтерпрайз"', '672043, Забайкальский край, Читинский р-н, с. Преображенка, ул. Арахлейская, дом № 4Б', '752401001', '7524013169'),
(21, 'ООО "Альянс Терма"', 'Общество с ограниченной ответственностью "Альянс Терма"', '142000, Московская обл, Домодедово г, Северный мкр, Каширское ш, дом № 7', '500901001', '5009078265'),
(22, 'ООО «Торговый Дом «Восток»', 'Общество с ограниченной ответственностью "Торговый Дом «Восток"', '680032, г.Хабаровск, пер. Производсвенный, дом № 12', '272401001', '2724157137'),
(23, 'ООО "Вектор"', 'Общество с ограниченной ответственностью "Вектор"', '664053, г. Иркутск, ул. Баумана, 237/1', '3810329543', '381001001'),
(24, '', '', '', '', ''),
(25, 'ООО "Аренагрупп"', 'Общество с ограниченной ответственностью "Аренагрупп"', '101000, г.Москва ул.Мясницкая, дом 30/1/2 стр.2', '770101001', '7701950740'),
(26, 'ООО "РЗЛК"', 'Общество с ограниченной ответственностью "РЗЛК"', '140732, Россия,  Московская область, г. Рошаль, ул. Косякова, д. 13', '505501001', '5049020783'),
(27, 'ООО "МТП-ЛТЛ"', 'Общество с ограниченной ответственностью "МТП-ЛТЛ"', 'Юридический адрес: 109444, РФ, Москва г, Ферганская, д. 12.', '772101001', '7721746951'),
(30, 'ООО «ТК ЖелдорАльянс»', 'Общество с ограниченной ответственностью «Транспортная компания «ЖелдорАльянс»', '107113, г. Москва, ул. Сокольнический вал, д. 37/10, стр. 6', '771801001', '7718966361 '),
(29, 'ООО «ТВ» Экспедиторская  Компания', 'Общество с ограниченной ответственностью «ТВ» Экспедиторская  Компания', '115230, г. Москва, Электролитный проезд, дом 10', '7725668775', '772601001'),
(31, 'ООО ТК «Альтернатива»', 'Общество с ограниченной ответственностью Транспортная компания «Альтернатива» ', '630091, г. Новосибирск, ул. Советская, д. 52', '540601001', '5406529588');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
`id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Администраторы');

-- --------------------------------------------------------

--
-- Структура таблицы `group_access`
--

CREATE TABLE `group_access` (
`id` int(5) NOT NULL,
  `group_id` int(5) NOT NULL,
  `action` varchar(20) NOT NULL,
  `mod` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `group_access`
--

INSERT INTO `group_access` (`id`, `group_id`, `action`, `mod`) VALUES
(1, 1, 'add', 'bills');

-- --------------------------------------------------------

--
-- Структура таблицы `modules`
--

CREATE TABLE `modules` (
`id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `modules`
--

INSERT INTO `modules` (`id`, `name`, `active`) VALUES
(1, 'bills', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `modules_menu`
--

CREATE TABLE `modules_menu` (
`id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `label` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `modules_menu`
--

INSERT INTO `modules_menu` (`id`, `mod_id`, `label`, `link`, `position`) VALUES
(1, 1, 'Новый счет', '?mod=bills&action=add', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `providers`
--

CREATE TABLE `providers` (
`id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `provider_full_name` varchar(150) NOT NULL,
  `provider_bik` varchar(20) NOT NULL,
  `provider_bank` varchar(150) NOT NULL,
  `provider_ks` varchar(100) NOT NULL,
  `provider_rs` varchar(100) NOT NULL,
  `provider_inn` varchar(20) NOT NULL,
  `provider_kpp` varchar(20) NOT NULL,
  `provider_director` varchar(50) NOT NULL,
  `provider_booker` varchar(50) NOT NULL,
  `provider_adress` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `providers`
--

INSERT INTO `providers` (`id`, `name`, `provider_full_name`, `provider_bik`, `provider_bank`, `provider_ks`, `provider_rs`, `provider_inn`, `provider_kpp`, `provider_director`, `provider_booker`, `provider_adress`) VALUES
(2, 'ООО "Делфис"', 'Общество с ограниченной ответственностью "Делфис"', '044585238', 'ЗАО АКБ "АПАБАНК" г. Москва', '30101810200000000238', '40702810500000001027', '7722807999', '772201001', 'Даугуль Н.В.', 'Антошин В.В.', '109125, г. Москва, Волгоградский пр-т, дом 63, пом. №34, комн. 23');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
`id` int(10) NOT NULL,
  `req_number` int(10) NOT NULL,
  `req_client` int(50) NOT NULL,
  `req_am` int(25) NOT NULL,
  `req_shipper` text NOT NULL,
  `req_consignee` text NOT NULL,
  `req_cargo_name` text NOT NULL,
  `req_cargo_weight` text NOT NULL,
  `req_cargo_size` text NOT NULL,
  `req_executor` int(50) NOT NULL,
  `req_driver` int(5) NOT NULL,
  `req_note` text NOT NULL,
  `req_time` text NOT NULL,
  `req_date` date NOT NULL,
  `req_expedition` int(1) NOT NULL,
  `req_cost` int(10) NOT NULL,
  `req_start` int(5) NOT NULL,
  `req_finish` int(5) NOT NULL,
  `req_km` int(5) NOT NULL,
  `req_executor_cost` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `sotrudniki`
--

CREATE TABLE `sotrudniki` (
`id` int(10) NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `sotrudniki`
--

INSERT INTO `sotrudniki` (`id`, `name`, `about`, `photo`) VALUES
(2, 'Иванов Иван', 'Здесь должна быть биография.', ''),
(3, 'Иванов Иван', 'Здесь должна быть биография.', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
`id` int(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `group` int(3) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group`) VALUES
(1, 'admin', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contragents`
--
ALTER TABLE `contragents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_access`
--
ALTER TABLE `group_access`
 ADD PRIMARY KEY (`id`), ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules_menu`
--
ALTER TABLE `modules_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
 ADD PRIMARY KEY (`id`), ADD KEY `req_client` (`req_client`);

--
-- Indexes for table `sotrudniki`
--
ALTER TABLE `sotrudniki`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `group` (`group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contragents`
--
ALTER TABLE `contragents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `group_access`
--
ALTER TABLE `group_access`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modules_menu`
--
ALTER TABLE `modules_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sotrudniki`
--
ALTER TABLE `sotrudniki`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`req_client`) REFERENCES `providers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
