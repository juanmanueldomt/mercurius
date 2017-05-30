-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 20:03:40
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
CREATE DEFINER=`root`@`localhost` FUNCTION `INSERT_NOTICIA` (`TIT` TEXT, `AUT` TEXT, `CAR` TEXT, `CAB` TEXT, `PORT` TEXT, `FECH` DATETIME, `CONT` LONGTEXT) RETURNS INT(14) BEGIN
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

DROP TABLE IF EXISTS `aviso`;
CREATE TABLE IF NOT EXISTS `aviso` (
  `ID_AVISO` int(11) NOT NULL AUTO_INCREMENT,
  `URL` text NOT NULL,
  PRIMARY KEY (`ID_AVISO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aviso`
--

INSERT INTO `aviso` (`ID_AVISO`, `URL`) VALUES
(1, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE02-MAY-24.png'),
(2, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE-OCT-2.png'),
(3, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE-OCT-4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

DROP TABLE IF EXISTS `etiqueta`;
CREATE TABLE IF NOT EXISTS `etiqueta` (
  `ID_NOTICIA` int(11) NOT NULL,
  `ETIQUETA` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_NOTICIA`,`ETIQUETA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `etiqueta` (`ID_NOTICIA`, `ETIQUETA`) VALUES
(60, 'Academico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` text NOT NULL,
  `AUTOR` text NOT NULL,
  `CARGO` text,
  `FECHA` datetime NOT NULL,
  `PORTADA` tinytext,
  `CABECERA` text NOT NULL,
  `CONTENIDO` text NOT NULL,
  PRIMARY KEY (`ID_NOTICIA`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`ID_NOTICIA`, `TITULO`, `AUTOR`, `CARGO`, `FECHA`, `PORTADA`, `CABECERA`, `CONTENIDO`) VALUES
(60, 'Upiicsa presente en los eventos academicos internacionales', 'Dra. Marina Marcelino Aranda', '', '2017-05-30 18:36:40', 'http://www.leanmanufacturinghoy.com/wp-content/uploads/2015/09/conferencia-iese-01.jpg', 'El Seminario Internacional para la investigaciÃ³n en AdministraciÃ³n y Negocios en su cuarta ediciÃ³n...', '<p><img src=\"http://perucatolico.com/wp-content/uploads/2017/05/conferencia-peru-catolico.jpg\" alt=\"\" width=\"1920\" height=\"950\" />El Seminario Internacional para la investigaci&oacute;n en Administraci&oacute;n y Negocios en su cuarta edici&oacute;n se llevo acabo los dias del 22 al 26 de junio de 2015, con el uso de las Tecnologias de Informacion y Comunicaci&oacute;n(TIC en mobilidad de videoconferencia), con el objetivo de difundir los avances de los protocolos de investigacion de los alumnonos participantes en los diversos programas de prosgrado. La finalidad fue compartir sus proyectos, recibir comentarios, aportaciones , inquietudes, incluso, criticas que fortalezcan la generaci&oacute;n de conocimientos nuevos o mencionar su viavilidad y su aplicaci&oacute;n para el veneficio de la sociedad.</p>\r\n<p>&nbsp;</p>\r\n<p>El SIIAN cont&oacute; con la prarticipaci&oacute;n de diferentes Instituciones de Educacion Colombiana y Costa Rica; las universidades participantes fueron: el Instituto Tecnol&oacute;gico Superior de Puerto Vallarta, Universidad de Colima, Universidad Nacional del Chaco Austral, Univerdidad del Rosario, la Escuela Nacional de Negocios y la Unidad Profesional Interdisciplinaria de Ingenier&iacute;a y Ciencias Socialaes y Administrativas (UPIICSA) del Instituto Politecnio Nacional con las cuales se busca fortalecer a trav&eacute;s de los diversos puntos de vista de los participantes, la calidad de los programas de posgrado y otorgar una perspectiva internacional que mejore el trabajo que se realiza en las instituciones educativas participantes.</p>\r\n<p><img src=\"http://www.bigconference.net/wp-content/uploads/2016/04/conferencia.jpg\" alt=\"\" width=\"4137\" height=\"1700\" /></p>\r\n<p>El protocolo de inaguraci&oacute;n estuvo a cargo del LAI. Jaime Arturo Meneses Galv&aacute;n, Director interino de la UPIICSA, quien destac&oacute; la importacia de la investigacion pra el fortalecimiento de la educaci&oacute;n, el trabajo colaborativo entre instituciones de los paises participantes y su compromiso para imcemtivar la generaci&oacute;n de conocimiento. Asimismo, se cont&oacute; con la presencia del M. en C. Gustavo Marcelino Aranda, la Coordinadora del SIIAN en UPIICSA, la Dra. Claudia Hermandez Herrera, la M. en C. Mar&iacute;a Guadalupe Ogreg&oacute;n Sanchez y los Encargados de las Coordinaciones de las Materias de la UPIICSA.</p>\r\n<p>&nbsp;</p>\r\n<p>La agenda del Seminario incluy&oacute; 5 conferencias magistrales, entre las que destaca la participaci&oacute;n por parte de la sede UPIICSA, del Dr. Alejandro D.Camacho Vera, del IPN con el tema \"Desarollo sustentable y negocios.Lecciones de la naturaleza\".Adem&aacute;s 21 ponencias, de las cuales 5 fueronpresentadas por investigadores y alumnos de la UPIICSA, con los temas de empresa familiar, m&eacute;todos para estudiar el posgrado, innovaci&oacute;n en Mexico, factores, motivaciones en las empresas y algoritmos para la aplicaci&oacute;n de ex&aacute;menes.</p>\r\n<p>El evento concluyo con un mensaje por parte de los diferentes coordinadores de las sedes. Y a nombre de las autoridades de la UPIICSA, la Dra. Marina Marcelino del SIIAN en esta sede, ratific&oacute; el compromiso que tiene el Instituto Politecnico Nacional y la UPIICSA por seguirelevando la cantidad de sus estudios de posgrado.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
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

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE`, `APELLIDOS`, `ROL`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Juan Manuel', 'Tlapale', 'EDITOR', 'cronoz.v@gmail.com', 'passw0rd');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD CONSTRAINT `fk_ETIQUETA_1` FOREIGN KEY (`ID_NOTICIA`) REFERENCES `noticia` (`ID_NOTICIA`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
