-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2020 a las 01:02:13
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
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
