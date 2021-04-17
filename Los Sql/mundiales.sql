-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2020 a las 23:07:08
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
(225, 3, 3, 2, 1, 0, 11, 6, 5, 7, 2018),
(226, 4, 3, 0, 1, 2, 4, 12, -8, 1, 2018),
(227, 2, 3, 0, 2, 1, 3, 4, -1, 2, 2018),
(228, 1, 3, 1, 2, 0, 7, 3, 4, 5, 2018),
(229, 7, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(230, 8, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(231, 5, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(232, 6, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(233, 9, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(234, 11, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(235, 12, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(236, 13, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(237, 14, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(238, 15, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(239, 16, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(240, 17, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(241, 20, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(242, 21, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(243, 18, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(244, 19, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(245, 22, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(246, 23, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(247, 24, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(248, 25, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(249, 26, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(250, 27, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(251, 28, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(252, 29, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(253, 30, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(254, 31, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(255, 49, 3, 0, 3, 0, 0, 0, 0, 3, 2018),
(256, 51, 3, 0, 3, 0, 0, 0, 0, 3, 2018);

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
(65, 49, 1, 3, 4, 5, 2018),
(66, 53, 2, 1, NULL, NULL, 2018),
(67, 53, 1, 6, NULL, NULL, 2018),
(68, 49, 2, 8, 4, 3, 2018),
(69, 50, 1, 11, NULL, NULL, 2018),
(70, 54, 2, 12, 4, NULL, 2018),
(71, 54, 1, 16, 2, NULL, 2018),
(72, 50, 2, 14, NULL, NULL, 2018),
(73, 51, 1, 20, NULL, NULL, 2018),
(74, 55, 2, 19, NULL, NULL, 2018),
(75, 55, 1, 25, NULL, NULL, 2018),
(76, 51, 2, 23, NULL, NULL, 2018),
(77, 52, 1, 27, NULL, NULL, 2018),
(78, 56, 2, 28, NULL, NULL, 2018),
(79, 56, 1, 49, NULL, NULL, 2018),
(80, 52, 2, 30, NULL, NULL, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id_partido` int(6) NOT NULL,
  `fase` varchar(1) NOT NULL,
  `partido` int(1) NOT NULL,
  `id_equipo1` int(5) NOT NULL,
  `id_equipo2` int(5) NOT NULL,
  `goles1` int(2) DEFAULT NULL,
  `goles2` int(2) DEFAULT NULL,
  `penales1` int(2) DEFAULT NULL,
  `penales2` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id_partido`, `fase`, `partido`, `id_equipo1`, `id_equipo2`, `goles1`, `goles2`, `penales1`, `penales2`, `anio`) VALUES
(2, 'F', 2, 3, 4, 6, 2, NULL, NULL, 2018),
(4, 'F', 4, 4, 2, 2, 2, NULL, NULL, 2018),
(5, 'F', 5, 4, 1, 0, 4, NULL, NULL, 2018),
(6, 'F', 6, 2, 3, 1, 2, NULL, NULL, 2018),
(28, 'F', 1, 7, 8, 0, 0, NULL, NULL, 2018),
(29, 'F', 2, 5, 6, 0, 0, NULL, NULL, 2018),
(34, 'F', 3, 5, 7, 0, 0, NULL, NULL, 2018),
(40, 'F', 4, 8, 6, 0, 0, NULL, NULL, 2018),
(41, 'F', 5, 8, 5, 0, 0, NULL, NULL, 2018),
(42, 'F', 6, 6, 7, 0, 0, NULL, NULL, 2018),
(43, 'F', 1, 1, 2, 0, 0, NULL, NULL, 2018),
(44, 'F', 1, 9, 11, 0, 0, NULL, NULL, 2018),
(45, 'F', 2, 12, 13, 0, 0, NULL, NULL, 2018),
(46, 'F', 3, 9, 12, 0, 0, NULL, NULL, 2018),
(47, 'F', 4, 13, 11, 0, 0, NULL, NULL, 2018),
(48, 'F', 5, 13, 9, 0, 0, NULL, NULL, 2018),
(49, 'F', 6, 11, 12, 0, 0, NULL, NULL, 2018),
(50, 'F', 1, 14, 15, 0, 0, NULL, NULL, 2018),
(51, 'F', 2, 16, 17, 0, 0, NULL, NULL, 2018),
(52, 'F', 3, 14, 16, 0, 0, NULL, NULL, 2018),
(53, 'F', 4, 17, 15, 0, 0, NULL, NULL, 2018),
(54, 'F', 5, 17, 14, 0, 0, NULL, NULL, 2018),
(55, 'F', 6, 15, 16, 0, 0, NULL, NULL, 2018),
(56, 'F', 1, 20, 21, 0, 0, NULL, NULL, 2018),
(57, 'F', 2, 18, 19, 0, 0, NULL, NULL, 2018),
(58, 'F', 3, 18, 20, 0, 0, NULL, NULL, 2018),
(59, 'F', 4, 21, 19, 0, 0, NULL, NULL, 2018),
(60, 'F', 5, 21, 18, 0, 0, NULL, NULL, 2018),
(61, 'F', 6, 19, 20, 0, 0, NULL, NULL, 2018),
(62, 'F', 1, 22, 23, 0, 0, NULL, NULL, 2018),
(63, 'F', 2, 24, 25, 0, 0, NULL, NULL, 2018),
(64, 'F', 3, 22, 24, 0, 0, NULL, NULL, 2018),
(65, 'F', 4, 25, 23, 0, 0, NULL, NULL, 2018),
(66, 'F', 5, 25, 22, 0, 0, NULL, NULL, 2018),
(67, 'F', 6, 23, 24, 0, 0, NULL, NULL, 2018),
(68, 'F', 1, 26, 27, 0, 0, NULL, NULL, 2018),
(69, 'F', 2, 28, 29, 0, 0, NULL, NULL, 2018),
(70, 'F', 3, 26, 28, 0, 0, NULL, NULL, 2018),
(71, 'F', 4, 29, 27, 0, 0, NULL, NULL, 2018),
(72, 'F', 5, 29, 26, 0, 0, NULL, NULL, 2018),
(73, 'F', 6, 27, 28, 0, 0, NULL, NULL, 2018),
(74, 'F', 1, 30, 31, 0, 0, NULL, NULL, 2018),
(75, 'F', 2, 49, 51, 0, 0, NULL, NULL, 2018),
(76, 'F', 3, 30, 49, 0, 0, NULL, NULL, 2018),
(77, 'F', 4, 51, 31, 0, 0, NULL, NULL, 2018),
(78, 'F', 5, 51, 30, 0, 0, NULL, NULL, 2018),
(79, 'F', 6, 31, 49, 0, 0, NULL, NULL, 2018),
(83, 'F', 3, 1, 3, 3, 3, NULL, NULL, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prode`
--

CREATE TABLE `prode` (
  `id_prode` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_partido` int(5) NOT NULL,
  `lev` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prode`
--

INSERT INTO `prode` (`id_prode`, `id_user`, `id_partido`, `lev`) VALUES
(1, 11, 2, 'E'),
(3, 13, 2, 'L'),
(4, 11, 28, 'E'),
(6, 11, 43, 'L'),
(7, 11, 3, 'V'),
(8, 11, 4, 'E'),
(9, 11, 29, 'E'),
(10, 13, 43, 'E'),
(11, 13, 3, 'E'),
(12, 13, 4, 'E'),
(13, 13, 5, 'V'),
(14, 13, 6, 'V'),
(15, 11, 34, 'V'),
(16, 11, 40, 'L'),
(17, 11, 41, 'E'),
(18, 11, 5, 'L'),
(19, 11, 42, 'V'),
(20, 11, 49, 'E'),
(21, 11, 48, 'V'),
(22, 11, 46, 'E'),
(23, 11, 47, 'V'),
(24, 11, 44, 'V'),
(25, 11, 45, 'V'),
(26, 11, 50, 'L'),
(27, 11, 51, 'L'),
(28, 11, 52, 'V'),
(29, 11, 53, 'L'),
(30, 11, 54, 'E'),
(31, 11, 55, 'L'),
(32, 11, 6, 'E'),
(33, 11, 56, 'L'),
(34, 11, 57, 'V'),
(35, 11, 58, 'E');

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
(15, 'Silveta', '$2y$10$36Ub9fCAmy5N0P9L2q6Y7eHK7hqi3dVyRFP24WUDOuZiOtGeC.YTm', 'pepe@pepe', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

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
-- Indices de la tabla `prode`
--
ALTER TABLE `prode`
  ADD PRIMARY KEY (`id_prode`);

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
  MODIFY `id_clasificacion` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `octavos`
--
ALTER TABLE `octavos`
  MODIFY `id_octavo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id_partido` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `prode`
--
ALTER TABLE `prode`
  MODIFY `id_prode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
