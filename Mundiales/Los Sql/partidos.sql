-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2020 a las 01:02:00
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id_partido` int(6) NOT NULL,
  `fase` varchar(1) NOT NULL,
  `partido` int(1) NOT NULL,
  `id_equipo1` int(5) NOT NULL,
  `id_equipo2` int(5) NOT NULL,
  `goles1` int(2) NOT NULL,
  `goles2` int(2) NOT NULL,
  `penales1` int(2) DEFAULT NULL,
  `penales2` int(2) DEFAULT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id_partido`, `fase`, `partido`, `id_equipo1`, `id_equipo2`, `goles1`, `goles2`, `penales1`, `penales2`, `anio`) VALUES
(2, 'F', 2, 3, 4, 0, 0, 0, 0, 2018),
(3, 'F', 3, 1, 3, 0, 0, 0, 0, 2018),
(4, 'F', 4, 4, 2, 0, 0, 0, 0, 2018),
(5, 'F', 5, 4, 1, 0, 0, 0, 0, 2018),
(6, 'F', 6, 2, 3, 0, 0, 0, 0, 2018),
(28, 'F', 1, 7, 8, 0, 0, 0, 0, 2018),
(29, 'F', 2, 5, 6, 0, 0, 0, 0, 2018),
(34, 'F', 3, 5, 7, 0, 0, 0, 0, 2018),
(40, 'F', 4, 8, 6, 0, 0, 0, 0, 2018),
(41, 'F', 5, 8, 5, 0, 0, 0, 0, 2018),
(42, 'F', 6, 6, 7, 0, 0, 0, 0, 2018),
(43, 'F', 1, 1, 2, 0, 0, 0, 0, 2018),
(44, 'F', 1, 9, 11, 0, 0, 0, 0, 2018),
(45, 'F', 2, 12, 13, 0, 0, 0, 0, 2018),
(46, 'F', 3, 9, 12, 0, 0, 0, 0, 2018),
(47, 'F', 4, 13, 11, 0, 0, 0, 0, 2018),
(48, 'F', 5, 13, 9, 0, 0, 0, 0, 2018),
(49, 'F', 6, 11, 12, 0, 0, 0, 0, 2018),
(50, 'F', 1, 14, 15, 0, 0, 0, 0, 2018),
(51, 'F', 2, 16, 17, 0, 0, 0, 0, 2018),
(52, 'F', 3, 14, 16, 0, 0, 0, 0, 2018),
(53, 'F', 4, 17, 15, 0, 0, 0, 0, 2018),
(54, 'F', 5, 17, 14, 0, 0, 0, 0, 2018),
(55, 'F', 6, 15, 16, 0, 0, 0, 0, 2018),
(56, 'F', 1, 20, 21, 0, 0, 0, 0, 2018),
(57, 'F', 2, 18, 19, 0, 0, 0, 0, 2018),
(58, 'F', 3, 18, 20, 0, 0, 0, 0, 2018),
(59, 'F', 4, 21, 19, 0, 0, 0, 0, 2018),
(60, 'F', 5, 21, 18, 0, 0, 0, 0, 2018),
(61, 'F', 6, 19, 20, 0, 0, 0, 0, 2018),
(62, 'F', 1, 22, 23, 0, 0, 0, 0, 2018),
(63, 'F', 2, 24, 25, 0, 0, 0, 0, 2018),
(64, 'F', 3, 22, 24, 0, 0, 0, 0, 2018),
(65, 'F', 4, 25, 23, 0, 0, 0, 0, 2018),
(66, 'F', 5, 25, 22, 0, 0, 0, 0, 2018),
(67, 'F', 6, 23, 24, 0, 0, 0, 0, 2018),
(68, 'F', 1, 26, 27, 0, 0, 0, 0, 2018),
(69, 'F', 2, 28, 29, 0, 0, 0, 0, 2018),
(70, 'F', 3, 26, 28, 0, 0, 0, 0, 2018),
(71, 'F', 4, 29, 27, 0, 0, 0, 0, 2018),
(72, 'F', 5, 29, 26, 0, 0, 0, 0, 2018),
(73, 'F', 6, 27, 28, 0, 0, 0, 0, 2018),
(74, 'F', 1, 30, 31, 0, 0, 0, 0, 2018),
(75, 'F', 2, 49, 51, 0, 0, 0, 0, 2018),
(76, 'F', 3, 30, 49, 0, 0, 0, 0, 2018),
(77, 'F', 4, 51, 31, 0, 0, 0, 0, 2018),
(78, 'F', 5, 51, 30, 0, 0, 0, 0, 2018),
(79, 'F', 6, 31, 49, 0, 0, 0, 0, 2018);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id_partido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id_partido` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
