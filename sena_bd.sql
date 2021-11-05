-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 05:23:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `apre_id` int(10) UNSIGNED NOT NULL,
  `apre_tipoid` char(3) DEFAULT NULL,
  `apre_numid` char(20) DEFAULT NULL,
  `apre_nombres` char(60) DEFAULT NULL,
  `apre_apellidos` char(60) DEFAULT NULL,
  `apre_direccion` char(80) DEFAULT NULL,
  `apre_telefono` char(20) DEFAULT NULL,
  `apre_ficha` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`apre_id`, `apre_tipoid`, `apre_numid`, `apre_nombres`, `apre_apellidos`, `apre_direccion`, `apre_telefono`, `apre_ficha`) VALUES
(2, 'CC', '1065987456', 'ADRIANA ISABEL', 'RICARDO BELEÃ‘O', 'MZ 6 CASA 19 EL PARAMO', '3006004800', 2068060),
(3, 'CC', '77171639', 'JOSE LUIS', 'BARROS QZ', 'CR 5 19 A 58 BR KENNED', '3505050590', 2068061),
(4, 'CC', '1065658457', 'HEINER DANIEL', 'CASADIEGO GARCIA', 'CR 23 16 25', '3002584769', 2068060);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `ficha_numero` int(10) NOT NULL,
  `ficha_progra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `progra_id` int(10) NOT NULL,
  `progra_nombre` char(20) DEFAULT NULL,
  `progra_tipo` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`progra_id`, `progra_nombre`, `progra_tipo`) VALUES
(2068060, 'ADSI MAÃ‘ANA', 1),
(2068062, 'CREACION BD', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposprograma`
--

CREATE TABLE `tiposprograma` (
  `tiposp_id` int(10) NOT NULL,
  `tiposp_tipo` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposprograma`
--

INSERT INTO `tiposprograma` (`tiposp_id`, `tiposp_tipo`) VALUES
(1, 'virtual'),
(2, 'presencial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usua_id` int(10) NOT NULL,
  `usua_nomuser` char(50) DEFAULT NULL,
  `usua_contra` char(20) DEFAULT NULL,
  `usua_tipo` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usua_id`, `usua_nomuser`, `usua_contra`, `usua_tipo`) VALUES
(1, 'admin', '1111', 'ADMINISTRADOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`apre_id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`ficha_numero`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`progra_id`);

--
-- Indices de la tabla `tiposprograma`
--
ALTER TABLE `tiposprograma`
  ADD PRIMARY KEY (`tiposp_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `apre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
