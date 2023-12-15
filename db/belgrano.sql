-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2020 a las 21:12:22
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `belgrano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `id` int(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`id`, `descripcion`, `fecha`) VALUES
(2, 'DEPILACIÓN DEFINITIVA SOPRANO ICE PLATINUM', '1'),
(3, 'CRIOLOPOLISIS', '4'),
(4, 'VENUS LEGACY', '30'),
(5, 'TESLAGEN', '4'),
(6, 'BRONCEADO ORGANICO', '1300'),
(7, 'OTROS', '1300');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(50) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `valor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `categoria`, `descripcion`, `valor`) VALUES
(2, 'depilacion', 'Axilas', 850334),
(3, 'depilacion', 'Cavado completo con tira', 90004),
(4, 'depilacion', 'Pirenas completas', 1600),
(5, 'depilacion', 'Media pierna', 110003),
(6, 'depilacion', 'Bozo y menton', 75000789),
(7, 'depilacion', 'Rosto completo para ellas/os', 90000),
(8, 'depilacion', 'Piernas completas para ellos/as', 180000),
(9, 'depilacion', 'Pecho y abdomen', 1800),
(10, 'depilacion', 'Espalda', 180000),
(11, 'criolipolisis', '1 Sesion', 5000),
(12, 'criolipolisis', '2 Sesiones', 850334),
(13, 'teslagen', '2 Sesiones', 18000),
(14, 'venus', '1 Sesion', 1300333);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
