-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 10:58:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sivartrips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `num_DUI` varchar(10) NOT NULL,
  `NomyApell` varchar(50) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `cupos_comprados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `num_DUI`, `NomyApell`, `id_lugar`, `cupos_comprados`) VALUES
(1, '0000000000', 'Gisela Rivas', 2, 0),
(3, '123456-9', 'Alba L&oacute;pez', 2, 5),
(4, '123456-9', 'Carlos', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `cupos_disponibles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `Nombre`, `cupos_disponibles`) VALUES
(1, 'Lago de Coatepeque', 10),
(2, 'Suchitoto ', 10),
(3, 'Volcan de Santa Ana', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(11, 'Natanael', '123456'),
(12, 'Sharon', 'Sharon'),
(13, 'carla', '123456'),
(14, 'diego', '122'),
(15, 'Karla', 'Carlos'),
(16, 'Karina', 'Karina1'),
(17, 'Daniela', '123456'),
(18, 'camila', '1234'),
(19, 'camila', '1234'),
(20, 'mauricio', 'mauricio2005'),
(21, 'nicole', 'hector'),
(22, 'diego', '1406'),
(23, 'arturo', '123456'),
(24, 'carlos', '123456'),
(25, 'David', 'Davidayala'),
(26, 'Kathia', 'katty456'),
(27, 'Claudia', '123456'),
(28, 'mauricio', 'mauricio'),
(29, 'Santos', '123456'),
(30, 'Santos ', '123456'),
(31, 'alba', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userspersonal`
--

CREATE TABLE `userspersonal` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `userspersonal`
--

INSERT INTO `userspersonal` (`username`, `password`) VALUES
('Ana', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugares` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
