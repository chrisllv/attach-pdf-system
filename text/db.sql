-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2016 a las 19:01:55
-- Versión del servidor: 5.5.31-1
-- Versión de PHP: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `unicon`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `institucion_id` int(11) NOT NULL,
  `denominacion` varchar(200) NOT NULL,
  `gaceta_registro` varchar(30) DEFAULT NULL,
  `actividad` text,
  `tipo_dependencia` int(11) DEFAULT NULL,
  `nivel_dependencia` int(11) NOT NULL DEFAULT '2',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `condicion_actividad` tinyint(1) NOT NULL DEFAULT '1',
  `codigo_dependencia` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id`, `institucion_id`, `denominacion`, `gaceta_registro`, `actividad`, `tipo_dependencia`, `nivel_dependencia`, `created`, `modified`, `condicion_actividad`, `codigo_dependencia`) VALUES
(1, 1, 'LLENAR', '1', '', 1, 1, '2016-05-06 03:29:48', '2016-05-06 03:29:48', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(350) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`id`, `denominacion`, `created`, `modified`) VALUES
(1, 'LLENAR', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `denominacion`) VALUES
(1, 'ConfiguraciÃ³n y Parametros');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_usuarios`
--

CREATE TABLE IF NOT EXISTS `modulo_usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `modulo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `modulo_usuarios`
--

INSERT INTO `modulo_usuarios` (`id`, `modulo_id`, `usuario_id`, `activo`) VALUES
(1, 1, 1, 1);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dependencia_id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nivel` int(11) NOT NULL DEFAULT '1',
  `email` varchar(100) NOT NULL DEFAULT '',
  `enlinea` int(11) NOT NULL DEFAULT '0',
  `entrada_actualizada` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `nombre_completo` varchar(100) NOT NULL DEFAULT '',
  `cedula_identidad` int(11) NOT NULL DEFAULT '0',
  `dependencia_orig_id` int(11) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `dependencia_id`, `usuario`, `clave`, `created`, `modified`, `nivel`, `email`, `enlinea`, `entrada_actualizada`, `activo`, `nombre_completo`, `cedula_identidad`, `dependencia_orig_id`, `area_id`, `cargo_id`) VALUES
(1, 1, 'pongopa', 'E10ADC3949BA59ABBE56E057F20F883E', '2016-05-31 23:08:36', '0000-00-00 00:00:00', 1, 'juanpacheco@gmail.com', 1, '2016-05-31 23:08:36', 1, 'juan antonio pacheco lugo', 17689743, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zmenus`
--

CREATE TABLE IF NOT EXISTS `zmenus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `modulo_id` int(11) NOT NULL,
  `deno_menu` varchar(300) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `orden_ubicacion` int(11) DEFAULT NULL,
  `url` varchar(600) DEFAULT NULL,
  `idcapa` varchar(15) DEFAULT 'principal',
  `tipo_inst` int(11) NOT NULL DEFAULT '0',
  `activo` int(11) DEFAULT '1',
  `principal` int(11) DEFAULT '0',
  `principal_dependencia` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Volcado de datos para la tabla `zmenus`
--

INSERT INTO `zmenus` (`id`, `modulo_id`, `deno_menu`, `nivel`, `id_menu`, `orden_ubicacion`, `url`, `idcapa`, `tipo_inst`, `activo`, `principal`, `principal_dependencia`) VALUES
(1, 1, 'CONFIGURACION', 1, 0, 1, 'NULL', 'NULL', 0, 1, 0, 0),
(2, 1, 'USUARIOS', 2, 1, 2, 'NULL', 'NULL', 0, 1, 0, 0),
(6, 1, 'RESTRICCIONES', 2, 1, 6, 'NULL', 'NULL', 0, 1, 0, 0),
(7, 1, 'REGISTRO', 3, 2, 1, 'NULL', 'NULL', 0, 1, 0, 0),
(8, 1, 'USUARIOS PRINCIPALES', 4, 7, 1, '/conf_usuarios/index/1/1', 'principal', 0, 1, 1, 0),
(9, 1, 'USUARIOS MODULOS', 4, 7, 2, '/conf_usuarios/index/2/1', 'principal', 0, 1, 0, 1),
(14, 1, 'ENTES adscritos', 2, 1, 1, 'NULL', 'NULL', 0, 1, 0, 0),
(15, 1, 'REGISTRO', 3, 14, 1, 'NULL', 'NULL', 0, 1, 0, 0),
(17, 1, 'ENTES adscritos', 4, 15, 1, '/dependencias/index', 'principal', 0, 1, 1, 0),
(29, 1, 'RESTRICCIONES MÃ³DULOS ', 3, 6, 1, '/modulo_usuarios/index/1', 'principal', 0, 1, 0, 0),
(94, 1, 'RESTRICCIONES Usuarios', 3, 6, 2, '/zmenuUsuarios/index/1', 'principal', 0, 1, 0, 0),
(95, 1, 'Direcciones de enlaces', 3, 6, 3, '/zmenus/index', 'principal', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zmenu_usuarios`
--

CREATE TABLE IF NOT EXISTS `zmenu_usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `zmenu_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=560 ;

--
-- Volcado de datos para la tabla `zmenu_usuarios`
--

INSERT INTO `zmenu_usuarios` (`id`, `zmenu_id`, `usuario_id`, `modulo_id`, `activo`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 1, 1, 1),
(3, 9, 1, 1, 1),
(4, 8, 1, 1, 1),
(5, 7, 1, 1, 1),
(6, 6, 1, 1, 1),
(14, 14, 1, 1, 1),
(15, 15, 1, 1, 1),
(16, 17, 1, 1, 1),
(26, 29, 1, 1, 1),
(558, 94, 1, 1, 1),
(559, 95, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
