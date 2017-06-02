-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2017 a las 19:37:39
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

DROP TABLE IF EXISTS `AVISO`;
CREATE TABLE IF NOT EXISTS `AVISO` (
  `ID_AVISO` int(11) NOT NULL AUTO_INCREMENT,
  `URL` text NOT NULL,
  PRIMARY KEY (`ID_AVISO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aviso`
--

INSERT INTO `AVISO` (`ID_AVISO`, `URL`) VALUES
(1, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE02-MAY-24.png'),
(2, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE-OCT-2.png'),
(3, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE-OCT-4.png'),
(4, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE02-MAY-24.png'),
(5, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE02-MAY-24.png'),
(6, 'http://www.upiicsa.ipn.mx/Estudiantes/Documents/Gestion-Escolar/Slider-Principal/Avisos/GE02-MAY-24.png');

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
(60, 'Academico'),
(63, 'Academico'),
(63, 'Administrativo'),
(63, 'Direccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `NOTICIA`;
CREATE TABLE IF NOT EXISTS `NOTICIA` (
  `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` text NOT NULL,
  `AUTOR` text NOT NULL,
  `CARGO` text,
  `FECHA` datetime NOT NULL,
  `PORTADA` tinytext,
  `CABECERA` text NOT NULL,
  `CONTENIDO` text NOT NULL,
  PRIMARY KEY (`ID_NOTICIA`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `NOTICIA` (`ID_NOTICIA`, `TITULO`, `AUTOR`, `CARGO`, `FECHA`, `PORTADA`, `CABECERA`, `CONTENIDO`) VALUES
(60, 'Upiicsa presente en los eventos academicos internacionales', 'Dra. Marina Marcelino Aranda', '', '2017-05-30 18:36:40', 'http://www.leanmanufacturinghoy.com/wp-content/uploads/2015/09/conferencia-iese-01.jpg', 'El Seminario Internacional para la investigaciÃ³n en AdministraciÃ³n y Negocios en su cuarta ediciÃ³n...', '<p><img src=\"http://perucatolico.com/wp-content/uploads/2017/05/conferencia-peru-catolico.jpg\" alt=\"\" width=\"1920\" height=\"950\" />El Seminario Internacional para la investigaci&oacute;n en Administraci&oacute;n y Negocios en su cuarta edici&oacute;n se llevo acabo los dias del 22 al 26 de junio de 2015, con el uso de las Tecnologias de Informacion y Comunicaci&oacute;n(TIC en mobilidad de videoconferencia), con el objetivo de difundir los avances de los protocolos de investigacion de los alumnonos participantes en los diversos programas de prosgrado. La finalidad fue compartir sus proyectos, recibir comentarios, aportaciones , inquietudes, incluso, criticas que fortalezcan la generaci&oacute;n de conocimientos nuevos o mencionar su viavilidad y su aplicaci&oacute;n para el veneficio de la sociedad.</p>\n<p>&nbsp;</p>\n<p>El SIIAN cont&oacute; con la prarticipaci&oacute;n de diferentes Instituciones de Educacion Colombiana y Costa Rica; las universidades participantes fueron: el Instituto Tecnol&oacute;gico Superior de Puerto Vallarta, Universidad de Colima, Universidad Nacional del Chaco Austral, Univerdidad del Rosario, la Escuela Nacional de Negocios y la Unidad Profesional Interdisciplinaria de Ingenier&iacute;a y Ciencias Socialaes y Administrativas (UPIICSA) del Instituto Politecnio Nacional con las cuales se busca fortalecer a trav&eacute;s de los diversos puntos de vista de los participantes, la calidad de los programas de posgrado y otorgar una perspectiva internacional que mejore el trabajo que se realiza en las instituciones educativas participantes.</p>\n<p><img src=\"http://www.bigconference.net/wp-content/uploads/2016/04/conferencia.jpg\" alt=\"\" width=\"4137\" height=\"1700\" /></p>\n<p>El protocolo de inaguraci&oacute;n estuvo a cargo del LAI. Jaime Arturo Meneses Galv&aacute;n, Director interino de la UPIICSA, quien destac&oacute; la importacia de la investigacion pra el fortalecimiento de la educaci&oacute;n, el trabajo colaborativo entre instituciones de los paises participantes y su compromiso para imcemtivar la generaci&oacute;n de conocimiento. Asimismo, se cont&oacute; con la presencia del M. en C. Gustavo Marcelino Aranda, la Coordinadora del SIIAN en UPIICSA, la Dra. Claudia Hermandez Herrera, la M. en C. Mar&iacute;a Guadalupe Ogreg&oacute;n Sanchez y los Encargados de las Coordinaciones de las Materias de la UPIICSA.</p>\n<p>&nbsp;</p>\n<p>La agenda del Seminario incluy&oacute; 5 conferencias magistrales, entre las que destaca la participaci&oacute;n por parte de la sede UPIICSA, del Dr. Alejandro D.Camacho Vera, del IPN con el tema \"Desarollo sustentable y negocios.Lecciones de la naturaleza\".Adem&aacute;s 21 ponencias, de las cuales 5 fueronpresentadas por investigadores y alumnos de la UPIICSA, con los temas de empresa familiar, m&eacute;todos para estudiar el posgrado, innovaci&oacute;n en Mexico, factores, motivaciones en las empresas y algoritmos para la aplicaci&oacute;n de ex&aacute;menes.</p>\n<p>El evento concluyo con un mensaje por parte de los diferentes coordinadores de las sedes. Y a nombre de las autoridades de la UPIICSA, la Dra. Marina Marcelino del SIIAN en esta sede, ratific&oacute; el compromiso que tiene el Instituto Politecnico Nacional y la UPIICSA por seguirelevando la cantidad de sus estudios de posgrado.</p>'),
(63, 'Artefactos Explosivos', 'Lic. Horacio Orozco RamÃ­rez', 'Unidad de ProtecciÃ³n Civil', '2017-05-31 17:29:38', 'http://bligoo.com/media/users/1/82460/images/Dibujo.JPG', 'Â¿QuÃ© es un artefacto explosivo improvisado?', '<p class=\"MsoNormal\">&iquest;Qu&eacute; es un artefacto explosivo improvisado?</p>\n<p class=\"MsoNormal\">Un artefacto explosivo improvisado es un dispositivo usado frecuentemente en la guerra no convencional o guerra asim&eacute;trica por fuerzas comando, guerrillas y terrorismo. Se le conoce tambi&eacute;n como bomba caminera, nombre usado por algunos medios period&iacute;sticos para referirse a este tipo de artefactos explosivos.</p>\n<p class=\"MsoNormal\">Los artefactos explosivos han sido utilizados principalmente por grupos subversivos y terroristas en todo el mundo incluyendo M&eacute;xico, son llamados en el campo de explosivos como \"Artefactos Explosivos improvisados\" (A.E.I.). En d&iacute;as pasados la Unidad Interdisciplinaria de Ingenier&iacute;a y Ciencias Sociales y Administrativas realiz&oacute; un simulacro de gabinete de artefacto explosivo cargo del Agrupamiento Fuerza de Tarea \"Zorros\" de la Secretaria de Seguridad Publica, con el objetivo de instruirnos de manera sistem&aacute;tica para salvaguardar la seguridad de cada uno de los que integramos esta comunidad.</p>\n<p class=\"MsoNormal\"><img src=\"https://cdn.oem.com.mx/elsoldemexico/2016/04/simulacro-6.jpg\" alt=\"Simulacro\" width=\"615\" height=\"400\" /></p>\n<p class=\"MsoNormal\">Se destacaron aspectos concernientes en los siguientes &aacute;mbitos:</p>\n<p class=\"MsoNormal\">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Explosivo como arma terrorista.</p>\n<p class=\"MsoNormal\">&nbsp;&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Definici&oacute;n de explosi&oacute;n y efectos que esta causa.</p>\n<p class=\"MsoNormal\">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &iquest;Por qu&eacute; el uso de las bombas?</p>\n<p class=\"MsoNormal\">&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Definici&oacute;n de bomba.</p>\n<p class=\"MsoNormal\">&nbsp;&middot;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Blancos potenciales de ataque terrorista.</p>\n<p class=\"MsoNormal\">&middot; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Veh&iacute;culos bomba &iquest;Por qu&eacute; son utilizados?</p>\n<p class=\"MsoNormal\">&nbsp;Es necesario recordar, que podemos ser vulnerables a una infiltraci&oacute;n por parte de elementos externos que quieran irrumpir la integridad de los miembros de esta casa de estudios. Seamos conscientes de la responsabilidad de este suceso y en el sistema que se requiera ser&aacute; necesario apoyar y tomar todas esas medidas precautorias.</p>\n<p>&nbsp;</p>\n<p class=\"MsoNormal\">El tocar estos temas es importante, porque nos prepara para cualquier evento de car&aacute;cter terrorista, nos ense&ntilde;a que debemos aprender a valorar primero nuestra vida antes que las cosas materiales, a ciencia cierta no estamos exentos de soportar un ataque y por ello es necesario saber c&oacute;mo actuar en caso de ser necesario.</p>'),
(64, 'La maestrÃ­a en ciencias en estudios interdisciplinaria para pÃ©quelas y medianas empresas obtiene el reconocimiento como Programa Nacional de Posgrados de Calidad (PNPC).', 'M. en C. Dania RamÃ­rez Herrera', 'Coordinadora del Programa de MaestrÃ­a en PyMES', '2017-05-31 18:35:45', 'https://cdn.oem.com.mx/elsoldecuernavaca/2017/03/conacyt.png', 'La Unidad Profesional de IngenierÃ­a y Ciencias Sociales y Administrativas (UPIICSA), y la SecciÃ³n...', '<p>La Unidad Profesional de Ingenier&iacute;a y Ciencias Sociales y Administrativas (UPIICSA), y la Secci&oacute;n de Estudios de Posgrado e Investigaci&oacute;n (SEPI), se congratulan por el reciente logro obtenido por los profesores del N&uacute;cleo Acad&eacute;mico B&aacute;sico y alumnos de la Maestr&iacute;a en Ciencias en Estudios Interdisciplinarios para Peque&ntilde;as y Medianas Empresas (Maestr&iacute;a en PyMES) bajo la Coordinaci&oacute;n de la M. en C. Dania Ram&iacute;rez Herrera, por ser uno de los dos programas de maestr&iacute;a en desarrollo, modalidad presencial, del Instituto Polit&eacute;cnico Nacional reconocidos en 2015 por el Consejo Nacional de Ciencias y Tecnolog&iacute;a (CONACYT) y la Secretarias de Educaci&oacute;n P&uacute;blica (SEP) como Programa Nacional de Posgrados de Calidad (PNPC).</p>\r\n<p class=\"MsoNormal\">&nbsp;<img src=\"http://www.fod.uanl.mx/wp-content/uploads/2015/02/pnpc-480.preview.jpg\" alt=\"CONACYT\" width=\"230\" height=\"452\" /></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">Resalta de entre otros programas, su corte cient&iacute;fico e interdisciplinario, investiga las causas que dan origen a la riqueza y trabajo de nuestra naci&oacute;n, desde estas perspectivas. Pretende explicar el por qu&eacute; crece la econom&iacute;a de estas empresas o el por qu&eacute; no, el c&oacute;mo influyen en el gobierno, la sociedad, los mercados y las instituciones de educaci&oacute;n, y c&oacute;mo pueden resolverse algunos problemas de diversa &iacute;ndole que aquejan a estos entes econ&oacute;micos que son tan importantes para el pa&iacute;s, porque son la principal fuente de sustento econ&oacute;mico, productivo y laboral de las familias mexicanas.</p>'),
(66, 'Panel \"El deporte como parte de la formaciÃ³n integral\"', 'Prof. Roberto A. ServarÃ­o Canestrari', 'Entrenador en jefe del centro de entrenamiento de alto rendimiento de remo del IPN-UPIICSA', '2017-05-31 19:05:27', 'http://www.diariodearousa.com/media/diariodearousa/images/2014/08/16/2014081602252786027.jpg', 'El moderador entrevisto al entrenador de remo en el IPN...', '<p>En este panel, el moderador entrevist&oacute; al entrenador de remo en el IPN, quien permanece en el pa&iacute;s y en la instituci&oacute;n desde hace 2 a&ntilde;os. Acto seguido entrevisto a dos deportistas de alto rendimiento en remo, ganadores de medallas de oro, con &eacute;xitos en Guadalajara, Alemania, Canad&aacute; y Holanda entre otros pa&iacute;ses. Los tres entrevistados concidieron en expresar la importancia del deporte en la formaci&oacute;n integral de la persona, proporcionado a la persona que lo practica la fortaleza para seguir adelante cuando se fracasa. Esto, tanto en el deporte como en la vida.&nbsp;</p>\r\n<p><img src=\"http://xn--remosantoa-19a.com/wp-content/uploads/2016/08/toni_montenegro_entrenador_santona_club_remo.jpg\" alt=\"Ganadores\" width=\"630\" height=\"419\" /></p>\r\n<p>A la pregunta &iquest;Cu&aacute;les son las &aacute;reas de oportunidad que los estudiantes de UPIICSA tienen en el deporte?</p>');

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
  ADD CONSTRAINT `fk_ETIQUETA_1` FOREIGN KEY (`ID_NOTICIA`) REFERENCES `NOTICIA` (`ID_NOTICIA`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
