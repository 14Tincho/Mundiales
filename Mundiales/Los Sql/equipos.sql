-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2020 a las 00:59:29
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
