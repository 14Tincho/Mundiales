-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 16:14:47
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
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `articuloID` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `PRECIO` double DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`articuloID`, `NOMBRE`, `PRECIO`, `STOCK`) VALUES
(1, 'martillo', 100, 23),
(2, 'clavo', 10, 20),
(3, 'tornillo', 15, 55),
(4, 'llave inglesa', 150, 95),
(5, 'taladro', 300, 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `clienteID` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `CUIT` char(16) DEFAULT NULL,
  `DIRECCION` varchar(50) DEFAULT NULL,
  `COMENTARIO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`clienteID`, `NOMBRE`, `APELLIDO`, `CUIT`, `DIRECCION`, `COMENTARIO`) VALUES
(1, 'Elva', 'Ginon', '3044602958', 'rioja 2000', 'de rucula'),
(2, 'Tuvi', 'Eja', '3054602958', 'cordoba 100', 'de rutia'),
(3, 'Esteban', 'Quito', '3044682958', 'avellaneda 157bis', 're picantovich'),
(4, 'Lola', 'Meras', '3044602988', 'pellegrini 120', 'sapeee'),
(5, 'Elber', 'Ganegra', '3042202958', 'presidente roca 400', 'doooou');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `LETRA` char(1) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `CLIENTEID` int(11) DEFAULT NULL,
  `ARTICULOID` int(11) DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  `fECHA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`LETRA`, `NUMERO`, `CLIENTEID`, `ARTICULOID`, `MONTO`, `fECHA`) VALUES
('A', 1, 1, 1, 22, '220'),
('B', 2, 2, 2, 23, '100'),
('C', 3, 3, 3, 24, '5000'),
('D', 4, 4, 4, 25, '36000'),
('F', 5, 5, 5, 28, '20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`articuloID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clienteID`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`LETRA`,`NUMERO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `articuloID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `clienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
