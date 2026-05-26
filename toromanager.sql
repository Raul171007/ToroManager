-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 26-05-2026 a las 17:09:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_toros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corridas`
--

CREATE TABLE `corridas` (
  `id_corrida` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_plaza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `corridas`
--

INSERT INTO `corridas` (`id_corrida`, `fecha`, `id_plaza`) VALUES
(1, '2024-05-22', 1),
(2, '2024-05-23', 1),
(3, '2024-05-24', 1),
(4, '2024-05-25', 1),
(5, '2024-04-28', 2),
(6, '2024-05-22', 1),
(7, '2024-05-23', 1),
(8, '2024-05-24', 1),
(9, '2024-05-25', 1),
(10, '2024-04-28', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganaderias`
--

CREATE TABLE `ganaderias` (
  `id_gan` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `propietario` varchar(100) DEFAULT NULL,
  `provincia` varchar(100) DEFAULT NULL,
  `fundacion` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ganaderias`
--

INSERT INTO `ganaderias` (`id_gan`, `nombre`, `propietario`, `provincia`, `fundacion`) VALUES
(1, 'Victorino Martín', 'Victorino Martín Andrés', 'Cáceres', '1950'),
(2, 'Núñez del Cuvillo', 'Fermín Núñez del Cuvillo', 'Cádiz', '1990'),
(3, 'El Torero', 'Pedro y Verónica Gutiérrez', 'Salamanca', '1980'),
(4, 'Puerto de San Lorenzo', 'Familia Hernández', 'Salamanca', '1975'),
(5, 'Conde de Mayalde', 'Familia Moreno', 'Salamanca', '1960');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazas`
--

CREATE TABLE `plazas` (
  `id_plaza` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `inauguracion` date DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `aforo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plazas`
--

INSERT INTO `plazas` (`id_plaza`, `nombre`, `inauguracion`, `ciudad`, `aforo`) VALUES
(1, 'Las Ventas', '1931-06-17', 'Madrid', 23798),
(2, 'Real Maestranza de Sevilla', '1761-05-01', 'Sevilla', 12500),
(3, 'Plaza de Pamplona', '1922-07-07', 'Pamplona', 19529),
(4, 'Plaza de Valencia', '1859-03-12', 'Valencia', 17000),
(5, 'Plaza de Bilbao', '1962-08-15', 'Bilbao', 14316);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `toreros`
--

CREATE TABLE `toreros` (
  `id_torero` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_artistico` varchar(100) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `toreros`
--

INSERT INTO `toreros` (`id_torero`, `nombre`, `nombre_artistico`, `fecha_nac`, `nacionalidad`) VALUES
(1, 'Andrés Roca Rey', 'Roca Rey', '1997-04-13', 'Peruana'),
(2, 'Alejandro Talavante', 'Talavante', '1986-03-07', 'Española'),
(3, 'Daniel Luque', 'Daniel Luque', '1992-01-17', 'Española'),
(4, 'Sebastián Castella', 'Castella', '1983-03-14', 'Francesa'),
(5, 'Juan Ortega', 'Juan Ortega', '1996-09-13', 'Española'),
(6, 'David Galván', 'David Galván', '1994-06-15', 'Española'),
(7, 'Álvaro Lorenzo', 'Álvaro Lorenzo', '1995-11-03', 'Española'),
(8, 'Tomás Rufo', 'Tomás Rufo', '1999-04-22', 'Española');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `toros`
--

CREATE TABLE `toros` (
  `id_toro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `peso` decimal(6,2) DEFAULT NULL,
  `capa` varchar(50) DEFAULT NULL,
  `ganaderia` varchar(100) DEFAULT NULL,
  `id_gan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `toros`
--

INSERT INTO `toros` (`id_toro`, `nombre`, `edad`, `peso`, `capa`, `ganaderia`, `id_gan`) VALUES
(1, 'Pastelero', 4, 522.00, 'Negro', 'El Torero', 3),
(2, 'Listón', 5, 498.50, 'Colorado', 'El Torero', 3),
(3, 'Presumido', 4, 511.00, 'Castaño', 'Puerto de San Lorenzo', 4),
(4, 'Viajero', 5, 534.00, 'Negro', 'Puerto de San Lorenzo', 4),
(5, 'Frontero', 4, 507.75, 'Jabonero', 'Conde de Mayalde', 5),
(6, 'Cañero', 5, 519.00, 'Berrendo', 'Conde de Mayalde', 5),
(7, 'Alborotao', 4, 488.00, 'Negro', 'Victorino Martín', 1),
(8, 'Bravio', 5, 541.00, 'Colorado', 'Victorino Martín', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `toros_corrida`
--

CREATE TABLE `toros_corrida` (
  `id_corrida` int(11) NOT NULL,
  `id_toro` int(11) NOT NULL,
  `id_torero` int(11) NOT NULL,
  `orden_salida` int(11) DEFAULT NULL,
  `trofeo` enum('1 Oreja','2 Orejas','Rabo','Indultado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `toros_corrida`
--

INSERT INTO `toros_corrida` (`id_corrida`, `id_toro`, `id_torero`, `orden_salida`, `trofeo`) VALUES
(1, 1, 6, 1, '2 Orejas'),
(1, 2, 7, 2, '1 Oreja'),
(2, 3, 2, 1, '2 Orejas'),
(2, 4, 5, 2, NULL),
(3, 5, 1, 1, '2 Orejas'),
(3, 6, 8, 2, '1 Oreja'),
(4, 7, 3, 1, NULL),
(4, 8, 4, 2, '1 Oreja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `email`, `rol`, `contrasena`) VALUES
(1, 'Raúl Gómez Vera', 'raul@gmail.com', 'Admin', '$2y$10$51NhGb0umQb9yj5NB5l2JOtzhMSKuERKj54OP8tRNE5aduJSiLuHC'),
(2, 'José María Pérez López', 'josemaria@gmail.com', 'Usuario', '$2y$10$1vmGzStfmk0P6oROOcRuruPSatJoAqyIUYgzSp32XaCVEIMFI1dlW'),
(3, 'Julian', 'julian@gmail.com', 'usuario', '$2y$10$KYbmDJJLfTDWwYOFJUYwyu3gqHJu8wA72r65aD7qtV7wn4X6hU3O.'),
(4, 'demo', 'demo@toromanager.com', 'usuario', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `corridas`
--
ALTER TABLE `corridas`
  ADD PRIMARY KEY (`id_corrida`),
  ADD KEY `id_plaza` (`id_plaza`);

--
-- Indices de la tabla `ganaderias`
--
ALTER TABLE `ganaderias`
  ADD PRIMARY KEY (`id_gan`);

--
-- Indices de la tabla `plazas`
--
ALTER TABLE `plazas`
  ADD PRIMARY KEY (`id_plaza`);

--
-- Indices de la tabla `toreros`
--
ALTER TABLE `toreros`
  ADD PRIMARY KEY (`id_torero`);

--
-- Indices de la tabla `toros`
--
ALTER TABLE `toros`
  ADD PRIMARY KEY (`id_toro`),
  ADD KEY `id_gan` (`id_gan`);

--
-- Indices de la tabla `toros_corrida`
--
ALTER TABLE `toros_corrida`
  ADD PRIMARY KEY (`id_corrida`,`id_toro`),
  ADD KEY `id_toro` (`id_toro`),
  ADD KEY `id_torero` (`id_torero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `corridas`
--
ALTER TABLE `corridas`
  MODIFY `id_corrida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ganaderias`
--
ALTER TABLE `ganaderias`
  MODIFY `id_gan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `plazas`
--
ALTER TABLE `plazas`
  MODIFY `id_plaza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `toreros`
--
ALTER TABLE `toreros`
  MODIFY `id_torero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `toros`
--
ALTER TABLE `toros`
  MODIFY `id_toro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corridas`
--
ALTER TABLE `corridas`
  ADD CONSTRAINT `corridas_ibfk_1` FOREIGN KEY (`id_plaza`) REFERENCES `plazas` (`id_plaza`);

--
-- Filtros para la tabla `toros`
--
ALTER TABLE `toros`
  ADD CONSTRAINT `toros_ibfk_1` FOREIGN KEY (`id_gan`) REFERENCES `ganaderias` (`id_gan`);

--
-- Filtros para la tabla `toros_corrida`
--
ALTER TABLE `toros_corrida`
  ADD CONSTRAINT `toros_corrida_ibfk_1` FOREIGN KEY (`id_corrida`) REFERENCES `corridas` (`id_corrida`),
  ADD CONSTRAINT `toros_corrida_ibfk_2` FOREIGN KEY (`id_toro`) REFERENCES `toros` (`id_toro`),
  ADD CONSTRAINT `toros_corrida_ibfk_3` FOREIGN KEY (`id_torero`) REFERENCES `toreros` (`id_torero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
