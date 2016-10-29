-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2016 г., 01:35
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `marinka-newer`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` text,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `date_modified`) VALUES
(19, 39, 'User', 'sss@fsdf.dd', 'perfect', '2016-10-29 09:32:30'),
(20, 39, 'qwewqe', 'qeqewq@ada.asd', 'fefwefiweiwejfwef\r\nwefwefwe\r\newffefef', '2016-10-29 10:04:32'),
(21, 39, 'sfs', 'sds@dsd.ffsfssd', 'sdfsfsfd', '2016-10-29 11:46:09'),
(22, 39, 'sfs', 'sds@dsd.ffsfssd', 'sdfsfsfd', '2016-10-29 11:47:59'),
(23, 39, 'asd', 'sds@sdds.sss', 'sdfsfsdfds', '2016-10-29 11:48:18'),
(24, 39, 'asdasd', 'sds@sdds.ssssdfsdf', 'dfdsfsdf', '2016-10-29 11:53:24'),
(25, 39, 'sfsd', 'ssd@dsad.ss', 'dfdf', '2016-10-29 11:55:06'),
(27, 39, 'sdfsdfsdf', 'sadsda@sfsd.dffd', 'sfsfsdf', '2016-10-30 12:57:36'),
(28, 39, 'dvsvsd', 'vdv@sdds.dcd', 'svdvsdv', '2016-10-30 01:27:36');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date_modified`) VALUES
(38, 'ascasc', '<p>csddscsdc</p>\r\n', '2016-10-29 11:32:14'),
(39, 'post 1', '<p><img alt="" src="/ckfinder/userfiles/images/asus_rog_9_by_thach26-d5zms9f.png" style="float:left; height:182px; margin:20px; width:324px" /></p>\r\n\r\n<h3><span style="font-size:10px">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</span></h3>\r\n', '2016-10-30 01:29:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
