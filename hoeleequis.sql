-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 20:04:33
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hoeleequis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_contenido` varchar(140) NOT NULL,
  `tc_emisor` varchar(111) NOT NULL,
  `tc_receptor` varchar(111) NOT NULL,
  `tc_fecha` varchar(111) NOT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`tc_id`, `tc_contenido`, `tc_emisor`, `tc_receptor`, `tc_fecha`) VALUES
(1, 'HOLA JORGE', 'carlos8', 'jorge3', '26/10/2014 09:10 PM'),
(2, 'hola carlos, todo bien?', 'jorge3', 'carlos8', '26/10/2014 09:11 PM'),
(3, 'es re goma jorge', 'carlos8', 'julio5', '26/10/2014 09:20 PM'),
(7, 'GAY', 'carlos8', 'carlos8', '27/10/2014 12:48 AM'),
(8, 'sos un careta', 'jorge3', 'carlos8', '04/11/2014 06:30 PM'),
(9, 'QUe tanto la boqueas de atras?', 'jorge3', 'carlos8', '06/11/2014 06:22 PM'),
(10, 'Mi apellido es ho', 'juanho', 'julio5', '19/11/2014 10:40 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `tf_id` int(11) NOT NULL AUTO_INCREMENT,
  `tf_ttid` int(11) NOT NULL,
  `tf_favoriteador` varchar(55) NOT NULL,
  PRIMARY KEY (`tf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`tf_id`, `tf_ttid`, `tf_favoriteador`) VALUES
(19, 3, 'jorge3'),
(20, 1, 'carlos8'),
(21, 3, 'carlos8'),
(22, 3, 'carlos8'),
(23, 11, 'julio5'),
(24, 12, 'julio5'),
(25, 6, 'jorge3'),
(26, 13, 'jorge3'),
(27, 12, 'carlos8'),
(28, 21, 'carlos8'),
(29, 23, 'carlos8'),
(30, 25, 'carlos8'),
(31, 28, 'jorge3'),
(32, 31, 'jorge3'),
(33, 38, 'sandro'),
(34, 15, 'sandro'),
(35, 5, 'sandro'),
(36, 14, 'sandro'),
(37, 16, 'sandro'),
(38, 4, 'sandro'),
(39, 42, 'elCarnicero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguidores`
--

CREATE TABLE IF NOT EXISTS `seguidores` (
  `ts_id` int(11) NOT NULL AUTO_INCREMENT,
  `ts_seguidor` varchar(111) NOT NULL,
  `ts_seguido` varchar(111) NOT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `seguidores`
--

INSERT INTO `seguidores` (`ts_id`, `ts_seguidor`, `ts_seguido`) VALUES
(7, 'jorge3', 'carlos8'),
(8, 'jorge3', 'julio5'),
(12, 'carlos8', 'carlos8'),
(13, 'carlos8', 'jorge3'),
(14, 'julio5', 'jorge3'),
(15, 'juanho', 'julio5'),
(16, 'juanho', 'julio5'),
(17, 'pablo1407', 'jorge3'),
(18, 'pablo1407', 'julio5'),
(19, 'pablo1407', 'octavio8'),
(20, 'sandro', 'jorge3'),
(21, 'sandro', 'julio5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tweets`
--

CREATE TABLE IF NOT EXISTS `tweets` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `tt_usuario` varchar(55) NOT NULL,
  `tt_contenido` text NOT NULL,
  `tt_retwits` int(11) NOT NULL,
  `tt_favoritos` int(11) NOT NULL,
  `tt_fecha` varchar(155) NOT NULL,
  PRIMARY KEY (`tt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `tweets`
--

INSERT INTO `tweets` (`tt_id`, `tt_usuario`, `tt_contenido`, `tt_retwits`, `tt_favoritos`, `tt_fecha`) VALUES
(2, 'jorge3', 'hola mundo', 3, 7, '23/09/2014 09:10 PM'),
(4, 'jorge3', 'ME GUSTA EL JAMON', 0, 1, '28/10/2014 08:43 PM'),
(5, 'jorge3', 'ME GUSTA LA ENSALADA', 0, 1, '28/10/2014 08:43 PM'),
(6, 'jorge3', 'JORGE ES BIEN MACHO', 0, 1, '28/10/2014 08:44 PM'),
(7, 'jorge3', 'DOGE ES COOL', 0, 0, '28/10/2014 08:44 PM'),
(8, 'carlos8', 'la verdad es que es re careta', 0, 0, '28/10/2014 08:44 PM'),
(9, 'carlos8', 'mal humor x10\r\n', 0, 0, '28/10/2014 08:45 PM'),
(10, 'carlos8', '-10 la wacha esta', 0, 0, '28/10/2014 08:45 PM'),
(11, 'carlos8', 'al parque a fumigar 1', 0, 1, '28/10/2014 08:45 PM'),
(12, 'carlos8', 're piola en el parque pensando como fui tan gil ', 1, 2, '28/10/2014 08:45 PM'),
(13, 'julio5', 'la verdad es que son todos putos', 1, 1, '28/10/2014 08:46 PM'),
(14, 'julio5', 'este ho y este medrano dejan siempre todo para el final. por esos tienen previas', 0, 1, '28/10/2014 08:49 PM'),
(15, 'julio5', 'mangos de giles', 0, 1, '28/10/2014 08:50 PM'),
(16, 'julio5', 'aguante el termidor vieja no me importa nada', 0, 1, '28/10/2014 08:50 PM'),
(17, 'julio5', 'y si loco manaos y nada mas', 1, 0, '28/10/2014 08:50 PM'),
(18, 'DE julio5 RT por carlos8', 'y si loco manaos y nada mas', 0, 0, 'tuitiado 28/10/2014 08:50 PM RT 28/10/2014 09:10 PM'),
(19, 'DE jorge3 RT por carlos8', 'hola mundo', 1, 0, 'tuitiado 23/09/2014 09:10 PM RT 30/10/2014 06:40 PM'),
(20, 'DE carlos8 RT por carlos8', 're piola en el parque pensando como fui tan gil ', 0, 0, 'tuitiado 28/10/2014 08:45 PM RT 04/11/2014 06:37 PM'),
(21, 'carlos8', 'algo', 2, 1, '04/11/2014 06:41 PM'),
(22, 'DE carlos8 RT por carlos8', 'algo', 0, 0, 'tuitiado 04/11/2014 06:41 PM RT 04/11/2014 06:41 PM'),
(23, 'carlos8', 'CACA', 1, 1, '04/11/2014 06:44 PM'),
(24, 'DE carlos8 RT por carlos8', 'CACA', 0, 0, 'tuitiado 04/11/2014 06:44 PM RT 04/11/2014 06:47 PM'),
(25, 'carlos8', 'no puedo escribir 1 tweets?', 1, 1, '04/11/2014 08:17 PM'),
(26, 'DE carlos8 RT por carlos8', 'no puedo escribir 1 tweets?', 0, 0, 'tuitiado 04/11/2014 08:17 PM RT 04/11/2014 08:17 PM'),
(30, 'julio5', 'aguante tu caballlo?', 2, 0, '19/11/2014 08:10 PM'),
(31, 'DE carlos8 RT por jorge3', 'algo', 0, 1, 'tuitiado 04/11/2014 06:41 PM RT 19/11/2014 10:13 PM'),
(32, 'jorge3', 'jaajajja', 1, 0, '19/11/2014 10:32 PM'),
(33, 'juanho', 'mi nombre es juan y mi apellido es ho', 0, 0, '19/11/2014 10:39 PM'),
(34, 'juanho', 'Carreo gente', 0, 0, '19/11/2014 10:39 PM'),
(38, 'jorge3', 'vos tenes que creer', 0, 1, '25/11/2014 06:39 PM'),
(39, 'DE julio5 RT por sandro', 'la verdad es que son todos putos', 0, 0, 'tuitiado 28/10/2014 08:46 PM RT 25/11/2014 07:48 PM'),
(40, 'DE julio5 RT por sandro', 'aguante tu caballlo?', 0, 0, 'tuitiado 19/11/2014 08:10 PM RT 25/11/2014 07:48 PM'),
(41, 'sandro', 'Medrano toma colegios ojo', 0, 0, '25/11/2014 07:48 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `tu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tu_usuario` varchar(30) NOT NULL,
  `tu_contrasena` varchar(30) NOT NULL,
  `tu_mail` varchar(30) NOT NULL,
  `tu_nombre` varchar(55) NOT NULL,
  `tu_apellido` varchar(55) NOT NULL,
  `tu_ano` int(11) NOT NULL,
  `tu_imagen` varchar(55) NOT NULL,
  `tu_seguidores` int(22) NOT NULL,
  `tu_siguiendo` int(22) NOT NULL,
  `tu_estado` varchar(140) NOT NULL,
  PRIMARY KEY (`tu_id`),
  UNIQUE KEY `tu_usuario` (`tu_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tu_id`, `tu_usuario`, `tu_contrasena`, `tu_mail`, `tu_nombre`, `tu_apellido`, `tu_ano`, `tu_imagen`, `tu_seguidores`, `tu_siguiendo`, `tu_estado`) VALUES
(1, 'jorge3', 'hoen4', 'jorger@tuhna.com', 'jorge', 'ars', 1988, 'komander.jpg', 4, 2, 'MANAOS TE DA PODER'),
(2, 'carlos8', 'jose', 'tuabuela@tutia.com', 'carlos', 'perez', 1901, 'carlos.jpg', 2, 2, 'de mi esposa gricelda :3'),
(6, 'julio5', 'hoen5', 'tuhna@hotmail.com', 'julio', 'pasadore', 1988, '408210_431269523575078_1592065961_n.jpg', 5, 1, 'Pan :3'),
(8, 'Juanho', 'juanho', 'juan@ho.com', 'Juan', 'Ho', 1947, '1790a44774a2b82bfa636feed6a120df.jpg', 0, 1, 'Me gusta el arroz'),
(9, 'octavio8', 'jose8', 'aasdas@hotmail.com', 'octavio', 'jose', 1940, 'octavio.jpg', 1, 0, 'asdasdsd22213'),
(19, 'pablo1407', '123456', 'xxx@xx.com', 'pablo', 'marin', 1900, '1390543_1403567056543378_1363445063_n.jpg', 0, 1, 'jorge'),
(20, 'sandro', '1234', 'sandro@san.com', 'Sandro', 'Armesto', 1960, 'san.jpg', 0, 2, 'No se'),
(21, 'elCarnicero', '123', 'elcarnicero@hotmail.com', 'Alex', 'Benitez', 1900, 'san.jpg', 0, 0, 'Carnicero');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
