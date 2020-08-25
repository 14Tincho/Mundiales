-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2020 a las 01:02:07
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
(1, 11, 2, 'V'),
(3, 13, 2, 'L'),
(4, 11, 28, 'L'),
(6, 11, 43, 'E'),
(7, 11, 3, 'E'),
(8, 11, 4, 'V'),
(9, 11, 29, 'V'),
(10, 13, 43, 'E'),
(11, 13, 3, 'E'),
(12, 13, 4, 'E'),
(13, 13, 5, 'V'),
(14, 13, 6, 'V');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prode`
--
ALTER TABLE `prode`
  ADD PRIMARY KEY (`id_prode`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prode`
--
ALTER TABLE `prode`
  MODIFY `id_prode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
