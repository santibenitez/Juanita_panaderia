-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2023 a las 21:52:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `tipo` varchar(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `tipo`, `stock`, `precio`) VALUES
(1, 'BudÃ­n', 'Todo el sabor de los frutos rojos de la Patagonia en este budÃ­n que se desarma en la boca.', 'PastelerÃ­a', 100, 10000),
(2, 'Torta cÃ­trica', 'Corta con tanta dulzura, y dale lugar a la acidez.', 'PastelerÃ­a', 50, 15000),
(3, 'Donas ', 'Las clÃ¡sicas de Homero, para vos. ', 'PastelerÃ­a', 300, 500),
(4, 'Lemon pie', 'El rey de los clÃ¡sicos. El que nunca falla. ', 'PastelerÃ­a', 50, 12000),
(5, 'Macarons ', 'Lo mejor de la pastelerÃ­a francesa, probas uno y no podes parar. ', 'PastelerÃ­a', 500, 900),
(6, 'Marquise de chocolate', 'Chocolate+ chocolate, simplemente chocolate.  ', 'PastelerÃ­a', 40, 19000),
(7, 'Muffins', 'PequeÃ±as dosis de cielo, digo, de sabor. ', 'PastelerÃ­a', 300, 450),
(8, 'Selva negra', 'La mÃ¡s pedida, apÃºrate, que vuelan.', 'PastelerÃ­a', 40, 17500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
