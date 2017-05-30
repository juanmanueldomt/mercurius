-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2017 a las 20:10:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mercurius`
--
CREATE DATABASE IF NOT EXISTS `mercurius` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mercurius`;

DELIMITER $$
--
-- Funciones
--
DROP FUNCTION IF EXISTS `INSERT_NOTICIA`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `INSERT_NOTICIA` (`TIT` VARCHAR(45), `AUT` VARCHAR(45), `CAR` TEXT, `CAB` TEXT, `PORT` TEXT, `FECH` DATETIME, `CONT` LONGTEXT) RETURNS INT(14) BEGIN
	DECLARE ID INT(14);
	INSERT INTO NOTICIA(TITULO,AUTOR,CARGO,CABECERA,PORTADA,FECHA,CONTENIDO) VALUES(TIT,AUT,CAR,CAB,PORT,FECH,CONT);
	set ID = (SELECT ID_NOTICIA FROM NOTICIA WHERE TITULO=TIT AND AUTOR=AUT AND CARGO=CAR AND CABECERA=CAB AND PORTADA = PORT AND FECHA=FECH );
    RETURN ID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviso`
--

DROP TABLE IF EXISTS `AVISO`;
CREATE TABLE IF NOT EXISTS `AVISO` (
  `ID_AVISO` int(11) NOT NULL AUTO_INCREMENT,
  `URL` text NOT NULL,
  PRIMARY KEY (`ID_AVISO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aviso`
--

INSERT INTO `AVISO` (`ID_AVISO`, `URL`) VALUES
(1, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE02-MAY-24.png'),
(2, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE-OCT-2.png'),
(3, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE-OCT-4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

DROP TABLE IF EXISTS `ETIQUETA`;
CREATE TABLE IF NOT EXISTS `ETIQUETA` (
  `ID_NOTICIA` int(11) NOT NULL,
  `ETIQUETA` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_NOTICIA`,`ETIQUETA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `ETIQUETA` (`ID_NOTICIA`, `ETIQUETA`) VALUES
(46, 'Administrativo'),
(47, 'Administrativo'),
(48, 'Academico'),
(48, 'Administrativo'),
(48, 'DirecciÃ³n'),
(49, 'Academico'),
(49, 'Administrativo'),
(49, 'Cultural'),
(49, 'Deportivo'),
(49, 'DirecciÃ³n'),
(49, 'InvestigaciÃ³n'),
(50, 'Academico'),
(50, 'Administrativo'),
(50, 'Cultural'),
(50, 'Direccion'),
(51, 'Administrativo'),
(52, 'Direccion'),
(53, 'Academico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `NOTICIA`;
CREATE TABLE IF NOT EXISTS `NOTICIA` (
  `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` text NOT NULL,
  `AUTOR` varchar(45) DEFAULT NULL,
  `CARGO` text NOT NULL,
  `FECHA` datetime NOT NULL,
  `PORTADA` tinytext,
  `CABECERA` varchar(100) NOT NULL,
  `CONTENIDO` longtext,
  PRIMARY KEY (`ID_NOTICIA`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `NOTICIA` (`ID_NOTICIA`, `TITULO`, `AUTOR`, `CARGO`, `FECHA`, `PORTADA`, `CABECERA`, `CONTENIDO`) VALUES
(1, 'HOLA MUNDO', 'Juan Manuel', '', '2015-06-18 13:01:06', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcOWynNfNB2v3PzZlUjddkZrB_4H2DKd4BQGxrj4TksFBa0-67', '', 'KJASJHDGAJSHGD '),
(2, 'asasd', '1', '', '2017-02-27 22:27:01', 'https://c1.staticflickr.com/1/108/287657754_b1141164ea_z.jpg?zz=1', '', '<p>asdasdasd</p>'),
(3, 'asdasd', '1', '', '2017-02-27 22:30:03', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2umOgbwrJ7AT7x90Xkb4T5sVSIxccPMfOMv_hEZ8rICoDrMypfA', '', '<p>asdsad</p>'),
(4, 'asdasd', '1', '', '2017-02-27 22:30:34', 'http://www.cultura.ipn.mx/PublishingImages/Orquesta/OSIPN20162.jpg', '', '<p>asdasdasd</p>'),
(5, 'asdasd', '1', '', '2017-02-27 22:30:53', '0', '', '<p>adsasd</p>'),
(6, 'asdasd', '1', '', '2017-02-27 22:32:19', '0', '', '<p>asdasdasd</p>'),
(7, 'asdasd', '1', '', '2017-02-27 22:41:01', '0', '', '<p>asdasdasdasd</p>'),
(8, 'asdasd', '1', '', '2017-02-27 22:41:12', '0', '', '<p>asdasdasdasd</p>'),
(9, 'asdasd', '1', '', '2017-02-27 22:43:20', '0', '', '<p>asdasdasdasd</p>'),
(10, 'HOLA asdasdMUNDO', 'YOasdsad', '', '2015-06-18 13:01:06', '0', '', 'KJASJHDGAJSHGD '),
(11, 'hdfgfgh', '1', '', '2017-02-27 22:45:05', '0', '', '<p>fghfghfgh</p>'),
(12, 'sdfsdfsdfsdf', '1', '', '2017-02-27 22:47:13', '0', '', '<p>sdfsdfsdfsdf</p>'),
(13, 'asdasd', '1', '', '2017-02-27 22:53:53', '0', '', '<p>asdasdasd</p>'),
(14, 'asdasd', '1', '', '2017-02-27 22:54:43', '0', '', '<p>asdasdasd</p>'),
(15, 'JOse', '1', '', '2017-02-27 22:56:46', '0', '', '<p>asdasdasd</p>'),
(17, 'HOLA sdfasdasdMUNDO', 'YOassfsdfdsad', '', '2015-06-18 13:01:06', '0', '', 'KJASJHDGAJSHGD '),
(18, 'ASDASD', '1', '', '2017-02-27 23:03:53', '0', '', '<p>ASDASDASDASD AS D</p>'),
(19, 'ASDKJG', '1', '', '2017-02-28 09:54:32', '0', '', '<p>KGASKJHDGKASD</p>'),
(20, 'Juan Manuel Dominguez Tlapale', '1', '', '2017-02-28 09:57:03', '0', '', '<p>bahsdabsdk askjd kjadkjas dkjd kd ksh dakjhd kjh ksjd hksd jg duyawgydvasd&nbsp;</p>'),
(21, 'Jose aolsidhk', '1', '', '2017-02-28 10:00:31', '0', '', '<p>hjsagdjhagsdkj</p>\r\n<p>&nbsp;</p>'),
(22, 'Jose aolsidhk', '1', '', '2017-02-28 10:00:55', '0', '', '<p>hjsagdjhagsdkj</p>\r\n<p>&nbsp;</p>'),
(23, 'Jose aolsidhk', '1', '', '2017-02-28 10:04:05', '0', '', '<p>hjsagdjhagsdkj</p>\r\n<p>&nbsp;</p>'),
(24, 'asdasd', '1', '', '2017-02-28 10:05:47', '0', '', '<p>dasdasdasd</p>'),
(25, 'Juan lkaskjdgkdh', '1', '', '2017-02-28 10:10:23', '0', '', '<p>lhkjasgkdgasld}</p>\r\n<p>&nbsp;</p>'),
(26, 'asdJuan', '1', '', '2017-02-28 10:11:25', '0', '', '<p>alshdmhasd asj dsgdj hsdjh vsd sd sd&nbsp;</p>'),
(27, 'TITULO', 'AUTOR', '', '2016-01-06 12:00:00', '0', '', 'hOLA MUNDO'),
(28, 'Juan Manuel', '1', '', '2017-02-28 10:19:36', '0', '', '<p>aksdhagmas sa gdjasgd jsgd jagsdj dasdas d</p>'),
(29, 'asaS', '1', '', '2017-02-28 10:23:49', '0', '', '<p>ASASAS</p>'),
(30, 'asdfasdasd', '1', '', '2017-02-28 10:25:58', '0', '', '<p>asdasdasd sad sd d sd s d</p>'),
(31, 'asdfasdasd', '1', '', '2017-02-28 10:27:03', '0', '', '<p>asdasdasd sad sd d sd s d</p>'),
(32, 'asdfasdasd', '1', '', '2017-02-28 10:29:06', '0', '', '<p>asdasdasd sad sd d sd s d</p>'),
(33, 'asdfasdasd', '1', '', '2017-02-28 10:29:58', '0', '', '<p>asdasdasd sad sd d sd s d</p>'),
(34, 'asdfasdasd', '1', '', '2017-02-28 10:30:49', '0', '', '<p>asdasdasd sad sd d sd s d</p>'),
(35, 'asdfasdasd', '1', '', '2017-02-28 10:33:30', '0', '', '<p>asdasdasd sad sd d sd s d</p>'),
(36, 'asdasd', '1', '', '2017-02-28 10:34:29', '0', '', '<p>asdasdasd</p>'),
(37, '', '1', '', '2017-02-28 10:40:45', '0', '', ''),
(38, 'Titulo 1 ', '1', '', '2017-02-28 10:40:56', '0', '', '<p>akjsd asgdsgd nasg dasdgkjsd sd as d</p>'),
(39, 'Juan Manuel', '1', '', '2017-02-28 10:41:19', '0', '', '<p>aklsd aksb djasb dasdbsd asds d asd</p>'),
(40, 'dfghdgfhf', '1', '', '2017-02-28 10:42:24', '0', '', '<p>ghgfdhgfdh</p>'),
(41, 'asdasd', '1', '', '2017-02-28 10:44:59', '0', '', '<p>asdasdgffgd f g fg dfg&nbsp;</p>'),
(42, 'Juan Manuel Dominguez Tlapaler', '1', '', '2017-02-28 10:47:29', '0', '', '<p>lasksa ajsh dkasjg dksds dsd as d</p>'),
(43, 'asdasdasda', '1', '', '2017-02-28 10:48:03', '0', '', '<p>dasdas d f ass d ds ads</p>'),
(44, 'asdasda', '1', '', '2017-02-28 10:57:52', '0', '', '<p>sdasdasdadasdasd</p>'),
(45, 'dfg fg fg fg fg ', '1', '', '2017-02-28 10:59:01', '0', '', '<p>fg fg dfg dfg dfg fg fg fg df gfg&nbsp;</p>'),
(46, 'dfg fg fg fg fg ', '1', '', '2017-02-28 10:59:21', '0', '', '<p>fg fg dfg dfg dfg fg fg fg df gfg sdf &nbsp;df</p>'),
(47, 'sd ff df df', '1', '', '2017-02-28 11:01:38', '0', '', '<p>df f df sdf sdf g</p>'),
(48, 'Juan manue', '1', '', '2017-02-28 11:05:04', '0', '', '<p>alkjs aksd asd&nbsp;</p>'),
(49, 'Primer Articulo con etiquetas', '1', '', '2017-02-28 11:06:13', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaDKiWWbs7V-eBuk5b1tAEwF0Xu51zDagYAIhJo2zTgqg34GsJ7g', '', '<p>aks dkjsdkb djsd s dsdhjsd hjvsdvhjsd jhsvdjhsv dvs djvsdvkjhsv djhksvd vsdk jhksjhdgjhsgdjhks dhsgd khgsd&nbsp;</p>'),
(50, 'Juan Manuel Dominguez Tlapale', '1', '', '2017-02-28 11:08:32', 'http://static.tvazteca.com/imagenes/2014/39/IPN-aplaza-aplicaci-1945198.jpg', '', '<p>ah kdgsjd jh sgdkgsd hsdjhgsjhd gkjhsgd hjsgd hjsgnjhksg dkjhsgd sgd kjhsd gkjhsdsd s dads&nbsp;</p>'),
(51, 'Administrativo', '1', '', '2017-03-31 10:27:42', 'http://tusbuenasnoticias.com/wp-content/uploads/2017/03/IPN-historia-730x492.jpg', '', '<p>Admini</p>'),
(52, 'Direccion', '1', '', '2017-03-31 10:27:52', 'http://aristeguinoticias.com/wp-content/uploads/2012/10/1-Marcha_IPN-14-ok-PORTADA-854x441.jpg', '', '<p>a</p>'),
(53, 'Academico', '1', '', '2017-03-31 10:28:02', 'http://www.cultura.ipn.mx/PublishingImages/Orquesta/OSIPN20162.jpg', '', '<p>asdasd</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `USUARIO`;
CREATE TABLE IF NOT EXISTS `USUARIO` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDOS` varchar(45) DEFAULT NULL,
  `ROL` varchar(12) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `PASSWORD` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `USUARIO` (`ID_USUARIO`, `NOMBRE`, `APELLIDOS`, `ROL`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Juan Manuel', 'Tlapale', 'EDITOR', 'cronoz.v@gmail.com', 'passw0rd');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `etiqueta`
--
ALTER TABLE `ETIQUETA`
  ADD CONSTRAINT `fk_ETIQUETA_1` FOREIGN KEY (`ID_NOTICIA`) REFERENCES `NOTICIA` (`ID_NOTICIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
