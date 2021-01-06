-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2021 a las 14:40:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundiales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id_clasificacion` int(3) NOT NULL,
  `id_equipo` int(3) NOT NULL,
  `pj` int(1) NOT NULL,
  `pg` int(1) NOT NULL,
  `pe` int(1) NOT NULL,
  `pp` int(1) NOT NULL,
  `gf` int(2) NOT NULL,
  `gc` int(2) NOT NULL,
  `dg` int(2) NOT NULL,
  `pts` int(1) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id_clasificacion`, `id_equipo`, `pj`, `pg`, `pe`, `pp`, `gf`, `gc`, `dg`, `pts`, `anio`) VALUES
(2216, 4, 3, 3, 0, 0, 5, 0, 5, 9, 2018),
(2217, 3, 3, 0, 0, 3, 2, 6, -4, 0, 2018),
(2218, 2, 3, 1, 0, 2, 2, 7, -5, 3, 2018),
(2219, 1, 3, 2, 0, 1, 8, 4, 4, 6, 2018),
(2220, 8, 3, 1, 1, 1, 2, 2, 0, 4, 2018),
(2221, 7, 3, 0, 1, 2, 2, 4, -2, 1, 2018),
(2222, 5, 3, 1, 2, 0, 5, 4, 1, 5, 2018),
(2223, 6, 3, 1, 2, 0, 6, 5, 1, 5, 2018),
(2224, 9, 3, 2, 1, 0, 3, 1, 2, 7, 2018),
(2225, 11, 3, 0, 1, 2, 2, 5, -3, 1, 2018),
(2226, 13, 3, 1, 2, 0, 2, 1, 1, 5, 2018),
(2227, 12, 3, 1, 0, 2, 2, 2, 0, 3, 2018),
(2228, 14, 3, 1, 1, 1, 3, 5, -2, 4, 2018),
(2229, 15, 3, 0, 1, 2, 2, 5, -3, 1, 2018),
(2230, 16, 3, 3, 0, 0, 7, 1, 6, 9, 2018),
(2231, 17, 3, 1, 0, 2, 3, 4, -1, 3, 2018),
(2232, 21, 3, 1, 0, 2, 2, 4, -2, 3, 2018),
(2233, 20, 3, 0, 1, 2, 2, 5, -3, 1, 2018),
(2234, 18, 3, 2, 1, 0, 5, 1, 4, 7, 2018),
(2235, 19, 3, 1, 2, 0, 5, 4, 1, 5, 2018),
(2236, 23, 3, 2, 0, 1, 3, 4, -1, 6, 2018),
(2237, 22, 3, 1, 0, 2, 2, 4, -2, 3, 2018),
(2238, 24, 3, 2, 0, 1, 5, 2, 3, 6, 2018),
(2239, 25, 3, 1, 0, 2, 3, 3, 0, 3, 2018),
(2240, 26, 3, 3, 0, 0, 9, 2, 7, 9, 2018),
(2241, 27, 3, 0, 0, 3, 2, 11, -9, 0, 2018),
(2242, 29, 3, 2, 0, 1, 8, 3, 5, 6, 2018),
(2243, 28, 3, 1, 0, 2, 5, 8, -3, 3, 2018),
(2244, 31, 3, 1, 1, 1, 4, 4, 0, 4, 2018),
(2245, 30, 3, 1, 0, 2, 2, 5, -3, 3, 2018),
(2246, 51, 3, 1, 1, 1, 4, 4, 0, 4, 2018),
(2247, 49, 3, 2, 0, 1, 5, 2, 3, 6, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuartos`
--

CREATE TABLE `cuartos` (
  `id_cuarto` int(2) NOT NULL,
  `nropartido` int(2) NOT NULL,
  `posicion` int(1) NOT NULL,
  `id_equipo` int(2) NOT NULL,
  `goles` int(2) DEFAULT NULL,
  `penales` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL,
  `nropartidooctavo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuartos`
--

INSERT INTO `cuartos` (`id_cuarto`, `nropartido`, `posicion`, `id_equipo`, `goles`, `penales`, `anio`, `nropartidooctavo`) VALUES
(864, 57, 1, 4, 0, NULL, 2018, 49),
(865, 57, 2, 9, 2, NULL, 2018, 50),
(866, 58, 1, 18, 1, NULL, 2018, 51),
(867, 58, 2, 26, 2, NULL, 2018, 52),
(868, 59, 1, 1, 2, 3, 2018, 53),
(869, 59, 2, 16, 2, 4, 2018, 54),
(870, 60, 1, 24, 0, NULL, 2018, 55),
(871, 60, 2, 29, 2, NULL, 2018, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `posicion` int(1) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre`, `grupo`, `posicion`, `anio`) VALUES
(1, 'Rusia', 'A', 1, 2018),
(2, 'Arabia S.', 'A', 2, 2018),
(3, 'Egipto', 'A', 3, 2018),
(4, 'Uruguay', 'A', 4, 2018),
(5, 'Portugal', 'B', 1, 2018),
(6, 'España', 'B', 2, 2018),
(7, 'Marruecos', 'B', 3, 2018),
(8, 'Irán', 'B', 4, 2018),
(9, 'Francia', 'C', 1, 2018),
(11, 'Australia', 'C', 2, 2018),
(12, 'Perú', 'C', 3, 2018),
(13, 'Dinamarca', 'C', 4, 2018),
(14, 'Argentina', 'D', 1, 2018),
(15, 'Islandia', 'D', 2, 2018),
(16, 'Croacia', 'D', 3, 2018),
(17, 'Nigeria', 'D', 4, 2018),
(18, 'Brasil', 'E', 1, 2018),
(19, 'Suiza', 'E', 2, 2018),
(20, 'Costa Rica', 'E', 3, 2018),
(21, 'Serbia', 'E', 4, 2018),
(22, 'Alemania', 'F', 1, 2018),
(23, 'México', 'F', 2, 2018),
(24, 'Suecia', 'F', 3, 2018),
(25, 'Corea Sur', 'F', 4, 2018),
(26, 'Bélgica', 'G', 1, 2018),
(27, 'Panamá', 'G', 2, 2018),
(28, 'Túnez', 'G', 3, 2018),
(29, 'Inglaterra', 'G', 4, 2018),
(30, 'Polonia', 'H', 1, 2018),
(31, 'Senegal', 'H', 2, 2018),
(49, 'Colombia', 'H', 3, 2018),
(51, 'Japón', 'H', 4, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finales`
--

CREATE TABLE `finales` (
  `id_final` int(2) NOT NULL,
  `nropartido` int(2) NOT NULL,
  `posicion` int(1) NOT NULL,
  `id_equipo` int(2) NOT NULL,
  `goles` int(2) DEFAULT NULL,
  `penales` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL,
  `nropartidosemi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `finales`
--

INSERT INTO `finales` (`id_final`, `nropartido`, `posicion`, `id_equipo`, `goles`, `penales`, `anio`, `nropartidosemi`) VALUES
(25, 63, 1, 26, 2, NULL, 2018, 61),
(26, 64, 1, 9, 0, NULL, 2018, 61),
(27, 63, 2, 29, 0, NULL, 2018, 62),
(28, 64, 2, 16, 2, NULL, 2018, 62);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `octavos`
--

CREATE TABLE `octavos` (
  `id_octavo` int(2) NOT NULL,
  `nropartido` int(2) NOT NULL,
  `posicion` int(1) NOT NULL,
  `id_equipo` int(2) NOT NULL,
  `goles` int(2) DEFAULT NULL,
  `penales` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `octavos`
--

INSERT INTO `octavos` (`id_octavo`, `nropartido`, `posicion`, `id_equipo`, `goles`, `penales`, `anio`) VALUES
(1075, 49, 1, 4, 2, NULL, 2018),
(1076, 53, 2, 1, 1, 4, 2018),
(1077, 53, 1, 6, 1, 3, 2018),
(1078, 49, 2, 5, 1, NULL, 2018),
(1079, 50, 1, 9, 4, NULL, 2018),
(1080, 54, 2, 13, 1, 2, 2018),
(1081, 54, 1, 16, 1, 3, 2018),
(1082, 50, 2, 14, 3, NULL, 2018),
(1083, 51, 1, 18, 2, NULL, 2018),
(1084, 55, 2, 19, 0, NULL, 2018),
(1085, 55, 1, 24, 1, NULL, 2018),
(1086, 51, 2, 23, 0, NULL, 2018),
(1087, 52, 1, 26, 3, NULL, 2018),
(1088, 56, 2, 29, 1, 4, 2018),
(1089, 56, 1, 49, 1, 3, 2018),
(1090, 52, 2, 51, 2, NULL, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id_partido` int(6) NOT NULL,
  `partido` int(1) NOT NULL,
  `id_equipo1` int(5) NOT NULL,
  `id_equipo2` int(5) NOT NULL,
  `goles1` int(2) DEFAULT NULL,
  `goles2` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id_partido`, `partido`, `id_equipo1`, `id_equipo2`, `goles1`, `goles2`, `anio`) VALUES
(2, 2, 3, 4, 0, 1, 2018),
(4, 4, 4, 2, 1, 0, 2018),
(5, 5, 4, 1, 3, 0, 2018),
(6, 6, 2, 3, 2, 1, 2018),
(28, 1, 7, 8, 0, 1, 2018),
(29, 2, 5, 6, 3, 3, 2018),
(34, 3, 5, 7, 1, 0, 2018),
(40, 4, 8, 6, 0, 1, 2018),
(41, 5, 8, 5, 1, 1, 2018),
(42, 6, 6, 7, 2, 2, 2018),
(43, 1, 1, 2, 5, 0, 2018),
(44, 1, 9, 11, 2, 1, 2018),
(45, 2, 12, 13, 0, 1, 2018),
(46, 3, 9, 12, 1, 0, 2018),
(47, 4, 13, 11, 1, 1, 2018),
(48, 5, 13, 9, 0, 0, 2018),
(49, 6, 11, 12, 0, 2, 2018),
(50, 1, 14, 15, 1, 1, 2018),
(51, 2, 16, 17, 2, 0, 2018),
(52, 3, 14, 16, 0, 3, 2018),
(53, 4, 17, 15, 2, 0, 2018),
(54, 5, 17, 14, 1, 2, 2018),
(55, 6, 15, 16, 1, 2, 2018),
(56, 1, 20, 21, 0, 1, 2018),
(57, 2, 18, 19, 1, 1, 2018),
(58, 3, 18, 20, 2, 0, 2018),
(59, 4, 21, 19, 1, 2, 2018),
(60, 5, 21, 18, 0, 2, 2018),
(61, 6, 19, 20, 2, 2, 2018),
(62, 1, 22, 23, 0, 1, 2018),
(63, 2, 24, 25, 1, 0, 2018),
(64, 3, 22, 24, 2, 1, 2018),
(65, 4, 25, 23, 1, 2, 2018),
(66, 5, 25, 22, 2, 0, 2018),
(67, 6, 23, 24, 0, 3, 2018),
(68, 1, 26, 27, 3, 0, 2018),
(69, 2, 28, 29, 1, 2, 2018),
(70, 3, 26, 28, 5, 2, 2018),
(71, 4, 29, 27, 6, 1, 2018),
(72, 5, 29, 26, 0, 1, 2018),
(73, 6, 27, 28, 1, 2, 2018),
(74, 1, 30, 31, 1, 2, 2018),
(75, 2, 49, 51, 1, 2, 2018),
(76, 3, 30, 49, 0, 3, 2018),
(77, 4, 51, 31, 2, 2, 2018),
(78, 5, 51, 30, 0, 1, 2018),
(79, 6, 31, 49, 0, 1, 2018),
(83, 3, 1, 3, 3, 1, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciontotales`
--

CREATE TABLE `posiciontotales` (
  `id_posiciontotal` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `puntosfases` int(3) DEFAULT NULL,
  `puntosoctavos` int(3) DEFAULT NULL,
  `puntoscuartos` int(3) DEFAULT NULL,
  `puntossemis` int(3) DEFAULT NULL,
  `puntosfinales` int(3) DEFAULT NULL,
  `puntostotales` int(3) DEFAULT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prode`
--

CREATE TABLE `prode` (
  `id_prode` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_partido` int(5) NOT NULL,
  `lev` varchar(1) NOT NULL,
  `puntos` int(3) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prode`
--

INSERT INTO `prode` (`id_prode`, `id_user`, `id_partido`, `lev`, `puntos`, `anio`) VALUES
(1, 11, 2, 'E', 0, 2018),
(3, 13, 2, 'L', 0, 2018),
(4, 11, 28, 'E', 0, 2018),
(6, 11, 43, 'L', 2, 2018),
(8, 11, 4, 'E', 0, 2018),
(9, 11, 29, 'E', 2, 2018),
(10, 13, 43, 'E', 0, 2018),
(12, 13, 4, 'E', 0, 2018),
(13, 13, 5, 'V', 0, 2018),
(14, 13, 6, 'V', 0, 2018),
(15, 11, 34, 'V', 0, 2018),
(16, 11, 40, 'L', 0, 2018),
(17, 11, 41, 'E', 2, 2018),
(18, 11, 5, 'L', 2, 2018),
(19, 11, 42, 'V', 0, 2018),
(20, 11, 49, 'E', 0, 2018),
(21, 11, 48, 'V', 0, 2018),
(22, 11, 46, 'E', 0, 2018),
(23, 11, 47, 'V', 0, 2018),
(24, 11, 44, 'V', 0, 2018),
(25, 11, 45, 'V', 2, 2018),
(26, 11, 50, 'L', 0, 2018),
(27, 11, 51, 'L', 2, 2018),
(28, 11, 52, 'V', 2, 2018),
(29, 11, 53, 'L', 2, 2018),
(30, 11, 54, 'E', 0, 2018),
(31, 11, 55, 'L', 0, 2018),
(32, 11, 6, 'E', 0, 2018),
(33, 11, 56, 'L', 0, 2018),
(34, 11, 57, 'V', 0, 2018),
(35, 11, 58, 'V', 0, 2018),
(36, 11, 59, 'E', 0, 2018),
(37, 11, 62, 'E', 0, 2018),
(38, 11, 63, 'L', 2, 2018),
(42, 24, 0, '', 0, 2018),
(43, 11, 0, '', 0, 2018),
(44, 13, 0, '', 0, 2018),
(45, 15, 0, '', 0, 2018),
(46, 25, 0, '', 0, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodecuartos`
--

CREATE TABLE `prodecuartos` (
  `id_prodecuartos` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nropartido` int(5) NOT NULL,
  `lv` varchar(1) NOT NULL,
  `puntos` int(3) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prodecuartos`
--

INSERT INTO `prodecuartos` (`id_prodecuartos`, `id_user`, `nropartido`, `lv`, `puntos`, `anio`) VALUES
(1, 11, 57, 'L', 0, 2018),
(2, 11, 58, 'V', 0, 2018),
(3, 11, 59, 'L', 0, 2018),
(4, 11, 60, 'L', 0, 2018),
(13, 15, 57, 'V', 0, 2018),
(14, 25, 0, '', 0, 2018),
(15, 24, 0, '', 0, 2018),
(16, 13, 0, '', 0, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodefinales`
--

CREATE TABLE `prodefinales` (
  `id_prodecuartos` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nropartido` int(5) NOT NULL,
  `lv` varchar(1) NOT NULL,
  `puntos` int(3) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prodefinales`
--

INSERT INTO `prodefinales` (`id_prodecuartos`, `id_user`, `nropartido`, `lv`, `puntos`, `anio`) VALUES
(1, 11, 63, 'L', 0, 2018),
(2, 11, 64, 'L', 15, 2018),
(3, 25, 0, '', 0, 2018),
(4, 13, 0, '', 0, 2018),
(5, 15, 0, '', 0, 2018),
(6, 24, 0, '', 0, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodeoctavos`
--

CREATE TABLE `prodeoctavos` (
  `id_prodeoctavos` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nropartido` int(5) NOT NULL,
  `lv` varchar(1) NOT NULL,
  `puntos` int(3) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prodeoctavos`
--

INSERT INTO `prodeoctavos` (`id_prodeoctavos`, `id_user`, `nropartido`, `lv`, `puntos`, `anio`) VALUES
(1, 11, 49, 'L', 8, 2018),
(2, 11, 50, 'V', 0, 2018),
(3, 11, 51, 'L', 0, 2018),
(4, 11, 52, 'L', 0, 2018),
(5, 11, 53, 'V', 0, 2018),
(6, 11, 54, 'V', 0, 2018),
(7, 11, 55, 'V', 0, 2018),
(8, 11, 56, 'V', 0, 2018),
(9, 13, 49, 'V', 5, 2018),
(10, 13, 50, 'L', 6, 2018),
(11, 13, 54, 'V', 0, 2018),
(12, 15, 54, 'L', 12, 2018),
(13, 25, 0, '', 0, 2018),
(14, 24, 0, '', 0, 2018);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `prodeoctavos15`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `prodeoctavos15` (
`id_prodeoctavos` int(11)
,`id_user` int(5)
,`nropartido` int(5)
,`lv` varchar(1)
,`puntos` int(3)
,`anio` int(4)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodesemis`
--

CREATE TABLE `prodesemis` (
  `id_prodecuartos` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nropartido` int(5) NOT NULL,
  `lv` varchar(1) NOT NULL,
  `puntos` int(3) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prodesemis`
--

INSERT INTO `prodesemis` (`id_prodecuartos`, `id_user`, `nropartido`, `lv`, `puntos`, `anio`) VALUES
(1, 11, 61, 'L', 0, 2018),
(2, 11, 62, 'L', 0, 2018),
(5, 25, 0, '', 0, 2018),
(6, 13, 0, '', 0, 2018),
(7, 15, 0, '', 0, 2018),
(8, 24, 0, '', 0, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje`
--

CREATE TABLE `puntaje` (
  `id_puntaje` int(5) NOT NULL,
  `puntajefases` int(2) NOT NULL,
  `puntajeoctavos` int(2) NOT NULL,
  `puntajecuartos` int(2) NOT NULL,
  `puntajesemis` int(2) NOT NULL,
  `puntajetercer` int(2) NOT NULL,
  `puntajefinal` int(2) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puntaje`
--

INSERT INTO `puntaje` (`id_puntaje`, `puntajefases`, `puntajeoctavos`, `puntajecuartos`, `puntajesemis`, `puntajetercer`, `puntajefinal`, `anio`) VALUES
(1, 2, 6, 8, 10, 12, 14, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semis`
--

CREATE TABLE `semis` (
  `id_semi` int(2) NOT NULL,
  `nropartido` int(2) NOT NULL,
  `posicion` int(1) NOT NULL,
  `id_equipo` int(2) NOT NULL,
  `goles` int(2) DEFAULT NULL,
  `penales` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL,
  `nropartidocuarto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semis`
--

INSERT INTO `semis` (`id_semi`, `nropartido`, `posicion`, `id_equipo`, `goles`, `penales`, `anio`, `nropartidocuarto`) VALUES
(69, 61, 1, 9, 1, NULL, 2018, 57),
(70, 61, 2, 26, 0, NULL, 2018, 58),
(71, 62, 1, 16, 2, NULL, 2018, 59),
(72, 62, 2, 29, 1, NULL, 2018, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contrasena` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `contrasena`, `email`, `nivel`) VALUES
(11, 'otro mas', '$2y$10$wLXo5giMZeRBn6Dj67jtzuVTdjml4obDjZTFXwdv0OOTGWnsklWeq', '123@123123', NULL),
(12, 'Martin', '$2y$10$oTXphZw5u3oCFlsAANasw.HOHIyL7wuXPW8ppPfz59cCoJxToc8cq', 'martin@martin.com', 1),
(13, 'Tincho', '$2y$10$xKKjNqlALdVFvT0WDuAQbOZ1tr0Hs/VIdwxR2YDYoAvJI/5.J1K1C', '951951952@tincho', NULL),
(14, 'Jorge', '$2y$10$NYBGFyOSqrBOc0UlYs5OXekLkArsSxWFeyG9WtqJKdHMce4U6CFqS', 'george01@jorge', NULL),
(15, 'Silveta', '$2y$10$36Ub9fCAmy5N0P9L2q6Y7eHK7hqi3dVyRFP24WUDOuZiOtGeC.YTm', 'pepe@pepe', NULL),
(24, 'chayanne', '$2y$10$BOyFBs4FhlgoB/teCNEy1uIDVIjexsOgS2uYmSXoyq/OP0aonOD8W', 'salome@salome.com', NULL),
(25, 'Neymar', '$2y$10$poBbXG8j6P8KdrjDeRgrMuCFhZgAMFY7MPWPNF7p6QHgTegdKZF7G', 'neymar@neimi.com', NULL);

-- --------------------------------------------------------

--
-- Estructura para la vista `prodeoctavos15`
--
DROP TABLE IF EXISTS `prodeoctavos15`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prodeoctavos15`  AS  select `prodeoctavos`.`id_prodeoctavos` AS `id_prodeoctavos`,`prodeoctavos`.`id_user` AS `id_user`,`prodeoctavos`.`nropartido` AS `nropartido`,`prodeoctavos`.`lv` AS `lv`,`prodeoctavos`.`puntos` AS `puntos`,`prodeoctavos`.`anio` AS `anio` from `prodeoctavos` where `prodeoctavos`.`id_user` = 15 and `prodeoctavos`.`anio` = 2018 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `cuartos`
--
ALTER TABLE `cuartos`
  ADD PRIMARY KEY (`id_cuarto`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `finales`
--
ALTER TABLE `finales`
  ADD PRIMARY KEY (`id_final`);

--
-- Indices de la tabla `octavos`
--
ALTER TABLE `octavos`
  ADD PRIMARY KEY (`id_octavo`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `posiciontotales`
--
ALTER TABLE `posiciontotales`
  ADD PRIMARY KEY (`id_posiciontotal`);

--
-- Indices de la tabla `prode`
--
ALTER TABLE `prode`
  ADD PRIMARY KEY (`id_prode`);

--
-- Indices de la tabla `prodecuartos`
--
ALTER TABLE `prodecuartos`
  ADD PRIMARY KEY (`id_prodecuartos`);

--
-- Indices de la tabla `prodefinales`
--
ALTER TABLE `prodefinales`
  ADD PRIMARY KEY (`id_prodecuartos`);

--
-- Indices de la tabla `prodeoctavos`
--
ALTER TABLE `prodeoctavos`
  ADD PRIMARY KEY (`id_prodeoctavos`);

--
-- Indices de la tabla `prodesemis`
--
ALTER TABLE `prodesemis`
  ADD PRIMARY KEY (`id_prodecuartos`);

--
-- Indices de la tabla `puntaje`
--
ALTER TABLE `puntaje`
  ADD PRIMARY KEY (`id_puntaje`);

--
-- Indices de la tabla `semis`
--
ALTER TABLE `semis`
  ADD PRIMARY KEY (`id_semi`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id_clasificacion` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2248;

--
-- AUTO_INCREMENT de la tabla `cuartos`
--
ALTER TABLE `cuartos`
  MODIFY `id_cuarto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=872;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `finales`
--
ALTER TABLE `finales`
  MODIFY `id_final` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `octavos`
--
ALTER TABLE `octavos`
  MODIFY `id_octavo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1091;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id_partido` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `posiciontotales`
--
ALTER TABLE `posiciontotales`
  MODIFY `id_posiciontotal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prode`
--
ALTER TABLE `prode`
  MODIFY `id_prode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `prodecuartos`
--
ALTER TABLE `prodecuartos`
  MODIFY `id_prodecuartos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `prodefinales`
--
ALTER TABLE `prodefinales`
  MODIFY `id_prodecuartos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prodeoctavos`
--
ALTER TABLE `prodeoctavos`
  MODIFY `id_prodeoctavos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `prodesemis`
--
ALTER TABLE `prodesemis`
  MODIFY `id_prodecuartos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `puntaje`
--
ALTER TABLE `puntaje`
  MODIFY `id_puntaje` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `semis`
--
ALTER TABLE `semis`
  MODIFY `id_semi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
