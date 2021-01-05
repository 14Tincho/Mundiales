-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 16:15:24
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
-- Base de datos: `sport78`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `ARTCGO` int(6) NOT NULL,
  `ARTDES` char(60) NOT NULL,
  `ARTCAT` int(1) NOT NULL,
  `ARTSUB` int(2) NOT NULL,
  `ARTGEN` int(2) NOT NULL,
  `ARTMAR` int(3) NOT NULL,
  `ARTDIS` int(3) NOT NULL,
  `ARTEQU` int(3) NOT NULL,
  `ARTCOL` int(2) NOT NULL,
  `ARTTAL` int(3) NOT NULL,
  `ARTPRE` double NOT NULL,
  `ARTSTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`ARTCGO`, `ARTDES`, `ARTCAT`, `ARTSUB`, `ARTGEN`, `ARTMAR`, `ARTDIS`, `ARTEQU`, `ARTCOL`, `ARTTAL`, `ARTPRE`, `ARTSTO`) VALUES
(1, 'ZAPATILLA HOMBRE ADIDAS TENIS  BLANCO 40.5', 2, 27, 1, 3, 5, 0, 2, 47, 4000.5, 5),
(2, 'ZAPATILLA HOMBRE ADIDAS TENIS  BLANCO 41', 2, 27, 1, 3, 5, 0, 2, 49, 4000, 3),
(3, 'ZAPATILLA HOMBRE NIKE TENIS  NEGRO 40.5', 2, 27, 1, 38, 5, 0, 1, 47, 3500, 2),
(4, 'ZAPATILLA HOMBRE NIKE TENIS  GRIS 42', 2, 27, 1, 38, 5, 0, 3, 50, 3700, 4),
(5, 'BOTINES HOMBRE NIKE FUTBOL  VERDE 41.5', 2, 7, 1, 38, 4, 0, 11, 48, 4100, 10),
(6, 'BOTINES HOMBRE NIKE FUTBOL  AZUL 41.5', 2, 7, 1, 38, 4, 0, 7, 48, 4100, 5),
(7, 'BOTINES MUJER KAPPA FUTBOL  BLANCO 37', 2, 7, 2, 30, 4, 0, 2, 40, 4100, 2),
(8, 'REMERAS HOMBRE ADIDAS FUTBOL BOCA AZUL Y AMARILLO S', 1, 23, 1, 3, 4, 8, 7, 70, 5000, 15),
(9, 'BUZO MUJER REEBOK MODA  NEGRO M', 1, 8, 2, 46, 1, 0, 1, 72, 3400, 1),
(10, 'PELOTA Y BOCHAS UNISEX PUMA FUTBOL MILAN BORDO 5', 3, 18, 3, 45, 4, 19, 10, 70, 1700, 4),
(11, 'CARTERAS MUJER NIKE MODA  NEGRO', 3, 10, 2, 38, 1, 0, 1, 0, 2299, 5),
(12, 'REMERAS HOMBRE NIKE MODA  AZUL M', 1, 23, 1, 38, 1, 0, 7, 72, 3599, 9),
(13, 'ROPA INTERIOR HOMBRE UNDER ARMOUR TRAINING Y FITNESS  BLANCO', 1, 28, 1, 63, 2, 0, 2, 72, 2199, 6),
(14, 'CHALECOS MUJER TOPPER OUTDOOR  NEGRO S', 1, 29, 2, 60, 10, 0, 1, 70, 3228, 5),
(15, 'PROTECCIONES HOMBRE EVERLAST BOXEO  BLANCO L', 3, 19, 1, 18, 13, 0, 2, 73, 329, 40),
(16, 'SANDALIAS Y CHINELAS MUJER ADIDAS PLAYA  ROSA 38', 2, 25, 2, 3, 6, 0, 5, 42, 1899, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CATCGO` int(1) NOT NULL,
  `CATDES` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CATCGO`, `CATDES`) VALUES
(1, 'INDUMENTARIA'),
(2, 'CALZADO'),
(3, 'ACCESORIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `COLCGO` int(2) NOT NULL,
  `COLDES` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`COLCGO`, `COLDES`) VALUES
(1, 'NEGRO'),
(2, 'BLANCO'),
(3, 'GRIS OSCURO'),
(4, 'AZUL OSCURO'),
(5, 'ROSA'),
(6, 'GRIS CLARO'),
(7, 'AZUL'),
(8, 'ROJO'),
(9, 'CELESTE'),
(10, 'BORDO'),
(11, 'VERDE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE `disciplina` (
  `DISCGO` int(3) NOT NULL,
  `DISDES` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disciplina`
--

INSERT INTO `disciplina` (`DISCGO`, `DISDES`) VALUES
(1, 'TRAINING Y FITNESS'),
(2, 'MODA'),
(3, 'RUNNING'),
(4, 'FUTBOL'),
(5, 'TENIS'),
(6, 'PLAYA'),
(7, 'NATACION'),
(8, 'HOCKEY'),
(9, 'BASQUET'),
(10, 'OUTDOOR'),
(11, 'GOLF'),
(12, 'RUGBY'),
(13, 'BOXEO'),
(14, 'GIMNASIO'),
(15, 'VOLLEY'),
(16, 'PING PONG'),
(17, 'PADDLE'),
(18, 'ROLLER'),
(19, 'COLEGIAL'),
(20, 'HANDBALL'),
(21, 'CROSSFIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `EQUCGO` int(3) NOT NULL,
  `EQUDES` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`EQUCGO`, `EQUDES`) VALUES
(1, 'ROSARIO CENTRAL'),
(2, 'RIVER PLATE'),
(3, 'BARCELONA'),
(4, 'NEWELLS OLD BOYS'),
(5, 'AFA'),
(6, 'PARIS SAINT GERMAIN'),
(7, 'INDEPENDIENTE'),
(8, 'BOCA JUNIORS'),
(9, 'SAN LORENZO'),
(10, 'JUVENTUS'),
(11, 'REAL MADRID'),
(12, 'ARSENAL FC'),
(13, 'JAGUARES'),
(14, 'MANCHESTER UNITED'),
(15, 'PUMAS'),
(16, 'BASQUET'),
(17, 'MANCHESTER CITY'),
(18, 'BAYERN MUNCHEN'),
(19, 'AC MILAN'),
(20, 'LEONAS'),
(21, 'CHELSEA'),
(22, 'JOCKEY CLUB ROSARIO'),
(23, 'RUSIA'),
(24, 'ALEMANIA'),
(25, 'ESPA?A'),
(26, 'ITALIA'),
(27, 'ATLETICO DEL ROSARIO'),
(28, 'INTERNACIONALES RUGBY'),
(29, 'SUECIA'),
(30, 'BORUSSIA DORTMUND'),
(31, 'JOCKEY CLUB ROSARIO'),
(32, 'BELGICA'),
(33, 'ATLETICO DE MADRID');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `GENCGO` int(2) NOT NULL,
  `GENDES` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`GENCGO`, `GENDES`) VALUES
(1, 'HOMBRE'),
(2, 'MUJER'),
(3, 'UNISEX'),
(4, 'NIÑO'),
(5, 'NIÑA'),
(6, 'BEBÉ'),
(7, 'BEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `MARCGO` int(3) NOT NULL,
  `MARDES` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`MARCGO`, `MARDES`) VALUES
(1, '78'),
(2, 'ADDNICE'),
(3, 'ADIDAS'),
(4, 'ALPINE SKATE'),
(5, 'ARENA'),
(6, 'ASICS'),
(7, 'ATOMIK'),
(8, 'BABOLAT'),
(9, 'CARTAGO'),
(10, 'CLIN'),
(11, 'COLUMBIA SPORTWEAR'),
(12, 'CONVERSE'),
(13, 'CROCS'),
(14, 'CROSS CREEK'),
(15, 'DONNAY'),
(16, 'DRIBBLING'),
(17, 'DUX'),
(18, 'EVERLAST'),
(19, 'EXO'),
(20, 'FIDJI'),
(21, 'FILA'),
(22, 'FLASH'),
(23, 'GIANT DRAGON'),
(24, 'GILBERT'),
(25, 'GRAYS'),
(26, 'HAVAIANAS'),
(27, 'HEAD'),
(28, 'JOHN FOOS'),
(29, 'JOMA'),
(30, 'KAPPA'),
(31, 'KOSSOK'),
(32, 'LE COQ SPORTIF'),
(33, 'MALIK'),
(34, 'MIKASA'),
(35, 'MOLTEN'),
(36, 'NASSAU'),
(37, 'NEW BALANCE'),
(38, 'NIKE'),
(39, 'NOX'),
(40, 'OD'),
(41, 'PENN'),
(42, 'PONY'),
(43, 'PRINCE'),
(44, 'PROCER'),
(45, 'PUMA'),
(46, 'REEBOK'),
(47, 'REUSCH'),
(48, 'REVES'),
(49, 'RIDER'),
(50, 'RIP CURL'),
(51, 'RUSTY'),
(52, 'S.A.N.E.'),
(53, 'SALOMON'),
(54, 'SIUX'),
(55, 'SPEED'),
(56, 'SPEEDO'),
(57, 'STRIKER'),
(58, 'SUAVEFLEX'),
(59, 'TAYLOR MADE'),
(60, 'TOPPER'),
(61, 'UHLSPORT'),
(62, 'UMBRO'),
(63, 'UNDER ARMOUR'),
(64, 'VANS'),
(65, 'VGFC'),
(66, 'WILSON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `SUBCGO` int(2) NOT NULL,
  `SUBDES` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`SUBCGO`, `SUBDES`) VALUES
(1, 'ALPARGATAS Y PANCHAS'),
(2, 'BERMUDAS'),
(3, 'BILLETERAS Y FUNDAS'),
(4, 'BOLSOS'),
(5, 'BOTAS'),
(6, 'BOTINEROS'),
(7, 'BOTINES'),
(8, 'BUZOS Y SWEATERS'),
(9, 'CAMPERAS Y PILOTINES'),
(10, 'CARTERAS'),
(11, 'CHOMBAS'),
(12, 'CINTOS'),
(13, 'GORRAS Y GORROS'),
(14, 'MEDIAS'),
(15, 'MOCHILAS'),
(16, 'OJOTAS'),
(17, 'PANTALONES'),
(18, 'PELOTAS Y BOCHAS'),
(19, 'PROTECCIONES'),
(20, 'RAQUETAS Y PALETAS'),
(21, 'RAQUETEROS'),
(22, 'RELOJES'),
(23, 'REMERAS'),
(24, 'REPUESTOS'),
(25, 'SANDALIAS Y CHINELAS'),
(26, 'SUECOS Y PANTUFLAS'),
(27, 'ZAPATILLAS'),
(28, 'ROPA INTERIOR'),
(29, 'CHALECO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talle`
--

CREATE TABLE `talle` (
  `TALCGO` int(3) NOT NULL,
  `TALDES` varchar(10) NOT NULL,
  `TALCAT` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talle`
--

INSERT INTO `talle` (`TALCGO`, `TALDES`, `TALCAT`) VALUES
(1, '17', 2),
(2, '18', 2),
(3, '18.5', 2),
(4, '19.5', 2),
(5, '19', 2),
(6, '20', 2),
(7, '20.5', 2),
(8, '21.5', 2),
(9, '21', 2),
(10, '22', 2),
(11, '22.5', 2),
(12, '23', 2),
(13, '23.5', 2),
(14, '24', 2),
(15, '24.5', 2),
(16, '25.5', 2),
(17, '25', 2),
(18, '26', 2),
(19, '26.5', 2),
(20, '27', 2),
(21, '27.5', 2),
(22, '28', 2),
(23, '28.5', 2),
(24, '29', 2),
(25, '29.5', 2),
(26, '30', 2),
(27, '30.5', 2),
(28, '31', 2),
(29, '31.5', 2),
(30, '32', 2),
(31, '32.5', 2),
(32, '33.5', 2),
(33, '33', 2),
(34, '34', 2),
(35, '34.5', 2),
(36, '35', 2),
(37, '35.5', 2),
(38, '36', 2),
(39, '36.5', 2),
(40, '37', 2),
(41, '37.5', 2),
(42, '38', 2),
(43, '38.5', 2),
(44, '39', 2),
(45, '39.5', 2),
(46, '40', 2),
(47, '40.5', 2),
(48, '41.5', 2),
(49, '41', 2),
(50, '42', 2),
(51, '42.5', 2),
(52, '43', 2),
(53, '43.5', 2),
(54, '44', 2),
(55, '44.5', 2),
(56, '45.5', 2),
(57, '45', 2),
(58, '46.5', 2),
(59, '46', 2),
(60, '47.5', 2),
(61, '47', 2),
(62, '48', 2),
(63, '48.5', 2),
(64, 'XXS', 1),
(65, 'YM', 1),
(66, 'XS', 1),
(67, 'YS', 1),
(68, 'YXL', 1),
(69, 'YL', 1),
(70, 'S', 1),
(71, 'L/XL', 1),
(72, 'M', 1),
(73, 'L', 1),
(74, '0.5', 1),
(75, 'M/L', 1),
(76, 'XL', 1),
(77, 'XXL', 1),
(78, '1', 1),
(79, '2', 1),
(80, '2A', 1),
(81, '2XL', 1),
(82, '3.5', 1),
(83, '3A', 1),
(84, '3', 1),
(85, '3XL', 1),
(86, '4A', 1),
(87, '4', 1),
(88, '5', 1),
(89, '5A', 1),
(90, '6A/8A', 1),
(91, '6A/8', 1),
(92, '6.5', 1),
(93, '6', 1),
(94, '6A', 1),
(95, '7A', 1),
(96, '7', 1),
(97, '8A', 1),
(98, '8', 1),
(99, '9', 1),
(100, '9.5', 1),
(101, '9A', 1),
(102, '10A', 1),
(103, '10A/12', 1),
(104, '11', 1),
(105, '12A', 1),
(106, '12.5', 1),
(107, '13', 1),
(108, '14A/16', 1),
(109, '14', 1),
(110, '14A', 1),
(111, '15A', 1),
(112, '16A', 1),
(113, '18.5', 1),
(114, '18A', 1),
(115, '24.5', 1),
(116, '30', 1),
(117, '32', 1),
(118, '34', 1),
(119, '36', 1),
(120, '38', 1),
(121, '40', 1),
(122, '42', 1),
(123, '44', 1),
(124, '46', 1),
(125, '48', 1),
(126, '50', 1),
(127, '52', 1),
(128, '75', 1),
(129, '80', 1),
(130, '85', 1),
(131, '90', 1),
(132, '95', 1),
(133, '100', 1),
(134, 'SENIOR', 3),
(135, 'S/M', 3),
(136, 'SR', 3),
(137, 'XXS', 3),
(138, 'XS', 3),
(139, 'L/XL', 3),
(140, 'HOMBRE', 3),
(141, 'S', 3),
(142, 'NRO 7', 3),
(143, 'JUNIOR', 3),
(144, 'NRO 5', 3),
(145, 'GRIP 3', 3),
(146, 'MUJER', 3),
(147, 'L/XS', 3),
(148, 'MEN', 3),
(149, 'WOMENS', 3),
(150, 'M/L', 3),
(151, 'JR', 3),
(152, 'M', 3),
(153, 'GRIP 4', 3),
(154, 'LG', 3),
(155, 'GRIP 2', 3),
(156, 'L', 3),
(157, 'XL', 3),
(158, 'XXL', 3),
(159, 'SX/S', 3),
(160, '2XS', 3),
(161, '2', 3),
(162, '2XL', 3),
(163, '3', 3),
(164, '3XS', 3),
(165, '4', 3),
(166, '5', 3),
(167, '6', 3),
(168, '7', 3),
(169, '8', 3),
(170, '9', 3),
(171, '10', 3),
(172, '11', 3),
(173, '32', 3),
(174, '33', 3),
(175, '33-37', 3),
(176, '34', 3),
(177, '34-38', 3),
(178, '35-38', 3),
(179, '35', 3),
(180, '36-41', 3),
(181, '36', 3),
(182, '37-41', 3),
(183, '37', 3),
(184, '38-40', 3),
(185, '38-42', 3),
(186, '38', 3),
(187, '39', 3),
(188, '39-42', 3),
(189, '39-43', 3),
(190, '40-42', 3),
(191, '40', 3),
(192, '41', 3),
(193, '41-47', 3),
(194, '41-45', 3),
(195, '41-5', 3),
(196, '42', 3),
(197, '42-46', 3),
(198, '42-47', 3),
(199, '43-45', 3),
(200, '43', 3),
(201, '43-46', 3),
(202, '44', 3),
(203, '45', 3),
(204, '46', 3),
(205, '47', 3),
(206, 'NRO 5', 3),
(207, 'NRO 7', 3),
(208, '3', 3),
(209, '5', 3),
(210, '7', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`ARTCGO`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CATCGO`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`COLCGO`);

--
-- Indices de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`DISCGO`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`EQUCGO`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`GENCGO`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`MARCGO`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`SUBCGO`);

--
-- Indices de la tabla `talle`
--
ALTER TABLE `talle`
  ADD PRIMARY KEY (`TALCGO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CATCGO` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `COLCGO` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `DISCGO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `EQUCGO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `GENCGO` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `MARCGO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `SUBCGO` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `talle`
--
ALTER TABLE `talle`
  MODIFY `TALCGO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
