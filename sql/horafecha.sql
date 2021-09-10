-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-09-2021 a las 02:16:50
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horafecha`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_de_entradas`
--

DROP TABLE IF EXISTS `fecha_de_entradas`;
CREATE TABLE IF NOT EXISTS `fecha_de_entradas` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `hora_entrada` time NOT NULL DEFAULT current_timestamp(),
  `usuarios` varchar(200) NOT NULL,
  `servicio` varchar(200) NOT NULL,
  `dias` varchar(200) NOT NULL,
  `horasegundo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha_de_entradas`
--

INSERT INTO `fecha_de_entradas` (`id_usuarios`, `hora_entrada`, `usuarios`, `servicio`, `dias`, `horasegundo`) VALUES
(106, '09:38:37', 'josue', '', '04-09-21', '21-09-04 09:38:37'),
(107, '09:00:45', 'josue', '', '04-09-21', '21-09-04 09:00:45'),
(108, '09:50:25', 'josue', 'congreso 180', '04-09-21', '452985.84'),
(109, '09:45:00', 'josue', 'congreso 180', '06-09-21', '453033.75'),
(110, '09:19:38', 'josue', 'congreso 180', '06-09-21', '453033.33'),
(111, '09:40:00', 'josue', 'congreso 180', '06-09-21', '453033.67');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_de_salidas`
--

DROP TABLE IF EXISTS `fecha_de_salidas`;
CREATE TABLE IF NOT EXISTS `fecha_de_salidas` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `hora_salida` time NOT NULL DEFAULT current_timestamp(),
  `usuario` varchar(200) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `hora_Segundo_Salida` varchar(200) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha_de_salidas`
--

INSERT INTO `fecha_de_salidas` (`id_usuarios`, `hora_salida`, `usuario`, `servicios`, `dia`, `hora_Segundo_Salida`) VALUES
(106, '09:38:37', 'josue', '', '04-09-21', '21-09-04 09:38:37'),
(105, '09:30:13', 'josue', '', '04-09-21', '21-09-04 09:30:13'),
(107, '09:44:45', 'josue', '', '04-09-21', '21-09-04 09:44:45'),
(108, '18:27:30', 'josue', '', '06-09-21', '453042.46'),
(109, '18:28:47', 'josue', '', '06-09-21', '453042.48'),
(110, '18:30:47', 'josue', 'congreso 180', '06-09-21', '453042.51'),
(111, '18:30:00', 'josue', '', '06-09-21', '453042.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` varchar(200) NOT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
