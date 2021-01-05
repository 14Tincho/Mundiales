-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 16:14:24
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
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `destID` tinyint(3) UNSIGNED NOT NULL,
  `destNombre` varchar(45) NOT NULL COMMENT 'Nombre de los destinos turísticos',
  `regID` tinyint(2) UNSIGNED NOT NULL COMMENT 'Relación a la tabla regiones',
  `destPrecio` int(7) UNSIGNED NOT NULL,
  `destAsientos` tinyint(2) UNSIGNED NOT NULL COMMENT 'Cantidad TOTAL de Asientos',
  `destDisponibles` tinyint(2) UNSIGNED NOT NULL COMMENT 'Cantidad DISPONIBLE\\n de Asientos',
  `destActivo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`destID`, `destNombre`, `regID`, `destPrecio`, `destAsientos`, `destDisponibles`, `destActivo`) VALUES
(1, 'Londres (Heathrow)', 5, 9711, 5, 5, 1),
(2, 'Amsterdam (Schiphol)', 5, 6231, 5, 5, 1),
(3, 'Miami', 4, 6517, 5, 5, 1),
(4, 'Tokio (Narita)', 7, 8704, 5, 5, 1),
(5, 'Bangkok (Suvarnabhumi)', 8, 8469, 5, 5, 1),
(6, 'París (Charles de Gaulle)', 5, 7713, 5, 5, 1),
(7, 'Cancún (Cancún)', 3, 6494, 5, 5, 1),
(8, 'Milán (Malpensa)', 5, 6756, 5, 5, 1),
(16, 'joseba jatangas', 3, 96666, 12, 1, 1),
(17, 'elva ginon', 7, 669, 22, 12, 1),
(18, 'Destino2', 21, 222, 22, 2, 1),
(19, 'alma marcela gozo', 16, 123, 12, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE `regiones` (
  `regID` tinyint(2) UNSIGNED NOT NULL,
  `regNombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Regiones';

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`regID`, `regNombre`) VALUES
(1, 'América del Sur'),
(2, 'América Central'),
(3, 'Caribe y México'),
(4, 'América del Norte'),
(5, 'Europa Occidental'),
(6, 'Europa del Este'),
(7, 'Asia'),
(8, 'Oceanía'),
(9, 'Gotham City'),
(11, 'Springfield'),
(12, 'Metrópolis'),
(13, 'wakanda'),
(14, 'Polvorin Polvoriento'),
(15, 'Kame House'),
(16, 'Pampeana'),
(21, 'toy\' chorreando como un cuerpo decapitau'),
(25, 'Polvorin Polvoriento4'),
(27, 'Kame Houses'),
(28, 'Kame Houses'),
(29, 'Kame Houses'),
(30, 'Pampeana0.'),
(31, 'Clavesteroides'),
(32, 'CLave'),
(33, 'cambiazo'),
(34, 'Sabella'),
(35, 'agregar otro mas'),
(36, 'hli'),
(37, 'agrego nueva region'),
(39, 'una'),
(45, 'Pampeaneario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuID` int(11) NOT NULL,
  `usuLogin` varchar(12) DEFAULT NULL,
  `usuClave` varchar(12) NOT NULL,
  `usuNombre` varchar(150) NOT NULL,
  `usuEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuID`, `usuLogin`, `usuClave`, `usuNombre`, `usuEmail`) VALUES
(1, 'admin', 'admin', 'Administrador de Sistema', 'admin@hell.com'),
(2, 'test', 'test', 'Usuario de prueba', 'test@hell.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`destID`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`regID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuID`),
  ADD UNIQUE KEY `usuLogin_UNIQUE` (`usuLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `destID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `regID` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
